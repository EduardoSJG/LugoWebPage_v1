<?php

use Illuminate\Database\Seeder;

class tabla_proveedores extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $varNom[1]='ImpulsHub';     $varRFC[1]='VECJ880326 XXX';    $varRazSoc[1]='Puentes Dorados, C.A.';
		$varNom[2]='SHEIN';         $varRFC[2]='BACG860723 XXX';    $varRazSoc[2]='Telas Minados, C.A.';
        $varNom[3]='MAALVA';        $varRFC[3]='ABCD111325 XXX';    $varRazSoc[3]='Chascomús, S.A. de C.V.';
        $varNom[4]='TicketControl'; $varRFC[4]='XCVB270376 XXX';    $varRazSoc[4]='Monsters, Inc';
  
        $varDirec[1]='por ahi';         $varEmail[1]='ImpulsHub@gmail.com';     $varContacto[1]='Mauricio Rodriguez';
        $varDirec[2]='por alla';        $varEmail[2]='SHEIN@gmail.com';         $varContacto[2]='Antonio Saldovar';
        $varDirec[3]='hasta alla';      $varEmail[3]='MAALVA@gmail.com';        $varContacto[3]='Andrea Tinajero';
        $varDirec[4]='más cerquita';    $varEmail[4]='Ticket@gmail.com';        $varContacto[4]='Victor Manuel';

		$varPais[1]=1;  $varEntid[1]=8; $varCP[1]=12345;    $varCol[1]='Toluca de Lerdo';   $varTel[1]='7220000001';
        $varPais[2]=1;  $varEntid[2]=8; $varCP[2]=12345;    $varCol[2]='Toluca de Lerdo';   $varTel[2]='7220000002';
        $varPais[3]=1;  $varEntid[3]=8; $varCP[3]=12345;    $varCol[3]='Toluca de Lerdo';   $varTel[3]='7220000003';
        $varPais[4]=1;  $varEntid[4]=8; $varCP[4]=12345;    $varCol[4]='Toluca de Lerdo';   $varTel[4]='7220000004';

		for ( $i = 1 ; $i <= 4 ; $i++ ){
	        DB::table('proveedores')->insert([
	            'nombre'        => $varNom[$i],
                'rfc'           => $varRFC[$i],
                'razon_social'  => $varRazSoc[$i],
                'direccion'     => $varDirec[$i],
                'email'         => $varEmail[$i],
                'contacto'      => $varContacto[$i],
                'id_pais'       => $varPais[$i],
                'id_entidad'    => $varEntid[$i],
                'cp'            => $varCP[$i],
                'colonia'       => $varCol[$i],
                'telefono'      => $varTel[$i],
	            'status'        => 1,
	        ]);
    	}
    }
}
