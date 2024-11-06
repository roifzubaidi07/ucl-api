<?php

namespace App\Http\Controllers\Api;

use App\Models\Club;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\ClubResource;
use Illuminate\Support\Facades\DB;

class ClubController extends Controller
{

    public function index()
    {
        //get clubs
        $clubs = Club::orderBy('coeffs', 'DESC')->get();

        //return collection of clubs as a resource
        return new ClubResource(true, 'List Data Clubs', $clubs);
    }

    public function fixtures(string $id)
    {
        $fixtures = 
        DB::table('fixtures AS a')
        ->select('b.club_name AS home_club', 'c.club_name AS away_club', 'b.club_logo AS home_club_logo', 'c.club_logo AS away_club_logo')
        ->join('clubs AS b', 'b.id', '=', 'a.club_home_id')
        ->join('clubs AS c', 'c.id', '=', 'a.club_away_id')
        ->where(function ($query) use ($id) {
            $query->where('a.club_home_id', '=', $id)
                  ->orWhere('a.club_away_id', '=', $id);
        })->get();

        //return collection of clubs as a resource
        return new ClubResource(true, 'List Data Fixtures', $fixtures);
    }

    public function draw()
    {
        //get pot
        $pot = Club::select('pot_id')->orderBy('pot_id', 'ASC')->where('is_drawn', 0)->first();

        $club = Club::where([
            ['is_drawn', '=', 0],
            ['pot_id', '=', $pot->pot_id]])->inRandomOrder()->first();

        Club::where('id', $club->id)
            ->update(['is_drawn' => 1]);
            
        return new ClubResource(true, 'Drawn Club', $club);
    }

    public function reset()
    {
        Club::query()->update(['is_drawn' => 0]);
            
        return new ClubResource(true, 'Reset Successful', 0);
    }

    public function draw_opponent(string $id)
    {
        $fixtures = DB::select('call sp_draw_fixtures(?)', [$id]);

        $result = collect($fixtures);

        return new ClubResource(true, 'Draw Successful', $result);
    }

    


    public function show(string $id): View
    {
        return view('user.profile', [
            'user' => User::findOrFail($id)
        ]);
    }


}
