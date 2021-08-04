(self["webpackChunk"] = self["webpackChunk"] || []).push([["datatables"],{

/***/ "./assets/images/dashboard/advanced-table/details_close.png":
/*!******************************************************************!*\
  !*** ./assets/images/dashboard/advanced-table/details_close.png ***!
  \******************************************************************/
/***/ ((module, __unused_webpack_exports, __webpack_require__) => {

"use strict";
module.exports = __webpack_require__.p + "images/details_close.5960a1a2.png";

/***/ }),

/***/ "./assets/images/dashboard/advanced-table/details_open.png":
/*!*****************************************************************!*\
  !*** ./assets/images/dashboard/advanced-table/details_open.png ***!
  \*****************************************************************/
/***/ ((module, __unused_webpack_exports, __webpack_require__) => {

"use strict";
module.exports = __webpack_require__.p + "images/details_open.f9d15039.png";

/***/ }),

/***/ "./assets/js/datatables.js":
/*!*********************************!*\
  !*** ./assets/js/datatables.js ***!
  \*********************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var core_js_modules_es_array_slice_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! core-js/modules/es.array.slice.js */ "./node_modules/core-js/modules/es.array.slice.js");
/* harmony import */ var core_js_modules_es_array_slice_js__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_slice_js__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var core_js_modules_es_object_to_string_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! core-js/modules/es.object.to-string.js */ "./node_modules/core-js/modules/es.object.to-string.js");
/* harmony import */ var core_js_modules_es_object_to_string_js__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_to_string_js__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var core_js_modules_es_function_name_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! core-js/modules/es.function.name.js */ "./node_modules/core-js/modules/es.function.name.js");
/* harmony import */ var core_js_modules_es_function_name_js__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_function_name_js__WEBPACK_IMPORTED_MODULE_2__);
/* harmony import */ var core_js_modules_es_array_from_js__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! core-js/modules/es.array.from.js */ "./node_modules/core-js/modules/es.array.from.js");
/* harmony import */ var core_js_modules_es_array_from_js__WEBPACK_IMPORTED_MODULE_3___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_from_js__WEBPACK_IMPORTED_MODULE_3__);
/* harmony import */ var core_js_modules_es_string_iterator_js__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! core-js/modules/es.string.iterator.js */ "./node_modules/core-js/modules/es.string.iterator.js");
/* harmony import */ var core_js_modules_es_string_iterator_js__WEBPACK_IMPORTED_MODULE_4___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_string_iterator_js__WEBPACK_IMPORTED_MODULE_4__);
/* harmony import */ var core_js_modules_es_symbol_js__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! core-js/modules/es.symbol.js */ "./node_modules/core-js/modules/es.symbol.js");
/* harmony import */ var core_js_modules_es_symbol_js__WEBPACK_IMPORTED_MODULE_5___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_symbol_js__WEBPACK_IMPORTED_MODULE_5__);
/* harmony import */ var core_js_modules_es_symbol_description_js__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! core-js/modules/es.symbol.description.js */ "./node_modules/core-js/modules/es.symbol.description.js");
/* harmony import */ var core_js_modules_es_symbol_description_js__WEBPACK_IMPORTED_MODULE_6___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_symbol_description_js__WEBPACK_IMPORTED_MODULE_6__);
/* harmony import */ var core_js_modules_es_symbol_iterator_js__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! core-js/modules/es.symbol.iterator.js */ "./node_modules/core-js/modules/es.symbol.iterator.js");
/* harmony import */ var core_js_modules_es_symbol_iterator_js__WEBPACK_IMPORTED_MODULE_7___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_symbol_iterator_js__WEBPACK_IMPORTED_MODULE_7__);
/* harmony import */ var core_js_modules_es_array_iterator_js__WEBPACK_IMPORTED_MODULE_8__ = __webpack_require__(/*! core-js/modules/es.array.iterator.js */ "./node_modules/core-js/modules/es.array.iterator.js");
/* harmony import */ var core_js_modules_es_array_iterator_js__WEBPACK_IMPORTED_MODULE_8___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_iterator_js__WEBPACK_IMPORTED_MODULE_8__);
/* harmony import */ var core_js_modules_web_dom_collections_iterator_js__WEBPACK_IMPORTED_MODULE_9__ = __webpack_require__(/*! core-js/modules/web.dom-collections.iterator.js */ "./node_modules/core-js/modules/web.dom-collections.iterator.js");
/* harmony import */ var core_js_modules_web_dom_collections_iterator_js__WEBPACK_IMPORTED_MODULE_9___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_web_dom_collections_iterator_js__WEBPACK_IMPORTED_MODULE_9__);
/* harmony import */ var core_js_modules_es_array_is_array_js__WEBPACK_IMPORTED_MODULE_10__ = __webpack_require__(/*! core-js/modules/es.array.is-array.js */ "./node_modules/core-js/modules/es.array.is-array.js");
/* harmony import */ var core_js_modules_es_array_is_array_js__WEBPACK_IMPORTED_MODULE_10___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_is_array_js__WEBPACK_IMPORTED_MODULE_10__);
/* harmony import */ var _images_dashboard_advanced_table_details_open_png__WEBPACK_IMPORTED_MODULE_11__ = __webpack_require__(/*! ../images/dashboard/advanced-table/details_open.png */ "./assets/images/dashboard/advanced-table/details_open.png");
/* harmony import */ var _images_dashboard_advanced_table_details_close_png__WEBPACK_IMPORTED_MODULE_12__ = __webpack_require__(/*! ../images/dashboard/advanced-table/details_close.png */ "./assets/images/dashboard/advanced-table/details_close.png");
/* provided dependency */ var $ = __webpack_require__(/*! jquery */ "./node_modules/jquery/dist/jquery.js");












function _createForOfIteratorHelper(o, allowArrayLike) { var it = typeof Symbol !== "undefined" && o[Symbol.iterator] || o["@@iterator"]; if (!it) { if (Array.isArray(o) || (it = _unsupportedIterableToArray(o)) || allowArrayLike && o && typeof o.length === "number") { if (it) o = it; var i = 0; var F = function F() {}; return { s: F, n: function n() { if (i >= o.length) return { done: true }; return { done: false, value: o[i++] }; }, e: function e(_e) { throw _e; }, f: F }; } throw new TypeError("Invalid attempt to iterate non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method."); } var normalCompletion = true, didErr = false, err; return { s: function s() { it = it.call(o); }, n: function n() { var step = it.next(); normalCompletion = step.done; return step; }, e: function e(_e2) { didErr = true; err = _e2; }, f: function f() { try { if (!normalCompletion && it["return"] != null) it["return"](); } finally { if (didErr) throw err; } } }; }

