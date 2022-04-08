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

/***/ "./src/js/components/accordion.js":
/*!****************************************!*\
  !*** ./src/js/components/accordion.js ***!
  \****************************************/
/***/ (() => {

eval("document.addEventListener(\"DOMContentLoaded\", function () {\n  var accordion = document.querySelectorAll('.accordion__handle');\n\n  if (accordion) {\n    accordion.forEach(function (item) {\n      item.addEventListener('click', function () {\n        var expanded = this.getAttribute('aria-expanded'),\n            did = this.getAttribute('aria-controls'),\n            target = document.getElementById(did);\n\n        if (target) {\n          target.classList.toggle('is-open');\n        }\n\n        expanded = expanded == 'true' ? 'false' : 'true';\n        this.setAttribute(\"aria-expanded\", expanded);\n        this.classList.toggle('is-active');\n      });\n    });\n  }\n\n  var showAll = document.getElementById('toggleAll');\n  var accordionBtns = document.querySelectorAll('.accordion__handle');\n  var accordionItems = document.querySelectorAll('.accordion__body');\n\n  if (showAll) {\n    showAll.addEventListener('click', function (e) {\n      e.preventDefault();\n\n      for (var i = 0; i < accordionItems.length; i++) {\n        accordionItems[i].classList.add('is-open');\n      }\n\n      for (var x = 0; x < accordionBtns.length; x++) {\n        accordionBtns[i].setAttribute(\"aria-expanded\", \"true\");\n        accordionBtns[i].classList.add('is-active');\n      }\n    });\n  }\n\n  var getAccordion = window.location.hash.substring(1),\n      accordionEntry = false;\n\n  if (getAccordion.length > 0) {\n    try {\n      accordionEntry = document.getElementById(getAccordion);\n    } catch (e) {}\n  }\n\n  if (accordionEntry) {\n    var did = accordionEntry.getAttribute('aria-controls'),\n        target = document.getElementById(did);\n\n    if (target) {\n      target.classList.toggle('is-open');\n    }\n  }\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly9vcmlnaW4vLi9zcmMvanMvY29tcG9uZW50cy9hY2NvcmRpb24uanM/OGZlMiJdLCJuYW1lcyI6WyJkb2N1bWVudCIsImFkZEV2ZW50TGlzdGVuZXIiLCJhY2NvcmRpb24iLCJxdWVyeVNlbGVjdG9yQWxsIiwiZm9yRWFjaCIsIml0ZW0iLCJleHBhbmRlZCIsImdldEF0dHJpYnV0ZSIsImRpZCIsInRhcmdldCIsImdldEVsZW1lbnRCeUlkIiwiY2xhc3NMaXN0IiwidG9nZ2xlIiwic2V0QXR0cmlidXRlIiwic2hvd0FsbCIsImFjY29yZGlvbkJ0bnMiLCJhY2NvcmRpb25JdGVtcyIsImUiLCJwcmV2ZW50RGVmYXVsdCIsImkiLCJsZW5ndGgiLCJhZGQiLCJ4IiwiZ2V0QWNjb3JkaW9uIiwid2luZG93IiwibG9jYXRpb24iLCJoYXNoIiwic3Vic3RyaW5nIiwiYWNjb3JkaW9uRW50cnkiXSwibWFwcGluZ3MiOiJBQUFBQSxRQUFRLENBQUNDLGdCQUFULENBQTBCLGtCQUExQixFQUE4QyxZQUFXO0FBRXhELE1BQUlDLFNBQVMsR0FBR0YsUUFBUSxDQUFDRyxnQkFBVCxDQUEwQixvQkFBMUIsQ0FBaEI7O0FBQ0EsTUFBSUQsU0FBSixFQUFlO0FBQ2RBLElBQUFBLFNBQVMsQ0FBQ0UsT0FBVixDQUFrQixVQUFTQyxJQUFULEVBQWU7QUFDaENBLE1BQUFBLElBQUksQ0FBQ0osZ0JBQUwsQ0FBc0IsT0FBdEIsRUFBK0IsWUFBVztBQUN6QyxZQUFJSyxRQUFRLEdBQUcsS0FBS0MsWUFBTCxDQUFrQixlQUFsQixDQUFmO0FBQUEsWUFDQUMsR0FBRyxHQUFHLEtBQUtELFlBQUwsQ0FBa0IsZUFBbEIsQ0FETjtBQUFBLFlBRUFFLE1BQU0sR0FBR1QsUUFBUSxDQUFDVSxjQUFULENBQXdCRixHQUF4QixDQUZUOztBQUlBLFlBQUlDLE1BQUosRUFBWTtBQUNYQSxVQUFBQSxNQUFNLENBQUNFLFNBQVAsQ0FBaUJDLE1BQWpCLENBQXdCLFNBQXhCO0FBQ0E7O0FBRUROLFFBQUFBLFFBQVEsR0FBR0EsUUFBUSxJQUFJLE1BQVosR0FBcUIsT0FBckIsR0FBK0IsTUFBMUM7QUFFQSxhQUFLTyxZQUFMLENBQWtCLGVBQWxCLEVBQW1DUCxRQUFuQztBQUNBLGFBQUtLLFNBQUwsQ0FBZUMsTUFBZixDQUFzQixXQUF0QjtBQUNBLE9BYkQ7QUFjQSxLQWZEO0FBZ0JBOztBQUVELE1BQUlFLE9BQU8sR0FBR2QsUUFBUSxDQUFDVSxjQUFULENBQXdCLFdBQXhCLENBQWQ7QUFDQSxNQUFJSyxhQUFhLEdBQUdmLFFBQVEsQ0FBQ0csZ0JBQVQsQ0FBMEIsb0JBQTFCLENBQXBCO0FBQ0EsTUFBSWEsY0FBYyxHQUFHaEIsUUFBUSxDQUFDRyxnQkFBVCxDQUEwQixrQkFBMUIsQ0FBckI7O0FBRUEsTUFBR1csT0FBSCxFQUFZO0FBQ1hBLElBQUFBLE9BQU8sQ0FBQ2IsZ0JBQVIsQ0FBeUIsT0FBekIsRUFBa0MsVUFBU2dCLENBQVQsRUFBWTtBQUM3Q0EsTUFBQUEsQ0FBQyxDQUFDQyxjQUFGOztBQUNBLFdBQUssSUFBSUMsQ0FBQyxHQUFHLENBQWIsRUFBZ0JBLENBQUMsR0FBR0gsY0FBYyxDQUFDSSxNQUFuQyxFQUEyQ0QsQ0FBQyxFQUE1QyxFQUFnRDtBQUMvQ0gsUUFBQUEsY0FBYyxDQUFDRyxDQUFELENBQWQsQ0FBa0JSLFNBQWxCLENBQTRCVSxHQUE1QixDQUFnQyxTQUFoQztBQUNBOztBQUNELFdBQUssSUFBSUMsQ0FBQyxHQUFHLENBQWIsRUFBZ0JBLENBQUMsR0FBR1AsYUFBYSxDQUFDSyxNQUFsQyxFQUEwQ0UsQ0FBQyxFQUEzQyxFQUErQztBQUM5Q1AsUUFBQUEsYUFBYSxDQUFDSSxDQUFELENBQWIsQ0FBaUJOLFlBQWpCLENBQThCLGVBQTlCLEVBQStDLE1BQS9DO0FBQ0FFLFFBQUFBLGFBQWEsQ0FBQ0ksQ0FBRCxDQUFiLENBQWlCUixTQUFqQixDQUEyQlUsR0FBM0IsQ0FBK0IsV0FBL0I7QUFDQTtBQUNELEtBVEQ7QUFVQTs7QUFFRCxNQUFJRSxZQUFZLEdBQUdDLE1BQU0sQ0FBQ0MsUUFBUCxDQUFnQkMsSUFBaEIsQ0FBcUJDLFNBQXJCLENBQStCLENBQS9CLENBQW5CO0FBQUEsTUFDQUMsY0FBYyxHQUFHLEtBRGpCOztBQUdBLE1BQUlMLFlBQVksQ0FBQ0gsTUFBYixHQUFzQixDQUExQixFQUE2QjtBQUM1QixRQUFJO0FBQ0hRLE1BQUFBLGNBQWMsR0FBRzVCLFFBQVEsQ0FBQ1UsY0FBVCxDQUF3QmEsWUFBeEIsQ0FBakI7QUFDQSxLQUZELENBRUUsT0FBTU4sQ0FBTixFQUFTLENBQUc7QUFDZDs7QUFFRCxNQUFJVyxjQUFKLEVBQW9CO0FBQ25CLFFBQUlwQixHQUFHLEdBQUdvQixjQUFjLENBQUNyQixZQUFmLENBQTRCLGVBQTVCLENBQVY7QUFBQSxRQUNBRSxNQUFNLEdBQUdULFFBQVEsQ0FBQ1UsY0FBVCxDQUF3QkYsR0FBeEIsQ0FEVDs7QUFHQSxRQUFJQyxNQUFKLEVBQVk7QUFDWEEsTUFBQUEsTUFBTSxDQUFDRSxTQUFQLENBQWlCQyxNQUFqQixDQUF3QixTQUF4QjtBQUNBO0FBQ0Q7QUFFRCxDQXpERCIsInNvdXJjZXNDb250ZW50IjpbImRvY3VtZW50LmFkZEV2ZW50TGlzdGVuZXIoXCJET01Db250ZW50TG9hZGVkXCIsIGZ1bmN0aW9uKCkge1xuXG5cdHZhciBhY2NvcmRpb24gPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yQWxsKCcuYWNjb3JkaW9uX19oYW5kbGUnKTtcblx0aWYgKGFjY29yZGlvbikge1xuXHRcdGFjY29yZGlvbi5mb3JFYWNoKGZ1bmN0aW9uKGl0ZW0pIHtcblx0XHRcdGl0ZW0uYWRkRXZlbnRMaXN0ZW5lcignY2xpY2snLCBmdW5jdGlvbigpIHtcblx0XHRcdFx0dmFyIGV4cGFuZGVkID0gdGhpcy5nZXRBdHRyaWJ1dGUoJ2FyaWEtZXhwYW5kZWQnKSxcblx0XHRcdFx0ZGlkID0gdGhpcy5nZXRBdHRyaWJ1dGUoJ2FyaWEtY29udHJvbHMnKSxcblx0XHRcdFx0dGFyZ2V0ID0gZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoZGlkKTtcblxuXHRcdFx0XHRpZiAodGFyZ2V0KSB7XG5cdFx0XHRcdFx0dGFyZ2V0LmNsYXNzTGlzdC50b2dnbGUoJ2lzLW9wZW4nKTtcblx0XHRcdFx0fVxuXG5cdFx0XHRcdGV4cGFuZGVkID0gZXhwYW5kZWQgPT0gJ3RydWUnID8gJ2ZhbHNlJyA6ICd0cnVlJztcblxuXHRcdFx0XHR0aGlzLnNldEF0dHJpYnV0ZShcImFyaWEtZXhwYW5kZWRcIiwgZXhwYW5kZWQpO1xuXHRcdFx0XHR0aGlzLmNsYXNzTGlzdC50b2dnbGUoJ2lzLWFjdGl2ZScpO1xuXHRcdFx0fSk7XG5cdFx0fSk7XG5cdH1cblxuXHR2YXIgc2hvd0FsbCA9IGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCd0b2dnbGVBbGwnKTtcblx0dmFyIGFjY29yZGlvbkJ0bnMgPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yQWxsKCcuYWNjb3JkaW9uX19oYW5kbGUnKTtcblx0dmFyIGFjY29yZGlvbkl0ZW1zID0gZG9jdW1lbnQucXVlcnlTZWxlY3RvckFsbCgnLmFjY29yZGlvbl9fYm9keScpO1xuXG5cdGlmKHNob3dBbGwpIHtcblx0XHRzaG93QWxsLmFkZEV2ZW50TGlzdGVuZXIoJ2NsaWNrJywgZnVuY3Rpb24oZSkge1xuXHRcdFx0ZS5wcmV2ZW50RGVmYXVsdCgpO1xuXHRcdFx0Zm9yICh2YXIgaSA9IDA7IGkgPCBhY2NvcmRpb25JdGVtcy5sZW5ndGg7IGkrKykge1xuXHRcdFx0XHRhY2NvcmRpb25JdGVtc1tpXS5jbGFzc0xpc3QuYWRkKCdpcy1vcGVuJyk7XG5cdFx0XHR9XG5cdFx0XHRmb3IgKHZhciB4ID0gMDsgeCA8IGFjY29yZGlvbkJ0bnMubGVuZ3RoOyB4KyspIHtcblx0XHRcdFx0YWNjb3JkaW9uQnRuc1tpXS5zZXRBdHRyaWJ1dGUoXCJhcmlhLWV4cGFuZGVkXCIsIFwidHJ1ZVwiKTtcblx0XHRcdFx0YWNjb3JkaW9uQnRuc1tpXS5jbGFzc0xpc3QuYWRkKCdpcy1hY3RpdmUnKTtcblx0XHRcdH1cblx0XHR9KTtcblx0fVxuXG5cdHZhciBnZXRBY2NvcmRpb24gPSB3aW5kb3cubG9jYXRpb24uaGFzaC5zdWJzdHJpbmcoMSksXG5cdGFjY29yZGlvbkVudHJ5ID0gZmFsc2U7XG5cblx0aWYgKGdldEFjY29yZGlvbi5sZW5ndGggPiAwKSB7XG5cdFx0dHJ5IHtcblx0XHRcdGFjY29yZGlvbkVudHJ5ID0gZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoZ2V0QWNjb3JkaW9uKTtcblx0XHR9IGNhdGNoKGUpIHsgfVxuXHR9XG5cblx0aWYgKGFjY29yZGlvbkVudHJ5KSB7XG5cdFx0dmFyIGRpZCA9IGFjY29yZGlvbkVudHJ5LmdldEF0dHJpYnV0ZSgnYXJpYS1jb250cm9scycpLFxuXHRcdHRhcmdldCA9IGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKGRpZCk7XG5cblx0XHRpZiAodGFyZ2V0KSB7XG5cdFx0XHR0YXJnZXQuY2xhc3NMaXN0LnRvZ2dsZSgnaXMtb3BlbicpO1xuXHRcdH1cblx0fVxuXG59KTtcbiJdLCJmaWxlIjoiLi9zcmMvanMvY29tcG9uZW50cy9hY2NvcmRpb24uanMuanMiLCJzb3VyY2VSb290IjoiIn0=\n//# sourceURL=webpack-internal:///./src/js/components/accordion.js\n");

/***/ }),

