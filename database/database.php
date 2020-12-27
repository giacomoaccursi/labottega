<?php

class DatabaseHelper
{
    private $db;

    public function __construct($servername, $username, $password, $dbname, $port)
    {
        $this->db = new mysqli($servername, $username, $password, $dbname, $port);
        if ($this->db->connect_error) {
            die("Connection failed: " . $this->db->connect_error);
        }
    }

    public function getAllProducts()
    {
        $stmt = $this->db->prepare("SELECT ROUND((prezzo - prezzo*sconto/100), 2) as prezzoFin,id, nome, marca, descrizione, prezzo, quantità, idSottoCategoria, immagine, sconto, dataInserimento FROM prodotti WHERE quantità > 0 ORDER BY RAND() ");
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getBestProducts($n)
    {
        $stmt = $this->db->prepare("SELECT  ROUND((prezzo - prezzo*sconto/100), 2) as prezzoFin, id, nome, marca, descrizione, prezzo, quantità, idSottoCategoria, immagine, sconto, dataInserimento FROM prodotti ORDER BY RAND() LIMIT ?");
        $stmt->bind_param('i', $n);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_all(MYSQLI_ASSOC);
    }
    public function getProductsByDate()
    {
        $stmt = $this->db->prepare("SELECT ROUND((prezzo - prezzo*sconto/100), 2) as prezzoFin, id, nome, marca, descrizione, prezzo, quantità, idSottoCategoria, immagine, sconto, dataInserimento FROM prodotti WHERE quantità > 0 ORDER BY dataInserimento");
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_all(MYSQLI_ASSOC);
    }
    public function getProductsByPriceAsc()
    {
        $stmt = $this->db->prepare("SELECT ROUND((prezzo - prezzo*sconto/100), 2) as prezzoFin, id, nome, marca, descrizione, prezzo, quantità, idSottoCategoria, immagine, sconto, dataInserimento FROM prodotti WHERE quantità > 0 ORDER BY prezzoFin ASC");
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_all(MYSQLI_ASSOC);
    }
    public function getProductsByPriceDesc()
    {
        $stmt = $this->db->prepare("SELECT ROUND((prezzo - prezzo*sconto/100), 2) as prezzoFin, id, nome, marca, descrizione, prezzo, quantità, idSottoCategoria, immagine, sconto, dataInserimento FROM prodotti WHERE quantità > 0 ORDER BY prezzoFin DESC");
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getProductsByPopularity()
    {
        $stmt = $this->db->prepare("SELECT ROUND((prezzo - prezzo*sconto/100), 2) as prezzoFin, id, nome, marca, descrizione, prezzo, quantità, idSottoCategoria, immagine, sconto, dataInserimento FROM prodotti");
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getProductsByCategory($categoria)
    {
        $stmt = $this->db->prepare("SELECT  prodotti.id, prodotti.nome, marca, descrizione, prezzo, ROUND((prezzo - prezzo*sconto/100), 2) as prezzoFin, quantità, idSottoCategoria, immagine, sconto, dataInserimento FROM prodotti, sottoCategorie, categorie WHERE prodotti.idSottocategoria = sottoCategorie.id && sottoCategorie.idCategoria = categorie.id && categorie.id = ?");
        $stmt->bind_param('i', $categoria);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_all(MYSQLI_ASSOC);
    }
    public function getProductsBySubCategory($sottoCategoria)
    {
        $stmt = $this->db->prepare("SELECT ROUND((prezzo - prezzo*sconto/100), 2) as prezzoFin, prodotti.id, prodotti.nome, marca, descrizione, prezzo, quantità, idSottoCategoria, immagine, sconto, dataInserimento FROM prodotti, sottoCategorie WHERE idSottoCategoria = ?");
        $stmt->bind_param('i', $sottoCategoria);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getProductById($productId)
    {
        $stmt = $this->db->prepare("SELECT ROUND((prezzo - prezzo*sconto/100), 2) as prezzoFin, id, nome, marca, descrizione, prezzo, quantità, idSottoCategoria, immagine, sconto, dataInserimento FROM prodotti WHERE id = ?");
        $stmt->bind_param('i', $productId);
        $stmt->execute();
        $result = $stmt->get_result();
        $result = $result->fetch_all(MYSQLI_ASSOC);
        return $result[0];
        
    }

    public function getCategoryById($id)
    {
        $stmt = $this->db->prepare("SELECT nome from categorie WHERE id = ?");
        $stmt->bind_param('i', $id);
        $stmt->execute();
        $result = $stmt->get_result();
        $result = $result->fetch_all(MYSQLI_ASSOC);
        return $result[0]["nome"];
    }

    public function getSubCategoryById($id)
    {
        $stmt = $this->db->prepare("SELECT nome from sottoCategorie WHERE id = ?");
        $stmt->bind_param('i', $id);
        $stmt->execute();
        $result = $stmt->get_result();
        $result = $result->fetch_all(MYSQLI_ASSOC);
        return $result[0]["nome"];
    }

    public function getProductsInSale()
    {
        $stmt = $this->db->prepare("SELECT ROUND((prezzo - prezzo*sconto/100), 2) as prezzoFin, id, nome, marca, descrizione, prezzo, quantità, idSottoCategoria, immagine, sconto, dataInserimento FROM prodotti WHERE sconto > 0");
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_all(MYSQLI_ASSOC);
    }


    public function getCategories()
    {
        $stmt = $this->db->prepare("SELECT id,nome FROM categorie");
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getSubCategories()
    {
        $stmt = $this->db->prepare("SELECT id,nome,idCategoria FROM sottoCategorie");
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getProductsBySearch($input)
    {
        $stmt = $this->db->prepare("SELECT prodotti.id, prodotti.nome, marca, descrizione, prezzo, (prezzo - prezzo*sconto/100) as prezzoFin, quantità, idSottoCategoria, immagine, sconto, dataInserimento FROM prodotti, sottoCategorie, categorie WHERE prodotti.idSottocategoria = sottoCategorie.id && sottoCategorie.idCategoria = categorie.id && (prodotti.nome LIKE CONCAT ('%',?,'%') OR descrizione LIKE CONCAT ('%',?,'%') OR categorie.nome LIKE CONCAT ('%',?,'%') OR sottoCategorie.nome LIKE CONCAT ('%',?,'%') OR marca LIKE CONCAT ('%',?,'%')) ");
        $stmt->bind_param('sssss', $input, $input, $input, $input, $input);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function checkLogin($email, $password)
    {
        $stmt = $this->db->prepare("SELECT * FROM utenti WHERE email = ? AND password = ? ");
        $stmt->bind_param('ss', $email, $password);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function registerNewUser($nome, $cognome, $email, $password)
    {
        $stmt = $this->db->prepare("INSERT INTO `utenti`(`nome`, `cognome`, `email`, `password`) VALUES (?,?,?,?)");
        $stmt->bind_param('ssss', $nome, $cognome, $email, $password);
        $stmt->execute();
    }

    public function getAllEmails()
    {
        $stmt = $this->db->prepare("SELECT email FROM utenti");
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getCartProducts($idUtente)
    {
        $stmt = $this->db->prepare("SELECT *,ROUND((prezzo - prezzo*sconto/100), 2) as prezzoFin, prodottiInCarrello.id as idProdotto  FROM prodottiInCarrello , prodotti WHERE prodottiInCarrello.idProdotto = prodotti.id && idUtente = ? ");
        $stmt->bind_param('i', $idUtente);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    private function isProductInCart($idProdotto, $idUtente)
    {
        $stmt = $this->db->prepare("SELECT * FROM prodottiInCarrello WHERE idProdotto = ? && idUtente = ?");
        $stmt->bind_param('ii', $idProdotto, $idUtente);
        $stmt->execute();
        $result = $stmt->get_result();
        return mysqli_num_rows($result) > 0;
    }

    public function insertProductInCart($idUtente, $idProdotto)
    {
        if ($this->isProductInCart($idProdotto, $idUtente)) {
            $stmt = $this->db->prepare("UPDATE `prodottiInCarrello` SET `quantitàDaComprare` = `quantitàDaComprare` + 1 WHERE `idProdotto` = ? && `idUtente` = ?");
            $stmt->bind_param('ii', $idProdotto, $idUtente);
            $stmt->execute();
        } else {
            $stmt = $this->db->prepare("INSERT INTO `prodottiInCarrello`(`idUtente`, `idProdotto`) VALUES (?, ?)");
            $stmt->bind_param('ii', $idUtente, $idProdotto);
            $stmt->execute();
        }
    }

    public function updateCartProductsQuantity($id, $quantita)
    {
        $stmt = $this->db->prepare("UPDATE `prodottiInCarrello` SET `quantitàDaComprare` = ? WHERE `id` = ?");
        $stmt->bind_param('ii', $quantita, $id);
        $stmt->execute();
    }

    public function deleteItemFromCart($id)
    {
        $stmt = $this->db->prepare("DELETE FROM `prodottiInCarrello` WHERE id = ?");
        $stmt->bind_param('i', $id);
        $stmt->execute();
    }
}
