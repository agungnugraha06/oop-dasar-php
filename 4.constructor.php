<?php 

class Produk {
     Public $judul,
            $penulis,
            $penerbit,
            $harga;


     public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0 ) {
     	  $this->judul = $judul;
     	  $this->penulis = $penulis;
     	  $this->penerbit = $penerbit;
     	  $this->harga = $harga;
     }


     public function getLabel() {
          return "$this->penulis, $this->penerbit";
     }

}



$produk1 = new Produk("One Piece", "Eichiro Oda", "Shonen Jump", 20000);
$produk2 = new Produk("Uncharted", "Neil Druckmann", "Sony Computer", 250000);
$produk3 = new Produk("Gintama");


echo "Komik : " . $produk1->getLabel();
echo "<br>";
echo "Game : " . $produk2->getLabel();
echo"<br>";
var_dump($produk3);