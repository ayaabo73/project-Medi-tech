<?php

namespace App\Livewire\Admin;

use Livewire\Component;

class Sections extends Component
{
    public function render()
    {
        // $sections= post::with('user','category')->orderBy('id','desc')->paginate(5);
        // return view('livewire.posts',['posts'=>$posts]);
        return view('livewire.admin.sections');
    }
}
