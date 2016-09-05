<!DOCTYPE html>
<html>
<head>
      <meta charset="utf-8">
      <title></title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
      <table class="table table-hover table-striped table-condensed">
            <thead>
                  <tr>
                        <th>
                              <p>SC</p>
                        </th>
                  </tr>
            </thead>
            <tbody>
                  <?php
                  $i=0;
                  foreach($matrizProductos as $registro) {
                        $i++;
                        ?>
                        <tr>
                              <td>
                                    <p><?php echo $i ."-". $registro["SC Number"] ?></p>
                              </td>
                        </tr>
                        <?php } ?>
                  </tbody>
            </table>



      </body>
      </html>
