var gulp          = require( 'gulp' );
var sass          = require( 'gulp-sass' );
var autoprefixer  = require( 'gulp-autoprefixer' );


gulp.task( 'default', ['sass', 'watch'] );

gulp.task('sass', function() {
    return gulp.src('./assets/sass/velox.scss')
        .pipe(sass({style: 'compressed'}))
        .pipe(autoprefixer('last 15 version'))
        .pipe(gulp.dest('./assets/css/'));
});

gulp.task('watch', function () {
  gulp.watch('./assets/sass/**/*.scss', ['sass']);
});
