var gulp = require("gulp"),
watch = require("gulp-watch"),
postcss = require("gulp-postcss"),
autoprefixer = require("autoprefixer"),
cssvars = require("postcss-simple-vars"),
nested = require("postcss-nested"),
cssImport = require("postcss-import");

gulp.task("style", function() {
	return gulp
	.src("./src/style.css")
	.pipe(postcss([cssImport, cssvars, nested, autoprefixer]))
	.pipe(gulp.dest("./public/css"));
});

gulp.task("watch", function() {
	gulp.start("style");

	watch("./src/**/*.css", function() {
		gulp.start("style");
	});
});
