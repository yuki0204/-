<?php 
	// キャッシュクリア対策（ファイル更新日時をクエリに渡す）
	// 置換用の関数
	function ag2add_query($path){
		if(file_exists($path)){
			$new_path = $path.'?'.date('YmdHis', filemtime($path));
			return $new_path;
		}
	}
?>
<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">

	<title><?php echo $title; ?></title>
	<meta name="description" content="<?php echo $description; ?>">
	<meta name="keywords" content="">
	<meta property="og:title" content="" />
	<meta property="og:description" content="" />
	<meta property="og:type" content="" />
	<meta property="og:url" content="" />
	<meta property="og:image" content="" />
	<meta property="og:site_name" content="" />
	<meta property="og:locale" content="" />
	<link rel="icon" href="favicon.ico">

	<!-- FontAwesome 読み込み -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">

	<!-- メディアクエリ 読み込み -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- js 読み込み -->
	<script src="https://cdn.jsdelivr.net/npm/jquery@3/dist/jquery.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="./slick/slick.min.js"></script>
	<script type="text/javascript" src="<?php echo ag2add_query('js/query.js'); ?>"></script>

	<!-- css 読み込み -->
	<link rel="stylesheet" href="./css/reset.css">
	<!-- slick CDN読み込み -->
	<link rel="stylesheet" href="./slick/slick-theme.css">
	<link rel="stylesheet" href="./slick/slick.css">
	<link rel="stylesheet" href="<?php echo ag2add_query('css/style.css'); ?>">
	<link rel="stylesheet" href="<?php echo ag2add_query('css/sp.css'); ?>">

	<!-- Noto Selif 読み込み -->
	<link href="https://fonts.googleapis.com/css?family=Noto+Serif+JP:200,300,400,500,600,700,900&display=swap" rel="stylesheet">
</head>

<body>
	<!-- header -->
	<header class="l-header p-header">
		<div class="l-container c-header-container">
			<div class="c-header-left">
				<!-- トップページへの遷移リンク -->
				<a href="<?php echo $is_home ? "#":"index.php"; ?>" class="c-logo">Cresta Design</a>
			</div>
			<nav class="c-header-right">
				<ul class="c-header-menu">
					<li class="c-header-menu__item">
						<a class="c-header-menu__link" href="<?php echo $is_home ? "#concept":"index.php#concept"; ?>">
							Concept
						</a>
					</li>
					<li class="c-header-menu__item">
						<a class="c-header-menu__link" href="<?php echo $is_home ? "#service":"index.php#service"; ?>">
							Service
						</a>
					</li>
					<li class="c-header-menu__item">
						<a class="c-header-menu__link" href="<?php echo $is_home ? "#works":"index.php#works"; ?>">
							Works
						</a>
					</li>
					<li class="c-header-menu__item">
						<a class="c-header-menu__link" href="<?php echo $is_home ? "#contact":"index.php#contact"; ?>">
							Contact
						</a>
					</li>
				</ul>
			</nav>

			<!-- drawer -->
			<div id="drawer-toggle" class="c-drawer-toggle">
				<span></span>
				<span></span>
				<span></span>
			</div>
		</div>
	</header>
