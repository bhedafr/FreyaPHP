<!DOCTYPE html>
<html>
<head>
    <title> Database! </title>
</head>
<body>
    <h1>Hello World PHP</h1>

    <?php
    // Define the connection details
    $serverName = "tcp:it-ccdv-sql-freyatest.database.windows.net,1433";
    $connectionOptions = array(
        "Database" => "IT-CCDV-DB-FreyaTest",
        "Uid" => "rootAdmin",
        "PWD" => "{Sheridan!321}"
    );

    // Establish the connection
    $conn = sqlsrv_connect($serverName, $connectionOptions);

    if (!$conn) {
        die("Connection failed: " . sqlsrv_errors());
    }

    // Define the SQL query
    $sql = "SELECT TOP 20 pc.Name as CategoryName, p.name as ProductName
            FROM SalesLT.ProductCategory pc
            JOIN SalesLT.Product p
            ON pc.productcategoryid = p.productcategoryid";

    // Execute the SQL query
    $query = sqlsrv_query($conn, $sql);

    if (!$query) {
        die("Query failed: " . sqlsrv_errors());
    }

    // Fetch and display the results
    while ($row = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC)) {
        echo "<p>Category Name: " . $row['CategoryName'] . "</p>";
        echo "<p>Product Name: " . $row['ProductName'] . "</p>";
        echo "<hr>";
    }

    // Close the connection
    sqlsrv_close($conn);
    ?>

</body>
</html>
