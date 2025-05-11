<?php

namespace App\Livewire;
use App\Models\Person;
use Livewire\Attributes\On;
use Flux;

use Livewire\Component;

class PersonAdmin extends Component
{
    public $persons, $person_id;

    public function mount()
    {
        $this->persons = Person::all();
    }

    public function render()
    {
        return view('livewire.person-admin');
    }

    #[On("reloadPerson")]

    public function reloadPerson()
    {
        $this->persons = Person::all();
    }

    public function edit($id)
    {
        // $this->dispatch(event: "editPerson",$id);
        $this->dispatch('editPerson', $id);
    }

    public function delete($id)
    {
        $this->person_id = $id;
        Flux::modal("delete-person")->show();
    }

    public function destroy()
    {
        Person::find($this->person_id)->delete();
        $this->reloadPerson();
        Flux::modal("delete-person")->close();
    }

}
