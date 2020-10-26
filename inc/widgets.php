<?php
/* register widget */

// widgets dla listy ofert

function custom_register_widget()
{
    register_widget('oferta_widget');
    register_widget('events_widget');
    register_widget('group_list_widget');
}

add_action('widgets_init', 'custom_register_widget');

class oferta_widget extends WP_Widget
{
    function __construct()
    {
        parent::__construct(
            // widget ID
            'oferta_widget',
            // widget name
            __('Lista Ofert', 'oferta_widget_domain'),
            // widget description
            array('description' => __('Lista ofert przedszkola', 'oferta_widget_domain'),)
        );
    }
    public function widget($args, $instance)
    {
        $title = apply_filters('widget_title', $instance['title']);
        echo $args['before_widget'];
        //if title is present
        if (!empty($title))
            echo $args['before_title'] . $title . $args['after_title'];
        //output
        $oferta = new WP_Query(array(
            'post_type' => 'oferta',
            'orderby' => 'title',
            'order' => 'ASC',
        ));

        while ($oferta->have_posts()) {
            $oferta->the_post();
?>
            <p><a href="<?php the_permalink(); ?>">
                    <?php __(the_title(), 'oferta_widget_domain'); ?>
                </a></p>
        <?php        }

        echo $args['after_widget'];
    }
    public function form($instance)
    {
        if (isset($instance['title']))
            $title = $instance['title'];
        else
            $title = __('Oferta zajeć dla dzieci', 'oferta_widget_domain');
        ?>
        <p>
            <label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_attr($title); ?>" />
        </p>
        <p>
            <label for="<?php ?>"></label>
        </p>
        <?php
    }
    public function update($new_instance, $old_instance)
    {
        $instance = array();
        $instance['title'] = (!empty($new_instance['title'])) ? strip_tags($new_instance['title']) : '';
        return $instance;
    }
}


class events_widget extends WP_Widget
{
    function __construct()
    {
        parent::__construct(
            // widget ID
            'events_widget',
            // widget name
            __('Lista Wydarzeń', 'events_widget_domain'),
            // widget description
            array('description' => __('Lista aktualnych wydarzeń', 'events_widget_domain'),)
        );
    }
    public function widget($args, $instance)
    {
        $title = apply_filters('widget_title', $instance['title']);
        echo $args['before_widget'];
        //if title is present
        if (!empty($title))
            echo $args['before_title'] . $title . $args['after_title'];
        //output
        $today = date('Ymd');
        $homepageEvents = new WP_Query(array(
            'post_per_page' => -1,
            'post_type' => 'event',
            'meta_key' => 'event_date',
            'orderby' => 'meta_value_num',
            'order' => 'ASC',
            'meta_query' => array(
                array(
                    'key' => 'event_date',
                    'compare' => '>=',
                    'value' => $today,
                    'type' => 'numeric',
                )
            )
        ));

        while ($homepageEvents->have_posts()) {
            $homepageEvents->the_post();

        ?>
            <p><a href="<?php the_permalink(); ?>">
                    <?php __(the_title(), 'events_widget_domain'); ?>
                </a><span class="text-info"> <?php $eventDate = new DateTime(get_field('event_date'));
                                                echo __($eventDate->format('d.m.Y') . 'r', 'events_widget_domain'); ?></span></p>
        <?php        }

        echo $args['after_widget'];
    }
    public function form($instance)
    {
        if (isset($instance['title']))
            $title = $instance['title'];
        else
            $title = __('Aktualne Wydarzenia', 'events_widget_domain');
        ?>
        <p>
            <label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_attr($title); ?>" />
        </p>
        <p>
            <label for="<?php ?>"></label>
        </p>
        <?php
    }
    public function update($new_instance, $old_instance)
    {
        $instance = array();
        $instance['title'] = (!empty($new_instance['title'])) ? strip_tags($new_instance['title']) : '';
        return $instance;
    }
}



class group_list_widget extends WP_Widget
{
    function __construct()
    {
        parent::__construct(
            // widget ID
            'group_list_widget',
            // widget name
            __('Lista grup', 'group_list_widget_domain'),
            // widget description
            array('description' => __('Lista wszystkich grup przedszkolnych', 'group_list_widget_domain'),)
        );
    }
    public function widget($args, $instance)
    {
        $title = apply_filters('widget_title', $instance['title']);
        echo $args['before_widget'];
        //if title is present
        if (!empty($title))
            echo $args['before_title'] . $title . $args['after_title'];
        //output
        $today = date('Ymd');
        $homepageEvents = new WP_Query(array(
            'post_per_page' => -1,
            'post_type' => 'grupy',
            'orderby' => 'title',
            'order' => 'ASC',
        ));

        while ($homepageEvents->have_posts()) {
            $homepageEvents->the_post();

        ?>
            <div>
                <a href="<?php the_permalink(); ?>">
                    <img src=" <?php __(the_post_thumbnail_url('teacherSamall'), 'group_list_widget_domain'); ?>">
                    <p> <?php __(the_title(), 'group_list_widget_domain'); ?></p>
                </a>
            </div>
        <?php        }

        echo $args['after_widget'];
    }
    public function form($instance)
    {
        if (isset($instance['title']))
            $title = $instance['title'];
        else
            $title = __('Nasze grupy', 'group_list_widget_domain');
        ?>
        <p>
            <label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_attr($title); ?>" />
        </p>
        <p>
            <label for="<?php ?>"></label>
        </p>
<?php
    }
    public function update($new_instance, $old_instance)
    {
        $instance = array();
        $instance['title'] = (!empty($new_instance['title'])) ? strip_tags($new_instance['title']) : '';
        return $instance;
    }
}
