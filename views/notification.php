<?php
// 設定関連を読み込む
include_once('../config.php');
// 便利な関数を読み込む
include_once('../util.php');

 //ツィート一覧


    $view_tweets = [
        [
            'user_id' => 1,
            'user_name' => 'taro',
            'user_nickname' => '太郎',
            'user_image_name' => 'sample-person.jpg',
            'tweet_body' => '今プログラミングをしています。',
            'tweet_image_name' => null,
            'tweet_created_at' => '2021-11-22 14:00:00',
            'like_id' => null,
            'like_count' => 0,
        ],
        [
            'user_id' => 2,
            'user_name' => 'jiro',
            'user_nickname' => '次郎',
            'user_image_name' => null,
            'tweet_body' => 'コワーキングスペースをオープンしました！',
            'tweet_image_name' => 'sample-post.jpg',
            'tweet_created_at' => '2021-03-14 14:00:00',
            'like_id' => 1,
            'like_count' => 1,
        ]
];

?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <?php include_once('../views/common/head.php');?>
    <title>通知画面 / Twitterクローン</title>
    <meta name="description" content="通知画面です">
</head>

<body class="home notification text-center">
    <div class="container">
    <?php include_once('../views/common/side.php');?>
        <div class="main">
            <div class="main-hedder">
                <h1>通知</h1>
            </div>

            <!--仕切りエリア-->
            <div class="ditch"></div>

            <!--通知一覧エリア-->
            <div class="notification-list">
                <?php if(isset($_GET['case'])):?>
                    <p class="no-result">通知はまだありません。</p>
                <?php else:?>
                    <div class="notification-item">
                        <div class="user">
                            <img src="<?php echo HOME_URL;?>/views/img_uploaded/user/sample-person.jpg" alt="">
                        </div>
                        <div class="content">
                            <p>いいね！されました。</p>
                        </div>
                    </div>

                    <div class="notification-item">
                        <div class="user">
                            <img src="<?php echo HOME_URL;?>/views/img_uploaded/user/sample-person.jpg" alt="">
                        </div>
                        <div class="content">
                            <p>フォローされました。</p>
                        </div>
                    </div>
                <?php endif;?>
            </div>
        </div>
    </div>
    <?php include_once('../views/common/foot.php');?>
</body>

</html>