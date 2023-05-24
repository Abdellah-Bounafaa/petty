<?php

namespace App\Traits;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;


trait updateProfileTrait
{
    public function updateProfile(Request $request, string $id)
    {
        $request->validate([
            "first_name" => "required|alpha",
            "last_name" => "required|alpha",
            "country" => "required|string",
            "phone_number" => "required|numeric",
            "email" => 'required|email|unique:users,email,' . $id,
            "bio" => "required"
        ]);
        $user = User::findOrFail($id);
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->country = $request->country;
        $user->phone_number = $request->phone_number;
        $user->email = $request->email;
        $user->bio = $request->bio;
        $user->save();
        return back()->with('message', "Profile updated successfully");
        dd(session('message'));
    }
    public function cropImage(Request $request)
    {
        $request->validate([

            'avatar' => 'image|mimes:jpeg,png,jpg,gif,svg',


        ]);
        try {
            $path = 'uploads/avatars/';
            if (!File::exists(public_path($path))) {
                File::makeDirectory(public_path($path), 0777, true);
            }
            $file = $request->file('avatar');
            $new_image_name = 'UIMG' . date('Ymd') . uniqid() . '.jpg';
            $upload = $file->move(public_path($path), $new_image_name);
            $user = User::where('id', Auth::id())->first();
            if ($file && $upload) {
                $user->avatar = $new_image_name;
                $user->save();
                return back()->with('message', 'Profile updated successfully');
            }
        } catch (\Exception $e) {
            // Log the error message
            Log::error($e->getMessage());
            // Return an error message to the user
            return back()->with('error', 'There was an error processing your request. Please try again later.');
        }
    }
    public function changePassword(Request $request)
    {
        $id = auth()->user()->id;
        $user = User::findOrFail($id);
        $new_password = $request->new_password;
        $request->validate([
            "current_password" =>
            ['required', function ($attribute, $value, $fail) use ($user) {
                if (!Hash::check($value, $user->password)) {
                    return $fail('The current password is incorrect.');
                }
            }],
            "new_password" => [
                'required',
                'min:8',
                'max:255',
                'confirmed',
                Rule::notIn([$request->current_password]),
            ],
            "new_password_confirmation" => 'required|min:8|max:255',
        ]);

        $user->password = bcrypt($new_password);
        $user->save();
        return back()->with('message', "Password updated successfully");
    }
}
