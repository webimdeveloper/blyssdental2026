<?php

use WP_Widget;

class about_author extends WP_Widget {
    public $widget_args, $widget_instance;
    public $id_base = 'about_author';

    public function __construct()
    {
        $widget_options  = [
            'classname'   => $this->id_base,
            'description' => 'Widget block about the author.',
        ];
        $control_options = [
            'width'   => 250,
            'height'  => 350,
            'id_base' => $this->id_base,
        ];
        parent::__construct( $this->id_base, 'About Author', $widget_options, $control_options );
    }

    /**
     * Update widget settings.
     *
     * @param array $new_instance
     * @param array $old_instance
     *
     * @return array
     */
    public function update( $new_instance, $old_instance ) {
        $instance           = $old_instance;
        $instance['title']  = sanitize_text_field( $new_instance['title'] );
        $instance['link']  = sanitize_text_field( $new_instance['link'] );
        $instance['button']  = sanitize_text_field( $new_instance['button'] );

        return $instance;
    }

    /**
     * Widget form.
     *
     * @param array $instance Current settings.
     *
     * @return void
     */
    public function form( $instance ) {
        $title  = $instance['title'] ? $instance['title'] : '';
        $link  = $instance['link'] ? $instance['link'] : '';
        $button  = $instance['button'] ? $instance['button'] : '';
        ?>

        <p class="desc">
            <?= $this->widget_options['description'] ?>
        </p>

        <p>
            <label for="<?= $this->get_field_id( 'title' ) ?>">
                <?php _e( 'Title:' ) ?>
            </label>
            <input class="widefat"
                   id="<?= $this->get_field_id( 'title' ) ?>"
                   name="<?= $this->get_field_name( 'title' ) ?>"
                   type="text"
                   value="<?= esc_attr( $title ) ?>"
            />
        </p>

        <p>
            <label for="<?= $this->get_field_id( 'link' ) ?>">
                <?php _e( 'Link:' ) ?>
            </label>
            <input class="widefat"
                   id="<?= $this->get_field_id( 'link' ) ?>"
                   name="<?= $this->get_field_name( 'link' ) ?>"
                   type="text"
                   value="<?= esc_attr( $link ) ?>"
            />
        </p>

        <p>
            <label for="<?= $this->get_field_id( 'button' ) ?>">
                <?php _e( 'Button:' ) ?>
            </label>
            <input class="widefat"
                   id="<?= $this->get_field_id( 'button' ) ?>"
                   name="<?= $this->get_field_name( 'button' ) ?>"
                   type="text"
                   value="<?= esc_attr( $button ) ?>"
            />
        </p>

        <?php
    }

    /**
     * Widget content.
     *
     * @param array $args
     * @param array $instance
     *
     * @return void
     */
    public function widget( $args, $instance ): void {
        $this->widget_args     = $args;
        $this->widget_instance = $instance;

        get_template_part( '/templates/widgets/about_author', null, [ 'module' => $this ] );
    }

    /**
     * Return widget title.
     *
     * @return string
     */
    public function get_widget_title() {
        $title = empty( $this->widget_instance['title'] ) ? 'About the Author' : $this->widget_instance['title'];
        $title = apply_filters( 'widget_title', $title, $this->widget_instance, $this->id_base );

        return esc_html( $title );
    }

    /**
     * Return widget link.
     *
     * @return string
     */
    public function get_author_link() {
        $link = empty( $this->widget_instance['link'] ) ? '/' : $this->widget_instance['link'];

        return esc_html( $link );
    }

    /**
     * Return widget button.
     *
     * @return string
     */
    public function get_author_button() {
        $button = empty( $this->widget_instance['button'] ) ? 'About the Author' : $this->widget_instance['button'];

        return esc_html( $button );
    }

    /**
     * Return author name.
     *
     * @return string
     */
    public function get_author_name()
    {
        global $post;

        return get_the_author_meta('display_name', $post->post_author);
    }

    /**
     * Return author description.
     *
     * @return string
     */
    public function get_author_description()
    {
        global $post;

        return get_the_author_meta('description', $post->post_author);
    }

    /**
     * Return author avatar.
     *
     * @return string
     */
    public function get_author_avatar()
    {
        global $post;

        return get_avatar_url($post->post_author);
    }
}