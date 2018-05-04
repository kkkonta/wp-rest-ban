<?php 
/*
Plugin Name: wp-rest-ban
Plugin URI:
Description: limit rest api to cf7,,,etc
Version: 1.0.0
Author: kta
Author URI: 
License: GPL2
*/

//pluginの更新を非表示
function myp_hide_myplugin_updateplugin( $data ) {
    if ( isset( $data->response['wp-rest-ban/wp-rest-ban.php'] ) ) {
        unset( $data->response['wp-rest-ban/wp-rest-ban.php'] );
    }
    return $data;
}
add_filter( 'site_option__site_transient_update_plugins', 'myp_hide_myplugin_updateplugin' );

//REST APIを無効にする
function myp_deny_restapi_except_embed( $result, $wp_rest_server, $request ){

    //namespace → REST request contains
    $namespaces = $request->get_route();
 
    // /oembed/1.0
    if( strpos( $namespaces, 'oembed/' ) === 1 ){
        return $result;
    }
 
    // /jetpack/v4
    if( strpos( $namespaces, 'jetpack/' ) === 1 ){
        return $result;
    }
 
    //contact form 7 (Ver4.7～)
    if( strpos( $namespaces, 'contact-form-7/' ) === 1 ){
        return $result;
    }
 
    //Gutenberg (Ver4.9?～)
    if ( current_user_can( 'edit_posts' ) ) {
        return $result;
    }
 
    return new WP_Error( 'rest_disabled', __( 'The REST API on this site has been disabled.' ), array( 'status' => rest_authorization_required_code() ) );
}
add_filter( 'rest_pre_dispatch', 'myp_deny_restapi_except_embed', 10, 3 );
　
