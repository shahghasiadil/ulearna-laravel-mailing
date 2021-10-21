<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Notifications\InvoicePaid;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Notification;

class UserController extends Controller
{
    public function store(){
        $user = new User();
        $user->name = "Ahmad";
        $user->email = "Ahmad@gmsddjaild.com";
        $user->password = Hash::make("ddd");
        $user->save();
        // $user->notify(new InvoicePaid());
      
    }
}
