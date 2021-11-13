<?php if(!empty($_SESSION['cart'])): ?>
<div class="minicart-content">
    <div class="minicart-heading">
        <h4>Корина покупок</h4>
    </div>
    <ul class="minicart-list">
        <?php foreach($_SESSION['cart'] as $id => $item): ?>
        <li class="minicart-product">
            <a class="product-item_remove text-danger del-item" data-id="<?=$id;?>" href="javascript:void(0)"><i class="ion-android-close"></i></a>
            <div class="product-item_img">
                <img src="images/product/<?=$item['img'];?>" alt="<?=$item['title'];?>">
            </div>
            <div class="product-item_content">
                <a class="product-item_title" href="product/<?=$item['alias'];?>"><?=$item['title'];?></a>
                <span class="product-item_quantity"><?=$item['qty'];?> x <?=$item['price'];?></span>
            </div>
        </li>
        <?php endforeach; ?>
    </ul>
</div>
<div class="minicart-tools">
    <div class="minicart-item_total">
        <span>Итого</span>
        <span class="ammount cart-qty"><?= !empty($_SESSION['cart']) ? $_SESSION['cart.qty'] : 0?></span>
    </div>
    <div class="minicart-item_total">
        <span>На сумму</span>
        <span class="ammount cart-sum"><?= !empty($_SESSION['cart']) ? $_SESSION['cart.currency']['symbol_left'] . $_SESSION['cart.sum'] . $_SESSION['cart.currency']['symbol_right'] : 0;?></span>
    </div>
    <div class="minicart-btn_area">
        <a href="cart/" class="kenne-btn kenne-btn_fullwidth">Оформить заказ</a>
    </div>
    <div class="minicart-btn_area clear-cart">
        <a href="#" onclick="clearCart(); return false;" class="kenne-btn kenne-btn_fullwidth">Очистить корзинку</a>
    </div>
</div>
<?php else: ?>
<div class="minicart-content">
    <div class="minicart-heading">
        <h4>Корина покупок</h4>
    </div>
    <h4 class="mt5 mb-5">Корзина пуста</h4>
</div>
<div class="minicart-btn_area">
    <a href="#" class="kenne-btn kenne-btn_fullwidth next-buy-btn-cart" onclick="$('#miniCart .btn-close').click(); return false;">Продолжить покупку</a>
</div>
<?php endif; ?>