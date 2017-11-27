-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 27-Nov-2017 às 18:54
-- Versão do servidor: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `poscad_db`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `acl_classes`
--

CREATE TABLE `acl_classes` (
  `id` int(10) UNSIGNED NOT NULL,
  `class_type` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `acl_classes`
--

INSERT INTO `acl_classes` (`id`, `class_type`) VALUES
(1, 'AppBundle\\Entity\\AreaCurso'),
(2, 'AppBundle\\Entity\\Curso'),
(3, 'AppBundle\\Entity\\Docente'),
(5, 'Application\\Sonata\\UserBundle\\Entity\\Group'),
(4, 'Application\\Sonata\\UserBundle\\Entity\\User');

-- --------------------------------------------------------

--
-- Estrutura da tabela `acl_entries`
--

CREATE TABLE `acl_entries` (
  `id` int(10) UNSIGNED NOT NULL,
  `class_id` int(10) UNSIGNED NOT NULL,
  `object_identity_id` int(10) UNSIGNED DEFAULT NULL,
  `security_identity_id` int(10) UNSIGNED NOT NULL,
  `field_name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ace_order` smallint(5) UNSIGNED NOT NULL,
  `mask` int(11) NOT NULL,
  `granting` tinyint(1) NOT NULL,
  `granting_strategy` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `audit_success` tinyint(1) NOT NULL,
  `audit_failure` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `acl_entries`
--

INSERT INTO `acl_entries` (`id`, `class_id`, `object_identity_id`, `security_identity_id`, `field_name`, `ace_order`, `mask`, `granting`, `granting_strategy`, `audit_success`, `audit_failure`) VALUES
(1, 1, NULL, 1, NULL, 0, 64, 1, 'all', 0, 0),
(2, 1, NULL, 2, NULL, 1, 32, 1, 'all', 0, 0),
(3, 1, NULL, 3, NULL, 2, 4, 1, 'all', 0, 0),
(4, 1, NULL, 4, NULL, 3, 1, 1, 'all', 0, 0),
(5, 1, 1, 5, NULL, 0, 128, 1, 'all', 0, 0),
(6, 1, 2, 5, NULL, 0, 128, 1, 'all', 0, 0),
(7, 2, NULL, 6, NULL, 0, 64, 1, 'all', 0, 0),
(8, 2, NULL, 7, NULL, 1, 32, 1, 'all', 0, 0),
(9, 2, NULL, 8, NULL, 2, 4, 1, 'all', 0, 0),
(10, 2, NULL, 9, NULL, 3, 1, 1, 'all', 0, 0),
(12, 2, 4, 5, NULL, 1, 128, 1, 'all', 0, 0),
(14, 2, 6, 5, NULL, 0, 128, 1, 'all', 0, 0),
(15, 2, 7, 5, NULL, 0, 128, 1, 'all', 0, 0),
(16, 3, NULL, 10, NULL, 0, 64, 1, 'all', 0, 0),
(17, 3, NULL, 11, NULL, 1, 32, 1, 'all', 0, 0),
(18, 3, NULL, 12, NULL, 2, 4, 1, 'all', 0, 0),
(19, 3, NULL, 13, NULL, 3, 1, 1, 'all', 0, 0),
(20, 3, 8, 5, NULL, 1, 128, 1, 'all', 0, 0),
(22, 4, NULL, 14, NULL, 0, 64, 1, 'all', 0, 0),
(23, 4, NULL, 15, NULL, 1, 32, 1, 'all', 0, 0),
(24, 4, NULL, 16, NULL, 2, 4, 1, 'all', 0, 0),
(25, 4, NULL, 17, NULL, 3, 1, 1, 'all', 0, 0),
(26, 4, 10, 5, NULL, 0, 128, 1, 'all', 0, 0),
(27, 3, 11, 5, NULL, 0, 128, 1, 'all', 0, 0),
(28, 5, NULL, 18, NULL, 0, 64, 1, 'all', 0, 0),
(29, 5, NULL, 19, NULL, 1, 32, 1, 'all', 0, 0),
(30, 5, NULL, 20, NULL, 2, 4, 1, 'all', 0, 0),
(31, 5, NULL, 21, NULL, 3, 1, 1, 'all', 0, 0),
(32, 5, 12, 5, NULL, 0, 128, 1, 'all', 0, 0),
(33, 3, 13, 5, NULL, 0, 128, 1, 'all', 0, 0),
(34, 3, 14, 5, NULL, 0, 128, 1, 'all', 0, 0),
(36, 3, 8, 5, NULL, 0, 128, 1, 'all', 0, 0),
(37, 2, 15, 5, NULL, 0, 128, 1, 'all', 0, 0),
(39, 2, 4, 5, NULL, 0, 128, 1, 'all', 0, 0),
(40, 2, 16, 5, NULL, 0, 128, 1, 'all', 0, 0),
(41, 2, 17, 5, NULL, 0, 128, 1, 'all', 0, 0),
(42, 2, 18, 5, NULL, 0, 128, 1, 'all', 0, 0),
(43, 2, 19, 5, NULL, 0, 128, 1, 'all', 0, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `acl_object_identities`
--

CREATE TABLE `acl_object_identities` (
  `id` int(10) UNSIGNED NOT NULL,
  `parent_object_identity_id` int(10) UNSIGNED DEFAULT NULL,
  `class_id` int(10) UNSIGNED NOT NULL,
  `object_identifier` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `entries_inheriting` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `acl_object_identities`
--

INSERT INTO `acl_object_identities` (`id`, `parent_object_identity_id`, `class_id`, `object_identifier`, `entries_inheriting`) VALUES
(1, NULL, 1, '1', 1),
(2, NULL, 1, '2', 1),
(4, NULL, 2, '4', 1),
(6, NULL, 2, '13', 1),
(7, NULL, 2, '28', 1),
(8, NULL, 3, '3', 1),
(10, NULL, 4, '4', 1),
(11, NULL, 3, '21', 1),
(12, NULL, 5, '1', 1),
(13, NULL, 3, '22', 1),
(14, NULL, 3, '2', 1),
(15, NULL, 2, '2', 1),
(16, NULL, 2, '5', 1),
(17, NULL, 2, '6', 1),
(18, NULL, 2, '7', 1),
(19, NULL, 2, '12', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `acl_object_identity_ancestors`
--

CREATE TABLE `acl_object_identity_ancestors` (
  `object_identity_id` int(10) UNSIGNED NOT NULL,
  `ancestor_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `acl_object_identity_ancestors`
--

INSERT INTO `acl_object_identity_ancestors` (`object_identity_id`, `ancestor_id`) VALUES
(1, 1),
(2, 2),
(4, 4),
(6, 6),
(7, 7),
(8, 8),
(10, 10),
(11, 11),
(12, 12),
(13, 13),
(14, 14),
(15, 15),
(16, 16),
(17, 17),
(18, 18),
(19, 19);

-- --------------------------------------------------------

--
-- Estrutura da tabela `acl_security_identities`
--

CREATE TABLE `acl_security_identities` (
  `id` int(10) UNSIGNED NOT NULL,
  `identifier` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `username` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `acl_security_identities`
--

INSERT INTO `acl_security_identities` (`id`, `identifier`, `username`) VALUES
(5, 'Application\\Sonata\\UserBundle\\Entity\\User-root', 1),
(1, 'ROLE_APP_ADMIN_AREA_CURSO_ADMIN', 0),
(2, 'ROLE_APP_ADMIN_AREA_CURSO_EDITOR', 0),
(4, 'ROLE_APP_ADMIN_AREA_CURSO_GUEST', 0),
(3, 'ROLE_APP_ADMIN_AREA_CURSO_STAFF', 0),
(6, 'ROLE_APP_ADMIN_CURSO_ADMIN', 0),
(7, 'ROLE_APP_ADMIN_CURSO_EDITOR', 0),
(9, 'ROLE_APP_ADMIN_CURSO_GUEST', 0),
(8, 'ROLE_APP_ADMIN_CURSO_STAFF', 0),
(10, 'ROLE_APP_ADMIN_DOCENTE_ADMIN', 0),
(11, 'ROLE_APP_ADMIN_DOCENTE_EDITOR', 0),
(13, 'ROLE_APP_ADMIN_DOCENTE_GUEST', 0),
(12, 'ROLE_APP_ADMIN_DOCENTE_STAFF', 0),
(18, 'ROLE_SONATA_USER_ADMIN_GROUP_ADMIN', 0),
(19, 'ROLE_SONATA_USER_ADMIN_GROUP_EDITOR', 0),
(21, 'ROLE_SONATA_USER_ADMIN_GROUP_GUEST', 0),
(20, 'ROLE_SONATA_USER_ADMIN_GROUP_STAFF', 0),
(14, 'ROLE_SONATA_USER_ADMIN_USER_ADMIN', 0),
(15, 'ROLE_SONATA_USER_ADMIN_USER_EDITOR', 0),
(17, 'ROLE_SONATA_USER_ADMIN_USER_GUEST', 0),
(16, 'ROLE_SONATA_USER_ADMIN_USER_STAFF', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `areas_curso`
--

CREATE TABLE `areas_curso` (
  `id` int(11) NOT NULL,
  `nome_area` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `areas_curso`
--

INSERT INTO `areas_curso` (`id`, `nome_area`) VALUES
(1, 'Ciências Exatas e da Terra'),
(2, 'Ciências Biológicas'),
(3, 'Engenharias'),
(4, 'Ciências da Saúde'),
(5, 'Ciências Agrárias'),
(6, 'Ciências Sociais Aplicadas'),
(7, 'Ciências Humanas'),
(8, 'Linguística, Letras e Artes'),
(9, 'Outros');

-- --------------------------------------------------------

--
-- Estrutura da tabela `coordenacoes`
--

CREATE TABLE `coordenacoes` (
  `id` int(11) NOT NULL,
  `coordenador` int(11) DEFAULT NULL,
  `curso` int(11) DEFAULT NULL,
  `atual` tinyint(1) NOT NULL,
  `dt_inicio` date NOT NULL,
  `dt_termino` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `coordenacoes`
--

INSERT INTO `coordenacoes` (`id`, `coordenador`, `curso`, `atual`, `dt_inicio`, `dt_termino`) VALUES
(8, 2, 5, 0, '2017-11-24', '2017-11-24'),
(9, 2, 5, 0, '2017-11-24', '2017-11-27'),
(10, 2, 6, 1, '2017-11-24', NULL),
(11, 2, 5, 1, '2017-11-27', NULL),
(12, 2, 7, 0, '2017-11-27', '2017-11-27'),
(13, 3, 7, 0, '2017-11-27', '2017-11-27'),
(14, 2, 7, 0, '2017-11-27', '2017-11-27'),
(15, 3, 12, 0, '2017-11-27', '2017-11-27'),
(16, 2, 12, 1, '2017-11-27', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `cursos`
--

CREATE TABLE `cursos` (
  `id` int(11) NOT NULL,
  `area_id` int(11) DEFAULT NULL,
  `coordenador_atual` int(11) DEFAULT NULL,
  `modalidade_id` varchar(1) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tipo_id` varchar(1) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nome_curso` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `codigo_curso` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `cursos`
--

INSERT INTO `cursos` (`id`, `area_id`, `coordenador_atual`, `modalidade_id`, `tipo_id`, `nome_curso`, `codigo_curso`, `is_active`) VALUES
(5, 2, 3, 'P', 'P', 'C5', 'PP25', 1),
(6, 1, 2, 'D', 'G', 'C6', 'DG16', 1),
(7, 3, 3, 'P', 'P', 'C7', 'PP37', 1),
(8, 1, 2, 'D', 'G', 'C8', 'DG18', 1),
(12, 2, 2, 'D', 'G', 'C11', 'DG212', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `docentes`
--

CREATE TABLE `docentes` (
  `id` int(11) NOT NULL,
  `matricula` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `docentes`
--

INSERT INTO `docentes` (`id`, `matricula`) VALUES
(2, 1),
(3, 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `grupos`
--

CREATE TABLE `grupos` (
  `id` int(11) NOT NULL,
  `name` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `roles` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `grupos`
--

INSERT INTO `grupos` (`id`, `name`, `roles`) VALUES
(1, 'Gerente de Curso', 'a:0:{}');

-- --------------------------------------------------------

--
-- Estrutura da tabela `grupos_do_usuario`
--

CREATE TABLE `grupos_do_usuario` (
  `user_id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `grupos_do_usuario`
--

INSERT INTO `grupos_do_usuario` (`user_id`, `group_id`) VALUES
(2, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `modalidades_curso`
--

CREATE TABLE `modalidades_curso` (
  `id` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `nome_modalidade` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `modalidades_curso`
--

INSERT INTO `modalidades_curso` (`id`, `nome_modalidade`) VALUES
('D', 'À Distância'),
('P', 'Presencial');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo_curso`
--

CREATE TABLE `tipo_curso` (
  `id` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `nome_tipo` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `tipo_curso`
--

INSERT INTO `tipo_curso` (`id`, `nome_tipo`) VALUES
('G', 'Gratuito'),
('P', 'Pago');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `username` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `username_canonical` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `email_canonical` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `salt` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `confirmation_token` varchar(180) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password_requested_at` datetime DEFAULT NULL,
  `roles` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `date_of_birth` datetime DEFAULT NULL,
  `firstname` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lastname` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `website` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `biography` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gender` varchar(1) COLLATE utf8_unicode_ci DEFAULT NULL,
  `locale` varchar(8) COLLATE utf8_unicode_ci DEFAULT NULL,
  `timezone` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `facebook_uid` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `facebook_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `facebook_data` longtext COLLATE utf8_unicode_ci COMMENT '(DC2Type:json)',
  `twitter_uid` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `twitter_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `twitter_data` longtext COLLATE utf8_unicode_ci COMMENT '(DC2Type:json)',
  `gplus_uid` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gplus_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gplus_data` longtext COLLATE utf8_unicode_ci COMMENT '(DC2Type:json)',
  `token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `two_step_code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `discr` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `username`, `username_canonical`, `email`, `email_canonical`, `enabled`, `salt`, `password`, `last_login`, `confirmation_token`, `password_requested_at`, `roles`, `created_at`, `updated_at`, `date_of_birth`, `firstname`, `lastname`, `website`, `biography`, `gender`, `locale`, `timezone`, `phone`, `facebook_uid`, `facebook_name`, `facebook_data`, `twitter_uid`, `twitter_name`, `twitter_data`, `gplus_uid`, `gplus_name`, `gplus_data`, `token`, `two_step_code`, `discr`) VALUES
(1, 'root', 'root', 'root@domain.com', 'root@domain.com', 1, 'KR28pZXs3i6eFiJeI8KeXpc2izDgd9gpn1AHnugdL.4', 'bqA1uCHvyD+0C37T72M05gk75sKC84qVhC6RhFKhoSpVRpTyI8x7SmOs+Ibrcw+Bb669ROMKeOY0LDUKrVPqGQ==', '2017-11-27 15:59:47', NULL, NULL, 'a:1:{i:0;s:16:\"ROLE_SUPER_ADMIN\";}', '2017-11-24 15:53:03', '2017-11-27 15:59:47', NULL, NULL, NULL, NULL, NULL, 'u', NULL, NULL, NULL, NULL, NULL, 'null', NULL, NULL, 'null', NULL, NULL, 'null', NULL, NULL, 'usuario'),
(2, '1', '1', 'fulano@domain.com', 'fulano@domain.com', 0, 'XYHmfs.a5xrjOjzhvOK7sk0BPxu0cdx1ZFFDM4dSRFI', 'GcpPcm7Rf1dD5eF31A4Y9Ghd0lL2gKz03i54JUuiYs8FJMH/PXvOMwlXrGRsYqUnB74AaGiZq7BaZdG/1woSnA==', NULL, NULL, NULL, 'a:0:{}', '2017-11-24 15:57:28', '2017-11-27 18:44:04', NULL, 'Fulano', 'Silva', NULL, NULL, 'u', NULL, NULL, NULL, NULL, NULL, 'null', NULL, NULL, 'null', NULL, NULL, 'null', NULL, NULL, 'docente'),
(3, '2', '2', 'ciclano@domain.com', 'ciclano@domain.com', 0, 'i8glhAh.1wSeE048k6O1EEt8b1S7NGRR759R.3qtfJ0', '0nvIqRC3JyucvyZ3wy8Qzsq7Ufio3YySRyv9xlUHHajtGYiV8Zdzco63PwcIRSa+XGjNrAVhSQm+UIhzmR5D3A==', NULL, NULL, NULL, 'a:0:{}', '2017-11-24 15:59:01', '2017-11-27 18:44:04', NULL, 'Ciclano', 'Silva', NULL, NULL, 'u', NULL, NULL, NULL, NULL, NULL, 'null', NULL, NULL, 'null', NULL, NULL, 'null', NULL, NULL, 'docente');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios_root`
--

CREATE TABLE `usuarios_root` (
  `id` int(11) NOT NULL,
  `username` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `username_canonical` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `email_canonical` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `salt` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `confirmation_token` varchar(180) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password_requested_at` datetime DEFAULT NULL,
  `roles` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `date_of_birth` datetime DEFAULT NULL,
  `firstname` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lastname` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `website` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `biography` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gender` varchar(1) COLLATE utf8_unicode_ci DEFAULT NULL,
  `locale` varchar(8) COLLATE utf8_unicode_ci DEFAULT NULL,
  `timezone` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `facebook_uid` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `facebook_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `facebook_data` longtext COLLATE utf8_unicode_ci COMMENT '(DC2Type:json)',
  `twitter_uid` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `twitter_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `twitter_data` longtext COLLATE utf8_unicode_ci COMMENT '(DC2Type:json)',
  `gplus_uid` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gplus_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gplus_data` longtext COLLATE utf8_unicode_ci COMMENT '(DC2Type:json)',
  `token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `two_step_code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `usuarios_root`
--

INSERT INTO `usuarios_root` (`id`, `username`, `username_canonical`, `email`, `email_canonical`, `enabled`, `salt`, `password`, `last_login`, `confirmation_token`, `password_requested_at`, `roles`, `created_at`, `updated_at`, `date_of_birth`, `firstname`, `lastname`, `website`, `biography`, `gender`, `locale`, `timezone`, `phone`, `facebook_uid`, `facebook_name`, `facebook_data`, `twitter_uid`, `twitter_name`, `twitter_data`, `gplus_uid`, `gplus_name`, `gplus_data`, `token`, `two_step_code`) VALUES
(1, 'root', 'root', 'root@domain.com', 'root@domain.com', 1, '1Z618ng7FCrtGZuWnDBzgS4UtdbXf/iuos4etb8xS7I', '/3HWGbgU72udftHXwG/CBtmlWZyaHDCWCZHOUjlWQJXs4TbCt35Le/MV0WqSy8P1jvQVl8dQqkUsi8hlgYTzLQ==', '2017-11-20 20:06:33', NULL, NULL, 'a:1:{i:0;s:16:\"ROLE_SUPER_ADMIN\";}', '2017-11-09 21:47:43', '2017-11-20 20:06:33', NULL, NULL, NULL, NULL, NULL, 'u', NULL, NULL, NULL, NULL, NULL, 'null', NULL, NULL, 'null', NULL, NULL, 'null', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acl_classes`
--
ALTER TABLE `acl_classes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_69DD750638A36066` (`class_type`);

--
-- Indexes for table `acl_entries`
--
ALTER TABLE `acl_entries`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_46C8B806EA000B103D9AB4A64DEF17BCE4289BF4` (`class_id`,`object_identity_id`,`field_name`,`ace_order`),
  ADD KEY `IDX_46C8B806EA000B103D9AB4A6DF9183C9` (`class_id`,`object_identity_id`,`security_identity_id`),
  ADD KEY `IDX_46C8B806EA000B10` (`class_id`),
  ADD KEY `IDX_46C8B8063D9AB4A6` (`object_identity_id`),
  ADD KEY `IDX_46C8B806DF9183C9` (`security_identity_id`);

--
-- Indexes for table `acl_object_identities`
--
ALTER TABLE `acl_object_identities`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_9407E5494B12AD6EA000B10` (`object_identifier`,`class_id`),
  ADD KEY `IDX_9407E54977FA751A` (`parent_object_identity_id`);

--
-- Indexes for table `acl_object_identity_ancestors`
--
ALTER TABLE `acl_object_identity_ancestors`
  ADD PRIMARY KEY (`object_identity_id`,`ancestor_id`),
  ADD KEY `IDX_825DE2993D9AB4A6` (`object_identity_id`),
  ADD KEY `IDX_825DE299C671CEA1` (`ancestor_id`);

--
-- Indexes for table `acl_security_identities`
--
ALTER TABLE `acl_security_identities`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_8835EE78772E836AF85E0677` (`identifier`,`username`);

--
-- Indexes for table `areas_curso`
--
ALTER TABLE `areas_curso`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coordenacoes`
--
ALTER TABLE `coordenacoes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_B99138877E1A6D61` (`coordenador`),
  ADD KEY `IDX_B9913887CA3B40EC` (`curso`);

--
-- Indexes for table `cursos`
--
ALTER TABLE `cursos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_B2785A1899E811E1` (`codigo_curso`),
  ADD UNIQUE KEY `area_id` (`area_id`,`modalidade_id`,`tipo_id`,`nome_curso`),
  ADD KEY `IDX_B2785A18BD0F409C` (`area_id`),
  ADD KEY `IDX_B2785A18A50C323B` (`coordenador_atual`),
  ADD KEY `IDX_B2785A18F2AD3298` (`modalidade_id`),
  ADD KEY `IDX_B2785A18A9276E6C` (`tipo_id`);

--
-- Indexes for table `docentes`
--
ALTER TABLE `docentes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `grupos`
--
ALTER TABLE `grupos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_45842FE5E237E06` (`name`);

--
-- Indexes for table `grupos_do_usuario`
--
ALTER TABLE `grupos_do_usuario`
  ADD PRIMARY KEY (`user_id`,`group_id`),
  ADD KEY `IDX_E4228A5BA76ED395` (`user_id`),
  ADD KEY `IDX_E4228A5BFE54D947` (`group_id`);

--
-- Indexes for table `modalidades_curso`
--
ALTER TABLE `modalidades_curso`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tipo_curso`
--
ALTER TABLE `tipo_curso`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_EF687F292FC23A8` (`username_canonical`),
  ADD UNIQUE KEY `UNIQ_EF687F2A0D96FBF` (`email_canonical`),
  ADD UNIQUE KEY `UNIQ_EF687F2C05FB297` (`confirmation_token`);

--
-- Indexes for table `usuarios_root`
--
ALTER TABLE `usuarios_root`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_2661261392FC23A8` (`username_canonical`),
  ADD UNIQUE KEY `UNIQ_26612613A0D96FBF` (`email_canonical`),
  ADD UNIQUE KEY `UNIQ_26612613C05FB297` (`confirmation_token`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `acl_classes`
--
ALTER TABLE `acl_classes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `acl_entries`
--
ALTER TABLE `acl_entries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
--
-- AUTO_INCREMENT for table `acl_object_identities`
--
ALTER TABLE `acl_object_identities`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `acl_security_identities`
--
ALTER TABLE `acl_security_identities`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `areas_curso`
--
ALTER TABLE `areas_curso`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `coordenacoes`
--
ALTER TABLE `coordenacoes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `cursos`
--
ALTER TABLE `cursos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `grupos`
--
ALTER TABLE `grupos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `usuarios_root`
--
ALTER TABLE `usuarios_root`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `acl_entries`
--
ALTER TABLE `acl_entries`
  ADD CONSTRAINT `FK_46C8B8063D9AB4A6` FOREIGN KEY (`object_identity_id`) REFERENCES `acl_object_identities` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_46C8B806DF9183C9` FOREIGN KEY (`security_identity_id`) REFERENCES `acl_security_identities` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_46C8B806EA000B10` FOREIGN KEY (`class_id`) REFERENCES `acl_classes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `acl_object_identities`
--
ALTER TABLE `acl_object_identities`
  ADD CONSTRAINT `FK_9407E54977FA751A` FOREIGN KEY (`parent_object_identity_id`) REFERENCES `acl_object_identities` (`id`);

--
-- Limitadores para a tabela `acl_object_identity_ancestors`
--
ALTER TABLE `acl_object_identity_ancestors`
  ADD CONSTRAINT `FK_825DE2993D9AB4A6` FOREIGN KEY (`object_identity_id`) REFERENCES `acl_object_identities` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_825DE299C671CEA1` FOREIGN KEY (`ancestor_id`) REFERENCES `acl_object_identities` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `coordenacoes`
--
ALTER TABLE `coordenacoes`
  ADD CONSTRAINT `FK_B99138877E1A6D61` FOREIGN KEY (`coordenador`) REFERENCES `docentes` (`id`),
  ADD CONSTRAINT `FK_B9913887CA3B40EC` FOREIGN KEY (`curso`) REFERENCES `cursos` (`id`);

--
-- Limitadores para a tabela `cursos`
--
ALTER TABLE `cursos`
  ADD CONSTRAINT `FK_B2785A18A50C323B` FOREIGN KEY (`coordenador_atual`) REFERENCES `docentes` (`id`),
  ADD CONSTRAINT `FK_B2785A18A9276E6C` FOREIGN KEY (`tipo_id`) REFERENCES `tipo_curso` (`id`),
  ADD CONSTRAINT `FK_B2785A18BD0F409C` FOREIGN KEY (`area_id`) REFERENCES `areas_curso` (`id`),
  ADD CONSTRAINT `FK_B2785A18F2AD3298` FOREIGN KEY (`modalidade_id`) REFERENCES `modalidades_curso` (`id`);

--
-- Limitadores para a tabela `docentes`
--
ALTER TABLE `docentes`
  ADD CONSTRAINT `FK_CA483735BF396750` FOREIGN KEY (`id`) REFERENCES `usuarios` (`id`) ON DELETE CASCADE;

--
-- Limitadores para a tabela `grupos_do_usuario`
--
ALTER TABLE `grupos_do_usuario`
  ADD CONSTRAINT `FK_E4228A5BA76ED395` FOREIGN KEY (`user_id`) REFERENCES `usuarios` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_E4228A5BFE54D947` FOREIGN KEY (`group_id`) REFERENCES `grupos` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
