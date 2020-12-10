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
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <!--        <a class="navbar-brand" href="#">Tim Kiem</a>-->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a href="index.php?page=add" class="btn btn-success">Add Student</a>

                </li>

                <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"></a>
                </li>
                <a href="index.php?page=add_score" class="btn btn-success">Extra points</a>
            </ul>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>


<table class="table">
    <h2 style="text-align: center">Quan ly hoc sinh</h2>
    <!--    <h3>Diem cua hoc sinh</h3>-->
    <!--    <h3>Hoc sinh</h3>-->
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
        <th></th>
        <th>Action</th>
        <th></th>
    </tr>
    </thead>
    <?php foreach ($students

    as $key => $student): ?>
    <tbody>
    <tr>
        <td class="table-success"><?php echo ++$key ?></td>
        <td class="table-success"><?php echo $student->getName() ?></td>
        <td class="table-success"><?php echo $student->getBirthday() ?></td>
        <td class="table-success"><?php echo $student->getClass() ?></td>
        <td class="table-success"><?php echo $student->getGender() ?></td>
        <td class="table-success"><?php echo $student->getEmail() ?></td>
        <td class="table-success"><?php echo $student->getAddress() ?></td>
        <td class="table-success">
            <img style="width: 100px" src="<?php echo $student->getImage() ?>">
        </td>

        <td class="table-success">
            <a href="index.php?page=edit&id=<?php echo $student->getId() ?>" class="btn btn-info">Edit</a>
        </td>
        <td class="table-success">
            <a href="index.php?page=delete&id=<?php echo $student->getId() ?>"
               onclick="return confirm('You want to delete') " class="btn btn-danger">Delete</a>
        </td>
        <td class="table-success">
            <a href="index.php?page=list_score&id=<?php echo $student->getId() ?>" class="btn btn-success">Checkpoint</a>
        </td>
        <?php endforeach; ?>

    </tr>
    </tbody>
</table>

</body>
</html>
