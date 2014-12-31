<?php 
///rupiah adalah fungsi yang nantinya akan kita panggil
  function rupiah($angka){
       $jadi="Rp.".number_format($angka,2,',','.');
        return $jadi;
  }
?>