/***/ "./src/js/components/cookie.js":
/*!*************************************!*\
  !*** ./src/js/components/cookie.js ***!
  \*************************************/
/***/ (() => {

"use strict";
eval("\n\n(function () {\n  var cookie = localStorage.getItem('hideCookieBanner');\n  var cookieAlert = document.querySelector('.cookie-alert');\n  var cookieBtn = document.querySelector('.cookie-alert__btn'); // if local storage key isn't found, set it to false\n\n  if (cookie === null) {\n    localStorage.setItem('hideCookieBanner', 'false');\n  } // If key is false or not set, show banner\n\n\n  if (cookie === 'false' || cookie === null) {\n    cookieAlert.classList.add('is-visible');\n  } // Hide banner and set local storage key on click\n\n\n  cookieBtn.addEventListener('click', function (event) {\n    localStorage.setItem('hideCookieBanner', 'true');\n    cookieAlert.classList.remove('is-visible');\n  });\n})();//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiLi9zcmMvanMvY29tcG9uZW50cy9jb29raWUuanMuanMiLCJtYXBwaW5ncyI6IkFBQWE7O0FBRVosYUFBWTtBQUVaLE1BQUlBLE1BQU0sR0FBR0MsWUFBWSxDQUFDQyxPQUFiLENBQXFCLGtCQUFyQixDQUFiO0FBQ0EsTUFBSUMsV0FBVyxHQUFHQyxRQUFRLENBQUNDLGFBQVQsQ0FBdUIsZUFBdkIsQ0FBbEI7QUFDQSxNQUFJQyxTQUFTLEdBQUdGLFFBQVEsQ0FBQ0MsYUFBVCxDQUF1QixvQkFBdkIsQ0FBaEIsQ0FKWSxDQU1aOztBQUNBLE1BQUlMLE1BQU0sS0FBSyxJQUFmLEVBQXFCO0FBQ3BCQyxJQUFBQSxZQUFZLENBQUNNLE9BQWIsQ0FBcUIsa0JBQXJCLEVBQXlDLE9BQXpDO0FBQ0EsR0FUVyxDQVdaOzs7QUFDQSxNQUFJUCxNQUFNLEtBQUssT0FBWCxJQUFzQkEsTUFBTSxLQUFLLElBQXJDLEVBQTJDO0FBQzFDRyxJQUFBQSxXQUFXLENBQUNLLFNBQVosQ0FBc0JDLEdBQXRCLENBQTBCLFlBQTFCO0FBQ0EsR0FkVyxDQWdCWjs7O0FBQ0FILEVBQUFBLFNBQVMsQ0FBQ0ksZ0JBQVYsQ0FBMkIsT0FBM0IsRUFBb0MsVUFBVUMsS0FBVixFQUFpQjtBQUNwRFYsSUFBQUEsWUFBWSxDQUFDTSxPQUFiLENBQXFCLGtCQUFyQixFQUF5QyxNQUF6QztBQUNBSixJQUFBQSxXQUFXLENBQUNLLFNBQVosQ0FBc0JJLE1BQXRCLENBQTZCLFlBQTdCO0FBQ0EsR0FIRDtBQUtBLENBdEJBLEdBQUQiLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly9vcmlnaW4vLi9zcmMvanMvY29tcG9uZW50cy9jb29raWUuanM/MGZiNSJdLCJzb3VyY2VzQ29udGVudCI6WyIndXNlIHN0cmljdCc7XG5cbihmdW5jdGlvbiAoKSB7XG5cblx0dmFyIGNvb2tpZSA9IGxvY2FsU3RvcmFnZS5nZXRJdGVtKCdoaWRlQ29va2llQmFubmVyJyk7XG5cdHZhciBjb29raWVBbGVydCA9IGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3IoJy5jb29raWUtYWxlcnQnKTtcblx0dmFyIGNvb2tpZUJ0biA9IGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3IoJy5jb29raWUtYWxlcnRfX2J0bicpO1xuXG5cdC8vIGlmIGxvY2FsIHN0b3JhZ2Uga2V5IGlzbid0IGZvdW5kLCBzZXQgaXQgdG8gZmFsc2Vcblx0aWYgKGNvb2tpZSA9PT0gbnVsbCkge1xuXHRcdGxvY2FsU3RvcmFnZS5zZXRJdGVtKCdoaWRlQ29va2llQmFubmVyJywgJ2ZhbHNlJyk7XG5cdH1cblxuXHQvLyBJZiBrZXkgaXMgZmFsc2Ugb3Igbm90IHNldCwgc2hvdyBiYW5uZXJcblx0aWYgKGNvb2tpZSA9PT0gJ2ZhbHNlJyB8fCBjb29raWUgPT09IG51bGwpIHtcblx0XHRjb29raWVBbGVydC5jbGFzc0xpc3QuYWRkKCdpcy12aXNpYmxlJyk7XG5cdH1cblxuXHQvLyBIaWRlIGJhbm5lciBhbmQgc2V0IGxvY2FsIHN0b3JhZ2Uga2V5IG9uIGNsaWNrXG5cdGNvb2tpZUJ0bi5hZGRFdmVudExpc3RlbmVyKCdjbGljaycsIGZ1bmN0aW9uIChldmVudCkge1xuXHRcdGxvY2FsU3RvcmFnZS5zZXRJdGVtKCdoaWRlQ29va2llQmFubmVyJywgJ3RydWUnKTtcblx0XHRjb29raWVBbGVydC5jbGFzc0xpc3QucmVtb3ZlKCdpcy12aXNpYmxlJyk7XG5cdH0pO1xuXG59KCkpO1xuIl0sIm5hbWVzIjpbImNvb2tpZSIsImxvY2FsU3RvcmFnZSIsImdldEl0ZW0iLCJjb29raWVBbGVydCIsImRvY3VtZW50IiwicXVlcnlTZWxlY3RvciIsImNvb2tpZUJ0biIsInNldEl0ZW0iLCJjbGFzc0xpc3QiLCJhZGQiLCJhZGRFdmVudExpc3RlbmVyIiwiZXZlbnQiLCJyZW1vdmUiXSwic291cmNlUm9vdCI6IiJ9\n//# sourceURL=webpack-internal:///./src/js/components/cookie.js\n");

/***/ }),

