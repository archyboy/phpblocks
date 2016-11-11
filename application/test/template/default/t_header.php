
<nav class="navbar navbar-default navbar-static-top" style="height: 70px;">
    <a href="<?php echo $ROOT_URL . rtrim($path, '/'); ?>"><h2><span class="label label-primary" id="toplogo">phpBlocks</span></h2></a>
</nav>

<?php echo 'URL: ' . \System\Application::$config->PROJECT_URL; ?>

<ol class="breadcrumb">
    <?php $crumbs = count($BUILDER->url_array); ?>
    <?php foreach ($BUILDER->url_array as $key => $value) { ?>
        <?php $path .= $BUILDER->url_array[$key] . '/' ?>
        <?php if($key != $crumbs-1) { ?>
            <li><a class="label label-default" href="<?php echo $ROOT_URL . rtrim($path, '/'); ?>"><?php echo $value; ?></a></li>
        <?php } else { ?>
            <li class="active"><span class="label label-success"><?php echo $value; ?></span></li>
        <?php } ?>
    <?php } ?>
</ol>
