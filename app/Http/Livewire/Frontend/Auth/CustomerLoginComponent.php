<?php

namespace App\Http\Livewire\Frontend\Auth;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class CustomerLoginComponent extends Component
{
    public $phone, $password;

    public function render()
    {
        return view('livewire.frontend.auth.customer-login-component')
        ->layout('layouts.frontend.base-frontend');
    }

    public function signIn()
    {
        $this->validate([
            'phone'=>'required',
            'password'=>'required'
        ],[
            'phone.required'=>'ກະລຸນາໃສ່ຊື່ຜູ້ໃຊ້ກ່ອນ!',
            'password.required'=>'ກະລຸນາໃສ່ລະຫັດຜ່ານກ່ອນ!'
        ]);
        if(Auth::attempt([
            'phone'=>$this->phone,
            'password'=>$this->password
        ]))
        {
            return redirect(route('customer.dashboard'));
        }else
        {
            session()->flash('message', 'ຂໍ້ມູນເຂົ້າລະບົບ ບໍ່ຖືກຕ້ອງ!ກະລຸນາລອງໃໝ່');
        }
    }

    public function signOut()
    {
        Auth::logout();
        return redirect()->route('home');
    }
}