function _unsupportedIterableToArray(o, minLen) { if (!o) return; if (typeof o === "string") return _arrayLikeToArray(o, minLen); var n = Object.prototype.toString.call(o).slice(8, -1); if (n === "Object" && o.constructor) n = o.constructor.name; if (n === "Map" || n === "Set") return Array.from(o); if (n === "Arguments" || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)) return _arrayLikeToArray(o, minLen); }

function _arrayLikeToArray(arr, len) { if (len == null || len > arr.length) len = arr.length; for (var i = 0, arr2 = new Array(len); i < len; i++) { arr2[i] = arr[i]; } return arr2; }

// import '../../node_modules/datatables.net/js/jquery.dataTables'
// import '../../node_modules/datatables.net-dt/css/jquery.dataTables.min.css'


console.log('datatables'); // require('datatables.net');
// require('datatables.net-dt');

function fnFormatDetails(oTable, nTr) {
  var aData = oTable.fnGetData(nTr);
  var sOut = '<table cellpadding="0" cellspacing="0" border="0" class="table-details">';
  sOut += "<tr class=\"tr-details\"><td class=\"td-details\">Id: ".concat(aData[1], "</td></tr>");
  sOut += "<tr class=\"tr-details\"><td class=\"td-details\">Cr\xE9e le: ".concat(aData[3], "</td></tr>");
  sOut += "<tr class=\"tr-details\"><td class=\"td-details\">Contenu:<br>".concat(aData[7], "</td></tr>");
  sOut += '</table>';
  return sOut;
}
/*
    * Initialse DataTables, with no sorting on the 'details' column
    */


var oTable = $('#hidden-table-info').dataTable({
  displayLength: 10,
  sorting: [[1, 'desc']],
  // autoWidth: false,
  // fixedColumns: false,
  aLengthMenu: [[10, 25, 50, -1], [10, 25, 50, "Tous"]],
  columnDefs: [{
    width: '1%',
    targets: [0, 8, 9]
  }, {
    width: '5%',
    targets: [2, 4, 10]
  }, {
    width: '25%',
    targets: [5]
  }, {
    width: '40%',
    targets: [6]
  }, {
    visible: false,
    targets: [1, 7, 3]
  }, {
    bSortable: false,
    targets: [0, 11, 5]
  }],
  language: {
    url: '//cdn.datatables.net/plug-ins/1.10.25/i18n/French.json'
  }
});
/* Add event listener for opening and closing details
    * Note that the indicator for showing which row is open is not controlled by DataTables,
    * rather it is done here
    */

var images = document.querySelectorAll(".toggle-img");

var _iterator = _createForOfIteratorHelper(images),
    _step;

try {
  for (_iterator.s(); !(_step = _iterator.n()).done;) {
    var image = _step.value;
    image.addEventListener('click', function () {
      var nTr = $(this).parents('tr')[0];

      if (oTable.fnIsOpen(nTr)) {
        /* This row is already open - close it */
        this.src = _images_dashboard_advanced_table_details_open_png__WEBPACK_IMPORTED_MODULE_11__;
        oTable.fnClose(nTr);
      } else {
        /* Open this row */
        this.src = _images_dashboard_advanced_table_details_close_png__WEBPACK_IMPORTED_MODULE_12__;
        oTable.fnOpen(nTr, fnFormatDetails(oTable, nTr), 'details');
      }
    });
  } // Set the modal content

} catch (err) {
  _iterator.e(err);
} finally {
  _iterator.f();
}

function deleteModalConfirm(id) {
  var el = document.getElementById("deleteButton_".concat(id));
  var message = "\xCAtes-vous sur de vouloir supprimer le contenu contenant le titre <b>".concat(el.dataset.title, "</b> ?");
  document.getElementById('modal-title').innerHTML = "Suppression d'un contenu";
  document.getElementById('modal-content').innerHTML = message;
  document.getElementById('delete-confirm').href = "/dashboard/contents/delete/".concat(el.dataset.slug);
}

window.onload = function () {
  var privateCheckbox = document.querySelectorAll("[id*=private_]");

  var _iterator2 = _createForOfIteratorHelper(privateCheckbox),
      _step2;

  try {
    for (_iterator2.s(); !(_step2 = _iterator2.n()).done;) {
      var checkbox = _step2.value;
      checkbox.addEventListener("click", function () {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.open("get", "/dashboard/contents/switchPrivate/".concat(this.dataset.id));
        xmlhttp.send();
      });
    }
  } catch (err) {
    _iterator2.e(err);
  } finally {
    _iterator2.f();
  }

  var publishedCheckbox = document.querySelectorAll("[id*=published_]");

  var _iterator3 = _createForOfIteratorHelper(publishedCheckbox),
      _step3;

  try {
    for (_iterator3.s(); !(_step3 = _iterator3.n()).done;) {
      var _checkbox = _step3.value;

      _checkbox.addEventListener("click", function () {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.open("get", "/dashboard/contents/switchPublished/".concat(this.dataset.id));
        xmlhttp.send();
      });
    }
  } catch (err) {
    _iterator3.e(err);
  } finally {
    _iterator3.f();
  }
};

/***/ }),

/***/ "./node_modules/core-js/internals/array-from.js":
/*!******************************************************!*\
  !*** ./node_modules/core-js/internals/array-from.js ***!
  \******************************************************/
/***/ ((module, __unused_webpack_exports, __webpack_require__) => {

"use strict";

var bind = __webpack_require__(/*! ../internals/function-bind-context */ "./node_modules/core-js/internals/function-bind-context.js");
var toObject = __webpack_require__(/*! ../internals/to-object */ "./node_modules/core-js/internals/to-object.js");
var callWithSafeIterationClosing = __webpack_require__(/*! ../internals/call-with-safe-iteration-closing */ "./node_modules/core-js/internals/call-with-safe-iteration-closing.js");
var isArrayIteratorMethod = __webpack_require__(/*! ../internals/is-array-iterator-method */ "./node_modules/core-js/internals/is-array-iterator-method.js");
var toLength = __webpack_require__(/*! ../internals/to-length */ "./node_modules/core-js/internals/to-length.js");
var createProperty = __webpack_require__(/*! ../internals/create-property */ "./node_modules/core-js/internals/create-property.js");
var getIteratorMethod = __webpack_require__(/*! ../internals/get-iterator-method */ "./node_modules/core-js/internals/get-iterator-method.js");

// `Array.from` method implementation
// https://tc39.es/ecma262/#sec-array.from
module.exports = function from(arrayLike /* , mapfn = undefined, thisArg = undefined */) {
  var O = toObject(arrayLike);
  var C = typeof this == 'function' ? this : Array;
  var argumentsLength = arguments.length;
  var mapfn = argumentsLength > 1 ? arguments[1] : undefined;
  var mapping = mapfn !== undefined;
  var iteratorMethod = getIteratorMethod(O);
  var index = 0;
  var length, result, step, iterator, next, value;
  if (mapping) mapfn = bind(mapfn, argumentsLength > 2 ? arguments[2] : undefined, 2);
  // if the target is not iterable or it's an array with the default iterator - use a simple case
  if (iteratorMethod != undefined && !(C == Array && isArrayIteratorMethod(iteratorMethod))) {
    iterator = iteratorMethod.call(O);
    next = iterator.next;
    result = new C();
    for (;!(step = next.call(iterator)).done; index++) {
      value = mapping ? callWithSafeIterationClosing(iterator, mapfn, [step.value, index], true) : step.value;
      createProperty(result, index, value);
    }
  } else {
    length = toLength(O.length);
    result = new C(length);
    for (;length > index; index++) {
      value = mapping ? mapfn(O[index], index) : O[index];
      createProperty(result, index, value);
    }
  }
  result.length = index;
  return result;
};


/***/ }),

