
<?php
include("theme-header.php");
unset($_SESSION["login"]);
unset($_SESSION["admin"]);
?>
<script>
    location.replace("index.php");
</script>

<?php
include("theme-footer.html");
?>