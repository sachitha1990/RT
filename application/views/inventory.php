<div class="box">
  <div class="box-header">
    <h3 class="box-title">Stock Items</h3>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    <table id="inventory_info_table" class="table table-bordered table-striped">
      <thead>
        <tr>
          <th>Item Code</th>
          <th>Item Name</th>
          <th>Item Category</th>
          <th>Stock Discription</th>
          <th>Local Serial</th>
          <th>Quantity</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>C001</td>
          <td>Kingston 32GB</td>
          <td>Pen Drive</td>
          <td>Kingston 32Gb USB 3.0</td>
          <td>PDK-2036</td>
          <td>10</td>
          <td>
            <button type='button' class='btn btn-default btn-xm editbtn' id='addcollum_". $index ."' index=".$index."><span class='glyphicon glyphicon-pencil'></span></button>
            <button type='button' class='btn btn-default btn-xm removebtn'><span class='glyphicon glyphicon-remove'></span></button>

          </td>

        </tr>
        <tr>
          <td>C002</td>
          <td>Samsung 21</td>
          <td>Monitor</td>
          <td>Samsung 21 inch LED monitor</td>
          <td>MS-4256</td>
          <td>5</td>
          <td>
            <button type='button' class='btn btn-default btn-xm editbtn' id='addcollum_". $index ."' index=".$index."><span class='glyphicon glyphicon-pencil'></span></button>
            <button type='button' class='btn btn-default btn-xm removebtn'><span class='glyphicon glyphicon-remove'></span></button>

          </td>

        </tr>
        <tr>
          <td>C003</td>
          <td>Radeon Casing</td>
          <td>Computer Casing</td>
          <td>Radeon White MINI ATX casing</td>
          <td>CCRC-3041</td>
          <td>10</td>
          <td>
            <button type='button' class='btn btn-default btn-xm editbtn' id='addcollum_". $index ."' index=".$index."><span class='glyphicon glyphicon-pencil'></span></button>
            <button type='button' class='btn btn-default btn-xm removebtn'><span class='glyphicon glyphicon-remove'></span></button>

          </td>

        </tr>
        <tr>
          <td>C004</td>
          <td>DVD Writer</td>
          <td>Optical Drives</td>
          <td>Sony Brand new DVD Writer</td>
          <td>ODDW-8521</td>
          <td>10</td>
          <td>
            <button type='button' class='btn btn-default btn-xm editbtn' id='addcollum_". $index ."' index=".$index."><span class='glyphicon glyphicon-pencil'></span></button>
            <button type='button' class='btn btn-default btn-xm removebtn'><span class='glyphicon glyphicon-remove'></span></button>

          </td>

        </tr>
      </tbody>
      <tfoot>
        <tr>
          <th>Item Code</th>
          <th>Item Name</th>
          <th>Item Category</th>
          <th>Stock Discription</th>
          <th>Local Serial</th>
          <th>Quantity</th>
          <th></th>
        </tr>
      </tfoot>
    </table>
  </div>
  <!-- /.box-body -->
</div>


<!-- page script -->
<script>
  $(document).ready(function () {
    $("#inventory_info_table").DataTable();
  });
</script>