<!DOCTYPE html>
<html>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="4/w3.css">
<body>

<div class="w3-container">
  <h2>W3.CSS Modal</h2>
  <p>In this example we demonstrate how to close the modal by clicking outside of the modal box.</p>

  <button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-black">Open Modal</button>

  <div id="id01" class="w3-modal">
    <div class="w3-modal-content w3-card-4">
      <header class="w3-container w3-teal">
        <span onclick="document.getElementById('id01').style.display='none'"
        class="w3-button w3-display-topright">&times;</span>
        <h2>Modal Header</h2>
      </header>
      <div class="w3-container">
        <p>Payment Notification</p>
        <p>Only Bitcoin payment method is available right now, kindly make your deposit into this bitcoin wallet address<br>
          x23kdciijosjsofkvolodjod<br>
          after payment has been made, send proof of payment to support@blockcryptdeck.info so your deposit can be confirmed and validated, thanks.
        </p>
      </div>
      <footer class="w3-container w3-teal">
        <p>Modal Footer</p>
      </footer>
    </div>
  </div>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

</body>

<!-- Mirrored from www.w3schools.com/w3css/tryit.asp?filename=tryw3css_modal_close by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 30 Jul 2018 01:53:22 GMT -->
</html>
