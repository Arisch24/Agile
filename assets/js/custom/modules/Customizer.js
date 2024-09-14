class Customizer {
	constructor() {
		this.containerWidth();
		this.changePreviewPage();
	}

	containerWidth() {
		wp.customize( 'agile_content_width', function( value ) {
			value.bind( ( to ) => {
				document.documentElement.style.setProperty( '--content-width', Number( to ) + 'px' );
			});
		});
	}

	changePreviewPage() {
		console.log( wp.customize._value );
	}
}

export default Customizer;
