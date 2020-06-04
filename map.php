<html>
<head>
	<meta charset="EUC-KR"/>
	<title>강의 건물 찾기</title>
</head>
<body>
<div id="map" style="width:1248px;height:900px;"></div>

<script type="text/javascript" src="APIKEY"></script>

<script>
var container = document.getElementById('map'); //지도를 담을 영역의 DOM 레퍼런스
var options =
{ //지도를 생성할 때 필요한 기본 옵션
	center: new daum.maps.LatLng(37.4858149,126.8021903), //지도의 중심좌표.
	level: 1 //지도의 레벨(확대, 축소 정도)
};

var map = new daum.maps.Map(container, options); //지도 생성 및 객체 리턴

//---------------------------*지도끝*------------------------------

//------------------------*다솔관 시작 * ------------------------
var imageSrc = "img/d.png", // 마커이미지의 주소입니다    
    imageSize = new daum.maps.Size(160, 90), // 마커이미지의 크기입니다
    imageOprion = {offset: new daum.maps.Point(80,45)}; // 마커이미지의 옵션입니다. 마커의 좌표와 일치시킬 이미지 안에서의 좌표를 설정합니다.

// 마커의 이미지정보를 가지고 있는 마커이미지를 생성합니다
var markerImage = new daum.maps.MarkerImage(imageSrc, imageSize, imageOprion),
    markerPosition = new daum.maps.LatLng(37.48556967947927,126.80125734439885); // 다솔관
// 마커를 생성합니다
var markerd = new daum.maps.Marker({
        position: markerPosition,
        image: markerImage, // 마커이미지 설정 
        clickable : true
});

// 마커가 지도 위에 표시되도록 설정합니다
markerd.setMap(map);


// 커스텀 오버레이가 표시될 위치입니다 

var iwContentd = '<iframe src="page/d.php" width=300 height=200 frameborder=1></iframe>', // 인포윈도우에 표출될 내용으로 HTML 문자열이나 document element가 가능>
합니다


    iwRemoveable = true; // removeable 속성을 ture 로 설정하면 인포윈도우를 닫을 수 있는 x버튼이 표시됩니다

// 인포윈도우를 생성합니다
var infowindowd = new daum.maps.InfoWindow({
    content : iwContentd,
    removable : iwRemoveable
});

// 마커에 클릭이벤트를 등록합니다
daum.maps.event.addListener(markerd, 'click', function() {
      // 마커 위에 인포윈도우를 표시합니다
      infowindowd.open(map, markerd);  
});
//------------------------*다솔관 끝 * ------------------------

//------------------------*기슨관 시작 * ------------------------
var imageSrc = "img/g.png", // 마커이미지의 주소입니다    
    imageSize = new daum.maps.Size(160, 90), // 마커이미지의 크기입니다
    imageOprion = {offset: new daum.maps.Point(80,45)}; // 마커이미지의 옵션입니다. 마커의 좌표와 일치시킬 이미지 안에서의 좌표를 설정합니다.

// 마커의 이미지정보를 가지고 있는 마커이미지를 생성합니다
var markerImage = new daum.maps.MarkerImage(imageSrc, imageSize, imageOprion),
    markerPosition = new daum.maps.LatLng(37.48594,126.8028962505779); // 기슨관
// 마커를 생성합니다
var markerg = new daum.maps.Marker({
        position: markerPosition,
        image: markerImage, // 마커이미지 설정 
        clickable : true
});

// 마커가 지도 위에 표시되도록 설정합니다
markerg.setMap(map);


// 커스텀 오버레이가 표시될 위치입니다 

var iwContentg = '<iframe src="page/g.php" width=300 height=200 frameborder=1></iframe>', // 인포윈도우에 표출될 내용으로 HTML 문자열이나 document element가 가능>
합니다


    iwRemoveable = true; // removeable 속성을 ture 로 설정하면 인포윈도우를 닫을 수 있는 x버튼이 표시됩니다

// 인포윈도우를 생성합니다
var infowindowg = new daum.maps.InfoWindow({
    content : iwContentg,
    removable : iwRemoveable
});

// 마커에 클릭이벤트를 등록합니다
daum.maps.event.addListener(markerg, 'click', function() {
      // 마커 위에 인포윈도우를 표시합니다
      infowindowg.open(map, markerg);  
});
//------------------------*기슨관 끝 * ------------------------

