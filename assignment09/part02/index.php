<!DOCTYPE html>
<head>
    <title>Assignment 9, Part 2</title>
</head>
<body>
    
    <?php
        //Task 3.1: Change these items to reflect
        //four of your favorite things
        $my_favorite_things = array (
            "My first favorite thing is singing",
            "My second favorite thing is cooking",
            "My third favorite thing is dancing",
            "My fourth favorite thing is movie"
        );
    ?>

    <h1>My Favorite Things</h1>
        <!-- Task 3.2: Code to output things below -->
        <?php 
        $counter = 0
        while ($counter < count($my_favorite_things)){
            echo $my_favorite_things[$counter];
            $counter++;
        }
        ?>


    </body>

