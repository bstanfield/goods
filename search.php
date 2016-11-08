<html>
<head>
    <title>Goods</title>
</head>
<style>
</style>

<body>

<?php

$conn = mysqli_connect("uscitp.com", "jacksocb", "6634277976", "jacksocb_goods");

if(mysqli_connect_errno()) {
    echo mysqli_connect_errno();
    exit();
}
?>

<div>Goods Search</div>
<div>
    <div>
        <form action = "search_results-0.1.php" method = "post">
            Company Name: <select name="company">

                <option value="ALL">Select a Company</option>
                <?php
                $companies = "SELECT company_name FROM companies";
                $results = mysqli_query($conn, $companies);

                if(!$results) {
                    echo "db error " . mysqli_error($results);
                    exit();
                };
                while($currentrow = mysqli_fetch_array($results)) {

                    echo "<option value='" . $currentrow['companies'] .">"
                        . $currentrow['company_name'] . "</option>";
                }
                ?>
            </select>

            </br> </br>
            <input type = "submit">

        </form>
    </div>
</div>
</html>
