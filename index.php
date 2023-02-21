<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>

  <?php

$originalText = $_GET['originalText'] ?? "";
$encriptedText = $_GET['encriptedText'] ?? "";
$dycriptedText = $_GET['dycriptedText'] ?? "";
$inputText = $_GET['inputText'] ?? "";

?>

<div class="container">
    <div class="row">
                        <div class="col-md-6">
                        <form action="submit.php" method="post">
                    <input type="hidden" name="action" value="enc">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Write a text to encrypt</label>
                    <textarea name="message" class="form-control" id="" cols="30" rows="10" ><?php echo $originalText ?></textarea>

                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Encrypted Text</label>
                    <p><?php echo $encriptedText ?></p>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
                </form>
        </div>

         <div class="col-md-6">
                        <form action="submit.php" method="post">
                    <input type="hidden" name="action" value="dyc">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Write a text to dycript</label>
                    <textarea name="message" class="form-control" id="" cols="30" rows="10" value="<?php echo "gsd" ?>"> <?php echo trim($inputText) ?> </textarea>

                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Dycript Text</label>
                    <p><?php echo ($dycriptedText) ?></p>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
                </form>
        </div>
    </div>

</div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>