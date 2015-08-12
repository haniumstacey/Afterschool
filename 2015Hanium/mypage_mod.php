<meta charset="utf-8"> <!-- 책에는 없으나, 한글 깨짐 현상을 해결하기 위해 세 줄의 코드를 추가한다. -->

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
  <div class="managing_passwd"><a href="#">비번관리</a></div>
</div>
	</center>
	<form name="write_form" method="post" action="mypage_mod_db.php">
	<center>
<table width="300" border="1">
<tr>
	<td>이름</td>
						<td class="input_td">
						<input type="text" name="name" size="50" maxsize="255">
					</td>
</tr>
<tr>
	<td>생년월일</td>
					<td class="input_td">
						<input type="text" name="birth" size="50" maxsize="255">
					</td>
</tr>
<tr>
	<td>신분</td>
					<td class="input_td">
						<input type="text" name="userkind" size="50" maxsize="255">
					</td>
</tr>	
</table>
</center>
<button id="button"><a href="./mypage_base.php"> <font color="white">완료</font> </a></button>
</form>
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