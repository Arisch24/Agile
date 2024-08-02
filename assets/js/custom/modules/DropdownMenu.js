class DropdownMenu {
	constructor() {

		// Selectors
		this.dropdownClassSelector = 'dropdown--active';
		this.dropdownBtnSelector = '[data-dropdown-toggle]';
		this.dropdownMenuSelector = '.ag-site-header__navlist-item-dropdown-submenu';

		// Query Selector All Items
		this.dropdownListArr = document.querySelectorAll( '.ag-site-header__navlist-item.has--dropdown' );
		this.dropdownBtnArr = document.querySelectorAll( this.dropdownBtnSelector );

		this.init();
	}

	init() {
		this.dropdownListArr.forEach( ( listItem ) => {
			listItem.addEventListener( 'mouseenter', ( e ) => this.addDropdown( listItem, e ) );
			listItem.addEventListener( 'mouseleave', ( e ) => this.removeDropdown( listItem, e ) );
		});

		this.dropdownBtnArr.forEach( ( button ) => {
			button.addEventListener( 'keydown', ( e ) => this.handleKeyPress( button, e ) );

			// button.addEventListener( 'focusin', ( e ) => this.addDropdown( button, e ) );
			button.addEventListener( 'focusout', ( e ) => this.removeDropdown( button, e ) );
		});
	}

	addDropdown( listItem ) {
		const dropdownBtn = listItem.querySelector( this.dropdownBtnSelector );
		const dropdownMenu = listItem.querySelector( this.dropdownMenuSelector );

		dropdownMenu.classList.add( this.dropdownClassSelector );

		this.setAttributes( dropdownBtn, true );
	}

	removeDropdown( listItem ) {
		const dropdownBtn = listItem.querySelector( this.dropdownBtnSelector );
		const dropdownMenu = listItem.querySelector( this.dropdownMenuSelector );

		dropdownMenu.classList.remove( this.dropdownClassSelector );

		this.setAttributes( dropdownBtn, false );
	}

	setAttributes( btn, dataAttr ) {
		btn.setAttribute( 'data-dropdown-toggle', dataAttr );
		btn.setAttribute( 'aria-expanded', dataAttr );
	}

	handleKeyPress( button, event ) {
		if ( event.keyCode !== 32 && event.keyCode !== 13 && event.keyCode !== 27 ) {
			return;
		}
		const parentEl = button.parentNode.parentNode;

		button.parentNode.nextElementSibling.classList.contains( this.dropdownClassSelector ) ? this.removeDropdown( parentEl ) : this.addDropdown( parentEl );
	}
}

export default DropdownMenu ;
