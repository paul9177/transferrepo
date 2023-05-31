<?php

/** @var $output
 * https://www.google.com/search?client=firefox-b-d&q=real+php+oob+and+mysql+tut
 * soll enthalten
 * - tuto real oop with php and mysql  ---  hatte ich in litle dell hyper schon angefangen
 * -- dort sollte auch phpunit stattfinden
 * - nach mvc standards
 * - in laravel implementiert oder app mit laravel erstellt und ldiese dann migriert
 *
 * Hallo World Test
 */
function test_command($commando='ls')
{
    // exec('mpstat -P ALL');
    // echo exec('iamexecfunction'); (on a system with the "iamexecfunction" executable in the path)
    // Use ls command to shell_exec
    // function meinShellTerminalWindow
    $output = shell_exec('ls'); $output = shell_exec(''.$commando.'');
    //$output = shell_exec('python -V'); // -V version anzeigen ABER -v call the python console
    //$output = shell_exec('echo Textstring'); // -V version anzeigen ABER -v call the python console
    // 1.mögli
    //echo($output);
    //echo('<br>');

    // 2.mögli
    //print(shell_exec(    'ls'));
    //echo('<br>');
    return $output;
}
class Database
{
    private $commando = 'ls -la';

    public function __contruct($commando=0)
    {
        $this->commando = $commando;
    }
    public function commando_handling()
    {

    }
    public function tableExists($table)
    {

        $tablesInDb = mysqli_query($this->con, 'SHOW TABLES FROM '.$this->db_name.' LIKE "'.$table.'"');
        if($tablesInDb) {
            if(mysqli_num_rows($tablesInDb) == 1) {
                return true;
            } else {
                return false;
            }
        }
    }
}


//
print(test_command('composer -v'));


?>
<!doctype html>
<html lang="de">
<head>
    <title>frontend-ubuntu-server.anwendungsentwickler.info</title>
    <meta name="robots" content="index,follow">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="revisit-after" content="1 days">
    <meta name="content-language" content="de">
    <meta name="language" content="deutsch, de">
    <!-- folgt der styleblah -->
    <!--style>

        html,body {
            min-height: 100%;
            padding: 0.25rem;
        }

        body {
            font-family:        sans-serif;
            font-size:          1rem;
            font-weight:        400;
            line-height:        1.5;
            color:              #545454;
            background-image:   -moz-linear-gradient(top, #ffffff, #e0e0e0);
            background-image:   -webkit-linear-gradient(top, #ffffff, #e0e0e0);
            background-image:   -o-linear-gradient(top, #ffffff, #e0e0e0);
            background-image:   linear-gradient(to top, #ffffff, #e0e0e0);
            background-color:   #e0e0e0;
            padding-top:        1rem;
            border-top:         5px solid #3f84dd;
            border-bottom:      5px solid #3f84dd;
            border-left:         5px solid #3f84dd;
            border-right:      5px solid #3f84dd;
            margin: 0;
        }

        .container {
            max-width: 1140px;
            margin: 0 auto;
        }

        h1, h2, h3 {
            margin-top:    0;
            margin-bottom: 0.5rem;
            font-weight:   700;
        }

        h1 {
            font-size: 2.5rem;
        }

        h2 {
            font-size: 2rem;
        }

        h3  {
            font-size: 1.25rem;
        }

        a {
            color:              #1f6ed7;
            text-decoration:    none;
        }

        section {
            padding-top: 1rem;
        }

        .small {
            font-size: small;
        }

        .large {
            font-size: large;
        }

        .bold {
            font-weight: bold;
        }

        .text-info,
        .text-info a {
            color: #4aafec !important;
        }

        .text-danger {
            color: #dc3545 !important;
        }

        .text-center {
            text-align: center !important;
        }

        .alert {
            position: relative;
            padding: .75rem 1.25rem;
            margin-bottom: 1rem;
            border: 1px solid transparent;
        }

        .alert-info {
            color: #0c5460;
            background-color: #d1ecf1;
            border-color: #bee5eb;
        }

        .alert-warning {
            color: #856404;
            background-color: #fff3cd;
            border-color: #ffeeba;
        }

        hr {
            display: block;
            height: 1px;
            border: 0;
            border-top: 1px solid #ccc;
            margin: 3rem 0 1.25rem 0;
        }

    </style-->
    <style title="randlos sollte es sein">
        * { margin:0em; padding:0em; }
    </style>
</head>
<body class="container">
<div>
    ...
    <hr>
    <section class="container">
        section
    </section>
    ...
</div>
</body>
</html>


