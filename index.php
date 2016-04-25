<?php
	use google\appengine\api\users\User;
	use google\appengine\api\users\UserService;
?>

<?php
function GoogleAuthentication()
{
$userDetails = UserService::getCurrentUser(); 
	if (isset($userDetails)) {
		echo sprintf('<div class="Details BlackText">Welcome, %s! (<a href="%s">sign out</a>)</div>',
				   $userDetails->getNickname(),UserService::createLogoutUrl('/'));
	} else {
		echo sprintf('<a href="%s">Sign in </a>',UserService::createLoginUrl('/'));
	}
}

?>


<html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="Author" content="Sreekhar Ale">
  <meta name="Description" content="String search project, Database">
  <title>BLOOD ALCOHOL CONTENT CALCULATOR</title>
  
<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
<script src='https://www.google.com/recaptcha/api.js'></script>

<style>
#main{
    background-color: lightgrey;
    width: 700px;
	height: 250px;
    padding: 25px;
    border: 10px solid black ;
    margin: 25px;
}
h1 {
    font:  bold 12px/30px Georgia, serif;
    color: brown;
    font-size: 30px;
}
button {
  color: #900;
  font-weight: bold;
  font-size: 100%;
  text-transform: uppercase;
}
body{

}
</style>

 </head>

<body>
	<?php echo GoogleAuthentication(); ?>

	<center>
<h1> BLOOD ALCOHOL CONTENT CALCULATOR </h1>

	<form id="form" name="calcForm" id="calcForm" method="post" action="">

	<div id="main">

	<table width="620" border="0" align="center" style="font-weight: normal;">
	  <tr>
		<td width="323">
	<b>NUMBER OF DRINKS HAD</b>
		<table width="76%" border="0" align="right">
		  <tr>
		  <td><img src="http://bloodalcoholcalculator.org/wp-content/themes/genesis/images/beericon.png" alt="" border="0" /></td>
			<td width="75%"><select name="drink1" id="drink1" style="border: none; position: static; padding: 5px; width: 238px; height: 32px; background-color: #e9eaee; border: #000 solid 2px;" >
			  <option value="beer" selected="selected">Beer</option>
			  <option value="tequila">Tequila</option>
			  <option value="rum">Rum</option>
			  <option value="vodka">Vodka</option>
			  <option value="whiskey">Whiskey</option>
			  <option value="margarita">Margarita</option>
			  <option value="wine">Wine</option>
			</select></td>
			<td width="25%"><input id="one" type="text" style="position: static; width: 35px; height: 32px; padding: 4px; border: #000 solid 2px; background: #e9eaee;" class="calcTextInput" name="one" value="0" /></td>
		  </tr>
		</table>
	</td>
	   <td valign="middle"><div style="float: left"><b>WEIGHT IN POUNDS</b>
	<input id="weight" type="text"  style="border: none; position: static; padding: 10px; width: 60px; height: 30px; background-color: #e9eaee; border: #000 solid 2px;"  class="calcTextInput" name="weight" id="weight" value="" />
	</div>
	  <tr>
		<td>
		<table width="65%" border="0" align="right">
		  <tr>
		  <td><img src="http://bloodalcoholcalculator.org/wp-content/themes/genesis/images/wine_icon.png" alt="" border="0" /></td>
			<td width="76%"><select name="drink2" id="drink2" class="calcTextInput" style="position: static; padding: 5px; width: 238px; height: 32px; background-color: #e9eaee; border: #000 solid 2px;" >
								  <option value="beer">Beer</option>
								<option value="tequila">Tequila</option>
								  <option value="rum">Rum</option>
								  <option value="vodka" selected="selected">Vodka</option>
								  <option value="whiskey">Whiskey</option>
								  <option value="margarita">Margarita</option>
								  <option value="wine">Wine</option>
								</select></td>
			<td width="18%"><input id="two" type="text" style="position: static; width: 35px; height: 32px; padding: 4px; border: #000 solid 2px; background: #e9eaee;" class="calcTextInput" name="two" value="0" /></td>
		  </tr>
		</table></td>
		&nbsp
		<td width="65%" valign="middle">
	<div style="float: left;"><b>GENDER</b>
	&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
	<select name="sex" id="sex" class="calcTextInput" style="border: none; position: static; padding: 4px; width: 85px; height: 32px; background-color: #e9eaee; border: #000 solid 2px;" >
	<option value="male">Male</option>
	<option value="female">Female</option>
	</select></div>
	</td>
	  </tr>
	  <tr>
		<td>
		<table width="81%" border="0" align="right">
		  <tr>
		  <td><img src="http://bloodalcoholcalculator.org/wp-content/themes/genesis/images/gin.png" alt="" border="0" /></td>
			<td width="75%"><select name="drink3" id="drink3" class="calcTextInput"  style="border: none; position: static; padding: 5px; width: 238px; height: 32px; background-color: #e9eaee; border: #000 solid 2px;" >
							<option value="beer">Beer</option>
							  <option value="tequila">Tequila</option>
							  <option value="rum">Rum</option>
							  <option value="vodka">Vodka</option>
							  <option value="whiskey">Whiskey</option>
							  <option value="margarita">Margarita</option>
							  <option value="wine" selected="selected">Wine</option>
								</select></td>
			<td width="25%"><input id="three" type="text" style="position: static; width: 35px; height: 32px; padding: 4px; border: #000 solid 2px; background: #e9eaee;" class="calcTextInput" name="three" value="0" /></td>
		  </tr>
		</table></td>
		<td>
		<table width="100%" border="0">
		  <tr>
			
			 <td width="40%"><b>DRINKING TIME</b></td>
			 
			<td width="60%">
			<table border="0">
			  <tr>
				   <td><input id="dt" name="dt" type="text" style="position: static; width: 50px; height: 32px; padding: 4px; margin-right: 5px; border: #000 solid 2px; background: #e9eaee;" class="calcTextInput" name="time"  value="" />
							</td>
				<td><select name="multiplier" id="hm" name="hm" class="calcTextInput" style="border: none; position: static; width: 100px; height: 32px; padding: 4px; border: #000 solid 2px; background: #e9eaee;">
									<option value="Minutes">Minutes</option>
									<option value="Hours" selected="selected">Hours</option>
								</select></td>
			  </tr>
			</table>
		</td>
		  </tr>
		</table>
		</td>
	  </tr>
	 
	</table>
	<br>
	<br>
	
	<div class="g-recaptcha" data-sitekey="6LeSORsTAAAAAE0-bhFBd0jFD83HT1pCnK_viOSG"></div>
	<input type="submit" name="submit" id="buttonnew" value='CALCULATE MY BAC PERCENTAGE'></input>

	</div>
	
