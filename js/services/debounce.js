
import app from '../app'

app.service('debounceService', () => {
  var timeout

  return function (fn, delay) {
    clearTimeout(timeout)
    timeout = setTimeout(fn, delay)
  }
})