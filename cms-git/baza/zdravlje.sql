-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2017 at 08:31 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zdravlje`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(255) NOT NULL,
  `cat_title` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`) VALUES
(160, 'Hladna predjela'),
(109, 'Topla predjela'),
(110, 'Supe i čorbe'),
(111, 'Glavna jela'),
(112, 'Pite i testa'),
(113, 'Torte'),
(114, 'Kolači');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(3) NOT NULL,
  `comment_content` varchar(255) NOT NULL,
  `comment_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `comment_post_id` int(255) NOT NULL,
  `comment_author` varchar(255) NOT NULL,
  `comment_email` varchar(255) NOT NULL,
  `comment_status` varchar(255) NOT NULL DEFAULT 'neodobren'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `comment_content`, `comment_date`, `comment_post_id`, `comment_author`, `comment_email`, `comment_status`) VALUES
(2135, 'Super recept!!', '2017-06-03 20:01:03', 36, 'maja', 'maja@gmail.com', 'odobren'),
(2132, 'Preporucujem! Ceri sam pravila za rucak, sve jee sama pojela za dva dana.', '2017-06-01 11:52:44', 27, 'Bilja', 'bilja@gmail.com', 'odobren');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` int(3) NOT NULL,
  `post_title` varchar(255) NOT NULL,
  `post_cat_id` int(255) NOT NULL,
  `post_author` varchar(255) NOT NULL,
  `post_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `post_image` text NOT NULL,
  `post_content` text NOT NULL,
  `post_tags` varchar(255) NOT NULL,
  `post_comment_count` int(11) NOT NULL DEFAULT '0',
  `post_status` varchar(255) NOT NULL DEFAULT 'draft'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `post_title`, `post_cat_id`, `post_author`, `post_date`, `post_image`, `post_content`, `post_tags`, `post_comment_count`, `post_status`) VALUES
(31, 'Rolat od palačinki i kajgane', 160, 'Mina Martic', '2017-06-03 19:42:15', 'rolat_od_palacinke_i_kajgane.PNG', 'Napraviti testo za palačinke umutiti jaje, dodati ulje i so i brašno, sve izmešati pa dodati mleko i vodu. Napraviti lepu masu bez grudvica. Ispeći palačinke na aparatu za palačinke. Umutiti dva jaja i polako dodati dve kašike brašna, umutiti da bude bez grudvica. Od te mase ispeći 1 palačinku kao kajganu. Ostaviti da se malo prohlade, za to vreme pomešati kiselu pavlaku i krem sir. Uzeti tepciju i prvo staviti palačinku, premazati filom pa posuti sušenim povrćem, preko staviti palačinku od jaja, preko nje ponovo fil, preko fila ponovo palačinku i premazati ostatkom fila. Ostaviti jednu kašiku fila za premazivanje odozgo. Uviti rolat od palačinki. Umotati u foliju i ostaviti da se ohladi. Ohladjen rolat premazati filom i posuti sa malo sušenog povrća.', 'slano,rolat,palacinke, kajgana', 0, 'draft'),
(30, 'Slani rolat sa spanaćem i pavlakom', 160, 'Mina Minkovic', '2017-06-03 19:40:39', 'slani_rolat.PNG', '1.Spanać očistiti, oprati i obariti u ključaloj vodi da omekša. Sačekati da se prohladi, pa saseckati i upržiti sa mešavinom mleka i ulja dok tečnost ne ispari.\r\n2. Umutiti jaja sa kašičicom soli, pa dodati brašno sa praškom za pecivo i pripremljeni spanać. Sjediniti sve i izliti u pleh sa pek papirom. Ispeći u zagrejanoj rerni na 200 C. Pečenu koru staviti između dve mokre krpe i sačekati da se ohladi i omekša.\r\n3.Premazati sloj pavake, pa preko rasporediti narendana kuvana jaja i šunku. Zatim staviti drugi sloj pavlake da se sve poveže i pomoću krpe uviti u rolat. Rolat premazati pavlakom i staviti u frižider da se ohladi i stegne.', 'slano, slani, rolat, spanac, pavlaka', 0, 'draft'),
(27, 'Piletina sa šampinjonima', 111, 'Slađana Šćekić', '2017-06-01 11:19:55', 'piletina-sa-sampinjonima.jpg', '		1.	Iseckati crni luk zajedno sa belim lukom i šargarepom (na kockice). Propržiti.\r\n2.	U drugoj posudi pripremiti belo meso. Odvojiti ga od kostiju i iseći na manje šnicle.\r\n3.	Svaku šniclu valjati u brašno pa poređati po izdinstanom luku.\r\n4.	Poredjati meso jedno pored drugog, a ako ima još mesa poredjati i odozgo.\r\n5.	Naliti meso sa čašom vode 2 dl i dinstati na tihoj vatri 30 minuta. Povremeno šerpu protresti.\r\n6.	10 minuta pred kraj dodati očišćene šampinjone isečene samo na pola.\r\n7.	Posle desetak minuta dodati prvo razmućen gustin u malo vode, a odmah zatim i dve kašike pavlake. Prokrčkati jedan minut i skloniti sa vatre i začiniti.\r\n8.	Skuvati i pirinač kao prilog i aranžirati (može i pire krompir).\r\n					', 'piletina, šampinjoni, luk, crni luk, meso, slano', 0, 'draft'),
(28, 'Pečeni krompir sa začinima', 111, 'Vesna Nikolić', '2017-06-01 11:16:30', 'Peceni_krompir.PNG', '1.	Krompir oljuštiti, pa svaki preseći na četiri dela. Zatim svaku četvrtinu iseći na prutiće. Isečeni krompir staviti u vanglicu. \r\n2.	U odgovarajuću posudu staviti ulje, kiselo mleko, so, biber i mešavinu začina. Dobro sjediniti. Pripremljenu smesu sipati preko krompira, u vanglici. Rukom dobro promešati. \r\n3.	Veliki pleh, od el. šporeta, prekriti pek papirom. Papir premazati uljem, pa poređati krompir, jedan do drugog.\r\n4.	Staviti da se peče, u prethodno zagrejanu rernu, na 200 stepeni. Kada donja strana krompira porumeni izvaditi pleh, pa svako parče krompira, viljuškom, preokrenuti. Vratiti ponovo u rernu, da bi i preokrenuta strana porumenela.\r\n5.	Pečeni krompir poslužiti uz pečeno (prženo) meso, ili ga grickati bez dodataka. Odlično ide uz pivo!\r\n', 'krompir, slano, glavno_jelo', 0, 'draft'),
(29, 'Argentinski ćevapi', 111, 'Maja Marković', '2017-06-01 11:27:06', 'argentinski_cevapi.PNG', '				1.	Krompir skuvati u ljusci. Oljuštiti i ispasirati kao za pire. Manju glavicu crnog luka i jedan čen belog luka sitno iseckati i kratko prodinstati na malo vode. U posudu staviti mleveno meso, krompir, prodinstan luk na vodi, žumanca, prezle, so, suvi biljni začin, biber i sodu bikarbonu izmešanu sa par kapi vode. Sve sastojke dobro sjediniti pa oblikovati ćevape. \r\n2.	Belanca koja su ostala viljuškom malo umutiti, svaki ćevap provući kroz belanca, pa kroz prezle i pržiti u tiganju na ulju i ne na jakoj temperaturi. Slagati ih na kuhinjski papir. Za preliv pomešati po potrebi pavlaku, majonez i sok od limuna.\r\n				', 'ćevapi, glavno_jelo, slano, luk, beli luk, meso', 0, 'draft'),
(32, 'Pohovani hleb', 109, 'Maja Nicic', '2017-06-03 19:44:18', 'pohovani_hleb.PNG', 'Umutiti jaja, dodati mleko. Kriške hleba potapati u smesu, pa pržiti na ulju obostrano dok ne porumeni.\r\nGotov hleb ređati na ubrus da upije višak ulja, pa poslužiti.', 'hleb,toplo, predjelo, pohovano, Pohovani  ', 0, 'draft'),
(33, 'Kocke od makarona', 109, 'Marko Mijatovic', '2017-06-03 19:46:31', 'kocke_od_makarona.PNG', '1.U dublju posudu sipati nekuvane makarone i preliti mlekom.\r\n2.Ostaviti da odstoje pola sata. Povremeno promešati.\r\n3.Nakon toga umutiti jaja sa uljem i pavlakom, posoliti po ukusu, pa dodati u smesu sa makaronama.\r\n4.Dobijenu smesu sipati u dobro pomašćen kalup i peći 50 minuta na 200 stepeni. Pred kraj pečenja prekriti alu-folijom da ne zagori. Poslužiti odmah, dok je toplo.\r\n', 'kocke od makarona, makarone, toplo predjelo', 0, 'draft'),
(34, 'Kuglice od badema', 114, 'Anita Mancic', '2017-06-03 19:51:04', 'kuglice.PNG', '				Skuvati gust sirup od 250 g šećera i pola vinske čaše vode. Kada sirup vri u velikim teškim mehurima, skinuti sa vatre, dodati 250 g obarenih, oljuštenih i na rezance isečenih badema. Od ove mase, dok je još mlaka, praviti male kuglice. Ruku više puta kvasiti vodom, da se masa ne bi lepila za dlan. Kuglice preliti glazurom, koja se pravi od dve šipke čokolade skuvane sa dve kašike šećera i četiri kašike crne kafe. U ovu masu umakati svaku kuglicu pomoću čačkalice, a zatim uvaljati u struganu čokoladu.				', 'kuglice od badema, badem,slatko', 0, 'draft'),
(35, 'Keksići sa limunom', 114, 'Mitar Mitrovic', '2017-06-03 19:50:46', 'keksici.PNG', '2 limuna prvo natopiti u 3 šolje vode i jednu šolju sirćeta i ostaviti do dvadesetak minuta da odstoje, potom isprati limun sa vodom. Jaje sa šećerom dobro izmutiti dok ne pobeli... potom dodati omekšali maslac, izrendanu koru od 2 limuna, sok od jednog limuna i pola brašna u koji ste dodali prašak za pecivo. Sve mikserom lagano izmešajte.... dodajte preostalo brašno i rukom izmešajte. Pravite kuglice veličine oraha, uvaljajte u kristal šećer, potom u šećer u prahu i slažite u tepsiju na koju ste stavili pek papir. Pecite na 170 C, ali nemojte ih prepeći.		', 'keks, limun, keksici', 0, 'draft'),
(36, 'Kidi torta', 113, 'Suzana Perišić', '2017-06-03 19:53:34', 'tortica_kidi.PNG', '1.I deo: Umutiti 400 g kisele vode i 400 g šlag pene kad se umuti dodati 300 g mlevene plazme.\r\n2.II deo: 400 g šlag pene sa 400 g kisele vode. Kad se umuti izlomkati 100 g milka čokolade mlečne i 6 do 10 kidi čokoladica.\r\n3.III deo: 200 g šlag pene i 200 g kisele vode.\r\n4.Redjati I deo, II deo i na kraju II deo. Možete i ukrasiti čokoladom ili nekim voćem odozgo.', 'torta,kidi,slatko', 0, 'draft'),
(37, 'Margherita - pizza', 112, 'Jana Janković', '2017-06-03 19:55:43', 'pica.PNG', '		1.U mlako mleko dodati izmrvljen kvasac i šećer. Ostaviti da nadođe oko 5 minuta. U posudu za mešenje sipati vodu, nadošao kvasac i brašnom (u koje smo dodali so) i zamesiti glatko testo. U testo umešati ulje i ostaviti da se udvostruči.\r\n2.Pripremiti preliv. Pomešati sok od paradajza, sa pelatom, sitno seckanim peršunom i origanom.\r\n3.Nadošlo testo premesiti, ostaviti ga par minuta da se odmori, pa rastanjiti u formi kruga. Staviti ga u nauljenu tepsiju, izbockati viljuškom, pa preliti smesom od paradajza i bosiljka.\r\n4.Posuti rendanim sirom.\r\n5.Peći u zagrejanoj rerni na 200 C dok se sir ne otopi. Paradajz oljuštiti i iseći na kriške.\r\n6.Kad se sir otopi, izvaditi pizzu iz rerne, poređati paradajz i listiće bosiljka. Vratiti u rernu da se ispeče do kraja (još nekih 5-7 minuta).		', 'pica,pizza, testa, Margherita', 0, 'draft'),
(38, 'Lisnata pogača', 112, 'Dušan Đukić', '2017-06-03 19:57:46', 'pogaca.PNG', 'U malo toplog mleka dodati kašičicu šećera, kvasac i razmutiti sa kašičicom brašna. Ostaviti da se kvasac podigne. U činiju staviti ostatak toplog mleka, podignut kvasac, ulje, so i polako dodajući brašno umesiti testo. Odmah podeliti na pet obgica, ostaviti ih malo da narastu i razviti svaki u veličinu tanjira. Pola omekšalog margarina podeliti na četiri dela i premazati svaku obgu, osim poslednje. Slagati ih jedna na drugu. Zaseći ih nožem na četiri dela, ali ne do kraja ivice testa. Ponovo zaseći i tako dobiti osam trouglova. Svaki trougao podići rukama i prebaciti na ivicu testa i krajeve podvuci ispod testa. Testo ostaviti pokriveno da duplira pa pre pečenja premazati sa jajetom i posuti semenkama. Peći na 200C dok pogača ne dobije lepu boju. Vruću pokriti duplom kuhinjskom krpom.', 'lisnata pogaca, pogaca', 0, 'draft'),
(39, 'Supa od repe', 110, 'Marijana Andjelic', '2017-06-03 19:59:01', 'supa_od_repe.PNG', 'Predgrejemo rernu na 200 stepeni C. Na pek papiru u ravnu tepsiju sipamo kocke repe, pa pospemo sa uljem, posolimo i pobiberimo. Pečemo 25 do 30 minuta dok ne porumene. S vremena na vreme promešamo. U međuvremenu u šerpi na malo ulja izdinstamo luk, beli luk, celer, šargarepu i listove timijana, oko 4 do 5 minuta. Sada dodamo i repu i nalijemo bistru supu. Pustimo da provri, pa smanjimo temperaturu i poklopimo. Kuvamo 25 do 30 minuta.\r\nU blenderu izmutimo dok dobijemo glatku masu. Vratimo u šerpu, pa dodamo pavlaku. Na laganoj temperaturi pustimo da se krčka nekoliko minuta. Serviramo uz pečen hrskav hleb.', 'supa, repa', 0, 'draft');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(3) NOT NULL,
  `username` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_firstname` varchar(255) NOT NULL,
  `user_lastname` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_role` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `user_password`, `user_firstname`, `user_lastname`, `user_email`, `user_role`) VALUES
(81, 'boki', 'boki', 'Bojana', 'Dujic', 'boki_ceo@das.com', 'Pretplatnik'),
(77, 'milance', 'milance', 'Milan', 'MAricic', 'milan@gmail.com', 'Pretplatnik'),
(78, 'duca', 'kuca', 'Dusica', 'Stepic', 'duca@gmail.com', 'Admin'),
(79, 'maja', 'maja', 'Marija', 'Maric', 'maja@erstemail.com', 'Pretplatnik'),
(84, 'admin', 'admin', 'Admin', 'Adminovic', 'admin@cms.com', 'Admin'),
(83, 'andjela', 'andjela', 'Andjela', 'Malicic', 'andjela@gmail.com', 'Pretplatnik'),
(85, 'mandric', ' mandric', 'Marina', 'Andric', 'mandric@hotmail.ocm', 'Pretplatnik');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=171;
--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2137;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
