const gulp = require('gulp');
var path = require('path');
var sass = require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer');
var sourcemaps = require('gulp-sourcemaps');
var open = require('gulp-open');
const webpack = require('webpack-stream');
var Paths = {
  HERE: './',
  DIST: 'dist/',
  CSS: './assets/css/',
  SCSS_TOOLKIT_SOURCES: './assets/scss/material-dashboard.scss',
  SCSS: './assets/scss/**/**'
};

gulp.task('compile-scss', function() {
  return gulp.src(Paths.SCSS_TOOLKIT_SOURCES)
    .pipe(sourcemaps.init())
    .pipe(sass().on('error', sass.logError))
    .pipe(autoprefixer())
    .pipe(sourcemaps.write(Paths.HERE))
    .pipe(gulp.dest(Paths.CSS));
});

gulp.task('move-js', function() {
  return gulp.src(['resources/js/bootstrap.js',
  'resources/js/core/**',
  
  
  'resources/js/app.js'
])
    .pipe(webpack())
    .pipe(gulp.dest('public/js'));
});



gulp.task('watch', function() {
  gulp.watch(Paths.SCSS, ['compile-scss']);
});

gulp.task('open', function() {
  gulp.src('examples/dashboard.html')
    .pipe(open());
});

