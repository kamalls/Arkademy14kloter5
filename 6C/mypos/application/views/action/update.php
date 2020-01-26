<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?=base_url()?>assets/css/bootstrap.min.css" crossorigin="anonymous">

    <link rel="stylesheet" href="<?=base_url()?>assets/font-awesome-4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="<?=base_url()?>assets/css/style.css">

    <title>web arkademy</title>
  </head>
  <body>

    <!-- Main content -->
    <section class="content">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">EDIT DATA</h3>
          <div class="float-right">
            <a href="<?=site_url('product')?>" class="btn btn-warning btn-flat">
              <i class="fa fa-undo"></i> Back
            </a>
          </div>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-md-4 col-md-offset-4">
              <form action="<?=site_url('product/Update')?>" method="post">

                <input type="hidden" name="id" value="<?php= $tb_product->id ?>">
                <div class="form-group">
                  <label>Cashier *</label>
                  <select name="cashier" class="form-control">
                    <?php foreach ($tb_cashier as $casir): ?>
                      <option value="<?= $casir->id ?>"<?php if($casir->id == $tb_product->id) echo 'selected'; ?>><?= $casir->name ?></option>
                    <?php endforeach; ?>
                  </select>
                </div>
                 <div class="form-group">
                  <label>Category *</label>
                  <select name="category" class="form-control">
                    <?php foreach ($tb_category as $category): ?>
                        <option value="<?= $category->id ?>"<?php if($category->id == $tb_product->id) echo 'selected'; ?>><?= $category->name ?></option>
                    <?php endforeach; ?>
                  </select>
                </div>

                <div class="form-group">
                  <label>Name *</label>

                  <input type="text" name="name" class="form-control" value="<?= $tb_product->name ?>">
                </div>
                <div class="form-group">
                  <label>Price *</label>
                  <input type="text" name="price" class="form-control" value="<?= $tb_product->price ?>">
                </div>
               
                <div class="form-group">
                  <button type="submit" class="btn btn-warning text-white" value="simpan">
                    <i class="fa fa-paper-plane"> EDIT</i></button>
                  <button type="Reset" class="btn btn-secondary">Reset</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<?=base_url()?>assets/js/bootstrap.min.js?>"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>