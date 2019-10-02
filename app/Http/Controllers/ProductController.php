<?php

namespace App\Http\Controllers;

use App\Http\Services\ProductService;
use http\Env\Response;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    protected $productService;
    public function __construct(ProductService $productService)
    {
        $this->productService =$productService;
    }

    public function index()
    {
        try {
            $products = $this->productService->getAll();
        } catch (\Exception  $e) {
            return response()->json([
                'status' => 'error',
                'message' => $e->getMessage()
            ]);
        }

        return response()->json($products);
    }

    public function store(Request $request)
    {
        try{
           $product = $this->productService->store($request);
        }
        catch(\Exception $exception){
            return response()->json([
                'status' => 'error',
                'message' => $exception->getMessage()
            ]);
        }
        return response()->json([
            'status' => 'success',
            'data' => $product,
        ]);
    }


    public function show($id)
    {
        return $this->productService->show($id);
    }


    public function update(Request $request, $id)
    {
        return $this->productService->update($request,$id);
    }

    public function destroy($id)
    {
        return $this->productService->destroy($id);
    }
}
