<div class="container">

<?php
$array = (object)array('One', 'Two', 'Three');
?>

<div id="print-pre">
    <?php
        if(is_object($array)) {
            System\Helper::print_pre($array);
        }
    ?>
</div>


    
<!-- $_SERVER Info -->    
<button id="show-server-info">Show Server Info</button>
<button id="hide-server-info">Hide Server Info</button>
<center>
<div class="popup-server" hidden="hidden">
    <div class="popup">
        <?php System\Helper::print_pre($_SERVER); ?>
    </div>
</div>
</center>

<!-- $_REQUEST Info -->    
<button id="show-request-info">Show Request Info</button>
<button id="hide-request-info">Hide Request Info</button>
<center>
<div class="popup-request" hidden="hidden">
    <div class="popup">
        <?php System\Helper::print_pre($_REQUEST); ?>
    </div>
</div>
</center>