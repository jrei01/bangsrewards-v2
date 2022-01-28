<?php

namespace App\Http\Livewire\Auth;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Hash;

class Activate extends Component
{

    public $firstName = '';
    public $lastName = '';
    // public $gender = '';
    // public $city = '';
    public $mobile = '';
    // public $birthDate = '';
    public $cardNumber = '';
    public $email = '';
    
    
    public function updatedEmail()
    {

        $this->validate(['email' => 'unique:users']);

    }


    public function activate ()
    {

        $data = $this->validate([

            'firstName' => 'required',
            'lastName' => 'required',
            'mobile' => 'required|numeric',
            'email' => 'required|email|unique:users',

        ]);

        User::create([

            'firstname' => $this->firstName,
            'lastname' => $this->lastName,
            // 'gender' => $this->gender,
            // 'city' => $this->city,
            'mobile' => $this->mobile,
            // 'birthDate' => $this->birthDate,
            'cardNumber' => $this->cardNumber,
            'email' => $this->email,
            'password' => Hash::make('123456'),

        ]);

        return redirect('/');
        
    }

    public function render()
    {
        return view('livewire.auth.activate')
            ->layout('layouts.app');
    }
}
