<?php
/**
 * Functions
 */

function my_setup() {
	add_theme_support( 'post-thumbnails' ); /* アイキャッチ */
	add_theme_support( 'automatic-feed-links' ); /* RSSフィード */
	add_theme_support( 'title-tag' ); /* タイトルタグ自動生成 */
	add_theme_support(
		'html5',
		array( /* HTML5のタグで出力 */
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		)
	);
	global $top;
	$top = esc_url(home_url('/'));

	global $company;
  $company = esc_url(home_url( '/company' ));

	global $works;
  $works = esc_url(home_url( '/works' ));

	global $recruit;
  $recruit = esc_url(home_url( '/recruit' ));

	global $contact;
  $contact = esc_url(home_url( '/contact' ));
}
add_action( 'after_setup_theme', 'my_setup' );


///// CSSとJavaScriptの読み込み /////
function my_script_init() { // my_script_init 関数の定義

	// swiper-css スタイルシートを追加し、外部のCDNから読み込む
	wp_enqueue_style('swiper-css', '//cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css', array(), '11', 'all');

	// 外部のGoogle Fontsからフォントを読み込む
	wp_enqueue_style( 'google-fonts', '//fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300;400;500;600;700&display=swap', array(), null );
	
	// style-css スタイルシートを追加し、テーマディレクトリ内のCSSファイルを読み込む
	wp_enqueue_style( 'style-css', get_template_directory_uri() . '/dist/assets/css/style.css', array(), '1.0.1', 'all' );
	
	// jQuery ライブラリを追加し、外部のCDNから読み込む
	wp_enqueue_script('jquery', '//code.jquery.com/jquery-3.6.0.js', array(), '3.6.0', true );
	
	// swiper-js JavaScriptファイルを追加し、外部のCDNから読み込む/ 依存関係として 'jquery' を指定
	wp_enqueue_script('swiper-js', '//cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array('jquery'), '11', true);
	
	// script-js JavaScriptファイルを追加し、テーマディレクトリ内のJSファイルを読み込む// 依存関係として 'jquery' を指定
	wp_enqueue_script( 'script-js', get_template_directory_uri() . '/dist/assets/js/script.js', array( 'jquery' ), '1.0.1', true );
}
// 'wp_enqueue_scripts' アクションに 'my_script_init' 関数をフック
add_action('wp_enqueue_scripts', 'my_script_init');


///// ページの表示速度 /////
function add_defer( $tag ) { // 'add_defer' 関数の定義
	// 管理画面であれば何もせず、元のタグをそのまま返す
	if (is_admin()){
		return $tag; 
	}
	// タグ内に 'jquery.js' が含まれている場合も何もせず、元のタグをそのまま返す
	if ( strpos( $tag, 'jquery.js' ) ){
		return $tag;
	}
	// タグ内の 'src' を 'defer src' に置換し、スクリプトを遅延読み込みに変更
	return str_replace( 'src', 'defer src', $tag );
}
// 'script_loader_tag' フィルターに 'add_defer' 関数をフック
add_filter( 'script_loader_tag', 'add_defer', 10 );


///// 記事の抜粋（excerpt）の文字数を制限 /////
function my_excerpt_length( $length ) {
	return 80;
}
add_filter( 'excerpt_length', 'my_excerpt_length', 999 );


///// 抜粋文の省略記法の変更 /////
function my_excerpt_more( $more ) {
	return '...';
}
add_filter( 'excerpt_more', 'my_excerpt_more' );


///// 特定の投稿タイプや分類ページにおいて、表示する投稿数を制御 /////
function change_set_works($query) { // 'change_set_works' 関数の定義
	// メインクエリでかつ 'works' カスタム投稿タイプのアーカイブページまたは 'works_category' カスタム分類のタームページの場合
	if ((is_post_type_archive('works') || is_tax('works_category')) && $query->is_main_query()) {
		$query->set('posts_per_page', 12); // 投稿数を12件に設定。必要に応じて変更してください。
	}
}
// 'pre_get_posts' アクションに 'change_set_works' 関数をフック
add_action('pre_get_posts', 'change_set_works');


///// pタグの除去 /////
remove_filter('the_content', 'wpautop');


///// Contact Form 7の自動pタグ無効 /////
add_filter('wpcf7_autop_or_not', 'wpcf7_autop_return_false');
function wpcf7_autop_return_false() {
	return false;
}


///// ContactForm7のメールアドレスの再入力チェック /////
function wpcf7_email_validation_filter( $result, $tag ) {
  $type = $tag['type'];  // フィールドのタイプを取得
  $name = $tag['name'];  // フィールドの名前を取得

  // フォームから送信されたデータを整形（余分なスペースや改行を削除）
  $_POST[$name] = trim( strtr( (string) $_POST[$name], "\n", " " ) );

  // フィールドのタイプが 'email' または 'email*' の場合に以下のコードを実行
  if ( 'email' == $type || 'email*' == $type ) {

    // フィールドの名前が「_confirm」で終わる場合に以下のコードを実行
    if (preg_match('/(.*)_confirm$/', $name, $matches)){
      $target_name = $matches[1];  // 元のメールアドレスフィールドの名前を取得

      // 元のメールアドレスフィールドと確認用フィールドの値が一致しない場合にエラーメッセージを生成
      if ($_POST[$name] != $_POST[$target_name]) {
				
        // バリデーション結果オブジェクトに 'invalidate' メソッドが存在するか確認
        if (method_exists($result, 'invalidate')) {
          $result->invalidate( $tag, "確認用のメールアドレスが一致していません" );
        } else {
          // 'invalidate' メソッドが存在しない場合、バリデーション結果を無効にし、エラーメッセージを設定
          $result['valid'] = false;
          $result['reason'][$name] = '確認用のメールアドレスが一致していません';
        }
      }
    }
  }
  return $result;  // 変更されたバリデーション結果オブジェクトを返す
}


///// メールアドレスの再確認のフィルター関数をフィルターフックに追加 /////
add_filter( 'wpcf7_validate_email', 'wpcf7_email_validation_filter', 11, 2 );
add_filter( 'wpcf7_validate_email*', 'wpcf7_email_validation_filter', 11, 2 );


/////// ContactForm7の電話番号の再入力チェック ///////
function wpcf7_tel_validation_filter( $result, $tag ) {
  $type = $tag['type'];  // フィールドのタイプを取得
  $name = $tag['name'];  // フィールドの名前を取得

  // フォームから送信されたデータを整形（余分なスペースや改行を削除）
  $_POST[$name] = trim( strtr( (string) $_POST[$name], "\n", " " ) );

  // フィールドのタイプが 'tel' の場合に以下のコードを実行
  if ( 'tel' == $type || 'tel*' == $type ) {

    // フィールドの名前が「_confirm」で終わる場合に以下のコードを実行
    if (preg_match('/(.*)_confirm$/', $name, $matches)){
      $target_name = $matches[1];  // 元の電話番号フィールドの名前を取得

      // 元の電話番号フィールドと確認用フィールドの値が一致しない場合にエラーメッセージを生成
      if ($_POST[$name] != $_POST[$target_name]) {
				
        // バリデーション結果オブジェクトに 'invalidate' メソッドが存在するか確認
        if (method_exists($result, 'invalidate')) {
          $result->invalidate( $tag, "確認用の電話番号が一致していません" );
        } else {
          // 'invalidate' メソッドが存在しない場合、バリデーション結果を無効にし、エラーメッセージを設定
          $result['valid'] = false;
          $result['reason'][$name] = '確認用の電話番号が一致していません';
        }
      }
    }
  }
  return $result;  // 変更されたバリデーション結果オブジェクトを返す
}


///// 電話番号の再確認のフィルター関数をフィルターフックに追加 /////
add_filter( 'wpcf7_validate_tel', 'wpcf7_tel_validation_filter', 11, 2 );
add_filter( 'wpcf7_validate_tel*', 'wpcf7_tel_validation_filter', 11, 2 );


///// WordPress管理画面の「投稿」を任意の名前に変更する方法 /////
function Change_menulabel() {
	global $menu;
	global $submenu;
	$name = '実績';
	$menu[5][0] = $name;
	$submenu['edit.php'][5][0] = $name.'一覧';
	$submenu['edit.php'][10][0] = '新規追加';
}
function Change_objectlabel() {
	global $wp_post_types;
	$name = '実績';
	$labels = &$wp_post_types['post']->labels;
	$labels->name = $name;
	$labels->singular_name = $name;
	$labels->add_new = _x('追加', $name);
	$labels->add_new_item = $name.'の新規追加';
	$labels->edit_item = $name.'の編集';
	$labels->new_item = '新規'.$name;
	$labels->view_item = $name.'を表示';
	$labels->search_items = $name.'を検索';
	$labels->not_found = $name.'が見つかりませんでした';
	$labels->not_found_in_trash = 'ゴミ箱に'.$name.'は見つかりませんでした';
}
add_action( 'init', 'Change_objectlabel' );
add_action( 'admin_menu', 'Change_menulabel' );



///// WPのバージョンを非表示 /////
remove_action('wp_head', 'wp_generator');