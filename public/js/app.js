/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, {
/******/ 				configurable: false,
/******/ 				enumerable: true,
/******/ 				get: getter
/******/ 			});
/******/ 		}
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ([
/* 0 */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(1);
module.exports = __webpack_require__(2);


/***/ }),
/* 1 */
/***/ (function(module, exports) {

(function ($) {
	$(function () {

		$('.sidenav').sidenav({
			menuWidth: 500
		});
		$('.carousel').carousel({ fullWidth: true });

		$('.parallax').parallax();
		var btn = $('#button');

		$(window).scroll(function () {
			if ($(window).scrollTop() > 300) {
				btn.addClass('show');
			} else {
				btn.removeClass('show');
			}
		});

		btn.on('click', function (e) {
			e.preventDefault();
			$('html, body').animate({ scrollTop: 0 }, '300');
		});
		$('.scrollspy').scrollSpy();
		$('#team-tab').tabs();
		$('.book-date').datepicker();
		$('select').formSelect();
		$('.datepicker').datepicker();
		$('.dropdown-button').megaMenu({
			inDuration: 300,
			outDuration: 150,
			hover: true
		});
		$('#dob').datepicker();
		$('#exp').datepicker();
		$('.collapsible').collapsible();
		$('.scrollspy').scrollSpy();
		$('#product-tab').tabs();
		$('.partners').owlCarousel({
			loop: true,
			margin: 10,
			nav: false,
			responsive: {
				0: {
					items: 1
				},
				600: {
					items: 3
				},
				1000: {
					items: 6
				}
			}
		});
		$('.home-slider').owlCarousel({
			loop: true,
			nav: false,
			animateOut: 'fadeOut',
			responsive: {
				0: {
					items: 1
				},
				600: {
					items: 1
				},
				1000: {
					items: 1
				}
			}
		});
		$('.year-dropdown-trigger').dropdown();
		$('.month-dropdown-trigger').dropdown();
		$('product-review-select').formSelect();
		$('#product-review-textarea').val('');
	}); // end of document ready
})(jQuery); // end of jQuery name space

/***/ }),
/* 2 */
/***/ (function(module, exports) {

throw new Error("Module build failed: ModuleBuildError: Module build failed: \r\nundefined\r\n  ^\r\n      Invalid CSS after \"  }\": expected \"}\", was \"\"\r\n      in C:\\projects\\ski-new\\resources\\sass\\app.scss (line 682, column 4)\n    at runLoaders (C:\\projects\\ski-new\\node_modules\\webpack\\lib\\NormalModule.js:195:19)\n    at C:\\projects\\ski-new\\node_modules\\loader-runner\\lib\\LoaderRunner.js:364:11\n    at C:\\projects\\ski-new\\node_modules\\loader-runner\\lib\\LoaderRunner.js:230:18\n    at context.callback (C:\\projects\\ski-new\\node_modules\\loader-runner\\lib\\LoaderRunner.js:111:13)\n    at Object.asyncSassJobQueue.push [as callback] (C:\\projects\\ski-new\\node_modules\\sass-loader\\lib\\loader.js:55:13)\n    at Object.done [as callback] (C:\\projects\\ski-new\\node_modules\\neo-async\\async.js:7974:18)\n    at options.error (C:\\projects\\ski-new\\node_modules\\node-sass\\lib\\index.js:294:32)");

/***/ })
/******/ ]);