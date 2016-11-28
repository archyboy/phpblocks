






<script type="text/javascript" src="<?php echo \System\Application::$config->get('THIRDPARTY_URL'); ?>js/git/JSONify/src/jsonify.js"></script>

<form id="myform" action="./" method="post">
    <label>Name:</label>
    <input type="text" name="name"/>
    <label>Email</label>
    <input type="text" name="email"/>
    <label>Password</label>
    <input type="password" name="password"/>
</form>

<button id="mybutton">Send</button>

<script>
$("#mybutton").click(function(event) {
  $("#myform").submit();
  var myform_object = $('#myform').jsonify();
  alert(JSON.stringify(myform_object));
});

</script>
