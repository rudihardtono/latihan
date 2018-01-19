function confirmation(url) {
  var table = $('#datatable').DataTable();
  if (confirm('Do you want to delete this data?')) {
    $.ajax({
        url: url,
        dataType: "JSON",
        timeout: 10000,
        success: function(result) {
          alert(result.message);
          table.ajax.reload();
        }, error: function(xhr, textStatus, errorThrown) {
          alert(errorThrown);
        }
    });
  }
  return false;
}
