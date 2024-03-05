<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
          <div style="width:70%">
                  <table id="tabel_serverside" cellspacing="0" class="display">
                    <thead>
                    <tr>
                     <th width="5%">No</th>
                <th width="10%">Username</th>
                <th width="20%">Nama User</th>
                <th width="8%">Level User</th>
                    </tr>
                    </thead>
 
                  </table>
          </div>
    <!-- /.content-wrapper -->
 
<script type="text/javascript" language="javascript" >
$(document).ready(function() {
  var dataTable = $('#tabel_serverside').DataTable( {
  "processing" : true,
  "oLanguage": {
                "sLengthMenu": "Tampilkan _MENU_ data per halaman",
                "sSearch": "Pencarian: ",
                "sZeroRecords": "Maaf, tidak ada data yang ditemukan",
                "sInfo": "Menampilkan _START_ s/d _END_ dari _TOTAL_ data",
                "sInfoEmpty": "Menampilkan 0 s/d 0 dari 0 data",
                "sInfoFiltered": "(di filter dari _MAX_ total data)",
                "oPaginate": {
                    "sFirst": "<<",
                    "sLast": ">>",
                    "sPrevious": "<",
                    "sNext": ">"
               }
            },
  columnDefs: [{
        targets: [0],
        orderable: false
     }],
    "ordering": true,
    "info": true,
    "serverSide": true,
    "stateSave" : true,
  "scrollX": true,
  "ajax":{
          url :"<?php echo base_url("serverside/listdata"); ?>", // json datasource
          type: "post",  // method  , by default get
          error: function(){  // error handling
            $(".tabel_serverside-error").html("");
            $("#tabel_serverside").append('<tbody class="tabel_serverside-error"><tr><th colspan="3">Data Tidak Ditemukan di Server</th></tr></tbody>');
            $("#tabel_serverside_processing").css("display","none");
 
          }
        }
  });
});
</script>