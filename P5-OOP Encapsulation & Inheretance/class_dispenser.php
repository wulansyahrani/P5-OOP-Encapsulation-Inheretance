<?php

class Dispenser{
    protected $volume;
    protected $hargaSegelas;
    const volumegelas = 250;
    public $namaMinuman;


    public function volume($vol){
        return $this->volume = $vol;
        
    }

    public function hargaSegelas($hargaSegelas){
        return $this->hargaSegelas = $hargaSegelas;
    }

    function namaMinuman($namaMinuman){
        return $this->namaMinuman = $namaMinuman;
    }

    function hasil(){
        return  $this->volume - self::volumegelas  ;
    }
}

$minuman = new Dispenser();
echo "Nama Minuman : " . $minuman -> namaMinuman  = 'Cola';
echo "<hr/> <br/>";
echo "Volume galon nya adalah " .$minuman -> volume(1000). " Ml";
echo "<br/>";
echo "Harga Segelas nya adalah " .$minuman -> hargaSegelas(5000)." Rupiah";
echo "<br/>";
echo "wulan beli air 1 gelas yang volumenya ".Dispenser::volumegelas . " Ml";
echo "<br/>";
echo "Hasil volume sekarang adalah " .$minuman -> hasil() . " Ml";

?>