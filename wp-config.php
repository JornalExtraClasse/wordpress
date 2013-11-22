<?php
/** 
 * As configurações básicas do WordPress.
 *
 * Esse arquivo contém as seguintes configurações: configurações de MySQL, Prefixo de Tabelas,
 * Chaves secretas, Idioma do WordPress, e ABSPATH. Você pode encontrar mais informações
 * visitando {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. Você pode obter as configurações de MySQL de seu servidor de hospedagem.
 *
 * Esse arquivo é usado pelo script ed criação wp-config.php durante a
 * instalação. Você não precisa usar o site, você pode apenas salvar esse arquivo
 * como "wp-config.php" e preencher os valores.
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar essas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'extraclasseonline');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'admin');

/** nome do host do MySQL */
define('DB_HOST', '192.168.2.1:3306');

/** Conjunto de caracteres do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8');

/** O tipo de collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer cookies existentes. Isto irá forçar todos os usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'a};fr!Yr>lo)0Om0,fcThwA{|mXQ(!9 d[Oz3p8SQ#pbd?UOeq&<wwG1oIs.sPTT');
define('SECURE_AUTH_KEY',  'B#vysV58bAC1~ilO8Y5d2Pl&.uTfCG#qR.;,Dl<1*0BnxKWi?v^+HRh-;%yau$N~');
define('LOGGED_IN_KEY',    '$&zB|/5QKgIAS9Ev>fmC+,Zk+<Wm`|BbR-*.Ek|D%nDm=JG4zx!m)]Z$Z4Y$El4:');
define('NONCE_KEY',        'Ys#mJYU+W86F,)9L.>,5fy$r2A3[r>98Or2~+NBHQ~,(F(x$W9Z#+8BCgo2Z#:^L');
define('AUTH_SALT',        '%^dg-N+xJDl=rRpp`]|hxcJ|#GX0D7^dd1ba4Ffb8FB0{{j$3[q,h*h>g{m`-|!]');
define('SECURE_AUTH_SALT', 'YN<?1_-5x*_3W5EH6diV-OD1-0iQ!%RB^T1zj+Q.E]O;|{ )>b>CpclF+klS6OtG');
define('LOGGED_IN_SALT',   '3t;o$_!U1&6-3CJ5.(OY|eNx[8K.]hZv3865^.Ti1;<GeEh4:1#.LqH)Z$DL[pGj');
define('NONCE_SALT',       'a$PEB|g3BuZ^h3OS 3A3iL{:QJ4LD~@?>3fr1T{Fc=Cv!*aO>L!J ?A&&)4-w4>`');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

/**
 * O idioma localizado do WordPress é o inglês por padrão.
 *
 * Altere esta definição para localizar o WordPress. Um arquivo MO correspondente ao
 * idioma escolhido deve ser instalado em wp-content/languages. Por exemplo, instale
 * pt_BR.mo em wp-content/languages e altere WPLANG para 'pt_BR' para habilitar o suporte
 * ao português do Brasil.
 */
define('WPLANG', 'pt_BR');

/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * altere isto para true para ativar a exibição de avisos durante o desenvolvimento.
 * é altamente recomendável que os desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 */
define('WP_DEBUG', true);

/* Habilita o salvamento de todas queries em um array global e que pode ser consultado nas páginas */
/* Necessita do código  na página: 
	If ( current_user_can(’install_plugins’)) {
		global $wpdb;
		print_r($wpdb->queries);
	}
	Adicionado por Diego Schneider */
define('SAVEQUERIES', true);


@ini_set('log_errors','On');
@ini_set('display_errors','On');
@ini_set('error_log','/extraclasse/wordpress/php_error.log');

//define('WP_SITEURL', 'http://extraclasse.org/');
//define('WP_HOME', 'http://extraclasse.org/');

/* Habilita a impressão de todas as opções do sistema  */
//print_r(@get_defined_constants());


/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
	
/** Configura as variáveis do WordPress e arquivos inclusos. */
require_once(ABSPATH . 'wp-settings.php');
