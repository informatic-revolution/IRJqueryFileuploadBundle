(function (factory) {
    'use strict';
    if (typeof define === 'function' && define.amd) {
        // Register as an anonymous AMD module:
        define([
            'jquery'
        ], factory);
    } else {
        // Browser globals:
        factory(
            window.jQuery
        );
    }
}(function ($) {
    'use strict';

    // The UI version extends the file upload widget
    // and adds basic user interface interaction:
    $.widget('blueimp.fileupload', $.blueimp.fileupload, {

        options: {
            autoUpload: true,
            dataType: 'json',

            // The add callback is invoked as soon as files are added to the fileupload
            // widget (via file input selection, drag & drop or add API call).
            // See the basic file upload widget for more information:
            add: function (e, data) {
                //alert('add');
                data.submit();
            },
            done: function (e, data) {
                //alert('done');
                //alert(data.files.length);
            }
        }
    });

}));
