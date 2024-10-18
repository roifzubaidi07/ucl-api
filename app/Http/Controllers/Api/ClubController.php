<?php

namespace App\Http\Controllers\Api;

use App\Models\Club;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\ClubResource;

class ClubController extends Controller
{

    public function index()
    {
        //get clubs
        $clubs = Club::orderBy('coeffs', 'DESC')->all();

        //return collection of clubs as a resource
        return new ClubResource(true, 'List Data Clubs', $clubs);
    }
}
