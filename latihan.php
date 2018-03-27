<?php
   $nama = "faulina";
   $umur = 20;

   echo "nama saya $nama dan umur saya $umur";
   
   //konstanta

   define("ALAMAT", "buah batu bandung");
   echo "<br/>";
   echo ALAMAT;

   //operator

   $nilai1 = 10;
   $niali2 = 22;
   $hasilTambah = $nilai1 + $niali2;
   $hasilKurang = $nilai1 - $niali2;
   $hasilKali = $nilai1 * $niali2;
   $hasilBagi = $nilai1 / $niali2;
   echo "<br/>";
   echo "hasil penjumlahan : $hasilTambah hasil pengurangan : $hasilKurang  hasil perkalian : $hasilKali  hasil pembagian : $hasilBagi";

   //percabangan memakai IF Else IF 

   echo "<br/>";

   if($nilai1 >= $niali2){
   	  echo "hasil kamu lebih besar";
   } else {
   		echo "lebih kecil";
   }

   echo "<br/>";

   $nilai = "A";
   if($nilai != "A"){
   	  echo "Ini Bukan A";
   } else if($nilai == "A"){
   	  echo "Nilainya A";
   } else {
   	  echo "Ngga ada yang benar";
   }

   echo "<br/>";

   //percabangan memakai switch 

   switch ($nilai) {
   	case "B":
   	echo "Nilainya B";
   		break;
   	
   	default:
   	   echo "Tidak Ketemu";
   		break;
   }

   //looping for 

   for($i = 1; $i = 10; $i++){
   	  echo "saya huruf ke".$i;
   }

   echo "<br/>";
   //looping while

   $b = 1;
   while($b <= 10) {
   	 echo "saya juga huruf ke".$b;
   	 $b++;
   }

   echo "<br/>";


   //array foreach
   // $nama = ['budy', 'nirmana', 'fulltank'];

   // foreach [$nama as $n] {
   // 	 echo $n, "<br/>";
   // }

   // 	for ($n = 0; $nm < count($nama); $nm++){
   // 		echo $nama[$nm];
   // 	}


  //array asosiatif 

   $biodata = [
     'nama' => 'faulina bin andi',
     'negara' => 'indonesia',
     'umur' => '20'
   ]

   
?>