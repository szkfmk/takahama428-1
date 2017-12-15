<?php
require_once dirname(__FILE__).'/php_libs/funcs.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/../cgi-bin/package/mail/Mailer.php';
use package\mail\Mailer;

// ログイン状態のチェック
$me = checkLogin();
if(!$me){
jump('login.php');
}

$conndb = new Conndb(_API_U);



// ユーザー情報を設定
$u = $conndb->getUserList($me['id']);
$username = $me['customername'];
$userkana = $me['customerruby'];
$email = $u[0]['email'];

//お届け先情報を再度取得
$deli = $conndb->getDeli($me['id']);
?>
	<!DOCTYPE html>
	<html lang="ja">

	<head prefix="og: //ogp.me/ns# fb: //ogp.me/ns/fb#  website: //ogp.me/ns/website#">
		<meta charset="UTF-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="Description" content="早い！Tシャツでオリジナルを作成するならタカハマへ！タカハマライフアートのログイン画面です。メールアドレスとパスワードを入れてください。マイページからご注文履歴などをご確認することができます。ログインにする為のパスワードをお忘れの方はこちら。">
		<meta name="keywords" content="オリジナル,tシャツ,メンバー">
		<meta property="og:title" content="世界最速！？オリジナルTシャツを当日仕上げ！！" />
		<meta property="og:type" content="article" />
		<meta property="og:description" content="業界No. 1短納期でオリジナルTシャツを1枚から作成します。通常でも3日で仕上げます。" />
		<meta property="og:url" content="https://www.takahama428.com/" />
		<meta property="og:site_name" content="オリジナルTシャツ屋｜タカハマライフアート" />
		<meta property="og:image" content="https://www.takahama428.com/common/img/header/Facebook_main.png" />
		<meta property="fb:app_id" content="1605142019732010" />
		<title>アカウント - TLAメンバーズ | タカハマライフアート</title>
		<link rel="shortcut icon" href="/icon/favicon.ico" />
		<?php include $_SERVER['DOCUMENT_ROOT']."/common/inc/css.php"; ?>
		<link rel="stylesheet" type="text/css" media="screen" href="./css/common.css" />
		<link rel="stylesheet" type="text/css" media="screen" href="./css/customer.css" />
		<style>
			.lightbox {
				display: none;
			}

		</style>

	</head>

	<body>
		<header>
			<?php include $_SERVER['DOCUMENT_ROOT']."/common/inc/header.php"; ?>
		</header>

		<div id="container">
			<div class="contents">
				<div class="toolbar">
					<div class="toolbar_inner clearfix">
						<div class="pagetitle">
							<h1 id="user_name">会員特典</h1>
						</div>
					</div>
				</div>

				<div class="user_rank">
					<div class="user_mark">
						<img src="/user_test/img/sp_customer_rank_bronze.png" class="rank_image" width="100%">
					</div>
					<div class="user_det">
						<div class="total_fee">合計金額から</div>
						<div class="off">3％OFF</div>
						<p class="costomer_rank"> お客様は<a href=""><span class="bodtxt">ブロンズ会員</span></a>です</p>
						<p>あと5,000円分のご購入でシルバー会員にランクアップ</p>
						<button class="btn add_btn" data-featherlight="#fl1">お得な会員特典を見る</button>
					</div>
				</div>
				<div class="lightbox" id="fl1">
					<div class="modal-content">
						<div class="modal_window">
							<h2>会員ランク特典一覧</h2>
							<div class="sq_bdr">
								<p class="min_img"><img src="./img/sp_customer_rank_gold.png" width="100%"></p>
								<div class="min_space">
									<h3 class="gold">ゴールド会員</h3>
									<p>ご注文金額から7%OFF！全て送料無料！</p>
									<p>ご購入金額、合計30万円以上のお客様限定！</p>
								</div>
							</div>
							<div class="bdrline"></div>
							<div class="sq_bdr">
								<p class="min_img"><img src="./img/sp_customer_rank_silver.png" width="100%"></p>
								<div class="min_space">
									<h3 class="silver">シルバー会員</h3>
									<p>ご注文金額から5%OFF！全て送料無料！</p>
									<p>ご購入金額、合計15万円以上のお客様限定！</p>
								</div>
							</div>
							<div class="bdrline"></div>
							<div class="sq_bdr">
								<p class="min_img"><img src="./img/sp_customer_rank_bronze.png" width="100%"></p>
								<div class="min_space">
									<h3 class="bronze">ブロンズ会員</h3>
									<p>ご注文金額から3%OFF！全て送料無料！</p>
									<p>ご購入金額、合計8万円以上のお客様限定！</p>
								</div>
							</div>
							<div class="bdrline"></div>
							<button class="featherlight-close-button featherlight-close" aria-label="Close">閉じる</button>
						</div>
					</div>
				</div>
				<table border="1" rules="rows" class="table table-bordered">
					<h2>会員情報</h2>
					<thead>
						<tr>
							<th scope="col" colspan="2">お客様情報</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<th>お客様番号</th>
							<td>K012345</td>
						</tr>
						<tr>
							<th>お名前</th>
							<td>高濱太郎</td>
						</tr>
						<tr>
							<th>フリガナ</th>
							<td>タカハマタロウ</td>
						</tr>
						<tr>
							<th>電話番号</th>
							<td>0356700787</td>
						</tr>
						<tr>
							<th>メールアドレス</th>
							<td>takahama.com</td>
						</tr>
						<tr>
							<th>パスワード</th>
							<td>＊＊＊＊＊＊＊＊</td>
						</tr>
					</tbody>
				</table>

				<table class="table table-bordered">
					<thead>
						<tr>
							<th scope="col" colspan="2">住所</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<th>〒郵便番号</th>
							<td>124-0024</td>
						</tr>
						<tr>
							<th>住所１（都道府県）</th>
							<td>東京都</td>
						</tr>
						<tr>
							<th>住所２（市区町村番地）</th>
							<td>葛飾区西新小岩3-14-26</td>
						</tr>
					</tbody>
				</table>
				<button type="button" class="btn_or btn"><a href="./account.php">編集する</a></button>
				<div class="transition_wrap d-flex justify-content-between align-items-center">
					<div class="step_prev hoverable waves-effect"><i class="fa fa-chevron-left mr-1"></i>戻る</div>
				</div>

			</div>
		</div>
		<footer class="page-footer">
			<?php include $_SERVER['DOCUMENT_ROOT']."/common/inc/footer.php"; ?>
		</footer>

		<?php include $_SERVER['DOCUMENT_ROOT']."/common/inc/util.php"; ?>

		<div id="overlay-mask" class="fade"></div>

		<?php include $_SERVER['DOCUMENT_ROOT']."/common/inc/js.php"; ?>
		<script src="//ajaxzip3.github.io/ajaxzip3.js" charset="utf-8"></script>
		<script type="text/javascript" src="./js/account.js"></script>
		<script src="./js/featherlight.min.js" type="text/javascript" charset="utf-8"></script>
	</body>

	</html>
