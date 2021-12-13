<?php

namespace App\Http\Livewire\Backend\Customer;
use App\Models\CustomerTransition;
use App\Models\Product;
use App\Models\Customer;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\WithFileUploads;
use DB;

class CustomerComponent extends Component
{
    public $selectData=true;
    public $createData=false;
    public $updateData=false;
    public $showData=false;

    public $customer_id, $product_id, $note, $start_date, $end_date, $status=1, $picture;
    public $ids, $ed_customer_id, $ed_product_id, $ed_note, $ed_start_date, $ed_end_date, $ed_status, $ed_picture;
    public $vid, $vcustomer_id, $vproduct_id, $vnote, $vstart_date, $vend_date, $vstatus, $vpicture;

    use WithFileUploads;
    use WithPagination;
    public function render()
    {
        $customers = DB::connection('mysql2')->table('customers')->get();
        $products = DB::connection('mysql2')->table('products')->get();
        // $products =Product::orderBy('id', 'DESC')->get();
        // $customers =Customer::orderBy('id', 'DESC')->get();
        $customer_transition =CustomerTransition::orderBy('id', 'DESC')->get();
        // $customer_transition =CustomerTransition::orderBy('id', 'DESC')->paginate(5);
        return view('livewire.backend.customer.customer-component', ['customer_transition'=>$customer_transition,'products'=>$products,'customers'=>$customers])->layout('layouts.backend.app');
    }
    public function showFrom()
    {
        $this->createData = true;
        $this->selectData = false;
        $this->showData = false;
    }
    public function back(){
        return  redirect()->to('/admincustomer');
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

        
        
        if(!empty($this->picture)){
            $this->picture->store('pictures/ct');
            // dd($this->customer_id);
            $customer_transition->customer_id=$this->customer_id;
            $customer_transition->product_id=$this->product_id;
            $customer_transition->note=$this->note;
            $customer_transition->start_date=$this->start_date;
            $customer_transition->end_date=$this->end_date;
            $customer_transition->status=$this->status;
            $customer_transition->picture=$this->picture->hashName();
        }else{
            $customer_transition->customer_id=$this->customer_id;
            $customer_transition->product_id=$this->product_id;
            $customer_transition->note=$this->note;
            $customer_transition->start_date=$this->start_date;
            $customer_transition->end_date=$this->end_date;
            $customer_transition->status=$this->status;
        }

        $result = $customer_transition->save();
        session()->flash('message', 'ເພີ່ມລູກຄ້າໃໝ່ສຳແລັດແລ້ວ');
        return  redirect()->to('/admincustomer');
        $this ->resetFied();
        $this->selectData = true;
        $this->createData = false;
        $this->showData = false;
    }

    // edi funtion
    public function edit($id)
    {
        $this->selectData = false;
        $this->showData = false;
        $this->updateData = true;

        $customer_transition = CustomerTransition::findOrFail($id);
        $this->ids = $customer_transition->id;
        $this->ed_customer_id = $customer_transition->customer_id;
        $this->ed_product_id = $customer_transition->product_id;
        $this->ed_note = $customer_transition->note;
        $this->ed_start_date = $customer_transition->start_date;
        $this->ed_end_date = $customer_transition->end_date;
        $this->ed_status = $customer_transition->status;
        // $this->ed_picture = $customer_transition->picture;
        
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
            'ed_status'=>'required',
        ]);
        if(!empty($this->ed_picture)){
            $this->ed_picture->store('pictures/ct');

            $customer_transition->customer_id = $this->ed_customer_id;
            $customer_transition->product_id = $this->ed_product_id;
            $customer_transition->note = $this->ed_note;
            $customer_transition->start_date = $this->ed_start_date;
            $customer_transition->end_date = $this->ed_end_date;
            $customer_transition->status = $this->ed_status;
            $customer_transition->picture= $this->ed_picture->hashName();
        }else{
            $customer_transition->customer_id = $this->ed_customer_id;
            $customer_transition->product_id = $this->ed_product_id;
            $customer_transition->note = $this->ed_note;
            $customer_transition->start_date = $this->ed_start_date;
            $customer_transition->end_date = $this->ed_end_date;
            $customer_transition->status = $this->ed_status;
        }
            

        $result = $customer_transition->save();
        session()->flash('message', 'ອັບແດດລູຄ້າສຳແລັດແລ້ວ');
        return redirect()->to('/admincustomer');
        $this ->resetFied();
        $this->selectData = true;
        $this->createData = false;
        $this->updateData=false;
        $this->showData  = false;
    }

    // delete data
    public function delete($id)
    {
        $customer_transition = CustomerTransition::findOrFail($id);
        $result = $customer_transition->delete();
        session()->flash('message', 'ລົບລູກຄ້າແລັດແລ້ວ');
        return redirect()->to('/admincustomer');
    }

    // show default view
    public function show($id)
    {
        $this->selectData = false;
        $this->createData = false;
        $this->updateData=false;
        $this->showData  = true;

        $vct = CustomerTransition::findOrFail($id);
        // dd($vct->product_id);
        $this->vid = $vct->id;
        $this->vcustomer_id = $vct->customer_id;
        $this->vproduct_id = $vct->product_id;
        $this->vnote = $vct->note;
        $this->vstart_date = $vct->start_date;
        $this->vend_date = $vct->end_date;
        $this->vstatus = $vct->status;
        $this->vpicture = $vct->picture;
        // dd($this->vpicture);
        return view('livewire.backend.customer.customer-component', compact('vct'));
    }
    

}
