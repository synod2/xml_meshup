<?php 
#header('Content-Type: text/html; charset=EUC-KR'); 

include 'sbjtable6.php';
$root = new SimpleXMLElement($xmlstr) or die("접속실패");

for($i=0;$i<1232;$i++)
{
	echo "강의 이름: ";
	$string=$root->record[$i]->sbjKor;
	$text=iconv("UTF-8","EUC-KR", $string);
        echo $text."<br>";

	echo "Subject Name : ";
	
	$string=$root->record[$i]->sbjEng;
	$text=iconv("UTF-8","EUC-KR", $string);	
        echo $text."<br>";


	$string=$root->record[$i]->week;
	$text=iconv("UTF-8","EUC-KR", $string);
	$string=explode(" ",$text);
	$k=0;
	$j=1;
	
	while($string[$k])
	{
	$week[$j]=$string[$k];
	$time[$j]=$string[$k+1];
	$room[$j]=$string[$k+2];
	
	echo "요일".$j." : ".$week[$j]."<br>";
	echo "시간".$j." : ".$time[$j]."<br>";
	echo "강의실".$j." : ".$room[$j]."<br>"; 
	$j=$j+1;
	$k=$k+4;
	}
	
	echo "교수님 : ";
	$string=$root->record[$i]->Prof;
        $text=iconv("UTF-8","EUC-KR", $string);
	echo $text."<br>";
	echo "<br>";
}
?>
