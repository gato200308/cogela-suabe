

CREATE TABLE usuario (
    identificacion VARCHAR(20) PRIMARY KEY,
    nombres VARCHAR(100),
    apellidos VARCHAR(100),
    fecha_nacimiento DATE,
    telefono VARCHAR(20),
    genero ENUM('M', 'F', 'Otro'),
    edad INT,
    correo VARCHAR(100) UNIQUE,
    contrasena VARCHAR(255),
    FOREIGN KEY (rol) REFERENCES Roles(id)
);

CREATE TABLE emociones (
    id INT AUTO_INCREMENT PRIMARY KEY,
    usuario_id VARCHAR(20),
    fecha DATE,
    emocion TEXT,
    FOREIGN KEY (usuario_id) REFERENCES usuario(identificacion)
);

CREATE TABLE matches (
    id INT AUTO_INCREMENT PRIMARY KEY,
    usuario1_id VARCHAR(20),
    usuario2_id VARCHAR(20),
    fecha DATE,
    FOREIGN KEY (usuario1_id) REFERENCES usuario(identificacion),
    FOREIGN KEY (usuario2_id) REFERENCES usuario(identificacion)
);

CREATE TABLE mensajes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    match_id INT,
    remitente_id VARCHAR(20),
    mensaje TEXT,
    fecha DATETIME,
    FOREIGN KEY (match_id) REFERENCES matches(id),
    FOREIGN KEY (remitente_id) REFERENCES usuario(identificacion)
);
