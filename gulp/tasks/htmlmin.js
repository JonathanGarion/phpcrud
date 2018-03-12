var gulp = require('gulp');
var htmlmin = require('gulp-htmlmin');
 
gulp.task('minify', function() {
  return gulp.src('src/sections/**/*.php')
    .pipe(htmlmin({removeComments: true}))
    .pipe(gulp.dest('build/minify'));
});