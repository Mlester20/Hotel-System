<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RoomType;
use App\Models\Room;

class RoomController extends Controller
{
    public function index()
    {
        $data = Room::all();
        return view('room.index', ['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $roomtypes = RoomType::All();
        return view('room.create', ['roomtypes'=>$roomtypes]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = new Room; 
        $data->room_type_id = $request->rt_id;
        $data->title = $request->title;
        $data->save();

        return redirect('admin/rooms/create')->with('success', 'data has been added');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = Room::find($id);
        return view('room.show', ['data'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {   
        $roomtypes = RoomType::all();
        $data = Room::find($id);
        return view('room.edit', ['data'=>$data, 'roomtypes'=>$roomtypes]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = Room::find($id); 
        $data->title = $request->title;
        $data->room_type_id = $request->rt_id;
        $data->save();

        return redirect('admin/rooms/'.$id.'/edit')->with('success', 'data has been updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Room::where('id', $id)->delete();
        return redirect('admin/rooms')->with('success', 'data deleted successfully');
    }
}
