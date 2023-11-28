-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Nov 2023 pada 17.17
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `akronym_db`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `artikels`
--

CREATE TABLE `artikels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `game_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `excerpt` text NOT NULL,
  `body` text NOT NULL,
  `published_at` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `artikels`
--

INSERT INTO `artikels` (`id`, `game_id`, `title`, `slug`, `excerpt`, `body`, `published_at`, `created_at`, `updated_at`) VALUES
(1, 2, 'Error quod veniam repellendus odio dolor impedit quia.', 'esse-officiis-dignissimos-velit-vel', 'Ut ratione facilis impedit quam incidunt aut quos. Qui molestias consectetur eos odio. Dolor eos numquam tempora vel reiciendis culpa odio. Eaque laborum qui ut possimus accusantium in.\n\nUnde quis est esse omnis accusamus. Velit totam facilis itaque suscipit sit fugiat voluptatibus soluta.', '<p>Non qui mollitia repellendus qui est qui. Dolorem molestias et dolore assumenda commodi et nisi. Qui aut velit dolorem deleniti ut deleniti. Qui adipisci ut similique ut rerum.</p><p>Quia provident enim aspernatur voluptatum repellat. Qui asperiores id consectetur quam et voluptatem. Voluptatum vero qui qui doloribus minus dolorem nam. Natus et ut aliquam reiciendis saepe est labore.</p><p>Et qui minima qui quisquam qui blanditiis. Pariatur accusantium a rerum aut. Eligendi quia officiis sed deserunt fugit ea. Aliquid tempora voluptas fuga blanditiis consectetur placeat blanditiis.</p><p>In possimus voluptatum eligendi quaerat provident. Earum quidem eius sapiente explicabo. Accusamus aliquid modi iure exercitationem rem quidem. Tenetur sit accusamus quia eum nemo quasi.</p><p>Laudantium ratione nobis voluptatem earum. Dolores odio fugiat totam ut. Rerum non ut animi atque. Commodi porro iusto beatae quisquam consequuntur iusto at.</p>', '2020-05-07', '2023-11-09 09:27:38', '2023-11-09 09:27:38'),
(2, 1, 'Dicta ex expedita amet tempora magnam et sed harum quidem.', 'aut-omnis-esse-autem-quis-tempore-consequatur-voluptates', 'Ut eaque facilis aut exercitationem. Ipsum labore dolor velit eos. Est laboriosam nobis sit ea et.\n\nConsequatur et voluptatum atque quia provident eaque dignissimos et. Ut voluptatem unde corporis temporibus. Quia nisi repellendus modi eum officiis doloremque. Sint corrupti sint consequuntur id. Alias vel dolor possimus et aliquid.', '<p>Est maiores aspernatur fuga id quo accusamus. Sunt voluptatem aut officiis libero et culpa. Et aperiam beatae quo fugit. Temporibus rerum dolorum nihil aliquid voluptas.</p><p>Aut nam et expedita deserunt ducimus aut. Odit repudiandae soluta voluptates iure consequuntur fugiat porro. Eveniet voluptas reiciendis quisquam. Veniam dolore quibusdam voluptatem nostrum vitae.</p><p>Dolore blanditiis voluptatem sint sed iure ullam error. Velit libero nobis id nesciunt in animi odio.</p><p>Exercitationem perferendis esse quia odio exercitationem. Asperiores illum consequatur doloribus. Porro mollitia deleniti quia et.</p><p>Voluptas quis et aliquid magni et. Non rem aspernatur qui iure omnis corporis. Ea aperiam dolores quis itaque. Dicta animi suscipit et vel quos.</p><p>In aliquam dignissimos impedit et fugiat sunt adipisci. In ea amet ratione. Voluptas nisi beatae aut sit et vel occaecati. Maiores vel fugiat nihil animi aspernatur odio iste.</p><p>Incidunt consequatur odio adipisci. Veniam fuga eos voluptas vero accusamus repudiandae.</p><p>Dignissimos voluptates iure dolores ullam earum. Veritatis architecto repellat dolores ut doloribus sunt. Molestiae vitae corrupti facilis voluptatem omnis. Vitae eveniet dolore facere blanditiis reprehenderit ut nisi.</p>', '1980-07-28', '2023-11-09 09:27:38', '2023-11-09 09:27:38'),
(3, 1, 'Neque et quibusdam voluptatem aut cum voluptatem ex veritatis.', 'architecto-aliquam-unde-ex-tenetur-autem-eligendi-corporis', 'Voluptas in ea quod repellat. Id animi voluptatibus labore neque et sint quaerat.\n\nPossimus molestiae aut molestias aspernatur. Facere sit qui vel nihil et molestias molestias. Ullam tempora perferendis facilis.', '<p>Officiis voluptatum aliquam veniam veritatis et error. Maiores enim quia voluptatibus sunt dolores. Sapiente officia nesciunt natus tempora ea quia unde.</p><p>Id culpa accusantium quibusdam consequuntur temporibus temporibus. Nesciunt rerum vero est culpa ducimus ipsum. Et eos pariatur quae sed explicabo.</p><p>Illo laboriosam et quia cumque animi deserunt neque eum. Qui velit ullam et rerum. Id occaecati rerum molestiae quia minus quo molestias. Enim repellendus delectus omnis officia ullam dicta.</p><p>Ipsa tempore rem dolor praesentium placeat recusandae. Quo nihil est exercitationem dolor alias. Et et amet harum et.</p><p>Sit consequuntur sit qui laborum consectetur pariatur porro at. Aperiam quisquam aliquid odit nam reiciendis et. Voluptatem aspernatur consequatur similique incidunt.</p><p>Et odio rerum accusantium voluptas. Beatae quaerat occaecati modi vitae.</p><p>Veniam rerum maxime hic quaerat architecto aut et. Laborum molestias voluptatem voluptatem saepe omnis eos natus. Fuga magni vel placeat tempora accusantium saepe velit. Quis provident consequuntur quam nemo.</p><p>Nostrum nihil similique possimus omnis culpa quaerat eligendi. Vel placeat est dolore praesentium quo illo rerum velit. Cumque minima et dignissimos eum aut ullam. Corporis occaecati alias eius iste expedita.</p>', '2020-10-20', '2023-11-09 09:27:38', '2023-11-09 09:27:38'),
(4, 2, 'Porro est a non aliquid.', 'earum-assumenda-voluptatum-voluptatem-id-sit-ut', 'Quod officia non vitae blanditiis. Dicta sit magnam aliquam. Ut quam omnis eius atque.\n\nEt pariatur quia nam porro quas ut quae consequuntur. Sed ut et amet similique hic esse. Molestiae fugit iure illo. Aliquid tempora voluptatem placeat esse iusto culpa.', '<p>Quas quia repellendus optio tempore explicabo voluptate aut. Accusamus in quidem eos. Ut deserunt occaecati tenetur dolor velit et error.</p><p>Repellendus molestiae odit voluptatem quia omnis. Id voluptatem ducimus mollitia sed fugit expedita sit. Sequi soluta et totam aut quod.</p><p>Ullam quam veniam commodi. Et sed tempora consequatur velit totam quo.</p><p>Commodi et deleniti inventore autem. Ea omnis nihil ea libero sequi voluptatem vero. Est ipsa nisi molestiae nihil ipsum.</p><p>Aut non quod accusamus voluptatem non odio ut. Nostrum reprehenderit quis qui laboriosam minus. Et sed quis veritatis hic. Ut dolorem aut eveniet aut.</p><p>Dolorem quo non a harum consectetur at quis. Inventore fugiat aliquid inventore nihil vitae voluptates. Error repudiandae eum delectus illum molestiae dignissimos fuga.</p>', '2021-07-18', '2023-11-09 09:27:39', '2023-11-09 09:27:39'),
(5, 2, 'Reiciendis iusto est aliquid a velit voluptatem totam itaque veniam est eos molestiae.', 'excepturi-id-sint-cum', 'Est ullam voluptas sit officia vitae nobis nam. Veniam neque aspernatur quo sequi sunt consectetur non. Tempore magni et quibusdam ad enim. Quisquam fuga quisquam a non non quia.\n\nLaborum culpa at illo. Ipsum tenetur atque harum reiciendis totam et velit. Omnis rem distinctio non ratione ipsum voluptate.', '<p>Totam dolores est reprehenderit vitae est id. Adipisci inventore laboriosam qui saepe. Sit temporibus aliquid aliquam vel voluptas.</p><p>Accusamus et nisi voluptate ipsam quasi. Et non qui necessitatibus vel et. Aut quisquam non quod eum incidunt voluptas necessitatibus.</p><p>Natus quia autem cupiditate nihil reprehenderit praesentium. Recusandae nisi dicta distinctio possimus tenetur itaque ducimus ducimus. Quidem voluptas consequatur accusamus odio voluptatem aut. Facilis cupiditate aut vel aut saepe velit. Ea possimus vel voluptatem amet et.</p><p>Et maiores qui omnis voluptas. Enim incidunt tempora quia nisi. Quis fuga beatae ducimus aspernatur nulla consequatur. Sint vitae quas doloribus qui.</p><p>Quis nemo tempora distinctio est. Est neque neque eos nobis quidem a nulla.</p><p>Quod et mollitia et. Ducimus nisi nam qui temporibus magnam aut. Dolorum et pariatur ut iste et. Officia libero quia modi autem autem ipsum maiores. Nesciunt quo perspiciatis dolor dolorum.</p><p>Reiciendis aut modi libero modi ab dolorum. Veniam qui tempora molestias. Ut temporibus quia dicta accusantium libero est.</p>', '1990-09-10', '2023-11-09 09:27:39', '2023-11-09 09:27:39'),
(6, 3, 'Ut qui dicta consequatur reiciendis quis aperiam.', 'ut-veritatis-sunt-ex-ipsam-iure', 'Modi dolorem unde ipsam aspernatur est id. Harum et nisi autem cupiditate ut aut ipsam. Inventore rerum ab sed dolorum possimus. Ea et porro placeat dignissimos voluptas aut.\n\nEos et omnis quia vel quisquam. Accusantium incidunt corporis quam qui consequatur tempore dignissimos. Consectetur fuga amet quod. Eius et nihil rerum quia eos praesentium.', '<p>Cum eius neque numquam quo ipsum exercitationem. Facere expedita odio labore incidunt atque omnis ex. Quaerat et harum eius sint.</p><p>Sed deserunt itaque vitae illo inventore. Distinctio ut enim ipsa ex et iusto.</p><p>Consectetur neque minus qui quaerat nulla sed. Aut voluptatem laudantium minima nisi et qui. Eveniet occaecati ut est qui dolor itaque occaecati.</p><p>Reprehenderit officia unde quis velit repellat qui. Dolorem nulla earum itaque aut rem et a. Dolorum repudiandae aut a quibusdam rerum.</p><p>Ipsam et est et aut quis accusantium illo. Et laborum qui et doloribus. Rerum odio quaerat dolores rerum.</p><p>Autem et occaecati enim provident quia. Modi nemo magnam dicta quia voluptas et voluptates. Nihil quo quod vitae rerum. Voluptatem voluptatum quidem consequatur et libero.</p><p>Sit iure quam quos. Ut deleniti rerum veniam vitae quos. Dolorum quo odit qui.</p><p>Cumque tenetur dicta corrupti sint. Voluptas voluptas hic sequi reprehenderit perferendis eum ab. Perspiciatis cupiditate iure vitae cumque. A eius at reprehenderit a facilis exercitationem atque.</p><p>Libero cum voluptatum fugiat unde quo quia. Repellat repudiandae at consequatur consequuntur veritatis omnis. Cupiditate vitae laboriosam molestias id ullam illo.</p><p>Et ipsum nemo non qui similique. Id sunt enim est nostrum consequatur rerum. Repudiandae nihil ipsa consectetur magni iure dolores.</p>', '1971-03-01', '2023-11-09 09:27:39', '2023-11-09 09:27:39'),
(7, 2, 'Veritatis voluptatibus illo officia iusto libero sed commodi omnis consequuntur non non cumque.', 'amet-laboriosam-voluptas-deleniti-enim-quos-sed-voluptas-recusandae', 'Asperiores deserunt et atque repellat atque minus. Et nobis voluptatem alias eos molestiae. Qui quia autem provident ipsam maiores quam eum accusamus.\n\nAssumenda molestiae blanditiis doloribus aspernatur adipisci blanditiis esse. Officiis quia impedit minus voluptatem est. Porro omnis accusamus ipsa rerum.', '<p>Maxime magnam accusantium non nulla quia cupiditate quae. Velit culpa repellendus enim.</p><p>Ex velit reiciendis quae sunt porro beatae maiores sunt. Et soluta recusandae voluptatem et velit. Exercitationem aut in harum architecto et. Reiciendis dolores eum doloremque iusto debitis ut provident.</p><p>Vel tempora et cum sunt repellendus sapiente aperiam. Enim recusandae ut ea iusto ut libero ut. Ullam veritatis totam veritatis aut occaecati.</p><p>Perspiciatis vitae molestias placeat optio. Eaque qui ex excepturi quis. Quo maiores fugiat tempore dolores voluptatem rerum et. Quasi quisquam quia beatae libero iusto id provident.</p><p>Nulla numquam et est. Autem et hic accusamus consectetur. Excepturi officia officiis aut nisi consequatur deserunt. Ipsum perspiciatis iste cum quia.</p><p>Corrupti consequatur illo commodi ullam et. Ut non et omnis dignissimos sit debitis corporis. Dolores et facere quas enim est molestias quo omnis. Ab optio officiis consectetur aut.</p><p>Possimus nihil est at quia modi. Doloremque omnis ipsa earum magni maxime quis fugiat in. Qui omnis aut illum voluptatem accusantium similique.</p><p>Molestiae asperiores aspernatur cupiditate id est dicta et. Excepturi repudiandae qui odit. Aut ducimus iure sapiente aspernatur nesciunt voluptate vel.</p><p>Aut reprehenderit consectetur minus maiores architecto. Ut neque ratione iusto possimus error. Quibusdam tempora et quia molestiae facere.</p><p>Vero et et sit impedit minima magnam. Doloremque corrupti molestias sunt magnam aliquam sed sed aut. Hic nihil aut voluptas sit maxime totam. Iste omnis rerum et qui in dolorem non.</p>', '2018-10-23', '2023-11-09 09:27:39', '2023-11-09 09:27:39'),
(8, 2, 'Omnis culpa non hic id recusandae quos sunt quod.', 'quia-et-cupiditate-dolor-quia-repellendus-accusamus-sint', 'Sint delectus perferendis eum deleniti. Error accusantium similique similique.\n\nQuo et rem ex explicabo odit dolores iste. Sed quia corporis consequatur temporibus dolore. Veniam suscipit vel non ipsum.', '<p>Dolor adipisci voluptatum eum eaque qui. Minus blanditiis ut autem consequuntur atque nesciunt asperiores. Aliquid ad beatae beatae quasi velit provident voluptas.</p><p>Et iste reprehenderit tenetur fugit impedit. Cupiditate et sit et sed cumque consequatur eos sint. Et numquam fugit inventore autem similique harum facilis eaque. Consectetur sit deserunt maiores suscipit eos. In occaecati possimus asperiores molestiae voluptatem.</p><p>Quae dolores saepe explicabo non in dolorem. Beatae est officia pariatur qui qui inventore voluptatem. Doloremque dolor enim explicabo repellendus a.</p><p>Aliquam maiores dolor et enim maiores illum qui. Quos maiores quia vel qui dolor aut iusto earum. Alias cumque sit ratione ex.</p><p>Ducimus officiis officiis laboriosam quia necessitatibus accusantium. Consequatur exercitationem beatae dicta quaerat qui deserunt quia. At consequatur nisi consequatur qui. Pariatur est numquam eum dolor blanditiis.</p><p>Esse officia aut consequatur enim. Expedita quis velit aut corrupti odit illum et cupiditate. Quia architecto quos ex nostrum delectus dolor architecto.</p><p>Voluptatem at dicta dolor numquam at eos. Ex minima voluptatem nam magni quaerat debitis. Autem commodi eveniet et commodi.</p>', '1973-07-31', '2023-11-09 09:27:39', '2023-11-09 09:27:39'),
(9, 1, 'Facere asperiores dolor sit quaerat amet illo deleniti distinctio sed consequatur aliquam.', 'ab-repellendus-sit-et', 'Eaque ipsum quaerat placeat. Deleniti est et sequi earum vitae ut. Unde sed aliquam expedita voluptatem.\n\nSaepe neque repellat vitae cupiditate quia. Et neque esse quod mollitia eos quia nulla voluptatem. Autem maiores quidem consequatur sed ullam veritatis.', '<p>Non autem autem quia aut vel illum ad. Quis cum vel neque facilis. Impedit facere quibusdam rerum et.</p><p>Quisquam non quia repudiandae iusto aut cupiditate eveniet voluptatum. Non et itaque quidem odio sed quae est. Accusantium voluptatum illo et quia sit quis.</p><p>Exercitationem qui non ea et. Deleniti totam velit in quam et. Consequuntur est illo repellendus id eveniet deleniti. Vero tenetur quo aut occaecati amet.</p><p>Numquam facere est tempora non qui. Voluptates placeat voluptatem quibusdam neque doloribus delectus ad. Quia pariatur aut est sed harum inventore ut ducimus. Consequatur iste aut harum corrupti et perspiciatis est iste. Laudantium voluptas aspernatur suscipit aut hic odio.</p><p>Ex quam omnis soluta dolores. Quia et id consequatur consequatur. Ratione temporibus in voluptatum alias quaerat inventore ut. Iure natus voluptates rerum mollitia molestiae.</p><p>Exercitationem cum aperiam dolorem omnis quae ad ducimus sed. Et est quibusdam nemo optio deleniti provident repellendus. Vel consequatur excepturi dolor ut saepe ipsam. Ut cum et id laboriosam.</p><p>Aliquam voluptatem sapiente cumque omnis libero eos distinctio qui. Qui placeat sit omnis perspiciatis nam totam ut. Consequatur saepe ut accusamus quis voluptas autem similique voluptatem. Esse ea inventore voluptatem non dolore non est.</p><p>Non expedita amet modi est iste in. Ad qui tempore qui ipsam. Est velit provident et ut. Adipisci omnis alias quasi.</p>', '2001-01-15', '2023-11-09 09:27:39', '2023-11-09 09:27:39'),
(10, 1, 'Dolorem maxime sunt reprehenderit adipisci necessitatibus aut.', 'voluptatem-consequatur-sint-molestias', 'Temporibus qui ducimus laboriosam harum. Dolorem voluptatum et molestiae corporis. Saepe rerum asperiores quas rem quaerat voluptates dolores.\n\nEt exercitationem corrupti non adipisci rerum. Sunt aliquid beatae aut quasi. Tenetur fugit eligendi ut sed laborum. Accusantium impedit sit id vero corrupti a ullam.', '<p>Qui numquam asperiores quidem eius. Similique molestiae totam rerum aut aspernatur repellendus et. Voluptatem voluptate esse iste. Assumenda laboriosam quia consequatur doloremque. Omnis officiis enim pariatur molestias.</p><p>Hic et illo hic consequatur eaque. Atque nam excepturi ea omnis optio. Ducimus explicabo esse id quo. Ut quae dignissimos odio officia excepturi eum voluptatem.</p><p>Adipisci eaque quia omnis tenetur fugiat. Voluptatem alias perferendis et sed doloribus iusto ut. Cum debitis a repellendus harum.</p><p>Expedita corrupti distinctio aut vitae recusandae. Voluptatem velit repellat molestias explicabo commodi necessitatibus. Deserunt adipisci nam est ut molestias. Reprehenderit eaque rem ducimus.</p><p>Eligendi voluptatem perspiciatis aut. Voluptas quia deleniti expedita id consequatur. Vitae enim laborum nostrum in omnis distinctio.</p><p>Aut nisi molestiae iure voluptatem impedit. Ut distinctio delectus odio nemo numquam autem rerum est. Voluptatum qui alias consequuntur rem enim quidem.</p><p>Quasi eveniet assumenda culpa enim porro. Dolor ut sint dolorem error provident corporis. Enim cupiditate perspiciatis eligendi et id. Repellat facilis fuga et et quia eius maiores. Temporibus aut adipisci aliquid assumenda.</p><p>Quae qui earum eligendi. Quam fuga quibusdam deserunt. Earum aut corrupti eaque voluptatibus aliquid est. Quas similique exercitationem quos similique cum.</p><p>Ea illo sequi minus et dolor laborum. Corrupti itaque ipsam repellendus recusandae id eum tenetur. Provident qui tempore autem ducimus nemo et.</p>', '1996-08-08', '2023-11-09 09:27:39', '2023-11-09 09:27:39');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
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
-- Struktur dari tabel `games`
--

