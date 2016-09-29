<div class="box">
  <div class="box-header">
    <h3 class="box-title">Customers</h3>
    <button type="button" class="btn btn-default btn-xm editbtn" data-toggle="modal" data-target="#addEmployeeModal">
      <span class='glyphicon glyphicon-plus'></span>
    </button>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    <table id="customer_info_table" class="table table-bordered table-striped">
      <thead>
        <tr>
          <th>Customer Name</th>
          <th>Customer Address Adress</th>
          <th>Customer Email</th>
          <th>Contact Number</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <?php 
        $index=0;
        foreach ($customers as $customer) {
          echo "<tr>
          <td id='cusname".$index."'>".$customer["customer_name"]."</td>
          <td id='cusemail".$index."'>".$customer["customer_email"]."</td>
          <td id='cuscontact".$index."'>".$customer["customer_contact"]."</td>
          <td id='cusaddress".$index."'>".$customer["customer_address"]."</td>
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
          <th>Customer Name</th>
          <th>Customer Address Adress</th>
          <th>Customer Email</th>
          <th>Contact Number</th>
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
    $("#customer_info_table").DataTable();
  });
</script>


<!-- Employee Adding Form / Bootstrap Model -->
<div class="modal fade" id="addEmployeeModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Add New Customer</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form role="form">
          <div class="box-body">
            <div class="form-group">
              <label for="employeeName">Customer Name</label>
              <input type="text" class="form-control" id="employeeName" placeholder="ex: H.S.S.Perera">
            </div>
            <div class="form-group">
              <label for="empAddress">Customer Email</label>
              <input type="text" class="form-control" id="empAddress" placeholder="Enter the Address">
            </div>
            <div class="form-group">
              <label for="empContact">Customer Address</label>
              <input type="text" class="form-control" id="empContact" placeholder="+94 71 5655050">
            </div>
            <div class="form-group">
              <label for="empEmail">Customer Contact</label>
              <input type="email" class="form-control" id="empEmail" placeholder="sachitha@openarc.lk">
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