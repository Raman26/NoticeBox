<?php
/**
 * @package Notice Box
*/

/* 
Plugin Name: Notice Box
Plugin URI: https://github.com/Raman26/CrudLaravel
Description: This is notice box plugin to alter the default wp menu.
Version: 1.0.0
Author: Ramanjeet Kaur
Author URI: https://raman26.github.io/profile/
License: GPLv2 or later
*/

add_shortcode('notice_box','get_notice_box_menu');

function get_notice_box_menu() {

    $role ="customer";

    if(!is_user_logged_in()) {
        //$role = get_bloginfo('name');
    } else {
        $current_user = wp_get_current_user();
        $roles = $current_user->roles;

        foreach($roles as $role) {
            $role = $role;
        }
    }

    $html="";
    $html.='<div class="bd-alert">';

    if($role == "administrator" or $role == "customer") {
    $html .=  '
        <div class="alert alert-danger alert-dismissible" role="alert">
            <b>Danger!</b> Indicates a dangerous or potentially negative action.
            <button type="button" class="close" id="alert-danger" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div>';
    }

    if($role == "administrator" or $role == "subscriber") {
    $html .= '
        <div class="alert alert-success alert-dismissible" role="alert">
        <b>Success!</b> Indicates a successful or positive action.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close" onclick = " this.hidden=true ">
                <span aria-hidden="true">×</span>
            </button>
        </div>';
    }

    if($role == "administrator" or $role == "customer") {
    $html .= '
        <div class="alert alert-info alert-dismissible" role="alert">
        <b>Info!</b> Indicates a neutral information change or action.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div>';
    }

    if($role == "administrator" or $role == "subscriber") {
    $html .= '
        <div class="alert alert-warning alert-dismissible" role="alert">
        <b>Warning!</b> Indicates a warning that might need attention.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div>';
    }

    $html .= '</div>';

    return $html;
}


add_action('wp_print_styles','tb_css');
function tb_css() {
    echo '<style>
   
    .alert {
        position: relative;
        padding: .75rem 1.25rem;
        margin-bottom: 1rem;
        border: 1px solid transparent;
        border-radius: .25rem;
        width:100%
    }

    .alert-success {
        color: #155724;
        background-color: #d4edda;
        border-color: #c3e6cb;
    }

    .alert-danger {
        color: #721c24;
        background-color: #f8d7da;
        border-color: #f5c6cb;
    }
    .alert-warning {
        color: #856404;
        background-color: #fff3cd;
        border-color: #ffeeba;
    }
    .alert-info {
        color: #0c5460;
        background-color: #d1ecf1;
        border-color: #bee5eb;
    }
    *, ::after, ::before {
        box-sizing: border-box;
    }

    .bd-alert {
        position: relative;
    }

    .alert-dismissible .close {
        position: absolute;
        top: 0;
        right: 0;
        padding: .75rem 0.25rem !important;
        color: inherit;
    }
    .bd-alert::after {
        display: block;
        clear: both;
        content: "";
    }
    .bd-alert button.close {
        padding: 0;
        background-color: transparent !important;
        border: 0;
        -webkit-appearance: none;
    }
    .close:not(:disabled):not(.disabled) {
        cursor: pointer;
    }
    .close {
        float: right;
        font-size: 1.5rem;
        font-weight: 700;
        line-height: 1;
        color: #000 !important;
        text-shadow: 0 1px 0 #fff;
        opacity: .5;
    }
    .bd-alert button {
        text-transform: none;
        overflow: visible;
        margin: 0;
        font-family: inherit;
        border-radius: 0;
    }

    </style>';
}

add_action('wp_enqueue_scripts', 'load_js' );
function load_js(){
    wp_register_script( 
        'noticebox', 
        plugins_url('noticebox.js', __FILE__), 
        array('jquery'), 
        false, 
        true 
    );
    wp_enqueue_script('noticebox');
}