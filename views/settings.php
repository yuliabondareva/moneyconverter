<?php 
require_once "../config/db.php";
require_once "../controllers/IndexController.php";
require_once "../models/AllCurrenciesModel.php";
require_once "../models/HideCurrencies.php";
require_once "../models/ShowCurrencies.php";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Converter</title>
        <link rel="stylesheet" type="text/css" href="../public/css/style.css">
    <link rel="stylesheet" type="text/css" href="../vendor\twbs\bootstrap\dist\css\bootstrap.min.css">
    <script type="text/javascript" src="../public/js/jquery-3.0.0.min.js"></script>
    <script type="text/javascript" src="../public/js/script.js"></script>  

</head>
<body>
    <div class="nav">
        <a href="index.php">Main page</a>
    </div>
    
     <h3>Show currencies</h3>

        <div class="form-container">
        <table class="form-bg form-horizontal col-md-4">
            <tr>
                <th>Currencies code</th>
                <th>Currencies name</th>
                <th>Show/hide</th>
            </tr>
            <?php    
                foreach ($all_currence as $value) {
            ?>
            <tr id="new_currencie">    
                <td><?php echo $value['currencies'];?></td>
                <td><?php echo $value['currencies_name'];?></td>
                <td>
                    <form action="settings.php" method="post" id="form">
                        <input type="hidden" name="id" value="<?php echo $value['id'];?>" id="<?php echo $value['id'];?>">
                        <?php if($value['flag'] == "1") {?>
                        <input type="submit" class="btn btn-danger" name="hide" value="Hide">
                        <?php 
                            } 
                        ?>
                        <?php if($value['flag'] == "0") {?>
                        <input type="submit" class="btn btn-info" name="show" value="Show">
                        <?php 
                            } 
                        ?>
                    </form>
                </td>
            </tr>
            <?php    
                }
            ?>
        </table>
    </div>
</body>
</html>