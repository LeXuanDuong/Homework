<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <div class="row">
            <form action="index.php" name="hr" method="post">
                <div class="form-group">
                    <label for="tien_vay">Số tiền vay</label>
                    <input type="text" name="tien_vay" class="form-control" value="<?php
                    echo isset($_POST['tien_vay']) ? $_POST['tien_vay'] :0 ?>">
                </div>
                <div class="form-group">
                    <label for="lai-suat">Lãi suất</label>
                    <input type="text" name="lai_suat" class="form-control" value="<?php
                    echo isset($_POST['lai_suat']) ? $_POST['lai_suat']:0 ?>">
                </div>
                <div class="form-group">
                    <label for="thang_vay">Thời hạn vay(tháng)</label>
                    <input type="text" name="thang_vay" class="form-control" value="<?php
                    echo isset($_POST['thang_vay']) ? $_POST['thang_vay']:0 ?>">
                </div>

                    <button type="submit" name="submit" class="btn btn-default" value="submit">Kết quả</button>
            </form>
        </div>


        <div class="row">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Kỳ hạn</th>
                        <th>Lãi phải trả</th>
                        <th>Gốc phải trả</th>
                        <th>Số tiền phải trả</th>
                        <th>Số tiền còn lại</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $thang=$_POST['thang_vay'];
                        $tienvay=$_POST['tien_vay'];
                        $lai=$_POST['lai_suat']/100;
                        $goctra=$tienvay/$thang;
                        $tienthang1=$goctra+$tienvay*$lai/12;
                        $tonglai=0;
                        for($i=0;$i<$thang;$i++){
                            $laitra=$tienvay*$lai/12;
                            $tonglai+=$laitra;
                            $tientra=$laitra+$goctra;
                            $tienvay-=$goctra;
                            echo "<tr>";
                            echo "<td>".($i+1)."</td>";
                            echo "<td>".(int)$laitra."</td>";
                            echo "<td>".(int)$goctra."</td>";
                            echo "<td>".(int)$tientra."</td>";
                            echo "<td>".(int)$tienvay."</td>";
                        }
                    ?>
                </tbody>
            </table>
        </div>
        <div class="row">
            <p>Số tiền trả tháng đầu: <?php echo $tienthang1; ?></p>
            <p>Tổng lãi phải trả:<?php echo $tonglai; ?></p>
            <p>Tổng số tiền gốc và lãi phải trả:<?php echo $tonglai+$_POST['tien_vay']; ?></p>
        </div>
    </div>
</body>
</html>