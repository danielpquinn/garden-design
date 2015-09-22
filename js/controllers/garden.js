
export default class GardenController {

  constructor(browser, garden, $stateParams) {
    this.captionOpen = false
    this.garden = garden
    this.current = 0
    this.next = $stateParams.next
    this.imagePath = browser.mobile ? '/uploads/gardens/mobile/' : '/uploads/gardens/full/'
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