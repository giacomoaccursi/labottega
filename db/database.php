<?php
class DatabaseHelper{
    private $db;
    
    public function __construct($servername, $username, $password, $dbname, $port){
        $this->db = new mysqli($servername, $username, $password, $dbname, $port);
        if ($this->db->connect_error) {
            die("Connection failed: " . $this->db->connect_error);
        }        
    }
    
    public function getAllProducts(){
        $stmt = $this->db->prepare("SELECT id, nome, descrizione, immagine, quantità, prezzo, marca, idSottoCategoria FROM prodotti WHERE quantità > 0 ORDER BY RAND()");
        $stmt->execute();
        $result = $stmt->get_result();
    
        return $result->fetch_all(MYSQLI_ASSOC);
    }
    
    public function getBestProducts($n){
        $stmt = $this->db->prepare("SELECT id, nome, descrizione, immagine, prezzo FROM prodotti ORDER BY RAND() LIMIT ?");
        $stmt->bind_param('i',$n);
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->fetch_all(MYSQLI_ASSOC);
    }
    
    public function getCategories(){
        $stmt = $this->db->prepare("SELECT id, nome FROM categorie");
        $stmt->execute();
        $result = $stmt->get_result();
        
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getSubCategories(){
        $stmt = $this->db->prepare("SELECT id, nome, idCategoria FROM sottoCategorie");
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_all(MYSQLI_ASSOC);
    }

}
?>