<!DOCTYPE html>
<html>
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="description" content="Deskripsi Blog">
<meta name="author" content="Judul Blog">

<!-- Twitter Card -->
<meta name="twitter:card" content="summary">
<meta name="twitter:site" content="omfgitsasalmon">
<meta name="twitter:title" content="Burden Blog">
<meta name="twitter:description" content="Deskripsi Blog">
<meta name="twitter:creator" content="Burden Blog">
<meta name="twitter:image:src" content="{{! TODO: ADD GRAVATAR URL HERE }}">

<meta property="og:type" content="article">
<meta property="og:title" content="Burden Blog">
<meta property="og:description" content="Deskripsi Blog">
<meta property="og:image" content="{{! TODO: ADD GRAVATAR URL HERE }}">
<meta property="og:site_name" content="Burden Blog">

<link rel="stylesheet" type="text/css" href="assets/css/screen.css" />
<link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">

<!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<title>Burden Blog</title>
</head>

<body class="default">
<div class="wrapper">

<nav class="nav">
    <a style="border:none;" id="logo" href="index.php"><h1>Burden<span>-</span>Blog</h1></a>
    <ul class="nav-primary">
        <li><a href="new_post.php">+ Tambah Post</a></li>
    </ul>
</nav>

<div id="home">
    <div class="posts">
        <nav class="art-list">
          <ul class="art-list-body">
			<?php
			// index.php
			include 'mysql.php';
			$result = mysql_safe_query('SELECT * FROM posts ORDER BY date DESC');
			?>
			<?php if(!mysql_num_rows($result)) {
				echo 'No posts yet.';
			} else {
				while($row = mysql_fetch_assoc($result)) { ?>
					<li class="art-list-item">
					<div class="art-list-item-title-and-time">
						<h2 class="art-list-title"><?php echo '<a href="post.php?id='.$row['id'].'">'.$row['title'].'</a>'; ?>
						<div class="art-list-time"><?php echo ''.$row['date'].''; ?></div>
						<div class="art-list-time"><span style="color:#F40034;">&#10029;</span> Featured</div>
					</div>
					<p><?php $body = substr($row['body'], 0, 100);
					echo nl2br($body);
					if (strlen($row['body']) > 100) {
						echo '... <a href="post.php?id='.$row['id'].'">Read More</a><br/>';
					}
					?></p>
					<p>
					  <?php echo '<a href="edit_post.php?id='.$row['id'].'">Edit</a>' ?> | <?php echo '<a href="javascript:confirmPostDelete('.$row['id'].')">Hapus</a>'; ?>
					</p>
				</li>
				<?php }
			} ?>
          </ul>
        </nav>
    </div>
</div>

<footer class="footer">
    <div class="back-to-top"><a href="">Back to top</a></div>
    <!-- <div class="footer-nav"><p></p></div> -->
    <div class="psi">&Psi;</div>
    <aside class="offsite-links">
        Asisten IF3110 /
        <a class="rss-link" href="#rss">RSS</a> /
        <br>
        <a class="twitter-link" href="http://twitter.com/YoGiiSinaga">Yogi</a> /
        <a class="twitter-link" href="http://twitter.com/sonnylazuardi">Sonny</a> /
        <a class="twitter-link" href="http://twitter.com/fathanpranaya">Fathan</a> /
        <br>
        <a class="twitter-link" href="#">Renusa</a> /
        <a class="twitter-link" href="#">Kelvin</a> /
        <a class="twitter-link" href="#">Yanuar</a> /
        
    </aside>
</footer>

</div>

<script type="text/javascript" src="assets/js/fittext.js"></script>
<script type="text/javascript" src="assets/js/app.js"></script>
<script type="text/javascript" src="assets/js/respond.min.js"></script>

<script type="text/javascript">
	function confirmPostDelete(id) {
		var r=confirm("Do You Really want to Refund money! Press ok to Continue ");
		if (r == true) {
			return (window.location = "delete_post.php?id=" + id);
		}
		else {
			return;
		}
	}
</script>
</body>
</html>