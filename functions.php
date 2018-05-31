<?php
/*
 *  Author: Eric Andren | @ozpoo
 */

if (function_exists('add_theme_support')) {
    add_theme_support('menus');
    add_theme_support('post-thumbnails');

    add_theme_support('post-thumbnails');
    add_image_size('s12',   2880, '', true);
    add_image_size('s11',   2560, '', true);
    add_image_size('s10',   1920, '', true);
    add_image_size('s09',   1440, '', true);
    add_image_size('s08',   1366, '', true);
    add_image_size('s07',   1280, '', true);
    add_image_size('s06',   1024, '', true);
    add_image_size('s05',   960, '', true);
    add_image_size('s04',   800, '', true);
    add_image_size('s03',   640, '', true);
    add_image_size('s02',   480, '', true);
    add_image_size('s01',   120, '', true);

    add_image_size('h08',   '', 360, true);
    add_image_size('h07',   '', 320, true);
    add_image_size('h06',   '', 280, true);
    add_image_size('h05',   '', 240, true);
    add_image_size('h04',   '', 200, true);
    add_image_size('h03',   '', 160, true);
    add_image_size('h02',   '', 120, true);
    add_image_size('h01',   '', 10, true);

    add_theme_support('automatic-feed-links');
    load_theme_textdomain('oz', get_template_directory() . '/languages');
}

function header_scripts() {
    if ($GLOBALS['pagenow'] != 'wp-login.php' && !is_admin()) {
        wp_register_script('script',
          get_template_directory_uri() . '/assets/js/build/script.js?v='.time(),
          array('jquery'), '1.0.0');
        wp_enqueue_script('script');
    }
}

function conditional_scripts(){

}

function styles() {
  // wp_register_style('Space Mono',
  //   get_template_directory_uri() . '/assets/font/Space Mono/stylesheet.css?v='.time(),
  //   array(), '1.0', 'all');
  // wp_enqueue_style('Space Mono');

  // wp_register_style('Maison Neue',
  //   get_template_directory_uri() . '/assets/font/Maison Neue/stylesheet.css?v='.time(),
  //   array(), '1.0', 'all');
  // wp_enqueue_style('Maison Neue');

  wp_register_style('aos',
    get_template_directory_uri() . '/assets/js/_lib/aos/aos.css?v='.time(),
    array(), '1.0', 'all');
  wp_enqueue_style('aos');

  wp_register_style('flky',
    get_template_directory_uri() . '/assets/js/_lib/flickity/flickity.css?v='.time(),
    array(), '1.0', 'all');
  wp_enqueue_style('flky');

  wp_register_style('style',
    get_template_directory_uri() . '/assets/css/build/style.css?v='.time(),
    array(), '1.0', 'all');
  wp_enqueue_style('style');
}

function my_wp_nav_menu_args($args = '') {
    $args['container'] = false;
    return $args;
}

function my_css_attributes_filter($var) {
    return is_array($var) ? array() : '';
}

function remove_category_rel_from_category_list($thelist) {
    return str_replace('rel="category tag"', 'rel="tag"', $thelist);
}

function add_slug_to_body_class($classes) {
    global $post;
    if (is_home()) {
        $key = array_search('blog', $classes);
        if ($key > -1) {
            unset($classes[$key]);
        }
    } elseif (is_page()) {
        $classes[] = sanitize_html_class($post->post_name);
    } elseif (is_singular()) {
        $classes[] = sanitize_html_class($post->post_name);
    }

    return $classes;
}

function pagination() {
    global $wp_query;
    $big = 999999999;
    echo paginate_links(array(
        'base' => str_replace($big, '%#%', get_pagenum_link($big)),
        'format' => '?paged=%#%',
        'current' => max(1, get_query_var('paged')),
        'total' => $wp_query->max_num_pages
    ));
}

function html5wp_index($length) {
    return 20;
}

function html5wp_custom_post($length) {
    return 40;
}

