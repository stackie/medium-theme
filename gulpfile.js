var gulp = require('gulp'),
    csso = require('gulp-csso'),
    less = require('gulp-less');

gulp.task('less', function () {
    return gulp.src('assets/less/style.less')
        .pipe(less())
        .pipe(gulp.dest('assets/css'));
});

gulp.task('css', ['less'], function () {
    return gulp.src('assets/css/style.css')
        .pipe(csso())
        .pipe(gulp.dest('assets/css'));
});

gulp.task('watch', function () {
    gulp.watch('assets/less/*.less', ['less']);
    gulp.watch(dir.app+'/css/*.css', ['css']);
});

gulp.task('run', ['css']);
gulp.task('default', ['run', 'watch']);
