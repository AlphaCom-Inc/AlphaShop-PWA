var doshboarTitle = $('title').text();
$('#doshboardPageTitle').text($('title').text());

$('.delete').click(function(){
    var res = confirm('Подтвердите действие');
    if(!res) return false;
});

$('[data-mask]').inputmask();

$('[data-input-type="password"] [data-btn-type="password"]').click(function () {
    if ($('[data-input-type="password"] input[type="password"]').attr('type') == "password") {
        $('[data-input-type="password"] input[type="password"]').attr('type', 'text');
        $('[data-btn-type="password"]').html('<i class="ai ai-eye-off"></i>');
    } else {
        $('[data-input-type="password"] input[type="text"]').attr('type', 'password');
        $('[data-btn-type="password"]').html('<i class="ai ai-eye"></i>');
    }
});

$('.del-item').on('click', function(){
    var res = confirm('Подтвердите действие');
    if(!res) return false;
    var $this = $(this),
        id = $this.data('id'),
        src = $this.data('src');
    $.ajax({
        url: adminpath + '/product/delete-gallery',
        data: {id: id, src: src},
        type: 'POST',
        beforeSend: function(){
            $this.closest('.file-upload').find('.overlay').css({'display':'block'});
        },
        success: function(res){
            setTimeout(function(){
                $this.closest('.file-upload').find('.overlay').css({'display':'none'});
                if(res == 1){
                    $this.fadeOut();
                }
            }, 1000);
        },
        error: function(){
            setTimeout(function(){
                $this.closest('.file-upload').find('.overlay').css({'display':'none'});
                alert('Ошибка');
            }, 1000);
        }
    });
});


$('.nav-sidebar a').each(function(){
    var location = window.location.protocol + '//' + window.location.host + window.location.pathname;
    var link = this.href;
    if(link == location){
        $(this).addClass('active');
        $(this).parent().parent().closest('.nav-item').addClass('active menu-is-opening menu-open');
    }
});


// CKEDITOR.replace('editor1');
$( '#container' ).summernote();

$('#reset-filter').click(function(){
    $('#filter input[type=radio]').prop('checked', false);
    return false;
});

$(".select2").select2({
    placeholder: "Начните вводить наименование товара",
    //minimumInputLength: 2,
    cache: true,
    ajax: {
        url: adminpath + "/product/related-product",
        delay: 250,
        dataType: 'json',
        data: function (params) {
            return {
                q: params.term,
                page: params.page
            };
        },
        processResults: function (data, params) {
            return {
                results: data.items
            };
        }
    }
});

if($('div').is('#logo')){
    var buttonLogo = $("#logo"),
        fileLogo;
}

if(buttonLogo){
    new AjaxUpload(buttonLogo, {
        action: adminpath + buttonLogo.data('url') + "?upload=1",
        data: {name: buttonLogo.data('name')},
        name: buttonLogo.data('name'),
        onSubmit: function(fileLogo, ext){
            if (! (ext && /^(jpg|png|jpeg|gif)$/i.test(ext))){
                alert('Ошибка! Разрешены только картинки');
                return false;
            }
            buttonLogo.closest('.file-upload').find('.overlay').css({'display':'inherit'});

        },
        onComplete: function(fileLogo, response){
            setTimeout(function(){
                buttonLogo.closest('.file-upload').find('.overlay').css({'display':'none'});

                const dataType = buttonLogo.data('type'),
                    dataStyle = buttonLogo.data('style') ? ' style="' + buttonLogo.data('style') + '"' : '',
                    dataClass = buttonLogo.data('class') ? ' class="' + buttonLogo.data('class') + '"' : '';
                response = JSON.parse(response);
                $('.' + buttonLogo.data('name')).html('<img src="/images/' + dataType + '/' + response.file + '"' + dataStyle + dataClass + '>');
            }, 1000);
        }
    });
}

if($('div').is('#single')){
    var buttonSingle = $("#single"),
        buttonMulti = $("#multi"),
        file;
}

if(buttonSingle){
    new AjaxUpload(buttonSingle, {
        action: adminpath + buttonSingle.data('url') + "?upload=1",
        data: {name: buttonSingle.data('name')},
        name: buttonSingle.data('name'),
        onSubmit: function(file, ext){
            if (! (ext && /^(jpg|png|jpeg|gif)$/i.test(ext))){
                alert('Ошибка! Разрешены только картинки');
                return false;
            }
            buttonSingle.closest('.file-upload').find('.overlay').css({'display':'inherit'});

        },
        onComplete: function(file, response){
            setTimeout(function(){
                buttonSingle.closest('.file-upload').find('.overlay').css({'display':'none'});

                const dataType = buttonSingle.data('type'),
                    dataStyle = buttonSingle.data('style') ? ' style="' + buttonSingle.data('style') + '"' : '',
                    dataClass = buttonSingle.data('class') ? ' class="' + buttonSingle.data('class') + '"' : '';
                response = JSON.parse(response);
                $('.' + buttonSingle.data('name')).html('<img src="/images/' + dataType + '/' + response.file + '"' + dataStyle + dataClass + '>');
            }, 1000);
        }
    });
}

if(buttonMulti){
    new AjaxUpload(buttonMulti, {
        action: adminpath + buttonMulti.data('url') + "?upload=1",
        data: {name: buttonMulti.data('name')},
        name: buttonMulti.data('name'),
        onSubmit: function(file, ext){
            if (! (ext && /^(jpg|png|jpeg|gif)$/i.test(ext))){
                alert('Ошибка! Разрешены только картинки');
                return false;
            }
            buttonMulti.closest('.file-upload').find('.overlay').css({'display':'inherit'});

        },
        onComplete: function(file, response){
            setTimeout(function(){
                buttonMulti.closest('.file-upload').find('.overlay').css({'display':'none'});

                response = JSON.parse(response);
                $('.' + buttonMulti.data('name')).append('<div class="col-lg ml-2" style="height: 255px;"><img src="/images/product/' + response.file + '" style="height: 255px; border-radius: 8px;"></div>');
            }, 1000);
        }
    });
}

$('#add').on('submit', function(){
     if(!isNumeric( $('#category_id').val() )){
         alert('Выберите категорию');
         return false;
     }
});

function isNumeric(n) {
    return !isNaN(parseFloat(n)) && isFinite(n);
}