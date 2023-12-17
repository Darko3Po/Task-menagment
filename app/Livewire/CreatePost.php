<?php

namespace App\Livewire;

use Livewire\Component;

class CreatePost extends Component
{
    public function render()
    {
        return view('livewire.create-post');
    }

    public function save()
    {
        dd(['a','b','c']);
    }
}
