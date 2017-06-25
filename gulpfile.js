// CONFIG ===============================================
var PROJECT_PATH = "http://localhost/jobs/2017-jun/pwa/dist";

var BASE = {
  src: 'src/',
  dist: 'dist/'
};

var STATIC = {
  src: [ BASE.src + '*.*' , BASE.src + 'inc/**/*.*', BASE.src + 'assets/fonts/**/*.*', BASE.src + 'assets/app/**/*.*'],
  dist: BASE.dist
};

var IMG = {
  src: BASE.src + 'assets/images/**/*.*',
  dist: BASE.dist + 'assets/images'
};

var CSS = {
  src: BASE.src + 'assets/scss/styles.scss',
  dist: BASE.dist + 'assets',
  watch: BASE.src + 'assets/scss/**/*.*'
};

var JS = {
  src: [
    BASE.src + 'assets/js/vendors/jquery/3.2.1/jquery.min.js',
    BASE.src + 'assets/js/vendors/modernizr/modernizr.min.js',
    BASE.src + 'assets/js/vendors/pwacompat.min.js',
    BASE.src + 'assets/js/vendors/selectize.min.js',
    BASE.src + 'assets/js/app/base/global.js',
    BASE.src + 'assets/js/app/base/base.js',
    BASE.src + 'assets/js/app/page/global-container.js',
    BASE.src + 'assets/js/app/components/modal.js',
    BASE.src + 'assets/js/app/components/toggle-button.js',
    BASE.src + 'assets/js/app/components/email-select.js'
  ],
  dist: BASE.dist + 'assets',
  filename: 'scripts.js',
};

// ======================================================


var gulp = require('gulp');
var sass = require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer');
var imagemin = require('gulp-imagemin');
var pngquant = require('imagemin-pngquant');
var jpegtran = require('imagemin-jpegtran');
var gifsicle = require('imagemin-gifsicle');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');
var browserSync = require('browser-sync').create();

gulp.task('static',function(){
  return gulp.src(STATIC.src , { base: BASE.src } )
    .pipe(gulp.dest(STATIC.dist));
});

gulp.task('img', function () {
    return gulp.src(IMG.src)
      .pipe(gulp.dest(IMG.dist));
});

gulp.task('css', function () {
  return gulp.src(CSS.src)
    .pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
    .pipe(autoprefixer())
    .pipe(gulp.dest(CSS.dist));
});

gulp.task('img-build', function () {
    return gulp.src(IMG.src)
      .pipe(imagemin({
          progressive: true,
          svgoPlugins: [{removeViewBox: false}],
          use: [pngquant(), jpegtran(), gifsicle()]
      }))
      .pipe(gulp.dest(IMG.dist));
});

gulp.task('js', function(){
  return gulp.src(JS.src)
    .pipe(concat(JS.filename))
    .pipe(uglify())
    .pipe(gulp.dest(JS.dist));
});

gulp.task('browser-sync', function() {
 browserSync.init({
    proxy: PROJECT_PATH,
    port: 8080
 });

 gulp.watch(STATIC.src, ['static', browserSync.reload]);
 gulp.watch(IMG.src, ['img', browserSync.reload]);
 gulp.watch(CSS.watch, ['css']);
 gulp.watch(JS.src, ['js', browserSync.reload]);
});


gulp.task( 'default', ['static', 'img', 'css', 'js', 'browser-sync'] );
gulp.task( 'dist', ['static', 'img-build', 'css', 'js'] );


var del = require('del');
gulp.task('clean:dist', function () {
  return del([
    BASE.dist
  ],{force: true});
});
gulp.task('clean', ['clean:dist']);
