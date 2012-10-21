CREATE TABLE satama (kayntisatamanumero INTEGER PRIMARY KEY,
nimi VARCHAR(32) NOT NULL,
lat VARCHAR,
lng VARCHAR,
kiinnitys VARCHAR(250) ,
palvelut VARCHAR(250) ,
karttasivu INTEGER,
www VARCHAR(100),
ViimeksiMuokannutKayttajaid INTEGER NOT NULL
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
nayta boolean,
admin INT
)

CREATE TABLE arvostelu (ArvosteluID SERIAL, 
Kayntisatamanumero INTEGER NOT NULL,
KayttajaID INTEGER NOT NULL,
kommentti VARCHAR,
Tahdet NUMERIC(5,0) NOT NULL
)


