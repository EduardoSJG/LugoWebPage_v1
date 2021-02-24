<?php

use Illuminate\Database\Seeder;

class tabla_fotos_productos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $varProducto[1]=1;  $varRuta[1]='images/notFound';
        $varProducto[2]=2;  $varRuta[2]='images/notFound';
        $varProducto[3]=3;  $varRuta[3]='images/notFound';
        $varProducto[4]=4;  $varRuta[4]='images/notFound';

		for ( $i = 1 ; $i <= 4 ; $i++ ){
	        DB::table('fotos_productos')->insert([
                'producto_id'   => $varProducto[$i],
                'ruta'          => $varRuta[$i],
	            'status'        => 1,
	        ]);
    	}
    }
}
