<?php

// BLOCKS WITH ACF
add_action('acf/init', 'my_acf_init_block_types');
function my_acf_init_block_types() {

  // Check function exists
  if( function_exists('acf_register_block_type') ) {

    // register a block ================================ NAME OF BLOCK: ( Tekst na belce - HOME )
    acf_register_block_type(array(
      'name'              => 'text-box',
      'title'             => __('Tekst na belce - strona główna'),
      'description'       => __('Tekst na belce na całej szerokości lub w kontanerze'),
      'render_template'   => 'template-parts/blocks/text-box/text-box.php',
      'category'          => 'formatting',
      'icon'              => 'admin-users',
      'keywords'          => array( 'text-box', 'text', 'full' ),
      'enqueue_style'     => get_stylesheet_directory_uri() . '/scss/app.scss',
    ));

    // register a block ================================ NAME OF BLOCK: ( Tekst na belce 1 z 6 )
    acf_register_block_type(array(
      'name'              => 'text-box1',
      'title'             => __('Tekst na belce 1 z 6'),
      'description'       => __('Tekst na belce na całej szerokości lub w kontanerze'),
      'render_template'   => 'template-parts/blocks/text-box/text-box1.php',
      'category'          => 'formatting',
      'icon'              => 'admin-users',
      'keywords'          => array( 'text-box1', 'text', 'full' ),
      'enqueue_style'     => get_stylesheet_directory_uri() . '/scss/app.scss',
    ));

    // register a block ================================ NAME OF BLOCK: ( Tekst na belce 2 z 6 )
    acf_register_block_type(array(
      'name'              => 'text-box2',
      'title'             => __('Tekst na belce 2 z 6'),
      'description'       => __('Tekst na belce na całej szerokości lub w kontanerze'),
      'render_template'   => 'template-parts/blocks/text-box/text-box2.php',
      'category'          => 'formatting',
      'icon'              => 'admin-users',
      'keywords'          => array( 'text-box2', 'text', 'full' ),
      'enqueue_style'     => get_stylesheet_directory_uri() . '/scss/app.scss',
    ));

    // register a block ================================ NAME OF BLOCK: ( Tekst na belce 3 z 6 )
    acf_register_block_type(array(
      'name'              => 'text-box3',
      'title'             => __('Tekst na belce 3 z 6'),
      'description'       => __('Tekst na belce na całej szerokości lub w kontanerze'),
      'render_template'   => 'template-parts/blocks/text-box/text-box3.php',
      'category'          => 'formatting',
      'icon'              => 'admin-users',
      'keywords'          => array( 'text-box3', 'text', 'full' ),
      'enqueue_style'     => get_stylesheet_directory_uri() . '/scss/app.scss',
    ));

    // register a block ================================ NAME OF BLOCK: ( Tekst na belce 4 z 6 )
    acf_register_block_type(array(
      'name'              => 'text-box4',
      'title'             => __('Tekst na belce 4 z 6'),
      'description'       => __('Tekst na belce na całej szerokości lub w kontanerze'),
      'render_template'   => 'template-parts/blocks/text-box/text-box4.php',
      'category'          => 'formatting',
      'icon'              => 'admin-users',
      'keywords'          => array( 'text-box4', 'text', 'full' ),
      'enqueue_style'     => get_stylesheet_directory_uri() . '/scss/app.scss',
    ));

    // register a block ================================ NAME OF BLOCK: ( Tekst na belce 5 z 6 )
    acf_register_block_type(array(
      'name'              => 'text-box5',
      'title'             => __('Tekst na belce 5 z 6'),
      'description'       => __('Tekst na belce na całej szerokości lub w kontanerze'),
      'render_template'   => 'template-parts/blocks/text-box/text-box5.php',
      'category'          => 'formatting',
      'icon'              => 'admin-users',
      'keywords'          => array( 'text-box5', 'text', 'full' ),
      'enqueue_style'     => get_stylesheet_directory_uri() . '/scss/app.scss',
    ));

    // register a block ================================ NAME OF BLOCK: ( Tekst na belce 6 z 6 )
    acf_register_block_type(array(
      'name'              => 'text-box6',
      'title'             => __('Tekst na belce 6 z 6'),
      'description'       => __('Tekst na belce na całej szerokości lub w kontanerze'),
      'render_template'   => 'template-parts/blocks/text-box/text-box6.php',
      'category'          => 'formatting',
      'icon'              => 'admin-users',
      'keywords'          => array( 'text-box6', 'text', 'full' ),
      'enqueue_style'     => get_stylesheet_directory_uri() . '/scss/app.scss',
    ));

    // register a block ================================ NAME OF BLOCK: ( Szachownica - start od tekstu )
    acf_register_block_type(array(
      'name'              => 'chessboard-left',
      'title'             => __('Szachownica z tekstem od lewej'),
      'description'       => __('Szachownica z tekstem od lewej'),
      'render_template'   => 'template-parts/blocks/chessboard/chessboard-left.php',
      'category'          => 'formatting',
      'icon'              => 'admin-users',
      'keywords'          => array( 'text-box-left', 'text', 'chessboard' ),
      'enqueue_style'     => get_stylesheet_directory_uri() . '/scss/app.scss',
    ));

    // register a block ================================ NAME OF BLOCK: ( Szachownica - start od zdjęcia )
    acf_register_block_type(array(
      'name'              => 'chessboard-right',
      'title'             => __('Szachownica z tekstem od prawej'),
      'description'       => __('Szachownica z tekstem od prawej'),
      'render_template'   => 'template-parts/blocks/chessboard/chessboard-right.php',
      'category'          => 'formatting',
      'icon'              => 'admin-users',
      'keywords'          => array( 'text-box-right', 'text', 'chessboard' ),
      'enqueue_style'     => get_stylesheet_directory_uri() . '/scss/app.scss',
    ));

    // register a block ================================ NAME OF BLOCK: ( Ikony z opisem )
    acf_register_block_type(array(
      'name'              => 'icons',
      'title'             => __('Ikony z opisem'),
      'description'       => __('Ikony z opisem'),
      'render_template'   => 'template-parts/blocks/icons.php',
      'category'          => 'formatting',
      'icon'              => 'admin-users',
      'keywords'          => array( 'icons', 'text' ),
      'enqueue_style'     => get_stylesheet_directory_uri() . '/scss/app.scss',
    ));

    // register a block ================================ NAME OF BLOCK: ( Testimoniale )
    acf_register_block_type(array(
      'name'              => 'testimoniale',
      'title'             => __('Testimoniale'),
      'description'       => __('Testimoniale'),
      'render_template'   => 'template-parts/blocks/testimoniale.php',
      'category'          => 'formatting',
      'icon'              => 'admin-users',
      'keywords'          => array( 'testimoniale', 'text' ),
      'enqueue_style'     => get_stylesheet_directory_uri() . '/scss/app.scss',
    ));

    // register a block ================================ NAME OF BLOCK: ( Galeria )
    acf_register_block_type(array(
      'name'              => 'gallery',
      'title'             => __('Galeria'),
      'description'       => __('Galeria zdjęć - 4 na stronę'),
      'render_template'   => 'template-parts/blocks/gallery.php',
      'category'          => 'formatting',
      'icon'              => 'admin-users',
      'keywords'          => array( 'gallery', 'image', 'images', 'zdjecia' ),
      'enqueue_style'     => get_stylesheet_directory_uri() . '/scss/app.scss',
    ));

    // register a block ================================ NAME OF BLOCK: ( FAQ )
    acf_register_block_type(array(
      'name'              => 'faq',
      'title'             => __('FAQ'),
      'description'       => __('FAQ'),
      'render_template'   => 'template-parts/blocks/faq.php',
      'category'          => 'formatting',
      'icon'              => 'admin-users',
      'keywords'          => array( 'faq', 'text', 'questions', 'answares' ),
      'enqueue_style'     => get_stylesheet_directory_uri() . '/scss/app.scss',
    ));

    // register a block ================================ NAME OF BLOCK: ( Przycisk )
    acf_register_block_type(array(
      'name'              => 'button',
      'title'             => __('Przycisk'),
      'description'       => __('Przycisk w dwóch wersjach do wyboru'),
      'render_template'   => 'template-parts/blocks/button.php',
      'category'          => 'formatting',
      'icon'              => 'admin-users',
      'keywords'          => array( 'button', 'przycisk', 'ciemny', 'jasny' ),
      'enqueue_style'     => get_stylesheet_directory_uri() . '/scss/app.scss',
    ));

  }
}
