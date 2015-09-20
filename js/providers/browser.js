
import app from '../app'

app.provider('browser', () => {
  var mobile = Math.min(window.innerHeight, window.innerWidth) < 500

  return {
    $get: () => {
      return { mobile }
    }
  }
})