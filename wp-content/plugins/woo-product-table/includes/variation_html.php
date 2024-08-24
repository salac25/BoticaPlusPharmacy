<?php

if( 'variable' !== $product_type ) return;
wp_enqueue_script( 'wc-add-to-cart-variation' );
global $product;
$attribute_keys  = array_keys( $attributes );
$variations_json = wp_json_encode( $available_variations );
$variations_attr = function_exists( 'wc_esc_json' ) ? wc_esc_json( $variations_json ) : _wp_specialchars( $variations_json, ENT_QUOTES, 'UTF-8', true );
$variations_attr = is_string( $variations_attr ) ? $variations_attr : '';
?>

<form class="variations_form cart" action="" method="post" enctype='multipart/form-data' data-product_id="<?php echo absint( $product->get_id() ); ?>" data-product_variations="<?php echo esc_attr( $variations_attr ); ?>">
<?php if ( empty( $available_variations ) && false !== $available_variations ) : ?>
        <p class="stock out-of-stock"><?php echo esc_html( apply_filters( 'woocommerce_out_of_stock_message', __( 'This product is currently out of stock and unavailable.', 'woo-product-table' ) ) ); ?></p>
<?php else : ?>
        
        <div class="wpt_varition_section variations" data-product_id="<?php echo esc_attr( $product->get_id() ); ?>" data-temp_number="<?php echo esc_attr( $temp_number ); ?>">
        <?php foreach ( $attributes as $attribute_name => $options ) : ?>

                <?php
                /**
                 * This hooked is used for print variations label
                 * 
                 * for using for each variation
                 */
                do_action( 'wpto_before_each_variation', $attribute_name, $options, $product, $config_value, $temp_number );

                $show_label = isset( $config_value['wpt_show_variation_label'] ) && $config_value['wpt_show_variation_label'] == 'on';
                echo $show_label ? '<div class="variation-wrapper">' : '';
                ?>
                <?php if ( $show_label ) { ?>
                        <label for="<?php echo esc_attr( esc_attr( $attribute_name . '_' . $product->get_id() ) );?>"><?php echo esc_html( wc_attribute_label( $attribute_name ) ); ?></label>
                <?php } ?>
                <?php        
                        
                wc_dropdown_variation_attribute_options(
                        array(
                                'options'   => $options,
                                'attribute' => $attribute_name,
                                'product'   => $product,
                                'id'        => esc_attr( $attribute_name . '_' . $product->get_id() ),
                                'name'        => esc_attr( $attribute_name . '_' . $product->get_id() ),

                                /**
                                 * @Hook wpt_variation_label Filter
                                 * Adding content or text berore Variation Label,
                                 * When not enabled third-parti plugin Support
                                 * 
                                 * @since 3.2.5.5
                                 */
                                'show_option_none' => apply_filters( 'wpt_variation_label', wc_attribute_label( $attribute_name ), $attribute_name, $product->get_id() ),
                        )
                );
                echo $show_label ? '</div>' : '';
                
                if( end( $attribute_keys ) == $attribute_name ){
                    if( $show_label ){
                        echo wp_kses_post( apply_filters( 'woocommerce_reset_variations_link', '<div class="variation-wrapper reset"><a class="reset_variations" href="#">' . esc_html__( 'Clear', 'woo-product-table' ) . '</a></div>' ) );
                    }else{
                        echo wp_kses_post( apply_filters( 'woocommerce_reset_variations_link', '<a class="reset_variations" href="#">' . esc_html__( 'Clear', 'woo-product-table' ) . '</a>' ) );
                    }
                }
                ?>
                
        <?php endforeach; ?>
        </div>
<?php endif; ?>
</form>
<?php
do_action( 'wpt_action_variation', $product ); //Sepcially for Min Max Plugin
