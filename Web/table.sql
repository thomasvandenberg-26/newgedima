CREATE TABLE `users` (
  `id_usr` int(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `nom_usr` varchar(50) NOT NULL,
  `email_usr` varchar(50) NOT NULL,
  `mdp_usr` varchar(50) NOT NULL,
  `statut_usr` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `realisation` (
  `id_realisation` int(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `id_usr` int(11) NOT NULL,
  `titre_rea` varchar(500) DEFAULT NULL,
  `description_rea` varchar(500) DEFAULT NULL,
  `date_rea` date DEFAULT NULL,
  `date_participation` date DEFAULT NULL,
  `url_rea` varchar(500) NOT NULL,
  `nbJaime` int(11) NOT NULL,
  
  CONSTRAINT FK_users FOREIGN KEY(id_usr)REFERENCES users(id_usr)

)
CREATE TABLE `parametres` (
    `id_parametres` int(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
    `date_debut_concours` date, NOT NULL,
    `date_fin_concours` date, NOT NULL
)