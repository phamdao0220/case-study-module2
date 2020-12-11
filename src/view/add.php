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
<form method="post" enctype="multipart/form-data">
    <div class="container">
        <h2>ADD</h2>
        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Name</label>
            <input type="text" name="name" class="form-control" id="formGroupExampleInput"
                   placeholder="Example input placeholder">
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Birthday</label>
            <input type="date" name="birthday" class="form-control" id="formGroupExampleInput2"
                   placeholder="Another input placeholder">
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Class</label>
            <select name="classNumber">
                // $ListClass = new \App\controller\StudentController();
                <?php foreach ($classStudent as $class): ?>
                    <option value="<?php echo $class->getId() ?> "><?php echo $class->getClassName() ?></option>;
                <?php endforeach; ?>
            </select>
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Gender</label>
            <input type="text" name="gender" class="form-control" id="formGroupExampleInput2"
                   placeholder="Another input placeholder">
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Email</label>
            <input type="text" name="email" class="form-control" id="formGroupExampleInput2"
                   placeholder="Another input placeholder">
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Address</label>
            <input type="text" name="address" class="form-control" id="formGroupExampleInput2"
                   placeholder="Another input placeholder">
        </div>
        <div class="mb-3">
            <label class="form-label">Image</label>
            <input type="file" name="my-file" class="form-control" id="formGroupExampleInput2"
                   placeholder="Another input placeholder">
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Add</button>
        </div>
    </div>

</form>

</body>
</html>
