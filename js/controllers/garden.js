
export default class GardenController {

  constructor($sce, browser, garden, $scope) {
    this.imagePath = browser.mobile ? '/uploads/gardens/mobile/' : '/uploads/gardens/full/'
    this.captionOpen = false
    this.garden = garden
    this.trustedDescription = $sce.trustAsHtml(garden.description)
    this.current = 0
    this.$scope = $scope

    this.images = garden.images.map((image) => {
      return {
        image: `${this.imagePath}${image.image}`,
        name: image.name
      }
    })
  }

  select(index) {
    this.current = index
    this.$scope.$broadcast('moveToSlide', index)
  }

  closeCaption() {
    this.captionOpen = false
  }

  openCaption() {
    this.captionOpen = true
  }
}

GardenController.$inject = ['$sce', 'browser', 'garden', '$scope' ]