
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

      let getX = (e) => {
        if (e.originalEvent && e.originalEvent.touches) {
          return e.originalEvent.touches[0].clientX
        }
        return e.clientX
      }

      scope.startDrag = (e) => {
        let lastX = 0
        let dir = 1
        let startOffset = scope.offset
        let startX = getX(e)

        $wrapper.addClass('dragging')

        let drag = (e) => {
          let eX = getX(e)
          let minOffset = scope.slideWidth * (scope.images.length - 1) * -1
          let maxOffset = 0

          scope.$apply(() => {
            scope.offset = startOffset + (eX - startX)

            if (scope.offset < minOffset) { scope.offset = minOffset }
            if (scope.offset > maxOffset) { scope.offset = maxOffset }
          })

          dir = (eX > lastX) ? -1 : 1

          lastX = eX
        }

        $w.on('mousemove touchmove', drag)
        $w.on('mouseup touchend', () => {
          $wrapper.removeClass('dragging')
          scope.$apply(() => {
            moveToSlide(scope.currentSlide + dir)
          })
          $w.off('mousemove touchmove', drag)
        })
      }

      $el.on('touchstart', (e) => { scope.startDrag(e) })

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