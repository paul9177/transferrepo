<?php
//exec('mpstat -P ALL');
// Use ls command to shell_exec
// function meinShellTerminalWindow
$output = shell_exec('ls');
$output = shell_exec('python -V'); // -V version anzeigen ABER -v call the python console
echo($output);
echo('<br>');
print(shell_exec(
    'ls'
));

// Display the list of all file
// and directory
?>


<?php
// (on a system with the "iamexecfunction" executable in the path)
//echo exec('iamexecfunction');
?>




<body>
<h2>Was passiert? Wenn ich 2 Elemente an body append ...</h2>

</body>