
import app from '../app'

app.service('pressLinkService', ($http) => {

  return {
    list() {
      return $http.get('/api/press-links').then((response) => {
        return response.data
      })
    }
  }
})