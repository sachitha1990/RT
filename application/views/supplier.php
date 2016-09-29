<div class="box">
  <div class="box-header">
    <h3 class="box-title">Suppliers</h3>
    <button type="button" class="btn btn-default btn-xm editbtn" data-toggle="modal" data-target="#addEmployeeModal">
      <span class='glyphicon glyphicon-plus'></span>
    </button>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    <table id="supplier_info_table" class="table table-bordered table-striped">
      <thead>
        <tr>
          <th>Supplier Name</th>
          <th>Supplier Address</th>
          <th>Supplier Contact</th>
          <th>Supplier Fax</th>
          <th>Supplier Email</th>
          <th>Supplier Status</th>
          <th>Supplier WebSite</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <?php 
        $index=0;
        foreach ($suppliers as $supplier) {
          echo "<tr>
          <td id='cusname".$index."'>".$supplier["vendor_name"]."</td>
          <td id='cusaddress".$index."'>".$supplier["vendor_address"]."</td>
          <td id='cuscontact".$index."'>".$supplier["vendor_contact_office"]."</td>
          <td id='cusfax".$index."'>".$supplier["vendor_fax"]."</td>
          <td id='cusemail".$index."'>".$supplier["vendor_email"]."</td>
          <td id='cusstatus".$index."'>".$supplier["vendor_status"]."</td>
          <td id='cusweb".$index."'>".$supplier["vendor_website"]."</td>
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
          <th>Supplier Name</th>
          <th>Supplier Address</th>
          <th>Supplier Contact</th>
          <th>Supplier Fax</th>
          <th>Supplier Email</th>
          <th>Supplier Status</th>
          <th>Supplier WebSite</th>
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
    $("#supplier_info_table").DataTable();
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