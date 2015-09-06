
import app from '../app'

app.service('debounce', () => {
  var timeout

  return function (fn, delay) {
    clearTimeout(timeout)
    timeout = setTimeout(fn, delay)
  }
})