//------------------------*니콜스 시작 * ------------------------
var imageSrc = "img/n.png", // 마커이미지의 주소입니다    
    imageSize = new daum.maps.Size(160, 90), // 마커이미지의 크기입니다
    imageOprion = {offset: new daum.maps.Point(80,45)}; // 마커이미지의 옵션입니다. 마커의 좌표와 일치시킬 이미지 안에서의 좌표를 설정합니다.

// 마커의 이미지정보를 가지고 있는 마커이미지를 생성합니다
var markerImage = new daum.maps.MarkerImage(imageSrc, imageSize, imageOprion),
    markerPosition = new daum.maps.LatLng(37.48593,126.80239876390); // 니콜스
// 마커를 생성합니다
var markern = new daum.maps.Marker({
        position: markerPosition,
        image: markerImage, // 마커이미지 설정 
        clickable : true
});

// 마커가 지도 위에 표시되도록 설정합니다
markern.setMap(map);


// 커스텀 오버레이가 표시될 위치입니다 

var iwContentn = '<iframe src="page/n.php" width=300 height=200 frameborder=1></iframe>', // 인포윈도우에 표출될 내용으로 HTML 문자열이나 document element가 가능>
합니다


    iwRemoveable = true; // removeable 속성을 ture 로 설정하면 인포윈도우를 닫을 수 있는 x버튼이 표시됩니다

// 인포윈도우를 생성합니다
var infowindown = new daum.maps.InfoWindow({
    content : iwContentn,
    removable : iwRemoveable
});

// 마커에 클릭이벤트를 등록합니다
daum.maps.event.addListener(markern, 'click', function() {
      // 마커 위에 인포윈도우를 표시합니다
      infowindown.open(map, markern);  
});
//------------------------*니콜스 끝 * ------------------------

//------------------------*마리아관 시작 * ------------------------
var imageSrc = "img/m.png", // 마커이미지의 주소입니다    
    imageSize = new daum.maps.Size(160, 90), // 마커이미지의 크기입니다
    imageOprion = {offset: new daum.maps.Point(80,45)}; // 마커이미지의 옵션입니다. 마커의 좌표와 일치시킬 이미지 안에서의 좌표를 설정합니다.

// 마커의 이미지정보를 가지고 있는 마커이미지를 생성합니다
var markerImage = new daum.maps.MarkerImage(imageSrc, imageSize, imageOprion),
    markerPosition = new daum.maps.LatLng(37.48638,126.8029); // 마리아관
// 마커를 생성합니다
var markerm = new daum.maps.Marker({
        position: markerPosition,
        image: markerImage, // 마커이미지 설정 
        clickable : true
});

// 마커가 지도 위에 표시되도록 설정합니다
markerm.setMap(map);


// 커스텀 오버레이가 표시될 위치입니다 

var iwContentm = '<iframe src="page/m.php" width=300 height=200 frameborder=1></iframe>', // 인포윈도우에 표출될 내용으로 HTML 문자열이나 document element가 가능>
합니다


    iwRemoveable = true; // removeable 속성을 ture 로 설정하면 인포윈도우를 닫을 수 있는 x버튼이 표시됩니다

// 인포윈도우를 생성합니다
var infowindowm = new daum.maps.InfoWindow({
    content : iwContentm,
    removable : iwRemoveable
});

// 마커에 클릭이벤트를 등록합니다
daum.maps.event.addListener(markerm, 'click', function() {
      // 마커 위에 인포윈도우를 표시합니다
      infowindowm.open(map, markerm);  
});
//------------------------*마리아관 끝 * ------------------------



//------------------------*비루투스관 시작 * ------------------------
var imageSrc = "img/v.png", // 마커이미지의 주소입니다    
    imageSize = new daum.maps.Size(160, 90), // 마커이미지의 크기입니다
    imageOprion = {offset: new daum.maps.Point(80,45)}; // 마커이미지의 옵션입니다. 마커의 좌표와 일치시킬 이미지 안에서의 좌표를 설정합니다.

