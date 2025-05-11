<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Person;
use Flux;

class CreatePerson extends Component
{

    public $fullname, $nic, $dob, $gender, $address, $contact, $email;

    public function render()
    {
        return view('livewire.create-person');
    }

    public function submit() 
    {
        $this->validate([
            "fullname" => "required",
            "nic"=>"required",
            "dob"=>"required",
            "gender"=>"required",
            "address"=>"required",
            "contact"=>"required",
            "email"=>"required",
        ]);

        // dd($this->gender);

        Person::create([
            'fullname' => $this->fullname,
            'nic'      => $this->nic,
            'dob'      => $this->dob,
            'gender'   => $this->gender,
            'address'  => $this->address,
            'contact'  => $this->contact,
            'email'    => $this->email,
        ]);

        $this->resetForm();

        Flux::modal("create-person")->close();

        $this->dispatch( event: "reloadPerson");
        
    }
    public function resetForm()
    {
        $this->fullname ="";
        $this->nic ="";
        $this->dob ="";
        $this->gendr ="";
        $this->address ="";
        $this->contact ="";
        $this->email ="";
    }
}