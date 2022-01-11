<?php

namespace App\Http\Controllers;

use App\Models\Product;

use App\Models\ProductCategory;
use Illuminate\Http\JsonResponse;
use Illuminate\View\View;
use Symfony\Component\HttpFoundation\Request;


class WelcomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param Requestquest $request
     * @return View
     */
    public function index(Request $request): View|JsonResponse
    {
        $filters = $request->query('filter');
        $paginate = $request->query('paginate') ?? 8;

        $query = Product::query();

        if(!is_null($filters)){
            if(array_key_exists('categories',$filters)){
                $query = $query->whereIn('category_id', $filters['categories']);
            }
            if(!is_null($filters['price_min'])){
                $query = $query->where('price','>=', $filters['price_min']);
            }
            if(!is_null($filters['price_max'])){
                $query = $query->where('price','<=', $filters['price_max']);
            }


            return response()->json($query->paginate($paginate));
        }


        return view('welcome',[
            'products' => $query->paginate($paginate),
            'categories' => ProductCategory::orderBy('name','ASC')->get(),
            'defaultImage' =>'storage/products/photonull.png',
        ]);
    }

}
