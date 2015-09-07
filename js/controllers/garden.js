
export default class GardenController {

  constructor(garden) {
    this.captionOpen = true
    this.garden = garden
    this.current = 0
  }

  select(index) {
    if (index === 0) {
      this.captionOpen = true
    }
    this.current = index;
  }

  closeCaption() {
    this.captionOpen = false;
  }
}

GardenController.$inject = ['garden']