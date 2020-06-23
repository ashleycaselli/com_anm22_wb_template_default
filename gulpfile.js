const gulp = require('gulp');
const sass = require('gulp-sass');
const postcss = require('gulp-postcss');
const autoprefixer = require('autoprefixer');
const rename = require('gulp-rename');
const dotenv = require('dotenv').config();
const browserSync = require('browser-sync').create();
const uglify = require('gulp-uglify');

var destDir = "deploy";
const destCssDir = "css";
const destJSDir = "js";

if (process.env.TEMPLATE_DIR) {
    destDir = process.env.TEMPLATE_DIR;
}

function css(done) {
    var processors = [
        autoprefixer({browsers: ['last 2 versions']})
    ];

    var sheets = [
        {src: './sass/style.scss', dest: `${destDir}/${destCssDir}/`}
    ];

    sheets.forEach(file => {
        return gulp.src(file.src)
            .pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
            .pipe(rename({suffix: '.min'}))
            .pipe(postcss(processors))
            .pipe(gulp.dest(file.dest));
    });
    done();
}

function js() {
    return gulp.src(['js/**/*.js', '!js/**/*.min.js'])
        .pipe(uglify())
        .pipe(rename({suffix: '.min'}))
        .pipe(gulp.dest(`${destDir}/${destJSDir}`));
}

function bs(done) {
    browserSync.reload();
    done();
}

function watch() {
    browserSync.init({
        proxy: `${process.env.HOST}:${process.env.PORT}`
    });
    gulp.watch('sass/**/*.scss', gulp.series(css, js, bs));
}

exports.css = css;
exports.js = js;
exports.default = gulp.series(css, js, watch);