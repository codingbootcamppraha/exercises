<h1>PHP introduction</h1>

<!-- Variables use -->
<?php
$my_new_variable = ':)';
// $myNewVariable = ':(';
// $mynewVariable !== $myNewVariable

echo $my_new_variable;
?>

<!-- echo shortcut -->
<p>
    <?='Hello world'?>
</p>

<!-- Adding up strings -->
<p>
    <?='Hello world' . '!'?>
</p>

<!-- Constants -->
<?php
define('TEST_NUMBER', 25);

echo TEST_NUMBER;
?>

<br>

<!-- Scope example -->
<?php
$a = 1;

echo $a; // Works fine

function fooFunction($param_a)
{
    // echo $a; // Doesn't work, $a is not defined (defined outside the function)
    echo $param_a; // works because is passed as a parameter
    $b = 2;
    echo $b; // Works fine
    echo TEST_NUMBER;
}

fooFunction($a);
// echo $b; // Doesn't work, $b is not defined (defined only inside the function)
?>

<br>

<!-- Function example -->
<?php
function myTest($parameter)
{
    $result = $parameter + 2;

    return $result;
}

$my_function_result = myTest(2);
echo $my_function_result;
?>

<!-- echo html tags -->
<?php
echo '<h2>:)</h2>'
?>

<?php
// function test($a, $b = 'default', $c = 'default')
// {
//     return 'THIS IS A GOOD WAY';
// }

// test('a_value');


// function testb($a = 'default', $b)
// {
//     return 'THIS IS A BAD WAY';
// }

// testb('a_value'); // will cause too few arguments error
?>

<?php
/**
 * raises the value of it's argument
 */
function myFooFunction($bar)
{
    // $bar is a reference to the variable the function is called with

    $bar = 'test';
}

$foo = 1;

// $foo is 1
echo $foo;

myFooFunction($foo);

// $foo is still 1
echo $foo;

?>

<?php
/**
 * raises the value of it's argument
 */
function myFooFunctionReference(&$bar)
{
    // $bar is a reference to the variable the function is called with

    $bar = 'test';
}

$foo = 1;

// $foo is 1
echo $foo;

myFooFunctionReference($foo);

// $foo is 'test'
echo $foo;

?>
<br>

<!-- Arrays- -->
<?php
$arr = [
    3 => 1,
    2 => 2,
    10 => 3
];

echo $arr[3];
?>