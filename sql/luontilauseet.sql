CREATE TABLE satama (kayntisatamanumero INTEGER PRIMARY KEY,
nimi VARCHAR(32) NOT NULL,
kiinnitys VARCHAR(250) ,
palvelut VARCHAR(250) ,
karttasivu INTEGER,
www VARCHAR(100),
ViimeksiMuokannutKayttajaid INTEGER NOT NULL
)

CREATE TABLE chekin (ChekinID INTEGER AUTO_INCREMENT PRIMARY KEY,
KayttajaID INTEGER FOREIGN KEY, 
kayntisatamanumero INTEGER FOREIGN KEY,
aika TIMESTAMP NOT NULL DEFAULT GETDATE()
)

CREATE TABLE kayttaja (KayttajaID SERIAL ,
Nimi VARCHAR,
VeneenTyyppi VARCHAR,
VeneenNimi VARCHAR,
VeneenPituus VARCHAR,
VeneenSyvays VARCHAR,
username varchar NOT NULL,
password varchar NOT NULL,
email varchar NOT NULL,
nayta boolean
)

CREATE TABLE arvostelu (ArvosteluID INTEGER AUTO_INCREMENT PRIMARY KEY, 
Kayntisatamanumero INTEGER NOT NULL FOREIGN KEY,
KayttajaID INTEGER NOT NULL FOREIGN KEY,
Tahdet NUMERIC(5,0) NOT NULL
)


