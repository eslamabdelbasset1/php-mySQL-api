

<?php
    $connection = mysqli_connect("localhost", "root", "", "route_35");

    $query = "SELECT * FROM `customers` LIMIT 10";
    $runQuery = mysqli_query($connection, $query);

    $results = mysqli_fetch_all($runQuery, MYSQLI_ASSOC);
    echo "<pre>";
    print_r($results);
    echo "<pre>";
    ?>