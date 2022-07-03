<!Doctype html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Codebar and <? echo $title?></title>
</head>
<body>
    <h1><center><?php echo $title ?></center></h1>
    <?php $code = "120000";
      for ($i=0; $i < 100 ; $i++) { 
        $code = $code + 1;
        ?>
           <img src="<?php echo base_url('render/Barcode/'.$code) ?>" alt="" srcset="">
        <?php
      }
    ?>
    <img src="<?php echo base_url('render/Qrcode/'.$code) ?>" alt="" srcset="">
</body>
</html>