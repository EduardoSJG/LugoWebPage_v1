<?php

use Illuminate\Database\Seeder;

class tabla_detalle_venta extends Seeder
{
    /**
     * Run the database seeds.
     *
id_venta INT(9) UNSIGNED,
id_producto INT(9) UNSIGNED,
cantidad INT(6) NOT NULL,
precio_compra DOUBLE(6,2) NOT NULL,
precio_venta DOUBLE(6,2) NOT NULL,
     * @return void
     */
    public function run()
    {
        $varVenta[1]=1;    $varProducto[1]=1;
        $varVenta[2]=2;    $varProducto[2]=2;
        $varVenta[3]=3;    $varProducto[3]=3;
        $varVenta[4]=4;    $varProducto[4]=4;

        $varCantidad[1]=1;
        $varCantidad[2]=1;
        $varCantidad[3]=1;
        $varCantidad[4]=1;

        $varPrecioCompra[1]=30.00;     $varPrecioVenta[1]=69.99;   
        $varPrecioCompra[2]=70.00;     $varPrecioVenta[2]=99.99;
        $varPrecioCompra[3]=3.50;      $varPrecioVenta[3]=10.00;
        $varPrecioCompra[4]=30.50;     $varPrecioVenta[4]=59.99;

        for ( $i = 1 ; $i <= 4 ; $i++ )
        {
	        DB::table('detalle_venta')->insert([
                'venta_id'      => $varVenta[$i],
                'producto_id'   => $varProducto[$i],
                'cantidad'      => $varCantidad[$i],
                'precio_compra' => $varPrecioCompra[$i],
                'precio_venta'  => $varPrecioVenta[$i],
	            'status' => 1,
	        ]);
    	}//
    }
}
