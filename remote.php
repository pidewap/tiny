	<body>
		<form method="post">
			<input name="url"size="50" />
			<input name="submit" type="submit" />
		</form>
		 <?php
		   set_time_limit (24 * 60 * 60);
		if (!isset($_POST['submit'])) die();
		//$destination_folder = 'download/';
		$url = $_POST['url'];
		$newFile = basename($url);
		$file = fopen ($url, "rb");
		if ($file) {
		  $newf = fopen ($newFile, "wb");
		  if ($newf)
		  while(!feof($file)) {
			fwrite($newf, fread($file, 1024 * 8 ), 1024 * 8 );
		  }
		}
		if ($file) {
		  fclose($file);
		}
		if ($newf) {
		  fclose($newf);
		}
		?>
	</body>
