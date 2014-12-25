
<?php
$link = mysqli_connect("localhost","root","lict@2","crud01");
$query = "select * from personalinfo;";
$result = mysqli_query($link, $query);

?>

<table border="1" width="60%">
    <tr>
        <td>id</td>
        <td>fullname</td>
        <td>Action</td>

</tr>

<?php

foreach($result as $row){
    ?>

<tr>
        <td><?php echo $row['id']?></td>
        <td><?php echo $row['fullname']?></td>



    <td>  <a href="view.php?id=<?php echo $row['id']?>">View/Show</a> |
          <a href="delete.php?id=<?php echo $row['id']?>">Delete</a> |

    </td>
</tr>
<?php
}
?>
</table>
