<?ob_start();?>	<!-- 이게 있어야, 출력문을 바로 출력시키지 않고 그 내용을 임시 버퍼에 저장시켰다가, 다음 header, setcookie, session 등을 진행시킨다. -->
<meta charset="utf-8"> <!-- 책에는 없으나, 한글 깨짐 현상을 해결하기 위해 세 줄의 코드를 추가한다. -->

<?PHP
#----------forwarding 처리 함수----------#
function forward($url)
{
	header("Location:$url");
	//echo( )
}

#----------error 함수----------#
function error($msg) {
	echo "<script>
	alert('$msg');
	history.back();
	</script>";
	exit;
}

#----------이름, 생년월일, 신분을 가져옴----------#
$name = $_POST['name'];
$birth = $_POST['birth'];
$userkind = $_POST['userkind'];

#----------앞뒤 스페이스 제거----------#
$name = trim($name);
$birth = trim($birth);
$userkind = trim($userkind);

#----------데이터베이스 연결----------#
$con = mysql_connect( "localhost", "root", "apmsetup" );
mysql_select_db( "hanium", $con );

#----------입력값 이상유무 확인----------#
if ( !$name || !$birth || !$userkind)
{
	error("빈 정보란이 있으면 안됩니다.");
	#----------userinfo 테이블 업데이트----------#
} else {
	$query = "update userinfo set name='$name', birth='$birth', userkind='$userkind' where id='test'";
	mysql_query( $query );
	mysql_close( $con );

	forward("./mypage_base.php");
}
?>