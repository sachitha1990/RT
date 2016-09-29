<div class="box">
  <div class="box-header">
    <h3 class="box-title">Sales</h3>
    <button type="button" class="btn btn-default btn-xm editbtn" data-toggle="modal" data-target="#addEmployeeModal">
      <span class='glyphicon glyphicon-plus'></span>
    </button>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    <table id="sales_info_table" class="table table-bordered table-striped">
      <thead>
        <tr>
          <th>Order Number</th>
          <th>Order Date</th>
          <th>Estimate Release Date</th>
          <th>Order Status</th>
          <th>Delivery Type</th>
          <th>Order Type/th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          <?php 
          $index=0;
          foreach ($sales as $sale) {
            echo "<tr>
            <td id='order_no".$index."'>".$sale["cus_order_no"]."</td>
            <td id='order_date".$index."'>".$sale["cus_order_date"]."</td>
            <td id='order_esit".$index."'>".$sale["cus_order_release_date"]."</td>
            <td id='order_stat".$index."'>".$sale["cus_order_status"]."</td>
            <td id='order_del_type".$index."'>".$sale["cus_order_delivery_type"]."</td>
            <td id='order_type".$index."'>".$sale["cus_order_type"]."</td>
            <td>
              <button type='button' class='btn btn-default btn-xm editbtn' id='addcollum_". $index ."' index=".$index."><span class='glyphicon glyphicon-pencil'></span></button>
              <button type='button' class='btn btn-default btn-xm removebtn'><span class='glyphicon glyphicon-remove'></span></button>

            </td>
          </tr>"; 
          $index++;
        }
        ?>

      </tbody>
      <tfoot>
        <tr>
          <tr>
            <th>Order Number</th>
            <th>Order Date</th>
            <th>Estimate Release Date</th>
            <th>Order Status</th>
            <th>Delivery Type</th>
            <th>Order Type/th>
              <th></th>
            </tr>
          </tr>
        </tfoot>
      </table>
    </div>
    <!-- /.box-body -->
  </div>


  <!-- page script -->
  <script>
    $(document).ready(function () {
      $("#sales_info_table").DataTable();
    });
  </script>


  <!-- Employee Adding Form / Bootstrap Model -->
  <div class="modal fade" id="addEmployeeModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Add New Supplier</h3>
          </div>
          <!-- /.box-header -->
          <!-- form start -->
          <form role="form">
            <div class="box-body">
              <div class="form-group">
                <label for="employeeName">Supplier Name</label>
                <input type="text" class="form-control" id="employeeName" placeholder="ex: H.S.S.Perera">
              </div>
              <div class="form-group">
                <label for="empAddress">Supplier Address</label>
                <input type="text" class="form-control" id="empAddress" placeholder="Enter the Address">
              </div>
              <div class="form-group">
                <label for="empContact">Supplier Contact</label>
                <input type="text" class="form-control" id="empContact" placeholder="+94 71 5655050">
              </div>
              <div class="form-group">
                <label for="empEmail">Supplier Fax</label>
                <input type="email" class="form-control" id="empEmail" placeholder="+94 112186195">
              </div>
              <div class="form-group">
                <label for="empEmail">Supplier Email</label>
                <input type="email" class="form-control" id="empEmail" placeholder="sachitha@openarc.lk">
              </div>
              <div class="form-group">
                <label for="empEmail">Supplier Status</label>
                <input type="email" class="form-control" id="empEmail" placeholder="active">
              </div>
              <div class="form-group">
                <label for="empEmail">Supplier Website</label>
                <input type="email" class="form-control" id="empEmail" placeholder="righttechnology.lk">
              </div>

            </div>
            <!-- /.box-body -->

            <div class="box-footer">
              <button type="cancel" class="btn btn-default"><span class='glyphicon glyphicon-ok'></button>
              <button type="submit" class="btn btn-default" data-dismiss="modal"><span class='glyphicon glyphicon-remove'></button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>