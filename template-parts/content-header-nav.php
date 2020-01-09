
<?php $defaults = array(
        'theme_location' => 'menu_principal',
        'menu'              => '', // (int|string|WP_Term) Desired menu. Accepts a menu ID, slug, name, or object.
        'menu_class'        => 'nav-menu', // (string) CSS class to use for the ul element which forms the menu. Default 'menu'.
        'menu_id'           => '', // (string) The ID that is applied to the ul element which forms the menu. Default is the menu slug, incremented.
        'container'         => 'nav', // (string) Whether to wrap the ul, and what to wrap it with. Default 'div'.
        'container_class'   => 'menu-{menu slug}-container', // (string) Class that is applied to the container. Default 'menu-{menu slug}-container'.
        'container_id'      => "nav-menu-container", // (string) The ID that is applied to the container.
        'fallback_cb'       => 'wp_page_menu', // (callable|bool) If the menu doesn't exists, a callback function will fire. Default is 'wp_page_menu'. Set to false for no fallback.
        'before'            => '', // (string) Text before the link markup.
        'after'             => '', // (string) Text after the link markup.
        'link_before'       => '', // (string) Text before the link text.
        'link_after'        => '', // (string) Text after the link text.
        'echo'              => true, // (bool) Whether to echo the menu or return it. Default true.
        'depth'             => 0, // (int) How many levels of the hierarchy are to be included. 0 means all. Default 0.
        'walker'            => '', // (object) Instance of a custom walker class.user.
        'items_wrap'        => '<ul id="%1$s" class="%2$s">%3$s</ul>', // (string) How the list items should be wrapped. Default is a ul with an id and class. Uses printf() format with numbered placeholders.
        'item_spacing'      => '', // (string) Whether to preserve whitespace within the menu's HTML. Accepts 'preserve' or 'discard'. Default 'preserve'.
         );
          wp_nav_menu( $defaults );
?>