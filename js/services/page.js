
import app from '../app'

app.service('pageService', ($http, $window) => {

  return {
    find(name) {
      return $http.get(`/api/pages/${name}`).then((response) => {

        // Url encode image urls

        if (response.data.images[0]) {
          response.data.images[0].image = $window.encodeURIComponent(response.data.images[0].image)
        }

        return response.data
      })
    }
  }
})