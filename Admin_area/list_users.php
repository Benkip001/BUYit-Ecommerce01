<h3 class="text-center text-success">All users</h3>
<table class="table table-bordered mt-5">
    <thead class="bg-info">

    <?php
    ini_set('display_errors', 1);
    error_reporting(E_ALL);
    include('../includes/connect.php');

$get_payments="select * from `user_table`";
$result=mysqli_query($con,$get_payments);
$row_count=mysqli_num_rows($result);


if ($row_count==0) {
    echo "<h2 class='bg-danger text-center mt-5'>No payments user yet</h2>";
}else {
    echo "<tr>
<th>Si no</th>
<th>Username</th>
<th>User email</th>
<th>User Image</th>
<th>User Address</th>
<th>User mobile</th>
<th>Delete</th>
</tr>
</thead>
<tbody class='bg-secondary text-light'>";
    $number=0;
    while ($row_data=mysqli_fetch_assoc($result)) {
        $user_id=$row_data['user_id'];
        $username=$row_data['username'];
        $user_email=$row_data['user_email'];
        $user_image=$row_data['user_image'];
        $user_address=$row_data['user_address'];
        $user_mobile=$row_data['user_mobile'];
        $number++;
        echo "<tr>
        <td>$number</td>
        <td>$username</td>
        <td>$user_email</td>
        <td><img src='../usersarea/user_images/$user_image' alt='$username'</td>
        <td>$user_address</td>
        <td>$user_mobile</td>
        <td><a href=''>Delete</a></td>
    </tr>";
    }
}

?>
        
        
    </tbody>
</table>