'use strict';

var gulp = require('gulp');
var sass = require('gulp-sass');
var coffee = require("gulp-coffee");
var server = require('gulp-express');

gulp.task('sass', function () {
  return gulp.src('./scss/**/*.scss')
    .pipe(sass().on('error', sass.logError))
    .pipe(gulp.dest('./css'));
});

gulp.task('coffee', function() {
  return gulp.src('./coffee/*.coffee')
    .pipe(coffee({bare: true}))
    .pipe(gulp.dest('./js/'));
});

gulp.task('js', function() {
  return gulp.src('./coffee/*.js')
    .pipe(gulp.dest('./js/'));
});

gulp.task('css', function() {
  return gulp.src('./scss/*.css')
    .pipe(gulp.dest('./css'));
});

gulp.task('watch', function () {
  gulp.watch('./scss/**/*.scss', ['sass']);
  gulp.watch('./scss/**/*.css', ['css']);
  gulp.watch('./coffee/*.coffee', ['coffee']);
  gulp.watch('./coffee/*.js', ['js']);
});

gulp.task('server', function () {
    // Start the server at the beginning of the task 
    server.run(['app.js']);
 
    // Restart the server when file changes 
    gulp.watch(['./**/*.html'], server.notify);
 
    //gulp.watch(['js/**/*.js'], ['jshint']);
    gulp.watch(['img/**/*'], server.notify);
    //gulp.watch(['app.js', 'routes/**/*.js'], [server.run]);
});

gulp.task('default', ['watch', 'coffee', 'js', 'sass', 'css']);//, 'server']);
