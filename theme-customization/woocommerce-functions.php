/* Replace text in Checkout Process */

function change_related_products_text( $translated_text, $text, $domain ) {
  switch ( $translated_text ) {
    case 'Pokrewne produkty' :
      $translated_text = __( 'Podobne produkty', 'woocommerce' );
      break;
	case 'Dane płatności' :
      $translated_text = __( 'Dane Kupującego', 'woocommerce' );
      break;
	case 'Wysłać na inny adres?' :
      $translated_text = __( 'Wysłać produkt na inny adres?', 'woocommerce' );
      break;
	  
  }
  return $translated_text;
}
add_filter( 'gettext', 'change_related_products_text', 20, 3 );
 

 
 

 
/**
 * Change number of related products output
 */ 
function woo_related_products_limit() {
  global $product;
	
	$args['posts_per_page'] = 6;
	return $args;
}
add_filter( 'woocommerce_output_related_products_args', 'jk_related_products_args', 20 );
  function jk_related_products_args( $args ) {
	$args['posts_per_page'] = 3; // 3 related products
	$args['columns'] = 3; // arranged in 3 columns
	return $args;
}
