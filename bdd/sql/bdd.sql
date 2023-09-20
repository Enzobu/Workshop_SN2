CREATE TABLE users(
   id_user VARCHAR(50),
   name_user VARCHAR(50) NOT NULL,
   surname_user VARCHAR(50) NOT NULL,
   mail_user VARCHAR(255) NOT NULL,
   password_user VARCHAR(100) NOT NULL,
   birthYears_user DATE NOT NULL,
   level_user VARCHAR(50) NOT NULL,
   is_former_user LOGICAL NOT NULL,
   speciality_former_user VARCHAR(100),
   PRIMARY KEY(id_user)
);

CREATE TABLE training(
   id_training VARCHAR(50),
   format_training VARCHAR(64) NOT NULL,
   language_training VARCHAR(50) NOT NULL,
   difficulty VARCHAR(50) NOT NULL,
   note_training DECIMAL(2,1),
   description_training TEXT NOT NULL,
   creator_training VARCHAR(50) NOT NULL,
   name_training VARCHAR(150) NOT NULL,
   PRIMARY KEY(id_training)
);

CREATE TABLE formers(
   id_former VARCHAR(50),
   name_former VARCHAR(50) NOT NULL,
   surname_former VARCHAR(50) NOT NULL,
   mail_former VARCHAR(255) NOT NULL,
   password_former VARCHAR(100) NOT NULL,
   birth_years_former DATE NOT NULL,
   speciality_former VARCHAR(100) NOT NULL,
   note_former DECIMAL(2,1),
   id_training VARCHAR(50) NOT NULL,
   PRIMARY KEY(id_former),
   FOREIGN KEY(id_training) REFERENCES training(id_training)
);

CREATE TABLE Utilise(
   id_user VARCHAR(50),
   id_training VARCHAR(50),
   PRIMARY KEY(id_user, id_training),
   FOREIGN KEY(id_user) REFERENCES users(id_user),
   FOREIGN KEY(id_training) REFERENCES training(id_training)
);