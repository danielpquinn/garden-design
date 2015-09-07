
import app from '../app'

app.service('pageService', ($http) => {

  return {
    find(name) {
      return $http.get(`/api/pages/${name}`).then((response) => {
        return response.data
      })
    }
  }
})