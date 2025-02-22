<?php
class petshop{
    private $id='';
    private $nama='';
    private $kategori='';
    private $harga='';
    private $foto='';
    public function __construct($id='',$nama='',$kategori='',$harga='',$foto=''){
        $this->id= $id;
        $this->nama= $nama;
        $this->kategori= $kategori;
        $this->harga= $harga;
        $this->foto= $foto;
    }
    
    public function setid($id){
        $this->id= $id;
    }
    public function getid(){
        return $this->id;
    }
    
    public function setnama($nama){
        $this->nama= $nama;
    }
    public function getnama(){
        return $this->nama;
    }

    public function setkategori($kategori){
        $this->kategori= $kategori;
    }
    public function getkategori(){
        return $this->kategori;
    }
    
    public function setharga($harga){
        $this->harga= $harga;
    }
    public function getharga(){
        return $this->harga;
    }
    
    public function setfoto($foto){
        $this->foto= $foto;
    }
    public function getfoto(){
        return $this->foto;
    }
    
}
?>