<div class="breadcrumb-area">
    <div class="container">
        <div class="breadcrumb-content">
            <h2><?=$product->title?></h2>
            <ul>
                <?=$breadcrumbs;?>
            </ul>
        </div>
    </div>
</div>

<div class="sp-area">
    <div class="container">
        <div class="sp-nav">
            <div class="row">
                <div class="col-lg-4">
                    <div class="sp-img_area">
                        <div class="sp-img_slider slick-img-slider kenne-element-carousel" data-slick-options='{
                                "slidesToShow": 1,
                                "arrows": false,
                                "fade": true,
                                "draggable": false,
                                "swipe": false,
                                "asNavFor": ".sp-img_slider-nav"
                                }'>
                            <?php if($gallery): ?>
                                <?php foreach($gallery as $item): ?>
                                    <div class="single-slide zoom <?=$item->img;?>">
                                        <img src="images/product/<?=$item->img;?>" alt="">
                                    </div>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <div class="single-slide red zoom">
                                    <img src="images/product/<?=$product->img;?>" alt="Kenne's Product Image">
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="sp-img_slider-nav slick-slider-nav kenne-element-carousel arrow-style-2 arrow-style-3" data-slick-options='{
                                "slidesToShow": 3,
                                "asNavFor": ".sp-img_slider",
                                "focusOnSelect": true,
                                "arrows" : true,
                                "spaceBetween": 30
                                }' data-slick-responsive='[
                                        {"breakpoint":1501, "settings": {"slidesToShow": 3}},
                                        {"breakpoint":1200, "settings": {"slidesToShow": 2}},
                                        {"breakpoint":992, "settings": {"slidesToShow": 4}},
                                        {"breakpoint":768, "settings": {"slidesToShow": 3}},
                                        {"breakpoint":575, "settings": {"slidesToShow": 2}}
                                    ]'>
                            <?php if($gallery): ?>
                                <?php foreach($gallery as $item): ?>
                                    <div class="single-slide <?=$item->img;?>">
                                        <img src="images/product/<?=$item->img;?>" alt="">
                                    </div>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <?php
                $curr = \alphashop\App::$app->getProperty('currency');
                $cats = \alphashop\App::$app->getProperty('cats');
                ?>
                <div class="col-lg-8">
                    <div class="sp-content">
                        <div class="sp-heading">
                            <h5><a href="#"><?=$product->title;?></a></h5>
                        </div>
                        <div class="rating-box">
                            <ul>
                                <li><i class="ion-android-star"></i></li>
                                <li><i class="ion-android-star"></i></li>
                                <li><i class="ion-android-star"></i></li>
                                <li class="silver-color"><i class="ion-android-star"></i></li>
                                <li class="silver-color"><i class="ion-android-star"></i></li>
                            </ul>
                        </div>
                        <div class="sp-essential_stuff">
                            <ul>
                                <li>Категория <a href="category/<?=$cats[$product->category_id]['alias'];?>"><?=$cats[$product->category_id]['title'];?></a></li>
                                <?php if($product->old_price): ?>
                                <li>Старая цена: <del><?=$curr['symbol_left'];?><?=$product->old_price * $curr['value'];?><?=$curr['symbol_right'];?></del></li>
                                <?php endif; ?>
                                <li>Цена: <a class="item_price" id="base-price" data-base="<?=$product->price * $curr['value'];?>"><?=$curr['symbol_left'];?><?=$product->price * $curr['value'];?><?=$curr['symbol_right'];?></a></li>
                            </ul>
                        </div>
                        <?php if($mods): ?>
                            <div class="product-size_box avialable">
                                <span>Color</span>
                                <select class="myniceselect nice-select">
                                    <option>Выбрать цвет</option>
                                    <?php foreach($mods as $mod): ?>
                                        <option data-title="<?=$mod->title;?>" data-price="<?=$mod->price * $curr['value'];?>" value="<?=$mod->id;?>"><?=$mod->title;?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        <?php endif; ?>
                        <div class="quantity">
                            <label>Штук</label>
                            <div class="cart-plus-minus">
                                <input class="cart-plus-minus-box" value="1" type="text" size="4" value="1" name="quantity" min="1" step="1">
                                <div class="dec qtybutton"><i class="fa fa-angle-down"></i></div>
                                <div class="inc qtybutton"><i class="fa fa-angle-up"></i></div>
                            </div>
                        </div>
                        <div class="qty-btn_area">
                            <ul>
                                <li><a class="qty-cart_btn add-to-cart-link" id="productAdd" data-id="<?=$product->id;?>" href="cart/add?id=<?=$product->id;?>">Добавить в корзину</a></li>
                            </ul>
                        </div>
                        <div class="kenne-social_link">
                            <ul>
                                <li class="facebook">
                                    <a href="#" data-toggle="tooltip" target="_blank" title="Facebook">
                                        <i class="fab fa-facebook"></i>
                                    </a>
                                </li>
                                <li class="twitter">
                                    <a href="#" data-toggle="tooltip" target="_blank" title="Twitter">
                                        <i class="fab fa-twitter-square"></i>
                                    </a>
                                </li>
                                <li class="youtube">
                                    <a href="#" data-toggle="tooltip" target="_blank" title="Youtube">
                                        <i class="fab fa-youtube"></i>
                                    </a>
                                </li>
                                <li class="google-plus">
                                    <a href="#" data-toggle="tooltip" target="_blank" title="Google Plus">
                                        <i class="fab fa-google-plus"></i>
                                    </a>
                                </li>
                                <li class="instagram">
                                    <a href="#" data-toggle="tooltip" target="_blank" title="Instagram">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="product-tab_area-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="sp-product-tab_nav">
                    <div class="product-tab">
                        <ul class="nav product-menu">
                            <li><a class="active" data-toggle="tab" href="#description"><span>Описание</span></a></li>
                        </ul>
                    </div>
                    <div class="tab-content uren-tab_content">
                        <div id="description" class="tab-pane active show" role="tabpanel">
                            <div class="product-description">
                                <?=$product->content;?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php if($related): ?>
