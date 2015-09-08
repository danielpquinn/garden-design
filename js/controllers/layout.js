
export default class LayoutController {

  constructor() {
    this.menuOpen = false
  }

  toggleMenu() {
    this.menuOpen = !this.menuOpen
  }
}