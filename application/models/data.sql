CREATE TABLE User(
    idUser INTEGER PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(20),
    mail VARCHAR(30),
    pass VARCHAR(10),
    isAdmin BOOLEAN
);

CREATE TABLE Categorie(
    idCat INTEGER PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(20)
);

CREATE TABLE Entana(
    idEntana INTEGER PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(20),
    description VARCHAR(50),
    prix FLOAT,
    idUser INTEGER,
    FOREIGN KEY (idUser) REFERENCES User(idUser)
);

CREATE TABLE EntanaCat(
    idEntanaCat INTEGER PRIMARY KEY AUTO_INCREMENT,
    idCat INTEGER,
    idEntana INTEGER,
    FOREIGN KEY (idCat) REFERENCES Categorie(idCat),
    FOREIGN KEY (idEntana) REFERENCES Entana(idEntana)
);

CREATE TABLE Sary(
    idSary INTEGER PRIMARY KEY AUTO_INCREMENT,
    path VARCHAR(100),
    idEntana INTEGER,
    FOREIGN KEY (idEntana) REFERENCES Entana(idEntana)
);

CREATE TABLE Echange(
    idEchange INTEGER PRIMARY KEY AUTO_INCREMENT,
    idEntana1 INTEGER,
    idEntana2 INTEGER,
    idUser1 INTEGER,
    idUser2 INTEGER,
    Etat VARCHAR(20),
    FOREIGN KEY (idEntana1) REFERENCES Entana(idEntana),
    FOREIGN KEY (idEntana2) REFERENCES Entana(idEntana),
    FOREIGN KEY (idUser1) REFERENCES user (idUser),
    FOREIGN KEY (idUser2) REFERENCES user (idUser)
);

INSERT INTO User VALUES(default,'admin','admin@gmail.com','admin',true);
INSERT INTO User VALUES(default,'Jones','jones@gmail.com','jones',false);
INSERT INTO User VALUES(default,'Smith','smith@gmail.com','smith',false);
INSERT INTO User VALUES(default,'Scott','scott@gmail.com','scott',false);

INSERT INTO Categorie VALUES(default,'Vetement');
INSERT INTO Categorie VALUES(default,'Transport');
INSERT INTO Categorie VALUES(default,'Appareil Electronique');

INSERT INTO Entana VALUES(default,'T-Shirt','Presque neuf et de bonne qualite',15000,2);
INSERT INTO Entana VALUES(default,'T-Shirt','Presque neuf et de bonne qualite',18000,3);
INSERT INTO Entana VALUES(default,'Iphone8','Jamais utilise',2750000,3);
INSERT INTO Entana VALUES(default,'NEC','Bonne occasion',3000000,4);
INSERT INTO Entana VALUES(default,'Short','Bonne qualite',10000,2);

INSERT INTO EntanaCat VALUES(default,1,1);
INSERT INTO EntanaCat VALUES(default,1,2);
INSERT INTO EntanaCat VALUES(default,3,3);
INSERT INTO EntanaCat VALUES(default,3,4);
INSERT INTO EntanaCat VALUES(default,1,5);

INSERT INTO Sary VALUES(default,'objet1.jfif',1);
INSERT INTO Sary VALUES(default,'objet2.jfif',2);
INSERT INTO Sary VALUES(default,'objet3.jfif',3);
INSERT INTO Sary VALUES(default,'objet4.jfif',4);
INSERT INTO Sary VALUES(default,'objet5.jfif',5);

INSERT INTO Echange VALUES(default,1,2,1,2,'en attente');
INSERT INTO Echange VALUES(default,3,4,2,3,'en attente');

