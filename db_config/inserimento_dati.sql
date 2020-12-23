INSERT INTO `categorie` (`id`,`nome`) VALUES
(1,'Distillati'),
(2,'Birre'),
(3,'Vini');

INSERT INTO `sottoCategorie` (`nome`, `idCategoria`) VALUES
(1,'Rum', 1),
(2,'Gin', 1),
(3,'Vodka', 1),
(4,'Whisky', 1),
(5'Pils', 2),
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
('Rum Sailor Jerry', 'Sailor Jerry', 'Un rum cult, che ha fatto successo in tutto il mondo per lo spirito che porta con sè. Caratterizzato da aromi unici, è uno spiced rum di alta qualità, come pochi in circolazione. La sua grande bevibilità lo fa poi un rum adatto a tutti, facile da capire e apprezzare.', 20.50, 'sailorJerry.png', 40, 1),
('London Dry Gin', 'Bombay', 'Con questo London Dry, assemblato partendo da un insieme di “botanicals” esotiche, la Bombay Sapphire offre in realtà un Gin dai contorni tradizionali, in cui un forte sapore di ginepro guida il sorso verso un finale potente e secco. La distillazione degli otto ingredienti avviene grazie agli alambicchi “Carter Head”, capaci di catturarne in maniera incredibile gli aromi e di fornire quindi un ventaglio aromatico intenso. La bottiglia ideale quando si vuole sorseggiare il più classico dei Gin&Tonic.', 16.90,'bombay.png',50, 2),
('London Dry Gin "Bulldog"', 'G&J Distillery', 'Partendo da materie prime eccellenti questo Gin Bulldog proveniente dall’antica distilleria inglese Langley è un prodotto complesso e al contempo sofisticato. Per la sua produzione vengono realizzate quattro diverse distillazioni seguendo il metodo tradizionale con utilizzo esclusivo di alambicchi in rame. Per ottenere un livello di purezza straordinario il processo di filtraggio viene ripetuto 3 volte. Il risultato finale è un gin da intenditori che presenta un olfatto importante, con un gusto particolarmente tropicale e fresco.', 27.50, 'bulldog.png', 30,2 ),
('Belvedere Vodka', 'Belvedere', "Belvedere Vodka rappresenta l'apice della tradizione polacca nella produzione di Vodka. La materia prima viene raccolta esclusivamente dalle migliori piantagioni di segale e distillata per 4 volte al fine di creare il perfetto equilibrio di carattere e purezza, senza nessun tipo di additivo e diluita con acqua pura del pozzo di proprietà della distilleria. Belvedere Vodka è un'icona del mondo moderno, che unisce la storia di oltre 600 anni di esperienza con un impegno senza compromessi per ottenere la massima qualità.", 30.90,'belvedere.png', 10,3),
('Grain Vodka Moskovskaya', 'Osobaya Vodka', "E' la vodka russa più amata dai bartender di tutto il mondo perchè rappresenta l'eccellenza tra le vodke base per cocktail. Un nome simbolo di garanzia per chi cerca il massimo della qualità.", 13.00,'grain.png',40, 3), 
('Speyside Single Malt Scotch Whiskey 18', 'Glen Grant', 'Il 18 years old di Glen Grant è il prodotto di punta della storica distilleria dello Speyside. Un single malt veramente eccezionale, caratterizzato da note legnose e fruttate inconfondibili, anche dai palati meno esperti. Un whisky da gustare in ogni occasione, da soli o in compagnia, in totale relax per apprezzarne tutte le caratteristiche che lo rendono unico al mondo. Secondo solo alle “limited edition” della medesima distilleria affina per ben 18 anni in botti di quercia della più pregiata qualità.', 115.00, 'glen.png',5, 4), 
('Tennessee Whiskey “N°27 Gold”', 'Jack Daniel’s', 'Il “N°27 Gold” è un’edizione limitata del celebre Tennessee Whiskey firmato Jack Daniel’s. Si tratta infatti di un distillato che presenta una particolarità interessante, che riguarda la fase finale di maturazione in legno: l’affinamento si svolge infatti sia in rovere sia in legno di acero, e la successiva filtrazione – prima della messa in bottiglia – è doppia. Un prodotto dal profilo olfattivo elegante, che in bocca colpisce per il sapore dolce e fasciante, ideale per accompagnare i dopo cena più tranquilli, in cui si vuole accompagnare la conversazione con un distillato di tutto rispetto.', 99.00,'jack.png',15,4); 

INSERT INTO `utenti` (`nome`,`cognome`,`email`,`password`,`tipo`) VALUES
('Andrea','Acampora','andrea.acampora@gmail.com','andrea99',1),
('Giacomo','Accursi','giacomo.accursi@gmail.com','giacomo99',1),
('Marco','Brighi','marco.brighi@outlook.com','marco1992',1),
('Luca','Rossi','luca.rossi@gmail.com','luca1988',1);

INSERT INTO `pagamenti` (`nomeCircuito`) VALUES 
('PayPal'),
('Mastercard'),
('Visa'),
('SatisPay');


