<?php
include 'config.php';
include('header.php');
$result = $conn->query("SELECT * FROM counselling_requests");
?>

<h2>All Counselling Requests</h2>
<table class="table table-success table-striped">
<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>Phone</th>
    <th>Qualification</th>
    <th>Interest</th>
    <th>Career Goal</th>
    <th>Preferred Country</th>
    <th>Comments</th>
    <th>Action</th>
</tr>

<?php while($row = $result->fetch_assoc()) { ?>
<tr>
    <td><?php echo $row['id']; ?></td>
    <td><?php echo $row['name']; ?></td>
    <td><?php echo $row['email']; ?></td>
    <td><?php echo $row['phone']; ?></td>
    <td><?php echo $row['qualification']; ?></td>
    <td><?php echo $row['interest']; ?></td>
    <td><?php echo $row['career_goal']; ?></td>
    <td><?php echo $row['preferred_country']; ?></td>
    <td><?php echo $row['comments']; ?></td>
    <td>
       <?php
echo "<a href='./conreq_edit.php?id={$row['id']}'>
        <button class='btn btn-primary' name='id'><i class='fa fa-edit'></i></button>
      </a>";
?>
       <?php
echo "<a href='./conreq_delete.php?id={$row['id']}' onclick=\"return confirm('Are you sure?')\">
        <button class='btn btn-danger' name='id'><i class='fa fa-trash'></i></button>
      </a>";
?>


    </td>
</tr>
<?php } ?>
</table>
<?php

include('footer.php')

?>
