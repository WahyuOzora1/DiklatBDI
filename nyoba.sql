CREATE DATABASE absensi;

USE absensi;

DROP DATABASE absensi;

CREATE TABLE pegawai (
	id INT(15) PRIMARY KEY,
	nama_lengkap VARCHAR(255),
	nip INT(15),
	jk VARCHAR(100),
	alamat VARCHAR(255),
	email VARCHAR(255),
	no_telp INT(15),
	
	id_jabatan INT(10),
	  
 CONSTRAINT FK_jabatan FOREIGN KEY (id_jabatan)
    REFERENCES jabatan(id_jabatan)
);

SELECT * FROM pegawai;

DROP TABLE pegawai;

#menambah kolm pada table yang suadh ada

ALTER TABLE pegawai ADD department VARCHAR(100);

#menghapus kolom pada table
ALTER TABLE pegawai DROP department;


#medifikasi kolom pada table
ALTER TABLE pegawai CHANGE email surel VARCHAR(100);


ALTER TABLE pegawai ADD PRIMARY KEY (id);
#atau
ALTER TABLE pegawai ADD CONSTRAINT pegawai_key PRIMARY KEY(id);
ALTER TABLE pegawai DROP PRIMARY KEY;

#(error)alter table pegawai modify nip not null;
#ALTER TABLE pegawai MODIFY COLUMN (nama_lengkap VARCHAR(200) NOT NULL);


ALTER TABLE pegawai MODIFY COLUMN nama_lengkap VARCHAR(200) NOT NULL;


DROP TABLE jabatan;

CREATE TABLE jabatan (
id_jabatan INT(10) PRIMARY KEY AUTO_INCREMENT,
nama_jabatan VARCHAR(100)


);

# alter table pegawai add foreign key (id_jabatan) reference jabatan(id_jabatan);    
#id_jabatan yang awal berdasarkan pada colummn di tabel foreignkey ya kalau yang kedua itu di primarynya dan tipenya harus sama
    


INSERT INTO jabatan(id_jabatan,nama_jabatan) VALUES (1, "CTO");

SELECT * FROM jabatan;


ALTER TABLE pegawai DROP COLUMN nip;


INSERT INTO pegawai (
id, nama_lengkap, nip, jk, alamat,email, no_telp, id_jabatan

) VALUES (1, "Jono", 133313, "lakilaki", "Jepara", "jono@gmail.com", 323232, 1);


SELECT * FROM  pegawai
SELECT * FROM  jabatan;



UPDATE pegawai SET jk = 'perempuan' WHERE nama_lengkap = "Jono";



SELECT
a.nama_lengkap AS NAMA_LENGKAP,
a.alamat AS ALAMAT,
b.nama_jabatan AS NAMA_JABATAN
FROM pegawai AS a
JOIN jabatan AS b
ON a.id_jabatan = b.id_jabatan;






