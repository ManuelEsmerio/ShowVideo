<?php 
    if (!empty($_GET['video']) && isset($_GET['video'])) {
        $name = $_GET['video'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Video</title>
</head>
<body>
    <?php if(file_exists('https://integratto.mx/desarrollo/wordpress-demo/wp-content/uploads/woocommerce_uploads/alg_uploads/checkout_files_upload/'.$name.'.mp4')){ ?>
        <video controls="" autoplay="" name="media" width="680px"><source src=<?php echo 'https://integratto.mx/desarrollo/wordpress-demo/wp-content/uploads/woocommerce_uploads/alg_uploads/checkout_files_upload/'.$name.'.mp4' ?> type="video/mp4"></video>
    <?php }else{ ?>
        <p>Video not found</p>
    <?php } ?>
</body>
</html>

<?php } else{ ?>
    <p>Not found params</p>
<?php } ?>
