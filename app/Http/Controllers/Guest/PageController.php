<?php

namespace App\Http\Controllers\Guest;

use App\Models\Train;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function index() {
        $trains = Train::where('departure_date', 'LIKE', '% 13:%' )->get()->filter(function ($train){
            return !$train->in_time || !$train->deleted;
        });

        return view('index', [
            'trains' => $trains
        ]);
    }
};
