
export default class GardenController {

  constructor(browser, garden, $stateParams) {
    this.captionOpen = true
    this.garden = garden
    this.current = 0
    this.next = $stateParams.next
    this.imagePath = browser.mobile ? '/uploads/gardens/mobile/' : '/uploads/gardens/full/'
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

GardenController.$inject = ['browser', 'garden', '$stateParams']