<?php

use Illuminate\Database\Seeder;

class tabla_compras extends Seeder
{
    /**
     * Run the database seeds.
     *
id_proveedor INT(9) UNSIGNED,
fecha DATE NOT NULL,
subtotal DOUBLE(9,2) NOT NULL,
iva DOUBLE(9,2) NOT NULL,
total DOUBLE(9,2) NOT NULL,
id_usuario INT(9) UNSIGNED,
     * @return void
     */
    public function run()
    {
        $varProv[1]=1;  $varFecha[1]=date("Y-m-d H:i:s");
        $varProv[2]=2;  $varFecha[2]=date("Y-m-d H:i:s");
        $varProv[3]=3;  $varFecha[3]=date("Y-m-d H:i:s");
        $varProv[4]=4;  $varFecha[4]=date("Y-m-d H:i:s");

        $varUser[1]=1;
        $varUser[2]=1;
        $varUser[3]=1;
        $varUser[4]=1;

        $varSub[1]=30.00;   $varIVA[1]=4.80;    $varTotal[1]=34.80;
        $varSub[2]=70.00;   $varIVA[2]=11.20;   $varTotal[2]=81.20;
        $varSub[3]=3.50;    $varIVA[3]=0.56;    $varTotal[3]=4.06;
        $varSub[4]=30.50;   $varIVA[4]=4.88;    $varTotal[4]=35.38;

        for ( $i = 1 ; $i <= 4 ; $i++ )
        {
	        DB::table('compras')->insert([
                'id_proveedor'  => $varProv[$i],
                'fecha'         => $varFecha[$i],
                'subtotal'      => $varSub[$i],
                'iva'           => $varIVA[$i],
                'total'         => $varTotal[$i],
                'user_id'       => $varUser[$i],
	            'status'        => 1,
	        ]);
    	}
    }
}
