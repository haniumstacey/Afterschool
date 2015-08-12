<?ob_start();?>	<!-- 이게 있어야, 출력문을 바로 출력시키지 않고 그 내용을 임시 버퍼에 저장시켰다가, 다음 header, setcookie, session 등을 진행시킨다. -->
<meta charset="utf-8"> <!-- 책에는 없으나, 한글 깨짐 현상을 해결하기 위해 세 줄의 코드를 추가한다. -->

<?PHP
#----------데이터베이스 연결----------#
$con = mysql_connect( "localhost", "root", "apmsetup" );
mysql_select_db( "hanium", $con );

#----------사용자가 입력한 현재 비번이랑 대조해야되는, 진짜 현재 비번 가져오기----------#
$query = "select passwd from userinfo where id='test'";
$chk_passwd_now = mysql_result(mysql_query($query), 0);

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

#----------현재 비번, 새 비번, 새 비번 확인을 가져옴----------#
$passwd_now = $_POST['passwd_now'];
$passwd_new = $_POST['passwd_new'];
$passwd_new_chk = $_POST['passwd_new_chk'];

#----------앞뒤 스페이스 제거----------#
$passwd_now = trim($passwd_now);
$passwd_new = trim($passwd_new);
$passwd_new_chk = trim($passwd_new_chk);

#----------입력값 이상유무 확인----------#
if ( !$passwd_now || !$passwd_new || !$passwd_new_chk)
{
	error("빈 정보란이 있으면 안됩니다.");
	exit;
} else if ($passwd_now != $chk_passwd_now) {
	#----------현재비번과 사용자가 입력한 현재비번이 불일치할 경우----------#
		//현재 비번이 오류라는 팝업창을 띄운다.
	error("기존의 비밀번호가 올바르지 않습니다.");
} else if ($passwd_new != $passwd_new_chk) {
	#----------사용자가 새롭게 입력한 두 비번이 불일치할 경우----------#
	//현재 비번이 오류라는 팝업창을 띄운다.
	error("새로 입력하신 비밀번호가 불일치합니다.");
} else {
	#----------userinfo 테이블에 글 삽입----------#
	$query = "update userinfo set passwd ='$passwd_new' where id='test'";
	mysql_query( $query );
	mysql_close( $con );

	forward("./mypage_base.php");
}

?>