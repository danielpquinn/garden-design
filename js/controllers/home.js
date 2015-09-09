
export default class HomeController {

  constructor(browser, $scope, $interval, page) {
    var interval = $interval(() => { this.rotate() }, 5000)

    this.current = 0
    this.page = page
    this.imagePath = browser.mobile ? '/uploads/pages/mobile/' : '/uploads/pages/full/'

    $scope.$on('$destroy', () => {
      $interval.cancel(interval)
    })
  }

  rotate() {
    this.current += 1

    if (this.current > this.page.images.length - 1) {
      this.current = 0
    }
  }
}

HomeController.$inject = ['browser', '$scope', '$interval', 'page']