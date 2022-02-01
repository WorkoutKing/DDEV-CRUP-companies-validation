<?php require 'views/_partials/head.view.php';?>

<?php
use ToDo\Validation;
?>


<div class="container">
    <div class="errors">
        <?php foreach(Validation::$validationErrors as $error): ?>
            <div class="alert alert-danger"><?=$error;?></div>
        <?php endforeach; ?>
    </div>
<form method="post">
<div class="form-group">
    <input type="text" class="form-control" name="pavadinimas" placeholder="Company name" >
  </div>
  <div class="form-group">
    <input type="text" class="form-control" name="kodas" placeholder="Code">
  </div>
  <div class="form-group">
    <input type="text" class="form-control" name="pvm_kodas" placeholder="PVM Code">
  </div>
  <div class="form-group">
    <input type="text" class="form-control" name="adresas" placeholder="Adress">
  </div>
  <div class="form-group">
    <input type="text" class="form-control" name="telefonas" placeholder="Phone number">
  </div>
  <div class="form-group">
    <input type="email" class="form-control" name="pastas" placeholder="Email">
  </div>
  <div class="form-group">
    <input type="text" class="form-control" name="veikla" placeholder="Activity">
  </div>
  <div class="form-group">
    <input type="text" class="form-control" name="vadovas" placeholder="CEO">
  </div>
<button type="submit" class="btn btn-primary" name ="save">SUBMIT</button>
<button type="button" class="btn btn-primary" onclick="window.location='/';">GO BACK</button>
</form>
</div>
<?php require 'views/_partials/htmlEnd.php';?>