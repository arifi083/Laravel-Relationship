<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Address;
use App\Models\User;

class AddressController extends Controller
{
    public function postStore(){
        $address = [
            [
                 "user_id" => 1,
                 "country" => 'bangladesh'
            ],
             [
                 "user_id" => 2,
                 "country" => 'india'
            ],
            [
                "user_id" => 2,
                "country" => 'pakistan'
           ],
           
            
        ];
        Address::insert($address);
        return "address are created successfully";
    }

   //one to one
    public function address_view(){
        //$address = User::find(1)->addresss;
        //dd($address);
        $users = User::with('addresss')->get();
        //dd($users);
        return view('users.index',compact('users'));
    }

    public function user_view(){
        $address = Address::with('user')->get();
        return view('address.index',compact('address'));
    }



   //one to many
   public function user(){
   
    $useres = User::with('addressses')->get();
    //dd($users);
    return view('user.index',compact('useres'));
}


}
