<?php
$username = 'uu0kppwtt6g4fbe1';
$password = 'Vb6BH4Znb1RzPptTls1Q';
$host = "b7tf9z50kyvnzli2yxoq-mysql.services.clever-cloud.com:3306";
$dbname = 'b7tf9z50kyvnzli2yxoq';

$pdo = new PDO("mysql:host={$host};dbname={$dbname}", $username, $password);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$con = mysqli_connect($host, $username, $password, $dbname);
if (!$con) {
    echo 'please check your database connection';
}
$statment = $pdo->prepare('SELECT * FROM blog ');
$statment->execute();

$result = $statment->fetchall(PDO::FETCH_ASSOC);

echo '<pre>';
print_r($result);
echo '</pre>';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php foreach ($result as $i => $blog) : ?>
                    
                    <div class="card mb-3 shadow-sm rounded" style="width :70%; margin:0 auto; background-color: rgb(0,0,0,0.5);">
                        <div class="card-body">
                            <h5 class="card-title " style="color:white; font-size:1.5rem;"><?php echo $blog['Title'];  ?></h5>
                            <h6 class="card-subtitle mb-2 " style="color:rgb(255,255,255,0.5);"><?php echo $blog['Author'];  ?></h6>
                            <p class="card-text"><small class="text-muted" style="color:white;"><?php echo $blog['Date'];  ?></small></p>
                            <p class="card-text" style="color:white;"><?php echo $blog['Article'];  ?></p>

                            

                        </div>
                    </div>
                <?php endforeach ?>
</body>
</html>