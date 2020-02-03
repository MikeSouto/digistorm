<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css" />

    <title>Gallery</title>
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h1>Gallery</h1>
            </div>
        </div>
        <div class="row">
            <form action="./index.php" method="GET" accept-charset="UTF-8">
                <div class="col-xs-9 form-group">
                    <label>Image type</label>
                    <select name="type" class="form-control" id="type">
                        <option value="" >All</option>
                        <?php if(count($types) > 0): foreach($types as $type): ?>
                        <option value="<?php echo $type; ?>" <?php echo ($img_type == $type) ? 'selected' : '';?> ><?php echo $type; ?></option>
                        <?php endforeach;endif; ?>
                    </select>
                </div>
                <div class="col-xs-9 form-group text-left">
                    <button type="submit" class="btn btn-success">Submit</button>
                </div>
            </form>
        </div>
        <div class="row">
          <?php if(count($images) > 0): foreach($images as $image): ?>
          <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                <a href="<?php echo $image['fullpath']; ?>" data-toggle="lightbox" data-title="<?php echo $image['name'] ?>">
                    <img src="<?php echo $image['fullpath']; ?>" class="img-thumbnail">
                </a>
          </div>
          <?php endforeach;endif; ?>
        </div>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.js"></script>
    <script type="text/javascript">
        $(document).on('click', '[data-toggle="lightbox"]', function(event) {
            event.preventDefault();
            $(this).ekkoLightbox();
        });
    </script>
  </body>
</html>