<?php 
#header('Content-Type: text/html; charset=EUC-KR'); 

include '../sbjtable6.php';
$root = new SimpleXMLElement($xmlstr) or die("접속실패");
$weekd=date("D");
$timed=date("H",time());
switch($weekd)
{
	case "Mon" : $weekd="월";
		break;
	case "The" : $weekd="화";
                break;
	case "Wed" : $weekd="수";
                break;
	case "Thu" : $weekd="목";
                break;
	case "Fri" : $weekd="금";
                break;
	case "Sat" : $weekd="토";
                break;
	case "Sun" : $weekd="일";
                break;
}
for($t=9,$l=1;$l!=12;$t++,$l++)
{
	if($timed==$t)
		$timed="$l";
}
echo "현재시각 : ".$weekd."요일 ".$timed."교시"."<br>";
echo "국제관"."<br>";
//현재시간 구하기
$nosbj=1;

echo "현재 수업중인 강의실 <br>";
for($i=0;$i<1232;$i++)
{
	$string=$root->record[$i]->sbjKor;
	$sbj=iconv("UTF-8","EUC-KR", $string);
	
	$string=$root->record[$i]->sbjEng;
	$sbje=iconv("UTF-8","EUC-KR", $string);	


	$string=$root->record[$i]->week;
	$text=iconv("UTF-8","EUC-KR", $string);
	$string=explode(" ",$text);
	$k=0;
	$j=1;
	$enable=0;
	while($string[$k])
	{
		$week[$j]=$string[$k];
		$time[$j]=$string[$k+1];
		$room[$j]=$string[$k+2];
		
		if(strlen($time[$j])>=5)
                {
                        $endt=substr($time[$j],0,2);
                }
                else
                {
                $startt=substr($time[$j],0,1);
                }

		$timed=(int)$timed;	
		$startt=(int)$startt;
		if(strlen($time[$j])>=4)
		{
			$endt=substr($time[$j],-2);
		}
		else	
		{
			$endt=substr($time[$j],-1);
		}
		//강의 시작시간,끝시간 구함	
		if(($timed<$endt)&&($timed>=$startt)&&(strstr($room[$j],"IH")!=false)&&($weekd==$week[$j]))
		{ 	
			echo $room[$j]."<br>"; 
			$enable=1;
			$nosbj=0;
		}
		$j=$j+1;	
		$k=$k+4;
	}
	
	if($enable==1)
	{
		echo "<br>";
	}
}
	if($nosbj==1)
	{
		echo "현재 수업중인 강의가 없습니다 ^오^";
	}
?>
