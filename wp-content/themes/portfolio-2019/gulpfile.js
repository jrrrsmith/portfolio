var gulp = require('gulp');
var gutil = require('gulp-util');
var sass = require('gulp-sass');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');
var watch = require('gulp-watch');
var autoprefixer = require('gulp-autoprefixer');

var sassOptions = {
  errLogToConsole: true,
  outputStyle: 'compressed'
};

gulp.task('build', ['sass', 'js'], function(){
  
});

gulp.task('sass', function() {
	gulp.src('sass/style.scss')
	.pipe(sass(sassOptions).on('error', sass.logError))
	.on('error', gutil.log)
	.pipe(autoprefixer({
		browsers: ['last 2 versions'],
		cascade: false
	}))
	.pipe(gulp.dest('build'))
	gutil.log('')
});

gulp.task('js', function() {
	return gulp.src(
		[
			// 'node_modules/jquery/dist/jquery.min.js'
		]
	)
	.pipe(uglify())
	.pipe(concat('scripts.js'))
	.pipe(gulp.dest('build'));
});

gulp.task('watch', function() {
	gulp.watch('scripts/*.js', ['js']);
	gulp.watch('sass/**/*.scss', ['sass']);
});

gulp.task('default', ['watch'], function() {
	gulp.start('sass', 'js');
});
