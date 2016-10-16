<div class="box">
  <div class="box-header">
    <h3 class="box-title">Stock Items</h3>
    <button class="btn btn-default" onclick="add_item()"><span class="glyphicon glyphicon-plus"></span></button>
    <button class="btn btn-default" onclick="reload_table()"><span class="glyphicon glyphicon-refresh"></span></button>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    <table id="inventory_info_table" class="table table-bordered table-striped">
      <thead>
        <tr>
          <th>Item Code</th>
          <th>Item Name</th>
          <th>Stock Description</th>
          <th>Local Serial</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
      </tbody>
    </table>
  </div>
  <!-- /.box-body -->
</div>


<!-- page script -->
<script type="text/javascript">

var save_method; //for save method string
var table;

$(document).ready(function () {
  table = $("#inventory_info_table").DataTable({

    "processing": true, //Feature control the processing indicator
    "serverSide": true, //Feature control DataTables' serverside processing mode.
    "order": [], //Initial no order.

    //Load data for the table's content from an Ajax source.
    "ajax": {
      "url": "<?php echo site_url('product_controller/item_list')?>",
      "type": "POST"
    },

    //Set column definition initialisation properties.
    "columnDefs": [
    {
      "targets": [-1], //last column
      "odertable" : false, //set not orderable
    },
    ],
  });
});

function reload_table()
{
    table.ajax.reload(null,false); //reload datatable ajax 
  }

</script>

