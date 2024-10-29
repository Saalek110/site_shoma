<?php
echo dirname('.');    // Will return '.'.
echo "<br>".dirname('/');    // Will return `\` on Windows and '/' on *nix systems.
echo "<br>".dirname('\\');   // Will return `\` on Windows and '.' on *nix systems.
echo "<br>".dirname('C:\\'); // Will return 'C:\' on Windows and '.' on *nix systems.
?>