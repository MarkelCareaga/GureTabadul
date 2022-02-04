-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         8.0.18 - MySQL Community Server - GPL
-- SO del servidor:              Win64
-- HeidiSQL Versión:             11.3.0.6295
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Volcando estructura de base de datos para guretabadul
CREATE DATABASE IF NOT EXISTS `guretabadul` /*!40100 DEFAULT CHARACTER SET utf8 */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `guretabadul`;

-- Volcando estructura para tabla guretabadul.conversacion
CREATE TABLE IF NOT EXISTS `conversacion` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `ContenidoMensaje` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `FechaMensaje` date NOT NULL,
  `user_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `conversacion_user_id_foreign` (`user_id`),
  CONSTRAINT `conversacion_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla guretabadul.conversacion: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `conversacion` DISABLE KEYS */;
/*!40000 ALTER TABLE `conversacion` ENABLE KEYS */;

-- Volcando estructura para tabla guretabadul.cursos
CREATE TABLE IF NOT EXISTS `cursos` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Fecha_ini` date NOT NULL,
  `Fecha_fin` date NOT NULL,
  `precio` double NOT NULL,
  `capacidad` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla guretabadul.cursos: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `cursos` DISABLE KEYS */;
REPLACE INTO `cursos` (`id`, `nombre`, `Fecha_ini`, `Fecha_fin`, `precio`, `capacidad`, `descripcion`, `created_at`, `updated_at`) VALUES
	(1, 'PRUEBA CURSO', '2022-01-31', '2022-02-18', 12.52, '5', 'fddfasdvssdsdfzdfddffdgdfddfs', '2022-02-02 12:06:02', '2022-02-02 12:06:02');
/*!40000 ALTER TABLE `cursos` ENABLE KEYS */;

-- Volcando estructura para tabla guretabadul.cursos_usuarios
CREATE TABLE IF NOT EXISTS `cursos_usuarios` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned NOT NULL,
  `curso_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `cursos_usuarios_user_id_foreign` (`user_id`),
  KEY `cursos_usuarios_curso_id_foreign` (`curso_id`),
  CONSTRAINT `cursos_usuarios_curso_id_foreign` FOREIGN KEY (`curso_id`) REFERENCES `cursos` (`id`),
  CONSTRAINT `cursos_usuarios_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla guretabadul.cursos_usuarios: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `cursos_usuarios` DISABLE KEYS */;
/*!40000 ALTER TABLE `cursos_usuarios` ENABLE KEYS */;

-- Volcando estructura para tabla guretabadul.data_rows
CREATE TABLE IF NOT EXISTS `data_rows` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `data_type_id` int(10) unsigned NOT NULL,
  `field` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `required` tinyint(1) NOT NULL DEFAULT '0',
  `browse` tinyint(1) NOT NULL DEFAULT '1',
  `read` tinyint(1) NOT NULL DEFAULT '1',
  `edit` tinyint(1) NOT NULL DEFAULT '1',
  `add` tinyint(1) NOT NULL DEFAULT '1',
  `delete` tinyint(1) NOT NULL DEFAULT '1',
  `details` text COLLATE utf8mb4_unicode_ci,
  `order` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `data_rows_data_type_id_foreign` (`data_type_id`),
  CONSTRAINT `data_rows_data_type_id_foreign` FOREIGN KEY (`data_type_id`) REFERENCES `data_types` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=120 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla guretabadul.data_rows: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `data_rows` DISABLE KEYS */;
REPLACE INTO `data_rows` (`id`, `data_type_id`, `field`, `type`, `display_name`, `required`, `browse`, `read`, `edit`, `add`, `delete`, `details`, `order`) VALUES
	(1, 1, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, '{}', 1),
	(2, 1, 'name', 'text', 'Nombre', 1, 1, 1, 1, 1, 1, '{}', 2),
	(3, 1, 'email', 'text', 'Correo Electrónico', 1, 1, 1, 1, 1, 1, '{}', 3),
	(4, 1, 'password', 'password', 'Constraseña', 1, 0, 0, 1, 1, 0, '{}', 4),
	(5, 1, 'remember_token', 'text', 'Token de Recuerdo', 0, 0, 0, 0, 0, 0, '{}', 5),
	(6, 1, 'created_at', 'timestamp', 'Creado', 0, 1, 1, 0, 0, 0, '{}', 6),
	(7, 1, 'updated_at', 'timestamp', 'Actualizado', 0, 0, 0, 0, 0, 0, '{}', 7),
	(8, 1, 'avatar', 'image', 'Avatar', 0, 1, 1, 1, 1, 1, '{}', 8),
	(9, 1, 'user_belongsto_role_relationship', 'relationship', 'Rol', 0, 1, 1, 1, 1, 0, '{"model":"TCG\\\\Voyager\\\\Models\\\\Role","table":"roles","type":"belongsTo","column":"role_id","key":"id","label":"display_name","pivot_table":"roles","pivot":"0","taggable":"0"}', 10),
	(10, 1, 'user_belongstomany_role_relationship', 'relationship', 'voyager::seeders.data_rows.roles', 0, 0, 0, 0, 0, 0, '{"model":"TCG\\\\Voyager\\\\Models\\\\Role","table":"roles","type":"belongsToMany","column":"id","key":"id","label":"display_name","pivot_table":"user_roles","pivot":"1","taggable":"0"}', 11),
	(11, 1, 'settings', 'hidden', 'Settings', 0, 0, 0, 0, 0, 0, '{}', 12),
	(12, 2, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
	(13, 2, 'name', 'text', 'Nombre', 1, 1, 1, 1, 1, 1, NULL, 2),
	(14, 2, 'created_at', 'timestamp', 'Creado', 0, 0, 0, 0, 0, 0, NULL, 3),
	(15, 2, 'updated_at', 'timestamp', 'Actualizado', 0, 0, 0, 0, 0, 0, NULL, 4),
	(16, 3, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
	(17, 3, 'name', 'text', 'Nombre', 1, 1, 1, 1, 1, 1, NULL, 2),
	(18, 3, 'created_at', 'timestamp', 'Creado', 0, 0, 0, 0, 0, 0, NULL, 3),
	(19, 3, 'updated_at', 'timestamp', 'Actualizado', 0, 0, 0, 0, 0, 0, NULL, 4),
	(20, 3, 'display_name', 'text', 'Nombre a Mostrar', 1, 1, 1, 1, 1, 1, NULL, 5),
	(21, 1, 'role_id', 'text', 'Rol', 0, 1, 1, 1, 1, 1, '{}', 9),
	(22, 4, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
	(23, 4, 'Título', 'text', 'Título', 1, 1, 1, 1, 1, 1, '{}', 2),
	(24, 4, 'Fecha_comienzo', 'date', 'Fecha Comienzo', 1, 1, 1, 1, 1, 1, '{}', 3),
	(25, 4, 'Fecha_final', 'date', 'Fecha Final', 1, 1, 1, 1, 1, 1, '{}', 4),
	(26, 4, 'Descripción', 'text_area', 'Descripción', 1, 1, 1, 1, 1, 1, '{}', 5),
	(27, 4, 'Precio', 'number', 'Precio', 1, 1, 1, 1, 1, 1, '{}', 6),
	(28, 4, 'Capacidad', 'number', 'Capacidad', 1, 1, 1, 1, 1, 1, '{}', 7),
	(29, 4, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 8),
	(30, 4, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 9),
	(31, 5, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
	(32, 5, 'nombre', 'text', 'Nombre', 1, 1, 1, 1, 1, 1, '{}', 2),
	(33, 5, 'Fecha_ini', 'date', 'Fecha Ini', 1, 1, 1, 1, 1, 1, '{}', 3),
	(34, 5, 'Fecha_fin', 'date', 'Fecha Fin', 1, 1, 1, 1, 1, 1, '{}', 4),
	(35, 5, 'precio', 'number', 'Precio', 1, 1, 1, 1, 1, 1, '{}', 5),
	(36, 5, 'capacidad', 'number', 'Capacidad', 1, 1, 1, 1, 1, 1, '{}', 6),
	(37, 5, 'descripcion', 'text_area', 'Descripcion', 1, 1, 1, 1, 1, 1, '{}', 7),
	(38, 5, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 8),
	(39, 5, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 9),
	(40, 9, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
	(41, 9, 'nombre', 'text', 'Nombre', 1, 1, 1, 1, 1, 1, '{}', 2),
	(42, 9, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 3),
	(43, 9, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 4),
	(44, 10, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
	(45, 10, 'user_id', 'text', 'User Id', 1, 1, 1, 1, 1, 1, '{}', 2),
	(46, 10, 'curso_id', 'text', 'Curso Id', 1, 1, 1, 1, 1, 1, '{}', 3),
	(47, 10, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 4),
	(48, 10, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 5),
	(54, 12, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
	(55, 12, 'ruta', 'image', 'Ruta', 1, 1, 1, 1, 1, 1, '{}', 3),
	(56, 12, 'id_taller', 'select_dropdown', 'Id Taller', 1, 1, 1, 1, 1, 1, '{}', 2),
	(57, 12, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 4),
	(58, 12, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 5),
	(59, 17, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
	(60, 17, 'nombre', 'text', 'Nombre', 1, 1, 1, 1, 1, 1, '{}', 2),
	(61, 17, 'descripción', 'text', 'Descripción', 1, 1, 1, 1, 1, 1, '{}', 3),
	(62, 17, 'ruta_img_sponsor', 'text', 'Ruta Img Sponsor', 1, 1, 1, 1, 1, 1, '{}', 4),
	(63, 17, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 5),
	(64, 17, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 6),
	(65, 18, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
	(66, 18, 'nombre', 'text', 'Nombre', 1, 1, 1, 1, 1, 1, '{}', 2),
	(67, 18, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 3),
	(68, 18, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 4),
	(79, 21, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
	(80, 21, 'nombre', 'text', 'Nombre', 1, 1, 1, 1, 1, 1, '{}', 2),
	(81, 21, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 3),
	(82, 21, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 4),
	(83, 1, 'user_belongsto_paise_relationship', 'relationship', 'paises', 0, 1, 1, 1, 1, 1, '{"model":"App\\\\Models\\\\Pais","table":"paises","type":"belongsTo","column":"pais_id","key":"id","label":"nombre","pivot_table":"conversacion","pivot":"0","taggable":"0"}', 13),
	(88, 10, 'cursos_usuario_belongsto_curso_relationship', 'relationship', 'cursos', 0, 1, 1, 1, 1, 1, '{"model":"App\\\\Models\\\\Curso","table":"cursos","type":"belongsTo","column":"id","key":"id","label":"nombre","pivot_table":"conversacion","pivot":"0","taggable":"0"}', 6),
	(89, 10, 'cursos_usuario_belongsto_user_relationship', 'relationship', 'users', 0, 1, 1, 1, 1, 1, '{"model":"App\\\\Models\\\\User","table":"users","type":"belongsTo","column":"user_id","key":"id","label":"email","pivot_table":"conversacion","pivot":"0","taggable":"0"}', 7),
	(91, 5, 'curso_hasmany_imagenes_curso_relationship', 'relationship', 'imagenes_cursos', 0, 1, 1, 1, 1, 1, '{"model":"App\\\\Models\\\\ImagenesCurso","table":"imagenes_cursos","type":"hasMany","column":"id","key":"id","label":"ruta","pivot_table":"conversacion","pivot":"0","taggable":"0"}', 11),
	(92, 21, 'paise_hasmany_user_relationship', 'relationship', 'users', 0, 1, 1, 1, 1, 1, '{"model":"App\\\\Models\\\\User","table":"users","type":"hasMany","column":"pais_id","key":"id","label":"email","pivot_table":"conversacion","pivot":"0","taggable":"0"}', 5),
	(94, 4, 'tallere_hasmany_imagenes_tallere_relationship', 'relationship', 'imagenes_talleres', 0, 1, 1, 1, 1, 1, '{"model":"App\\\\Models\\\\ImagenesTaller","table":"imagenes_talleres","type":"hasMany","column":"id_taller","key":"id","label":"ruta","pivot_table":"conversacion","pivot":"0","taggable":"0"}', 10),
	(99, 12, 'imagenes_tallere_belongsto_tallere_relationship', 'relationship', 'talleres', 0, 1, 1, 1, 1, 1, '{"model":"App\\\\Models\\\\Taller","table":"talleres","type":"belongsTo","column":"id_taller","key":"id","label":"t\\u00edtulo","pivot_table":"conversacion","pivot":"0","taggable":"0"}', 6),
	(109, 1, 'email_verified_at', 'timestamp', 'Email Verified At', 0, 1, 1, 1, 1, 1, '{}', 7),
	(110, 1, 'Fecha_nac', 'text', 'Fecha Nac', 0, 1, 1, 1, 1, 1, '{}', 9),
	(111, 1, 'telefono', 'text', 'Telefono', 0, 1, 1, 1, 1, 1, '{}', 10),
	(112, 1, 'direccion_facturacion', 'text', 'Direccion Facturacion', 0, 1, 1, 1, 1, 1, '{}', 11),
	(113, 1, 'pais_id', 'text', 'Pais Id', 0, 1, 1, 1, 1, 1, '{}', 3),
	(114, 22, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
	(115, 22, 'ruta', 'image', 'Ruta', 1, 1, 1, 1, 1, 1, '{}', 3),
	(116, 22, 'curso_id', 'text', 'Curso Id', 1, 1, 1, 1, 1, 1, '{}', 2),
	(117, 22, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 4),
	(118, 22, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 5),
	(119, 22, 'imagenes_curso_belongsto_curso_relationship', 'relationship', 'cursos', 0, 1, 1, 1, 1, 1, '{"model":"App\\\\Models\\\\Curso","table":"cursos","type":"belongsTo","column":"curso_id","key":"id","label":"nombre","pivot_table":"conversacion","pivot":"0","taggable":"0"}', 6);
/*!40000 ALTER TABLE `data_rows` ENABLE KEYS */;

-- Volcando estructura para tabla guretabadul.data_types
CREATE TABLE IF NOT EXISTS `data_types` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_singular` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_plural` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `model_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `policy_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `controller` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `generate_permissions` tinyint(1) NOT NULL DEFAULT '0',
  `server_side` tinyint(4) NOT NULL DEFAULT '0',
  `details` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `data_types_name_unique` (`name`),
  UNIQUE KEY `data_types_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla guretabadul.data_types: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `data_types` DISABLE KEYS */;
