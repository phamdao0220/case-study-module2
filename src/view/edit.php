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
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Name</span>
        <input type="text" name="name" value="<?php echo $student['name']?>" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Birthday</span>
        <input type="date" name="birthday" value="<?php echo $student['birthday']?>" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
    </div>

    <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Class</label>
        <select name="classNumber">
            //        $ListClass = new \App\controller\StudentController();
            <?php foreach ($classStudent as $class):?>
                <option value="<?php echo $class->getId()?> "><?php echo $class->getClassName() ?></option>;
            <?php endforeach;?>
        </select>
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Gender</span>
        <input type="text" name="gender"  value="<?php echo $student['gender']?>" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Email</span>
        <input type="email" name="email"  value="<?php echo $student['email']?>" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Address</span>
        <input type="text" name="address"  value="<?php echo $student['address']?>" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
    </div>
    <div class="input-group mb-3">
        <span class="form-label">Image</span>
        <input type="file" name="my-file" value="<?php echo $student['image'] ?>" class="from-control" id="formGroupExampleInput" placeholder="Example input placeholder">

    </div>
    <button type="submit">Update</button>
    </div>

</form>

</body>
</html>
