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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'lh=S5p(RVABBG[piKxJH~3[P0U[WJ {OCMtv)Fh(6R$<<T2S&Vw#2EClp-%S*bE ' );
define( 'SECURE_AUTH_KEY',  'hE>zgn#9s,0JbglW^*~QrGzp@w!8aR?89pc4D |}JbReCG44vO-^[c%Gi (6o]S+' );
define( 'LOGGED_IN_KEY',    'MAbxa%M/+KA0tZ%[U2;9bLh!Q8yOd+ x.?0MF:ukx[<_Rpd;-qtZnbH)@0#$FRxy' );
define( 'NONCE_KEY',        'TYLyi=FjL,YiepN76Q@:F<`mIsU|9blYk2C!Q^pglUlJ%Y[xibv$&MPPMDoynt3{' );
define( 'AUTH_SALT',        ';liwzzj~k&eLEVT8Wj#Huy[rWk&}[krkjixs Kf?Q>U2!lxQnZY45-J}FX}h%:>$' );
define( 'SECURE_AUTH_SALT', '*{O&}#Kp+YN64LuKc|eL{];*<5R=I]lRkBUS^hQl&p<4ZD89$<l~q^]v?18jPfFg' );
define( 'LOGGED_IN_SALT',   'T(WrBH?1$gEj#tAM/9 {.SgJlvimorC81xDWAx_dWZ-Mjd40nudn9yX[II$!hnBK' );
define( 'NONCE_SALT',       'RvY}/@<F~pe~%f~.h2@pYTuY#1mDV3_Jz;XP(5o*]!bio5Ox^bx<R.X:3_?Es/Hf' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
