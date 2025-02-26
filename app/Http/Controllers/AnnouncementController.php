<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AnnouncementController extends Controller
{
    //
    public function index()
    {
        $announcements = Announcement::with("images")->get();
        return view("announcements",compact("announcements"));
    }
    public function create(Request $req)
    {
        try {
            //code...
            $user_id = Auth::user()->id;
            $validated = $req->validate([
                'title' => ['required', 'string', 'max:100'],
                'description' => ['required', 'string', 'max:255'],
                'address' => ['required', 'string', 'max:255'],
                'images' => ['required', 'array', 'min:1'],
                'images.*' => ['file', 'image', 'mimes:jpg,jpeg,png', 'max:2048'],
                'beds' => ['required', 'integer', 'min:1'],
                'baths' => ['required', 'integer', 'min:1'],
                'sqft' => ['required', 'integer', 'min:1'],
                'type' => ['required', 'in:For Sale,For Rent'],
                'price' => ['required', 'numeric'], // numeric means the field under validation must be a number
            ]);
            $announcement = Announcement::create([
                'title' => $validated['title'],
                'user_id' => $user_id,
                'description' => $validated['description'],
                'address' => $validated['address'],
                'Beds' => $validated['beds'],
                'Baths' => $validated['baths'],
                'sqft' => $validated['sqft'],
                'type' => $validated['type'],
                'price' => $validated['price'],
            ]);

            if ($req->hasFile('images')) {
                foreach ($req->file('images') as $image) {
                    $path = $image->store('uploads', 'public');
                    Image::create([
                        'announcement_id' => $announcement->id,
                        'path' => str_replace('public/', 'storage/', $path),
                    ]);
                }
            }

            return redirect()->back()->with('success', 'Announcement created successfully!');
        } catch (\Throwable $th) {
            dd($th->getMessage());
        }
    }
}
