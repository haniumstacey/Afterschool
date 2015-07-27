<meta charset="utf-8"> <!-- 梨낆뿉���놁쑝�� �쒓� 源⑥쭚 �꾩긽���닿껐�섍린 �꾪빐 ��以꾩쓽 肄붾뱶瑜�異붽��쒕떎. -->

<?PHP
include(".paper_config.cfg");
include("./paper_functions.inc");	//媛��꾨줈洹몃옩�먯꽌 �ъ슜�섎뒗 �⑥닔�ㅼ쓣 紐⑥븘�볦� �뚯씪
if (!$page)
$page = 1;

#----------寃�깋 ��吏덉쓽臾몄뿉 異붽���臾몄옄----------#
if ($key)
	$where = "where $kind like '%$key%'";

#----------�곗씠�곕쿋�댁뒪���곌껐----------#
$con = mysql_connect("localhost", "root", "apmsetup");
mysql_select_db("hanium", $con);

#----------珥�湲�쓽 ��寃�깋----------#
$query = "select count(*) total_rows from board";
$result = mysql_query($query) or die(mysql_error());
$total_rows = current(mysql_fetch_array($result));

#----------由ъ뒪�몄뿉���ъ슜�섎뒗 蹂�닔 �뺤쓽----------#
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
	<title>WaSchool ::: Paper Work</title>
	<style>
	<!--

	<?PHP include ("./common_style.inc"); ?>

	TD
	{
		padding: 3px;
	}
	.field_tr
	{
		background: #DCDCDC;	/* 紐⑸줉��媛�옣 泥�踰덉㎏ �됱� gainsboro */
	}
	.list_tr
	{
		background: #FFFFFF;	/* 紐⑸줉��媛�以꾩쓽 寃뚯떆湲�뱾���됯퉼���곗깋 */
	}
	-->

	#top_subject {
		width: 80px; height: 80px;
		background: #D4D4D4;
		border: 1px #979797;
	}
	#button {
		background: #4C4C4C
	}
	</style>
	</head>
	<body bgcolor="white" text="black" link="blue" vlink="purple" alink="red">
		<center>
					<form name="form1">
			<p><img src ="images/noname01.png" width="54" height="54" border="0" >
				<img src="images/waschool.png" width="209" height="108" border="0" alt="waschool.png">
				<input type="submit" name="login" value="로그인">
				</p>
		</form>
	</center>

<!-- <nav class="navbar navbar-default">
	<ul>
<li role="presentation" class="active"><a href="#">援�뼱</a></li>
  <li role="presentation"><a href="#">�섑븰</a></li>
  <li role="presentation"><a href="#">�곸뼱</a></li>
  <li role="presentation"><a href="#">�ы쉶</a></li>
  <li role="presentation"><a href="#">怨쇳븰</a></li>
  <li role="presentation"><a href="#">湲고�</a></li>
</ul>
</nav> -->

<center>
<table width="400" border="0" >
	<tr>
		<td id="top_subject">援�뼱</td>
		<td id="top_subject">�섑븰</td>
		<td id="top_subject">�곸뼱</td>
		<td id="top_subject">�ы쉶</td>
		<td id="top_subject">怨쇳븰</td>
		<td id="top_subject">湲고�</td>
	</tr>
</table>
<div>
<h3>媛쒖꽕���숈뒿吏�紐⑸줉
	
