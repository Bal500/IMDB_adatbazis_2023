-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2023. Nov 26. 13:08
-- Kiszolgáló verziója: 10.4.28-MariaDB
-- PHP verzió: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `imdb_db`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `filmek`
--

CREATE TABLE `filmek` (
  `id` int(255) NOT NULL,
  `cim` varchar(255) DEFAULT NULL,
  `rendezo` varchar(255) DEFAULT NULL,
  `leiras` varchar(9999) DEFAULT NULL,
  `szineszek` varchar(999) DEFAULT NULL,
  `jatekido` int(11) DEFAULT NULL,
  `mufaj` varchar(255) DEFAULT NULL,
  `megjelenes_eve` int(11) DEFAULT NULL,
  `ertekeles_pozitiv` int(11) DEFAULT NULL,
  `ertekeles_negativ` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- A tábla adatainak kiíratása `filmek`
--

INSERT INTO `filmek` (`id`, `cim`, `rendezo`, `leiras`, `szineszek`, `jatekido`, `mufaj`, `megjelenes_eve`, `ertekeles_pozitiv`, `ertekeles_negativ`) VALUES
(1, 'A remény rabjai', 'Frank Darabont', '1946-ban egy Andy Dufresne nevű bankárt - noha makacsul hangoztatja ártatlanságát - kettős gyilkosság elkövetése miatt életfogytiglani börtönbüntetésre ítélnek. Dufresne egy Maine állambeli büntetés-végrehajtó intézetbe kerül és hamar meg kell ismerkedjen a börtönélet kegyetlen mindennapjaival, a szadista börtönszemélyzettel, a szinte elállatiasodott rabokkal. Azonban Andy nem törik meg. A bankéletben szerzett tapasztalatai segítségével elnyeri az őrök kegyét és azzal, hogy elvállalja egyik rabtársa illegális akcióiból származó bevételeinek könyvelését, kivívja \"társai\" elismerését is. Cserébe viszont lehetőséget kap a börtön könyvtár fejlesztésére, ezzel némi emberi méltóságot csempészve a keserű körülmények között élő rabok mindennapjaiba.', 'Tim Robbins, Morgan Freeman, Bob Gunton, William Sadler, Clancy Brown, James Whitmore, Gil Bellows, Larry Brandenburg, Paul McCrane', 137, 'dráma', 1994, 93, 7),
(2, 'Forrest Gump', 'Robert Zemeckis', 'A georgiai Savannah városka árnyas buszmegállójában különös mesemondó üldögél. Forrest Gump mindent látott és mindent átélt, de nem mindent értett. Nem éppen a legfényesebb elme. De hát az anyja is mindig azt mondta: \"Csak az a hülye, aki hülyeséget csinál.\" Forrest Gump pedig semmi egyebet nem csinált, mint jelen volt a XX. század minden fontos eseményén a focipályától a harctérig, az elnökök klubjától a médiavitákig, míg végül meg nem pihent egyetlen igaz szerelme karjában. Forrest Gump IQ-ja nem szárnyal az egekig, de rendkívül becsületes és jólelkű fiú. Különös véletlenek azonban hozzásegítik, hogy az 1950-es évektől 1970-ig Amerika minden jelentős eseményén részt vegyen, és minden jelentős személyiségével találkozzon, köztük: Elvis Presley-vel, JFK-vel, Lyndon Johnsonnal, Richard Nixonnal. Forrest elvégzi a főiskolát, harcol Vietnamban, élsportoló lesz, az egyetlen probléma csak az, hogy túl buta ahhoz, hogy megértse ezen fontos események jelentőségét.', 'Tom Hanks, Sally Field, Robin Wright, Gary Sinise, Mykelti Williamson, Michael Conner Humphreys, Hanna Hall, Harold G. Herthum, Peter Dobson', 141, 'filmszatíra', 1994, 92, 8),
(3, 'Stephen King: Halálsoron', 'Frank Darabont', 'Paul Edgecomb börtönőrként szolgál a Cold Mountain fegyház siralomházában a múlt század harmincas éveiben. Az E blokkban halálraítéltek várják, hogy végig menjenek a halálsoron - a folyosón, amely a villamosszékhez vezet. Edgecomb úgy gondolja, már semmilyen meglepetés sem érheti. Ám minden megváltozik, amikor új rab érkezik az E blokkba. Az óriás termetű fekete férfit, John Coffeyt az esküdtszék két fehér gyermek meggyilkolásáért ítélte halálra. A férfi azonban egyáltalán nem tűnik gyilkosnak, sőt, egészen különös képességekkel rendelkezik.', 'Tom Hanks, Michael Clarke Duncan, David Morse, Bonnie Hunt, James Cromwell, Michael Jeter, Graham Greene, Harry Dean Stanton, Gary Sinise, Sam Rockwell, Doug Hutchison, Jeffrey DeMunn, Barry Pepper', 188, 'thriller', 1999, 92, 8),
(4, 'Életrevalók', 'Olivier Nakache, Eric Toledano', 'Az ejtőernyős baleset után tolószékbe kerülő gazdag arisztokrata, Philippe felfogadja otthoni segítőnek a külvárosi gettóból jött Drisst. Azt az embert, aki most szabadult a börtönből, és talán a legkevésbé alkalmas a feladatra. Két világ találkozik és ismeri meg egymást, és az őrült, vicces és meghatározó közös élmények nyomán kapcsolatukból meglepetésszerűen barátság lesz, amely szinte érinthetetlenné teszi őket a külvilág számára.', 'François Cluzet, Omar Sy, Anne Le Ny, Audrey Fleurot, Clotilde Mollet, Alba Gaia Kraghede Bellugi, Cyril Mendy, Christian Ameri', 107, 'vígjáték', 2011, 90, 10),
(5, 'Terminátor 2. - Az ítélet napja', 'James Cameron', '1997. augusztus 29-én kitört a harmadik világháború. Ennek a háborúnak 3 milliárd áldozata volt. A megmaradt emberiségnek hamarosan újabb iszonyattal kell szembenézzen: a gépek elleni háborúval. S most a Skynet gépei egy új Terminátort terveztek, aminek csak egyetlen feladata van: elpusztítani John Connor-t, a gépek elleni harc vezetőjét. S minthogy a tervezés időpontjában a tudomány már képes az időutazásra, a Terminátort visszaküldik az időben, hogy John-t még gyerekkorában pusztítsa el. Az emberek azonban szintén felkészültek az eseményre: ők is visszaküldtek egy Terminátort az időben, aminek az a feladata, hogy megvédje az ifjú Johnt. John Connor tehát tinédzser még, amikor életében megjelenik a két Terminátor, hogy végzetes összecsapásban számoljanak le egymással.', 'Arnold Schwarzenegger, Linda Hamilton, Edward Furlong, Robert Patrick, Earl Boen, Joe Morton, S. Epatha Merkerson, Castulo Guerra, Nikki Cox, Jenette Goldstein', 137, 'akció', 1991, 90, 10),
(6, 'A keresztapa', 'Francis Ford Coppola', 'Minden idők legnagyobb gengszterfilmje azokat az embereket és azt a gépezetet mutatja be, ami az olasz maffiában gyökerezve a világ leghatalmasabb és legrettegettebb hatalmává vált az Egyesült Államokban. Figyelemmel követhetjük a kegyetlen, gyilkos módszereket, amivel a Corleone család feje dolgozik. Tanúi lehetünk a hihetetlen összetartásnak, az érdekek és a félelem összetartó erejének, ami ezt a világot jellemzi. Emberek sorsa, élet és halál kérdése dől el Don Vito Corleone dolgozószobájában. Egyesek védelemért fordulnak a nagyúrhoz, mások hadüzenettel érkeznek. A rivális maffia, a Tattaglia család ugyanis végső leszámolásra szólította fel a Corleonékat. És a hadüzenet után az egész város lángba borul...', 'Marlon Brando, Al Pacino, James Caan, Robert Duvall, Richard Castellano, Diane Keaton, Talia Shire, John Cazale, Richard Conte, Al Lettieri, Abe Vigoda, Alex Rocco', 175, 'dráma', 1972, 95, 5),
(7, 'Vissza a jövőbe', 'Robert Zemeckis', 'Marty McFly átlagos kamasznak látszik, de van egy őrült barátja, Doki, aki megépítette a plutónium meghajtású időgépet. Dokit váratlanul halálos támadás éri, s Marty is csak az új találmánnyal nyer egérutat. Arra azonban ő sem számít, hogy 1955-be utazik vissza, épp abba az időszakba, amikor szülei is a padot koptatják. A bajt csak fokozza, hogy majdani anyja Marty megérkezése óta ügyet sem vet majdani apjára, ami beláthatalan következményekkel járhat a jövőben. Ha életben akar maradni, el kell érnie, hogy szülei egymásba szeressenek és el kell távolítania az anyját molesztáló Biffet.', 'Michael J. Fox, Christopher Lloyd, Lea Thompson, Thomas F. Wilson, Crispin Glover, Wendie Jo Sperber, Marc McClure, Billy Zane', 111, 'kaland', 1985, 96, 4),
(8, 'Szerelmünk lapjai', 'Nick Cassavetes', 'Allie és Noah tizenévesek voltak, amikor találkoztak, az első pillanattól kezdve rokonszenveztek egymással. Kibontakozó szerelmük hamar beteljesedik. A lány gazdag szülei azonban ellenzik kapcsolatukat, így a két fiatal útja elválik egymástól. Amikor néhány esztendővel később újra találkoznak, a szerelmük újjáéled, és Allie-nek hamarosan választania kell társa és társadalmi rangja között. Történetüket, melynek fontos jelentősége van számára, egy idős úr olvassa fel újra és újra egy hasonló korú hölgynek.', 'Rachel McAdams, Ryan Gosling, Gena Rowlands, James Garner, Sam Shepard, Starletta DuPois, Tim Ivey, Joan Allen,Kevin Connolly', 123, 'romantikus', 2004, 93, 7),
(9, 'Elrabolva', 'Pierre Morel', 'Bryan Mills (Liam Neeson) valaha a titkosszolgálat egyik legkiválóbb ügynöke volt, újabban sztárokat véd a rajongóktól. 17 éves lánya, Kim (Maggie Grace) az anyjával, Lenore-ral (Famke Janssen) és tehetős mostohaapjával él és épp Párizsba készül legjobb barátnőjével, Amandával, amire Bryan vonakodva bár, de áldását adja. Bár ne tette volna. Kim a párizsi reptéren megismerkedik Peterrel, majd nemsokkal később elrabolják. A lánynak még sikerül beszélnie az apjával, aki rögtön megérti, hogy mi történik.', 'Liam Neeson, Maggie Grace, Famke Janssen, Katie Cassidy, Xander Berkeley', 93, 'akció', 2008, 89, 11),
(10, 'Hetedik', 'David Fincher', 'A lélegzetelállítóan izgalmas krimi-thriller helyszíne New York vigasztalan, szürke és nyirkos betonrengetege, ahol őrült sorozatgyilkos után nyomoz a rendőrség. A férfi a Bibliában megírt hét halálos bűn lajstromát követve szedi áldozatait, míg üldözői, a nyugdíjba készülő, higgadt és bölcs, William Somerset nyomozó és a türelmetlen, lobbanékony újonc, David Mills megpróbálják megakadályozni beteg terve végrehajtásában. A befejezés azonban olyan csavart tartogat, amihez foghatót csak a legjobb Hitchcock-filmekben láthattunk.', 'Brad Pitt, Morgan Freeman, Kevin Spacey, Gwyneth Paltrow, R. Lee Ermey, Richard Roundtree, Richard Portnow, Richard Schiff', 122, 'krimi', 1995, 93, 7),
(11, 'Kapj el, ha tudsz!', 'Steven Spielberg', 'Frank W. Abagnale dolgozott orvosként, ügyvédként és egy nagy légitársaság másodpilótájaként – s mindezt a huszonegyedik születésnapja előtt. A szélhámosság nagymestere emellett briliáns csekkhamisító is volt, szakértelme több millió dollárt hozott neki a konyhára. Carl Hanratty FBI-ügynök legfontosabb küldetésének tartotta, hogy elkapja Franket, és a törvény színe elé vigye, de Frank mindig egy lépéssel előtte járt, és a hajsza folytatására kényszerítette.', 'Leonardo DiCaprio, Tom Hanks, Christopher Walken, Martin Sheen, Amy Adams, Frank John Hughes, Jennifer Garner, James Brolin, Nathalie Baye, Brian Howe, Steve Eastin, Ellen Pompeo, Nancy Lenehan, John Finn', 135, 'krimi', 2002, 92, 8),
(12, 'A tanú', 'Bacsó Péter', 'Pelikán József hithű kommunista, aki végig harcolta elvbarátaival a vészterhes éveket. Most, győzelmük után, a személyi kultusz idején, gátőrként is elkötelezett munkát végez. Lecsap az orvhorgászra, akiről kiderül, régi barátja és harcostársa, Dániel Zoltán, aki jelenleg miniszter. Épp ez a kedves barát buktatja le akaratán kívül, amikor feketevágás miatt megjelenik a hatóság. Pelikán börtönbe kerül, ahonnan egyre magasabb beosztásba helyezik. Ő lesz a vidámpark, az uszoda, majd később egy narancstermelő gazdaság igazgatója. Természetesen mindez nem ajándék. Virág elvtárs minden alkalommal hangsúlyozza, hogy egyszer még kérnek Pelikántól valamit. És ez az egyszer el is érkezik, amikor Dániel Zoltánt koholt vádakkal letartóztatják…', 'Kállai Ferenc, Őze Lajos, Fábri Zoltán, Monori Lili, Both Béla, Bicskey Károly, Kézdy György, Horváth József, Rátonyi Róbert, Györffy György, Rákosi Mária', 103, 'filmszatíra', 1969, 97, 3),
(13, 'Gran Torino', 'Clint Eastwood', 'Walt Kowalski, a koreai veterán és nyugdíjas autószerelő felesége halála után egyedül él. A régi szomszédok is kihaltak vagy elköltöztek, a helyükre délkelet-ázsiai bevándorlók jöttek. Kowalski rossz szemmel nézi őket, nem rejti véka alá a velük kapcsolatos ellenérzését. Mindez csak fokozódik, amikor egyik éjjel a szomszéd fiú el akarja lopni a férfi féltve őrzött autóját, a gyönyörű 1972-es Gran Torinót. Kiderül, hogy a környéket uraló banda kényszerítette erre. Miután a srácot megmenti a bandától, a hálás szomszédok ragaszkodnak hozzá, hogy Thao neki dolgozzon. Különös kapcsolat veszi kezdetét.', 'Clint Eastwood, Bee Vang, Ahney Her, Christopher Carley, Geraldine Hughes, Brian Haley, Dreama Walker', 116, 'dráma', 2008, 87, 13),
(14, '... és megint dühbe jövünk', 'Sergio Corbucci', 'Egy Paragoulis nevű hírhedt görög tartja a markában Miamiban a kaszinókat és a fogadóirodákat. O\'Connor admirális megelégeli a dolgot és hadat üzen az alvilágnak. Johnny Firpo hadnagyot bízza meg az akció lebonyolításával. Féltestvére, Charlie régen szerencsejátékosként kereste a kenyerét, most betanítja a kártyatrükkökre testvérét is, így a két fivér együtt indul harcba a maffia ellen a kaszinóban.', 'Terence Hill, Bud Spencer, Woody Woodbury, Luciano Catenacci, Jerry Lester, Marisa Laurito, Sal Borgese', 109, 'vígjáték', 1978, 90, 10),
(15, 'Kincs, ami nincs', 'Sergio Corbucci', 'Alan (Terence Hill) kincset akar, mégpedig mindenáron. Óriási szerencséjére talál egy térképet, amely egy közeli szigeten kincset jelöl. De hogyan jusson oda? Elrejtőzik Charlie (Bud Spencer), a kalandor hajóján és becsapva az iránytűt, a sziget felé irányítja a hajót. Charlie-nak persze az egyszemélyes hajón nem nehéz megtalálni a potyautast, ám hamarosan mindketten a vízben kötnek ki. Charlie legnagyobb bánatára kénytelenek kiúszni a szigetre, ahol összebarátkoznak a sziget lakóival, a barátságos és vidám királynővel és csinos lányaival, akik elvezetik őket a térképen jelzett helyre. A baj csak az, hogy \"a mesés kincset\" Kamasuka (John Fujioka), a második világháború óta ottfelejtett szamuráj őrzi.', 'Terence Hill, Bud Spencer, John Fujioka, Sal Borgese, Kainowa Lauritzen, Terry Moni Mapuana, Mirna Seya, Herb Goldstein, Louise Bennett', 102, 'akció-vígjáték, kaland', 1981, 91, 9);

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `personal`
--

CREATE TABLE `personal` (
  `id` int(255) NOT NULL,
  `userID` int(11) DEFAULT NULL,
  `bio` varchar(255) DEFAULT NULL,
  `birthDate` date DEFAULT NULL,
  `movieType` varchar(255) DEFAULT NULL,
  `idealLength` varchar(255) DEFAULT NULL,
  `FSprefer` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `sorozatok`
--

CREATE TABLE `sorozatok` (
  `id` int(255) NOT NULL,
  `cim` varchar(255) DEFAULT NULL,
  `leiras` varchar(9999) DEFAULT NULL,
  `rendezo` varchar(255) DEFAULT NULL,
  `szineszek` varchar(999) DEFAULT NULL,
  `mufaj` varchar(255) DEFAULT NULL,
  `megjelenes_eve` int(11) DEFAULT NULL,
  `evadok` int(11) DEFAULT NULL,
  `reszek` int(11) DEFAULT NULL,
  `ertekeles_pozitiv` int(11) DEFAULT NULL,
  `ertekeles_negativ` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- A tábla adatainak kiíratása `sorozatok`
--

INSERT INTO `sorozatok` (`id`, `cim`, `leiras`, `rendezo`, `szineszek`, `mufaj`, `megjelenes_eve`, `evadok`, `reszek`, `ertekeles_pozitiv`, `ertekeles_negativ`) VALUES
(1, 'Maffiózók', 'A maffiavezér, Anthony Soprano kénytelen pszichiáterhez fordulni, akinek beszámol magánéletének egyes aspektusairól, azonban vannak dolgok, melyekről nem beszélhet. Diszkréten próbálja meg elhallgatni munkáját, miközben kegyetlen módon számol le riválisaival.', 'Timothy Van Patten, John Patterson', 'James Gandolfini, Ben Kingsley, Steve Buscemi, Jon Favreau, Julianna Margulies, Edie Falco, Sydney Pollack, Lady Gaga', 'dráma, krimi', 1999, 6, 86, 95, 5),
(2, 'A szerelem siklóernyőn érkezik', 'Szigorúan titkos szerelmi története, melynek főszereplője a chaebol örökösnő, aki miután egy siklóeernyős baleset miatt kénytelen Észak-Koreában leszállni, beleszeret egy különleges tisztbe, aki a pártfogásába veszi őt.', 'Jung Hyo Lee', 'Kim Soo-Hyun, Ye-jin Son, Seong-Woong Park, Sun-young Kim, Hyun Bin, Seo Ji-hye, Jung-hyun Kim, Kyung-Won Yang', 'vígjáték, romantikus', 2019, 1, 16, 95, 5),
(3, 'Csernobil', 'Az amerikai HBO, illetve a brit Sky tévécsatorna koprodukciójában készült minisorozat az 1986-os csernobili katasztrófa eseményeire koncentrál.', 'Johan Renck', 'Stellan Skarsgård, Emily Watson, Jared Harris, Fares Fares, James Cosmo, Barry Keoghan, Sam Strike', 'dráma', 2019, 1, 5, 94, 6),
(4, 'Az elit alakulat', 'Az elit alakulat minden idők egyik legköltségesebb televíziós alkotása, a 10 epizód forgatása 125 millió dollárba került. A Stephen E. Ambrose történész és író könyvén alapuló történet betekintést enged a második világháborús amerikai különítmény 101. számú légi hadosztályának 506. számú ezredének mindennapjaiba, megdöbbentő hitelességgel mutatva be a frontvonalon harcoló katonák megpróbáltatásait.', 'David Frankel, Mikael Salomon', 'Tom Hanks, Tom Hardy, Michael Fassbender, James McAvoy, Simon Pegg, David Schwimmer, Stephen Graham, Damian Lewis', 'dráma, akció', 2001, 1, 10, 93, 7),
(5, 'Trónok harca', 'A Trónok harca George R.R. Martin nemzetközi sikerű, A tűz és jég dala című regényciklusának adaptációja, melyben a nagyhatalmú családok élet-halál harcot vívnak Westeros Hét Királyságának irányításáért. A Vastrónt azonban csak egyetelen ember foglalhatja el.', 'David Nutter, Alan Taylor, Alex Graves', 'Peter Dinklage, Emilia Clarke, Kit Harington, Sean Bean, Lena Headey, Sophie Turner, Jason Momoa', 'kaland, akció, dráma', 2011, 8, 73, 92, 8),
(6, 'Totál szívás', 'Walter, a középiskolai kémiatanár épp 50. születésnapját ünnepelné, amikor megtudja, hogy tüdőrákban szenved, és mivel a betegsége már a végső stádiumban jár, alig egy éve van hátra. A férfi szeretné halála után biztonságban tudni várandós feleségét és fiát, ezért megpróbál minél több pézt összegyűjteni. Szövetkezik egykori drogdíler diákjával, és együtt belefognak a metamfetamin gyártásába. Amíg a férfi profiként dolgozik, Jesse egy igazi pancser. Walter átlépve egy határt egyre lejjebb csúszik a lejtőn, miközben vagyona rohamos iramban gyarapszik.', 'Michelle MacLaren, Adam Bernstein', 'Bryan Cranston, Aaron Paul, Krysten Ritter, Bob Odenkirk, Danny Trejo, Jesse Plemons, Anna Gunn, Laura Fraser', 'dráma, thriller, krimi', 2008, 5, 62, 92, 8),
(7, 'Agymenők', 'Leonard Hofstadter (Johnny Galecki) és Sheldon Cooper (Jim Parson) valódi csodabogarak. Mindketten a Caltech kutatói, ráadásul pasadenai lakásukat is közösen bérelik, egyvalamiben mégis különböznek. Míg Leonard jóindulatú, bár kissé esetlen figura, aki vágyakozik az emberi kapcsolatokra és a szeretetre, Sheldon nehezen boldogul az átlagemberek világában, görcsösen ragaszkodik saját szabályrendszeréhez. A fizika iránti elköteleződés, a képregények, videojátékok és a tudományos-fantasztikus moziért való rajongás fontos pillérei az életüknek, ami azonban a szociális kapcsolatokat és a kommunikációs készségeket illeti, barátaikhoz, Howard Wolowitz-hoz (Simon Helberg) és Raj Koothrappalihoz (Kunal Nayyar) hasonlóan bőven akad pótolnivalójuk. A négy zseni élete gyökeresen megváltozik Sheldon és Leonard új szomszédjának, Pennynek (Kaley Cuoco) köszönhetően, aki ragyogó színészi karrierről álmodva érkezett Kaliforniába.', 'Mark Cendrowski, Anthony Joseph Rich', 'Charlie Sheen, Kathy Bates, Jim Parsons, Kaley Cuoco, Billy Bob Thornton, Christopher Lloyd, Mark Hamill', 'vígjáték', 2006, 12, 281, 92, 8),
(8, 'Narcos', 'A 80-as években az Egyesült Államok és Kolumbia közösen próbál véget vetni a minden idők legkegyetlenebb és leggazdagabb drogbárója, Pablo Escobar és a Medellin drogkartell tényedésének. Igaz történet alapján...', 'Andrés Baiz, Josef Kubota Wladyka', 'Edward James Olmos, Javier Cámara, Pedro Pascal, Shea Whigham, Alberto Ammann, Leonardo García Vale, Wagner Moura', 'dráma, thriller', 2015, 4, 40, 92, 8),
(9, 'A vezércsel', 'Egy árva sakkzseni a hidegháborús érában a függőségével küzdve azért harcol, hogy a világ legjobb sakkozója váljék belőle.', 'Scott Frank', 'Thomas Sangster, Anya Taylor-Joy, Bill Camp, Harry Melling, Marcin Dorociński, Tim Kalkhof, Eloise Webb', 'dráma', 2020, 1, 7, 92, 8),
(10, 'Kemény motorosok', 'Az Anarchia Gyermekei motoros bandát Jax Teller apja alapította, hogy a tagok ezzel is kifejezhessék lázadó mivoltukat. A motorosok világában azonban a bűnözés minden válfaja megjelent, a fegyverektől kezdve egészen a kábítószerekig, a bandaháborúk pedig elkerülhetetlenek.', 'Paris Barclay, Guy Ferland', 'Charlie Hunnam, Katey Sagal, Drea de Matteo, Ron Perlman, Tommy Flanagan, Stephen King, Michael Chiklis', 'dráma, thriller', 2008, 7, 92, 92, 8),
(11, 'Twin Peaks', '25 évvel ezelőtt borzalmas bűntény híre kavarta fel a békés északnyugati kisváros életét. Meggyilkolták Laura Palmert, a gimi egykori szépét. Most folytatódik minden idők egyik legnagyobb hatású, misztikus tévésorozata. A 18 részt az eredeti sorozatot jegyző Mark Frost-David Lynch páros írta, míg az utóbbi a rendezést is magára vállalta. Dale Cooper ügynök és Laura Palmer szerepében visszatér Kyle MacLahlan és Sheryl Lee. A főbb szerepeket Mädchen Amick, Dana Ashbrook és Everett McGill játssza.', 'David Lynch', 'Amanda Seyfried, Tim Roth, Naomi Watts, Monica Bellucci, David Duchovny, Ashley Judd, David Lynch, Laura Dern', 'dráma, thriller, kimi, fantasy', 2017, 1, 18, 92, 8),
(12, 'Fekete madár', 'A sorozat egy rendőr fiát követi nyomon, akit kábítószer-kereskedésért 10 év börtönre ítélnek. Felajánlják neki a feltételes szabadlábra helyezés lehetőségét azzal a feltétellel, hogy összebarátkozik a sorozatgyilkos Larry Hallal, és információkat csal ki belőle a rémtetteivel kapcsolatban.', 'Michaël R. Roskam, Joe Chappelle', 'Taron Egerton, Greg Kinnear, Ray Liotta, Braxton Alexander, Paul Walter Hauser, Jake McLaughlin, Lee Tergesen', 'dráma, thriller, krimi', 2022, 1, 6, 91, 9),
(13, 'Stranger Things', 'A történet egy csendes kisvárosban játszódik, ahol mindenki tud mindent a másikról. Egy nap eltűnik egy gyermek, ami felbolydítja és ízeire kezdi szétszedni a városka lakosainak eddig békés kapcsolati hálóját. Kétes kormányzati szervek és sötét erők kezdik körülvenni a várost. A lakók közül azonban vannak páran, akik észlelik, hogy az esettel kapcsolatban vannak a szem számára láthatatlan tényezők is...', 'Matt Duffer, Ross Duffer, Shawn Levy', 'Winona Ryder, Finn Wolfhard, Millie Bobby Brown, David Harbour, Cary Elwes, Matthew Modine, Paul Reiser, Sean Astin', 'fantasy, dráma, thriller', 2016, 5, 42, 89, 11),
(14, 'Sherlock', 'A BBC elhozta a 21. századba minden idők legnépszerűbb mesterdetektívét, Sherlock Holmest és társát, Dr. Jonh Watsont. A legendás páros soha nem látott eleganciával és lendülettel ered a szövevényes bűnesetek nyomába.', 'Paul McGuigan, Nick Hurran', 'Benedict Cumberbatch, Martin Freeman, Andrew Scott, Toby Jones, Mark Gatiss, Gemma Chan, Rupert Graves, Oona Chaplin', 'dráma, thriller, krimi', 2010, 4, 15, 86, 14),
(15, 'A szökés', 'Michael Scofield bátyját, Lincoln Burrowst bűnösnek találják egy gyilkosságban, és halálbüntetésre ítélik. Michael hisz testvére ártatlanságában, és egy lehetetlen tervvel áll elő. Véghez visz egy bankrablást, lecsukatja magát, majd mérnöki zsenialitását kihasználva megpróbálja megszöktetni Lincolnt a fegyházból. Ekkor még egyikük sem sejti, hogy a háttérben egy, a legmagasabb szálakat érintő összeesküvés áll.', 'Bobby Roth, Kevin Hooks', 'Wentworth Miller, Dominic Purcell, Kaley Cuoco, William Fichtner, Robin Tunney, Peter Stormare, Danielle Campbell', 'dráma, akció, thriller, krimi', 2005, 6, 91, 97, 3);

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `szineszek`
--

CREATE TABLE `szineszek` (
  `id` int(255) NOT NULL,
  `filmId` int(255) DEFAULT NULL,
  `sorozatId` int(255) DEFAULT NULL,
  `szuletesi_datum` date DEFAULT NULL,
  `nev` varchar(255) DEFAULT NULL,
  `allampolgarsag` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- A tábla adatainak kiíratása `szineszek`
--

INSERT INTO `szineszek` (`id`, `filmId`, `sorozatId`, `szuletesi_datum`, `nev`, `allampolgarsag`) VALUES
(1, NULL, NULL, '1954-08-16', 'James Cameron', 'kanadai'),
(2, NULL, NULL, '1963-06-09', 'Johnny Depp', 'amerikai'),
(3, NULL, NULL, '1965-04-04', 'Robert Downey jr.', 'amerikai'),
(4, NULL, NULL, '1943-08-17', 'Robert De Niro', 'amerikai'),
(5, NULL, NULL, '1937-12-31', 'Anthony Hopkins', 'walesi'),
(6, NULL, NULL, '1929-10-31', 'Bud Spencer (Carlo Pedersoli)', 'olasz'),
(7, NULL, NULL, '1940-04-25', 'Al Pacino (Alfredo James Pacino)', 'amerikai'),
(8, NULL, NULL, '1930-05-31', 'Clint Eastwood', 'amerikai'),
(9, NULL, NULL, '1939-03-29', 'Terence Hill (Mario Girotti)', 'olasz'),
(10, NULL, NULL, '1937-06-01', 'Morgan Freeman', 'amerikai'),
(11, NULL, NULL, '1968-10-12', 'Hugh Jackman', 'ausztrál'),
(12, NULL, NULL, '1926-05-08', 'David Attenborough', 'brit'),
(13, NULL, NULL, '1956-07-09', 'Tom Hanks', 'amerikai'),
(14, NULL, NULL, '1937-04-22', 'Jack Nicholson', 'amerikai'),
(15, NULL, NULL, '1967-07-26', 'Jason Statham', 'brit'),
(16, NULL, NULL, '1955-03-19', 'Bruce Willis', 'német'),
(17, NULL, NULL, '1928-11-22', 'Sinkovits Imre', 'magyar'),
(18, NULL, NULL, '1979-04-04', 'Heath Ledger', 'ausztrál'),
(19, NULL, NULL, '1920-10-01', 'Walter Matthau', 'amerikai'),
(20, NULL, NULL, '1929-05-04', 'Audrey Hepburn', 'belga');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `filmek`
--
ALTER TABLE `filmek`
  ADD PRIMARY KEY (`id`);

--
-- A tábla indexei `personal`
--
ALTER TABLE `personal`
  ADD PRIMARY KEY (`id`);

--
-- A tábla indexei `sorozatok`
--
ALTER TABLE `sorozatok`
  ADD PRIMARY KEY (`id`);

--
-- A tábla indexei `szineszek`
--
ALTER TABLE `szineszek`
  ADD PRIMARY KEY (`id`);

--
-- A tábla indexei `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `filmek`
--
ALTER TABLE `filmek`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT a táblához `personal`
--
ALTER TABLE `personal`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT a táblához `sorozatok`
--
ALTER TABLE `sorozatok`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT a táblához `szineszek`
--
ALTER TABLE `szineszek`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT a táblához `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
