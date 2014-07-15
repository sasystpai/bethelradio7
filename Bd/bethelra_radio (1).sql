-- phpMyAdmin SQL Dump
-- version 4.0.5
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 28-05-2014 a las 14:42:59
-- Versión del servidor: 5.0.96-community
-- Versión de PHP: 5.3.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `bethelra_radio`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `audios`
--

CREATE TABLE IF NOT EXISTS `audios` (
  `id_audio` int(11) NOT NULL auto_increment,
  `nombre_audio` char(100) default NULL,
  `nombre_archivo` varchar(255) default NULL,
  `tamano` varchar(255) default NULL,
  `url` varchar(255) default NULL,
  `fecha` timestamp NULL default NULL,
  `id_usuario` char(18) NOT NULL,
  PRIMARY KEY  (`id_audio`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `audios`
--

INSERT INTO `audios` (`id_audio`, `nombre_audio`, `nombre_archivo`, `tamano`, `url`, `fecha`, `id_usuario`) VALUES
(3, '01Pista1.mp3', '34518737.mp3', '0', '../audios/34518737.mp3', '2014-05-15 19:45:11', 'us_001'),
(4, '01Pista1.mp3', '83671569.mp3', '0', '../audios/83671569.mp3', '2014-05-15 19:51:39', 'us_001');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `auditoria`
--

CREATE TABLE IF NOT EXISTS `auditoria` (
  `id_auditor` int(11) NOT NULL auto_increment,
  `id_UsuarioOperacion` char(18) default NULL,
  `fecha` timestamp NULL default NULL,
  `hora` varchar(255) default NULL,
  PRIMARY KEY  (`id_auditor`),
  KEY `FK_auditoria_usuario_operacion_id_UsuarioOperacion` (`id_UsuarioOperacion`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE IF NOT EXISTS `categoria` (
  `id_categoria` char(18) NOT NULL,
  `descripcion` char(50) default NULL,
  `id_seccion` char(255) default NULL,
  `estado` int(1) NOT NULL default '1',
  PRIMARY KEY  (`id_categoria`),
  KEY `FK_categoria_seccion` (`id_seccion`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id_categoria`, `descripcion`, `id_seccion`, `estado`) VALUES
('1001', 'Belleza Espiritual', '10', 1),
('1002', 'Vivencias', '10', 1),
('1003', 'Chicks', '10', 0),
('1004', 'Historia de la Iglesia', '10', 0),
('1005', 'Sentimientos', '10', 0),
('1006', 'Semblanzas', '10', 0),
('1007', 'Seminario', '10', 0),
('1008', 'Liderazgo', '10', 0),
('1009', 'Meditaciones Matutinas', '10', 0),
('2001', 'La Hora de la Transformación', '20', 1),
('2002', 'Respuesta Pastoral', '20', 1),
('2003', 'Impacto Evangelístico', '20', 1),
('2004', 'Volvamos a Dios', '20', 1),
('2005', 'Camino a la Salvación', '20', 1),
('2006', 'Campañas y Convenciones', '20', 1),
('2007', 'Allinwillacuy', '20', 1),
('2008', 'Momento Decisivo', '20', 1),
('3001', 'Bethel Actualizando', '30', 1),
('3002', 'Bethel en la Actulidad', '30', 1),
('3003', 'La Revista Hablada', '30', 1),
('4001', 'Musikids', '40', 1),
('4002', 'EBDV Radial', '40', 0),
('4003', 'Semillitas de Amor', '40', 1),
('4004', 'Diario de Viajes', '40', 0),
('4005', 'Valores al Rescate', '40', 0),
('4006', 'Aprendiendo de la naturaleza', '40', 0),
('4007', 'Visitando Ando', '40', 0),
('5001', 'Los Especiales de Bethel', '50', 1),
('5002', 'Programa Concurso', '50', 1),
('5003', 'Teens Today', '50', 1),
('6001', 'Orientación Vocacional', '60', 1),
('6002', 'Hablemos de Salud', '60', 1),
('6003', 'Tecnología para Todos', '60', 1),
('6004', 'Consultando al Especialista', '60', 0),
('6005', 'Dialoguemos', '60', 0),
('6006', 'Cultura Ambiental', '60', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entradas`
--

CREATE TABLE IF NOT EXISTS `entradas` (
  `id_entrada` int(11) NOT NULL auto_increment,
  `titulo` char(100) default NULL,
  `titulo_id` char(100) NOT NULL,
  `redaccion` text character set utf8 collate utf8_spanish_ci,
  `tags` text character set utf8 collate utf8_spanish_ci NOT NULL,
  `fecha` timestamp NULL default NULL,
  `fecha_unix` char(15) NOT NULL,
  `id_categoria` char(18) NOT NULL,
  `id_audio` char(30) NOT NULL,
  `id_imagen` char(30) NOT NULL,
  `id_usuario` char(18) default NULL,
  `estado` char(12) default NULL,
  PRIMARY KEY  (`id_entrada`),
  KEY `FK_entradas_categoria_id_categoria` (`id_categoria`),
  KEY `FK_entradas_imagenes_id_imagen` (`id_imagen`),
  KEY `FK_entradas_audios_id_audio` (`id_audio`),
  KEY `FK_entradas_usuario_operacion_id_UsuarioOperacion` (`id_usuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=111 ;

--
-- Volcado de datos para la tabla `entradas`
--

INSERT INTO `entradas` (`id_entrada`, `titulo`, `titulo_id`, `redaccion`, `tags`, `fecha`, `fecha_unix`, `id_categoria`, `id_audio`, `id_imagen`, `id_usuario`, `estado`) VALUES
(28, '¿Sentencia de TC confirma que no existe un tercer sexo?', 'sentencia-de-tc-confirma-que-no-existe-un-tercer-sexo', '&lt;p&gt;Luego de revisar los antecedentes de la sentencia del Tribunal Constitucional que proh&amp;iacute;be el cambio de sexo en el Documento Nacional de Identidad, el constitucionalista Sergio Tapia record&amp;oacute; que no se puede mezclar el &amp;aacute;mbito legal con el biol&amp;oacute;gico. ?Este fallo es un precedente constitucional que evitar&amp;aacute; que los jueces dicten futuras sentencias a favor del cambio de sexo en el DNI?, a&amp;ntilde;adi&amp;oacute; En ese sentido, refiri&amp;oacute; que el lobby homosexual presenta muchas alternativas para legalizar uniones contrarias a la Ley.&lt;/p&gt;\r\n', 'tc', '2014-05-16 23:01:00', '1400281260', '3002', '', 'imagenes/53574523.jpg', 'us_001', 'Publicado'),
(29, 'En Lima sufrimos déficit de áreas verdes', 'en-lima-sufrimos-deficit-de-areas-verdes', 'El paisajista Luis De La Cruz visitó Cultura Ambiental para detallar cómo adecuar un jardín urbano en nuestra vivienda.\r\n \r\n?Se estima que en el Perú solo tenemos 1.8 metros cuadrados de áreas verdes por persona, cuando el estándar internacional establece 80 metros cuadrados?, afirmó.\r\n \r\nPor último, recomendó utilizar las especies adecuadas para casa zona geográfica del país. ?En la costa se recomiendo al Árbol del Molle, porque requiere de poca agua?, concluyó.', 'areas verdes', '2014-05-16 23:01:00', '1400281260', '3002', '', 'imagenes/66406555.jpg', 'us_001', 'Publicado'),
(30, 'Australia: excelente destino para estudiar', 'australia-excelente-destino-para-estudiar', 'El representante en el Perú de Open Conexus, Rubén García, visitó Orientación Vocacional para explicarnos qué debemos hacer para estudiar en Australia.\r\n\r\nRecordó que ahora es menos complicado viajar con fines académicos al país oceánico. ?Antes se exigían muchos requisitos para una visa, ahora es más fácil poder viajar a Australia para estudiar?, explicó.\r\n \r\nTambién dio a conocer que algunos de los postgrados más importantes que se ofrecen en Australia son los relacionados con el  Comercio Internacional y al Turismo. ?Muchos jóvenes viajan a Australia para estudiar y perfeccionar su inglés?, agregó.\r\n \r\nSi quiere más información, no deje de asistir a ExpoUniversidad: http://expouniversidad.pe/', 'estudios', '2014-05-16 23:02:00', '1400281320', '3002', '', 'imagenes/48314819.jpg', 'us_001', 'Publicado'),
(31, 'Congreso destaca millón de firmas por la Familia (audio)', 'congreso-destaca-millon-de-firmas-por-la-familia-audio', 'El Congreso de la República recibió, este martes 13, un millón de firmas de ciudadanos de todo el país mediante el cual solicitan el archivamiento del proyecto de ley que propone la Unión Civil de personas del mismo sexo, iniciativa promovida por la Coordinadora Nacional Pro Familia.\r\n\r\nEl anuncio se hizo durante una conferencia de prensa realizada en la Sala ?Mohme?, y que estuvo encabezada por el congresista Julio Rosas Huaranga (FP), quien reiteró su postura sobre la citada iniciativa legislativa, que será discutida en la Comisión de Justicia y Derechos Humanos, de la cual él forma parte.\r\n \r\nEn una misiva dirigida al titular de ese grupo de trabajo, Juan Carlos Eguren Neuenschwander (AP-PPC), la Coordinadora Nacional Pro Familia sustenta su oposición al polémico proyecto de ley porque ?atenta contra la naturaleza misma de la familia y el orden natural del matrimonio compuesto entre un hombre y una mujer, reconocida por nuestra Constitución Política y el Código Civil?.\r\n \r\nTambién señala ?que es un atentado contra la salud moral, la formación y protección de nuestros niños que no deben ser expuestos a prácticas antinaturales que afectan la buena costumbre y cultura de nuestra nación?.\r\n \r\nEl congresista Julio Rosas se mostró satisfecho por la entrega de ese millón de firmas que comprueba ?dijo- que más de un 80% de los peruanos está a favor de la defensa de la familia.\r\n \r\n?Todos estamos aquí porque provenimos de una familia, de un matrimonio, de un padre y una madre natural?, dijo el parlamentario en medio de aplausos de la concurrencia.\r\n \r\nTambién participaron en la rueda de prensa el promotor nacional de Pro Familia, pastor Luis Meza; el notario público, Martin Zapata, que dio fe de la entrega de las firmas, y el jefe del área de Trámite Documentario del Congreso, Roberto Botta, quien recibió las respectivas rúbricas para trasladarlas a la Comisión de Justicia.', 'congreso', '2014-05-16 23:02:00', '1400281320', '3002', '', 'imagenes/60534362.jpg', 'us_001', 'Publicado'),
(32, 'Celebremos el millón de firmas en la Convención Nacional', 'celebremos-el-millon-de-firmas-en-la-convencion-nacional', 'El supervisor nacional del Movimiento Misionero Mundial en el Perú, Rev. Luis Meza Bocanegra, destacó en Bethel Radio el rechazo del país a la Ley Bruce.\r\n\r\nAdemás, invitó a los peruanos celebrar el millón de firmas por la familia en la Convención Nacional de la Obra que inicia este 20 de mayo. \r\n\r\nVea el video aquí: http://on.fb.me/1nYNYSR', 'Luis Meza, Millón de Firmas, Bethel, Convención', '2014-05-17 01:05:00', '1400288700', '3002', '', 'imagenes/67992186.jpg', 'us_001', 'Publicado'),
(33, 'Aprobar "Ley Bruce" provocará una crisis de valores', 'aprobar-ley-bruce-provocara-una-crisis-de-valores', 'El ex ministro de Salud, Luis Solari, recordó en Bethel Radio que existe una agenda prohomosexual que intenta destruir la esencia original de la familia.\r\n\r\nRefirió que no existe forma alguna de que existe un "tercer sexo" porque la biología a demostrado lo contrario.\r\n\r\nFinalmente, resaltó que es labor de cada familia establecer roles de genero correctos en sus niños.\r\n\r\nVea la entrevista: http://on.fb.me/1sCyIva', 'Solari, Unión Civil, Bethel', '2014-05-17 01:05:00', '1400288700', '3002', '', 'imagenes/96220567.jpg', 'us_001', 'Publicado'),
(37, 'Bethel Radio se alista para la Convención', 'bethel-radio-se-alista-para-la-convencion', '&lt;p&gt;El equipo t&amp;eacute;cnico-profesional de Bethel Radio se prepara para realizar una cobertura extraordinaria de la Convenci&amp;oacute;n Nacional 2014.&lt;/p&gt;\r\n\r\n&lt;p&gt;Para este fin, se vienen alistando una serie &amp;nbsp;de novedades como la transmisi&amp;oacute;n en simult&amp;aacute;neo de dos cabinas m&amp;oacute;viles: una cerca al estrado central y otra que se ubicar&amp;aacute; en los exteriores del Estadio San Marcos.&lt;/p&gt;\r\n\r\n&lt;p&gt;Adem&amp;aacute;s, contaremos con programas especiales que, adem&amp;aacute;s de la se&amp;ntilde;al radial, se transmitir&amp;aacute;n mediante streaming.&lt;/p&gt;\r\n\r\n&lt;p&gt;Finalmente, debemos anunciar que Semillitas de Amor y M&amp;uacute;sica para el Alma contar&amp;aacute;n con programas especiales durante el evento &amp;ldquo;Jes&amp;uacute;s te Ama y Te Cambia&amp;rdquo;. &amp;nbsp;&lt;/p&gt;\r\n', 'Bethel, Convención, 2014, Radio', '2014-05-18 16:00:00', '1400428800', '3002', '', 'imagenes/65008561.jpg', 'us_001', 'Publicado'),
(38, 'Semillitas de Amor en la Convención (video)', 'semillitas-de-amor-en-la-convencion-video', '&lt;p&gt;El programa de Bethel Radio, Semillitas de Amor, presentar&amp;aacute; un Show Infantil este s&amp;aacute;bado 24 de mayo en la Convenci&amp;oacute;n Nacional del Movimiento Misionero Mundial.&lt;/p&gt;\r\n\r\n&lt;p&gt;La presentaci&amp;oacute;n contar&amp;aacute; con m&amp;uacute;ltiples sorpresas que permitir&amp;aacute;n que grandes y peque&amp;ntilde;os puedan conocer mejor el mensaje de Jesucristo.&lt;/p&gt;\r\n\r\n&lt;p&gt;Para este fin, se ha efectuado una interesante coproducci&amp;oacute;n entre nuestra emisora y Bethel Televisi&amp;oacute;n que estamos seguros ser&amp;aacute; de gran bendici&amp;oacute;n&lt;/p&gt;\r\n\r\n&lt;p&gt;Mira el video &lt;a href=&quot;https://www.facebook.com/photo.php?v=702985029758054&amp;amp;set=vb.124438327612730&amp;amp;type=2&amp;amp;theater&quot;&gt;aqu&amp;iacute;&lt;/a&gt;.&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;a href=&quot;https://www.facebook.com/photo.php?v=702985029758054&quot;&gt;Publicaci&amp;oacute;n&lt;/a&gt; by &lt;a href=&quot;https://www.facebook.com/betheltv&quot;&gt;Bethel Televisi&amp;oacute;n&lt;/a&gt;.&lt;/p&gt;\r\n', 'semillitas, amor, convención, 2014', '2014-05-18 23:00:00', '1400454000', '3002', '', 'imagenes/36335359.jpg', 'us_001', 'Publicado'),
(41, 'Transmitimos reunión previa a la Convención Nacional 2014 (fotos)', 'transmitimos-reunion-previa-a-la-convencion-nacional-2014-fotos', '&lt;p&gt;Bethel Radio estuvo presente en las reuni&amp;oacute;n previa a la Convenci&amp;oacute;n Nacional 2014. Las comisiones ultimaron este domingo detalles con miras a la realizaci&amp;oacute;n de la fiesta espiritual que inicia este 20 de Mayo en el Estadio San Marcos.&lt;/p&gt;\r\n\r\n&lt;p&gt;La junta de oficiales nacional del Movimiento Misionero Mundial en el Per&amp;uacute; realiz&amp;oacute; el recorrido por las instalaciones de las distintas &amp;aacute;reas que levantaron en el coloso sanmarquino.&lt;/p&gt;\r\n\r\n&lt;p&gt;Adem&amp;aacute;s, conversamos con las pastores responsables de la impresionante estructura que servir&amp;aacute; de estrado principal del evento &amp;ldquo;Jes&amp;uacute;s te Ama y te Cambia&amp;rdquo;.&lt;/p&gt;\r\n\r\n&lt;p&gt;Mira las fotos&amp;nbsp;&lt;a href=&quot;https://www.facebook.com/media/set/?set=a.884402821575067.1073742233.178278645520825&amp;amp;type=1&quot;&gt;aqu&amp;iacute;&lt;/a&gt;.&lt;/p&gt;\r\n', 'Bethel, Convención, 2014, Radio', '2014-05-19 01:02:00', '1400461320', '3002', '', 'imagenes/43321212.jpg', 'us_001', 'Publicado'),
(42, 'Marcha por la familia: Tarapoto', 'marcha-por-la-familia-tarapoto', '&lt;p&gt;La iglesia de Tarapoto realiz&amp;oacute; el s&amp;aacute;bado 17 de mayo una Marcha a favor de la familia natural. Cerca de 2000 personas de diferentes Instituciones Educativas y Organizaciones religiosas participaron del evento.&lt;/p&gt;\r\n\r\n&lt;p&gt;Esta gran Marcha se di&amp;oacute; inicio en el Parque Cuchiche, desarroll&amp;aacute;ndose por las diferentes calles de Tarapoto, culminando en la Plaza de Armas.&lt;/p&gt;\r\n\r\n&lt;p&gt;El Rev. Miguel Argando&amp;ntilde;a Tolentino, Presb&amp;iacute;tero de la zona 35 de Tarapoto, anunci&amp;oacute; la Palabra de Dios en base al libro de Romanos 1: 20; &amp;ldquo;Porque las cosas invisibles de &amp;Eacute;l, su eterno poder y deidad, se hacen claramente visibles desde la creaci&amp;oacute;n del mundo, siendo entendidas por medio de las cosas hechas, de modo que no tienen excusa&amp;rdquo;.Marcha por la familia: Tarapoto&lt;/p&gt;\r\n', 'la familia nos une', '2014-05-19 21:05:00', '1400533500', '3002', 'audios/38929920.mp3', 'imagenes/79969481.jpg', 'us_001', 'Publicado'),
(43, 'Música para el Alma en la Convención (Audio)', 'musica-para-el-alma-en-la-convencion-audio', '&lt;p&gt;El &amp;aacute;rea musical de Bethel Radio ha preparado una programaci&amp;oacute;n especial que se emitir&amp;aacute; desde el Estadio San Marcos durante la Convenci&amp;oacute;n.&lt;/p&gt;\r\n\r\n&lt;p&gt;Conoceremos el talento de nuestros hermanos a trav&amp;eacute;s de las melod&amp;iacute;as que entonar&amp;aacute;n en vivo desde el evento &amp;ldquo;Jes&amp;uacute;s te Ama y te Cambia&amp;rdquo;.&lt;/p&gt;\r\n\r\n&lt;p&gt;No te pierdas las emisiones especiales que estamos seguros te motivar&amp;aacute;n, a&amp;uacute;n m&amp;aacute;s,a alabar a Dios de todo coraz&amp;oacute;n.&lt;/p&gt;\r\n\r\n&lt;p&gt;Mantente al tanto de nuestra programaci&amp;oacute;n a partir de las tres de la tarde.&lt;/p&gt;\r\n\r\n&lt;p&gt;Mira el video promocional &lt;a href=&quot;https://www.facebook.com/photo.php?v=884952561520093&quot;&gt;aqu&amp;iacute;&lt;/a&gt;.&lt;/p&gt;\r\n\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n', 'Bethel, Convención, 2014, Radio, música', '2014-05-20 05:03:00', '1400562180', '3002', '', 'imagenes/41909890.jpg', 'us_001', 'Publicado'),
(46, 'Las novedades de Bethel Radio para la Convención', 'las-novedades-de-bethel-radio-para-la-convencion', '&lt;p&gt;Bethel Radio tiene grandes sorpresas para esta Convenci&amp;oacute;n. Adem&amp;aacute;s de nuestras acostumbradas antesalas, contaremos con una cabina en exteriores donde conversaremos con el p&amp;uacute;blico asistente a nuestra fiesta espiritual.&lt;/p&gt;\r\n\r\n&lt;p&gt;Tambi&amp;eacute;n contaremos con una plataforma informativa que lo mantendr&amp;aacute; al d&amp;iacute;a con las incidencias del evento &amp;ldquo;Jes&amp;uacute;s te Ama y te Cambia&amp;rdquo;.&lt;/p&gt;\r\n\r\n&lt;p&gt;El &amp;aacute;rea musical de Bethel tambi&amp;eacute;n se encuentra lista para llevar hasta tu hogar melod&amp;iacute;as en vivo que edificar&amp;aacute;n tu alma.&lt;/p&gt;\r\n\r\n&lt;p&gt;Y no te pierdas el streaming en vivo que hemos preparado para ti.&lt;/p&gt;\r\n', 'convencion', '2014-05-21 01:03:00', '1400634180', '3002', '', 'imagenes/80196814.jpg', 'us_001', 'Publicado'),
(47, 'Delegación ecuatoriana en Bethel', 'delegacion-ecuatoriana-en-bethel', '&lt;p&gt;Bethel Radio inici&amp;oacute; esta noche sus antesalas en San Marcos. Contamos con la presencia de una delegaci&amp;oacute;n de hermanos ecuatorianos, quienes se animaron a entonar una alabanza a Dios.&lt;/p&gt;\r\n\r\n&lt;p&gt;De esta manera dimos inicio a nuestras transmisiones v&amp;iacute;a streaming a trav&amp;eacute;s de&amp;nbsp;&lt;a href=&quot;http://www.bethelradio.fm/video/&quot;&gt;http://www.bethelradio.fm/video/&lt;/a&gt;&lt;/p&gt;\r\n\r\n&lt;p&gt;Escucha la entrevista &lt;a href=&quot;http://grooveshark.com/s/Entrevista+Delegaci+n+De+Ecuador/6TfxpT?src=5&quot;&gt;aqu&amp;iacute;.&lt;/a&gt;&amp;nbsp;&lt;/p&gt;\r\n', 'Bethel, Convención, 2014, Radio', '2014-05-21 01:04:00', '1400634240', '3002', 'audios/56282344.mp3', 'imagenes/69385531.jpg', 'us_001', 'Publicado'),
(48, 'Oficialidad internacional presente en la Convención', 'oficialidad-internacional-presente-en-la-convencion', '&lt;p&gt;La oficialidad internacional de la Obra arrib&amp;oacute; a Lima este martes para formar parte de la Convenci&amp;oacute;n Nacional del Movimiento Misionero Mundial.&lt;/p&gt;\r\n\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n\r\n&lt;p&gt;La delegaci&amp;oacute;n estuvo conformada por el presidente internacional del Movimiento Misionero Mundial, Rev. Gustavo Mart&amp;iacute;nez Garavito, el vicepresidente, Rev. Jos&amp;eacute; Soto y los reverendos Humberto Henao y &amp;Aacute;lvaro Garavito.&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;br /&gt;\r\nDe esta manera, se viene preparando un evento que ser&amp;aacute; inolvidable. Recuerda: &amp;ldquo;Jes&amp;uacute;s te ama y te Cambia&amp;rdquo;.&lt;/p&gt;\r\n', 'convencion', '2014-05-21 01:04:00', '1400634240', '3002', '', 'imagenes/35693065.jpg', 'us_001', 'No publicado'),
(49, '¡El poder de Dios en San Marcos!', 'el-poder-de-dios-en-san-marcos', '&lt;p&gt;El secretario internacional del Movimiento Misionero Mundial, Rev. Rub&amp;eacute;n Concepci&amp;oacute;n, desarroll&amp;oacute; la Palabra de Dios bajo el tema &amp;ldquo;Alabando a Dios motivaremos a otros a confiar en &amp;Eacute;l&amp;rdquo;. (Salmos 40: 4 y 16)&lt;/p&gt;\r\n\r\n&lt;p&gt;La exposici&amp;oacute;n inaugural de la Convenci&amp;oacute;n Nacional 2014 dej&amp;oacute; huellas imborrables en los asistentes y Bethel Radio llev&amp;oacute; la transmisi&amp;oacute;n al mundo entero gracias a su se&amp;ntilde;al de bendici&amp;oacute;n.&lt;/p&gt;\r\n\r\n&lt;p&gt;Aqu&amp;iacute; las fotos:&amp;nbsp;&lt;a href=&quot;http://on.fb.me/1nna0xe&quot; target=&quot;_blank&quot;&gt;http://on.fb.me/1nna0xe&lt;/a&gt;&lt;/p&gt;\r\n', 'Bethel, Convención, 2014, Radio, Concepción', '2014-05-21 04:38:57', '1400647137', '3002', 'audios/83875780.mp3', 'imagenes/44367894.jpg', 'us_001', 'Publicado'),
(50, 'Alcalde de Pueblo Libre: He quedado impresionado con este evento', 'alcalde-de-pueblo-libre-he-quedado-impresionado-con-este-evento', '&lt;p&gt;El alcalde de Pueblo Libre, Rafael Santos, visit&amp;oacute; la cabina movil de Bethel Radio luego del servicio inaugural de la Convenci&amp;oacute;n &amp;ldquo;Jes&amp;uacute;s te Ama y te Cambia&amp;rdquo;.&lt;/p&gt;\r\n\r\n&lt;p&gt;&amp;ldquo;He quedado impresionado con este evento, nunca vi a tanta gente junto alabando a Dios, he salido renovado&amp;rdquo;, dijo el burgomaestre.&lt;/p&gt;\r\n\r\n&lt;p&gt;Adem&amp;aacute;s, destac&amp;oacute; el trabajo que realiza el Movimiento Misionero Mundial en Lima. &amp;ldquo;Estoy gratamente sorprendido con el aporte que le dan a la sociedad&amp;rdquo;, concluy&amp;oacute;.&lt;/p&gt;\r\n', 'Bethel, Convención, 2014, Radio, Rafael Santos', '2014-05-21 04:51:57', '1400647917', '3002', '', 'imagenes/38441726.jpg', 'us_001', 'Publicado'),
(51, 'Delegación brasileña disfruta de la Convención', 'delegacion-brasilena-disfruta-de-la-convencion', '&lt;p&gt;El pastor del Movimiento Misionero Mundial en la ciudad brasile&amp;ntilde;a de Atalaya, &amp;nbsp;Fabiano Rodr&amp;iacute;guez, visit&amp;oacute; la cabina movil de Bethel Radio durante este mi&amp;eacute;rcoles.&lt;/p&gt;\r\n\r\n&lt;p&gt;El siervo de Dios motiv&amp;oacute; al p&amp;uacute;blico peruano a asistir a la Convenci&amp;oacute;n Nacional 2014. &amp;ldquo;Esta fiesta es gloriosa&amp;rdquo;, dijo el pastor de la ciudad fronteriza con Per&amp;uacute;.&lt;/p&gt;\r\n\r\n&lt;p&gt;Recuerde visitarnos en &lt;a href=&quot;https://www.facebook.com/bethelradio&quot;&gt;https://www.facebook.com/bethelradio&lt;/a&gt;&lt;a href=&quot;https://www.facebook.com/bethelradio&quot; target=&quot;_blank&quot;&gt; &lt;/a&gt;y seguirnos en twitter @bethelradio.&lt;/p&gt;\r\n', 'Bethel, Convención, 2014, Radio, brasil', '2014-05-21 14:35:49', '1400682949.93', '3002', 'audios/59188935.mp3', 'imagenes/76638166.jpg', 'us_001', 'Publicado'),
(52, 'Representación chilena: Esta Convención será inolvidable', 'representacion-chilena-esta-convencion-sera-inolvidable', '&lt;p&gt;Parte de la delegaci&amp;oacute;n chilena se encuentra presente en la Convenci&amp;oacute;n Nacional 2014 y Bethel Radio tuvo el gusto de conversar con sierva Alicia Helvez, misionera colombiana en Chile y la hermana Luisa Quispe, colaboradora peruana en Iquique.&lt;/p&gt;\r\n\r\n&lt;p&gt;Las hermanas dieron a conocer que tras los sismos sucedidos en el pa&amp;iacute;s sure&amp;ntilde;o, se ha podido percibir un acercamiento a Dios por parte de las personas.&lt;/p&gt;\r\n\r\n&lt;p&gt;Adem&amp;aacute;s, destacaron la realizaci&amp;oacute;n de la Convenci&amp;oacute;n 2014 &amp;ldquo;Jes&amp;uacute;s te Ama y te Cambia&amp;rdquo;.&lt;/p&gt;\r\n\r\n&lt;p&gt;Recuerde visitarnos en &lt;a href=&quot;https://www.facebook.com/bethelradio&quot;&gt;https://www.facebook.com/bethelradio&lt;/a&gt; y seguirnos en twitter @bethelradio.&lt;/p&gt;\r\n', 'Bethel, Convención, 2014, Radio, chile', '2014-05-21 16:05:27', '1400688327.41', '3002', 'audios/99493668.mp3', 'imagenes/88312969.jpg', 'us_001', 'Publicado'),
(53, ' Impactante Palabra de Dios en la Convención', '-impactante-palabra-de-dios-en-la-convencion', '&lt;p&gt;Esta ma&amp;ntilde;ana vivimos momentos imborrables durante el mensaje del oficial del MMM en Espa&amp;ntilde;a, Rev. Juan Casta&amp;ntilde;o, en San Marcos. El tema expuesto fue &amp;ldquo;&amp;iquest;D&amp;oacute;nde est&amp;aacute;n los Eliseos del Siglo 21?&amp;rdquo;. (2da de Reyes: 9 y 10).&lt;/p&gt;\r\n\r\n&lt;p&gt;La Palabra de Dios fue una se&amp;ntilde;al de alerta para el Pueblo de Dios y a la misma de vez de aliento para que la Iglesia siga replicando la verdad del Evangelio de Cristo.&lt;/p&gt;\r\n', 'Bethel, Convención, 2014, Radio, Juan Castaño', '2014-05-21 19:57:25', '1400702245.96', '3002', 'audios/40008231.mp3', 'imagenes/83531125.jpg', 'us_001', 'Publicado'),
(54, '¡Cantamos feliz cumpleaños en nuestra cabina movil!', 'cantamos-feliz-cumpleanos-en-nuestra-cabina-movil', '&lt;p&gt;La transmisi&amp;oacute;n de la Convenci&amp;oacute;n 2014, a cargo de Bethel Radio, sigue siendo de gran bendici&amp;oacute;n.&lt;/p&gt;\r\n\r\n&lt;p&gt;En esta oportunidad, conversamos con las obreras paname&amp;ntilde;as Rosalba de Asprilla y Laura de Bracho.&lt;/p&gt;\r\n\r\n&lt;p&gt;Adem&amp;aacute;s de recoger sus impresiones sobre el evento &amp;ldquo;Jes&amp;uacute;s te Ama y te Salva&amp;rdquo;, celebramos el onom&amp;aacute;stico de la hermana Rosalba de Asprilla.&lt;/p&gt;\r\n', 'Bethel, Convención, 2014, Radio, panamá', '2014-05-21 21:31:49', '1400707909.59', '3002', 'audios/13597357.mp3', 'imagenes/49269014.jpg', 'us_001', 'Publicado'),
(55, 'Colombia y Guatemala en Bethel', 'colombia-y-guatemala-en-bethel', '&lt;p&gt;Esta ma&amp;ntilde;ana conversamos con tres pastores en nuestra cabina movil. Los siervos de Dios dieron a conocer sus impresiones respecto a la Convenci&amp;oacute;n 2014.&lt;/p&gt;\r\n\r\n&lt;p&gt;Los pastores colombianos Joaqu&amp;iacute;n Jerez y Ernesto Estupi&amp;ntilde;&amp;aacute;n, junto a su consiervo, Manuel L&amp;oacute;pez de Guatemala, conformaron el panel.&lt;/p&gt;\r\n\r\n&lt;p&gt;Recuerde visitarnos en &lt;a href=&quot;https://www.facebook.com/bethelradio&quot;&gt;https://www.facebook.com/bethelradio&lt;/a&gt; y seguirnos en twitter @bethelradio.&lt;/p&gt;\r\n', 'Bethel, Convención, 2014, Radio, Colombia, Guatemala', '2014-05-21 22:02:43', '1400709763.67', '3002', 'audios/42440564.mp3', 'imagenes/62392584.jpg', 'us_001', 'Publicado'),
(56, 'Luego de 4 días de viaje, hermanos de Argentina viven Convención', 'luego-de-4-dias-de-viaje-hermanos-de-argentina-viven-convencion', '&lt;p&gt;Parte de la delegaci&amp;oacute;n argentina fue entrevistada en Bethel Radio durante la Convenci&amp;oacute;n 2014.&lt;/p&gt;\r\n\r\n&lt;p&gt;Los integrantes de la Iglesia del Movimiento Misionero Mundial en Buenos Aires y Formosa, Mart&amp;iacute;n Gel y su esposa, Dorcas de Gel; junto al hermano Freddy L&amp;oacute;pez, destacaron la hospitalidad del pueblo cristiano, en especial del peruano.&lt;/p&gt;\r\n\r\n&lt;p&gt;El hermano L&amp;oacute;pez record&amp;oacute; lo que Dios hizo en su vida. &amp;ldquo;Dios me transform&amp;oacute; de una manera que nunca lo hubiera pensado&amp;rdquo;, agreg&amp;oacute;.&lt;/p&gt;\r\n\r\n&lt;p&gt;Por su parte, los esposos Gel expresaron su alegr&amp;iacute;a al estar participando de este evento. &amp;ldquo;Siempre escuchamos Bethel Radio desde internet, y ahora nos sentimos felices de conocer esta emisora&amp;rdquo;, afirm&amp;oacute; la hermana Dorcas.&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;strong&gt;Dato&lt;/strong&gt;&lt;/p&gt;\r\n\r\n&lt;p&gt;El viaje de Formosa al Per&amp;uacute; dura casi 4 d&amp;iacute;as.&lt;/p&gt;\r\n', 'Bethel, Convención, 2014, Radio, argentina', '2014-05-22 00:58:22', '1400720302.33', '3002', 'audios/72810848.mp3', 'imagenes/41458397.jpg', 'us_001', 'Publicado'),
(57, 'Desde que Dios me llamó, estuve dispuesto a dejar todo', 'desde-que-dios-me-llamo-estuve-dispuesto-a-dejar-todo', '&lt;p&gt;El misionero peruano en Inglaterra, Roger Falc&amp;oacute;n, destac&amp;oacute; en Bethel Radio que ya son casi cinco a&amp;ntilde;os de trabajo cristiano en el pa&amp;iacute;s europeo.&lt;/p&gt;\r\n\r\n&lt;p&gt;Asimismo, dijo que las convenciones son refresco para el alma de los obreros en todo el mundo. &amp;ldquo;Recuerdo que en el Per&amp;uacute; viv&amp;iacute;a en una zona muy humilde, pero desde que Dios me llam&amp;oacute;, estuve dispuesto a dejar todo&amp;rdquo;, a&amp;ntilde;adi&amp;oacute;.&lt;/p&gt;\r\n\r\n&lt;p&gt;Sobre la uni&amp;oacute;n civil homosexual, expres&amp;oacute; que es una falacia creer que un pa&amp;iacute;s desarrollado debe aceptar el matrimonio gay. &amp;ldquo;Es evidente que los pa&amp;iacute;ses que optan por aceptar las relaciones homosexuales est&amp;aacute;n en serio peligro&amp;rdquo;, agreg&amp;oacute; el pastor.&lt;/p&gt;\r\n', 'Bethel, Convención, 2014, Radio, inglaterra', '2014-05-22 01:30:41', '1400722241.86', '3002', 'audios/99587041.mp3', 'imagenes/81673980.jpg', 'us_001', 'Publicado'),
(58, '¡Alcanza tu bendición!', 'alcanza-tu-bendicion', '&lt;p&gt;El presidente internacional del Movimiento Misionero Mundial, Rev. Gustavo Mart&amp;iacute;nez Garavito, record&amp;oacute; en el mensaje expuesto este mi&amp;eacute;rcoles por la noche que la obediencia a Dios es fundamental para ser bendecidos por el Todopoderoso.&amp;nbsp;&lt;/p&gt;\r\n\r\n&lt;p&gt;&amp;ldquo;Sin obediencia no hay lluvia&amp;rdquo; fue el tema que se bas&amp;oacute; en el libro de Deuteronomio, cap&amp;iacute;tulo 11, del verso 11 al 16. El siervo de Dios record&amp;oacute; que es si no seguimos los mandamientos divinos, nuestra vida espiritual ser&amp;aacute; desierta.&lt;/p&gt;\r\n\r\n&lt;p&gt;Recuerde visitarnos en &lt;a href=&quot;http://El presidente internacional del Movimiento Misionero Mundial, Rev. Gustavo Mart&iacute;nez Garavito, record&oacute; en el mensaje de este mi&eacute;rcoles por la noche que es necesario obedecer a Dios para ser bendecidos. Vea las im&aacute;genes de la exposici&oacute;n.   &ldquo;Sin obediencia no hay lluvia&rdquo; fue el tema que se bas&oacute; en el libro de Deuteronomio, cap&iacute;tulo 11, del verso 11 al 16. El siervo de Dios record&oacute; que es si no seguimos los mandamientos divinos, nuestra vida espiritual ser&aacute; desierta.   Recuerde visitarnos en https://www.facebook.com/bethelradio y seguirnos en twitter @bethelradio.&quot; target=&quot;_blank&quot;&gt;https://www.facebook.com/bethelradio&lt;/a&gt; y seguirnos en twitter @bethelradio.&lt;/p&gt;\r\n', 'Bethel, Convención, 2014, Radio, mensaje miércoles noche', '2014-05-22 04:53:05', '1400734385.42', '3002', 'audios/59120262.mp3', 'imagenes/82418586.jpg', 'us_001', 'Publicado'),
(59, 'Rev. Ascarruz destaca presencia arequipeña en la Convención', 'rev-ascarruz-destaca-presencia-arequipena-en-la-convencion', '&lt;p&gt;Este mi&amp;eacute;rcoles por la noche conversamos con el oficial nacional del Movimiento Misionero Mundial en el Per&amp;uacute; y pastor de la Obra en Arequipa, Rev. Josu&amp;eacute; Ascarruz.&lt;/p&gt;\r\n\r\n&lt;p&gt;El pastor destac&amp;oacute; que la educaci&amp;oacute;n debe ir acompa&amp;ntilde;ada por los valores cristianos. &amp;ldquo;En los colegios Elim inculcamos conocimientos, pero sobre todo, la Palabra de Dios&amp;rdquo;, a&amp;ntilde;adi&amp;oacute;.&lt;/p&gt;\r\n\r\n&lt;p&gt;En ese sentido, record&amp;oacute; desde el Estadio San Marcos que los colegios cristianos son el eje transformador de la juventud.&lt;/p&gt;\r\n\r\n&lt;p&gt;Finalmente, subray&amp;oacute; las movilizaciones contra la uni&amp;oacute;n civil homosexual que se desarrollaron en la Ciudad Blanca.&lt;/p&gt;\r\n', 'Bethel, Convención, 2014, Radio, arequipa', '2014-05-22 05:32:36', '1400736756.31', '3002', 'audios/61443699.mp3', 'imagenes/41082158.jpg', 'us_001', 'Publicado'),
(60, 'Los valores cristianos son nuestro estandarte', 'los-valores-cristianos-son-nuestro-estandarte', '&lt;p&gt;El oficial internacional del Movimiento Misionero Mundial, Rev. Margaro Figueroa, desarroll&amp;oacute; la Palabra de Dios bajo el tema &amp;ldquo;Cuando se pierden los valores&amp;rdquo;. (1 de Samuel 15: 1-3 9-10 y 14).&lt;/p&gt;\r\n\r\n&lt;p&gt;Un mensaje fue un claro llamado de atenci&amp;oacute;n relacionado a mantener los valores en una sociedad que carece de principios cristianos. Muchos acudieron al llamado.&lt;/p&gt;\r\n', 'Bethel, Convención, 2014, Radio, margaro figueroa', '2014-05-22 20:47:45', '1400791665.19', '3002', 'audios/86994570.mp3', 'imagenes/15919060.jpg', 'us_001', 'Publicado'),
(61, ' El trabajo de una madre es invaluable', '-el-trabajo-de-una-madre-es-invaluable', '&lt;p&gt;La hermana Carmen Valencia de Mart&amp;iacute;nez; esposa del presidente internacional del Movimiento Misionero Mundial, Rev. Gustavo Mart&amp;iacute;nez Garavito; concedi&amp;oacute; una edificante entrevista a Bethel Radio.&lt;/p&gt;\r\n\r\n&lt;p&gt;La sierva de Dios analiz&amp;oacute; temas familiares a la luz de las Sagradas Escrituras y dio una serie de recomendaciones para la correcta formaci&amp;oacute;n de nuestros hijos.&lt;/p&gt;\r\n\r\n&lt;p&gt;Recuerde visitarnos en &lt;a href=&quot;https://www.facebook.com/bethelradio&quot;&gt;https://www.facebook.com/bethelradio&lt;/a&gt; y seguirnos en twitter @bethelradio.&lt;/p&gt;\r\n', 'Bethel, Convención, 2014, Radio, carmen valencia', '2014-05-22 21:02:38', '1400792558.35', '3002', 'audios/97275010.mp3', 'imagenes/92740375.jpg', 'us_001', 'Publicado'),
(62, 'Italia sigue siendo evangelizada', 'italia-sigue-siendo-evangelizada', '&lt;p&gt;El pastor del Movimiento Misionero Mundial en Milano, Galo Fiori, nos visit&amp;oacute; esta tarde para contarnos c&amp;oacute;mo est&amp;aacute; viviendo la fiesta espiritual de la Convenci&amp;oacute;n Nacional 2014.&lt;/p&gt;\r\n\r\n&lt;p&gt;Adem&amp;aacute;s, dio a conocer de qu&amp;eacute; manera la Iglesia viene desarroll&amp;aacute;ndose en Italia.&lt;/p&gt;\r\n\r\n&lt;p&gt;Por &amp;uacute;ltimo, alent&amp;oacute; a los hermanos peruanos a formar parte del evento &amp;ldquo;Jes&amp;uacute;s te ama y te Cambia&amp;rdquo;.&lt;/p&gt;\r\n\r\n&lt;p&gt;Recuerde visitarnos en &lt;a href=&quot;https://www.facebook.com/bethelradio&quot;&gt;https://www.facebook.com/bethelradio&lt;/a&gt; y seguirnos en twitter @bethelradio.&lt;/p&gt;\r\n', 'Bethel, Convención, 2014, Radio, italia', '2014-05-22 23:26:42', '1400801202.18', '3002', 'audios/17048863.mp3', 'imagenes/97326289.jpg', 'us_001', 'Publicado'),
(63, 'Los violines suenan en la Convención', 'los-violines-suenan-en-la-convencion', '&lt;h1&gt;&lt;span style=&quot;font-size:13px; line-height:1.6&quot;&gt;Hoy se estren&amp;oacute; el programa &amp;ldquo;Instrumentos y Alabanzas&amp;rdquo; en el marco de los especiales que Bethel Radio ha preparado para la Convenci&amp;oacute;n 2014.&lt;/span&gt;&lt;/h1&gt;\r\n\r\n&lt;p&gt;Hoy escuchamos a dos violinistas: Desde Arequipa, al peque&amp;ntilde;o Leonardo Mamani y desde Trujillo, al hermano Danny Alayo.&lt;/p&gt;\r\n\r\n&lt;p&gt;Adem&amp;aacute;s contamos con la presencia del padre de Leonardo, Juan Pablo Mamani y de la directora musical de la Iglesia en Trujillo, la hermana Mirella Benitez.&lt;/p&gt;\r\n\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n', 'Bethel, Convención, 2014, Radio, violín', '2014-05-23 00:13:16', '1400803996.07', '3002', 'audios/52157766.mp3', 'imagenes/12657056.jpg', 'us_001', 'Publicado'),
(64, 'Ecuador alaba a Dios', 'ecuador-alaba-a-dios', '&lt;p&gt;En los especiales de Bethel estrenamos &amp;ldquo;Nuestras Voces en Vivo&amp;rdquo;. En esta ocasi&amp;oacute;n, escuchamos algunos himnos a cargo de nuestros hermanos ecuatorianos.&lt;/p&gt;\r\n\r\n&lt;p&gt;Contamos con la participaci&amp;oacute;n de Cesar Cruzatty, Abigail Valle, Cristian Ram&amp;iacute;rez y Viviana Ubill&amp;uacute;s.&lt;/p&gt;\r\n\r\n&lt;p&gt;Adem&amp;aacute;s de las melod&amp;iacute;as entonadas, nuestros invitados contaron parte de sus testimonios.&lt;/p&gt;\r\n\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n', 'Bethel, Convención, 2014, Radio, ecuador, voces', '2014-05-23 00:26:02', '1400804762.82', '3002', 'audios/30964119.mp3', 'imagenes/90808394.jpg', 'us_001', 'Publicado'),
(65, 'Raúl y Anida son dos vidas cambiadas', 'raul-y-anida-son-dos-vidas-cambiadas', '&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n\r\n&lt;p&gt;Raul Calder&amp;oacute;n y Anida Huam&amp;aacute;n contaron su historia de transformaci&amp;oacute;n en el programa especial de Bethel, &amp;ldquo;Vidas Cambiadas&amp;rdquo;.&lt;/p&gt;\r\n\r\n&lt;p&gt;Ambos explicaron c&amp;oacute;mo el rencor gobern&amp;oacute; su matrimonio, llev&amp;aacute;ndolos a una vida de diversiones pasajeras.&lt;/p&gt;\r\n\r\n&lt;p&gt;Tambi&amp;eacute;n expusieron de qu&amp;eacute; manera Jesucristo lleg&amp;oacute; a sus corazones para hacerlos verdaderamente felices.&lt;/p&gt;\r\n\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n', 'Bethel, Convención, 2014, Radio, vidas cambiadas', '2014-05-23 00:54:38', '1400806478.6', '3002', 'audios/13190091.mp3', 'imagenes/24955958.jpg', 'us_001', 'Publicado'),
(66, 'Honduras y Colombia presentes en la Convención', 'honduras-y-colombia-presentes-en-la-convencion', '&lt;p&gt;Hoy conversamos en nuestra antesala con la hermana Zulma Ram&amp;iacute;rez de Honduras y los esposos colombianos Wilson Urnesta y Mar&amp;iacute;a &amp;Aacute;ngeles.&lt;/p&gt;\r\n\r\n&lt;p&gt;Los invitados dieron a conocer sus expectativas sobre la Convenci&amp;oacute;n y el esfuerzo que realizaron para llegar al Per&amp;uacute;.&lt;/p&gt;\r\n\r\n&lt;p&gt;Recuerde visitarnos en https://www.facebook.com/bethelradio y seguirnos en twitter @bethelradio.&lt;/p&gt;\r\n', 'Bethel, Convención, 2014, Radio, honduras, colombia', '2014-05-23 02:23:01', '1400811781.09', '3002', 'audios/77841309.mp3', 'imagenes/79509644.jpg', 'us_001', 'Publicado'),
(67, 'Sin arrepentimiento no podemos llegar a Dios', 'sin-arrepentimiento-no-podemos-llegar-a-dios', '&lt;p&gt;Desde Costa Rica, el Rev. Carlos Guerra expuso esta noche la Palabra de Dios bajo el tema &amp;ldquo;El arrepentimiento: Primer paso para llegar a Dios&amp;rdquo;, bas&amp;aacute;ndose en el libro de Hechos, cap&amp;iacute;tulo 17.&lt;/p&gt;\r\n\r\n&lt;p&gt;La disertaci&amp;oacute;n del Rev. Carlos Guerra hizo eco en las decenas de miles de personas que abarrotaron el Estadio San Marcos durante la tercera noche de la fiesta espiritual del Movimiento Misionero Mundial.&lt;/p&gt;\r\n\r\n&lt;p&gt;Durante el llamado se pudo ver a muchas visitas entre l&amp;aacute;grimas entregando su vida a Jesucristo.&lt;/p&gt;\r\n\r\n&lt;p&gt;Siga la Convenci&amp;oacute;n Nacional 2014 con el hashtag #Jes&amp;uacute;steamayteCambia&lt;/p&gt;\r\n\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n', 'Bethel, Convención, 2014, Radio, carlos guerra', '2014-05-23 05:14:34', '1400822074.5', '3002', 'audios/95947630.mp3', 'imagenes/50368945.jpg', 'us_001', 'Publicado'),
(68, 'Costa Rica se opone al matrimonio homosexual', 'costa-rica-se-opone-al-matrimonio-homosexual', '&lt;p&gt;El hermano costarricense, Jos&amp;eacute; Luis Orellana, destac&amp;oacute; en Bethel Radio la realizaci&amp;oacute;n de la Convenci&amp;oacute;n Nacional 2014.&lt;/p&gt;\r\n\r\n&lt;p&gt;&amp;ldquo;Las convenciones peruanas son realmente gloriosas&amp;rdquo;, dijo desde el Estadio San Marcos.&lt;/p&gt;\r\n\r\n&lt;p&gt;Adem&amp;aacute;s, cont&amp;oacute; que la iglesia en Costa Rica se opuso rotundamente al reciente izamiento de la bandera gay en la casa de gobierno de su pa&amp;iacute;s.&lt;/p&gt;\r\n', 'Bethel, Convención, 2014, Radio, costa  rica', '2014-05-23 15:24:23', '1400858663.54', '3002', 'audios/37598728.mp3', 'imagenes/53059641.jpg', 'us_001', 'Publicado'),
(69, 'Bolivianos también dicen: Jesús te ama y te cambia', 'bolivianos-tambien-dicen-jesus-te-ama-y-te-cambia', '&lt;p&gt;La delegaci&amp;oacute;n boliviana visit&amp;oacute; la cabina movil de Bethel Radio para contarnos c&amp;oacute;mo viven la Convenci&amp;oacute;n Nacional del Movimiento Misionero Mundial.&lt;/p&gt;\r\n\r\n&lt;p&gt;Esta ma&amp;ntilde;ana contamos con la presencia de la hermana Tatiana Portllo (Cochabamba) y los hermanos orure&amp;ntilde;os Jos&amp;eacute; Luis Orellana, Camilo L&amp;oacute;pez y Luciano Portillo.&lt;/p&gt;\r\n\r\n&lt;p&gt;Recuerde visitarnos en https://www.facebook.com/bethelradio y seguirnos en twitter @bethelradio.&lt;/p&gt;\r\n', 'Bethel, Convención, 2014, Radio, Bolivia', '2014-05-23 15:53:58', '1400860438.91', '3002', 'audios/38375724.mp3', 'imagenes/26088691.jpg', 'us_001', 'Publicado'),
(70, 'No te ocultes de Dios', 'no-te-ocultes-de-dios', '&lt;p&gt;La Convenci&amp;oacute;n Nacional sigue y el poder de Dios contin&amp;uacute;a sinti&amp;eacute;ndose en San Marcos.&lt;/p&gt;\r\n\r\n&lt;p&gt;Esta ma&amp;ntilde;ana escuchamos el mensaje divino en la voz de la hermana Carmen Valencia de Mart&amp;iacute;nez. &amp;ldquo;En Vano te Escondes&amp;rdquo;, fue el tema que la sierva de Dios escogi&amp;oacute; para instar a la audiencia al arrepentimiento.&lt;/p&gt;\r\n\r\n&lt;p&gt;Adem&amp;aacute;s, record&amp;oacute; que para el Todopoderoso no existen pecados ocultos, porque &amp;Eacute;l todo lo conoce.&lt;/p&gt;\r\n', 'Bethel, Convención, 2014, Radio, Carmen Valencia', '2014-05-23 21:24:37', '1400880277.88', '3002', 'audios/17019427.mp3', 'imagenes/27300850.jpg', 'us_001', 'Publicado'),
(71, 'Estados Unidos en crisis de valores', 'estados-unidos-en-crisis-de-valores', '&lt;p&gt;Los esposos Alfred y Rosa Benoit visitaron nuestra cabina movil para exponer c&amp;oacute;mo viven la Convenci&amp;oacute;n Nacional 2014.&lt;/p&gt;\r\n\r\n&lt;p&gt;Dieron a conocer que las fiestas espirituales peruanas son especiales porque se siente la unidad del Pueblo de Dios y la comuni&amp;oacute;n con el Esp&amp;iacute;ritu Santo.&lt;/p&gt;\r\n\r\n&lt;p&gt;Tambi&amp;eacute;n lamentaron que Estados Unidos se encuentre en una crisis de valores. &amp;ldquo;Quisiera que en mi pa&amp;iacute;s la gente tambi&amp;eacute;n marche contra al matrimonio homosexual&amp;rdquo;, dijo el hermano Alfred Benoit.&lt;/p&gt;\r\n', 'Bethel, Convención, 2014, Radio, Estados Unidos', '2014-05-23 23:30:03', '1400887803.91', '3002', 'audios/60820062.mp3', 'imagenes/66288111.jpg', 'us_001', 'Publicado'),
(72, 'Director de Radio Libertad visitó Bethel', 'director-de-radio-libertad-visito-bethel', '&lt;p&gt;El pastor ecuatoriano, V&amp;iacute;ctor Balante, concedi&amp;oacute; una breve, pero edificante entrevista a Bethel Radio.&lt;/p&gt;\r\n\r\n&lt;p&gt;Cont&amp;oacute; cu&amp;aacute;l es su sensaci&amp;oacute;n tras participar en reiteradas ocasiones de nuestras convenciones.&lt;/p&gt;\r\n\r\n&lt;p&gt;Tambi&amp;eacute;n dio a conocer el trabajo que realiza como director de Radio Libertad.&lt;/p&gt;\r\n\r\n&lt;p&gt;Recuerde visitarnos en https://www.facebook.com/bethelradio y seguirnos en twitter @bethelradio.&lt;/p&gt;\r\n', 'Bethel, Convención, 2014, Radio, radio libertad', '2014-05-24 00:14:39', '1400890479.19', '3002', 'audios/28932833.mp3', 'imagenes/96567456.jpg', 'us_001', 'Publicado'),
(73, 'En vivo: Jesús te ama y te Cambia', 'en-vivo-jesus-te-ama-y-te-cambia', '&lt;p&gt;Los autores e int&amp;eacute;rpretes del jingle &amp;ldquo;Jes&amp;uacute;s te Ama y te Cambia&amp;rdquo; visitaron la cabina movil de Bethel Radio para contarnos c&amp;oacute;mo naci&amp;oacute; la idea del tema musical que suena en el Per&amp;uacute; y en el mundo.&lt;/p&gt;\r\n\r\n&lt;p&gt;Hoy contamos con la presencia de Astrid Espinoza, Juan Carlos Zubiaga, Jos&amp;eacute; Torres y de Mois&amp;eacute;s Narrao.&lt;/p&gt;\r\n\r\n&lt;p&gt;Te invitamos a escuchar esta interesante entrevista que tuvo lugar en el programa &amp;ldquo;Instrumentos y alabanzas&amp;rdquo;&lt;/p&gt;\r\n', 'Bethel, Convención, 2014, Radio, jingle en vivo', '2014-05-24 02:26:29', '1400898389.44', '3002', 'audios/20156061.mp3', 'imagenes/24531090.jpg', 'us_001', 'Publicado'),
(74, ' Una familia guatemalteca que alaba a Dios', '-una-familia-guatemalteca-que-alaba-a-dios', '&lt;p&gt;La cabina movil de Bethel Radio acogi&amp;oacute; esta tarde a la familia L&amp;oacute;pez Barrientos desde Guatemala.&lt;/p&gt;\r\n\r\n&lt;p&gt;Nuestros invitados participaron de una programa especial en el que entonaron un breve repertorio de melod&amp;iacute;as cristianas.&lt;/p&gt;\r\n\r\n&lt;p&gt;Contamos con la presencia de los hermanos Pedro y Manuel L&amp;oacute;pez, junto a su madre, la hermana Amarilis Barrientos.&lt;/p&gt;\r\n\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n', 'Bethel, Convención, 2014, Radio, López, Guatemala', '2014-05-24 02:46:55', '1400899615.57', '3002', 'audios/47387693.mp3', 'imagenes/36490601.jpg', 'us_001', 'Publicado'),
(75, 'Cristo murió por ti', 'cristo-murio-por-ti', '&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n\r\n&lt;p&gt;El libro de Ezequiel cap&amp;iacute;tulo 44, verso 23, fue el centro del mensaje que toc&amp;oacute; las fibras m&amp;aacute;s internas de quienes pudieron formar parte de la Convenci&amp;oacute;n Nacional 2014.&lt;/p&gt;\r\n\r\n&lt;p&gt;La noche del viernes, el oficial internacional del Movimiento Misionero Mundial, Rev. &amp;Aacute;lvaro Garavito, desarroll&amp;oacute; la Palabra de Dios bajo el tema: &amp;ldquo;La ense&amp;ntilde;anza y el discernimiento&amp;rdquo;.&lt;/p&gt;\r\n\r\n&lt;p&gt;El siervo de Dios record&amp;oacute; que solo el poder de la sangre de Cristo puede romper las cadenas con las que el enemigo ha maniatado a millones de hombres y mujeres.&lt;/p&gt;\r\n', 'Bethel, Convención, 2014, Radio, mensaje álvaro garavito', '2014-05-24 04:48:29', '1400906909.36', '3002', 'audios/94245179.mp3', 'imagenes/18456644.jpg', 'us_001', 'Publicado'),
(76, 'La Obra en Japón sigue creciendo', 'la-obra-en-japon-sigue-creciendo', '&lt;p&gt;El pastor David Veramendi cont&amp;oacute; en Bethel Radio c&amp;oacute;mo viene trabajando la Obra del Movimiento Misionero Mundial en Jap&amp;oacute;n.&lt;/p&gt;\r\n\r\n&lt;p&gt;Dio a conocer que constantemente se desarrollan campa&amp;ntilde;as y confraternidades, con la caracter&amp;iacute;stica de que se est&amp;aacute;n interpretando los servicios al japon&amp;eacute;s.&lt;/p&gt;\r\n\r\n&lt;p&gt;Tambi&amp;eacute;n destac&amp;oacute; que las revistas latinas han tomado en cuenta a nuestra Iglesia para elaborar notas e informes period&amp;iacute;sticos.&lt;/p&gt;\r\n\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n', 'Bethel, Convención, 2014, Radio, japón', '2014-05-24 05:18:26', '1400908706.61', '3002', 'audios/99806288.mp3', 'imagenes/89366810.jpg', 'us_001', 'Publicado'),
(77, 'Fui homosexual durante 20 años, pero Dios me hizo libre', 'fui-homosexual-durante-20-anos-pero-dios-me-hizo-libre', '&lt;p&gt;Un testimonio de poder escuchamos en Bethel Radio durante la Convenci&amp;oacute;n Nacional 2014.&lt;/p&gt;\r\n\r\n&lt;p&gt;El hermano Colombiano Oscar Orozca Ochoa cont&amp;oacute; la maravillosa forma en la que Dios lo liber&amp;oacute; del homosexualidad,. Pecado que lo tuvo atado durante 20 a&amp;ntilde;os.&lt;/p&gt;\r\n\r\n&lt;p&gt;En ese sentido, record&amp;oacute; que la uni&amp;oacute;n civil homosexual no le dar&amp;aacute; la felicidad a los gays, porque solo Cristo hace al hombre feliz.&lt;/p&gt;\r\n', 'Bethel, Convención, 2014, Radio, colombia, exhomosexual', '2014-05-24 15:02:36', '1400943756.91', '3002', 'audios/31268497.mp3', 'imagenes/31013102.jpg', 'us_001', 'Publicado'),
(78, 'Rompiendo cadenas', 'rompiendo-cadenas', '&lt;p&gt;El libro de Ezequiel cap&amp;iacute;tulo 44, verso 23, fue el centro del mensaje que toc&amp;oacute; las fibras m&amp;aacute;s internas de quienes pudieron formar parte de la Convenci&amp;oacute;n Nacional 2014.&lt;/p&gt;\r\n\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n\r\n&lt;p&gt;La noche del viernes, el oficial internacional del Movimiento Misionero Mundial, Rev. &amp;Aacute;lvaro Garavito, desarroll&amp;oacute; la Palabra de Dios bajo el tema: &amp;ldquo;La ense&amp;ntilde;anza y el discernimiento&amp;rdquo;.&lt;/p&gt;\r\n\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n\r\n&lt;p&gt;El siervo de Dios record&amp;oacute; que solo el poder de la sangre de Cristo puede romper las cadenas con las que el enemigo ha maniatado a millones de hombres y mujeres.&lt;/p&gt;\r\n', 'convencion 2014', '2014-05-24 17:53:04', '1400953984.68', '3002', '', 'imagenes/31649654.jpg', 'us_004', 'No publicado'),
(80, 'Dios ejecutó la operación de rescate más grande de la historia', 'dios-ejecuto-la-operacion-de-rescate-mas-grande-de-la-historia', '&lt;p&gt;Hoy vivimos en San Marcos un glorioso servicio misionero. En el devocional se present&amp;oacute; una dramatizaci&amp;oacute;n a cargo de la Iglesia de Canto Grande.&lt;/p&gt;\r\n\r\n&lt;p&gt;Minutos despu&amp;eacute;s, el Rev. Samuel Mej&amp;iacute;a desarrolla la Palabra de Dios bajo el tema: &amp;ldquo;La operaci&amp;oacute;n de rescate m&amp;aacute;s grande&amp;rdquo; . (Jerem&amp;iacute;as 9:1)&lt;/p&gt;\r\n\r\n&lt;p&gt;El mensaje dio a conocer la importancia del sacrificio que realiz&amp;oacute; nuestro Se&amp;ntilde;or Jesucristo en la Cruz del Calvario.&lt;/p&gt;\r\n\r\n&lt;p&gt;Adem&amp;aacute;s, el siervo de Dios alent&amp;oacute; a la audiencia a encender la llama misionera en su coraz&amp;oacute;n.&lt;/p&gt;\r\n', 'Bethel, Convención, 2014, Samuel Mejía', '2014-05-24 20:35:11', '1400963711.07', '3002', 'audios/80890400.mp3', 'imagenes/17643577.jpg', 'us_001', 'Publicado'),
(81, 'Servirle a Dios durante la juventud es incomparable', 'servirle-a-dios-durante-la-juventud-es-incomparable', '&lt;p&gt;Hoy en Nuestras Voces en Vivo contamos con la presencia del pastor Samuel Mej&amp;iacute;a Jr.&lt;/p&gt;\r\n\r\n&lt;p&gt;Adem&amp;aacute;s de alabar a Dios, nuestro hermano cont&amp;oacute; c&amp;oacute;mo pudo tener un encuentro personal con el Creador durante su adolescencia.&lt;/p&gt;\r\n\r\n&lt;p&gt;Tambi&amp;eacute;n alent&amp;oacute; a los j&amp;oacute;venes a capacitarse en el conocimiento de otros idiomas para poder servir mejor en la Obra misionera.&lt;/p&gt;\r\n', 'Bethel, Samuel Mejía Jr., Convención, 2014', '2014-05-25 00:07:45', '1400976465.61', '3002', 'audios/26972120.mp3', 'imagenes/27283404.jpg', 'us_001', 'Publicado'),
(82, 'Tierra Nueva en Bethel', 'tierra-nueva-en-bethel', '&lt;p&gt;La agrupaci&amp;oacute;n Tierra Nueva visit&amp;oacute; nuestra cabina movil para alabar a Dios con melod&amp;iacute;as latinoamericanas.&lt;/p&gt;\r\n\r\n&lt;p&gt;Durante la entrevista narraron de qu&amp;eacute; manera viven la Convenci&amp;oacute;n Nacional del Movimiento Misionero Mundial.&lt;/p&gt;\r\n\r\n&lt;p&gt;Debemos destacar que tambi&amp;eacute;n entonaron algunas alabanzas al Rey de Reyes y Se&amp;ntilde;or de Se&amp;ntilde;ores.&lt;/p&gt;\r\n', 'Bethel, Tierra Nueva., Convención, 2014', '2014-05-25 00:13:05', '1400976785.2', '3002', 'audios/87167338.mp3', 'imagenes/53722662.jpg', 'us_001', 'Publicado'),
(83, '¡Los pequeños celebraron la Convención!', 'los-pequenos-celebraron-la-convencion', '&lt;p&gt;Semillitas de Amor present&amp;oacute; un divertido show infantil en la Convenci&amp;oacute;n Nacional. Este s&amp;aacute;bado, muchos ni&amp;ntilde;os sonrieron y alabaron a Dios.&lt;/p&gt;\r\n\r\n&lt;p&gt;Durante el evento transmitido por Bethel Radio, pudimos observar la constante participaci&amp;oacute;n de los peque&amp;ntilde;os, quienes entonaron melod&amp;iacute;as infantiles con gran&amp;nbsp;alegr&amp;iacute;a.&lt;/p&gt;\r\n\r\n&lt;p&gt;Tambi&amp;eacute;n se llevaron a cabo concursos y actividades did&amp;aacute;cticas con el tierno p&amp;uacute;blico.&lt;/p&gt;\r\n', 'Bethel, Convención, 2014, Radio, semillitas', '2014-05-25 02:16:23', '1400984183.84', '3002', '', 'imagenes/63343344.jpg', 'us_001', 'Publicado'),
(84, 'Necesitamos familias sólidas en el Perú', 'necesitamos-familias-solidas-en-el-peru', '&lt;p&gt;La congresista Luz Salgado visit&amp;oacute; este jueves la Convenci&amp;oacute;n Nacional del Movimiento Misionero Mundial.&lt;/p&gt;\r\n\r\n&lt;p&gt;Bethel Radio convers&amp;oacute; con ella para que nos coment&amp;oacute; qu&amp;eacute; le pareci&amp;oacute; vivir de manera presencial nuestra fiesta.&lt;/p&gt;\r\n\r\n&lt;p&gt;La parlamentaria mencion&amp;oacute; que se ha llevado una grata impresi&amp;oacute;n del evento.&lt;/p&gt;\r\n\r\n&lt;p&gt;Asimismo, dijo que se opone a la uni&amp;oacute;n civil homosexual, porque el concepto de familia parte de la relaci&amp;oacute;n entre un hombre y una mujer.&lt;/p&gt;\r\n', 'Bethel, Convención, 2014, Radio, salgado', '2014-05-25 03:19:00', '1400987940.46', '3002', 'audios/51174772.mp3', 'imagenes/27719691.jpg', 'us_001', 'Publicado'),
(85, ' ¡Ríos de agua viva en Lima!', '-rios-de-agua-viva-en-lima', '&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n\r\n&lt;p&gt;Afluentes de agua viva recorrieron las instalaciones del Estadio San Marcos este s&amp;aacute;bado por la noche en el marco de la quinta fecha de la Convenci&amp;oacute;n Nacional del Movimiento Misionero Mundial.&lt;/p&gt;\r\n\r\n&lt;p&gt;El Rev. R&amp;oacute;mulo Vergara, oficial internacional del MMM, desarroll&amp;oacute; la Palabra de Dios bajo el tema: &amp;ldquo;Hay un r&amp;iacute;o&amp;rdquo; . (Salmos 46:4,7)&lt;/p&gt;\r\n\r\n&lt;p&gt;El expositor record&amp;oacute; que el ser humano no puede, ni debe vivir sin Dios. &amp;ldquo;Esta noche veremos una crecida del r&amp;iacute;o del Esp&amp;iacute;ritu Santo&amp;rdquo;, mencion&amp;oacute; el obrero de Cristo.&lt;/p&gt;\r\n', 'Bethel, Rómulo Vergara, Convención, 2014', '2014-05-25 03:36:50', '1400989010.01', '3002', 'audios/11239466.mp3', 'imagenes/99072608.jpg', 'us_001', 'Publicado'),
(86, 'Jesucristo me salvó del suicidio', 'jesucristo-me-salvo-del-suicidio', '&lt;p&gt;La hermana Mercedes Lech&amp;oacute;n, arrib&amp;oacute; a la Ciudad de Lima procedente de Suiza, para celebrar la Convenci&amp;oacute;n 2014 &amp;ldquo;Jes&amp;uacute;s te ama y te Salva&amp;rdquo;.&lt;/p&gt;\r\n\r\n&lt;p&gt;&amp;ldquo;Suiza es un pa&amp;iacute;s que amo mucho, porque Dios me abri&amp;oacute; las puertas de esta naci&amp;oacute;n que necesita de Dios&amp;rdquo;, cont&amp;oacute; la hermana Mercedes en Bethel Radio.&lt;/p&gt;\r\n\r\n&lt;p&gt;Tambi&amp;eacute;n narr&amp;oacute; parte de su testimonio de conversi&amp;oacute;n. &amp;ldquo;Estuve al borde del suicidio, porque, sin conocer a Dios, sufr&amp;iacute; una decepci&amp;oacute;n amorosa y adem&amp;aacute;s mi madre hab&amp;iacute;a fallecido&amp;rdquo;, cont&amp;oacute; la ecuatoriana, radicada en Basel.&lt;/p&gt;\r\n\r\n&lt;p&gt;Por &amp;uacute;ltimo, pidi&amp;oacute; a la audiencia orar mucho por Suiza.&lt;/p&gt;\r\n', 'Bethel, Convención, 2014, Radio, suiza', '2014-05-25 04:53:04', '1400993584.26', '3002', 'audios/27859420.mp3', 'imagenes/49248672.jpg', 'us_001', 'Publicado');
INSERT INTO `entradas` (`id_entrada`, `titulo`, `titulo_id`, `redaccion`, `tags`, `fecha`, `fecha_unix`, `id_categoria`, `id_audio`, `id_imagen`, `id_usuario`, `estado`) VALUES
(87, 'Jesús te ama y te cambia en guaraní', 'jesus-te-ama-y-te-cambia-en-guarani', '&lt;p&gt;Las hermanas paraguayas Elizabeth y Mar&amp;iacute;a Gonz&amp;aacute;les visitaron esta ma&amp;ntilde;ana nuestra cabina movil para contarnos las grandes cosas que Dios est&amp;aacute; haciendo en el pa&amp;iacute;s guaran&amp;iacute;.&lt;/p&gt;\r\n\r\n&lt;p&gt;Resaltaron el avance de la Obra de Dios y la trascendencia que tiene en sus vidas poder participar de la Convenci&amp;oacute;n Nacional del Movimiento Misionero Mundial en el Per&amp;uacute;.&lt;/p&gt;\r\n\r\n&lt;p&gt;Asimismo, compartieron con la audiencia de Bethel Radio algunas palabras en guaran&amp;iacute;.&lt;/p&gt;\r\n', 'Bethel, Convención, 2014, Radio, paraguay', '2014-05-25 15:36:36', '1401032196.7', '3002', 'audios/51879545.mp3', 'imagenes/32863018.jpg', 'us_001', 'Publicado'),
(88, 'Conocí a Dios gracias a un aire libre', 'conoci-a-dios-gracias-a-un-aire-libre', '&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n\r\n&lt;p&gt;Hoy conversamos en Bethel con la hermana ecuatoriana radicada en Italia, Roc&amp;iacute;o Catucuamba, para conocer su testimonio y el avance de la Obra en el pa&amp;iacute;s europeo.&lt;/p&gt;\r\n\r\n&lt;p&gt;Tambi&amp;eacute;n cont&amp;oacute; que conoci&amp;oacute; a Dios gracias al trabajo de evangelizaci&amp;oacute;n que nuestra organizaci&amp;oacute;n realiza en v&amp;iacute;as y plazas p&amp;uacute;blicas.&lt;/p&gt;\r\n\r\n&lt;p&gt;Por &amp;uacute;ltimo, inform&amp;oacute; a nuestra audiencia acerca de la labor que se realiza en Italia con j&amp;oacute;venes.&lt;/p&gt;\r\n\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n', 'Bethel, Convención, 2014, Radio, italia, Catucuamba', '2014-05-25 16:35:10', '1401035710.02', '3002', 'audios/70924369.mp3', 'imagenes/89190474.jpg', 'us_001', 'Publicado'),
(89, 'El cristianismo es imprescindible en la sociedad moderna', 'el-cristianismo-es-imprescindible-en-la-sociedad-moderna', '&lt;p&gt;El reverendo Humberto Henao, oficial internacional del Movimiento Misionero Mundial, desarroll&amp;oacute; este domingo la Palabra de Dios bajo el tema: &amp;ldquo;La influencia social del cristianismo&amp;rdquo; . (San Mateo 5: 14).&lt;/p&gt;\r\n\r\n&lt;p&gt;El mensaje destac&amp;oacute; la importancia del Evangelio de Jesucristo en un mundo carente de valores. Tambi&amp;eacute;n se hizo un llamado a guardar la santidad y preservar la doctrina b&amp;iacute;blica.&lt;/p&gt;\r\n\r\n&lt;p&gt;Tuvimos un impresionante aforo en el Estadio San Marcos en el inicio de la &amp;uacute;ltima fecha de la Convenci&amp;oacute;n Nacional.&lt;/p&gt;\r\n', 'Bethel, Convención, 2014, Radio, humberto enao', '2014-05-25 20:08:36', '1401048516.66', '3002', 'audios/34581549.mp3', 'imagenes/44268128.jpg', 'us_001', 'Publicado'),
(90, 'Dios habla muchas veces y de diferentes maneras', 'dios-habla-muchas-veces-y-de-diferentes-maneras', '&lt;p&gt;El oficial internacional del Movimiento Misionero Mundial, reverendo Humberto Henao, dio declaraciones exclusivas para Bethel Radio.&lt;/p&gt;\r\n\r\n&lt;p&gt;El siervo de Dios hizo un breve an&amp;aacute;lisis sobre su permanencia en la Convenci&amp;oacute;n Nacional 2014 que llega a su fin este domingo.&lt;/p&gt;\r\n\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n', 'Bethel, Convención, 2014, Radio, entrevista, Henao', '2014-05-25 21:22:58', '1401052978.89', '3002', 'audios/70088781.mp3', 'imagenes/63725968.jpg', 'us_001', 'Publicado'),
(91, 'La alabanza a Dios cambia las cosas', 'la-alabanza-a-dios-cambia-las-cosas', '&lt;p&gt;La hermana Yolanda Moreno alab&amp;oacute; a Dios en la cabina movil de Bethel Radio instalada en el Estadio San Marcos.&lt;/p&gt;\r\n\r\n&lt;p&gt;De esta manera, culminamos con las emisiones del programa &amp;ldquo;Nuestras Voces en Vivo&amp;rdquo; que cont&amp;oacute; con la participaci&amp;oacute;n de hermanos de todo el continente.&lt;/p&gt;\r\n\r\n&lt;p&gt;Recuerde seguirnos en Twitter como @bethelradio&lt;/p&gt;\r\n', 'Bethel, Convención, 2014, Radio, yolanda moreno', '2014-05-25 23:43:59', '1401061439.75', '3002', 'audios/49112314.mp3', 'imagenes/45985293.jpg', 'us_001', 'Publicado'),
(101, '¡Perú para Cristo!', 'peru-para-cristo', '&lt;p&gt;Este domingo por la noche vivimos el &amp;uacute;ltimo servicio de la Convenci&amp;oacute;n Nacional del Movimiento Misionero Mundial con un estadio lleno remecido por el poder de Dios.&lt;/p&gt;\r\n\r\n&lt;p&gt;El Rev. Jos&amp;eacute; Arturo Soto, vicepresidente internacional del Movimiento Misionero Mundial, desarroll&amp;oacute; la Palabra de Dios bajo el tema: &amp;ldquo;El gran conflicto de la historia&amp;rdquo; . (Apocal&amp;iacute;psis, 5: 1-9)&lt;/p&gt;\r\n\r\n&lt;p&gt;El siervo de Dios record&amp;oacute; que los cristianos tenemos la herencia invaluable de la salvaci&amp;oacute;n. Tambi&amp;eacute;n refiri&amp;oacute; que Jesucristo venci&amp;oacute; &amp;nbsp;a la muerte en la cruz del Calvario, destruyendo cualquier artima&amp;ntilde;a del enemigo.&lt;/p&gt;\r\n\r\n&lt;p&gt;Durante el llamado, el Rev. Rodolfo Gonz&amp;aacute;lez Cruz, elev&amp;oacute; una oraci&amp;oacute;n masiva por la liberaci&amp;oacute;n de las m&amp;aacute;s de 200 ni&amp;ntilde;as que permanecen secuestradas en Nigeria.&lt;/p&gt;\r\n', 'Bethel, Convención, 2014, Radio, José Soto', '2014-05-26 03:21:53', '1401074513.04', '3002', 'audios/57877401.mp3', 'imagenes/74639027.jpg', 'us_001', 'Publicado'),
(104, 'El valor de un abrazo', 'el-valor-de-un-abrazo-', '&lt;p&gt;Un abrazo c&amp;aacute;lido o un buen estrech&amp;oacute;n de manos pueden significar mucho. En la sesi&amp;oacute;n 30 de Belleza Espiritual conocimos la importancia de tener manos cari&amp;ntilde;osas.&lt;/p&gt;\r\n\r\n&lt;p&gt;El mejor ejemplo de trato c&amp;aacute;lido con el pr&amp;oacute;jimo fue nuestro Se&amp;ntilde;or Jesucristo, porque no le neg&amp;oacute; cari&amp;ntilde;o a nadie, ni discrimin&amp;oacute; por condici&amp;oacute;n social o enfermedad, como muchos lo hac&amp;iacute;an por aquellos tiempos.&lt;/p&gt;\r\n\r\n&lt;p&gt;Es bueno recordar que una palabra cari&amp;ntilde;osa o un abrazo es fundamental para que un ni&amp;ntilde;o crezca con seguridad emocional. Asimismo, los adultos mayores y los enfermos son quienes m&amp;aacute;s amor, comprensi&amp;oacute;n y contacto f&amp;iacute;sico emotivo requieren.&lt;/p&gt;\r\n\r\n&lt;p&gt;Escucha la sesi&amp;oacute;n &amp;nbsp;&lt;a href=&quot;http://grooveshark.com/s/Sesi+n+30+Manos+Cari+osas/6TL3OK?src=5&quot; target=&quot;_blank&quot;&gt;aqu&amp;iacute;&lt;/a&gt;.&lt;/p&gt;\r\n\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n', 'Bethel, Belleza Espiritual, Sesión 30', '2014-05-27 16:56:14', '1401209774.63', '1001', '', 'imagenes/23770841.jpg', 'us_001', 'Publicado'),
(107, 'Dios quiere que seas creativo', 'dios-quiere-que-seas-creativo', '&lt;p&gt;La creatividad debe ser parte de la vida de todo cristiano. Por ese motivo, conocimos c&amp;oacute;mo podemos motivar las actividades creativas en nuestro diario vivir.&lt;/p&gt;\r\n\r\n&lt;p&gt;Durante la Sesi&amp;oacute;n 31 de Belleza Espiritual, destacamos que nuestro Se&amp;ntilde;or Jesucristo, desde temprana edad, realiz&amp;oacute; trabajos creativos durante su estancia en la tierra, aplicando sus conocimientos en carpinter&amp;iacute;a, por ejemplo.&lt;/p&gt;\r\n\r\n&lt;p&gt;Adem&amp;aacute;s, dimos a conocer que Dios nos ha dado una serie de dones que debemos explotar en beneficio de su Obra. &amp;ldquo;Muchas veces nuestras virtudes son opacadas porque estamos distra&amp;iacute;dos en cosas superficiales, que nos deshumanizan&amp;rdquo;, fue una de las frases resaltantes del programa.&lt;/p&gt;\r\n\r\n&lt;p&gt;Escucha el programa &lt;a href=&quot;http://grooveshark.com/s/Sesi+n+31+Manos+Creativas/6TMA2h?src=5&quot;&gt;aqu&amp;iacute;&lt;/a&gt;.&lt;/p&gt;\r\n', 'Bethel, Belleza Espiritual, Sesión 31', '2014-05-27 22:44:03', '1401230643', '1001', '', 'imagenes/16405102.jpg', 'us_001', 'Publicado'),
(108, '¿Ya conoces los Pantanos de Villa?', 'ya-conoces-los-pantanos-de-villa', '&lt;p&gt;En Cultura Ambiental visitamos los Pantanos de Villa para conocer parte de la diversidad de flora y fauna de este bello lugar ubicado en Lima.&lt;/p&gt;\r\n\r\n&lt;p&gt;Para es fin, conversamos con el director t&amp;eacute;cnico del humedal, Daniel Valle Basto, quien explic&amp;oacute; c&amp;oacute;mo se trabaja para preservar la biodiversidad del refugio de vida silvestre.&lt;/p&gt;\r\n', 'Bethel, Belleza Espiritual, Pantano de Villa', '2014-05-27 23:18:13', '1401232693.59', '6004', 'audios/49654043.mp3', 'imagenes/35020168.jpg', 'us_001', 'Publicado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `frecuencias`
--

CREATE TABLE IF NOT EXISTS `frecuencias` (
  `idDepartamento` int(11) NOT NULL,
  `departamento` varchar(20) character set utf8 collate utf8_spanish_ci NOT NULL,
  `provincia` varchar(50) character set utf8 collate utf8_spanish_ci NOT NULL,
  `lugar` varchar(50) character set utf8 collate utf8_spanish_ci NOT NULL,
  `banda` varchar(7) NOT NULL,
  `frecuencias` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `frecuencias`
--

INSERT INTO `frecuencias` (`idDepartamento`, `departamento`, `provincia`, `lugar`, `banda`, `frecuencias`) VALUES
(1, 'Amazonas', 'Chachapoyas', 'Chachapoyas', 'FM', 94.3),
(1, 'Amazonas', 'Luya', 'Lamud', 'FM', 102.7),
(1, 'Amazonas', 'Bagua', 'Bagua', 'FM', 93.1),
(1, 'Amazonas', 'Utcubamba', 'Bagua Grande', 'FM', 92.5),
(2, 'Ancash', 'Huaraz', 'Huaraz', 'FM', 98.1),
(2, 'Ancash', 'Huarmey', 'Huarmey', 'FM', 96.1),
(2, 'Ancash', 'Recuay', 'Ticapampa', 'FM', 106.9),
(2, 'Ancash', 'Antonio de Raymondi', 'Llamellin', 'FM', 98.9),
(2, 'Ancash', 'Huaylas', 'Caraz', 'FM', 106.1),
(2, 'Ancash', 'Santa', 'Santa', 'FM', 95.1),
(2, 'Ancash', 'Huari', 'Huari', 'FM', 89.5),
(3, 'Apurimac', 'Abancay', 'Abancay', 'FM', 106.7),
(3, 'Apurimac', 'Chincheros', 'Ocobamba ', 'FM', 97.3),
(3, 'Apurimac', 'Humalíes', 'Andahuaylas', 'FM', 91.7),
(4, 'Arequipa', 'Caylloma', 'Pedregal', 'FM', 106.5),
(4, 'Arequipa', 'Arequipa', 'Arequipa', 'OM (AM)', 1050),
(4, 'Arequipa', 'Arequipa', 'Arequipa', 'OC', 5950),
(4, 'Arequipa', 'Castilla', 'Orcopampa', 'FM', 103.9),
(4, 'Arequipa', 'Camaná', 'Camaná', 'FM', 91.7),
(4, 'Arequipa', 'Islay', 'Mollendo', 'FM', 93.1),
(4, 'Arequipa', 'Arequipa', 'La Joya', 'FM', 98.7),
(4, 'Arequipa', 'Condesuyos', 'Chuquibamba', 'FM', 98.9),
(5, 'Ayacucho', 'Huanta', 'Huanta', 'FM', 101.7),
(5, 'Ayacucho', 'Huanta', 'Huanta', 'FM', 97.3),
(5, 'Ayacucho', 'Huamanga', 'Ayacucho', 'FM', 93.9),
(5, 'Ayacucho', 'La Mar', 'Ayna', 'FM', 103.9),
(6, 'Cajamarca', 'Jaén', 'Jaen', 'FM', 100.5),
(6, 'Cajamarca', 'Chota', 'Chota', 'FM', 101.7),
(6, 'Cajamarca', 'Cutervo', 'Cutervo', 'FM', 100.5),
(6, 'Cajamarca', 'Cajabamba', 'Cajabamba', 'FM', 106.5),
(7, 'Cusco', 'Cusco', 'Cusco', 'OM (AM)', 1170),
(7, 'Cusco', 'Chumbivilcas', 'Santo Tomas', 'FM', 97.7),
(7, 'Cusco', 'Canchis', 'Sicuani', 'FM', 102.7),
(7, 'Cusco', 'Canchis', 'Sicuani', 'FM', 104.9),
(8, 'Huancavelica', 'Huancavelica', 'Huancavelica', 'FM', 101.1),
(8, 'Huancavelica', 'Tayacaja', 'Pampas', 'FM', 101.9),
(8, 'Huancavelica', 'Tayacaja', 'Pampas', 'FM', 96.3),
(8, 'Huancavelica', 'Angaraes', 'Lircay', 'FM', 106.3),
(9, 'Huanuco', 'Leoncio Prado', 'Aucayacu', 'FM', 97.7),
(9, 'Huánuco', 'Pachitea', 'Umari', 'FM', 97.3),
(9, 'Huánuco', 'Humalíes', 'Chavin de Pariarca', 'FM', 94.5),
(9, 'Huánuco', 'Ambo', 'Ambo', 'FM', 102.1),
(9, 'Huánuco', 'Leoncio Prado', 'Tingo María', 'FM', 100.3),
(9, 'Huánuco', 'Huánuco', 'Huanuco', 'FM', 103.3),
(10, 'Ica', 'Chincha', 'Chincha', 'FM', 95.1),
(10, 'Ica', 'Nazca', 'Nazca', 'FM', 95.9),
(10, 'ica', 'NAzca', 'Marcona ', 'FM', 91.5),
(10, 'Ica', 'Palpa', 'Palpa', 'FM', 95.5),
(10, 'Ica', 'Ica', 'Ica', 'FM', 88.9),
(11, 'Junín', 'Satipo', ' Pangoa', 'FM', 90.9),
(11, 'Junín', 'Yauli', 'La Oroya', 'FM', 90.9),
(11, 'Junín', 'Chanchamayo', 'Perene ', 'FM', 100.1),
(11, 'Junín', 'Jauja', 'Jauja', 'FM', 93.9),
(11, 'Junín', 'Satipo', 'Mazamari', 'FM', 104.5),
(11, 'Junín', 'Chanchamayo', 'Pichanaki', 'FM', 97.9),
(11, 'Junín', 'Chanchamayo', 'La Merced', 'FM', 92.1),
(11, 'Junín', 'Satipo', 'Satipo', 'FM', 101.1),
(11, 'Junín', 'Tarma', 'Tarma', 'FM', 98.5),
(11, 'Junín', 'Huancayo', 'Huancayo', 'OM (AM)', 1050),
(12, 'La Libertad', 'Ascope', 'Casa Grande', 'FM', 90.7),
(12, 'La Libertad', 'Pacasmayo', 'Pacasmayo', 'FM', 99.1),
(12, 'La Libertad', 'Sánchez Carrión', 'Huamachuco', 'FM', 92.5),
(12, 'La Libertad', 'Virú', 'Virú', 'FM', 99.5),
(13, 'Lambayeque', 'Lambayeque', 'Olmos', 'FM', 96.7),
(13, 'Lambayeque', 'Lambayeque', 'Chiclayo ', 'OM (AM)', 1280),
(13, 'Lambayeque', 'Chiclayo', 'Chongoyape', 'FM', 92.3),
(13, 'Lambayeque', 'Lambayeque', 'Morrope', 'FM', 93.7),
(13, 'Lambayeque', 'Chiclayo', 'Zaña', 'FM', 107.3),
(14, 'Lima', 'Cañete', 'Mala', 'FM', 97.7),
(14, 'Lima', 'Huaura', 'Huacho', 'FM', 89.1),
(14, 'Lima', 'Cañete', 'Cañete', 'FM', 97.1),
(14, 'Lima', 'Huaura', 'Huacho', 'OM (AM)', 1410),
(14, 'Lima', 'Barranca', 'Barranca', 'FM', 97.5),
(14, 'Lima', 'Lima', 'Lima', 'OM (AM)', 1570),
(15, 'Loreto', 'Mariscal Ramón Castilla', 'Caballococha', 'FM', 97.1),
(15, 'Loreto', 'Mariscal Ramón Castilla', 'Yavarí', 'FM', 93.1),
(15, 'Loreto', 'Alto Amazonas', 'Yurimaguas', 'FM', 96.1),
(16, 'Madre de Dios', 'Tahuamanu', 'Iberia', 'FM', 104.1),
(16, 'Madre de Dios', 'Tambopata', 'Tambopata', 'FM', 91.7),
(16, 'Madre de Dios', 'Tahuamanu', 'Iñapari', 'FM', 89.7),
(17, 'Moquegua', 'Mariscal Nieto', 'Moquegua', 'FM', 107.7),
(17, 'Moquegua', 'Ilo', 'Ilo', 'FM', 100.5),
(18, 'Moyobamba', 'Moyobamba', 'Moyobamba', 'FM', 94.5),
(19, 'Pasco', 'Oxapampa', 'Pto. Bermudez', 'FM', 93.7),
(19, 'Pasco', 'Oxapampa', 'Palcazu', 'FM', 97.7),
(19, 'Pasco', 'Oxapampa', 'Villa Ciudad C.', 'FM', 100.7),
(19, 'Pasco', 'Pasco', 'Huariaca', 'FM', 91.9),
(19, 'Pasco', 'Pasco', 'Pasco', 'FM', 88.9),
(19, 'Pasco', 'Oxapampa', 'Oxapampa', 'FM', 106.5),
(20, 'Piura', 'Sullana', 'Sullana', 'FM', 100.7),
(20, 'Piura', 'Morropón', 'Chulucanas', 'FM', 95.3),
(20, 'Piura', 'Piura', 'La Arena ', 'FM', 106.9),
(20, 'Piura', 'Sechura', 'Sechura', 'FM', 91.7),
(20, 'Piura', 'Paita', 'Paita', 'FM', 93.3),
(20, 'Piura', 'Talara', 'Los Organos', 'FM', 101.3),
(20, 'Piura', 'Talara', 'Talara', 'FM', 103.1),
(20, 'Piura', 'Piura', 'Piura', 'OM (AM)', 1310),
(21, 'Puno', 'El Collao', 'Ilave', 'FM', 97.3),
(21, 'Puno', 'Azángaro', 'Azángaro', 'FM', 97.3),
(21, 'Puno', 'Yunguyo', 'Yunguyo', 'FM', 95.5),
(21, 'Puno', 'San Román', 'Juliaca', 'FM', 101.3),
(21, 'Puno', 'Puno', 'Puno', 'FM', 92.1),
(21, 'Puno', 'Chucuito', 'Juli', 'FM', 92.3),
(21, 'Puno', 'Melgar', 'Ayaviri', 'FM', 106.3),
(22, 'San Martín', 'Tocache', 'Tocache ', 'FM', 95.7),
(22, 'San Martín', 'Rioja', 'Nva. Cajamarca ', 'FM', 90.7),
(22, 'San Martín', 'Mariscal Cáceres', 'Juanjui', 'FM', 94.5),
(23, 'Tumbes', 'Tumbes', 'Tumbes', 'FM', 102.1),
(24, 'Ucayali', 'Padre Abad', ' Aguaytia', 'FM', 102.1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagenes`
--

CREATE TABLE IF NOT EXISTS `imagenes` (
  `id_imagen` int(11) NOT NULL auto_increment,
  `nombre_imagen` char(100) default NULL,
  `nombre_archivo` varchar(255) default NULL,
  `tamano` varchar(255) default NULL,
  `url` char(24) default NULL,
  `fecha` timestamp NULL default NULL,
  `id_usuario` char(18) NOT NULL,
  PRIMARY KEY  (`id_imagen`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Volcado de datos para la tabla `imagenes`
--

INSERT INTO `imagenes` (`id_imagen`, `nombre_imagen`, `nombre_archivo`, `tamano`, `url`, `fecha`, `id_usuario`) VALUES
(17, 'promesa.jpg', '19547119.jpg', '0.085938453674316', '../imagenes/19547119.jpg', '2014-05-15 19:29:29', 'us_001'),
(18, 'INVITACION PERSONAL.jpg', '79735717.jpg', '0.39496994018555', '../imagenes/79735717.jpg', '2014-05-15 19:38:21', 'us_001'),
(19, '4g lte.png', '43887329.png', '0.035344123840332', '../imagenes/43887329.png', '2014-05-15 19:39:33', 'us_001'),
(20, 'promesa.jpg', '89002685.jpg', '0.085938453674316', '../imagenes/89002685.jpg', '2014-05-15 19:40:44', 'us_001'),
(21, '4g lte.png', '88046875.png', '0.035344123840332', '../imagenes/88046875.png', '2014-05-15 19:44:26', 'us_001');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `operacion`
--

CREATE TABLE IF NOT EXISTS `operacion` (
  `id_operacion` char(18) NOT NULL,
  `descripcion` char(18) default NULL,
  `url` char(100) default NULL,
  PRIMARY KEY  (`id_operacion`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `operacion`
--

INSERT INTO `operacion` (`id_operacion`, `descripcion`, `url`) VALUES
('op_001', 'Entradas', '../ModuloAdministrador/IndexEntradas.php'),
('op_002', 'Slider', '../ModuloAdministrador/IndexSlider.php'),
('op_003', 'Imágenes', '../ModuloAdministrador/IndexImagenes.php'),
('op_004', 'Audios', '../ModuloAdministrador/IndexAudios.php'),
('op_005', 'Secciones', '../ModuloAdministrador/Secciones.php'),
('op_006', 'Categorias', '../ModuloAdministrador/Categorias.php'),
('op_007', 'Usuarios', '../ModuloAdministrador/Usuarios.php');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `peticionoracion`
--

CREATE TABLE IF NOT EXISTS `peticionoracion` (
  `id` int(11) NOT NULL auto_increment,
  `nombre` varchar(255) default NULL,
  `apellido` varchar(255) default NULL,
  `procedencia` varchar(255) default NULL,
  `email` varchar(50) default NULL,
  `telefono` varchar(255) default NULL,
  `fecha` timestamp NULL default CURRENT_TIMESTAMP,
  `estado` varchar(255) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `seccion`
--

CREATE TABLE IF NOT EXISTS `seccion` (
  `id_seccion` char(18) NOT NULL,
  `descripcion` char(18) default NULL,
  PRIMARY KEY  (`id_seccion`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `seccion`
--

INSERT INTO `seccion` (`id_seccion`, `descripcion`) VALUES
('10', 'Cristianos'),
('20', 'Prédicas'),
('30', 'Noticiosos'),
('40', 'Infantiles'),
('50', 'Especiales'),
('60', 'Educativos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `suscritos`
--

CREATE TABLE IF NOT EXISTS `suscritos` (
  `id` int(11) NOT NULL auto_increment,
  `email` varchar(50) default NULL,
  `fecha` timestamp NULL default CURRENT_TIMESTAMP,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_usuario`
--

CREATE TABLE IF NOT EXISTS `tipo_usuario` (
  `id_tipousuario` char(18) NOT NULL,
  `descripcion` char(18) default NULL,
  PRIMARY KEY  (`id_tipousuario`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipo_usuario`
--

INSERT INTO `tipo_usuario` (`id_tipousuario`, `descripcion`) VALUES
('tip_us_001', 'administrador'),
('tip_us_002', 'imágenes'),
('tip_us_003', 'audios'),
('tip_us_004', 'entradas'),
('tip_us_005', 'usuarios'),
('tip_us_006', 'secciones');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `id_usuario` char(18) NOT NULL,
  `nombre` char(18) default NULL,
  `apellido` char(18) default NULL,
  `fnac` char(18) default NULL,
  `telefono` char(18) default NULL,
  `email` char(18) default NULL,
  `dni` char(18) default NULL,
  `nickname` char(18) default NULL,
  `clave` varchar(100) default NULL,
  `estado` char(18) default NULL,
  `id_tipousuario` char(18) NOT NULL,
  PRIMARY KEY  (`id_usuario`),
  KEY `FK_usuario_tipo_usuario_id_tipousuario` (`id_tipousuario`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nombre`, `apellido`, `fnac`, `telefono`, `email`, `dni`, `nickname`, `clave`, `estado`, `id_tipousuario`) VALUES
('us_001', 'Manuel', 'Labarthe', NULL, NULL, NULL, NULL, 'administrador1', 'czoxMToiYmV0aGVscmFkaW8iOw==', '1', 'tip_us_001'),
('us_002', 'Fany', 'Lopez', NULL, NULL, NULL, NULL, 'fany', '123', '0', 'tip_us_004'),
('us_003', 'Cristian', 'Cueto', NULL, NULL, NULL, NULL, 'cris', '123', '0', 'tip_us_001'),
('us_004', 'Luis', 'Burgos', NULL, NULL, NULL, NULL, 'sasystpai', 'czoxODoiYWxiZXJ0b2JldGhlbHJhZGlvIjs=', '1', 'tip_us_001');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario_operacion`
--

CREATE TABLE IF NOT EXISTS `usuario_operacion` (
  `id_UsuarioOperacion` char(18) NOT NULL,
  `id_operacion` char(18) NOT NULL,
  `id_usuario` char(18) NOT NULL,
  `estado` char(18) NOT NULL,
  PRIMARY KEY  (`id_UsuarioOperacion`),
  KEY `FK_usuario_operacion_operacion_id_operacion` (`id_operacion`),
  KEY `FK_usuario_operacion_usuario_id_usuario` (`id_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario_operacion`
--

INSERT INTO `usuario_operacion` (`id_UsuarioOperacion`, `id_operacion`, `id_usuario`, `estado`) VALUES
('us_001_op_001', 'op_001', 'us_001', '1'),
('us_004_op_001', 'op_001', 'us_004', '1');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `auditoria`
--
ALTER TABLE `auditoria`
  ADD CONSTRAINT `FK_auditoria_usuario_operacion_id_UsuarioOperacion` FOREIGN KEY (`id_UsuarioOperacion`) REFERENCES `usuario_operacion` (`id_UsuarioOperacion`);

--
-- Filtros para la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD CONSTRAINT `FK_categoria_seccion` FOREIGN KEY (`id_seccion`) REFERENCES `seccion` (`id_seccion`);

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `FK_usuario_tipo_usuario_id_tipousuario` FOREIGN KEY (`id_tipousuario`) REFERENCES `tipo_usuario` (`id_tipousuario`);

--
-- Filtros para la tabla `usuario_operacion`
--
ALTER TABLE `usuario_operacion`
  ADD CONSTRAINT `FK_usuario_operacion_operacion_id_operacion` FOREIGN KEY (`id_operacion`) REFERENCES `operacion` (`id_operacion`),
  ADD CONSTRAINT `FK_usuario_operacion_usuario_id_usuario` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
         