/***/ "./node_modules/core-js/internals/call-with-safe-iteration-closing.js":
/*!****************************************************************************!*\
  !*** ./node_modules/core-js/internals/call-with-safe-iteration-closing.js ***!
  \****************************************************************************/
/***/ ((module, __unused_webpack_exports, __webpack_require__) => {

var anObject = __webpack_require__(/*! ../internals/an-object */ "./node_modules/core-js/internals/an-object.js");
var iteratorClose = __webpack_require__(/*! ../internals/iterator-close */ "./node_modules/core-js/internals/iterator-close.js");

// call something on iterator step with safe closing on error
module.exports = function (iterator, fn, value, ENTRIES) {
  try {
    return ENTRIES ? fn(anObject(value)[0], value[1]) : fn(value);
  } catch (error) {
    iteratorClose(iterator);
    throw error;
  }
};


/***/ }),

/***/ "./node_modules/core-js/internals/check-correctness-of-iteration.js":
/*!**************************************************************************!*\
  !*** ./node_modules/core-js/internals/check-correctness-of-iteration.js ***!
  \**************************************************************************/
/***/ ((module, __unused_webpack_exports, __webpack_require__) => {

var wellKnownSymbol = __webpack_require__(/*! ../internals/well-known-symbol */ "./node_modules/core-js/internals/well-known-symbol.js");

var ITERATOR = wellKnownSymbol('iterator');
var SAFE_CLOSING = false;

try {
  var called = 0;
  var iteratorWithReturn = {
    next: function () {
      return { done: !!called++ };
    },
    'return': function () {
      SAFE_CLOSING = true;
    }
  };
  iteratorWithReturn[ITERATOR] = function () {
    return this;
  };
  // eslint-disable-next-line es/no-array-from, no-throw-literal -- required for testing
  Array.from(iteratorWithReturn, function () { throw 2; });
} catch (error) { /* empty */ }

module.exports = function (exec, SKIP_CLOSING) {
  if (!SKIP_CLOSING && !SAFE_CLOSING) return false;
  var ITERATION_SUPPORT = false;
  try {
    var object = {};
    object[ITERATOR] = function () {
      return {
        next: function () {
          return { done: ITERATION_SUPPORT = true };
        }
      };
    };
    exec(object);
  } catch (error) { /* empty */ }
  return ITERATION_SUPPORT;
};


/***/ }),

/***/ "./node_modules/core-js/internals/get-iterator-method.js":
/*!***************************************************************!*\
  !*** ./node_modules/core-js/internals/get-iterator-method.js ***!
  \***************************************************************/
/***/ ((module, __unused_webpack_exports, __webpack_require__) => {

var classof = __webpack_require__(/*! ../internals/classof */ "./node_modules/core-js/internals/classof.js");
var Iterators = __webpack_require__(/*! ../internals/iterators */ "./node_modules/core-js/internals/iterators.js");
var wellKnownSymbol = __webpack_require__(/*! ../internals/well-known-symbol */ "./node_modules/core-js/internals/well-known-symbol.js");

var ITERATOR = wellKnownSymbol('iterator');

module.exports = function (it) {
  if (it != undefined) return it[ITERATOR]
    || it['@@iterator']
    || Iterators[classof(it)];
};


/***/ }),

/***/ "./node_modules/core-js/internals/is-array-iterator-method.js":
/*!********************************************************************!*\
  !*** ./node_modules/core-js/internals/is-array-iterator-method.js ***!
  \********************************************************************/
/***/ ((module, __unused_webpack_exports, __webpack_require__) => {

var wellKnownSymbol = __webpack_require__(/*! ../internals/well-known-symbol */ "./node_modules/core-js/internals/well-known-symbol.js");
var Iterators = __webpack_require__(/*! ../internals/iterators */ "./node_modules/core-js/internals/iterators.js");

var ITERATOR = wellKnownSymbol('iterator');
var ArrayPrototype = Array.prototype;

// check on default Array iterator
module.exports = function (it) {
  return it !== undefined && (Iterators.Array === it || ArrayPrototype[ITERATOR] === it);
};


/***/ }),

/***/ "./node_modules/core-js/internals/iterator-close.js":
/*!**********************************************************!*\
  !*** ./node_modules/core-js/internals/iterator-close.js ***!
  \**********************************************************/
/***/ ((module, __unused_webpack_exports, __webpack_require__) => {

var anObject = __webpack_require__(/*! ../internals/an-object */ "./node_modules/core-js/internals/an-object.js");

module.exports = function (iterator) {
  var returnMethod = iterator['return'];
  if (returnMethod !== undefined) {
    return anObject(returnMethod.call(iterator)).value;
  }
};


/***/ }),

/***/ "./node_modules/core-js/modules/es.array.from.js":
/*!*******************************************************!*\
  !*** ./node_modules/core-js/modules/es.array.from.js ***!
  \*******************************************************/
/***/ ((__unused_webpack_module, __unused_webpack_exports, __webpack_require__) => {

var $ = __webpack_require__(/*! ../internals/export */ "./node_modules/core-js/internals/export.js");
var from = __webpack_require__(/*! ../internals/array-from */ "./node_modules/core-js/internals/array-from.js");
var checkCorrectnessOfIteration = __webpack_require__(/*! ../internals/check-correctness-of-iteration */ "./node_modules/core-js/internals/check-correctness-of-iteration.js");

var INCORRECT_ITERATION = !checkCorrectnessOfIteration(function (iterable) {
  // eslint-disable-next-line es/no-array-from -- required for testing
  Array.from(iterable);
});

// `Array.from` method
// https://tc39.es/ecma262/#sec-array.from
$({ target: 'Array', stat: true, forced: INCORRECT_ITERATION }, {
  from: from
});


/***/ }),

/***/ "./node_modules/core-js/modules/es.array.is-array.js":
/*!***********************************************************!*\
  !*** ./node_modules/core-js/modules/es.array.is-array.js ***!
  \***********************************************************/
