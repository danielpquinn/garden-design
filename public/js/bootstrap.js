
import '../node_modules/angular/angular'
import '../node_modules/angular-ui-router/build/angular-ui-router.min'

import './directives/fill-window-height'
import './services/debounce'

import './routes'

document.addEventListener('DOMContentLoaded', () => {
  angular.bootstrap(document, [ 'app' ])
})
