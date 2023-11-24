SELECT * FROM mydb.raza;
SET foreign_key_checks = 0;
ALTER TABLE mydb.tipomascota MODIFY id INT AUTO_INCREMENT;
SELECT * FROM mydb.mascota;
ALTER TABLE mascota AUTO_INCREMENT = 1;
SELECT * FROM mydb.tipomascota;
delete from mydb.tipomascota where id=19;
ALTER TABLE tipomascota AUTO_INCREMENT = 1;
SELECT * FROM mydb.raza;
DELETE  FROM  mydb.raza where id=5;
ALTER TABLE raza AUTO_INCREMENT = 1;

SELECT * FROM mydb.user;
delete from mydb.user where id=7;
ALTER TABLE user AUTO_INCREMENT = 1;