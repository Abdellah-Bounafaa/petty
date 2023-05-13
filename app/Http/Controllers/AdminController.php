<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\User;
use App\Models\Donation;
use App\Traits\destroy as TraitsDestroy;
use Illuminate\Http\Request;
use App\Traits\updateProfileTrait;
use Trait\destroy\destroy;

class AdminController extends Controller
{
    use updateProfileTrait;
    use TraitsDestroy;
    public function index(string $id)
    {
        $admin = User::findOrFail($id);
        $donation_count = Donation::all()->count();
        $users_count = User::all()->count();
        $unconfirmed_donation_count = Donation::where('status', 1)->get()->count();
        $slider_donations = Donation::where("user_id", 1)->latest()->limit(6)->get();
        $slider_blogs = Blog::where('user_id', 1)->latest()->limit(6)->get();
        // dd($slider_blogs);
        if ($admin) {
            return view('admin.index', [
                'admin' => $admin,
                "donation_count" => $donation_count,
                "unconfirmed_donation_count" => $unconfirmed_donation_count,
                "users_count" => $users_count,
                "slider_donations" => $slider_donations,
                "slider_blogs" => $slider_blogs
            ]);
        }
    }
    public function unconfirmed_donation()
    {
        $unconfirmed_donation = Donation::oldest('created_at')->where('status', 0)->get();
        if ($unconfirmed_donation) {
            return view('admin.unconfirmed-donations', ['unconfirmed_donation' => $unconfirmed_donation]);
        }
    }
    public function confirm_donation(Request $request)
    {
        $id = $request->id;
        $donation = Donation::findOrFail($id);
        $donation->status = 1;
        $donation->save();
        return back()->with('success', 'Donation confirmed');
    }
    public function destroy($id)
    {
        $donation = Donation::findOrFail($id);
        if ($donation) {
            $donation->delete();
        }
        return back()->with('error', 'Donation deleted successfully');
    }
    public function profile(Request $request)
    {
        $id = $request->id;
        $admin = User::findOrFail($id);

        if ($admin) {
            return view('admin.profile', ['admin' => $admin]);
        }
    }
    public function updateAdminProfile(Request $request, string $id)
    {
        return $this->updateProfile($request, $id);
    }
    public function updateAdminAvatar(Request $request)
    {
        return $this->cropImage($request);
    }
    public function showUpdatePassForm()
    {
        return view('admin.reset-password');
    }
    public function changeAdminPassword(Request $request)
    {
        return $this->changePassword($request);
    }
    public function unconfirmed_blogs()
    {
        $unconfirmed_blogs = Blog::where('status', 0)->get();
        if ($unconfirmed_blogs) {

            return view('admin.unconfirmed_blogs')->with('unconfirmed_blogs', $unconfirmed_blogs);
        }
    }
    public function confirm_blog(Request $request)
    {
        $id = $request->id;
        $blog = Blog::findOrFail($id);
        if ($blog) {
            $blog->status = "1";
            $blog->save();
        }
        return back()->with('success', 'Blog confirmed');
    }
    public function delete_blog($id)
    {
        return $this->destroy_blog($id)->with('error', 'Blog deleted successfully');
    }
}
