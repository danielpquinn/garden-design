
// Providers

import './providers/browser'

// Services

import './services/debounce'
import './services/garden'
import './services/page'
import './services/press-item'
import './services/press-link'

// Animations

import './animations/slide-in-out'

// Directives

import './directives/center-vertical'
import './directives/slider'

import './routes'

document.addEventListener('DOMContentLoaded', () => {
  angular.bootstrap(document, [ 'app' ])
})
