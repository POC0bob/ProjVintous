<? include"../../header.php"; 

$item = mysqli_real_escape_string($con,$_GET['item']); 
$theitem = "[REDACTED";
$i = mysqli_fetch_array($theitem);
$error = "";
$uzr = "[REDACTED";
if($_GET['buy'] && $_GET['confirm'] != ""){
		$token = $_GET['confirm'];
		if(Confirm::check($token)){
			$getmyitem = "[REDACTED";
			if(mysqli_num_rows($getmyitem) == 0){
	$price = mysqli_real_escape_string($con,$i['price']);
	$name = mysqli_real_escape_string($con,$i['Name']);
	$path = mysqli_real_escape_string($con,$i['path']);
				if($je['currency'] >= $i['price']){
					?>
						<script language="javascript">
						window.location.href = "http://projectvintous.com/character/";
						</script><?php
						$error = "Item bought! Click <a href='http://projectvintous.com/character/'>here</a> to goto your inventory";
				}
			}else{$error = "You already own this item.";}
		}else{$tok = $_SESSION['token']; $error = "Invalid confirmation number. $tok";}
 }else{  $key = $_SESSION['token']; echo $_SESSION['token'];	}
?><head>
	   <title><?php echo $i['Name']; ?> | Vintous</title>
	   </head>



    <style type="text/css">
.White-box {
	width:100%;
	background:white;
	height:auto;
	padding:15px;
	-moz-box-shadow:0px 1px 2px #ccc;-webkit-box-shadow:0px 1px 2px #ccc;box-shadow:0px 1px 2px #ccc;
}
.bar {
	width:100%;
	height:auto;
	padding:10px;
	color:white;
	-moz-box-shadow:0px 1px 2px #ccc;-webkit-box-shadow:0px 1px 2px #ccc;box-shadow:0px 1px 2px #ccc;
	background-color:<?php if($je['Col2'] != ""){ echo $je['Col2']; }else{ echo("#2DA4CC"); } ?>;
}
.box-shop {
	width:100%;
	border:1px solid #efefef;
	padding:10px;
	height:auto;
	
}
.hidden-stat {
	width:100%;
	text-align:center;
	height:auto;
	padding-top:5px;
	font-size:20px;
	}
	.post-thread-button {

	width:auto;

	padding:12px;

	color:white;

	background-color:rgb(45, 164, 204);

	float:right;

	text-align:center;

	outline:none;

}
.buy-item-button {

	width:auto;

	padding:12px;

	color:white;

	background-color:<?php if($je['Col2'] != ""){ echo $je['Col2']; }else{ echo("#2DA4CC"); } ?>;

	float:right;

	text-align:center;

	outline:none;
	
	border:none;
	
	font-size:16px;

}
.buy-item-button:hover {

		-moz-transition: all 0.3s ease 0s;



-ms-transition: all 0.3s ease 0s;



-o-transition: all 0.3s ease 0s;



transition: all 0.3s ease 0s;

	color:#efefef;

	cursor:pointer;

}
</style>

<div class="wholething">
<div style="float:left;width:48%;">
<div class="bar">
<?php echo $i['Name']; ?>
</div>
<div class="White-box">
<center><?php if($error != ""){ echo("<h2>$error</h2>"); }
	  if($i['accepted'] == 0){ ?>
    <img src="../../images/ImageAwaitingApproval.png" height="150" width="150"></img>
    <?php }else{ ?>
    <img src="../../images/ShopIMG/<?php echo($i['path']); if($i['anim'] == 1){ echo(".gif"); }else{?>.jpg<?php } ?>" height="175" width="175"></img>
    <?php } ?></center>
</div>
</div>

<div style="float:right;width:48%;">
<div class="White-box">
<table>
<td width="10%" style="vertical-align:top;">
<Center><img src="http://projectvintous.com/images/ShopIMG/1f9230455c0501b1bd60ebf041f7ff63.jpg" width="115"></img>
<br>
<strong><?echo($uzr['Username']); ?></strong></center>
</td>
<td width="100%">
<?php 
$buy = $_GET['buy'];
$tuke = $_GET['confirm'];

if((string)$buy != "true"){ ?>
 <a href="?buy=true&confirm=<?php if($tuke == "" && !$_GET['buy']){ $_SESSION['token'] = md5(base64_encode(openssl_random_pseudo_bytes(32))); echo($_SESSION['token']);} ?>"><input type="submit" value="Purchase for <?php echo $i['price']; ?>" name="buyItem" id="buyItem" class="buy-item-button"></input></a> <?php } ?>
<div style="height:50px;"></div>
<div class="box-shop" style="width:100%; word-wrap: break-word; word-break: break-word; hyphens: auto;">
<strong>Description</strong>
<hr>
<?php echo $i['Description']; ?></div>
<div class="hidden-stat">
<strong><? echo($yesitem['numbersold']) ?></strong> Sales
</div>

</td>
</table>
</div>
</div>

</div>
