<div class="box">
  <div class="box-header">
    <h3 class="box-title">Stock Release</h3>
    <button type="button" class="btn btn-default btn-xm editbtn" data-toggle="modal" data-target="#addEmployeeModal">
      <span class='glyphicon glyphicon-plus'></span>
    </button>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    <table id="purchase_info_table" class="table table-bordered table-striped">
      <thead>
        <tr>
          <th>Purchase Order Number</th>
          <th>Supplier</th>
          <th>Purchase Item List</th>
          <th>Order Status</th>
          <th>Order Date</th>
          <th>Est.Recieve Date</th>
          <th>Responsible</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>PO160812-001</td>
          <td>Techzone</td>
          <td>PL-226</td>
          <td>Not Recieved</td>
          <td>2016-08-12</td>
          <td>2016-08-20</td>
          <td>Nadun Punchihewa</td>
          <td>
            <button type='button' class='btn btn-default btn-xm editbtn' id='addcollum_". $index ."' index=".$index."><span class='glyphicon glyphicon-pencil'></span></button>
            <button type='button' class='btn btn-default btn-xm removebtn'><span class='glyphicon glyphicon-remove'></span></button>

          </td>

        </tr>
        <tr>
          <td>PO160812-002</td>
          <td>Redline</td>
          <td>PL-227</td>
          <td>Delay</td>
          <td>2016-08-12</td>
          <td>2016-08-15</td>
          <td>Deshan Priyantha</td>
          <td>
            <button type='button' class='btn btn-default btn-xm editbtn' id='addcollum_". $index ."' index=".$index."><span class='glyphicon glyphicon-pencil'></span></button>
            <button type='button' class='btn btn-default btn-xm removebtn'><span class='glyphicon glyphicon-remove'></span></button>

          </td>

        </tr>

      </tbody>
      <tfoot>
        <tr>
          <th>Purchase Order Number</th>
          <th>Supplier</th>
          <th>Purchase Item List</th>
          <th>Order Status</th>
          <th>Order Date</th>
          <th>Est.Recieve Date</th>
          <th>Responsible</th>
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
    $("#purchase_info_table").DataTable();
  });
</script>

<!-- Employee Adding Form / Bootstrap Model -->
<div class="modal fade" id="addEmployeeModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Generate Purchase Order</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form role="form">
          <div class="box-body">
            <div class="form-group">
              <label for="employeeName">Purchase Order Number</label>
              <input type="text" class="form-control" id="employeeName" placeholder="ex: H.S.S.Perera" 
              value="PO160812-001">
            </div>
            <div class="form-group">
              <label for="empType">Supplier</label>
              <select class="form-control">
                <option>Techzone</option>
                <option>Redline</option>
                <option>Nanotek</option>
                <option>PC House</option>
                <option>Vista Computers</option>
              </select>
            </div>
            <div class="form-group">
              <label for="empEmail">Purchased Item List</label>
              <select class="form-control">
                <option>PL-226</option>
                <option>PL-227</option>
              </select>
            </div>
            <div class="form-group">
              <label for="empType">Order Status</label>
              <select class="form-control">
                <option>Not Received</option>
                <option>Delay</option>
              </select>
            </div>
            <div class="form-group">
              <label for="empEmail">Order Date</label>
              <input type="date" class="form-control" id="empEmail" placeholder="+94 112186195">
            </div>
            <div class="form-group">
              <label for="empEmail">Est. Delivery Date</label>
              <input type="date" class="form-control" id="empEmail" placeholder="+94 112186195">
            </div>
            <div class="form-group">
              <label for="empType">Responsible</label>
              <select class="form-control">
                <option>Jehad Mohomed</option>
                <option>Jason Athapaththu</option>
              </select>
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