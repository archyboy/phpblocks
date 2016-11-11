

    <a href="http://<?php echo $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>"><h2><span class="label label-primary" id="toplogo">phpBlocks</span></h2></a>


    <?php $crumbs = count($BUILDER->url_array); ?>
    <?php foreach ($BUILDER->url_array as $key => $value) { ?>
        <?php $path .= $BUILDER->url_array[$key] . '/' ?>
        <?php if($key != $crumbs-1) { ?>
            <li><a class="label label-default" href="<?php echo $ROOT_URL . rtrim($path, '/'); ?>"><?php echo $value; ?></a></li>
        <?php } else { ?>
            <li class="active"><span class="label label-success"><?php echo $value; ?></span></li>
        <?php } ?>
    <?php } ?>


