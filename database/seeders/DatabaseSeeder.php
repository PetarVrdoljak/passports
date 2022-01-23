<?php

namespace Database\Seeders;

use App\Models\Place;
use App\Models\Municipality;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $counties = [
            ['county_name' => 'Zagrebačka'],
            ['county_name' => 'Krapinsko-zagorska'],
            ['county_name' => 'Sisačko-moslavačka'],
            ['county_name' => 'Karlovačka'],
            ['county_name' => 'Varaždinska'],
            ['county_name' => 'Koprivničko-križevačka'],
            ['county_name' => 'Bjelovarsko-bilogorska'],
            ['county_name' => 'Primorsko-goranska'],
            ['county_name' => 'Ličko-senjska'],
            ['county_name' => 'Virovitičko-podravska'],
            ['county_name' => 'Požeško-slavonska'],
            ['county_name' => 'Brodsko-posavska'],
            ['county_name' => 'Zadarska'],
            ['county_name' => 'Osječko-baranjska'],
            ['county_name' => 'Šibensko-kninska'],
            ['county_name' => 'Vukovarsko-srijemska'],
            ['county_name' => 'Splitsko-dalmatinska'],
            ['county_name' => 'Istarska'],
            ['county_name' => 'Dubrovačko-neretvanska'],
            ['county_name' => 'Međimurska'],
            ['county_name' => 'Grad Zagreb']
        ];

        DB::table('counties')->insert($counties);

        $municipalities = [
            ['municipality_name' => 'Rakovica', 'county_id' => 4],
            ['municipality_name' => 'Grad Slunj', 'county_id' => 4],
            ['municipality_name' => 'Grad Otočac', 'county_id' => 9]
        ];

        DB::table('municipalities')->insert($municipalities);

        $places = [
            ['place_name' => 'Grabovac', 'municipality_id' => 1],
            ['place_name' => 'Staro Selo', 'municipality_id' => 3],
            ['place_name' => 'Lumbardenik', 'municipality_id' => 2]
        ];
        
        DB::table('places')->insert($places);

        $police_administrations = [
            ['pa_name' => 'Policijska uprava karlovačka'],
            ['pa_name' => 'Policijska uprava ličko-senjska'],
            ['pa_name' => 'Policijska uprava zagrebačka']
        ];

        DB::table('police_administrations')->insert($police_administrations);

        $passports = [
            ['model_type' => 'tvrda', 'issue_date'=> '2020/12/11', 'exparation_date' => '2024/12/11','police_administration_id' => 1 ],
            ['model_type' => 'meka', 'issue_date'=> '2020/8/21', 'exparation_date' => '2024/8/21','police_administration_id' => 2]
        ];

        DB::table('passports')->insert($passports);

        $users =[
            ['name'=>'Ilija','surname'=> 'Špoljar', 'date_of_birth' => '1989/4/5','gender'=>'Muško','place_id' => 2,'passport_id'=>1],
            ['name'=>'Kristina','surname'=> 'Lipak', 'date_of_birth' => '1986/6/7','gender'=>'Žensko','place_id' => 3,'passport_id'=>2]
        ];
        DB::table('users')->insert($users);

        User::factory()
            ->count(50)
            ->create();

        Place::factory()->count(20)->create();
        Municipality::factory()->count(30)->create();
        

    }
}