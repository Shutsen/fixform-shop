<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class CartController extends Controller
{
    public function index(): Response
    {
        $cart = session()->get('cart', []);

         // Calculate the total price for each item in the cart
         foreach ($cart as &$item) {
            $item['total_price'] = $item['quantity'] * $item['price'];
        }
        // Calculate the total price for the entire cart
        $subTotal = array_sum(array_column($cart, 'total_price'));
        $taxAmount = $subTotal * 0.21;
        $total = $subTotal + $taxAmount;

        // Round the values to 2 decimals
        $subTotal = number_format($subTotal, 2);
        $taxAmount = number_format($taxAmount, 2);
        $total = number_format($total, 2);

        return Inertia::render('Cart/Index', [
            'cart' => $cart,
            'subTotal' => $subTotal,
            'taxAmount' => $taxAmount,
            'total' => $total,
        ]);
    }

    public function store(Request $request): RedirectResponse
    {
        $product = Product::findOrFail($request->id);
        $cart = session()->get('cart', []);
        if(isset($cart[$request->id])) {
            $cart[$request->id]['quantity']++;
        } else {
            $cart[$request->id] = [
                "id" => $product->id,
                "name" => $product->name,
                "quantity" => 1,
                "price" => $product->price,
                "image" => $product->image,
            ];
        }
        session()->put('cart', $cart);
        session()->flash('success', 'Product added to cart.');
        return redirect()->back();
    }

    public function destroy($id): RedirectResponse
    {
        $cart = session()->get('cart');
        if(isset($cart[$id])) {
            unset($cart[$id]);
            session()->put('cart', $cart);
        }
        return redirect()->back();
    }
}
