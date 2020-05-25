<?php include "db.php"; ?>
<!-- view.php -->
<table class="table table-hover">
    <thead>
      <tr>
        <th>Name</th>
        <th>Email-Id</th>
        <th>Phone No</th>
        <th>Address</th>
        <th>Action</th>
      </tr>
    </thead>
    <?php
    $select=mysql_query("select * from testing where status='1' order by id asc ");
    ?>
    <tbody id="table_list">
    <?php
      while ($select_fetch=mysql_fetch_array($select)) {
      ?>
      <tr>
        <td><?=$select_fetch['name']?></td>
        <td><?=$select_fetch['email']?></td>
        <td><?=$select_fetch['phone']?></td>
        <td><?=$select_fetch['Address']?></td>
        <td><button class="btn btn-success edit" id="<?=$select_fetch['id']?>" ><i class="fa fa-edit"></i></button> &nbsp; <button class="btn btn-danger delete" id="<?=$select_fetch['id']?>" ><i class="fa fa-trash"></i></button></td>
      </tr>
    <?php }?>
    </tbody>
  </table>
  <script type="text/javascript">
  	$(".edit").on('click',function(){
  var id=$(this).attr("id");
  var row=$(this);
  var name=row.closest("tr").find("td:eq(0)").text();
  var email=row.closest("tr").find("td:eq(1)").text();
  var number=row.closest("tr").find("td:eq(2)").text();
  var address=row.closest("tr").find("td:eq(3)").text();
  $("#id").val(id);
  $("#name").val(name);
  $("#email").val(email);
  $("#number").val(number);
  $("#address").val(address);
});

$(".delete").on('click',function(){
  var id=$(this).attr("id");
  // alert(id);
  var row=$(this).parents("tr");
  // alert(row);
  $.ajax({
      url:"delete.php",
      type:"POST",
      data: 'id='+id,
    }).done(function(data){
      alert(data);
      $(row).remove();
      
    });
});
  </script>