<?php
    try{
        //connect to DB

        $dbh = new PDO('mysql:host=db;dbname=study;charset=utf8', 'root', 'example');
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    // Select data

    $sth = $dbh->query('SELECT * from employees');
    $sth->setFetchMode(PDO::FETCH_OBJ);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
</style>
</head>
<body>
<table>
        <tr>
            <td>Id</td>
            <td>First Name</td>
            <td>Last Name</td>
            <td>Department</td>
            <td>Email</td>
        </tr>
    <?php while($row = $sth->fetch()):  ?>
        <tr>
            <td><?php echo $row->id; ?></td>
            <td><?php echo $row->first_name; ?></td>
            <td><?php echo $row->last_name; ?></td>
            <td><?php echo $row->department; ?></td>
            <td><?php echo $row->email; ?></td>
        </tr>
    <?php  endwhile; ?>
   
    </table>
</body>
</html>