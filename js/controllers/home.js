
export default class HomeController {

  constructor($scope, $interval, browserService, page) {
    var interval = $interval(() => { this.rotate() }, 3000)

    console.log(browserService)

    this.current = 0
    this.page = page

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

HomeController.$inject = ['$scope', '$interval', 'page', 'browserService']