
// Imports

import app from './app'

app.config(($animateProvider) => {
  $animateProvider.classNameFilter(/fade|slide-in-out/)
})