/***/ ((__unused_webpack_module, __unused_webpack_exports, __webpack_require__) => {

var $ = __webpack_require__(/*! ../internals/export */ "./node_modules/core-js/internals/export.js");
var isArray = __webpack_require__(/*! ../internals/is-array */ "./node_modules/core-js/internals/is-array.js");

// `Array.isArray` method
// https://tc39.es/ecma262/#sec-array.isarray
$({ target: 'Array', stat: true }, {
  isArray: isArray
});


/***/ })

},
/******/ __webpack_require__ => { // webpackRuntimeModules
/******/ "use strict";
/******/ 
/******/ var __webpack_exec__ = (moduleId) => (__webpack_require__(__webpack_require__.s = moduleId))
/******/ __webpack_require__.O(0, ["vendors-node_modules_core-js_modules_es_array_slice_js-node_modules_core-js_modules_es_functi-943b9a"], () => (__webpack_exec__("./assets/js/datatables.js")));
/******/ var __webpack_exports__ = __webpack_require__.O();
/******/ }
]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9hc3NldHMvanMvZGF0YXRhYmxlcy5qcyIsIndlYnBhY2s6Ly8vLi9ub2RlX21vZHVsZXMvY29yZS1qcy9pbnRlcm5hbHMvYXJyYXktZnJvbS5qcyIsIndlYnBhY2s6Ly8vLi9ub2RlX21vZHVsZXMvY29yZS1qcy9pbnRlcm5hbHMvY2FsbC13aXRoLXNhZmUtaXRlcmF0aW9uLWNsb3NpbmcuanMiLCJ3ZWJwYWNrOi8vLy4vbm9kZV9tb2R1bGVzL2NvcmUtanMvaW50ZXJuYWxzL2NoZWNrLWNvcnJlY3RuZXNzLW9mLWl0ZXJhdGlvbi5qcyIsIndlYnBhY2s6Ly8vLi9ub2RlX21vZHVsZXMvY29yZS1qcy9pbnRlcm5hbHMvZ2V0LWl0ZXJhdG9yLW1ldGhvZC5qcyIsIndlYnBhY2s6Ly8vLi9ub2RlX21vZHVsZXMvY29yZS1qcy9pbnRlcm5hbHMvaXMtYXJyYXktaXRlcmF0b3ItbWV0aG9kLmpzIiwid2VicGFjazovLy8uL25vZGVfbW9kdWxlcy9jb3JlLWpzL2ludGVybmFscy9pdGVyYXRvci1jbG9zZS5qcyIsIndlYnBhY2s6Ly8vLi9ub2RlX21vZHVsZXMvY29yZS1qcy9tb2R1bGVzL2VzLmFycmF5LmZyb20uanMiLCJ3ZWJwYWNrOi8vLy4vbm9kZV9tb2R1bGVzL2NvcmUtanMvbW9kdWxlcy9lcy5hcnJheS5pcy1hcnJheS5qcyJdLCJuYW1lcyI6WyJjb25zb2xlIiwibG9nIiwiZm5Gb3JtYXREZXRhaWxzIiwib1RhYmxlIiwiblRyIiwiYURhdGEiLCJmbkdldERhdGEiLCJzT3V0IiwiJCIsImRhdGFUYWJsZSIsImRpc3BsYXlMZW5ndGgiLCJzb3J0aW5nIiwiYUxlbmd0aE1lbnUiLCJjb2x1bW5EZWZzIiwid2lkdGgiLCJ0YXJnZXRzIiwidmlzaWJsZSIsImJTb3J0YWJsZSIsImxhbmd1YWdlIiwidXJsIiwiaW1hZ2VzIiwiZG9jdW1lbnQiLCJxdWVyeVNlbGVjdG9yQWxsIiwiaW1hZ2UiLCJhZGRFdmVudExpc3RlbmVyIiwicGFyZW50cyIsImZuSXNPcGVuIiwic3JjIiwiZGV0YWlsc19vcGVuIiwiZm5DbG9zZSIsImRldGFpbHNfY2xvc2UiLCJmbk9wZW4iLCJkZWxldGVNb2RhbENvbmZpcm0iLCJpZCIsImVsIiwiZ2V0RWxlbWVudEJ5SWQiLCJtZXNzYWdlIiwiZGF0YXNldCIsInRpdGxlIiwiaW5uZXJIVE1MIiwiaHJlZiIsInNsdWciLCJ3aW5kb3ciLCJvbmxvYWQiLCJwcml2YXRlQ2hlY2tib3giLCJjaGVja2JveCIsInhtbGh0dHAiLCJYTUxIdHRwUmVxdWVzdCIsIm9wZW4iLCJzZW5kIiwicHVibGlzaGVkQ2hlY2tib3giXSwibWFwcGluZ3MiOiI7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7OztBQUFBO0FBQ0E7QUFFQTtBQUNBO0FBQ0FBLE9BQU8sQ0FBQ0MsR0FBUixDQUFZLFlBQVosRSxDQUVBO0FBQ0E7O0FBRUEsU0FBU0MsZUFBVCxDQUF5QkMsTUFBekIsRUFBaUNDLEdBQWpDLEVBQXNDO0FBQ2xDLE1BQUlDLEtBQUssR0FBR0YsTUFBTSxDQUFDRyxTQUFQLENBQWlCRixHQUFqQixDQUFaO0FBQ0EsTUFBSUcsSUFBSSxHQUFHLDBFQUFYO0FBQ0FBLE1BQUksb0VBQXlERixLQUFLLENBQUMsQ0FBRCxDQUE5RCxlQUFKO0FBQ0FFLE1BQUksNEVBQThERixLQUFLLENBQUMsQ0FBRCxDQUFuRSxlQUFKO0FBQ0FFLE1BQUksNEVBQWlFRixLQUFLLENBQUMsQ0FBRCxDQUF0RSxlQUFKO0FBQ0FFLE1BQUksSUFBSSxVQUFSO0FBRUEsU0FBT0EsSUFBUDtBQUNDO0FBQ0Q7QUFDSjtBQUNBOzs7QUFDSSxJQUFJSixNQUFNLEdBQUdLLENBQUMsQ0FBQyxvQkFBRCxDQUFELENBQXdCQyxTQUF4QixDQUFrQztBQUMvQ0MsZUFBYSxFQUFFLEVBRGdDO0FBRS9DQyxTQUFPLEVBQUUsQ0FDTCxDQUFDLENBQUQsRUFBSSxNQUFKLENBREssQ0FGc0M7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Qzs7Ozs7Ozs7Ozs7QUNiRCxRQUFRLG1CQUFPLENBQUMsdUVBQXFCO0FBQ3JDLGNBQWMsbUJBQU8sQ0FBQywyRUFBdUI7O0FBRTdDO0FBQ0E7QUFDQSxHQUFHLDhCQUE4QjtBQUNqQztBQUNBLENBQUMiLCJmaWxlIjoiZGF0YXRhYmxlcy5qcyIsInNvdXJjZXNDb250ZW50IjpbIi8vIGltcG9ydCAnLi4vLi4vbm9kZV9tb2R1bGVzL2RhdGF0YWJsZXMubmV0L2pzL2pxdWVyeS5kYXRhVGFibGVzJ1xuLy8gaW1wb3J0ICcuLi8uLi9ub2RlX21vZHVsZXMvZGF0YXRhYmxlcy5uZXQtZHQvY3NzL2pxdWVyeS5kYXRhVGFibGVzLm1pbi5jc3MnXG5cbmltcG9ydCBkZXRhaWxzX29wZW4gZnJvbSAnLi4vaW1hZ2VzL2Rhc2hib2FyZC9hZHZhbmNlZC10YWJsZS9kZXRhaWxzX29wZW4ucG5nJ1xuaW1wb3J0IGRldGFpbHNfY2xvc2UgZnJvbSAnLi4vaW1hZ2VzL2Rhc2hib2FyZC9hZHZhbmNlZC10YWJsZS9kZXRhaWxzX2Nsb3NlLnBuZydcbmNvbnNvbGUubG9nKCdkYXRhdGFibGVzJylcblxuLy8gcmVxdWlyZSgnZGF0YXRhYmxlcy5uZXQnKTtcbi8vIHJlcXVpcmUoJ2RhdGF0YWJsZXMubmV0LWR0Jyk7XG5cbmZ1bmN0aW9uIGZuRm9ybWF0RGV0YWlscyhvVGFibGUsIG5Ucikge1xuICAgIHZhciBhRGF0YSA9IG9UYWJsZS5mbkdldERhdGEoblRyKTtcbiAgICB2YXIgc091dCA9ICc8dGFibGUgY2VsbHBhZGRpbmc9XCIwXCIgY2VsbHNwYWNpbmc9XCIwXCIgYm9yZGVyPVwiMFwiIGNsYXNzPVwidGFibGUtZGV0YWlsc1wiPic7XG4gICAgc091dCArPSBgPHRyIGNsYXNzPVwidHItZGV0YWlsc1wiPjx0ZCBjbGFzcz1cInRkLWRldGFpbHNcIj5JZDogJHthRGF0YVsxXX08L3RkPjwvdHI+YDtcbiAgICBzT3V0ICs9IGA8dHIgY2xhc3M9XCJ0ci1kZXRhaWxzXCI+PHRkIGNsYXNzPVwidGQtZGV0YWlsc1wiPkNyw6llIGxlOiAke2FEYXRhWzNdfTwvdGQ+PC90cj5gO1xuICAgIHNPdXQgKz0gYDx0ciBjbGFzcz1cInRyLWRldGFpbHNcIj48dGQgY2xhc3M9XCJ0ZC1kZXRhaWxzXCI+Q29udGVudTo8YnI+JHthRGF0YVs3XX08L3RkPjwvdHI+YDtcbiAgICBzT3V0ICs9ICc8L3RhYmxlPic7XG5cbiAgICByZXR1cm4gc091dDtcbiAgICB9XG4gICAgLypcbiAgICAgICAgKiBJbml0aWFsc2UgRGF0YVRhYmxlcywgd2l0aCBubyBzb3J0aW5nIG9uIHRoZSAnZGV0YWlscycgY29sdW1uXG4gICAgICAgICovXG4gICAgdmFyIG9UYWJsZSA9ICQoJyNoaWRkZW4tdGFibGUtaW5mbycpLmRhdGFUYWJsZSh7XG4gICAgZGlzcGxheUxlbmd0aDogMTAsXG4gICAgc29ydGluZzogW1xuICAgICAgICBbMSwgJ2Rlc2MnXVxuICAgIF0sXG4gICAgLy8gYXV0b1dpZHRoOiBmYWxzZSxcbiAgICAvLyBmaXhlZENvbHVtbnM6IGZhbHNlLFxuICAgIGFMZW5ndGhNZW51OiBbXG4gICAgICAgIFtcbiAgICAgICAgMTAsIDI1LCA1MCwgLTFcbiAgICAgICAgXSxcbiAgICAgICAgW1xuICAgICAgICAxMCwgMjUsIDUwLCBcIlRvdXNcIlxuICAgICAgICBdXG4gICAgXSxcbiAgICBjb2x1bW5EZWZzOiBbXG4gICAgICAgIHtcbiAgICAgICAgd2lkdGg6ICcxJScsXG4gICAgICAgIHRhcmdldHM6IFswLDgsOV1cbiAgICAgICAgfSwge1xuICAgICAgICB3aWR0aDogJzUlJyxcbiAgICAgICAgdGFyZ2V0czogWzIsNCwxMF1cbiAgICAgICAgfSwge1xuICAgICAgICB3aWR0aDogJzI1JScsXG4gICAgICAgIHRhcmdldHM6IFs1XVxuICAgICAgICB9LCB7XG4gICAgICAgIHdpZHRoOiAnNDAlJyxcbiAgICAgICAgdGFyZ2V0czogWzZdXG4gICAgICAgIH0sIHtcbiAgICAgICAgdmlzaWJsZTogZmFsc2UsXG4gICAgICAgIHRhcmdldHM6IFsxLCA3LCAzXVxuICAgICAgICB9LCB7XG4gICAgICAgIGJTb3J0YWJsZTogZmFsc2UsXG4gICAgICAgIHRhcmdldHM6IFswLCAxMSwgNV1cbiAgICAgICAgfVxuICAgIF0sXG4gICAgbGFuZ3VhZ2U6IHtcbiAgICAgICAgdXJsOiAnLy9jZG4uZGF0YXRhYmxlcy5uZXQvcGx1Zy1pbnMvMS4xMC4yNS9pMThuL0ZyZW5jaC5qc29uJ1xuICAgIH1cbiAgICB9KTtcblxuICAgIC8qIEFkZCBldmVudCBsaXN0ZW5lciBmb3Igb3BlbmluZyBhbmQgY2xvc2luZyBkZXRhaWxzXG4gICAgICAgICogTm90ZSB0aGF0IHRoZSBpbmRpY2F0b3IgZm9yIHNob3dpbmcgd2hpY2ggcm93IGlzIG9wZW4gaXMgbm90IGNvbnRyb2xsZWQgYnkgRGF0YVRhYmxlcyxcbiAgICAgICAgKiByYXRoZXIgaXQgaXMgZG9uZSBoZXJlXG4gICAgICAgICovXG4gICAgY29uc3QgaW1hZ2VzID0gZG9jdW1lbnQucXVlcnlTZWxlY3RvckFsbChcIi50b2dnbGUtaW1nXCIpO1xuICAgIGZvciAobGV0IGltYWdlIG9mIGltYWdlcykge1xuICAgIGltYWdlLmFkZEV2ZW50TGlzdGVuZXIoJ2NsaWNrJywgZnVuY3Rpb24gKCkge1xuICAgICAgICB2YXIgblRyID0gJCh0aGlzKS5wYXJlbnRzKCd0cicpWzBdO1xuICAgICAgICBpZiAob1RhYmxlLmZuSXNPcGVuKG5UcikpIHtcbiAgICAgICAgLyogVGhpcyByb3cgaXMgYWxyZWFkeSBvcGVuIC0gY2xvc2UgaXQgKi9cbiAgICAgICAgdGhpcy5zcmMgPSBkZXRhaWxzX29wZW47XG4gICAgICAgIG9UYWJsZS5mbkNsb3NlKG5Ucik7XG4gICAgICAgIH0gZWxzZSB7XG4gICAgICAgIC8qIE9wZW4gdGhpcyByb3cgKi9cbiAgICAgICAgdGhpcy5zcmMgPSBkZXRhaWxzX2Nsb3NlO1xuICAgICAgICBvVGFibGUuZm5PcGVuKG5UciwgZm5Gb3JtYXREZXRhaWxzKG9UYWJsZSwgblRyKSwgJ2RldGFpbHMnKTtcbiAgICAgICAgfVxuICAgIH0pXG59XG5cbi8vIFNldCB0aGUgbW9kYWwgY29udGVudFxuZnVuY3Rpb24gZGVsZXRlTW9kYWxDb25maXJtKGlkKSB7XG4gICAgY29uc3QgZWwgPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZChgZGVsZXRlQnV0dG9uXyR7aWR9YCk7XG4gICAgY29uc3QgbWVzc2FnZSA9IGDDinRlcy12b3VzIHN1ciBkZSB2b3Vsb2lyIHN1cHByaW1lciBsZSBjb250ZW51IGNvbnRlbmFudCBsZSB0aXRyZSA8Yj4ke2VsLmRhdGFzZXQudGl0bGV9PC9iPiA/YFxuICAgIGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCdtb2RhbC10aXRsZScpLmlubmVySFRNTCA9IFwiU3VwcHJlc3Npb24gZCd1biBjb250ZW51XCIgO1xuICAgIGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCdtb2RhbC1jb250ZW50JykuaW5uZXJIVE1MID0gbWVzc2FnZTtcbiAgICBkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgnZGVsZXRlLWNvbmZpcm0nKS5ocmVmID0gYC9kYXNoYm9hcmQvY29udGVudHMvZGVsZXRlLyR7ZWwuZGF0YXNldC5zbHVnfWBcbn1cblxud2luZG93Lm9ubG9hZCA9ICgpID0+IHtcbiAgICBsZXQgcHJpdmF0ZUNoZWNrYm94ID0gZG9jdW1lbnQucXVlcnlTZWxlY3RvckFsbChcIltpZCo9cHJpdmF0ZV9dXCIpXG4gICAgZm9yKGxldCBjaGVja2JveCBvZiBwcml2YXRlQ2hlY2tib3gpIHtcbiAgICAgICAgY2hlY2tib3guYWRkRXZlbnRMaXN0ZW5lcihcImNsaWNrXCIsIGZ1bmN0aW9uKCl7XG4gICAgICAgICAgICBsZXQgeG1saHR0cCA9IG5ldyBYTUxIdHRwUmVxdWVzdFxuICAgICAgICAgICAgeG1saHR0cC5vcGVuKFwiZ2V0XCIsIGAvZGFzaGJvYXJkL2NvbnRlbnRzL3N3aXRjaFByaXZhdGUvJHt0aGlzLmRhdGFzZXQuaWR9YClcbiAgICAgICAgICAgIHhtbGh0dHAuc2VuZCgpXG4gICAgICAgIH0pXG4gICAgfVxuXG4gICAgbGV0IHB1Ymxpc2hlZENoZWNrYm94ID0gZG9jdW1lbnQucXVlcnlTZWxlY3RvckFsbChcIltpZCo9cHVibGlzaGVkX11cIilcbiAgICBmb3IobGV0IGNoZWNrYm94IG9mIHB1Ymxpc2hlZENoZWNrYm94KSB7XG4gICAgICAgIGNoZWNrYm94LmFkZEV2ZW50TGlzdGVuZXIoXCJjbGlja1wiLCBmdW5jdGlvbigpe1xuICAgICAgICAgICAgbGV0IHhtbGh0dHAgPSBuZXcgWE1MSHR0cFJlcXVlc3RcbiAgICAgICAgICAgIHhtbGh0dHAub3BlbihcImdldFwiLCBgL2Rhc2hib2FyZC9jb250ZW50cy9zd2l0Y2hQdWJsaXNoZWQvJHt0aGlzLmRhdGFzZXQuaWR9YClcbiAgICAgICAgICAgIHhtbGh0dHAuc2VuZCgpXG4gICAgICAgIH0pXG4gICAgfVxufSIsIid1c2Ugc3RyaWN0JztcbnZhciBiaW5kID0gcmVxdWlyZSgnLi4vaW50ZXJuYWxzL2Z1bmN0aW9uLWJpbmQtY29udGV4dCcpO1xudmFyIHRvT2JqZWN0ID0gcmVxdWlyZSgnLi4vaW50ZXJuYWxzL3RvLW9iamVjdCcpO1xudmFyIGNhbGxXaXRoU2FmZUl0ZXJhdGlvbkNsb3NpbmcgPSByZXF1aXJlKCcuLi9pbnRlcm5hbHMvY2FsbC13aXRoLXNhZmUtaXRlcmF0aW9uLWNsb3NpbmcnKTtcbnZhciBpc0FycmF5SXRlcmF0b3JNZXRob2QgPSByZXF1aXJlKCcuLi9pbnRlcm5hbHMvaXMtYXJyYXktaXRlcmF0b3ItbWV0aG9kJyk7XG52YXIgdG9MZW5ndGggPSByZXF1aXJlKCcuLi9pbnRlcm5hbHMvdG8tbGVuZ3RoJyk7XG52YXIgY3JlYXRlUHJvcGVydHkgPSByZXF1aXJlKCcuLi9pbnRlcm5hbHMvY3JlYXRlLXByb3BlcnR5Jyk7XG52YXIgZ2V0SXRlcmF0b3JNZXRob2QgPSByZXF1aXJlKCcuLi9pbnRlcm5hbHMvZ2V0LWl0ZXJhdG9yLW1ldGhvZCcpO1xuXG4vLyBgQXJyYXkuZnJvbWAgbWV0aG9kIGltcGxlbWVudGF0aW9uXG4vLyBodHRwczovL3RjMzkuZXMvZWNtYTI2Mi8jc2VjLWFycmF5LmZyb21cbm1vZHVsZS5leHBvcnRzID0gZnVuY3Rpb24gZnJvbShhcnJheUxpa2UgLyogLCBtYXBmbiA9IHVuZGVmaW5lZCwgdGhpc0FyZyA9IHVuZGVmaW5lZCAqLykge1xuICB2YXIgTyA9IHRvT2JqZWN0KGFycmF5TGlrZSk7XG4gIHZhciBDID0gdHlwZW9mIHRoaXMgPT0gJ2Z1bmN0aW9uJyA/IHRoaXMgOiBBcnJheTtcbiAgdmFyIGFyZ3VtZW50c0xlbmd0aCA9IGFyZ3VtZW50cy5sZW5ndGg7XG4gIHZhciBtYXBmbiA9IGFyZ3VtZW50c0xlbmd0aCA+IDEgPyBhcmd1bWVudHNbMV0gOiB1bmRlZmluZWQ7XG4gIHZhciBtYXBwaW5nID0gbWFwZm4gIT09IHVuZGVmaW5lZDtcbiAgdmFyIGl0ZXJhdG9yTWV0aG9kID0gZ2V0SXRlcmF0b3JNZXRob2QoTyk7XG4gIHZhciBpbmRleCA9IDA7XG4gIHZhciBsZW5ndGgsIHJlc3VsdCwgc3RlcCwgaXRlcmF0b3IsIG5leHQsIHZhbHVlO1xuICBpZiAobWFwcGluZykgbWFwZm4gPSBiaW5kKG1hcGZuLCBhcmd1bWVudHNMZW5ndGggPiAyID8gYXJndW1lbnRzWzJdIDogdW5kZWZpbmVkLCAyKTtcbiAgLy8gaWYgdGhlIHRhcmdldCBpcyBub3QgaXRlcmFibGUgb3IgaXQncyBhbiBhcnJheSB3aXRoIHRoZSBkZWZhdWx0IGl0ZXJhdG9yIC0gdXNlIGEgc2ltcGxlIGNhc2VcbiAgaWYgKGl0ZXJhdG9yTWV0aG9kICE9IHVuZGVmaW5lZCAmJiAhKEMgPT0gQXJyYXkgJiYgaXNBcnJheUl0ZXJhdG9yTWV0aG9kKGl0ZXJhdG9yTWV0aG9kKSkpIHtcbiAgICBpdGVyYXRvciA9IGl0ZXJhdG9yTWV0aG9kLmNhbGwoTyk7XG4gICAgbmV4dCA9IGl0ZXJhdG9yLm5leHQ7XG4gICAgcmVzdWx0ID0gbmV3IEMoKTtcbiAgICBmb3IgKDshKHN0ZXAgPSBuZXh0LmNhbGwoaXRlcmF0b3IpKS5kb25lOyBpbmRleCsrKSB7XG4gICAgICB2YWx1ZSA9IG1hcHBpbmcgPyBjYWxsV2l0aFNhZmVJdGVyYXRpb25DbG9zaW5nKGl0ZXJhdG9yLCBtYXBmbiwgW3N0ZXAudmFsdWUsIGluZGV4XSwgdHJ1ZSkgOiBzdGVwLnZhbHVlO1xuICAgICAgY3JlYXRlUHJvcGVydHkocmVzdWx0LCBpbmRleCwgdmFsdWUpO1xuICAgIH1cbiAgfSBlbHNlIHtcbiAgICBsZW5ndGggPSB0b0xlbmd0aChPLmxlbmd0aCk7XG4gICAgcmVzdWx0ID0gbmV3IEMobGVuZ3RoKTtcbiAgICBmb3IgKDtsZW5ndGggPiBpbmRleDsgaW5kZXgrKykge1xuICAgICAgdmFsdWUgPSBtYXBwaW5nID8gbWFwZm4oT1tpbmRleF0sIGluZGV4KSA6IE9baW5kZXhdO1xuICAgICAgY3JlYXRlUHJvcGVydHkocmVzdWx0LCBpbmRleCwgdmFsdWUpO1xuICAgIH1cbiAgfVxuICByZXN1bHQubGVuZ3RoID0gaW5kZXg7XG4gIHJldHVybiByZXN1bHQ7XG59O1xuIiwidmFyIGFuT2JqZWN0ID0gcmVxdWlyZSgnLi4vaW50ZXJuYWxzL2FuLW9iamVjdCcpO1xudmFyIGl0ZXJhdG9yQ2xvc2UgPSByZXF1aXJlKCcuLi9pbnRlcm5hbHMvaXRlcmF0b3ItY2xvc2UnKTtcblxuLy8gY2FsbCBzb21ldGhpbmcgb24gaXRlcmF0b3Igc3RlcCB3aXRoIHNhZmUgY2xvc2luZyBvbiBlcnJvclxubW9kdWxlLmV4cG9ydHMgPSBmdW5jdGlvbiAoaXRlcmF0b3IsIGZuLCB2YWx1ZSwgRU5UUklFUykge1xuICB0cnkge1xuICAgIHJldHVybiBFTlRSSUVTID8gZm4oYW5PYmplY3QodmFsdWUpWzBdLCB2YWx1ZVsxXSkgOiBmbih2YWx1ZSk7XG4gIH0gY2F0Y2ggKGVycm9yKSB7XG4gICAgaXRlcmF0b3JDbG9zZShpdGVyYXRvcik7XG4gICAgdGhyb3cgZXJyb3I7XG4gIH1cbn07XG4iLCJ2YXIgd2VsbEtub3duU3ltYm9sID0gcmVxdWlyZSgnLi4vaW50ZXJuYWxzL3dlbGwta25vd24tc3ltYm9sJyk7XG5cbnZhciBJVEVSQVRPUiA9IHdlbGxLbm93blN5bWJvbCgnaXRlcmF0b3InKTtcbnZhciBTQUZFX0NMT1NJTkcgPSBmYWxzZTtcblxudHJ5IHtcbiAgdmFyIGNhbGxlZCA9IDA7XG4gIHZhciBpdGVyYXRvcldpdGhSZXR1cm4gPSB7XG4gICAgbmV4dDogZnVuY3Rpb24gKCkge1xuICAgICAgcmV0dXJuIHsgZG9uZTogISFjYWxsZWQrKyB9O1xuICAgIH0sXG4gICAgJ3JldHVybic6IGZ1bmN0aW9uICgpIHtcbiAgICAgIFNBRkVfQ0xPU0lORyA9IHRydWU7XG4gICAgfVxuICB9O1xuICBpdGVyYXRvcldpdGhSZXR1cm5bSVRFUkFUT1JdID0gZnVuY3Rpb24gKCkge1xuICAgIHJldHVybiB0aGlzO1xuICB9O1xuICAvLyBlc2xpbnQtZGlzYWJsZS1uZXh0LWxpbmUgZXMvbm8tYXJyYXktZnJvbSwgbm8tdGhyb3ctbGl0ZXJhbCAtLSByZXF1aXJlZCBmb3IgdGVzdGluZ1xuICBBcnJheS5mcm9tKGl0ZXJhdG9yV2l0aFJldHVybiwgZnVuY3Rpb24gKCkgeyB0aHJvdyAyOyB9KTtcbn0gY2F0Y2ggKGVycm9yKSB7IC8qIGVtcHR5ICovIH1cblxubW9kdWxlLmV4cG9ydHMgPSBmdW5jdGlvbiAoZXhlYywgU0tJUF9DTE9TSU5HKSB7XG4gIGlmICghU0tJUF9DTE9TSU5HICYmICFTQUZFX0NMT1NJTkcpIHJldHVybiBmYWxzZTtcbiAgdmFyIElURVJBVElPTl9TVVBQT1JUID0gZmFsc2U7XG4gIHRyeSB7XG4gICAgdmFyIG9iamVjdCA9IHt9O1xuICAgIG9iamVjdFtJVEVSQVRPUl0gPSBmdW5jdGlvbiAoKSB7XG4gICAgICByZXR1cm4ge1xuICAgICAgICBuZXh0OiBmdW5jdGlvbiAoKSB7XG4gICAgICAgICAgcmV0dXJuIHsgZG9uZTogSVRFUkFUSU9OX1NVUFBPUlQgPSB0cnVlIH07XG4gICAgICAgIH1cbiAgICAgIH07XG4gICAgfTtcbiAgICBleGVjKG9iamVjdCk7XG4gIH0gY2F0Y2ggKGVycm9yKSB7IC8qIGVtcHR5ICovIH1cbiAgcmV0dXJuIElURVJBVElPTl9TVVBQT1JUO1xufTtcbiIsInZhciBjbGFzc29mID0gcmVxdWlyZSgnLi4vaW50ZXJuYWxzL2NsYXNzb2YnKTtcbnZhciBJdGVyYXRvcnMgPSByZXF1aXJlKCcuLi9pbnRlcm5hbHMvaXRlcmF0b3JzJyk7XG52YXIgd2VsbEtub3duU3ltYm9sID0gcmVxdWlyZSgnLi4vaW50ZXJuYWxzL3dlbGwta25vd24tc3ltYm9sJyk7XG5cbnZhciBJVEVSQVRPUiA9IHdlbGxLbm93blN5bWJvbCgnaXRlcmF0b3InKTtcblxubW9kdWxlLmV4cG9ydHMgPSBmdW5jdGlvbiAoaXQpIHtcbiAgaWYgKGl0ICE9IHVuZGVmaW5lZCkgcmV0dXJuIGl0W0lURVJBVE9SXVxuICAgIHx8IGl0WydAQGl0ZXJhdG9yJ11cbiAgICB8fCBJdGVyYXRvcnNbY2xhc3NvZihpdCldO1xufTtcbiIsInZhciB3ZWxsS25vd25TeW1ib2wgPSByZXF1aXJlKCcuLi9pbnRlcm5hbHMvd2VsbC1rbm93bi1zeW1ib2wnKTtcbnZhciBJdGVyYXRvcnMgPSByZXF1aXJlKCcuLi9pbnRlcm5hbHMvaXRlcmF0b3JzJyk7XG5cbnZhciBJVEVSQVRPUiA9IHdlbGxLbm93blN5bWJvbCgnaXRlcmF0b3InKTtcbnZhciBBcnJheVByb3RvdHlwZSA9IEFycmF5LnByb3RvdHlwZTtcblxuLy8gY2hlY2sgb24gZGVmYXVsdCBBcnJheSBpdGVyYXRvclxubW9kdWxlLmV4cG9ydHMgPSBmdW5jdGlvbiAoaXQpIHtcbiAgcmV0dXJuIGl0ICE9PSB1bmRlZmluZWQgJiYgKEl0ZXJhdG9ycy5BcnJheSA9PT0gaXQgfHwgQXJyYXlQcm90b3R5cGVbSVRFUkFUT1JdID09PSBpdCk7XG59O1xuIiwidmFyIGFuT2JqZWN0ID0gcmVxdWlyZSgnLi4vaW50ZXJuYWxzL2FuLW9iamVjdCcpO1xuXG5tb2R1bGUuZXhwb3J0cyA9IGZ1bmN0aW9uIChpdGVyYXRvcikge1xuICB2YXIgcmV0dXJuTWV0aG9kID0gaXRlcmF0b3JbJ3JldHVybiddO1xuICBpZiAocmV0dXJuTWV0aG9kICE9PSB1bmRlZmluZWQpIHtcbiAgICByZXR1cm4gYW5PYmplY3QocmV0dXJuTWV0aG9kLmNhbGwoaXRlcmF0b3IpKS52YWx1ZTtcbiAgfVxufTtcbiIsInZhciAkID0gcmVxdWlyZSgnLi4vaW50ZXJuYWxzL2V4cG9ydCcpO1xudmFyIGZyb20gPSByZXF1aXJlKCcuLi9pbnRlcm5hbHMvYXJyYXktZnJvbScpO1xudmFyIGNoZWNrQ29ycmVjdG5lc3NPZkl0ZXJhdGlvbiA9IHJlcXVpcmUoJy4uL2ludGVybmFscy9jaGVjay1jb3JyZWN0bmVzcy1vZi1pdGVyYXRpb24nKTtcblxudmFyIElOQ09SUkVDVF9JVEVSQVRJT04gPSAhY2hlY2tDb3JyZWN0bmVzc09mSXRlcmF0aW9uKGZ1bmN0aW9uIChpdGVyYWJsZSkge1xuICAvLyBlc2xpbnQtZGlzYWJsZS1uZXh0LWxpbmUgZXMvbm8tYXJyYXktZnJvbSAtLSByZXF1aXJlZCBmb3IgdGVzdGluZ1xuICBBcnJheS5mcm9tKGl0ZXJhYmxlKTtcbn0pO1xuXG4vLyBgQXJyYXkuZnJvbWAgbWV0aG9kXG4vLyBodHRwczovL3RjMzkuZXMvZWNtYTI2Mi8jc2VjLWFycmF5LmZyb21cbiQoeyB0YXJnZXQ6ICdBcnJheScsIHN0YXQ6IHRydWUsIGZvcmNlZDogSU5DT1JSRUNUX0lURVJBVElPTiB9LCB7XG4gIGZyb206IGZyb21cbn0pO1xuIiwidmFyICQgPSByZXF1aXJlKCcuLi9pbnRlcm5hbHMvZXhwb3J0Jyk7XG52YXIgaXNBcnJheSA9IHJlcXVpcmUoJy4uL2ludGVybmFscy9pcy1hcnJheScpO1xuXG4vLyBgQXJyYXkuaXNBcnJheWAgbWV0aG9kXG4vLyBodHRwczovL3RjMzkuZXMvZWNtYTI2Mi8jc2VjLWFycmF5LmlzYXJyYXlcbiQoeyB0YXJnZXQ6ICdBcnJheScsIHN0YXQ6IHRydWUgfSwge1xuICBpc0FycmF5OiBpc0FycmF5XG59KTtcbiJdLCJzb3VyY2VSb290IjoiIn0=