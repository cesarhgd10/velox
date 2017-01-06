var gulp          = require( 'gulp' );
var sass          = require( 'gulp-sass' );
var autoprefixer  = require( 'gulp-autoprefixer' );


gulp.task( 'default', ['sass', 'watch'] );

gulp.task('sass', function() {
      return gulp.src('./sass/portfolio.scss')
          .pipe(sass({style: 'compressed'}))
          .pipe(autoprefixer('last 15 version'))
          .pipe(gulp.dest('./css/dist/'));
});

gulp.task('watch', function () {
  gulp.watch('./sass/**/**/*.scss', ['sass']);
});
