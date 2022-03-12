<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

/**
     * @OA\Info(
     *      version="1.0.0",
     *      title="Dokumentacja do API",
     *      description="Dokumentacja dla mikro serwisu",
	 * 		@OA\Contact(
	 *			email="dd@fligmax.com",
	 *			name="Vitalii Tsarov"
	 *		),
     * )
     *
     * @OA\Tag(
     *     name="Products",
     *     description="OPERACJE O PRODUKTACH"
     * )
     */
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
