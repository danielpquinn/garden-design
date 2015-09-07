
// Services

import './services/debounce'
import './services/garden'
import './services/page'

// Animations

import './animations/slide-in-out'

import './routes'

document.addEventListener('DOMContentLoaded', () => {
  angular.bootstrap(document, [ 'app' ])
})
