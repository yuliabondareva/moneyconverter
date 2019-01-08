<?php 

require_once "header.php";
require_once "../models/AllCurrenciesModel.php";
require_once "../models/HideCurrencies.php";
require_once "../models/ShowCurrencies.php";
require_once "../controllers/LogsController.php";
?>

<body>
    <div class="nav">
        <a href="index.php">Main page</a>
        <a href="logs.php">Logs</a>
    </div>
    
    <h3>Show/hide currencies</h3>

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
                        <input type="submit" class="btn btn-danger" name="hide" value="Hide" id="hide">
                        <?php 
                            } 
                        ?>
                        <?php if($value['flag'] == "0") {?>
                        <input type="submit" class="btn btn-danger" name="show" value="Show" id="show">
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

    <h3>Set cout of logs</h3>
        <form class="form-bg form-horizontal col-md-2" method="POST" id="logs">
            <div class="form-container">
                <div class="form-group">
                    <input type="text" class="form-control form-input" name="count-logs" id="count-logs" placeholder="Count logs">
                </div> 
                <div class="form-group">
                    <input type="submit" class="btn btn-primary col-md-12" name="logs" value="Save" id="logs">
                </div>        
            </div>
        </form>
</body>
</html>