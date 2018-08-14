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
define('DB_NAME', 'setimapomba');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');

/** Nome do host do MySQL */
define('DB_HOST', 'localhost');

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
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'aomy,sk$?W-,qK)7{=QKtk0VrHJr:M-@KLh3b6?NXMK;zX$HD|P&]KJFY]dl@N96');
define('SECURE_AUTH_KEY',  '7M]m*{66_)mm1;dkmw,qUc 4@#MYjnT-eY]JR0qg/F0=W@aaL1diaQ[s)=#z=yJn');
define('LOGGED_IN_KEY',    '1Qy.EP+Z^cAtoa bD/qXvC?%&x|E)S!09$sk=,Jy6*(1<d^_Nnt?DNj|k98E&j3Y');
define('NONCE_KEY',        'd#-sS_|k r3=|^HprmHh4ll],aGH$Oz|G}hCw YNFh=LLyPbaUCPrlDz,v!0gfJI');
define('AUTH_SALT',        '{L=RF3/H+&gr7L+5UU+WJpEl3*de]8/h5W%Wl8WjjMPg`SBNon@Wp#`<y!7GenQ?');
define('SECURE_AUTH_SALT', 'hsA [Ex_RIp#e+n@xs~231nRG!o``~bR<NaRSSa@$CcD+{tL;z1J(Z6!1#8t-T>1');
define('LOGGED_IN_SALT',   'Uh@(aW$%<<cm3zLG8OWM>a+y<|%.^0Is7YIc[|D*dY%ZJ}|un1J^9G>5]6pO6q=0');
define('NONCE_SALT',       'HW<c<;N65h#q}_ZUg9mifIh(?72^67~>p|rRnl;_FWlRaC>E!r@#4E%7ZSr{!s 1');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_sp';

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
