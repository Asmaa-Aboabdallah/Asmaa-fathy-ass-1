<?php

$devData = [
    [
        'name' => 'ahmed hamdy',
        'job' => 'front-end',
        'experience' => 3
    ],
    [
        'name' => 'mohammed shaker',
        'job' => 'back-end',
        'experience' => 2
    ],
    [
        'name' => 'ali hassan',
        'job' => 'full-stack',
        'experience' => 4
    ],
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Developers Data</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
</head>
<body>
<?php foreach ($devData as $developer){?>
<div class="card m-3" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title"><?php echo $developer['name'];?></h5>
    <h6 class="card-subtitle mb-2 text-muted"><?php echo $developer['job'];?></h6>
    <p class="card-text"><?php echo $developer['experience'] ." years of experience" ;?></p>
  </div>
</div>
<?php } ?>
    
</body>
</html>