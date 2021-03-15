-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-03-2021 a las 13:27:24
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 7.3.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `noticias`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `analisis`
--

CREATE TABLE `analisis` (
  `idAna` int(10) UNSIGNED NOT NULL,
  `titulo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `imagen` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idUsu` int(10) UNSIGNED NOT NULL,
  `idCat` int(10) UNSIGNED NOT NULL,
  `nota` decimal(8,2) NOT NULL,
  `estatus` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `analisis`
--

INSERT INTO `analisis` (`idAna`, `titulo`, `descripcion`, `imagen`, `idUsu`, `idCat`, `nota`, `estatus`, `created_at`, `updated_at`) VALUES
(4, 'Review: AverMedia PW315', 'La AverMedia PW315 es una excelente alternativa para los que buscan incorporar una webcam a su PC, ya sea para usarla en videoconferencias de trabajo o para realizar streaming, pues su latencia es realmente reducida. Ofrece buena calidad de captura en todos los entornos, siendo su calidad Full HD @ 60 Hz más que suficiente para la gran mayoría de usos. Además, debemos destacar que no requiere de driver alguno para funcionar, por lo que es accesible para todos los públicos.\r\n\r\nPodemos encontrar a la venta la AverMedia PW315 en España en tiendas como Amazon por 119 euros, un precio algo elevado para no ofrecer ninguna función extra como puede ser iluminación adicional.', 'https://elchapuzasinformatico.com/wp-content/uploads/2021/03/Avermedia-PW315-06.jpg', 4, 2, '9.00', 1, NULL, '2021-03-11 09:35:27'),
(5, 'Review: EVGA GeForce RTX 3060 XC', 'La EVGA GeForce RTX 3060 XC es seguramente la gráfica ideal para los que buscan un equipo mini-ITX pues ofrece un buen rendimiento para juegos en Full HD, incluso 2K, aunque no para dar el salto a 4K. La gran ventaja frente a otros modelos es su disipador compacto el cual ocupa solo 2 slots y solo tiene 202 mm de longitud, por lo que podemos integrarlo en chasis mini-ITX sin ningún tipo de problemas. Es cierto que a primera vista podemos pensar que su disipador no va a dar la talla, pero nada más lejos de la realidad pues tanto las temperaturas están muy controladas como la sonoridad es bastante reducida. Solo la escucharemos ligeramente por encima de modelos de triple ventilador, por lo que si pasamos de la iluminación LED RGB, es un modelo realmente a tener en cuenta.\r\n\r\nPor desgracia, aun no la hemos visto a la venta en España y, si lo hacemos, seguro que no será el precio establecido por la marca de 390 dólares.', 'https://elchapuzasinformatico.com/wp-content/uploads/2021/03/EVGA-GeForce-RTX-3060-XC-99-740x485.jpg', 5, 2, '8.00', NULL, '2021-02-24 09:47:06', '2021-03-11 09:34:22');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulos`
--

CREATE TABLE `articulos` (
  `idArt` int(10) UNSIGNED NOT NULL,
  `titulo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `imagen` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idUsu` int(10) UNSIGNED NOT NULL,
  `idCat` int(10) UNSIGNED NOT NULL,
  `estatus` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `articulos`
--

INSERT INTO `articulos` (`idArt`, `titulo`, `descripcion`, `imagen`, `idUsu`, `idCat`, `estatus`, `created_at`, `updated_at`) VALUES
(5, 'Nvidia compra ARM', 'Es un hecho establecido desde hace mucho tiempo que un lector se distraerá con el contenido legible de una página cuando mire su diseño. El objetivo de usar Lorem Ipsum es que tiene una distribución de letras más o menos normal, en lugar de usar \'Contenido aquí, contenido aquí\', lo que hace que parezca un inglés legible. Muchos paquetes de autoedición y editores de páginas web ahora usan Lorem Ipsum como su modelo de texto predeterminado, y una búsqueda de \'lorem ipsum\' revelará muchos sitios web aún en su infancia. Varias versiones han evolucionado a lo largo de los años, a veces por accidente, a veces a propósito (humor inyectado y similares).', 'https://i.blogs.es/213d7c/rtx3080ap/1366_2000.jpg', 5, 1, NULL, '2021-02-16 11:52:48', '2021-02-16 11:52:48'),
(6, 'Articulo2', 'Lorem Ipsum es simplemente texto de relleno de la industria de la impresión y la composición tipográfica. Lorem Ipsum ha sido el texto de relleno estándar de la industria desde el año 1500, cuando un impresor desconocido tomó una galera de tipos y la mezcló para hacer un libro de muestras tipográfico. Ha sobrevivido no solo a cinco siglos, sino también al salto a la composición tipográfica electrónica, permaneciendo esencialmente sin cambios. Se popularizó en la década de 1960 con el lanzamiento de hojas de Letraset que contienen pasajes de Lorem Ipsum y, más recientemente, con software de autoedición como Aldus PageMaker que incluye versiones de Lorem Ipsum.', 'https://www.muycomputer.com/wp-content/uploads/2020/09/RTX-3070-NVIDIA-1.jpg', 5, 1, NULL, '2021-02-24 09:25:54', '2021-02-24 09:25:54'),
(7, 'Articulo 3', 'Es un hecho establecido desde hace mucho tiempo que un lector se distraerá con el contenido legible de una página cuando mire su diseño. El objetivo de usar Lorem Ipsum es que tiene una distribución de letras más o menos normal, en lugar de usar \'Contenido aquí, contenido aquí\', lo que hace que parezca un inglés legible. Muchos paquetes de autoedición y editores de páginas web ahora usan Lorem Ipsum como su modelo de texto predeterminado, y una búsqueda de \'lorem ipsum\' revelará muchos sitios web aún en su infancia. Varias versiones han evolucionado a lo largo de los años, a veces por accidente, a veces a propósito (humor inyectado y similares).', 'https://cdn.mos.cms.futurecdn.net/Z9r54MHUE39hMrzr7H4YCQ.jpg', 5, 1, NULL, '2021-02-24 09:26:38', '2021-02-24 09:26:38'),
(8, 'Se filtra el diseño del Huawei P50 Pro en forma de varios renders', 'Huawei ha visto como se ha filtrado el diseño de su próximo smartphone tope de gama, el Huawei P50 Pro. Tal y como podrás observar a continuación, en la parte frontal no hay nada que destacar, un diseño de prácticamente todo pantalla con un panel curvo a los lados y un cámara selfie en la parte superior frontal en un agujero en la pantalla.\r\n\r\nLo más interesante está en la parte trasera, donde podemos ver dos enormes lentes de cristal, donde al menos podría esconderse un sensor tope de gama como el Sony IMX800 de 50 megapíxeles acompañado de un ultra gran angular, un teleobjetivo, una lente con diseño de periscopio y un sensor de profundidad.', 'https://elchapuzasinformatico.com/wp-content/uploads/2021/03/Huawei-P50-Pro-Render-1-740x592.jpg', 5, 1, NULL, '2021-02-24 09:48:46', '2021-03-11 09:32:57');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `idCat` int(10) UNSIGNED NOT NULL,
  `titulo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `estatus` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`idCat`, `titulo`, `descripcion`, `estatus`, `created_at`, `updated_at`) VALUES
