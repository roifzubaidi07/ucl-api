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
        $clubs = Club::orderBy('coeffs', 'DESC')->get();

        //return collection of clubs as a resource
        return new ClubResource(true, 'List Data Clubs', $clubs);
    }

    public function draw()
    {
        //get pot
        $pot = Club::select('pot_id')->orderBy('pot_id', 'ASC')->where('is_drawn', 0)->first();

        $club = Club::where([
            ['is_drawn', '=', 0],
            ['pot_id', '=', $pot->pot_id]])->inRandomOrder()->first();
        

            
        return new ClubResource(true, 'Drawn Club', $club);
    }

    public function show(string $id): View
    {
        return view('user.profile', [
            'user' => User::findOrFail($id)
        ]);
    }


}
