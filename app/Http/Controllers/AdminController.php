<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Booking;
use Cookie;
use App\Models\Testimonial;

class AdminController extends Controller
{
    //login function

    function login(){
        return view('login');
    }

    //check login
    function check_login(Request $request){
        $request->validate([
            'username'=>'required',
            'password'=>'required',
        ]);
        $admin = Admin::where(['username'=>$request->username, 'password'=>sha1($request->password)])->count();
            //checking database if username or password exists
            if($admin > 0){
                //retrieving the data from database
                $adminData = Admin::where(['username'=>$request->username, 'password'=>sha1($request->password)])->get();
                session(['adminData'=>$adminData]);

                if($request->has('rememberme')){
                    Cookie::queue('adminuser', $request->username, -1440);
                    Cookie::queue('adminpass', $request->password, -1440);
                }

                return redirect('admin');
            }else{
                return redirect('admin/login')->with('message', 'Invalid username or password!');
            }
    }

    //logout function
    function logout(){
        session()->forget(['adminData']);
        return redirect('admin/login');
    }

    //dashboard panel
    function dashboard(){

        $bookings = Booking::selectRaw('count(id) as total_bookings,checkin_date')->groupBy('checkin_date')->get();

        $labels = [];
        $data = [];

        foreach($bookings as $booking){
            $labels[] = $booking['checkin_date'];
            $data[] = $booking['total_bookings'];
        }

        $rtbookings=DB::table('room_types as rt')
            ->join('rooms as r','r.room_type_id','=','rt.id')
            ->join('bookings as b','b.room_id','=','r.id')
            ->select('rt.*','r.*','b.*',DB::raw('count(b.id) as total_bookings'))
            ->groupBy('r.room_type_id')
            ->get();
        $plabels=[];
        $pdata=[];
        foreach($rtbookings as $rbooking){
            $plabels[]=$rbooking->detail;
            $pdata[]=$rbooking->total_bookings;
        }

        return view('dashboard',['labels'=>$labels,'data'=>$data,'plabels'=>$plabels,'pdata'=>$pdata]);
    }


    public function testimonials(){
        $data = Testimonial::all();
        return View('admin_testimonial',['data'=>$data]);
    }

    public function destroy_testimonial($id){
        Testimonial::where('id',$id)->delete();
        return redirect('admin/testimonial')->with('success','Testimonial has successfully deleted');
    }

}
