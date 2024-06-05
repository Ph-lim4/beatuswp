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
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'beatuswp' );

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
define( 'AUTH_KEY',         'y.[yi2 CO3m[,b[]hY~vhaa.D?se1ab/2:aE,3#=!*ICub_Q/.sAWI,ajR0vO9,N' );
define( 'SECURE_AUTH_KEY',  'n#:~^c^O[4,JOdx4CTc$}UbBaminsxd@b<c~4dV+`@|SDO/5p=LNDMMQfTT*4X(s' );
define( 'LOGGED_IN_KEY',    'pE:4>:| [Rs47y0C+%RiMrT)TU@m6h3?tftPq_B$6I!l,;!s0~2~rFg<{;+9Q)ke' );
define( 'NONCE_KEY',        '3Oh*To7?%S09E(qv^@9&q*!C#QZD5St/w|AdgM_}OI {NESEt_<-H&G~r5*V )J:' );
define( 'AUTH_SALT',        'aeM7o^?y^-,~d3c4ax`-/So@)SA(/Oz$P@Sj, KC>ayAaNXPRx2/}R<!(9z|NO;D' );
define( 'SECURE_AUTH_SALT', 'YLs0_9VY:~Bb[{tDgZM(j#f7DX!(?x^RZlei}lpJSBcio;mW*?i[^`!KD2pOpfPb' );
define( 'LOGGED_IN_SALT',   'FNt9%mSBh%rf<hw E04:(GVm}[zg/Y[qb@[8O<j{T3:Phai#Zs$}|%]]L@Ju@- [' );
define( 'NONCE_SALT',       'f}/I%^v!JHlZ@<$813ps%wzbqmuXndm|m=.Qq$*3g79@Sl:<./w5Pzh<C3l&mjX-' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'cev';

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
