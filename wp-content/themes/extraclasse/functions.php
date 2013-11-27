<?php
/**
 * ExtraClasse - Funções e Definições
 *
 * @package WordPress
 * @subpackage ExtraClasse
 * @since ExtraClasse 1.0
 * @Criado por Diego Schneider - 25/11/2013
 */

/*======================================================================*/
// TELA DE LOGIN
/*======================================================================*/

// CUSTOMIZA O LINK DO LOGO DA TELA DE LOGIN
function define_url_logo_tela_login() 
{
    return 'jornalextraclasse.org.br';  // OR ECHO YOUR OWN URL
}
add_filter('login_headerurl', 'define_url_logo_tela_login');


// CUSTOMIZA TITLE DO LOGO DA TELA DE LOGIN
function define_title_logo_tela_login() 
{
    return 'Abre o site do ' . get_option('blogname'); // OR ECHO YOUR OWN ALT TEXT
}
add_filter('login_headertitle', 'define_title_logo_tela_login');


// CUSTOMIZA O LOGO DA TELA DE LOGIN 
function define_imagem_logo_tela_login()
{
    echo '<style  type="text/css"> h1 a {  background-image:url(' . get_bloginfo('template_directory') . '/images/wordpress-logo.png)  !important; background-size: 312px 67px !important; } </style>';
}
add_action('login_head',  'define_imagem_logo_tela_login');	








/*======================================================================*/
// PAINEL DE CONTROLE
/*======================================================================*/

// DEFINE A INFORMAÇÃO DO RODAPÉ DA TELA DE ADMINISTRAÇÃO
function define_rodape_tela_admin () 
{
    return '<span id="footer-thankyou">Desenvolvido por <a href="http://www.cwi.com.br" target="_blank">CWI Software</a> e equipe TI SINPRO/RS</span>';
}
add_filter('admin_footer_text', 'define_rodape_tela_admin');


// REMOVE META BOXES DA TELA DE ADMIN PARA TODOS OS USUÁRIOS
function remove_widgets_tela_admin()
{
	remove_meta_box( 'dashboard_quick_press',   'dashboard', 'side' );      //Quick Press widget
	remove_meta_box( 'dashboard_recent_drafts', 'dashboard', 'side' );      //Recent Drafts
	remove_meta_box( 'dashboard_primary',       'dashboard', 'side' );      //WordPress.com Blog
	remove_meta_box( 'dashboard_secondary',     'dashboard', 'side' );      //Other WordPress News
	remove_meta_box( 'dashboard_incoming_links','dashboard', 'normal' );    //Incoming Links
	remove_meta_box( 'dashboard_plugins',       'dashboard', 'normal' );    //Plugins

}
add_action('wp_dashboard_setup', 'remove_widgets_tela_admin' );



// ADICIONA WIDGET A TELA DO PAINEL (DASHBOARD)
function add_widgets_tela_admin() {
	wp_add_dashboard_widget(
		'widget_nova_edicao',         			// Slug do widget .
		'Adicionar Nova Edição do Jornal',      // Título da área do widget.
		'widget_nova_edicao_function' 			// Nome da função que será chamada.
   	);	
}
add_action( 'wp_dashboard_setup', 'add_widgets_tela_admin' );



// CRIA ÁREA DE QUE POSSIBILITA ADICIONAR UMA NOVA EDIÇÃO DO JORNAL EXTRACLASSE
function widget_nova_edicao_function() {
	echo "Adicione uma nova edição do ExtraClasse";
} 

?>