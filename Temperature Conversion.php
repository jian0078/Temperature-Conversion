

<!DOCTYPE html>
<html>
	<head>
		<title>Week9Lab_Task2_YiJiang.php</title>
		<meta charset="utf-8">
	</head>
	
	<body>
            <h2 style="color:purple">Temperature conversion</h2>
<form action="" method="post" >
  <fieldset style="background-color:pink; width:600px">
		<table>
        <tr>
        	  <td>Temperature:</td>
           	<td><input type="text" name="temperatureConversion" id="temperatureConversion" size=6></td>   
        </tr>

				<tr>
   				<td>Conversion options: </td>
   				<td>    
   				   	    <input type="radio" name="unit" value="fToc" > 
   				   	    Fahrenheit to celsius
   				   	    <input type="radio" name="unit" value="cTof" > 
   				   	    Celsius to Fahrenheit
   				</td>	 
				</tr>
        
        <tr>
	  		<td><input type="submit" name="submit" value="Submit" ></td>
  	  	</tr>
  	  	
  	  	<tr></tr>
  	  	<tr></tr>
  	  	<tr></tr>
		
		</table>
  </fieldset>
		</form>
	</body>
</html>

<?php

if (isset($_POST['submit'])) {
    $temperature = $_POST['temperatureConversion'];
    $error1 = false;
    $error2 = false;
    if (is_numeric($temperature)){  
    	    	
    }else{
      echo "Please enter a number for temperature.";
      $error1 = true;
    }
        
   if(isset($_POST['unit'])){          
      $unit = $_POST['unit'];   //checked
   }else{                          //unchecked
        $error2 = true;
        if ($error1 == false){
          	echo " Please select a conversion option.";
        }else{
           	echo " And aslo select a conversion option.";
       	}

   	}
   echo"<br>";
   if ($error1==false && $error2==false){
   	 if ($unit=="fToc"){
   	 	 echo "<h3 >The original temperature is " .$temperature. "F, and converted to " .conversion($temperature,$unit)."C</h3>";
   	 	}else{
   	 	 echo "<h3 >The original temperature is " .$temperature. "C, and converted to " .conversion($temperature,$unit)."F</h3>";
   	 		} 
   	  
   	}	
} 	 

function conversion($temperatureConverted,$unitConverted){
  if ($unitConverted=="fToc"){
  	$temperatureConverted=($temperatureConverted - 32)*5/9;
  	return $temperatureConverted;
  	}

  if ($unitConverted=="cTof"){
  	$temperatureConverted=32+$temperatureConverted*9/5;
  	return $temperatureConverted;
  	}
}

?>