/***/ "./src/js/components/no-js.js":
/*!************************************!*\
  !*** ./src/js/components/no-js.js ***!
  \************************************/
/***/ (() => {

"use strict";
eval("\n\ndocument.addEventListener(\"DOMContentLoaded\", function () {\n  document.body.classList.remove(\"no-js\");\n  document.body.classList.add(\"js\");\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiLi9zcmMvanMvY29tcG9uZW50cy9uby1qcy5qcy5qcyIsIm1hcHBpbmdzIjoiQUFBYTs7QUFFYkEsUUFBUSxDQUFDQyxnQkFBVCxDQUEwQixrQkFBMUIsRUFBOEMsWUFBVztBQUN4REQsRUFBQUEsUUFBUSxDQUFDRSxJQUFULENBQWNDLFNBQWQsQ0FBd0JDLE1BQXhCLENBQStCLE9BQS9CO0FBQ0FKLEVBQUFBLFFBQVEsQ0FBQ0UsSUFBVCxDQUFjQyxTQUFkLENBQXdCRSxHQUF4QixDQUE0QixJQUE1QjtBQUNBLENBSEQiLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly9vcmlnaW4vLi9zcmMvanMvY29tcG9uZW50cy9uby1qcy5qcz82ZGJkIl0sInNvdXJjZXNDb250ZW50IjpbIid1c2Ugc3RyaWN0JztcblxuZG9jdW1lbnQuYWRkRXZlbnRMaXN0ZW5lcihcIkRPTUNvbnRlbnRMb2FkZWRcIiwgZnVuY3Rpb24oKSB7XG5cdGRvY3VtZW50LmJvZHkuY2xhc3NMaXN0LnJlbW92ZShcIm5vLWpzXCIpO1xuXHRkb2N1bWVudC5ib2R5LmNsYXNzTGlzdC5hZGQoXCJqc1wiKTtcbn0pO1xuIl0sIm5hbWVzIjpbImRvY3VtZW50IiwiYWRkRXZlbnRMaXN0ZW5lciIsImJvZHkiLCJjbGFzc0xpc3QiLCJyZW1vdmUiLCJhZGQiXSwic291cmNlUm9vdCI6IiJ9\n//# sourceURL=webpack-internal:///./src/js/components/no-js.js\n");

/***/ }),

