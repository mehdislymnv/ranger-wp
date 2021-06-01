<?php
  
class My_Custom_Primary_Nav_Walker extends Walker_Nav_Menu {

//   function start_lvl(&$output, $depth = 0, $args = array()) {
//     $output .= "\n<ul class=\"nav nav-menu-dropdown dropdown-menu font-assist-b\">\n";
//   }

  function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0) {
    $item_html = '';
    parent::start_el($item_html, $item, $depth, $args);
	
	if ( $depth === 0 ) {
    	$item_html = str_replace( '<a', '<a href="'.$item->url.'" class="nav-link text-dark"', $item_html );
	}

    // if ( $item->is_dropdown && $depth === 0 ) {
    //   $item_html = str_replace( '<a', '<a href="'.$item->url.'"', $item_html );
    //   $item_html = str_replace( '</a', '<i class="fa fa-chevron-down"></i></a', $item_html );
    // }

    $output .= $item_html;
  }

  function display_element($element, &$children_elements, $max_depth, $depth = 0, $args, &$output) {
    if ( $element->current )
      $element->classes[] = 'active';

	if ( $depth === 0 ) {
		$element->classes[] = 'nav-link text-dark'; 
	}

	// $element->is_dropdown = !empty( $children_elements[$element->ID] );

    // if ( $element->is_dropdown ) {
    //   if ( $depth === 0 ) {
    //     $element->classes[] = 'nav-link text-dark';
    //   } elseif ( $depth === 1 ) {
    //     // Extra level of dropdown menu,
    //     // as seen in http://twitter.github.com/bootstrap/components.html#dropdowns
    //     $element->classes[] = 'dropdown-submenu';
    //   }
    // }

    parent::display_element($element, $children_elements, $max_depth, $depth, $args, $output);
  }
}