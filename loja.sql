/*
Navicat MySQL Data Transfer

Source Server         : Local
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : loja

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2018-10-10 00:33:53
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for categorias
-- ----------------------------
DROP TABLE IF EXISTS `categorias`;
CREATE TABLE `categorias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of categorias
-- ----------------------------
INSERT INTO `categorias` VALUES ('1', 'Transporte');
INSERT INTO `categorias` VALUES ('2', 'Educacao');
INSERT INTO `categorias` VALUES ('3', 'Lazer');

-- ----------------------------
-- Table structure for produtos
-- ----------------------------
DROP TABLE IF EXISTS `produtos`;
CREATE TABLE `produtos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) DEFAULT NULL,
  `preco` decimal(10,2) DEFAULT NULL,
  `descricao` text NOT NULL,
  `usado` tinyint(1) NOT NULL,
  `id_categoria` int(11) DEFAULT NULL,
  `isbn` varchar(255) DEFAULT NULL,
  `tipo_produto` varchar(255) DEFAULT NULL,
  `taxa_impressao` varchar(255) DEFAULT NULL,
  `water_mark` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of produtos
-- ----------------------------
INSERT INTO `produtos` VALUES ('1', 'Livro de PHP da Casa do Codigo completo', '39.90', 'Desenvolvimento web com PHP e MySQL', '0', '2', '2', 'Ebook', '20', '23132');
INSERT INTO `produtos` VALUES ('2', 'Livro de HTML da Casa do Codigo', '39.90', 'HTML5 e CSS3 - Domine a web do futuro', '0', '2', '3', 'LivroFisico', '20', '23132');
INSERT INTO `produtos` VALUES ('3', 'Livro de TDD PHP da Casa do Codigo', '49.00', 'Teste e Design no Mundo Real com PHP', '0', '2', '5', 'LivroFisico', '20', '23132');
INSERT INTO `produtos` VALUES ('4', 'Livro Will', '200.00', 'Livro Will', '0', '2', '69', 'Produtos', '20', '23132');
INSERT INTO `produtos` VALUES ('8', 'Ebook', '212.00', '', '0', '2', '', 'Produto', '20', '23132');
INSERT INTO `produtos` VALUES ('9', 'Tetste', '2545.00', 'Tetste', '0', '2', '41', 'LivroFisico', '20', '23132');
INSERT INTO `produtos` VALUES ('10', 'dsds', '323.00', 'dsds', '0', '1', '32', 'LivroFisico', '20', '23132');

-- ----------------------------
-- Table structure for usuarios
-- ----------------------------
DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) DEFAULT NULL,
  `senha` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of usuarios
-- ----------------------------
INSERT INTO `usuarios` VALUES ('1', 'kauagabrielsemenov@gmail.com', 'e10adc3949ba59abbe56e057f20f883e');
