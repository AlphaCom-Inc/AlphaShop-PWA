<div class="breadcrumb-area">
    <div class="container">
        <div class="breadcrumb-content">
            <h2>Продукты</h2>
            <ul>
                <li><a href="<?=PATH?>">Гланое</a></li>
                <li class="active">Продукты</li>
            </ul>
        </div>
    </div>
</div>

<div class="kenne-content_wrapper">
    <div class="container">
        <div class="row">
            <div class="col-xl-3 col-lg-4 order-2">
                <div class="kenne-sidebar-catagories_area">
                    <?php new \app\widgets\filter\Filter(); ?>
                </div>
            </div>
            <div class="col-xl-9 col-lg-8 order-1">
                <div class="shop-toolbar">
                    <div class="product-view-mode">
                        <a class="active grid-3" data-target="gridview-3" data-toggle="tooltip" data-placement="top" title="Grid View"><i class="fa fa-th"></i></a>
                        <a class="list" data-target="listview" data-toggle="tooltip" data-placement="top" title="List View"><i class="fa fa-th-list"></i></a>
                    </div>
                    <?php if ($products): ?>
                    <div class="product-page_count">
                        <p>(Показано <?=count($products);?> товаров из <?=$count;?>)</p>
                    </div>
                    <?php endif; ?>
                </div>
                <?php if ($products): ?>
                <?php $curr = \alphashop\App::$app->getProperty('currency'); ?>
                <div class="shop-product-wrap grid gridview-3 row">
                    <?php foreach ($products as $product) : ?>
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="product-item">
                            <div class="single-product">
                                <div class="product-img">
                                    <a href="product/<?=$product->alias;?>">
                                        <img class="primary-img" src="images/product/<?=$product->img;?>" alt="<?=$product->title;?>">
                                    </a>
                                    <?php if ($product->old_price): ?>
                                    <span class="sticker">SALE</span>
                                    <?php endif; ?>
                                </div>
                                <div class="product-content">
                                    <div class="product-desc_info">
                                        <h3 class="product-name"><a href="product/<?=$product->alias;?>"><?=$product->title;?></a></h3>
                                        <div class="price-box">
                                            <span class="new-price"><?=$curr['symbol_left'];?><?=$product->price * $curr['value'];?><?=$curr['symbol_right'];?></span>
                                            <?php if($product->old_price): ?>
                                                <span class="old-price"><?=$curr['symbol_left'];?><?=$product->old_price * $curr['value'];?><?=$curr['symbol_right'];?></span>
                                            <?php endif; ?>
                                        </div>
                                        <div class="rating-box">
                                            <ul>
                                                <li><a data-id="<?=$product->id;?>" class="add-to-cart-link" href="cart/add?id=<?=$product->id;?>"><i class="ion-bag"></i> Добавить в корзину</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="list-product_item">
                            <div class="single-product">
                                <div class="product-img">
                                    <a href="product/<?=$product->alias;?>">
                                        <img src="images/product/<?=$product->img;?>" alt="Kenne's Product Image">
                                    </a>
                                </div>
                                <div class="product-content">
                                    <div class="product-desc_info">
                                        <div class="price-box">
                                            <span class="new-price"><?=$curr['symbol_left'];?><?=$product->price * $curr['value'];?><?=$curr['symbol_right'];?></span>
                                            <?php if($product->old_price): ?>
                                                <span class="old-price"><?=$curr['symbol_left'];?><?=$product->old_price * $curr['value'];?><?=$curr['symbol_right'];?></span>
                                            <?php endif; ?>
                                        </div>
                                        <h6 class="product-name"><a href="product/<?=$product->alias;?>"><?=$product->title;?></a></h6>
                                        <div class="rating-box">
                                            <ul>
                                                <li><i class="ion-ios-star"></i></li>
                                                <li><i class="ion-ios-star"></i></li>
                                                <li><i class="ion-ios-star"></i></li>
                                                <li class="silver-color"><i class="ion-ios-star-half"></i></li>
                                                <li class="silver-color"><i class="ion-ios-star-outline"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product-short_desc">
                                            <p>
                                                <?=$product->content;?>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="add-actions">
                                        <ul>
                                            <li><a data-id="<?=$product->id;?>" class="add-to-cart-link" href="cart/add?id=<?=$product->id;?>"><i class="ion-bag"></i> Добавить в корзину</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
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
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>