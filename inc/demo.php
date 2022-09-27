<?php 
function photo_demo_files() {
  return array(
    array(
      'import_file_name'             => 'Import Photo Demo',
      'categories'                   => array( 'New Category', 'Old Category' ),
      'local_import_file'            => trailingslashit( get_template_directory() ) . 'demo/data.xml',
      'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'data/localhost.wie',
      'local_import_customizer_file' => trailingslashit( get_template_directory() ) . 'data/photo-export.dat',
      'import_preview_image_url'     => 'http://www.your_domain.com/ocdi/preview_import_image1.jpg',
      'import_notice'                => __( 'Before Demo Import Please put the folder plugin into your wordpress plugin directory.', 'photo' ),
    ),
  );
}
add_filter( 'pt-ocdi/import_files', 'photo_demo_files' );