/***/ "./src/js/components/toggle.js":
/*!*************************************!*\
  !*** ./src/js/components/toggle.js ***!
  \*************************************/
/***/ (() => {

"use strict";
eval("\n/**\n * Toggle script that is useful for showing navigation, modals, etc.\n *\n * The following data attributes are supported:\n *\n * data-toggle\n * data-toggle-class\n * data-toggle-body-class\n */\n\n(function () {\n  var elements = document.querySelectorAll('[data-toggle]');\n\n  if (elements.length === 0) {\n    return false;\n  }\n\n  elements.forEach(function (element) {\n    var targetElement = document.querySelector(element.dataset.toggle);\n\n    if (!targetElement) {\n      return;\n    }\n\n    var bodyClass = element.dataset.toggleBodyClass;\n    var toggleClass = element.dataset.toggleClass || 'is-toggled';\n    element.addEventListener('click', function () {\n      var isToggled = element.classList.contains(toggleClass);\n      targetElement.classList.toggle(toggleClass);\n      element.classList.toggle(toggleClass);\n      element.setAttribute('aria-expanded', isToggled ? 'false' : 'true');\n      targetElement.setAttribute('aria-hidden', isToggled ? 'true' : 'false');\n\n      if (bodyClass) {\n        document.body.classList.toggle(bodyClass);\n      }\n    }, false);\n  });\n})();//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiLi9zcmMvanMvY29tcG9uZW50cy90b2dnbGUuanMuanMiLCJtYXBwaW5ncyI6IkFBQWE7QUFFYjtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7O0FBRUMsYUFBWTtBQUNaLE1BQU1BLFFBQVEsR0FBR0MsUUFBUSxDQUFDQyxnQkFBVCxDQUEwQixlQUExQixDQUFqQjs7QUFFQSxNQUFJRixRQUFRLENBQUNHLE1BQVQsS0FBb0IsQ0FBeEIsRUFBMkI7QUFDMUIsV0FBTyxLQUFQO0FBQ0E7O0FBRURILEVBQUFBLFFBQVEsQ0FBQ0ksT0FBVCxDQUFpQixVQUFBQyxPQUFPLEVBQUk7QUFDM0IsUUFBTUMsYUFBYSxHQUFHTCxRQUFRLENBQUNNLGFBQVQsQ0FBdUJGLE9BQU8sQ0FBQ0csT0FBUixDQUFnQkMsTUFBdkMsQ0FBdEI7O0FBRUEsUUFBSSxDQUFDSCxhQUFMLEVBQW9CO0FBQ25CO0FBQ0E7O0FBRUQsUUFBTUksU0FBUyxHQUFHTCxPQUFPLENBQUNHLE9BQVIsQ0FBZ0JHLGVBQWxDO0FBQ0EsUUFBTUMsV0FBVyxHQUFHUCxPQUFPLENBQUNHLE9BQVIsQ0FBZ0JJLFdBQWhCLElBQStCLFlBQW5EO0FBRUFQLElBQUFBLE9BQU8sQ0FBQ1EsZ0JBQVIsQ0FBeUIsT0FBekIsRUFBa0MsWUFBTTtBQUN2QyxVQUFNQyxTQUFTLEdBQUdULE9BQU8sQ0FBQ1UsU0FBUixDQUFrQkMsUUFBbEIsQ0FBMkJKLFdBQTNCLENBQWxCO0FBQ0FOLE1BQUFBLGFBQWEsQ0FBQ1MsU0FBZCxDQUF3Qk4sTUFBeEIsQ0FBK0JHLFdBQS9CO0FBQ0FQLE1BQUFBLE9BQU8sQ0FBQ1UsU0FBUixDQUFrQk4sTUFBbEIsQ0FBeUJHLFdBQXpCO0FBRUFQLE1BQUFBLE9BQU8sQ0FBQ1ksWUFBUixDQUFxQixlQUFyQixFQUFzQ0gsU0FBUyxHQUFHLE9BQUgsR0FBYSxNQUE1RDtBQUNBUixNQUFBQSxhQUFhLENBQUNXLFlBQWQsQ0FBMkIsYUFBM0IsRUFBMENILFNBQVMsR0FBRyxNQUFILEdBQVksT0FBL0Q7O0FBRUEsVUFBSUosU0FBSixFQUFlO0FBQ2RULFFBQUFBLFFBQVEsQ0FBQ2lCLElBQVQsQ0FBY0gsU0FBZCxDQUF3Qk4sTUFBeEIsQ0FBK0JDLFNBQS9CO0FBQ0E7QUFDRCxLQVhELEVBV0csS0FYSDtBQVlBLEdBdEJEO0FBdUJBLENBOUJBLEdBQUQiLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly9vcmlnaW4vLi9zcmMvanMvY29tcG9uZW50cy90b2dnbGUuanM/NjRlMyJdLCJzb3VyY2VzQ29udGVudCI6WyIndXNlIHN0cmljdCc7XG5cbi8qKlxuICogVG9nZ2xlIHNjcmlwdCB0aGF0IGlzIHVzZWZ1bCBmb3Igc2hvd2luZyBuYXZpZ2F0aW9uLCBtb2RhbHMsIGV0Yy5cbiAqXG4gKiBUaGUgZm9sbG93aW5nIGRhdGEgYXR0cmlidXRlcyBhcmUgc3VwcG9ydGVkOlxuICpcbiAqIGRhdGEtdG9nZ2xlXG4gKiBkYXRhLXRvZ2dsZS1jbGFzc1xuICogZGF0YS10b2dnbGUtYm9keS1jbGFzc1xuICovXG5cbihmdW5jdGlvbiAoKSB7XG5cdGNvbnN0IGVsZW1lbnRzID0gZG9jdW1lbnQucXVlcnlTZWxlY3RvckFsbCgnW2RhdGEtdG9nZ2xlXScpO1xuXHRcblx0aWYgKGVsZW1lbnRzLmxlbmd0aCA9PT0gMCkge1xuXHRcdHJldHVybiBmYWxzZTtcblx0fVxuXHRcblx0ZWxlbWVudHMuZm9yRWFjaChlbGVtZW50ID0+IHtcblx0XHRjb25zdCB0YXJnZXRFbGVtZW50ID0gZG9jdW1lbnQucXVlcnlTZWxlY3RvcihlbGVtZW50LmRhdGFzZXQudG9nZ2xlKTtcblx0XG5cdFx0aWYgKCF0YXJnZXRFbGVtZW50KSB7XG5cdFx0XHRyZXR1cm47XG5cdFx0fVxuXHRcdFxuXHRcdGNvbnN0IGJvZHlDbGFzcyA9IGVsZW1lbnQuZGF0YXNldC50b2dnbGVCb2R5Q2xhc3M7XG5cdFx0Y29uc3QgdG9nZ2xlQ2xhc3MgPSBlbGVtZW50LmRhdGFzZXQudG9nZ2xlQ2xhc3MgfHwgJ2lzLXRvZ2dsZWQnO1xuXHRcblx0XHRlbGVtZW50LmFkZEV2ZW50TGlzdGVuZXIoJ2NsaWNrJywgKCkgPT4ge1xuXHRcdFx0Y29uc3QgaXNUb2dnbGVkID0gZWxlbWVudC5jbGFzc0xpc3QuY29udGFpbnModG9nZ2xlQ2xhc3MpO1xuXHRcdFx0dGFyZ2V0RWxlbWVudC5jbGFzc0xpc3QudG9nZ2xlKHRvZ2dsZUNsYXNzKTtcblx0XHRcdGVsZW1lbnQuY2xhc3NMaXN0LnRvZ2dsZSh0b2dnbGVDbGFzcyk7XG5cdFx0XHRcblx0XHRcdGVsZW1lbnQuc2V0QXR0cmlidXRlKCdhcmlhLWV4cGFuZGVkJywgaXNUb2dnbGVkID8gJ2ZhbHNlJyA6ICd0cnVlJyk7XG5cdFx0XHR0YXJnZXRFbGVtZW50LnNldEF0dHJpYnV0ZSgnYXJpYS1oaWRkZW4nLCBpc1RvZ2dsZWQgPyAndHJ1ZScgOiAnZmFsc2UnKTtcblx0XHRcdFxuXHRcdFx0aWYgKGJvZHlDbGFzcykge1xuXHRcdFx0XHRkb2N1bWVudC5ib2R5LmNsYXNzTGlzdC50b2dnbGUoYm9keUNsYXNzKTtcblx0XHRcdH1cblx0XHR9LCBmYWxzZSk7XG5cdH0pO1xufSgpKTtcbiJdLCJuYW1lcyI6WyJlbGVtZW50cyIsImRvY3VtZW50IiwicXVlcnlTZWxlY3RvckFsbCIsImxlbmd0aCIsImZvckVhY2giLCJlbGVtZW50IiwidGFyZ2V0RWxlbWVudCIsInF1ZXJ5U2VsZWN0b3IiLCJkYXRhc2V0IiwidG9nZ2xlIiwiYm9keUNsYXNzIiwidG9nZ2xlQm9keUNsYXNzIiwidG9nZ2xlQ2xhc3MiLCJhZGRFdmVudExpc3RlbmVyIiwiaXNUb2dnbGVkIiwiY2xhc3NMaXN0IiwiY29udGFpbnMiLCJzZXRBdHRyaWJ1dGUiLCJib2R5Il0sInNvdXJjZVJvb3QiOiIifQ==\n//# sourceURL=webpack-internal:///./src/js/components/toggle.js\n");

/***/ }),

