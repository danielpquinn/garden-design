
export default class PressController {

  constructor(pressItems, pressLinks) {
    this.pressItems = pressItems
    this.pressLinks = pressLinks
  }
}

PressController.$inject = [ 'pressItems', 'pressLinks' ]