<div class="product-area ">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h3>Так же рекомендуем</h3>
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

                    <?php foreach($related as $item): ?>
                    <div class="product-item">
                        <div class="single-product">
                            <div class="product-img">
                                <a href="product/<?=$item['alias'];?>">
                                    <img class="primary-img" src="images/product/<?=$item['img'];?>" alt="<?=$item['title'];?>">
                                </a>
                                <?php if($item['old_price']): ?>
                                <span class="sticker-2">SALE</span>
                                <?php endif; ?>
                            </div>
                            <div class="product-content">
                                <div class="product-desc_info">
                                    <h3 class="product-name"><a href="product/<?=$item['alias'];?>"><?=$item['title'];?></a></h3>
                                    <div class="price-box">
                                        <span class="new-price"><?=$curr['symbol_left'];?><?=$item['price'] * $curr['value'];?><?=$curr['symbol_right'];?></span>
                                        <?php if($item['old_price']): ?>
                                            <span class="old-price"><?=$curr['symbol_left'];?><?=$item['old_price'] * $curr['value'];?><?=$curr['symbol_right'];?></span>
                                        <?php endif; ?>
                                    </div>
                                    <div class="rating-box">
                                        <ul>
                                            <ul>
                                                <li><a data-id="<?=$item['id'];?>" class="add-to-cart-link" href="cart/add?id=<?=$item['id'];?>"><i class="ion-bag"></i> Добавить в корзину</a></li>
                                            </ul>
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

<?php if($recentlyViewed): ?>
<div class="product-area pb-90">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h3>Недавно просмотренные</h3>
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

                    <?php foreach($recentlyViewed as $item): ?>
                    <div class="product-item">
                        <div class="single-product">
                            <div class="product-img">
                                <a href="product/<?=$item['alias'];?>">
                                    <img class="primary-img" src="images/product/<?=$item['img'];?>" alt="<?=$item['title'];?>">
                                </a>
                                <?php if($item['old_price']): ?>
                                <span class="sticker-2">Sale</span>
                                <?php endif; ?>
                            </div>
                            <div class="product-content">
                                <div class="product-desc_info">
                                    <h3 class="product-name"><a href="product/<?=$item['alias'];?>"><?=$item['title'];?></a></h3>
                                    <div class="price-box">
                                        <a class="item_add add-to-cart-link" href="cart/add?id=<?=$item['id'];?>" data-id="<?=$item['id'];?>"><i></i></a>
                                        <span class="new-price"><?=$curr['symbol_left'];?><?=$item['price'] * $curr['value'];?><?=$curr['symbol_right'];?></span>
                                        <?php if($item['old_price']): ?>
                                            <span class="old-price"><?=$curr['symbol_left'];?><?=$item['old_price'] * $curr['value'];?><?=$curr['symbol_right'];?></span>
                                        <?php endif; ?>
                                    </div>
                                    <div class="rating-box">
                                        <ul>
                                            <li><a data-id="<?=$item['id'];?>" class="add-to-cart-link" href="cart/add?id=<?=$item['id'];?>"><i class="ion-bag"></i> Добавить в корзину</a></li>
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
