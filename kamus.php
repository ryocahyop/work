<?php
$inp=$_POST['inp'];
$len_input=strlen($inp);
$len_word=array();
$match=array();
$idx=0;
$file="katadasar1.txt";
$fh=fopen($file,'r');
$str=fread($fh, filesize($file));
fclose($fh);
$word=explode(" ",$str);
for($i=0;$i<count($word);$i++){
	$len_word[$i]=strlen($word[$i]);
	
	for($j=0;$j<strlen($inp);$j++){
		$match[$i]=similar_text($word[$i],$inp[$j]);
		$idx=$idx+$match[$i];
	}
	if($len_input==3){
		if($len_word[$i]==3 && $idx==3){
			echo $word[$i];echo"-";
		}
	}else if($len_input==4){
		if(($len_word[$i]==4 && $idx==4) || ($len_word[$i]==3 && $idx==3)){
			echo $word[$i];echo"-";
		}
	}else if($len_input==5){
		if(($len_word[$i]==5 && $idx==5) || ($len_word[$i]==3 && $idx==3) || ($len_word[$i]==4 && $idx==4)){
			echo $word[$i];echo"-";
		}
	}else if($len_input==6){
		if(($len_word[$i]==4 && $idx==4) || ($len_word[$i]==3 && $idx==3) || ($len_word[$i]==5 && $idx==5) || ($len_word[$i]==6 && $idx==6)){
			echo $word[$i];echo"-";
		}
	}else if($len_input==7){
		if(($len_word[$i]==4 && $idx==4) || ($len_word[$i]==3 && $idx==3) || ($len_word[$i]==5 && $idx==5) || ($len_word[$i]==6 && $idx==6)|| ($len_word[$i]==7 && $idx==7)){
			echo $word[$i];echo"-";
		}
	}else if($len_input==8){
		if(($len_word[$i]==4 && $idx==4) || ($len_word[$i]==3 && $idx==3) || ($len_word[$i]==5 && $idx==5) || ($len_word[$i]==6 && $idx==6)|| ($len_word[$i]==7 && $idx==7)|| ($len_word[$i]==8 && $idx==8)){
			echo $word[$i];echo"-";
		}
	}else if($len_input==9){
		if(($len_word[$i]==4 && $idx==4) || ($len_word[$i]==3 && $idx==3) || ($len_word[$i]==5 && $idx==5) || ($len_word[$i]==6 && $idx==6)|| ($len_word[$i]==7 && $idx==7)|| ($len_word[$i]==8 && $idx==8)|| ($len_word[$i]==9 && $idx==9)){
			echo $word[$i];echo"-";
		}
	}else if($len_input==10){
		if(($len_word[$i]==4 && $idx==4) || ($len_word[$i]==3 && $idx==3) || ($len_word[$i]==5 && $idx==5) || ($len_word[$i]==6 && $idx==6)|| ($len_word[$i]==7 && $idx==7)|| ($len_word[$i]==8 && $idx==8)|| ($len_word[$i]==9 && $idx==9)|| ($len_word[$i]==10 && $idx==10)){
			echo $word[$i];echo"-";
		}
	}else if($len_input==11){
		if(($len_word[$i]==4 && $idx==4) || ($len_word[$i]==3 && $idx==3) || ($len_word[$i]==5 && $idx==5) || ($len_word[$i]==6 && $idx==6)|| ($len_word[$i]==7 && $idx==7)|| ($len_word[$i]==8 && $idx==8)|| ($len_word[$i]==9 && $idx==9)|| ($len_word[$i]==10 && $idx==10)|| ($len_word[$i]==11 && $idx==11)){
			echo $word[$i];echo"-";
		}
	}else if($len_input==12){
		if(($len_word[$i]==4 && $idx==4) || ($len_word[$i]==3 && $idx==3) || ($len_word[$i]==5 && $idx==5) || ($len_word[$i]==6 && $idx==6)|| ($len_word[$i]==7 && $idx==7)|| ($len_word[$i]==8 && $idx==8)|| ($len_word[$i]==9 && $idx==9)|| ($len_word[$i]==10 && $idx==10)|| ($len_word[$i]==11 && $idx==11)|| ($len_word[$i]==12 && $idx==12)){
			echo $word[$i];echo"-";
		}
	}else if($len_input==13){
		if(($len_word[$i]==4 && $idx==4) || ($len_word[$i]==3 && $idx==3) || ($len_word[$i]==5 && $idx==5) || ($len_word[$i]==6 && $idx==6)|| ($len_word[$i]==7 && $idx==7)|| ($len_word[$i]==8 && $idx==8)|| ($len_word[$i]==9 && $idx==9)|| ($len_word[$i]==10 && $idx==10)|| ($len_word[$i]==11 && $idx==11)|| ($len_word[$i]==12 && $idx==12)|| ($len_word[$i]==13 && $idx==13)){
			echo $word[$i];echo"-";
		}
	}

	$idx=0;
}
?>
