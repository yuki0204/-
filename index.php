<?php 
	$title = "Top Page";
	$description = "トップページです";
	$is_home = true;
	include 'common-parts/head.php'; // head.php の読み込み
?>

	<main>
		<!-- top -->
		<div class="l-top">
			<ul class="c-slider">
				<!-- 背景画像を設定してスライド作成 -->
				<li>
					<div class="c-slider__item c-slider__item--1"></div>
				</li>
				<li>
					<div class="c-slider__item c-slider__item--2"></div>
				</li>
				<li>
					<div class="c-slider__item c-slider__item--3"></div>
				</li>
			</ul>
			<div class="c-heading-wrapper">
				<div class="l-container">
					<h1 class="c-heading-top">Design <span class="u-display-ib"> for Smile.</span></h1>
					<p class="c-heading-lead">快適なオフィスを<span class="u-display-ib">デザインする</span></p>
				</div>
			</div>
		</div>

		<!-- concept -->
		<section id="concept" class="l-concept c-section">
			<div class="l-container">
				<h2 class="c-heading-sub">CONCEPT</h2>
				<p class="c-concept-lead">
					“働きたくなる空間”を<span class="u-display-ib--sp-size">デザインする</span><span class="u-display-b--sp-size">ことで<span class="u-display-b--pc-size">人々を幸せにする。</span></span>
				</p>
				<div class="c-concept-content">
					<div class="c-concept-content__item c-concept-left">
						<p class="c-concept-text">
							私たちは、オフィスに特化した空間デザイン専門としております。
							その理由は、「働きたくなる空間で仕事ができれば多くの人を幸せにできるのではないか」と考えるためです。
							そんな想いの株式会社Cresta Designだからこそできる空間デザインを提供させていただきます。
						</p>
					</div>
					<div class="c-concept-content__item c-concept-right">
						<div class="c-concept-img-wrapper">
							<img src="./img/concept-image.png" alt="コンセプト画像" width="440" height="240">
						</div>
					</div>
				</div>
				<p class="c-heading-shadow">Our Concept</p>
			</div>
		</section>

		<!-- works -->
		<section id="works" class="l-works c-section">
			<div class="l-container">
				<h2 class="c-heading-sub">Works</h2>
				<div class="c-works-wrapper">
					<ul class="c-works-menu">
						<li class="c-works-menu__item">
							<div class="c-works-img-wrapper"><img src="./img/card-img-01.png" alt="ワークス画像１"
									width="320ox" height="200"></div>
							<p class="c-works-item-info">
								新規サイトを公開しました。今回のサイトは白と黒を基調にしたミニマルなデザインになっています。
							</p>
						</li>
						<li class="c-works-menu__item">
							<div class="c-works-img-wrapper"><img src="./img/card-img-02.png" alt="ワークス画像２"
									width="320ox" height="200"></div>
							<p class="c-works-item-info">
								新規サイトを公開しました。今回のサイトは白と黒を基調にしたミニマルなデザインになっています。
							</p>
						</li>
						<li class="c-works-menu__item">
							<div class="c-works-img-wrapper"><img src="./img/card-img-03.png" alt="ワークス画像３"
									width="320ox" height="200"></div>
							<p class="c-works-item-info">
								新規サイトを公開しました。今回のサイトは白と黒を基調にしたミニマルなデザインになっています。
							</p>
						</li>
					</ul>
					<div class="c-btn-wrapper">
						<a href="" class="c-btn c-btn--yellow">
							View more
						</a>
					</div>
				</div>
				<p class="c-heading-shadow">Our Works</p>
			</div>
		</section>

		<!-- service -->
		<section id="service" class="l-service c-section">
			<div class="l-container">
				<h2 class="c-heading-sub">Service</h2>
				<div class="c-service-wrapper">
					<ul class="c-service-menu">
						<li class="c-service-menu__item">
							<a href="">
								<div class="c-service-img-wrapper"><img src="./img/service-img-01.png" alt="サービス画像１"
										width="480" height="320"></div>
								<p class="c-service-item-title">
									Hearing
								</p>
							</a>
						</li>
						<li class="c-service-menu__item">
							<a href="">
								<div class="c-service-img-wrapper"><img src="./img/service-img-02.png" alt="サービス画像２"
										width="480" height="320"></div>
								<p class="c-service-item-title">
									Planning
								</p>
							</a>
						</li>
						<li class="c-service-menu__item">
							<a href="">
								<div class="c-service-img-wrapper"><img src="./img/service-img-03.png" alt="サービス画像３"
										width="480" height="320"></div>
								<p class="c-service-item-title">
									Direction
								</p>
							</a>
						</li>
					</ul>
				</div>
				<p class="c-heading-shadow">Our Service</p>
			</div>
		</section>

		<!-- contact -->
		<section id="contact" class="l-contact c-section">
			<div class="l-container">
				<h2 class="c-heading-sub">Contact</h2>
				<div class="contact-wrapper">
					<p class="c-contact-text">お気軽にご相談ください。</p>
					<div class="c-btn-wrapper">
						<a href="contact.php" class="c-btn c-btn--yellow">
							Contact
						</a>
					</div>
				</div>
				<p class="c-heading-shadow c-heading-shadow--contact">Contact us</p>
			</div>
		</section>
	</main>
	<?php include 'common-parts/footer.php'; ?>
</body>

</html>