<?php

namespace App\Http\Controllers;

use App\DTOs\Cart\CartDto;
use App\DTOs\Cart\CartItemDto;
use App\Http\Requests\StoreProductRequest;
use App\Models\Product;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Session;
use Illuminate\View\View;

class CartController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return View
     */
    public function index(): view
    {
        dd(Session::get('cart', new CartDto()));
        return view('home');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Product  $product
     * @return JsonResponse
     */
    public function store(Product $product): JsonResponse
    {

        $cart = Session::get('cart', new CartDto());
        $items = $cart->getItems();
        if (Arr::exists($items,$product->id)){
            $items[$product->id]->incrementTotalQuantity();
        }else{
            $cartItemDto = new CartItemDto();
            $cartItemDto->setProductId($product->id);
            $cartItemDto->setProductName($product->name);
            $cartItemDto->setProductPrice($product->price);
            $cartItemDto->setProductQuantity(1);
            $cartItemDto->setProductImage($product->image_path);


            $items[$product->id] = $cartItemDto;
        }
        $cart->setItems($items);
        $cart->incrementTotalQuantity();
        $cart->incrementTotalSum($product->price);

        Session::put('cart', $cart);
        return response()->json([
            'status' => 'success'
        ]);
    }

}
