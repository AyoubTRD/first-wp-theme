import gulp from "gulp";
import sass from "gulp-sass";
import cleanCSS from "gulp-clean-css";
import gulpif from "gulp-if";
import sourcemaps from "gulp-sourcemaps";
import { argv } from "yargs";

const PROD = argv.prod;
const DEV = !PROD;

export const style = () => {
  return gulp
    .src("src/assets/scss/style.scss")
    .pipe(gulpif(DEV, sourcemaps.init()))
    .pipe(sass().on("error", sass.logError))
    .pipe(gulpif(PROD, cleanCSS({ compatibility: "ie8" })))
    .pipe(gulpif(DEV, sourcemaps.write()))
    .pipe(gulp.dest("dist/assets/css/"));
};
