<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Customer::all();
        return view('customer.index', ['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('customer.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validation
        $request->validate([
            'full_name'=>'required',
            'email'=>'required|email',
            'password'=>'required',
            'mobile'=>'required'
        ]);

        //Storing image in temporary folder
        if($request->hasFile('photo')){
            $imgPath = $request->file('photo')->store('public/images');
        }else{
            $imgPath = null;
        }

        $data = new Customer; 
        $data->full_name = $request->full_name;
        $data->email = $request->email;
        $data->password = sha1($request->password);
        $data->mobile = $request->mobile;
        $data->address = $request->address;
        $data->photo = $imgPath;
        $data->save();

        $ref = $request->ref;
        if($ref == 'front'){
            return redirect('register')->with('success', 'Registered Succesfully');
        }

        return redirect('admin/customer/create')->with('success', 'data has been added');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = Customer::find($id);
        return view('customer.show', ['data'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Customer::find($id);
        return view('customer.edit', ['data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //validation
        $request->validate([
            'full_name'=>'required',
            'email'=>'required|email',
            'mobile'=>'required',
        ]);

        $data = Customer::find($id);
        $prev_photo = $data->photo;

        if ($request->hasFile('photo')) {
            $imgPath = $request->file('photo')->store('public/images');
        } else {
            $imgPath = $prev_photo;
        }

        // Update the customer data
        $data->full_name = $request->full_name;
        $data->email = $request->email;
        $data->mobile = $request->mobile;
        $data->address = $request->address;
        $data->photo = $imgPath;
        $data->save();

        return redirect('admin/customer/'.$id.'/edit')->with('success', 'Data has been updated');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Customer::where('id', $id)->delete();
        return redirect('admin/customer')->with('success', 'data deleted successfully');
    }

    public function login(){
        return View('frontlogin');
    }

    public function customer_login(Request $request){
        $email = $request->email;
        $pwd = sha1($request->password);
        $detail = Customer::where(['email'=>$email, 'password'=>$pwd])->count();

        if($detail > 0){
            $detail = Customer::where(['email'=>['email'=>$email, 'password'=>$pwd]])->get();
            session(['customerlogin'=>true, 'data'=>$detail]);
            return redirect('/');
        }else{
            return redirect('login')->with('error','Invalid email or password');
        }
    }

    function register(){
        return view('register');
    }

    public function logout(){
        session()->forget(['customerlogin', 'data']);
        return redirect('login');
    }

}
