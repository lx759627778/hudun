<?php
class Options_Framework_Admin
{

    protected $options_screen = null;

    public function init()
    {

        $options = &Options_Framework::_optionsframework_options();

        if ($options) {

            add_action('admin_menu', array($this, 'add_custom_options_page'));

            add_action('admin_enqueue_scripts', array($this, 'enqueue_admin_styles'));
            add_action('admin_enqueue_scripts', array($this, 'enqueue_admin_scripts'));

            add_action('admin_init', array($this, 'settings_init'));

            add_action('wp_before_admin_bar_render', array($this, 'optionsframework_admin_bar'));

        }

    }

    public function settings_init()
    {

        $options_framework = new Options_Framework;
        $name = $options_framework->get_option_name();
        register_setting('optionsframework', $name, array($this, 'validate_options'));

        add_action('optionsframework_after_validate', array($this, 'save_options_notice'));

    }
    public static function menu_settings()
    {

        $menu = array(

            'mode' => 'submenu',

            'page_title' => __('主题设置', 'text_domain'),
            'menu_title' => __('主题设置', 'text_domain'),
            'capability' => 'edit_theme_options',
            'menu_slug' => 'options-framework',
            'parent_slug' => 'themes.php',

            'icon_url' => 'dashicons-admin-generic',
            'position' => '61',

        );

        return apply_filters('optionsframework_menu', $menu);
    }

    public function add_custom_options_page()
    {

        $menu = $this->menu_settings();
        $this->options_screen = add_theme_page(
            $menu['page_title'],
            $menu['menu_title'],
            $menu['capability'],
            $menu['menu_slug'],
            array($this, 'options_page')
        );

    }
    public function enqueue_admin_styles($hook)
    {

        if ($this->options_screen != $hook) {
            return;
        }
        wp_enqueue_style('optionsframework', OPTIONS_FRAMEWORK_DIRECTORY . 'css/optionsframework.css', array(), Options_Framework::VERSION);
        wp_enqueue_style('wp-color-picker');
    }

    public function enqueue_admin_scripts($hook)
    {

        if ($this->options_screen != $hook) {
            return;
        }

        wp_enqueue_script(
            'options-custom',
            OPTIONS_FRAMEWORK_DIRECTORY . 'js/options-custom.js',
            array('jquery', 'wp-color-picker'),
            Options_Framework::VERSION
        );

        add_action('admin_head', array($this, 'of_admin_head'));
    }

    public function of_admin_head()
    {
        do_action('optionsframework_custom_scripts');
    }
    public function options_page()
    {?>

		<div id="optionsframework-wrap" class="wrap">

		<?php $menu = $this->menu_settings();?>
		<h2><?php echo esc_html($menu['page_title']); ?></h2>

	    <h2 class="nav-tab-wrapper">
	        <?php echo Options_Framework_Interface::optionsframework_tabs(); ?>
	    </h2>

	    <?php settings_errors('options-framework');?>

	    <div id="optionsframework-metabox" class="metabox-holder">
		    <div id="optionsframework" class="postbox">
				<form action="options.php" method="post">
				<?php settings_fields('optionsframework');?>
				<?php Options_Framework_Interface::optionsframework_fields();?>
				<div id="optionsframework-submit">
					<input type="submit" class="button-primary" name="update" value="<?php esc_attr_e('Save Options', 'text_domain');?>" />
					<input type="submit" class="reset-button button-secondary" name="reset" value="<?php esc_attr_e('Restore Defaults', 'text_domain');?>" onclick="return confirm( '<?php print esc_js(__('Click OK to reset. Any theme settings will be lost!', 'text_domain'));?>' );" />
					<div class="clear"></div>
				</div>
				</form>
			</div>
		</div>
		<?php do_action('optionsframework_after');?>
		</div>

	<?php
}

    public function validate_options($input)
    {

        if (isset($_POST['reset'])) {
            add_settings_error('options-framework', 'restore_defaults', __('Default options restored.', 'text_domain'), 'updated fade');
            return $this->get_default_values();
        }

        $clean = array();
        $options = &Options_Framework::_optionsframework_options();
        foreach ($options as $option) {

            if (!isset($option['id'])) {
                continue;
            }

            if (!isset($option['type'])) {
                continue;
            }

            $id = preg_replace('/[^a-zA-Z0-9._\-]/', '', strtolower($option['id']));

            if ('checkbox' == $option['type'] && !isset($input[$id])) {
                $input[$id] = false;
            }

            if ('multicheck' == $option['type'] && !isset($input[$id])) {
                foreach ($option['options'] as $key => $value) {
                    $input[$id][$key] = false;
                }
            }

            if (has_filter('of_sanitize_' . $option['type'])) {
                $clean[$id] = apply_filters('of_sanitize_' . $option['type'], $input[$id], $option);
            }
        }

        do_action('optionsframework_after_validate', $clean);

        return $clean;
    }

    public function save_options_notice()
    {
        add_settings_error('options-framework', 'save_options', __('Options saved.', 'text_domain'), 'updated fade');
    }

    public function get_default_values()
    {
        $output = array();
        $config = &Options_Framework::_optionsframework_options();
        foreach ((array) $config as $option) {
            if (!isset($option['id'])) {
                continue;
            }
            if (!isset($option['std'])) {
                continue;
            }
            if (!isset($option['type'])) {
                continue;
            }
            if (has_filter('of_sanitize_' . $option['type'])) {
                $output[$option['id']] = apply_filters('of_sanitize_' . $option['type'], $option['std'], $option);
            }
        }
        return $output;
    }

    public function optionsframework_admin_bar()
    {

        $menu = $this->menu_settings();

        global $wp_admin_bar;

        if ('menu' == $menu['mode']) {
            $href = admin_url('admin.php?page=' . $menu['menu_slug']);
        } else {
            $href = admin_url('themes.php?page=' . $menu['menu_slug']);
        }

        $args = array(
            'parent' => 'appearance',
            'id' => 'of_theme_options',
            'title' => $menu['menu_title'],
            'href' => $href,
        );

        $wp_admin_bar->add_menu(apply_filters('optionsframework_admin_bar', $args));
    }

}