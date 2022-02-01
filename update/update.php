<?php
{/* Be sito failu niekas nepasikeistu bent as taip manau, tarpinis tarp update mygtuko ir update formos*/}
include_once 'database.php';
$result = mysqli_query($conn,"SELECT * FROM companies");
?>
<!DOCTYPE html>
<html>
 <head>
   <title> Retrive data</title>
 </head>
<>
<?php
if (mysqli_num_rows($result) > 0) {
?>
<table>
	  <tr>
	    <td>pavadinimas</td>
		<td>kodas</td>
		<td>pvm_kodas</td>
		<td>adresas</td>
		<td>telefonas</td>
		<td>Action</td>
	  </tr>
			<?php
			$i=0;
			while($row = mysqli_fetch_array($result)) {
			?>
	  <tr>
	    <td><?php echo $row["pavadinimas"]; ?></td>
		<td><?php echo $row["kodas"]; ?></td>
		<td><?php echo $row["pvm_kodas"]; ?></td>
		<td><?php echo $row["adresas"]; ?></td>
		<td><?php echo $row["pastas"]; ?></td>
		<td><a href="update-process.php?id=<?php echo $row['id']; ?>">Update</a></td>
      </tr>
			<?php
			$i++;
			}
			?>
</table>
 <?php
}
else
{
    echo "No result found";
}
?>

<?php require '../views/_partials/headEnd.php';?>
