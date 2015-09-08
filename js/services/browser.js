
import app from '../app'

app.service('browserService', () => {
  return {
    mobile: (typeof UA === 'string') ? (UA.toLowerCase().indexOf('mobile') >= 0) : false
  }
})