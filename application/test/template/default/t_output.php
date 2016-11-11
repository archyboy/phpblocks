<style>
    ul {
        list-style-type: none;
    }
</style>



    <?php if(is_array($DATA) || is_object($DATA)) { ?>
        <?php foreach ($DATA as $key => $value) { ?>
            <div><?php echo $key . ' => ' . $value; ?></div>
        <?php } ?>
    <?php }  else { ?>
            <li><?php echo $DATA; ?></li>
    <?php } ?>


