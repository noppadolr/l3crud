<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Layout;
use App\Models\Customer;
use Livewire\Attributes\Title;

class CreateCustomer extends Component
{

    #[Title("Create Customer")]
    // #[Rule('required')]
    public $name='';

    // #[Rule('required|unique|email',as:'Email Address')]
    public $email='';
    public $phone='';

    public function render()
    {
        return view('livewire.create-customer');
    }//End Method

    public function save(){
        // dd($this->all());
        $validated = $this->validate([
            'name'=> 'required|max:50',
            'email'=>'required|email|unique:customers',
            'phone'=>'required|max:10'
        ]);
        Customer::create($validated);
        $this->reset();
        $this->resetValidation();

    }//end mehtod


}
