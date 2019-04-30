<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa user o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações
// com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'adv');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'adv');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '230893cfs');

/** Nome do host do MySQL */
define('DB_HOST', 'mysql380.umbler.com');

/** Charset do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '&^g65w:wHX,Gc~N:QA >=M!$Z^q+WtB>is1Ot_|_fz+;l&hA[U~HOv;%kurSXms_');
define('SECURE_AUTH_KEY',  '$*ft@U~3w|kj}.);5bUEq)}u;b1z)!$,TmK$H|sdCDP?DkOVOS>xaw ]q|*U?oW5');
define('LOGGED_IN_KEY',    '|-JrM+$vb^Wg!!L)|u2P4qx),oEFIi;6bP>O2}u4W_`m T8*n{: Ti~t/4jmky_i');
define('NONCE_KEY',        '2 !=;+pGiHLCJjKz0{vt?,Xb=a~vY^s1CMF!B%TXmp?6+*Q#Zo c>V: BTq1P^w5');
define('AUTH_SALT',        'io[*af1JJMf4`n]yUg?gtlytqsJI`!>-nMKdT4J^Ol|k#Hzi)Fl=;G.IwKp+R:nV');
define('SECURE_AUTH_SALT', '~Z*7Hx;{4~}Y);h/4czB*.juQHE78U_R^cee$6;U)+e%k7bOdHSvegbgElT Kr)z');
define('LOGGED_IN_SALT',   'sgK|JXcJ8=)a`~zo&N ~f&Y-J8*F&[XzFW*7w7V)(,k1 4z46P xGHMt3?m!Y&xH');
define('NONCE_SALT',       'Y%(;3*6D(7/F4BOTf,KuS@)rkAq^YeoWG-Zfh(+Lci(j,aSEA/}Qa=_6C?Qz*jLB');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * para cada um um único prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
