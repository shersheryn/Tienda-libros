<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Catalog;

class CatalogsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('catalogs')->truncate();
        DB::table('catalogs')->insert([
            [
                'name' => '18e siecle',
                
                'description' => 'description for 18e siecle',
                'parent_id' => NULL,
                'priority' => 0,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => '19e siecle',
                
                'description' => 'description for 19e siecle',
                'parent_id' => NULL,
                'priority' => 1,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => '20e siecle',
               
                'description' => 'description for 20e siecle',
                'parent_id' => NULL,
                'priority' => 2,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Contemporain',
                
                'description' => 'description for Contemporain',
                'parent_id' => NULL,
                'priority' => 3,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
        ]);
        $parent_id = Catalog::where('name', '18e siecle')->first()->id;
        DB::table('catalogs')->insert([
            [
                'name' => 'Moronobu',

                'description' => 'description for Moronobu',
                'parent_id' => $parent_id,
                'priority' => 0,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Sugimura',

                'description' => 'description for Sugimura',
                'parent_id' => $parent_id,
                'priority' => 1,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Toshinobu',

                'description' => 'description for Toshinobu',
                'parent_id' => $parent_id,
                'priority' => 2,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
        ]);

        $parent_id = Catalog::where('name', '19e siecle')->first()->id;

        DB::table('catalogs')->insert([
            [
                'name' => 'Harunobu',

                'description' => 'description for Harunobu',
                'parent_id' => $parent_id,
                'priority' => 0,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Koryusai ',

                'description' => 'description for Koryusai ',
                'parent_id' => $parent_id,
                'priority' => 1,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Shunshō ',

                'description' => 'description for Shunshō ',
                'parent_id' => $parent_id,
                'priority' => 2,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
        ]);

        $parent_id = Catalog::where('name', '20e siecle')->first()->id;

        DB::table('catalogs')->insert([
            [
                'name' => 'Yoshitoshi',

                'description' => 'description for Yoshitoshi',
                'parent_id' => $parent_id,
                'priority' => 0,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Kunisada',

                'description' => 'description for Kunisada',
                'parent_id' => $parent_id,
                'priority' => 1,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Hasui',

                'description' => 'description for Hasui',
                'parent_id' => $parent_id,
                'priority' => 2,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
        ]);
        $parent_id = Catalog::where('name', 'Contemporain')->first()->id;
        DB::table('catalogs')->insert([
            [
                'name' => 'Hiroshige ',

                'description' => 'description for LCD Hiroshige ',
                'parent_id' => $parent_id,
                'priority' => 0,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Kuniyoshi',

                'description' => 'description for Kuniyoshi',
                'parent_id' => $parent_id,
                'priority' => 1,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Yoshitosha',

                'description' => 'description for Yoshitosha',
                'parent_id' => $parent_id,
                'priority' => 2,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
        ]);
    }
}
