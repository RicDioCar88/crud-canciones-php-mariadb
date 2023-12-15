/*CREATE DATABASE karaoke;

USE karaoke;

CREATE TABLE canciones (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(255) NOT NULL,
    descripcion TEXT,
    precio DECIMAL(10, 2) NOT NULL,
    stock INT NOT NULL
);

INSERT INTO jabones (nombre, descripcion, precio, stock) VALUES
('Jabón de Lavanda', 'Jabón artesanal de lavanda', 5.99, 50),
('Jabón de Rosas', 'Jabón suavizante de rosas', 6.49, 40),
('Jabón de Menta', 'Jabón refrescante de menta', 5.89, 60),
('Jabón de Avena', 'Jabón exfoliante de avena', 5.49, 35),
('Jabón de Cítricos', 'Jabón energizante de cítricos', 6.99, 45),
('Jabón de Caléndula', 'Jabón calmante de caléndula', 6.79, 25),
('Jabón de Chocolate', 'Jabón nutritivo de chocolate', 7.49, 30),
('Jabón de Café', 'Jabón rejuvenecedor de café', 7.89, 20),
('Jabón de Almendras', 'Jabón hidratante de almendras', 6.19, 40),
('Jabón de Karité', 'Jabón suavizante de manteca de karité', 8.49, 15);
*/
CREATE DATABASE karaoke;
USE karaoke;

CREATE TABLE Canciones (
    id INT AUTO_INCREMENT  PRIMARY KEY,
    titulo VARCHAR(100),
    artista VARCHAR(100),
    album VARCHAR(100)
);

INSERT INTO Canciones (titulo, artista, album) VALUES
('Shape of You', 'Ed Sheeran', 'albumx'),
('Despacito', 'Luis Fonsi ft. Daddy Yankee', 'Vida'),
('Bohemian Rhapsody', 'Queen', 'A Night at the Opera'),
('Dance Monkey', 'Tones and I', 'The Kids Are Coming'),
('Vivir mi Vida', 'Marc Anthony', '3.0'),
('Someone Like You', 'Adele', '21'),
('Waka Waka (This Time for Africa)', 'Shakira', 'Sale el Sol'),
('Havana', 'Camila Cabello ft. Young Thug', 'Camila'),
('Bad Romance', 'Lady Gaga', 'The Fame Monster'),
('Bailando', 'Enrique Iglesias ft. Gente de Zona, Descemer Bueno', 'Sex and Love')

