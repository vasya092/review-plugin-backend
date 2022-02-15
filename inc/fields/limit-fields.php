<?php


add_action('add_meta_boxes', 'metabox_limit', 1);


function metabox_limit() {
    add_meta_box( 'limit_fields', 'Макс. лимит на вывод средств:', 'limit_fields_box', 'cr_reviews', 'normal', 'high'  );
}

function limit_fields_box( $post ){
    
    $limitValues = get_post_meta($post->ID, 'cr_limits', 1); ?>
    
    <div class="limit-fields">
        <div class="limit-fields__item">
            <input type="number" name="limit[day][value]" value="<?php echo $limitValues['day']['value'];?>"/> 
            <select name="limit[day][curency]" id="">
                <option value="rub" <? echo ($limitValues['day']['curency'] == "rub") ? 'selected' : '';  ?> >RUB</option>
                <option value="usd" <? echo ($limitValues['day']['curency'] == "usd") ? 'selected' : '';  ?> >USD</option>
                <option value="eur" <? echo ($limitValues['day']['curency'] == "eur") ? 'selected' : '';  ?> >EUR</option>
            </select>
        </div>
        <div class="limit-fields__item">
            <input type="number" name="limit[week][value]" value="<?php echo $limitValues['week']['value']; ?>"/> 
            <select name="limit[week][curency]" id="">
                <option value="rub" <? echo ($limitValues['week']['curency'] == "rub") ? 'selected' : '';  ?> >RUB</option>
                <option value="usd" <? echo ($limitValues['week']['curency'] == "usd") ? 'selected' : '';  ?> >USD</option>
                <option value="eur" <? echo ($limitValues['week']['curency'] == "eur") ? 'selected' : '';  ?> >EUR</option>
            </select>
        </div>
        <div class="limit-fields__item">
            <input type="number" name="limit[month][value]" value="<?php echo $limitValues['month']['value']; ?>"/> 
            <select name="limit[month][curency]" id="">
                <option value="rub" <? echo ($limitValues['month']['curency'] == "rub") ? 'selected' : '';  ?> >RUB</option>
                <option value="usd" <? echo ($limitValues['month']['curency'] == "usd") ? 'selected' : '';  ?> >USD</option>
                <option value="eur" <? echo ($limitValues['month']['curency'] == "eur") ? 'selected' : '';  ?> >EUR</option>
            </select>
        </div>
    </div>

    <?php
}


add_action( 'save_post', 'limit_fields_update', 0 );

function limit_fields_update( $post_id ){

		if( empty( $_POST['limit']) ){
			delete_post_meta( $post_id, 'cr_limits' ); 
		}

		update_post_meta( $post_id, 'cr_limits', $_POST['limit'] );

	return $post_id;
}