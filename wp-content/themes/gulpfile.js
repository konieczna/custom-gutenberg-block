var gulp = require('gulp');

var sass = require('gulp-sass');
gulp.task('sass', async function () {
   gulp.src('psd2css/sass/**/*.scss')
       .pipe(sass().on('error', sass.logError))
       .pipe(gulp.dest('psd2css'));
});

gulp.task('sass:watch', async function () {
    gulp.watch('psd2css/sass/**/*.scss', ['sass']);
});

gulp.task('default', async function() {
    // code...
});
