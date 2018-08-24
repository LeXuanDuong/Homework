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
    <?php
        $array = array();
        $array[]=array('product_id'=>1,'product_name'=>'Luffy','product_price'=>'1500000000');
        $array[]=array('product_id'=>2,'product_name'=>'Zoro','product_price'=>'320000000');
        $array[]=array('product_id'=>3,'product_name'=>'Nami','product_price'=>'66000000');
        $array[]=array('product_id'=>4,'product_name'=>'Sanji','product_price'=>'330000000');
        $array[]=array('product_id'=>5,'product_name'=>'Usopp','product_price'=>'200000000');
        $array[]=array('product_id'=>6,'product_name'=>'Chopper','product_price'=>'100');
        $array[]=array('product_id'=>7,'product_name'=>'Robin','product_price'=>'130000000');
        $array[]=array('product_id'=>8,'product_name'=>'Franky','product_price'=>'94000000');
        $array[]=array('product_id'=>9,'product_name'=>'Brook','product_price'=>'83000000');
        $array[]=array('product_id'=>10,'product_name'=>'Jinbe','product_price'=>'400000000');
    ?>

    <table class="table-condensed">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Price</th>
            </tr>
        </thead>

        <tbody>
            <?php
                foreach ($array as $item){ ?>
                    <tr>
                        <td><?php echo $item['product_id']; ?></td>
                        <td><?php echo $item['product_name']; ?></td>
                        <td><?php echo $item['product_price']; ?></td>
                    </tr>
                <?php }
            ?>
        </tbody>
    </table>
</body>
</html>