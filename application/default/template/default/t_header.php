
<nav class="navbar navbar-default navbar-static-top" style="height: 70px;">
    <a href="<?php echo \System\Application::$config->PROJECT_URL . \System\Application::$builder->buildername; ?>"><h2><span class="label label-primary" id="toplogo">phpBlocks</span></h2></a>
</nav>

<ol class="breadcrumb">
    <?php $home_array['home'] = null; ?>
    <?php $varval_array = array_merge($home_array, $BUILDER->varval_array); ?>
    <?php $crumbs = count($varval_array); ?>

    <?php foreach ($varval_array as $key => $value) { ?>
        <?php if($crumbs = $crumbs - 1) { ?>
            <li><a title="<?php echo $value; ?>" class="label label-warning" href="<?php echo \System\Application::$config->PROJECT_URL . \System\Application::$builder->buildername . '/' . $buf .= $key . '=' . $value . '/'; ?>"><?php echo ucfirst($key); ?></a></li>
        <?php } else { ?>
            <li class="active"><span class="label label-success"><?php echo ucfirst($key); ?></span></li>
        <?php } ?>
    <?php } ?>
</ol>
