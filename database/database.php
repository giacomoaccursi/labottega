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

    public function getRandomProducts()
    {
        $stmt = $this->db->prepare("SELECT ROUND((prezzo - prezzo*sconto/100), 2) as prezzoFin,id, nome, marca, descrizione, prezzo, quantità, idSottoCategoria, immagine, sconto, dataInserimento FROM prodotti WHERE quantità > 0 ORDER BY RAND() ");
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getAllProducts()
    {
        $stmt = $this->db->prepare("SELECT ROUND((prezzo - prezzo*sconto/100), 2) as prezzoFin,id, nome, marca, descrizione, prezzo, quantità, idSottoCategoria, immagine, sconto, dataInserimento FROM prodotti WHERE quantità > 0 ORDER BY id ");
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getBestProducts($n)
    {
        $stmt = $this->db->prepare("SELECT  ROUND((prezzo - prezzo*sconto/100), 2) as prezzoFin, id, nome, marca, descrizione, prezzo, quantità, idSottoCategoria, immagine, sconto, dataInserimento FROM prodotti WHERE quantità > 0 ORDER BY RAND() LIMIT ?");
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
        $stmt = $this->db->prepare("SELECT ROUND((prezzo - prezzo*sconto/100), 2) as prezzoFin, id, nome, marca, descrizione, prezzo, quantità, idSottoCategoria, immagine, sconto, dataInserimento FROM prodotti WHERE quantità > 0");
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getProductsByCategory($categoria)
    {
        $stmt = $this->db->prepare("SELECT  prodotti.id, prodotti.nome, marca, descrizione, prezzo, ROUND((prezzo - prezzo*sconto/100), 2) as prezzoFin, quantità, idSottoCategoria, immagine, sconto, dataInserimento FROM prodotti, sottoCategorie, categorie WHERE prodotti.idSottocategoria = sottoCategorie.id && sottoCategorie.idCategoria = categorie.id && categorie.id = ? && quantità > 0");
        $stmt->bind_param('i', $categoria);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_all(MYSQLI_ASSOC);
    }
    public function getProductsBySubCategory($sottoCategoria)
    {
        $stmt = $this->db->prepare("SELECT ROUND((prezzo - prezzo*sconto/100), 2) as prezzoFin, prodotti.id, prodotti.nome, marca, descrizione, prezzo, quantità, idSottoCategoria, immagine, sconto, dataInserimento FROM prodotti, sottoCategorie WHERE idSottoCategoria = ? AND quantità > 0");
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
        $stmt = $this->db->prepare("SELECT ROUND((prezzo - prezzo*sconto/100), 2) as prezzoFin, id, nome, marca, descrizione, prezzo, quantità, idSottoCategoria, immagine, sconto, dataInserimento FROM prodotti WHERE sconto > 0 AND quantità > 0");
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


    public function getAllCustomers()
    {
        $stmt = $this->db->prepare("SELECT * FROM utenti where tipo = 0");
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getCustomerById($id)
    {
        $stmt = $this->db->prepare("SELECT * from utenti WHERE id = ?");
        $stmt->bind_param('i', $id);
        $stmt->execute();
        $result = $stmt->get_result();
        $result = $result->fetch_all(MYSQLI_ASSOC);
        return $result[0];
    }

    public function getAllOrders()
    {
        $stmt = $this->db->prepare("SELECT * FROM ordini");
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

    public function checkLogin($email, $input_password)
    {
        $stmt = $this->db->prepare("SELECT * FROM utenti WHERE email = ? ");
        $stmt->bind_param('s', $email);
        $stmt->execute();
        $result = $stmt->get_result();
        $result = $result->fetch_all(MYSQLI_ASSOC);
        if(password_verify($input_password,$result[0]["password"])){
            return $result[0];
        }else{
            return -1;
        }
    }

    public function registerNewUser($nome, $cognome, $email, $password)
    {
        $stmt = $this->db->prepare("INSERT INTO `utenti`(`nome`, `cognome`, `email`, `password`) VALUES (?,?,?,?)");
        $stmt->bind_param('ssss', $nome, $cognome, $email, $password);
        $stmt->execute();
    }


    public function insertNewProduct($nome, $marca, $descrizione, $prezzo, $immagine, $quantita, $categoria)
    {
        $stmt = $this->db->prepare("INSERT INTO `prodotti`(`nome`, `marca`, `descrizione`, `prezzo`,`immagine`,`quantità`,`idSottoCategoria`) VALUES (?,?,?,?,?,?,?) ");
        $stmt->bind_param('sssdsii', $nome, $marca, $descrizione,$prezzo, $immagine,$quantita,$categoria);
        $stmt->execute();
    }

    public function modifyProduct($id,$nome, $marca, $descrizione, $prezzo, $immagine, $quantita, $categoria)
    {
        $stmt = $this->db->prepare("UPDATE `prodotti` SET `nome` = ?, `marca` = ? ,`descrizione` = ?, `prezzo` = ?,`immagine` = ?,`quantità` = ?,`idSottoCategoria` = ? WHERE `prodotti`.`id` = ? ");
        $stmt->bind_param('sssdsiii', $nome, $marca, $descrizione,$prezzo, $immagine,$quantita,$categoria,$id);
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

    public function deleteCartProducts($idUtente)
    {
            $stmt = $this->db->prepare("DELETE FROM `prodottiInCarrello` WHERE idUtente = ?");
            $stmt->bind_param('i', $idUtente);
            $stmt->execute();
    }

    public function removeOrderedItemsFromDisponibility($idProdotto, $quantita)
    {
        $stmt = $this->db->prepare("UPDATE `prodotti` SET `quantità` = `quantità`- ? WHERE `id` = ?");
        $stmt->bind_param('ii', $quantita, $idProdotto);
        $stmt->execute();
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

    public function insertNotification($idCliente,$messaggio){
        if($idCliente==0){
            $clienti = $this -> getAllCustomers();
            foreach($clienti as $cliente){
                $stmt = $this->db->prepare("INSERT INTO `notifiche`(`idCliente`, `messaggio`) VALUES (?, ?)");
                $stmt->bind_param('is', $cliente["id"], $messaggio);
                $stmt->execute();
            }
        }else{
            $stmt = $this->db->prepare("INSERT INTO `notifiche`(`idCliente`, `messaggio`) VALUES (?, ?)");
            $stmt->bind_param('is', $idCliente, $messaggio);
            $stmt->execute();
        }

    }
    public function addNewEmail($email){
        $stmt = $this->db->prepare("INSERT INTO `newsletter`(`email`) VALUES (?)");
        $stmt->bind_param('s', $email);
        $stmt->execute();
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

    public function getOrdersByUser($idUtente){
        $stmt = $this->db->prepare("SELECT *  FROM ordini WHERE idUtente = ?  ORDER BY dataOrdine DESC");
        $stmt->bind_param('i', $idUtente);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getNotificationsByUser($idCliente){
        $stmt = $this->db->prepare("SELECT *  FROM notifiche WHERE idCliente = ?  ORDER BY 'data' DESC");
        $stmt->bind_param('i', $idCliente);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getOrderDetails($idOrdine){
        $stmt = $this->db->prepare("SELECT prodotti.nome, prodotti.immagine, ordini.id, dettagliOrdini.prezzo, dettagliOrdini.quantita
                                    FROM dettagliOrdini,ordini,prodotti
                                    WHERE dettagliOrdini.idOrdine = ordini.id AND dettagliOrdini.idProdotto = prodotti.id AND dettagliOrdini.idOrdine = ?");
        $stmt->bind_param('i', $idOrdine);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function addNewSpedizione($nome, $cognome, $indirizzo, $citta, $nazione){

        $stmt = $this->db->prepare("INSERT INTO `spedizioni`(`nome`, `cognome`, `indirizzo`, `citta`, `nazione`) VALUES (?,?,?,?,?)");
        $stmt->bind_param('sssss', $nome, $cognome, $indirizzo, $citta, $nazione);
        $stmt->execute();
        return $this->db->insert_id;   
    }

    public function addNewOrder($totaleOrdine, $idUtente, $idSpedizione, $tipoPagamento, $stato){
        $stmt = $this->db->prepare("INSERT INTO `ordini`(`totaleOrdine`,`idUtente`, `idSpedizione`, `tipoPagamento`, `stato`) VALUES (?,?,?,?,?)");
        $stmt->bind_param('sssss', $totaleOrdine, $idUtente, $idSpedizione, $tipoPagamento, $stato);
        $stmt->execute();
        return $this->db->insert_id; 
    }

    public function getAllPaymentsType(){
        $stmt = $this->db->prepare("SELECT * FROM `pagamenti`");
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function addNewOrderDetail($idProdotto, $idOrdine, $prezzo, $quantita){
        $stmt = $this->db->prepare("INSERT INTO `dettagliOrdini`(`idProdotto`,`idOrdine`, `prezzo`, `quantita`) VALUES (?,?,?,?)");
        $stmt->bind_param('ssss', $idProdotto, $idOrdine, $prezzo, $quantita);
        $stmt->execute();
    }

    public function addNewDesiredProduct($idProdotto, $idUtente){
        $stmt = $this->db->prepare("INSERT INTO `prodottiDesiderati`(`idProdotto`,`idUtente`) VALUES (?,?)");
        $stmt->bind_param('ss', $idProdotto, $idUtente);
        $stmt->execute();
    }

    public function removeDesiredProduct($idProdotto, $idUtente){
        $stmt = $this->db->prepare("DELETE FROM `prodottiDesiderati` WHERE idProdotto = ? && idUtente = ?");
        $stmt->bind_param('ss', $idProdotto, $idUtente);
        $stmt->execute();
    }

    public function getAllUserDesiredProduct($idUtente){
        $stmt = $this->db->prepare("SELECT *,ROUND((prezzo - prezzo*sconto/100), 2) as prezzoFin, prodottiDesiderati.id as idProdotto  FROM prodottiDesiderati , prodotti WHERE prodottiDesiderati.idProdotto = prodotti.id && idUtente = ?");
        $stmt->bind_param('s', $idUtente);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_all(MYSQLI_ASSOC);
    }




}

