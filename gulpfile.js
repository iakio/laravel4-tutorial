/* jshint node:true */
var gulp = require('gulp'),
    less = require('gulp-less'),
    phpunit = require('gulp-phpunit'),
    paths = {
        stylesheets: [ 'app/assets/stylesheets/custom.less' ],
        phpunit: [ 'app/tests/**/*Test.php' ]
    };

gulp.task('less', function () {
    gulp.src(paths.stylesheets)
        .pipe(less())
        .pipe(gulp.dest('public/stylesheets/'));
});

gulp.task('phpunit', function () {
    gulp.src(paths.phpunit)
        .pipe(phpunit());
});

gulp.task('watch', function () {
    gulp.watch(paths.stylesheets, ['less']);
    gulp.watch(paths.phpunit, ['phpunit']);
});

gulp.task('default', ['less', 'phpunit']);
