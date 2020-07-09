<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Price;

class PriceController extends Controller
{
    public function getAllPrice() {
        $features = [
            ["<b>0.5X RESOURCE POWER</b>","<b>500 MB</b> Disk Space","<b>Unlimited</b> Bandwidth","<b>Unlimited</b> Databases","<b>1</b> Domain","<b>Instant</b> Backup","<b>Unlimited SSL</b> Gratis Selamanya"],
            ["<b>1X RESOURCE POWER</b>","<b>Unlimited</b> Disk Space","<b>Unlimited</b> Bandwidth","<b>Unlimited</b> POP3 Email","<b>Unlimited</b> Databases","<b>10</b> Addon Domains","<b>Instant</b> Backup","<b>Domain</b> Gratis Selamanya","<b>Unlimited SSL</b> Gratis Selamanya"],
            ["<b>2X RESOURCE POWER</b>","<b>Unlimited</b> Disk Space","<b>Unlimited</b> Bandwidth","<b>Unlimited</b> POP3 Email","<b>Unlimited</b> Databases","<b>Unlimited</b> Addon Domains","<b>Instant</b> Backup","<b>Domain</b> Gratis Selamanya","<b>Unlimited SSL</b> Gratis Selamanya","<b>SpamAssasin</b> Mail Protection"],
            ["<b>3X RESOURCE POWER</b>","<b>Unlimited</b> Disk Space","<b>Unlimited</b> Bandwidth","<b>Unlimited</b> POP3 Email","<b>Unlimited</b> Databases","<b>Unlimited</b> Addon Domains", "<b>Magic Auto</b> Backup & Restore","<b>Domain</b> Gratis Selamanya","<b>Unlimited SSL</b> Gratis Selamanya","<b>Private</b> Name Server","<b>Prioritas</b> Layanan Support","<i class='fa fa-star text-primary'></i> <i class='fa fa-star text-primary'></i> <i class='fa fa-star text-primary'></i> <i class='fa fa-star text-primary'></i> <i class='fa fa-star text-primary'></i>","<b>SpamExpert</b> Pro Mail Protection"]
        ];
        $priceList = [
            [
                "priceId" => 0,
                "label" => 'bayi',
                "price" => 19900,
                "discountPrice" => 14900,
                "totalUsers" => 938,
                "features" => $features[0],
                'isBestSeller' => false
            ],
            [
                "priceId" => 1,
                "label" => 'pelajar',
                "price" => 46900,
                "discountPrice" => 23450,
                "totalUsers" => 4168,
                "features" => $features[1],
                'isBestSeller' => false
            ],
            [
                "priceId" => 2,
                "label" => 'personal',
                "price" => 58900,
                "discountPrice" => 38900,
                "totalUsers" => 10017,
                "features" => $features[2],
                'isBestSeller' => true
            ],
            [
                "priceId" => 3,
                "label" => 'bisnis',
                "price" => 109900,
                "discountPrice" => 65900,
                "totalUsers" => 3552,
                "features" => $features[3],
                'isBestSeller' => false
            ]
        ];
        return response()->json(['status' => true, 'items' => $priceList])->setStatusCode(Response::HTTP_OK);
    }
}
