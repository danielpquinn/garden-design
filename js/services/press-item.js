
import app from '../app'

app.service('pressItemService', ($http) => {

  return {
    list() {
      return $http.get('/api/press-items').then((response) => {
        return response.data
      })
    }
  }
})