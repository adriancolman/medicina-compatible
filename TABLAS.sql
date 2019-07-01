CREATE TABLE IF NOT EXISTS Usuarios(
    UsuarioId INT AUTO_INCREMENT,
    Username VARCHAR(20) NOT NULL UNIQUE,
    Password VARCHAR(255) NOT NULL,
    PRIMARY KEY(UsuarioId)
);
CREATE TABLE IF NOT EXISTS NivelRiesgo(
    NivelRiesgoId INT AUTO_INCREMENT,
    Titulo VARCHAR(60),
    Descripcion TEXT,
    Clave VARCHAR(200),
    PRIMARY KEY(NivelRiesgoId)
);


CREATE TABLE IF NOT EXISTS Publicaciones(
    PublicacionId INT AUTO_INCREMENT,
    Titulo VARCHAR(60) NOT NULL UNIQUE,
    Descripcion TEXT NOT NULL,
    Fecha DATETIME,

    NivelRiesgoId INT  NOT NULL,
    PRIMARY KEY(PublicacionId), 
    FOREIGN KEY(NivelRiesgoId) REFERENCES NivelRiesgo(NivelRiesgoId)
);

CREATE TABLE IF NOT EXISTS Alternativas(
    AlternativasId INT AUTO_INCREMENT,
    PublicacionId INT,
    PublicacionAlternativaId INT,
    PRIMARY KEY(AlternativasId),
    FOREIGN KEY(PublicacionId) REFERENCES Publicaciones(PublicacionId),
    FOREIGN KEY(PublicacionAlternativaId) REFERENCES Publicaciones(PublicacionId)
);

