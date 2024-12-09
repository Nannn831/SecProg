document.addEventListener("DOMContentLoaded", function () {
    const checkAllButton = document.getElementById("checkAll");
    const checkboxes = document.querySelectorAll(".checkbox");

    checkAllButton.addEventListener("click", function () {
        checkboxes.forEach(function (checkbox) {
            checkbox.checked = true;
        });
    });
});
    
$(document).ready(function() {
    $('#clientMessageModal').on('show.bs.modal', function(event) {
      var button = $(event.relatedTarget);
      var clientMessage = button.data('client-message');
      var modal = $(this);
      modal.find('#client-message').text(clientMessage);
    });
  });
