<?php

namespace App\Livewire\Users;

use Livewire\Component;
use App\Models\User;

class ShowUsers extends Component
{
    public $users;
    public function render()
    {
        $this->users = User::all();
        return view('livewire.users.show-users');
    }
}
