class MobileMenu {
	constructor() {
		this.navToggle = document.querySelector('[data-nav-toggle]');
		// this.navMenu = document.querySelector('[data-nav-list]');
		this.navMenu = document.querySelector('.ag-site-header__navigation');
		this.navToggle.addEventListener('click', this.toggleMenu.bind(this));
	}

	toggleMenu() {
		this.navMenu.classList.toggle('navigation--active');
		this.navToggle.setAttribute('data-nav-toggle', this.navMenu.classList.contains('nav-menu--active'));
		this.navToggle.setAttribute('aria-expanded', this.navMenu.classList.contains('nav-menu--active'));
	}
}

export default MobileMenu;
