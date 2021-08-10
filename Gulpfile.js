const gulp = require('gulp');
const sass = require('gulp-sass');
// const browserSync = require('browser-sync').create();
const sourcemaps = require('gulp-sourcemaps');
const uglify = require('gulp-uglify');
const postcss = require('gulp-postcss');
const replace = require('gulp-replace');
const concat = require('gulp-concat');
const cssnano = require('cssnano');
const autoprefixer = require('autoprefixer');
const rename = require('gulp-rename');
// cache busting
const rev = require('gulp-rev');
// clean unused cache files
const revDistClean = require('gulp-rev-dist-clean');

//compile scss into css
function style() {
  return gulp.src(
    [
      // theme files
      // 'assets/vendor/bootstrap/css/bootstrap.min.css',
      // 'assets/vendor/icofont/icofont.min.css',
      // 'assets/vendor/remixicon/remixicon.css',
      // 'assets/vendor/boxicons/css/boxicons.min.css',
      // 'assets/vendor/owl.carousel/assets/owl.carousel.min.css',
      // 'assets/vendor/venobox/venobox.css',
      // 'assets/vendor/aos/aos.css',
      // 'assets/vendor/css/style.css',
      './node_modules/aos/dist/aos.css',
      // './node_modules/bootstrap/dist/css/bootstrap.min.css',
			// './node_modules/slick-carousel/slick/slick.css',
      // './node_modules/slick-carousel/slick/slick-theme.css', 

      // my file
      './assets/scss/fonts.scss',
      './assets/scss/banner-animation-01.scss',
      './assets/scss/styles.scss',
    ]
  )
  .pipe(sourcemaps.init())
  .pipe(concat('style.css'))
  .pipe(sass().on('error',sass.logError))
  .pipe(postcss([ autoprefixer(), cssnano()]))
  .pipe(rename({
    suffix: '.min'
  }))
  .pipe(sourcemaps.write('.'))
  .pipe(gulp.dest('assets/dist/css'));
  // .pipe(browserSync.stream());
}

function minify_js(){
  return gulp.src(
    [
      
      // theme files
      // 'assets/vendor/bootstrap/js/bootstrap.bundle.min.js',
      // 'assets/vendor/jquery.easing/jquery.easing.min.js',
      // 'assets/vendor/php-email-form/validate.js',
      // 'assets/vendor/waypoints/jquery.waypoints.min.js',
      // 'assets/vendor/counterup/counterup.min.js',
      // 'assets/vendor/owl.carousel/owl.carousel.min.js',
      // 'assets/vendor/isotope-layout/isotope.pkgd.min.js',
      // 'assets/vendor/venobox/venobox.min.js',
      './assets/vendor/aos/aos.js',
      './node_modules/lazyload/lazyload.min.js',
      './node_modules/jquery-parallax.js/parallax.min.js',
      './node_modules/@fortawesome/fontawesome-free/js/all.min.js',
      './node_modules/jquery-lazy/jquery.lazy.min.js',
      // './node_modules/jquery/dist/jquery.min.js',
      './node_modules/aos/dist/aos.js',
      './node_modules/bootsrap/dist/js/bootstrap.bundle.js',
      // './node_modules/bootsrap/dist/js/bootstrap.min.js',
      './node_modules/slick-carousel/slick/slick.js',

      // my file
      './assets/js/scripts.js'
    ],
    {
      allowEmpty: true
    }
  )
  .pipe(concat('scripts.js'))
  
  // .pipe(minify({noSource: true}))
  
  .pipe(rename({
    suffix: '.min'
  }))
  .pipe(gulp.dest('assets/dist/js'))
  // .pipe(browserSync.stream());
}


function cacheBustTask(){

    /* CSS CACHE BUSTING
  /––––––––––––––––––––––––*/
  // from:    assets/dist/css/style.min.css
  // actions: create busted version of file
  // to:      assets/dist/css/style-[hash].min.css
  return gulp.src('assets/dist/css/style.min.css')
    .pipe(rev())
    .pipe(gulp.dest('assets/dist/css'))
    .pipe(rev.manifest())
    .pipe(gulp.dest('assets/dist/css')); 
}

function rev_dist_clean(){
  return gulp.src(
    [
      'assets/dist/css/**/*'
    ],
    {
      read: true
    }
  )
  .pipe(revDistClean('assets/dist/css/rev-manifest.json'), {keepManifestFile: true});
}

function watch() {
  // browserSync.init({
  //   proxy: "http://localhost/woknrollaz/"
  // });
  gulp.watch('assets/scss/**/*.scss', gulp.series(style, cacheBustTask));
  gulp.watch('assets/vendor/**/*.css', gulp.series(style, cacheBustTask));
  gulp.watch('assets/js/**/*.js', minify_js);
  // gulp.watch('./**/*.php').on('change',browserSync.reload);
  // gulp.watch('assets/dist/css/style.min.css').on('change', gulp.series(browserSync.reload));
  gulp.watch('assets/dist/css/rev-manifest.json').on('change', rev_dist_clean);
}



exports.style = style;
exports.minify_js = minify_js;
exports.watch = watch;