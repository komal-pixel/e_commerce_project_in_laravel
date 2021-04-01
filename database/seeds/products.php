<?php

use Illuminate\Database\Seeder;

class products extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('products')->insert([
       	[
       		'product'=>'LED TV',
       		'discription'=>"Light Emiting Diode TV, With Full High Resolution",
       		'price'		=>'25000',
       		'images'	=>'https://lh3.googleusercontent.com/proxy/rzn_BjIkyA7bhtVKrT59OmV_82AUrZeE2MTZr0FoG9-WP8drVXwAS6N4d0TxnMzkaGXY8OlydfSAVZ6l5vnbDtCvUpY0XZFsg-Aplt30jYkOmiTytw-6ODlUC8PtBBVnniJLYmDo3fI'
       	],[
       		'product'=>'Samsung Mobile',
       		'discription'=>"New Letest samsung mobile And Amazing touch pad",
       		'price'		=>'15000',
       		'images'	=>'https://www.searchpng.com/wp-content/uploads/2019/02/Vivo-Apex-PNG-Image-715x715.png'
       	],[
       		'product'=>'Fridge',
       		'discription'=>"Coolest In Summer Makes Cool More",
       		'price'		=>'20000',
       		'images'	=>'https://purepng.com/public/uploads/large/purepng.com-refrigeratorrefrigeratorfridgeiceboxrefrigeratoryfreezer-1701528368818jyb9k.png'
       	]
       ]);
    }
}
