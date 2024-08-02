<?php

namespace App\Http\Controllers\Admin;

use App\Models\Order;
use App\Models\Product;
use App\Models\OrderDetail;
use App\Models\User;
use Illuminate\Http\Request;


class OrderController extends Controller
{
    public function listOrder()
    {
        // $listOrders = null;

        
         $listOrders = Order::with('user')->get();
        //  foreach($listOrders as $order){
        //     dump($order->user->name);
        //  }
             
        //  dd($listOrders);
        // $listOrders = Order::select('orders.*','users.user_id as user_id','users.name')
        // ->join('users', 'orders.user_id', '=', 'users.user_id')
        // ->paginate(6);
        return view('admin.Order.list-order',compact('listOrders'));
    }
    public function seeDetail($id){
        $orders = Order::with('orderDetails')->find($id);
        return view('admin.Order.detail-order', compact('orders'));
    }
}