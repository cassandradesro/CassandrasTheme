var gulp = require('gulp');
var sass = require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer');

var sassOptions = {
    errLogToConsole: true,
    outputStyle: 'compressed'
};

gulp.task('sass', function() {
    return gulp
        .src('./scss/main.scss')
        .pipe(sass(sassOptions).on('error', sass.logError))
        .pipe(autoprefixer())
        .pipe(gulp.dest('./css/'));
});

gulp.task('sass-watch', function() {
    return gulp
        .watch('./sass/*.scss', ['sass']);
});

gulp.task('default', ['sass', 'sass-watch']);