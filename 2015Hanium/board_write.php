<meta charset="utf-8"> <!-- 梨낆뿉���놁쑝�� �쒓� 源⑥쭚 �꾩긽���닿껐�섍린 �꾪빐 ��以꾩쓽 肄붾뱶瑜�異붽��쒕떎. -->

<?PHP include("./board_functions.inc"); ?>

<html>
<head>
	<style>
	<!--

	<?PHP include( "./board_common_style.inc" ); ?>

	.ques_head
	{
		/*background-color: #F9E79D;*/
		text-align: center;
	}
/*	.input_td
	{
		background-color: #FEFCE2;
	}*/
	-->
	</style>
</head>
	<title>WaSchool ::: Free board</title>
<body bgcolor="white" text="black" link="blue" vlink="purple" alink="red">
<form name="form1">
			<p><img src ="images/noname01.png" width="54" height="54" border="0" >
				<img src="images/waschool.png" width="209" height="108" border="0" alt="waschool.png">
				<input type="submit" name="login" value="로그인">
			</p>
		</form>
	<form name="write_form" method="post" action="board_write_db.php">
		<center>
			<table>
				<tr>
					<td class="ques_head">湲�벖��/td>
					<td class="input_td">
						<input type="text" name="name" size="10" maxsize="10">
					</td>
				<tr>
					<td class="ques_head">�쒕ぉ:</td>
					<td class="input_td">
						<input type="text" name="subject" size="50" maxsize="255">
					</td>
				</tr>
				<tr>
					<td class="ques_head">�댁슜:</td>
					<td class="input_td"><textarea name="article" cols="60" rows="20"></textarea>
					</td>
				</tr>
			</table>
			<table>
				<tr>
					<td width="100">&nbsp;</td>
					<td width="100" align="right"><input type="submit" value="�뺤씤"></td>
				</tr>
			</table>
		</center>
	</form>
		<form name="form2">
								<p><img src="images/hone.png" width="48" height="46" border="0" alt="hone.png"> <img src="images/messasge.png" width="51" height="46"
				border="0" alt="messasge.png"> <img src="images/mypage.png" width="49" height="50" border="0" alt="mypage.png"> <img src="images/mileage.png"
				width="50" height="50" border="0" alt="mileage.png"> <img
				src="images/gift.png" width="49" height="50" border="0" alt="gift.png">
			</p>
		</form>
</body>
</html>