REPLACE INTO `data_types` (`id`, `name`, `slug`, `display_name_singular`, `display_name_plural`, `icon`, `model_name`, `policy_name`, `controller`, `description`, `generate_permissions`, `server_side`, `details`, `created_at`, `updated_at`) VALUES
	(1, 'users', 'users', 'Usuario', 'Usuarios', 'voyager-person', 'TCG\\Voyager\\Models\\User', 'TCG\\Voyager\\Policies\\UserPolicy', 'TCG\\Voyager\\Http\\Controllers\\VoyagerUserController', NULL, 1, 0, '{"order_column":null,"order_display_column":null,"order_direction":"desc","default_search_key":null,"scope":null}', '2022-01-27 11:44:24', '2022-02-04 08:33:11'),
	(2, 'menus', 'menus', 'Menú', 'Menús', 'voyager-list', 'TCG\\Voyager\\Models\\Menu', NULL, '', '', 1, 0, NULL, '2022-01-27 11:44:25', '2022-01-27 11:44:25'),
	(3, 'roles', 'roles', 'Rol', 'Roles', 'voyager-lock', 'TCG\\Voyager\\Models\\Role', NULL, 'TCG\\Voyager\\Http\\Controllers\\VoyagerRoleController', '', 1, 0, NULL, '2022-01-27 11:44:25', '2022-01-27 11:44:25'),
	(4, 'talleres', 'talleres', 'Taller', 'Talleres', 'voyager-milestone', 'App\\Models\\Taller', NULL, NULL, NULL, 1, 0, '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}', '2022-01-27 11:48:01', '2022-02-02 08:22:10'),
	(5, 'cursos', 'cursos', 'Curso', 'Cursos', 'voyager-study', 'App\\Models\\Curso', NULL, NULL, NULL, 1, 0, '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}', '2022-01-27 11:48:16', '2022-02-02 12:05:27'),
	(9, 'skills', 'skills', 'Skill', 'Skills', 'voyager-wand', 'App\\Models\\Skills', NULL, NULL, NULL, 1, 0, '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}', '2022-01-27 11:49:39', '2022-02-01 12:45:59'),
	(10, 'cursos_usuarios', 'cursos-usuarios', 'Cursos Usuario', 'Cursos Usuarios', NULL, 'App\\Models\\CursosUsuario', NULL, NULL, NULL, 1, 0, '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}', '2022-01-27 11:49:52', '2022-02-01 07:28:11'),
	(12, 'imagenes_talleres', 'imagenes-talleres', 'Imagenes Taller', 'Imagenes Talleres', NULL, 'App\\Models\\ImagenesTaller', NULL, NULL, NULL, 1, 0, '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}', '2022-01-27 11:50:21', '2022-02-03 12:39:53'),
	(16, 'matchs', 'matchs', 'Match', 'Matches', 'voyager-bubble-hear', 'App\\Models\\Match', NULL, NULL, NULL, 1, 0, '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}', '2022-01-27 11:53:15', '2022-01-28 07:42:41'),
	(17, 'sponsor', 'sponsor', 'Sponsor', 'Sponsors', 'voyager-dollar', 'App\\Models\\Sponsor', NULL, NULL, NULL, 1, 0, '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}', '2022-01-27 11:53:38', '2022-01-28 07:39:13'),
	(18, 'intereses', 'intereses', 'Interes', 'Intereses', 'voyager-search', 'App\\Models\\Interes', NULL, NULL, NULL, 1, 0, '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}', '2022-01-27 11:54:13', '2022-02-01 12:46:20'),
	(21, 'paises', 'paises', 'Pais', 'Paises', 'voyager-thumb-tack', 'App\\Models\\Pais', NULL, NULL, NULL, 1, 0, '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}', '2022-01-27 11:55:05', '2022-02-04 08:32:17'),
	(22, 'imagenes_cursos', 'imagenes-cursos', 'Imagenes Curso', 'Imagenes Cursos', NULL, 'App\\Models\\ImagenesCurso', NULL, NULL, NULL, 1, 0, '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}', '2022-02-01 12:35:16', '2022-02-02 12:09:06');