/***/ "./src/js/components/unsupported-browsers.js":
/*!***************************************************!*\
  !*** ./src/js/components/unsupported-browsers.js ***!
  \***************************************************/
/***/ (() => {

"use strict";
eval("\n\n(function () {\n  var ua = window.navigator.userAgent;\n  var msie = ua.indexOf('MSIE ');\n  var trident = ua.indexOf('Trident/');\n  var browserAlert = document.querySelector('.unsupported-browser');\n\n  if (msie > 0 || trident > 0) {\n    browserAlert.setAttribute('style', 'display: block;');\n  }\n})();//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiLi9zcmMvanMvY29tcG9uZW50cy91bnN1cHBvcnRlZC1icm93c2Vycy5qcy5qcyIsIm1hcHBpbmdzIjoiQUFBYTs7QUFFWixhQUFZO0FBRVosTUFBSUEsRUFBRSxHQUFHQyxNQUFNLENBQUNDLFNBQVAsQ0FBaUJDLFNBQTFCO0FBQ0EsTUFBSUMsSUFBSSxHQUFHSixFQUFFLENBQUNLLE9BQUgsQ0FBVyxPQUFYLENBQVg7QUFDQSxNQUFJQyxPQUFPLEdBQUdOLEVBQUUsQ0FBQ0ssT0FBSCxDQUFXLFVBQVgsQ0FBZDtBQUNBLE1BQUlFLFlBQVksR0FBR0MsUUFBUSxDQUFDQyxhQUFULENBQXVCLHNCQUF2QixDQUFuQjs7QUFFQSxNQUFJTCxJQUFJLEdBQUcsQ0FBUCxJQUFZRSxPQUFPLEdBQUcsQ0FBMUIsRUFBNkI7QUFDNUJDLElBQUFBLFlBQVksQ0FBQ0csWUFBYixDQUEwQixPQUExQixFQUFtQyxpQkFBbkM7QUFDQTtBQUVELENBWEEsR0FBRCIsInNvdXJjZXMiOlsid2VicGFjazovL29yaWdpbi8uL3NyYy9qcy9jb21wb25lbnRzL3Vuc3VwcG9ydGVkLWJyb3dzZXJzLmpzP2RkMDciXSwic291cmNlc0NvbnRlbnQiOlsiJ3VzZSBzdHJpY3QnO1xuXG4oZnVuY3Rpb24gKCkge1xuXG5cdHZhciB1YSA9IHdpbmRvdy5uYXZpZ2F0b3IudXNlckFnZW50O1xuXHR2YXIgbXNpZSA9IHVhLmluZGV4T2YoJ01TSUUgJyk7XG5cdHZhciB0cmlkZW50ID0gdWEuaW5kZXhPZignVHJpZGVudC8nKTtcblx0dmFyIGJyb3dzZXJBbGVydCA9IGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3IoJy51bnN1cHBvcnRlZC1icm93c2VyJyk7XG5cblx0aWYgKG1zaWUgPiAwIHx8IHRyaWRlbnQgPiAwKSB7XG5cdFx0YnJvd3NlckFsZXJ0LnNldEF0dHJpYnV0ZSgnc3R5bGUnLCAnZGlzcGxheTogYmxvY2s7Jyk7XG5cdH1cblxufSgpKTtcbiJdLCJuYW1lcyI6WyJ1YSIsIndpbmRvdyIsIm5hdmlnYXRvciIsInVzZXJBZ2VudCIsIm1zaWUiLCJpbmRleE9mIiwidHJpZGVudCIsImJyb3dzZXJBbGVydCIsImRvY3VtZW50IiwicXVlcnlTZWxlY3RvciIsInNldEF0dHJpYnV0ZSJdLCJzb3VyY2VSb290IjoiIn0=\n//# sourceURL=webpack-internal:///./src/js/components/unsupported-browsers.js\n");

/***/ }),

