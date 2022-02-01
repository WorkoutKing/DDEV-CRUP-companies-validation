<?php require 'views/_partials/head.view.php';?>
<?php
$servername='ddev-phpfastcreate-db';
$username='db';
$password='db';
$dbname = "db";
$conn=mysqli_connect($servername,$username,$password,"$dbname");
if(!$conn){
die('Could not Connect My Sql:' .mysql_error());
}
$limit = 6;  
if (isset($_GET["page"])) {
	$page  = $_GET["page"]; 
	} 
	else{ 
	$page=1;
	};  
$start_from = ($page-1) * $limit;  
$result = mysqli_query($conn,"SELECT * FROM companies ORDER BY id ASC LIMIT $start_from, $limit");
?>
<h3>Companys list:</h3>
<div class="container-fluid d-flex justify-content-center">
<table class="table table-bordered table-striped">
        <tr>
            <th scope="col">Company name</th>
            <th scope="col">Adress</th>
            <th scope="col">Email</th>
            <th scope="col">Delete</th>
            <th scope="col">Update</th>
        </tr>
        <?php foreach ($task->fullList() as $company): ?>
        <?php while ($company = mysqli_fetch_array($result)):?>
        <tr>
            <td scope="col"><a href="/info/<?= $company['id'] ?>"><?= $company['pavadinimas']; ?></a></td>
            <td scope="col"><?= $company['adresas']; ?></td>
            <td scope="row"><?= $company['pastas']; ?></td>
            <td><a href="/delete-task/id/<?=$company['id'];?>" onclick="return confirm('Are you sure you want to delete this item?');"><img src="../images/close.png" width=15></a></td>        
            <td><a class="btn btn-success btn-sm" href="/update/update-process.php?id=<?php echo $company['id']; ?>">Update</a></td>
        </tr>
        <?php endwhile?> 
        <?php endforeach;?>
    </table>
   </div>
   <div class="container bg-light">
        <div class="col-md-12 text-center">
            <button type="button" class="btn btn-primary" onclick="window.location='/';">GO BACK</button>
            <button type="button" class="btn btn-primary" onclick="window.location='/add-task';">ADD COMPANY</button>
        </div>
    </div>
<?php  
$result_db = mysqli_query($conn,"SELECT COUNT(id) FROM companies"); 
$row_db = mysqli_fetch_row($result_db);  
$total_records = $row_db[0];  
$total_pages = ceil($total_records / $limit); 
/* echo  $total_pages suskaiciuoja kiek puslapiu bus */
$pagLink = "<ul class='pagination justify-content-center my-3 ' >";  
for ($i=1; $i<=$total_pages; $i++) {
              $pagLink .= "<li class='page-item'><a class='page-link' href='/table/page=1?page=".$i."'>".$i."</a></li>";
}
echo $pagLink . "</ul>";  
?>


<?php require 'views/_partials/htmlEnd.php';?>