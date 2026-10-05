<?php 

if(isset($_SESSION['erreur']) == true) :
    $msg= $_SESSION['erreur']['msg'];
    $type= $_SESSION['erreur']['type'];
?>

<div id="msg_error" style="background-color:var(--<?= $type ?>)">
    <span>
        <i class="fa-solid fa-spinner fa-spin"></i>
    </span>
    <p>
        <?= $msg ?>
    </p>
</div>

<script type="text/javascript">
    const msg_error= document.querySelector("#msg_error");
    setTimeout(function() {
        msg_error.style.display= "none";
    }, 3000);
</script>

<?php 
unset($_SESSION['erreur']);
endif; 
?>