// 마커의 이미지정보를 가지고 있는 마커이미지를 생성합니다
var markerImage = new daum.maps.MarkerImage(imageSrc, imageSize, imageOprion),
    markerPosition = new daum.maps.LatLng(37.485621,126.802); // 비루투스관
// 마커를 생성합니다
var markerv = new daum.maps.Marker({
        position: markerPosition,
        image: markerImage, // 마커이미지 설정 
        clickable : true
});

// 마커가 지도 위에 표시되도록 설정합니다
markerv.setMap(map);


// 커스텀 오버레이가 표시될 위치입니다 

var iwContentv = '<iframe src="page/v.php" width=300 height=200 frameborder=1></iframe>', // 인포윈도우에 표출될 내용으로 HTML 문자열이나 document element가 가능>
합니다


    iwRemoveable = true; // removeable 속성을 ture 로 설정하면 인포윈도우를 닫을 수 있는 x버튼이 표시됩니다

// 인포윈도우를 생성합니다
var infowindowv = new daum.maps.InfoWindow({
    content : iwContentv,
    removable : iwRemoveable
});

// 마커에 클릭이벤트를 등록합니다
daum.maps.event.addListener(markerv, 'click', function() {
      // 마커 위에 인포윈도우를 표시합니다
      infowindowv.open(map, markerv);  
}); 
//------------------------*비루투스관 끝 * ------------------------


//------------------------*밤비노관 시작 * ------------------------
var imageSrc = "img/ba.png", // 마커이미지의 주소입니다    
    imageSize = new daum.maps.Size(160, 90), // 마커이미지의 크기입니다
    imageOprion = {offset: new daum.maps.Point(80,45)}; // 마커이미지의 옵션입니다. 마커의 좌표와 일치시킬 이미지 안에서의 좌표를 설정합니다.

// 마커의 이미지정보를 가지고 있는 마커이미지를 생성합니다
var markerImage = new daum.maps.MarkerImage(imageSrc, imageSize, imageOprion),
    markerPosition = new daum.maps.LatLng(37.4859,126.8019291426778); // 밤비노관

// 마커를 생성합니다
var markerba = new daum.maps.Marker({
        position: markerPosition,
        image: markerImage, // 마커이미지 설정 
        clickable : true
});

// 마커가 지도 위에 표시되도록 설정합니다
markerba.setMap(map);


// 커스텀 오버레이가 표시될 위치입니다 

var iwContentba = '<iframe src="page/ba.php" width=300 height=200 frameborder=1></iframe>', // 인포윈도우에 표출될 내용으로 HTML 문자열이나 document element가 가능>
합니다


    iwRemoveable = true; // removeable 속성을 ture 로 설정하면 인포윈도우를 닫을 수 있는 x버튼이 표시됩니다

// 인포윈도우를 생성합니다
var infowindowba = new daum.maps.InfoWindow({
    content : iwContentba,
    removable : iwRemoveable
});

// 마커에 클릭이벤트를 등록합니다
daum.maps.event.addListener(markerba, 'click', function() {
      // 마커 위에 인포윈도우를 표시합니다
      infowindowba.open(map, markerba);  
}); 
//------------------------*밤비노관 끝 * ------------------------


//------------------------*성당 시작 * ------------------------
var imageSrc = "img/c.png", // 마커이미지의 주소입니다    
    imageSize = new daum.maps.Size(160, 90), // 마커이미지의 크기입니다
    imageOprion = {offset: new daum.maps.Point(80,45)}; // 마커이미지의 옵션입니다. 마커의 좌표와 일치시킬 이미지 안에서의 좌표를 설정합니다.

// 마커의 이미지정보를 가지고 있는 마커이미지를 생성합니다
var markerImage = new daum.maps.MarkerImage(imageSrc, imageSize, imageOprion),
    markerPosition = new daum.maps.LatLng(37.48484020079638,126.80307286487366); // 성당

// 마커를 생성합니다
var markerc = new daum.maps.Marker({
        position: markerPosition,
        image: markerImage, // 마커이미지 설정 
        clickable : true
});

// 마커가 지도 위에 표시되도록 설정합니다
markerc.setMap(map);


// 커스텀 오버레이가 표시될 위치입니다 

