<div class="page-header">
  <h1>Explore new possibilities! <small>Develep faster, smarter without any limitations!</small></h1>
</div>

<div class="jumbotron">
    <h1>Solid as a block!</h1>
    <h3>Build web applications block by block</h3>
</div>

<div class="alert alert-success" role="alert">Well done! All works...Enjoy being a web developer</div>

<script type="text/javascript" src="<?php echo \System\Application::$config->get('THIRDPARTY_URL'); ?>js/git/JSONify/src/jsonify.js"></script>

<?php echo \System\Application::$config->get('THIRDPARTY_URL'); ?>js/git/src/jsonify.js
<form id="myform" action="" method="post">
    <label>Name:</label>
    <input type="text" name="name"/>
    <label>Email</label>
    <input type="text" name="email"/>
    <label>Password</label>
    <input type="password" name="password"/>
</form>

<button id="mybutton">Send</button>

<script>
$("#mybutton").click(function() {
  var myform = $("#myform").submit();
  var myform_object = $('#myform').jsonify();
  alert(JSON.stringify(myform_object));

});

</script>
