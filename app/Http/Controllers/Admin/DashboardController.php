<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\ContactMessage;
use App\Models\Product;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin.dashboard', [
            'categoryCount' => Category::count(),
            'productCount'  => Product::count(),
            'messageCount'  => ContactMessage::count(),
            'unreadCount'   => ContactMessage::where('is_read', false)->count(),
            'latestMessages' => ContactMessage::latest()->take(5)->get(),
        ]);
    }
}
