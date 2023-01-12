<?php
class message
{
  public static function show_modal($header, $body)
  {
    echo '<div class="modal" id="modal">
        <div class="modal-header">
            <span>' . $header . '</span>
        </div>
        <div class="modal-body">
            <span>' . $body . '</span>
        </div>
        <div class="modal-footer">
            <button type="button" onclick="hideModal()">OK</button>
        </div>
    </div>
    <script>
        const modal = document.getElementById("modal")
        function showModal() {
            modal.style.display = "block";
        }
        function hideModal() {
            modal.style.display = "none";
        }
    </script>';
  }
}