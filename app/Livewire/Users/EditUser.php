<?php

namespace App\Livewire\Users;

use Livewire\Component;
use App\Models\UserType;
use App\Models\Country;
use App\Models\State;
use App\Models\User;
use App\Models\DocumentType;
use Illuminate\Support\Facades\Hash;

class EditUser extends Component
{
    public $user_types=[];
    public $user;
    public $countries;
    public $states;
    public $doc_types;

    public $name=null;
    public $email=null;
    public $password=null;
    public $user_type_id=null;
    public $doc_type_id=null;
    public $doc_number=null;
    public $country_id=null;
    public $state_id=null;
    public $city=null;
    public $phone_number=null;
    public $address=null;
    public $birthday=null;
    public $enabled=true;

    public function mount($user_id) {
        $this->countries=Country::all();
        $this->states=State::all();
        $this->user_types=UserType::all();
        $this->doc_types=DocumentType::all();
        $this->user=User::findOrFail($user_id);
        $this->name=$this->user->name;
        $this->email=$this->user->email;
        $this->password=$this->user->password;
        $this->user_type_id=$this->user->user_type_id;
        $this->doc_type=$this->user->doc_type;
        $this->doc_number=$this->user->doc_number;
        $this->country_id=$this->user->country_id;
        $this->state_id=$this->user->state_id;
        $this->city=$this->user->city;
        $this->phone_number=$this->user->phone_number;
        $this->address=$this->user->address;
        $this->birthday=$this->user->birthday;
    }

    public function render()
    {
        return view('livewire.users.edit-user');
    }

    public function resetFields() {
        $this->name="";
        $this->email="";
        $this->password="";
        $this->user_type_id=null;
        $this->doc_type=null;
        $this->doc_number=null;
        $this->country_id=null;
        $this->state_id=null;
        $this->city=null;
        $this->phone_number=null;
        $this->address=null;
        $this->birthday=null;
    }

    public function update()
    {
        //$this->validate();
        $this->user->name=$this->name;
        $this->user->email=$this->email;
        $this->user->password=Hash::make($this->password);
        $this->user->user_type_id=$this->user_type_id;
        $this->user->doc_type_id=$this->doc_type_id;
        $this->user->doc_number=$this->doc_number;
        $this->user->country_id=$this->country_id;
        $this->user->state_id=$this->state_id;
        $this->user->city=$this->city;
        $this->user->address=$this->address;
        $this->user->phone_number=$this->phone_number;
        $this->user->save();
        return redirect('/users');
    }
    public function cancel() {
        return redirect()->route("users");
    }
}
