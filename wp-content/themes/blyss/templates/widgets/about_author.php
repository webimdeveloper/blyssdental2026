<?php

$module = $args['module'] ? $args['module'] : null;

if ( ! $module ) {
    return;
}

?>

<?= $module->widget_args['before_widget'] ?>

<?= $module->widget_args['before_title'] . $module->get_widget_title() . $module->widget_args['after_title'] ?>

    <div class="side_bar_body">
        <div class="side_bar_about">
            <div class="side_bar_about_author">
                <img src="<?php echo $module->get_author_avatar(); ?>">
                <p><?php echo $module->get_author_name(); ?></p>
            </div>
            <div class="side_bar_text">
                <p><?php echo $module->get_author_description(); ?></p>
            </div>
            <a href="<?php echo $module->get_author_link(); ?>" class="main-btn"><?php echo $module->get_author_button(); ?></a>
        </div>
    </div>

<?= $module->widget_args['after_widget'] ?>