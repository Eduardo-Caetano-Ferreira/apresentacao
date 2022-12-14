
CREATE SCHEMA IF NOT EXISTS db_msgarden DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE db_msgarden;

-- -----------------------------------------------------
-- Table tb_usuario
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS tb_usuario (
  cd_usuario INT NOT NULL AUTO_INCREMENT,
  nm_usuario VARCHAR(50) NOT NULL,
  dt_ingresso DATE NOT NULL,
  ds_email VARCHAR(60) NOT NULL,
  ds_email_recuperacao VARCHAR(60) NULL,
  ds_senha VARCHAR(20) NOT NULL,
  nr_celular VARCHAR(11) NOT NULL,
  ft_usuario VARCHAR(100) NULL,
  PRIMARY KEY (cd_usuario)
);


-- -----------------------------------------------------
-- Table tb_admin
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS tb_admin (
  cd_admin INT NOT NULL AUTO_INCREMENT,
  nm_admin VARCHAR(50) NOT NULL,
  ds_senha VARCHAR(20) NOT NULL,
  PRIMARY KEY (cd_admin)   
);


-- -----------------------------------------------------
-- Table tb_categoria
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS tb_categoria (
  cd_categoria INT NOT NULL AUTO_INCREMENT,
  nm_categoria VARCHAR(45) NOT NULL,
  ft_categoria VARCHAR(100) NULL, /* arrumar para not null*/
  PRIMARY KEY (cd_categoria)   
);


-- -----------------------------------------------------
-- Table tb_produto
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS tb_produto (
  cd_produto INT NOT NULL AUTO_INCREMENT,
  nm_produto VARCHAR(45) NOT NULL,
  vl_preco DECIMAL(9,2) NOT NULL,
  ds_produto LONGTEXT NOT NULL,
  qtd_produto INT NOT NULL,
  ft_produto_principal VARCHAR(100) NULL, /* arrumar para not null*/
  ft_produto_secundario1 VARCHAR(100) NULL,
  ft_produto_secundario2 VARCHAR(100) NULL,
  ft_produto_secundario3 VARCHAR(100) NULL,
  PRIMARY KEY (cd_produto),
  
  id_categoria INT NOT NULL,
  
  FOREIGN KEY (id_categoria)
  REFERENCES tb_categoria (cd_categoria)
);


-- -----------------------------------------------------
-- Table tb_curiosidade
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS tb_curiosidade (
  cd_curiosidade INT NOT NULL AUTO_INCREMENT,
  nm_curiosidade VARCHAR(45) NOT NULL,
  ds_descricao LONGTEXT NOT NULL,
  ft_curiosidade VARCHAR(100) NULL, /* arrumar para not null*/
  id_categoria INT NOT NULL,
  PRIMARY KEY (cd_curiosidade),
  
  FOREIGN KEY (id_categoria)
  REFERENCES tb_categoria (cd_categoria)
);


-- -----------------------------------------------------
-- Table tb_pedido
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS tb_pedido (
  cd_pedido INT NOT NULL AUTO_INCREMENT,
  dt_pedido DATETIME NOT NULL,
  PRIMARY KEY (cd_pedido)   
);


-- -----------------------------------------------------
-- Table tb_produto_pedido
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS tb_produto_pedido (
  id_produto INT NOT NULL,
  id_pedido INT NOT NULL,
  PRIMARY KEY (id_produto, id_pedido),
  
    FOREIGN KEY (id_produto)
    REFERENCES tb_produto (cd_produto),
    
    FOREIGN KEY (id_pedido)
    REFERENCES tb_pedido (cd_pedido)
    
);

-- Inserts

INSERT INTO `tb_admin`(`cd_admin`, `nm_admin`, `ds_senha`) 
VALUES (null,'ray',123), (null,'edu',123);

INSERT INTO `tb_categoria`(`cd_categoria`, `nm_categoria`) 
VALUES (null,"Medicinal");

INSERT INTO `tb_categoria`(`cd_categoria`, `nm_categoria`) 
VALUES (null,"Perfumada");

INSERT INTO `tb_categoria`(`cd_categoria`, `nm_categoria`) 
VALUES (null,"Carn??vora");


INSERT INTO `tb_produto`(`cd_produto`, `nm_produto`, `vl_preco`, `ds_produto`, `qtd_produto`, `ft_produto_principal`, `id_categoria`) VALUES 
(null, "Planta1", 20.00,"Perfumada", 12, "saves/ok.jpg", 1);

INSERT INTO `tb_produto`(`cd_produto`, `nm_produto`, `vl_preco`, `ds_produto`, `qtd_produto`, `ft_produto_principal`, `id_categoria`) VALUES 
(null, "Planta2", 20.00,"Perfumada", 12, "saves/ok.jpg", 1);

INSERT INTO `tb_produto`(`cd_produto`, `nm_produto`, `vl_preco`, `ds_produto`, `qtd_produto`, `ft_produto_principal`, `id_categoria`) VALUES 
(null, "Planta3", 20.00,"Perfumada", 12, "saves/ok.jpg", 1);

INSERT INTO `tb_produto`(`cd_produto`, `nm_produto`, `vl_preco`, `ds_produto`, `qtd_produto`, `ft_produto_principal`, `id_categoria`) VALUES 
(null, "Planta4", 20.00,"Perfumada", 12, "saves/ok.jpg", 1);

INSERT INTO `tb_produto`(`cd_produto`, `nm_produto`, `vl_preco`, `ds_produto`, `qtd_produto`, `ft_produto_principal`, `id_categoria`) VALUES 
(null, "Planta5", 20.00,"Perfumada", 12, "saves/ok.jpg", 1);

INSERT INTO `tb_produto`(`cd_produto`, `nm_produto`, `vl_preco`, `ds_produto`, `qtd_produto`, `ft_produto_principal`, `id_categoria`) VALUES 
(null, "Planta6", 20.00,"Perfumada", 12, "saves/ok.jpg", 1);


INSERT INTO `tb_usuario`(`cd_usuario`, `nm_usuario`, `dt_ingresso`, `ds_email`, `ds_email_recuperacao`, `ds_senha`, `nr_celular`) 
VALUES (null,"ray","2000-12-12","ray@ray",null,123, 12345);

INSERT INTO `tb_usuario`(`cd_usuario`, `nm_usuario`, `dt_ingresso`, `ds_email`, `ds_email_recuperacao`, `ds_senha`, `nr_celular`) 
VALUES (null,"edu","2000-12-12","edu@edu",null,123,12345);
