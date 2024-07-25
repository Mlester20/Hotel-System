<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RoomType;
use App\Models\Roomtypeimage;
use App\Models\Service;
use App\Models\Testimonial;

class HomeController extends Controller
{
    function home(){
        $services = Service::all();
        $roomTypes = RoomType::all();
        $testimonials = Testimonial::all();
        return View('home', ['roomTypes'=>$roomTypes, 'services'=>$services, 'testimonials'=>$testimonials]);
    }

    function service_detail(Request $request, $id){
        $service = Service::find($id);
        return View('service_detail', ['service'=>$service]);
    }

    //add testimonials
    function add_testimonial(){
        return View('add_testimonial');
    }

    //save testimonial
    function save_testimonial(Request $request){

        $customerId = session('data')[0]->id;
        $data = new Testimonial;
        $data->customer_id = $customerId;
        $data->testi_cont = $request->testi_cont;
        $data->save();

        

        return redirect('customer/add_testimonial')->with('success','Testimonial has been added');
    }

}
