
// Services

import './services/browser'
import './services/debounce'
import './services/garden'
import './services/page'
import './services/press-item'

// Animations

import './animations/slide-in-out'

import './routes'

document.addEventListener('DOMContentLoaded', () => {
  angular.bootstrap(document, [ 'app' ])
})
