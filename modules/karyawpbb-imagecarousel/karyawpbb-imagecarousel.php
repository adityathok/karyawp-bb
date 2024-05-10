<?php
class KaryaWPBBImageCarousel extends FLBuilderModule {

    public function __construct()
    {
      parent::__construct(array(
        'name'            => __( 'Image Carousel', 'fl-builder' ),
        'description'     => __( 'Tampilkan Galeri bergerak', 'fl-builder' ),
        'group'           => __( 'KaryaWP Modules', 'fl-builder' ),
        'category'        => __( 'Media', 'fl-builder' ),
        'editor_export'   => false,
        'partial_refresh' => true,
        'icon'            => 'format-gallery.svg',
      ));

      $this->add_js( 'jquery-magnificpopup' );
      $this->add_css( 'jquery-magnificpopup' );

      $this->add_js( 'slick', KARYAWPBB_PLUGIN_URL . 'js/slick.min.js' );
      $this->add_css( 'slick', KARYAWPBB_PLUGIN_URL . 'css/slick.min.css' );
      $this->add_css( 'slick-theme', KARYAWPBB_PLUGIN_URL . 'css/slick-theme.min.css' );
    }
}

FLBuilder::register_module( 'KaryaWPBBImageCarousel', array(
    'general'      => array(
      'title'         => __( 'General', 'fl-builder' ),
      'sections'      => array(
        'general'  => array(
          'title'         => __( 'Photos', 'fl-builder' ),
          'fields'        => array(
            'photos'            => array(
                'type'          => 'multiple-photos',
                'label'         => __( 'Photos', 'fl-builder' ),
                'connections'   => array( 'multiple-photos' ),
            ),
            'photo_size'        => array(
                'type'          => 'photo-sizes',
                'label'         => __( 'Photo Size', 'fl-builder' ),
                'default'       => 'medium',
            ),
            'click_action'      => array(
                'type'          => 'select',
                'label'         => __( 'Click Action', 'fl-builder' ),
                'default'       => 'lightbox',
                'options'       => array(
                    'none'     => _x( 'None', 'Click action.', 'fl-builder' ),
                    'lightbox' => __( 'Lightbox', 'fl-builder' ),
                ),
            ),
          )
        ),
        'sliders'  => array(
          'title'         => __( 'Sliders', 'fl-builder' ),
          'fields'        => array(
            'slidesToShow'      => array(
                'type'          => 'select',
                'label'         => __( 'Slides To Show', 'fl-builder' ),
                'default'       => '3',
                'options'       => array(
                    '1'     => _x( '1', 'Columns.', 'fl-builder' ),
                    '2'     => _x( '2', 'Columns.', 'fl-builder' ),
                    '3'     => _x( '3', 'Columns.', 'fl-builder' ),
                    '4'     => _x( '4', 'Columns.', 'fl-builder' ),
                    '5'     => _x( '5', 'Columns.', 'fl-builder' ),
                    '6'     => _x( '6', 'Columns.', 'fl-builder' ),
                    '7'     => _x( '7', 'Columns.', 'fl-builder' ),
                    '8'     => _x( '8', 'Columns.', 'fl-builder' ),
                ),
                'responsive'  => true,
            ),
            'padding_column'    => array(
                'type'          => 'unit',
                'label'         => __( 'Padding', 'fl-builder' ),
                'default'       => '10',
                'description'   => 'px',
                'responsive'    => true,
            ),
            'dots'          => array(
                'type'          => 'select',
                'label'         => __( 'Dots', 'fl-builder' ),
                'default'       => 'true',
                'options'       => array(
                    'true'      => _x( 'Yes','fl-builder' ),
                    'false'     => __( 'No', 'fl-builder' ),
                ),
            ),
            'arrows'          => array(
                'type'          => 'select',
                'label'         => __( 'Arrows', 'fl-builder' ),
                'default'       => 'true',
                'options'       => array(
                    'true'      => _x( 'Yes','fl-builder' ),
                    'false'     => __( 'No', 'fl-builder' ),
                ),
            ),
            'infinite'          => array(
                'type'          => 'select',
                'label'         => __( 'Infinite', 'fl-builder' ),
                'default'       => 'true',
                'options'       => array(
                    'true'      => _x( 'Yes','fl-builder' ),
                    'false'     => __( 'No', 'fl-builder' ),
                ),
            ),
          )
        ),
      )
    )
) );