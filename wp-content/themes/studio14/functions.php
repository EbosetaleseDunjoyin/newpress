<?php

function studio_files()
{

    wp_enqueue_style('bootstrap_styles', '//cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css');
    wp_enqueue_style('bootstrap_icon_styles', '//cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css');
    wp_enqueue_script('bootstrap_script', '//cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js', null, '1.0', true);
    wp_enqueue_style('studio14_styles', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'studio_files',);



function title_features()
{
    add_theme_support('title-tag');
}
add_action('after_setup_theme', 'title_features');


// Site Settings -----------------------------------------------
function display_siteLogo_element()
{
?>

    <input type="file" name="logo" /><br><br>
    <img style="width:auto; height:60px;"src=" <?php echo get_option('logo'); ?>" alt="">

<?php
}

function handle_logo_upload()
{
    if (!empty($_FILES["demo-file"]["tmp_name"])) {
        $urls = wp_handle_upload($_FILES["logo"], array('test_form' => FALSE));
        $temp = $urls["url"];
        return $temp;
    }

    return get_theme_file_uri('/asset/logo.png');
}

function display_phone_element()
{
?>
    <input type="text" name="phone" id="phone" value="<?php echo get_option('phone'); ?>" />
<?php
}

function display_email_element()
{
?>
    <input type="text" name="email" id="email" value="<?php echo get_option('email'); ?>" />
<?php
}
function display_address_element()
{
?>

    <textarea type="text" name="address" id="address" value="" cols="25" rows="7"><?php echo get_option('address'); ?></textarea>
<?php
}

function display_instagram_element()
{
?>
    <input type="text" name="instagram_url" id="instagram_url" value="<?php echo get_option('instagram_url'); ?>" />
<?php
}

function display_facebook_element()
{
?>
    <input type="text" name="facebook_url" id="facebook_url" value="<?php echo get_option('facebook_url'); ?>" />
<?php
}

function display_youtube_element()
{
?>
    <input type="text" name="youtube_url" id="youtube_url" value="<?php echo get_option('youtube_url'); ?>" />
<?php
}

function display_theme_panel_fields()
{
    add_settings_section("section", "All Settings", null, "theme-options");

    add_settings_field("logo", "Site Logo", "display_siteLogo_element", "theme-options", "section");



    add_settings_field("address", "Address", "display_address_element", "theme-options", "section");
    add_settings_field("email", "E-mail", "display_email_element", "theme-options", "section");
    add_settings_field("phone", "Phone-No", "display_phone_element", "theme-options", "section");
    add_settings_field("facebook_url", "Facebook Profile Url", "display_facebook_element", "theme-options", "section");
    add_settings_field("instagram_url", "Instagram Profile Url", "display_instagram_element", "theme-options", "section");
    add_settings_field("youtube_url", "Youtube Profile Url", "display_youtube_element", "theme-options", "section");

    register_setting("section", "youtube_url");
    register_setting("section", "facebook_url");
    register_setting("section", "instagram_url");
    register_setting("section", "email");
    register_setting("section", "phone");
    register_setting("section", "address");

    register_setting("section", "logo", "handle_logo_upload");
}

add_action("admin_init", "display_theme_panel_fields");
function theme_settings_page()
{
?>
    <div class="wrap">
        <h1>Studio14 Panel</h1>
        <form method="post" action="options.php">
            <?php
            settings_fields("section");
            do_settings_sections("theme-options");
            submit_button();
            ?>
        </form>
    </div>
<?php
}

function add_theme_menu_item()
{
    add_menu_page("Studio14", "Studio14 Theme", "manage_options", "theme-panel", "theme_settings_page", null, 99);
}

add_action("admin_menu", "add_theme_menu_item");
