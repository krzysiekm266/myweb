/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!*******************************************!*\
  !*** ./resources/js/clear-news-values.js ***!
  \*******************************************/
function clearNewsValues() {
  window.sessionStorage.clear();
}

window.addEventListener('load', function () {
  var newsButton = document.getElementById("create-news-button");
  newsButton.addEventListener('click', function () {
    clearNewsValues();
  }, false);
  console.log('session clear created');
}, false);
/******/ })()
;