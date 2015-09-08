
import app from '../app'

app.provider('browser', () => {
  var mobile = (typeof USER_AGENT === 'string') ? (USER_AGENT.toLowerCase().indexOf('mobile') >= 0) : false

  return {
    $get: () => {
      return { mobile }
    }
  }
})