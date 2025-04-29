<?php 
/** Added all post type
*/
class Rsaddon_pro_Post_Type{
	public function __construct(){
		$this->load_post_type();
	}

	public function load_post_type(){

		$rs_post_type_setting = get_option( 'rselements_addon_option' );
		if( isset( $rs_post_type_setting['rs_team_post'] ) == 'rs_team_post' ) {
			require plugin_dir_path( __FILE__ ). '/team/team.php';		
		}
		if( isset( $rs_post_type_setting['rs_portfolio_post'] ) == 'rs_portfolio_post' ) {
			require plugin_dir_path( __FILE__ ). '/portfolio/portfolio.php';
		}
		if( isset( $rs_post_type_setting['rs_testimonials_post'] ) == 'rs_testimonials_post' ) {
			require plugin_dir_path( __FILE__ ). '/testimonial/testimonial.php';
		}

		if( isset( $rs_post_type_setting['rs_events_post'] ) == 'rs_events_post' ) {
			require plugin_dir_path( __FILE__ ). '/event/event.php';
		}
	}
	
}
new Rsaddon_pro_Post_Type();
