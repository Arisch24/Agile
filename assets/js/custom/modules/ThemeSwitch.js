class ThemeSwitch {
	constructor() {
		this.toggleButton = document.querySelector( '.ag-toggle-checkbox' );

		if ( ! this.toggleButton ) {
			return;
		}
		this.getUserPreference();
		this.toggleButton.addEventListener( 'click', this.changeColorScheme.bind( this ) );
	}

	// Get user preference from local storage
	getUserPreference() {
		const userPreference = localStorage.getItem( 'ag-prefers-color-scheme' );

		// Set the initial color scheme based on user preference
		if ( 'alt' === userPreference ) {
			document.documentElement.classList.add( 'color-scheme--alt' );
			this.toggleButton.checked = false;
		} else {
			document.documentElement.classList.remove( 'color-scheme--alt' );
			this.toggleButton.checked = true;
		}
	}

	// Toggle color scheme when button is clicked
	changeColorScheme() {
		const currentScheme = document.documentElement.classList.contains( 'color-scheme--alt' ) ? 'alt' : 'main';
		if ( 'main' === currentScheme ) {
			document.documentElement.classList.add( 'color-scheme--alt' );
			localStorage.setItem( 'prefers-color-scheme', 'alt' );
		} else {
			document.documentElement.classList.remove( 'color-scheme--alt' );
			localStorage.setItem( 'prefers-color-scheme', 'main' );
		}
	}
}

export default ThemeSwitch;
