<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
            crossorigin="anonymous"></script>

    <title>Document</title>
</head>
<body>

</body>
</html>
<table class="table">
    <thead class="table-dark">
    <tr>
        <th>STT</th>
        <th>Name</th>
        <th>Birthday</th>
        <th>Class</th>
        <th>Gender</th>
        <th>Email</th>
        <th>Address</th>
        <th>Img</th>
    </tr>
    </thead>
    <?php foreach ( $bills

    as $key => $student): ?>
    <tbody>
    <tr>
        <td class="table-success"><?php echo ++$key ?></td>
        <td class="table-success"><?php echo $student['name'] ?></td>
        <td class="table-success"><?php echo $student['birthday'] ?></td>
        <td class="table-success"><?php echo $student['class']?></td>
        <td class="table-success"><?php echo $student['gender']?></td>
        <td class="table-success"><?php echo $student['email']?></td>
        <td class="table-success"><?php echo $student['address'] ?></td>
        <td class="table-success">
            <img style="width: 100px" src="<?php echo $student['image']?>">
        </td>
        <?php endforeach; ?>

    </tr>
    </tbody>
</table>
