
<script>
$(document).on("copy", function() {
    copyText();
});

</script>

<div class="page-header">
  <h1>Explore new possibilities! <small>Develep faster, smarter without any limitations!</small></h1>
</div>

<div class="jumbotron">
    <h1>Solid as a block!</h1>
    <h3>Build web applications block by block</h3>
</div>

<link rel="stylesheet" href="<?php echo \System\Application::$config->THIRDPARTY_URL; ?>js/rmodal/dist/rmodal-no-bootstrap.css" type="text/css" />
<script type="text/javascript" src="<?php echo \System\Application::$config->THIRDPARTY_URL; ?>js/rmodal/dist/rmodal.js"></script>

<script type="text/javascript">
    window.onload = function() {
        var modal = new RModal(document.getElementById('modal'), {
            beforeOpen: function(next) {
                console.log('beforeOpen');
                next();
            }
            , afterOpen: function() {
                console.log('opened');
            }

            , beforeClose: function(next) {
                console.log('beforeClose');
                next();
            }
            , afterClose: function() {
                console.log('closed');
            }

            // , content: 'Abracadabra'

            // , bodyClass: 'modal-open'
            // , dialogClass: 'modal-dialog-lg'
            // , dialogOpenClass: 'fadeIn'
            // , dialogCloseClass: 'fadeOut'

            // , focus: true
            // , focusElements: ['input.form-control', 'textarea', 'button.btn-primary']

            // , escapeClose: true
        });

        document.addEventListener('keydown', function(ev) {
            modal.keydown(ev);
        }, false);

        document.getElementById('showModal').addEventListener("click", function(ev) {
            ev.preventDefault();
            modal.open();
        }, false);

        window.modal = modal;
    }
</script>

<div id="modal" class="modal">
    <div class="modal-dialog animated">
        <div class="modal-content">
            <form class="form-horizontal" method="get">
                <div class="modal-header">
                    <strong>This is your copied text</strong>
                </div>

                <div class="modal-body">
                    <div class="form-group">
                        <pre>
                            <div id="modal_content" contenteditable="true"></div>
                        </pre>
                    </div>
                </div>

                <div class="modal-footer">
                    <button class="btn btn-default" type="button" onclick="modal.close();">Cancel</button>
                    <button class="btn btn-primary" type="submit" onclick="modal.close();">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <a href="#" id="showModal" class="btn btn-success">Show modal</a>
        </div>
    </div>
</div>


<button id="show_editor" onclick="show_editor()">Show editor</button>

<div id="code_editor">
        <?php \System\Helper::code_style_begin('php'); ?>
        <?php echo htmlspecialchars((string)file_get_contents('system/view.php')); ?>
</div>


<script>
myGetSelected = function(){
  var t = '';
  if(window.getSelection){
    t = window.getSelection(this.innerHTML);
  }else if(document.getSelection){
    t = document.getSelection();
  }else if(document.selection){
    t = document.selection.createRange().text;
  }
  return t;
}
</script>

<script>
function show_editor() {
    $("#code_editor").show( function() {
        $("#show_editor").html("Start edit mode");
        $("#show_editor").on("click", function() {
            $("#code_editor").attr('contenteditable', 'true');

            $("#show_editor").html("Stop edit mode");
            $("#show_editor").on("click", function() {
                $("#code_editor").removeAttr('contenteditable');
                $("#show_editor").hide();
                });
            });
        }
    );
}

function copyText() {
    var selectedText = myGetSelected();
    //alert(selectedText);
    $("#modal_content").text(selectedText);
//    $("#modal_content").click(function() {
//        $("#modal_content").text(this.innerHTML);
//    });
    $(".modal").show();
}

$("#code_editor").hide();

</script>

<?php echo file_get_contents("http://localhost/mywork/carracer"); ?>

<script>
</script>



<div class="alert alert-success" role="alert">Well done! All works...Enjoy being a web developer</div>



<form action="" method="post">
<input id="email" type="text" name="email" placeholder="Enter email here!! ;) lol">
<button id="send">Send</button>
</form>

<script>
$("#send").on('click').submit();
</script>
<?php

\System\Helper::print_pre($MODEL);
?>
