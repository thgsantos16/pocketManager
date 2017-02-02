// gulpfile.js 
var gulp = require('gulp');
var uglify = require('gulp-uglify');
var pump = require('pump');
 
gulp.task('compress', function (cb) {
  console.log("Compressing the Source");
  pump([
        gulp.src('source/*.js'),
        uglify(),
        gulp.dest('assets/js')
    ]
  );
  console.log("Source Compressed");
  console.log("Compressing AngularJS");
  pump([
        gulp.src('bower_components/angular/angular.js'),
        uglify(),
        gulp.dest('assets/js')
    ]
  );
  console.log("Compressing AngularJS Animate");
  pump([
        gulp.src('bower_components/angular-animate/angular-animate.js'),
        uglify(),
        gulp.dest('assets/js')
    ],
    cb
  );
});