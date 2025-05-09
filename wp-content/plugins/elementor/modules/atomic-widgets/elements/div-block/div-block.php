<?php
namespace Elementor\Modules\AtomicWidgets\Elements\Div_Block;

use Elementor\Modules\AtomicWidgets\Controls\Types\Link_Control;
use Elementor\Modules\AtomicWidgets\Elements\Atomic_Element_Base;
use Elementor\Modules\AtomicWidgets\Controls\Section;
use Elementor\Modules\AtomicWidgets\Controls\Types\Select_Control;
use Elementor\Modules\AtomicWidgets\PropTypes\Classes_Prop_Type;
use Elementor\Modules\AtomicWidgets\PropTypes\Link_Prop_Type;
use Elementor\Modules\AtomicWidgets\PropTypes\Primitives\String_Prop_Type;
use Elementor\Plugin;
use Elementor\Utils;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

class Div_Block extends Atomic_Element_Base {
	public static function get_type() {
		return 'div-block';
	}

	public static function get_element_type(): string {
		return 'div-block';
	}

	public function get_title() {
		return esc_html__( 'Div Block', 'elementor' );
	}

	public function get_icon() {
		return 'eicon-div-block';
	}

	protected static function define_props_schema(): array {
		return [
			'classes' => Classes_Prop_Type::make()
				->default( [] ),

			'tag' => String_Prop_Type::make()
				->enum( [ 'div', 'header', 'section', 'article', 'aside', 'footer' ] )
				->default( 'div' ),

			'link' => Link_Prop_Type::make(),
		];
	}

	protected function define_atomic_controls(): array {
		return [
			Section::make()
				->set_label( __( 'Settings', 'elementor' ) )
				->set_items( [
					Select_Control::bind_to( 'tag' )
						->set_label( esc_html__( 'HTML Tag', 'elementor' ) )
						->set_options( [
							[
								'value' => 'div',
								'label' => 'Div',
							],
							[
								'value' => 'header',
								'label' => 'Header',
							],
							[
								'value' => 'section',
								'label' => 'Section',
							],
							[
								'value' => 'article',
								'label' => 'Article',
							],
							[
								'value' => 'aside',
								'label' => 'Aside',
							],
							[
								'value' => 'footer',
								'label' => 'Footer',
							],
						]),

					Link_Control::bind_to( 'link' )
						->set_placeholder( __( 'Paste URL or type', 'elementor' ) ),
				]),
		];
	}

	public function get_style_depends() {
		return [ 'div-block' ];
	}

	protected function _get_default_child_type( array $element_data ) {
		if ( 'div-block' === $element_data['elType'] ) {
			return Plugin::$instance->elements_manager->get_element_types( 'div-block' );
		}

		return Plugin::$instance->widgets_manager->get_widget_types( $element_data['widgetType'] );
	}

	protected function content_template() {
		?>
		<?php
	}

	protected function add_render_attributes() {
		parent::add_render_attributes();
		$settings = $this->get_atomic_settings();

		$attributes = [
			'class' => [
				'e-con',
				'e-div-block',
				...( $settings['classes'] ?? [] ),
			],
		];

		if ( ! empty( $settings['link']['href'] ) ) {
			$attributes = array_merge( $attributes, $settings['link'] );
		}

		$this->add_render_attribute( '_wrapper', $attributes );
	}

	public function before_render() {
		?>
		<<?php $this->print_html_tag(); ?> <?php $this->print_render_attribute_string( '_wrapper' ); ?>>
		<?php
	}

	public function after_render() {
		?>
		</<?php $this->print_html_tag(); ?>>
		<?php
	}

	/**
	 * Print safe HTML tag for the element based on the element settings.
	 *
	 * @return void
	 */
	protected function print_html_tag() {
		$html_tag = $this->get_html_tag();
		Utils::print_validated_html_tag( $html_tag );
	}

	protected function get_html_tag(): string {
		$settings = $this->get_atomic_settings();

		return ! empty( $settings['link']['href'] ) ? 'a' : ( $settings['tag'] ?? 'div' );
	}
}
