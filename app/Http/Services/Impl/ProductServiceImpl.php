<?php


namespace App\Http\Services\Impl;


use App\Http\Repositories\ProductInterface;
use App\Http\Services\ProductService;
use App\Product;

class ProductServiceImpl implements ProductService
{
    protected $productRepository;
    public function __construct(ProductInterface $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    public function getAll()
    {
        $product = $this->productRepository->getAll();
        return $product;
    }

    public function show($id)
    {
        $product = $this->productRepository->show($id);
        return response()->json($product);
    }

    public function store($request)
    {

        $product = Product::create($request->all());
        $this->productRepository->store($product);
        return response()->json($product, 201);
    }

    public function update($request, $id)
    {
        $product = Product::findOrFail($id);
        $product->update($request->all());
        $this->productRepository->update($product);
        return response()->json($product, 200);
    }

    public function destroy($id)
    {
        $product = $this->productRepository->show($id);
        $this->productRepository->destroy($product);
        return response()->json(null, 204);
    }
}
