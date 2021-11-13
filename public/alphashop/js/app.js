/* Filters */
$('body').on('change', '.w_sidebar input', function(){
    var checked = $('.w_sidebar input:checked'),
        data = '';
    checked.each(function () {
        data += this.value + ',';
    });
    if(data){
        $.ajax({
            url: location.href,
            data: {filter: data},
            type: 'GET',
            beforeSend: function(){
                $('.preloader').fadeIn(300, function(){
                    $('.product-one').hide();
                });
            },
            success: function(res){
                $('.preloader').delay(500).fadeOut('slow', function(){
                    $('.product-one').html(res).fadeIn();
                    var url = location.search.replace(/filter(.+?)(&|$)/g, ''); //$2
                    var newURL = location.pathname + url + (location.search ? "&" : "?") + "filter=" + data;
                    newURL = newURL.replace('&&', '&');
                    newURL = newURL.replace('?&', '?');
                    history.pushState({}, '', newURL);
                });
            },
            error: function () {
                alert('Ошибка!');
            }
        });
    }else{
        window.location = location.pathname;
    }
});

/* Search */
var products = new Bloodhound({
    datumTokenizer: Bloodhound.tokenizers.whitespace,
    queryTokenizer: Bloodhound.tokenizers.whitespace,
    remote: {
        wildcard: '%QUERY',
        url: path + '/search/typeahead?query=%QUERY'
    }
});

products.initialize();

$("#typeahead").typeahead({
    // hint: false,
    highlight: true
},{
    name: 'products',
    display: 'title',
    limit: 10,
    source: products
});

$('#typeahead').bind('typeahead:select', function(ev, suggestion) {
    // console.log(suggestion);
    window.location = path + '/search/?q=' + encodeURIComponent(suggestion.title);
});

/*Cart*/
$('body').on('click', '.add-to-cart-link', function(e){
    e.preventDefault();
    var id =$(this).data('id'),
        qty = $('.quantity input').val() ? $('.quantity input').val() : 1,
        mod = $('.avialable select').val();

    $.ajax({
        url: '/cart/add',
        data: {id: id, qty: qty, mod: mod},
        type: 'GET',
        success: function (res) {
            showCart(res)
        },
        error: function () {
            alert("Ошибка, попробуйте позже");
        }
    });

    /*console.log(id, qty, mod)*/
});

$('a[href="#miniCart"]').click(() => {getCart()});

function showCart(cart) {
    /*if ($.trim(cart) == '<h3>Корзина пуста</h3>') {
        $('#miniCart .minicart-tools .clear-cart').css('display', 'none');
    } else {
        $('#miniCart .minicart-tools .clear-cart').css('display', 'block');
    }*/
    $('#miniCart .app-minicart-body').html(cart);
    if ($('#miniCart .cart-sum').text() != 0) {
        $('a[href="#miniCart"] .item-count').css('display', 'inherit');
        $('a[href="#miniCart"] .item-count').text($('#miniCart .cart-qty').text());
        $('a[href="#miniCart"] .total-price').text($('#miniCart .cart-sum').text());
    } else {
        $('a[href="#miniCart"] .item-count').css('display', 'none');
        $('a[href="#miniCart"] .total-price').text('Корзина пусто');
    }
    /*console.log(cart);*/
}

function getCart() {
    $.ajax({
        url: '/cart/show',
        type: 'GET',
        success: function(res){
            showCart(res);
        },
        error: function(){
            alert('Ошибка! Попробуйте позже');
        }
    });
}

function clearCart() {
    $.ajax({
        url: '/cart/clear',
        type: 'GET',
        success: function(res){
            showCart(res);
            $('#miniCart .btn-close').click();
        },
        error: function(){
            alert('Ошибка! Попробуйте позже');
        }
    });
}
/*Cart*/

$('.available select').on('change', function(){
    var modId = $(this).val(),
        color = $(this).find('option').filter(':selected').data('title'),
        price = $(this).find('option').filter(':selected').data('price'),
        basePrice = $('#base-price').data('base');
    if(price){
        $('#base-price').text(symboleLeft + price + symboleRight);
    }else{
        $('#base-price').text(symboleLeft + basePrice + symboleRight);
    }
});

/*Other*/

$('.kenne-paginatoin-area ul').removeClass();
$('.kenne-paginatoin-area ul').addClass('kenne-pagination-box primary-color');
$('.kenne-paginatoin-area ul li').removeClass();
$('.kenne-paginatoin-area ul li a').removeClass();
$('.kenne-paginatoin-area ul li[data-status="active"]').addClass('active');