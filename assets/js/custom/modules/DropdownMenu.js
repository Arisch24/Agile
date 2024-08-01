class DropdownMenu {
	constructor() {
		this.dropdownListElement = document.querySelectorAll( '.ag-site-header__navlist-item.has--dropdown' );
		this.dropdownClassSelector = 'dropdown--active';
		this.dropdownBtnSelector = '[data-dropdown-toggle]';
		this.dropdownMenuSelector = '.ag-site-header__navlist-item-dropdown-submenu';

		this.dropdownListElement.forEach( ( el ) => {
			el.addEventListener( 'mouseover', this.addDropdown.bind( this, el ) );
			el.addEventListener( 'mouseout', this.removeDropdown.bind( this, el ) );
		});
	}

	addDropdown( el  ) {
		const dropdownBtn = el.querySelector( this.dropdownBtnSelector );
		const dropdownMenu = el.querySelector( this.dropdownMenuSelector );

		dropdownMenu.classList.add( this.dropdownClassSelector );

		dropdownBtn.setAttribute( 'data-dropdown-toggle', true );
		dropdownBtn.setAttribute( 'aria-expanded', true );
	}

	removeDropdown( el ) {
		const dropdownBtn = el.querySelector( this.dropdownBtnSelector );
		const dropdownMenu = el.querySelector( this.dropdownMenuSelector );

		dropdownMenu.classList.remove( this.dropdownClassSelector );

		dropdownBtn.setAttribute( 'data-dropdown-toggle', false );
		dropdownBtn.setAttribute( 'aria-expanded', false );
	}
}

export default DropdownMenu ;
