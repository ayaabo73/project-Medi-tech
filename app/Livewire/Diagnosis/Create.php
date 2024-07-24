<?php

namespace App\Livewire\Diagnosis;

use GuzzleHttp\Client;
use GuzzleHttp\Cookie\CookieJar;
use GuzzleHttp\Cookie\SessionCookieJar;
use GuzzleHttp\Cookie\SetCookie;
use Illuminate\Support\Collection;
use Livewire\Component;

class Create extends Component
{
    public $body = null;
    public Collection $messages;
    public array $cookieJar;

    public function mount()
    {
        $this->cookieJar = [];
        $this->messages = collect();
        $this->addBotMessage("Hello, my name is RoboDoc, and I will be happy to help diagnose your disease.");
        $this->addBotMessage("To start, we need to ask some basic questions, tap OK to continue !");
    }

    public function sendMessage()
    {
        $cookieJar = CookieJar::fromArray($this->cookieJar, '127.0.0.1');
        $this->addClientMessage($this->body);
        $client = new Client(['cookies' => $cookieJar]);
        $parameters = http_build_query(['msg' => $this->body]);
        $response = $client->get("http://127.0.0.1:5000/get?{$parameters}");
        if ($response->hasHeader('set-cookie')) {
            $newCookie = $response->getHeader('set-cookie');
            $session = strstr($newCookie[0], ';', true);
            $value = substr(strstr($session,'='), 1);
            $this->cookieJar['session'] = $value;
        }
        $this->body = "";
        $this->dispatch('clear-message');
        $this->addBotMessage($response->getBody()->getContents());
    }

    public function addBotMessage(string $message)
    {
        $this->messages->push([
            'content' => $message,
            'styles' => "media",
            'time' => now()
        ]);
    }

    public function addClientMessage(string $message)
    {
        $this->messages->push([
            'content' => $message,
            'styles' => "media flex-row-reverse",
            'time' => now()
        ]);
    }

    public function render()
    {
        return view('livewire.diagnosis.create');
    }
}
