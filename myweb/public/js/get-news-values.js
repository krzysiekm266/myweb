/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!*****************************************!*\
  !*** ./resources/js/get-news-values.js ***!
  \*****************************************/
// This function is used to get old news values from session
// when images is selected in news editor
// then vales are set in inputs in news creating form
function getNewsValues() {
  var title = document.getElementById("news-title");
  var body = document.getElementById("news-body");
  var session_old_title = sessionStorage.getItem('old_title');
  var session_old_body = sessionStorage.getItem('old_body');
  title.value = session_old_title;
  body.value = session_old_body;
}

window.addEventListener('load', function () {
  getNewsValues();
}, false);
/******/ })()
;