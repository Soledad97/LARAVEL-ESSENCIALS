<?php

use Illuminate\Database\Seeder;
use App\Photo;

class PhotosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     
        $photos = array(
            ['source' => 'producto1.jpg','type' =>"product"],
            ['source' => 'producto2.jpg','type' =>"product"],
            ['source' => 'producto3.jpg','type' =>"product"],
            ['source' => 'producto4.jpg','type' =>"product"],
            ['source' => 'producto5.jpg','type' =>"product"],

        );
        foreach($photos as $photo)
        {
            Photo::insert($photo);
        }
    }
}
