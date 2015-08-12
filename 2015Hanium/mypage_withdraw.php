<meta charset="utf-8"> <!-- 책에는 없으나, 한글 깨짐 현상을 해결하기 위해 세 줄의 코드를 추가한다. -->

<?php
#----------데이터베이스 연결----------#
$con = mysql_connect( "localhost", "root", "apmsetup" );
mysql_select_db( "hanium", $con );
?>

<?php if ($_POST['del'] == '1') { ?>
<?php
#----------userinfo 테이블에 회원 정보 삭제----------#
$query = "delete from userinfo where id='test'";
	mysql_query( $query );
	mysql_close( $con );
					?>
					<script>self.close()</script>
					<?php
					exit;
}
?>

<html lang="ko">
<head>
	<title>WaSchool ::: Withdraw</title>
	<style type="text/css"></style>
</head>
<body>
	<table>
		<tr>
			<td><h2>회원탈퇴</h2></td>
		</tr>
		<tr>
			<td><h3>탈퇴 후 회원정보 및 서비스</h3></td>
		</tr>
		<tr>
			<td><h3>이용기록은 모두 삭제됩니다.</h3></td>
		</tr>
		<tr>
			<td>
				<label class="checkbox-inline">
			<input hidden='check' type="checkbox" id="agree" value="option1"> 동의합니다. </label></td>
		</tr>
		<tr>
			<td>
				<button class="btn btn-default" type="button" onclick='self.close()'>돌아가기</button>
				<form method="post">
					<input hidden='del' value='1'>
				<button type="submit" class="btn btn-info" onclick='self.close()'>탈퇴하기</button></form>	

					<?php
					#----------체크박스 체크유무 확인----------#
if ( !'agree')
{
	error("빈 정보란이 있으면 안됩니다.");
	exit;
}
?>				
			</td>
		</tr>
	</table>
</body>
</html>


