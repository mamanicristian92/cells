<?php

namespace App\Livewire\Users;

use Livewire\Component;
use App\Models\User;
use Livewire\WithPagination;

class ShowUsers extends Component
{
    use WithPagination;
    public $search='';

    public function render()
    {
        //$users = User::all();
        $users=User::where("name","like","%".$this->search."%");
        return view('livewire.users.show-users',[
            'users'=>$users->paginate(10)
        ]);
    }

    public function create() {
        return redirect()->route('create-user');
    }

    public function edit($user_id) {
        return redirect('users/edit/'.$user_id);
    }
}
