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

INSERT INTO `prodotti` (`nome`, `marca`, `descrizione`, `prezzo`,`immagine`,`quantità`,`idSottoCategoria`, `gradazione`, `formato`) VALUES
('Rum Gran Reserva 1888', 'Brugal', 'Il rum Brugal Gran Reserva è un Rum ambrato scuro alla vista, è intenso al naso con sensazioni di frutta secca accompagnate da delicate note legnose. Al palato è avvolgente e lungo, con toni burrosi e zuccherati. Chiude caramellato e sapido.', 45.00, 'brugal.jpg', 20, 1, "40", "70 cl"),
('Rum Sailor Jerry', 'Sailor Jerry', 'Il rum Sailor Jerry è un rum cult, che ha fatto successo in tutto il mondo per lo spirito che porta con sè. Caratterizzato da aromi unici, è uno spiced rum di alta qualità, come pochi in circolazione. La sua grande bevibilità lo fa poi un rum adatto a tutti, facile da capire e apprezzare.', 20.50, 'sailor_jerry.jpeg', 40, 1, "40", "70 cl" ),
('Bombay Dry Gin', 'Bombay', 'Il gin Bombay ha un colore chiaro brillante. Al naso, oltre ai classici sentori di ginepro, emergono eleganti note di bergamotto e spezie tra cui si fa notare il pepe nero. In bocca è morbido e vellutato, con la capacità di espandersi in un tripudio di spezie..', 16.90,'bombay_sapphire.jpeg',50, 2, "37,5", "70 cl"),
('Bulldog Dry Gin "Bulldog"', 'G&J Distillery', 'Il gin Bulldog è perfettamente trasparente e luminoso alla vista. Gin equilibrato e morbido, al naso richiama i tipici sentori delle bacche di ginepro, accompagnati da piacevoli note di iris, coriandolo, papavero e lavanda. Al palato si rivela fresco e fruttato, con persistenti finiture erbacee..', 27.50, 'bulldog.jpeg', 30,2, "40", "70 cl" ),
('Belvedere Vodka', 'Belvedere', "Belvedere vodka rappresenta l'apice della tradizione polacca nella produzione di Vodka. La materia prima viene raccolta esclusivamente dalle migliori piantagioni di segale e distillata per 4 volte al fine di creare il perfetto equilibrio di carattere e purezza, senza nessun tipo di additivo e diluita con acqua pura del pozzo di proprietà della distilleria. Belvedere Vodka è un'icona del mondo moderno, che unisce la storia di oltre 600 anni di esperienza con un impegno senza compromessi per ottenere la massima qualità.", 30.90,'belvedere.jpeg', 10,3, "40", "70 cl"),
('Grain Vodka Moskovskaya', 'Osobaya Vodka', "E' la vodka russa più amata dai bartender di tutto il mondo perchè rappresenta l'eccellenza tra le vodke base per cocktail. Un nome simbolo di garanzia per chi cerca il massimo della qualità.", 13.00,'grain.jpeg',40, 3, "38", "70 cl"), 
('Speyside Single Malt Scotch Whiskey 18', 'Glen Grant', 'Lo scotch 18 years old di Glen Grant è il prodotto di punta della storica distilleria dello Speyside. Un single malt veramente eccezionale, caratterizzato da note legnose e fruttate inconfondibili, anche dai palati meno esperti. Un whisky da gustare in ogni occasione, da soli o in compagnia, in totale relax per apprezzarne tutte le caratteristiche che lo rendono unico al mondo. Secondo solo alle “limited edition” della medesima distilleria affina per ben 18 anni in botti di quercia della più pregiata qualità.', 115.00, 'glen.jpeg',5, 4, "43", "70 cl"), 
('Tennessee Whiskey “N°27 Gold”', 'Jack Daniel’s', 'Il “N°27 Gold” è un’edizione limitata del celebre Tennessee Whiskey firmato Jack Daniel’s. Si tratta infatti di un distillato che presenta una particolarità interessante, che riguarda la fase finale di maturazione in legno: l’affinamento si svolge infatti sia in rovere sia in legno di acero, e la successiva filtrazione – prima della messa in bottiglia – è doppia. Un prodotto dal profilo olfattivo elegante, che in bocca colpisce per il sapore dolce e fasciante, ideale per accompagnare i dopo cena più tranquilli, in cui si vuole accompagnare la conversazione con un distillato di tutto rispetto.', 99.00,'jack.jpeg',15,4, "40", "70 cl"),
('Pilsner Urquell', 'Urquell', "Birra bionda con una schiuma molto modesta. Questa è la madre di tutte le Pilsner, prodotta per la prima volta nel 1842. Ha un sapore maltato e il luppolo conferisce a questa birra il suo tipico carattere Pilsner.", 2.29,'pilsner_urquell.png',40,5, "4,4", "33 cl"),
('Warsteiner Pilsner”', 'Warsteiner', "Warsteiner è una birra assai piacevole da bere e molto digeribile. Leggera, di colore giallo paglierino pallido e gradazione alcolica moderata (4,8%), sprigiona un intenso aroma di luppolo accompagnato da una nota di caramella d'orzo.", 3.50,'warsteiner.jpeg',50,5, "4,8", "33 cl"),
('Blanche de Namur', 'Du Bocq', "Birra dorata chiara, leggermente torbida con una splendida schiuma cremosa e aromi fruttati e floreali. Le note di coriandolo e buccia d’arancia donano una piacevole freschezza a questa birra dissetante.", 2.09,'blanche_namur.png',30,6, "4,5", "33 cl"),
('La Blanche du Mont Blanc', 'Brasserie', "Birra Cremosa e corposa, questa birra di frumento dolce ha aromi fruttati e un retrogusto di coriandolo. ", 2.99,'balche_mont_blank.png',30,6, "4,7", "33 cl"),
('Valdobbiadene Superiore', 'Bortolomiol', "Nel calice il vino si presenta con un colore giallo paglierino, con qualche leggero riflesso tendente all’oro e al verdolino. Il perlage è sottile e persistente. ", 12.20,'valdobbiadene.jpeg',10,10, "12", "75 cl"), 
('Millesimato DOC', "Sant'Orsola", "Alla vista il vino regala un bel giallo paglierino, con bollicina durevole e sottile. I sentori al naso sono leggiadri e freschi, fruttati perlopiù, con note di mela e di pera a guidare l’olfattiva. ", 7.50,'sant_orsola.jpeg',20,10, "11.5", "75 cl"), 
('Ferrari Maximum', "Ferrari", "Giallo paglierino intenso, dal perlage fine e persistente. Al naso il vino è gentile, intenso e persistente, con una nota di frutta matura nella quale si riconoscono sentori di crosta di pane, nocciola e un variegato bouquet floreale. ", 19.90,'ferrari.jpeg',15,11, "12,5", "75 cl"),
('Toscana Rosso IGT', "Casale Sparviero", "Vino rosso rubino intenso dai riflessi porpora. Intenso al naso con note di frutti rossi e neri succosi, viole e rose. In bocca è elegante, con i tannini delicati e integrati nel corpo.", 7.50,'sparvierorosso.jpeg',20,12, "13,5", "75 cl"),
('Valpolicella DOC 2019', "Tommasi", "Vino rosso rubino di buona intensità alla vista. Fresco e fruttato all’olfattiva, caratterizzato da sentori di ciliegia e fragola. L’assaggio si dimostra in linea con il naso, fragrante ma equilibrato, connotato da una buona persistenza.", 10.50,'tommasi.jpeg',20,13, "15", "75 cl"),
('Chianti Riserva DOCG', "Piccini", "Vino rosso rubino il colore al calice. Intenso il bouquet olfattivo, composto da sentori fruttati che richiamano la prugna e la marasca, e poi impostato su rimandi terziari di vaniglia e spezie.", 7.50,'piccini.jpeg',20,14, "14", "75 cl"),
('Gin Mare', 'Marc e Manuel Distillery', 'Cristallino e trasparente al calice. Al naso, i sentori olfattivi sono contraddistinti da note erbacee e sfumature speziate, che arrivano a comporre un bouquet in cui vi sono ricordi di foglia di pomodoro, rosmarino, agrumi e olive nere.', 34.19, 'mare.jpeg', 20,2, "40", "70 cl" ),
('Cubical Premium', 'Williams & Humbert', 'Gin fragrante, elegante e persistente, versatile e ideale per preparare qualsiasi cocktail, partendo dai più rinfrescanti per arrivare ai più classici o ai più deliziosi e innovativi.', 35.60, 'cubical.jpeg', 25,2, "40", "70 cl"),
('Koval Dry Gin', 'Koval', 'Incolore e trasparente alla vista. Al naso si apre regalando un bouquet olfattivo fresco e fragrante, in cui i ricordi di bacche di ginepro si uniscono a sfumature di pepe, di cardamomo, di agrumi e di pietra focaia.', 42.50, 'koval.jpeg', 5,2, "38", "70 cl"),
('Beluga Vodka', 'Beluga', "Completamente trasparente alla vista, limpida. Al naso si viene accolti da una sfumatura agrumata, che lascia poi il passo a note di grano e pane abbrustolito", 39.90,'beluga.jpeg', 15,3, "37,5", "70 cl"),
('Absolut “Elyx”', 'Absolut', "Nel bicchiere è completamente incolore e trasparente. Al naso risulta fresca, con note di pane appena sfornato, cereali e sensazioni lievemente speziate.", 45.00,'absolute.jpeg', 4,3, "37,5", "70 cl"),
('Vodka “Boker” ', 'Hacienda Corralejo', "Luminosa e trasparente nel bicchiere. Al naso rilascia lievi note dolci su una base pura e neutra. In bocca è pulita e ben equilibrata.", 34.00,'boker.jpeg', 12,3, "37,5", "70 cl"),
('Rum Santa Teresa 1796', 'Santa Teresa', 'Colore ambrato con riflessi dorati. Al naso ha sentori fruttati di pera e banana che lasciano spazio ad un complesso connubio di miele e caramello. ' ,33.90, 'teresa.jpeg', 25, 1, "40", "70 cl"),
('Diplomatico N.2', 'Distillery Collection', 'Il Rum Si sviluppa nel bicchiere con un colore giallo dorato intenso e concentrato. Lo spettro olfattivo si muove su una progressione di note fruttate dolci, arricchite anche da sentori terziari e tocchi più tostati. ' ,89.50, 'diplomatico.jpeg', 3, 1, "42", "70 cl"),
('Plantation Rum', 'Maison Ferrand', 'Rum color ambra, con riflessi mogano. Il profilo olfattivo è caratterizzato da grande ricchezza e complessità, con aromi di frutta esotica, canna da zucchero, vaniglia, agrumi canditi, cacao, nuances boisé e fumé.', 65.50, 'plantation.jpeg', 10, 1, "37,5", "70 cl"),
('Highland 18', 'Aberlour', 'All’esame visivo il whisky ha una tonalità che varia dal dorato al castano ramato. Lo spettro olfattivo manifesta note complesse e stratificate, con aromi di toffee, pesca matura e arancia amara.', 59.00,'aberlour.jpeg',15,4, "40", "70 cl"),
('Islay Scotch 1997', 'Bowmore', 'Al naso si susseguono note dolci di zucchero di canna e gelato malaga, in contrappunto con sensazioni iodate e ricordi di alga. Al sorso dello scotch tornano i sentori dolci di uvetta, marmellata, cacao, con un netto sentore torbato di fondo. ', 230.50,'islay.jpeg',2,4, "40", "70 cl"),
('Hinch Blended 5', 'Hinch', 'Whiskey Giallo dorato dai riflessi ambrati alla vista. Il naso è dolce e agrumato, con cenni di vaniglia e spezie. Al palato è morbido, con note di vaniglia, albicocca e pesca in evidenza.', 58.50,'hinch.jpeg',20,4, "38", "70 cl"),
('Prosecco Bio Treviso', 'Corvezzo', "Spumante giallo paglierino brillante, con effervescenza persistente. Arrivano al naso profumi freschi, fruttati e aromatici, che ricordano la pera e la salvia soprattutto. ", 8.00,'corvezzo.jpeg',18,10, "11,5", "75 cl"), 
('Storie di Noir', 'Bosco Levada', "Prosecco giallo paglierino intenso, con riflessi dorati; perlage fine e persistente. Al naso si esprime con sentori di mela e pera matura, note di melagrana e cenni agrumati. Al palato è fresco, croccante e armonico. ", 10.80,'noir.jpeg',13,10, "13", "75 cl"),
('Amarone della Valpolicella', "Tommasi", "Vino rosso rubino carico con riflessi porpora. Al naso ricorda l’amarena succosa, la frutta secca, l’uva sultanina, la prugna cotta e le erbe selvatiche, ma anche il pepe bianco, la moka e la liquirizia. Pieno, complesso e vellutato in bocca, fine e rotondo, con tannini morbidi e lungo in persistenza.", 36.50,'amarone.jpeg',10,13, "15", "75 cl"),
('Chianti Classico DOCG 2018', "Riecine", "Vino rosso rubino scarico. Sentori di viola e frutti rossi al naso. Leggermente speziato. Rotondo, ampio e voluminoso in bocca. È un vino ben delineato, finemente evoluto, con tannini leggeri, tipico, docile ed elegante.", 23.00,'riecine.jpeg',20,14, "14", "75 cl"),
('Emilia Lambrusco Rosso Frizzante', "Bassoli", "Vino rosso rubino intenso alla vista. Frutta rossa, scura e croccante al naso, viene seguita da sfumature leggermente erbacee, che rendono il bouquet olfattivo lineare e piacevole. Fresco l’assaggio ma comunque equilibrato. Buona lunghezza.", 9.90,'bassoli.jpeg',30,15, "13", "75 cl");


