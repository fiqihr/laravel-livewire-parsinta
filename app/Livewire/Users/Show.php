<?php

namespace App\Livewire\Users;

use App\Models\User;
use Livewire\Component;

class Show extends Component
{
    public \App\Models\User $user;
    public function render()
    {
        return view('livewire.users.show')->title($this->user->name);
    }
}