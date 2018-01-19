$(document).ready(function(){
    if (mode == 'data')
    {
        $('#datatable').DataTable({
            "processing": true,
            "serverSide": true,
            "responsive": true,
            "ajax": urlData+'/getData',
            //custom setup
            "rowReorder": {
                "selector": 'td:nth-child(2)'
            },
            "columnDefs": [
                {
                    "targets": 0, 
                    "className": "text-center"
                },
                {
                    "targets": 3, 
                    "className": "text-center",
                    "orderable": false
                }
            ]
        });
    }

    if (mode == 'action')
    {
        $("#my_form").validate({
            submitHandler: function(form) {
                form.submit();
            }
        });
    }
});

