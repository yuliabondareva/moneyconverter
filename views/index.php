<?php 
require_once "../vendor/autoload.php";
require_once "../config/db.php";
require_once "../controllers/IndexController.php";
require_once "../models/AllCurrenciesModel.php";
require_once "header.php";

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

$log = new Logger('convert');
$log->pushHandler(new StreamHandler('../logs/info/log.log', Logger::INFO));
    if (isset($result)) $log->info('convert', array('time' => date('H:i:s d/m/Y'), 'res' => $result));
?>

<body>
    <div class="nav">
        <a href="settings.php">Settings</a>
        <a href="logs.php">Logs</a>
    </div>
    <h1>Money Converter</h1>
        <form class="form-bg form-horizontal col-md-4" method="POST" id="form">
            <div class="form-container">
                <div class="form-group row col-md-10">
                    <label class="col-md-4">From</label>
                    <div class="col-md-5">
                        <select name='sourceid' class="form-control">
                            <option value='USD' title='United State America Dollar' selected>USD</option>
                            <?php    
                             foreach ($all_currencies as $value) {
                            ?>
                            <option value = "<?php echo $value['currencies'];?>" title='<?php echo $value['currencies_name'];?>'>
                                <?php echo $value['currencies'];?></option>
                            <?php
                                }
                            ?>
                            <option value='CNY' title='Chinese Yuan'>CNY</option>
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
                            <option value='USD' title='United State America Dollar'>USD</option>
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