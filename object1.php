<?php


class Bali
{
    public $nama, $ibu_kota, $website, $gubernur, $wakil_gubernur;


    public function set_ibuKota($ibuKota)
    {
        $this->ibu_kota = $ibuKota;
    }
    public function get_ibuKota()
    {
        return $this->ibu_kota;
    }
}


$dataProvBali = new Bali();

$dataProvBali->set_ibuKota("Denpasar");

echo $dataProvBali->get_ibuKota();


?>