/***/ "./src/js/scripts.js":
/*!***************************!*\
  !*** ./src/js/scripts.js ***!
  \***************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var _components_no_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./components/no-js */ \"./src/js/components/no-js.js\");\n/* harmony import */ var _components_no_js__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_components_no_js__WEBPACK_IMPORTED_MODULE_0__);\n/* harmony import */ var _components_cookie__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./components/cookie */ \"./src/js/components/cookie.js\");\n/* harmony import */ var _components_cookie__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_components_cookie__WEBPACK_IMPORTED_MODULE_1__);\n/* harmony import */ var _components_unsupported_browsers__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./components/unsupported-browsers */ \"./src/js/components/unsupported-browsers.js\");\n/* harmony import */ var _components_unsupported_browsers__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(_components_unsupported_browsers__WEBPACK_IMPORTED_MODULE_2__);\n/* harmony import */ var _components_toggle__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./components/toggle */ \"./src/js/components/toggle.js\");\n/* harmony import */ var _components_toggle__WEBPACK_IMPORTED_MODULE_3___default = /*#__PURE__*/__webpack_require__.n(_components_toggle__WEBPACK_IMPORTED_MODULE_3__);\n/* harmony import */ var _components_accordion__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ./components/accordion */ \"./src/js/components/accordion.js\");\n/* harmony import */ var _components_accordion__WEBPACK_IMPORTED_MODULE_4___default = /*#__PURE__*/__webpack_require__.n(_components_accordion__WEBPACK_IMPORTED_MODULE_4__);\n\n\n\n\n\n\n//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiLi9zcmMvanMvc2NyaXB0cy5qcy5qcyIsIm1hcHBpbmdzIjoiOzs7Ozs7Ozs7OztBQUFhOztBQUViO0FBQ0E7QUFDQTtBQUNBIiwic291cmNlcyI6WyJ3ZWJwYWNrOi8vb3JpZ2luLy4vc3JjL2pzL3NjcmlwdHMuanM/YWI4ZiJdLCJzb3VyY2VzQ29udGVudCI6WyIndXNlIHN0cmljdCc7XG5cbmltcG9ydCAnLi9jb21wb25lbnRzL25vLWpzJztcbmltcG9ydCAnLi9jb21wb25lbnRzL2Nvb2tpZSc7XG5pbXBvcnQgJy4vY29tcG9uZW50cy91bnN1cHBvcnRlZC1icm93c2Vycyc7XG5pbXBvcnQgJy4vY29tcG9uZW50cy90b2dnbGUnO1xuaW1wb3J0ICcuL2NvbXBvbmVudHMvYWNjb3JkaW9uJztcbiJdLCJuYW1lcyI6W10sInNvdXJjZVJvb3QiOiIifQ==\n//# sourceURL=webpack-internal:///./src/js/scripts.js\n");

