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
       		'product'=>'Samsung Mobile',
       		'discription'=>", With Full High Resolution",
       		'price'		=>'30000',
       		'images'	=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ_TU061OB9WU-ICKNzTO4NTQRp0S-nQvcrQcZOyWmVBr55Z61qTOcr-2mG7b0_W0_0AOs&usqp=CAU'
       	],
       ]);
    }
}
