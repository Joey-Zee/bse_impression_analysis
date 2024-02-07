<?php if(isset($scripts)): foreach ($scripts as $script) : ?>
   <script type="text/javascript" src="<?= base_url().'/assets/'.$script; ?>"></script> 
<?php endforeach; endif;?>
</body>
</html>