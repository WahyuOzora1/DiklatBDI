CREATE DATABASE qudsdev;
USE qudsdev;

DROP TABLE instruktur;
DROP TABLE peserta;


CREATE TABLE tb_peserta(
id_peserta INT(4) PRIMARY KEY AUTO_INCREMENT,
username VARCHAR(255),
email VARCHAR (255),
pass VARCHAR(255),
address VARCHAR(255),
no_hp VARCHAR(255),
gender VARCHAR(255),
tgl_lahir DATETIME
);

CREATE TABLE tb_instruktur(
id_instruktur INT(4) PRIMARY KEY AUTO_INCREMENT,
id_kategori INT(4),
username VARCHAR(255),
pass VARCHAR(255), 
address VARCHAR (255),
gender VARCHAR(255),
alamat_peserta VARCHAR(255),
foto VARCHAR(255),
tgl_lahir DATETIME
);

CREATE TABLE tb_kategori(
id_kategori INT(4) PRIMARY KEY AUTO_INCREMENT,
nama_kategori VARCHAR(255),
);


CREATE TABLE tb_tugas(
id_tugas INT(4) PRIMARY KEY AUTO_INCREMENT,
id_event INT(4),
soal_tugas VARCHAR(255),
tgl_tugas DATETIME,
deadline_tugas DATETIME,
kode CHAR(5),
keterangan VARCHAR(255)

);


CREATE TABLE tb_hasil_tugas(
id_hasil_tugas INT(4) PRIMARY KEY AUTO_INCREMENT,
id_tugas INT(4),
id_peserta INT(4),
isi_hasil_tugas VARCHAR(255),
tgl_submit VARCHAR(255),
poin INT(15),
keterangan VARCHAR(255),,
status_tugas VARCHAR(255)

);

CREATE TABLE tb_events(
id_event INT(4) PRIMARY KEY AUTO_INCREMENT,
id_instruktur INT(4),
id_peserta INT(4),
harga INT(18),
deskripsi VARCHAR(255),
tgl_mulai DATETIME,
tgl_akhir DATETIME,
kategori VARCHAR(255)

);




