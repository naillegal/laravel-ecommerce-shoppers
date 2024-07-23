<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function basket()
    {
        $cartItem = session('basket', []);
        $totalPrice = 0;
        foreach ($cartItem as $cart) {
            $totalPrice += $cart['price'] * $cart['qty'];
        }
        return view('frontend.pages.basket', compact('cartItem', 'totalPrice'));
    }

    public function add(Request $request)
    {
        $productID = $request->product_id;
        $qty = $request->qty ?? 1;
        $size = $request->size;

        $product = Product::find($productID);
        if (!$product) {
            return back()->withError('Product not found');
        }

        $cartItem = session('basket', []);

        if (array_key_exists($productID, $cartItem)) {
            $cartItem[$productID]['qty'] += $qty;
        } else {
            $cartItem[$productID] = [
                'name' => $product->name,
                'image' => $product->image,
                'price' => $product->price,
                'qty' => $qty,
                'size' => $size,
            ];
        }

        session(['basket' => $cartItem]);
        return back()->withSuccess('Product added successfully');
    }

    public function remove(Request $request)
{
    $productID = $request->product_id;

    $cartItem = session('basket', []);

    if (array_key_exists($productID, $cartItem)) {
        unset($cartItem[$productID]);
        session(['basket' => $cartItem]);
        return back()->withSuccess('Successfully removed');
    }

    return back()->withError('Product not found in cart');
}

}
