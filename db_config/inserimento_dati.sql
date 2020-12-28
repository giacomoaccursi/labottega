INSERT INTO `categorie` (`id`,`nome`) VALUES
(1,'Distillati'),
(2,'Birre'),
(3,'Vini');

INSERT INTO `sottoCategorie` (`id`,`nome`, `idCategoria`) VALUES
(1,'Rum', 1),
(2,'Gin', 1),
(3,'Vodka', 1),
(4,'Whisky', 1),
(5,'Pils', 2),
(6,'Blanche', 2),
(7,'Weiss', 2),
(8,'Stout', 2),
(9,'IPA', 2),
(10,'Prosecco', 3),
(11,'Spumante', 3),
(12,'SanGiovese', 3),
(13,'Valpolicella', 3),
(14,'Chianti', 3),
(15,'Lambrusco', 3);

INSERT INTO `prodotti` (`nome`, `marca`, `descrizione`, `prezzo`,`immagine`,`quantità`,`idSottoCategoria`) VALUES
('Rum Gran Reserva 1888', 'Brugal', 'Ambrato scuro alla vista, è intenso al naso con sensazioni di frutta secca accompagnate da delicate note legnose. Al palato è avvolgente e lungo, con toni burrosi e zuccherati. Chiude caramellato e sapido.', 45.00, 'brugal.jpg', 20, 1),
('Rum Sailor Jerry', 'Sailor Jerry', 'Un rum cult, che ha fatto successo in tutto il mondo per lo spirito che porta con sè. Caratterizzato da aromi unici, è uno spiced rum di alta qualità, come pochi in circolazione. La sua grande bevibilità lo fa poi un rum adatto a tutti, facile da capire e apprezzare.', 20.50, 'sailor_jerry.jpeg', 40, 1),
('London Dry Gin', 'Bombay', 'Con questo London Dry, assemblato partendo da un insieme di “botanicals” esotiche, la Bombay Sapphire offre in realtà un Gin dai contorni tradizionali, in cui un forte sapore di ginepro guida il sorso verso un finale potente e secco. La distillazione degli otto ingredienti avviene grazie agli alambicchi “Carter Head”, capaci di catturarne in maniera incredibile gli aromi e di fornire quindi un ventaglio aromatico intenso. La bottiglia ideale quando si vuole sorseggiare il più classico dei Gin&Tonic.', 16.90,'bombay_sapphire.jpeg',50, 2),
('London Dry Gin "Bulldog"', 'G&J Distillery', 'Partendo da materie prime eccellenti questo Gin Bulldog proveniente dall’antica distilleria inglese Langley è un prodotto complesso e al contempo sofisticato. Per la sua produzione vengono realizzate quattro diverse distillazioni seguendo il metodo tradizionale con utilizzo esclusivo di alambicchi in rame. Per ottenere un livello di purezza straordinario il processo di filtraggio viene ripetuto 3 volte. Il risultato finale è un gin da intenditori che presenta un olfatto importante, con un gusto particolarmente tropicale e fresco.', 27.50, 'bulldog.jpeg', 30,2 ),
('Belvedere Vodka', 'Belvedere', "Belvedere Vodka rappresenta l'apice della tradizione polacca nella produzione di Vodka. La materia prima viene raccolta esclusivamente dalle migliori piantagioni di segale e distillata per 4 volte al fine di creare il perfetto equilibrio di carattere e purezza, senza nessun tipo di additivo e diluita con acqua pura del pozzo di proprietà della distilleria. Belvedere Vodka è un'icona del mondo moderno, che unisce la storia di oltre 600 anni di esperienza con un impegno senza compromessi per ottenere la massima qualità.", 30.90,'belvedere.jpeg', 10,3),
('Grain Vodka Moskovskaya', 'Osobaya Vodka', "E' la vodka russa più amata dai bartender di tutto il mondo perchè rappresenta l'eccellenza tra le vodke base per cocktail. Un nome simbolo di garanzia per chi cerca il massimo della qualità.", 13.00,'grain.jpeg',40, 3), 
('Speyside Single Malt Scotch Whiskey 18', 'Glen Grant', 'Il 18 years old di Glen Grant è il prodotto di punta della storica distilleria dello Speyside. Un single malt veramente eccezionale, caratterizzato da note legnose e fruttate inconfondibili, anche dai palati meno esperti. Un whisky da gustare in ogni occasione, da soli o in compagnia, in totale relax per apprezzarne tutte le caratteristiche che lo rendono unico al mondo. Secondo solo alle “limited edition” della medesima distilleria affina per ben 18 anni in botti di quercia della più pregiata qualità.', 115.00, 'glen.jpeg',5, 4), 
('Tennessee Whiskey “N°27 Gold”', 'Jack Daniel’s', 'Il “N°27 Gold” è un’edizione limitata del celebre Tennessee Whiskey firmato Jack Daniel’s. Si tratta infatti di un distillato che presenta una particolarità interessante, che riguarda la fase finale di maturazione in legno: l’affinamento si svolge infatti sia in rovere sia in legno di acero, e la successiva filtrazione – prima della messa in bottiglia – è doppia. Un prodotto dal profilo olfattivo elegante, che in bocca colpisce per il sapore dolce e fasciante, ideale per accompagnare i dopo cena più tranquilli, in cui si vuole accompagnare la conversazione con un distillato di tutto rispetto.', 99.00,'jack.jpeg',15,4),
('Pilsner Urquell', 'Urquell', "Birra bionda con una schiuma molto modesta. Questa è la madre di tutte le Pilsner, prodotta per la prima volta nel 1842. Ha un sapore maltato e il luppolo conferisce a questa birra il suo tipico carattere Pilsner.", 2.29,'pilsner_urquell.png',40,5),
('Warsteiner Pilsner”', 'Warsteiner', "Warsteiner è una birra assai piacevole da bere e molto digeribile. Leggera, di colore giallo paglierino pallido e gradazione alcolica moderata (4,8%), sprigiona un intenso aroma di luppolo accompagnato da una nota di caramella d'orzo.", 3.50,'warsteiner.jpeg',50,5),
('Blanche de Namur', 'Du Bocq', "Birra dorata chiara, leggermente torbida con una splendida schiuma cremosa e aromi fruttati e floreali. Le note di coriandolo e buccia d’arancia donano una piacevole freschezza a questa birra dissetante.", 2.09,'blanche_namur.png',30,6),
('La Blanche du Mont Blanc', 'Brasserie', "Cremosa e corposa, questa birra di frumento dolce ha aromi fruttati e un retrogusto di coriandolo. ", 2.99,'balche_mont_blank.png',30,6),
('Valdobbiadene Superiore', 'Bortolomiol', "Nel calice si presenta con un colore giallo paglierino, con qualche leggero riflesso tendente all’oro e al verdolino. Il perlage è sottile e persistente. ", 12.20,'valdobbiadene.jpeg',10,10), 
('Millesimato DOC', "Sant'Orsola", "Alla vista regala un bel giallo paglierino, con bollicina durevole e sottile. I sentori al naso sono leggiadri e freschi, fruttati perlopiù, con note di mela e di pera a guidare l’olfattiva. ", 7.50,'sant_orsola.jpeg',20,10), 
('Ferrari Maximum', "Ferrari", "Giallo paglierino intenso, dal perlage fine e persistente. Al naso è gentile, intenso e persistente, con una nota di frutta matura nella quale si riconoscono sentori di crosta di pane, nocciola e un variegato bouquet floreale. ", 19.90,'ferrari.jpeg',15,11),
('Toscana Rosso IGT', "Casale Sparviero", "Rosso rubino intenso dai riflessi porpora. Intenso al naso con note di frutti rossi e neri succosi, viole e rose. In bocca è elegante, con i tannini delicati e integrati nel corpo.", 7.50,'sparvierorosso.jpeg',20,12),
('Valpolicella DOC 2019', "Tommasi", "Rosso rubino di buona intensità alla vista. Fresco e fruttato all’olfattiva, caratterizzato da sentori di ciliegia e fragola. L’assaggio si dimostra in linea con il naso, fragrante ma equilibrato, connotato da una buona persistenza.", 10.50,'tommasi.jpeg',20,13),
('Chianti Riserva DOCG', "Piccini", "Rosso rubino il colore al calice. Intenso il bouquet olfattivo, composto da sentori fruttati che richiamano la prugna e la marasca, e poi impostato su rimandi terziari di vaniglia e spezie.", 7.50,'piccini.jpeg',20,14); 



INSERT INTO `utenti` (`nome`,`cognome`,`email`,`password`,`tipo`) VALUES
('Andrea','Acampora','andrea.acampora@gmail.com','Andrea99!',1),
('Giacomo','Accursi','giacomo.accursi@gmail.com','Giacomo99!',1),
('Marco','Brighi','marco.brighi@outlook.com','Marco1992?',0),
('Luca','Rossi','luca.rossi@gmail.com','Luca1988?',0);

INSERT INTO `pagamenti` (`nomeCircuito`) VALUES 
('PayPal'),
('Mastercard'),
('Visa'),
('SatisPay');

INSERT INTO `spedizioni` (`id`, `indrizzo`, `citta`, `nazione`) VALUES 
('1', 'Via Roma 2', 'Rimini', 'Italia');

INSERT INTO `ordini`(`dataOrdine`,`totaleOrdine`,`idUtente`,`idSpedizione`,`tipoPagamento`,`stato`) VALUES
('2020-12-10',50,3,1,2,'In lavorazione'),
('2020-12-09',40,3,1,1,'In lavorazione'),
('2020-12-08',60,3,1,1,'Spedito');



