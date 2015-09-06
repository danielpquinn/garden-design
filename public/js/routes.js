
import app from './app'

import GardenController from './controllers/garden'
import GardensController from './controllers/gardens'
import PressController from './controllers/press'

app.config(function ($stateProvider, $urlRouterProvider) {

  $urlRouterProvider.otherwise('/')

  $stateProvider.state('default', {
    templateUrl: 'layout.html'
  })

  $stateProvider.state('default.home', {
    url: '/',
    templateUrl: 'home.html'
  })

  $stateProvider.state('default.gardens', {
    url: '/gardens',
    templateUrl: 'gardens.html',
    controller: GardensController,
    controllerAs: 'gardens'
  })

  $stateProvider.state('default.garden', {
    url: '/gardens/:gardenSlug',
    templateUrl: 'garden.html',
    controller: GardenController,
    controllerAs: 'garden'
  })

  $stateProvider.state('default.about', {
    url: '/about',
    templateUrl: 'about.html'
  })

  $stateProvider.state('default.press', {
    url: '/press',
    controller: PressController,
    controllerAs: 'press',
    templateUrl: 'press.html'
  })

  $stateProvider.state('default.contact', {
    url: '/contact',
    templateUrl: 'contact.html'
  })

  $stateProvider.state('default.houzz', {
    url: '/houzz',
    templateUrl: 'houzz.html'
  })
})