<button id="button"><a href="<?=dest_url("./paper_make1.php", $page )?>"> <font color="white">WRITE</font> </a></button>
</h3>
</div>
</center>

			<!-- <table>
				<tr>
					<td colspan="5">珥앷쾶�쒕Ъ:<?=$total_rows?></td>
				</tr>
			</table> -->
			<center>
			<table nowrap>

				<?PHP
				#----------�곗씠�곕쿋�댁뒪�먯꽌 紐⑸줉��異붿텧----------#
				$query = "select uid, gid, depth, name, subject, writedate, refnum from board
				$where order by gid desc, depth asc limit $start_now, $rows_page";
				$result = mysql_query( $query ) or die (mysql_error());
				while ( $row = mysql_fetch_array( $result ))
				{
					list( $uid, $gid, $depth, $name, $subject, $writedate, $refnum, $mail ) = $row;

					#----------HTML �뱀닔 臾몄옄 泥섎━----------#
					$subject = htmlspecialchars( $subject );

					#----------�쒕ぉ��湲몄씠 �쒗븳----------#
					if (strlen ($subject) > $row_length )
						$subject = substr( $subject, 0,  $row_length )."...";

					?>

					<table bordercolor="#D4D4D4" border="1"  cellpadding="10" cellspacing="10">
						<tr>
							<td align="center">
								<div class="row">
									<div class="col-xs-6 col-md-3">
										<a href="#" class="thumbnail">
											<img src="images/waschool.png" alt="images/waschool.png">
										</a>
									</div>
							</td>
						</tr>
						<tr>
							<td align="center">
											<ul>
						<li width="150">
							<a href="count_ref.php?page=<?=$page?>&uid=<?=$uid?>"><?=$subject?></li>
						<li width="150"><?=$name?></li>
						<li>
						</li>
					</ul>
				</td>
				</tr>
				<tr>
					<td align="center">
						<button id="button"> <font color="white">��린</font> </button>
							<button id="button"> <font color="white">�섏젙</font> </button>
							<button id="button"> <font color="white">��젣</font> </button>
					</td>
				</tr>
											
					</table>

					<?PHP
				}
				?>

				</table>
				<table>
					<tr>
						<td width="100" align="left">

							<?PHP
							#----------�댁쟾�섏씠吏�議댁옱��留곹겕----------#
							if($pre_page)
								echo("<a href=\"".dest_url("./paper_list.php", $pre_page)."\">[�댁쟾]</a>" );

							#----------�ㅼ쓬�섏씠吏�議댁옱��留곹겕----------#
							if($next_page)
								echo("<a href=\"".dest_url("./paper_list.php", $next_page)."\">[�ㅼ쓬]</a>" );
							?>

						</td>
						<td align="center">&nbsp;

							<?PHP
							#----------�댁쟾 �섏씠吏�뱾��留곹겕----------#
							if( $start_page > 1 )
								echo("<a href=\"".dest_url("./paper_list.php", $start_page - 1)."\">[pre]</a>");
								#----------諛붾줈 �대룞�섎뒗 �섏씠吏�� �섏뿴----------#
								for( $dest_page = $start_page; $dest_page <= $end_page; $dest_page++)
								if ($dest_page != $page)
								echo("<a href=\"".dest_url( "./paper_list.php", $dest_page)."\">[$dest_page]</a>");
								else
								echo("&nbsp;$dest_page&nbsp");
								#----------�ㅼ쓬 �섏씠吏�뱾��留곹겕----------#
								if($end_page < $total_pages)
								echo("<a href=\"".dest_url( "./paper_list.php", $end_page + 1)."\">[next]</a>");
								?>
								</td>
								<td width="100" align="right">
								<!-- <a href="./paper_list.php">紐⑸줉</a> -->
								</td>
								</tr>
				</table>
				<table>
				<form name="search_from" method="post" action="./paper_list.php?">
					<tr align="center">
						<td>
							<select name="kind">
								<option value="subject"><? if($kind == "subject") echo("selected");?>湲�젣紐�
								</option>
								<option value="article"><? if($kind == "article") echo("selected");?>�댁슜
								</option>
								<option value="name"><? if($kind == "name") echo("selected");?>�대쫫
								</option>
							</select>
							<input type="text" name="key" value="<?=$key?>" size="20" maxlength="30">
							<input type="submit" value="李얘린">
							<!-- ' �닿� ��湲�' 踰꾪듉 留뚮뱾�댁빞 �섎뒗��-->
						</td>
					</tr>
				</form>
			</table>
			<table>
											<form name="form2">
								<p><img src="images/hone.png" width="48" height="46" border="0" alt="hone.png"> <img src="images/messasge.png" width="51" height="46"
				border="0" alt="messasge.png"> <img src="images/mypage.png" width="49" height="50" border="0" alt="mypage.png"> <img src="images/mileage.png"
				width="50" height="50" border="0" alt="mileage.png"> <img
				src="images/gift.png" width="49" height="50" border="0" alt="gift.png">
			</p>
		</form>
			</table>
		</center>
	</body>
	</html> 