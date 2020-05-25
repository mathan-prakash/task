<?php include "db.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Register From</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://kit.fontawesome.com/a076d05399.js"></script> 
</head>
<body>

<div class="container">
  <h2>Register Form</h2>
  <form class="form-horizontal" id="frm" name="form1" action="/action_page.php">
    <div class="form-group">
      <label class="control-label col-sm-2">Name :</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name">
        <span id="nm" class="text-danger">Please Fill the Name</span>
        <input type="hidden" id="id" name="id">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2">Email :</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" id="email"  onblur="validateEmail(this);" placeholder="Enter Email-ID" name="email">
        <span id="em" class="text-danger">Plasce Fill the Valide Email Id</span>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2">Phone No :</label>
      <div class="col-sm-10">
        <input type="number" class="form-control" id="number" placeholder="Enter Phone" onkeyup="ValidateNumber(document.form1.number)"  onkeypress="return isNumberKey(event, document.form1.number)" name="number">
        <span id="ph" class="text-danger">Please Fill the Phone No</span>
        <span id="ph1" class="text-danger">mobile number only 10 characters</span>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2">Address :</label>
      <div class="col-sm-10">          
        <textarea class="form-control" id="address" placeholder="Enter Address" name="address"></textarea>
        <span id="ad" class="text-danger">Please Fill the Address</span>
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <div class="checkbox">
          <label><input type="checkbox" name="remember" id="checkedd"> I Agree that</label>
        </div>
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="button" id="button" class="btn btn-default">Submit</button>
      </div>
    </div>
  </form>
  <h2>Register Records</h2>
  <div id="table"></div>  
</div>

</body>
<script type="text/javascript">
$("#table").load("view.php");
$("#nm").hide();
$("#em").hide();
$("#ph").hide();
$("#ph1").hide();
$("#ad").hide();



$("#button").on('click',function(){

  var checkBox = document.getElementById("checkedd");
 if (checkBox.checked == true){

  if( ($("#name").val()!="") & ($("#email").val()!="") & ($("#number").val()!="") & ($("#address").val()!="") ){

 

    $("#nm").hide();
    $("#em").hide();
    $("#ph").hide();
    $("#ad").hide();
    var id=$("#id").val();
 
          if(id!=""){

            $.ajax({
              url:"update.php",
              type:"POST",
              data: $("#frm").serialize(),
            }).done(function(data){
              // alert(data);
              $("#table").load("view.php");
              $("#frm")[0].reset();
              $("#frm")[1].reset();
              $("#frm")[2].reset();
              $("#frm")[3].reset();
              $("#id").val("");
            });
          }else{
            $.ajax({
              url:"insert.php",
              type:"POST",
              data: $("#frm").serialize(),
            }).done(function(data){
              alert(data);
              $("#table").load("view.php");
              // $("tbody").append(data);
              $("#frm")[0].reset();
              $("#frm")[1].reset();
              $("#frm")[2].reset();
              $("#frm")[3].reset();
            });
          }
        } else{
    if($("#address").val()==""){
      $("#ad").show();
      $("#address").focus();
    }else{
      $("#ad").hide();
    }
    if($("#number").val()==""){
      $("#ph").show();
       $("#ph1").hide();
      $("#number").focus();
    }else{
      $("#ph").hide();
    }
    if($("#email").val()==""){
      $("#em").show();
      $("#email").focus();
    }else{
      $("#em").hide();

          var emailField1 = $("#email").val();

          var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;

          if (reg.test(emailField1) == false) 
          {
          $("#em").show();
          document.form1.text1.focus();
          return false;
          }else{
          $("#em").hide();
          }

    }
    if($("#name").val()=="")
    {
      $("#nm").show();
      $("#name").focus();
    }else{
      $("#nm").hide();
    }
  }
  }else{
      alert("Do You Agree?");
  }
});

</script>
<script type="text/javascript">
  
function validateEmail(emailField)
{
    var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;

    if (reg.test(emailField.value) == false) 
    {
      $("#em").show();
      document.form1.text1.focus();
        return false;
    }else{
       $("#em").hide();
    }

    return true;
}

</script>
 <script language=Javascript>
      <!--
      function isNumberKey(evt, inputText)
      {
         var charCode = (evt.which) ? evt.which : event.keyCode
         if (charCode > 31 && (charCode < 48 || charCode > 57)){
            return false;
         }
         
         return true;
      }
      //-->
   </script>

   <script type="text/javascript">
  
function ValidateNumber(inputText)
{

  var num_vali = inputText.value;
  num_vali_len = num_vali.toString().length;
  //  alert(num_vali_len);
  if(num_vali_len == 10)
  {
    $("#ph1").hide();
  }else{
    $("#ph1").show();
     $("#ph").hide();
    $("#number").focus();
  }

}
</script>

</html>
