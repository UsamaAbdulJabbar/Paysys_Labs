<?php

 function rselemetns_woocommerce_product_categories(){
    $terms = get_terms(array(
        'taxonomy' => 'product_cat',
        'hide_empty' => true,
    ));

    if (!empty($terms) && !is_wp_error($terms)) {
        foreach ($terms as $term) {
            $options[$term->slug] = $term->name;
        }
        return $options;
    }
}

function rselements_kses_allowed_html( $rselements_tags, $rselements_context ) {
    switch ( $rselements_context ) {
    case 'rselements_kses':
        $rselements_tags = array(
            'div'    => array(
                'class' => array(),
            ),
            'ul'     => array(
                'class' => array(),
            ),
            'li'     => array(),
            'span'   => array(
                'class' => array(),
            ),
            'a'      => array(
                'href'  => array(),
                'class' => array(),
            ),
            'i'      => array(
                'class' => array(),
            ),
            'p'      => array(),
            'em'     => array(),
            'br'     => array(),
            'strong' => array(),
            'h1'     => array(),
            'h2'     => array(),
            'h3'     => array(),
            'h4'     => array(),
            'h5'     => array(),
            'h6'     => array(),
            'del'    => array(),
            'ins'    => array(),
        );
        return $rselements_tags;
    case 'rselements_img':
        $rselements_tags = array(
            'img' => array(
                'class'  => array(),
                'height' => array(),
                'width'  => array(),
                'src'    => array(),
                'alt'    => array(),
            ),
        );
        return $rselements_tags;
    default:
        return $rselements_tags;

    }
}

add_filter( 'wp_kses_allowed_html', 'rselements_kses_allowed_html', 10, 2 );