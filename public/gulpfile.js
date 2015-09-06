
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
  .pipe(gulp.dest('./dist'));
});

// Create moduel that caches all app templates

gulp.task('templates', ['bundle'], function () {
  return gulp.src('./templates/**/*.html')
    .pipe(templateCache({ module: 'app' }))
    .pipe(gulp.dest('./dist'));
});

// Create single file that includes application code
// and cached templates

gulp.task('bundle-templates', ['templates'], function () {
  return gulp.src(['./dist/bundle.js', './dist/templates.js'])
    .pipe(concat('bundle-tpls.js'))
    .pipe(gulp.dest('./dist'));
});

// SASSY

gulp.task('sass', function () {
  gulp.src('./scss/site.scss')
    .pipe(sourcemaps.init())
    .pipe(sass().on('error', sass.logError))
    .pipe(gulp.dest('./dist'));
});

// Watch for changes, bundle

gulp.task('watch', function () {
  gulp.watch([
    './scss/**/*.scss',
    './js/**/*.js',
    './templates/**/*.html'
  ], ['bundle-templates', 'sass']);
});