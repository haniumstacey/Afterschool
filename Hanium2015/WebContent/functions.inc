<?PHP
//header 함수를 utf-8 로 바꿀 수 있지 않을까 하는 기대에 이 한 줄을 추가해본다.
// "header("Content-Type: text/html; charset=UTF-8");"
// #----------homepage 이상유무 체크 http://www.zend.com 참고----------#
// function is_url_valid( $url )
// {
// 	if ( eregi( "[a-z0-9]+\.[a-z0-9_]+", $url))
// 		return TRUE;
// 	else
// 		return FALSE;
// }

// #----------email 이상유무 체크 http://www.zend.com 참고----------#
// function is_email_valid( $email )
// {
// 	if( eregi( "^[a-z0-9\._-]+@[a-z0-9\._-]+\.[a-z]+", $email) )
// 		return TRUE;
// 	else
// 		return FALSE;
// }
#----------error 처리 함수----------#
function error( $msg )
{
	echo("
		<script language=\"javascript\">
		alert( \"$msg\" );
		history.back();
		</script>");
}
#----------forwarding 처리 함수----------#
function forward($url)
{
	header("Location:$url");
	//echo( )
}
#----------링크를 만들어 주는 함수----------#
function dest_url( $link, $page, $uid=NULL )
{
	GLOBAL $kind;
	GLOBAL $key;
	$link .= "?page=$page";
	if ($uid)
		$link .="&uid=$uid";
	if( $key )
		$link .="&kind=$kind&key=$key";
	return $link;
}
?>