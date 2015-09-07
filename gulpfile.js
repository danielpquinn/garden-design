
var gulp = require('gulp');
var concat = require('gulp-concat');
var watch = require('gulp-watch');
var babelify = require('babelify');
var browserify = require('browserify');
var sass = require('gulp-sass');
var source = require('vinyl-source-stream');
var sourcemaps = require('gulp-sourcemaps');
var templateCache = require('gulp-angular-templatecache');

// Transpile and bundle es6 modules

gulp.task('bundle', function () {
  return browserify({
    entries: './js/bootstrap.js',
    debug: true
  })
  .transform(babelify)
  .bundle()
  .pipe(source('bundle.js'))
  .pipe(gulp.dest('./public/dist'));
});

// Create module that caches all app templates

gulp.task('templates', ['bundle'], function () {
  return gulp.src('./templates/**/*.html')
    .pipe(templateCache({ module: 'app' }))
    .pipe(gulp.dest('./public/dist'));
});

// Create single file that includes application code
// and cached templates

gulp.task('bundle-templates', ['templates'], function () {
  return gulp.src(['./public/dist/bundle.js', './public/dist/templates.js'])
    .pipe(concat('bundle-tpls.js'))
    .pipe(gulp.dest('./public/dist'));
});

// Vendor styles

gulp.task('vendor-styles', function () {
  return gulp.src(['./node_modules/bootstrap/dist/css/bootstrap.css'])
    .pipe(concat('vendor.css'))
    .pipe(gulp.dest('./public/dist'));
});

// Vendor scripts

gulp.task('vendor-scripts', function () {
  return gulp.src([
    './node_modules/jquery/dist/jquery.min.js',
    './node_modules/angular/angular.min.js',
    './node_modules/angular-animate/angular-animate.min.js',
    './node_modules/angular-ui-router/build/angular-ui-router.min.js',
    './node_modules/angular-animate/angular-animate.min.js',
    './node_modules/velocity-animate/velocity.min.js'
  ]).pipe(concat('vendor.js'))
    .pipe(gulp.dest('./public/dist'));
});

// Sass

gulp.task('sass', function () {
  return gulp.src('./scss/site.scss')
    .pipe(sourcemaps.init())
    .pipe(sass().on('error', sass.logError))
    .pipe(gulp.dest('./public/dist'));
});

// Watch for changes, bundle

gulp.task('watch', function () {
  gulp.watch([
    './scss/**/*.scss',
    './js/**/**/*.js',
    './templates/**/*.html'
  ], [
    'vendor-styles',
    'vendor-scripts',
    'sass',
    'bundle-templates'
  ]);
});