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
        $query = Product::query();

        if(!is_null($filters)){
            $query = $query->whereIn('category_id', $filters['categories']);

            $query = $query->where('price','>=', $filters['price_min']);

            $query = $query->where('price','<=', $filters['price_max']);

            return response()->json([
                'data' => $query->get()
            ]);
        }


        return view('welcome',[
            'products' => $query->paginate(10),
            'categories' => ProductCategory::orderBy('name','ASC')->get()
        ]);
    }

}
