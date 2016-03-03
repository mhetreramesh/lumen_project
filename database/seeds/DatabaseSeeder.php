<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       factory(App\User::class, 449)->create()->each(function($u) {
        	$u->posts()->save(factory(App\Post::class)->make());
    	});
    }
}
