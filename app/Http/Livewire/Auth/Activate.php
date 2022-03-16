<?php

namespace App\Http\Livewire\Auth;

use App\Models\User;
use App\Models\Member;
use Livewire\Component;
use Illuminate\Support\Facades\Hash;

class Activate extends Component
{

    public $firstName = '';
    public $lastName = '';
    public $gender = '';
    public $city = '';
    public $mobile = '';
    public $birthDate = '';
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
            'gender' => 'required',
            'city' => 'required',
            'cardNumber' => 'required|numeric|digit:6',
            'mobile' => 'required|numeric|unique:users',
            'birthDate' => 'required',
            'email' => 'required|email|unique:users',

        ]);

        //Generate cardNumber if none
        if ($this->cardNumber == '') {
            $this->cardNumber = $this->generateCardNumber();
        }

        User::create([

            'firstname' => $this->firstName,
            'lastname' => $this->lastName,
            'mobile' => $this->mobile,
            'cardNumber' => $this->cardNumber,
            'email' => $this->email,
            'password' => Hash::make('123456'),

        ]);

        Member::create([

            'firstName' => $this->firstName,
            'lastName' => $this->lastName,
            'gender' => $this->gender,
            'city' => $this->city,
            'mobileNumber' => $this->mobile,
            'birthDate' => $this->birthDate,
            'birthDate' => date('Y-m-d', strtotime($this->birthDate)),
            'cardNumber' => $this->cardNumber,
            'emailAddress' => $this->email,
            'pinNumber' => Hash::make('123456'),
            'membertype' => 0,

           

        ]);

        $this->emitSelf('notify-saved');
        $this->reset();

    
    }

    private function generateCardNumber()
    {
      $member = Member::where('cardNumber', '>=', 1000000)->orderBy('memberId', 'DESC')->first();
      $cardnumber = $member->cardNumber + 1;
      return $cardnumber;
    }

    public function render()
    {
        return view('livewire.auth.activate')
            ->layout('layouts.app');
    }
}
