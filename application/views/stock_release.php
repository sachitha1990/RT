<div class="box">
  <div class="box-header">
    <h3 class="box-title">Stock Release</h3>
    <button type="button" class="btn btn-default btn-xm editbtn" data-toggle="modal" data-target="#addEmployeeModal">
      <span class='glyphicon glyphicon-plus'></span>
    </button>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    <table id="stock_release_info_table" class="table table-bordered table-striped">
      <thead>
        <tr>
          <th>Release Note Number</th>
          <th>Stock Request Note</th>
          <th>Released By</th>
          <th>Released Date</th>
          <th>Released Items List</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>RS160812-001</td>
          <td>RQ160812-001</td>
          <td>Deshan Pathirana</td>
          <td>2016-08-12</td>
          <td>RL-223</td>
          <td>
            <button type='button' class='btn btn-default btn-xm editbtn' id='addcollum_". $index ."' index=".$index."><span class='glyphicon glyphicon-pencil'></span></button>
            <button type='button' class='btn btn-default btn-xm removebtn'><span class='glyphicon glyphicon-remove'></span></button>

          </td>

        </tr>
        <tr>
          <td>RS160812-002</td>
          <td>RQ160812-002</td>
          <td>Sachith Pathiarana</td>
          <td>2016-08-12</td>
          <td>RL-224</td>
          <td>
            <button type='button' class='btn btn-default btn-xm editbtn' id='addcollum_". $index ."' index=".$index."><span class='glyphicon glyphicon-pencil'></span></button>
            <button type='button' class='btn btn-default btn-xm removebtn'><span class='glyphicon glyphicon-remove'></span></button>

          </td>

        </tr>

      </tbody>
      <tfoot>
        <tr>
          <th>Release Note Number</th>
          <th>Stock Request Note</th>
          <th>Released By</th>
          <th>Released Date</th>
          <th>Released Items List</th>
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
    $("#stock_release_info_table").DataTable();
  });
</script>

<!-- Employee Adding Form / Bootstrap Model -->
<div class="modal fade" id="addEmployeeModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Stock Release Note</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form role="form">
          <div class="box-body">
            <div class="form-group">
              <label for="employeeName">Stock Release Note Number</label>
              <input type="text" class="form-control" id="employeeName" placeholder="ex: H.S.S.Perera" 
              value="RS160812-001">
            </div>
            <div class="form-group">
              <label for="empType">Stock Request Number</label>
              <select class="form-control">
                <option>RQ160812-001</option>
                <option>RQ160812-002</option>
                <option>RQ160812-003</option>
                <option>RQ160812-004</option>
                <option>RQ160812-005</option>
              </select>
            </div>
            <div class="form-group">
              <label for="empType">Released By</label>
              <select class="form-control">
                <option>Deshan Priyantha</option>
                <option>Kasun Chinthaka</option>
              </select>
            </div>
            <div class="form-group">
              <label for="empEmail">Released Date</label>
              <input type="date" class="form-control" id="empEmail" placeholder="+94 112186195">
            </div>
            <div class="form-group">
              <label for="empEmail">Releas Item List</label>
              <select class="form-control">
                <option>RL-223</option>
                <option>RL-224</option>
                <option>RL-225</option>
                <option>RL-226</option>
                <option>RL-227</option>
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