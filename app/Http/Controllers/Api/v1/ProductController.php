<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Product;
use App\Http\Resources\ProductResource;
use App\Http\Requests\ProductStoreRequest;

class ProductController extends Controller
{
    /**
     * @OA\Get(
     *      path="/api/v1/products",
     *      operationId="index",
     *      tags={"Products"},
     *      summary="Pobieranie listy produktów",
     *      description="Metoda zwraca dane ...",
     *      @OA\Parameter(
     *        name="page",
     *        in="path",
     *        description="Strony produktów",
     *        @OA\Schema(
     *           type="integer",
     *           format="int64"
     *        ),
     *        required=false,
     *        example=1
     *     ),
     *     @OA\Response(
     *          response=200,
     *          description="Sukcesy",
	 * 			@OA\JsonContent(ref="#/components/schemas/Product")
     *       ),
     *     )
     */

    public function index()
    {
        return ProductResource::collection(Product::paginate());
    }

	 /**
     * @OA\Post(
     *      path="/api/v1/products",
     *      operationId="store",
     *      tags={"Products"},
     *      summary="Dodawanie produktu",
     *      description="Metoda zwraca dane ...",
	 * 	
	 * 
	 *     @OA\RequestBody(
     *         @OA\MediaType(
     *             mediaType="application/x-www-form-urlencoded",
     *             @OA\Schema(
     *                 type="string",
     *                 ref="#/components/schemas/ProductStoreRequest",
     *             )
     *         )
     *     ),		
	 * 
     *     @OA\Response(
     *          response=200,
     *          description="Sukcesy",
	 * 			@OA\JsonContent(ref="#/components/schemas/Product")
     *       ),
     *     )
     */

    public function store(ProductStoreRequest $request)
    {
        $createdProduct = Product::create($request->validated());
		return new ProductResource($createdProduct);
    }

	/**
     * @OA\Get(
     *      path="/api/v1/products/{id}",
     *      operationId="show",
     *      tags={"Products"},
     *      summary="Pełny opis produktu",
     *      description="Metoda zwraca dane ...",
     *     @OA\Parameter(
     *        name="id",
     *        in="path",
     *        description="Product Id",
     *        @OA\Schema(
     *           type="integer",
     *           format="int64"
     *        ),
     *        required=true,
     *        example=1
     *     ),
     *     @OA\Response(
     *          response=200,
     *          description="Sukcesy",
	 * 			@OA\JsonContent(ref="#/components/schemas/Product")
     *       ),
     *     )
     */

    public function show(Product $product)
    {
        return new ProductResource($product);
    }

	/**
     * @OA\Put(
     *      path="/api/v1/products/{id}",
     *      operationId="update",
     *      tags={"Products"},
     *      summary="Edycja produktu",
     *      description="Metoda zwraca dane ...",
     *     @OA\Parameter(
     *        name="id",
     *        in="path",
     *        description="Product Id",
     *        @OA\Schema(
     *           type="integer",
     *           format="int64"
     *        ),
     *        required=true,
     *        example=1
     *     ),
	 * 	   @OA\RequestBody(
     *         @OA\MediaType(
     *             mediaType="application/x-www-form-urlencoded",
     *             @OA\Schema(
     *                 type="string",
     *                 ref="#/components/schemas/ProductStoreRequest",
     *             )
     *         )
     *     ),	
     *     @OA\Response(
     *          response=200,
     *          description="Sukcesy",
	 * 			@OA\JsonContent(ref="#/components/schemas/Product")
     *       ),
     *     )
     */

    public function update(ProductStoreRequest $request, Product $product)
    {
        $product->update($request->validated());
		return new ProductResource($product);
    }

	/**
     * @OA\Delete(
     *      path="/api/v1/products/{id}",
     *      operationId="destroy",
     *      tags={"Products"},
     *      summary="Usuwanie produktu",
     *      description="Metoda nie zwraca dane ...",
     *     @OA\Parameter(
     *        name="id",
     *        in="path",
     *        description="Product Id",
     *        @OA\Schema(
     *           type="integer",
     *           format="int64"
     *        ),
     *        required=true,
     *        example=1
     *     ),
     *     @OA\Response(
     *          response=200,
     *          description="Success",
     *       ),
     *     )
     */

    public function destroy(Product $product)
    {
        $product->delete();
		return response()->noContent();
    }
}
