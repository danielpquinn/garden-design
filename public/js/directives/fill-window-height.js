
import app from '../app'

// Make home page image fill the window

app.directive('fillWindowHeight', function ($window, debounce) {
  return {
    link: function (scope, element, attrs) {
      var $win = angular.element($window)
      var $el = angular.element(element)

      var padding = attrs.padding ? parseInt(attrs.padding) : 0

      var resize = function () {
        $el.css({
          height: $window.innerHeight - padding + 'px'
        })
      }

      $win.on('resize', () => {
        debounce(resize, 500)
      })

      scope.$on('$destroy', () => {
        $win.off('resize')
      })

      resize()
    }
  }
})