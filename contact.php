<?php 
	session_start();
	$error = array();
	if ( $_SERVER['REQUEST_METHOD'] === 'POST' ) {
		$post = filter_input_array( INPUT_POST, $_POST );

		// フォームの送信時にエラーをチェックする
		if ( $post['content'] === null ) {
			$error['content'] = 'blank';
		}
		if ( $post['name'] === '' ) {
			$error['name'] = 'blank';
		}
		if ( $post['tel'] === '' ) {
			$error['tel'] = 'blank';
		}
		if ( $post['email'] === '' ) {
			$error['email'] = 'blank';
		} elseif ( ! filter_var( $post['email'], FILTER_VALIDATE_EMAIL ) ) {
			/** JavaScript出力開始 */
			// エラーをアラート
			echo "<script type='text/javascript'>alert('メールアドレスを正しく入力して下さい');</script>";
			/** JavaScript出力終了 */
		}
		if ( $post['other'] === '' ) {
			$error['other'] = 'blank';
		}
		if ( count( $error ) === 0 ) {
			// メールを受け取る
			$array = [
				"document"=>"資料請求",
				"call"=>"お電話でのご相談を希望",
				"enter"=>"申し込み"
			];
			$content = $array[$post['content']];
			$to      = 'badsketball07@gmail.com';
			$from    = $post['email'];
			$subject = 'お問い合わせが届きました';
			$body    = <<<EOT
			お問い合わせ内容：{$content}
			担当者名：{$post['name']}
			電話番号：{$post['tel']}
			メールアドレス：{$post['email']}
			その他：
			{$post['other']}


			問い合わせページからの送信
			EOT;
			$header="From:{$from}";

			mb_send_mail($to,$subject,$body,$header);
			
			// セッションを消してお礼画面へ
			unset($_SESSION['form']);
			header('Location:thanks.html');
			exit();
		} else {
			/** JavaScript出力開始 */
			// エラーをアラート
			echo "<script type='text/javascript'>alert('項目を全て入力して下さい');</script>";
			/** JavaScript出力終了 */
		}
	} else {
		if ( isset( $_SESSION['form'] ) ) {
			$post = $_SESSION['form'];
		}
	}
?>
<?php 
	$title = "Contact Page";
	$description = "問い合わせページです";
	$is_home = false;
	include 'common-parts/head.php'; // head.php の読み込み
?>
	<main>
		<!-- contact-top -->
		<div class="l-top l-contact-top">
			<h1 class="c-heading-sub c-contact-heading">Contact</h1>
			<p class="c-heading-shadow c-heading-shadow--contact c-contact-heading-shadow">Contact us</p>
		</div>

		<!-- contact-form -->
		<div class="l-contact-form">
			<form action="" class="p-form" method="POST">
				<div class="c-form-row">
					<p class="c-form-ttl">お問い合わせ内容</p>
					<input id="document" type="radio" name="content" value="document"><label class="c-radio-label" for="document">資料請求</label>
					<input id="call" type="radio" name="content" value="call"><label class="c-radio-label" for="call">お電話でのご相談を希望</label>
					<input id="enter" type="radio" name="content" value="enter"><label class="c-radio-label" for="enter">申込</label>
				</div>
				<div class="c-form-row">
					<p class="c-form-ttl">担当者名</p>
					<input type="text" name="name">
				</div>
				<div class="c-form-row">
					<p class="c-form-ttl">電話番号</p>
					<input type="text" name="tel">
				</div>
				<div class="c-form-row">
					<p class="c-form-ttl">メールアドレス</p>
					<input type="email" name="email">
				</div>
				<div class="c-form-row">
					<p class="c-form-ttl">その他</p>
					<textarea name="other"></textarea>
				</div>
				<div class="c-btn-wrapper c-contact-btn-wrapper">		
					<button class="c-btn c-btn--yellow c-btn--submit">
						Submit
					</button>
				</div>
			</form>
		</div>
	</main>
	<?php include 'common-parts/footer.php'; ?>
</body>
</html>