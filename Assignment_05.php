<!DOCTYPE html>
<head>
	<title>
		CALCULATOR
	</title>
</head>
<body>
	<h2>2x2 matrix calculator</h2>
	<form method="POST">
		<p>
			<label>
				First Number
			</label>
			<input type="number" name="firstNum" value="<?php echo $firstNum;?>"/>
		
			<label>
				Second Number
			</label>
			<input type="number" name="secondNum" value="<?php echo $secondNum;?>"/>
		
			<label>
				Total
			</label>
			<input name="total_1" value="<?php echo $total_1;?>"/></br>
		</p>
		<p>
			<label>
				Third Number
			</label>
			<input type="number" name="thirdNum" value="<?php echo $thirdNum;?>"/>
		
			<label>
				Fourth Number
			</label>
			<input type="number" name="fourthNum" value="<?php echo $fourthNum;?>"/>
		
			<label>
				Total
			</label>
			<input name="total_2" value="<?php echo $total_2;?>"/></br>
		</p>
		<p>
			<label>
				Fifth Number
			</label>
			<input type="number" name="fifthNum" value="<?php echo $fifthNum;?>"/>
		
			<label>
				Sixth Number
			</label>
			<input type="number" name="sixthNum" value="<?php echo $firstNum;?>"/>
		
			<label>
				Total
			</label>
			<input name="total_3" value="<?php echo $total_3;?>"/></br>
		</p>
		<p>
			<label>
				Seventh Number
			</label>
			<input type="number" name="seventhNum" value="<?php echo $seventhNum;?>"/>
		
			<label>
				Eighth Number
			</label>
			<input type="number" name="eighthNum" value="<?php echo $eightsNum;?>"/>
		
			<label>
				Total
			</label>
			<input name="total_4" value="<?php echo $total_4;?>"/></br>
		</p>
		<p>
			<input type="submit" name="operator" value="add">
			<input type="submit" name="operator" value="subtract">
			<input type="submit" name="operator" value="multiply">
		</p>
	</form>
</body>

<?php
	$total_1 = "";
    $total_2 = "";
    $total_3 = "";
    $total_4 = "";

    if(isset($_POST['operator'])){
		    $firstNum = $_POST['firstNum'];
		    $secondNum = $_POST['secondNum'];
		    $thirdNum = $_POST['thirdNum'];
		    $fourthNum = $_POST['fourthNum'];
		    $fifthNum = $_POST['fifthNum'];
		    $sixthNum = $_POST['sixthNum'];
		    $seventhNum = $_POST['seventhNum'];
		    $eighthNum = $_POST['eighthNum'];
		    $operator = $_POST['operator']; 

    if ($operator=="Add"){
	        $total_1 = $firstNum + $secondNum ;
	        $total_2 = $thirdNum + $fourthNum ;
	        $total_3 = $fifthNum + $sixthNum ;
	        $total_4 = $seventhNum + $eighthNum;
	        #echo $result;
        }
        
        else if ($operator=="Sub"){
	        $total_1 = $firstNum - $secondNum ;
	        $total_2 = $thirdNum - $fourthNum ;
	        $total_3 = $fifthNum - $sixthNum ;
	        $total_4 = $seventhNum - $eighthNum;
	        #echo $result;
        }
        
        else if ($operator=="Multi"){
            $total_1 = $firstNum * $secondNum ;
	        $total_2 = $thirdNum * $fourthNum ;
	        $total_3 = $fifthNum * $sixthNum ;
	        $total_4 = $seventhNum * $eighthNum;
            #echo $result;
        }
    }
?>