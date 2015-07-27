<meta charset="utf-8"> <!-- 梨낆뿉���놁쑝�� �쒓� 源⑥쭚 �꾩긽���닿껐�섍린 �꾪빐 ��以꾩쓽 肄붾뱶瑜�異붽��쒕떎. -->
<html>
<head>
	<style>
	<!--

	<?PHP include( "./board_common_style.inc" );?>

	.info_table
	{
		background-color: #CFE1FC;
		border: solid 1pt;
	}
	.articel_table
	{
		background-color: #EFF8FE;
		border: solid 1pt;
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

		<?PHP
		include( "./board_config.cfg" );
		include( "./board_functions.inc" );

		//�먮옒 ��二쇱꽍���ы븿��4 媛�以꾩� �녿뜕 肄붾뱶 ��以꾩씤�� get �뺤떇�쇰줈 board_write.php �먯꽌 �묒꽦�� �쒕ぉ, �댁슜��諛쏆븘�ㅻ㈃ 洹몃굹留�媛�뒫�좉퉴 �띠뼱���⑤낯��
$uid = $_GET['uid'];	//$uid 媛����섏뼱�댁쓣 �뺤씤�덈떎.

		$con=mysql_connect( "localhost", "root", "apmsetup");
		mysql_select_db( "hanium", $con);

		#----------�곗씠�곕쿋�댁뒪�먯꽌 湲�쓽 �뺣낫 寃�깋----------#
		$query = "select gid, name, subject, article, writedate, refnum
		from board where uid = $uid";

		$result = mysql_query( $query ) or die ( mysql_error() );

		list( $gid, $name, $subject, $article, $writedate, $refnum )
		 = mysql_fetch_array( $result );

		 mysql_close( $con );

		 #----------html �뱀닔 臾몄옄 泥섎━----------#
		 $subject = htmlspecialchars( $subject );

		 if( !$tag_enable )
		 	$article = htmlspecialchars( $article );
		 $article = nl2br( $article );

		 ?>

		 <table class="info_table">
		 	<tr>
		 		<td width="590" colspan="2"><b><?=$subject?></b></td>
		 	</tr>
		 	<tr>
		 		<td width="510">湲�벖��nbsp;:&nbsp;<?=$name?>

		 		</td>
		 		<td width="90">議고쉶:<?=$refnum?></td>
		 	</tr>
		 </table>
		 <table class="articel_table">
		 	<tr>
		 		<td><?=$article?></td>
		 	</tr>
		 </table>
		 <tr align="right">
		 	<td><a href="<?=dest_url( "./board_edit.php", $page, $uid )?>">�섏젙</a>
		 		<a href="<?=dest_url( "./board_reply.php", $page, $uid )?>">�듬�</a>
		 		<a href="<?=dest_url( "./board_delete.php", $page, $uid )?>">��젣</a>
		 		<a href="<?=dest_url( "./board_list.php", $page, $uid )?>">紐⑸줉</a></td>
		 	</tr>
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