(function e(t,n,r){function s(o,u){if(!n[o]){if(!t[o]){var a=typeof require=="function"&&require;if(!u&&a)return a(o,!0);if(i)return i(o,!0);var f=new Error("Cannot find module '"+o+"'");throw f.code="MODULE_NOT_FOUND",f}var l=n[o]={exports:{}};t[o][0].call(l.exports,function(e){var n=t[o][1][e];return s(n?n:e)},l,l.exports,e,t,n,r)}return n[o].exports}var i=typeof require=="function"&&require;for(var o=0;o<r.length;o++)s(r[o]);return s})({1:[function(require,module,exports){
'use strict';

require('./modules/confirm.js');

require('./modules/summernote.js');

},{"./modules/confirm.js":2,"./modules/summernote.js":3}],2:[function(require,module,exports){
"use strict";

var confirmModule = {
    init: function init() {
        var deletePageButton = $(".deletePageButton");

        deletePageButton.on("click", function (e) {
            e.preventDefault();
            var pageId = $(this).data("page"),
                pageTitle = $(this).data("title");

            var res = confirm("Are you sure you want to delete the page: " + pageTitle);
            if (res) {
                var deleteUrl = '/admin/deletePage/' + pageId;
                console.log(deleteUrl);
                window.location.replace(deleteUrl);
            } else {
                console.log("The user aborted");
            }
        });
    }
};
$(document).ready(confirmModule.init);

},{}],3:[function(require,module,exports){
'use strict';

var summernote = {
  init: function init() {
    $('#summernote').summernote({
      height: 200
    });
  }
};
$(document).ready(summernote.init);

},{}]},{},[1]);

//# sourceMappingURL=app.js.map
