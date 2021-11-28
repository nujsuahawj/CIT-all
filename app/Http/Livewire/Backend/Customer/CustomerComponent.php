<?php

namespace App\Http\Livewire\Backend\Customer;
use App\Models\CustomerTransition;
use Livewire\Component;

class CustomerComponent extends Component
{
    public $selectData=true;
    public $createData=false;
    public $updateData=false;

    public $customer_id, $product_id, $note, $start_date, $end_date, $picture;
    public $status=1;

    public function render()
    {
        return view('livewire.backend.customer.customer-component')->layout('layouts.backend.app');
    }
    public function showFrom()
    {
        $this->createData = true;
        $this->selectData = false;
    }

    public function resetFied(){
        $this->customer_id="";
        $this->product_id="";
        $this->note="";
        $this->start_date="";
        $this->end_date="";
        $this->status="";
        $this->picture="";
    }

    public function create(){
        $customer_transition= new CustomerTransition();
        $this->validate([
            'customer_id'=>'required',
            'product_id'=>'required',
            'note'=>'required',
            'start_date'=>'required',
            'end_date'=>'required',
            'picture'=>'required',
        ]);
        $customer_transition->customer_id=$this->customer_id;
        $customer_transition->product_id=$this->product_id;
        $customer_transition->note=$this->note;
        $customer_transition->start_date=$this->start_date;
        $customer_transition->end_date=$this->end_date;
        $customer_transition->status=$this->status;
        $customer_transition->picture=$this->picture; 

        $result = $customer_transition->save();
        $this ->resetFied();
        $this->selectData = true;
        $this->createData = false;
    }
    

}