/***/ }),

/***/ "./src/styles/styles.scss":
/*!********************************!*\
  !*** ./src/styles/styles.scss ***!
  \********************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n// extracted by mini-css-extract-plugin\n//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiLi9zcmMvc3R5bGVzL3N0eWxlcy5zY3NzLmpzIiwibWFwcGluZ3MiOiI7QUFBQSIsInNvdXJjZXMiOlsid2VicGFjazovL29yaWdpbi8uL3NyYy9zdHlsZXMvc3R5bGVzLnNjc3M/OTFjYSJdLCJzb3VyY2VzQ29udGVudCI6WyIvLyBleHRyYWN0ZWQgYnkgbWluaS1jc3MtZXh0cmFjdC1wbHVnaW5cbmV4cG9ydCB7fTsiXSwibmFtZXMiOltdLCJzb3VyY2VSb290IjoiIn0=\n//# sourceURL=webpack-internal:///./src/styles/styles.scss\n");

/***/ }),

/***/ "./src/styles/editor-style.scss":
/*!**************************************!*\
  !*** ./src/styles/editor-style.scss ***!
  \**************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n// extracted by mini-css-extract-plugin\n//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiLi9zcmMvc3R5bGVzL2VkaXRvci1zdHlsZS5zY3NzLmpzIiwibWFwcGluZ3MiOiI7QUFBQSIsInNvdXJjZXMiOlsid2VicGFjazovL29yaWdpbi8uL3NyYy9zdHlsZXMvZWRpdG9yLXN0eWxlLnNjc3M/MjJlMyJdLCJzb3VyY2VzQ29udGVudCI6WyIvLyBleHRyYWN0ZWQgYnkgbWluaS1jc3MtZXh0cmFjdC1wbHVnaW5cbmV4cG9ydCB7fTsiXSwibmFtZXMiOltdLCJzb3VyY2VSb290IjoiIn0=\n//# sourceURL=webpack-internal:///./src/styles/editor-style.scss\n");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = __webpack_modules__;
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/chunk loaded */
/******/ 	(() => {
/******/ 		var deferred = [];
/******/ 		__webpack_require__.O = (result, chunkIds, fn, priority) => {
/******/ 			if(chunkIds) {
/******/ 				priority = priority || 0;
/******/ 				for(var i = deferred.length; i > 0 && deferred[i - 1][2] > priority; i--) deferred[i] = deferred[i - 1];
/******/ 				deferred[i] = [chunkIds, fn, priority];
/******/ 				return;
/******/ 			}
/******/ 			var notFulfilled = Infinity;
/******/ 			for (var i = 0; i < deferred.length; i++) {
/******/ 				var [chunkIds, fn, priority] = deferred[i];
/******/ 				var fulfilled = true;
/******/ 				for (var j = 0; j < chunkIds.length; j++) {
/******/ 					if ((priority & 1 === 0 || notFulfilled >= priority) && Object.keys(__webpack_require__.O).every((key) => (__webpack_require__.O[key](chunkIds[j])))) {
/******/ 						chunkIds.splice(j--, 1);
/******/ 					} else {
/******/ 						fulfilled = false;
/******/ 						if(priority < notFulfilled) notFulfilled = priority;
/******/ 					}
/******/ 				}
/******/ 				if(fulfilled) {
/******/ 					deferred.splice(i--, 1)
/******/ 					var r = fn();
/******/ 					if (r !== undefined) result = r;
/******/ 				}
/******/ 			}
/******/ 			return result;
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/compat get default export */
/******/ 	(() => {
/******/ 		// getDefaultExport function for compatibility with non-harmony modules
/******/ 		__webpack_require__.n = (module) => {
/******/ 			var getter = module && module.__esModule ?
/******/ 				() => (module['default']) :
/******/ 				() => (module);
/******/ 			__webpack_require__.d(getter, { a: getter });
/******/ 			return getter;
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/define property getters */
/******/ 	(() => {
/******/ 		// define getter functions for harmony exports
/******/ 		__webpack_require__.d = (exports, definition) => {
/******/ 			for(var key in definition) {
/******/ 				if(__webpack_require__.o(definition, key) && !__webpack_require__.o(exports, key)) {
/******/ 					Object.defineProperty(exports, key, { enumerable: true, get: definition[key] });
/******/ 				}
/******/ 			}
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	(() => {
/******/ 		__webpack_require__.o = (obj, prop) => (Object.prototype.hasOwnProperty.call(obj, prop))
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/jsonp chunk loading */
/******/ 	(() => {
/******/ 		// no baseURI
/******/ 		
/******/ 		// object to store loaded and loading chunks
/******/ 		// undefined = chunk not loaded, null = chunk preloaded/prefetched
/******/ 		// [resolve, reject, Promise] = chunk loading, 0 = chunk loaded
/******/ 		var installedChunks = {
/******/ 			"/js/scripts": 0,
/******/ 			"css/editor-style": 0,
/******/ 			"css/styles": 0
/******/ 		};
/******/ 		
/******/ 		// no chunk on demand loading
/******/ 		
/******/ 		// no prefetching
/******/ 		
/******/ 		// no preloaded
/******/ 		
/******/ 		// no HMR
/******/ 		
/******/ 		// no HMR manifest
/******/ 		
/******/ 		__webpack_require__.O.j = (chunkId) => (installedChunks[chunkId] === 0);
/******/ 		
/******/ 		// install a JSONP callback for chunk loading
/******/ 		var webpackJsonpCallback = (parentChunkLoadingFunction, data) => {
/******/ 			var [chunkIds, moreModules, runtime] = data;
/******/ 			// add "moreModules" to the modules object,
/******/ 			// then flag all "chunkIds" as loaded and fire callback
/******/ 			var moduleId, chunkId, i = 0;
/******/ 			if(chunkIds.some((id) => (installedChunks[id] !== 0))) {
/******/ 				for(moduleId in moreModules) {
/******/ 					if(__webpack_require__.o(moreModules, moduleId)) {
/******/ 						__webpack_require__.m[moduleId] = moreModules[moduleId];
/******/ 					}
/******/ 				}
/******/ 				if(runtime) var result = runtime(__webpack_require__);
/******/ 			}
/******/ 			if(parentChunkLoadingFunction) parentChunkLoadingFunction(data);
/******/ 			for(;i < chunkIds.length; i++) {
/******/ 				chunkId = chunkIds[i];
/******/ 				if(__webpack_require__.o(installedChunks, chunkId) && installedChunks[chunkId]) {
/******/ 					installedChunks[chunkId][0]();
/******/ 				}
/******/ 				installedChunks[chunkId] = 0;
/******/ 			}
/******/ 			return __webpack_require__.O(result);
/******/ 		}
/******/ 		
/******/ 		var chunkLoadingGlobal = self["webpackChunkorigin"] = self["webpackChunkorigin"] || [];
/******/ 		chunkLoadingGlobal.forEach(webpackJsonpCallback.bind(null, 0));
/******/ 		chunkLoadingGlobal.push = webpackJsonpCallback.bind(null, chunkLoadingGlobal.push.bind(chunkLoadingGlobal));
/******/ 	})();
/******/ 	
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module depends on other loaded chunks and execution need to be delayed
/******/ 	__webpack_require__.O(undefined, ["css/editor-style","css/styles"], () => (__webpack_require__("./src/js/scripts.js")))
/******/ 	__webpack_require__.O(undefined, ["css/editor-style","css/styles"], () => (__webpack_require__("./src/styles/styles.scss")))
/******/ 	var __webpack_exports__ = __webpack_require__.O(undefined, ["css/editor-style","css/styles"], () => (__webpack_require__("./src/styles/editor-style.scss")))
/******/ 	__webpack_exports__ = __webpack_require__.O(__webpack_exports__);
/******/ 	
/******/ })()
;