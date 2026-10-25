<?php

if(isset($_POST['submit'])){
	$time = $_POST['time'];
	$coupan = $_POST['coupan'];
	$coupanVolume = $_POST['coupanVolume'];
	$file = fopen("data.txt","w");
	$msg = 'time ## '.$time.PHP_EOL.'coupan ## '.$coupan.PHP_EOL.'coupanVolume ## '.$coupanVolume;
	 fwrite($file,$msg);
	fclose($file);
}

$fh = fopen('data.txt','r');
$time = '';
$coupan = '';
$coupanVolume = '';
while ($line = fgets($fh)) {
   $line = explode('##',$line);
   $key = trim($line[0]);
   $value = trim($line[1]);
   if($key == 'time'){$time = $value; }
   if($key == 'coupan'){$coupan = $value; }
   if($key == 'coupanVolume'){$coupanVolume = $value; }
}
fclose($fh);

?>


<form method="POST" action="">
<div class="container">
<div class="border col-md-6 col-md-offset-3 margin-bottom5">
<div class="row">
	<div class="col-md-6 col-md-offset-3">
    Time : <input type="text" name="time" value="<?php echo $time; ?>" class="form-control" placeholder="enter time" required="required" /><br />
   <br>
	Coupan : <input type="text" name="coupan" value="<?php echo $coupan; ?>" class="form-control" placeholder="enter Coupan" required="required" /><br />
   <br>
	Coupan Volume : <input type="text" name="coupanVolume" value="<?php echo $coupanVolume; ?>" class="form-control" placeholder="enter Coupan" required="required" /><br />
   
	</div>
    
    <div class="col-md-6 col-md-offset-3">
    <input type="submit" name="submit" value="sumit" class="btn btn-success btn-block" />
    </div>
    
</div>
</div>
</div>
</form>