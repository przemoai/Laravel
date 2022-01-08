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

eval("$(function () {\n  $('.delete').click(function () {\n    var _this = this;\n\n    Swal.fire({\n      title: confirmDelete,\n      icon: 'warning',\n      showCancelButton: true,\n      confirmButtonColor: '#3085d6',\n      cancelButtonColor: '#d33',\n      cancelButtonText: 'Nie!',\n      confirmButtonText: 'Tak, usun!'\n    }).then(function (result) {\n      if (result.isConfirmed) {\n        $.ajax({\n          type: \"DELETE\",\n          method: \"DELETE\",\n          url: deleteUrl + $(_this).data(\"id\")\n        }).done(function (data) {\n          window.location.reload();\n        }).fail(function (data) {\n          console.log(data.responseJSON.message);\n          Swal.fire('Oopss...', data.responseJSON.message, data.responseJSON.status);\n        });\n      }\n    });\n  });\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvanMvZGVsZXRlLmpzPzZjMTEiXSwibmFtZXMiOlsiJCIsImNsaWNrIiwiU3dhbCIsImZpcmUiLCJ0aXRsZSIsImNvbmZpcm1EZWxldGUiLCJpY29uIiwic2hvd0NhbmNlbEJ1dHRvbiIsImNvbmZpcm1CdXR0b25Db2xvciIsImNhbmNlbEJ1dHRvbkNvbG9yIiwiY2FuY2VsQnV0dG9uVGV4dCIsImNvbmZpcm1CdXR0b25UZXh0IiwidGhlbiIsInJlc3VsdCIsImlzQ29uZmlybWVkIiwiYWpheCIsInR5cGUiLCJtZXRob2QiLCJ1cmwiLCJkZWxldGVVcmwiLCJkYXRhIiwiZG9uZSIsIndpbmRvdyIsImxvY2F0aW9uIiwicmVsb2FkIiwiZmFpbCIsImNvbnNvbGUiLCJsb2ciLCJyZXNwb25zZUpTT04iLCJtZXNzYWdlIiwic3RhdHVzIl0sIm1hcHBpbmdzIjoiQUFBQUEsQ0FBQyxDQUFDLFlBQVU7QUFDUkEsRUFBQUEsQ0FBQyxDQUFDLFNBQUQsQ0FBRCxDQUFhQyxLQUFiLENBQW1CLFlBQVc7QUFBQTs7QUFDMUJDLElBQUFBLElBQUksQ0FBQ0MsSUFBTCxDQUFVO0FBQ05DLE1BQUFBLEtBQUssRUFBRUMsYUFERDtBQUVOQyxNQUFBQSxJQUFJLEVBQUUsU0FGQTtBQUdOQyxNQUFBQSxnQkFBZ0IsRUFBRSxJQUhaO0FBSU5DLE1BQUFBLGtCQUFrQixFQUFFLFNBSmQ7QUFLTkMsTUFBQUEsaUJBQWlCLEVBQUUsTUFMYjtBQU1OQyxNQUFBQSxnQkFBZ0IsRUFBRSxNQU5aO0FBT05DLE1BQUFBLGlCQUFpQixFQUFFO0FBUGIsS0FBVixFQVFHQyxJQVJILENBUVEsVUFBQ0MsTUFBRCxFQUFZO0FBQ2hCLFVBQUlBLE1BQU0sQ0FBQ0MsV0FBWCxFQUF3QjtBQUNwQmQsUUFBQUEsQ0FBQyxDQUFDZSxJQUFGLENBQU87QUFDSEMsVUFBQUEsSUFBSSxFQUFDLFFBREY7QUFFSEMsVUFBQUEsTUFBTSxFQUFFLFFBRkw7QUFHSEMsVUFBQUEsR0FBRyxFQUFFQyxTQUFTLEdBQUduQixDQUFDLENBQUMsS0FBRCxDQUFELENBQVFvQixJQUFSLENBQWEsSUFBYjtBQUhkLFNBQVAsRUFNS0MsSUFOTCxDQU1VLFVBQVNELElBQVQsRUFBZTtBQUNqQkUsVUFBQUEsTUFBTSxDQUFDQyxRQUFQLENBQWdCQyxNQUFoQjtBQUNILFNBUkwsRUFTS0MsSUFUTCxDQVNVLFVBQVVMLElBQVYsRUFBZTtBQUNqQk0sVUFBQUEsT0FBTyxDQUFDQyxHQUFSLENBQVlQLElBQUksQ0FBQ1EsWUFBTCxDQUFrQkMsT0FBOUI7QUFDQTNCLFVBQUFBLElBQUksQ0FBQ0MsSUFBTCxDQUFVLFVBQVYsRUFBcUJpQixJQUFJLENBQUNRLFlBQUwsQ0FBa0JDLE9BQXZDLEVBQStDVCxJQUFJLENBQUNRLFlBQUwsQ0FBa0JFLE1BQWpFO0FBQ1AsU0FaRDtBQWFIO0FBQ0osS0F4QkQ7QUF5QkgsR0ExQkQ7QUEyQkgsQ0E1QkEsQ0FBRCIsInNvdXJjZXNDb250ZW50IjpbIiQoZnVuY3Rpb24oKXtcbiAgICAkKCcuZGVsZXRlJykuY2xpY2soZnVuY3Rpb24gKCl7XG4gICAgICAgIFN3YWwuZmlyZSh7XG4gICAgICAgICAgICB0aXRsZTogY29uZmlybURlbGV0ZSxcbiAgICAgICAgICAgIGljb246ICd3YXJuaW5nJyxcbiAgICAgICAgICAgIHNob3dDYW5jZWxCdXR0b246IHRydWUsXG4gICAgICAgICAgICBjb25maXJtQnV0dG9uQ29sb3I6ICcjMzA4NWQ2JyxcbiAgICAgICAgICAgIGNhbmNlbEJ1dHRvbkNvbG9yOiAnI2QzMycsXG4gICAgICAgICAgICBjYW5jZWxCdXR0b25UZXh0OiAnTmllIScsXG4gICAgICAgICAgICBjb25maXJtQnV0dG9uVGV4dDogJ1RhaywgdXN1biEnXG4gICAgICAgIH0pLnRoZW4oKHJlc3VsdCkgPT4ge1xuICAgICAgICAgICAgaWYgKHJlc3VsdC5pc0NvbmZpcm1lZCkge1xuICAgICAgICAgICAgICAgICQuYWpheCh7XG4gICAgICAgICAgICAgICAgICAgIHR5cGU6XCJERUxFVEVcIixcbiAgICAgICAgICAgICAgICAgICAgbWV0aG9kOiBcIkRFTEVURVwiLFxuICAgICAgICAgICAgICAgICAgICB1cmw6IGRlbGV0ZVVybCArICQodGhpcykuZGF0YShcImlkXCIpXG5cbiAgICAgICAgICAgICAgICB9KVxuICAgICAgICAgICAgICAgICAgICAuZG9uZShmdW5jdGlvbihkYXRhKSB7XG4gICAgICAgICAgICAgICAgICAgICAgICB3aW5kb3cubG9jYXRpb24ucmVsb2FkKCk7XG4gICAgICAgICAgICAgICAgICAgIH0pXG4gICAgICAgICAgICAgICAgICAgIC5mYWlsKGZ1bmN0aW9uIChkYXRhKXtcbiAgICAgICAgICAgICAgICAgICAgICAgIGNvbnNvbGUubG9nKGRhdGEucmVzcG9uc2VKU09OLm1lc3NhZ2UpO1xuICAgICAgICAgICAgICAgICAgICAgICAgU3dhbC5maXJlKCdPb3Bzcy4uLicsZGF0YS5yZXNwb25zZUpTT04ubWVzc2FnZSxkYXRhLnJlc3BvbnNlSlNPTi5zdGF0dXMpO1xuICAgICAgICAgICAgICAgIH0pO1xuICAgICAgICAgICAgfVxuICAgICAgICB9KVxuICAgIH0pO1xufSk7XG4iXSwiZmlsZSI6Ii4vcmVzb3VyY2VzL2pzL2RlbGV0ZS5qcy5qcyIsInNvdXJjZVJvb3QiOiIifQ==\n//# sourceURL=webpack-internal:///./resources/js/delete.js\n");

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