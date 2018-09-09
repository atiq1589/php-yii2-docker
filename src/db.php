<?php
    $connect = mysqli_connect('db', 'root', 'example', 'study');
    if(mysqli_connect_errno($connect)){
        echo 'Failed to connect to database: '. mysqli_connect_errno();
    } else {
        echo 'Db connections OK!!!!!!!!!!!!';
    }

    $insert_query = "INSERT INTO employees (first_name, last_name, department, email) VALUES ('Filza', 'Waniya', 'Baby', 'filza.waniya@gmail.com')";
    $select_query = "SELECT * FROM employees";
    // mysqli_query($connect, $insert_query);
    $result = mysqli_query($connect, $select_query);

    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Database</title>
</head>
<style>
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
</style>
<body>
    <table>
        <tr>
            <td>Id</td>
            <td>First Name</td>
            <td>Last Name</td>
            <td>Department</td>
            <td>Email</td>
        </tr>
    <?php while($row = mysqli_fetch_array($result)):  ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['first_name']; ?></td>
            <td><?php echo $row['last_name']; ?></td>
            <td><?php echo $row['department']; ?></td>
            <td><?php echo $row['email']; ?></td>
        </tr>
    <?php  endwhile; ?>
   
    </table>
</body>
</html>