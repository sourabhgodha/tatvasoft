<?php
// File to add the meta boxes and save data in post meta 

add_action( 'add_meta_boxes', 'product_meta_box_add' );
function product_meta_box_add()
{
    add_meta_box( 'my-meta-box-id', 'Extra Fields', 'meta_box_product', 'product', 'normal', 'high' );
}

function meta_box_product($post)
{

    $values = get_post_custom( $post->ID );
    
    $product_price = isset( $values['product_price'] ) ? esc_attr( $values['product_price'][0] ) : '';
    $product_quantity = isset( $values['product_quantity'] ) ? esc_attr( $values['product_quantity'][0] ) : '';
    ?>
        <p>
            <label for="product_price">Product price</label>
            <input type="number" min="0" name="product_price" id="product_price" value="<?php echo $product_price; ?>" />
        </p>

        <p>
            <label for="product_quantity">Product Quantity</label>
            <input type="number" min="0" name="product_quantity" id="product_quantity" value="<?php echo $product_quantity; ?>" />
        </p>

        <?php
}
?>

<?php

// hook to save data in post meta
add_action( 'save_post', 'product_meta_box_save' );
function product_meta_box_save( $post_id )
{
   
    // Bail if we're doing an auto save
    if( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
      
    // if our current user can't edit this post, bail
    if( !current_user_can( 'edit_post' ) ) return;
     
    // now we can actually save the data
    $allowed = array( 
        'a' => array( // on allow a tags
            'href' => array() // and those anchors can only have href attribute
        )
    );
    
    // Making sure data is set before trying to save it
    if( isset( $_POST['product_price'] ) )
        update_post_meta( $post_id, 'product_price', wp_kses( $_POST['product_price'], $allowed ) );

    if( isset( $_POST['product_quantity'] ) )
        update_post_meta( $post_id, 'product_quantity', wp_kses( $_POST['product_quantity'], $allowed ) );       
}
?>