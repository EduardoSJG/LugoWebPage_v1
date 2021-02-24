<?php

use Illuminate\Database\Seeder;

class tabla_entidades extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $var1[1]='Aguascalientes';			$var2[1]='MX';		$var3[1]=1;
		$var1[2]='Baja California';			$var2[2]='MX';		$var3[2]=1;
		$var1[3]='Baja California Sur';		$var2[3]='MX';		$var3[3]=1;
		$var1[4]='Coahuila de Zaragoza';	$var2[4]='MX';		$var3[4]=1;
		$var1[5]='Ciudad de México';		$var2[5]='MX';		$var3[5]=1;
		$var1[6]='Hidalgo';					$var2[6]='MX';		$var3[6]=1;
		$var1[7]='Jalisco';					$var2[7]='MX';		$var3[7]=1;
		$var1[8]='México';					$var2[8]='MX';		$var3[8]=1;
		$var1[9]='Michoacán';				$var2[9]='MX';		$var3[9]=1;
		$var1[10]='California';				$var2[10]='US';		$var3[10]=2;
		$var1[11]='Washington';				$var2[11]='US';		$var3[11]=2;
		$var1[12]='Florida';				$var2[12]='US';		$var3[12]=2;
		$var1[13]='Texas';					$var2[13]='US';		$var3[13]=2;
		$var1[14]='Paris';					$var2[14]='FR';		$var3[14]=5;

		for ( $i = 1 ; $i <= 14 ; $i++ ){
	        DB::table('entidades')->insert([
				'clave_pais' => $var2[$i],
				'id_pais' => $var3[$i],
	            'nombre' => $var1[$i],
	            'status' => 1,
	        ]);
    	}
    }
}
