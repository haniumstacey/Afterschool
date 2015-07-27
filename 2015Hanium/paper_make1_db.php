<?ob_start();?>	<!-- 이게 있어야, 출력문을 바로 출력시키지 않고 그 내용을 임시 버퍼에 저장시켰다가, 다음 header, setcookie, session 등을 진행시킨다. -->
<meta charset="utf-8"> <!-- 책에는 없으나, 한글 깨짐 현상을 해결하기 위해 세 줄의 코드를 추가한다. -->

<?PHP
include("paper_config.cfg");
include("paper_functions.inc");

//원래 이 주석을 포함한 4 개 줄은 없던 코드 세 줄인데, get 형식으로 paper_write.php 에서 작성자, 제목, 내용을 받아오면 그나마 가능할까 싶어서 써본다.
$papersubject = $_POST['papersubject'];
$papername = $_POST['papername'];
$papertotalqs = $_POST['papertotalqs'];
$paperimage = $_POST['paperimage'];
$paperintro = $_POST['paperintro'];

#----------앞뒤 스페이스 제거----------#
$papername = trim($papername);
$paperintro = trim($paperintro);

#----------입력값 이상유무 확인----------#
if ( !$papername )
{
	error("학습지 이름은 지어주셔야 합니다.");
	exit;
}

#----------데이터베이스 연결----------#
$con = mysql_connect( "localhost", "root", "apmsetup" );
mysql_select_db( "hanium", $con );


// #----------uid, gid 결정----------#
// $query = "select MAX( gid ) as gid from board";
// $result = mysql_query( $query ) or die( mysql_error() );
// $gid = current(mysql_fetch_array( $result ));
// $gid = $gid + 1;
//우리는 이 부분 대신에, papersendtime 에 기초하여 paperassign 테이블을 내림차순 정렬시키는 코드가 필요하다.

#----------board 테이블에 글 삽입----------#
$query = "insert into paper
( gid, name, subject, article, writedate )
values ( $gid, '$name', '$subject',
	'$article', '$writedate' )";
	mysql_query( $query ) or die( mysql_error() );
	mysql_close( $con );

	forward("./paper_list.php");
?>