<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Traits\updateProfileTrait;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;

class ProfileController extends Controller
{
    use updateProfileTrait;
    /**
     * Display a listing of the resource.
     */
    public function index()

    {
        auth()->user()->user_type = "1" ?   view("profile.index") : view("admin.index");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user_profile = User::find($id);
        if ($user_profile) {
            return view('profile.index', ['user_profile' => $user_profile]);
        }
    }
    public function update(Request $request, string $id)
    {
        return $this->updateProfile($request, $id);
    }
    public function crop(Request $request)
    {
        return $this->cropImage($request);
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
