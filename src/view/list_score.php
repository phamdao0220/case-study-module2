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
    <title style="">Danh Sách Điểm</title>
</head>
<body>
<div class="edu_nav">
    <div class="container">
        <nav class="navbar navbar-expand-md navbar-light bg-faded">
            <div class="collapse navbar-collapse main-menu">
                <ul class="navbar-nav nav lavalamp ml-auto menu">

                    <li class="nav-item"><a href="index.php?page=list-student" class="nav-link">LIST</a></li>
                    </li>

                </ul>
            </div>
        </nav>
    </div>
</div>

<h2 style="text-align: center;color: black; background: blanchedalmond">Danh Sách Điểm</h2>
<a href="index.php?page=add_score&id=<?php echo $scores[0]['student_id'] ?>" class="btn btn-primary btn-xs pull-right">Thêm điểm học sinh</a>

<table class="table" style="background-color: whitesmoke">
    <thead class="thead-dark">
    <tr>
        <th>STT</th>
        <th>Subject</th>
        <th>Score</th>
        <th>Coefficient</th>
    </tr>
    </thead>
    <?php foreach ($scores as $key => $value): ?>
        <tr>
            <td><?php echo ++$key ?></td>
            <td><?php echo $value['subject_name'] ?></td>
            <td><?php echo $value['score'] ?></td>
            <td><?php echo $value['coefficient'] ?></td>
        </tr>
    <?php endforeach; ?>
</table>

</html>
