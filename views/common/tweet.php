<div class="tweet">
                    <div class="user">
                        <a href="profile.php?user_id=<?php echo htmlspecialchars($view_tweets['user_id']); ?>">
                            <img src="<?php echo buildImagePath($view_tweets['user_image_name'],'user'); ?>" alt="">
                        </a>
                    </div>
                    <div class="content">
                        <div class="name">
                            <a href="profile.php?user_id=<?php echo htmlspecialchars($view_tweets['user_id']); ?>">
                                <span class="nickname"><?php echo htmlspecialchars($view_tweets['user_nickname']); ?></span>
                                <span class="user-name"><?php echo htmlspecialchars($view_tweets['user_name']); ?> *<?php echo convertToDaytimeAgo($view_tweets['tweet_created_at']); ?></span>
                            </a>
                        </div>
                        <p><?php echo $view_tweets['tweet_body'] ?></p>

                        <?php if(isset($view_tweets['tweet_image_name'])): ?>
                            <img src="<?php echo buildImagePath($view_tweets['tweet_image_name'],'tweet'); ?>" alt="" class="post-image">
                        <?php endif; ?>

                        <div class="icon-list">
                            <div class="like js-like" data-like-id="<?php echo htmlspecialchars($view_tweets['like_id']); ?>">
                                <?php
                                if (isset($view_tweets['like_id'])){
                                    //いいね！している場合はブルーのハートを表示
                                    echo '<img src="'. HOME_URL.'views/img/icon-heart-twitterblue.svg" alt="">';
                                }else{
                                    //いいね！していない場合はグレーのハートを表示
                                    echo '<img src="'. HOME_URL.'views/img/icon-heart.svg" alt="">';
                                }
                                ?>
                            </div>
                            <div class="like-count js-like-count"><?php echo htmlspecialchars($view_tweets['like_count']); ?></div>
                        </div>
                    </div>
                </div>