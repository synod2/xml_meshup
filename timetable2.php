<?php 
#header('Content-Type: text/html; charset=EUC-KR'); 

include 'sbjtable6.php';
$root = new SimpleXMLElement($xmlstr) or die("���ӽ���");

for($i=0;$i<1232;$i++)
{
	echo "���� �̸�: ";
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
	
	echo "����".$j." : ".$week[$j]."<br>";
	echo "�ð�".$j." : ".$time[$j]."<br>";
	echo "���ǽ�".$j." : ".$room[$j]."<br>"; 
	$j=$j+1;
	$k=$k+4;
	}
	
	echo "������ : ";
	$string=$root->record[$i]->Prof;
        $text=iconv("UTF-8","EUC-KR", $string);
	echo $text."<br>";
	echo "<br>";
}
?>
