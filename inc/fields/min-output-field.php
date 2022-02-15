<?php

add_action('add_meta_boxes', 'metabox_minout', 1);


function metabox_minout() {
    add_meta_box( 'minout_fields', 'Макс. лимит на вывод средств:', 'minout_fields_box', 'cr_reviews', 'normal', 'high'  );
}

function minout_fields_box( $post) {
    $minOutputValues = get_post_meta($post->ID, 'cr_minout', 1);
    ?>
        <input type="number" name="minout[value]" value="<?php echo $minOutputValues['value'];?>"/> 
        <select name="minout[curency]" id="">
            <option value="rub" <? echo ($minOutputValues['curency'] == "rub") ? 'selected' : '';  ?> >RUB</option>
            <option value="usd" <? echo ($minOutputValues['curency'] == "usd") ? 'selected' : '';  ?> >USD</option>
            <option value="eur" <? echo ($minOutputValues['curency'] == "eur") ? 'selected' : '';  ?> >EUR</option>
        </select>
    <?php
}

add_action( 'save_post', 'minout_field_update', 0 );

function minout_field_update( $post_id ){

		if( empty( $_POST['minout']) ){
			delete_post_meta( $post_id, 'cr_minout' ); 
		}

		update_post_meta( $post_id, 'cr_minout', $_POST['minout'] );

	return $post_id;
}