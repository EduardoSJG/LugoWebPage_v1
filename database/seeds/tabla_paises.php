<?php

use Illuminate\Database\Seeder;

class tabla_paises extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $var1[1]='México';
		$var1[2]='Estados Unidos';
		$var1[3]='Alemania';
		$var1[4]='España';
		$var1[5]='Francia';
		$var1[6]='Finlandia';
        $var1[7]='Colombia';
        $var1[8]='Argentina';
        $var1[9]='Japón';
        $var1[10]='India';
        $var1[11]='Australia';
        $var1[12]='Sudáfrica';
        $var1[13]='Honduras';
        $var1[14]='Rusia';

		$var2[1]='MX';
		$var2[2]='US';
		$var2[3]='DE';
		$var2[4]='ES';
		$var2[5]='FR';
		$var2[6]='FI';
        $var2[7]='CO';
        $var2[8]='AR';
        $var2[9]='JP';
        $var2[10]='IN';
        $var2[11]='AU';
        $var2[12]='ZA';
        $var2[13]='HN';
        $var2[14]='RU';
        

        for ( $i = 1 ; $i <= 14 ; $i++ ){
	        DB::table('paises')->insert([
	            'nombre' => $var1[$i],
	            'clave' => $var2[$i],
	            'status' => 1,
	        ]);
    	}

        
    }
}
