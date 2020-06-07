/**
 * Arquivo de configurações GULP
 */

 /**
  * Objefo principal
  * @type {gulp}
  */
const { watch }  = require('gulp');


const livereload = require('gulp-livereload');
	

function reload(cb) {
	livereload.reload();
	cb();
}

exports.default = function () {
	livereload.listen();
	watch('./public/js/**/*.js', reload);
	watch('./public/css/**/*.css', reload);
	watch('./resources/views/**/*.php', reload);
};