const{src,dest, watch, parallel} = require("gulp");
const sass = require("gulp-sass")(require('sass'));
const plumber = require('gulp-plumber');



function css(done) {
    src("src/**/*.scss")
    .pipe(plumber())
    .pipe( sass())
    .pipe(dest("build/css"));
     done();
 }

 function dev2(done){
    watch('src/**/*.scss',css);
   watch('src/js/*.js',javascript);
    done();
}


function javascript( done){
    src('src/js/*.js')
    .pipe(dest('build/js'))

    done();
}
exports.css = css
exports.javascript = javascript
exports.dev2 = parallel(javascript,dev2,css)