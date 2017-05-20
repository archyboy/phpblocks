<!DOCTYPE html>
<html>
<head>
    <link href="<?php echo \System\Application::$config->get('3RDPARTY_URL'); ?>metroui/docs/css/metro.css" rel="stylesheet">
    <link href="<?php echo \System\Application::$config->get('3RDPARTY_URL'); ?>metroui/docs/css/metro-icons.css" rel="stylesheet">
    <link href="<?php echo \System\Application::$config->get('3RDPARTY_URL'); ?>metroui/docs/css/metro-responsive.css" rel="stylesheet">
    <link href="<?php echo \System\Application::$config->get('3RDPARTY_URL'); ?>metroui/docs/css/metro-rtl.css" rel="stylesheet">
    <link href="<?php echo \System\Application::$config->get('3RDPARTY_URL'); ?>metroui/docs/css/metro-schemes.css" rel="stylesheet">
    <link href="<?php echo \System\Application::$config->get('3RDPARTY_URL'); ?>metroui/docs/css/metro-colors.css" rel="stylesheet">

    <script src="<?php echo \System\Application::$config->get('3RDPARTY_URL'); ?>metroui/docs/js/metro.js"></script>
    <script src="<?php echo \System\Application::$config->get('3RDPARTY_URL'); ?>metroui/docs/js/jquery-3.1.0.js"></script>

    <script src="<?php echo \System\Application::$config->get('3RDPARTY_URL'); ?>metroui/docs/js/docs.js"></script>
    <script src="<?php echo \System\Application::$config->get('3RDPARTY_URL'); ?>metroui/docs/js/docs.js"></script>
    <script src="<?php echo \System\Application::$config->get('3RDPARTY_URL'); ?>metroui/docs/js/ga.js"></script>
    <script src="<?php echo \System\Application::$config->get('3RDPARTY_URL'); ?>metroui/docs/js/prettify/run_prettify.js"></script>
</head>
<body>

    <ul class="breadcrumbs2">
        <li><a href="<?php echo \System\Application::$config->ROOT_URL . \System\Application::$config->PROJECT_NAME . '/' . \System\Application::$builder->buildername; ?>"><span class="icon mif-home"></span></a></li>
        <?php foreach (\System\Application::$builder->varval_array as $key => $value) { ?>
          <li><a title="<?php echo $value; ?>" href="<?php echo \System\Application::$config->ROOT_URL . \System\Application::$config->PROJECT_NAME . '/' . \System\Application::$builder->buildername . '/' . $buf .= $key . '=' . $value . '/'; ?>"><?php echo ucfirst($value); ?></a></li>
        <?php } ?>
    </ul>

<span class="mif-earth mif-4x fg-green"></span>
<!-- Modern switch -->
<label class="switch">
    <input type="checkbox">
    <span class="check"></span>
</label>
<div class="input-control text info">
    <input type="text">
</div>
</body>
</html>
