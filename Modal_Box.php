<?php
function message_box($title, $message)
{
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="design.css">
    <title>Modal</title>
</head>
<body>
<div class="modal-container" id="message_box">
        <div class="modal-content">
            <div class="modal-title">
                <?= $title ?>
            </div>
            <div class="modal-body">
                <?= $message ?>
            </div>
            <div class="modal-footer">
                <button id="ok">OK</button>
            </div>
        </div>
    </div>

    <script>
        let ok = document.getElementById("ok");
        ok.onclick = function() {
            document.getElementById("message_box").style.display = "none";
        }
    </script>
    
    <?php
}
 message_box("Hello", "This is a test message!");
?>
</body>
</html>
