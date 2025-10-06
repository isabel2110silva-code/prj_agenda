CREATE DATABASE bd_agenda_t343;
USE bd_agenda_t343;

CREATE TABLE tb_contatos(
  `id` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(30) NOT NULL,
  `tel` VARCHAR(15) NOT NULL,
  `obs` TEXT NULL,
  PRIMARY KEY (`id`));
  
  INSERT INTO `bd_agenda_t343`.`tb_contatos` (`nome`, `tel`, `obs`) VALUES ('Murilo das Neves', '27 996452435', 'desenhista de quadrinhos');
INSERT INTO `bd_agenda_t343`.`tb_contatos` (`nome`, `tel`, `obs`) VALUES ('Cristiane Gomes', '27 998748366', 'Professora de português');
INSERT INTO `bd_agenda_t343`.`tb_contatos` (`nome`, `tel`, `bs`) VALUES ('Sergio Gomes', '27 988780967', 'advogado');
INSERT INTO `bd_agenda_t343`.`tb_contatos` (`nome`, `tel`, `obs`) VALUES ('Isabel Pereira', '27 987658977', 'Pedagoga');
INSERT INTO `bd_agenda_t343`.`tb_contatos` (`nome`, `tel`, `obs`) VALUES ('Sharlyson Nunes', '27 978650786', 'advogado');



CREATE TABLE tb_usuarios(
  `id` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(30) NOT NULL,
  `login` VARCHAR(10) NOT NULL,
  `senha` VARCHAR(6) NOT NULL,
  `acesso` VARCHAR(13) NOT NULL,
  PRIMARY KEY (`id`));

INSERT INTO `bd_agenda_t343`.`tb_usuarios` (`nome`, `login`, `senha`, `acesso`) VALUES ('Débora Vasconcellos', 'debi_03', '123', 'administrador');
INSERT INTO `bd_agenda_t343`.`tb_usuarios` (`nome`, `login`, `senha`, `acesso`) VALUES ('Helouise Feltz', 'heloo_31', '456', 'Funcionário');
INSERT INTO `bd_agenda_t343`.`tb_usuarios` (`nome`, `login`, `senha`, `acesso`) VALUES ('Geovana Rosa', 'Geo_19', '789', 'Funcionário');
INSERT INTO `bd_agenda_t343`.`tb_usuarios` (`nome`, `login`, `senha`, `acesso`) VALUES ('Vitória Mello', 'Vi_21', '987', 'Funcionário');
INSERT INTO `bd_agenda_t343`.`tb_usuarios` (`nome`, `login`, `senha`, `acesso`) VALUES ('Dheulla Alves', 'Dheu_22', '654', 'Administrador');
