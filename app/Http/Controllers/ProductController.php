<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): Response
    {
        $products = Product::all();
        $cart = session()->get('cart', []);

        return Inertia::render('Products/Index', [
            'products' => $products,
            'cart' => $cart,
        ]);
    }

    public function detail($id)
    {
        $product = Product::findOrFail($id);

        return Inertia::render('Products/Detail', [
            'product' => $product,
        ]);
    }
}
