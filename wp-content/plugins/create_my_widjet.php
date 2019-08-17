<?php
/*
 Plugin name: create my widget
 * */



class Social_icons_widget extends WP_Widget {


    public function __construct()
    {
        parent::__construct('social_icons_widget','Social icons widget');
    }

    public function widget($args, $instance)
    {
        echo 'My title is '.$instance['title'];
    }


    public function form($instance)
    {
        $title = ! empty( $instance['title'] ) ? $instance['title'] : '';
        ?>
        <p>
            <label for="<?=$this->get_field_id( 'title' ) ?>">Title:</label>
            <input class="widefat" id="<?=$this->get_field_id( 'title' ) ?>" name="<?=$this->get_field_name( 'title' ) ?>" type="text" value="<?=$title?>">
        </p>
        <?php
    }
//
    public function update($new_instance,$old_instance)
    {
        $instance['title'] = $new_instance['title'];
        return $instance;
    }

}


add_action('widgets_init',function (){

    register_widget('Social_icons_widget');

});