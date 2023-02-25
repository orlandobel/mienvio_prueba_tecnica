DROP DATABASE IF EXISTS prueba_mienvio_orlando_belmonte;
CREATE DATABASE prueba_mienvio_orlando_belmonte;

USE prueba_mienvio_orlando_belmonte;

CREATE TABLE productos(
    id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
    nombre VARCHAR(25) NOT NULL,
    descripcion TEXT(100) NOT NULL,
    precio DOUBLE(10, 2) NOT NULL
);

INSERT INTO productos (nombre, descripcion, precio) VALUES ('Xiaomi POCO X3', 'Pantalla 6.7"\r\nProcesador Qualcomm Snapdragon 732G\r\nRAM 6GB', 3849);
INSERT INTO productos (nombre, descripcion, precio) VALUES ('Xiaomi mi11', 'Pantalla 6.8"\r\nProcesador Qualcomm Snapdragon 888\r\nRAM 8GB', 8499);
INSERT INTO productos (nombre, descripcion, precio) VALUES ('Samsung z fold 4', 'Pantalla 6.2" a 7.6"\r\nProcesador Qalcomm Snapdragon 8+\r\nRAM 12GB', 38827);
INSERT INTO productos (nombre, descripcion, precio) VALUES ('Samsng s22', 'Pantalla 6.1"\r\nProcesador Samsung Exynos 2200\r\nRAM 8GB', 28999);
INSERT INTO productos (nombre, descripcion, precio) VALUES ('Huawei band 6', 'Dimenciones 43x25.4x10.99mm\r\nPeso 18g\r\nBateria 118mAh', 798);
INSERT INTO productos (nombre, descripcion, precio) VALUES ('Xiaomi mi band 6', 'Dimenciones 47.4x18.6x12.7mm\r\nPeso 12.8g\r\nBateria 125mAh', 679);
