<?php
/**
 * WordPress Google Widget
 *
 * @package WordPress_Google_Widget
 */

if ( ! class_exists( 'Wpgt_Widget' ) ) {

	/**
	 * Creating the widget
	 *
	 * @since 1.0
	 */
	class Wpgt_Widget extends WP_Widget {

		/**
		 * Default Constructor
		 *
		 * @since 1.0
		 */
		public function __construct() {
			parent::__construct(
				'wpgt_google_translate', // Base ID of your widget.
				__( 'Google Translate', 'wpgt-widget' ), // Widget name will appear in UI.
				array( 'description' => __( 'Translate your WordPress Website', 'wpgt-widget' ) ) // Widget description.
			);
		}

		/**
		 * Creating widget front-end
		 *
		 * @param array $args
		 * @param array $instance
		 * @since 1.0
		 */
		public function widget( $args, $instance ) {

			$title = apply_filters( 'wpgt_widget_title', $instance['title'] );

			// before and after widget arguments are defined by themes.
			echo $args['before_widget'];

			if ( ! empty( $title ) ) {
				echo $args['before_title'] . $title . $args['after_title'];
			}

			if ( isset( $instance['wpgt_translate'] ) && 'on' === $instance['wpgt_translate'] ) {
				wpgt_language_field( 'widget' );
			}

			echo $args['after_widget'];
		}

		/**
		 * Widget Backend
		 *
		 * @param array $instance Widget Instance.
		 * @since 1.0
		 */
		public function form( $instance ) {

			$title = isset( $instance['title'] ) ? $instance['title'] : __( 'Language', 'wpgt-widget' );

			// Widget admin form.
			?>
			<p>
				<label for="<?php esc_attr_e( $this->get_field_id( 'title' ) ); ?>"><?php __( 'Title:', 'wpgt-widget' ); ?></label> 
				<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
			</p>

			<p>
				<label for="<?php echo $this->get_field_id( 'wpgt_translate' ); ?>"><?php _e( 'Enable Google Translator:', 'wpgt-widget' ) ?></label>
				<?php
				$wpgt_translate = '';
				if ( isset( $instance['wpgt_translate'] ) && 'on' === $instance['wpgt_translate'] ) {
					$wpgt_translate = 'checked';
				}
				?>			
				<input class="checkbox" type="checkbox" <?php echo $wpgt_translate;?> id="<?php echo esc_attr( $this->get_field_id('wpgt_translate') ); ?>" name="<?php echo esc_attr( $this->get_field_name('wpgt_translate') ); ?>" />
			</p>
			<?php
		}

		/**
		 * Updating widget replacing old instances with new
		 *
		 * @param array $new_instance New Instance.
		 * @param array $old_instance Old Instance.
		 *
		 * @since 1.0
		 */
		public function update( $new_instance, $old_instance ) {
			$instance                   = array();
			$instance['title']          = ( ! empty( $new_instance['title'] ) ) ? wp_strip_all_tags( $new_instance['title'] ) : '';
			$instance['wpgt_translate'] = ( ! empty( $new_instance['wpgt_translate'] ) ) ? wp_strip_all_tags( $new_instance['wpgt_translate'] ) : '';

			return $instance;
		}
	}
	new Wpgt_Widget();
}
