<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Order;
use Illuminate\Http\Request;

class AppController extends Controller
{

public function __invoke(Request $request)
    {
        $totalOrders = Order::count();
        $totalItems = Item::count();
        $orders = Order::all();
        return view('index', compact('totalOrders','totalItems','orders'));
    }
}
