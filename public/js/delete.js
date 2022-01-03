/*
 * ATTENTION: An "eval-source-map" devtool has been used.
 * This devtool is neither made for production nor for readable output files.
 * It uses "eval()" calls to create a separate source file with attached SourceMaps in the browser devtools.
 * If you are trying to read the output file, select a different devtool (https://webpack.js.org/configuration/devtool/)
 * or disable the default devtool with "devtool: false".
 * If you are looking for production-ready output files, see mode: "production" (https://webpack.js.org/configuration/mode/).
 */
/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/js/delete.js":
/*!********************************!*\
  !*** ./resources/js/delete.js ***!
  \********************************/
/***/ (() => {

eval("$(function () {\n  $('.delete').click(function () {\n    var _this = this;\n\n    Swal.fire({\n      title: 'Na pewno chcesz usunac?',\n      icon: 'warning',\n      showCancelButton: true,\n      confirmButtonColor: '#3085d6',\n      cancelButtonColor: '#d33',\n      cancelButtonText: 'Nie!',\n      confirmButtonText: 'Tak, usun!'\n    }).then(function (result) {\n      if (result.isConfirmed) {\n        $.ajax({\n          type: \"DELETE\",\n          method: \"DELETE\",\n          url: deleteUrl + $(_this).data(\"id\")\n        }).done(function (data) {\n          window.location.reload();\n        }).fail(function (data) {\n          console.log(data.responseJSON.message);\n          Swal.fire('Oopss...', data.responseJSON.message, data.responseJSON.status);\n        });\n      }\n    });\n  });\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvanMvZGVsZXRlLmpzPzZjMTEiXSwibmFtZXMiOlsiJCIsImNsaWNrIiwiU3dhbCIsImZpcmUiLCJ0aXRsZSIsImljb24iLCJzaG93Q2FuY2VsQnV0dG9uIiwiY29uZmlybUJ1dHRvbkNvbG9yIiwiY2FuY2VsQnV0dG9uQ29sb3IiLCJjYW5jZWxCdXR0b25UZXh0IiwiY29uZmlybUJ1dHRvblRleHQiLCJ0aGVuIiwicmVzdWx0IiwiaXNDb25maXJtZWQiLCJhamF4IiwidHlwZSIsIm1ldGhvZCIsInVybCIsImRlbGV0ZVVybCIsImRhdGEiLCJkb25lIiwid2luZG93IiwibG9jYXRpb24iLCJyZWxvYWQiLCJmYWlsIiwiY29uc29sZSIsImxvZyIsInJlc3BvbnNlSlNPTiIsIm1lc3NhZ2UiLCJzdGF0dXMiXSwibWFwcGluZ3MiOiJBQUFBQSxDQUFDLENBQUMsWUFBVTtBQUNSQSxFQUFBQSxDQUFDLENBQUMsU0FBRCxDQUFELENBQWFDLEtBQWIsQ0FBbUIsWUFBVztBQUFBOztBQUMxQkMsSUFBQUEsSUFBSSxDQUFDQyxJQUFMLENBQVU7QUFDTkMsTUFBQUEsS0FBSyxFQUFFLHlCQUREO0FBRU5DLE1BQUFBLElBQUksRUFBRSxTQUZBO0FBR05DLE1BQUFBLGdCQUFnQixFQUFFLElBSFo7QUFJTkMsTUFBQUEsa0JBQWtCLEVBQUUsU0FKZDtBQUtOQyxNQUFBQSxpQkFBaUIsRUFBRSxNQUxiO0FBTU5DLE1BQUFBLGdCQUFnQixFQUFFLE1BTlo7QUFPTkMsTUFBQUEsaUJBQWlCLEVBQUU7QUFQYixLQUFWLEVBUUdDLElBUkgsQ0FRUSxVQUFDQyxNQUFELEVBQVk7QUFDaEIsVUFBSUEsTUFBTSxDQUFDQyxXQUFYLEVBQXdCO0FBQ3BCYixRQUFBQSxDQUFDLENBQUNjLElBQUYsQ0FBTztBQUNIQyxVQUFBQSxJQUFJLEVBQUMsUUFERjtBQUVIQyxVQUFBQSxNQUFNLEVBQUUsUUFGTDtBQUdIQyxVQUFBQSxHQUFHLEVBQUVDLFNBQVMsR0FBR2xCLENBQUMsQ0FBQyxLQUFELENBQUQsQ0FBUW1CLElBQVIsQ0FBYSxJQUFiO0FBSGQsU0FBUCxFQU1LQyxJQU5MLENBTVUsVUFBU0QsSUFBVCxFQUFlO0FBQ2pCRSxVQUFBQSxNQUFNLENBQUNDLFFBQVAsQ0FBZ0JDLE1BQWhCO0FBQ0gsU0FSTCxFQVNLQyxJQVRMLENBU1UsVUFBVUwsSUFBVixFQUFlO0FBQ2pCTSxVQUFBQSxPQUFPLENBQUNDLEdBQVIsQ0FBWVAsSUFBSSxDQUFDUSxZQUFMLENBQWtCQyxPQUE5QjtBQUNBMUIsVUFBQUEsSUFBSSxDQUFDQyxJQUFMLENBQVUsVUFBVixFQUFxQmdCLElBQUksQ0FBQ1EsWUFBTCxDQUFrQkMsT0FBdkMsRUFBK0NULElBQUksQ0FBQ1EsWUFBTCxDQUFrQkUsTUFBakU7QUFDUCxTQVpEO0FBYUg7QUFDSixLQXhCRDtBQXlCSCxHQTFCRDtBQTJCSCxDQTVCQSxDQUFEIiwic291cmNlc0NvbnRlbnQiOlsiJChmdW5jdGlvbigpe1xuICAgICQoJy5kZWxldGUnKS5jbGljayhmdW5jdGlvbiAoKXtcbiAgICAgICAgU3dhbC5maXJlKHtcbiAgICAgICAgICAgIHRpdGxlOiAnTmEgcGV3bm8gY2hjZXN6IHVzdW5hYz8nLFxuICAgICAgICAgICAgaWNvbjogJ3dhcm5pbmcnLFxuICAgICAgICAgICAgc2hvd0NhbmNlbEJ1dHRvbjogdHJ1ZSxcbiAgICAgICAgICAgIGNvbmZpcm1CdXR0b25Db2xvcjogJyMzMDg1ZDYnLFxuICAgICAgICAgICAgY2FuY2VsQnV0dG9uQ29sb3I6ICcjZDMzJyxcbiAgICAgICAgICAgIGNhbmNlbEJ1dHRvblRleHQ6ICdOaWUhJyxcbiAgICAgICAgICAgIGNvbmZpcm1CdXR0b25UZXh0OiAnVGFrLCB1c3VuISdcbiAgICAgICAgfSkudGhlbigocmVzdWx0KSA9PiB7XG4gICAgICAgICAgICBpZiAocmVzdWx0LmlzQ29uZmlybWVkKSB7XG4gICAgICAgICAgICAgICAgJC5hamF4KHtcbiAgICAgICAgICAgICAgICAgICAgdHlwZTpcIkRFTEVURVwiLFxuICAgICAgICAgICAgICAgICAgICBtZXRob2Q6IFwiREVMRVRFXCIsXG4gICAgICAgICAgICAgICAgICAgIHVybDogZGVsZXRlVXJsICsgJCh0aGlzKS5kYXRhKFwiaWRcIilcblxuICAgICAgICAgICAgICAgIH0pXG4gICAgICAgICAgICAgICAgICAgIC5kb25lKGZ1bmN0aW9uKGRhdGEpIHtcbiAgICAgICAgICAgICAgICAgICAgICAgIHdpbmRvdy5sb2NhdGlvbi5yZWxvYWQoKTtcbiAgICAgICAgICAgICAgICAgICAgfSlcbiAgICAgICAgICAgICAgICAgICAgLmZhaWwoZnVuY3Rpb24gKGRhdGEpe1xuICAgICAgICAgICAgICAgICAgICAgICAgY29uc29sZS5sb2coZGF0YS5yZXNwb25zZUpTT04ubWVzc2FnZSk7XG4gICAgICAgICAgICAgICAgICAgICAgICBTd2FsLmZpcmUoJ09vcHNzLi4uJyxkYXRhLnJlc3BvbnNlSlNPTi5tZXNzYWdlLGRhdGEucmVzcG9uc2VKU09OLnN0YXR1cyk7XG4gICAgICAgICAgICAgICAgfSk7XG4gICAgICAgICAgICB9XG4gICAgICAgIH0pXG4gICAgfSk7XG59KTtcbiJdLCJmaWxlIjoiLi9yZXNvdXJjZXMvanMvZGVsZXRlLmpzLmpzIiwic291cmNlUm9vdCI6IiJ9\n//# sourceURL=webpack-internal:///./resources/js/delete.js\n");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval-source-map devtool is used.
/******/ 	var __webpack_exports__ = {};
/******/ 	__webpack_modules__["./resources/js/delete.js"]();
/******/ 	
/******/ })()
;