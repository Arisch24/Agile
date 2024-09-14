class Customizer {
	constructor() {
		this.containerWidth();
	}

	containerWidth() {
		wp.customize( 'container_width', function( value ) {
			value.bind( ( to ) => {
				document.documentElement.style.setProperty( '--content-width', Number( to ) + 'px' );
			});
		});
	}
}

export default Customizer;
