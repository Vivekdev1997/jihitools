<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\ContactMessage;
use App\Models\Product;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function home()
    {
        $categories = Category::where('is_active', true)
            ->withCount(['products' => fn ($q) => $q->where('is_active', true)])
            ->orderBy('sort_order')->orderBy('name')
            ->take(6)->get();

        return view('pages.home', compact('categories'));
    }

    public function products()
    {
        $categories = Category::where('is_active', true)
            ->orderBy('sort_order')->orderBy('name')
            ->with('activeProducts')
            ->get();

        return view('pages.products', compact('categories'));
    }

    public function category(Category $category)
    {
        abort_unless($category->is_active, 404);

        $products = $category->activeProducts()->paginate(9);

        return view('pages.category', compact('category', 'products'));
    }

    public function product(Product $product)
    {
        abort_unless($product->is_active, 404);

        $related = Product::where('category_id', $product->category_id)
            ->where('id', '!=', $product->id)
            ->where('is_active', true)
            ->orderBy('sort_order')->take(3)->get();

        return view('pages.product', compact('product', 'related'));
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function sendMessage(Request $request)
    {
        $data = $request->validate([
            'first_name' => ['required', 'string', 'max:255'],
            'last_name'  => ['nullable', 'string', 'max:255'],
            'email'      => ['required', 'email', 'max:255'],
            'phone'      => ['nullable', 'string', 'max:50'],
            'company'    => ['nullable', 'string', 'max:255'],
            'subject'    => ['nullable', 'string', 'max:255'],
            'message'    => ['nullable', 'string', 'max:5000'],
        ]);

        ContactMessage::create($data);

        return back()->with('success', 'Thank you! Your message has been sent.');
    }
}