/*!40000 ALTER TABLE `data_types` ENABLE KEYS */;

-- Volcando estructura para tabla guretabadul.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla guretabadul.failed_jobs: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;

-- Volcando estructura para tabla guretabadul.imagenes_cursos
CREATE TABLE IF NOT EXISTS `imagenes_cursos` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `ruta` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `curso_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `imagenes_cursos_curso_id_foreign` (`curso_id`),
  CONSTRAINT `imagenes_cursos_curso_id_foreign` FOREIGN KEY (`curso_id`) REFERENCES `cursos` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla guretabadul.imagenes_cursos: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `imagenes_cursos` DISABLE KEYS */;
REPLACE INTO `imagenes_cursos` (`id`, `ruta`, `curso_id`, `created_at`, `updated_at`) VALUES
	(1, 'imagenes-cursos\\February2022\\kgbmIkbT9vRJvJTKCoFj.jpg', 1, '2022-02-02 12:09:49', '2022-02-02 12:09:49');
/*!40000 ALTER TABLE `imagenes_cursos` ENABLE KEYS */;

-- Volcando estructura para tabla guretabadul.imagenes_talleres
CREATE TABLE IF NOT EXISTS `imagenes_talleres` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `ruta` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_taller` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `imagenes_talleres_id_taller_foreign` (`id_taller`),
  CONSTRAINT `imagenes_talleres_id_taller_foreign` FOREIGN KEY (`id_taller`) REFERENCES `talleres` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla guretabadul.imagenes_talleres: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `imagenes_talleres` DISABLE KEYS */;
REPLACE INTO `imagenes_talleres` (`id`, `ruta`, `id_taller`, `created_at`, `updated_at`) VALUES
	(1, 'imagenes-talleres\\February2022\\wOarjQWr5nlEvYCFzG5Q.jpg', 1, '2022-02-02 09:54:00', '2022-02-02 08:55:14');
/*!40000 ALTER TABLE `imagenes_talleres` ENABLE KEYS */;

-- Volcando estructura para tabla guretabadul.intereses
CREATE TABLE IF NOT EXISTS `intereses` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla guretabadul.intereses: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `intereses` DISABLE KEYS */;
/*!40000 ALTER TABLE `intereses` ENABLE KEYS */;

-- Volcando estructura para tabla guretabadul.intereses_usuarios
CREATE TABLE IF NOT EXISTS `intereses_usuarios` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned NOT NULL,
  `interes_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `intereses_usuarios_user_id_foreign` (`user_id`),
  KEY `intereses_usuarios_interes_id_foreign` (`interes_id`),
  CONSTRAINT `intereses_usuarios_interes_id_foreign` FOREIGN KEY (`interes_id`) REFERENCES `intereses` (`id`),
  CONSTRAINT `intereses_usuarios_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla guretabadul.intereses_usuarios: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `intereses_usuarios` DISABLE KEYS */;
/*!40000 ALTER TABLE `intereses_usuarios` ENABLE KEYS */;

