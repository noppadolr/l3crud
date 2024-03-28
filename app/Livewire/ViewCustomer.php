<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Customer;

class ViewCustomer extends Component
{
    public $customer=[];

    public function mount(int $id){
        $customer = Customer::find($id);
        $this->customer=$customer;
    }//end method

    public function render()
    {
        return view('livewire.view-customer');
    }
}
