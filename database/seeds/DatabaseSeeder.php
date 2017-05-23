<?php

use Illuminate\Database\Seeder;
use App\category;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        factory(App\catagory::class,50)->create();
    }
}
