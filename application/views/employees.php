<div class="box">
  <div class="box-header">
    <h3 class="box-title">Employees</h3>
    <button type="button" class="btn btn-default btn-xm editbtn" data-toggle="modal" data-target="#addEmployeeModal">
      <span class='glyphicon glyphicon-plus'></span>
    </button>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    <table id="employee_info_table" class="table table-bordered table-striped">
      <thead>
        <tr>
          <th>Employee Name</th>
          <th>Employee Adress</th>
          <th>Employee Type</th>
          <th>Contact Number</th>
          <th>Email</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <?php 
        $index=0;
        foreach ($employees as $employee) {
          echo "<tr>
          <td id='empname".$index."'>".$employee["employee_name"]."</td>
          <td id='empaddress".$index."'>".$employee["employee_address"]."</td>
          <td id='emptype".$index."'>".$employee["employee_type"]."</td>
          <td id='empcontact".$index."'>".$employee["contact_number"]."</td>
          <td id='emptype".$index."'>".$employee["employee_email"]."</td>
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
        <th>Employee Name</th>
        <th>Employee Adress</th>
        <th>Employee Type</th>
        <th>Contact Number</th>
        <th>Email</th>
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
    $("#employee_info_table").DataTable();
  });
</script>


<!-- Employee Adding Form / Bootstrap Model -->
<div class="modal fade" id="addEmployeeModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Add New Employe</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form role="form">
          <div class="box-body">
            <div class="form-group">
              <label for="employeeName">Name</label>
              <input type="text" class="form-control" id="employeeName" placeholder="ex: H.S.S.Perera">
            </div>
            <div class="form-group">
              <label for="empAddress">Address</label>
              <input type="text" class="form-control" id="empAddress" placeholder="Enter the Address">
            </div>
            <div class="form-group">
              <label for="empType">Employee Category</label>
              <select class="form-control">
                <option>option 1</option>
                <option>option 2</option>
                <option>option 3</option>
                <option>option 4</option>
                <option>option 5</option>
              </select>
            </div>
            <div class="form-group">
              <label for="empContact">Contact Number</label>
              <input type="text" class="form-control" id="empContact" placeholder="+94 71 5655050">
            </div>
            <div class="form-group">
              <label for="empEmail">Email</label>
              <input type="email" class="form-control" id="empEmail" placeholder="sachitha@openarc.lk">
            </div>
            <div class="form-group">
              <label for="cvUpload">CV</label>
              <input type="file" id="cvUpload">
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