<?php

use Illuminate\Database\Seeder;

class tabla_categorias extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $var1[1]='Música';
		$var1[2]='Ropa';
		$var1[3]='Accesorios';
		$var1[4]='Boletos';

		$var2[1]='Sencillos, discos y más';
		$var2[2]='Informales, interiores, superiores y más';
		$var2[3]='Stickers, tazas, mochilas, etc';
		$var2[4]='Boletos para eventos';
		

		for ( $i = 1 ; $i <= 4 ; $i++ ){
	        DB::table('categorias')->insert([
	            'nombre' => $var1[$i],
	            'descripcion' => $var2[$i],
	            'status' => 1,
	        ]);
    	}
    }
}
