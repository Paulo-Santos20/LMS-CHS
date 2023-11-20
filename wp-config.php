<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do banco de dados
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'ceijoaopauloii_lms' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ':*9Nj>?`./TL{-SB?78 ~^/MBPbgC9=`le[/B<o3f*J1l/tXm2HwzxjI%? F{-/W' );
define( 'SECURE_AUTH_KEY',  'qV~k)a%6G+1VuZd1d%4NJ8 Q7O|/ed(7~JW2K6m[F;Q}AGn]QgElaAm?{vs&5CcR' );
define( 'LOGGED_IN_KEY',    'Ebk%+=e,ij(D`NVy1SNcr,[%u62@Vg0R.`XT)GuT`WPtuUgH91 j[ZP34%3Ubbc?' );
define( 'NONCE_KEY',        '9#<uNh}.1@>0R!w*[UpBLv_N@)Hp?a;g>Ueb@S&yxokBz$uTCdkF]tdU7o`KS3sw' );
define( 'AUTH_SALT',        'qwKF?FA?ub%W</>a$frWm*l:*561[~Y[ /J_h?$cKH7Bbeke3gL7PhC^FyX6ChYb' );
define( 'SECURE_AUTH_SALT', 'tY61rkp&tdm.uz8Pa40([TaZ-mRMngtmWJc-HjgFt3oen],gxd)OdL{cEj5!BY[#' );
define( 'LOGGED_IN_SALT',   'H:[^Yk4=`r+Vv;,P?~wRB^}-84f$@1_Fy-a*0{-q$/r- at`bF`]X*&/{BM=n~pt' );
define( 'NONCE_SALT',       'hLMr`4DrUCecfJQf;i>{X:1X=Sd|dKf8v=ZJd]wn,^bdGEPnG^(dA%;%2ojz<P_8' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
