<div class="breadcrumb-area">
    <div class="container">
        <div class="breadcrumb-content">
            <h2>Корзина покупок</h2>
            <ul>
                <li><a href="<?=PATH;?>">Главное</a></li>
                <li class="active">Корзина покупок</li>
            </ul>
        </div>
    </div>
</div>

<div class="kenne-cart-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <?php if (!empty($_SESSION['cart'])): ?>
                <div class="table-content table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th class="kenne-product-thumbnail">Images</th>
                            <th class="cart-product-name">Product</th>
                            <th class="kenne-product-price">Unit Price</th>
                            <th class="kenne-product-quantity">Quantity</th>
                            <th class="kenne-product-subtotal">Total</th>
                            <th class="kenne-product-remove">Remove</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach($_SESSION['cart'] as $id => $item): ?>
                        <tr>
                            <td class="kenne-product-thumbnail"><a href="product/<?=$item['alias'];?>"><img src="images/product/<?=$item['img'];?>" alt="<?=$item['title'];?>"></a></td>
                            <td class="kenne-product-name"><a href="product/<?=$item['img'];?>"><?=$item['title'];?></a></td>
                            <td class="kenne-product-price"><span class="amount"><?=$_SESSION['cart.currency']['symbol_left'];?><?=$item['price'];?><?=$_SESSION['cart.currency']['symbol_right'];?></span></td>
                            <td class="kenne-product-price"><span class="amount"><?=$item['qty'];?></span></td>
                            <td class="product-subtotal"><span class="amount"><?=$_SESSION['cart.currency']['symbol_left'];?><?=$item['qty'] * $item['price'];?><?=$_SESSION['cart.currency']['symbol_right'];?></span></td>
                            <td class="kenne-product-remove"><a href="cart/delete/?id=<?=$id ?>"><i class="fa fa-trash" title="Remove"></i></a></td>
                        </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
                <div class="row">
                    <div class="col-md-5 cart-page-total">
                        <a href="<?=PATH?>">Продолжить покупку</a>
                        <a href="<?=PATH?>" onclick="clearCart();">Очистить корзинку</a>
                    </div>
                    <div class="col-md-5 ml-auto">
                        <div class="cart-page-total">
                            <h2>Отчёт корзинок</h2>
                            <ul>
                                <li>Итого <span><?=$_SESSION['cart.qty'];?></span></li>
                                <li>На сумму <span><?= $_SESSION['cart.currency']['symbol_left'] . $_SESSION['cart.sum'] . " {$_SESSION['cart.currency']['symbol_right']}" ?></span></li>
                            </ul>
                            <a href="<?=PATH?>/buy">Оформить</a>
                        </div>
                    </div>
                </div>
                <?php else: ?>
                <h2 class="text-center">Корзина пуста</h2>
                <br>
                <div class="cart-page-total text-center">
                    <a href="<?=PATH?>">Продолжить покупку</a>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>