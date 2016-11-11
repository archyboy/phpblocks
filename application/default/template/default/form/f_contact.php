
<?php echo $DATA[firstname]; ?> <?php echo $DATA[lastname]; ?> loves <?php echo $DATA[likes]; ?>! Therefor we call him  <?php echo $EXTRA; ?>

<form action="" method="post">
    <div>First name<input type="text" name="firstname" value="<?php echo $DATA[firstname]; ?>"></div>
    <div>Last name<input type="text" name="lastname" value="<?php echo $DATA[lastname]; ?>"></div>
    <div>Likes<input type="text" name="likes" value="<?php echo $DATA[likes]; ?>"></div>
    <div>Gender<input type="radio" name="gender" value="Male" checked="checked">Male<input type="radio" name="gender" value="Female">Female</div>
    <div><input type="submit" name="submit_contact" value="Send"></div>
</form>