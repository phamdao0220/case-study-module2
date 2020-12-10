<?php

$db = new \App\model\DBConnect();
$db = $db->connect();
$sql = "SELECT * FROM Student";
$stmt = $db->prepare($sql);
$stmt->execute();
$resuls = $stmt->fetchAll(PDO::FETCH_ASSOC);


?>
<body>
<h3 style="text-align: center">Nhập Điểm Học Sinh</h3>
<table align="center" id="tb" class="table" style="width: 400px;align-items: center">
    <form   method="post">
        <tr>
            <td>
                <label >Mã HS</label>
                <input type="text" name="student_id" value="<?php echo $id ?>">
            </td>
            <td>
                <label >Môn Hoc</label>
                <select name="subject_id" id="">
                    <?php foreach ($subjects as $subject): ?>
                    <option value="<?php echo $subject->getId() ?>"><?php echo $subject->getSubjectName() ?></option>
                    <?php endforeach; ?>

                </select>

            </td>
            <td>
                <label>Diem</label>

                <input type="text" name="scrore"  placeholder="Nhập điểm">
            </td>

            <td>
                <label >He So</label>

                <input type="text" name="coefficient"  placeholder="Nhập he so">
            </td>

        </tr>
        <tr>
            <td>
                <button type="submit" class="btn btn-primary">Submit</button>

            </td>
        </tr>

    </form>

</table>

</body>
<!--<footer align="center" class="container" style="background-color: black;color: white" >-->
<!--    <p>© Student Manager 2020-2021</p>-->
<!--</footer>-->
