/* jshint node:true */
var gulp = require('gulp'),
    less = require('gulp-less'),
    paths = {
        stylesheets: [ 'app/assets/stylesheets/custom.less' ]
    };

gulp.task('less', function () {
    gulp.src(paths.stylesheets)
        .pipe(less())
        .pipe(gulp.dest('public/stylesheets/'));
});
gulp.task('watch', function () {
    gulp.watch(paths.stylesheets, ['less']);
});

gulp.task('default', ['less']);