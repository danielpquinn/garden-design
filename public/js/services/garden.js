
import app from '../app'

app.service('gardenService', ($http) => {

  return {
    list() {
      return $http.get('/api/gardens').then((response) => {
        return response.data
      })
    },
    find(slug) {
      return $http.get(`/api/gardens/${slug}`).then((response) => {
        return response.data
      })
    }
  }
})