DROP DATABASE pandora_real_estate;
CREATE DATABASE pandora_real_estate;
USE pandora_real_estate;

#
# TABLE STRUCTURE FOR: Employee
#

DROP TABLE IF EXISTS Employee;

CREATE TABLE Employee (
  EID char(9) COLLATE utf8mb4_unicode_ci NOT NULL,
  FName varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  LName varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  Phone_num char(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  Email varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  Role varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (EID)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO Employee (EID, FName, LName, Phone_num, Email, Role) VALUES ('109551148', 'distinctio', 'sint', '(910)092-0', 'swaniawski.lee@example.net', 'NULL');
INSERT INTO Employee (EID, FName, LName, Phone_num, Email, Role) VALUES ('121663610', 'consequatur', 'necessitatibus', '341.940.75', 'camden93@example.org', 'NULL');
INSERT INTO Employee (EID, FName, LName, Phone_num, Email, Role) VALUES ('154851937', 'aspernatur', 'suscipit', '220-579-10', 'ggulgowski@example.org', 'NULL');
INSERT INTO Employee (EID, FName, LName, Phone_num, Email, Role) VALUES ('161286064', 'vel', 'et', '730.906.35', 'margarita.medhurst@example.net', 'NULL');
INSERT INTO Employee (EID, FName, LName, Phone_num, Email, Role) VALUES ('161756395', 'ut', 'impedit', '(327)777-0', 'elmo22@example.org', 'NULL');
INSERT INTO Employee (EID, FName, LName, Phone_num, Email, Role) VALUES ('166584205', 'error', 'illo', '171.275.56', 'molly.gottlieb@example.net', 'NULL');
INSERT INTO Employee (EID, FName, LName, Phone_num, Email, Role) VALUES ('168249243', 'quisquam', 'omnis', '1-161-494-', 'victoria43@example.org', 'NULL');
INSERT INTO Employee (EID, FName, LName, Phone_num, Email, Role) VALUES ('168412358', 'distinctio', 'quos', '1-717-280-', 'pacocha.royce@example.net', 'NULL');
INSERT INTO Employee (EID, FName, LName, Phone_num, Email, Role) VALUES ('179934955', 'quia', 'earum', '0580054615', 'hannah20@example.org', 'NULL');
INSERT INTO Employee (EID, FName, LName, Phone_num, Email, Role) VALUES ('183598673', 'fugiat', 'ad', '218-094-33', 'ron.pouros@example.com', 'NULL');
INSERT INTO Employee (EID, FName, LName, Phone_num, Email, Role) VALUES ('196058608', 'et', 'iure', '042.568.93', 'kuhic.robert@example.com', 'NULL');
INSERT INTO Employee (EID, FName, LName, Phone_num, Email, Role) VALUES ('206423773', 'maxime', 'quaerat', '1-870-088-', 'abigale86@example.org', 'NULL');
INSERT INTO Employee (EID, FName, LName, Phone_num, Email, Role) VALUES ('210797242', 'consequatur', 'illo', '(323)971-2', 'green.albertha@example.com', 'NULL');
INSERT INTO Employee (EID, FName, LName, Phone_num, Email, Role) VALUES ('212489615', 'dignissimos', 'totam', '(265)759-9', 'adalberto.hermiston@example.org', 'NULL');
INSERT INTO Employee (EID, FName, LName, Phone_num, Email, Role) VALUES ('219792592', 'qui', 'et', '423-962-72', 'senger.carli@example.org', 'NULL');
INSERT INTO Employee (EID, FName, LName, Phone_num, Email, Role) VALUES ('231500769', 'quo', 'in', '(459)095-1', 'mcdermott.bradford@example.net', 'NULL');
INSERT INTO Employee (EID, FName, LName, Phone_num, Email, Role) VALUES ('234104136', 'quos', 'totam', '510-130-88', 'dcarroll@example.org', 'NULL');
INSERT INTO Employee (EID, FName, LName, Phone_num, Email, Role) VALUES ('234181121', 'deleniti', 'quidem', '1-482-307-', 'ngreenholt@example.org', 'NULL');
INSERT INTO Employee (EID, FName, LName, Phone_num, Email, Role) VALUES ('234487925', 'sint', 'asperiores', '807-566-11', 'fgusikowski@example.com', 'NULL');
INSERT INTO Employee (EID, FName, LName, Phone_num, Email, Role) VALUES ('250554635', 'voluptatibus', 'consequatur', '+65(8)6148', 'fjohnson@example.com', 'NULL');
INSERT INTO Employee (EID, FName, LName, Phone_num, Email, Role) VALUES ('263575335', 'facere', 'sed', '(404)855-6', 'sherman.durgan@example.net', 'NULL');
INSERT INTO Employee (EID, FName, LName, Phone_num, Email, Role) VALUES ('282541848', 'sit', 'placeat', '560-215-99', 'jonas86@example.com', 'NULL');
INSERT INTO Employee (EID, FName, LName, Phone_num, Email, Role) VALUES ('287529371', 'nesciunt', 'laudantium', '(869)526-5', 'tremblay.victoria@example.org', 'NULL');
INSERT INTO Employee (EID, FName, LName, Phone_num, Email, Role) VALUES ('309674459', 'rerum', 'explicabo', '139-478-21', 'mona39@example.org', 'NULL');
INSERT INTO Employee (EID, FName, LName, Phone_num, Email, Role) VALUES ('312210101', 'reprehenderit', 'doloremque', '029.222.17', 'qkeebler@example.com', 'NULL');
INSERT INTO Employee (EID, FName, LName, Phone_num, Email, Role) VALUES ('315197903', 'labore', 'doloribus', '1-224-054-', 'dora01@example.com', 'NULL');
INSERT INTO Employee (EID, FName, LName, Phone_num, Email, Role) VALUES ('324016359', 'voluptas', 'nemo', '+48(4)8555', 'breanna.parker@example.org', 'NULL');
INSERT INTO Employee (EID, FName, LName, Phone_num, Email, Role) VALUES ('333861758', 'quaerat', 'possimus', '885-608-25', 'guillermo.little@example.com', 'NULL');
INSERT INTO Employee (EID, FName, LName, Phone_num, Email, Role) VALUES ('336061017', 'qui', 'inventore', '(711)372-7', 'koelpin.abelardo@example.com', 'NULL');
INSERT INTO Employee (EID, FName, LName, Phone_num, Email, Role) VALUES ('348704428', 'temporibus', 'corporis', '270.687.85', 'karl43@example.org', 'NULL');
INSERT INTO Employee (EID, FName, LName, Phone_num, Email, Role) VALUES ('371082257', 'fuga', 'animi', '(948)504-7', 'ritchie.reed@example.com', 'NULL');
INSERT INTO Employee (EID, FName, LName, Phone_num, Email, Role) VALUES ('376364370', 'reprehenderit', 'aspernatur', '1-586-999-', 'klocko.wiley@example.com', 'NULL');
INSERT INTO Employee (EID, FName, LName, Phone_num, Email, Role) VALUES ('389806324', 'ea', 'ea', '(121)028-5', 'murray.markus@example.org', 'NULL');
INSERT INTO Employee (EID, FName, LName, Phone_num, Email, Role) VALUES ('436948467', 'dolorem', 'laborum', '826.113.72', 'garland86@example.net', 'NULL');
INSERT INTO Employee (EID, FName, LName, Phone_num, Email, Role) VALUES ('437555190', 'debitis', 'facilis', '322-851-24', 'kian42@example.com', 'NULL');
INSERT INTO Employee (EID, FName, LName, Phone_num, Email, Role) VALUES ('439068157', 'cumque', 'accusantium', '+60(3)4010', 'casimer.denesik@example.com', 'NULL');
INSERT INTO Employee (EID, FName, LName, Phone_num, Email, Role) VALUES ('443289351', 'autem', 'quidem', '0745904231', 'gerlach.stuart@example.net', 'NULL');
INSERT INTO Employee (EID, FName, LName, Phone_num, Email, Role) VALUES ('449192990', 'dolorem', 'sunt', '573.125.65', 'ruthe90@example.org', 'NULL');
INSERT INTO Employee (EID, FName, LName, Phone_num, Email, Role) VALUES ('528379853', 'eum', 'nesciunt', '831-439-84', 'trinity.cummings@example.net', 'NULL');
INSERT INTO Employee (EID, FName, LName, Phone_num, Email, Role) VALUES ('529831272', 'ratione', 'impedit', '0832543857', 'frederic83@example.org', 'NULL');
INSERT INTO Employee (EID, FName, LName, Phone_num, Email, Role) VALUES ('531691859', 'eos', 'iusto', '+52(9)9737', 'pdach@example.org', 'NULL');
INSERT INTO Employee (EID, FName, LName, Phone_num, Email, Role) VALUES ('535003143', 'placeat', 'impedit', '(273)845-6', 'lturner@example.net', 'NULL');
INSERT INTO Employee (EID, FName, LName, Phone_num, Email, Role) VALUES ('563663586', 'enim', 'dolore', '119.559.09', 'srobel@example.org', 'NULL');
INSERT INTO Employee (EID, FName, LName, Phone_num, Email, Role) VALUES ('567523681', 'delectus', 'architecto', '1-785-901-', 'runolfsson.idella@example.com', 'NULL');
INSERT INTO Employee (EID, FName, LName, Phone_num, Email, Role) VALUES ('572683323', 'quod', 'unde', '(696)661-5', 'alvera78@example.org', 'NULL');
INSERT INTO Employee (EID, FName, LName, Phone_num, Email, Role) VALUES ('57411986', 'aut', 'hic', '(485)688-0', 'zhagenes@example.org', 'NULL');
INSERT INTO Employee (EID, FName, LName, Phone_num, Email, Role) VALUES ('59432171', 'voluptas', 'qui', '1-317-635-', 'durgan.jared@example.org', 'NULL');
INSERT INTO Employee (EID, FName, LName, Phone_num, Email, Role) VALUES ('617359762', 'reiciendis', 'aliquam', '(569)958-0', 'iboehm@example.com', 'NULL');
INSERT INTO Employee (EID, FName, LName, Phone_num, Email, Role) VALUES ('619556684', 'consequuntur', 'aut', '(854)413-2', 'jedediah.watsica@example.org', 'NULL');
INSERT INTO Employee (EID, FName, LName, Phone_num, Email, Role) VALUES ('619697001', 'aut', 'doloribus', '371.847.19', 'kuphal.watson@example.org', 'NULL');
INSERT INTO Employee (EID, FName, LName, Phone_num, Email, Role) VALUES ('631805004', 'est', 'neque', '0297363743', 'olson.furman@example.net', 'NULL');
INSERT INTO Employee (EID, FName, LName, Phone_num, Email, Role) VALUES ('649190480', 'expedita', 'velit', '0939019696', 'ifisher@example.com', 'NULL');
INSERT INTO Employee (EID, FName, LName, Phone_num, Email, Role) VALUES ('650577109', 'earum', 'autem', '(124)260-6', 'xtromp@example.net', 'NULL');
INSERT INTO Employee (EID, FName, LName, Phone_num, Email, Role) VALUES ('662654060', 'ad', 'quisquam', '+98(9)4491', 'christ.ondricka@example.org', 'NULL');
INSERT INTO Employee (EID, FName, LName, Phone_num, Email, Role) VALUES ('665000412', 'minima', 'est', '274.966.16', 'abernathy.lisandro@example.org', 'NULL');
INSERT INTO Employee (EID, FName, LName, Phone_num, Email, Role) VALUES ('668127052', 'alias', 'autem', '279.809.12', 'zackary51@example.net', 'NULL');
INSERT INTO Employee (EID, FName, LName, Phone_num, Email, Role) VALUES ('677223340', 'molestiae', 'dolor', '433.428.23', 'mcglynn.camila@example.org', 'NULL');
INSERT INTO Employee (EID, FName, LName, Phone_num, Email, Role) VALUES ('682405949', 'tempore', 'incidunt', '1-578-155-', 'carrie.maggio@example.net', 'NULL');
INSERT INTO Employee (EID, FName, LName, Phone_num, Email, Role) VALUES ('686591928', 'ratione', 'tempore', '0364691602', 'corkery.jaquelin@example.com', 'NULL');
INSERT INTO Employee (EID, FName, LName, Phone_num, Email, Role) VALUES ('68761976', 'quas', 'excepturi', '+83(0)7368', 'kkassulke@example.com', 'NULL');
INSERT INTO Employee (EID, FName, LName, Phone_num, Email, Role) VALUES ('70975035', 'similique', 'sed', '509.747.72', 'jhickle@example.org', 'NULL');
INSERT INTO Employee (EID, FName, LName, Phone_num, Email, Role) VALUES ('712745628', 'dicta', 'mollitia', '586-618-04', 'glover.hardy@example.org', 'NULL');
INSERT INTO Employee (EID, FName, LName, Phone_num, Email, Role) VALUES ('717842414', 'nobis', 'omnis', '439-172-54', 'nemard@example.net', 'NULL');
INSERT INTO Employee (EID, FName, LName, Phone_num, Email, Role) VALUES ('728685907', 'porro', 'harum', '650.133.71', 'amarquardt@example.com', 'NULL');
INSERT INTO Employee (EID, FName, LName, Phone_num, Email, Role) VALUES ('733178670', 'qui', 'est', '052-136-52', 'florine.maggio@example.net', 'NULL');
INSERT INTO Employee (EID, FName, LName, Phone_num, Email, Role) VALUES ('745009741', 'esse', 'aperiam', '480-798-79', 'kulas.mervin@example.org', 'NULL');
INSERT INTO Employee (EID, FName, LName, Phone_num, Email, Role) VALUES ('748690825', 'reiciendis', 'quam', '1-247-687-', 'olson.bridgette@example.org', 'NULL');
INSERT INTO Employee (EID, FName, LName, Phone_num, Email, Role) VALUES ('757364726', 'recusandae', 'qui', '+88(2)7881', 'trey.schmitt@example.net', 'NULL');
INSERT INTO Employee (EID, FName, LName, Phone_num, Email, Role) VALUES ('767818578', 'aut', 'adipisci', '(259)981-4', 'kelvin60@example.org', 'NULL');
INSERT INTO Employee (EID, FName, LName, Phone_num, Email, Role) VALUES ('768982257', 'rerum', 'ut', '0591540081', 'vwaelchi@example.org', 'NULL');
INSERT INTO Employee (EID, FName, LName, Phone_num, Email, Role) VALUES ('774313558', 'et', 'facilis', '(596)788-5', 'judge65@example.net', 'NULL');
INSERT INTO Employee (EID, FName, LName, Phone_num, Email, Role) VALUES ('791445838', 'et', 'accusantium', '873.095.78', 'holden.feeney@example.net', 'NULL');
INSERT INTO Employee (EID, FName, LName, Phone_num, Email, Role) VALUES ('798594580', 'aut', 'fuga', '1-892-973-', 'gottlieb.elenora@example.com', 'NULL');
INSERT INTO Employee (EID, FName, LName, Phone_num, Email, Role) VALUES ('802109982', 'tempore', 'ad', '280-107-92', 'waelchi.cayla@example.net', 'NULL');
INSERT INTO Employee (EID, FName, LName, Phone_num, Email, Role) VALUES ('810603558', 'quasi', 'et', '(300)741-7', 'jayme.kunze@example.com', 'NULL');
INSERT INTO Employee (EID, FName, LName, Phone_num, Email, Role) VALUES ('816034368', 'unde', 'distinctio', '+18(2)8035', 'alberta.runolfsson@example.net', 'NULL');
INSERT INTO Employee (EID, FName, LName, Phone_num, Email, Role) VALUES ('818432626', 'natus', 'dolorum', '100-400-98', 'adriana.haley@example.org', 'NULL');
INSERT INTO Employee (EID, FName, LName, Phone_num, Email, Role) VALUES ('825103529', 'et', 'voluptates', '545.177.74', 'jamar.paucek@example.org', 'NULL');
INSERT INTO Employee (EID, FName, LName, Phone_num, Email, Role) VALUES ('829495743', 'id', 'vitae', '671-688-94', 'lacey.senger@example.org', 'NULL');
INSERT INTO Employee (EID, FName, LName, Phone_num, Email, Role) VALUES ('834104394', 'aut', 'aut', '+84(3)2248', 'wintheiser.augusta@example.org', 'NULL');
INSERT INTO Employee (EID, FName, LName, Phone_num, Email, Role) VALUES ('83644643', 'a', 'aut', '0394987296', 'lowe.mozelle@example.org', 'NULL');
INSERT INTO Employee (EID, FName, LName, Phone_num, Email, Role) VALUES ('836516018', 'est', 'fugit', '0047006930', 'tschaden@example.com', 'NULL');
INSERT INTO Employee (EID, FName, LName, Phone_num, Email, Role) VALUES ('858879570', 'ut', 'dolores', '(581)661-8', 'jeanette.altenwerth@example.net', 'NULL');
INSERT INTO Employee (EID, FName, LName, Phone_num, Email, Role) VALUES ('864490085', 'et', 'doloribus', '707-527-49', 'roob.celestine@example.org', 'NULL');
INSERT INTO Employee (EID, FName, LName, Phone_num, Email, Role) VALUES ('872495434', 'dolore', 'impedit', '807.945.88', 'rachael18@example.org', 'NULL');
INSERT INTO Employee (EID, FName, LName, Phone_num, Email, Role) VALUES ('876296564', 'ut', 'mollitia', '1-065-480-', 'sfisher@example.com', 'NULL');
INSERT INTO Employee (EID, FName, LName, Phone_num, Email, Role) VALUES ('880607848', 'ullam', 'a', '713-718-07', 'kurt.donnelly@example.net', 'NULL');
INSERT INTO Employee (EID, FName, LName, Phone_num, Email, Role) VALUES ('89948476', 'aut', 'sed', '1-728-413-', 'ewell.cormier@example.com', 'NULL');
INSERT INTO Employee (EID, FName, LName, Phone_num, Email, Role) VALUES ('905977321', 'et', 'quidem', '1-152-232-', 'alda06@example.net', 'NULL');
INSERT INTO Employee (EID, FName, LName, Phone_num, Email, Role) VALUES ('914499152', 'eaque', 'eos', '1-997-115-', 'rosendo.franecki@example.org', 'NULL');
INSERT INTO Employee (EID, FName, LName, Phone_num, Email, Role) VALUES ('93123141', 'velit', 'quis', '1-459-533-', 'schamberger.preston@example.com', 'NULL');
INSERT INTO Employee (EID, FName, LName, Phone_num, Email, Role) VALUES ('950867135', 'et', 'minus', '(453)388-1', 'noe75@example.org', 'NULL');
INSERT INTO Employee (EID, FName, LName, Phone_num, Email, Role) VALUES ('956904566', 'dolor', 'saepe', '(399)123-7', 'brisa.turcotte@example.org', 'NULL');
INSERT INTO Employee (EID, FName, LName, Phone_num, Email, Role) VALUES ('961895676', 'ut', 'in', '0404540909', 'pdaugherty@example.net', 'NULL');
INSERT INTO Employee (EID, FName, LName, Phone_num, Email, Role) VALUES ('964031107', 'est', 'odit', '(542)485-9', 'hills.tremaine@example.com', 'NULL');
INSERT INTO Employee (EID, FName, LName, Phone_num, Email, Role) VALUES ('964629613', 'et', 'incidunt', '(018)450-8', 'chadd31@example.com', 'NULL');
INSERT INTO Employee (EID, FName, LName, Phone_num, Email, Role) VALUES ('976861652', 'quos', 'dicta', '0282313946', 'quigley.dagmar@example.net', 'NULL');
INSERT INTO Employee (EID, FName, LName, Phone_num, Email, Role) VALUES ('983006552', 'praesentium', 'aperiam', '+72(4)1344', 'kbode@example.org', 'NULL');
INSERT INTO Employee (EID, FName, LName, Phone_num, Email, Role) VALUES ('992356153', 'quam', 'necessitatibus', '715.119.24', 'jroberts@example.net', 'NULL');
INSERT INTO Employee (EID, FName, LName, Phone_num, Email, Role) VALUES ('995979632', 'aut', 'et', '285-990-46', 'janelle93@example.net', 'NULL');


#
# TABLE STRUCTURE FOR: Admin
#

DROP TABLE IF EXISTS Admin;

CREATE TABLE Admin (
  EID char(9) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (EID),
  CONSTRAINT Admin_FK FOREIGN KEY (EID) REFERENCES Employee (EID) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO Admin (EID) VALUES ('109551148');
INSERT INTO Admin (EID) VALUES ('121663610');
INSERT INTO Admin (EID) VALUES ('154851937');
INSERT INTO Admin (EID) VALUES ('161286064');
INSERT INTO Admin (EID) VALUES ('161756395');


#
# TABLE STRUCTURE FOR: Agent
#

DROP TABLE IF EXISTS Agent;

CREATE TABLE Agent (
  EID char(9) COLLATE utf8mb4_unicode_ci NOT NULL,
  Rating int(11) DEFAULT NULL,
  PRIMARY KEY (EID)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO Agent (EID, Rating) VALUES ('109551148', 5);
INSERT INTO Agent (EID, Rating) VALUES ('121663610', 1);
INSERT INTO Agent (EID, Rating) VALUES ('154851937', 1);
INSERT INTO Agent (EID, Rating) VALUES ('161286064', 5);
INSERT INTO Agent (EID, Rating) VALUES ('161756395', 2);
INSERT INTO Agent (EID, Rating) VALUES ('166584205', 2);
INSERT INTO Agent (EID, Rating) VALUES ('168249243', 1);
INSERT INTO Agent (EID, Rating) VALUES ('168412358', 2);
INSERT INTO Agent (EID, Rating) VALUES ('179934955', 2);
INSERT INTO Agent (EID, Rating) VALUES ('183598673', 4);
INSERT INTO Agent (EID, Rating) VALUES ('196058608', 2);
INSERT INTO Agent (EID, Rating) VALUES ('206423773', 4);
INSERT INTO Agent (EID, Rating) VALUES ('210797242', 5);
INSERT INTO Agent (EID, Rating) VALUES ('212489615', 4);
INSERT INTO Agent (EID, Rating) VALUES ('219792592', 4);
INSERT INTO Agent (EID, Rating) VALUES ('231500769', 3);
INSERT INTO Agent (EID, Rating) VALUES ('234104136', 2);
INSERT INTO Agent (EID, Rating) VALUES ('234181121', 2);
INSERT INTO Agent (EID, Rating) VALUES ('234487925', 4);
INSERT INTO Agent (EID, Rating) VALUES ('250554635', 3);
INSERT INTO Agent (EID, Rating) VALUES ('263575335', 5);
INSERT INTO Agent (EID, Rating) VALUES ('282541848', 3);
INSERT INTO Agent (EID, Rating) VALUES ('287529371', 3);
INSERT INTO Agent (EID, Rating) VALUES ('309674459', 4);
INSERT INTO Agent (EID, Rating) VALUES ('312210101', 1);
INSERT INTO Agent (EID, Rating) VALUES ('315197903', 1);
INSERT INTO Agent (EID, Rating) VALUES ('324016359', 2);
INSERT INTO Agent (EID, Rating) VALUES ('333861758', 3);
INSERT INTO Agent (EID, Rating) VALUES ('336061017', 3);
INSERT INTO Agent (EID, Rating) VALUES ('348704428', 3);

#
# TABLE STRUCTURE FOR: Listing_Agent
#

DROP TABLE IF EXISTS Listing_Agent;

CREATE TABLE Listing_Agent (
  EID char(9) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (EID),
  CONSTRAINT Listing_Agent_FK FOREIGN KEY (EID) REFERENCES Agent (EID) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO Listing_Agent (EID) VALUES ('109551148');
INSERT INTO Listing_Agent (EID) VALUES ('121663610');
INSERT INTO Listing_Agent (EID) VALUES ('154851937');
INSERT INTO Listing_Agent (EID) VALUES ('161286064');
INSERT INTO Listing_Agent (EID) VALUES ('161756395');
INSERT INTO Listing_Agent (EID) VALUES ('166584205');
INSERT INTO Listing_Agent (EID) VALUES ('168249243');
INSERT INTO Listing_Agent (EID) VALUES ('168412358');
INSERT INTO Listing_Agent (EID) VALUES ('179934955');
INSERT INTO Listing_Agent (EID) VALUES ('183598673');
INSERT INTO Listing_Agent (EID) VALUES ('196058608');
INSERT INTO Listing_Agent (EID) VALUES ('206423773');
INSERT INTO Listing_Agent (EID) VALUES ('210797242');
INSERT INTO Listing_Agent (EID) VALUES ('212489615');
INSERT INTO Listing_Agent (EID) VALUES ('219792592');

#
# TABLE STRUCTURE FOR: Listing
#

DROP TABLE IF EXISTS Listing;

CREATE TABLE Listing (
  Zip_code char(6) COLLATE utf8mb4_unicode_ci NOT NULL,
  House_num int(11) DEFAULT NULL,
  Street varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  City varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  Province varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  Country varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  Price decimal(8,2) DEFAULT NULL,
  Photos blob DEFAULT NULL,
  Num_of_bedrooms int(11) DEFAULT NULL,
  Num_of_half_bathrooms int(11) DEFAULT NULL,
  Num_of_full_bathrooms int(11) DEFAULT NULL,
  Square_footage int(11) DEFAULT NULL,
  Type varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  Front_facing char(4) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  Community varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  Heating varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  Fireplace_type varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  Attached_Detached_garage varchar(8) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  Garage_capacity int(11) DEFAULT NULL,
  LAgent_ID char(9) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  Add_date date DEFAULT NULL,
  PRIMARY KEY (Zip_code),
  KEY Listing_FK (LAgent_ID),
  CONSTRAINT Listing_FK FOREIGN KEY (LAgent_ID) REFERENCES Listing_Agent (EID) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO Listing (Zip_code, House_num, Street, City, Province, Country, Price, Photos, Num_of_bedrooms, Num_of_half_bathrooms, Num_of_full_bathrooms, Square_footage, Type, Front_facing, Community, Heating, Fireplace_type, Attached_Detached_garage, Garage_capacity, LAgent_ID, Add_date) VALUES ('08 ts', 823579194, 'Enrico Villages', 'West Enosberg', 'Connecticut', 'Uruguay', '1.32', 'images/b35414c0416b46a2d430da16e06bb5d4.jpg', 1, 23, 30, 2653, 'a', 'b', 'aliquid', 'Bogisich PLC', 'Steuber Ltd', '9012562', 0, '121663610', '1996-04-11');
INSERT INTO Listing (Zip_code, House_num, Street, City, Province, Country, Price, Photos, Num_of_bedrooms, Num_of_half_bathrooms, Num_of_full_bathrooms, Square_footage, Type, Front_facing, Community, Heating, Fireplace_type, Attached_Detached_garage, Garage_capacity, LAgent_ID, Add_date) VALUES ('13 zg', 157837151, 'Noel Freeway', 'Kassulkeshire', 'District of Col', 'New Zealand', '8.32', 'images/f9a2dd874e332d8a4b61a866f70298ee.jpg', 41, 11, 43, 542, 'c', 'a', 'fugiat', 'Kerluke Group', 'Jones LLC', '84039325', 0, '179934955', '1979-08-07');
INSERT INTO Listing (Zip_code, House_num, Street, City, Province, Country, Price, Photos, Num_of_bedrooms, Num_of_half_bathrooms, Num_of_full_bathrooms, Square_footage, Type, Front_facing, Community, Heating, Fireplace_type, Attached_Detached_garage, Garage_capacity, LAgent_ID, Add_date) VALUES ('15 ce', 744573760, 'Paul Wells', 'Jacobsburgh', 'Montana', 'Venezuela', '1019.20', 'images/193573ab3a428f248732d440de7fe026.jpg', 46, 35, 48, 4570, 'a', 'a', 'unde', 'Buckridge Group', 'Lang PLC', '61934770', 0, '161756395', '2004-12-03');
INSERT INTO Listing (Zip_code, House_num, Street, City, Province, Country, Price, Photos, Num_of_bedrooms, Num_of_half_bathrooms, Num_of_full_bathrooms, Square_footage, Type, Front_facing, Community, Heating, Fireplace_type, Attached_Detached_garage, Garage_capacity, LAgent_ID, Add_date) VALUES ('16 kv', 322728049, 'Leora Isle', 'Port Lou', 'Oklahoma', 'San Marino', '810.28', 'images/b431140ba856d11fe04bb767fb7e837e.jpg', 40, 44, 28, 1069, 'c', 'a', 'consequatur', 'Hessel, Larkin and G', 'Abernathy-Powlowski', '27642', 0, '168249243', '1971-02-21');
INSERT INTO Listing (Zip_code, House_num, Street, City, Province, Country, Price, Photos, Num_of_bedrooms, Num_of_half_bathrooms, Num_of_full_bathrooms, Square_footage, Type, Front_facing, Community, Heating, Fireplace_type, Attached_Detached_garage, Garage_capacity, LAgent_ID, Add_date) VALUES ('19 ex', 413121443, 'Satterfield Views', 'East Annabell', 'Michigan', 'Slovakia (Slova', '234479.68', 'images/6fee85a75c1a595a9fbe76ddc855a4c4.jpg', 45, 6, 4, 1245, 'c', 'b', 'quia', 'White-Mosciski', 'Parker PLC', '79113352', 0, '121663610', '2010-12-09');
INSERT INTO Listing (Zip_code, House_num, Street, City, Province, Country, Price, Photos, Num_of_bedrooms, Num_of_half_bathrooms, Num_of_full_bathrooms, Square_footage, Type, Front_facing, Community, Heating, Fireplace_type, Attached_Detached_garage, Garage_capacity, LAgent_ID, Add_date) VALUES ('25 ih', 757972912, 'Schiller Mission', 'McCulloughberg', 'Indiana', 'Gibraltar', '158598.88', 'images/8e61b2a01a591beba012097ed92dd416.jpg', 16, 36, 35, 3740, 'b', 'a', 'aut', 'Stoltenberg, Kilback', 'Douglas PLC', '72586087', 0, '183598673', '1985-12-05');
INSERT INTO Listing (Zip_code, House_num, Street, City, Province, Country, Price, Photos, Num_of_bedrooms, Num_of_half_bathrooms, Num_of_full_bathrooms, Square_footage, Type, Front_facing, Community, Heating, Fireplace_type, Attached_Detached_garage, Garage_capacity, LAgent_ID, Add_date) VALUES ('31 nn', 712245598, 'Amanda Trace', 'Port Zora', 'NewYork', 'Korea', '0.00', 'images/1c487a13c8e4096547056092f9097a2f.jpg', 6, 6, 30, 993, 'b', 'a', 'illo', 'Ruecker, Schumm and ', 'Hegmann, Metz and Ni', '5', 0, '109551148', '2005-09-17');
INSERT INTO Listing (Zip_code, House_num, Street, City, Province, Country, Price, Photos, Num_of_bedrooms, Num_of_half_bathrooms, Num_of_full_bathrooms, Square_footage, Type, Front_facing, Community, Heating, Fireplace_type, Attached_Detached_garage, Garage_capacity, LAgent_ID, Add_date) VALUES ('33 sp', 370081122, 'Hackett Island', 'Port Emiefurt', 'Montana', 'Angola', '106.74', 'images/9a5fc06ddd2c933955a57bb8c4b1feaa.jpg', 12, 26, 37, 1982, 'a', 'a', 'ullam', 'Block, Satterfield a', 'Heaney, Lowe and Gra', '890', 0, '109551148', '1990-11-14');
INSERT INTO Listing (Zip_code, House_num, Street, City, Province, Country, Price, Photos, Num_of_bedrooms, Num_of_half_bathrooms, Num_of_full_bathrooms, Square_footage, Type, Front_facing, Community, Heating, Fireplace_type, Attached_Detached_garage, Garage_capacity, LAgent_ID, Add_date) VALUES ('37 fl', 682823378, 'Leuschke Harbors', 'Dietrichville', 'Arkansas', 'New Caledonia', '999999.99', 'images/121bec728b25eb96e38d8443a2e79132.jpg', 30, 20, 8, 2494, 'b', 'a', 'quas', 'Gottlieb-Moore', 'Koepp, Pouros and Do', '828585', 0, '168412358', '1979-04-30');
INSERT INTO Listing (Zip_code, House_num, Street, City, Province, Country, Price, Photos, Num_of_bedrooms, Num_of_half_bathrooms, Num_of_full_bathrooms, Square_footage, Type, Front_facing, Community, Heating, Fireplace_type, Attached_Detached_garage, Garage_capacity, LAgent_ID, Add_date) VALUES ('38 zp', 343813678, 'Lillie Drive', 'South Morris', 'Ohio', 'Switzerland', '0.00', 'images/c44f62db183dbda3091d74fb07ca41ee.jpg', 34, 46, 48, 4238, 'c', 'b', 'recusandae', 'Becker, Graham and H', 'Howell, Armstrong an', '', 0, '179934955', '2016-09-18');
INSERT INTO Listing (Zip_code, House_num, Street, City, Province, Country, Price, Photos, Num_of_bedrooms, Num_of_half_bathrooms, Num_of_full_bathrooms, Square_footage, Type, Front_facing, Community, Heating, Fireplace_type, Attached_Detached_garage, Garage_capacity, LAgent_ID, Add_date) VALUES ('39 qk', 499371876, 'Devin Cove', 'South Carleyport', 'Utah', 'Isle of Man', '7212.75', 'images/ae28336526170f6f0da4b626b7b6fe30.jpg', 16, 22, 6, 3046, 'c', 'a', 'qui', 'Hammes Inc', 'Haag-Reynolds', '454342', 0, '210797242', '2011-09-01');
INSERT INTO Listing (Zip_code, House_num, Street, City, Province, Country, Price, Photos, Num_of_bedrooms, Num_of_half_bathrooms, Num_of_full_bathrooms, Square_footage, Type, Front_facing, Community, Heating, Fireplace_type, Attached_Detached_garage, Garage_capacity, LAgent_ID, Add_date) VALUES ('39 ti', 5655590, 'Rowe Walk', 'Caleview', 'Oklahoma', 'Eritrea', '9.67', 'images/08b32787e841a7fc59d44d1cd092e0e4.jpg', 17, 22, 34, 2817, 'b', 'c', 'quos', 'Steuber, Rolfson and', 'Terry-Kilback', '', 0, '196058608', '1972-12-25');
INSERT INTO Listing (Zip_code, House_num, Street, City, Province, Country, Price, Photos, Num_of_bedrooms, Num_of_half_bathrooms, Num_of_full_bathrooms, Square_footage, Type, Front_facing, Community, Heating, Fireplace_type, Attached_Detached_garage, Garage_capacity, LAgent_ID, Add_date) VALUES ('43 hw', 732405022, 'Hilda Turnpike', 'Omariberg', 'Tennessee', 'Brazil', '903365.00', 'images/ac5b87833a18423726464a240d8089b0.jpg', 10, 1, 37, 393, 'b', 'b', 'aspernatur', 'Oberbrunner, Bogan a', 'Prosacco LLC', '', 0, '212489615', '1990-05-26');
INSERT INTO Listing (Zip_code, House_num, Street, City, Province, Country, Price, Photos, Num_of_bedrooms, Num_of_half_bathrooms, Num_of_full_bathrooms, Square_footage, Type, Front_facing, Community, Heating, Fireplace_type, Attached_Detached_garage, Garage_capacity, LAgent_ID, Add_date) VALUES ('45 uk', 486029062, 'Holly Knoll', 'Edgardoton', 'NewJersey', 'Turkey', '376648.63', 'images/32e226129eca2777cfbfd16b689c3f89.jpg', 14, 37, 6, 3934, 'b', 'a', 'ab', 'Trantow, Lubowitz an', 'Gusikowski Group', '', 0, '154851937', '1980-12-08');
INSERT INTO Listing (Zip_code, House_num, Street, City, Province, Country, Price, Photos, Num_of_bedrooms, Num_of_half_bathrooms, Num_of_full_bathrooms, Square_footage, Type, Front_facing, Community, Heating, Fireplace_type, Attached_Detached_garage, Garage_capacity, LAgent_ID, Add_date) VALUES ('46 lj', 390318128, 'Marcellus Bypass', 'Okunevaberg', 'Vermont', 'United Arab Emi', '715.05', 'images/7e51d177b78f8bacf624328c0b0420aa.jpg', 6, 4, 27, 3905, 'b', 'b', 'aut', 'Dare, Walsh and Lang', 'Littel, Lemke and Li', '28628934', 0, '154851937', '2008-03-27');
INSERT INTO Listing (Zip_code, House_num, Street, City, Province, Country, Price, Photos, Num_of_bedrooms, Num_of_half_bathrooms, Num_of_full_bathrooms, Square_footage, Type, Front_facing, Community, Heating, Fireplace_type, Attached_Detached_garage, Garage_capacity, LAgent_ID, Add_date) VALUES ('47 yz', 960786430, 'Beer Shores', 'Whiteville', 'California', 'Venezuela', '999999.99', 'images/35479fc9c1404dc50a18d63a13c413e9.jpg', 35, 35, 41, 2730, 'a', 'c', 'placeat', 'Kris-Eichmann', 'Spinka Group', '68641', 0, '161286064', '1996-02-14');
INSERT INTO Listing (Zip_code, House_num, Street, City, Province, Country, Price, Photos, Num_of_bedrooms, Num_of_half_bathrooms, Num_of_full_bathrooms, Square_footage, Type, Front_facing, Community, Heating, Fireplace_type, Attached_Detached_garage, Garage_capacity, LAgent_ID, Add_date) VALUES ('52 df', 559829135, 'Wyman Avenue', 'Port Linnie', 'Mississippi', 'Jamaica', '41148.21', 'images/3dc4897ced9d39b9b3fc15bea4f3a87c.jpg', 17, 10, 22, 4200, 'c', 'a', 'debitis', 'Crona-Buckridge', 'Bartoletti-Mitchell', '33', 0, '168249243', '2000-02-13');
INSERT INTO Listing (Zip_code, House_num, Street, City, Province, Country, Price, Photos, Num_of_bedrooms, Num_of_half_bathrooms, Num_of_full_bathrooms, Square_footage, Type, Front_facing, Community, Heating, Fireplace_type, Attached_Detached_garage, Garage_capacity, LAgent_ID, Add_date) VALUES ('53 ku', 364827280, 'McClure Turnpike', 'Savanahville', 'NewMexico', 'Dominican Repub', '999999.99', 'images/e628087a5670f38044e66d9b4899baea.jpg', 43, 35, 47, 4367, 'c', 'b', 'suscipit', 'McLaughlin Inc', 'Heller PLC', '989568', 0, '206423773', '1975-10-10');
INSERT INTO Listing (Zip_code, House_num, Street, City, Province, Country, Price, Photos, Num_of_bedrooms, Num_of_half_bathrooms, Num_of_full_bathrooms, Square_footage, Type, Front_facing, Community, Heating, Fireplace_type, Attached_Detached_garage, Garage_capacity, LAgent_ID, Add_date) VALUES ('54 ai', 70173215, 'Stoltenberg Ville', 'Gudrunview', 'NewHampshire', 'Pitcairn Island', '27807.87', 'images/474747159981ac541492f3b98614e592.jpg', 41, 21, 14, 572, 'a', 'a', 'optio', 'Hermiston-Mraz', 'Mohr Inc', '4', 0, '179934955', '1988-09-07');
INSERT INTO Listing (Zip_code, House_num, Street, City, Province, Country, Price, Photos, Num_of_bedrooms, Num_of_half_bathrooms, Num_of_full_bathrooms, Square_footage, Type, Front_facing, Community, Heating, Fireplace_type, Attached_Detached_garage, Garage_capacity, LAgent_ID, Add_date) VALUES ('54 sm', 42456402, 'Edna Villages', 'Walkerhaven', 'Connecticut', 'Bouvet Island (', '28258.24', 'images/0810270640fd5d8eb709e244e9a89546.jpg', 39, 23, 32, 2795, 'b', 'b', 'facilis', 'White Group', 'Collier, Wiza and Bl', '46755620', 0, '210797242', '1976-05-13');
INSERT INTO Listing (Zip_code, House_num, Street, City, Province, Country, Price, Photos, Num_of_bedrooms, Num_of_half_bathrooms, Num_of_full_bathrooms, Square_footage, Type, Front_facing, Community, Heating, Fireplace_type, Attached_Detached_garage, Garage_capacity, LAgent_ID, Add_date) VALUES ('59 fw', 985945547, 'Sim Islands', 'West Shannaport', 'California', 'Ukraine', '177.60', 'images/aa48fed9912b1cb22393ac7274a99eec.jpg', 32, 12, 19, 2632, 'a', 'b', 'omnis', 'Williamson, Pouros a', 'Bernhard Ltd', '6440270', 0, '219792592', '1979-05-30');
INSERT INTO Listing (Zip_code, House_num, Street, City, Province, Country, Price, Photos, Num_of_bedrooms, Num_of_half_bathrooms, Num_of_full_bathrooms, Square_footage, Type, Front_facing, Community, Heating, Fireplace_type, Attached_Detached_garage, Garage_capacity, LAgent_ID, Add_date) VALUES ('61 vz', 974808827, 'Beatty Common', 'North Susie', 'Wisconsin', 'Ecuador', '1646.23', 'images/930000199e947af4759dc15740d4c1f8.jpg', 29, 15, 11, 1276, 'c', 'a', 'nobis', 'Watsica-Williamson', 'Fritsch-Tillman', '', 0, '121663610', '2012-03-12');
INSERT INTO Listing (Zip_code, House_num, Street, City, Province, Country, Price, Photos, Num_of_bedrooms, Num_of_half_bathrooms, Num_of_full_bathrooms, Square_footage, Type, Front_facing, Community, Heating, Fireplace_type, Attached_Detached_garage, Garage_capacity, LAgent_ID, Add_date) VALUES ('64 ny', 847983840, 'Koepp Union', 'North Steveport', 'Oklahoma', 'Puerto Rico', '235706.44', 'images/03521111699be09ca8bb5a24c2ffae15.jpg', 10, 40, 26, 3004, 'c', 'a', 'omnis', 'Hodkiewicz-Lebsack', 'Morissette, Kemmer a', '52', 0, '212489615', '1998-08-09');
INSERT INTO Listing (Zip_code, House_num, Street, City, Province, Country, Price, Photos, Num_of_bedrooms, Num_of_half_bathrooms, Num_of_full_bathrooms, Square_footage, Type, Front_facing, Community, Heating, Fireplace_type, Attached_Detached_garage, Garage_capacity, LAgent_ID, Add_date) VALUES ('66 ok', 770812918, 'Terry Creek', 'Tillmanmouth', 'Tennessee', 'Eritrea', '2684.44', 'images/db58948492360f9893b5341509b4758c.jpg', 25, 17, 48, 1816, 'a', 'c', 'rem', 'Turcotte, Beahan and', 'Sanford Ltd', '', 0, '161286064', '1984-07-08');
INSERT INTO Listing (Zip_code, House_num, Street, City, Province, Country, Price, Photos, Num_of_bedrooms, Num_of_half_bathrooms, Num_of_full_bathrooms, Square_footage, Type, Front_facing, Community, Heating, Fireplace_type, Attached_Detached_garage, Garage_capacity, LAgent_ID, Add_date) VALUES ('68 io', 951240810, 'Althea Grove', 'Kossfurt', 'NewMexico', 'Fiji', '999999.99', 'images/7fa116a1ae6d861d9d18afbcdd025136.jpg', 12, 37, 29, 3912, 'b', 'c', 'distinctio', 'Kuhic, Adams and Rya', 'Stiedemann-Mitchell', '', 0, '166584205', '1986-04-15');
INSERT INTO Listing (Zip_code, House_num, Street, City, Province, Country, Price, Photos, Num_of_bedrooms, Num_of_half_bathrooms, Num_of_full_bathrooms, Square_footage, Type, Front_facing, Community, Heating, Fireplace_type, Attached_Detached_garage, Garage_capacity, LAgent_ID, Add_date) VALUES ('69 fu', 326054488, 'Carlos Port', 'Carrollberg', 'Tennessee', 'India', '85.11', 'images/b68b4ab4b9141d8c6e916f2d2ec8c6ee.jpg', 18, 20, 42, 4429, 'a', 'b', 'quo', 'Morar Group', 'Bailey PLC', '14', 0, '161286064', '2012-02-13');
INSERT INTO Listing (Zip_code, House_num, Street, City, Province, Country, Price, Photos, Num_of_bedrooms, Num_of_half_bathrooms, Num_of_full_bathrooms, Square_footage, Type, Front_facing, Community, Heating, Fireplace_type, Attached_Detached_garage, Garage_capacity, LAgent_ID, Add_date) VALUES ('72 sn', 721641385, 'Kory Glen', 'Reillytown', 'Indiana', 'Kazakhstan', '999999.99', 'images/b4f4173112bcf35ae7668d80b07c85af.jpg', 44, 36, 3, 4266, 'b', 'b', 'odit', 'Bartoletti-Bartell', 'Jast Inc', '5412', 0, '183598673', '2018-03-14');
INSERT INTO Listing (Zip_code, House_num, Street, City, Province, Country, Price, Photos, Num_of_bedrooms, Num_of_half_bathrooms, Num_of_full_bathrooms, Square_footage, Type, Front_facing, Community, Heating, Fireplace_type, Attached_Detached_garage, Garage_capacity, LAgent_ID, Add_date) VALUES ('74 yd', 135087839, 'Steuber Roads', 'Lavadamouth', 'Georgia', 'Czech Republic', '0.00', 'images/6a7daa011f7ea442db45c5b9fc489246.jpg', 19, 2, 45, 745, 'b', 'a', 'qui', 'Runolfsson-Murray', 'Von-Ziemann', '', 0, '161756395', '2009-04-03');
INSERT INTO Listing (Zip_code, House_num, Street, City, Province, Country, Price, Photos, Num_of_bedrooms, Num_of_half_bathrooms, Num_of_full_bathrooms, Square_footage, Type, Front_facing, Community, Heating, Fireplace_type, Attached_Detached_garage, Garage_capacity, LAgent_ID, Add_date) VALUES ('75 az', 139470781, 'Delilah Lane', 'North Keaganton', 'Arkansas', 'Aruba', '2358.58', 'images/ceaa9500cbf34330783561bfbe5ac1ef.jpg', 23, 15, 38, 1897, 'c', 'b', 'explicabo', 'DuBuque, Hudson and ', 'Simonis and Sons', '714369', 0, '168249243', '2003-06-21');
INSERT INTO Listing (Zip_code, House_num, Street, City, Province, Country, Price, Photos, Num_of_bedrooms, Num_of_half_bathrooms, Num_of_full_bathrooms, Square_footage, Type, Front_facing, Community, Heating, Fireplace_type, Attached_Detached_garage, Garage_capacity, LAgent_ID, Add_date) VALUES ('79 yb', 988210277, 'Satterfield Views', 'Ronville', 'Mississippi', 'Belize', '49419.47', 'images/93afcd771ef20cbb4e75bb65eb342fe1.jpg', 4, 16, 4, 127, 'b', 'b', 'necessitatibus', 'Feeney and Sons', 'Boehm and Sons', '8307636', 0, '154851937', '1995-11-21');
INSERT INTO Listing (Zip_code, House_num, Street, City, Province, Country, Price, Photos, Num_of_bedrooms, Num_of_half_bathrooms, Num_of_full_bathrooms, Square_footage, Type, Front_facing, Community, Heating, Fireplace_type, Attached_Detached_garage, Garage_capacity, LAgent_ID, Add_date) VALUES ('82 pa', 440565477, 'Emma Path', 'Port Leonelborough', 'Pennsylvania', 'Mauritius', '999999.99', 'images/0626c7d39c4b514eebc1feff96cbdbfb.jpg', 35, 37, 40, 2542, 'a', 'a', 'est', 'Connelly-Larson', 'Doyle, Greenfelder a', '396422', 0, '168412358', '2003-07-21');
INSERT INTO Listing (Zip_code, House_num, Street, City, Province, Country, Price, Photos, Num_of_bedrooms, Num_of_half_bathrooms, Num_of_full_bathrooms, Square_footage, Type, Front_facing, Community, Heating, Fireplace_type, Attached_Detached_garage, Garage_capacity, LAgent_ID, Add_date) VALUES ('82 vy', 98045863, 'Lindsay Parkway', 'New Casandra', 'NewJersey', 'Vanuatu', '999999.99', 'images/d6db7b323bf4b1db60e3cd0fb775160e.jpg', 22, 31, 11, 4097, 'c', 'a', 'eveniet', 'Nienow Group', 'Marks, Kertzmann and', '43400', 0, '161756395', '1999-06-29');
INSERT INTO Listing (Zip_code, House_num, Street, City, Province, Country, Price, Photos, Num_of_bedrooms, Num_of_half_bathrooms, Num_of_full_bathrooms, Square_footage, Type, Front_facing, Community, Heating, Fireplace_type, Attached_Detached_garage, Garage_capacity, LAgent_ID, Add_date) VALUES ('83 wb', 7217259, 'Bahringer Road', 'Port Kariane', 'Mississippi', 'Yemen', '0.30', 'images/2c244d47e1e81066c0f368f6ac689e71.jpg', 25, 29, 3, 2159, 'b', 'b', 'magnam', 'Abernathy and Sons', 'Fritsch, Gutkowski a', '3', 0, '196058608', '2006-02-25');
INSERT INTO Listing (Zip_code, House_num, Street, City, Province, Country, Price, Photos, Num_of_bedrooms, Num_of_half_bathrooms, Num_of_full_bathrooms, Square_footage, Type, Front_facing, Community, Heating, Fireplace_type, Attached_Detached_garage, Garage_capacity, LAgent_ID, Add_date) VALUES ('87 lh', 312382193, 'Corrine Tunnel', 'North Dejuanville', 'NorthCarolina', 'Syrian Arab Rep', '31.90', 'images/2c6c57a69a6504c890d47e4dcde46559.jpg', 19, 9, 36, 248, 'a', 'b', 'unde', 'Maggio and Sons', 'Ankunding-Barrows', '412863', 0, '183598673', '2013-07-24');
INSERT INTO Listing (Zip_code, House_num, Street, City, Province, Country, Price, Photos, Num_of_bedrooms, Num_of_half_bathrooms, Num_of_full_bathrooms, Square_footage, Type, Front_facing, Community, Heating, Fireplace_type, Attached_Detached_garage, Garage_capacity, LAgent_ID, Add_date) VALUES ('89 kr', 974781028, 'Lucie Drives', 'Fletcherton', 'Massachusetts', 'Venezuela', '999999.99', 'images/4499b9fc1ee51d7b060a298e69b6ad5e.jpg', 45, 8, 50, 3914, 'b', 'c', 'nihil', 'Spencer, Koss and Sc', 'Emmerich, Gleichner ', '5911', 0, '168412358', '1970-06-04');
INSERT INTO Listing (Zip_code, House_num, Street, City, Province, Country, Price, Photos, Num_of_bedrooms, Num_of_half_bathrooms, Num_of_full_bathrooms, Square_footage, Type, Front_facing, Community, Heating, Fireplace_type, Attached_Detached_garage, Garage_capacity, LAgent_ID, Add_date) VALUES ('93 pb', 259103773, 'Hermiston Run', 'Hermistonbury', 'Massachusetts', 'Brazil', '3.00', 'images/98123ba185da7d269309c473cbdd75b4.jpg', 26, 40, 35, 1510, 'c', 'c', 'sequi', 'Schultz Ltd', 'Weissnat LLC', '1776', 0, '166584205', '1999-03-10');
INSERT INTO Listing (Zip_code, House_num, Street, City, Province, Country, Price, Photos, Num_of_bedrooms, Num_of_half_bathrooms, Num_of_full_bathrooms, Square_footage, Type, Front_facing, Community, Heating, Fireplace_type, Attached_Detached_garage, Garage_capacity, LAgent_ID, Add_date) VALUES ('96 nj', 92965934, 'Hackett Light', 'Maybellton', 'WestVirginia', 'Cyprus', '999999.99', 'images/1472f08a75a992dd50a5861de6ce0181.jpg', 39, 3, 26, 1173, 'c', 'b', 'dolore', 'Kuhn LLC', 'Walker-Herman', '370210', 0, '206423773', '2020-01-27');
INSERT INTO Listing (Zip_code, House_num, Street, City, Province, Country, Price, Photos, Num_of_bedrooms, Num_of_half_bathrooms, Num_of_full_bathrooms, Square_footage, Type, Front_facing, Community, Heating, Fireplace_type, Attached_Detached_garage, Garage_capacity, LAgent_ID, Add_date) VALUES ('97 sv', 703928585, 'Reginald Wells', 'South Margarettamouth', 'Massachusetts', 'Saudi Arabia', '556.41', 'images/92f397231a63f5edd0dc50edb43991fd.jpg', 44, 35, 39, 3823, 'b', 'c', 'et', 'Durgan Ltd', 'Kessler, Windler and', '99232166', 0, '219792592', '1985-03-06');
INSERT INTO Listing (Zip_code, House_num, Street, City, Province, Country, Price, Photos, Num_of_bedrooms, Num_of_half_bathrooms, Num_of_full_bathrooms, Square_footage, Type, Front_facing, Community, Heating, Fireplace_type, Attached_Detached_garage, Garage_capacity, LAgent_ID, Add_date) VALUES ('99 rw', 415150079, 'Jacquelyn Isle', 'New Burdette', 'Alaska', 'Bangladesh', '154141.27', 'images/feb41c1f930e31c0546aeaa1f02f4d30.jpg', 36, 43, 44, 3716, 'c', 'a', 'eius', 'Hoeger, Yost and Koe', 'Hartmann, Douglas an', '', 0, '166584205', '2004-02-10');
INSERT INTO Listing (Zip_code, House_num, Street, City, Province, Country, Price, Photos, Num_of_bedrooms, Num_of_half_bathrooms, Num_of_full_bathrooms, Square_footage, Type, Front_facing, Community, Heating, Fireplace_type, Attached_Detached_garage, Garage_capacity, LAgent_ID, Add_date) VALUES ('99 uc', 506379827, 'Isai Square', 'Bashirianmouth', 'Louisiana', 'Thailand', '0.00', 'images/d2257c2f0c75a471d655825f38923b71.jpg', 22, 33, 24, 2868, 'c', 'b', 'totam', 'Weimann, Murray and ', 'Mitchell and Sons', '96349625', 0, '109551148', '2017-07-14');


#
# TABLE STRUCTURE FOR: Seller
#

DROP TABLE IF EXISTS Seller;

CREATE TABLE Seller (
  Seller_ID char(9) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (Seller_ID)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO Seller (Seller_ID) VALUES ('119967668');
INSERT INTO Seller (Seller_ID) VALUES ('15785183');
INSERT INTO Seller (Seller_ID) VALUES ('170585947');
INSERT INTO Seller (Seller_ID) VALUES ('177211060');
INSERT INTO Seller (Seller_ID) VALUES ('183332300');
INSERT INTO Seller (Seller_ID) VALUES ('219884514');
INSERT INTO Seller (Seller_ID) VALUES ('22945157');
INSERT INTO Seller (Seller_ID) VALUES ('240500105');
INSERT INTO Seller (Seller_ID) VALUES ('254322028');
INSERT INTO Seller (Seller_ID) VALUES ('313752328');
INSERT INTO Seller (Seller_ID) VALUES ('31870067');
INSERT INTO Seller (Seller_ID) VALUES ('339460361');
INSERT INTO Seller (Seller_ID) VALUES ('354518209');
INSERT INTO Seller (Seller_ID) VALUES ('370542940');
INSERT INTO Seller (Seller_ID) VALUES ('373742951');
INSERT INTO Seller (Seller_ID) VALUES ('398501722');
INSERT INTO Seller (Seller_ID) VALUES ('413231364');
INSERT INTO Seller (Seller_ID) VALUES ('420344703');
INSERT INTO Seller (Seller_ID) VALUES ('447876979');
INSERT INTO Seller (Seller_ID) VALUES ('450409331');
INSERT INTO Seller (Seller_ID) VALUES ('454389956');
INSERT INTO Seller (Seller_ID) VALUES ('463140408');
INSERT INTO Seller (Seller_ID) VALUES ('498702726');
INSERT INTO Seller (Seller_ID) VALUES ('504122543');
INSERT INTO Seller (Seller_ID) VALUES ('546616392');
INSERT INTO Seller (Seller_ID) VALUES ('565749195');
INSERT INTO Seller (Seller_ID) VALUES ('582352318');
INSERT INTO Seller (Seller_ID) VALUES ('597469770');
INSERT INTO Seller (Seller_ID) VALUES ('602715066');
INSERT INTO Seller (Seller_ID) VALUES ('616030155');
INSERT INTO Seller (Seller_ID) VALUES ('671450403');
INSERT INTO Seller (Seller_ID) VALUES ('696790072');
INSERT INTO Seller (Seller_ID) VALUES ('702938391');
INSERT INTO Seller (Seller_ID) VALUES ('743257207');
INSERT INTO Seller (Seller_ID) VALUES ('750099659');
INSERT INTO Seller (Seller_ID) VALUES ('755294981');
INSERT INTO Seller (Seller_ID) VALUES ('762566064');
INSERT INTO Seller (Seller_ID) VALUES ('767321352');
INSERT INTO Seller (Seller_ID) VALUES ('799069677');
INSERT INTO Seller (Seller_ID) VALUES ('818507863');
INSERT INTO Seller (Seller_ID) VALUES ('821756914');
INSERT INTO Seller (Seller_ID) VALUES ('822276177');
INSERT INTO Seller (Seller_ID) VALUES ('844660262');
INSERT INTO Seller (Seller_ID) VALUES ('895496927');
INSERT INTO Seller (Seller_ID) VALUES ('911734250');
INSERT INTO Seller (Seller_ID) VALUES ('92437823');
INSERT INTO Seller (Seller_ID) VALUES ('950789862');
INSERT INTO Seller (Seller_ID) VALUES ('960636380');
INSERT INTO Seller (Seller_ID) VALUES ('989499108');
INSERT INTO Seller (Seller_ID) VALUES ('994471125');

#
# TABLE STRUCTURE FOR: Buyers_Agent
#

DROP TABLE IF EXISTS Buyers_Agent;

CREATE TABLE Buyers_Agent (
  EID char(9) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (EID),
  CONSTRAINT Buyers_Agent_FK FOREIGN KEY (EID) REFERENCES Agent (EID) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO Buyers_Agent (EID) VALUES ('109551148');
INSERT INTO Buyers_Agent (EID) VALUES ('121663610');
INSERT INTO Buyers_Agent (EID) VALUES ('154851937');
INSERT INTO Buyers_Agent (EID) VALUES ('161286064');
INSERT INTO Buyers_Agent (EID) VALUES ('161756395');
INSERT INTO Buyers_Agent (EID) VALUES ('166584205');
INSERT INTO Buyers_Agent (EID) VALUES ('168249243');
INSERT INTO Buyers_Agent (EID) VALUES ('168412358');
INSERT INTO Buyers_Agent (EID) VALUES ('179934955');
INSERT INTO Buyers_Agent (EID) VALUES ('183598673');
INSERT INTO Buyers_Agent (EID) VALUES ('196058608');
INSERT INTO Buyers_Agent (EID) VALUES ('206423773');
INSERT INTO Buyers_Agent (EID) VALUES ('210797242');
INSERT INTO Buyers_Agent (EID) VALUES ('212489615');
INSERT INTO Buyers_Agent (EID) VALUES ('219792592');

#
# TABLE STRUCTURE FOR: Assigns
#

DROP TABLE IF EXISTS Assigns;

CREATE TABLE Assigns (
  LA_ID char(9) COLLATE utf8mb4_unicode_ci NOT NULL,
  Zip_code char(6) COLLATE utf8mb4_unicode_ci NOT NULL,
  Admin_ID char(9) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (LA_ID,Zip_code),
  KEY Assigns_FK_Zip (Zip_code),
  KEY Assigns_FK_AdminID (Admin_ID),
  CONSTRAINT Assigns_FK_AdminID FOREIGN KEY (Admin_ID) REFERENCES Admin (EID) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT Assigns_FK_LAID FOREIGN KEY (LA_ID) REFERENCES Listing_Agent (EID) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT Assigns_FK_Zip FOREIGN KEY (Zip_code) REFERENCES Listing (Zip_code) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO Assigns (LA_ID, Zip_code, Admin_ID) VALUES ('109551148', '08 ts', '109551148');
INSERT INTO Assigns (LA_ID, Zip_code, Admin_ID) VALUES ('109551148', '47 yz', '109551148');
INSERT INTO Assigns (LA_ID, Zip_code, Admin_ID) VALUES ('109551148', '82 pa', '109551148');
INSERT INTO Assigns (LA_ID, Zip_code, Admin_ID) VALUES ('166584205', '25 ih', '109551148');
INSERT INTO Assigns (LA_ID, Zip_code, Admin_ID) VALUES ('166584205', '59 fw', '109551148');
INSERT INTO Assigns (LA_ID, Zip_code, Admin_ID) VALUES ('166584205', '93 pb', '109551148');
INSERT INTO Assigns (LA_ID, Zip_code, Admin_ID) VALUES ('196058608', '39 qk', '109551148');
INSERT INTO Assigns (LA_ID, Zip_code, Admin_ID) VALUES ('196058608', '69 fu', '109551148');
INSERT INTO Assigns (LA_ID, Zip_code, Admin_ID) VALUES ('121663610', '13 zg', '121663610');
INSERT INTO Assigns (LA_ID, Zip_code, Admin_ID) VALUES ('121663610', '52 df', '121663610');
INSERT INTO Assigns (LA_ID, Zip_code, Admin_ID) VALUES ('121663610', '82 vy', '121663610');
INSERT INTO Assigns (LA_ID, Zip_code, Admin_ID) VALUES ('168249243', '31 nn', '121663610');
INSERT INTO Assigns (LA_ID, Zip_code, Admin_ID) VALUES ('168249243', '61 vz', '121663610');
INSERT INTO Assigns (LA_ID, Zip_code, Admin_ID) VALUES ('168249243', '96 nj', '121663610');
INSERT INTO Assigns (LA_ID, Zip_code, Admin_ID) VALUES ('206423773', '39 ti', '121663610');
INSERT INTO Assigns (LA_ID, Zip_code, Admin_ID) VALUES ('206423773', '72 sn', '121663610');
INSERT INTO Assigns (LA_ID, Zip_code, Admin_ID) VALUES ('154851937', '15 ce', '154851937');
INSERT INTO Assigns (LA_ID, Zip_code, Admin_ID) VALUES ('154851937', '53 ku', '154851937');
INSERT INTO Assigns (LA_ID, Zip_code, Admin_ID) VALUES ('154851937', '83 wb', '154851937');
INSERT INTO Assigns (LA_ID, Zip_code, Admin_ID) VALUES ('168412358', '33 sp', '154851937');
INSERT INTO Assigns (LA_ID, Zip_code, Admin_ID) VALUES ('168412358', '64 ny', '154851937');
INSERT INTO Assigns (LA_ID, Zip_code, Admin_ID) VALUES ('168412358', '97 sv', '154851937');
INSERT INTO Assigns (LA_ID, Zip_code, Admin_ID) VALUES ('210797242', '43 hw', '154851937');
INSERT INTO Assigns (LA_ID, Zip_code, Admin_ID) VALUES ('210797242', '74 yd', '154851937');
INSERT INTO Assigns (LA_ID, Zip_code, Admin_ID) VALUES ('161286064', '16 kv', '161286064');
INSERT INTO Assigns (LA_ID, Zip_code, Admin_ID) VALUES ('161286064', '54 ai', '161286064');
INSERT INTO Assigns (LA_ID, Zip_code, Admin_ID) VALUES ('161286064', '87 lh', '161286064');
INSERT INTO Assigns (LA_ID, Zip_code, Admin_ID) VALUES ('179934955', '37 fl', '161286064');
INSERT INTO Assigns (LA_ID, Zip_code, Admin_ID) VALUES ('179934955', '66 ok', '161286064');
INSERT INTO Assigns (LA_ID, Zip_code, Admin_ID) VALUES ('179934955', '99 rw', '161286064');
INSERT INTO Assigns (LA_ID, Zip_code, Admin_ID) VALUES ('212489615', '45 uk', '161286064');
INSERT INTO Assigns (LA_ID, Zip_code, Admin_ID) VALUES ('212489615', '75 az', '161286064');
INSERT INTO Assigns (LA_ID, Zip_code, Admin_ID) VALUES ('161756395', '19 ex', '161756395');
INSERT INTO Assigns (LA_ID, Zip_code, Admin_ID) VALUES ('161756395', '54 sm', '161756395');
INSERT INTO Assigns (LA_ID, Zip_code, Admin_ID) VALUES ('161756395', '89 kr', '161756395');
INSERT INTO Assigns (LA_ID, Zip_code, Admin_ID) VALUES ('183598673', '38 zp', '161756395');
INSERT INTO Assigns (LA_ID, Zip_code, Admin_ID) VALUES ('183598673', '68 io', '161756395');
INSERT INTO Assigns (LA_ID, Zip_code, Admin_ID) VALUES ('183598673', '99 uc', '161756395');
INSERT INTO Assigns (LA_ID, Zip_code, Admin_ID) VALUES ('219792592', '46 lj', '161756395');
INSERT INTO Assigns (LA_ID, Zip_code, Admin_ID) VALUES ('219792592', '79 yb', '161756395');


#
# TABLE STRUCTURE FOR: Associated
#

DROP TABLE IF EXISTS Associated;

CREATE TABLE Associated (
  LA_ID char(9) COLLATE utf8mb4_unicode_ci NOT NULL,
  Zip_code char(6) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (LA_ID,Zip_code),
  KEY Associated_FK_Zip (Zip_code),
  CONSTRAINT Associated_FK_LAID FOREIGN KEY (LA_ID) REFERENCES Listing_Agent (EID) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT Associated_FK_Zip FOREIGN KEY (Zip_code) REFERENCES Listing (Zip_code) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO Associated (LA_ID, Zip_code) VALUES ('109551148', '08 ts');
INSERT INTO Associated (LA_ID, Zip_code) VALUES ('109551148', '47 yz');
INSERT INTO Associated (LA_ID, Zip_code) VALUES ('121663610', '13 zg');
INSERT INTO Associated (LA_ID, Zip_code) VALUES ('121663610', '52 df');
INSERT INTO Associated (LA_ID, Zip_code) VALUES ('154851937', '15 ce');
INSERT INTO Associated (LA_ID, Zip_code) VALUES ('154851937', '53 ku');
INSERT INTO Associated (LA_ID, Zip_code) VALUES ('161286064', '16 kv');
INSERT INTO Associated (LA_ID, Zip_code) VALUES ('161286064', '54 ai');
INSERT INTO Associated (LA_ID, Zip_code) VALUES ('161756395', '19 ex');
INSERT INTO Associated (LA_ID, Zip_code) VALUES ('161756395', '54 sm');
INSERT INTO Associated (LA_ID, Zip_code) VALUES ('166584205', '25 ih');
INSERT INTO Associated (LA_ID, Zip_code) VALUES ('168249243', '31 nn');
INSERT INTO Associated (LA_ID, Zip_code) VALUES ('168412358', '33 sp');
INSERT INTO Associated (LA_ID, Zip_code) VALUES ('179934955', '37 fl');
INSERT INTO Associated (LA_ID, Zip_code) VALUES ('183598673', '38 zp');
INSERT INTO Associated (LA_ID, Zip_code) VALUES ('196058608', '39 qk');
INSERT INTO Associated (LA_ID, Zip_code) VALUES ('206423773', '39 ti');
INSERT INTO Associated (LA_ID, Zip_code) VALUES ('210797242', '43 hw');
INSERT INTO Associated (LA_ID, Zip_code) VALUES ('212489615', '45 uk');
INSERT INTO Associated (LA_ID, Zip_code) VALUES ('219792592', '46 lj');


#
# TABLE STRUCTURE FOR: Buyer
#

DROP TABLE IF EXISTS Buyer;

CREATE TABLE Buyer (
  Email varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  FName varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  LName varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  Phone_num char(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (Email)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO Buyer (Email, FName, LName, Phone_num) VALUES ('abigale.ryan@example.com', 'vel', 'sunt', '440.730.49');
INSERT INTO Buyer (Email, FName, LName, Phone_num) VALUES ('adrianna.hamill@example.net', 'harum', 'dicta', '1-763-968-');
INSERT INTO Buyer (Email, FName, LName, Phone_num) VALUES ('aleen.kerluke@example.net', 'qui', 'natus', '1-360-541-');
INSERT INTO Buyer (Email, FName, LName, Phone_num) VALUES ('andreanne07@example.org', 'nam', 'quis', '1-391-939-');
INSERT INTO Buyer (Email, FName, LName, Phone_num) VALUES ('audra29@example.net', 'voluptas', 'deserunt', '(226)839-8');
INSERT INTO Buyer (Email, FName, LName, Phone_num) VALUES ('auer.niko@example.org', 'sit', 'nam', '665.521.70');
INSERT INTO Buyer (Email, FName, LName, Phone_num) VALUES ('bbeahan@example.com', 'ut', 'rerum', '687.593.46');
INSERT INTO Buyer (Email, FName, LName, Phone_num) VALUES ('bjacobi@example.net', 'veniam', 'aperiam', '+57(0)6736');
INSERT INTO Buyer (Email, FName, LName, Phone_num) VALUES ('branson.fahey@example.com', 'blanditiis', 'illum', '0295850496');
INSERT INTO Buyer (Email, FName, LName, Phone_num) VALUES ('bruen.krista@example.net', 'magnam', 'minima', '365-733-07');
INSERT INTO Buyer (Email, FName, LName, Phone_num) VALUES ('carroll.lindgren@example.net', 'dolores', 'temporibus', '1-070-243-');
INSERT INTO Buyer (Email, FName, LName, Phone_num) VALUES ('conn.hudson@example.org', 'suscipit', 'et', '220-419-87');
INSERT INTO Buyer (Email, FName, LName, Phone_num) VALUES ('cora97@example.net', 'ipsam', 'non', '664.182.35');
INSERT INTO Buyer (Email, FName, LName, Phone_num) VALUES ('crooks.garry@example.com', 'sit', 'asperiores', '212-988-66');
INSERT INTO Buyer (Email, FName, LName, Phone_num) VALUES ('elva.koch@example.net', 'aut', 'repudiandae', '166.032.52');
INSERT INTO Buyer (Email, FName, LName, Phone_num) VALUES ('eunice89@example.com', 'autem', 'optio', '044-678-65');
INSERT INTO Buyer (Email, FName, LName, Phone_num) VALUES ('faustino95@example.org', 'rem', 'quo', '542-023-55');
INSERT INTO Buyer (Email, FName, LName, Phone_num) VALUES ('frances82@example.net', 'impedit', 'minus', '823.034.47');
INSERT INTO Buyer (Email, FName, LName, Phone_num) VALUES ('gavin.kozey@example.com', 'debitis', 'quia', '(745)479-7');
INSERT INTO Buyer (Email, FName, LName, Phone_num) VALUES ('ghammes@example.org', 'temporibus', 'nostrum', '1-894-521-');
INSERT INTO Buyer (Email, FName, LName, Phone_num) VALUES ('harry68@example.net', 'consequatur', 'perspiciatis', '1-929-335-');
INSERT INTO Buyer (Email, FName, LName, Phone_num) VALUES ('hilll.russ@example.com', 'et', 'rerum', '851-965-98');
INSERT INTO Buyer (Email, FName, LName, Phone_num) VALUES ('janis85@example.net', 'eum', 'officia', '1-216-154-');
INSERT INTO Buyer (Email, FName, LName, Phone_num) VALUES ('jonatan.gutmann@example.net', 'tempora', 'aut', '021-177-00');
INSERT INTO Buyer (Email, FName, LName, Phone_num) VALUES ('kcorwin@example.org', 'assumenda', 'ullam', '323-111-90');
INSERT INTO Buyer (Email, FName, LName, Phone_num) VALUES ('kerluke.sabryna@example.net', 'blanditiis', 'est', '(693)429-6');
INSERT INTO Buyer (Email, FName, LName, Phone_num) VALUES ('lang.maudie@example.net', 'quia', 'blanditiis', '(166)954-9');
INSERT INTO Buyer (Email, FName, LName, Phone_num) VALUES ('lucio.farrell@example.net', 'omnis', 'aperiam', '(995)258-6');
INSERT INTO Buyer (Email, FName, LName, Phone_num) VALUES ('maggio.abel@example.org', 'dolorem', 'veritatis', '+85(9)3792');
INSERT INTO Buyer (Email, FName, LName, Phone_num) VALUES ('marco34@example.com', 'nihil', 'eaque', '583.717.38');
INSERT INTO Buyer (Email, FName, LName, Phone_num) VALUES ('margaret.johnson@example.net', 'voluptas', 'ad', '531-239-65');
INSERT INTO Buyer (Email, FName, LName, Phone_num) VALUES ('maxime.bosco@example.com', 'culpa', 'illo', '(408)455-1');
INSERT INTO Buyer (Email, FName, LName, Phone_num) VALUES ('muller.hallie@example.net', 'sit', 'non', '+27(7)4276');
INSERT INTO Buyer (Email, FName, LName, Phone_num) VALUES ('novella87@example.org', 'voluptatem', 'qui', '410-698-41');
INSERT INTO Buyer (Email, FName, LName, Phone_num) VALUES ('ozella.bins@example.com', 'voluptatum', 'nostrum', '614.240.13');
INSERT INTO Buyer (Email, FName, LName, Phone_num) VALUES ('parisian.evelyn@example.org', 'optio', 'enim', '043-540-52');
INSERT INTO Buyer (Email, FName, LName, Phone_num) VALUES ('pinkie.macejkovic@example.net', 'asperiores', 'ipsam', '566.692.21');
INSERT INTO Buyer (Email, FName, LName, Phone_num) VALUES ('pkoch@example.com', 'cum', 'omnis', '0943170339');
INSERT INTO Buyer (Email, FName, LName, Phone_num) VALUES ('pouros.gracie@example.net', 'sit', 'temporibus', '(631)161-4');
INSERT INTO Buyer (Email, FName, LName, Phone_num) VALUES ('qlemke@example.org', 'doloribus', 'et', '163-863-20');
INSERT INTO Buyer (Email, FName, LName, Phone_num) VALUES ('schumm.dolores@example.net', 'consequatur', 'sit', '(250)206-3');
INSERT INTO Buyer (Email, FName, LName, Phone_num) VALUES ('syble.wolf@example.com', 'similique', 'ad', '(536)092-1');
INSERT INTO Buyer (Email, FName, LName, Phone_num) VALUES ('sydnee.ernser@example.org', 'voluptas', 'voluptas', '1-032-291-');
INSERT INTO Buyer (Email, FName, LName, Phone_num) VALUES ('tremblay.shawna@example.org', 'est', 'libero', '409-669-99');
INSERT INTO Buyer (Email, FName, LName, Phone_num) VALUES ('ucassin@example.net', 'vel', 'porro', '+30(7)8373');
INSERT INTO Buyer (Email, FName, LName, Phone_num) VALUES ('uheathcote@example.net', 'repudiandae', 'qui', '(740)984-1');
INSERT INTO Buyer (Email, FName, LName, Phone_num) VALUES ('ursula.wiegand@example.com', 'et', 'in', '(313)308-4');
INSERT INTO Buyer (Email, FName, LName, Phone_num) VALUES ('watsica.chris@example.com', 'nesciunt', 'iste', '(827)930-4');
INSERT INTO Buyer (Email, FName, LName, Phone_num) VALUES ('wrodriguez@example.com', 'eum', 'eligendi', '349.954.30');
INSERT INTO Buyer (Email, FName, LName, Phone_num) VALUES ('zgerhold@example.org', 'et', 'cupiditate', '416-509-43');

#
# TABLE STRUCTURE FOR: Auction
#

DROP TABLE IF EXISTS Auction;

CREATE TABLE Auction (
  Zip_code char(6) COLLATE utf8mb4_unicode_ci NOT NULL,
  Name varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  Closing_date date DEFAULT NULL,
  Closing_time char(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (Zip_code,Name),
  CONSTRAINT Auction_FK FOREIGN KEY (Zip_code) REFERENCES Listing (Zip_code) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO Auction (Zip_code, Name, Closing_date, Closing_time) VALUES ('08 ts', 'accusamus', '2011-05-02', '19:00');
INSERT INTO Auction (Zip_code, Name, Closing_date, Closing_time) VALUES ('13 zg', 'minus', '1982-03-28', '23:08');
INSERT INTO Auction (Zip_code, Name, Closing_date, Closing_time) VALUES ('15 ce', 'ut', '1971-04-25', '16:56');
INSERT INTO Auction (Zip_code, Name, Closing_date, Closing_time) VALUES ('16 kv', 'et', '1976-10-06', '14:42');
INSERT INTO Auction (Zip_code, Name, Closing_date, Closing_time) VALUES ('19 ex', 'unde', '1986-10-05', '05:23');
INSERT INTO Auction (Zip_code, Name, Closing_date, Closing_time) VALUES ('25 ih', 'sapiente', '2015-03-24', '22:28');
INSERT INTO Auction (Zip_code, Name, Closing_date, Closing_time) VALUES ('31 nn', 'dolorem', '2004-06-28', '10:10');
INSERT INTO Auction (Zip_code, Name, Closing_date, Closing_time) VALUES ('33 sp', 'illum', '1979-05-10', '23:47');
INSERT INTO Auction (Zip_code, Name, Closing_date, Closing_time) VALUES ('37 fl', 'natus', '1976-11-16', '06:58');
INSERT INTO Auction (Zip_code, Name, Closing_date, Closing_time) VALUES ('38 zp', 'repellendus', '2020-11-09', '15:57');
INSERT INTO Auction (Zip_code, Name, Closing_date, Closing_time) VALUES ('39 qk', 'quos', '1996-07-24', '01:33');
INSERT INTO Auction (Zip_code, Name, Closing_date, Closing_time) VALUES ('39 ti', 'explicabo', '1980-04-22', '14:32');
INSERT INTO Auction (Zip_code, Name, Closing_date, Closing_time) VALUES ('43 hw', 'deleniti', '2022-08-19', '12:32');
INSERT INTO Auction (Zip_code, Name, Closing_date, Closing_time) VALUES ('45 uk', 'est', '2020-08-14', '08:19');
INSERT INTO Auction (Zip_code, Name, Closing_date, Closing_time) VALUES ('46 lj', 'similique', '2000-07-12', '21:18');


#
# TABLE STRUCTURE FOR: Auction_Biddings
#

DROP TABLE IF EXISTS Auction_Biddings;

CREATE TABLE Auction_Biddings (
  Buyer_email varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  Zip_code char(6) COLLATE utf8mb4_unicode_ci NOT NULL,
  Auction_name varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  Amount decimal(8,2) DEFAULT NULL,
  Date date DEFAULT NULL,
  Time char(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (Buyer_email,Zip_code,Auction_name),
  KEY Auction_Biddings_FK_Zip (Zip_code,Auction_name),
  CONSTRAINT Auction_Biddings_FK_BEmail FOREIGN KEY (Buyer_email) REFERENCES Buyer (Email) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT Auction_Biddings_FK_Zip FOREIGN KEY (Zip_code, Auction_name) REFERENCES Auction (Zip_code, Name) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO Auction_Biddings (Buyer_email, Zip_code, Auction_name, Amount, Date, Time) VALUES ('abigale.ryan@example.com', '08 ts', 'accusamus', '0.00', '1977-04-16', '00:57');
INSERT INTO Auction_Biddings (Buyer_email, Zip_code, Auction_name, Amount, Date, Time) VALUES ('branson.fahey@example.com', '37 fl', 'natus', '999999.99', '1974-12-23', '01:59');
INSERT INTO Auction_Biddings (Buyer_email, Zip_code, Auction_name, Amount, Date, Time) VALUES ('eunice89@example.com', '08 ts', 'accusamus', '12.00', '2000-07-17', '11:07');
INSERT INTO Auction_Biddings (Buyer_email, Zip_code, Auction_name, Amount, Date, Time) VALUES ('jonatan.gutmann@example.net', '37 fl', 'natus', '838374.00', '1975-01-25', '19:11');
INSERT INTO Auction_Biddings (Buyer_email, Zip_code, Auction_name, Amount, Date, Time) VALUES ('margaret.johnson@example.net', '08 ts', 'accusamus', '2179.90', '1970-02-07', '03:18');
INSERT INTO Auction_Biddings (Buyer_email, Zip_code, Auction_name, Amount, Date, Time) VALUES ('pouros.gracie@example.net', '37 fl', 'natus', '0.00', '2003-08-05', '13:44');


#
# TABLE STRUCTURE FOR: Bank
#

DROP TABLE IF EXISTS Bank;

CREATE TABLE Bank (
  Bank_rep_email varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  Bank_rep_FName varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  Bank_rep_LName varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  Bank_rep_phone_num char(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  Bank_name varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  Branch_no int(11) NOT NULL,
  Seller_ID char(9) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (Bank_rep_email,Bank_rep_FName,Bank_rep_LName,Bank_rep_phone_num),
  KEY Bank_FK (Seller_ID),
  CONSTRAINT Bank_FK FOREIGN KEY (Seller_ID) REFERENCES Seller (Seller_ID) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO Bank (Bank_rep_email, Bank_rep_FName, Bank_rep_LName, Bank_rep_phone_num, Bank_name, Branch_no, Seller_ID) VALUES ('bins.marguerite@example.net', 'est', 'qui', '375-296-76', 'dolorem', 0, '183332300');
INSERT INTO Bank (Bank_rep_email, Bank_rep_FName, Bank_rep_LName, Bank_rep_phone_num, Bank_name, Branch_no, Seller_ID) VALUES ('flind@example.net', 'explicabo', 'in', '1-341-404-', 'sint', 0, '313752328');
INSERT INTO Bank (Bank_rep_email, Bank_rep_FName, Bank_rep_LName, Bank_rep_phone_num, Bank_name, Branch_no, Seller_ID) VALUES ('gbarrows@example.com', 'omnis', 'sit', '(100)619-3', 'est', 0, '219884514');
INSERT INTO Bank (Bank_rep_email, Bank_rep_FName, Bank_rep_LName, Bank_rep_phone_num, Bank_name, Branch_no, Seller_ID) VALUES ('glenda60@example.com', 'voluptatem', 'sunt', '884.424.59', 'fuga', 0, '254322028');
INSERT INTO Bank (Bank_rep_email, Bank_rep_FName, Bank_rep_LName, Bank_rep_phone_num, Bank_name, Branch_no, Seller_ID) VALUES ('isabelle28@example.net', 'impedit', 'distinctio', '705-132-76', 'ut', 0, '22945157');
INSERT INTO Bank (Bank_rep_email, Bank_rep_FName, Bank_rep_LName, Bank_rep_phone_num, Bank_name, Branch_no, Seller_ID) VALUES ('johnson.kemmer@example.org', 'inventore', 'veritatis', '764.693.03', 'repudiandae', 0, '119967668');
INSERT INTO Bank (Bank_rep_email, Bank_rep_FName, Bank_rep_LName, Bank_rep_phone_num, Bank_name, Branch_no, Seller_ID) VALUES ('raphaelle12@example.org', 'corporis', 'et', '0227494731', 'inventore', 0, '240500105');
INSERT INTO Bank (Bank_rep_email, Bank_rep_FName, Bank_rep_LName, Bank_rep_phone_num, Bank_name, Branch_no, Seller_ID) VALUES ('tkozey@example.org', 'non', 'itaque', '(291)765-5', 'qui', 0, '170585947');
INSERT INTO Bank (Bank_rep_email, Bank_rep_FName, Bank_rep_LName, Bank_rep_phone_num, Bank_name, Branch_no, Seller_ID) VALUES ('vgrady@example.org', 'aut', 'sint', '388-800-54', 'iusto', 0, '177211060');
INSERT INTO Bank (Bank_rep_email, Bank_rep_FName, Bank_rep_LName, Bank_rep_phone_num, Bank_name, Branch_no, Seller_ID) VALUES ('xsmitham@example.net', 'eos', 'molestias', '1-397-254-', 'ipsam', 0, '15785183');


#
# TABLE STRUCTURE FOR: Construction_Company
#

DROP TABLE IF EXISTS Construction_Company;

CREATE TABLE Construction_Company (
  Comp_rep_email varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  Comp_rep_FName varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  Comp_rep_LName varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  Comp_rep_phone_num char(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  Comp_name varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  Seller_ID char(9) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (Comp_rep_email,Comp_rep_FName,Comp_rep_LName,Comp_rep_phone_num),
  KEY Comp_FK (Seller_ID),
  CONSTRAINT Comp_FK FOREIGN KEY (Seller_ID) REFERENCES Seller (Seller_ID) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO Construction_Company (Comp_rep_email, Comp_rep_FName, Comp_rep_LName, Comp_rep_phone_num, Comp_name, Seller_ID) VALUES ('arlene34@example.com', 'ex', 'at', '+72(4)6949', 'quasi', '219884514');
INSERT INTO Construction_Company (Comp_rep_email, Comp_rep_FName, Comp_rep_LName, Comp_rep_phone_num, Comp_name, Seller_ID) VALUES ('cecelia.lueilwitz@example.net', 'animi', 'voluptates', '967-713-35', 'voluptas', '177211060');
INSERT INTO Construction_Company (Comp_rep_email, Comp_rep_FName, Comp_rep_LName, Comp_rep_phone_num, Comp_name, Seller_ID) VALUES ('chadrick.flatley@example.net', 'eaque', 'dolore', '804.108.99', 'corporis', '170585947');
INSERT INTO Construction_Company (Comp_rep_email, Comp_rep_FName, Comp_rep_LName, Comp_rep_phone_num, Comp_name, Seller_ID) VALUES ('emilie.thiel@example.org', 'facilis', 'qui', '326.966.17', 'dolor', '254322028');
INSERT INTO Construction_Company (Comp_rep_email, Comp_rep_FName, Comp_rep_LName, Comp_rep_phone_num, Comp_name, Seller_ID) VALUES ('hobart11@example.net', 'eum', 'beatae', '1-647-798-', 'iure', '119967668');
INSERT INTO Construction_Company (Comp_rep_email, Comp_rep_FName, Comp_rep_LName, Comp_rep_phone_num, Comp_name, Seller_ID) VALUES ('piper20@example.org', 'fugiat', 'dolorem', '950.677.77', 'sint', '240500105');
INSERT INTO Construction_Company (Comp_rep_email, Comp_rep_FName, Comp_rep_LName, Comp_rep_phone_num, Comp_name, Seller_ID) VALUES ('shanahan.otis@example.org', 'enim', 'libero', '(938)280-5', 'labore', '15785183');
INSERT INTO Construction_Company (Comp_rep_email, Comp_rep_FName, Comp_rep_LName, Comp_rep_phone_num, Comp_name, Seller_ID) VALUES ('stanton.camron@example.org', 'magni', 'perspiciatis', '1-090-095-', 'reprehenderit', '313752328');
INSERT INTO Construction_Company (Comp_rep_email, Comp_rep_FName, Comp_rep_LName, Comp_rep_phone_num, Comp_name, Seller_ID) VALUES ('talon57@example.net', 'rem', 'officia', '(847)783-6', 'aut', '22945157');
INSERT INTO Construction_Company (Comp_rep_email, Comp_rep_FName, Comp_rep_LName, Comp_rep_phone_num, Comp_name, Seller_ID) VALUES ('tiana.zieme@example.net', 'vel', 'aut', '(637)028-0', 'et', '183332300');


#
# TABLE STRUCTURE FOR: InContact
#

DROP TABLE IF EXISTS InContact;

CREATE TABLE InContact (
  Buyer_email varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  BAgent_ID char(9) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (Buyer_email,BAgent_ID),
  KEY InContact_FK_BAID (BAgent_ID),
  CONSTRAINT InContact_FK_BAID FOREIGN KEY (BAgent_ID) REFERENCES Buyers_Agent (EID) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT InContact_FK_BEmail FOREIGN KEY (Buyer_email) REFERENCES Buyer (Email) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO InContact (Buyer_email, BAgent_ID) VALUES ('abigale.ryan@example.com', '109551148');
INSERT INTO InContact (Buyer_email, BAgent_ID) VALUES ('adrianna.hamill@example.net', '121663610');
INSERT INTO InContact (Buyer_email, BAgent_ID) VALUES ('aleen.kerluke@example.net', '154851937');
INSERT INTO InContact (Buyer_email, BAgent_ID) VALUES ('andreanne07@example.org', '161286064');
INSERT INTO InContact (Buyer_email, BAgent_ID) VALUES ('audra29@example.net', '161756395');
INSERT INTO InContact (Buyer_email, BAgent_ID) VALUES ('auer.niko@example.org', '166584205');
INSERT INTO InContact (Buyer_email, BAgent_ID) VALUES ('bbeahan@example.com', '168249243');
INSERT INTO InContact (Buyer_email, BAgent_ID) VALUES ('bjacobi@example.net', '168412358');
INSERT INTO InContact (Buyer_email, BAgent_ID) VALUES ('branson.fahey@example.com', '179934955');
INSERT INTO InContact (Buyer_email, BAgent_ID) VALUES ('bruen.krista@example.net', '183598673');
INSERT INTO InContact (Buyer_email, BAgent_ID) VALUES ('carroll.lindgren@example.net', '196058608');
INSERT INTO InContact (Buyer_email, BAgent_ID) VALUES ('conn.hudson@example.org', '206423773');
INSERT INTO InContact (Buyer_email, BAgent_ID) VALUES ('cora97@example.net', '210797242');
INSERT INTO InContact (Buyer_email, BAgent_ID) VALUES ('crooks.garry@example.com', '212489615');
INSERT INTO InContact (Buyer_email, BAgent_ID) VALUES ('elva.koch@example.net', '219792592');
INSERT INTO InContact (Buyer_email, BAgent_ID) VALUES ('eunice89@example.com', '109551148');
INSERT INTO InContact (Buyer_email, BAgent_ID) VALUES ('faustino95@example.org', '121663610');
INSERT INTO InContact (Buyer_email, BAgent_ID) VALUES ('frances82@example.net', '154851937');
INSERT INTO InContact (Buyer_email, BAgent_ID) VALUES ('gavin.kozey@example.com', '161286064');
INSERT INTO InContact (Buyer_email, BAgent_ID) VALUES ('ghammes@example.org', '161756395');
INSERT INTO InContact (Buyer_email, BAgent_ID) VALUES ('harry68@example.net', '166584205');
INSERT INTO InContact (Buyer_email, BAgent_ID) VALUES ('hilll.russ@example.com', '168249243');
INSERT INTO InContact (Buyer_email, BAgent_ID) VALUES ('janis85@example.net', '168412358');
INSERT INTO InContact (Buyer_email, BAgent_ID) VALUES ('jonatan.gutmann@example.net', '179934955');
INSERT INTO InContact (Buyer_email, BAgent_ID) VALUES ('kcorwin@example.org', '183598673');
INSERT INTO InContact (Buyer_email, BAgent_ID) VALUES ('kerluke.sabryna@example.net', '196058608');
INSERT INTO InContact (Buyer_email, BAgent_ID) VALUES ('lang.maudie@example.net', '206423773');
INSERT INTO InContact (Buyer_email, BAgent_ID) VALUES ('lucio.farrell@example.net', '210797242');
INSERT INTO InContact (Buyer_email, BAgent_ID) VALUES ('maggio.abel@example.org', '212489615');
INSERT INTO InContact (Buyer_email, BAgent_ID) VALUES ('marco34@example.com', '219792592');


#
# TABLE STRUCTURE FOR: Individual
#

DROP TABLE IF EXISTS Individual;

CREATE TABLE Individual (
  Email varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  FName varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  LName varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  Phone_num char(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  Seller_ID char(9) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (Email),
  KEY Individual_FK (Seller_ID),
  CONSTRAINT Individual_FK FOREIGN KEY (Seller_ID) REFERENCES Seller (Seller_ID) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO Individual (Email, FName, LName, Phone_num, Seller_ID) VALUES ('brock.tillman@example.org', 'minus', 'consequatur', '1-520-678-', '370542940');
INSERT INTO Individual (Email, FName, LName, Phone_num, Seller_ID) VALUES ('cummings.reilly@example.com', 'quisquam', 'tempora', '451.837.20', '254322028');
INSERT INTO Individual (Email, FName, LName, Phone_num, Seller_ID) VALUES ('effertz.joana@example.net', 'ipsa', 'at', '(340)238-2', '219884514');
INSERT INTO Individual (Email, FName, LName, Phone_num, Seller_ID) VALUES ('fernando62@example.net', 'qui', 'in', '(039)836-6', '22945157');
INSERT INTO Individual (Email, FName, LName, Phone_num, Seller_ID) VALUES ('hilll.destini@example.net', 'accusamus', 'expedita', '+90(8)9055', '177211060');
INSERT INTO Individual (Email, FName, LName, Phone_num, Seller_ID) VALUES ('hulda96@example.org', 'dolor', 'voluptas', '272.796.03', '354518209');
INSERT INTO Individual (Email, FName, LName, Phone_num, Seller_ID) VALUES ('jbuckridge@example.org', 'aut', 'et', '700.511.78', '339460361');
INSERT INTO Individual (Email, FName, LName, Phone_num, Seller_ID) VALUES ('jeanie88@example.net', 'omnis', 'aut', '+90(4)4693', '313752328');
INSERT INTO Individual (Email, FName, LName, Phone_num, Seller_ID) VALUES ('letha.lowe@example.net', 'vitae', 'ducimus', '079-024-89', '15785183');
INSERT INTO Individual (Email, FName, LName, Phone_num, Seller_ID) VALUES ('pstiedemann@example.com', 'nulla', 'dolores', '0805542766', '31870067');
INSERT INTO Individual (Email, FName, LName, Phone_num, Seller_ID) VALUES ('renner.bradley@example.net', 'et', 'et', '275-311-80', '373742951');
INSERT INTO Individual (Email, FName, LName, Phone_num, Seller_ID) VALUES ('riley53@example.org', 'fuga', 'est', '(828)478-7', '240500105');
INSERT INTO Individual (Email, FName, LName, Phone_num, Seller_ID) VALUES ('usporer@example.com', 'eveniet', 'natus', '767-362-18', '170585947');
INSERT INTO Individual (Email, FName, LName, Phone_num, Seller_ID) VALUES ('vblock@example.net', 'eaque', 'perferendis', '226.375.45', '183332300');
INSERT INTO Individual (Email, FName, LName, Phone_num, Seller_ID) VALUES ('wyundt@example.net', 'et', 'reiciendis', '650-105-39', '119967668');

#
# TABLE STRUCTURE FOR: Listing_Flooring
#

DROP TABLE IF EXISTS Listing_Flooring;

CREATE TABLE Listing_Flooring (
  Zip_code char(6) COLLATE utf8mb4_unicode_ci NOT NULL,
  Flooring varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (Zip_code,Flooring),
  CONSTRAINT Listing_Flooring_FK FOREIGN KEY (Zip_code) REFERENCES Listing (Zip_code) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO Listing_Flooring (Zip_code, Flooring) VALUES ('08 ts', ' Marble');
INSERT INTO Listing_Flooring (Zip_code, Flooring) VALUES ('13 zg', ' Plywood');
INSERT INTO Listing_Flooring (Zip_code, Flooring) VALUES ('15 ce', 'Wooden');
INSERT INTO Listing_Flooring (Zip_code, Flooring) VALUES ('16 kv', ' Ceramic');
INSERT INTO Listing_Flooring (Zip_code, Flooring) VALUES ('19 ex', ' Plastic');


#
# TABLE STRUCTURE FOR: Listing_Nearby_Public_Transport_Stations
#

DROP TABLE IF EXISTS Listing_Nearby_Public_Transport_Stations;

CREATE TABLE Listing_Nearby_Public_Transport_Stations (
  Zip_code char(6) COLLATE utf8mb4_unicode_ci NOT NULL,
  Nearby_PTStation varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (Zip_code,Nearby_PTStation),
  CONSTRAINT Nearby_PTStation_FK FOREIGN KEY (Zip_code) REFERENCES Listing (Zip_code) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO Listing_Nearby_Public_Transport_Stations (Zip_code, Nearby_PTStation) VALUES ('08 ts', 'Funk, Smitham and Lakin');
INSERT INTO Listing_Nearby_Public_Transport_Stations (Zip_code, Nearby_PTStation) VALUES ('13 zg', 'Wisozk Group');
INSERT INTO Listing_Nearby_Public_Transport_Stations (Zip_code, Nearby_PTStation) VALUES ('15 ce', 'Jones PLC');
INSERT INTO Listing_Nearby_Public_Transport_Stations (Zip_code, Nearby_PTStation) VALUES ('16 kv', 'Kub, Hermann and Ledner');
INSERT INTO Listing_Nearby_Public_Transport_Stations (Zip_code, Nearby_PTStation) VALUES ('19 ex', 'Kuhn Ltd');
INSERT INTO Listing_Nearby_Public_Transport_Stations (Zip_code, Nearby_PTStation) VALUES ('25 ih', 'Metz, Greenfelder and Boyer');
INSERT INTO Listing_Nearby_Public_Transport_Stations (Zip_code, Nearby_PTStation) VALUES ('31 nn', 'Barrows, Orn and Nitzsche');
INSERT INTO Listing_Nearby_Public_Transport_Stations (Zip_code, Nearby_PTStation) VALUES ('33 sp', 'Donnelly-Boyle');
INSERT INTO Listing_Nearby_Public_Transport_Stations (Zip_code, Nearby_PTStation) VALUES ('37 fl', 'Kreiger-Gislason');
INSERT INTO Listing_Nearby_Public_Transport_Stations (Zip_code, Nearby_PTStation) VALUES ('38 zp', 'Stoltenberg Group');
INSERT INTO Listing_Nearby_Public_Transport_Stations (Zip_code, Nearby_PTStation) VALUES ('39 qk', 'Ernser, Toy and Johnson');
INSERT INTO Listing_Nearby_Public_Transport_Stations (Zip_code, Nearby_PTStation) VALUES ('39 ti', 'Fahey-Hayes');
INSERT INTO Listing_Nearby_Public_Transport_Stations (Zip_code, Nearby_PTStation) VALUES ('43 hw', 'Armstrong Ltd');
INSERT INTO Listing_Nearby_Public_Transport_Stations (Zip_code, Nearby_PTStation) VALUES ('45 uk', 'Dickinson LLC');
INSERT INTO Listing_Nearby_Public_Transport_Stations (Zip_code, Nearby_PTStation) VALUES ('46 lj', 'Cremin Inc');
INSERT INTO Listing_Nearby_Public_Transport_Stations (Zip_code, Nearby_PTStation) VALUES ('47 yz', 'Sauer-Carter');
INSERT INTO Listing_Nearby_Public_Transport_Stations (Zip_code, Nearby_PTStation) VALUES ('52 df', 'Crona-Batz');
INSERT INTO Listing_Nearby_Public_Transport_Stations (Zip_code, Nearby_PTStation) VALUES ('53 ku', 'Tromp, Macejkovic and Sporer');
INSERT INTO Listing_Nearby_Public_Transport_Stations (Zip_code, Nearby_PTStation) VALUES ('54 ai', 'Dach-Ziemann');
INSERT INTO Listing_Nearby_Public_Transport_Stations (Zip_code, Nearby_PTStation) VALUES ('54 sm', 'Effertz, Shanahan and Rowe');
INSERT INTO Listing_Nearby_Public_Transport_Stations (Zip_code, Nearby_PTStation) VALUES ('59 fw', 'Brown, Johnston and Howe');
INSERT INTO Listing_Nearby_Public_Transport_Stations (Zip_code, Nearby_PTStation) VALUES ('61 vz', 'Cartwright-Mueller');
INSERT INTO Listing_Nearby_Public_Transport_Stations (Zip_code, Nearby_PTStation) VALUES ('64 ny', 'Senger and Sons');
INSERT INTO Listing_Nearby_Public_Transport_Stations (Zip_code, Nearby_PTStation) VALUES ('66 ok', 'Maggio, Schuppe and Kiehn');
INSERT INTO Listing_Nearby_Public_Transport_Stations (Zip_code, Nearby_PTStation) VALUES ('68 io', 'Mohr, Boyle and Wiza');


#
# TABLE STRUCTURE FOR: Listing_Nearby_Recreations
#

DROP TABLE IF EXISTS Listing_Nearby_Recreations;

CREATE TABLE Listing_Nearby_Recreations (
  Zip_code char(6) COLLATE utf8mb4_unicode_ci NOT NULL,
  Nearby_rec varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (Zip_code,Nearby_rec),
  CONSTRAINT Nearby_rec_FK FOREIGN KEY (Zip_code) REFERENCES Listing (Zip_code) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO Listing_Nearby_Recreations (Zip_code, Nearby_rec) VALUES ('08 ts', 'Stokes LLC');
INSERT INTO Listing_Nearby_Recreations (Zip_code, Nearby_rec) VALUES ('13 zg', 'Walter, Kulas and Kreiger');
INSERT INTO Listing_Nearby_Recreations (Zip_code, Nearby_rec) VALUES ('15 ce', 'Mueller, Abernathy and Marquar');
INSERT INTO Listing_Nearby_Recreations (Zip_code, Nearby_rec) VALUES ('16 kv', 'Becker, Abbott and Cartwright');
INSERT INTO Listing_Nearby_Recreations (Zip_code, Nearby_rec) VALUES ('19 ex', 'Spencer, Wiza and Medhurst');
INSERT INTO Listing_Nearby_Recreations (Zip_code, Nearby_rec) VALUES ('25 ih', 'Runolfsson-Sipes');
INSERT INTO Listing_Nearby_Recreations (Zip_code, Nearby_rec) VALUES ('31 nn', 'Herman-Schroeder');
INSERT INTO Listing_Nearby_Recreations (Zip_code, Nearby_rec) VALUES ('33 sp', 'Glover Group');
INSERT INTO Listing_Nearby_Recreations (Zip_code, Nearby_rec) VALUES ('37 fl', 'Feil-Luettgen');
INSERT INTO Listing_Nearby_Recreations (Zip_code, Nearby_rec) VALUES ('38 zp', 'Hickle, Padberg and Schoen');
INSERT INTO Listing_Nearby_Recreations (Zip_code, Nearby_rec) VALUES ('39 qk', 'Mitchell, Bernier and Homenick');
INSERT INTO Listing_Nearby_Recreations (Zip_code, Nearby_rec) VALUES ('39 ti', 'Zieme, Connell and Kemmer');
INSERT INTO Listing_Nearby_Recreations (Zip_code, Nearby_rec) VALUES ('43 hw', 'Reinger-Kunze');
INSERT INTO Listing_Nearby_Recreations (Zip_code, Nearby_rec) VALUES ('45 uk', 'Leuschke Group');
INSERT INTO Listing_Nearby_Recreations (Zip_code, Nearby_rec) VALUES ('46 lj', 'Ryan and Sons');
INSERT INTO Listing_Nearby_Recreations (Zip_code, Nearby_rec) VALUES ('47 yz', 'Boyle, Quitzon and Miller');
INSERT INTO Listing_Nearby_Recreations (Zip_code, Nearby_rec) VALUES ('52 df', 'Wyman, Keeling and Franecki');
INSERT INTO Listing_Nearby_Recreations (Zip_code, Nearby_rec) VALUES ('53 ku', 'Satterfield and Sons');
INSERT INTO Listing_Nearby_Recreations (Zip_code, Nearby_rec) VALUES ('54 ai', 'Macejkovic, Kuphal and Graham');
INSERT INTO Listing_Nearby_Recreations (Zip_code, Nearby_rec) VALUES ('54 sm', 'Bartoletti-Cruickshank');
INSERT INTO Listing_Nearby_Recreations (Zip_code, Nearby_rec) VALUES ('59 fw', 'Botsford, Muller and Schoen');
INSERT INTO Listing_Nearby_Recreations (Zip_code, Nearby_rec) VALUES ('61 vz', 'Franecki, Conroy and Lynch');
INSERT INTO Listing_Nearby_Recreations (Zip_code, Nearby_rec) VALUES ('64 ny', 'Rohan-McGlynn');
INSERT INTO Listing_Nearby_Recreations (Zip_code, Nearby_rec) VALUES ('66 ok', 'Trantow-Abshire');
INSERT INTO Listing_Nearby_Recreations (Zip_code, Nearby_rec) VALUES ('68 io', 'Rowe PLC');
INSERT INTO Listing_Nearby_Recreations (Zip_code, Nearby_rec) VALUES ('69 fu', 'Altenwerth, Kuhlman and Reynol');
INSERT INTO Listing_Nearby_Recreations (Zip_code, Nearby_rec) VALUES ('72 sn', 'Grant, Beier and Gorczany');
INSERT INTO Listing_Nearby_Recreations (Zip_code, Nearby_rec) VALUES ('74 yd', 'Williamson-Stoltenberg');
INSERT INTO Listing_Nearby_Recreations (Zip_code, Nearby_rec) VALUES ('75 az', 'Emard-Will');
INSERT INTO Listing_Nearby_Recreations (Zip_code, Nearby_rec) VALUES ('79 yb', 'Wehner, Gottlieb and Pollich');


#
# TABLE STRUCTURE FOR: Listing_Nearby_Schools
#

DROP TABLE IF EXISTS Listing_Nearby_Schools;

CREATE TABLE Listing_Nearby_Schools (
  Zip_code char(6) COLLATE utf8mb4_unicode_ci NOT NULL,
  Nearby_School varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (Zip_code,Nearby_School),
  CONSTRAINT Nearby_Schools_FK FOREIGN KEY (Zip_code) REFERENCES Listing (Zip_code) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO Listing_Nearby_Schools (Zip_code, Nearby_School) VALUES ('08 ts', 'Molestiae sed et nesciunt repe');
INSERT INTO Listing_Nearby_Schools (Zip_code, Nearby_School) VALUES ('13 zg', 'Eum porro ex distinctio recusa');
INSERT INTO Listing_Nearby_Schools (Zip_code, Nearby_School) VALUES ('15 ce', 'Distinctio ea laborum dolores ');
INSERT INTO Listing_Nearby_Schools (Zip_code, Nearby_School) VALUES ('16 kv', 'Repellendus dolores et asperio');
INSERT INTO Listing_Nearby_Schools (Zip_code, Nearby_School) VALUES ('19 ex', 'Ut et tempora ab. Et saepe sim');
INSERT INTO Listing_Nearby_Schools (Zip_code, Nearby_School) VALUES ('25 ih', 'Modi quae inventore voluptatem');
INSERT INTO Listing_Nearby_Schools (Zip_code, Nearby_School) VALUES ('31 nn', 'Accusantium rerum laudantium i');
INSERT INTO Listing_Nearby_Schools (Zip_code, Nearby_School) VALUES ('33 sp', 'Natus sit accusamus eaque quae');
INSERT INTO Listing_Nearby_Schools (Zip_code, Nearby_School) VALUES ('37 fl', 'Et facere voluptas veritatis q');
INSERT INTO Listing_Nearby_Schools (Zip_code, Nearby_School) VALUES ('38 zp', 'Alias molestias quam quis eius');
INSERT INTO Listing_Nearby_Schools (Zip_code, Nearby_School) VALUES ('39 qk', 'Autem sed adipisci veritatis n');
INSERT INTO Listing_Nearby_Schools (Zip_code, Nearby_School) VALUES ('39 ti', 'Iure provident et alias est. Q');
INSERT INTO Listing_Nearby_Schools (Zip_code, Nearby_School) VALUES ('43 hw', 'Enim qui aut iusto qui laborio');
INSERT INTO Listing_Nearby_Schools (Zip_code, Nearby_School) VALUES ('45 uk', 'Consectetur est accusantium qu');
INSERT INTO Listing_Nearby_Schools (Zip_code, Nearby_School) VALUES ('46 lj', 'Quia vel sed aut. Dolor doloru');
INSERT INTO Listing_Nearby_Schools (Zip_code, Nearby_School) VALUES ('47 yz', 'Atque molestiae qui voluptatem');
INSERT INTO Listing_Nearby_Schools (Zip_code, Nearby_School) VALUES ('52 df', 'Dolore qui in similique tenetu');
INSERT INTO Listing_Nearby_Schools (Zip_code, Nearby_School) VALUES ('53 ku', 'Aut qui omnis veniam id aut as');
INSERT INTO Listing_Nearby_Schools (Zip_code, Nearby_School) VALUES ('54 ai', 'Magnam temporibus illum ut. Qu');
INSERT INTO Listing_Nearby_Schools (Zip_code, Nearby_School) VALUES ('54 sm', 'Quo quas necessitatibus sed vo');
INSERT INTO Listing_Nearby_Schools (Zip_code, Nearby_School) VALUES ('59 fw', 'Omnis quae neque expedita culp');
INSERT INTO Listing_Nearby_Schools (Zip_code, Nearby_School) VALUES ('61 vz', 'Illo praesentium enim consecte');
INSERT INTO Listing_Nearby_Schools (Zip_code, Nearby_School) VALUES ('64 ny', 'Et ducimus animi ad vero enim ');
INSERT INTO Listing_Nearby_Schools (Zip_code, Nearby_School) VALUES ('66 ok', 'Qui et praesentium dolore porr');
INSERT INTO Listing_Nearby_Schools (Zip_code, Nearby_School) VALUES ('68 io', 'Adipisci eum et nesciunt repre');
INSERT INTO Listing_Nearby_Schools (Zip_code, Nearby_School) VALUES ('69 fu', 'Velit libero veniam ut repella');
INSERT INTO Listing_Nearby_Schools (Zip_code, Nearby_School) VALUES ('72 sn', 'Dolor pariatur pariatur provid');
INSERT INTO Listing_Nearby_Schools (Zip_code, Nearby_School) VALUES ('74 yd', 'Labore quod rerum similique en');
INSERT INTO Listing_Nearby_Schools (Zip_code, Nearby_School) VALUES ('75 az', 'Voluptatem veniam et ab volupt');
INSERT INTO Listing_Nearby_Schools (Zip_code, Nearby_School) VALUES ('79 yb', 'Libero autem et quis sequi omn');


#
# TABLE STRUCTURE FOR: Listing_Showing
#

DROP TABLE IF EXISTS Listing_Showing;

CREATE TABLE Listing_Showing (
  Buyer_email varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  BAgent_ID char(9) COLLATE utf8mb4_unicode_ci NOT NULL,
  Zip_code char(6) COLLATE utf8mb4_unicode_ci NOT NULL,
  Date date DEFAULT NULL,
  Time char(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (Buyer_email,BAgent_ID,Zip_code),
  KEY Listing_Showing_FK_BAID (BAgent_ID),
  KEY Listing_Showing_FK_Zip (Zip_code),
  CONSTRAINT Listing_Showing_FK_BAID FOREIGN KEY (BAgent_ID) REFERENCES Buyers_Agent (EID) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT Listing_Showing_FK_BEmail FOREIGN KEY (Buyer_email) REFERENCES Buyer (Email) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT Listing_Showing_FK_Zip FOREIGN KEY (Zip_code) REFERENCES Listing (Zip_code) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO Listing_Showing (Buyer_email, BAgent_ID, Zip_code, Date, Time) VALUES ('abigale.ryan@example.com', '109551148', '08 ts', '2007-05-30', '05:56');
INSERT INTO Listing_Showing (Buyer_email, BAgent_ID, Zip_code, Date, Time) VALUES ('adrianna.hamill@example.net', '121663610', '13 zg', '1983-01-18', '07:59');
INSERT INTO Listing_Showing (Buyer_email, BAgent_ID, Zip_code, Date, Time) VALUES ('aleen.kerluke@example.net', '154851937', '15 ce', '1980-10-30', '13:43');
INSERT INTO Listing_Showing (Buyer_email, BAgent_ID, Zip_code, Date, Time) VALUES ('andreanne07@example.org', '161286064', '16 kv', '2010-09-30', '19:17');
INSERT INTO Listing_Showing (Buyer_email, BAgent_ID, Zip_code, Date, Time) VALUES ('audra29@example.net', '161756395', '19 ex', '1988-06-01', '15:48');
INSERT INTO Listing_Showing (Buyer_email, BAgent_ID, Zip_code, Date, Time) VALUES ('auer.niko@example.org', '166584205', '25 ih', '1977-08-30', '12:43');
INSERT INTO Listing_Showing (Buyer_email, BAgent_ID, Zip_code, Date, Time) VALUES ('bbeahan@example.com', '168249243', '31 nn', '1999-05-13', '15:22');
INSERT INTO Listing_Showing (Buyer_email, BAgent_ID, Zip_code, Date, Time) VALUES ('bjacobi@example.net', '168412358', '33 sp', '2007-11-12', '18:08');
INSERT INTO Listing_Showing (Buyer_email, BAgent_ID, Zip_code, Date, Time) VALUES ('branson.fahey@example.com', '179934955', '37 fl', '1971-04-30', '07:23');
INSERT INTO Listing_Showing (Buyer_email, BAgent_ID, Zip_code, Date, Time) VALUES ('bruen.krista@example.net', '183598673', '38 zp', '2005-04-02', '08:29');


#
# TABLE STRUCTURE FOR: Multi_Floor
#

DROP TABLE IF EXISTS Multi_Floor;

CREATE TABLE Multi_Floor (
  Zip_code char(6) COLLATE utf8mb4_unicode_ci NOT NULL,
  Num_of_levels int(11) DEFAULT NULL,
  Walkout_basement varchar(3) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  Finished_basement varchar(3) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  Bonus_room varchar(3) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  Roof varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  Home_type varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (Zip_code),
  CONSTRAINT Multi_Floor_FK FOREIGN KEY (Zip_code) REFERENCES Listing (Zip_code) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO Multi_Floor (Zip_code, Num_of_levels, Walkout_basement, Finished_basement, Bonus_room, Roof, Home_type) VALUES ('08 ts', 49, '\"ye', ' \"n', '\"ye', ' Cylindrical', ' Plain');
INSERT INTO Multi_Floor (Zip_code, Num_of_levels, Walkout_basement, Finished_basement, Bonus_room, Roof, Home_type) VALUES ('13 zg', 18, '\"ye', '\"ye', '\"ye', ' Plain', ' Plain');
INSERT INTO Multi_Floor (Zip_code, Num_of_levels, Walkout_basement, Finished_basement, Bonus_room, Roof, Home_type) VALUES ('15 ce', 8, '\"ye', ' \"n', ' \"n', ' None', ' Special');
INSERT INTO Multi_Floor (Zip_code, Num_of_levels, Walkout_basement, Finished_basement, Bonus_room, Roof, Home_type) VALUES ('16 kv', 45, '\"ye', '\"ye', ' \"n', ' None', 'Bungalow');
INSERT INTO Multi_Floor (Zip_code, Num_of_levels, Walkout_basement, Finished_basement, Bonus_room, Roof, Home_type) VALUES ('19 ex', 15, ' \"n', '\"ye', '\"ye', ' Plain', ' Plain');
INSERT INTO Multi_Floor (Zip_code, Num_of_levels, Walkout_basement, Finished_basement, Bonus_room, Roof, Home_type) VALUES ('25 ih', 23, '\"ye', '\"ye', ' \"n', ' None', ' Plain');
INSERT INTO Multi_Floor (Zip_code, Num_of_levels, Walkout_basement, Finished_basement, Bonus_room, Roof, Home_type) VALUES ('31 nn', 8, ' \"n', ' \"n', '\"ye', ' Plain', ' Plain');
INSERT INTO Multi_Floor (Zip_code, Num_of_levels, Walkout_basement, Finished_basement, Bonus_room, Roof, Home_type) VALUES ('33 sp', 14, '\"ye', '\"ye', ' \"n', 'Domed', 'Bungalow');
INSERT INTO Multi_Floor (Zip_code, Num_of_levels, Walkout_basement, Finished_basement, Bonus_room, Roof, Home_type) VALUES ('37 fl', 18, '\"ye', ' \"n', ' \"n', ' Flat', 'Bungalow');
INSERT INTO Multi_Floor (Zip_code, Num_of_levels, Walkout_basement, Finished_basement, Bonus_room, Roof, Home_type) VALUES ('38 zp', 13, ' \"n', ' \"n', '\"ye', ' Cylindrical', 'Bungalow');
INSERT INTO Multi_Floor (Zip_code, Num_of_levels, Walkout_basement, Finished_basement, Bonus_room, Roof, Home_type) VALUES ('39 qk', 34, ' \"n', ' \"n', '\"ye', ' None', 'Bungalow');
INSERT INTO Multi_Floor (Zip_code, Num_of_levels, Walkout_basement, Finished_basement, Bonus_room, Roof, Home_type) VALUES ('39 ti', 26, ' \"n', ' \"n', '\"ye', ' Plain', ' Special');
INSERT INTO Multi_Floor (Zip_code, Num_of_levels, Walkout_basement, Finished_basement, Bonus_room, Roof, Home_type) VALUES ('43 hw', 48, ' \"n', '\"ye', '\"ye', 'Domed', ' Special');
INSERT INTO Multi_Floor (Zip_code, Num_of_levels, Walkout_basement, Finished_basement, Bonus_room, Roof, Home_type) VALUES ('45 uk', 15, ' \"n', ' \"n', '\"ye', ' Cylindrical', 'Bungalow');
INSERT INTO Multi_Floor (Zip_code, Num_of_levels, Walkout_basement, Finished_basement, Bonus_room, Roof, Home_type) VALUES ('46 lj', 6, '\"ye', ' \"n', '\"ye', 'Domed', 'Bungalow');
INSERT INTO Multi_Floor (Zip_code, Num_of_levels, Walkout_basement, Finished_basement, Bonus_room, Roof, Home_type) VALUES ('47 yz', 18, '\"ye', ' \"n', ' \"n', ' Cylindrical', ' Plain');
INSERT INTO Multi_Floor (Zip_code, Num_of_levels, Walkout_basement, Finished_basement, Bonus_room, Roof, Home_type) VALUES ('52 df', 8, '\"ye', '\"ye', '\"ye', 'Domed', ' Special');
INSERT INTO Multi_Floor (Zip_code, Num_of_levels, Walkout_basement, Finished_basement, Bonus_room, Roof, Home_type) VALUES ('53 ku', 35, '\"ye', '\"ye', ' \"n', 'Domed', 'Bungalow');
INSERT INTO Multi_Floor (Zip_code, Num_of_levels, Walkout_basement, Finished_basement, Bonus_room, Roof, Home_type) VALUES ('54 ai', 24, '\"ye', '\"ye', '\"ye', ' None', ' Plain');
INSERT INTO Multi_Floor (Zip_code, Num_of_levels, Walkout_basement, Finished_basement, Bonus_room, Roof, Home_type) VALUES ('54 sm', 9, ' \"n', '\"ye', ' \"n', ' Plain', 'Bungalow');


#
# TABLE STRUCTURE FOR: Payment
#

DROP TABLE IF EXISTS Payment;

CREATE TABLE Payment (
  Zip_code char(6) COLLATE utf8mb4_unicode_ci NOT NULL,
  Agent_ID char(9) COLLATE utf8mb4_unicode_ci NOT NULL,
  Date date NOT NULL,
  Amount decimal(6,2) DEFAULT NULL,
  Commission_percentage decimal(3,1) DEFAULT NULL,
  Flat_fee decimal(6,2) DEFAULT NULL,
  PRIMARY KEY (Zip_code,Agent_ID,Date),
  KEY Payment_FK_AID (Agent_ID),
  CONSTRAINT Payment_FK_AID FOREIGN KEY (Agent_ID) REFERENCES Agent (EID) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT Payment_FK_Zip FOREIGN KEY (Zip_code) REFERENCES Listing (Zip_code) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO Payment (Zip_code, Agent_ID, Date, Amount, Commission_percentage, Flat_fee) VALUES ('08 ts', '109551148', '1993-10-30', '9999.99', '47.0', '9999.99');
INSERT INTO Payment (Zip_code, Agent_ID, Date, Amount, Commission_percentage, Flat_fee) VALUES ('13 zg', '121663610', '1985-10-16', '6.71', '46.0', '9999.99');
INSERT INTO Payment (Zip_code, Agent_ID, Date, Amount, Commission_percentage, Flat_fee) VALUES ('15 ce', '154851937', '1972-11-21', '1.00', '18.0', '9999.99');
INSERT INTO Payment (Zip_code, Agent_ID, Date, Amount, Commission_percentage, Flat_fee) VALUES ('16 kv', '161286064', '2013-05-11', '19.71', '45.0', '9999.99');
INSERT INTO Payment (Zip_code, Agent_ID, Date, Amount, Commission_percentage, Flat_fee) VALUES ('19 ex', '161756395', '2012-05-24', '9999.99', '35.0', '9999.99');
INSERT INTO Payment (Zip_code, Agent_ID, Date, Amount, Commission_percentage, Flat_fee) VALUES ('25 ih', '166584205', '2005-08-14', '9999.99', '38.0', '9999.99');
INSERT INTO Payment (Zip_code, Agent_ID, Date, Amount, Commission_percentage, Flat_fee) VALUES ('31 nn', '168249243', '1994-07-11', '3798.70', '27.0', '9999.99');
INSERT INTO Payment (Zip_code, Agent_ID, Date, Amount, Commission_percentage, Flat_fee) VALUES ('33 sp', '168412358', '1995-07-08', '77.54', '15.0', '9999.99');
INSERT INTO Payment (Zip_code, Agent_ID, Date, Amount, Commission_percentage, Flat_fee) VALUES ('37 fl', '179934955', '2012-09-13', '9999.99', '8.0', '9999.99');
INSERT INTO Payment (Zip_code, Agent_ID, Date, Amount, Commission_percentage, Flat_fee) VALUES ('38 zp', '183598673', '2013-05-28', '636.63', '15.0', '9999.99');


#
# TABLE STRUCTURE FOR: Single_Floor
#

DROP TABLE IF EXISTS Single_Floor;

CREATE TABLE Single_Floor (
  Zip_code char(6) COLLATE utf8mb4_unicode_ci NOT NULL,
  Home_type varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (Zip_code),
  CONSTRAINT Single_Floor_FK FOREIGN KEY (Zip_code) REFERENCES Listing (Zip_code) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO Single_Floor (Zip_code, Home_type) VALUES ('08 ts', ' Plain');
INSERT INTO Single_Floor (Zip_code, Home_type) VALUES ('13 zg', 'Bungalow');
INSERT INTO Single_Floor (Zip_code, Home_type) VALUES ('15 ce', ' Plain');
INSERT INTO Single_Floor (Zip_code, Home_type) VALUES ('16 kv', 'Bungalow');
INSERT INTO Single_Floor (Zip_code, Home_type) VALUES ('19 ex', ' Plain');
INSERT INTO Single_Floor (Zip_code, Home_type) VALUES ('25 ih', 'Bungalow');
INSERT INTO Single_Floor (Zip_code, Home_type) VALUES ('31 nn', ' Plain');
INSERT INTO Single_Floor (Zip_code, Home_type) VALUES ('33 sp', ' Special');
INSERT INTO Single_Floor (Zip_code, Home_type) VALUES ('37 fl', ' Special');
INSERT INTO Single_Floor (Zip_code, Home_type) VALUES ('38 zp', 'Bungalow');
INSERT INTO Single_Floor (Zip_code, Home_type) VALUES ('39 qk', ' Special');
INSERT INTO Single_Floor (Zip_code, Home_type) VALUES ('39 ti', 'Bungalow');
INSERT INTO Single_Floor (Zip_code, Home_type) VALUES ('43 hw', 'Bungalow');
INSERT INTO Single_Floor (Zip_code, Home_type) VALUES ('45 uk', ' Plain');
INSERT INTO Single_Floor (Zip_code, Home_type) VALUES ('46 lj', ' Plain');
INSERT INTO Single_Floor (Zip_code, Home_type) VALUES ('47 yz', 'Bungalow');
INSERT INTO Single_Floor (Zip_code, Home_type) VALUES ('52 df', 'Bungalow');
INSERT INTO Single_Floor (Zip_code, Home_type) VALUES ('53 ku', ' Plain');
INSERT INTO Single_Floor (Zip_code, Home_type) VALUES ('54 ai', ' Plain');
INSERT INTO Single_Floor (Zip_code, Home_type) VALUES ('54 sm', 'Bungalow');


#
# TABLE STRUCTURE FOR: Transaction
#

DROP TABLE IF EXISTS Transaction;

CREATE TABLE Transaction (
  Buyer_email varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  Seller_ID char(9) COLLATE utf8mb4_unicode_ci NOT NULL,
  Zip_code char(6) COLLATE utf8mb4_unicode_ci NOT NULL,
  Amount decimal(8,2) DEFAULT NULL,
  Date date DEFAULT NULL,
  Time char(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (Buyer_email,Seller_ID,Zip_code),
  KEY Transaction_FK_SID (Seller_ID),
  KEY Transaction_FK_Zip (Zip_code),
  CONSTRAINT Transaction_FK_BEmail FOREIGN KEY (Buyer_email) REFERENCES Buyer (Email) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT Transaction_FK_SID FOREIGN KEY (Seller_ID) REFERENCES Seller (Seller_ID) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT Transaction_FK_Zip FOREIGN KEY (Zip_code) REFERENCES Listing (Zip_code) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO Transaction (Buyer_email, Seller_ID, Zip_code, Amount, Date, Time) VALUES ('abigale.ryan@example.com', '119967668', '08 ts', '895.90', '1994-01-14', '17:04');
INSERT INTO Transaction (Buyer_email, Seller_ID, Zip_code, Amount, Date, Time) VALUES ('adrianna.hamill@example.net', '15785183', '13 zg', '999999.99', '1978-08-14', '08:39');
INSERT INTO Transaction (Buyer_email, Seller_ID, Zip_code, Amount, Date, Time) VALUES ('aleen.kerluke@example.net', '170585947', '15 ce', '32292.62', '1981-03-13', '23:08');
INSERT INTO Transaction (Buyer_email, Seller_ID, Zip_code, Amount, Date, Time) VALUES ('andreanne07@example.org', '177211060', '16 kv', '1156.00', '2012-04-27', '06:36');
INSERT INTO Transaction (Buyer_email, Seller_ID, Zip_code, Amount, Date, Time) VALUES ('audra29@example.net', '183332300', '19 ex', '999999.99', '1977-08-24', '23:17');
INSERT INTO Transaction (Buyer_email, Seller_ID, Zip_code, Amount, Date, Time) VALUES ('auer.niko@example.org', '219884514', '25 ih', '428946.00', '2021-10-04', '12:35');
INSERT INTO Transaction (Buyer_email, Seller_ID, Zip_code, Amount, Date, Time) VALUES ('bbeahan@example.com', '22945157', '31 nn', '173494.23', '1971-03-18', '00:06');
INSERT INTO Transaction (Buyer_email, Seller_ID, Zip_code, Amount, Date, Time) VALUES ('bjacobi@example.net', '240500105', '33 sp', '999999.99', '2011-04-26', '06:35');
INSERT INTO Transaction (Buyer_email, Seller_ID, Zip_code, Amount, Date, Time) VALUES ('branson.fahey@example.com', '254322028', '37 fl', '4.70', '1983-04-13', '19:47');
INSERT INTO Transaction (Buyer_email, Seller_ID, Zip_code, Amount, Date, Time) VALUES ('bruen.krista@example.net', '313752328', '38 zp', '999999.99', '1987-03-07', '13:30');


