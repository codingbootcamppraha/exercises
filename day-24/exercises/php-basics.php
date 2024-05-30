<!-- #1 -->
<?php
$first_name = 'Bruce';
$surname = 'Wayne';
?>

First name: <?=$first_name?><br>
Surname: <?=$surname?><br>

<!-- #2 -->
<?php
$year_of_birth = 1939;
$height = '186';
?>

Year of birth: <?=$year_of_birth?><br>
Height: <?=$height?><br>

<!-- #3 -->
<?php
define('SERVER_SOFTWARE', 'Apache');
?>

<p>This server is running on <?=SERVER_SOFTWARE?>.</p>

<!-- #4 -->
<?php
define('MY_OS', 'macOS');
?>

<p>My operating system is <?=MY_OS?>.</p>

<!-- #5 -->
<?php
function greetWorld()
{
    echo 'Hello, World!';
}

greetWorld();
?>

<!-- #6 -->
<?php
// function greet($whom)
// {
//     echo '<p>Hello, ' . $whom . '!</p>';
// }

// greet('Prague');
// greet('Berlin');

?>

<!-- #7 -->
<?php
function greeting($whom)
{
    $greeting_string = 'Hello, ' . $whom . '!';
    return $greeting_string;
}

// echo greeting('World');
?>

<!-- #8 -->
<?php
function greet($whom = 'World')
{
    echo '<p>' . greeting($whom) . '</p>';
}

greet('Prague');
greet('Berlin');
greet();
?>

