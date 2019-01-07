<?php 
require_once "../config/db.php";
require_once "../controllers/IndexController.php";
require_once "../models/AllCurrenciesModel.php";
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
        <a href="settings.php">Settings</a>
    </div>
    <h1>Money Converter</h1>
        <form class="form-bg form-horizontal col-md-4" method="POST" id="form">
            <div class="form-container">
                <div class="form-group row col-md-10">
                    <label class="col-md-4">From</label>
                    <div class="col-md-5">
                        <select name='sourceid' class="form-control form-input">
                            <option value='USD' title='United State America Dollar'>USD</option>
                        </select>
                    </div>
                </div>

                <div class="form-group row col-md-10">
                    <label class="col-md-4">To</label>
                    <div class="col-md-5">
                        <select name='currencies' class="form-control">
                            <option value='CNY' title='Chinese Yuan' selected>CNY</option>
                        <?php    
                             foreach ($all_currencies as $value) {
                        ?>
                            <option value = "<?php echo $value['currencies'];?>" title='<?php echo $value['currencies_name'];?>'>
                                <?php echo $value['currencies'];?></option>
                         <?php
                              }
                         ?>
                        </select>
                    </div>
                </div>

                <div class="form-group row col-md-12">
                        <div class="col-md-4">
                            <input type="text" class="form-control form-input" name="ammount" id="ammount" placeholder="Amount">
                        </div>
                        <div class="col-md-8">
                            <span id="result" class="form-control form-output"><?php echo $result; ?></span>
                        </div>
                </div>
                <div class="form-group row col-md-12">
                    <input type="submit" class="btn btn-primary col-md-12" name="submit" value="Convert" id="convert">
                </div>
            </div>
        </form> 
</body>
</html>