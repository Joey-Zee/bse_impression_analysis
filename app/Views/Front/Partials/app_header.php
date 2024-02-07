<!DOCTYPE html>
<html lang="en">
<head>
   <!-- Required meta tags -->
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <?php if ((isset($noindex) == TRUE) && ($noindex == TRUE)): ?>
      <meta name="googlebot" content="noindex,nofollow"/>
      <meta name="robots" content="noindex,nofollow"/>
   <?php else: ?>
      <meta name="googlebot" content="index,follow" />
      <meta name="robots" content="index,follow,noodp" />
   <?php endif; ?>
   
   <title><?= $title; ?></title>    

   <?php if(isset($styles)): foreach ($styles as $style):?>
      <link href="<?= base_url().$style; ?>" rel="stylesheet" type="text/css">
   <?php endforeach; endif;?>

</head>
<body <?php if (isset($body_class)) { echo 'class="'.$body_class.'"';}?>>