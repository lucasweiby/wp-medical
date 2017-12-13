var gulp = require('gulp');
var sass = require('gulp-ruby-sass');
var watch = require('gulp-watch');

//TASK PARA SASS
gulp.task('sass', function(){
	return sass('assets/sass/main.scss').pipe(gulp.dest('assets/css'));
});

//TASK PARA WATCH
gulp.task('watch', function(){
	gulp.watch('assets/sass/**/*.scss', ['sass']);
});

//TASK DEFAULT
gulp.task('default', ['watch']);