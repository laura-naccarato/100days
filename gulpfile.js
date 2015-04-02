var gulp = require("gulp");
var sass = require("gulp-sass");
gulp.task('styles', function () {
    gulp.src('../hundreddays/*.scss')
        .pipe(sass())
        .pipe(gulp.dest('../hundreddays'));
});

gulp.task("watch", function(){
	gulp.watch("../hundreddays/*.scss",["styles"]);
});