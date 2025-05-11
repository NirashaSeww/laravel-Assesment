<?php

namespace App\Livewire;
use Livewire\Attributes\On;
use Flux;
use App\Models\Person;
use Livewire\Component;

class EditPerson extends Component
{
    public $person_id, $fullname, $nic, $dob, $gender, $address, $contact, $email;

    public function render()
    {
        return view('livewire.edit-person');
    }

    #[On("editPerson")]

    public function editPerson($id)
    {
        $person = Person::find($id);
        $this->person_id = $id;
        $this->fullname = $person->fullname;
        $this->nic = $person->nic;
        $this->dob = $person->dob;
        $this->gender = $person->gender;
        $this->address = $person->address;
        $this->contact = $person->contact;
        $this->email = $person->email;

        Flux::modal("edit-person")->show();
    }

    public function update()
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

        $person = Person::find($this->person_id);
        $person->fullname = $this->fullname;
        $person->nic = $this->nic;
        $person->dob = $this->dob;
        $person->gender = $this->gender;
        $person->address = $this->address;
        $person->contact = $this->contact;
        $person->email = $this->email;

        $person->save();

        Flux::modal("edit-person")->close();

        $this->dispatch( event: "reloadPerson");
    }
}
