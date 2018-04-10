<?php
// admin/index.php
require_once '../config/config.php';

if(isset($_GET['id'])){
    $id=$_GET['id'];
    delete($id);
}


_header("HOME");

?>

<div class="container">
	<table style="border:solid black 1px;">
		<tr style="background:green;">
			<th>#</th>
			<th>Name</th>
			<th>Username</th>
			<th>Email</th>
			<th>Edit</th>
			<th>Delete</th>
		</tr>

		<tr  style="border:solid black 1px;">
			<?php
			foreach (getAll() as $user) {
			?>

			<td  style="border:solid black 1px;"><?php echo $user['id']; ?></td>
			<td  style="border:solid black 1px;"><?php echo $user['full_name']; ?></td>
			<td  style="border:solid black 1px;"><?php echo $user['username']; ?></td>
			<td style="border:solid black 1px;" ><?php echo $user['email']; ?></td>
			<td  style="border:solid black 1px;"><a href="updat.php?user_id=<?php echo $user['id']; ?>">Edit</a></td>
			<td  style="border:solid black 1px;"><a href="index.php?id=<?php echo $user['id']; ?>">Delete</a></td>

			
		</tr>
        <?php
			}
			?>
	</table>
</div>

<?php
_footer();
?>


