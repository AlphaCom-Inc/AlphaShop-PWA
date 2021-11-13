<div class="breadcrumb-area">
    <div class="container">
        <div class="breadcrumb-content">
            <h2>Блог</h2>
            <ul>
                <li><a href="<?=PATH;?>">Главное</a></li>
                <li class="active">Блог</li>
            </ul>
        </div>
    </div>
</div>

<div class="grid-view_area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 order-lg-2 order-1">
                <?php if ($posts): ?>
                <div class="col-lg-12 order-lg-2 order-1">
                    <div class="row blog-item_wrap">
                        <?php foreach ($posts as $post): ?>
                        <div class="col-lg-4">
                            <div class="blog-item">
                                <div class="blog-img">
                                    <a href="blog/<?=$post->alias;?>">
                                        <img src="images/blog/<?=$post->img;?>" alt="Blog Image">
                                    </a>
                                </div>
                                <div class="blog-content">
                                    <h3 class="heading">
                                        <a href="blog/<?=$post->alias;?>"><?=$post->title;?></a>
                                    </h3>
                                    <p class="short-desc"><?=str_short($post->content, 160);?></p>
                                    <div class="blog-meta">
                                        <?=$post->date;?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <?php endif; ?>
                <?php if($pagination->countPages > 1): ?>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="kenne-paginatoin-area">
                            <div class="row">
                                <div class="col-lg-12">
                                    <?=$pagination;?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>