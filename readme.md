## Daum map API + PHP XML Parsing Meshup 

![sampleimage](./img/map.png)

2015년도 2학년때 진행 프로젝트.

php에서 제공하는 xml 파싱 라이브러리를 활용하여 시간표 데이터를 가져와 현재 시간에 어떤 강의가 진행중인지 찾고, 
강의 건물 위 버튼을 클릭하면 현재 진행중인 강의를 볼 수 있게 하는 웹 페이지. 

ui도, 동적 로딩도 하지 않고 프레임을 이용해서 데이터를 뿌려주기만 하는 원시적인 형태의 웹 페이지. 
만드는 당시에는 디자인적 요소를 신경 쓸 겨를이 별로 없었음. 


#### 사용된 기능 

- API : 제작 당시에는 다음 지도 api를 활용했으나 현재는 카카오 지도 api로 전환되어 그에 맞게 약간 수정함.
지도 api에서 활용한건 지도를 그려주는 기능과 지도 위 특정 공간에 버튼을 배치하는 api 정도.

- PHP : php에서 XML 데이터를 파싱해주는 라이브러리를 이용하였고, 주로 string 비교를 통해 기능을 구현함. 

#### 개발 당시 문제점 

최초 구상은 학교 서버에서 시간표 데이터를 받아와서 사용하는 방식이었으나, 그당시 학교 전산망이 그런 api형식으로 데이터를 제공해주는 기능이 없었음.
그래서 직접 담당 부서에 찾아가 xml 형식의 시간표 데이터를 받아와서 로컬 데이터를 활용하였음. 이 부분은 흔쾌히 허가해주어서 다행이라고 생각함. 

파싱과 강의 판정을 전부 string을 이용해 하다보니 인코딩 문제로 제대로 작동하지 않는 경우가 있을 수 있으니 인코딩 변경이 필요함. 
