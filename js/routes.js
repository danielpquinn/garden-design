
import app from './app'

import HomeController from './controllers/home'
import GardenController from './controllers/garden'
import GardensController from './controllers/gardens'
import LayoutController from './controllers/layout'
import PressController from './controllers/press'

app.config(function ($stateProvider, $urlRouterProvider, $locationProvider) {

  var pageFinder = function (name) {
    return {
      controller: ($scope, $sce, page) => {
        $scope.page = page;
        $scope.page.content = $sce.trustAsHtml(page.content)
      },
      resolve: {
        page: (pageService) => {
          return pageService.find(name)
        }
      }
    }
  }

  $locationProvider.html5Mode(true)

  $urlRouterProvider.otherwise('/')

  $stateProvider.state('default', {
    controller: LayoutController,
    controllerAs: 'layout',
    templateUrl: 'layout.html'
  })

  $stateProvider.state('default.home', {
    url: '/',
    templateUrl: 'home.html',
    controller: HomeController,
    controllerAs: 'home',
    resolve: {
      page: (pageService) => {
        return pageService.find('Home')
      }
    }
  })

  $stateProvider.state('default.gardens', {
    url: '/gardens',
    templateUrl: 'gardens.html',
    controller: GardensController,
    controllerAs: 'gardens',
    resolve: {
      gardens: (gardenService) => {
        return gardenService.list()
      }
    }
  })

  $stateProvider.state('default.garden', {
    url: '/gardens/:slug',
    templateUrl: 'garden.html',
    controller: GardenController,
    controllerAs: 'garden',
    resolve: {
      garden: (gardenService, $stateParams) => {
        return gardenService.find($stateParams.slug)
      }
    }
  })

  $stateProvider.state('default.about', angular.extend({
    url: '/about',
    templateUrl: 'about.html'
  }, pageFinder('About')))

  $stateProvider.state('default.press', {
    url: '/press',
    controller: PressController,
    controllerAs: 'press',
    templateUrl: 'press.html',
    resolve: {
      pressItems: (pressItemService) => {
        return pressItemService.list()
      }, 
      pressLinks: (pressLinkService) => {
        return pressLinkService.list()
      }
    }
  })

  $stateProvider.state('default.contact', angular.extend({
    url: '/contact',
    templateUrl: 'contact.html'
  }, pageFinder('Contact')))
})