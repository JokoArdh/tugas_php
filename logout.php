<?php
session_start();
session_destroy();
echo "anda berhasil keluar. <a href='index.php?pesan=logout'>Login terlebih dahulu</a>";
?>