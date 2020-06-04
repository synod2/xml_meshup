<?php

include 'sbjtable2.php';
echo "&lt?xml version=\"1.0\" encoding=\"euc-kr\" ?>"."<br>";
echo "&ltroot>"."<br><br>";
$root = new SimpleXMLElement($xmlstr) or die("접속실패");

for($i=0;$i<1232;$i++)
{
	echo "&ltrecord>"."<br>";

	echo "&ltsbjEng>";
	echo $root->record[$i]->sbjtEngNm;
	echo "&lt/sbjEng>"."<br>";

	echo "&ltsbjKor>";
	echo $root->record[$i]->sbjtKorNm;
	echo "&lt/sbjKor>"."<br>";

	$tbl = str_replace("("," ",$root->record[$i]->tmTblDesc);
	$tbl = str_replace(")"," ",$tbl);
	#괄호 제거해서 공백으로 변경
	$tbl1=substr($tbl,0,3);
	$tbl2=substr($tbl,3);
	echo "&ltweek>";
        $tbl= $tbl1." ".$tbl2;
	while(strstr($tbl,",")!=false)
	{	$idx=strpos($tbl,",");
		$result=substr($tbl,$idx);
		$tbl=substr($tbl,0,$idx-1);
		$result1=substr($result,2,3);
		$result2=substr($result,5);
		$result= $result1." ".$result2;
		$tbl=$tbl." . ".$result;
	}
	echo $tbl;
	echo "&lt/week>"."<br>";

	#echo "&ltweek>";
	#echo substr($root->record[$i]->tmTblDesc,0,3);
	#echo "&lt/week>"."<br>";

	#echo "&lttime>";
	#echo str_replace("(","",substr($root->record[$i]->tmTblDesc,3,4));
	#echo "&lt/time>"."<br>";

	#echo "&ltroom>";
	#echo str_replace("(","",str_replace(")","",substr($root->record[$i]->tmTblDesc,7,5)));
	#echo "&lt/room>"."<br>";
	
	echo "&ltProf>";
	echo $root->record[$i]->respProfNm;
	echo "&lt/Prof>"."<br>";

	echo "&lt/record>"."<br><br>";
}
echo "&lt/root>"."<br>";
?>