var iwContentc = '<iframe src="page/c.php" width=300 height=200 frameborder=1></iframe>', // 인포윈도우에 표출될 내용으로 HTML 문자열이나 document element가 가능>
합니다


    iwRemoveable = true; // removeable 속성을 ture 로 설정하면 인포윈도우를 닫을 수 있는 x버튼이 표시됩니다

// 인포윈도우를 생성합니다
var infowindowc = new daum.maps.InfoWindow({
    content : iwContentc,
    removable : iwRemoveable
});

// 마커에 클릭이벤트를 등록합니다
daum.maps.event.addListener(markerc, 'click', function() {
      // 마커 위에 인포윈도우를 표시합니다
      infowindowc.open(map, markerc);  
});
         
//------------------------*성당 끝 * ------------------------

//------------------------*국제관 시작 * ------------------------
var imageSrc = "img/ih.png", // 마커이미지의 주소입니다    
    imageSize = new daum.maps.Size(160, 90), // 마커이미지의 크기입니다
    imageOprion = {offset: new daum.maps.Point(80,55)}; // 마커이미지의 옵션입니다. 마커의 좌표와 일치시킬 이미지 안에서의 좌표를 설정합니다.

// 마커의 이미지정보를 가지고 있는 마커이미지를 생성합니다
var markerImage = new daum.maps.MarkerImage(imageSrc, imageSize, imageOprion),
    markerPosition = new daum.maps.LatLng(37.485433448828836,126.80330422674518); // 국제관

// 마커를 생성합니다
var markerih = new daum.maps.Marker({
        position: markerPosition,
        image: markerImage, // 마커이미지 설정 
        clickable : true
});

// 마커가 지도 위에 표시되도록 설정합니다
markerih.setMap(map);


// 커스텀 오버레이가 표시될 위치입니다 

var iwContentih = '<iframe src="page/ih.php" width=300 height=200 frameborder=1></iframe>', // 인포윈도우에 표출될 내용으로 HTML 문자열이나 document element가 가능>
합니다


    iwRemoveable = true; // removeable 속성을 ture 로 설정하면 인포윈도우를 닫을 수 있는 x버튼이 표시됩니다

// 인포윈도우를 생성합니다
var infowindowih = new daum.maps.InfoWindow({
    content : iwContentih,
    removable : iwRemoveable
});

// 마커에 클릭이벤트를 등록합니다
daum.maps.event.addListener(markerih, 'click', function() {
      // 마커 위에 인포윈도우를 표시합니다
      infowindowih.open(map, markerih);  
});
         
//------------------------*국제관 끝 * ------------------------

//------------------------*약학관 시작 * ------------------------
var imageSrc = "img/p.png", // 마커이미지의 주소입니다    
    imageSize = new daum.maps.Size(160, 90), // 마커이미지의 크기입니다
    imageOprion = {offset: new daum.maps.Point(80,55)}; // 마커이미지의 옵션입니다. 마커의 좌표와 일치시킬 이미지 안에서의 좌표를 설정합니다.

// 마커의 이미지정보를 가지고 있는 마커이미지를 생성합니다
var markerImage = new daum.maps.MarkerImage(imageSrc, imageSize, imageOprion),
    markerPosition = new daum.maps.LatLng(37.48683,126.79888); // 약학관

// 마커를 생성합니다
var markerp = new daum.maps.Marker({
	position: markerPosition,
	image: markerImage, // 마커이미지 설정 
	clickable : true
});

// 마커가 지도 위에 표시되도록 설정합니다
markerp.setMap(map);


// 커스텀 오버레이가 표시될 위치입니다 

var iwContentp = '<iframe src="page/p.php" width=300 height=200 frameborder=1></iframe>', // 인포윈도우에 표출될 내용으로 HTML 문자열이나 document element가 가능합니다


    iwRemoveable = true; // removeable 속성을 ture 로 설정하면 인포윈도우를 닫을 수 있는 x버튼이 표시됩니다

// 인포윈도우를 생성합니다
var infowindowp = new daum.maps.InfoWindow({
    content : iwContentp,
    removable : iwRemoveable
});

// 마커에 클릭이벤트를 등록합니다
daum.maps.event.addListener(markerp, 'click', function() {
      // 마커 위에 인포윈도우를 표시합니다
      infowindowp.open(map, markerp);  
});

//------------------------*약학관 끝 * ------------------------



</script>



</body>
</html>

