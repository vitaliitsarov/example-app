<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @OA\Schema(
 *     title="Product",
 *     description="Product model",
 *     @OA\Xml(
 *         name="Product"
 *     )
 * )
 */

class Product extends Model
{
    use HasFactory;

	/**
     * @OA\Property(
     *     title="ID Produktu",
     *     description="Unikalny identyfikator",
     *     format="int64",
     *     example="1"
     * )
     *
     * @var bigInteger
     */
    private $id;

	/**
     * @OA\Property(
     *     title="Nazwa produktu",
     *     description="Nazwa produktu",
     *     example="Test Product",
     *     type="string"
     * )
     */
    private $title;

	/**
     * @OA\Property(
     *     title="Cena produktu",
     *     description="Cena produktu",
     *     example="100.00",
     *     type="number",
	 * 	   format="double",
	 * 	   minimum="0.00",
	 * 	   maximum="999999999999.99"
     * )
     */
    private $price;

	/**
     * @OA\Property(
     *     title="Liczba dostępnych sztuk",
     *     description="Liczba dostępnych sztuk",
     *     example="5",
     *     type="integer",
	 * 	   minimum="0"
     * )
     */
    private $count;

	/**
     * @OA\Property(
     *     title="Data dodania",
     *     description="Data dodania",
     *     example="2022-03-11 01:27:45",
     *     format="datetime",
     *     type="string"
     * )
     */
    private $created_at;

    /**
     * @OA\Property(
     *     title="Data ostatniej modyfikacji",
     *     description="Data ostatniej modyfikacji",
     *     example="2022-03-11 01:40:45",
     *     format="datetime",
     *     type="string"
     * )
     */
    private $updated_at;

	protected $table = 'products';
	protected $fillable = ["title", "price", "count"];
}
