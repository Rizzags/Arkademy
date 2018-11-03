<?php
function prima($n,$b){
      $bilprima = array();
      $jml_prima = $n * $b;
      $jml_data = 0;
      $stop = 0;
      for($i=1;$i>$stop;$i++){  // pengecekan semua angka dengan variable $i

              $counter = 0; 
              for($j=1;$j<=$i;$j++){ //semua kemungkinan faktor pembagi
                  
                    //jika angka yg akan dicek habis dibagi faktor pembagi, counter nya +1
                    if($i % $j==0){ 
                        
                          $counter++;
                    }
              }            
           //jumlah warna hijau / faktor habis bagi nya harus 2 
            if($counter==2){                
                // mendapatkan jumlah data
                array_push($bilprima, $i);
                $jml_data++;
            }
            //untuk berhentikan for
            if($jml_data >= $jml_prima) {
                $stop = $stop + $i;
            }
     }

     $no = 0;
     echo "<br>";
     foreach ($bilprima as $b) {
        echo $b;
        $no++;

        // jika no tidak sama dengan jumlah bil prima tanda kome tidak perlu ditampilkan
        if ($no != count($bilprima)){
          echo ",";;
        }

        if ($no % $n == 0) {
         echo "<br>";
        }

     }
     // echo 6 % 3;
} 

prima(3,4);  //cari bilang prima dari 1-20

?>