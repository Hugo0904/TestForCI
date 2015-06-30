<?php
defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Welcome to CodeIgniter</title>

<style type="text/css">
::selection {
	background-color: #E13300;
	color: white;
}

::-moz-selection {
	background-color: #E13300;
	color: white;
}

body {
	background-color: #fff;
	margin: 40px;
	font: 13px/20px normal Helvetica, Arial, sans-serif;
	color: #4F5155;
}

a {
	color: #003399;
	background-color: transparent;
	font-weight: normal;
}

h1 {
	color: #444;
	background-color: transparent;
	border-bottom: 1px solid #D0D0D0;
	font-size: 19px;
	font-weight: normal;
	margin: 0 0 14px 0;
	padding: 14px 15px 10px 15px;
}

code {
	font-family: Consolas, Monaco, Courier New, Courier, monospace;
	font-size: 12px;
	background-color: #f9f9f9;
	border: 1px solid #D0D0D0;
	color: #002166;
	display: block;
	margin: 14px 0 14px 0;
	padding: 12px 10px 12px 10px;
}

#body {
	margin: 0 15px 0 15px;
}

p.footer {
	text-align: right;
	font-size: 11px;
	border-top: 1px solid #D0D0D0;
	line-height: 32px;
	padding: 0 10px 0 10px;
	margin: 20px 0 0 0;
}

#container {
	margin: 10px;
	border: 1px solid #D0D0D0;
	box-shadow: 0 0 8px #D0D0D0;
}
</style>
</head>
<body>

	<div id="container" align=center>
		<h1>Welcome to CodeIgniter!</h1>

		<div id="body">
			<?php
			switch ($mode) {
				case 1 :
					$_result = "登入失敗";
					if ($result == 1) {
						$_result = "登入成功";
					}
					echo "<h1>" . $_result . "</h1>";

					if ($_result == "登入成功") {
						echo "<meta http-equiv=REFRESH CONTENT=1;url=" . site_url () . "/Welcome/user>";
					} else {
						echo "<meta http-equiv=REFRESH CONTENT=1;url=" . site_url () . "/Welcome>";
					}
					break;
				case 2 :
					echo '<h1>新增成功，即將跳轉</h1>';
					echo "<meta http-equiv=REFRESH CONTENT=1;url=" . site_url () . "/Welcome>";
					break;
				case 3 :
					echo '<h1>新增失敗!</h1>';
					echo "<meta http-equiv=REFRESH CONTENT=1;url=" . site_url () . "/Welcome/register>";
					break;
				case 4 :
					echo '<h1>資料請填寫確實!</h1>';
					echo "<meta http-equiv=REFRESH CONTENT=1;url=" . site_url () . "/Welcome/register>";
					break;
				case 5 :
					echo '<h1>修改成功!</h1>';
					echo "<meta http-equiv=REFRESH CONTENT=1;url=" . site_url () . "/Welcome/user>";
					break;
				case 6 :
					echo '<h1>修改失敗!</h1>';
					echo "<meta http-equiv=REFRESH CONTENT=1;url=" . site_url () . "/Welcome/ReModify_Page>";
					break;
				case 7 :
					echo '<h1>登出成功!</h1>';
					echo "<meta http-equiv=REFRESH CONTENT=1;url=" . site_url () . "/Welcome>";
					break;
				case 8 :
					echo '<h1>刪除成功!</h1>';
					echo "<meta http-equiv=REFRESH CONTENT=1;url=" . site_url () . "/Query_Controller/Allmodify>";
					break;
				case 9 :
					echo '<h1>刪除失敗!</h1>';
					echo "<meta http-equiv=REFRESH CONTENT=1;url=" . site_url () . "/Welcome/ReDelete>";
					break;
				case 10 :
					echo '<h1>修改失敗!</h1>';
					echo "<meta http-equiv=REFRESH CONTENT=1;url=" . site_url () . "/Welcome/ReDelete>";
					break;
				case 11 :
					echo '<h1>帳號重複!</h1>';
					//echo "<meta http-equiv=REFRESH CONTENT=1;url=" . site_url () . "/Welcome/ReDelete>";
					break;
			}
			?>
		</div>
	</div>

</body>
</html>