</form>
</center>

 <?php
 if(isset($_POST['submit']) and $_POST['submit'] == "CALCULATE MY BAC PERCENTAGE")
	 
 {

	if (isset($_POST['g-recaptcha-response']) && $_POST['g-recaptcha-response']) {
	$secret = "6LeSORsTAAAAAOFa0MCCKtKV4KWkM-Dc_ZWVstBO";
	$ip = $_SERVER['REMOTE_ADDR'];
	$captcha = $_POST['g-recaptcha-response'];
	$rsp = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$captcha&remoteip=$ip");
	//var_dump($rsp);
	
	$arr = json_decode($rsp,TRUE);
	if($arr['success']) {
		
		$one=$_POST['one'];
		$two=$_POST['two'];
		$result = "";
		$three=$_POST['three'];
		// $hm=$_POST['hm'];
		$hm="Hours";
		$dt=$_POST['dt'];
		$weight=$_POST['weight'];
		$drink1=$_POST['drink1'];
		$drink2=$_POST['drink2'];
		$drink3=$_POST['drink3'];
		$sex=$_POST['sex'];

		$memcache = new Memcache;
		$key = htmlspecialchars($weight);
		$cachedVal = $memcache->get($key);



		$temp=0.0;
		$d=array($drink1,$drink2,$drink3);
		$drinkslength=count($d);
		$q=array($one,$two,$three);
		
		if($cachedVal)
		{
				
				echo $cachedVal;
				
		}
		else {
			
			for($i = 0; $i < $drinkslength; $i++){
				switch ($d[$i])
			{
				 case "beer":
					 $percent=0.4;
					 break;
				 case "margarita":
					 $percent=0.65;
					 break;
				case "rum":
					 $percent=0.65;
					 break;
				 case "tequila":
					 $percent=0.72;
					 break;
				 case "vodka":
					 $percent=0.65;
					 break;
				 case "whiskey":
					$percent=0.65;
					 break;
				case "wine":
					 $percent=0.6;
					 break;
				 default:
					 $percent=0;
					 break;
				 }
				 $temp = $temp + ($percent*$q[$i]);
				
				 }
			 if($sex==("Male")){
					 $cons=0.73;
				 }
				 else {
					 $cons=0.66;
				 }
				 if($hm==("Hours")){
					 $time=$dt;
				 }
				 else{
					 $time=$dt/60;
				 }
				 if($weight!=0){
				 $ans=(($temp*5.14)/($weight*$cons))-(0.015*$time);
				 if($ans<=0.08){
					 $result = "You are safe... You can drive";
				}
				 else if($ans>=0.08&&$ans<=0.20){
					 $result="Be careful! Don't take a chance!!";
				}
				 else{
					 $result="Over the limit!!! Don't Drive!!!";
				 }
				 }
				
				 else{
				 $result="Weight cannot be zero!";
				 }
				 
				 $memcache->set($key,$result);
				 echo $result;
		}
		
			}
			
		}
	 else{
		echo "Captcha entered wrong";
	 }
	}

 ?>

</body>
</html>