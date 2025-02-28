<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        $announcementCount = Announcement::where("isActive", true)->count();
        $usersCount = User::count();
        $AverageRentingPrice = Announcement::where("type", "For Rent")->avg("price");
        $AverageSellingPrice = Announcement::where("type", "For Sale")->avg("price");
        return view("admin.dashboard", compact("announcementCount", "usersCount", "AverageRentingPrice", "AverageSellingPrice"));
    }
}
