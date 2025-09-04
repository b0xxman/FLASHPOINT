CREATE DATABASE flashpoint;

USE flashpoint;

CREATE TABLE bikes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    image VARCHAR(255),
    status VARCHAR(20) DEFAULT 'available',
    price_per_hour DECIMAL(5,2)
);

CREATE TABLE rentals (
    id INT AUTO_INCREMENT PRIMARY KEY,
    bike_id INT,
    user_name VARCHAR(100),
    rent_time DATETIME DEFAULT CURRENT_TIMESTAMP,
    return_time DATETIME,
    FOREIGN KEY (bike_id) REFERENCES bikes(id)
);

INSERT INTO bikes (name, image, price_per_hour) VALUES
('Yamaha MT-15', 'yamaha.jpg', 10.00),
('Royal Enfield Classic', 're.jpg', 15.00),
('Honda Activa', 'activa.jpg', 5.00);