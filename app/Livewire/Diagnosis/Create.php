<?php

namespace App\Livewire\Diagnosis;

use GuzzleHttp\Client;
use GuzzleHttp\Cookie\CookieJar;
use Illuminate\Support\Collection;
use Livewire\Component;

class Create extends Component
{
    public $body = null;
    public Collection $messages;

    public function mount()
    {
        $this->messages = collect();
        $this->addBotMessage("Hello, my name is RoboDoc, and I will be happy to help diagnose your disease.");
        $this->addBotMessage("To start, we need to ask some basic questions, tap OK to continue !");
    }

    public function sendMessage()
    {
        $this->addClientMessage($this->body);
        $cookies = CookieJar::fromArray($_COOKIE, env('APP_URL'));
        $client = new Client(['cookies' => $cookies]);
        $parameters = http_build_query(['msg' => $this->body]);
        $response = $client->get("http://127.0.0.1:5000/get?{$parameters}");
        $this->body = "";
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
