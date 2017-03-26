<?php
/*
Plugin Name: Bozu Hiding User Profile Fields
Plugin URI:  https://github.com/fcojgodoy/bozu-hiding-user-profile-fields
Description: Remove rarely used user profile fields ()
Version:     0.0.1-dev
Author:      fcojgodoy
Author URI:  https://github.com/fcojgodoy/
License:     GPL3
License URI: https://www.gnu.org/licenses/gpl-3.0.html
Text Domain: bozuhupf
Domain Path: /languages

Bozu Hiding User Profile Fields is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
any later version.

Bozu Hiding User Profile Fields is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with Bozu Hiding User Profile Fields. If not, see https://github.com/fcojgodoy/bozu-hiding-user-profile-fields


/**
 * Hiding User Profile Fields
 */
function bozu_hiding_user_profile_fields()
{
    echo '<style>
        user-admin-color-wrap,
        user-admin-bar-front-wrap,
        user-display-name-wrap,
        user-url-wrap        
        { display: none; }                
    </style>';
}
add_action( 'admin_head-user-edit.php', 'bozu_hiding_user_profile_fields' );
add_action( 'admin_head-profile.php',   'bozu_hiding_user_profile_fields' );
