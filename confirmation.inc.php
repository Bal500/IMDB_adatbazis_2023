<?php
echo '<script>
        if (confirm("Biztosan törölni akarod a felhasználód? A művelet nem vonható vissza!")) {
            window.location.href = "deleteuser.inc.php";
        }
    </script>';
?>