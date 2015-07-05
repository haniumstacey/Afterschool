<?ob_start();?>	<!-- 이게 있어야, 출력문을 바로 출력시키지 않고 그 내용을 임시 버퍼에 저장시켰다가, 다음 header, setcookie, session 등을 진행시킨다. -->
<meta charset="utf-8"> <!-- 책에는 없으나, 한글 깨짐 현상을 해결하기 위해 세 줄의 코드를 추가한다. -->
<?PHP
include ( "./board_functions.inc" );
$con=mysql_connect("localhost","root","apmsetup");
mysql_select_db("hanium",$con);

//원래 이 주석을 포함한 4 개 줄은 없던 코드 세 줄인데, get 형식으로 board_write.php 에서 작성자, 제목, 내용을 받아오면 그나마 가능할까 싶어서 써본다.
$page = $_GET['page'];
$uid = $_GET['uid'];	//$pae 값, $uid 값 다 넘어옴을 확인했다.

$query="update board set refnum=refnum+1 where uid=".mysql_real_escape_string($uid)."";	//쿼리문 실행됨을 확인했다.
mysql_query($query) or die (mysql_error());
mysql_close($con);
forward(dest_url("./board_read.php",$page,$uid));
?>