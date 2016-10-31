/**
 * Created by shawnsandy on 10/30/16.
 */
gulp = require ('gulp');

gulp.task('copy:js', function () {
    gulp.src([
        './node_modules/toast.js/toast.css',
        './node_modules/toast.js/toast.js',
        './node_modules/toastr/build/toastr.min.css',
        './node_modules/toastr/build/toastr.min.js'
    ])
        .pipe(gulp.dest('./src/public/toasts'));
});
