<?php
include_once 'database.php';
if(count($_POST)>0) {
mysqli_query($conn,"UPDATE companies set id='" . $_POST['id'] . "', pavadinimas='" . $_POST['pavadinimas'] .
"', kodas='" . $_POST['kodas'] .
"', pvm_kodas='" . $_POST['pvm_kodas'] .
"', adresas='" . $_POST['adresas'] .
"', telefonas='" . $_POST['telefonas'] .
"', pastas='" . $_POST['pastas'] .
"', veikla='" . $_POST['veikla'] .
"', vadovas='" . $_POST['vadovas'] .
"' WHERE id='" . $_POST['id'] . "'");
$message = "Record Modified Successfully";
}
$result = mysqli_query($conn,"SELECT * FROM companies WHERE id='" . $_GET['id'] . "'");
$row= mysqli_fetch_array($result);
?>
<?php require '../views/_partials/head.view.php';?>
<div class="container">
<form name="frmUser" method="post" action="">
<div><?php if(isset($message)) { echo $message; } ?>
</div>
<div style="padding-bottom:5px;">
<h3>Update Company Data</h3>
</div>
<div class="form-group">
    <input type="hidden" name="id" class="form-control" placeholder="id" value="<?php echo $row['id']; ?>">
    <input type="text" name="id"  value="<?php echo $row['id']; ?>" disabled>
  </div>
<div class="form-group">
    <span class="label label-default text-white bg-dark">COMPANY NAME:</span>
    <input type="text" class="form-control" name="pavadinimas" placeholder="Company name" value="<?php echo $row['pavadinimas']; ?>">
  </div>
  <div class="form-group">
  <span class="label label-default text-white bg-dark">CODE:</span>
    <input type="text" class="form-control" name="kodas" placeholder="Code" value="<?php echo $row['kodas']; ?>">
  </div>
  <div class="form-group">
  <span class="label label-default text-white bg-dark">PVM CODE:</span>
    <input type="text" class="form-control" name="pvm_kodas" placeholder="PVM Code" value="<?php echo $row['pvm_kodas']; ?>">
  </div>
  <div class="form-group">
  <span class="label label-default text-white bg-dark">ADRESS:</span>
    <input type="text" class="form-control" name="adresas" placeholder="Adress" value="<?php echo $row['adresas']; ?>">
  </div>
  <div class="form-group">
  <span class="label label-default text-white bg-dark">PHONE NUMBER:</span>
    <input type="text" class="form-control" name="telefonas" placeholder="Phone number" value="<?php echo $row['telefonas']; ?>">
  </div>
  <div class="form-group">
  <span class="label label-default text-white bg-dark">EMAIL:</span>
    <input type="email" class="form-control" name="pastas" placeholder="Email" value="<?php echo $row['pastas']; ?>">
  </div>
  <div class="form-group">
  <span class="label label-default text-white bg-dark">ACTIVITY:</span>
    <input type="text" class="form-control" name="veikla" placeholder="Things" value="<?php echo $row['veikla']; ?>">
  </div>
  <div class="form-group">
  <span class="label label-default text-white bg-dark">CEO:</span>
    <input type="text" class="form-control" name="vadovas" placeholder="CEO" value="<?php echo $row['vadovas']; ?>">
  </div>
<button type="submit" class="btn btn-primary btn-sm" name ="save">SUBMIT</button> 

<button type="button" class="btn btn-primary btn-sm" onclick="window.location='/';">HOME</button>
<button type="button" class="btn btn-primary btn-sm" onclick="window.location='/table';">LIST OF COMPANIES</button>
</form>
</div>