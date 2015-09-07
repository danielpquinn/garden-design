
export default class GardenController {

  constructor(garden) {
    this.captionOpen = true
    this.garden = garden
    this.selected = garden.images[0]
  }

  select(image) {
    this.captionOpen = true;
    this.selected = image;
  }

  closeCaption() {
    this.captionOpen = false;
  }
}

GardenController.$inject = ['garden']