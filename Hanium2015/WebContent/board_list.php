<meta charset="utf-8"> 

<?PHP
include("./config.cfg");
include("./functions.inc");	
if (!$page)
$page = 1;

if ($key)
	$where = "where $kind like '%$key%'";

$con = mysql_connect("localhost", "root", "apmsetup");
mysql_select_db("hanium", $con);

$query = "select count(*) total_rows from board";
$result = mysql_query($query) or die(mysql_error());
$total_rows = current(mysql_fetch_array($result));

$total_pages = ceil($total_rows/$rows_page);
$start_now = $rows_page * ($page - 1);
$pre_page = $page > 1 ? $page - 1 : NULL;
$next_page = $page < $total_pages ? $page + 1  : NULL;
$start_page = (ceil($page/$direct_pages) -1) * $direct_pages + 1;
$end_page = $total_pages >= $start_page + $direct_pages ?
$start_page + $direct_pages - 1  : $total_pages;
?>

<html>
<head>
	<style>
	<!--

	<?PHP include ("./common_style.inc"); ?>

	TD
	{
		padding: 3px;
	}
	.field_tr
	{
		background: #DCDCDC;
	}
	.list_tr
	{
		background: #FFFFFF;
	}
	-->
	</style>
	</head>
	<body>
		<center>
			<!-- <table>
				<tr>
					<td colspan="5">珥앷쾶�쒕Ъ:<?=$total_rows?></td>
				</tr>
			</table> -->
			<table nowrap>
				<tr class="field_tr" align-"center">
					<td width="50">NO.</td>
					<td width="360">제목</td>
					<td width="90">작성자</td>
					<td width="60">날짜</td>
					<td width="40">조회수</td>
				</tr>

				<?PHP
				$query = "select uid, gid, depth, name, subject, writedate, refnum from board
				$where order by gid desc, depth asc limit $start_now, $rows_page";
				$result = mysql_query( $query ) or die (mysql_error());
				while ( $row = mysql_fetch_array( $result ))
				{
					list( $uid, $gid, $depth, $name, $subject, $writedate, $refnum, $mail ) = $row;

					$subject = htmlspecialchars( $subject );

					if (strlen ($subject) > $row_length )
						$subject = substr( $subject, 0,  $row_length )."...";

					?>

					<tr class="list_tr" >
						<td width="50" align="center" ><?=$uid?></td>
						<td width="360"><?=str_repeat("&nbsp;&nbsp;", strlen( $depth))?>
							<a href="count_ref.php?page=<?=$page?>&uid=<?=$uid?>"><?=$subject?></a>
						</td>
						<td width="90" align="center">

							<?PHP
							if ($mail)
								echo( "<a href=\"mailto:$mail\">$name</a>" );
							else
								echo("$name");
							?>
						</td>
						<td width="60" align="center"><?=$writedate?></td>
						<td width="40" align="center"><?=$refnum?></td>
					</tr>

					<?PHP
				}
				?>

				</table>
				<table>
					<tr>
						<td width="100" align="left">

							<?PHP
							if($pre_page)
								echo("<a href=\"".dest_url("./list.php", $pre_page)."\">[�댁쟾]</a>" );

							if($next_page)
								echo("<a href=\"".dest_url("./list.php", $next_page)."\">[�ㅼ쓬]</a>" );
							?>

						</td>
						<td align="center">&nbsp;

							<?PHP
							if( $start_page > 1 )
								echo("<a href=\"".dest_url("./list.php", $start_page - 1)."\">[pre]</a>");
								for( $dest_page = $start_page; $dest_page <= $end_page; $dest_page++)
								if ($dest_page != $page)
								echo("<a href=\"".dest_url( "./list.php", $dest_page)."\">[$dest_page]</a>");
								else
								echo("&nbsp;$dest_page&nbsp");
								if($end_page < $total_pages)
								echo("<a href=\"".dest_url( "./list.php", $end_page + 1)."\">[next]</a>");
								?>
								</td>
								<td width="100" align="right">
								<a href="<?=dest_url("./write.php", $page )?>">글쓰기</a>
								</td>
								</tr>
				</table>
				<table>
				<form name="search_from" method="post" action="./list.php?">
					<tr align="center">
						<td>
							<select name="kind">
								<option value="subject"><? if($kind == "subject") echo("selected");?>글제목
								</option>
								<option value="article"><? if($kind == "article") echo("selected");?>내용
								</option>
								<option value="name"><? if($kind == "name") echo("selected");?>이름
								</option>
							</select>
							<input type="text" name="key" value="<?=$key?>" size="20" maxlength="30">
							<input type="submit" value="찾기">
						</td>
					</tr>
				</form>
			</table>
		</center>
	</body>
	</html> -->