<meta charset="utf-8"> <!-- 책에는 없으나, 한글 깨짐 현상을 해결하기 위해 세 줄의 코드를 추가한다. -->

<?php 
#----------데이터베이스에 연결----------#
$con = mysql_connect("localhost", "root", "apmsetup");
mysql_select_db("hanium", $con);

#----------유저의 이름 검색----------#
$query = "select name from userinfo where id='test' ";
$name = mysql_result(mysql_query($query), 0);	//$query 문을 돌려서 실행 결과로 나온 값들의 테이블이 mysql_query 의 결과로 나타났고, 그 0 번째 열을 mysql_result 명령어를 통해 결과값으로 하겠다는 의미.

#----------유저의 생년월일 검색----------#
$query = "select birth from userinfo where id='test' ";
$birth = mysql_result(mysql_query($query), 0);	//$query 문을 돌려서 실행 결과로 나온 값들의 테이블이 mysql_query 의 결과로 나타났고, 그 0 번째 열을 mysql_result 명령어를 통해 결과값으로 하겠다는 의미.

#----------유저의 신분 검색----------#
$query = "select userkind from userinfo where id='test' ";
$userkind = mysql_result(mysql_query($query), 0);	//$query 문을 돌려서 실행 결과로 나온 값들의 테이블이 mysql_query 의 결과로 나타났고, 그 0 번째 열을 mysql_result 명령어를 통해 결과값으로 하겠다는 의미.

?>

<html lang="ko">
<head>
	<title>WaSchool ::: My Page</title>
	<style>
#button {
		background: #4C4C4C
	}
	</style>
	</head>
	<body bgcolor="white" text="black" link="blue" vlink="purple" alink="red">
		<center>
					<form name="form1">
			<p><img src ="images/noname01.png" width="54" height="54" border="0" >
				<img src="images/waschool.png" width="209" height="108" border="0" alt="waschool.png">
				<input type="submit" name="login" value="로그인">
			</p>
		</form>
		<div class="tab_menu">
  <div class="basic_info"><a href="#">기본정보</a></div>
  <div class="managing_passwd"><a href="./mypage_managepasswd.php">비번관리</a></div>
</div>
	</center>
	<center>
<table width="300" border="1">
<tr>
	<td>이름</td>
	<td><?=$name?></td>
</tr>
<tr>
	<td>생년월일</td>
	<td><?=$birth?></td>
</tr>
<tr>
	<td>신분</td>
	<td><?=$userkind?></td>
</tr>	
</table>
</center>
<button id="button"><a href="./mypage_mod.php"> <font color="white">수정</font> </a></button>
<h3 onClick="window.open('./mypage_withdraw.php', '회원탈퇴', 'width=600, height=600, top=100, left=100')">회원탈퇴 바로가기</h3>
<center>
											<form name="form2">
								<p><img src="images/hone.png" width="48" height="46" border="0" alt="hone.png"> <img src="images/messasge.png" width="51" height="46"
				border="0" alt="messasge.png"> <img src="images/mypage.png" width="49" height="50" border="0" alt="mypage.png"> <img src="images/mileage.png"
				width="50" height="50" border="0" alt="mileage.png"> <img
				src="images/gift.png" width="49" height="50" border="0" alt="gift.png">
			</p>
		</form>
			</table>
		</center>
	</body>
	</html> 