<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP intro</title>
</head>

<body>
    <h1>Hello</h1>

    <!-- <?php
        // echo 'Hello world!';

        $my_greeting = "Hello, world!";

        echo $my_greeting;

    ?>

    <?= 'Hello world!'; ?>

    <br><br>



    <?php 
        $first_name = 'David';
        $surname = 'Ballesteros Ortiz';

        echo 'First name: ', $first_name, '<br/>';
        echo 'Surname: ', $surname, '<br/>';
    ?>


    <p>First name: <?php $first_name = 'Adina'; echo $first_name;?></p>
    <p>Surname: <?php $surname = 'Adina'; echo $surname;?></p>


    <?php echo "First name: $first_name <br/> Surname: $surname"; ?>
    
    <br><br><br>

    <?php
        $a = 1; // $a now contains a reference to where 1 is stored in my memory
        echo $a, '<br>';
        $a = 5; // $a still contains the same reference (same address) but the value has changed
        echo $a, '<br>';
        $b = &$a; // $b also contains the same reference than a
        echo $b, '<br>';
        $b = 3; // now both b and a will contain 3
        echo $b, '<br>', $a, '<br>';
        $a = 7;
        echo $b, '<br>', $a, '<br>';

    ?> -->

    <?php 
        function headline($text, $level = 1)
        {
            return "<h$level>$text</h$level>";
        } 

        echo headline('Hello', 2);
        echo headline('Bye', 5);
    ?>

    <?php 
        $array = [
            '1' => 1,
            2 => 2,
            'three' => 3
        ];

        var_dump($array);

        echo $array[1];

        $tomato = [
            'color' => 'red',
            'weight' => 3,
            'price' => 2.99
        ];

        $cart = [
            $tomato,
            'banana',
            'tuna'
        ];

        $empty_array = [];

        echo '<br>';

        foreach($tomato as $key => $item) {
            echo $key, '=>', $item;
            echo '<br>';
        }

        $my_array = [
            '0' => 1,
            '1' => 2,
            'two' => 3
        ];

        echo count($my_array);

        $my_second_array = [
            'two' => 4,
            '3' => 5,
            '4' => 6
        ];

        $new_array = array_merge($my_array, $my_second_array);

        var_dump($new_array);


    
    ?>

    <script>
        const my_array = [1,2,3];
        console.log(my_array.length);
        
    </script>

</body>

</html>