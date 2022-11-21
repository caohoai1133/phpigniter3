<?php
$data =array (
    array (
        "id"=>1,
        "title"=>"title1",
        "content"=>"aaaaaaaaaaaaaa"
    ),
    array (
        "id"=>2,
        "title"=>"title2",
        "content"=>"aaaaaaaaaaaaaa"
    ),
    array (
        "id"=>3,
        "title"=>"title3",
        "content"=>"aaaaaaaaaaaaaa"
    ),
    array (
        "id"=>4,
        "title"=>"title4",
        "content"=>"aaaaaaaaaaaaaa"
    ),
);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        .col-sm-6{
            margin-top: 10px !important;
        }
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>

<div class="row">
    <?php foreach($data as $dat){?>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title"><?php echo htmlspecialchars($dat['title']); ?></h5>
        <p class="card-text"><?php echo htmlspecialchars($dat['content']); ?></p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
  </div>
  <?php } ?>
  

  
  </div>
  

</body>
</html>