function html5wp_excerpt($length_callback = '', $more_callback = '') {
    global $post;
    if (function_exists($length_callback)) {
        add_filter('excerpt_length', $length_callback);
    }
    if (function_exists($more_callback)) {
        add_filter('excerpt_more', $more_callback);
    }
    $output = get_the_excerpt();
    $output = apply_filters('wptexturize', $output);
    $output = apply_filters('convert_chars', $output);
    $output = '<p>' . $output . '</p>';
    echo $output;
}

function view_article($more) {
    global $post;
    return '... <a class="view-article" href="' . get_permalink($post->ID) . '">' . __('View Article', 'html5blank') . '</a>';
}

function remove_admin_bar() {
    return false;
}

function remove_thumbnail_dimensions( $html ) {
    $html = preg_replace('/(width|height)=\"\d*\"\s/', "", $html);
    return $html;
}

function gleon_api_request() {
  $results = [];
  $api = "https://wqdatalive.com/api/public/list";
  $response = get_curl($api);
  return $response;
}

function topo_api_request($api) {
  $results = [];
  $response = get_curl($api);
  return $response;
}

function earthquake_api_request() {
  // $results = [];
  // $api = "https://earthquake.usgs.gov/earthquakes/feed/v1.0/summary/all_hour.geojson";
  // $response = get_curl($api);
  //
  // $results = [];
  // $api = "https://earthquake.usgs.gov/earthquakes/feed/v1.0/summary/all_day.geojson";
  // $response = get_curl($api);
  //
  // $results = [];
  // $api = "https://earthquake.usgs.gov/earthquakes/feed/v1.0/summary/all_week.geojson";
  // $response = get_curl($api);

  $results = [];
  $api = "https://earthquake.usgs.gov/earthquakes/feed/v1.0/summary/all_month.geojson";
  $response = get_curl($api);

  return $response;
}

function instagram_api_request() {
  $results = [];
  $image = [];
  $client = "001b9288d8264d47bbb9fc434a90b421";
  $access = "6092238.e029fea.f79493609dea415398f04a9921bdd7d5";
  $user = "6092238";
  $query = 'selfie';
  $count = 30;
  $api = "https://api.instagram.com/v1/tags/".$query."/media/recent?count=".$count."&client_id=".$client."&access_token=".$access;
  $response = get_curl($api);
  // $next_url = json_decode($response)->pagination->next_url;
  //
  // foreach(json_decode($response)->data as $item) {
  //   $src = $item->images->standard_resolution->url;
  //   $thumb = $item->images->thumbnail->url;
  //   $url = $item->link;
  //   $results[] = array(
  //     "src" => htmlspecialchars($src),
  //     "thumb" => htmlspecialchars($thumb),
  //     "url" => htmlspecialchars($url),
  //     "raw" => $item
  //   );
  // }
  // return json_encode($results);
  return $response;
}

function get_curl($url) {
  if(function_exists('curl_init')) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL,$url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    $output = curl_exec($ch);
    echo curl_error($ch);
    curl_close($ch);
    return $output;
  } else{
    return file_get_contents($url);
  }
}

function update_attachment( $pid, $url ){
  $wp_upload_dir = wp_upload_dir();
  $path = $wp_upload_dir['path'] . '/' . time() . '.tiff';
  $contents = file_get_contents($url);
  $savefile = fopen($path, 'w');
  fwrite($savefile, $contents);
  fclose($savefile);
	$attachment = array(
		'guid'           => $path,
		'post_parent' 	 => $pid,
		'post_title'     => basename( $url ),
		'post_type' 	 => 'attachment',
		'post_content'   => '',
		'post_status'    => 'inherit',
		'post_mime_type' => 'image/tiff',
	);
  $attach_id = wp_insert_attachment( $attachment, $path );
  $image = get_post( $attach_id );
  $full_path = get_attached_file( $image->ID );
  $attach_data = wp_generate_attachment_metadata( $attach_id, $full_path );
  wp_update_attachment_metadata( $attach_id, $attach_data );
	return array(
		'pid' => $pid,
		'url' => $path,
    'attach_id' => $attach_id
		);
}

add_action('init', 'header_scripts'); // Add Custom Scripts to wp_head
add_action('wp_print_scripts', 'conditional_scripts'); // Add Conditional Page Scripts
add_action('wp_enqueue_scripts', 'styles'); // Add Theme Stylesheet
add_action('init', 'pagination'); // Add our HTML5 Pagination

