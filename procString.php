<?php

function swap (&$arr, $e1, $e2)
{
    $temp = $arr[$e1];
    $arr[$e1] = $arr[$e2];
    $arr[$e2] = $temp;
}

if(isset($_GET['st'])){
	$st=$_GET['st'];
	
	$stArr=array();
	$count=0;
	$temp= "";
	for ($length = 0; isset($st[$length]); $length++){
		if($st[$length]==" "){
			$stArr[$count++]=$temp;
			$temp="";
			continue;
		}
		$temp.=$st[$length];
		//
//		echo $st[$length];
//		echo $st[$length];
	}
	$stArr[$count]=$temp;
	//var_dump($stArr);
	
	$temp2=array();
	
	/*$temp4="Irfan";
	$temp5="Wadia";
	if($temp4<$temp5)
		echo "true";
	else
		echo "false";*/
	$len1=0;
	$len2=0;
	$c1=0;
	$c2=0;
	
	for($count1=1; isset($stArr[$count1]); $count1++){
		$len1=0;
		$c1=0;
		while(isset($stArr[$count1][$c1++])){
				$len1++;
		}
		for($count2=0;$count2<=$count1;$count2++){			
			$len2=0;			
			$c2=0;
			while(isset($stArr[$count2][$c2++])){
				$len2++;
			}
			if($len1==$len2){
				$val1=$stArr[$count1];
				$val2=$stArr[$count2];
				if($val1<$val2){
					swap($stArr,$count1,$count2);
					$len1=$len2;
				}
			}
			else if($len1<$len2){
				swap($stArr,$count1,$count2);
				$len1=$len2;
			}
		}
	}
	//print_r($stArr);
	$finalString="";
	foreach($stArr as $key=>$value){
		$finalString.=" ".$value;
	}
	echo $finalString;
}
else{
	echo "fail";
}


?>