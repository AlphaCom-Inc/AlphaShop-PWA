<!--about-starts-->
<?php if($brands): ?>
<div class="banner-area-3">
    <div class="container">
        <div class="row">
            <?php foreach($brands as $brand): ?>
            <div class="col-lg-4 col-6 custom-xxs-col">
                <div class="banner-item img-hover_effect">
                    <div class="banner-img">
                        <img class="img-full" src="images/brand/<?=$brand->img;?>" alt="Banner">
                    </div>
                    <!--<div class="banner-content">
                        <h4><?/*=$brand->title;*/?></h4>
                        <span><?/*=$brand->description;*/?></span>
                    </div>-->
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<?php endif; ?>
<?php if ($newProducts OR $hits) $curr = \alphashop\App::$app->getProperty('currency'); ?>
<?php if($newProducts): ?>
<div class="product-area ">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h3>Новые продукты</h3>
                    <div class="product-arrow"></div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="kenne-element-carousel product-slider slider-nav" data-slick-options='{
                        "slidesToShow": 4,
                        "slidesToScroll": 1,
                        "infinite": false,
                        "arrows": true,
                        "dots": false,
                        "spaceBetween": 30,
                        "appendArrows": ".product-arrow"
                        }' data-slick-responsive='[
                        {"breakpoint":992, "settings": {
                        "slidesToShow": 3
                        }},
                        {"breakpoint":768, "settings": {
                        "slidesToShow": 2
                        }},
                        {"breakpoint":575, "settings": {
                        "slidesToShow": 1
                        }}
                    ]'>


                <?php foreach($newProducts as $newp): ?>
                    <div class="product-item">
                        <div class="single-product">
                            <div class="product-img">
                                <a href="product/<?=$newp->alias;?>">
                                    <img class="primary-img" src="images/product/<?=$newp->img;?>" alt="<?=$newp->title;?>">
                                    <img class="secondary-img" src="images/product/<?=$newp->img;?>" alt="<?=$newp->title;?>">
                                </a>
                            </div>
                            <div class="product-content">
                                <div class="product-desc_info">
                                    <h3 class="product-name"><a href="product/<?=$newp->alias;?>"><?=$newp->title;?></a></h3>
                                    <div class="price-box">
                                        <span class="new-price"><?=$curr['symbol_left'];?><?=$newp->price * $curr['value'];?><?=$curr['symbol_right'];?></span>
                                        <?php if($newp->old_price): ?>
                                        <span class="old-price"><?=$curr['symbol_left'];?><?=$newp->old_price * $curr['value'];?><?=$curr['symbol_right'];?></span>
                                        <?php endif; ?>
                                    </div>
                                    <div class="rating-box">
                                        <ul>
                                            <li><a data-id="<?=$newp->id;?>" class="add-to-cart-link" href="cart/add?id=<?=$newp->id;?>"><i class="ion-bag"></i> Добавить в корзину</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>

                </div>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>
<?php if($hits): ?>
<div class="product-tab_area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h3>Все продукты</h3>
                    <div class="product-arrow"></div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="tab-content kenne-tab_content">
                    <div class="kenne-element-carousel product-tab_slider slider-nav product-tab_arrow" data-slick-options='{
                                "slidesToShow": 4,
                                "slidesToScroll": 1,
                                "infinite": false,
                                "arrows": true,
                                "dots": false,
                                "spaceBetween": 30
                                }' data-slick-responsive='[
                                {"breakpoint":992, "settings": {
                                "slidesToShow": 3
                                }},
                                {"breakpoint":768, "settings": {
                                "slidesToShow": 2
                                }},
                                {"breakpoint":575, "settings": {
                                "slidesToShow": 1
                                }}
                            ]'>

                <?php foreach($hits as $hit): ?>
                    <div class="product-item">
                        <div class="single-product">
                            <div class="product-img">
                                <a href="product/<?=$hit->alias;?>">
                                    <img class="primary-img" src="images/product/<?=$hit->img;?>" alt="<?=$hit->title;?>">
                                    <img class="secondary-img" src="images/product/<?=$hit->img;?>" alt="<?=$hit->title;?>">
                                </a>
                            </div>
                            <div class="product-content">
                                <div class="product-desc_info">
                                    <h3 class="product-name"><a href="product/<?=$hit->alias;?>"><?=$hit->title;?></a></h3>
                                    <div class="price-box">
                                        <span class="new-price"><?=$curr['symbol_left'];?><?=$hit->price * $curr['value'];?><?=$curr['symbol_right'];?></span>
                                        <?php if($hit->old_price): ?>
                                        <span class="old-price"><?=$curr['symbol_left'];?><?=$hit->old_price * $curr['value'];?><?=$curr['symbol_right'];?></span>
                                        <?php endif; ?>
                                    </div>
                                    <div class="rating-box">
                                        <ul>
                                            <li><a data-id="<?=$hit->id;?>" class="add-to-cart-link" href="cart/add?id=<?=$hit->id;?>"><i class="ion-bag"></i> Добавить в корзину</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>