(1, 'Tecnología', 'Tecnología', 1, NULL, NULL),
(2, 'Videojuegos', 'Videojuegos', 1, NULL, NULL),
(3, 'Social', 'Social', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentario_analisis`
--

CREATE TABLE `comentario_analisis` (
  `id` int(10) UNSIGNED NOT NULL,
  `comentario` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `idUsu` int(10) UNSIGNED NOT NULL,
  `idAna` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `comentario_analisis`
--

INSERT INTO `comentario_analisis` (`id`, `comentario`, `idUsu`, `idAna`, `created_at`, `updated_at`) VALUES
(6, 'holaa', 5, 4, '2021-02-15 11:08:50', '2021-02-24 11:50:01'),
(8, 'asfdasfdsa', 5, 4, '2021-02-15 11:09:02', '2021-02-15 11:09:02'),
(9, 'hola', 10, 4, '2021-03-11 08:52:37', '2021-03-11 08:52:37');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentario_articulo`
--

CREATE TABLE `comentario_articulo` (
  `id` int(10) UNSIGNED NOT NULL,
  `comentario` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `idUsu` int(10) UNSIGNED NOT NULL,
  `idArt` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `comentario_articulo`
--

INSERT INTO `comentario_articulo` (`id`, `comentario`, `idUsu`, `idArt`, `created_at`, `updated_at`) VALUES
(4, 'aaa', 5, 5, '2021-02-16 11:53:08', '2021-03-11 09:31:27'),
(5, 'vaya mierda de graficak', 5, 5, '2021-02-16 11:53:17', '2021-02-24 11:28:47'),
(6, 'hola', 10, 5, '2021-03-11 08:50:27', '2021-03-11 08:50:27');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentario_noticia`
--

CREATE TABLE `comentario_noticia` (
  `id` int(10) UNSIGNED NOT NULL,
  `comentario` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `idUsu` int(10) UNSIGNED NOT NULL,
  `idNot` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `comentario_noticia`
--

INSERT INTO `comentario_noticia` (`id`, `comentario`, `idUsu`, `idNot`, `created_at`, `updated_at`) VALUES
(1, 'me gusta fresqui', 7, 8, '2021-02-10 13:50:59', '2021-02-25 16:02:49'),
(2, 'me gusta fresquita', 7, 8, NULL, NULL),
(3, 'que feo es', 5, 15, NULL, '2021-03-05 12:01:09'),
(4, 'asdasdasd', 3, 8, NULL, NULL),
(5, 'pepedddddasfasfasdfasf', 5, 8, '2021-02-15 09:40:08', '2021-03-09 17:05:23'),
(12, 'ghgh', 9, 8, '2021-02-15 10:13:07', '2021-02-15 10:13:07'),
(13, 'bb', 5, 8, '2021-02-15 11:10:53', '2021-02-15 11:18:56'),
(14, 'asfas', 5, 17, '2021-03-09 16:31:26', '2021-03-09 16:31:26'),
(15, 'asfsdfa', 5, 17, '2021-03-09 16:31:33', '2021-03-09 16:31:33'),
(16, 'sfasf', 10, 8, '2021-03-09 16:56:13', '2021-03-09 16:58:06');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `curso`
--

CREATE TABLE `curso` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `descripcion` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `precio` decimal(6,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `curso`
--

INSERT INTO `curso` (`id`, `nombre`, `descripcion`, `foto`, `precio`, `created_at`, `updated_at`) VALUES
(1, 'Curso Montaje', 'Aprende a montar tu PC', 'https://www.techspot.com/articles-info/2124/images/2020-10-27-image-2.jpg', '50.00', NULL, NULL),
(2, 'Curso de Overclocking para principiantes', 'Aprende a hacer overclocking a tu procesador y tarjeta gráfica de una manera fácil.', 'https://www.profesionalreview.com/wp-content/uploads/2018/11/Cuando-hacer-overclock-a-un-procesador-o-una-tarjeta-gr%C3%A1fica-2.jpg', '34.99', NULL, NULL),
(3, 'Curso para stremear en Twitch como un profesional', 'Con este curso estarás preparado para lanzarte al mundo del streaming en unas pocas horas.', 'https://hardzone.es/app/uploads-hardzone.es/2020/09/streaming-twitch-1268x664-1.jpeg', '19.99', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(8, '2014_10_12_000000_create_users_table', 1),
(9, '2014_10_12_100000_create_password_resets_table', 1),
(10, '2019_08_19_000000_create_failed_jobs_table', 1),
(11, '2021_01_26_095227_create_categorias_table', 1),
(12, '2021_01_26_100712_create_noticias_table', 1),
(13, '2021_01_26_101753_create_articulos_table', 1),
(14, '2021_01_26_102010_create_analisis_table', 1),
(15, '2021_02_09_094000_create_comentario_noticia_table', 2),
(16, '2021_02_09_094448_create_comentario_analisis_table', 2),
(17, '2021_02_09_094514_create_comentario_articulo_table', 2),
(18, '2021_02_16_095033_create_producto_table', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticias`
--

CREATE TABLE `noticias` (
  `idNot` int(10) UNSIGNED NOT NULL,
  `titulo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `imagen` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idUsu` int(10) UNSIGNED NOT NULL,
  `idCat` int(10) UNSIGNED NOT NULL,
  `estatus` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `noticias`
--

INSERT INTO `noticias` (`idNot`, `titulo`, `descripcion`, `imagen`, `idUsu`, `idCat`, `estatus`, `created_at`, `updated_at`) VALUES
(8, 'El Q4 de 2020 se cerró con un incremento del 20,5% en el envío de tarjetas gráficas', 'Según reveló el analista de mercados Jon Peddie Research (JPR), el cuarto trimestre de 2020 (Q4 2020) se cerró con un incremento en el envío de tarjetas gráficas del 20,5 por ciento, lo que representó un crecimiento del 12,4 por ciento respecto al mismo periodo de 2019.\r\n\r\nEste crecimiento fue impulsado por Intel, ya que los envíos de sus gráficos Intel Iris Xe le permitieron aumentar sus envíos en un 33,2 por ciento, mientras que los de AMD aumentaron en un 6,4 por ciento, y los de Nvidia disminuyeron en un -7,3 por ciento, lo que deja patente que la escasez de silicios le afectó tras el lanzamiento inicial de sus productos.\r\n\r\nTras estos movimientos, el porcentaje de cuota de mercado global de AMD con respecto al trimestre anterior disminuyó en un -2,2%, el de Intel aumentó un 6,6% y el de Nvidia disminuyó en un -4,37%.', 'https://elchapuzasinformatico.com/wp-content/uploads/2020/12/Nvidia-GeForce-RTX-3080-Founders-Edition-vs-AMD-Radeon-RX-6900-XT-vs-RTX-2080-Ti-Founders-Edition-740x395.jpg', 3, 1, NULL, '2021-02-01 11:51:03', '2021-03-05 11:36:39'),
(15, 'Aliens: Fireteam se deja ver en un extenso gameplay de 25 minutos para PC', 'Ya podemos ver cómo luce el Aliens: Fireteam en un gameplay. Los encargados en mostrarlo fueron IGN y se trataba de su versión para PC, ya que el gameplay va rotando entre los jugadores y podemos ver tanto los esquemas del control del mando de Xbox como la asignación de teclas del teclado.\r\n\r\nBásicamente se nos muestra como tenemos que ir avanzando a lo largo del juego cumpliendo objetivos mientras hacemos frente a hordas de aliens. La finalidad de cada partida está escapar, en este caso llegar a un ascensor y esperar a que baje para subirnos mientras intentamos sobrevivir a la última olead de aliens. En esencia, podríamos decir que es una especie de Left 4 Dead con aliens. A nivel visual, pues \"normal\".', 'https://elchapuzasinformatico.com/wp-content/uploads/2021/03/Aliens-Fireteam-740x416.jpg', 5, 2, NULL, '2021-02-09 09:58:49', '2021-03-05 11:41:03'),
(16, 'El gran consumo energético de la minería podría terminar explotando la burbuja del Bitcoin', 'Iniciábamos la semana conociendo que Mongolia Interior exiliaba a todos los mineros y granjas de criptomonedas de la región debido al gran impacto que tiene esta actividad en la red eléctrica, y esto puede ser la punta del iceberg para adentrarnos en un segundo pinchazo de la burbuja del estandarte de todo ello, el Bitcoin.\r\n\r\nEn los últimos días, el Centro de Finanzas Alternativas (CCAF) de la Universidad de Cambridge daba un aviso en torno al floreciente negocio de las criptomonedas, indicando que el consumo total de energía de Bitcoin se sitúa entre 40 y 445 teravatios hora (TWh) anualizados, con una estimación central de unos 130 teravatios hora.', 'https://elchapuzasinformatico.com/wp-content/uploads/2020/12/Granja-de-Minado-con-PNYs-GeForce-RTX-3080-1280x720.jpg', 5, 1, NULL, '2021-02-15 20:12:58', '2021-03-05 11:43:06'),
(17, 'Nvidia compra ARM', 'Nvidia quiere comprar ARM y Microsoft, Google y Qualcomm están preocupadas por cómo esa adquisición puede afectar a la manera en que, hasta ahora, la británica licenciaba sus productos. Y, por eso, han mostrado a los reguladores del mercado competentes sus reticencias a que se apruebe esta operación.\r\n\r\nSegún publica Bloomberg, Microsoft, Google y Qualcomm han mostrado esta preocupación a los organismos competentes de los EE.UU., la UE, el Reino Unido y China. Es más, una de ellas se habría opuesto firmemente a que esta compra recibiera el visto bueno de las autoridades competentes.', 'https://hardzone.es/app/uploads-hardzone.es/2020/09/NVIDIA-ARM-Holding.jpg', 5, 1, NULL, '2021-02-16 08:46:37', '2021-02-16 08:46:37'),
(18, 'La Nvidia GeForce RTX 3080 Ti llegaría con 10240 CUDA Cores, 12GB VRAM y capada para minería', 'Llegan nuevos rumores en torno a la Nvidia GeForce RTX 3080 Ti, los cuales actualizan sus especificaciones, conociendo que el chip gráfico contará con 10240 CUDA Cores acompañado de 12 GB de memoria VRAM GDDR6X, que ahora conocemos que llegará a 19 GHz, y todo ello aderezado de la triple protección para el capado de minería, o más bien el capado de Ethereum, que es la criptomoneda más popular y rentable minada con tarjetas gráficas enfocadas a jugadores.', 'https://elchapuzasinformatico.com/wp-content/uploads/2020/10/Nvidia-GeForce-RTX-3070-Vs-3080-Founders-Edition-02-740x418.jpg', 5, 1, NULL, '2021-03-05 11:43:57', '2021-03-05 11:43:57'),
(19, 'AMD lleva la tecnología Smart Access Memory (Resizable BAR) a las CPUs Ryzen 3000', 'Junto al anuncio en sociedad de la Radeon RX 6700 XT, AMD también anunció que se lo ha pensado mejor y que finalmente llevará la tecnología Resizable BAR (AMD Smart Access Memory) a sus procesadores de anterior generación, es decir, los AMD Ryzen 3000.\r\n\r\nPara ello la compañía tendrá que lanzar un nuevo microcódigo que de soporte a esta tecnología ligada a la especificación PCI-Express, por lo que en última instancia cada fabricante de placas base tendrá que lanzar una actualización de BIOS para permitir activar esta tecnología que promete una mejora de rendimiento de hasta un 16 por ciento en juegos seleccionados.', 'https://elchapuzasinformatico.com/wp-content/uploads/2021/03/AMD-Smart-Access-Memory-en-CPUs-Ryzen-3000-740x406.jpg', 5, 1, NULL, '2021-03-05 11:45:38', '2021-03-05 11:45:38'),
(20, 'Los AMD Threadripper Pro aterrizan en el mercado: 64 núcleos por 5.489 dólares', 'AMD ha liberado para su venta sus procesadores Threadripper Pro para equipos Workstation. Todos estos procesadores ofrecen una configuración de memoria Octa(8)-Channel que admite un límite máximo de hasta 2 TB de memoria RAM DDR4 @ 3200 MHz. Tenemos también 128x líneas PCI-Express 4.0, y un procesador tope de gama con 64 núcleos y 128 hilos de procesamiento bajo la microarquitectura AMD Zen3.\r\n\r\nTodos los AMD Threadripper Pro Workstation requieren de placas base dotadas del chipset AMD WRX80, las cuales tendrán un precio de partida de 1.000 euros y ofrecen un VRM de al menos 16 fases de alimentación, ya que todos estos procesadores tienen un TDP de 280W, aunque algunas de las placas base están limitadas a 1 TB de memoria RAM, que tampoco es que sea un problema dado al mercado que se orienta.', 'https://elchapuzasinformatico.com/wp-content/uploads/2021/03/AMD-Threadripper-Pro-740x416.jpg', 5, 1, NULL, '2021-03-05 11:51:35', '2021-03-05 11:51:35'),
(21, 'Intel recibe una multa de 2.000 millones de dólares por infringir dos patentes de VLSI Technology', 'En agosto de 2020 anunciábamos que Intel se estaba enfrentando a numerosas demandas, y una de ellas era de VLSI Technology por una infracción de patentes, y hoy es cuando conocemos que esta compañía con sede en Silicon Valley ha conseguido ganar su demanda contra Intel Corporation tras demostrarse la violación de dos de sus patentes, lo que conlleva un pago 2.180 millones de dólares por daños y perjuicios. Los daños incluyen 1.500 millones por una patente y 675 millones por la otra.', 'https://i0.wp.com/hipertextual.com/wp-content/uploads/2020/09/hipertextual-intel-desvela-sus-procesadores-tiger-like-11a-generacion-y-graficos-xe-portatiles-fin-con-grandes-mejoras-bordo-2020765182.png?fit=1541%2C789&ssl=1', 5, 1, NULL, '2021-03-05 12:00:48', '2021-03-05 12:00:48');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `idUsu` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rol` int(11) DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`idUsu`, `name`, `email`, `email_verified_at`, `password`, `rol`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'Editoras', 'editor@editor.es', NULL, '$2y$10$nK1ADGMZOvrSexsRg55DsuLfaiBn6YTUcH8Oa8CBfLWUe.3Vp8zoK', 1, NULL, '2021-02-01 10:37:45', '2021-02-05 10:50:49'),
(4, 'usuari', 'usuario@usuario.es', NULL, '$2y$10$undnBVTGJ1jKwXoi5f.MDecqveijyIWAX60nqgR/T/KH3yzXmAeHO', 2, NULL, '2021-02-01 10:53:46', '2021-02-05 11:07:17'),
(5, 'pepe', 'pepe@gmail.com', NULL, '$2y$10$vi/j7wllGSw4RbK6j/Ucj.4drrC1SnKWoUzsszWGzs6OJGWPxu2Zy', 1, NULL, '2021-02-04 10:18:36', '2021-02-16 09:08:33'),
(7, 'ruben', 'ruben@gmail.com', NULL, '$2y$10$nuMLab.Z8UlIcvGa5eczYef3WRYvimhKlQJeuxR2bfjII1sCV0OyC', NULL, NULL, '2021-02-04 10:21:35', '2021-02-04 10:21:35'),
(9, 'alvaro', 'usuario@usario.com', NULL, '$2y$10$E3E4aWShsOs8x8FUc7zvWONU1mZnQxmG3iFlwGPoY2/B6cC4cWJVy', NULL, NULL, '2021-02-15 09:50:18', '2021-02-15 09:50:18'),
(10, 'alvaro', 'alvaro@alvaro.com', NULL, '$2y$10$4Pfq40qvg/rVt4Wr0SKkl.IcwQkz0/JS/YC6zGBS4Liju5p0Kc9yi', NULL, NULL, '2021-03-09 16:32:15', '2021-03-09 16:32:15');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `analisis`
--
ALTER TABLE `analisis`
  ADD PRIMARY KEY (`idAna`),
  ADD KEY `analisis_idcat_foreign` (`idCat`),
  ADD KEY `analisis_idusu_foreign` (`idUsu`);

--
-- Indices de la tabla `articulos`
--
ALTER TABLE `articulos`
  ADD PRIMARY KEY (`idArt`),
  ADD KEY `articulos_idcat_foreign` (`idCat`),
  ADD KEY `articulos_idusu_foreign` (`idUsu`);

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`idCat`);

--
-- Indices de la tabla `comentario_analisis`
--
ALTER TABLE `comentario_analisis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comentario_analisis_idana_foreign` (`idAna`),
  ADD KEY `comentario_analisis_idusu_foreign` (`idUsu`);

--
-- Indices de la tabla `comentario_articulo`
--
ALTER TABLE `comentario_articulo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comentario_articulo_idart_foreign` (`idArt`),
  ADD KEY `comentario_articulo_idusu_foreign` (`idUsu`);

--
-- Indices de la tabla `comentario_noticia`
--
ALTER TABLE `comentario_noticia`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comentario_noticia_idnot_foreign` (`idNot`),
  ADD KEY `comentario_noticia_idusu_foreign` (`idUsu`);

--
-- Indices de la tabla `curso`
--
ALTER TABLE `curso`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`idNot`),
  ADD KEY `noticias_idcat_foreign` (`idCat`),
  ADD KEY `noticias_idusu_foreign` (`idUsu`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`idUsu`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `analisis`
--
ALTER TABLE `analisis`
  MODIFY `idAna` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `articulos`
--
ALTER TABLE `articulos`
  MODIFY `idArt` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `idCat` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `comentario_analisis`
--
ALTER TABLE `comentario_analisis`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `comentario_articulo`
--
ALTER TABLE `comentario_articulo`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `comentario_noticia`
--
ALTER TABLE `comentario_noticia`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `curso`
--
ALTER TABLE `curso`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `noticias`
--
ALTER TABLE `noticias`
  MODIFY `idNot` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `idUsu` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `analisis`
--
ALTER TABLE `analisis`
  ADD CONSTRAINT `analisis_idcat_foreign` FOREIGN KEY (`idCat`) REFERENCES `categorias` (`idCat`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `analisis_idusu_foreign` FOREIGN KEY (`idUsu`) REFERENCES `users` (`idUsu`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `articulos`
--
ALTER TABLE `articulos`
  ADD CONSTRAINT `articulos_idcat_foreign` FOREIGN KEY (`idCat`) REFERENCES `categorias` (`idCat`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `articulos_idusu_foreign` FOREIGN KEY (`idUsu`) REFERENCES `users` (`idUsu`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `comentario_analisis`
--
ALTER TABLE `comentario_analisis`
  ADD CONSTRAINT `comentario_analisis_idana_foreign` FOREIGN KEY (`idAna`) REFERENCES `analisis` (`idAna`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comentario_analisis_idusu_foreign` FOREIGN KEY (`idUsu`) REFERENCES `users` (`idUsu`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `comentario_articulo`
--
ALTER TABLE `comentario_articulo`
  ADD CONSTRAINT `comentario_articulo_idart_foreign` FOREIGN KEY (`idArt`) REFERENCES `articulos` (`idArt`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comentario_articulo_idusu_foreign` FOREIGN KEY (`idUsu`) REFERENCES `users` (`idUsu`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `comentario_noticia`
--
ALTER TABLE `comentario_noticia`
  ADD CONSTRAINT `comentario_noticia_idnot_foreign` FOREIGN KEY (`idNot`) REFERENCES `noticias` (`idNot`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comentario_noticia_idusu_foreign` FOREIGN KEY (`idUsu`) REFERENCES `users` (`idUsu`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `noticias`
--
ALTER TABLE `noticias`
  ADD CONSTRAINT `noticias_idcat_foreign` FOREIGN KEY (`idCat`) REFERENCES `categorias` (`idCat`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `noticias_idusu_foreign` FOREIGN KEY (`idUsu`) REFERENCES `users` (`idUsu`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
