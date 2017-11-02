<?php

//1
//ADICIONA OS SCRIPTS DE CARREGAMENTOS
function carregaScripts(){
    wp_enqueue_script( 'npm.min', get_template_directory_uri().'/js/npm.js', false );
    wp_enqueue_script( 'bootstrap.min', get_template_directory_uri().'/js/bootstrap.min.js', false );
}
function carregaStyles(){
    wp_enqueue_style( 'style', get_stylesheet_uri() ); 
    wp_enqueue_style( 'bootstrap', get_template_directory_uri().'/css/bootstrap.min.css', false ); 
    wp_enqueue_style( 'bootstrap-theme', get_template_directory_uri().'/css/bootstrap-theme.min.css', false ); 
}


//FUNÇÕES DO WP
//RETIRA A BARRA DO MENU PADRAO DO WORDPRESS
function my_function_admin_bar(){
    return false;
}

//REGISTRA MENU PRINCIPAL
function register_my_menu() {
    register_nav_menu('MenuPrincipal',__( 'Menu Principal' ));
}

//REGISTRA WIDGET
function theme_slug_widgets_init() {
    $sidebarSlideShow = array(
        'name' => __( 'wg_slidePrincipal', 'wg_slidePrincipal_slug' ),
        'id' => 'wg_slidePrincipal',
        'description' => __( 'Local de carregamento do slide principal', 'wg_slidePrincipal' ),
        'before_widget' => '<div class="wg-slideshow-principal"',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>'
    );
    
    $sidebarDireito = array(
        'name' => __( 'wg_sideBarDireito', 'wg_sideBarDireito_slug' ),
        'id' => 'wg_sideBarDireito',
        'description' => __( 'Conteudos diversos', 'wg_sideBarDireito' ),
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '',
        'after_title'   => ''
    );
    
    register_sidebar($sidebarSlideShow);
    register_sidebar($sidebarDireito);
}

//FUNCOES DE SUPORTE PARA O THEMA
function adicionarSupport(){
    add_theme_support('post-thumbnails');
}


//acionamentos
add_action( 'wp_enqueue_scripts', 'carregaScripts' );//carrega scripts
add_action( 'wp_enqueue_scripts', 'carregaStyles' );//carregas styles
add_filter( 'show_admin_bar' , 'my_function_admin_bar');//RETIRAR BARRA PADRAO DO WP
add_action( 'init', 'register_my_menu' );//REGISTRA MENU PRINCIPAL
add_action( 'widgets_init', 'theme_slug_widgets_init' );
add_action( 'init', 'adicionarSupport' );

