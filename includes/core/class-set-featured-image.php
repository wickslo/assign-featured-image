<?php
/**
 * Set Image
 *
 * Set's the featured image.
 *
 * @category   Core
 * @package    WICKFI
 */
namespace WICKFI;
/** Set Image Class */
class SetImage {
	/** Constructor */
	public function __construct() {
		add_action( 'transition_post_status', array( $this, 'set_featured_image' ), 10, 3 );
	}
	/** Sets the Featured Image of a post
	 *
	 * @param new  $new The new Post Type.
	 * @param old  $old is the old Post Type.
	 * @param post $post The post details.
	 */
	public function set_featured_image( $new, $old, $post ) {
		if ( ( $new== 'publish' ) && ( $old != 'publish' ) && ( $post->post_type == 'post' ) ) {
			$post_id           = $post->ID;
			$featured_image_id = get_post_thumbnail_id( $post_id );
			if ( 'attachment' === get_post_type( $featured_image_id ) ) {
				$array      = array(
					'ID'          => $featured_image_id,
					'post_parent' => $post_id,
				);
				$media_post = wp_update_post( $array, true );
			}
		}
	}
}