INSERT INTO `utenti` (`nome`,`cognome`,`email`,`password`,`tipo`) VALUES
('Andrea','Acampora','andrea.acampora@gmail.com','$2y$10$YgUHLwoJCsQ9UkwtMctD9.7vmPCY5e.5bZvS4XpjH.4oqOspodac2',1),
('Giacomo','Accursi','giacomo.accursi@gmail.com','$2y$10$vICNB./1J6wK/9ZGFaa6..e0Wl0PYmo6Ob7Hq0RdWagXv2nC4XDKi',1),
('Marco','Brighi','marco.brighi@outlook.com','$2y$10$kKPWDeQxgbHUeUkfR2CbPuxwakgCGxNTAvQN5YGKcpqT.n2j.aneq',0),
('Luca','Rossi','luca.rossi@gmail.com','$2y$10$kKPWDeQxgbHUeUkfR3CbPuxwakgCGxNTAvQN5YGKcpqT.n2j.aneq',0),
('Giovanni','Verdi','giovanni.verdi@libero.it','$2y$10$kPPWDeQxgbHUeUkfR2CbPuxwakgCGxNTAvQN5YGKcpqT.n2j.aneq',0),
('Enzo','Bianchi','enzo.bianchi@outlook.com','$2y$11$kKPWDeQxgbHUeUkfR2CbPuxwakgCGxNTAvQN5YGKcpqT.n2j.aneq',0),
('Paolo','Neri','paolo.neri@yahoo.com','$2y$10$kKPWDeQlgbHUeUkfR2CbPuxwakgCGxNTAvQN5YGKcpqT.n2j.aneq',0),
('Fabio','Chari','fabio.chari@gmail.com','$2y$10$kKPWDeQxgbHUeUkfR2CfPuxwakgCGxNTAvQN5YGKcpqT.n2j.aneq',0),
('Enea','Scuri','enea.scuri@virgilio.com','$2y$10$kKPWDeQhgbHUeUkfR2CbPuxwakgCGxNTAvQN5YGKcpqT.n2j.aneq',0);


INSERT INTO `pagamenti` (`nomeCircuito`) VALUES 
('PayPal'),
('Mastercard'),
('Visa'),
('SatisPay');

UPDATE `prodotti` SET `sconto` = '10' WHERE `prodotti`.`id` = 5; 
UPDATE `prodotti` SET `sconto` = '5' WHERE `prodotti`.`id` = 10; 
UPDATE `prodotti` SET `sconto` = '20' WHERE `prodotti`.`id` = 7; 
UPDATE `prodotti` SET `sconto` = '15' WHERE `prodotti`.`id` = 9; 
UPDATE `prodotti` SET `sconto` = '5' WHERE `prodotti`.`id` = 12; 
UPDATE `prodotti` SET `sconto` = '10' WHERE `prodotti`.`id` = 3; 
UPDATE `prodotti` SET `sconto` = '10' WHERE `prodotti`.`id` = 15; 
UPDATE `prodotti` SET `sconto` = '10' WHERE `prodotti`.`id` = 20; 

