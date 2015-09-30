
// Imports

import app from '../app'

app.directive('galleryImage', ($timeout, $window) => {

  return {
    link: (scope, element, attrs) => {
      var $el = angular.element(element)
      var ratio = 1100 / 1920

      var resize = function () {
        var elHeight = $el.height()
        var elWidth = $el.width()
        var $images = $el.find('img')
        var $captions = $el.find('.caption')

        if (elHeight / elWidth > ratio) {
          $images.each(function() {
            angular.element(this).css({
              width: elWidth + 'px',
              height: elWidth * ratio + 'px'
            })
          })
          $captions.each(function () {
            angular.element(this).css({
              height: elWidth * ratio + 'px'
            })
          })
        } else {
          $images.each(function () {
            angular.element(this).css({
              width: elHeight / ratio + 'px',
              height: elHeight + 'px'
            })
          })
          $captions.each(function () {
            angular.element(this).css({
              height: elHeight + 'px'
            })
          })
        }
      }

      angular.element($window).bind('resize', resize)

      $timeout(resize)
    }
  }

})