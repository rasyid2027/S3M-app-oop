

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta
      content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no"
      name="viewport"
    />
    <title>Santri Data &mdash; S3M</title>

    <!-- General CSS Files -->
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
      integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
      crossorigin="anonymous"
    />

    <!-- CSS Libraries -->

    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="assets/css/components.css" />
  </head>

  <body>
    <div id="app">
      <div class="main-wrapper">
        <div class="card-body p-0">
          <div class="table-responsive">
            <table class="table table-striped table-md">
              <tr>
                <th>No</th>
                <th>Name</th>
                <th>Skill Id</th>
                <th>Region</th>
                <th>Action</th>
              </tr>
              <?php 
              
              $santri = new Crud();
              $rows = $santri->getAllData();

              $i = 1;
              foreach( $rows as $row ) {

              ?>
                <tr>
                  <td><?= $i; ?></td>
                  <td><?= $row['name'] ?></td>
                  <td><?= $row['s_name'] ?></td>
                  <td><?= $row['region'] ?></td>
                  <td>
                    <a href="?page=page2&id=<?= $row['id'] ?>" class="btn btn-success">Edit</a>
                    <a href="?page=page3&id=<?= $row['id'] ?>" class="btn btn-danger" onclick="return confirm('yakin ingin menghapus?')">Delete</a>
                  </td>
                </tr>
              <?php $i++; } ?>
            </table>
          </div>
        </div>
      </div>
    </div>

    <!-- General JS Scripts -->
    <script
      src="https://code.jquery.com/jquery-3.3.1.min.js"
      integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
      integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
      integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
      crossorigin="anonymous"
    ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="assets/js/stisla.js"></script>

    <!-- JS Libraies -->

    <!-- Template JS File -->
    <script src="assets/js/scripts.js"></script>
    <script src="assets/js/custom.js"></script>

    <!-- Page Specific JS File -->
  </body>
</html>
