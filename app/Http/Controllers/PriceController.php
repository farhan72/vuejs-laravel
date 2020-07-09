<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Price;

class PriceController extends Controller
{
    public function getAllPrice() {
        $data = Price::orderBy('id', 'ASC')->get();
        $response = [];
        foreach ($data as $d) {
            $features = json_decode($d->features);
            $result = [
                "priceId" => $d->id,
                "label" => $d->label_package,
                "price" => $d->real_price,
                "discountPrice" => $d->discount_price,
                "totalUsers" => $d->total_users,
                "features" => $features,
                'isBestSeller' => $d->is_best_seller
            ];
            array_push($response, $result);
        }
        return response()->json(['status' => true, 'items' => $response])->setStatusCode(Response::HTTP_OK);
    }
}
