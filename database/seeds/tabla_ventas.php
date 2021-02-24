<?php

use Illuminate\Database\Seeder;

class tabla_ventas extends Seeder
{
    /**
     * Run the database seeds.
     *
id_cliente INT(9) UNSIGNED,
fecha DATE NOT NULL,
subtotal DOUBLE(9,2) NOT NULL,
iva DOUBLE(9,2) NOT NULL,
total DOUBLE(9,2) NOT NULL,
id_tipo_pago INT(9) UNSIGNED,
     * @return void
     */
    public function run()
    {
        $varCliente[1]=2;   $varFecha[1]=date("Y-m-d H:i:s");
        $varCliente[2]=7;   $varFecha[2]=date("Y-m-d H:i:s");
        $varCliente[3]=10;  $varFecha[3]=date("Y-m-d H:i:s");
        $varCliente[4]=5;   $varFecha[4]=date("Y-m-d H:i:s");

        $varUser[1]=2;
        $varUser[2]=7;
        $varUser[3]=10;
        $varUser[4]=5;

        $varSub[1]=69.99;   $varIVA[1]=11.20;   $varTotal[1]=81.19;
        $varSub[2]=99.99;   $varIVA[2]=15.99;   $varTotal[2]=115.98;
        $varSub[3]=10.00;   $varIVA[3]=1.60;    $varTotal[3]=11.60;
        $varSub[4]=59.99;   $varIVA[4]=9.55;    $varTotal[4]=69.54;

        $varTipoPago[1]=1;
        $varTipoPago[2]=2;
        $varTipoPago[3]=2;
        $varTipoPago[4]=1;

		for ( $i = 1 ; $i <= 4 ; $i++ ){
	        DB::table('ventas')->insert([
                'id_cliente'    => $varCliente[$i],
                'fecha'         => $varFecha[$i],
                'subtotal'      => $varSub[$i],
                'iva'           => $varIVA[$i],
                'total'         => $varTotal[$i],
                'id_tipo_pago'  => $varTipoPago[$i],
                'user_id'       => $varUser[$i],
	            'status'        => 1,
	        ]);
    	}
    }
}
