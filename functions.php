<?php

load_template(get_template_directory() . '/includes/builder.php', TRUE);

/**
 * Denied access member go to Admin Dashboard and Profile
 * @global type $menu
 * @global type $submenu
 * @global type $user_ID
 * @return boolean
 */

add_action('admin_menu', 'remove_the_dashboard');

function remove_the_dashboard() {
    if (current_user_can('level_10')) 
        return;
    
    global $menu, $submenu, $user_ID;
    $the_user = new WP_User($user_ID);
    reset($menu);
    $page = key($menu);

    while ((__('Dashboard') != $menu[$page][0]) && next($menu))
        $page = key($menu);
    if (__('Dashboard') == $menu[$page][0])
        unset($menu[$page]);
    reset($menu);
    $page = key($menu);
    while (!$the_user->has_cap($menu[$page][1]) && next($menu))
        $page = key($menu);

    if ((preg_match('#wp-admin/?(index.php)?$#', $_SERVER['REQUEST_URI']) && ('index.php' != $menu[$page][2])) || preg_match('#wp-admin/?(profile.php)?$#', $_SERVER['REQUEST_URI']))
        wp_redirect(get_option('siteurl') . '/wp-admin/post-new.php');
}

/**
 *  hide toolbar for subcriber
 */

if(!current_user_can('edit_posts')) {
    show_admin_bar(FALSE);
}