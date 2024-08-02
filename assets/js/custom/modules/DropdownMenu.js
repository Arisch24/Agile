class DropdownMenu {
	constructor() {
		this.dropdownListElement = document.querySelectorAll( '.ag-site-header__navlist-item.has--dropdown' );
		this.dropdownClassSelector = 'dropdown--active';
		this.dropdownBtnSelector = '[data-dropdown-toggle]';
		this.dropdownMenuSelector = '.ag-site-header__navlist-item-dropdown-submenu';

		this.dropdownListElement.forEach( ( el ) => {
			el.addEventListener( 'mouseover', ( e ) => this.toggleDropdown ( el, e ) );
			el.addEventListener( 'mouseout', ( e ) => this.toggleDropdown ( el, e ) );
			el.addEventListener( 'keydown', ( e ) => this.handleKeyPress( el, e ) );
		});
	}

	toggleDropdown( el, e ) {
		const dropdownBtn = el.querySelector( this.dropdownBtnSelector );
		const dropdownMenu = el.querySelector( this.dropdownMenuSelector );
		const isDropdownActive = dropdownMenu.classList.contains( this.dropdownClassSelector );

		if ( e.type === 'mouseover' ) {
			dropdownMenu.classList.add( this.dropdownClassSelector );
		}
		if ( e.type === 'mouseout' ) {
			dropdownMenu.classList.remove( this.dropdownClassSelector );
		}
		if ( e.type === 'keydown' ) {
			isDropdownActive ? dropdownMenu.classList.remove( this.dropdownClassSelector ) : dropdownMenu.classList.add( this.dropdownClassSelector );
		}

		dropdownBtn.setAttribute( 'data-dropdown-toggle', isDropdownActive );
		dropdownBtn.setAttribute( 'aria-expanded', isDropdownActive );
	}

	handleKeyPress( el, event ) {
		if ( event.keyCode !== 32 && event.keyCode !== 13 ) {
			return;
		}
		this.toggleDropdown( el, event );
	}
}

export default DropdownMenu ;
