<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class PageController extends Controller
{
    //about us page

    public function about_us(){
        return View("about_us");
    }

    public function contact_us(){
        return View("contact_us");
    }

    public function save_contact_us(Request $request){
        $request->validate([
            "full_name"=> "required",
            "email"=> "required",
            "subject"=> "required",
            "message"=> "required",
        ]);



    }

}