-- Volcando estructura para tabla guretabadul.matchs
CREATE TABLE IF NOT EXISTS `matchs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `realizado` tinyint(1) NOT NULL,
  `direccion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Fecha_encuentro` date NOT NULL,
  `user1_id` bigint(20) unsigned NOT NULL,
  `user2_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `matchs_user1_id_foreign` (`user1_id`),
  KEY `matchs_user2_id_foreign` (`user2_id`),
  CONSTRAINT `matchs_user1_id_foreign` FOREIGN KEY (`user1_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  CONSTRAINT `matchs_user2_id_foreign` FOREIGN KEY (`user2_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla guretabadul.matchs: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `matchs` DISABLE KEYS */;
/*!40000 ALTER TABLE `matchs` ENABLE KEYS */;

-- Volcando estructura para tabla guretabadul.menus
CREATE TABLE IF NOT EXISTS `menus` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `menus_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla guretabadul.menus: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `menus` DISABLE KEYS */;
REPLACE INTO `menus` (`id`, `name`, `created_at`, `updated_at`) VALUES
	(1, 'admin', '2022-01-27 11:44:27', '2022-01-27 11:44:27');
/*!40000 ALTER TABLE `menus` ENABLE KEYS */;

-- Volcando estructura para tabla guretabadul.menu_items
CREATE TABLE IF NOT EXISTS `menu_items` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `menu_id` int(10) unsigned DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `target` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '_self',
  `icon_class` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `order` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `route` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parameters` text COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`),
  KEY `menu_items_menu_id_foreign` (`menu_id`),
  CONSTRAINT `menu_items_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla guretabadul.menu_items: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `menu_items` DISABLE KEYS */;
REPLACE INTO `menu_items` (`id`, `menu_id`, `title`, `url`, `target`, `icon_class`, `color`, `parent_id`, `order`, `created_at`, `updated_at`, `route`, `parameters`) VALUES
	(1, 1, 'Tablero', '', '_self', 'voyager-boat', NULL, NULL, 1, '2022-01-27 11:44:27', '2022-01-27 11:44:27', 'voyager.dashboard', NULL),
	(2, 1, 'Multimedia', '', '_self', 'voyager-images', NULL, NULL, 4, '2022-01-27 11:44:27', '2022-01-28 09:03:47', 'voyager.media.index', NULL),
	(3, 1, 'Usuarios', '', '_self', 'voyager-person', NULL, NULL, 3, '2022-01-27 11:44:27', '2022-01-27 11:44:27', 'voyager.users.index', NULL),
	(4, 1, 'Roles', '', '_self', 'voyager-lock', NULL, NULL, 2, '2022-01-27 11:44:27', '2022-01-27 11:44:27', 'voyager.roles.index', NULL),
	(5, 1, 'Herramientas', '', '_self', 'voyager-tools', NULL, NULL, 5, '2022-01-27 11:44:27', '2022-01-28 09:03:47', NULL, NULL),
	(6, 1, 'Diseñador de Menús', '', '_self', 'voyager-list', NULL, 5, 1, '2022-01-27 11:44:27', '2022-01-28 09:03:47', 'voyager.menus.index', NULL),
	(7, 1, 'Base de Datos', '', '_self', 'voyager-data', NULL, 5, 2, '2022-01-27 11:44:27', '2022-01-28 09:03:47', 'voyager.database.index', NULL),
	(8, 1, 'Compás', '', '_self', 'voyager-compass', NULL, 5, 3, '2022-01-27 11:44:27', '2022-01-28 09:03:47', 'voyager.compass.index', NULL),
	(9, 1, 'BREAD', '', '_self', 'voyager-bread', NULL, 5, 4, '2022-01-27 11:44:27', '2022-01-28 09:03:47', 'voyager.bread.index', NULL),
	(10, 1, 'Parámetros', '', '_self', 'voyager-settings', NULL, NULL, 12, '2022-01-27 11:44:27', '2022-02-04 08:43:47', 'voyager.settings.index', NULL),
	(11, 1, 'Talleres', '', '_self', NULL, '#000000', 26, 1, '2022-01-27 11:48:02', '2022-01-28 10:03:55', 'voyager.talleres.index', 'null'),
	(12, 1, 'Cursos', '', '_self', NULL, '#000000', 25, 1, '2022-01-27 11:48:16', '2022-01-28 09:59:11', 'voyager.cursos.index', 'null'),
	(14, 1, 'Habilidades', '', '_self', NULL, '#000000', 24, 1, '2022-01-27 11:49:39', '2022-01-28 10:00:03', 'voyager.skills.index', 'null'),
	(15, 1, 'Cursos Usuarios', '', '_self', NULL, NULL, 25, 3, '2022-01-27 11:49:53', '2022-02-04 08:39:12', 'voyager.cursos-usuarios.index', NULL),
	(17, 1, 'Imagenes Talleres', '', '_self', NULL, NULL, 26, 2, '2022-01-27 11:50:22', '2022-02-04 08:43:47', 'voyager.imagenes-talleres.index', NULL),
	(18, 1, 'Matches', '', '_self', 'voyager-people', '#ff0033', NULL, 9, '2022-01-27 11:50:45', '2022-02-04 08:43:47', 'voyager.matchs.index', 'null'),
	(19, 1, 'Sponsors', '', '_self', 'voyager-dollar', '#99c421', NULL, 10, '2022-01-27 11:53:38', '2022-02-04 08:43:47', 'voyager.sponsor.index', 'null'),
	(20, 1, 'Intereses', '', '_self', NULL, '#000000', 27, 1, '2022-01-27 11:54:14', '2022-01-28 10:03:12', 'voyager.intereses.index', 'null'),
	(24, 1, 'Skills', '', '_self', 'voyager-star', '#fbff00', NULL, 8, '2022-01-28 09:50:28', '2022-02-04 08:43:47', NULL, ''),
	(25, 1, 'Cursos', '', '_self', 'voyager-study', '#00fafb', NULL, 7, '2022-01-28 09:56:40', '2022-02-04 08:43:47', NULL, ''),
	(26, 1, 'Talleres', '', '_self', 'voyager-hammer', '#ff9f00', NULL, 6, '2022-01-28 10:00:54', '2022-01-28 11:39:16', NULL, ''),
	(27, 1, 'Intereses', '', '_self', 'voyager-search', '#ffffff', NULL, 11, '2022-01-28 10:02:11', '2022-02-04 08:43:47', NULL, ''),
	(28, 1, 'Imagenes Cursos', '', '_self', NULL, NULL, 25, 2, '2022-02-01 12:35:16', '2022-02-04 08:39:12', 'voyager.imagenes-cursos.index', NULL),
	(29, 1, 'Paises', '/admin/paises', '_self', 'voyager-world', '#0facf0', NULL, 13, '2022-02-04 08:36:06', '2022-02-04 08:43:47', NULL, '');
/*!40000 ALTER TABLE `menu_items` ENABLE KEYS */;

-- Volcando estructura para tabla guretabadul.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla guretabadul.migrations: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
REPLACE INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2013_01_25_072032_create_paises_table', 1),
	(2, '2014_10_12_000000_create_users_table', 1),
	(3, '2014_10_12_100000_create_password_resets_table', 1),
	(4, '2016_01_01_000000_add_voyager_user_fields', 1),
	(5, '2016_01_01_000000_create_data_types_table', 1),
	(6, '2016_05_19_173453_create_menu_table', 1),
	(7, '2016_10_21_190000_create_roles_table', 1),
	(8, '2016_10_21_190000_create_settings_table', 1),
	(9, '2016_11_30_135954_create_permission_table', 1),
	(10, '2016_11_30_141208_create_permission_role_table', 1),
	(11, '2016_12_26_201236_data_types__add__server_side', 1),
	(12, '2017_01_13_000000_add_route_to_menu_items_table', 1),
	(13, '2017_01_14_005015_create_translations_table', 1),
	(14, '2017_01_15_000000_make_table_name_nullable_in_permissions_table', 1),
	(15, '2017_03_06_000000_add_controller_to_data_types_table', 1),
	(16, '2017_04_21_000000_add_order_to_data_rows_table', 1),
	(17, '2017_07_05_210000_add_policyname_to_data_types_table', 1),
	(18, '2017_08_05_000000_add_group_to_settings_table', 1),
	(19, '2017_11_26_013050_add_user_role_relationship', 1),
	(20, '2017_11_26_015000_create_user_roles_table', 1),
	(21, '2018_03_11_000000_add_user_settings', 1),
	(22, '2018_03_14_000000_add_details_to_data_types_table', 1),
	(23, '2018_03_16_000000_make_settings_value_nullable', 1),
	(24, '2019_08_19_000000_create_failed_jobs_table', 1),
	(25, '2022_01_21_092236_create_conversacion_table', 1),
	(26, '2022_01_21_094554_create_intereses_table', 1),
	(27, '2022_01_21_094800_create_intereses_usuarios_table', 1),
	(28, '2022_01_21_103731_create_talleres_table', 1),
	(29, '2022_01_21_103754_create_talleres_usuarios_table', 1),
	(30, '2022_01_21_104034_create_imagenes_talleres_table', 1),
	(31, '2022_01_21_104323_create_sponsor_table', 1),
	(32, '2022_01_24_072405_create_skills_table', 1),
	(33, '2022_01_25_072316_create_skills_usuario_table', 1),
	(34, '2022_01_25_091805_create_matchs_table', 1),
	(35, '2022_01_25_114750_create_cursos_table', 1),
	(36, '2022_01_25_114908_create_cursos_usuarios_table', 1),
	(37, '2022_01_27_113223_create_imagenes_curso_table', 2);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Volcando estructura para tabla guretabadul.paises
CREATE TABLE IF NOT EXISTS `paises` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=241 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla guretabadul.paises: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `paises` DISABLE KEYS */;
REPLACE INTO `paises` (`id`, `nombre`, `created_at`, `updated_at`) VALUES
	(1, 'Afganistán', NULL, NULL),
	(2, 'Islas Gland', NULL, NULL),
	(3, 'Albania', NULL, NULL),
	(4, 'Alemania', NULL, NULL),
	(5, 'Andorra', NULL, NULL),
	(6, 'Angola', NULL, NULL),
	(7, 'Anguilla', NULL, NULL),
	(8, 'Antártida', NULL, NULL),
	(9, 'Antigua y Barbuda', NULL, NULL),
	(10, 'Antillas Holandesas', NULL, NULL),
	(11, 'Arabia Saudí', NULL, NULL),
	(12, 'Argelia', NULL, NULL),
	(13, 'Argentina', NULL, NULL),
	(14, 'Armenia', NULL, NULL),
	(15, 'Aruba', NULL, NULL),
	(16, 'Australia', NULL, NULL),
	(17, 'Austria', NULL, NULL),
	(18, 'Azerbaiyán', NULL, NULL),
	(19, 'Bahamas', NULL, NULL),
	(20, 'Bahréin', NULL, NULL),
	(21, 'Bangladesh', NULL, NULL),
	(22, 'Barbados', NULL, NULL),
	(23, 'Bielorrusia', NULL, NULL),
	(24, 'Bélgica', NULL, NULL),
	(25, 'Belice', NULL, NULL),
	(26, 'Benin', NULL, NULL),
	(27, 'Bermudas', NULL, NULL),
	(28, 'Bhután', NULL, NULL),
	(29, 'Bolivia', NULL, NULL),
	(30, 'Bosnia y Herzegovina', NULL, NULL),
	(31, 'Botsuana', NULL, NULL),
	(32, 'Isla Bouvet', NULL, NULL),
	(33, 'Brasil', NULL, NULL),
	(34, 'Brunéi', NULL, NULL),
	(35, 'Bulgaria', NULL, NULL),
	(36, 'Burkina Faso', NULL, NULL),
	(37, 'Burundi', NULL, NULL),
	(38, 'Cabo Verde', NULL, NULL),
	(39, 'Islas Caimán', NULL, NULL),
	(40, 'Camboya', NULL, NULL),
	(41, 'Camerún', NULL, NULL),
	(42, 'Canadá', NULL, NULL),
	(43, 'República Centroafricana', NULL, NULL),
	(44, 'Chad', NULL, NULL),
	(45, 'República Checa', NULL, NULL),
	(46, 'Chile', NULL, NULL),
	(47, 'China', NULL, NULL),
	(48, 'Chipre', NULL, NULL),
	(49, 'Isla de Navidad', NULL, NULL),
	(50, 'Ciudad del Vaticano', NULL, NULL),
	(51, 'Islas Cocos', NULL, NULL),
	(52, 'Colombia', NULL, NULL),
	(53, 'Comoras', NULL, NULL),
	(54, 'República Democrática del Congo', NULL, NULL),
	(55, 'Congo', NULL, NULL),
	(56, 'Islas Cook', NULL, NULL),
	(57, 'Corea del Norte', NULL, NULL),
	(58, 'Corea del Sur', NULL, NULL),
	(59, 'Costa de Marfil', NULL, NULL),
	(60, 'Costa Rica', NULL, NULL),
	(61, 'Croacia', NULL, NULL),
	(62, 'Cuba', NULL, NULL),
	(63, 'Dinamarca', NULL, NULL),
	(64, 'Dominica', NULL, NULL),
	(65, 'República Dominicana', NULL, NULL),
	(66, 'Ecuador', NULL, NULL),
	(67, 'Egipto', NULL, NULL),
	(68, 'El Salvador', NULL, NULL),
	(69, 'Emiratos Árabes Unidos', NULL, NULL),
	(70, 'Eritrea', NULL, NULL),
	(71, 'Eslovaquia', NULL, NULL),
	(72, 'Eslovenia', NULL, NULL),
	(73, 'España', NULL, NULL),
	(74, 'Islas ultramarinas de Estados Unidos', NULL, NULL),
	(75, 'Estados Unidos', NULL, NULL),
	(76, 'Estonia', NULL, NULL),
	(77, 'Etiopía', NULL, NULL),
	(78, 'Islas Feroe', NULL, NULL),
	(79, 'Filipinas', NULL, NULL),
	(80, 'Finlandia', NULL, NULL),
	(81, 'Fiyi', NULL, NULL),
	(82, 'Francia', NULL, NULL),
	(83, 'Gabón', NULL, NULL),
	(84, 'Gambia', NULL, NULL),
	(85, 'Georgia', NULL, NULL),
	(86, 'Islas Georgias del Sur y Sandwich del Sur', NULL, NULL),
	(87, 'Ghana', NULL, NULL),
	(88, 'Gibraltar', NULL, NULL),
	(89, 'Granada', NULL, NULL),
	(90, 'Grecia', NULL, NULL),
	(91, 'Groenlandia', NULL, NULL),
	(92, 'Guadalupe', NULL, NULL),
	(93, 'Guam', NULL, NULL),
	(94, 'Guatemala', NULL, NULL),
	(95, 'Guayana Francesa', NULL, NULL),
	(96, 'Guinea', NULL, NULL),
	(97, 'Guinea Ecuatorial', NULL, NULL),
	(98, 'Guinea-Bissau', NULL, NULL),
	(99, 'Guyana', NULL, NULL),
	(100, 'Haití', NULL, NULL),
	(101, 'Islas Heard y McDonald', NULL, NULL),
	(102, 'Honduras', NULL, NULL),
	(103, 'Hong Kong', NULL, NULL),
	(104, 'Hungría', NULL, NULL),
	(105, 'India', NULL, NULL),
	(106, 'Indonesia', NULL, NULL),
	(107, 'Irán', NULL, NULL),
	(108, 'Iraq', NULL, NULL),
	(109, 'Irlanda', NULL, NULL),
	(110, 'Islandia', NULL, NULL),
	(111, 'Israel', NULL, NULL),
	(112, 'Italia', NULL, NULL),
	(113, 'Jamaica', NULL, NULL),
	(114, 'Japón', NULL, NULL),
	(115, 'Jordania', NULL, NULL),
	(116, 'Kazajstán', NULL, NULL),
	(117, 'Kenia', NULL, NULL),
	(118, 'Kirguistán', NULL, NULL),
	(119, 'Kiribati', NULL, NULL),
	(120, 'Kuwait', NULL, NULL),
	(121, 'Laos', NULL, NULL),
	(122, 'Lesotho', NULL, NULL),
	(123, 'Letonia', NULL, NULL),
	(124, 'Líbano', NULL, NULL),
	(125, 'Liberia', NULL, NULL),
	(126, 'Libia', NULL, NULL),
	(127, 'Liechtenstein', NULL, NULL),
	(128, 'Lituania', NULL, NULL),
	(129, 'Luxemburgo', NULL, NULL),
	(130, 'Macao', NULL, NULL),
	(131, 'ARY Macedonia', NULL, NULL),
	(132, 'Madagascar', NULL, NULL),
	(133, 'Malasia', NULL, NULL),
	(134, 'Malawi', NULL, NULL),
	(135, 'Maldivas', NULL, NULL),
	(136, 'Malí', NULL, NULL),
	(137, 'Malta', NULL, NULL),
	(138, 'Islas Malvinas', NULL, NULL),
	(139, 'Islas Marianas del Norte', NULL, NULL),
	(140, 'Marruecos', NULL, NULL),
	(141, 'Islas Marshall', NULL, NULL),
	(142, 'Martinica', NULL, NULL),
	(143, 'Mauricio', NULL, NULL),
	(144, 'Mauritania', NULL, NULL),
	(145, 'Mayotte', NULL, NULL),
	(146, 'México', NULL, NULL),
	(147, 'Micronesia', NULL, NULL),
	(148, 'Moldavia', NULL, NULL),
	(149, 'Mónaco', NULL, NULL),
	(150, 'Mongolia', NULL, NULL),
	(151, 'Montserrat', NULL, NULL),
	(152, 'Mozambique', NULL, NULL),
	(153, 'Myanmar', NULL, NULL),
	(154, 'Namibia', NULL, NULL),
	(155, 'Nauru', NULL, NULL),
	(156, 'Nepal', NULL, NULL),
	(157, 'Nicaragua', NULL, NULL),
	(158, 'Níger', NULL, NULL),
	(159, 'Nigeria', NULL, NULL),
	(160, 'Niue', NULL, NULL),
	(161, 'Isla Norfolk', NULL, NULL),
	(162, 'Noruega', NULL, NULL),
	(163, 'Nueva Caledonia', NULL, NULL),
	(164, 'Nueva Zelanda', NULL, NULL),
	(165, 'Omán', NULL, NULL),
	(166, 'Países Bajos', NULL, NULL),
	(167, 'Pakistán', NULL, NULL),
	(168, 'Palau', NULL, NULL),
	(169, 'Palestina', NULL, NULL),
	(170, 'Panamá', NULL, NULL),
	(171, 'Papúa Nueva Guinea', NULL, NULL),
	(172, 'Paraguay', NULL, NULL),
	(173, 'Perú', NULL, NULL),
	(174, 'Islas Pitcairn', NULL, NULL),
	(175, 'Polinesia Francesa', NULL, NULL),
	(176, 'Polonia', NULL, NULL),
	(177, 'Portugal', NULL, NULL),
	(178, 'Puerto Rico', NULL, NULL),
	(179, 'Qatar', NULL, NULL),
	(180, 'Reino Unido', NULL, NULL),
	(181, 'Reunión', NULL, NULL),
	(182, 'Ruanda', NULL, NULL),
	(183, 'Rumania', NULL, NULL),
	(184, 'Rusia', NULL, NULL),
	(185, 'Sahara Occidental', NULL, NULL),
	(186, 'Islas Salomón', NULL, NULL),
	(187, 'Samoa', NULL, NULL),
	(188, 'Samoa Americana', NULL, NULL),
	(189, 'San Cristóbal y Nevis', NULL, NULL),
	(190, 'San Marino', NULL, NULL),
	(191, 'San Pedro y Miquelón', NULL, NULL),
	(192, 'San Vicente y las Granadinas', NULL, NULL),
	(193, 'Santa Helena', NULL, NULL),
	(194, 'Santa Lucía', NULL, NULL),
	(195, 'Santo Tomé y Príncipe', NULL, NULL),
	(196, 'Senegal', NULL, NULL),
	(197, 'Serbia y Montenegro', NULL, NULL),
	(198, 'Seychelles', NULL, NULL),
	(199, 'Sierra Leona', NULL, NULL),
	(200, 'Singapur', NULL, NULL),
	(201, 'Siria', NULL, NULL),
	(202, 'Somalia', NULL, NULL),
	(203, 'Sri Lanka', NULL, NULL),
	(204, 'Suazilandia', NULL, NULL),
	(205, 'Sudáfrica', NULL, NULL),
	(206, 'Sudán', NULL, NULL),
	(207, 'Suecia', NULL, NULL),
	(208, 'Suiza', NULL, NULL),
	(209, 'Surinam', NULL, NULL),
	(210, 'Svalbard y Jan Mayen', NULL, NULL),
	(211, 'Tailandia', NULL, NULL),
	(212, 'Taiwán', NULL, NULL),
	(213, 'Tanzania', NULL, NULL),
	(214, 'Tayikistán', NULL, NULL),
	(215, 'Territorio Británico del Océano Índico', NULL, NULL),
	(216, 'Territorios Australes Franceses', NULL, NULL),
	(217, 'Timor Oriental', NULL, NULL),
	(218, 'Togo', NULL, NULL),
	(219, 'Tokelau', NULL, NULL),
	(220, 'Tonga', NULL, NULL),
	(221, 'Trinidad y Tobago', NULL, NULL),
	(222, 'Túnez', NULL, NULL),
	(223, 'Islas Turcas y Caicos', NULL, NULL),
	(224, 'Turkmenistán', NULL, NULL),
	(225, 'Turquía', NULL, NULL),
	(226, 'Tuvalu', NULL, NULL),
	(227, 'Ucrania', NULL, NULL),
	(228, 'Uganda', NULL, NULL),
	(229, 'Uruguay', NULL, NULL),
	(230, 'Uzbekistán', NULL, NULL),
	(231, 'Vanuatu', NULL, NULL),
	(232, 'Venezuela', NULL, NULL),
	(233, 'Vietnam', NULL, NULL),
	(234, 'Islas Vírgenes Británicas', NULL, NULL),
	(235, 'Islas Vírgenes de los Estados Unidos', NULL, NULL),
	(236, 'Wallis y Futuna', NULL, NULL),
	(237, 'Yemen', NULL, NULL),
	(238, 'Yibuti', NULL, NULL),
	(239, 'Zambia', NULL, NULL),
	(240, 'Zimbabue', NULL, NULL);
/*!40000 ALTER TABLE `paises` ENABLE KEYS */;

-- Volcando estructura para tabla guretabadul.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla guretabadul.password_resets: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Volcando estructura para tabla guretabadul.permissions
CREATE TABLE IF NOT EXISTS `permissions` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `table_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `permissions_key_index` (`key`)
) ENGINE=InnoDB AUTO_INCREMENT=101 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla guretabadul.permissions: ~85 rows (aproximadamente)
/*!40000 ALTER TABLE `permissions` DISABLE KEYS */;
REPLACE INTO `permissions` (`id`, `key`, `table_name`, `created_at`, `updated_at`) VALUES
	(1, 'browse_admin', NULL, '2022-01-27 11:44:28', '2022-01-27 11:44:28'),
	(2, 'browse_bread', NULL, '2022-01-27 11:44:28', '2022-01-27 11:44:28'),
	(3, 'browse_database', NULL, '2022-01-27 11:44:28', '2022-01-27 11:44:28'),
	(4, 'browse_media', NULL, '2022-01-27 11:44:28', '2022-01-27 11:44:28'),
	(5, 'browse_compass', NULL, '2022-01-27 11:44:28', '2022-01-27 11:44:28'),
	(6, 'browse_menus', 'menus', '2022-01-27 11:44:28', '2022-01-27 11:44:28'),
	(7, 'read_menus', 'menus', '2022-01-27 11:44:28', '2022-01-27 11:44:28'),
	(8, 'edit_menus', 'menus', '2022-01-27 11:44:28', '2022-01-27 11:44:28'),
	(9, 'add_menus', 'menus', '2022-01-27 11:44:28', '2022-01-27 11:44:28'),
	(10, 'delete_menus', 'menus', '2022-01-27 11:44:29', '2022-01-27 11:44:29'),
	(11, 'browse_roles', 'roles', '2022-01-27 11:44:29', '2022-01-27 11:44:29'),
	(12, 'read_roles', 'roles', '2022-01-27 11:44:29', '2022-01-27 11:44:29'),
	(13, 'edit_roles', 'roles', '2022-01-27 11:44:29', '2022-01-27 11:44:29'),
	(14, 'add_roles', 'roles', '2022-01-27 11:44:29', '2022-01-27 11:44:29'),
	(15, 'delete_roles', 'roles', '2022-01-27 11:44:29', '2022-01-27 11:44:29'),
	(16, 'browse_users', 'users', '2022-01-27 11:44:29', '2022-01-27 11:44:29'),
	(17, 'read_users', 'users', '2022-01-27 11:44:29', '2022-01-27 11:44:29'),
	(18, 'edit_users', 'users', '2022-01-27 11:44:29', '2022-01-27 11:44:29'),
	(19, 'add_users', 'users', '2022-01-27 11:44:29', '2022-01-27 11:44:29'),
	(20, 'delete_users', 'users', '2022-01-27 11:44:29', '2022-01-27 11:44:29'),
	(21, 'browse_settings', 'settings', '2022-01-27 11:44:29', '2022-01-27 11:44:29'),
	(22, 'read_settings', 'settings', '2022-01-27 11:44:30', '2022-01-27 11:44:30'),
	(23, 'edit_settings', 'settings', '2022-01-27 11:44:30', '2022-01-27 11:44:30'),
	(24, 'add_settings', 'settings', '2022-01-27 11:44:30', '2022-01-27 11:44:30'),
	(25, 'delete_settings', 'settings', '2022-01-27 11:44:30', '2022-01-27 11:44:30'),
	(26, 'browse_talleres', 'talleres', '2022-01-27 11:48:01', '2022-01-27 11:48:01'),
	(27, 'read_talleres', 'talleres', '2022-01-27 11:48:01', '2022-01-27 11:48:01'),
	(28, 'edit_talleres', 'talleres', '2022-01-27 11:48:01', '2022-01-27 11:48:01'),
	(29, 'add_talleres', 'talleres', '2022-01-27 11:48:01', '2022-01-27 11:48:01'),
	(30, 'delete_talleres', 'talleres', '2022-01-27 11:48:01', '2022-01-27 11:48:01'),
	(31, 'browse_cursos', 'cursos', '2022-01-27 11:48:16', '2022-01-27 11:48:16'),
	(32, 'read_cursos', 'cursos', '2022-01-27 11:48:16', '2022-01-27 11:48:16'),
	(33, 'edit_cursos', 'cursos', '2022-01-27 11:48:16', '2022-01-27 11:48:16'),
	(34, 'add_cursos', 'cursos', '2022-01-27 11:48:16', '2022-01-27 11:48:16'),
	(35, 'delete_cursos', 'cursos', '2022-01-27 11:48:16', '2022-01-27 11:48:16'),
	(41, 'browse_skills', 'skills', '2022-01-27 11:49:39', '2022-01-27 11:49:39'),
	(42, 'read_skills', 'skills', '2022-01-27 11:49:39', '2022-01-27 11:49:39'),
	(43, 'edit_skills', 'skills', '2022-01-27 11:49:39', '2022-01-27 11:49:39'),
	(44, 'add_skills', 'skills', '2022-01-27 11:49:39', '2022-01-27 11:49:39'),
	(45, 'delete_skills', 'skills', '2022-01-27 11:49:39', '2022-01-27 11:49:39'),
	(46, 'browse_cursos_usuarios', 'cursos_usuarios', '2022-01-27 11:49:53', '2022-01-27 11:49:53'),
	(47, 'read_cursos_usuarios', 'cursos_usuarios', '2022-01-27 11:49:53', '2022-01-27 11:49:53'),
	(48, 'edit_cursos_usuarios', 'cursos_usuarios', '2022-01-27 11:49:53', '2022-01-27 11:49:53'),
	(49, 'add_cursos_usuarios', 'cursos_usuarios', '2022-01-27 11:49:53', '2022-01-27 11:49:53'),
	(50, 'delete_cursos_usuarios', 'cursos_usuarios', '2022-01-27 11:49:53', '2022-01-27 11:49:53'),
	(56, 'browse_imagenes_talleres', 'imagenes_talleres', '2022-01-27 11:50:21', '2022-01-27 11:50:21'),
	(57, 'read_imagenes_talleres', 'imagenes_talleres', '2022-01-27 11:50:21', '2022-01-27 11:50:21'),
	(58, 'edit_imagenes_talleres', 'imagenes_talleres', '2022-01-27 11:50:21', '2022-01-27 11:50:21'),
	(59, 'add_imagenes_talleres', 'imagenes_talleres', '2022-01-27 11:50:21', '2022-01-27 11:50:21'),
	(60, 'delete_imagenes_talleres', 'imagenes_talleres', '2022-01-27 11:50:21', '2022-01-27 11:50:21'),
	(66, 'browse_matchs', 'matchs', '2022-01-27 11:53:15', '2022-01-27 11:53:15'),
	(67, 'read_matchs', 'matchs', '2022-01-27 11:53:15', '2022-01-27 11:53:15'),
	(68, 'edit_matchs', 'matchs', '2022-01-27 11:53:15', '2022-01-27 11:53:15'),
	(69, 'add_matchs', 'matchs', '2022-01-27 11:53:15', '2022-01-27 11:53:15'),
	(70, 'delete_matchs', 'matchs', '2022-01-27 11:53:15', '2022-01-27 11:53:15'),
	(71, 'browse_sponsor', 'sponsor', '2022-01-27 11:53:38', '2022-01-27 11:53:38'),
	(72, 'read_sponsor', 'sponsor', '2022-01-27 11:53:38', '2022-01-27 11:53:38'),
	(73, 'edit_sponsor', 'sponsor', '2022-01-27 11:53:38', '2022-01-27 11:53:38'),
	(74, 'add_sponsor', 'sponsor', '2022-01-27 11:53:38', '2022-01-27 11:53:38'),
	(75, 'delete_sponsor', 'sponsor', '2022-01-27 11:53:38', '2022-01-27 11:53:38'),
	(76, 'browse_intereses', 'intereses', '2022-01-27 11:54:13', '2022-01-27 11:54:13'),
	(77, 'read_intereses', 'intereses', '2022-01-27 11:54:13', '2022-01-27 11:54:13'),
	(78, 'edit_intereses', 'intereses', '2022-01-27 11:54:13', '2022-01-27 11:54:13'),
	(79, 'add_intereses', 'intereses', '2022-01-27 11:54:13', '2022-01-27 11:54:13'),
	(80, 'delete_intereses', 'intereses', '2022-01-27 11:54:13', '2022-01-27 11:54:13'),
	(91, 'browse_paises', 'paises', '2022-01-27 11:55:05', '2022-01-27 11:55:05'),
	(92, 'read_paises', 'paises', '2022-01-27 11:55:05', '2022-01-27 11:55:05'),
	(93, 'edit_paises', 'paises', '2022-01-27 11:55:05', '2022-01-27 11:55:05'),
	(94, 'add_paises', 'paises', '2022-01-27 11:55:05', '2022-01-27 11:55:05'),
	(95, 'delete_paises', 'paises', '2022-01-27 11:55:05', '2022-01-27 11:55:05'),
	(96, 'browse_imagenes_cursos', 'imagenes_cursos', '2022-02-01 12:35:16', '2022-02-01 12:35:16'),
	(97, 'read_imagenes_cursos', 'imagenes_cursos', '2022-02-01 12:35:16', '2022-02-01 12:35:16'),
	(98, 'edit_imagenes_cursos', 'imagenes_cursos', '2022-02-01 12:35:16', '2022-02-01 12:35:16'),
	(99, 'add_imagenes_cursos', 'imagenes_cursos', '2022-02-01 12:35:16', '2022-02-01 12:35:16'),
	(100, 'delete_imagenes_cursos', 'imagenes_cursos', '2022-02-01 12:35:16', '2022-02-01 12:35:16');
/*!40000 ALTER TABLE `permissions` ENABLE KEYS */;

-- Volcando estructura para tabla guretabadul.permission_role
CREATE TABLE IF NOT EXISTS `permission_role` (
  `permission_id` bigint(20) unsigned NOT NULL,
  `role_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `permission_role_permission_id_index` (`permission_id`),
  KEY `permission_role_role_id_index` (`role_id`),
  CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla guretabadul.permission_role: ~35 rows (aproximadamente)
/*!40000 ALTER TABLE `permission_role` DISABLE KEYS */;
REPLACE INTO `permission_role` (`permission_id`, `role_id`) VALUES
	(1, 1),
	(2, 1),
	(3, 1),
	(4, 1),
	(5, 1),
	(6, 1),
	(7, 1),
	(8, 1),
	(9, 1),
	(10, 1),
	(11, 1),
	(12, 1),
	(13, 1),
	(14, 1),
	(15, 1),
	(16, 1),
	(17, 1),
	(18, 1),
	(19, 1),
	(20, 1),
	(21, 1),
	(22, 1),
	(23, 1),
	(24, 1),
	(25, 1),
	(26, 1),
	(27, 1),
	(28, 1),
	(29, 1),
	(30, 1),
	(31, 1),
	(32, 1),
	(33, 1),
	(34, 1),
	(35, 1),
	(41, 1),
	(42, 1),
	(43, 1),
	(44, 1),
	(45, 1),
	(46, 1),
	(47, 1),
	(48, 1),
	(49, 1),
	(50, 1),
	(56, 1),
	(57, 1),
	(58, 1),
	(59, 1),
	(60, 1),
	(66, 1),
	(67, 1),
	(68, 1),
	(69, 1),
	(70, 1),
	(71, 1),
	(72, 1),
	(73, 1),
	(74, 1),
	(75, 1),
	(76, 1),
	(77, 1),
	(78, 1),
	(79, 1),
	(80, 1),
	(91, 1),
	(92, 1),
	(93, 1),
	(94, 1),
	(95, 1),
	(96, 1),
	(97, 1),
	(98, 1),
	(99, 1),
	(100, 1);
/*!40000 ALTER TABLE `permission_role` ENABLE KEYS */;

-- Volcando estructura para tabla guretabadul.roles
CREATE TABLE IF NOT EXISTS `roles` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla guretabadul.roles: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
REPLACE INTO `roles` (`id`, `name`, `display_name`, `created_at`, `updated_at`) VALUES
	(1, 'admin', 'Administrador', '2022-01-27 11:44:28', '2022-01-27 11:44:28'),
	(2, 'user', 'Usuario Normal', '2022-01-27 11:44:28', '2022-01-27 11:44:28');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;

-- Volcando estructura para tabla guretabadul.settings
CREATE TABLE IF NOT EXISTS `settings` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `details` text COLLATE utf8mb4_unicode_ci,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` int(11) NOT NULL DEFAULT '1',
  `group` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `settings_key_unique` (`key`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla guretabadul.settings: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `settings` DISABLE KEYS */;
REPLACE INTO `settings` (`id`, `key`, `display_name`, `value`, `details`, `type`, `order`, `group`) VALUES
	(1, 'site.title', 'Título del sitio', 'Título del sitio', '', 'text', 1, 'Site'),
	(2, 'site.description', 'Descripción del sitio', 'Descripción del sitio', '', 'text', 2, 'Site'),
	(3, 'site.logo', 'Logo del sitio', 'settings\\January2022\\AsEQCuVubuysWygyGiNT.jpg', '', 'image', 3, 'Site'),
	(4, 'site.google_analytics_tracking_id', 'ID de rastreo de Google Analytics', NULL, '', 'text', 4, 'Site'),
	(5, 'admin.bg_image', 'Imagen de fondo del administrador', 'settings\\January2022\\Nf3ci3CpVtUFCyRHOWrJ.jpg', '', 'image', 5, 'Admin'),
	(6, 'admin.title', 'Título del administrador', 'Gure Tabadul', '', 'text', 1, 'Admin'),
	(7, 'admin.description', 'Descripción del administrador', 'Bienvenido a Voyager. El administrador que le faltaba a Laravel', '', 'text', 2, 'Admin'),
	(8, 'admin.loader', 'Imagen de carga del administrador', 'settings\\January2022\\mIxaEAfMs6mIb6CeirzA.png', '', 'image', 3, 'Admin'),
	(9, 'admin.icon_image', 'Ícono del administrador', 'settings\\January2022\\uarMm3UKzQSJI4pNVShO.jpg', '', 'image', 4, 'Admin'),
	(10, 'admin.google_analytics_client_id', 'ID de Cliente para Google Analytics (usado para el tablero de administrador)', NULL, '', 'text', 1, 'Admin');
/*!40000 ALTER TABLE `settings` ENABLE KEYS */;

-- Volcando estructura para tabla guretabadul.skills
CREATE TABLE IF NOT EXISTS `skills` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla guretabadul.skills: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `skills` DISABLE KEYS */;
/*!40000 ALTER TABLE `skills` ENABLE KEYS */;

-- Volcando estructura para tabla guretabadul.skills_usuario
CREATE TABLE IF NOT EXISTS `skills_usuario` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned NOT NULL,
  `skills_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `skills_usuario_user_id_foreign` (`user_id`),
  KEY `skills_usuario_skills_id_foreign` (`skills_id`),
  CONSTRAINT `skills_usuario_skills_id_foreign` FOREIGN KEY (`skills_id`) REFERENCES `skills` (`id`),
  CONSTRAINT `skills_usuario_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla guretabadul.skills_usuario: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `skills_usuario` DISABLE KEYS */;
/*!40000 ALTER TABLE `skills_usuario` ENABLE KEYS */;

-- Volcando estructura para tabla guretabadul.sponsor
CREATE TABLE IF NOT EXISTS `sponsor` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripción` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `ruta_img_sponsor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla guretabadul.sponsor: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `sponsor` DISABLE KEYS */;
/*!40000 ALTER TABLE `sponsor` ENABLE KEYS */;

-- Volcando estructura para tabla guretabadul.talleres
CREATE TABLE IF NOT EXISTS `talleres` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `Título` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Fecha_comienzo` date NOT NULL,
  `Fecha_final` date NOT NULL,
  `Descripción` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Precio` double NOT NULL,
  `Capacidad` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla guretabadul.talleres: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `talleres` DISABLE KEYS */;
REPLACE INTO `talleres` (`id`, `Título`, `Fecha_comienzo`, `Fecha_final`, `Descripción`, `Precio`, `Capacidad`, `created_at`, `updated_at`) VALUES
	(1, 'Taller Prueba', '2022-02-18', '2022-03-10', 'Este es un taller ficticio', 14.56, 5, '2022-02-02 08:22:48', '2022-02-02 08:22:48'),
	(2, 'Segundo Taller', '2022-02-01', '2022-02-27', 'DAS DFFDSFSDSDFFSDFSD', 231521, 12, '2022-02-03 07:13:31', '2022-02-03 07:13:31'),
	(3, 'Tercer Taller', '2022-02-10', '2022-03-05', 'fsfddghfgngngnnnxnb', 152, 21, '2022-02-03 12:45:16', '2022-02-03 12:45:16');
/*!40000 ALTER TABLE `talleres` ENABLE KEYS */;

-- Volcando estructura para tabla guretabadul.talleres_usuarios
CREATE TABLE IF NOT EXISTS `talleres_usuarios` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `id_taller` bigint(20) unsigned NOT NULL,
  `user_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `talleres_usuarios_id_taller_foreign` (`id_taller`),
  KEY `talleres_usuarios_user_id_foreign` (`user_id`),
  CONSTRAINT `talleres_usuarios_id_taller_foreign` FOREIGN KEY (`id_taller`) REFERENCES `talleres` (`id`),
  CONSTRAINT `talleres_usuarios_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla guretabadul.talleres_usuarios: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `talleres_usuarios` DISABLE KEYS */;
/*!40000 ALTER TABLE `talleres_usuarios` ENABLE KEYS */;

-- Volcando estructura para tabla guretabadul.translations
CREATE TABLE IF NOT EXISTS `translations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `table_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `column_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foreign_key` int(10) unsigned NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `translations_table_name_column_name_foreign_key_locale_unique` (`table_name`,`column_name`,`foreign_key`,`locale`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla guretabadul.translations: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `translations` DISABLE KEYS */;
/*!40000 ALTER TABLE `translations` ENABLE KEYS */;

-- Volcando estructura para tabla guretabadul.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `role_id` bigint(20) unsigned DEFAULT '2',
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'users/default.png',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Fecha_nac` date DEFAULT NULL,
  `telefono` int(11) DEFAULT NULL,
  `direccion_facturacion` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pais_id` bigint(20) unsigned DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `settings` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  KEY `users_pais_id_foreign` (`pais_id`),
  KEY `users_role_id_foreign` (`role_id`),
  CONSTRAINT `users_pais_id_foreign` FOREIGN KEY (`pais_id`) REFERENCES `paises` (`id`),
  CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla guretabadul.users: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
REPLACE INTO `users` (`id`, `role_id`, `name`, `email`, `avatar`, `email_verified_at`, `password`, `Fecha_nac`, `telefono`, `direccion_facturacion`, `pais_id`, `remember_token`, `settings`, `created_at`, `updated_at`) VALUES
	(1, 1, 'jorge', 'jordioni1705@gmail.com', 'users\\January2022\\27WbwJT8aBdHHJwqmdTm.PNG', NULL, '$2y$10$erJYN9b25LnDbo5aPZ4cW.x1qaq5ziuihSETWOZ5g00HMsiiBCkfu', '2022-01-23', NULL, NULL, 73, NULL, '{"locale":"es"}', '2022-01-27 11:47:17', '2022-01-28 09:48:08');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

-- Volcando estructura para tabla guretabadul.user_roles
CREATE TABLE IF NOT EXISTS `user_roles` (
  `user_id` bigint(20) unsigned NOT NULL,
  `role_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`user_id`,`role_id`),
  KEY `user_roles_user_id_index` (`user_id`),
  KEY `user_roles_role_id_index` (`role_id`),
  CONSTRAINT `user_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  CONSTRAINT `user_roles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla guretabadul.user_roles: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `user_roles` DISABLE KEYS */;
/*!40000 ALTER TABLE `user_roles` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
