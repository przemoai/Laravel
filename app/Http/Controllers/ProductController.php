<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
use App\Models\Product;
use App\Models\ProductCategory;
use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;
use Psy\Util\Json;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index(): View
    {
        return view('products.index',[
            'products' => Product::paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create(): View
    {
        return view("products.create", [
            'categories' => ProductCategory::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return RedirectResponse
     */
    public function store(StoreProductRequest $request): RedirectResponse
    {

        $product = new Product($request->validated());
        if($request->hasFile('image')){
            $product->image_path = $request->file('image')->store('products');
        }
        $product -> save();
        return redirect(route('products.index'))->with('status',__('harnasik.messages.success_stored'));
    }

    /**
     * Display the specified resource.
     *
     * @param  Product  $product
     * @return View
     */
    public function show(Product $product): View
    {
        return view('products.show',[
            'product'=>$product
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Product  $product
     * @return View
     */
    public function edit(Product $product): View
    {

            return view("products.edit", [
                'product' => $product,
                'categories' => ProductCategory::all()
            ]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  StoreProductRequest  $request
     * @param  Product  $product
     * @return RedirectResponse
     */
    public function update(StoreProductRequest $request, Product $product):RedirectResponse
    {

        $product->fill($request->validated());
        if($request->hasFile('image')){
            $oldImagepath = $product->image_path;
            if(Storage::exists($oldImagepath)){
                Storage::delete($oldImagepath);
            }
            $product->image_path = $request->file('image')->store('products');

        }
        $product->save();
        return redirect(route('products.index'))->with('status',__('harnasik.messages.success_updated'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Product  $product
     * @return JsonResponse|\Illuminate\Http\JsonResponse|object
     */
    public function destroy(Product $product)
    {

        try {
            //throw new Exception();        //TEST WYJATKOW
            $product->delete();
            Session::flash('status', __('harnasik.messages.delete'));
            return response()->json([
                'status' => 'success'
            ]);

        }catch (Exception $e){
            return response()->json([
                'status' => 'error',
                'message' => 'Wystapil blad'
            ])->setStatusCode(500);

        }



    }
}
