<?php
// Tampilkan info PHP
phpinfo();

// Jalankan command 'whoami' untuk tahu user yang sedang running PHP
echo "<h2>Whoami:</h2>";
echo "<pre>";
echo shell_exec('whoami');
echo "</pre>";

// Jalankan command 'ls' untuk list direktori saat ini
echo "<h2>List Direktori (ls):</h2>";
echo "<pre>";
echo shell_exec('ls');
echo "</pre>";
?>