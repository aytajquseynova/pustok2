<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Products; // Make sure to import the Products model
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class ShoppingCartController extends Controller
{
    public function add($id)
    {
        $product = Products::find($id);
        if ($product) {
            Cart::add([
                'id' => $product->id,
                'name' => $product->title,
                'qty' => 1,
                'price' => $product->price,
                'weight' => 50,
                'options' => [
                    'size' => 'large',
                    'image'=> $product->main_image,
                ]
            ]);
        }
        return redirect()->back();
    }

    public function destroy()
    {
        Cart::destroy();
        return redirect()->back();
    }

    public function remove($rowId)
    {
        Cart::remove($rowId);
        return redirect()->back();
    }
}
