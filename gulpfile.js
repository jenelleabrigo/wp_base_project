const gulp = require('gulp');
const sass = require('gulp-sass')(require('sass'));
//compile
function build(){
  //locate scss files
  return gulp.src('./htdocs/wp-content/themes/template/data/scss/**/*.scss')
  //compile
  .pipe(sass())
  //locate css file
  .pipe(gulp.dest('./htdocs/wp-content/themes/template/data/css'))
}

function watch(){
  gulp.watch('./htdocs/wp-content/themes/template/data/scss/**/*.scss',build);
}

exports.build = build;
exports.watch = watch;
