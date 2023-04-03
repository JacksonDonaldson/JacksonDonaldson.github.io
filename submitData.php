<?php
	if($_POST["pass"] == "Revivify"){
		$name = htmlspecialchars($_POST["user"]);
		if(strlen($name) > 12){
			$name = substr($name, 0, 10);
		}
		if($name == "reset"){
			file_put_contents("names.txt", "");
			file_put_contents("schedule.json","[[2,2,2,2,2,2,2],[2,2,2,2,2,2,2],[2,2,2,2,2,2,2],[2,2,2,2,2,2,2],[2,2,2,2,2,2,2],[2,2,2,2,2,2,2],[2,2,2,2,2,2,2],[2,2,2,2,2,2,2],[2,2,2,2,2,2,2],[2,2,2,2,2,2,2],[2,2,2,2,2,2,2],[2,2,2,2,2,2,2],[2,2,2,2,2,2,2]]");
			
		}
		else{
			$names = fopen("names.txt","a");
			
			if(filesize("names.txt") > 0){
				fwrite($names, ", ");
			}
			fwrite($names,htmlspecialchars($name));
			
			fclose($names);
			$values = $_POST["data"];
			$finalArray = "[";
			for($i = 0; $i < 13; $i++){
				$finalArray .= "[";
				for($j = 0; $j < 7; $j++){
					if($values[$i * 7 + $j] == "2"){
						$finalArray.= "2";
					}
					else{
						$finalArray.= "0";
					}
					if($j!=6){
						$finalArray.=",";
					}
				}
				$finalArray .= "]";
				if($i != 12){
					$finalArray.= ",";
				}
			}
			$finalArray .="]";
			file_put_contents("schedule.json",$finalArray);
		}
		
	}
	
	
	

?>