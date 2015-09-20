
export default class GardenController {

  constructor(browser, garden, $stateParams) {
    this.captionOpen = false
    this.garden = garden
    this.current = 0
    this.next = $stateParams.next
    this.imagePath = browser.mobile ? '/uploads/gardens/mobile/' : '/uploads/gardens/full/'

    if (this.garden.images.length < 10) {
      for (var i = this.garden.images.length; i < 10; i += 1) {
        this.garden.images[i] = this.garden.images[0]
      }
    }
  }

  select(index) {
    this.current = index;
  }

  closeCaption() {
    this.captionOpen = false;
  }

  openCaption() {
    this.captionOpen = true
  }
}

GardenController.$inject = ['browser', 'garden', '$stateParams']