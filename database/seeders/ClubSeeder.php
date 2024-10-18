<?php

namespace Database\Seeders;

use App\Models\Club;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ClubSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $clubs = [
            ['pot_id'=>'2','club_name' => 'AC Milan','club_logo'=>'https://a.espncdn.com/i/teamlogos/soccer/500/103.png','coeffs' =>	59000],
            ['pot_id'=>'4','club_name' => 'AS Monaco','club_logo'=>'https://a.espncdn.com/i/teamlogos/soccer/500/174.png','coeffs' =>	24000],
            ['pot_id'=>'2','club_name' => 'Arsenal','club_logo'=>'https://a.espncdn.com/i/teamlogos/soccer/500/359.png','coeffs' =>	72000],
            ['pot_id'=>'4','club_name' => 'Aston Villa','club_logo'=>'https://a.espncdn.com/i/teamlogos/soccer/500/362.png','coeffs' =>	20860],
            ['pot_id'=>'2','club_name' => 'Atalanta','club_logo'=>'https://a.espncdn.com/i/teamlogos/soccer/500/105.png','coeffs' =>	81000],
            ['pot_id'=>'2','club_name' => 'Atlético Madrid','club_logo'=>'https://a.espncdn.com/i/teamlogos/soccer/500/1068.png','coeffs' =>	89000],
            ['pot_id'=>'1','club_name' => 'Barcelona','club_logo'=>'https://a.espncdn.com/i/teamlogos/soccer/500/83.png','coeffs' =>	91000],
            ['pot_id'=>'2','club_name' => 'Bayer Leverkusen','club_logo'=>'https://a.espncdn.com/i/teamlogos/soccer/500/131.png','coeffs' =>	90000],
            ['pot_id'=>'1','club_name' => 'Bayern Munich','club_logo'=>'https://a.espncdn.com/i/teamlogos/soccer/500/132.png','coeffs' =>	144000],
            ['pot_id'=>'2','club_name' => 'Benfica','club_logo'=>'https://a.espncdn.com/i/teamlogos/soccer/500/1929.png','coeffs' =>	79000],
            ['pot_id'=>'4','club_name' => 'Bologna','club_logo'=>'https://a.espncdn.com/i/teamlogos/soccer/500/107.png','coeffs' =>	18056],
            ['pot_id'=>'1','club_name' => 'Borussia Dortmund','club_logo'=>'https://a.espncdn.com/i/teamlogos/soccer/500/124.png','coeffs' =>	97000],
            ['pot_id'=>'4','club_name' => 'Brest','club_logo'=>'https://a.espncdn.com/i/teamlogos/soccer/500/6997.png','coeffs' =>	13366],
            ['pot_id'=>'3','club_name' => 'Celtic','club_logo'=>'https://a.espncdn.com/i/teamlogos/soccer/500/256.png','coeffs' =>	32000],
            ['pot_id'=>'2','club_name' => 'Club Brugge','club_logo'=>'https://a.espncdn.com/i/teamlogos/soccer/500/570.png','coeffs' =>	64000],
            ['pot_id'=>'3','club_name' => 'Dinamo Zagreb','club_logo'=>'https://a.espncdn.com/i/teamlogos/soccer/500/597.png','coeffs' =>	50000],
            ['pot_id'=>'3','club_name' => 'Feyenoord Rotterdam','club_logo'=>'https://a.espncdn.com/i/teamlogos/soccer/500/142.png','coeffs' =>	57000],
            ['pot_id'=>'4','club_name' => 'Girona','club_logo'=>'https://a.espncdn.com/i/teamlogos/soccer/500/9812.png','coeffs' =>	17897],
            ['pot_id'=>'1','club_name' => 'Internazionale','club_logo'=>'https://a.espncdn.com/i/teamlogos/soccer/500/110.png','coeffs' =>	101000],
            ['pot_id'=>'2','club_name' => 'Juventus','club_logo'=>'https://a.espncdn.com/i/teamlogos/soccer/500/111.png','coeffs' =>	80000],
            ['pot_id'=>'3','club_name' => 'Lille','club_logo'=>'https://a.espncdn.com/i/teamlogos/soccer/500/166.png','coeffs' =>	47000],
            ['pot_id'=>'1','club_name' => 'Liverpool','club_logo'=>'https://a.espncdn.com/i/teamlogos/soccer/500/364.png','coeffs' =>	114000],
            ['pot_id'=>'1','club_name' => 'Manchester City','club_logo'=>'https://a.espncdn.com/i/teamlogos/soccer/500/382.png','coeffs' =>	148000],
            ['pot_id'=>'3','club_name' => 'PSV Eindhoven','club_logo'=>'https://a.espncdn.com/i/teamlogos/soccer/500/148.png','coeffs' =>	54000],
            ['pot_id'=>'1','club_name' => 'Paris Saint-Germain','club_logo'=>'https://a.espncdn.com/i/teamlogos/soccer/500/160.png','coeffs' =>	116000],
            ['pot_id'=>'1','club_name' => 'RB Leipzig','club_logo'=>'https://a.espncdn.com/i/teamlogos/soccer/500/11420.png','coeffs' =>	97000],
            ['pot_id'=>'3','club_name' => 'RB Salzburg','club_logo'=>'https://a.espncdn.com/i/teamlogos/soccer/500/2790.png','coeffs' =>	50000],
            ['pot_id'=>'1','club_name' => 'Real Madrid','club_logo'=>'https://a.espncdn.com/i/teamlogos/soccer/500/86.png','coeffs' =>	136000],
            ['pot_id'=>'3','club_name' => 'Red Star Belgrade','club_logo'=>'https://a.espncdn.com/i/teamlogos/soccer/500/2290.png','coeffs' =>	40000],
            ['pot_id'=>'4','club_name' => 'SK Sturm Graz','club_logo'=>'https://a.espncdn.com/i/teamlogos/soccer/500/3746.png','coeffs' =>	14500],
            ['pot_id'=>'2','club_name' => 'Shakhtar Donetsk','club_logo'=>'https://a.espncdn.com/i/teamlogos/soccer/500/493.png','coeffs' =>	63000],
            ['pot_id'=>'4','club_name' => 'Slovan Bratislava','club_logo'=>'https://a.espncdn.com/i/teamlogos/soccer/500/521.png','coeffs' =>	30500],
            ['pot_id'=>'4','club_name' => 'Sparta Prague','club_logo'=>'https://a.espncdn.com/i/teamlogos/soccer/500/433.png','coeffs' =>	22500],
            ['pot_id'=>'3','club_name' => 'Sporting CP','club_logo'=>'https://a.espncdn.com/i/teamlogos/soccer/500/2250.png','coeffs' =>	54500],
            ['pot_id'=>'4','club_name' => 'VfB Stuttgart','club_logo'=>'https://a.espncdn.com/i/teamlogos/soccer/500/134.png','coeffs' =>	17324],
            ['pot_id'=>'3','club_name' => 'Young Boys','club_logo'=>'https://a.espncdn.com/i/teamlogos/soccer/500/2722.png','coeffs' =>	34500],
        ];

        DB::table('clubs')->insert($clubs);


    }
}
