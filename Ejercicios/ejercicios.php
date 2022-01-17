<?php
     include_once("Estudiante.php");
     //Ejercicio 1
     //Suma=1+2+3-4+5+6+7-8...N
     //N=8
     //Suma=12

      $N=8;
      $contador =0;
      $suma =0;
     for ($i=1; $i <= $N ; $i++) {         	
        	$contador++;
        	if ($contador==4) {
        		$suma-=$i;
        		$contador=0;
        	}else{
        		$suma+=$i;        		
        	}
     }

     echo "Suma Ejercicio 1: ".$suma;

   /****************************************************/

   //Ejercicio 2
     //Suma=2+4+16+256...N
     //N=256
     //Suma=278

      $N=256;
      $contador =0;
      $suma =0;
     for ($i=2; $i <= $N ; $i*=$i) {   	
        	
        	$suma+=$i;
     } 
    echo "<br>";
     echo "Suma Ejercicio 2: ".$suma;

     
     /***************************************************/


     //Ejercicio 3
     //Suma=1+3-5+7+9-11...N
     //N=11
     //Suma=4

      $N=11;
      $contador =0;
      $suma =0;
     for ($i=1; $i <= $N ; $i+=2) {         	
        	$contador++;
        	if ($contador==3) {
        		$suma-=$i;
        		$contador=0;
        	}else{
        		$suma+=$i;        		
        	}
     }
     
     echo "<br>";
     echo "Suma Ejercicio 3: ".$suma;

      /***************************************************/


     //Ejercicio 4
     //Suma=2+4+6+8-10+12+14+16+18-20...N
     //N=20
     //Suma=50

      $N=20;
      $contador =0;
      $suma =0;
     for ($i=2; $i <= $N ; $i+=2) {         	
        	$contador++;
        	if ($contador==5) {
        		$suma-=$i;
        		$contador=0;
        	}else{
        		$suma+=$i;        		
        	}
     }
     
     echo "<br>";
     echo "Suma Ejercicio 4: ".$suma;


    /**************************************************************************************************** */
    //Matriz de 3x3
    $matriz[0][0] = 12;
    $matriz[0][1] = 13;
    $matriz[0][2] = 14;
    $matriz[1][0] = 11;
    $matriz[1][1] = 12;
    $matriz[1][2] = 13;
    $matriz[2][0] = 15;
    $matriz[2][1] = 16;
    $matriz[2][2] = 17;

    /* 12 13 14
       11 12 13
       15 16 17*/

    
    
    //array_push($arr_estudiantes,'1');
    $arr_grados =  ['1','2','3','4','5'];
    $arr_grados =  ['1','2','3','4','5'];
    $contador_estudiantes = [0,0,0,0,0];

    $estudiante1 = new Estudiante("Cristian", 5,20);
    $estudiante2 = new Estudiante("Alberto", 3,30);
    $estudiante3 = new Estudiante("Pedro", 2,19);
    $estudiante4 = new Estudiante("Jose", 1,19);
    $estudiante5 = new Estudiante("Maria", 4,15);
    $estudiante6 = new Estudiante("Esther", 3,40);
    $estudiante7 = new Estudiante("Alejandra", 2,10);   
    $estudiante8 = new Estudiante("Gloria", 4,9);
    $estudiante9 = new Estudiante("Sandra", 3,40);
    $estudiante10 = new Estudiante("Lina", 2,25);

    $arr_estudiantes =  array($estudiante1,$estudiante2,$estudiante3,$estudiante4,$estudiante5,
                         $estudiante6,$estudiante7,$estudiante8,$estudiante9,$estudiante10);
  

   $contador =0;
   $suma1 =0;
   $suma2 =0;
   
    echo "<br>";
   

    for ($i=0; $i < sizeof($arr_estudiantes); $i++) { 
        
        if($arr_estudiantes[$i]->getEdad()>20){
          
          $contador_estudiantes[$arr_estudiantes[$i]->getCurso()-1] = $contador_estudiantes[$arr_estudiantes[$i]->getCurso()-1]+1;
        }
      
    }

    echo "<br>"; 

    for ($i=0; $i < sizeof($contador_estudiantes); $i++) { 
        
      echo "Curso ".($i+1)." Cantidad de estudiante ".$contador_estudiantes[$i];
      echo "<br>";      
      
    
  }

    for ($i=0; $i < sizeof($arr_estudiantes); $i++) { 
          
      if($arr_estudiantes[$i]->getEdad()>30){
        
        $contador++;
      }
    
    }

    echo "<br>"; 
    echo "Cantidad de estudiantes mayores de 30 años: ".$contador;
    echo "<br>"; 

    for ($i=0; $i < sizeof($arr_estudiantes); $i++) { 
            
      if($arr_estudiantes[$i]->getEdad()>=15 || $arr_estudiantes[$i]->getEdad()<=30){
        
        $contador_estudiantes[$arr_estudiantes[$i]->getCurso()-1] = $contador_estudiantes[$arr_estudiantes[$i]->getCurso()-1]+1;
      }

    }

    echo "<br>";   
    echo "Cantidad de estudiante del grado 5 entre 15 y 30: ".$contador_estudiantes[4];
    echo "<br>";      

  /**************************************************************************************************** */

     /* 12 13 14
       11 12 13
       15 16 17*/

    for ($i=0; $i < sizeof($matriz); $i++) { 
      for ($j=0; $j<sizeof($matriz); $j++) { 

          if($i==$j){
            $suma1 = $suma1 + $matriz[$i][$j];          
          }
      }
    }
    
    $j=sizeof($matriz);
    for ($i=0; $i < sizeof($matriz); $i++) {      
      
      $j--;  
      $suma2  = $suma2 + $matriz[$i][$j];
                  
         
      
    }
    echo "<br>"; 
    echo "Suma matriz Diagonal 1: ".$suma1;
    echo "<br>"; 
    echo "Suma matriz Diagonal 2: ".$suma2;
      
?>