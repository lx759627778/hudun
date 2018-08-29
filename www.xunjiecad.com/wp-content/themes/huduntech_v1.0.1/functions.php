<?php
require get_template_directory() . '/inc/function.php';
require get_template_directory() . '/inc/clean.php';
require get_template_directory() . '/inc/template-tag.php';
require get_template_directory() . '/inc/theme-settings/options-framework.php';
load_template(locate_template('options.php'));
