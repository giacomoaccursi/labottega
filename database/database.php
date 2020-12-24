<?php

class DatabaseHelper{
    private $db;

    public function __construct($servername, $username, $password, $dbname, $port){
        $this->db = new mysqli($servername, $username, $password, $dbname, $port);
        if ($this->db->connect_error) {
            die("Connection failed: " . $this -> db-> connect_error);
        }        
    }
 
    public function getAllProducts(){
        $stmt = $this->db->prepare("SELECT (prezzo - prezzo*sconto/100) as prezzoFin,id, nome, marca, descrizione, prezzo, quantità, idSottoCategoria, immagine, sconto, dataInserimento FROM prodotti WHERE quantità > 0 ORDER BY RAND() ");
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_all(MYSQLI_ASSOC);
    }
    
    public function getBestProducts($n){
        $stmt = $this->db->prepare("SELECT  (prezzo - prezzo*sconto/100) as prezzoFin, id, nome, marca, descrizione, prezzo, quantità, idSottoCategoria, immagine, sconto, dataInserimento FROM prodotti ORDER BY RAND() LIMIT ?");
        $stmt->bind_param('i',$n);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_all(MYSQLI_ASSOC);
    }
    public function getProductsByDate(){
        $stmt = $this->db->prepare("SELECT (prezzo - prezzo*sconto/100) as prezzoFin, id, nome, marca, descrizione, prezzo, quantità, idSottoCategoria, immagine, sconto, dataInserimento FROM prodotti WHERE quantità > 0 ORDER BY dataInserimento");
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_all(MYSQLI_ASSOC);
    }
    public function getProductsByPriceAsc(){
        $stmt = $this->db->prepare("SELECT (prezzo - prezzo*sconto/100) as prezzoFin, id, nome, marca, descrizione, prezzo, quantità, idSottoCategoria, immagine, sconto, dataInserimento FROM prodotti WHERE quantità > 0 ORDER BY prezzoFin ASC");
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_all(MYSQLI_ASSOC);
    }
    public function getProductsByPriceDesc(){
        $stmt = $this->db->prepare("SELECT (prezzo - prezzo*sconto/100) as prezzoFin, id, nome, marca, descrizione, prezzo, quantità, idSottoCategoria, immagine, sconto, dataInserimento FROM prodotti WHERE quantità > 0 ORDER BY prezzoFin DESC");
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getProductsByPopularity(){
        $stmt = $this->db->prepare("SELECT (prezzo - prezzo*sconto/100) as prezzoFin, id, nome, marca, descrizione, prezzo, quantità, idSottoCategoria, immagine, sconto, dataInserimento FROM prodotti");
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_all(MYSQLI_ASSOC);
    }
    
    public function getCategories(){
        $stmt = $this->db->prepare("SELECT id,nome FROM categorie");
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getSubCategories(){
        $stmt = $this->db->prepare("SELECT id,nome,idCategoria FROM sottoCategorie");
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_all(MYSQLI_ASSOC);
    }


}
?>