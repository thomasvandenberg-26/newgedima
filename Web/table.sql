CREATE TABLE `participants` (
  `id_participant` int(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `nom_participant` varchar(50) NOT NULL,
  `email_participant` varchar(50) NOT NULL,
  `mdp_participant` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `realisation` (
  `id_realisation` int(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
  'id_participant' int(11) NOT NULL,
  `titre_rea` varchar(500) DEFAULT NULL,
  `description_rea` varchar(500) DEFAULT NULL,
  `date_rea` date DEFAULT NULL,
  `date_participation` date DEFAULT NULL,
  `url_rea` varchar(500) NOT NULL,
  `nbJaime` int(11) NOT NULL
  
  CONSTRAINT FK_participant FOREIGN KEY(id_participant )REFERENCES participants(id_participant)

)