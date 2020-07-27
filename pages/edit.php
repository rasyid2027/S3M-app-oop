<?php 

$edit = new Crud();
$row = $edit->getDataById($_GET['id']);
$rows = $edit->getSkillData();

if( isset($_POST['submit']) )
{
  $stmt = $edit->setData($_POST);

  if( $stmt > 0 )
  {
    echo "
          <script>
            alert('successfully edited data')
            document.location.href = 'santri-data.php';
          </script>
        ";
  } else {
    echo "
          <script>
            alert('failed to edit data')
            document.location.href = 'santri-data.php';
          </script>
        ";
  }
}


?>

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
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <form action="" method="POST">
                    <div class="card-header">
                      <h4>Edit Data</h4>
                    </div>
                    <div class="card-body">
                      <div class="form-group row mb-4">
                        <div class="col-sm-12 col-md-7">
                          <input type="hidden" class="form-control" name="id" value="<?= $row->id ?>">
                        </div>
                      </div>
                      <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Name</label>
                        <div class="col-sm-12 col-md-7">
                          <input type="text" class="form-control" name="name" value="<?= $row->name ?>">
                        </div>
                      </div>
                      <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Skill</label>
                        <div class="col-sm-12 col-md-7">
                          <select class="form-control selectric" name="skill_id">
                          <?php foreach( $rows as $s_row ) { ?>
                            <option value="<?= $s_row['s_id'] ?>" <?php if( $s_row['s_id'] == $row->skill_id ) { ?> selected <?php } ?> ><?= $s_row['s_id'] . ". " . $s_row['s_name'] ?></option>
                          <?php } ?>
                          </select>
                        </div>
                      </div>
                      <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Region</label>
                        <div class="col-sm-12 col-md-7">
                          <input type="text" class="form-control inputtags" name="region" value="<?= $row->region ?>">
                        </div>
                      </div>
                      <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                        <div class="col-sm-12 col-md-7">
                          <button class="btn btn-primary" name="submit">Save Changes</button>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
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