CREATE TABLE `games` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(255) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `games`
--

INSERT INTO `games` (`id`, `code`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Mobile Legends', 'mobile-legends', '2023-11-09 09:27:38', '2023-11-09 09:27:38'),
(2, NULL, 'Free Fire', 'free-fire', '2023-11-09 09:27:38', '2023-11-09 09:27:38'),
(3, NULL, 'Call Of Duty Mobile', 'call-of-duty-mobile', '2023-11-09 09:27:38', '2023-11-09 09:27:38');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_11_06_152111_create_artikels_table', 1),
(6, '2023_11_06_152304_create_turnamens_table', 1),
(7, '2023_11_06_152411_create_games_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
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
-- Struktur dari tabel `turnamens`
--

CREATE TABLE `turnamens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tournament_name` varchar(255) NOT NULL,
  `entry_fee` decimal(10,2) NOT NULL,
  `prize_pool` decimal(10,2) NOT NULL,
  `slots_available` int(11) NOT NULL,
  `slots_occupied` int(11) NOT NULL DEFAULT 0,
  `jadwal_mulai` date NOT NULL,
  `jadwal_selesai` date NOT NULL,
  `organizer` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `slug` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `turnamens`
--

INSERT INTO `turnamens` (`id`, `tournament_name`, `entry_fee`, `prize_pool`, `slots_available`, `slots_occupied`, `jadwal_mulai`, `jadwal_selesai`, `organizer`, `description`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'FRITTO E-SPORT MOBILE LEGENDS TOURNAMENT', 100000.00, 2000000.00, 32, 18, '2023-11-01', '2023-11-07', 'FRITTO CHICKEN', '<p>Selamat datang di Tournament of Champions - Season 3! Ini adalah turnamen game \n                            yang akan menguji kemampuan para pemain terbaik dalam komunitas game kita. \n                            Turnamen ini akan menampilkan aksi kompetitif yang seru, persaingan sengit, \n                            dan hadiah-hadiah menarik.<p>\n                            <p>Detail Turnamen:</p>\n                            <ul>\n                            <li>Tanggal: 2023-11-1</li>\n                            <li>Lokasi: Offline</li>\n                            <li>Format: Tim vs Tim</li>\n                            <li>Game: Mobile Legends </li>\n                            </ul>', 'fritto-e-sport-mobile-legends-tournament', NULL, NULL),
(2, 'STREAM GAMING X ESHARK TOKEN SPECIAL EVENT', 200000.00, 5000000.00, 64, 50, '2023-11-07', '2023-11-14', 'ESHARK TOKEN', '<p>Sambutlah  ESHARK TOKEN SPECIAL EVENT, sebuah turnamen game yang akan \n                            membawa Anda ke dalam pertempuran epik dan ketegangan yang mendalam. Ini adalah kesempatan bagi \n                            para pemain berani dan pemberani untuk bersaing dalam arena yang memukau, \n                            di mana hanya yang terkuat yang akan bertahan.</p>\n                            <p>Detail Turnamen:</p>\n                            <ul>\n                            <li>Tanggal: 2023-11-7</li>\n                            <li>Lokasi: Online</li>\n                            <li>Format: Tim vs Tim</li>\n                            <li>Game: Mobile Legends </li>\n                            </ul>', 'eshark-token-tournament-spesial-crismas-mobile-legend', NULL, NULL),
(3, 'TOP CLANS DOTA 2 INDONESIA REGIONAL QUALIFIER', 150000.00, 4000000.00, 32, 16, '2023-11-28', '2023-12-05', 'AKRONYM GAME', '<p>Bergabunglah dalam festival aksi esports Dota 2 yang menggetarkan hati di Indonesia, \n                            di mana tim-tim terbaik dari seluruh negeri akan bersaing untuk mendapatkan gelar juara dan memperebutkan \n                            tiket bergengsi ke turnamen nasional. Top Clans Dota 2 Indonesia Regional Qualifier adalah panggung utama \n                            di mana bakat-bakat paling cemerlang dalam dunia Dota 2 akan dipertontonkan.</p>\n                            <p>Detail Turnamen:</p>\n                            <ul>\n                            <li>Tanggal: 2023-11-28</li>\n                            <li>Lokasi: Online</li>\n                            <li>Format: Tim vs Tim</li>\n                            <li>Game: DOTA 2 </li>\n                            </ul>', 'top-clans-dota-2-indonesia-regional-qualifier', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `team_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `team_name`, `email`, `username`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'Raikuzen Esport', 'rizkyprtamaid@gmail.com', 'raikuzen', '2023-11-09 23:59:48', '$2y$12$N9P8zmnvfOVwKuiFSHwd7OstzS1oZ2/ZcVB7i5ATgncjnhB7Bd8Py', NULL, '2023-11-09 23:58:57', '2023-11-09 23:59:48');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `artikels`
--
ALTER TABLE `artikels`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `artikels_slug_unique` (`slug`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `games`
--
ALTER TABLE `games`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `games_name_unique` (`name`),
  ADD UNIQUE KEY `games_slug_unique` (`slug`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `turnamens`
--
ALTER TABLE `turnamens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `turnamens_slug_unique` (`slug`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `artikels`
--
ALTER TABLE `artikels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `games`
--
ALTER TABLE `games`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `turnamens`
--
ALTER TABLE `turnamens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
