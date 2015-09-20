
export default class LayoutController {

  constructor($state) {
    this.menuOpen = false

    this.state = $state;
  }

  toggleMenu() {
    this.menuOpen = !this.menuOpen
  }
}

LayoutController.$inject = [ '$state' ];