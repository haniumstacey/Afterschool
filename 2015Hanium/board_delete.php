<meta charset="utf-8"> <!-- 梨낆뿉���놁쑝�� �쒓� 源⑥쭚 �꾩긽���닿껐�섍린 �꾪빐 ��以꾩쓽 肄붾뱶瑜�異붽��쒕떎. -->

<html>
<head>
	<style>
	<!--

	<?PHP include( "./board_common_style.inc" ); ?>

	.ques_head
	{
		background-color: #F9E79D;
		text-align: center;
	}

	.input_td
	{
		background-color: #FDFCE2;
	}
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
		<center>
			<table>

				<?PHP
				include( "board_functions.inc" );

				//�먮옒 ��二쇱꽍���ы븿��4 媛�以꾩� �녿뜕 肄붾뱶 ��以꾩씤�� get �뺤떇�쇰줈 board_write.php �먯꽌 �묒꽦�� �쒕ぉ, �댁슜��諛쏆븘�ㅻ㈃ 洹몃굹留�媛�뒫�좉퉴 �띠뼱���⑤낯��
$uid = $_GET['uid'];	//$uid 媛����섏뼱�댁쓣 �뺤씤�덈떎.

				$con = mysql_connect( "localhost", "root", "apmsetup");
				mysql_select_db("hanium", $con);

				$query = "select name, subject from board where uid = $uid";
				$result = mysql_query( $query ) or die(mysql_error());
				list( $name, $subject ) = mysql_fetch_array( $result );
				mysql_close( $con );
				?>

				<form name="delete_form" method="post" action="./board_delete_db.php?uid=<?=$uid?>">
					<tr>
						<td class="ques_head" width="100">湲�벖��/td>
						<td class="input_td"><?=$name?></td>
					</tr>
					<tr>
						<td class="ques_head">�쒕ぉ</td>
						<td class="input_td"><?=$subject?></td>
					</tr>
			<!-- 		<tr>
						<td class="ques_head">�뷀샇</td>
						<td class="input_td">
							<input type="password" name="passwd" size="10" maxsize="10">
						</td>
					</tr> -->
				</table>
				<table>
					<tr>
						<td width="100">&nbsp;</td>
						<td align="center"><input type="submit" value="��젣"></td>
						<td width="100" align="right">
							<a href="javascript:history.back()">�ㅻ줈</a>
							<a href="<?=dest_url( "./board_list.php", $page )?>">紐⑸줉</a>
						</td>
					</tr>
				</form>
				</table>
		</center>
			<form name="form2">
								<p><img src="images/hone.png" width="48" height="46" border="0" alt="hone.png"> <img src="images/messasge.png" width="51" height="46"
				border="0" alt="messasge.png"> <img src="images/mypage.png" width="49" height="50" border="0" alt="mypage.png"> <img src="images/mileage.png"
				width="50" height="50" border="0" alt="mileage.png"> <img
				src="images/gift.png" width="49" height="50" border="0" alt="gift.png">
			</p>
		</form>
	</body>
</html>