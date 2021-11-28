<?php

namespace App\Http\Livewire\Backend\Customer;
use App\Models\CustomerTransition;
use Livewire\Component;
use Livewire\WithPagination;

class CustomerComponent extends Component
{
    public $selectData=true;
    public $createData=false;
    public $updateData=false;

    public $customer_id, $product_id, $note, $start_date, $end_date, $status=1, $picture=000;
    public $ids, $ed_customer_id, $ed_product_id, $ed_note, $ed_start_date, $ed_end_date, $ed_status, $ed_picture=000;

    use WithPagination;
    public function render()
    {
        $customer_transition =CustomerTransition::orderBy('id', 'DESC')->paginate(5);
        return view('livewire.backend.customer.customer-component', ['customer_transition'=>$customer_transition])->layout('layouts.backend.app');
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
        // edit
        $this->ids="";
        $this->ed_customer_id="";
        $this->ed_product_id="";
        $this->ed_note="";
        $this->ed_start_date="";
        $this->ed_end_date="";
        $this->ed_status="";
        $this->ed_picture="";
    }

    public function create(){
        $customer_transition= new CustomerTransition();
        $this->validate([
            'customer_id'=>'required',
            'product_id'=>'required',
            'note'=>'required',
            'start_date'=>'required',
            'end_date'=>'required',
            'status'=>'required',
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

    // edi funtion
    public function edit($id)
    {
        $this->selectData = false;
        $this->updateData = true;

        $customer_transition = CustomerTransition::findOrFail($id);
        $this->ids = $customer_transition->id;
        $this->ed_customer_id = $customer_transition->customer_id;
        $this->ed_product_id = $customer_transition->product_id;
        $this->ed_note = $customer_transition->note;
        $this->ed_start_date = $customer_transition->start_date;
        $this->ed_end_date = $customer_transition->end_date;
        $this->ed_status = $customer_transition->status;
        $this->ed_picture = $customer_transition->picture;
        
    }

    // update funtion
    public function update($id)
    {
        $customer_transition = CustomerTransition::findOrFail($id);
        $this->validate([
            'ed_customer_id' => 'required',
            'ed_product_id' => 'required',
            'ed_note' => 'required',
            'ed_start_date' => 'required',
            'ed_end_date' => 'required',
            'ed_status' => 'required'
        ]);

        $customer_transition->customer_id = $this->ed_customer_id;
        $customer_transition->product_id = $this->ed_product_id;
        $customer_transition->note = $this->ed_note;
        $customer_transition->start_date = $this->ed_start_date;
        $customer_transition->end_date = $this->ed_end_date;
        $customer_transition->status = $this->ed_status;
        
        $result = $customer_transition->save();
        $this ->resetFied();
        $this->selectData = true;
        $this->createData = false;
        $this->updateData=false;
    }

    // delete data
    public function delete($id)
    {
        $customer_transition = CustomerTransition::findOrFail($id);
        $result = $customer_transition->delete();
    }
    

}
