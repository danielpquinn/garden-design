
import app from '../app'

export default app.animation('.slide-in-out', function () {
  return {
    enter(element, done) {
      element.css({
        'opacity': 0,
        'margin-left': '30px',
        'margin-right': '-30px'
      })
      .velocity({
        'opacity': 1,
        'margin-left': '0px',
        'margin-right': '0px'
      }, 300, done)
    },
    leave(element, done) {
      element.velocity({
        'opacity': 0,
        'margin-left': '-30px',
        'margin-right': '30px'
      }, 300, done)
    }
  }
})