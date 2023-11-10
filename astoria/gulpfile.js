var 	gulp          = require('gulp'),
		sass          = require('gulp-sass'),
		rename        = require('gulp-rename'),
		autoprefixer  = require('gulp-autoprefixer'),
		notify        = require("gulp-notify");

gulp.task('sass', function() {
	return gulp.src('app/sass/main.sass')
	.pipe(sass({ outputStyle: 'expand' }).on("error", notify.onError()))
	// .pipe(rename({ suffix: '.min', prefix : '' }))
	.pipe(autoprefixer(['last 15 versions']))
	// .pipe(cleancss( {level: { 1: { specialComments: 0 } } }))
	.pipe(rename('main.css'))
	.pipe(gulp.dest('app/css'))
});

gulp.task('sass-small', function() {
	return gulp.src('app/sass/small.sass')
	.pipe(sass({ outputStyle: 'expand' }).on("error", notify.onError()))
	// .pipe(rename({ suffix: '.min', prefix : '' }))
	.pipe(autoprefixer(['last 15 versions']))
	// .pipe(cleancss( {level: { 1: { specialComments: 0 } } }))
	.pipe(rename('small.css'))
	.pipe(gulp.dest('app/css'))
});

gulp.task('js', function() {
	return gulp.src([
		// 'app/libs/jquery/jquery.min.js',
		'app/js/global.js',
		])
	// .pipe(concat('scripts.min.js'))
	// .pipe(uglify()) // Mifify js
	.pipe(gulp.dest('app/js'))
});

gulp.task('watch', ['sass', 'sass-small'], function() {
	gulp.watch('app/sass/main.sass', ['sass']);
	gulp.watch('app/sass/small.sass', ['sass-small']);
	// gulp.watch(['libs/**/*.js', 'app/js/global.js'], ['js'])
});

gulp.task('default', ['watch']);