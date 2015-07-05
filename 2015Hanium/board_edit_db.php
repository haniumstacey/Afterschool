<?ob_start();?>	<!-- 이게 있어야, 출력문을 바로 출력시키지 않고 그 내용을 임시 버퍼에 저장시켰다가, 다음 header, setcookie, session 등을 진행시킨다. -->
<meta charset="utf-8"> <!-- 책에는 없으나, 한글 깨짐 현상을 해결하기 위해 세 줄의 코드를 추가한다. -->

<?PHP
include( "board_config.cfg" );
include( "board_functions.inc" );

//원래 이 주석을 포함한 4 개 줄은 없던 코드 세 줄인데, get 형식으로 board_write.php 에서 작성자, 제목, 내용을 받아오면 그나마 가능할까 싶어서 써본다.
$page = $_GET['page'];
$uid = $_GET['uid'];	//$page, $uid 값 다 넘어옴을 확인했다.

//원래 이 주석을 포함한 4 개 줄은 없던 코드 세 줄인데, get 형식으로 board_write.php 에서 작성자, 제목, 내용을 받아오면 그나마 가능할까 싶어서 써본다.
$name = $_POST['name'];
$subject = $_POST['subject'];
$article = $_POST['article'];

#----------앞뒤 스페이스 제거----------#
// $email = trim( $email );
// $homepage = trim( $homepage );
$subject = trim( $subject );
$article = trim( $article );

#----------입력값 이상유무 확인----------#
if( !$subject || !$article )
{
	error( "입력값이 부족합니다." );
	exit;
}

#----------데이터베이스 연결----------#
$con = mysql_connect( "localhost", "root", "apmsetup" );
mysql_select_db( "hanium", $con );

#----------암호가 올바른지 확인----------#
// $query = "select passwd from board where uid=$uid";
// $result = mysql_query( $query, $con ) or die ( mysql_error() );
// $origin_passwd = current ( mysql_fetch_array( $result ) );
// $passwd = substr( md5( trim($passwd)), 0, 10);

// if( $passwd != $origin_passwd )
// {
// 	error( "암호가 올바르지 않습니다." );
// 	exit;
// }

#----------board 테이블에 글 삽입----------#
$query = "update board
set subject='$subject',
article = '$article' where uid=$uid";
mysql_query( $query ) or die( mysql_error());	//query 문 이상없이 돌아감을 확인했음
mysql_close( $con );

forward( dest_url( "./board_list.php", $page) );

?>