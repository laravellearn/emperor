
$(function() {
  'use strict';
  //Tinymce editor
  if ($("#tinymceEditExample").length) {
    tinymce.init({
      selector: '#tinymceEditExample',
      height: 400,
    });
  }
});