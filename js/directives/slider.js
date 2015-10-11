
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
      let dragging = false
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
        console.log('moving to ', index)
        delete scope.wrapperClass
        if (index < 0 || index > scope.images.length - 1) { return }
        scope.currentSlide = index
        scope.offset = index * scope.slideWidth * -1
      }

      getDimensions()

      let getX = (e) => {
        if (e.originalEvent && e.originalEvent.touches) {
          return e.originalEvent.touches[0].clientX
        }
        return e.clientX
      }

      scope.startDrag = (e) => {

        console.log('dragging')
        if (dragging) { return }

        dragging = true

        let lastX = 0
        let dir = 1
        let startOffset = scope.offset
        let startX = getX(e)

        let drag = (e) => {
          let eX = getX(e)
          let minOffset = scope.slideWidth * (scope.images.length - 1) * -1
          let maxOffset = 0

          scope.$apply(() => {
            scope.wrapperClass = 'dragging'
            scope.offset = startOffset + (eX - startX)

            if (scope.offset < minOffset) { scope.offset = minOffset }
            if (scope.offset > maxOffset) { scope.offset = maxOffset }
          })

          dir = (eX > lastX) ? -1 : 1

          lastX = eX
        }

        let stop = () => {
          scope.$apply(() => {
            dragging = false
            moveToSlide(scope.currentSlide + dir)
          })
          $w.off('mousemove touchmove', drag)
          $w.off('touchend', stop)
        }

        $w.on('touchmove', drag)
        $w.on('touchend', stop)
      }

      $el.on('touchstart', scope.startDrag)

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