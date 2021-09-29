<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、インストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さずにこのファイルを "wp-config.php" という名前でコピーして
 * 直接編集して値を入力してもかまいません。
 *
 * このファイルは、以下の設定を含みます。
 *
 * * MySQL 設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link https://ja.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.osdn.jp/%E7%94%A8%E8%AA%9E%E9%9B%86#.E3.83.86.E3.82.AD.E3.82.B9.E3.83.88.E3.82.A8.E3.83.87.E3.82.A3.E3.82.BF 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define( 'DB_NAME', 'wordpress-mysite' );

/** MySQL データベースのユーザー名 */
define( 'DB_USER', 'root' );

/** MySQL データベースのパスワード */
define( 'DB_PASSWORD', 'ayesuyeewin178' );

/** MySQL のホスト名 */
define( 'DB_HOST', '' );

/** データベースのテーブルを作成する際のデータベースの文字セット */
define( 'DB_CHARSET', 'utf8mb4' );

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define( 'DB_COLLATE', '' );

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'FHg${pIA=M0r^/>r}F&zL*_5ns-`lrU}kNUa2hA!KP{zBBJB6Q~U,^jdZAcwOyut' );
define( 'SECURE_AUTH_KEY',  'F%CUnI7!v5B5`Q+n|yH/-EPUPh1t{cI$/Q*H:,2Snr{m5D;.3n4}BgG5FK:.TZ.s' );
define( 'LOGGED_IN_KEY',    'odr|xS6oj+DFS7.&_(c91-d<hlK{9}Kc2w!f@0;GtL^uP=iwXS c&qTwoZsuq{7P' );
define( 'NONCE_KEY',        '9{ipr @`>g~&)?.gvqq-flbA<`X@@Y]M!6LC: 3qJY*<}C}[HbGeW`x<jaiq):hG' );
define( 'AUTH_SALT',        '%e=JW^~V2GV^E0pNcMKi&W3nBmA=XJVcTw}z{z$-+Inz/dsguZ$p=7-q&CV]]U)x' );
define( 'SECURE_AUTH_SALT', '5vtZA,$4Fa=R>MA.q{SNtfV&~t62-Rq1}U.&2mb#SFn|k(~XHy/29PK=wZF7!PJ9' );
define( 'LOGGED_IN_SALT',   'o]m!|=K2%5AiX/#R4s]e}<#6x8C7&5R{*:b2iGt!Cfe[ {{U#YyKYxl[nD7^O(FI' );
define( 'NONCE_SALT',       'D36[`D7CSOerN&p:nHzBO1|Yk]p-T1IoJdYWm&_AKzja1cg@P/vRTg?IfP6>5v&M' );

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix = 'wp_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数についてはドキュメンテーションをご覧ください。
 *
 * @link https://ja.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* 編集が必要なのはここまでです ! WordPress でのパブリッシングをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
