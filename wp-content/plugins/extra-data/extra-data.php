<?php
    /**
     * Created by PhpStorm.
     * User: marina
     * Date: 4/6/17
     * Time: 5:29 PM
     */
    /*
        Plugin Name: Extra data filed
        Description: Add Extra data filed
        Author: Marina wagih
    */

/**
 * Add the field to the checkout
 */

function add_extra_data_checkout_field( $checkout ) {

    echo '<div id="my_custom_checkout_field"><h2>' . __('plugin field') . '</h2>';

    woocommerce_form_field( 'plugin_field', array(
        'type'          => 'text',
        'label'         => __('plugin field'),
        'placeholder'   => __('Enter something'),
        'required' => true,
    ), $checkout->get_value( 'Extra_data' ));

    echo '</div>';

}

add_action( 'woocommerce_after_order_notes', 'add_extra_data_checkout_field' );

/**
 * Extra_data required with error msg
 */



function extra_data_checkout_field_add_error()
{
    if ( ! $_POST['Extra_data'] )
    {
        wc_add_notice( __( 'Please enter Extra data.' ), 'error' );
    }
}
add_action('woocommerce_checkout_process', 'extra_data_checkout_field_add_error');
/**
 *  save Extra_data
 */
function extra_data_checkout_field_update_order_meta( $order_id )
{
    if ( ! empty( $_POST['Extra_data'] ) )
    {
        update_post_meta( $order_id, 'Some Field', sanitize_text_field( $_POST['Extra_data'] ) );
    }
}
add_action( 'woocommerce_checkout_update_order_meta', 'extra_data_checkout_field_update_order_meta' );