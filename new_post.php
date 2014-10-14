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
<meta name="twitter:title" content="Simple Blog">
<meta name="twitter:description" content="Deskripsi Blog">
<meta name="twitter:creator" content="Simple Blog">
<meta name="twitter:image:src" content="{{! TODO: ADD GRAVATAR URL HERE }}">

<meta property="og:type" content="article">
<meta property="og:title" content="Simple Blog">
<meta property="og:description" content="Deskripsi Blog">
<meta property="og:image" content="{{! TODO: ADD GRAVATAR URL HERE }}">
<meta property="og:site_name" content="Simple Blog">

<link rel="stylesheet" type="text/css" href="assets/css/screen.css" />
<link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">

<!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<title>Burden Blog | Tambah Post</title>


</head>

<?php
// post_add.php
date_default_timezone_set('Asia/Jakarta');
if(!empty($_POST)) {
	include 'mysql.php';
	if (echo '<script>', 'valiDate($_POST['date'])' , '</script>') {		
		if(!mysql_safe_query('INSERT INTO posts (title,body,date) VALUES (%s,%s,%s)', $_POST['title'], $_POST['body'], $_POST['date'])
			echo mysql_error();
		else
			redirect('index.php');
	}
}
?>

<body class="default">
<div class="wrapper">

<nav class="nav">
    <a style="border:none;" id="logo" href="index.php"><h1>Burden<span>-</span>Blog</h1></a>
    <ul class="nav-primary">
        <li><a href="new_post.php">+ Tambah Post</a></li>
    </ul>
</nav>

<article class="art simple post">
    <h2 class="art-title" style="margin-bottom:40px">-</h2>
    <div class="art-body">
        <div class="art-body-inner">
            <h2>Tambah Post</h2>
            <div id="contact-area">
                <form method="post" action="">
                    <label for="Judul">Judul:</label>
                    <input type="text" name="title" id="title">

                    <label for="Tanggal">Tanggal:</label>
                    <input type="text" name="date" id="date">
                    
                    <label for="Konten">Konten:</label><br>
                    <textarea name="body" rows="20" cols="20" id="body"></textarea>

                    <input type="submit" name="Simpan" value="Simpan" class="submit-button">
                </form>
            </div>
        </div>
    </div>
</article>

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
<script type="text/javascript" src="assets/js/post.js"></script>

</body>
</html>