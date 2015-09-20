
// Imports

import app from '../app'

app.directive('centerVertical', ($timeout, $window) => {

  return {
    link: (scope, element, attrs) => {
      var $w = angular.element($window)
      var $el = angular.element(element)

      var position = function () {
        $el.css({
          'margin-top': ($el.parent().height() / 2) - ($el.height() / 2) + 'px'
        })
      }

      $timeout(position, 50)

      $w.on('resize', position)

      scope.$on('$destroy', () => {
        $w.off('resize', position)
      })
    }
  }

})