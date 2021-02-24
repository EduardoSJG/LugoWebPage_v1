<?php

use Illuminate\Database\Seeder;

class tabla_productos extends Seeder
{
    /**
     * Run the database seeds.
     * 
     * @return void
     */
    public function run()
    {
        $varNom[1]='Dos Lunas';         $varDesc[1]='Disco de LUGO lanzado en 2019 con 6 canciones';
		$varNom[2]='Lugo Shirt';        $varDesc[2]='Playera Mediana de Algodon con el logo del grupo';
		$varNom[3]='Lugo Pick';         $varDesc[3]='Plumilla para guitarra con el logo del grupo 3.11mm';
        $varNom[4]='True Tour Ticket';  $varDesc[4]='Boleto para el proximo evento del grupo';
        
        $varExis[1]=100;    $varPrecioCompra[1]=30.00;     $varPrecioVenta[1]=69.99;   
        $varExis[2]=60;     $varPrecioCompra[2]=70.00;     $varPrecioVenta[2]=99.99;
        $varExis[3]=1000;   $varPrecioCompra[3]=3.50;      $varPrecioVenta[3]=10.00;
        $varExis[4]=100;    $varPrecioCompra[4]=30.50;     $varPrecioVenta[4]=59.99;

        $varCateg[1]=1;  $varProv[1]=1;
        $varCateg[2]=2;  $varProv[2]=2;
        $varCateg[3]=3;  $varProv[3]=3;
        $varCateg[4]=4;  $varProv[4]=4;

		for ( $i = 1 ; $i <= 4 ; $i++ ){
	        DB::table('productos')->insert([
                'nombre'        => $varNom[$i],
                'descripcion'   => $varDesc[$i],
                'existencia'    => $varExis[$i],
                'precio_compra' => $varPrecioCompra[$i],
                'precio_venta'  => $varPrecioVenta[$i],
                'categoria_id'  => $varCateg[$i],
                'id_proveedor'  => $varProv[$i],
	            'status' => 1,
	        ]);
    	}
    }
}
