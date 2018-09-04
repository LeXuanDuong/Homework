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
        <div style="height: 100px">
        </div>
    </div>
    <div class="row">
        <div style="color: red">

            <p>Bảo hiểm y tế = 1.5/100 * lương gross</p>
            <p>Bảo hiểm xã hội = 8/100 * lương gross</p>
            <p>Bảo hiểm thất nghiệp = 1/100 * lương gross</p>
            <p>Bảo hiểm = ( bảo hiểm y tế + bảo hiểm xã hội + bảo hiểm thất nghiệp)</p>
            <p>Thu nhập chịu thuế = Thu nhập gross - Bảo hiểm - Giảm trừ cá nhân 9 triệu - ( số người phụ thuộc * 3.6 triệu )</p>
            <p>Thuế thu nhập cá nhân = (Thu nhập chịu thuế * % theo khung chịu thuế)</p>
            <p>Thu nhập net = Tổng thu nhập - Bảo hiểm - Thuế thu nhập cá nhân</p>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>bậc</th>
                    <th>thu nhập chịu thuế/tháng</th>
                    <th>Phần trăm tính thuế</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1</td>
                    <td>nhỏ hơn hay bằng 5.000.000</td>
                    <td>5%</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>từ 5.000.000 đến 10.000.000</td>
                    <td>10%</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>trên 10.000.000 đến 18.000.000</td>
                    <td>15%</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>trên 18.000.000 đến 32.000.000</td>
                    <td>20%</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>trên 32.000.000 đến 52.000.000</td>
                    <td>25%</td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>trên 52.000.000 đến 80.000.000</td>
                    <td>30%</td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>trên 80.000.000</td>
                    <td>35%</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="row">
        <form name="hr" action="hrinsider.php" method="post">
            <div class="form-group">
                <label>Thu nhập gross</label>
                <input type="text" name="gross" class="form-control" value="">
            </div>
            <div class="form-group">
                <label>Bảo hiểm y tế %</label>
                <input type="text" name="medical" class="form-control" value="1.5">
            </div>
            <div class="form-group">
                <label>Bảo hiểm xã hội %</label>
                <input type="text" name="social" class="form-control" value="8">
            </div>
            <div class="form-group">
                <label>Bảo hiểm thất nghiệp %</label>
                <input type="text" name="work" class="form-control" value="1">
            </div>
            <p>Giảm trừ gia cảnh</p>
            <div class="form-group">
                <label>Giảm trừ cá nhân 9.000.000</label>
                <input type="text" name="personal" class="form-control" value="9000000">
            </div>
            <div class="form-group">
                <label>Giảm trừ người phụ thuộc</label>
                <input type="text" name="family" class="form-control" value="3600000">
            </div>
            <div class="form-group">
                <label>Số người phụ thuộc</label>
                <input type="text" name="quantity_family" class="form-control" value="0">
            </div>

            <button type="submit" class="btn btn-default">GROSS -> NET</button>
        </form>
    </div>

</div>
<div class="row">
<?php

    $gross = $_POST['gross'];
    $bhyt = (1.5/100)*$gross;
    $bhxh = (8/100)*$gross;
    $bhtn = (1/100)*$gross;
    $bh = ($bhyt+$bhxh+$bhtn);
    $ttct = $gross - $bh - 9000000 - ($_POST['quantity_family']*$_POST['family']);

    if($ttct <= 5000000){
        $ttncn = $ttct * (5/100);
    }
    else if (5000000<$ttct && $ttct<=10000000){
            $ttncn = $ttct * (10/100);
    }else if (5000000<$ttct && $ttct<10000000){
            $ttncn = $ttct * (10/100);
    }else if (10000000<$ttct && $ttct<=18000000){
            $ttncn = $ttct * (15/100);
    }else if (1800000<$ttct && $ttct<=32000000){
            $ttncn = $ttct * (20/100);
    }else if (32000000<$ttct && $ttct<=52000000){
            $ttncn = $ttct * (25/100);
    }else if (52000000<$ttct && $ttct<=80000000){
            $ttncn = $ttct * (30/100);
    }else{
            $ttncn = $ttct *(35/100);
        }

    $net = $gross - $bh - $ttncn;
?>

    <p id="net" style="color: #f7941d; margin: 30px; font-size: 24px">Lương net : <?php echo $net; ?></p>
    <p id="net" style="color: #f7941d; margin: 30px; font-size: 24px">BHYT : <?php echo $bhyt; ?></p>
    <p id="net" style="color: #f7941d; margin: 30px; font-size: 24px">BHXH : <?php echo $bhxh; ?></p>
    <p id="net" style="color: #f7941d; margin: 30px; font-size: 24px">BHTN : <?php echo $bhtn; ?></p>
    <p id="net" style="color: #f7941d; margin: 30px; font-size: 24px">Bảo hiểm : <?php echo $bh; ?></p>
    <p id="net" style="color: #f7941d; margin: 30px; font-size: 24px">Thuế thu nhập cá nhân : <?php echo $ttncn; ?></p>
    <div style="height: 200px"></div>
</div>
</body>
</html>