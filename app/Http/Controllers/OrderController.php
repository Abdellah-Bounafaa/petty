<?php

namespace App\Http\Controllers;

use App\Models\Donation;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class orderController extends Controller
{
    public function index()
    {

        $orders = Order::where("user_id", Auth::id())->get();
        return view('orders')->with('orders', $orders);
    }
    public function store(string $donation_id)
    {
        $order = new Order();
        $order->donation_id = $donation_id;
        $order->user_id = Auth::user()->id;
        $order->save();
        return
            back()->with('success', 'Order created successfully');
    }
    public function destroy(string $id)
    {
        $order = Order::findOrFail($id);
        if ($order) {
            $order->delete();
        }
        return back()->with('error', 'Order removed');
    }
    public function deleteAllOrders()
    {
        Order::truncate();
        return back()->with('error', 'Orders removed');
    }
    public function getMyProductOrders()
    {
        // Assuming you have the authenticated user's ID available
        // $userId = auth()->user()->id;

        // $orders = Order::where('user_id', $userId)->with('donation')->get();

        // // Now you have the orders related to the user's own products/donations

        // // You can access the associated donation details for each order like this:
        // foreach ($orders as $order) {
        //     $donation = $order->donation;
        //     dd($donation);
        // }
        // dd($orders);
        // return view('requests')->with('orders', $orders);

        // Return or use the retrieved orders as needed
    }
}