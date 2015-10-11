
// Imports

import app from '../app'

app.directive('slider', ($window, $timeout) => {
  return {
    replace: true,
    templateUrl: 'slider.html',
    scope: {
      images: '='
    },
    link(scope, element, attr) {
      let resizeTimeout
      let $w = angular.element($window)
      let $el = angular.element(element)
      let $wrapper = $el.find('.slider-wrapper')

      scope.offset = 0
      scope.slideWidth = 0
      scope.wrapperWidth = 0
      scope.currentSlide = 0

      let getDimensions = () => {
        scope.slideWidth = $el.parent().width()
        scope.wrapperWidth = scope.slideWidth * scope.images.length
      }

      let moveToSlide = (index) => {
        if (index < 0 || index > scope.images.length - 1) { return }
        scope.currentSlide = index
        scope.offset = index * scope.slideWidth * -1
      }

      getDimensions()

      scope.startDrag = (e) => {
        let lastX = 0
        let dir = 1
        let startOffset = scope.offset
        let startX = e.clientX

        let drag = (e) => {
          let minOffset = scope.slideWidth * (scope.images.length - 1) * -1
          let maxOffset = 0

          scope.$apply(() => {
            scope.offset = startOffset + (e.clientX - startX)

            if (scope.offset < minOffset) { scope.offset = minOffset }
            if (scope.offset > maxOffset) { scope.offset = maxOffset }
          })

          dir = (e.clientX > lastX) ? -1 : 1

          lastX = e.clientX
        }

        $w.on('mousemove', drag)
        $w.on('mouseup', () => {
          scope.$apply(() => { 
            moveToSlide(scope.currentSlide + dir)
          })
          $w.off('mousemove', drag)
        })
      }

      $w.on('resize', () => {
        $timeout.cancel(resizeTimeout)
        resizeTimeout = $timeout(() => {
          getDimensions()
          moveToSlide(scope.currentSlide)
        }, 100)
      })

      scope.$on('moveToSlide', (e, slide) => {
        moveToSlide(slide)
      })
    }
  }
})