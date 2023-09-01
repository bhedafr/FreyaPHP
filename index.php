<!DOCTYPE html>
<html>
<head>
    <title>Test</title>
</head>
<body>
    <h1>Hello PHP </h1>

    <?php
        echo 'Hello, World!';
    ?>
    <?php
        // PHP Data Objects(PDO) Sample Code:
        try {
            $conn = new PDO("sqlsrv:server = tcp:it-ccdv-sql-freyatest.database.windows.net,1433; Database = IT-CCDV-DB-FreyaTest", "rootAdmin", "Sheridan!321");
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch (PDOException $e) {
            print("Error connecting to SQL Server.");
            die(print_r($e));
        }

        // SQL Server Extension Sample Code:
        $connectionInfo = array("UID" => "rootAdmin", "pwd" => "Sheridan!321", "Database" => "IT-CCDV-DB-FreyaTest", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
        $serverName = "tcp:it-ccdv-sql-freyatest.database.windows.net,1433";
        $conn = sqlsrv_connect($serverName, $connectionInfo);
    ?>
</body>
</html>
