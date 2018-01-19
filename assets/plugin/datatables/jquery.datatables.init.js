/**
 * Theme: Zircos Admin Template
 * Author: Coderthemes
 * Component: Datatable
 * 
 */
 
var handleDataTableButtons = function() {
        "use strict";
        0 !== $("#datatable-buttons").length && $("#datatable-buttons").DataTable({
            dom: "Bfrtip",
            buttons: [{
                extend: "copy",
                className: "btn-sm",
								exportOptions: {
									columns: [0,1,2,3,4,5]
								}
            }, {
                extend: "csv",
                className: "btn-sm",
								exportOptions: {
									columns: [0,1,2,3,4,5]
								}
            }, {
                extend: "excel",
                className: "btn-sm",
								exportOptions: {
									columns: [0,1,2,3,4,5]
								}
            }, {
                extend: "pdf",
                className: "btn-sm",
								exportOptions: {
									columns: [0,1,2,3,4,5]
								}
            }, {
                extend: "print",
                className: "btn-sm",
								exportOptions: {
									columns: [0,1,2,3,4,5]
								}
            }],
            responsive: !0
        })
    },
    TableManageButtons = function() {
        "use strict";
        return {
            init: function() {
                handleDataTableButtons()
            }
        }
    }();