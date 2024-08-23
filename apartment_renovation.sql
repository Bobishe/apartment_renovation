-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Авг 23 2024 г., 04:30
-- Версия сервера: 10.4.32-MariaDB
-- Версия PHP: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `apartment_renovation`
--

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `parent_id` int(10) UNSIGNED DEFAULT NULL,
  `order` int(11) NOT NULL DEFAULT 1,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `parent_id`, `order`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, NULL, 1, 'Category 1', 'category-1', '2024-08-19 07:21:39', '2024-08-19 07:21:39'),
(2, NULL, 1, 'Category 2', 'category-2', '2024-08-19 07:21:39', '2024-08-19 07:21:39');

-- --------------------------------------------------------

--
-- Структура таблицы `data_rows`
--

CREATE TABLE `data_rows` (
  `id` int(10) UNSIGNED NOT NULL,
  `data_type_id` int(10) UNSIGNED NOT NULL,
  `field` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `display_name` varchar(255) NOT NULL,
  `required` tinyint(1) NOT NULL DEFAULT 0,
  `browse` tinyint(1) NOT NULL DEFAULT 1,
  `read` tinyint(1) NOT NULL DEFAULT 1,
  `edit` tinyint(1) NOT NULL DEFAULT 1,
  `add` tinyint(1) NOT NULL DEFAULT 1,
  `delete` tinyint(1) NOT NULL DEFAULT 1,
  `details` text DEFAULT NULL,
  `order` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `data_rows`
--

INSERT INTO `data_rows` (`id`, `data_type_id`, `field`, `type`, `display_name`, `required`, `browse`, `read`, `edit`, `add`, `delete`, `details`, `order`) VALUES
(1, 1, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(2, 1, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 2),
(3, 1, 'email', 'text', 'Email', 1, 1, 1, 1, 1, 1, NULL, 3),
(4, 1, 'password', 'password', 'Password', 1, 0, 0, 1, 1, 0, NULL, 4),
(5, 1, 'remember_token', 'text', 'Remember Token', 0, 0, 0, 0, 0, 0, NULL, 5),
(6, 1, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 0, 0, 0, NULL, 6),
(7, 1, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 7),
(8, 1, 'avatar', 'image', 'Avatar', 0, 1, 1, 1, 1, 1, NULL, 8),
(9, 1, 'user_belongsto_role_relationship', 'relationship', 'Role', 0, 1, 1, 1, 1, 0, '{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsTo\",\"column\":\"role_id\",\"key\":\"id\",\"label\":\"display_name\",\"pivot_table\":\"roles\",\"pivot\":0}', 10),
(10, 1, 'user_belongstomany_role_relationship', 'relationship', 'Roles', 0, 1, 1, 1, 1, 0, '{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsToMany\",\"column\":\"id\",\"key\":\"id\",\"label\":\"display_name\",\"pivot_table\":\"user_roles\",\"pivot\":\"1\",\"taggable\":\"0\"}', 11),
(11, 1, 'settings', 'hidden', 'Settings', 0, 0, 0, 0, 0, 0, NULL, 12),
(12, 2, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(13, 2, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 2),
(14, 2, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, NULL, 3),
(15, 2, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 4),
(16, 3, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(17, 3, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 2),
(18, 3, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, NULL, 3),
(19, 3, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 4),
(20, 3, 'display_name', 'text', 'Display Name', 1, 1, 1, 1, 1, 1, NULL, 5),
(21, 1, 'role_id', 'text', 'Role', 1, 1, 1, 1, 1, 1, NULL, 9),
(22, 4, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(23, 4, 'parent_id', 'select_dropdown', 'Parent', 0, 0, 1, 1, 1, 1, '{\"default\":\"\",\"null\":\"\",\"options\":{\"\":\"-- None --\"},\"relationship\":{\"key\":\"id\",\"label\":\"name\"}}', 2),
(24, 4, 'order', 'text', 'Order', 1, 1, 1, 1, 1, 1, '{\"default\":1}', 3),
(25, 4, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 4),
(26, 4, 'slug', 'text', 'Slug', 1, 1, 1, 1, 1, 1, '{\"slugify\":{\"origin\":\"name\"}}', 5),
(27, 4, 'created_at', 'timestamp', 'Created At', 0, 0, 1, 0, 0, 0, NULL, 6),
(28, 4, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 7),
(29, 5, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(30, 5, 'author_id', 'text', 'Author', 1, 0, 1, 1, 0, 1, NULL, 2),
(31, 5, 'category_id', 'text', 'Category', 1, 0, 1, 1, 1, 0, NULL, 3),
(32, 5, 'title', 'text', 'Title', 1, 1, 1, 1, 1, 1, NULL, 4),
(33, 5, 'excerpt', 'text_area', 'Excerpt', 1, 0, 1, 1, 1, 1, NULL, 5),
(34, 5, 'body', 'rich_text_box', 'Body', 1, 0, 1, 1, 1, 1, NULL, 6),
(35, 5, 'image', 'image', 'Post Image', 0, 1, 1, 1, 1, 1, '{\"resize\":{\"width\":\"1000\",\"height\":\"null\"},\"quality\":\"70%\",\"upsize\":true,\"thumbnails\":[{\"name\":\"medium\",\"scale\":\"50%\"},{\"name\":\"small\",\"scale\":\"25%\"},{\"name\":\"cropped\",\"crop\":{\"width\":\"300\",\"height\":\"250\"}}]}', 7),
(36, 5, 'slug', 'text', 'Slug', 1, 0, 1, 1, 1, 1, '{\"slugify\":{\"origin\":\"title\",\"forceUpdate\":true},\"validation\":{\"rule\":\"unique:posts,slug\"}}', 8),
(37, 5, 'meta_description', 'text_area', 'Meta Description', 1, 0, 1, 1, 1, 1, NULL, 9),
(38, 5, 'meta_keywords', 'text_area', 'Meta Keywords', 1, 0, 1, 1, 1, 1, NULL, 10),
(39, 5, 'status', 'select_dropdown', 'Status', 1, 1, 1, 1, 1, 1, '{\"default\":\"DRAFT\",\"options\":{\"PUBLISHED\":\"published\",\"DRAFT\":\"draft\",\"PENDING\":\"pending\"}}', 11),
(40, 5, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 0, 0, 0, NULL, 12),
(41, 5, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 13),
(42, 5, 'seo_title', 'text', 'SEO Title', 0, 1, 1, 1, 1, 1, NULL, 14),
(43, 5, 'featured', 'checkbox', 'Featured', 1, 1, 1, 1, 1, 1, NULL, 15),
(44, 6, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(45, 6, 'author_id', 'text', 'Author', 1, 0, 0, 0, 0, 0, NULL, 2),
(46, 6, 'title', 'text', 'Title', 1, 1, 1, 1, 1, 1, NULL, 3),
(47, 6, 'excerpt', 'text_area', 'Excerpt', 1, 0, 1, 1, 1, 1, NULL, 4),
(48, 6, 'body', 'rich_text_box', 'Body', 1, 0, 1, 1, 1, 1, NULL, 5),
(49, 6, 'slug', 'text', 'Slug', 1, 0, 1, 1, 1, 1, '{\"slugify\":{\"origin\":\"title\"},\"validation\":{\"rule\":\"unique:pages,slug\"}}', 6),
(50, 6, 'meta_description', 'text', 'Meta Description', 1, 0, 1, 1, 1, 1, NULL, 7),
(51, 6, 'meta_keywords', 'text', 'Meta Keywords', 1, 0, 1, 1, 1, 1, NULL, 8),
(52, 6, 'status', 'select_dropdown', 'Status', 1, 1, 1, 1, 1, 1, '{\"default\":\"INACTIVE\",\"options\":{\"INACTIVE\":\"INACTIVE\",\"ACTIVE\":\"ACTIVE\"}}', 9),
(53, 6, 'created_at', 'timestamp', 'Created At', 1, 1, 1, 0, 0, 0, NULL, 10),
(54, 6, 'updated_at', 'timestamp', 'Updated At', 1, 0, 0, 0, 0, 0, NULL, 11),
(55, 6, 'image', 'image', 'Page Image', 0, 1, 1, 1, 1, 1, NULL, 12),
(64, 12, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(65, 12, 'title', 'text', 'Title', 1, 1, 1, 1, 1, 1, '{}', 2),
(67, 12, 'image', 'multiple_images', 'Image', 1, 1, 1, 1, 1, 1, '{}', 4),
(70, 12, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 7),
(71, 12, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 8),
(72, 12, 'url', 'text', 'Url', 1, 1, 1, 1, 1, 1, '{}', 5),
(73, 12, 'adres', 'text', 'Adres', 1, 1, 1, 1, 1, 1, '{}', 3),
(74, 12, 'area', 'text', 'Area', 1, 1, 1, 1, 1, 1, '{}', 8);

-- --------------------------------------------------------

--
-- Структура таблицы `data_types`
--

CREATE TABLE `data_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `display_name_singular` varchar(255) NOT NULL,
  `display_name_plural` varchar(255) NOT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `model_name` varchar(255) DEFAULT NULL,
  `policy_name` varchar(255) DEFAULT NULL,
  `controller` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `generate_permissions` tinyint(1) NOT NULL DEFAULT 0,
  `server_side` tinyint(4) NOT NULL DEFAULT 0,
  `details` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `data_types`
--

INSERT INTO `data_types` (`id`, `name`, `slug`, `display_name_singular`, `display_name_plural`, `icon`, `model_name`, `policy_name`, `controller`, `description`, `generate_permissions`, `server_side`, `details`, `created_at`, `updated_at`) VALUES
(1, 'users', 'users', 'User', 'Users', 'voyager-person', 'TCG\\Voyager\\Models\\User', 'TCG\\Voyager\\Policies\\UserPolicy', 'TCG\\Voyager\\Http\\Controllers\\VoyagerUserController', '', 1, 0, NULL, '2024-08-19 07:21:26', '2024-08-19 07:21:26'),
(2, 'menus', 'menus', 'Menu', 'Menus', 'voyager-list', 'TCG\\Voyager\\Models\\Menu', NULL, '', '', 1, 0, NULL, '2024-08-19 07:21:26', '2024-08-19 07:21:26'),
(3, 'roles', 'roles', 'Role', 'Roles', 'voyager-lock', 'TCG\\Voyager\\Models\\Role', NULL, 'TCG\\Voyager\\Http\\Controllers\\VoyagerRoleController', '', 1, 0, NULL, '2024-08-19 07:21:26', '2024-08-19 07:21:26'),
(4, 'categories', 'categories', 'Category', 'Categories', 'voyager-categories', 'TCG\\Voyager\\Models\\Category', NULL, '', '', 1, 0, NULL, '2024-08-19 07:21:39', '2024-08-19 07:21:39'),
(5, 'posts', 'posts', 'Post', 'Posts', 'voyager-news', 'TCG\\Voyager\\Models\\Post', 'TCG\\Voyager\\Policies\\PostPolicy', '', '', 1, 0, NULL, '2024-08-19 07:21:39', '2024-08-19 07:21:39'),
(6, 'pages', 'pages', 'Page', 'Pages', 'voyager-file-text', 'TCG\\Voyager\\Models\\Page', NULL, '', '', 1, 0, NULL, '2024-08-19 07:21:40', '2024-08-19 07:21:40'),
(12, 'works', 'works', 'Work', 'Наши работы', 'voyager-window-list', 'App\\Models\\Work', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2024-08-20 21:57:55', '2024-08-20 22:12:36');

-- --------------------------------------------------------

--
-- Структура таблицы `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `menus`
--

CREATE TABLE `menus` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `menus`
--

INSERT INTO `menus` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'admin', '2024-08-19 07:21:26', '2024-08-19 07:21:26');

-- --------------------------------------------------------

--
-- Структура таблицы `menu_items`
--

CREATE TABLE `menu_items` (
  `id` int(10) UNSIGNED NOT NULL,
  `menu_id` int(10) UNSIGNED DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `target` varchar(255) NOT NULL DEFAULT '_self',
  `icon_class` varchar(255) DEFAULT NULL,
  `color` varchar(255) DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `order` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `route` varchar(255) DEFAULT NULL,
  `parameters` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `menu_items`
--

INSERT INTO `menu_items` (`id`, `menu_id`, `title`, `url`, `target`, `icon_class`, `color`, `parent_id`, `order`, `created_at`, `updated_at`, `route`, `parameters`) VALUES
(1, 1, 'Dashboard', '', '_self', 'voyager-boat', NULL, NULL, 1, '2024-08-19 07:21:26', '2024-08-19 07:21:26', 'voyager.dashboard', NULL),
(2, 1, 'Media', '', '_self', 'voyager-images', NULL, NULL, 4, '2024-08-19 07:21:26', '2024-08-20 22:00:22', 'voyager.media.index', NULL),
(3, 1, 'Users', '', '_self', 'voyager-person', NULL, NULL, 3, '2024-08-19 07:21:26', '2024-08-19 07:21:26', 'voyager.users.index', NULL),
(4, 1, 'Roles', '', '_self', 'voyager-lock', NULL, NULL, 2, '2024-08-19 07:21:26', '2024-08-19 07:21:26', 'voyager.roles.index', NULL),
(5, 1, 'Tools', '', '_self', 'voyager-tools', NULL, NULL, 9, '2024-08-19 07:21:26', '2024-08-19 07:21:26', NULL, NULL),
(6, 1, 'Menu Builder', '', '_self', 'voyager-list', NULL, 5, 1, '2024-08-19 07:21:26', '2024-08-20 22:00:22', 'voyager.menus.index', NULL),
(7, 1, 'Database', '', '_self', 'voyager-data', NULL, 5, 2, '2024-08-19 07:21:26', '2024-08-20 22:00:22', 'voyager.database.index', NULL),
(8, 1, 'Compass', '', '_self', 'voyager-compass', NULL, 5, 3, '2024-08-19 07:21:26', '2024-08-20 22:00:22', 'voyager.compass.index', NULL),
(9, 1, 'BREAD', '', '_self', 'voyager-bread', NULL, 5, 4, '2024-08-19 07:21:26', '2024-08-20 22:00:22', 'voyager.bread.index', NULL),
(10, 1, 'Settings', '', '_self', 'voyager-settings', NULL, NULL, 10, '2024-08-19 07:21:26', '2024-08-20 22:00:22', 'voyager.settings.index', NULL),
(11, 1, 'Categories', '', '_self', 'voyager-categories', NULL, NULL, 8, '2024-08-19 07:21:39', '2024-08-19 07:21:39', 'voyager.categories.index', NULL),
(12, 1, 'Posts', '', '_self', 'voyager-news', NULL, NULL, 5, '2024-08-19 07:21:40', '2024-08-20 22:00:22', 'voyager.posts.index', NULL),
(13, 1, 'Pages', '', '_self', 'voyager-file-text', NULL, NULL, 6, '2024-08-19 07:21:40', '2024-08-20 22:00:22', 'voyager.pages.index', NULL),
(15, 1, 'Наши работы', '', '_self', NULL, NULL, NULL, 7, '2024-08-20 21:57:55', '2024-08-20 22:00:22', 'voyager.works.index', NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2016_01_01_000000_add_voyager_user_fields', 1),
(4, '2016_01_01_000000_create_data_types_table', 1),
(5, '2016_05_19_173453_create_menu_table', 1),
(6, '2016_10_21_190000_create_roles_table', 1),
(7, '2016_10_21_190000_create_settings_table', 1),
(8, '2016_11_30_135954_create_permission_table', 1),
(9, '2016_11_30_141208_create_permission_role_table', 1),
(10, '2016_12_26_201236_data_types__add__server_side', 1),
(11, '2017_01_13_000000_add_route_to_menu_items_table', 1),
(12, '2017_01_14_005015_create_translations_table', 1),
(13, '2017_01_15_000000_make_table_name_nullable_in_permissions_table', 1),
(14, '2017_03_06_000000_add_controller_to_data_types_table', 1),
(15, '2017_04_21_000000_add_order_to_data_rows_table', 1),
(16, '2017_07_05_210000_add_policyname_to_data_types_table', 1),
(17, '2017_08_05_000000_add_group_to_settings_table', 1),
(18, '2017_11_26_013050_add_user_role_relationship', 1),
(19, '2017_11_26_015000_create_user_roles_table', 1),
(20, '2018_03_11_000000_add_user_settings', 1),
(21, '2018_03_14_000000_add_details_to_data_types_table', 1),
(22, '2018_03_16_000000_make_settings_value_nullable', 1),
(23, '2019_08_19_000000_create_failed_jobs_table', 1),
(24, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(25, '2016_01_01_000000_create_pages_table', 2),
(26, '2016_01_01_000000_create_posts_table', 2),
(27, '2016_02_15_204651_create_categories_table', 2),
(28, '2017_04_11_000000_alter_post_nullable_fields_table', 2),
(29, '2024_08_20_133119_create_works_table', 3);

-- --------------------------------------------------------

--
-- Структура таблицы `pages`
--

CREATE TABLE `pages` (
  `id` int(10) UNSIGNED NOT NULL,
  `author_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `excerpt` text DEFAULT NULL,
  `body` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `slug` varchar(255) NOT NULL,
  `meta_description` text DEFAULT NULL,
  `meta_keywords` text DEFAULT NULL,
  `status` enum('ACTIVE','INACTIVE') NOT NULL DEFAULT 'INACTIVE',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `pages`
--

INSERT INTO `pages` (`id`, `author_id`, `title`, `excerpt`, `body`, `image`, `slug`, `meta_description`, `meta_keywords`, `status`, `created_at`, `updated_at`) VALUES
(1, 2, 'index', 'Hang the jib grog grog blossom grapple dance the hempen jig gangway pressgang bilge rat to go on account lugger. Nelsons folly gabion line draught scallywag fire ship gaff fluke fathom case shot. Sea Legs bilge rat sloop matey gabion long clothes run a shot across the bow Gold Road cog league.', '<div class=\" position-relative text-center d-flex align-items-center justify-content-center\" style=\"height: 50vh;\">\r\n<div class=\"overlay-content\">\r\n<h1 class=\"text-white fw-bold\">ПРОИЗВОДИМ РЕМОНТ КВАРТИР В КРАСНОЯРСКЕ</h1>\r\n<div class=\"d-flex flex-wrap justify-content-center mt-4\"><a class=\"fs-lg-5 btn btn-success m-2 fw-bolder\">Ремонт квартир под ключ</a> <a class=\"btn btn-success m-2 fw-bolder fs-lg-5\">Дизайн интерьера</a> <a class=\"btn btn-success m-2 fw-bolder fs-lg-5\">Комплектация материалами</a> <a class=\"btn btn-success m-2 fw-bolder fs-lg-5\">Внутренняя отделка домов и коттеджей</a> <a class=\"btn btn-success m-2 fw-bolder fs-lg-5\">Гарантия на ремонт 24 месяца</a></div>\r\n<a class=\"btn btn-success mt-5 pulsing-btn\" href=\"#\">Заказать ремонт</a></div>\r\n</div>\r\n<div class=\"row justify-content-center my-mt-5\">\r\n<div class=\"col-md-4\">\r\n<div class=\"discount-card text-center position-relative\">\r\n<figure class=\"image\"><img class=\"img-fluid rounded\" src=\"http://127.0.0.1:8000/img/Обложка.-Скидка-на-ремонт-под-ключ-300x300.png\" alt=\"Скидка\" width=\"300\" height=\"300\">\r\n<figcaption></figcaption>\r\n</figure>\r\n</div>\r\n</div>\r\n<div class=\"col-md-4 d-flex align-items-center\">\r\n<div class=\"discount-box text-center p-4\">\r\n<h4 class=\"text-success fw-bold\">ПРИ ЗАКАЗЕ КАПИТАЛЬНОГО РЕМОНТА КВАРТИРЫ ПОД КЛЮЧ</h4>\r\n<h2 class=\"text-danger fw-bold pulsing-text\">СКИДКА 10%</h2>\r\n<p class=\"text-success\">НА ВСЕ ВИДЫ РЕМОНТНО-ОТДЕЛОЧНЫХ РАБОТ!</p>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"container my-5 \">\r\n<div class=\"row justify-content-center\">\r\n<div class=\"col-md-10\">\r\n<h2 class=\"text-center text-primary fw-bold mb-4\">О НАШЕЙ КОМПАНИИ</h2>\r\n<div class=\"modern-box p-4 rounded shadow-sm\" style=\"font-size: 18px;\">\r\n<p class=\"mb-3\">Наша компания осуществляет: капитальный, дизайнерский, комплексный, косметический и бюджетный ремонт квартир под ключ в Красноярске.</p>\r\n<p class=\"mb-3\">На нашем сайте вы можете ознакомиться с <a class=\"text-primary fw-bold\" href=\"#\">ценами</a> на ремонт квартир в Красноярске, домов и нежилых помещений, почитать <a class=\"text-primary fw-bold\" href=\"#\">полезные советы</a> о ремонте, найти <a class=\"text-primary fw-bold\" href=\"#\">ответы</a> на интересующие вопросы, посмотреть на преображение квартир после ремонта в разделах <a class=\"text-primary fw-bold\" href=\"#\">фото</a> и <a class=\"text-primary fw-bold\" href=\"#\">видео отчеты</a>, изучить <a class=\"text-primary fw-bold\" href=\"#\">отзывы</a> о нашей работе и многое другое.</p>\r\n<p class=\"mb-3\">Мы надеемся, Вы найдете у нас то, что ищете!</p>\r\n<p class=\"text-danger fw-bold text-end\">С уважением, компания по ремонту квартир ИП ПОКИВАЙЛОВ!</p>\r\n</div>\r\n</div>\r\n</div>\r\n</div>', 'pages\\August2024\\kusIeRX5m5kk17LiBhl6.png', 'index', 'Yar Meta Description', 'Keyword1, Keyword2', 'ACTIVE', '2024-08-19 07:21:40', '2024-08-20 22:29:54'),
(2, 2, 'about', 'dsfd', '<div class=\"container mt-5\">\r\n<h2 class=\"text-center text-danger fw-bold mb-4\">Компания по ремонту квартир в Красноярске</h2>\r\n<p class=\"lead\">Мы осуществляем ремонт квартир в Красноярске. Компания ИП Покивайлов начала свою деятельность в 2018 году. Основной профиль &mdash; это ремонт квартир под ключ, включающий электромонтажные и сантехнические работы, перепланировка жилья, возведение межкомнатных конструкций, выравнивание поверхностей, укладка плитки, чистовая отделка, монтаж натяжного потолка и установка дверей.</p>\r\n<p class=\"lead\">В компании строго определяются задачи среди сотрудников. Принятие заявки на ремонт осуществляется менеджерами, инженеры-сметчики консультируют, проводят осмотр помещения и составляют ремонтный комплекс, прорабы контролируют ход ремонта, закупают необходимый материал и дают техническое задание мастерам.</p>\r\n<p class=\"lead\">Штат сотрудников компании насчитывает 117 высококвалифицированных сотрудников: электрики, сантехники, отделочники, плиточники, мастера по установке дверей, специалисты по монтажу натяжных потолков. Ребята уже проверенные временем, подтвердившие свою квалификацию немалым списком законченных объектов на 5+.</p>\r\n</div>\r\n<div class=\"container my-5\">\r\n<h2 class=\"text-center text-danger fw-bold mb-4\">Документы на ремонт квартиры</h2>\r\n<div class=\"row\">\r\n<div class=\"col-md-4 mb-4\"><img class=\"img-fluid document-image\" src=\"http://127.0.0.1:8000/img/docs/EGRIP-str.-1.png\" alt=\"Документ 1\" data-bs-toggle=\"modal\" data-bs-target=\"#documentModal1\"></div>\r\n<div class=\"col-md-4 mb-4\"><img class=\"img-fluid document-image\" src=\"http://127.0.0.1:8000/img/docs/EGRIP-str.-2.png\" alt=\"Документ 2\" data-bs-toggle=\"modal\" data-bs-target=\"#documentModal2\"></div>\r\n<div class=\"col-md-4 mb-4\"><img class=\"img-fluid document-image\" src=\"http://127.0.0.1:8000/img/docs/EGRIP-str.-3.png\" alt=\"Документ 3\" data-bs-toggle=\"modal\" data-bs-target=\"#documentModal3\"></div>\r\n<div class=\"col-md-4 mb-4\"><img class=\"img-fluid document-image\" src=\"http://127.0.0.1:8000/img/docs/EGRIP-str.-4.png\" alt=\"Документ 3\" data-bs-toggle=\"modal\" data-bs-target=\"#documentModal4\"></div>\r\n<div class=\"col-md-4 mb-4\"><img class=\"img-fluid document-image\" src=\"http://127.0.0.1:8000/img/docs/EGRIP-str.-5.png\" alt=\"Документ 3\" data-bs-toggle=\"modal\" data-bs-target=\"#documentModal5\"></div>\r\n<div class=\"col-md-4 mb-4\"><img class=\"img-fluid document-image\" src=\"http://127.0.0.1:8000/img/docs/EGRIP-str.-6.png\" alt=\"Документ 3\" data-bs-toggle=\"modal\" data-bs-target=\"#documentModal6\"></div>\r\n</div>\r\n</div>\r\n<!-- Модальные окна для увеличения изображений -->\r\n<div id=\"documentModal1\" class=\"modal fade\" tabindex=\"-1\" aria-labelledby=\"documentModal1Label\" aria-hidden=\"true\">\r\n<div class=\"modal-dialog modal-dialog-centered\">\r\n<div class=\"modal-content\">\r\n<div class=\"modal-body p-0\"><img class=\"img-fluid\" src=\"http://127.0.0.1:8000/img/docs/EGRIP-str.-1.png\" alt=\"Документ 1\"></div>\r\n</div>\r\n</div>\r\n</div>\r\n<div id=\"documentModal2\" class=\"modal fade\" tabindex=\"-1\" aria-labelledby=\"documentModal2Label\" aria-hidden=\"true\">\r\n<div class=\"modal-dialog modal-dialog-centered\">\r\n<div class=\"modal-content\">\r\n<div class=\"modal-body p-0\"><img class=\"img-fluid\" src=\"http://127.0.0.1:8000/img/docs/EGRIP-str.-2.png\" alt=\"Документ 2\"></div>\r\n</div>\r\n</div>\r\n</div>\r\n<div id=\"documentModal3\" class=\"modal fade\" tabindex=\"-1\" aria-labelledby=\"documentModal3Label\" aria-hidden=\"true\">\r\n<div class=\"modal-dialog modal-dialog-centered\">\r\n<div class=\"modal-content\">\r\n<div class=\"modal-body p-0\"><img class=\"img-fluid\" src=\"http://127.0.0.1:8000/img/docs/EGRIP-str.-3.png\" alt=\"Документ 3\"></div>\r\n</div>\r\n</div>\r\n</div>\r\n<div id=\"documentModal4\" class=\"modal fade\" tabindex=\"-1\" aria-labelledby=\"documentModal4Label\" aria-hidden=\"true\">\r\n<div class=\"modal-dialog modal-dialog-centered\">\r\n<div class=\"modal-content\">\r\n<div class=\"modal-body p-0\"><img class=\"img-fluid\" src=\"http://127.0.0.1:8000/img/docs/EGRIP-str.-4.png\" alt=\"Документ 1\"></div>\r\n</div>\r\n</div>\r\n</div>\r\n<div id=\"documentModal5\" class=\"modal fade\" tabindex=\"-1\" aria-labelledby=\"documentModal5Label\" aria-hidden=\"true\">\r\n<div class=\"modal-dialog modal-dialog-centered\">\r\n<div class=\"modal-content\">\r\n<div class=\"modal-body p-0\"><img class=\"img-fluid\" src=\"http://127.0.0.1:8000/img/docs/EGRIP-str.-5.png\" alt=\"Документ 2\"></div>\r\n</div>\r\n</div>\r\n</div>\r\n<div id=\"documentModal6\" class=\"modal fade\" tabindex=\"-1\" aria-labelledby=\"documentModal6Label\" aria-hidden=\"true\">\r\n<div class=\"modal-dialog modal-dialog-centered\">\r\n<div class=\"modal-content\">\r\n<div class=\"modal-body p-0\"><img class=\"img-fluid\" src=\"http://127.0.0.1:8000/img/docs/EGRIP-str.-6.png\" alt=\"Документ 3\"></div>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"container my-5\">\r\n<h2 class=\"text-center text-danger fw-bold mb-4\">Образец договора бытового подряда</h2>\r\n<p class=\"text-center\">Многие Заказчики, прежде чем выбрать подрядчика для выполнения ремонта, изъявляют желание ознакомиться с образцом договора бытового подряда. Это поможет удостовериться, что компания учитывает интересы клиента, предоставляет обещанную гарантию и соблюдает закон о защите прав потребителя.</p>\r\n<p class=\"text-center\">Вы можете подробно изучить все условия дальнейшего сотрудничества, которые мы предлагаем.</p>\r\n<div class=\"row justify-content-center mt-5\">\r\n<div class=\"col-md-4 mb-4\"><img class=\"img-fluid document-image\" src=\"http://127.0.0.1:8000/img/docs/blank-dogovora-str.-1.png\" alt=\"Договор 1\" data-bs-toggle=\"modal\" data-bs-target=\"#contractModal1\"></div>\r\n<div class=\"col-md-4 mb-4\"><img class=\"img-fluid document-image\" src=\"http://127.0.0.1:8000/img/docs/blank-dogovora-str.-2.png\" alt=\"Договор 2\" data-bs-toggle=\"modal\" data-bs-target=\"#contractModal2\"></div>\r\n<div class=\"col-md-4 mb-4\"><img class=\"img-fluid document-image\" src=\"http://127.0.0.1:8000/img/docs/blank-dogovora-str.-3.png\" alt=\"Договор 3\" data-bs-toggle=\"modal\" data-bs-target=\"#contractModal3\"></div>\r\n</div>\r\n</div>\r\n<!-- Модальные окна для увеличения изображений -->\r\n<div id=\"contractModal1\" class=\"modal fade\" tabindex=\"-1\" aria-labelledby=\"contractModal1Label\" aria-hidden=\"true\">\r\n<div class=\"modal-dialog modal-dialog-centered\">\r\n<div class=\"modal-content\">\r\n<div class=\"modal-body p-0\"><img class=\"img-fluid\" src=\"http://127.0.0.1:8000/img/docs/blank-dogovora-str.-1.png\" alt=\"Договор 1\"></div>\r\n</div>\r\n</div>\r\n</div>\r\n<div id=\"contractModal2\" class=\"modal fade\" tabindex=\"-1\" aria-labelledby=\"contractModal2Label\" aria-hidden=\"true\">\r\n<div class=\"modal-dialog modal-dialog-centered\">\r\n<div class=\"modal-content\">\r\n<div class=\"modal-body p-0\"><img class=\"img-fluid\" src=\"http://127.0.0.1:8000/img/docs/blank-dogovora-str.-2.png\" alt=\"Договор 2\"></div>\r\n</div>\r\n</div>\r\n</div>\r\n<div id=\"contractModal3\" class=\"modal fade\" tabindex=\"-1\" aria-labelledby=\"contractModal3Label\" aria-hidden=\"true\">\r\n<div class=\"modal-dialog modal-dialog-centered\">\r\n<div class=\"modal-content\">\r\n<div class=\"modal-body p-0\"><img class=\"img-fluid\" src=\"http://127.0.0.1:8000/img/docs/blank-dogovora-str.-3.png\" alt=\"Договор 3\"></div>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"container my-5\">\r\n<h2 class=\"text-center text-danger fw-bold mb-4\">Гарантийные обязательства нашей организации</h2>\r\n<div class=\"p-4 border border-success rounded\">\r\n<p>Компания &laquo;ИП ПОКИВАЙЛОВ&raquo; имеет опыт в строительно-отделочных работах различной сложности. Ремонтные работы производятся согласно ГОСТам, СНиПам и законодательству РФ.</p>\r\n<p>Предоставляется гарантия на все виды ремонтно-отделочных работ. Компания не несет ответственности в случаях:</p>\r\n<ul>\r\n<li>форс-мажорных ситуациях: землетрясения, затопления, пожара, протекания межпанельных швов;</li>\r\n<li>проведение ремонта лично Заказчиком или третьими лицами;</li>\r\n<li>приобретение Заказчиком некачественного материала.</li>\r\n</ul>\r\n<p>Срок гарантии должен быть прописан в договоре бытового подряда, подписанном между Заказчиком и исполнителем.</p>\r\n<p>Обо всех недостатках Заказчик должен сообщить исполнителю в период, указанный в договоре. Отсчёт ведётся с того момента, когда Заказчик принял работу, и был подписан акт приёма-сдачи работ.</p>\r\n<p>Предоставленная выше информация может использоваться свидетельским документом как Заказчика, так и подрядчика. Поэтому наличие указанной гарантии на выполнение работ в договоре подчеркивает добросовестность и ответственность строительной компании, с которой Вы подписываете договор на ремонт своей квартиры.</p>\r\n</div>\r\n<h2 class=\"text-center text-danger fw-bold my-5\">Наша фирма выполняет ремонт в квартирах Красноярска</h2>\r\n<div class=\"px-4\">\r\n<p>Виды ремонта квартир, домов и нежилых помещений бывают разные:</p>\r\n<ul class=\"list-unstyled\">\r\n<li class=\"text-success\">&mdash; Капитальный;</li>\r\n<li class=\"text-success\">&mdash; Под ключ;</li>\r\n<li class=\"text-success\">&mdash; Косметический;</li>\r\n<li class=\"text-success\">&mdash; Комплексный ремонт в новостройке;</li>\r\n<li class=\"text-success\">&mdash; Евроремонт (элитный и эксклюзивный);</li>\r\n<li class=\"text-success\">&mdash; Дизайнерский;</li>\r\n<li class=\"text-success\">&mdash; Бюджетный.</li>\r\n</ul>\r\n</div>\r\n</div>\r\n<div class=\"container my-5\">\r\n<h2 class=\"text-center text-danger fw-bold mb-4\">Этапы ремонта квартиры</h2>\r\n<div class=\"row text-center\">\r\n<div class=\"col-md-4 mb-4\">\r\n<div class=\"icon text-center\">&nbsp;</div>\r\n<h5 class=\"fw-bold mt-3\">ОФОРМЛЕНИЕ ЗАЯВКИ</h5>\r\n<p>Для того чтобы оставить заявку, Вам необходимо связаться по указанному номеру телефона или заполнить форму, в ближайшее время с вами свяжутся наши специалисты, подробно Вас проконсультируют и оформят ваше обращение.</p>\r\n</div>\r\n<div class=\"col-md-4 mb-4\">\r\n<div class=\"icon text-center\">&nbsp;</div>\r\n<h5 class=\"fw-bold mt-3\">КОНСУЛЬТАЦИЯ</h5>\r\n<p>После оформления заявки к Вам будет направлен инженер для проведения замеров, составления списка материалов и оценки предстоящих работ. Мастер подробно расскажет про алгоритм работы и технологии, которые мы используем.</p>\r\n</div>\r\n<div class=\"col-md-4 mb-4\">\r\n<div class=\"icon text-center\">&nbsp;</div>\r\n<h5 class=\"fw-bold mt-3\">ЗАКЛЮЧЕНИЕ ДОГОВОРА</h5>\r\n<p>Перед тем как приступить к ремонту, мы предлагаем договор бытового подряда для ознакомления. Далее в договоре прописываются все виды услуг, сроки и стоимость. После подписания, мы приступаем к выполнению технического задания.</p>\r\n</div>\r\n<div class=\"col-md-4 mb-4\">\r\n<div class=\"icon text-center\">&nbsp;</div>\r\n<h5 class=\"fw-bold mt-3\">ЗАКУПКА МАТЕРИАЛОВ</h5>\r\n<p>Пока проводятся подготовительные мероприятия и демонтажные работы, необходимо приобрести строительный материал. Наша компания напрямую работает с магазинами Красноярска, поэтому мы можем гарантировать покупку качественных материалов, также осуществляем доставку и подъём.</p>\r\n</div>\r\n<div class=\"col-md-4 mb-4\">\r\n<div class=\"icon text-center\">&nbsp;</div>\r\n<h5 class=\"fw-bold mt-3\">ВЫПОЛНЕНИЕ РЕМОНТА</h5>\r\n<p>Мы допускаем к работе только высококвалифицированных специалистов с опытом работы не менее 6 лет. Работы производятся строго в оговоренные сроки. Качество выполнения регулярно контролируется прорабом. Менеджеры компании также контролируют ход работы дистанционно, регулярно созваниваясь с Заказчиком.</p>\r\n</div>\r\n<div class=\"col-md-4 mb-4\">\r\n<div class=\"icon text-center\">&nbsp;</div>\r\n<h5 class=\"fw-bold mt-3\">ЗАВЕРШЕНИЕ РАБОТЫ</h5>\r\n<p>По завершению работы, на место приезжает прораб, проверяет качество и сдаёт объект. По факту приёма производится окончательная оплата. В случае отсутствия клиента, мы отчитываемся о результате по видеосвязи или фотоотчётами. В таком случае, оплата осуществляется с помощью онлайн перевода на карту.</p>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"container my-5\">\r\n<h2 class=\"text-center text-danger fw-bold mb-4\">Что для нас важно?</h2>\r\n<p class=\"text-center mb-4\">В случае необходимости Вы можете произвести оплату за работы или за материалы кредитной картой.</p>\r\n<p>Мы дорожим каждым Заказчиком, поэтому к работе относимся ответственно. Помимо достижения отличного качества, наша главная задача взять на себя хлопоты и возможные трудности. Необходимо индивидуально подходить к каждому заказу, так как пожелания у всех разные и требуемый комплекс работ в каждом конкретном случае будет отличаться. Мы это учитываем на протяжении всего ремонта. Стараемся ответить на возникшие вопросы, подробно консультируем, помогаем как словом, так делом.</p>\r\n<p>Ведем <a href=\"#\">блог</a> полезных советов, исходя из опыта в отделочных мероприятиях, в котором можно прочитать разнообразную полезную информацию. Регулярно проводим фото и видео съемки объектов с разрешения Заказчиков. Результаты работы смотрите на сайте в разделах <a href=\"#\">галерея</a> и <a href=\"#\">видео отчеты</a>.</p>\r\n<p>За последнее время стоимость материалов дорожает, но мы стараемся не поднимать стоимость наших услуг, а также используем технологии, позволяющие сократить денежные расходы не в ущерб качеству.</p>\r\n<p>Мы дорожим репутацией и стремимся добиться отличного результата, который будет радовать Вас на протяжении долгого времени. Нам важно узнать мнение о нашей организации, о мастерстве специалистов. Благодаря <a href=\"#\">отзывам</a>, комментариям и рекомендациям, компания сохраняет конкурентоспособность в сфере ремонта и отделки помещений.</p>\r\n</div>\r\n<div class=\"container my-5\">\r\n<h2 class=\"text-center text-danger fw-bold mb-4\">Инструмент компании</h2>\r\n<p class=\"text-center mb-4\">Для выполнения качественного ремонта, компания приобретает профессиональный строительный инструмент, что позволяет выполнять ремонт быстро, качественно и с соблюдением всех технических нормативов.</p>\r\n<div class=\"row\">\r\n<div class=\"col-md-3 col-6 mb-4\"><img style=\"width: 100%; height: 200px; object-fit: cover;\" src=\"http://127.0.0.1:8000/img/tool/Stroitelnyj-pylesos-foto-1.jpeg\" alt=\"Инструмент 1\"></div>\r\n<div class=\"col-md-3 col-6 mb-4\"><img style=\"width: 100%; height: 200px; object-fit: cover;\" src=\"http://127.0.0.1:8000/img/tool/shurupovyort-foto-1.jpeg\" alt=\"Инструмент 2\"></div>\r\n<div class=\"col-md-3 col-6 mb-4\"><img style=\"width: 100%; height: 200px; object-fit: cover;\" src=\"http://127.0.0.1:8000/img/tool/shurupovert_makita.jpg\" alt=\"Инструмент 3\"></div>\r\n<div class=\"col-md-3 col-6 mb-4\"><img style=\"width: 100%; height: 200px; object-fit: cover;\" src=\"http://127.0.0.1:8000/img/tool/nabory-instrumentov-foto-4.jpeg\" alt=\"Инструмент 4\"></div>\r\n<div class=\"col-md-3 col-6 mb-4\"><img style=\"width: 100%; height: 200px; object-fit: cover;\" src=\"http://127.0.0.1:8000/img/tool/nabory-instrumentov-foto-2.jpeg\" alt=\"Инструмент 5\"></div>\r\n<div class=\"col-md-3 col-6 mb-4\"><img style=\"width: 100%; height: 200px; object-fit: cover;\" src=\"http://127.0.0.1:8000/img/tool/nabory-instrumentov.jpeg\" alt=\"Инструмент 6\"></div>\r\n<div class=\"col-md-3 col-6 mb-4\"><img style=\"width: 100%; height: 200px; object-fit: cover;\" src=\"http://127.0.0.1:8000/img/tool/nabor-elektro-instrumenta.jpeg\" alt=\"Инструмент 7\"></div>\r\n<div class=\"col-md-3 col-6 mb-4\"><img style=\"width: 100%; height: 200px; object-fit: cover;\" src=\"http://127.0.0.1:8000/img/tool/nabor-instrumenta.jpeg\" alt=\"Инструмент 8\"></div>\r\n<div class=\"col-md-3 col-6 mb-4\"><img style=\"width: 100%; height: 200px; object-fit: cover;\" src=\"http://127.0.0.1:8000/img/tool/nabor-instrumentov-1.jpg\" alt=\"Инструмент 9\"></div>\r\n<div class=\"col-md-3 col-6 mb-4\"><img style=\"width: 100%; height: 200px; object-fit: cover;\" src=\"http://127.0.0.1:8000/img/tool/nabor-instrumentov-2.jpg\" alt=\"Инструмент 10\"></div>\r\n<div class=\"col-md-3 col-6 mb-4\"><img style=\"width: 100%; height: 200px; object-fit: cover;\" src=\"http://127.0.0.1:8000/img/tool/nabor-instrumentov-3.jpg\" alt=\"Инструмент 11\"></div>\r\n<div class=\"col-md-3 col-6 mb-4\"><img style=\"width: 100%; height: 200px; object-fit: cover;\" src=\"http://127.0.0.1:8000/img/tool/instrumenti.jpg\" alt=\"Инструмент 12\"></div>\r\n</div>\r\n<p class=\"text-center mt-4\">Перфораторы, болгарки, шуруповерты и дрели, торцовочники, штроборезы, отбойники, шлифовальные машинки, станки для резки сложного керамогранита, профессиональные строительные пылесосы, лазерные уровни и другой профессиональный инструмент.</p>\r\n</div>\r\n<div class=\"container my-5\">\r\n<h2 class=\"text-center text-danger fw-bold mb-4\">НАШИ ПАРТНЕРЫ В КРАСНОЯРСКЕ</h2>\r\n<!-- Блок с логотипами партнеров -->\r\n<div class=\"row mb-4 text-center mx-auto\">\r\n<div class=\"col-md-1\">&nbsp;</div>\r\n<div class=\"col-md-2 col-4 mb-3\"><img style=\"width: 100%; height: 100px; object-fit: contain;\" src=\"http://127.0.0.1:8000/img/logo/1allegro.png\" alt=\"Партнер 1\"></div>\r\n<div class=\"col-md-2 col-4 mb-3\"><img style=\"width: 100%; height: 100px; object-fit: contain;\" src=\"http://127.0.0.1:8000/img/logo/1eko-dveri.png\" alt=\"Партнер 2\"></div>\r\n<div class=\"col-md-2 col-4 mb-3\"><img style=\"width: 100%; height: 100px; object-fit: contain;\" src=\"http://127.0.0.1:8000/img/logo/1emarti.png\" alt=\"Партнер 3\"></div>\r\n<div class=\"col-md-2 col-4 mb-3\"><img style=\"width: 100%; height: 100px; object-fit: contain;\" src=\"http://127.0.0.1:8000/img/logo/1дедал.png\" alt=\"Партнер 4\"></div>\r\n<div class=\"col-md-2 col-4 mb-3\"><img style=\"width: 100%; height: 100px; object-fit: contain;\" src=\"http://127.0.0.1:8000/img/logo/1очаг.png\" alt=\"Партнер 5\"></div>\r\n<div class=\"col-md-1\">&nbsp;</div>\r\n</div>\r\n<!-- Текстовое описание -->\r\n<p class=\"text-center mb-4\">Наша компания тщательно подходит к выбору поставщиков отделочных материалов. Основные критерии при выборе магазина:</p>\r\n<ul>\r\n<li>условия хранения материала, особенно это касается сыпучих смесей для черновой отделки (штукатурка, шпаклевка, стяжка, наливной пол, клей для плитки и так далее);</li>\r\n<li>доступная цена;</li>\r\n<li>наличие сертификатов соответствия и паспортов на приобретаемый материал.</li>\r\n</ul>\r\nНаша компания дает гарантию на весь материал, который мы приобретаем для ремонта и предоставляем полный отчет по чекам.\r\n<p>&nbsp;</p>\r\n<!-- Блок с логотипами марок строительных материалов -->\r\n<h2 class=\"text-center text-danger fw-bold mb-4 mt-5\">МАРКИ СТРОИТЕЛЬНЫХ МАТЕРИАЛОВ</h2>\r\n<div class=\"row mb-4 text-center\">\r\n<div class=\"col-md-2 col-4 mb-3\"><img style=\"width: 100%; height: 100px; object-fit: contain;\" src=\"http://127.0.0.1:8000/img/logo/2бергауф.png\" alt=\"Марка 1\"></div>\r\n<div class=\"col-md-2 col-4 mb-3\"><img style=\"width: 100%; height: 100px; object-fit: contain;\" src=\"http://127.0.0.1:8000/img/logo/2геркулес.png\" alt=\"Марка 2\"></div>\r\n<div class=\"col-md-2 col-4 mb-3\"><img style=\"width: 100%; height: 100px; object-fit: contain;\" src=\"http://127.0.0.1:8000/img/logo/2керамин.png\" alt=\"Марка 3\"></div>\r\n<div class=\"col-md-2 col-4 mb-3\"><img style=\"width: 100%; height: 100px; object-fit: contain;\" src=\"http://127.0.0.1:8000/img/logo/2кнауф.png\" alt=\"Марка 4\"></div>\r\n<div class=\"col-md-2 col-4 mb-3\"><img style=\"width: 100%; height: 100px; object-fit: contain;\" src=\"http://127.0.0.1:8000/img/logo/2нефрит.png\" alt=\"Марка 5\"></div>\r\n<div class=\"col-md-2 col-4 mb-3\"><img style=\"width: 100%; height: 100px; object-fit: contain;\" src=\"http://127.0.0.1:8000/img/logo/2профлукс.png\" alt=\"Марка 6\"></div>\r\n</div>\r\n<!-- Описание марок материалов -->\r\n<p class=\"text-center mt-4\">Главная задача нашей компании &mdash; это выполнение качественного ремонта. Помимо профессионализма мастеров, мы уделяем внимание вопросу выбора отделочных материалов. За время существования компании мы перепробовали различные марки материалов, применение которых гарантирует качественный результат ремонта. <br><br>Также мы даем рекомендации Заказчикам по приобретению чистовых материалов: напольного покрытия, сантехнического оборудования, обоев, дверей, осветительных приборов, кафельной плитки и керамогранита.</p>\r\n</div>', NULL, 'about', 'sdf', 'sdf', 'ACTIVE', '2024-08-21 05:31:30', '2024-08-21 21:53:09'),
(3, 2, 'team', 'team', '<div class=\"container my-5\">\r\n<p class=\"text-center lead fs-5\">Наша ремонтная организация гарантирует, что преображение вашего жилья будет качественным и красивым. Мы проделаем его в оговоренные сроки и по доступной цене. Компания ИП Покивайлов &mdash; это сплоченная команда профессионалов с большим опытом в области ремонта и отделки квартир, домов, коттеджей и нежилых помещений.</p>\r\n<div class=\"row text-center mt-4\">\r\n<div class=\"col-md-3 col-6 mb-4\"><img class=\"img-fluid\" style=\"width: 100%; height: 200px; object-fit: cover;\" src=\"http://127.0.0.1:8000/img/team/menedzher-operator-qmfal8wab1pb2c7wnfd0vpref97dmlpexbe1bf1puk.png\" alt=\"Офис-менеджеры\">\r\n<h5 class=\"mt-3\">Офис-менеджеры</h5>\r\n<ul class=\"text-start\" style=\"list-style-type: none; padding: 0;\">\r\n<li>&mdash; консультируют в телефонном режиме;</li>\r\n<li>&mdash; принимают заявку;</li>\r\n<li>&mdash; подготавливают необходимые документы (договор бытового подряда, техническое сметное задание, график оплаты и акт приема-сдачи работ).</li>\r\n</ul>\r\n</div>\r\n<div class=\"col-md-3 col-6 mb-4\"><img class=\"img-fluid\" style=\"width: 100%; height: 200px; object-fit: cover;\" src=\"http://127.0.0.1:8000/img/team/inzhener-smetchik-qmfal7yg47o0qq99swyeb7zxtvc0ewlol6qju5340s.jpg\" alt=\"Инженеры-сметчики\">\r\n<h5 class=\"mt-3\">Инженеры-сметчики</h5>\r\n<ul class=\"text-start\" style=\"list-style-type: none; padding: 0;\">\r\n<li>&mdash; осуществляют осмотр помещения;</li>\r\n<li>&mdash; оценивают состояние квартиры;</li>\r\n<li>&mdash; консультируют Заказчика и дают рекомендации;</li>\r\n<li>&mdash; обcчитывают объем работ и озвучивают окончательную стоимость предстоящего ремонта.</li>\r\n</ul>\r\n</div>\r\n<div class=\"col-md-3 col-6 mb-4\"><img class=\"img-fluid\" style=\"width: 100%; height: 200px; object-fit: cover;\" src=\"http://127.0.0.1:8000/img/team/prorab-qmfalaryoprvpk56cg6a0pabm0y41zwvlkp09yyxi4.jpg\" alt=\"Прорабы\">\r\n<h5 class=\"mt-3\">Прорабы</h5>\r\n<ul class=\"text-start\" style=\"list-style-type: none; padding: 0;\">\r\n<li>&mdash; организовывают процесс работы;</li>\r\n<li>&mdash; приобретают весь необходимый материал;</li>\r\n<li>&mdash; расставляют мастеров;</li>\r\n<li>&mdash; контролируют ход ремонта и соблюдение строительных норм и технологий.</li>\r\n</ul>\r\n</div>\r\n<div class=\"col-md-3 col-6 mb-4\"><img class=\"img-fluid\" style=\"width: 100%; height: 200px; object-fit: cover;\" src=\"http://127.0.0.1:8000/img/team/otdelochniki-qmfal9u4hvqldy6jhxrng7iv0n2quat59g1isp0boc.jpg\" alt=\"Бригады мастеров\">\r\n<h5 class=\"mt-3\">Бригады мастеров</h5>\r\n<ul class=\"text-start\" style=\"list-style-type: none; padding: 0;\">\r\n<li>&mdash; На каждый объект формируется бригада специалистов.</li>\r\n<li>&mdash; Самый опытный мастер выполняет обязанности бригадира.</li>\r\n<li>&mdash; На каждый узкоспециализированный вид работ привлекаются профильные специалисты нашей компании.</li>\r\n</ul>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"container my-5\">\r\n<div class=\"row\">\r\n<div class=\"col-md-4 col-sm-6 text-center mb-4\"><img class=\"img-fluid rounded\" src=\"http://127.0.0.1:8000/img/team/aleksandr-prorab-235x300.jpeg\" alt=\"Image 1\">\r\n<h5 class=\"mt-3\">Александр</h5>\r\n<p>Главный прораб<br>Отделочник-универсал, плиточник высшей категории</p>\r\n</div>\r\n<div class=\"col-md-4 col-sm-6 text-center mb-4\"><img class=\"img-fluid rounded\" src=\"http://127.0.0.1:8000/img/team/liliya-dizajner-236x300.jpg\" alt=\"Image 2\">\r\n<h5 class=\"mt-3\">Лилия</h5>\r\n<p>Дизайнер интерьера</p>\r\n</div>\r\n<div class=\"col-md-4 col-sm-6 text-center mb-4\"><img class=\"img-fluid rounded\" src=\"http://127.0.0.1:8000/img/team/sergej-otdelochnik-239x300.jpeg\" alt=\"Image 3\">\r\n<h5 class=\"mt-3\">Сергей</h5>\r\n<p>Бригадир<br>Отделочник-универсал</p>\r\n</div>\r\n<div class=\"col-md-4 col-sm-6 text-center mb-4\"><img class=\"img-fluid rounded\" src=\"http://127.0.0.1:8000/img/team/aleksandr-elektrik-235x300.jpg\" alt=\"Image 4\">\r\n<h5 class=\"mt-3\">Александр</h5>\r\n<p>Электрик<br>4 категория профессионализма</p>\r\n</div>\r\n<div class=\"col-md-4 col-sm-6 text-center mb-4\"><img class=\"img-fluid rounded\" src=\"http://127.0.0.1:8000/img/team/dmitrij-dvernik-232x300.jpg\" alt=\"Image 5\">\r\n<h5 class=\"mt-3\">Дмитрий</h5>\r\n<p>Мастер по установке межкомнатных дверей</p>\r\n</div>\r\n<div class=\"col-md-4 col-sm-6 text-center mb-4\"><img class=\"img-fluid rounded\" src=\"http://127.0.0.1:8000/img/team/svyatoslav-otdelochnik-universal-236x300.jpg\" alt=\"Image 6\">\r\n<h5 class=\"mt-3\">Святослав</h5>\r\n<p>Отделочник-универсал<br>Электрик 3 разряда</p>\r\n</div>\r\n</div>\r\n<div class=\"row\">\r\n<div class=\"col-md-4 col-sm-6 text-center mb-4\"><img class=\"img-fluid rounded\" src=\"http://127.0.0.1:8000/img/team/dmitrij-master-po-montazhu-natyazhnogo-potolka-238x300.jpg\" alt=\"Image 7\">\r\n<h5 class=\"mt-3\">Дмитрий</h5>\r\n<p>Специалист по монтажу натяжного потолка</p>\r\n</div>\r\n<div class=\"col-md-4 col-sm-6 text-center mb-4\"><img class=\"img-fluid rounded\" src=\"http://127.0.0.1:8000/img/team/yuliya-shtukatur-malyar-237x300.jpg\" alt=\"Image 8\">\r\n<h5 class=\"mt-3\">Юлия</h5>\r\n<p>Штукатур-маляр</p>\r\n</div>\r\n<div class=\"col-md-4 col-sm-6 text-center mb-4\"><img class=\"img-fluid rounded\" src=\"http://127.0.0.1:8000/img/team/ekaterina-shtukatur-malyar-233x300.jpg\" alt=\"Image 9\">\r\n<h5 class=\"mt-3\">Екатерина</h5>\r\n<p>Маляр-штукатур</p>\r\n</div>\r\n<div class=\"col-md-4 col-sm-6 text-center mb-4\"><img class=\"img-fluid rounded\" src=\"http://127.0.0.1:8000/img/team/andrej-rabotnik-235x300.jpeg\" alt=\"Image 10\">\r\n<h5 class=\"mt-3\">Андрей</h5>\r\n<p>Бригадир<br>Мастер сложных демонтажных работ, отделочник</p>\r\n</div>\r\n<div class=\"col-md-4 col-sm-6 text-center mb-4\"><img class=\"img-fluid rounded\" src=\"http://127.0.0.1:8000/img/team/evgenij-plitochnik-233x300.jpeg\" alt=\"Image 11\">\r\n<h5 class=\"mt-3\">Евгений</h5>\r\n<p>Плиточник</p>\r\n</div>\r\n<div class=\"col-md-4 col-sm-6 text-center mb-4\"><img class=\"img-fluid rounded\" src=\"http://127.0.0.1:8000/img/team/dmitrij-rabotnik-236x300.jpeg\" alt=\"Image 12\">\r\n<h5 class=\"mt-3\">Дмитрий</h5>\r\n<p>Подсобный рабочий<br>Помощник отделочника</p>\r\n</div>\r\n</div>\r\n<div class=\"mt-5 lead fs-5\">\r\n<p>В нашей команде работают мастера разных строительных специальностей. Поэтому, обращаясь к нам, Вам не придется самостоятельно подбирать специалистов для каждого этапа отделочных работ.</p>\r\n<p>В связи с тем, что регулярно появляются новые материалы и технологии, вопрос о повышении квалификации наших работников стал очень значимым в нашей работе. Важно, чтобы работники могли выполнять работу правильно и качественно. Семинары, курсы, участие в мастер-классах стали неотъемлемой частью в нашей практике.</p>\r\n<p>В прошлом году заказали специализированную одежду по индивидуальному пошиву для каждого специалиста.</p>\r\n<p class=\"fw-bold\">Наше портфолио и видеообзоры выполненных объектов, отзывы и видеоотзывы довольных клиентов говорят о том, что:</p>\r\n<ul>\r\n<li>Наши специалисты добросовестно относятся к своему делу и выполняют работу качественно;</li>\r\n<li>Ремонтно-отделочные мероприятия выполняются настоящими профессионалами своего дела;</li>\r\n<li>Все наши заказы производятся строго с учетом пожеланий клиента и с соблюдением технологий;</li>\r\n<li>Мы готовы выполнить любые, пусть даже очень сложные работы по ремонту квартир в Красноярске.</li>\r\n</ul>\r\n</div>\r\n</div>', NULL, 'team', 'team', 'team', 'ACTIVE', '2024-08-21 21:54:23', '2024-08-21 22:16:10');
INSERT INTO `pages` (`id`, `author_id`, `title`, `excerpt`, `body`, `image`, `slug`, `meta_description`, `meta_keywords`, `status`, `created_at`, `updated_at`) VALUES
(4, 2, 'prices', 'price', '<div class=\"container my-5\">\r\n<h2 class=\"text-center text-danger fw-bold mb-4\">Цены на ремонт квартир в Красноярске</h2>\r\n<p class=\"text-center mb-4 lead fs-5\">Мы подготовили прайс-лист с расценками на ремонт квартир в Красноярске. Перечень цен на услуги по ремонту указаны ориентировочные, так как конечная стоимость зависит от предстоящего комплекса, разновидности ремонта и сложности выполнения. Наши специалисты рассчитают точную цену по предстоящему ремонту после осмотра вашего жилья, исходя из ваших пожеланий и предпочтений. Консультация и вызов специалиста &mdash; бесплатно.</p>\r\n<h4 class=\"text-center text-danger mb-4\">Ремонт квартир под ключ в Красноярске</h4>\r\n<div class=\"row\">\r\n<div class=\"col-md-3 col-sm-6 mb-4\">\r\n<div class=\"card h-100 text-center border-success\">\r\n<div class=\"card-body\">\r\n<h5 class=\"card-title\">Капитальный ремонт квартир</h5>\r\n<p class=\"card-text\">от 9000 / кв.м. по полу</p>\r\n<a class=\"btn btn-success\" href=\"#\">Подробнее</a></div>\r\n</div>\r\n</div>\r\n<div class=\"col-md-3 col-sm-6 mb-4\">\r\n<div class=\"card h-100 text-center border-success\">\r\n<div class=\"card-body\">\r\n<h5 class=\"card-title\">Косметический ремонт квартир</h5>\r\n<p class=\"card-text\">от 3500 / кв.м. по полу</p>\r\n<a class=\"btn btn-success\" href=\"#\">Подробнее</a></div>\r\n</div>\r\n</div>\r\n<div class=\"col-md-3 col-sm-6 mb-4\">\r\n<div class=\"card h-100 text-center border-success\">\r\n<div class=\"card-body\">\r\n<h5 class=\"card-title\">Дизайнерский ремонт квартир</h5>\r\n<p class=\"card-text\">от 15000 / кв.м. по полу</p>\r\n<a class=\"btn btn-success\" href=\"#\">Подробнее</a></div>\r\n</div>\r\n</div>\r\n<div class=\"col-md-3 col-sm-6 mb-4\">\r\n<div class=\"card h-100 text-center border-success\">\r\n<div class=\"card-body\">\r\n<h5 class=\"card-title\">Евроремонт квартир</h5>\r\n<p class=\"card-text\">от 13000 / кв.м. по полу</p>\r\n<a class=\"btn btn-success\" href=\"#\">Подробнее</a></div>\r\n</div>\r\n</div>\r\n<div class=\"col-md-3 col-sm-6 mb-4\">\r\n<div class=\"card h-100 text-center border-success\">\r\n<div class=\"card-body\">\r\n<h5 class=\"card-title\">Комплексный ремонт в новостройке</h5>\r\n<p class=\"card-text\">от 6500 / кв.м. по полу</p>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"col-md-3 col-sm-6 mb-4\">\r\n<div class=\"card h-100 text-center border-success\">\r\n<div class=\"card-body\">\r\n<h5 class=\"card-title\">Бюджетный ремонт квартир</h5>\r\n<p class=\"card-text\">от 4500 / кв.м. по полу</p>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"col-md-3 col-sm-6 mb-4\">\r\n<div class=\"card h-100 text-center border-success\">\r\n<div class=\"card-body\">\r\n<h5 class=\"card-title\">Черновая отделка квартир</h5>\r\n<p class=\"card-text\">от 4500 / кв.м. по полу</p>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"col-md-3 col-sm-6 mb-4\">\r\n<div class=\"card h-100 text-center border-success\">\r\n<div class=\"card-body\">\r\n<h5 class=\"card-title\">Чистовая отделка квартир</h5>\r\n<p class=\"card-text\">от 3000 / кв.м. по полу</p>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n<p class=\"text-center text-muted mt-4\">Стоимость работ указана без учета ремонта санузла.</p>\r\n</div>\r\n<div class=\"container my-5\">\r\n<h2 class=\"text-center text-danger fw-bold mb-4\">Ремонт комнат</h2>\r\n<div class=\"d-flex flex-wrap justify-content-center\">\r\n<div class=\"card m-2 p-3 text-center border-success\" style=\"min-width: 250px; flex-grow: 1;\">\r\n<h4>Ремонт гостиной / зала</h4>\r\n<a class=\"btn btn-success mt-2\" href=\"#\">Подробнее</a></div>\r\n<div class=\"card m-2 p-3 text-center border-success\" style=\"min-width: 250px; flex-grow: 1;\">\r\n<h4>Ремонт кухни</h4>\r\n<a class=\"btn btn-success mt-2\" href=\"#\">Подробнее</a></div>\r\n<div class=\"card m-2 p-3 text-center border-success\" style=\"min-width: 250px; flex-grow: 1;\">\r\n<h4>Ремонт спальни</h4>\r\n<a class=\"btn btn-success mt-2\" href=\"#\">Подробнее</a></div>\r\n<div class=\"card m-2 p-3 text-center border-success\" style=\"min-width: 250px; flex-grow: 1;\">\r\n<h4>Ремонт детской</h4>\r\n<a class=\"btn btn-success mt-2\" href=\"#\">Подробнее</a></div>\r\n<div class=\"w-100\">&nbsp;</div>\r\n<!-- Разрыв строки -->\r\n<div class=\"card m-2 p-3 text-center border-success\" style=\"min-width: 250px; flex-grow: 1;\">\r\n<h4>Ремонт санузла</h4>\r\n<p class=\"fs-5\">от 160000 / под ключ</p>\r\n<a class=\"btn btn-success mt-2\" href=\"#\">Подробнее</a></div>\r\n<div class=\"card m-2 p-3 text-center border-success\" style=\"min-width: 250px; flex-grow: 1;\">\r\n<h4>Ремонт ванной</h4>\r\n<p class=\"fs-5\">от 100000 / под ключ</p>\r\n<a class=\"btn btn-success mt-2\" href=\"#\">Подробнее</a></div>\r\n<div class=\"card m-2 p-3 text-center border-success\" style=\"min-width: 250px; flex-grow: 1;\">\r\n<h4>Ремонт туалета</h4>\r\n<p class=\"fs-5\">от 60000 / под ключ</p>\r\n<a class=\"btn btn-success mt-2\" href=\"#\">Подробнее</a></div>\r\n<div class=\"card m-2 p-3 text-center border-success\" style=\"min-width: 250px; flex-grow: 1;\">\r\n<h4>Ремонт балкона</h4>\r\n<p class=\"fs-5\">от 45000 / под ключ</p>\r\n<a class=\"btn btn-success mt-2\" href=\"#\">Подробнее</a></div>\r\n</div>\r\n<p class=\"text-center mt-3\">* Точная стоимость комплекса ремонтно-отделочных работ определяется по месту</p>\r\n</div>\r\n<div class=\"container my-5\">\r\n<h2 class=\"text-center text-danger fw-bold mb-4\">Разработка дизайн-проекта</h2>\r\n<div class=\"d-flex flex-wrap justify-content-center\">\r\n<div class=\"card m-2 p-3 text-center border-success\" style=\"min-width: 250px; flex-grow: 1;\">\r\n<h4>Дизайн проект квартиры \"под ключ\"</h4>\r\n<p class=\"fs-5\">от 2400 / кв.м. по полу</p>\r\n<a class=\"btn btn-success mt-2\" href=\"#\">Подробнее</a></div>\r\n<div class=\"card m-2 p-3 text-center border-success\" style=\"min-width: 250px; flex-grow: 1;\">\r\n<h4>Дизайн проект квартиры \"минимальный\"</h4>\r\n<p class=\"fs-5\">от 1200 / кв.м. по полу</p>\r\n<a class=\"btn btn-success mt-2\" href=\"#\">Подробнее</a></div>\r\n<div class=\"card m-2 p-3 text-center border-success\" style=\"min-width: 250px; flex-grow: 1;\">\r\n<h4>Планировочное решение</h4>\r\n<p class=\"fs-5\">от 600 / кв.м. по полу</p>\r\n<a class=\"btn btn-success mt-2\" href=\"#\">Подробнее</a></div>\r\n</div>\r\n<p class=\"text-center mt-3 lead fs-5\">Наше главное отличие от студий дизайна &ndash; в процессе разработки дизайна принимает участие не только дизайнер, но и инженер, который дает рекомендации по возможностям помещения.</p>\r\n</div>\r\n<div class=\"container my-5\">\r\n<h2 class=\"text-center text-danger fw-bold mb-4\">АКТУАЛЬНЫЙ ПРАЙС-ЛИСТ НА 2024г.</h2>\r\n<h3 class=\"text-center mb-4\">Демонтаж и зачистка</h3>\r\n<!-- Навигация по табам -->\r\n<ul id=\"priceTab\" class=\"nav nav-tabs text-dark\" role=\"tablist\">\r\n<li class=\"nav-item\" role=\"presentation\"><button id=\"potolok-tab\" class=\"nav-link active text-dark fs-5\" role=\"tab\" type=\"button\" data-bs-toggle=\"tab\" data-bs-target=\"#potolok\" aria-controls=\"potolok\" aria-selected=\"true\">Потолок</button></li>\r\n<li class=\"nav-item\" role=\"presentation\"><button id=\"steny-tab\" class=\"nav-link text-dark fs-5\" role=\"tab\" type=\"button\" data-bs-toggle=\"tab\" data-bs-target=\"#steny\" aria-controls=\"steny\" aria-selected=\"false\">Стены</button></li>\r\n<li class=\"nav-item\" role=\"presentation\"><button id=\"pol-tab\" class=\"nav-link text-dark fs-5\" role=\"tab\" type=\"button\" data-bs-toggle=\"tab\" data-bs-target=\"#pol\" aria-controls=\"pol\" aria-selected=\"false\">Пол</button></li>\r\n<li class=\"nav-item\" role=\"presentation\"><button id=\"konstruktsii-tab\" class=\"nav-link text-dark fs-5\" role=\"tab\" type=\"button\" data-bs-toggle=\"tab\" data-bs-target=\"#konstruktsii\" aria-controls=\"konstruktsii\" aria-selected=\"false\">Конструкции, перегородки, двери</button></li>\r\n<li class=\"nav-item\" role=\"presentation\"><button id=\"okna-tab\" class=\"nav-link text-dark fs-5\" role=\"tab\" type=\"button\" data-bs-toggle=\"tab\" data-bs-target=\"#okna\" aria-controls=\"okna\" aria-selected=\"false\">Облицовка окна</button></li>\r\n</ul>\r\n<!-- Содержимое табов -->\r\n<div id=\"priceTabContent\" class=\"tab-content\">\r\n<div id=\"potolok\" class=\"tab-pane fade show active\" role=\"tabpanel\" aria-labelledby=\"potolok-tab\">\r\n<table class=\"table table-bordered fs-5\">\r\n<thead>\r\n<tr>\r\n<th>Услуга</th>\r\n<th>ед. изм./руб.</th>\r\n</tr>\r\n</thead>\r\n<tbody>\r\n<tr>\r\n<td>Комплексная зачистка до основания</td>\r\n<td>от 400/м.кв.</td>\r\n</tr>\r\n<tr>\r\n<td>Удаление краски</td>\r\n<td>от 150/м.кв.</td>\r\n</tr>\r\n<tr>\r\n<td>Демонтаж шпаклевки</td>\r\n<td>от 120/м.кв.</td>\r\n</tr>\r\n<!-- Добавьте другие строки по необходимости --></tbody>\r\n</table>\r\n</div>\r\n<div id=\"steny\" class=\"tab-pane fade\" role=\"tabpanel\" aria-labelledby=\"steny-tab\">\r\n<table class=\"table table-bordered fs-5\">\r\n<thead>\r\n<tr>\r\n<th>Услуга</th>\r\n<th>ед. изм./руб.</th>\r\n</tr>\r\n</thead>\r\n<tbody>\r\n<tr>\r\n<td>Комплексная зачистка стен до основания</td>\r\n<td>от 350/м.кв.</td>\r\n</tr>\r\n<tr>\r\n<td>Снятие обоев</td>\r\n<td>от 50/м.кв.</td>\r\n</tr>\r\n<tr>\r\n<td>Демонтаж плитки со стен</td>\r\n<td>от 250/м.кв.</td>\r\n</tr>\r\n<!-- Добавьте другие строки по необходимости --></tbody>\r\n</table>\r\n</div>\r\n<div id=\"pol\" class=\"tab-pane fade\" role=\"tabpanel\" aria-labelledby=\"pol-tab\">\r\n<table class=\"table table-bordered fs-5\">\r\n<thead>\r\n<tr>\r\n<th>Услуга</th>\r\n<th>ед. изм./руб.</th>\r\n</tr>\r\n</thead>\r\n<tbody>\r\n<tr>\r\n<td>Демонтаж напольного плинтуса</td>\r\n<td>от 50 м.п.</td>\r\n</tr>\r\n<tr>\r\n<td>Демонтаж напольного покрытия</td>\r\n<td>от 100/м.кв.</td>\r\n</tr>\r\n<tr>\r\n<td>Демонтаж наливного пола</td>\r\n<td>от 250/м.кв.</td>\r\n</tr>\r\n<!-- Добавьте другие строки по необходимости --></tbody>\r\n</table>\r\n</div>\r\n<div id=\"konstruktsii\" class=\"tab-pane fade\" role=\"tabpanel\" aria-labelledby=\"konstruktsii-tab\">\r\n<table class=\"table table-bordered fs-5\">\r\n<thead>\r\n<tr>\r\n<th>Услуга</th>\r\n<th>ед. изм./руб.</th>\r\n</tr>\r\n</thead>\r\n<tbody>\r\n<tr>\r\n<td>Демонтаж санузловой кабины</td>\r\n<td>от 20000 компл.</td>\r\n</tr>\r\n<tr>\r\n<td>Демонтаж межкомнатных перегородок</td>\r\n<td>от 300/м.кв.</td>\r\n</tr>\r\n<tr>\r\n<td>Демонтаж встроенных шкафов</td>\r\n<td>от 300/шт.</td>\r\n</tr>\r\n<!-- Добавьте другие строки по необходимости --></tbody>\r\n</table>\r\n</div>\r\n<div id=\"okna\" class=\"tab-pane fade\" role=\"tabpanel\" aria-labelledby=\"okna-tab\">\r\n<table class=\"table table-bordered fs-5\">\r\n<thead>\r\n<tr>\r\n<th>Услуга</th>\r\n<th>ед. изм./руб.</th>\r\n</tr>\r\n</thead>\r\n<tbody>\r\n<tr>\r\n<td>Демонтаж оконного откоса</td>\r\n<td>от 250/шт.</td>\r\n</tr>\r\n<tr>\r\n<td>Демонтаж подоконника</td>\r\n<td>от 500/шт.</td>\r\n</tr>\r\n<tr>\r\n<td>Демонтаж F профиля</td>\r\n<td>от 50/шт.</td>\r\n</tr>\r\n<!-- Добавьте другие строки по необходимости --></tbody>\r\n</table>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"container my-5\">\r\n<h3 class=\"text-center mb-4\">Демонтаж и зачистка</h3>\r\n<!-- Навигация по табам -->\r\n<ul id=\"priceTab\" class=\"nav nav-tabs text-dark\" role=\"tablist\">\r\n<li class=\"nav-item\" role=\"presentation\"><button id=\"potolok-tab\" class=\"nav-link active text-dark fs-5\" role=\"tab\" type=\"button\" data-bs-toggle=\"tab\" data-bs-target=\"#potolok1\" aria-controls=\"potolok\" aria-selected=\"true\">Потолок</button></li>\r\n<li class=\"nav-item\" role=\"presentation\"><button id=\"steny-tab\" class=\"nav-link text-dark fs-5\" role=\"tab\" type=\"button\" data-bs-toggle=\"tab\" data-bs-target=\"#steny1\" aria-controls=\"steny\" aria-selected=\"false\">Стены</button></li>\r\n<li class=\"nav-item\" role=\"presentation\"><button id=\"pol-tab\" class=\"nav-link text-dark fs-5\" role=\"tab\" type=\"button\" data-bs-toggle=\"tab\" data-bs-target=\"#pol1\" aria-controls=\"pol\" aria-selected=\"false\">Пол</button></li>\r\n<li class=\"nav-item\" role=\"presentation\"><button id=\"konstruktsii-tab\" class=\"nav-link text-dark fs-5\" role=\"tab\" type=\"button\" data-bs-toggle=\"tab\" data-bs-target=\"#konstruktsii1\" aria-controls=\"konstruktsii\" aria-selected=\"false\">Конструкции, перегородки, двери</button></li>\r\n<li class=\"nav-item\" role=\"presentation\"><button id=\"okna-tab\" class=\"nav-link text-dark fs-5\" role=\"tab\" type=\"button\" data-bs-toggle=\"tab\" data-bs-target=\"#okna1\" aria-controls=\"okna\" aria-selected=\"false\">Облицовка окна</button></li>\r\n</ul>\r\n<!-- Содержимое табов -->\r\n<div id=\"priceTabContent\" class=\"tab-content\">\r\n<div id=\"potolok1\" class=\"tab-pane fade show active\" role=\"tabpanel\" aria-labelledby=\"potolok-tab\">\r\n<table class=\"table table-bordered fs-5\">\r\n<thead>\r\n<tr>\r\n<th>Услуга</th>\r\n<th>ед. изм./руб.</th>\r\n</tr>\r\n</thead>\r\n<tbody>\r\n<tr>\r\n<td>Грунтовка потолка (пропитка)</td>\r\n<td>от 100 м.кв.</td>\r\n</tr>\r\n<tr>\r\n<td>Выравнивание потолка: Штукатурка потолка (под правило, по маякам)</td>\r\n<td>от 700 м.кв.</td>\r\n</tr>\r\n<tr>\r\n<td>Монтаж армирующей сетки</td>\r\n<td>от 300 м.кв.</td>\r\n</tr>\r\n<tr>\r\n<td>Шпаклевка потолка</td>\r\n<td>от 400 м.кв.</td>\r\n</tr>\r\n<tr>\r\n<td>Наклейка стеклохолста</td>\r\n<td>от 250 м.кв.</td>\r\n</tr>\r\n<!-- Добавьте другие строки по необходимости --></tbody>\r\n</table>\r\n</div>\r\n<div id=\"steny1\" class=\"tab-pane fade\" role=\"tabpanel\" aria-labelledby=\"steny-tab\">\r\n<table class=\"table table-bordered fs-5\">\r\n<thead>\r\n<tr>\r\n<th>Услуга</th>\r\n<th>ед. изм./руб.</th>\r\n</tr>\r\n</thead>\r\n<tbody>\r\n<tr>\r\n<td>Утепление стен</td>\r\n<td>от 300 м.кв.</td>\r\n</tr>\r\n<tr>\r\n<td>Грунтовка стен (1 слой)</td>\r\n<td>от 60 м.кв.</td>\r\n</tr>\r\n<tr>\r\n<td>Оттяжка углов и периметра штукатуркой</td>\r\n<td>от 400 м.п.</td>\r\n</tr>\r\n<!-- Добавьте другие строки по необходимости --></tbody>\r\n</table>\r\n</div>\r\n<div id=\"pol1\" class=\"tab-pane fade\" role=\"tabpanel\" aria-labelledby=\"pol-tab\">\r\n<table class=\"table table-bordered fs-5\">\r\n<thead>\r\n<tr>\r\n<th>Услуга</th>\r\n<th>ед. изм./руб.</th>\r\n</tr>\r\n</thead>\r\n<tbody>\r\n<tr>\r\n<td>Подготовка поверхности пола</td>\r\n<td>от 100 м.кв.</td>\r\n</tr>\r\n<tr>\r\n<td>Нанесение бетоноконтакта</td>\r\n<td>от 130 м.кв.</td>\r\n</tr>\r\n<tr>\r\n<td>Гидроизоляция пола</td>\r\n<td>от 200 м.кв.</td>\r\n</tr>\r\n<!-- Добавьте другие строки по необходимости --></tbody>\r\n</table>\r\n</div>\r\n<div id=\"konstruktsii1\" class=\"tab-pane fade\" role=\"tabpanel1\" aria-labelledby=\"konstruktsii-tab\">\r\n<table class=\"table table-bordered fs-5\">\r\n<thead>\r\n<tr>\r\n<th>Услуга</th>\r\n<th>ед. изм./руб.</th>\r\n</tr>\r\n</thead>\r\n<tbody>\r\n<tr>\r\n<td>Устройство межкомнатных перегородок из ПГП</td>\r\n<td>от 2200 м.кв.</td>\r\n</tr>\r\n<tr>\r\n<td>Устройство межкомнатных перегородок из ГКЛ</td>\r\n<td>от 1800 м.кв.</td>\r\n</tr>\r\n<!-- Добавьте другие строки по необходимости --></tbody>\r\n</table>\r\n</div>\r\n<div id=\"okna1\" class=\"tab-pane fade\" role=\"tabpanel\" aria-labelledby=\"okna-tab\">\r\n<table class=\"table table-bordered fs-5\">\r\n<thead>\r\n<tr>\r\n<th>Услуга</th>\r\n<th>ед. изм./руб.</th>\r\n</tr>\r\n</thead>\r\n<tbody>\r\n<tr>\r\n<td>Демонтаж оконного откоса</td>\r\n<td>от 250 шт.</td>\r\n</tr>\r\n<tr>\r\n<td>Демонтаж подоконника</td>\r\n<td>от 500 шт.</td>\r\n</tr>\r\n<tr>\r\n<td>Демонтаж F профиля</td>\r\n<td>от 50 шт.</td>\r\n</tr>\r\n<!-- Добавьте другие строки по необходимости --></tbody>\r\n</table>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"container my-5\">\r\n<h3 class=\"text-center mb-4\">Чистовая отделка квартир</h3>\r\n<!-- Навигация по табам -->\r\n<ul id=\"priceTab\" class=\"nav nav-tabs text-dark\" role=\"tablist\">\r\n<li class=\"nav-item\" role=\"presentation\"><button id=\"potolok-tab\" class=\"nav-link active text-dark fs-5\" role=\"tab\" type=\"button\" data-bs-toggle=\"tab\" data-bs-target=\"#potolok2\" aria-controls=\"potolok\" aria-selected=\"true\">Потолок</button></li>\r\n<li class=\"nav-item\" role=\"presentation\"><button id=\"steny-tab\" class=\"nav-link text-dark fs-5\" role=\"tab\" type=\"button\" data-bs-toggle=\"tab\" data-bs-target=\"#steny2\" aria-controls=\"steny\" aria-selected=\"false\">Стены</button></li>\r\n<li class=\"nav-item\" role=\"presentation\"><button id=\"pol-tab\" class=\"nav-link text-dark fs-5\" role=\"tab\" type=\"button\" data-bs-toggle=\"tab\" data-bs-target=\"#pol2\" aria-controls=\"pol\" aria-selected=\"false\">Пол</button></li>\r\n<li class=\"nav-item\" role=\"presentation\"><button id=\"dveri-tab\" class=\"nav-link text-dark fs-5\" role=\"tab\" type=\"button\" data-bs-toggle=\"tab\" data-bs-target=\"#dveri2\" aria-controls=\"dveri\" aria-selected=\"false\">Двери</button></li>\r\n<li class=\"nav-item\" role=\"presentation\"><button id=\"okna-tab\" class=\"nav-link text-dark fs-5\" role=\"tab\" type=\"button\" data-bs-toggle=\"tab\" data-bs-target=\"#okna2\" aria-controls=\"okna\" aria-selected=\"false\">Обрамление окон</button></li>\r\n<li class=\"nav-item\" role=\"presentation\"><button id=\"elektro-tab\" class=\"nav-link text-dark fs-5\" role=\"tab\" type=\"button\" data-bs-toggle=\"tab\" data-bs-target=\"#elektro2\" aria-controls=\"elektro\" aria-selected=\"false\">Электромонтажные услуги</button></li>\r\n</ul>\r\n<!-- Содержимое табов -->\r\n<div id=\"priceTabContent\" class=\"tab-content\">\r\n<div id=\"potolok2\" class=\"tab-pane fade show active\" role=\"tabpanel\" aria-labelledby=\"potolok-tab\">\r\n<table class=\"table table-bordered fs-5\">\r\n<thead>\r\n<tr>\r\n<th>Услуга</th>\r\n<th>ед. изм./руб.</th>\r\n</tr>\r\n</thead>\r\n<tbody>\r\n<tr>\r\n<td>Покраска потолка (побелка)</td>\r\n<td>от 300 м.кв.</td>\r\n</tr>\r\n<tr>\r\n<td>Нанесение декоративной штукатурки на потолок</td>\r\n<td>от 1500 м.кв.</td>\r\n</tr>\r\n<tr>\r\n<td>Монтаж натяжного потолка</td>\r\n<td>от 1100 м.кв.</td>\r\n</tr>\r\n<tr>\r\n<td>Отделка потолка пластиковыми панелями</td>\r\n<td>от 550 м.кв.</td>\r\n</tr>\r\n<!-- Добавьте другие строки по необходимости --></tbody>\r\n</table>\r\n</div>\r\n<div id=\"steny2\" class=\"tab-pane fade\" role=\"tabpanel\" aria-labelledby=\"steny-tab\">\r\n<table class=\"table table-bordered fs-5\">\r\n<thead>\r\n<tr>\r\n<th>Услуга</th>\r\n<th>ед. изм./руб.</th>\r\n</tr>\r\n</thead>\r\n<tbody>\r\n<tr>\r\n<td>Поклейка обоев</td>\r\n<td>от 250 м.кв.</td>\r\n</tr>\r\n<tr>\r\n<td>Покраска обоев</td>\r\n<td>от 200 м.кв.</td>\r\n</tr>\r\n<tr>\r\n<td>Окраска стен</td>\r\n<td>от 250 м.кв.</td>\r\n</tr>\r\n<tr>\r\n<td>Нанесение декоративной штукатурки</td>\r\n<td>от 1500 м.кв.</td>\r\n</tr>\r\n<!-- Добавьте другие строки по необходимости --></tbody>\r\n</table>\r\n</div>\r\n<div id=\"pol2\" class=\"tab-pane fade\" role=\"tabpanel\" aria-labelledby=\"pol-tab\">\r\n<table class=\"table table-bordered fs-5\">\r\n<thead>\r\n<tr>\r\n<th>Услуга</th>\r\n<th>ед. изм./руб.</th>\r\n</tr>\r\n</thead>\r\n<tbody>\r\n<tr>\r\n<td>Настил линолеума</td>\r\n<td>от 200 м.кв.</td>\r\n</tr>\r\n<tr>\r\n<td>Укладка подложки на пол</td>\r\n<td>от 50 м.кв.</td>\r\n</tr>\r\n<tr>\r\n<td>Укладка ламината</td>\r\n<td>от 500 м.кв.</td>\r\n</tr>\r\n<tr>\r\n<td>Укладка керамической плитки</td>\r\n<td>от 1900 м.кв.</td>\r\n</tr>\r\n<!-- Добавьте другие строки по необходимости --></tbody>\r\n</table>\r\n</div>\r\n<div id=\"dveri2\" class=\"tab-pane fade\" role=\"tabpanel\" aria-labelledby=\"dveri-tab\">\r\n<table class=\"table table-bordered fs-5\">\r\n<thead>\r\n<tr>\r\n<th>Услуга</th>\r\n<th>ед. изм./руб.</th>\r\n</tr>\r\n</thead>\r\n<tbody>\r\n<tr>\r\n<td>Монтаж межкомнатной двери</td>\r\n<td>от 6000 шт.</td>\r\n</tr>\r\n<tr>\r\n<td>Обрамление дверного проема</td>\r\n<td>от 1500 компл.</td>\r\n</tr>\r\n<!-- Добавьте другие строки по необходимости --></tbody>\r\n</table>\r\n</div>\r\n<div id=\"okna2\" class=\"tab-pane fade\" role=\"tabpanel\" aria-labelledby=\"okna-tab\">\r\n<table class=\"table table-bordered fs-5\">\r\n<thead>\r\n<tr>\r\n<th>Услуга</th>\r\n<th>ед. изм./руб.</th>\r\n</tr>\r\n</thead>\r\n<tbody>\r\n<tr>\r\n<td>Установка оконных откосов</td>\r\n<td>от 2500 компл.</td>\r\n</tr>\r\n<tr>\r\n<td>Установка подоконников</td>\r\n<td>от 1500 шт.</td>\r\n</tr>\r\n<!-- Добавьте другие строки по необходимости --></tbody>\r\n</table>\r\n</div>\r\n<div id=\"elektro2\" class=\"tab-pane fade\" role=\"tabpanel\" aria-labelledby=\"elektro-tab\">\r\n<table class=\"table table-bordered fs-5\">\r\n<thead>\r\n<tr>\r\n<th>Услуга</th>\r\n<th>ед. изм./руб.</th>\r\n</tr>\r\n</thead>\r\n<tbody>\r\n<tr>\r\n<td>Прокладка провода</td>\r\n<td>от 90/м.п.</td>\r\n</tr>\r\n<tr>\r\n<td>Прокладка кабель-канала</td>\r\n<td>от 150/м.п.</td>\r\n</tr>\r\n<tr>\r\n<td>Демонтаж розетки/выключателя</td>\r\n<td>от 100/шт.</td>\r\n</tr>\r\n<tr>\r\n<td>Монтаж электрощита</td>\r\n<td>от 3000/шт.</td>\r\n</tr>\r\n<!-- Добавьте другие строки по необходимости --></tbody>\r\n</table>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"container my-5\">\r\n<h2 class=\"text-center  fw-bold mb-4\">Сантехнические и сварочные услуги</h2>\r\n<!-- Навигация по табам -->\r\n<ul id=\"priceTab\" class=\"nav nav-tabs text-dark\" role=\"tablist\">\r\n<li class=\"nav-item\" role=\"presentation\"><button id=\"demontazh-tab-unique\" class=\"nav-link active text-dark fs-5\" role=\"tab\" type=\"button\" data-bs-toggle=\"tab\" data-bs-target=\"#demontazh-unique\" aria-controls=\"demontazh\" aria-selected=\"true\">Демонтажные работы</button></li>\r\n<li class=\"nav-item\" role=\"presentation\"><button id=\"montazh-tab-unique\" class=\"nav-link text-dark fs-5\" role=\"tab\" type=\"button\" data-bs-toggle=\"tab\" data-bs-target=\"#montazh-unique\" aria-controls=\"montazh\" aria-selected=\"false\">Монтажные работы</button></li>\r\n<li class=\"nav-item\" role=\"presentation\"><button id=\"ustanovka-tab-unique\" class=\"nav-link text-dark fs-5\" role=\"tab\" type=\"button\" data-bs-toggle=\"tab\" data-bs-target=\"#ustanovka-unique\" aria-controls=\"ustanovka\" aria-selected=\"false\">Установка сантехнического оборудования</button></li>\r\n</ul>\r\n<!-- Содержимое табов -->\r\n<div id=\"priceTabContent-unique\" class=\"tab-content\"><!-- Демонтажные работы -->\r\n<div id=\"demontazh-unique\" class=\"tab-pane fade show active\" role=\"tabpanel\" aria-labelledby=\"demontazh-tab-unique\">\r\n<table class=\"table table-bordered fs-5\">\r\n<thead>\r\n<tr>\r\n<th>Услуга</th>\r\n<th>ед. изм./цена</th>\r\n</tr>\r\n</thead>\r\n<tbody>\r\n<tr>\r\n<td>Демонтаж радиатора</td>\r\n<td>от 1000/шт.</td>\r\n</tr>\r\n<tr>\r\n<td>Демонтаж шарового крана</td>\r\n<td>от 550/шт.</td>\r\n</tr>\r\n<tr>\r\n<td>Демонтаж стоячной трубы отопления/водоснабжения</td>\r\n<td>от 800/шт.</td>\r\n</tr>\r\n<tr>\r\n<td>Демонтаж полотенцесушителя</td>\r\n<td>от 1000/шт.</td>\r\n</tr>\r\n<tr>\r\n<td>Демонтаж подводки водоснабжения</td>\r\n<td>от 1600/компл.</td>\r\n</tr>\r\n<tr>\r\n<td>Демонтаж канализационной подводки</td>\r\n<td>от 1400/компл.</td>\r\n</tr>\r\n<tr>\r\n<td>Демонтаж канализационного стояка</td>\r\n<td>от 800/шт.</td>\r\n</tr>\r\n<tr>\r\n<td>Демонтаж канализационного стояка</td>\r\n<td>от 350/шт.</td>\r\n</tr>\r\n<tr>\r\n<td>Демонтаж водосчетчика</td>\r\n<td>от 600/шт.</td>\r\n</tr>\r\n<tr>\r\n<td>Демонтаж ванны (без учета выноса)</td>\r\n<td>от 1000/шт.</td>\r\n</tr>\r\n<tr>\r\n<td>Демонтаж раковины/унитаза</td>\r\n<td>от 500/шт.</td>\r\n</tr>\r\n<!-- Добавьте другие строки по необходимости --></tbody>\r\n</table>\r\n</div>\r\n<!-- Монтажные работы -->\r\n<div id=\"montazh-unique\" class=\"tab-pane fade\" role=\"tabpanel\" aria-labelledby=\"montazh-tab-unique\">\r\n<table class=\"table table-bordered fs-5\">\r\n<thead>\r\n<tr>\r\n<th>Услуга</th>\r\n<th>ед. изм./цена</th>\r\n</tr>\r\n</thead>\r\n<tbody>\r\n<tr>\r\n<td>Замена радиатора отопления - алюминиевый</td>\r\n<td>от 6500/шт.</td>\r\n</tr>\r\n<tr>\r\n<td>Замена радиатора отопления - биметаллический</td>\r\n<td>от 7500/шт.</td>\r\n</tr>\r\n<tr>\r\n<td>Замена радиатора отопления - чугунный</td>\r\n<td>от 8500/шт.</td>\r\n</tr>\r\n<tr>\r\n<td>Замена радиатора отопления - дизайнерский</td>\r\n<td>от 12000/шт.</td>\r\n</tr>\r\n<tr>\r\n<td>Замена стоячной трубы</td>\r\n<td>от 2600/шт.</td>\r\n</tr>\r\n<tr>\r\n<td>Монтаж трубы в плите перекрытия (1 проход)</td>\r\n<td>от 1800/шт.</td>\r\n</tr>\r\n<tr>\r\n<td>Замена полотенцесушителя</td>\r\n<td>от 4500/шт.</td>\r\n</tr>\r\n<tr>\r\n<td>Монтаж разводки водоснабжения (полипропилен)</td>\r\n<td>от 12000/компл.</td>\r\n</tr>\r\n<tr>\r\n<td>Монтаж канализационного стояка</td>\r\n<td>от 3000/шт.</td>\r\n</tr>\r\n<tr>\r\n<td>Монтаж канализационной подводки</td>\r\n<td>от 6000/компл.</td>\r\n</tr>\r\n<tr>\r\n<td>Монтаж канализационного тройника</td>\r\n<td>от 800/шт.</td>\r\n</tr>\r\n<!-- Добавьте другие строки по необходимости --></tbody>\r\n</table>\r\n</div>\r\n<!-- Установка сантехнического оборудования -->\r\n<div id=\"ustanovka-unique\" class=\"tab-pane fade\" role=\"tabpanel\" aria-labelledby=\"ustanovka-tab-unique\">\r\n<table class=\"table table-bordered fs-5\">\r\n<thead>\r\n<tr>\r\n<th>Услуга</th>\r\n<th>ед. изм./цена</th>\r\n</tr>\r\n</thead>\r\n<tbody>\r\n<tr>\r\n<td>Установка заводского душевого поддона</td>\r\n<td>от 3000/шт.</td>\r\n</tr>\r\n<tr>\r\n<td>Изготовление душевого поддона</td>\r\n<td>от 10000/компл.</td>\r\n</tr>\r\n<tr>\r\n<td>Установка сливного трапа</td>\r\n<td>от 1000/шт.</td>\r\n</tr>\r\n<tr>\r\n<td>Монтаж стеклянных душевых перегородок (ширм)</td>\r\n<td>от 3000/компл.</td>\r\n</tr>\r\n<tr>\r\n<td>Облицовка душевого поддона мозаикой + цементная затирка</td>\r\n<td>от 10000/компл.</td>\r\n</tr>\r\n<tr>\r\n<td>Установка ванны - стальная</td>\r\n<td>от 2500/шт.</td>\r\n</tr>\r\n<tr>\r\n<td>Установка ванны - акриловая</td>\r\n<td>от 3000/шт.</td>\r\n</tr>\r\n<tr>\r\n<td>Установка ванны - чугунная</td>\r\n<td>от 4000/шт.</td>\r\n</tr>\r\n<tr>\r\n<td>Установка ванны с гидромассажем</td>\r\n<td>10% от стоимости ванны</td>\r\n</tr>\r\n<tr>\r\n<td>Установка раковины/тюльпана</td>\r\n<td>от 1200/шт.</td>\r\n</tr>\r\n<tr>\r\n<td>Установка мойдодыра</td>\r\n<td>от 1500/шт.</td>\r\n</tr>\r\n<tr>\r\n<td>Установка инсталляции</td>\r\n<td>от 4000/шт.</td>\r\n</tr>\r\n<tr>\r\n<td>Установка унитаза</td>\r\n<td>от 1500/шт.</td>\r\n</tr>\r\n<tr>\r\n<td>Установка биде</td>\r\n<td>от 1500/шт.</td>\r\n</tr>\r\n<tr>\r\n<td>Сборка душевой кабины</td>\r\n<td>15% от стоимости душевой кабины</td>\r\n</tr>\r\n<tr>\r\n<td>Установка душевой кабины</td>\r\n<td>10% от стоимости душевой кабины</td>\r\n</tr>\r\n<tr>\r\n<td>Установка гигиенического душа</td>\r\n<td>от 2500/шт.</td>\r\n</tr>\r\n<tr>\r\n<td>Установка смесителя</td>\r\n<td>от 700/шт.</td>\r\n</tr>\r\n<tr>\r\n<td>Установка тропического душа - внутреннего монтажа</td>\r\n<td>от 4500/шт.</td>\r\n</tr>\r\n<tr>\r\n<td>Установка тропического душа - наружного монтажа</td>\r\n<td>от 2000/шт.</td>\r\n</tr>\r\n<tr>\r\n<td>Монтаж аксессуаров</td>\r\n<td>от 300/шт.</td>\r\n</tr>\r\n<tr>\r\n<td>Монтаж водонагревателя (бойлера)</td>\r\n<td>от 2000/шт.</td>\r\n</tr>\r\n<tr>\r\n<td>Установка и подключение стиральной машины</td>\r\n<td>от 1200/шт.</td>\r\n</tr>\r\n<tr>\r\n<td>Установка кухонной мойки</td>\r\n<td>от 700/шт.</td>\r\n</tr>\r\n<!-- Добавьте другие строки по необходимости --></tbody>\r\n</table>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"container my-5\">\r\n<h2 class=\"text-center text-danger fw-bold mb-4\">СКОЛЬКО НУЖНО ДЕНЕЖНЫХ СРЕДСТВ НА РЕМОНТ КВАРТИРЫ?</h2>\r\n<div class=\"row align-items-center\">\r\n<div class=\"col-md-4\"><img class=\"img-fluid\" src=\"http://127.0.0.1:8000/img/team/kalkulyator-stoimosti-remonta-kvartiry.webp\" alt=\"Калькулятор и строительные планы\"></div>\r\n<div class=\"col-md-8\">\r\n<p class=\"lead fs-5\">Если Вы задумали обратиться по ремонту, у Вас возникнут вопросы:</p>\r\n<ul class=\"\">\r\n<li>&mdash; Сколько денег для ремонта квартиры потребуется?</li>\r\n<li>&mdash; Какой бюджет необходимо планировать?</li>\r\n<li>&mdash; Разница между стандартным и эксклюзивным ремонтом?</li>\r\n<li>&mdash; Что входит в озвученную цену, только работы?</li>\r\n<li>&mdash; Входят ли в указанную цену материалы?</li>\r\n</ul>\r\n<p>Наша компания оказывает услуги на ремонтно-отделочные работы разной сложности, поэтому по опыту можем сказать наверняка, что каждый объект уникален. Где-то стены ровные, а где-то с нарушениями плоскости, также с полом и потолком. В одном случае требуется серьезная подготовка, в другом не требуются такие мероприятия. Каждый человек индивидуален и требования у всех абсолютно разные. Кому-то важен результат на 5+, на 4-, а бывает на 3- достаточно.</p>\r\n<p>Выполнение ремонта любой сложности &mdash; хлопотное занятие, но при правильном выборе организации Вы отлично справитесь с задачей. Поскольку, ремонт квартиры затратное дело, кроме надежного исполнителя и ваших пожеланий, сильно влияет бюджет.</p>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"container my-5\">\r\n<h2 class=\"text-center text-danger fw-bold mb-4 mt-5\">ЧТО ВХОДИТ В СТОИМОСТЬ РЕМОНТА</h2>\r\n<p class=\"lead fs-5\">На вопросы по ценам на ремонт &mdash; ответы неоднозначные. Каждый Клиент понимает по своему: одни думают, что в стоимость входят только работы, другие, что в цену на ремонт входят работы, дизайнерский проект и все необходимые материалы. В некоторых случаях предполагают, что помимо работ по ремонту и отделочных материалов в цену также включены чертежи, мебель и многое другое.</p>\r\n<p class=\"lead fs-5\">Когда после всех необходимых расчетов цена за ремонт озвучена, Заказчики в первую очередь задают вопрос: &laquo;Что входит, а что не входит в озвученную стоимость?&raquo;. Давайте рассмотрим два комплекса по ремонту в одном помещении:</p>\r\n<ul class=\"lead fs-5\">\r\n<li>первый вариант &mdash; стандартный ремонт квартиры без каких либо изысков;</li>\r\n<li>второй вариант &mdash; эксклюзивный ремонт квартиры по дизайн-проекту с применением очень дорогих и высококачественных материалов под заказ.</li>\r\n</ul>\r\n<div class=\"row my-5\">\r\n<div class=\"col-md-6\">\r\n<h4 class=\"fw-bold text-center\">Стандартный ремонт квартиры</h4>\r\n<p class=\"lead fs-5\">При выполнении стандартного комплекса основная часть денежных расходов идет на материалы для черновой отделки и на оплату работы. На чистовых материалах можно сэкономить, приобрести со скидкой. Дизайн-проект можно составить самим, также с дизайном могут помочь отделочники или прораб &mdash; безвозмездно, который ведет Ваш объект. В стандартной отделке применяются бюджетные чистовые материалы и ремонт производится без дизайн-проекта. <br>Стоимость определяется после проведения замера и осмотра объекта специалистом компании инженером-сметчиком.</p>\r\n</div>\r\n<div class=\"col-md-6\"><img class=\"img-fluid\" src=\"http://127.0.0.1:8000/img/price/Standartnyj-remont-kvartir-958x1024.jpg\" alt=\"Standard renovation project\"></div>\r\n</div>\r\n<div class=\"row my-5\">\r\n<div class=\"col-md-6\"><img class=\"img-fluid\" src=\"http://127.0.0.1:8000/img/price/raschet-remonta.jpg\" alt=\"Exclusive renovation project\"></div>\r\n<div class=\"col-md-6\">\r\n<h4 class=\"fw-bold text-center\">Эксклюзивный ремонт квартиры</h4>\r\n<p class=\"lead fs-5\">Эксклюзивный ремонт &mdash; это комплекс работ по ремонту и отделки квартиры, в результате которых Заказчик получает ремонт премиум класса. Такой вид производят по детальному дизайнерскому проекту. <br>Подбирается весь отделочно-чистовой материал и заказывается мебель. Применяются современные технологии и дорогие эксклюзивные материалы. <br>Стоимость такого вида определяется только после окончательного расчета и составления сметы по дизайн-проекту с перечнем всех необходимых работ.</p>\r\n</div>\r\n</div>\r\n<h3 class=\"text-center text-danger fw-bold mb-4 mt-5\">Полезная информация для Заказчиков</h3>\r\n<p class=\"lead fs-5\">Вам нужно понимать, что точная цена ремонта может быть озвучена только после:</p>\r\n<ul class=\"lead fs-5\">\r\n<li>осмотра и замера объекта инженером сметчиком компании, в которую Вы обратились для заказа стандартного ремонта квартиры;</li>\r\n<li>разработки дизайнерского проекта и изучения его инженером-сметчиком компании, если ремонт по дизайн проекту.</li>\r\n</ul>\r\n<p class=\"lead fs-5\">После того как замерщик осмотрит и произведет все необходимые замеры, ознакомится с дизайн-проектом, Вам будет озвучена точная цена на все отделочные работы. <br>Прежде чем приступить к ремонту, заключается договор бытового подряда, с указанием цен за работы и сроков. <br>Также обратите внимание, что стоимость озвучивается только за работы без учета стоимости материалов. <br>Мы можем Вам сказать только приблизительную цену на черновые материалы. <br>Что касается отделочных чистовых материалов, то здесь в каждом конкретном случае индивидуально. Все зависит от пожеланий и бюджета клиента, т.к. расценки на чистовой материал приобретаемый в магазинах Красноярска очень большой разбег. В Красноярске большое количество магазинов с разнообразными декоративными материалами и именно поэтому мы предлагаем Вам воспользоваться услугой компании по комплектации, мы поможем подобрать для Вас необходимый материал исходя из ваших пожеланий по приемлемым ценам. <br>Дизайн-проект квартиры в указанную сумму не входит. <br>Мы рекомендуем Вам отдать предпочтение ремонту квартиры под ключ, такой комплекс позволит Вам сэкономить не в ущерб качеству.</p>\r\n<div class=\"container my-5\">\r\n<h3 class=\"text-center text-danger fw-bold mb-4\">Преимущества нашей организации</h3>\r\n<div class=\"row text-center\">\r\n<div class=\"col-md-4 mb-4\">\r\n<p class=\"mt-2 lead fs-5\">Работа в рамках официального договора и гарантия 2 года.</p>\r\n</div>\r\n<div class=\"col-md-4 mb-4\">\r\n<p class=\"mt-2 lead fs-5\">После заключения договора сумма за отделочные работы не меняется.</p>\r\n</div>\r\n<div class=\"col-md-4 mb-4\">\r\n<p class=\"mt-2 lead fs-5\">Мы можем выполнять услуги по ремонту жилья с проживающими жильцами.</p>\r\n</div>\r\n<div class=\"col-md-4 mb-4\">\r\n<p class=\"mt-2 lead fs-5\">Осуществляем контроль за ходом ремонтно-отделочных работ на всех текущих объектах.</p>\r\n</div>\r\n<div class=\"col-md-4 mb-4\">\r\n<p class=\"mt-2 lead fs-5\">Мы готовы провести экскурсию по объектам и показать работу наших мастеров вживую.</p>\r\n</div>\r\n<div class=\"col-md-4 mb-4\">\r\n<p class=\"mt-2 lead fs-5\">На сайте указаны налоговые юридические данные компании.</p>\r\n</div>\r\n</div>\r\n</div>\r\n</div>', NULL, 'prices', 'price', 'price', 'ACTIVE', '2024-08-21 22:24:55', '2024-08-21 23:38:37'),
(5, 2, 'studio_apartment', 'studio apartment', '<div class=\"container my-5\">\r\n<h1 class=\"fs-2 text-center fw-bold text-danger\">Ремонт квартир-студий в Красноярске</h1>\r\n<p class=\"text-center mb-4 lead fs-5\">Ремонт в квартире-студии последнее время набирает популярность, особенно среди молодого поколения. Самое главное преимущество &mdash; относительно низкая цена по сравнению с однокомнатной недвижимостью, за счет чего жилье становится доступным и часто приобретаемым. Основное отличие от других видов жилья &mdash; это свободная планировка, характеризующаяся полным отсутствием межкомнатных стен и перегородок, исключением является только санузел.</p>\r\n<h3 class=\"text-center mb-4\">Виды студий</h3>\r\n<p class=\"text-center mb-4 lead fs-5\">Студии можно разделить на две категории</p>\r\n<div class=\"row justify-content-center\">\r\n<div class=\"col-md-3 text-center\">\r\n<div class=\"card\"><img class=\"img-fluid card-img-top mx-auto\" style=\"width: 100%; max-width: 200px;\" src=\"http://127.0.0.1:8000/img/room/novostrojka-193x300.png\" alt=\"Новостройка\">\r\n<div class=\"card-body\">\r\n<h5 class=\"card-title\">Новостройка</h5>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"col-md-3 text-center\">\r\n<div class=\"card\"><img class=\"mx-auto img-fluid card-img-top\" style=\"width: 100%; max-width: 200px;\" src=\"http://127.0.0.1:8000/img/room/vtorichnoe-zhile-193x300.png\" alt=\"Вторичное жилье\">\r\n<div class=\"card-body\">\r\n<h5 class=\"card-title\">Вторичное жилье</h5>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"container my-5\">\r\n<h2 class=\"text-center text-danger fw-bold mb-4\">Наши услуги и цены</h2>\r\n<p class=\"text-center mb-4 lead fs-5\">Наша компания осуществляет ремонт квартир в Красноярске под ключ любой сложности и планировки. Мы поможем осуществить любые идеи по планированию пространства.</p>\r\n<table class=\"table table-bordered text-center fs-5\">\r\n<thead>\r\n<tr>\r\n<th class=\"lead fs-5\" scope=\"col\">Услуга</th>\r\n<th class=\"lead fs-5\" scope=\"col\">Стоимость</th>\r\n</tr>\r\n</thead>\r\n<tbody>\r\n<tr>\r\n<td class=\"lead fs-5\"><a class=\"text-success text-decoration-none\" href=\"#\">Разработка и создание дизайн-проекта</a></td>\r\n<td class=\"lead fs-5\">от 2300 за кв. м.</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p class=\"text-center mb-4 lead fs-5\">Предлагаем Вам услуги дизайнера. Исходя из ваших пожеланий составим дизайнерский проект с подробными чертежами и визуализацией, расстановкой мебели и элементов декора.</p>\r\n<table class=\"table table-bordered text-center fs-5\">\r\n<thead>\r\n<tr>\r\n<th class=\"lead fs-5\" scope=\"col\">Виды ремонта</th>\r\n<th class=\"lead fs-5\" scope=\"col\">Стоимость</th>\r\n</tr>\r\n</thead>\r\n<tbody>\r\n<tr>\r\n<td class=\"lead fs-5\"><a class=\"text-success text-decoration-none\" href=\"#\">Капитальный ремонт квартиры студии</a></td>\r\n<td class=\"lead fs-5\">от 12000 за кв. м.</td>\r\n</tr>\r\n<tr>\r\n<td class=\"lead fs-5\"><a class=\"text-success text-decoration-none\" href=\"#\">Косметический ремонт квартиры студии</a></td>\r\n<td class=\"lead fs-5\">от 5000 за кв. м.</td>\r\n</tr>\r\n<tr>\r\n<td class=\"lead fs-5\"><a class=\"text-success text-decoration-none\" href=\"#\">Ремонт квартиры студии под ключ</a></td>\r\n<td class=\"lead fs-5\">от 12000 за кв. м.</td>\r\n</tr>\r\n<tr>\r\n<td class=\"lead fs-5\"><a class=\"text-success text-decoration-none\" href=\"#\">Евроремонт квартиры студии</a></td>\r\n<td class=\"lead fs-5\">от 13000 за кв. м.</td>\r\n</tr>\r\n<tr>\r\n<td class=\"lead fs-5\"><a class=\"text-success text-decoration-none\" href=\"#\">Дизайнерский ремонт квартиры студии</a></td>\r\n<td class=\"lead fs-5\">от 19000 за кв. м.</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n</div>', NULL, 'studio_apartment', 'studio apartment', 'studio apartment', 'ACTIVE', '2024-08-21 23:36:41', '2024-08-22 06:55:21'),
(6, 2, 'studio apartment1', 'studio apartment1', '<div class=\"container my-5\">\r\n<h2 class=\"fs-2 text-center fw-bold text-danger mb-4\">Перепланировка однокомнатной квартиры в Красноярске</h2>\r\n<p class=\"lead text-center fs-5\">Преобразить квартиру можно не только с помощью ремонта, но и с помощью дизайна интерьера и перепланировки. Правильная расстановка акцентов, дизайнерский стиль и зонирование помогут правильно организовать жилое пространство для комфортной жизни.</p>\r\n<div class=\"row mt-4\">\r\n<div class=\"col-md-4\">\r\n<div class=\"card h-100\">\r\n<div id=\"slider1\" class=\"carousel slide\" data-bs-ride=\"carousel\">\r\n<div class=\"carousel-inner\">\r\n<div class=\"carousel-item active\"><img class=\"d-block w-100 img-fluid\" style=\"height: 400px; object-fit: cover;\" src=\"http://127.0.0.1:8000/img/room/Снимок экрана 2024-08-22 141911.png\" alt=\"План 1\"></div>\r\n<div class=\"carousel-item\"><img class=\"d-block w-100 img-fluid\" style=\"height: 400px; object-fit: cover;\" src=\"http://127.0.0.1:8000/img/room/Снимок экрана 2024-08-22 142315.png\" alt=\"План 2\"></div>\r\n</div>\r\n<button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#slider1\" data-bs-slide=\"prev\"> <span class=\"visually-hidden\">Previous</span> </button> <button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#slider1\" data-bs-slide=\"next\"> <span class=\"visually-hidden\">Next</span> </button></div>\r\n<div class=\"card-body\">\r\n<p class=\"card-text\">Из однокомнатной квартиры &laquo;хрущевки&raquo; можно сделать квартиру-студию. Расширить пространство санузла, что позволит уместить стиральную машинку. На месте кладовки сделать гардеробную комнату.</p>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"col-md-4\">\r\n<div class=\"card h-100\">\r\n<div id=\"slider2\" class=\"carousel slide\" data-bs-ride=\"carousel\">\r\n<div class=\"carousel-inner pb-5\">\r\n<div class=\"carousel-item active\"><img class=\"d-block w-100 img-fluid\" style=\"height: 350px; object-fit: cover;\" src=\"http://127.0.0.1:8000/img/room/Снимок экрана 2024-08-22 142434.png\" alt=\"План 1\"></div>\r\n<div class=\"carousel-item\"><img class=\"d-block w-100 img-fluid\" style=\"height: 350px; object-fit: cover;\" src=\"http://127.0.0.1:8000/img/room/Снимок экрана 2024-08-22 142455.png\" alt=\"План 2\"></div>\r\n</div>\r\n<button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#slider2\" data-bs-slide=\"prev\"> <span class=\"visually-hidden\">Previous</span> </button> <button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#slider2\" data-bs-slide=\"next\"> <span class=\"visually-hidden\">Next</span> </button></div>\r\n<div class=\"card-body\">\r\n<p class=\"card-text\">Можно расширить жилое пространство если утеплить лоджию, сделать теплый пол и остекление с высокими теплоизоляционными характеристиками. Объединение коридора и кухни также позволит расширить площадь.</p>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"col-md-4\">\r\n<div class=\"card h-100\">\r\n<div id=\"slider3\" class=\"carousel slide\" data-bs-ride=\"carousel\">\r\n<div class=\"carousel-inner\">\r\n<div class=\"carousel-item active\"><img class=\"d-block w-100 img-fluid\" style=\"height: 400px; object-fit: cover;\" src=\"http://127.0.0.1:8000/img/room/Снимок экрана 2024-08-22 142516.png\" alt=\"План 1\"></div>\r\n<div class=\"carousel-item\"><img class=\"d-block w-100 img-fluid\" style=\"height: 400px; object-fit: cover;\" src=\"http://127.0.0.1:8000/img/room/Снимок экрана 2024-08-22 142556.png\" alt=\"План 2\"></div>\r\n</div>\r\n<button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#slider3\" data-bs-slide=\"prev\"> <span class=\"visually-hidden\">Previous</span> </button> <button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#slider3\" data-bs-slide=\"next\"> <span class=\"visually-hidden\">Next</span> </button></div>\r\n<div class=\"card-body\">\r\n<p class=\"card-text\">Угловую однокомнатную квартиру можно переделать в еврооднушку. Объединить кухню и гостиную, а с помощью перегородки отделить пространство где будет расположена спальня.</p>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"container my-5\">\r\n<h2 class=\"fs-2 text-center fw-bold text-danger mb-4\">Стоимость ремонта однокомнатной квартиры в Красноярске</h2>\r\n<table class=\"table table-bordered fs-5\">\r\n<thead>\r\n<tr>\r\n<th style=\"text-align: center;\" scope=\"col\">Виды услуг</th>\r\n<th style=\"text-align: center;\" scope=\"col\">Цена</th>\r\n</tr>\r\n</thead>\r\n<tbody>\r\n<tr>\r\n<td class=\"text-center\"><a class=\"text-success text-decoration-none\" href=\"#\">Разработка и создание дизайнерского проекта</a></td>\r\n<td class=\"text-center\">от 2300 за кв. м.</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p class=\"lead fs-5 text-center\">Благодаря творческому подходу нашего дизайнера &mdash; в результате Вы сможете получить идеально обустроенное для проживания жилье.</p>\r\n<table class=\"table table-bordered fs-5\">\r\n<thead>\r\n<tr>\r\n<th style=\"text-align: center;\" scope=\"col\">Виды ремонта</th>\r\n<th style=\"text-align: center;\" scope=\"col\">Стоимость</th>\r\n</tr>\r\n</thead>\r\n<tbody>\r\n<tr>\r\n<td class=\"text-center\"><a class=\"text-success text-decoration-none\" href=\"#\">Капитальный ремонт однокомнатной квартиры</a></td>\r\n<td class=\"text-center\">от 12000 за кв. м.</td>\r\n</tr>\r\n<tr>\r\n<td class=\"text-center\"><a class=\"text-success text-decoration-none\" href=\"#\">Косметический ремонт однокомнатной квартиры</a></td>\r\n<td class=\"text-center\">от 5000 за кв. м.</td>\r\n</tr>\r\n<tr>\r\n<td class=\"text-center\"><a class=\"text-success text-decoration-none\" href=\"#\">Ремонт однокомнатной квартиры под ключ</a></td>\r\n<td class=\"text-center\">от 12000 за кв. м.</td>\r\n</tr>\r\n<tr>\r\n<td class=\"text-center\"><a class=\"text-success text-decoration-none\" href=\"#\">Евроремонт однокомнатной квартиры</a></td>\r\n<td class=\"text-center\">от 13000 за кв. м.</td>\r\n</tr>\r\n<tr>\r\n<td class=\"text-center\"><a class=\"text-success text-decoration-none\" href=\"#\">Дизайнерский ремонт однокомнатной квартиры</a></td>\r\n<td class=\"text-center\">от 19000 за кв. м.</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n</div>', NULL, 'studio_apartment1', 'studio apartment1', 'studio apartment1', 'ACTIVE', '2024-08-22 00:17:16', '2024-08-22 06:55:35');
INSERT INTO `pages` (`id`, `author_id`, `title`, `excerpt`, `body`, `image`, `slug`, `meta_description`, `meta_keywords`, `status`, `created_at`, `updated_at`) VALUES
(7, 2, 'ремонт двухкомнатной', 'ремонт двухкомнатной', '<div class=\"container my-5\">\r\n<h2 class=\"fs-2 text-center fw-bold text-danger mb-4\">Перепланировка двухкомнатной квартиры в Красноярске</h2>\r\n<p class=\"lead text-center fs-5\">Для двухкомнатных квартир имеются разные варианты перепланировки. Вторичное жилье характеризуется небольшим жилым пространством и не всегда отвечает удобствам расположения комнат, размера кухни и так далее. Мы готовы Вам предложить разные варианты планирования жилого пространства исходя из ваших пожеланий и потребностей.</p>\r\n<div class=\"row mt-4\">\r\n<div class=\"col-md-4\">\r\n<div class=\"card h-100\">\r\n<div id=\"slider1\" class=\"carousel slide\" data-bs-ride=\"carousel\">\r\n<div class=\"carousel-inner\" style=\"min-height: 230px;\">\r\n<div class=\"carousel-item active\"><img class=\"d-block mx-auto\" style=\"max-height: 250px; width: auto;\" src=\"http://127.0.0.1:8000/img/room/Снимок экрана 2024-08-22 201409.png\" alt=\"План 1\"></div>\r\n<div class=\"carousel-item\"><img class=\"d-block mx-auto\" style=\"max-height: 250px; width: auto;\" src=\"http://127.0.0.1:8000/img/room/Снимок экрана 2024-08-22 201448.png\" alt=\"План 2\"></div>\r\n</div>\r\n<button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#slider1\" data-bs-slide=\"prev\"> <span class=\"visually-hidden\">Previous</span> </button> <button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#slider1\" data-bs-slide=\"next\"> <span class=\"visually-hidden\">Next</span> </button></div>\r\n<div class=\"card-body\">\r\n<p class=\"card-text\">В квартире с проходной комнатой нередко остро встает вопрос о перепланировке, особенно если в семье есть дети. Квадратура такой квартиры позволяет не только разделить гостиную и детскую, но и отделить место под гардеробную или кладовку. Дополнительно можно при помощи зонирования большую комнату разграничить на зону для сна и гостиную.</p>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"col-md-4\">\r\n<div class=\"card h-100\">\r\n<div id=\"slider2\" class=\"carousel slide\" style=\"min-height: 230px;\" data-bs-ride=\"carousel\">\r\n<div class=\"carousel-inner pb-5\">\r\n<div class=\"carousel-item active\"><img class=\"d-block mx-auto\" style=\"max-height: 250px; width: auto;\" src=\"http://127.0.0.1:8000/img/room/Снимок экрана 2024-08-22 201505.png\" alt=\"План 1\"></div>\r\n<div class=\"carousel-item\"><img class=\"d-block mx-auto\" style=\"max-height: 250px; width: auto;\" src=\"http://127.0.0.1:8000/img/room/Снимок экрана 2024-08-22 201516.png\" alt=\"План 2\"></div>\r\n</div>\r\n<button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#slider2\" data-bs-slide=\"prev\"> <span class=\"visually-hidden\">Previous</span> </button> <button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#slider2\" data-bs-slide=\"next\"> <span class=\"visually-hidden\">Next</span> </button></div>\r\n<div class=\"card-body\">\r\n<p class=\"card-text\">Двухкомнатную квартиру можно переделать в трехкомнатную. Для этого изолированная комната разделяется с помощью перегородки, таким образом получается две уютные спальни, а проходная комната будет нести функцию гостиной. Также можно увеличить пространство ванной комнаты за счет площади коридора.</p>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"col-md-4\">\r\n<div class=\"card h-100\">\r\n<div id=\"slider3\" class=\"carousel slide\" style=\"min-height: 230px;\" data-bs-ride=\"carousel\">\r\n<div class=\"carousel-inner\">\r\n<div class=\"carousel-item active\"><img class=\"d-block mx-auto\" style=\"max-height: 250px; width: auto;\" src=\"http://127.0.0.1:8000/img/room/Снимок экрана 2024-08-22 201543.png\" alt=\"План 1\"></div>\r\n<div class=\"carousel-item\"><img class=\"d-block mx-auto\" style=\"max-height: 250px; width: auto;\" src=\"http://127.0.0.1:8000/img/room/Снимок экрана 2024-08-22 201558.png\" alt=\"План 2\"></div>\r\n</div>\r\n<button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#slider3\" data-bs-slide=\"prev\"> <span class=\"visually-hidden\">Previous</span> </button> <button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#slider3\" data-bs-slide=\"next\"> <span class=\"visually-hidden\">Next</span> </button></div>\r\n<div class=\"card-body\">\r\n<p class=\"card-text\">Из двухкомнатной квартиры можно сделать современную евродвушку. Есть несколько вариантов расширения пространства:<br>&mdash; объединение гостиной и кухни;<br>&mdash; утепление лоджии с последующим объединением с комнатой;<br>&mdash; совмещение ванной комнаты и туалета.</p>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"container my-5\">\r\n<h2 class=\"fs-2 text-center fw-bold text-danger mb-4\">Стоимость ремонта двухкомнатной квартиры в Красноярске</h2>\r\n<table class=\"table table-bordered fs-5\">\r\n<thead>\r\n<tr>\r\n<th style=\"text-align: center;\" scope=\"col\">Виды услуг</th>\r\n<th style=\"text-align: center;\" scope=\"col\">Цена</th>\r\n</tr>\r\n</thead>\r\n<tbody>\r\n<tr>\r\n<td class=\"text-center\"><a class=\"text-success text-decoration-none\" href=\"#\">Создание и разработка дизайнерского проекта</a></td>\r\n<td class=\"text-center\">от 2300 за кв. м.</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p class=\"lead fs-5 text-center\">Наш дизайнер сможет разработать для Вас идеальную концепцию и дизайнерский стиль квартиры.</p>\r\n<table class=\"table table-bordered fs-5\">\r\n<thead>\r\n<tr>\r\n<th style=\"text-align: center;\" scope=\"col\">Виды ремонта</th>\r\n<th style=\"text-align: center;\" scope=\"col\">Стоимость</th>\r\n</tr>\r\n</thead>\r\n<tbody>\r\n<tr>\r\n<td class=\"text-center\"><a class=\"text-success text-decoration-none\" href=\"#\">Капитальный ремонт двухкомнатной квартиры</a></td>\r\n<td class=\"text-center\">от 12000 за кв. м.</td>\r\n</tr>\r\n<tr>\r\n<td class=\"text-center\"><a class=\"text-success text-decoration-none\" href=\"#\">Косметический ремонт двухкомнатной квартиры</a></td>\r\n<td class=\"text-center\">от 5000 за кв. м.</td>\r\n</tr>\r\n<tr>\r\n<td class=\"text-center\"><a class=\"text-success text-decoration-none\" href=\"#\">Ремонт двухкомнатной квартиры под ключ</a></td>\r\n<td class=\"text-center\">от 12000 за кв. м.</td>\r\n</tr>\r\n<tr>\r\n<td class=\"text-center\"><a class=\"text-success text-decoration-none\" href=\"#\">Евроремонт двухкомнатной квартиры</a></td>\r\n<td class=\"text-center\">от 13000 за кв. м.</td>\r\n</tr>\r\n<tr>\r\n<td class=\"text-center\"><a class=\"text-success text-decoration-none\" href=\"#\">Дизайнерский ремонт двухкомнатной квартиры</a></td>\r\n<td class=\"text-center\">от 19000 за кв. м.</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n</div>\r\n<div class=\"container my-5 mb-5\">\r\n<h2 class=\"fs-2 text-center fw-bold text-danger mb-4 \">Фото примеры ремонта двухкомнатной квартиры</h2>\r\n<div class=\"row text-center mt-5\">\r\n<div class=\"col-md-4\">\r\n<div class=\"card\"><img class=\"card-img-top\" src=\"http://127.0.0.1:8000/img/room/Remont-kvartiry.-Partizana-ZHeleznyaka-48zh-foto-9-225x300.jpg\" alt=\"Дизайнерский ремонт\">\r\n<div class=\"card-body\">\r\n<p class=\"card-text text-danger fw-bold\">Ремонт по дизайн-проекту</p>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"col-md-4\">\r\n<div class=\"card\"><img class=\"card-img-top\" src=\"http://127.0.0.1:8000/img/room/Kopylova-48.-Foto-6-225x300.jpg\" alt=\"Капитальный ремонт\">\r\n<div class=\"card-body\">\r\n<p class=\"card-text text-danger fw-bold\">Капитальный ремонт квартиры</p>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"col-md-4\">\r\n<div class=\"card\"><img class=\"card-img-top\" src=\"http://127.0.0.1:8000/img/room/remont-dvuhkomnatnoj-kvartiry-bykovskogo-5d.-foto-18-225x300.jpg\" alt=\"Комплексный ремонт\">\r\n<div class=\"card-body\">\r\n<p class=\"card-text text-danger fw-bold\">Ремонт под ключ</p>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n<p class=\"lead text-center fs-5 mt-5\">Вы можете посмотреть <a class=\"text-success text-decoration-none\" href=\"#\">галерею выполненных работ</a> и <a class=\"text-success text-decoration-none\" href=\"#\">видео отчеты</a> на нашем сайте.</p>\r\n<p class=\"lead fs-5\">Заказать ремонт квартиры Вы можете любым удобным для вас способом:</p>\r\n<ul class=\"fs-5\">\r\n<li>заявка на сайте;</li>\r\n<li>в телефонном режиме, позвонив по номеру <a class=\"text-success text-decoration-none\" href=\"tel:+73912938226\">+7(391)293-82-26</a>.</li>\r\n</ul>\r\n</div>', NULL, 'remont-dvuhkomnatnoj', 'ремонт двухкомнатной', 'ремонт двухкомнатной', 'ACTIVE', '2024-08-22 06:04:35', '2024-08-22 06:54:16'),
(8, 2, 'Ремонт трехкомнатной', 'Ремонт трехкомнатной', '<div class=\"container my-5\">\r\n<h2 class=\"fs-2 text-center fw-bold text-danger mb-4\">Перепланировка трехкомнатной квартиры в Красноярске</h2>\r\n<p class=\"lead text-center fs-5\">Наша компания осуществляет ремонт трехкомнатных квартир в Красноярске. Выполняем все виды ремонтно-отделочных услуг под ключ. Ремонт в 3-комнатной квартире является востребованной услугой. Зачастую мы сталкиваемся с потребностью не просто выполнить ремонтные работы, но и осуществить перепланировочные мероприятия для более комфортного дальнейшего проживания Заказчиков. Наш дизайнер и инженер-сметчик помогут подобрать идеальный вариант для Вашего помещения исходя из ваших предпочтений и пожеланий. Целью нашей работы является создать уютную, удобную для проживания квартиру. Мы готовы предложить вам разнообразные варианты преобразования жилья при помощи перепланировки и дизайна интерьера.</p>\r\n<div class=\"row mt-4\">\r\n<div class=\"col-md-4\">\r\n<div class=\"card h-100\">\r\n<div id=\"slider1\" class=\"carousel slide\" data-bs-ride=\"carousel\">\r\n<div class=\"carousel-inner\" style=\"min-height: 230px;\">\r\n<div class=\"carousel-item active\"><img class=\"d-block mx-auto\" style=\"max-height: 250px; width: auto;\" src=\"http://127.0.0.1:8000/img/room/Снимок экрана 2024-08-22 205817.png\" alt=\"План 1\"></div>\r\n<div class=\"carousel-item\"><img class=\"d-block mx-auto\" style=\"max-height: 250px; width: auto;\" src=\"http://127.0.0.1:8000/img/room/Снимок экрана 2024-08-22 205831.png\" alt=\"План 2\"></div>\r\n</div>\r\n<button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#slider1\" data-bs-slide=\"prev\"> <span class=\"visually-hidden\">Previous</span> </button> <button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#slider1\" data-bs-slide=\"next\"> <span class=\"visually-hidden\">Next</span> </button></div>\r\n<div class=\"card-body\">\r\n<p class=\"card-text\">В данном проекте задачей было расширить пространство гостиной за счет коридора, что позволило бы реализовать различные дизайнерские идеи. А если демонтировать смежную перегородку между гостиной и кухней, то получится полноценная евротрешка. Дополнительно совместили ванную и туалет, заложили один дверной проем и за счет этого немного увеличели площадь комнаты.</p>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"col-md-4\">\r\n<div class=\"card h-100\">\r\n<div id=\"slider2\" class=\"carousel slide\" style=\"min-height: 230px;\" data-bs-ride=\"carousel\">\r\n<div class=\"carousel-inner pb-5\">\r\n<div class=\"carousel-item active\"><img class=\"d-block mx-auto\" style=\"max-height: 250px; width: auto;\" src=\"http://127.0.0.1:8000/img/room/Снимок экрана 2024-08-22 205856.png\" alt=\"План 1\"></div>\r\n<div class=\"carousel-item\"><img class=\"d-block mx-auto\" style=\"max-height: 250px; width: auto;\" src=\"http://127.0.0.1:8000/img/room/Снимок экрана 2024-08-22 205911.png\" alt=\"План 2\"></div>\r\n</div>\r\n<button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#slider2\" data-bs-slide=\"prev\"> <span class=\"visually-hidden\">Previous</span> </button> <button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#slider2\" data-bs-slide=\"next\"> <span class=\"visually-hidden\">Next</span> </button></div>\r\n<div class=\"card-body\">\r\n<p class=\"card-text\">В квартире полностью снесли все перегородки и сантехкабину. После возведения перегородок получились просторный совмещенный санузле, кухня-гостиная, детская, спальня, кабинет и гардеробная. Особым пожеланием Заказчиков было выделить место, где можно было всей семьей проводить время за просмотром телевизора, поэтому сделали TV-зону. Получилась пятикомнатная квартира.</p>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"col-md-4\">\r\n<div class=\"card h-100\">\r\n<div id=\"slider3\" class=\"carousel slide\" style=\"min-height: 230px;\" data-bs-ride=\"carousel\">\r\n<div class=\"carousel-inner\">\r\n<div class=\"carousel-item active\"><img class=\"d-block mx-auto\" style=\"max-height: 250px; width: auto;\" src=\"http://127.0.0.1:8000/img/room/Снимок экрана 2024-08-22 205926.png\" alt=\"План 1\"></div>\r\n<div class=\"carousel-item\"><img class=\"d-block mx-auto\" style=\"max-height: 250px; width: auto;\" src=\"http://127.0.0.1:8000/img/room/Снимок экрана 2024-08-22 205939.png\" alt=\"План 2\"></div>\r\n</div>\r\n<button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#slider3\" data-bs-slide=\"prev\"> <span class=\"visually-hidden\">Previous</span> </button> <button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#slider3\" data-bs-slide=\"next\"> <span class=\"visually-hidden\">Next</span> </button></div>\r\n<div class=\"card-body\">\r\n<p class=\"card-text\">Перепланировка трехкомнатной квартиры в четырехкомнатную, благодаря количества окон это не стало проблемой. Увеличили коридор за счет гостиной. В одной комнате благодаря возведению перегородки оборудовали кабинет, Во второй комнате перегородку возвели таким образом, что позволило бы сделать встроенные шкафы. В данном варианте при желании есть возможность объединить кухню и гостиную.</p>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"container my-5\">\r\n<h2 class=\"fs-2 text-center fw-bold text-danger mb-4\">Стоимость ремонта трехкомнатной квартиры в Красноярске</h2>\r\n<table class=\"table table-bordered fs-5\">\r\n<thead>\r\n<tr>\r\n<th style=\"text-align: center;\" scope=\"col\">Виды услуг</th>\r\n<th style=\"text-align: center;\" scope=\"col\">Цена</th>\r\n</tr>\r\n</thead>\r\n<tbody>\r\n<tr>\r\n<td class=\"text-center\"><a class=\"text-success text-decoration-none\" href=\"#\">Создание и разработка дизайнерского проекта</a></td>\r\n<td class=\"text-center\">от 2300 за кв. м.</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p class=\"lead fs-5 text-center\">Наш дизайнер сможет разработать для Вас идеальную концепцию и дизайнерский стиль квартиры.</p>\r\n<table class=\"table table-bordered fs-5\">\r\n<thead>\r\n<tr>\r\n<th style=\"text-align: center;\" scope=\"col\">Виды ремонта</th>\r\n<th style=\"text-align: center;\" scope=\"col\">Стоимость</th>\r\n</tr>\r\n</thead>\r\n<tbody>\r\n<tr>\r\n<td class=\"text-center\"><a class=\"text-success text-decoration-none\" href=\"#\">Капитальный ремонт трехкомнатной квартиры</a></td>\r\n<td class=\"text-center\">от 12000 за кв. м.</td>\r\n</tr>\r\n<tr>\r\n<td class=\"text-center\"><a class=\"text-success text-decoration-none\" href=\"#\">Косметический ремонт трехкомнатной квартиры</a></td>\r\n<td class=\"text-center\">от 5000 за кв. м.</td>\r\n</tr>\r\n<tr>\r\n<td class=\"text-center\"><a class=\"text-success text-decoration-none\" href=\"#\">Ремонт трехкомнатной квартиры под ключ</a></td>\r\n<td class=\"text-center\">от 12000 за кв. м.</td>\r\n</tr>\r\n<tr>\r\n<td class=\"text-center\"><a class=\"text-success text-decoration-none\" href=\"#\">Евроремонт трехкомнатной квартиры</a></td>\r\n<td class=\"text-center\">от 13000 за кв. м.</td>\r\n</tr>\r\n<tr>\r\n<td class=\"text-center\"><a class=\"text-success text-decoration-none\" href=\"#\">Дизайнерский ремонт трехкомнатной квартиры</a></td>\r\n<td class=\"text-center\">от 19000 за кв. м.</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n</div>\r\n<div class=\"container my-5 mb-5\">\r\n<h2 class=\"fs-2 text-center fw-bold text-danger mb-4 \">Примеры ремонта трехкомнатной квартиры в Красноярске</h2>\r\n<div class=\"row text-center mt-5\">\r\n<div class=\"col-md-4\">\r\n<div class=\"card\"><img class=\"card-img-top\" src=\"http://127.0.0.1:8000/img/room/Kompleksnyj-remont-trehkomnatnoj-kvartiry.-Vesny-34.-Foto-24-225x300.jpg\" alt=\"Дизайнерский ремонт\">\r\n<div class=\"card-body\">\r\n<p class=\"card-text text-danger fw-bold\">Комплексный ремонт квартиры</p>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"col-md-4\">\r\n<div class=\"card\"><img class=\"card-img-top\" src=\"http://127.0.0.1:8000/img/room/remont-trehkomnatnoj-kvartiry-yakovleva-1a.-foto-1-225x300.jpg\" alt=\"Капитальный ремонт\">\r\n<div class=\"card-body\">\r\n<p class=\"card-text text-danger fw-bold\">Ремонт квартиры под ключ</p>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"col-md-4\">\r\n<div class=\"card\"><img class=\"card-img-top\" src=\"http://127.0.0.1:8000/img/room/2-ya-botanicheskaya.-foto-18-225x300.jpg\" alt=\"Комплексный ремонт\">\r\n<div class=\"card-body\">\r\n<p class=\"card-text text-danger fw-bold\">Капитальный ремонт квартиры</p>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n<p class=\"lead text-center fs-5 mt-5\">Вы можете посмотреть <a class=\"text-success text-decoration-none\" href=\"#\">галерею выполненных работ</a> и <a class=\"text-success text-decoration-none\" href=\"#\">видео отчеты</a> на нашем сайте.</p>\r\n<p class=\"lead fs-5\">Заказать ремонт квартиры Вы можете любым удобным для вас способом:</p>\r\n<ul class=\"fs-5\">\r\n<li>заявка на сайте;</li>\r\n<li>в телефонном режиме, позвонив по номеру <a class=\"text-success text-decoration-none\" href=\"tel:+73912938226\">+7(391)293-82-26</a>.</li>\r\n</ul>\r\n</div>', NULL, 'remont-trehkomnatnoj', 'Ремонт трехкомнатной', 'Ремонт трехкомнатной', 'ACTIVE', '2024-08-22 07:00:48', '2024-08-22 07:06:40'),
(9, 2, 'Ремонт четырехкомнатной', 'Ремонт четырехкомнатной квартиры', NULL, NULL, 'remont-chetyrehkomnatnoj', 'Ремонт четырехкомнатной квартиры', 'Ремонт четырехкомнатной квартиры', 'ACTIVE', '2024-08-22 07:08:13', '2024-08-22 07:08:13');

-- --------------------------------------------------------

--
-- Структура таблицы `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `key` varchar(255) NOT NULL,
  `table_name` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `permissions`
--

INSERT INTO `permissions` (`id`, `key`, `table_name`, `created_at`, `updated_at`) VALUES
(1, 'browse_admin', NULL, '2024-08-19 07:21:27', '2024-08-19 07:21:27'),
(2, 'browse_bread', NULL, '2024-08-19 07:21:27', '2024-08-19 07:21:27'),
(3, 'browse_database', NULL, '2024-08-19 07:21:27', '2024-08-19 07:21:27'),
(4, 'browse_media', NULL, '2024-08-19 07:21:27', '2024-08-19 07:21:27'),
(5, 'browse_compass', NULL, '2024-08-19 07:21:27', '2024-08-19 07:21:27'),
(6, 'browse_menus', 'menus', '2024-08-19 07:21:27', '2024-08-19 07:21:27'),
(7, 'read_menus', 'menus', '2024-08-19 07:21:27', '2024-08-19 07:21:27'),
(8, 'edit_menus', 'menus', '2024-08-19 07:21:27', '2024-08-19 07:21:27'),
(9, 'add_menus', 'menus', '2024-08-19 07:21:27', '2024-08-19 07:21:27'),
(10, 'delete_menus', 'menus', '2024-08-19 07:21:27', '2024-08-19 07:21:27'),
(11, 'browse_roles', 'roles', '2024-08-19 07:21:27', '2024-08-19 07:21:27'),
(12, 'read_roles', 'roles', '2024-08-19 07:21:27', '2024-08-19 07:21:27'),
(13, 'edit_roles', 'roles', '2024-08-19 07:21:27', '2024-08-19 07:21:27'),
(14, 'add_roles', 'roles', '2024-08-19 07:21:27', '2024-08-19 07:21:27'),
(15, 'delete_roles', 'roles', '2024-08-19 07:21:27', '2024-08-19 07:21:27'),
(16, 'browse_users', 'users', '2024-08-19 07:21:27', '2024-08-19 07:21:27'),
(17, 'read_users', 'users', '2024-08-19 07:21:27', '2024-08-19 07:21:27'),
(18, 'edit_users', 'users', '2024-08-19 07:21:27', '2024-08-19 07:21:27'),
(19, 'add_users', 'users', '2024-08-19 07:21:27', '2024-08-19 07:21:27'),
(20, 'delete_users', 'users', '2024-08-19 07:21:27', '2024-08-19 07:21:27'),
(21, 'browse_settings', 'settings', '2024-08-19 07:21:27', '2024-08-19 07:21:27'),
(22, 'read_settings', 'settings', '2024-08-19 07:21:27', '2024-08-19 07:21:27'),
(23, 'edit_settings', 'settings', '2024-08-19 07:21:27', '2024-08-19 07:21:27'),
(24, 'add_settings', 'settings', '2024-08-19 07:21:27', '2024-08-19 07:21:27'),
(25, 'delete_settings', 'settings', '2024-08-19 07:21:27', '2024-08-19 07:21:27'),
(26, 'browse_categories', 'categories', '2024-08-19 07:21:39', '2024-08-19 07:21:39'),
(27, 'read_categories', 'categories', '2024-08-19 07:21:39', '2024-08-19 07:21:39'),
(28, 'edit_categories', 'categories', '2024-08-19 07:21:39', '2024-08-19 07:21:39'),
(29, 'add_categories', 'categories', '2024-08-19 07:21:39', '2024-08-19 07:21:39'),
(30, 'delete_categories', 'categories', '2024-08-19 07:21:39', '2024-08-19 07:21:39'),
(31, 'browse_posts', 'posts', '2024-08-19 07:21:40', '2024-08-19 07:21:40'),
(32, 'read_posts', 'posts', '2024-08-19 07:21:40', '2024-08-19 07:21:40'),
(33, 'edit_posts', 'posts', '2024-08-19 07:21:40', '2024-08-19 07:21:40'),
(34, 'add_posts', 'posts', '2024-08-19 07:21:40', '2024-08-19 07:21:40'),
(35, 'delete_posts', 'posts', '2024-08-19 07:21:40', '2024-08-19 07:21:40'),
(36, 'browse_pages', 'pages', '2024-08-19 07:21:40', '2024-08-19 07:21:40'),
(37, 'read_pages', 'pages', '2024-08-19 07:21:40', '2024-08-19 07:21:40'),
(38, 'edit_pages', 'pages', '2024-08-19 07:21:40', '2024-08-19 07:21:40'),
(39, 'add_pages', 'pages', '2024-08-19 07:21:40', '2024-08-19 07:21:40'),
(40, 'delete_pages', 'pages', '2024-08-19 07:21:40', '2024-08-19 07:21:40'),
(46, 'browse_works', 'works', '2024-08-20 21:57:55', '2024-08-20 21:57:55'),
(47, 'read_works', 'works', '2024-08-20 21:57:55', '2024-08-20 21:57:55'),
(48, 'edit_works', 'works', '2024-08-20 21:57:55', '2024-08-20 21:57:55'),
(49, 'add_works', 'works', '2024-08-20 21:57:55', '2024-08-20 21:57:55'),
(50, 'delete_works', 'works', '2024-08-20 21:57:55', '2024-08-20 21:57:55');

-- --------------------------------------------------------

--
-- Структура таблицы `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `permission_role`
--

INSERT INTO `permission_role` (`permission_id`, `role_id`) VALUES
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
(36, 1),
(37, 1),
(38, 1),
(39, 1),
(40, 1),
(46, 1),
(47, 1),
(48, 1),
(49, 1),
(50, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `author_id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `seo_title` varchar(255) DEFAULT NULL,
  `excerpt` text DEFAULT NULL,
  `body` text NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `slug` varchar(255) NOT NULL,
  `meta_description` text DEFAULT NULL,
  `meta_keywords` text DEFAULT NULL,
  `status` enum('PUBLISHED','DRAFT','PENDING') NOT NULL DEFAULT 'DRAFT',
  `featured` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `posts`
--

INSERT INTO `posts` (`id`, `author_id`, `category_id`, `title`, `seo_title`, `excerpt`, `body`, `image`, `slug`, `meta_description`, `meta_keywords`, `status`, `featured`, `created_at`, `updated_at`) VALUES
(1, 0, NULL, 'Lorem Ipsum Post', NULL, 'This is the excerpt for the Lorem Ipsum Post', '<p>This is the body of the lorem ipsum post</p>', 'posts/post1.jpg', 'lorem-ipsum-post', 'This is the meta description', 'keyword1, keyword2, keyword3', 'PUBLISHED', 0, '2024-08-19 07:21:40', '2024-08-19 07:21:40'),
(2, 0, NULL, 'My Sample Post', NULL, 'This is the excerpt for the sample Post', '<p>This is the body for the sample post, which includes the body.</p>\n                <h2>We can use all kinds of format!</h2>\n                <p>And include a bunch of other stuff.</p>', 'posts/post2.jpg', 'my-sample-post', 'Meta Description for sample post', 'keyword1, keyword2, keyword3', 'PUBLISHED', 0, '2024-08-19 07:21:40', '2024-08-19 07:21:40'),
(3, 0, NULL, 'Latest Post', NULL, 'This is the excerpt for the latest post', '<p>This is the body for the latest post</p>', 'posts/post3.jpg', 'latest-post', 'This is the meta description', 'keyword1, keyword2, keyword3', 'PUBLISHED', 0, '2024-08-19 07:21:40', '2024-08-19 07:21:40'),
(4, 0, NULL, 'Yarr Post', NULL, 'Reef sails nipperkin bring a spring upon her cable coffer jury mast spike marooned Pieces of Eight poop deck pillage. Clipper driver coxswain galleon hempen halter come about pressgang gangplank boatswain swing the lead. Nipperkin yard skysail swab lanyard Blimey bilge water ho quarter Buccaneer.', '<p>Swab deadlights Buccaneer fire ship square-rigged dance the hempen jig weigh anchor cackle fruit grog furl. Crack Jennys tea cup chase guns pressgang hearties spirits hogshead Gold Road six pounders fathom measured fer yer chains. Main sheet provost come about trysail barkadeer crimp scuttle mizzenmast brig plunder.</p>\n<p>Mizzen league keelhaul galleon tender cog chase Barbary Coast doubloon crack Jennys tea cup. Blow the man down lugsail fire ship pinnace cackle fruit line warp Admiral of the Black strike colors doubloon. Tackle Jack Ketch come about crimp rum draft scuppers run a shot across the bow haul wind maroon.</p>\n<p>Interloper heave down list driver pressgang holystone scuppers tackle scallywag bilged on her anchor. Jack Tar interloper draught grapple mizzenmast hulk knave cable transom hogshead. Gaff pillage to go on account grog aft chase guns piracy yardarm knave clap of thunder.</p>', 'posts/post4.jpg', 'yarr-post', 'this be a meta descript', 'keyword1, keyword2, keyword3', 'PUBLISHED', 0, '2024-08-19 07:21:40', '2024-08-19 07:21:40');

-- --------------------------------------------------------

--
-- Структура таблицы `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `display_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Administrator', '2024-08-19 07:21:27', '2024-08-19 07:21:27'),
(2, 'user', 'Normal User', '2024-08-19 07:21:27', '2024-08-19 07:21:27');

-- --------------------------------------------------------

--
-- Структура таблицы `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `key` varchar(255) NOT NULL,
  `display_name` varchar(255) NOT NULL,
  `value` text DEFAULT NULL,
  `details` text DEFAULT NULL,
  `type` varchar(255) NOT NULL,
  `order` int(11) NOT NULL DEFAULT 1,
  `group` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `settings`
--

INSERT INTO `settings` (`id`, `key`, `display_name`, `value`, `details`, `type`, `order`, `group`) VALUES
(1, 'site.title', 'Site Title', 'Site Title', '', 'text', 1, 'Site'),
(2, 'site.description', 'Site Description', 'Site Description', '', 'text', 2, 'Site'),
(3, 'site.logo', 'Site Logo', '', '', 'image', 3, 'Site'),
(4, 'site.google_analytics_tracking_id', 'Google Analytics Tracking ID', '', '', 'text', 4, 'Site'),
(5, 'admin.bg_image', 'Admin Background Image', '', '', 'image', 5, 'Admin'),
(6, 'admin.title', 'Admin Title', 'Voyager', '', 'text', 1, 'Admin'),
(7, 'admin.description', 'Admin Description', 'Welcome to Voyager. The Missing Admin for Laravel', '', 'text', 2, 'Admin'),
(8, 'admin.loader', 'Admin Loader', '', '', 'image', 3, 'Admin'),
(9, 'admin.icon_image', 'Admin Icon Image', '', '', 'image', 4, 'Admin'),
(10, 'admin.google_analytics_client_id', 'Google Analytics Client ID (used for admin dashboard)', '', '', 'text', 1, 'Admin');

-- --------------------------------------------------------

--
-- Структура таблицы `translations`
--

CREATE TABLE `translations` (
  `id` int(10) UNSIGNED NOT NULL,
  `table_name` varchar(255) NOT NULL,
  `column_name` varchar(255) NOT NULL,
  `foreign_key` int(10) UNSIGNED NOT NULL,
  `locale` varchar(255) NOT NULL,
  `value` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `translations`
--

INSERT INTO `translations` (`id`, `table_name`, `column_name`, `foreign_key`, `locale`, `value`, `created_at`, `updated_at`) VALUES
(1, 'data_types', 'display_name_singular', 5, 'pt', 'Post', '2024-08-19 07:21:40', '2024-08-19 07:21:40'),
(2, 'data_types', 'display_name_singular', 6, 'pt', 'Página', '2024-08-19 07:21:40', '2024-08-19 07:21:40'),
(3, 'data_types', 'display_name_singular', 1, 'pt', 'Utilizador', '2024-08-19 07:21:40', '2024-08-19 07:21:40'),
(4, 'data_types', 'display_name_singular', 4, 'pt', 'Categoria', '2024-08-19 07:21:40', '2024-08-19 07:21:40'),
(5, 'data_types', 'display_name_singular', 2, 'pt', 'Menu', '2024-08-19 07:21:40', '2024-08-19 07:21:40'),
(6, 'data_types', 'display_name_singular', 3, 'pt', 'Função', '2024-08-19 07:21:40', '2024-08-19 07:21:40'),
(7, 'data_types', 'display_name_plural', 5, 'pt', 'Posts', '2024-08-19 07:21:40', '2024-08-19 07:21:40'),
(8, 'data_types', 'display_name_plural', 6, 'pt', 'Páginas', '2024-08-19 07:21:40', '2024-08-19 07:21:40'),
(9, 'data_types', 'display_name_plural', 1, 'pt', 'Utilizadores', '2024-08-19 07:21:40', '2024-08-19 07:21:40'),
(10, 'data_types', 'display_name_plural', 4, 'pt', 'Categorias', '2024-08-19 07:21:40', '2024-08-19 07:21:40'),
(11, 'data_types', 'display_name_plural', 2, 'pt', 'Menus', '2024-08-19 07:21:40', '2024-08-19 07:21:40'),
(12, 'data_types', 'display_name_plural', 3, 'pt', 'Funções', '2024-08-19 07:21:40', '2024-08-19 07:21:40'),
(13, 'categories', 'slug', 1, 'pt', 'categoria-1', '2024-08-19 07:21:40', '2024-08-19 07:21:40'),
(14, 'categories', 'name', 1, 'pt', 'Categoria 1', '2024-08-19 07:21:40', '2024-08-19 07:21:40'),
(15, 'categories', 'slug', 2, 'pt', 'categoria-2', '2024-08-19 07:21:40', '2024-08-19 07:21:40'),
(16, 'categories', 'name', 2, 'pt', 'Categoria 2', '2024-08-19 07:21:40', '2024-08-19 07:21:40'),
(17, 'pages', 'title', 1, 'pt', 'Olá Mundo', '2024-08-19 07:21:40', '2024-08-19 07:21:40'),
(18, 'pages', 'slug', 1, 'pt', 'ola-mundo', '2024-08-19 07:21:40', '2024-08-19 07:21:40'),
(19, 'pages', 'body', 1, 'pt', '<p>Olá Mundo. Scallywag grog swab Cat o\'nine tails scuttle rigging hardtack cable nipper Yellow Jack. Handsomely spirits knave lad killick landlubber or just lubber deadlights chantey pinnace crack Jennys tea cup. Provost long clothes black spot Yellow Jack bilged on her anchor league lateen sail case shot lee tackle.</p>\r\n<p>Ballast spirits fluke topmast me quarterdeck schooner landlubber or just lubber gabion belaying pin. Pinnace stern galleon starboard warp carouser to go on account dance the hempen jig jolly boat measured fer yer chains. Man-of-war fire in the hole nipperkin handsomely doubloon barkadeer Brethren of the Coast gibbet driver squiffy.</p>', '2024-08-19 07:21:40', '2024-08-19 07:21:40'),
(20, 'menu_items', 'title', 1, 'pt', 'Painel de Controle', '2024-08-19 07:21:40', '2024-08-19 07:21:40'),
(21, 'menu_items', 'title', 2, 'pt', 'Media', '2024-08-19 07:21:40', '2024-08-19 07:21:40'),
(22, 'menu_items', 'title', 12, 'pt', 'Publicações', '2024-08-19 07:21:40', '2024-08-19 07:21:40'),
(23, 'menu_items', 'title', 3, 'pt', 'Utilizadores', '2024-08-19 07:21:40', '2024-08-19 07:21:40'),
(24, 'menu_items', 'title', 11, 'pt', 'Categorias', '2024-08-19 07:21:40', '2024-08-19 07:21:40'),
(25, 'menu_items', 'title', 13, 'pt', 'Páginas', '2024-08-19 07:21:40', '2024-08-19 07:21:40'),
(26, 'menu_items', 'title', 4, 'pt', 'Funções', '2024-08-19 07:21:40', '2024-08-19 07:21:40'),
(27, 'menu_items', 'title', 5, 'pt', 'Ferramentas', '2024-08-19 07:21:40', '2024-08-19 07:21:40'),
(28, 'menu_items', 'title', 6, 'pt', 'Menus', '2024-08-19 07:21:40', '2024-08-19 07:21:40'),
(29, 'menu_items', 'title', 7, 'pt', 'Base de dados', '2024-08-19 07:21:40', '2024-08-19 07:21:40'),
(30, 'menu_items', 'title', 10, 'pt', 'Configurações', '2024-08-19 07:21:40', '2024-08-19 07:21:40');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `avatar` varchar(255) DEFAULT 'users/default.png',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `settings` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `role_id`, `name`, `email`, `avatar`, `email_verified_at`, `password`, `remember_token`, `settings`, `created_at`, `updated_at`) VALUES
(1, 1, 'Admin', 'admin@admin.com', 'users/default.png', NULL, '$2y$12$cluKHequhd2aYJ9zgkRATOTxaFt.ysaPONwPioZLcOA9PJZiT6B3O', '2ejkXEDZKip8DodWv3oOfo50BpmSOkyqA9IRDOAa3U2vpab1jiXtclh374wM', NULL, '2024-08-19 07:21:39', '2024-08-19 07:21:39'),
(2, 1, 'admin', 'your-admin@admin.com', 'users\\August2024\\4P44sp2B4RwsmB1ZnMBh.png', NULL, '$2y$12$fIqPEkpZeO82D1OSfdJwJOh2r8UqCyLDEdKPP2cbi7MD9Zl0F6ece', 'z6qeORifWQnlZ18Jlr7XJ2cNKCLcv6iACA5QHLPkMlaUp879OxuiE3D5BCcr', '{\"locale\":\"ru\"}', '2024-08-19 08:02:30', '2024-08-20 21:47:09');

-- --------------------------------------------------------

--
-- Структура таблицы `user_roles`
--

CREATE TABLE `user_roles` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `works`
--

CREATE TABLE `works` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `adres` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `area` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `works`
--

INSERT INTO `works` (`id`, `title`, `adres`, `image`, `url`, `created_at`, `updated_at`, `area`) VALUES
(2, 'Ремонт квартиры под ключ', 'ул. 78 Добровольческой Бригады 25', '[\"works\\\\August2024\\\\HrNAvJXRs2iz2WtqESVw.jpg\",\"works\\\\August2024\\\\mp88Xz9lQ3GFMpsLhpQH.jpg\"]', '/works/1', '2024-08-20 22:13:06', '2024-08-20 22:13:06', '97,7'),
(3, 'Дизайнерский ремонт квартиры', 'ул. Партизана Железняка 48Ж.', '[\"works\\\\August2024\\\\C9b11SqbeJ6ZTh6NGLpu.png\",\"works\\\\August2024\\\\GS19BVzKmdGUaym3EZI1.png\"]', '/works/2', '2024-08-20 22:20:49', '2024-08-20 22:20:49', '64,9'),
(4, 'Ремонт квартиры в новостройке', 'ул. Петра Подзолкова 4.', '[\"works\\\\August2024\\\\2Gc7F3gA6YYM5MxXEZbU.png\",\"works\\\\August2024\\\\5RWsYbUpaXgck6DdxOfT.png\"]', '/works/3', '2024-08-20 22:24:16', '2024-08-20 22:24:16', '82,6');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`),
  ADD KEY `categories_parent_id_foreign` (`parent_id`);

--
-- Индексы таблицы `data_rows`
--
ALTER TABLE `data_rows`
  ADD PRIMARY KEY (`id`),
  ADD KEY `data_rows_data_type_id_foreign` (`data_type_id`);

--
-- Индексы таблицы `data_types`
--
ALTER TABLE `data_types`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `data_types_name_unique` (`name`),
  ADD UNIQUE KEY `data_types_slug_unique` (`slug`);

--
-- Индексы таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Индексы таблицы `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `menus_name_unique` (`name`);

--
-- Индексы таблицы `menu_items`
--
ALTER TABLE `menu_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `menu_items_menu_id_foreign` (`menu_id`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pages_slug_unique` (`slug`);

--
-- Индексы таблицы `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Индексы таблицы `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `permissions_key_index` (`key`);

--
-- Индексы таблицы `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permission_role_permission_id_index` (`permission_id`),
  ADD KEY `permission_role_role_id_index` (`role_id`);

--
-- Индексы таблицы `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Индексы таблицы `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `posts_slug_unique` (`slug`);

--
-- Индексы таблицы `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Индексы таблицы `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `settings_key_unique` (`key`);

--
-- Индексы таблицы `translations`
--
ALTER TABLE `translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `translations_table_name_column_name_foreign_key_locale_unique` (`table_name`,`column_name`,`foreign_key`,`locale`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_role_id_foreign` (`role_id`);

--
-- Индексы таблицы `user_roles`
--
ALTER TABLE `user_roles`
  ADD PRIMARY KEY (`user_id`,`role_id`),
  ADD KEY `user_roles_user_id_index` (`user_id`),
  ADD KEY `user_roles_role_id_index` (`role_id`);

--
-- Индексы таблицы `works`
--
ALTER TABLE `works`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `data_rows`
--
ALTER TABLE `data_rows`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT для таблицы `data_types`
--
ALTER TABLE `data_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT для таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `menu_items`
--
ALTER TABLE `menu_items`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT для таблицы `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT для таблицы `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `translations`
--
ALTER TABLE `translations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `works`
--
ALTER TABLE `works`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `categories_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `categories` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `data_rows`
--
ALTER TABLE `data_rows`
  ADD CONSTRAINT `data_rows_data_type_id_foreign` FOREIGN KEY (`data_type_id`) REFERENCES `data_types` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `menu_items`
--
ALTER TABLE `menu_items`
  ADD CONSTRAINT `menu_items_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);

--
-- Ограничения внешнего ключа таблицы `user_roles`
--
ALTER TABLE `user_roles`
  ADD CONSTRAINT `user_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_roles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
