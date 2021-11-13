<div class="breadcrumb-area">
    <div class="container">
        <div class="breadcrumb-content">
            <h2><?=$post->title;?></h2>
            <ul>
                <li><a href="<?=PATH;?>">Главное</a></li>
                <li><a href="<?=PATH;?>/blog">Блог</a></li>
                <li class="active"><?=$post->title;?></li>
            </ul>
        </div>
    </div>
</div>

<div class="blog-details_area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 order-lg-2 order-1">
                <div class="blog-item">
                    <div class="blog-img">
                        <img src="images/blog/<?=$post->img;?>" alt="Blog Image">
                    </div>
                    <div class="blog-content">
                        <h3 class="heading"><?=$post->title;?></h3>
                        <p class="short-desc"><?=$post->date;?></p>
                        <div class="blog-meta"></div>
                    </div>
                </div>
                <?=$post->content;?>
                <hr>
                <div class="kenne-social_link">
                    <ul>
                        <li class="facebook">
                            <a href="https://www.facebook.com" data-toggle="tooltip" target="_blank" title="Facebook">
                                <i class="fab fa-facebook"></i>
                            </a>
                        </li>
                        <li class="twitter">
                            <a href="https://twitter.com" data-toggle="tooltip" target="_blank" title="Twitter">
                                <i class="fab fa-twitter-square"></i>
                            </a>
                        </li>
                        <li class="google-plus">
                            <a href="https://www.plus.google.com/discover" data-toggle="tooltip" target="_blank" title="Google Plus">
                                <i class="fab fa-google-plus"></i>
                            </a>
                        </li>
                        <li class="instagram">
                            <a href="https://rss.com" data-toggle="tooltip" target="_blank" title="Instagram">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

