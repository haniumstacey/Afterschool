<?ob_start();?>	<!-- 이게 있어야, 출력문을 바로 출력시키지 않고 그 내용을 임시 버퍼에 저장시켰다가, 다음 header, setcookie, session 등을 진행시킨다. -->
<meta charset="utf-8"> <!-- 책에는 없으나, 한글 깨짐 현상을 해결하기 위해 세 줄의 코드를 추가한다. -->

<?PHP
include( "board_config.cfg" );
include( "board_functions.inc" );

//원래 이 주석을 포함한 4 개 줄은 없던 코드 세 줄인데, get 형식으로 board_write.php 에서 작성자, 제목, 내용을 받아오면 그나마 가능할까 싶어서 써본다.
$gid = $_GET['gid'];
$depth = $_GET['depth'];
$uid = $_GET['uid'];	//$gid, $depth, $uid 값 다 넘어옴을 확인했다.

#----------데이터베이스 연결----------#
$con = mysql_connect( "localhost", "root", "apmsetup" );
mysql_select_db( "hanium", $con );
#----------board 테이블에 글 삭제----------#
$query = "delete from board where uid=$uid";	//답변이 달린 게시글에서, 게시글을 지워도 답변은 지워지지 않는다.
// $query = "delete from board where gid=$gid";

mysql_query($query ) or die (mysql_error());
mysql_close($con);

forward(dest_url("./board_list.php", $page));
?>