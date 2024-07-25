<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use App\Models\Booking;
use App\Models\Customer;
use App\Models\Room;
use App\Models\Staff;

class DashboardController extends Controller
{
    public function generateReport()
    {
        $csvData = "Bookings,Customers,Rooms,Staffs\n";
        $csvData .= Booking::count() . ',' . Customer::count() . ',' . Room::count() . ',' . Staff::count();

        // Create a response with the CSV content
        $response = Response::make($csvData);
        $response->header('Content-Type', 'text/csv');
        $response->header('Content-Disposition', 'attachment; filename=report.csv');

        return $response;
    }

}
