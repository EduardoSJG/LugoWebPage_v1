<?php

use Illuminate\Database\Seeder;

class tabla_eventos extends Seeder
{
    /**
     * Run the database seeds.
     *
nombre VARCHAR(50) NOT NULL,
descripcion VARCHAR(80),
direccion VARCHAR(80) NOT NULL,
fecha DATETIME NOT NULL,
id_boleto INT(9) UNSIGNED,
     * @return void
     */
    public function run()
    {
        $varNom[1]='True Tour';         $varDesc[1]='1er Concierto despues de cuarentena';
        $varNom[2]='Lugo Confort';      $varDesc[2]='LUGO regresa a casa';
        
        $varDirec[1]='Calle Nicolás Bravo Nte. 825, Unión, 50040 Toluca de Lerdo, Méx.';
        $varDirec[2]='Calle Ignacio Zaragoza, Espiritu Santo, 52140 Metepec, Méx.';

        $date[1]= '15th March 2021';
        $date[2]= '2nd April 2021';

        $varBoleto[1]=4;
        $varBoleto[2]=4;
        
        for ( $i = 1 ; $i <= 2 ; $i++ )
        {
            $varFecha[$i]=date('Y-m-d', strtotime( $date[$i]));

	        DB::table('eventos')->insert([
                'nombre'        => $varNom[$i],
                'descripcion'   => $varDesc[$i],
                'direccion'     => $varDirec[$i],
                'fecha'         => $varFecha[$i],
                'id_boleto'     => $varBoleto[$i],
	            'status'        => 1,
	        ]);
    	}
    }
}
