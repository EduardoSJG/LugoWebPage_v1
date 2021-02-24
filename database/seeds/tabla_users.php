<?php

use Illuminate\Database\Seeder;

class tabla_users extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $varNom[1]='Eddy';  $varApPat[1]='Juárez';    $varApMat[1]='García';    $varEmail[1]='Eddy@gmail.com';      $varTipUsu[1]=1;
        $varNom[2]='Caro';  $varApPat[2]='Marquez';   $varApMat[2]='Hernandez'; $varEmail[2]='Caro@gmail.com';      $varTipUsu[2]=2;
        $varNom[3]='Leo';   $varApPat[3]='Santes';    $varApMat[3]='Hilario';   $varEmail[3]='Leo@gmail.com';       $varTipUsu[3]=2;
        $varNom[4]='Jaz';   $varApPat[4]='Romero';    $varApMat[4]='Flores';    $varEmail[4]='Jaz@gmail.com';       $varTipUsu[4]=2;
        $varNom[5]='Pepe';  $varApPat[5]='Sanchez';   $varApMat[5]='Gomez';     $varEmail[5]='Pepe@gmail.com';      $varTipUsu[5]=2;
        $varNom[6]='John';  $varApPat[6]='Cena';      $varApMat[6]='';          $varEmail[6]='John@gmail.com';      $varTipUsu[6]=2;
        $varNom[7]='Max';   $varApPat[7]='Conter';    $varApMat[7]='Delgado';   $varEmail[7]='Max@gmail.com';       $varTipUsu[7]=2;
        $varNom[8]='Jose';  $varApPat[8]='Mendiola';  $varApMat[8]='Perez';     $varEmail[8]='Jose@gmail.com';      $varTipUsu[8]=2;
        $varNom[9]='Juan';  $varApPat[9]='Escutia';   $varApMat[9]='Hereira';   $varEmail[9]='Juan@gmail.com';      $varTipUsu[9]=2;
        $varNom[10]='Bob';  $varApPat[10]='Esponja';  $varApMat[10]='Cuadrada'; $varEmail[10]='Bob@gmail.com';      $varTipUsu[10]=2;
        $varNom[11]='Meli'; $varApPat[11]='Ibañez';   $varApMat[11]='Sanchez';  $varEmail[11]='Meli@gmail.com';     $varTipUsu[11]=2;
        $varNom[12]='Jess'; $varApPat[12]='Garcia';   $varApMat[12]='Flores';   $varEmail[12]='Jess@gmail.com';     $varTipUsu[12]=2;
        $varNom[13]='Xime'; $varApPat[13]='Sandoval'; $varApMat[13]='Dominguez';$varEmail[13]='Xime@gmail.com';     $varTipUsu[13]=2;
        $varNom[14]='Shadoune';$varApPat[14]='Seige'; $varApMat[14]='';         $varEmail[14]='Shadoune666@gmail.com';$varTipUsu[14]=2;

        $varTelef[1]='7221111111';  $varDirec[1]='Su casa';      $varPais[1]=1;     $varEntid[1]=1;
        $varTelef[2]='7221111112';  $varDirec[2]='Su casa x2';   $varPais[2]=1;     $varEntid[2]=1;
        $varTelef[3]='7221111113';  $varDirec[3]='Su casa x3';   $varPais[3]=1;     $varEntid[3]=1;
        $varTelef[4]='7221111114';  $varDirec[4]='Su casa x4';   $varPais[4]=1;     $varEntid[4]=3;
        $varTelef[5]='7221111115';  $varDirec[5]='Su casa x5';   $varPais[5]=1;     $varEntid[5]=6;
        $varTelef[6]='7221111116';  $varDirec[6]='Su casa x6';   $varPais[6]=2;     $varEntid[6]=10;
        $varTelef[7]='7221111117';  $varDirec[7]='Su casa x7';   $varPais[7]=1;     $varEntid[7]=8;
        $varTelef[8]='7221111118';  $varDirec[8]='Su casa x8';   $varPais[8]=1;     $varEntid[8]=9;
        $varTelef[9]='7221111119';  $varDirec[9]='Su casa x9';   $varPais[9]=1;     $varEntid[9]=4;
        $varTelef[10]='7221111120'; $varDirec[10]='Su casa x10'; $varPais[10]=2;    $varEntid[10]=13;
        $varTelef[11]='7221111121'; $varDirec[11]='Su casa x11'; $varPais[11]=1;    $varEntid[11]=2;
        $varTelef[12]='7221111122'; $varDirec[12]='Su casa x12'; $varPais[12]=1;    $varEntid[12]=5;
        $varTelef[13]='7221111123'; $varDirec[13]='Su casa x13'; $varPais[13]=1;    $varEntid[13]=7;
        $varTelef[14]='7221111124'; $varDirec[14]='Su casa x14'; $varPais[14]=5;    $varEntid[14]=14;
        
        $varColonia[1]='Col1';  $varCP[1]=12345;    $date[1]= '15th August 1998';
        $varColonia[2]='Col1';  $varCP[2]=12345;    $date[2]= '15th December 1998';
        $varColonia[3]='Col1';  $varCP[3]=12345;    $date[3]= '1st January 1998';
        $varColonia[4]='Col2';  $varCP[4]=23456;    $date[4]= '27th February 1992';
        $varColonia[5]='Col3';  $varCP[5]=34567;    $date[5]= '2nd March 2001';
        $varColonia[6]='Col4';  $varCP[6]=45678;    $date[6]= '5th April 2006';
        $varColonia[7]='Col5';  $varCP[7]=56790;    $date[7]= '7th May 1998';
        $varColonia[8]='Col6';  $varCP[8]=11335;    $date[8]= '6th June 1999';
        $varColonia[9]='Col7';  $varCP[9]=22446;    $date[9]= '10th July 1980';
        $varColonia[10]='ColD'; $varCP[10]=33557;   $date[10]= '19th August 1978';
        $varColonia[11]='Col54';$varCP[11]=44668;   $date[11]= '27th September 2000';
        $varColonia[12]='ColG'; $varCP[12]=55779;   $date[12]= '22nd October 1985';
        $varColonia[13]='ColA'; $varCP[13]=66441;   $date[13]= '27th November 1978';
        $varColonia[14]='Col14';$varCP[14]=99774;   $date[14]= '31st December 1969';
        

        $varUsername[1]='eddy_emp'; $varPW[1]='123456';
        $varUsername[2]='user2';    $varPW[2]='123456'; 
        $varUsername[3]='user3';    $varPW[3]='123456';
        $varUsername[4]='user4';    $varPW[4]='123456';
        $varUsername[5]='user5';    $varPW[5]='123456';
        $varUsername[6]='user6';    $varPW[6]='123456';
        $varUsername[7]='user7';    $varPW[7]='123456';
        $varUsername[8]='user8';    $varPW[8]='123456';
        $varUsername[9]='user9';    $varPW[9]='123456';
        $varUsername[10]='user10';  $varPW[10]='123456';
        $varUsername[11]='user11';  $varPW[11]='123456';
        $varUsername[12]='user12';  $varPW[12]='123456';
        $varUsername[13]='user13';  $varPW[13]='123456';
        $varUsername[14]='user14';  $varPW[14]='123456';


        for ( $i = 1 ; $i <= 14 ; $i++ )
        {   
            $varFechaN[$i]=date('Y-m-d', strtotime( $date[$i]));

	        DB::table('users')->insert([
                'nombre'        => $varNom[$i],
                'ap_pat'        => $varApPat[$i],
                'ap_mat'        => $varApMat[$i],
                'email'         => $varEmail[$i],
                'telefono'      => $varTelef[$i],
                'direccion'     => $varDirec[$i],
                'id_pais'       => $varPais[$i],
                'id_entidad'    => $varEntid[$i],
                'id_tipo_usu'   => $varTipUsu[$i],
                'colonia'       => $varColonia[$i],
                'cp'            => $varCP[$i],
                'fecha_naci'    => $varFechaN[$i],
                'username'      => $varUsername[$i],
                'password'      => $varPW[$i],
	            'status'        => 1,
	        ]);
    	}
    }
}