remove_action('wp_head', 'feed_links_extra', 3); // Display the links to the extra feeds such as category feeds
remove_action('wp_head', 'feed_links', 2); // Display the links to the general feeds: Post and Comment Feed
remove_action('wp_head', 'rsd_link'); // Display the link to the Really Simple Discovery service endpoint, EditURI link
remove_action('wp_head', 'wlwmanifest_link'); // Display the link to the Windows Live Writer manifest file.
remove_action('wp_head', 'index_rel_link'); // Index link
remove_action('wp_head', 'parent_post_rel_link', 10, 0); // Prev link
remove_action('wp_head', 'start_post_rel_link', 10, 0); // Start link
remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0); // Display relational links for the posts adjacent to the current post.
remove_action('wp_head', 'wp_generator'); // Display the XHTML generator that is generated on the wp_head hook, WP version
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'rel_canonical');
remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);

add_filter('body_class', 'add_slug_to_body_class'); // Add slug to body class (Starkers build)
add_filter('wp_nav_menu_args', 'my_wp_nav_menu_args'); // Remove surrounding <div> from WP Navigation
add_filter('the_category', 'remove_category_rel_from_category_list'); // Remove invalid rel attribute
add_filter('the_excerpt', 'shortcode_unautop'); // Remove auto <p> tags in Excerpt (Manual Excerpts only)
add_filter('the_excerpt', 'do_shortcode'); // Allows Shortcodes to be executed in Excerpt (Manual Excerpts only)
add_filter('excerpt_more', 'view_article'); // Add 'View Article' button instead of [...] for Excerpts
add_filter('show_admin_bar', 'remove_admin_bar'); // Remove Admin bar
add_filter('post_thumbnail_html', 'remove_thumbnail_dimensions', 10); // Remove width and height dynamic attributes to thumbnails
add_filter('image_send_to_editor', 'remove_thumbnail_dimensions', 10); // Remove width and height dynamic attributes to post images

remove_filter('the_excerpt', 'wpautop'); // Remove <p> tags from Excerpt altogether

function fb_unautop_4_img( $content ) {
  $content = preg_replace(
    '/<p>\\s*?(<a rel=\"attachment.*?><img.*?><\\/a>|<img.*?>)?\\s*<\\/p>/s',
    '<figure>$1</figure>',
    $content
  );
  return $content;
}
add_filter( 'the_content', 'fb_unautop_4_img', 99 );

function alx_embed_html( $html ) {
    return '<figure><div class="video-wrap">' . $html . '</div></figure>';
}
add_filter( 'embed_oembed_html', 'alx_embed_html', 10, 3 );
add_filter( 'video_embed_html', 'alx_embed_html' );

function wp_rest_api_alter() {
  register_api_field( 'selfies', 'fields',
    array(
      'get_callback'    => function($data, $field, $request, $type){
        if (function_exists('get_fields')) {
          return get_fields($data['id']);
        }
        return [];
      },
      'update_callback' => null,
      'schema'          => null,
    )
  );
}
add_action( 'rest_api_init', 'wp_rest_api_alter');

function wp_api_add_tax($post, $data, $update){
  foreach( $data['cat_selfies'] as $tax => $val ){
    wp_set_object_terms( $post['ID'], $data['cat_selfies'], 'cat_selfies' );
  }
}
add_filter('json_insert_post', 'wp_api_add_tax', 10, 3);

// Custom styling for ACF backend UI
function my_acf_admin_head() {
	?>
	<style type="text/css">
  /* Custom columns */
    .acf-fields > .acf-field.half {
      width: 50%;
      box-sizing: border-box;
      float: left;
      clear: none;
    }
    .acf-fields > .acf-field.third {
      width: 33.33%;
      box-sizing: border-box;
      float: left;
      clear: none;
    }
    .acf-fields > .acf-field.no-top-border {
      border-top: none;
    }
	</style>
	<?php
}
add_action('acf/input/admin_head', 'my_acf_admin_head');

?>
