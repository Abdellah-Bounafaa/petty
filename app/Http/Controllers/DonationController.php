<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Donation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class DonationController extends Controller
{
    public function index()
    {
        $donations = Donation::where("status", 1)->paginate(12)->onEachSide(1);
        $animal_donations = Donation::where('type', "animal")->paginate(12)->onEachSide(1);
        $material_donations = Donation::where('type', 'material')->paginate(12)->onEachSide(1);
        return view('donations.index')->with([
            'donations' => $donations,
            "animal_donations" => $animal_donations,
            "material_donations" => $material_donations
        ]);
    }
    public function create(Request $request)
    {
        $id = $request->id;
        $donation_object = Donation::find($id);
        if ($donation_object) {
            return view('donations.edit-donation')->with('donation_object', $donation_object);
        }
    }
    public function show(Request $request)
    {
        $id = $request->id;
        $donation_object = Donation::find($id);
        // get recents donations
        $recent_donations = Donation::latest('created_at')->limit(3)->where("status", 1)->get();
        $followed_orders = Order::where('user_id', Auth::id())->where('donation_id', $id)->first();
        if ($donation_object && $donation_object->status == "1") {
            return view('donations.show')->with(["donation_object" => $donation_object, "recent_donations" => $recent_donations, 'followed_orders' => $followed_orders]);
        } else    if (auth()->user()->user_type == "1" && $donation_object && $donation_object->status == "0") {
            return view('donations.show')->with(["donation_object" => $donation_object, "recent_donations" => $recent_donations]);
        } else {
            abort(404);
        }
    }
    public function store(Request $request)
    {
        $donation = new Donation();
        $request->validate([
            'donation_title' => 'required|string',
            'donation_picture' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'type' => 'required',
            'description' => 'required',
            'tags' => 'required',

        ]);

        $path = 'uploads/donations/';
        if (!File::exists(public_path($path))) {
            File::makeDirectory(public_path($path), 0777, true);
        }
        $new_image_name = 'UIMG' . date('Ymd') . uniqid() . '.' . $request->file('donation_picture')->extension();
        $request->file('donation_picture')->move(public_path($path), $new_image_name);
        $donation->donation_title = $request->donation_title;
        $donation->donation_picture = $new_image_name;
        $donation->description = $request->description;
        $donation->type = $request->type;
        $donation->tags = $request->tags;
        $donation->user_id = Auth::id();
        $donation->status = Auth::user()->user_type == '1' ? 1 : 0;

        $donation->save();
        return redirect()->route('donations')->with('success', 'Your donation has been created and will be processed.');
    }

    public function update(Request $request, string $id)
    {
        $donation = Donation::findOrFail($id);
        $request->validate([
            'donation_title' => "required|string",
            'donation_picture' => "required",
            'type' => 'required',
            "description" => "required",
        ]);
        $path = 'uploads/donations/';
        if (!File::exists(public_path($path))) {
            File::makeDirectory(public_path($path), 0777, true);
        }
        $new_image_name = 'UIMG' . date('Ymd') . uniqid() . '.' . $request->file('donation_picture')->extension();
        $request->file('donation_picture')->move(public_path($path), $new_image_name);

        $donation->user_id = Auth::id();
        $donation->donation_title = $request->donation_title;
        $donation->donation_picture
            =  $new_image_name;
        $donation->type = $request->type;
        $donation->description = $request->description;
        $donation->status = Auth::user()->user_type == '1' ? 1 : 0;
        $donation->save();
        return redirect()->route('donations');
    }
    public function destroy(Request $request)
    {
        $id = $request->id;
        $donation = Donation::findOrFail($id);
        if ($donation) {
            $donation->delete();
        }
        return redirect()->route('donations')->with('success', "Donation deleted successfuly");
    }
    public function search(Request $request)
    {
        $donations = Donation::query()->where('donation_title', "like", "%" . $request->donation_title . "%")->paginate(12);
        $material_donations = Donation::query()->where('donation_title', 'like', "%" . $request->donation_title . "%")->where('type', "material")->paginate(12);
        $animal_donations = Donation::query()->where('donation_title', 'like', "%" . $request->donation_title . "%")->where('type', "animal")->paginate(12);
        if ($donations) {
            return view('donations.index')->with(['donations' => $donations, "material_donations" => $material_donations, "animal_donations" => $animal_donations]);
        }
    }
}