<?php
if(isset($_SESSION['message'])) :
?>
<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Hey!</strong><?=$_SESSION['message']; ?>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<div class="div">
<button type="button" onclick="window.location.href='home.php'" class="btn btn-success">Back to Home</button>
</div>


<?php
   unset($_SESSION['message']);
    endif;
?>