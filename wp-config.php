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
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'wordpress' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'wordpress' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', 'wordpress123' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

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
define( 'AUTH_KEY',         'dFa+9&+f/PUDHnRy9=XrL9x.~ZKT,*s<)4B<iBS3I3$)m4^lWK)u#CY{(P&Y#yuN' );
define( 'SECURE_AUTH_KEY',  'Y]!qFh!(g$^Ql`v59|O:_y6[n]wTv(KZ1VBuZ8]n#&_4o:Ss[uHU4;VpdeH&E<<K' );
define( 'LOGGED_IN_KEY',    'GU24m8LfnQ=g>peY1L.@*xdvnG(*7WGOYX+B_TClp7.h$$t0(zhR;<7RNC7?,z#G' );
define( 'NONCE_KEY',        '`gb;l(i4zXT_Y:,zs{$cPQRh_ZS!2*Uzyb85Qg *_7DFGz(sBTy3Bn*7$(y 7o&S' );
define( 'AUTH_SALT',        '{Ug5FFNz#~EdWpp=#*ku-atA!%`2Ii4|eIh#sMT?Y9uob$?t{Vx1Q8%2@k4h@ FR' );
define( 'SECURE_AUTH_SALT', 'lQ(~`;w#cx&l}yCF*oFqyA-yrA-2.}w:fAz7LMu8^pn4SEn15[$IABYd y{7L#L(' );
define( 'LOGGED_IN_SALT',   '3jc0=$3t];=Q]8gg%a;rE>V[2U+e)B@Ru|C*dPzY/^sP0c9A6W<Sg_:~8#6`Q$}_' );
define( 'NONCE_SALT',       '~k6cEk@@!+xt}_^ewHq1i0 m/%W{93&6oN-nl-Jbl(?funIQXZ;0v`Q:[wv4k<h<' );

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
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
