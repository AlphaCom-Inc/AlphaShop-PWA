<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <base href="/admin-v3/">
    <title>Alpha Shop Admin | Log in</title>
    <link rel="shortcut icon" href="<?=PATH;?>/images/favicon/favicon.png" type="image/png" />

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">

<?=$content;?>

<script src="plugins/jquery/jquery.min.js"></script>
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="dist/js/adminlte.min.js"></script>


<script>
    $('input').keyup(function(e){
        var nextCode = $(this).data('next');
        if (this.value.length >= this.maxLength) {
            document.getElementById(nextCode).focus();
        }
    });
</script>
</body>
</html>
