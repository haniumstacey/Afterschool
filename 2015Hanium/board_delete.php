<meta charset="utf-8"> <!-- 책에는 없으나, 한글 깨짐 현상을 해결하기 위해 세 줄의 코드를 추가한다. -->

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
	<body>
		<center>
			<table>

				<?PHP
				include( "board_functions.inc" );

				//원래 이 주석을 포함한 4 개 줄은 없던 코드 세 줄인데, get 형식으로 board_write.php 에서 작성자, 제목, 내용을 받아오면 그나마 가능할까 싶어서 써본다.
$uid = $_GET['uid'];	//$uid 값 다 넘어옴을 확인했다.

				$con = mysql_connect( "localhost", "root", "apmsetup");
				mysql_select_db("hanium", $con);

				$query = "select name, subject from board where uid = $uid";
				$result = mysql_query( $query ) or die(mysql_error());
				list( $name, $subject ) = mysql_fetch_array( $result );
				mysql_close( $con );
				?>

				<form name="delete_form" method="post" action="./board_delete_db.php?uid=<?=$uid?>">
					<tr>
						<td class="ques_head" width="100">글쓴이</td>
						<td class="input_td"><?=$name?></td>
					</tr>
					<tr>
						<td class="ques_head">제목</td>
						<td class="input_td"><?=$subject?></td>
					</tr>
			<!-- 		<tr>
						<td class="ques_head">암호</td>
						<td class="input_td">
							<input type="password" name="passwd" size="10" maxsize="10">
						</td>
					</tr> -->
				</table>
				<table>
					<tr>
						<td width="100">&nbsp;</td>
						<td align="center"><input type="submit" value="삭제"></td>
						<td width="100" align="right">
							<a href="javascript:history.back()">뒤로</a>
							<a href="<?=dest_url( "./board_list.php", $page )?>">목록</a>
						</td>
					</tr>
				</form>
				</table>
		</center>
	</body>
</html>