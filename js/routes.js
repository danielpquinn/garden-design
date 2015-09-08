
import app from './app'

import HomeController from './controllers/home'
import GardenController from './controllers/garden'
import GardensController from './controllers/gardens'
import LayoutController from './controllers/layout'
import PressController from './controllers/press'

app.config(function ($stateProvider, $urlRouterProvider, $locationProvider) {
  var mobile = USER_AGENT.toLowerCase().indexOf('mobile') >= 0

  var pageFinder = function (name) {
    return {
      controller: function ($scope, $sce, page) {
        $scope.page = page;
        $scope.page.content = $sce.trustAsHtml(page.content)
      },
      resolve: {
        page: function (pageService) {
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
    templateUrl: mobile ? 'layout-mobile.html' : 'layout.html'
  })

  $stateProvider.state('default.home', {
    url: '/',
    templateUrl: 'home.html',
    controller: HomeController,
    controllerAs: 'home',
    resolve: {
      page: function (pageService) {
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
      gardens: function (gardenService) {
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
      garden: function (gardenService, $stateParams) {
        return gardenService.find($stateParams.slug)
      }
    }
  })

  $stateProvider.state('default.about', angular.extend({
    url: '/about',
    templateUrl: mobile ? 'about-mobile.html' : 'about.html'
  }, pageFinder('About')))

  $stateProvider.state('default.press', {
    url: '/press',
    controller: PressController,
    controllerAs: 'press',
    templateUrl: 'press.html',
    resolve: {
      pressItems: function (pressItemService) {
        return pressItemService.list()
      }
    }
  })

  $stateProvider.state('default.contact', angular.extend({
    url: '/contact',
    templateUrl: mobile ? 'contact-mobile.html' : 'contact.html'
  }, pageFinder('Contact')))
})