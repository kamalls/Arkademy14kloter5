<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" crossorigin="anonymous">

    <link rel="stylesheet" href="assets/font-awesome-4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="assets/css/style.css">

    <title>web arkademy</title>
  </head>
  <body>

    <!-- image/logo -->
    <nav class="navbar navbar-light shadow p-3 mb-5 bg-white rounded">
      <a class="navbar-brand" href="#">
        <img src="assets/img/arkademy.png" width="70" height="40" alt="">
      </a>
      <!-- search -->
      <form class="form-inline">
        <input class="form-control mr-2" type="search" placeholder="Search.." aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>

        <a href="<?=site_url('product/tambahData')?>" class="btn btn-warning text-white shadow p-2">
          ADD</i>
        </a>
      </form>
    </nav>


    <!-- Table -->
    <table class="table shadow p-3 mb-5 bg-white rounded">
      <thead class="thead text-white">
        <tr>
          <th style="padding-left: 25px;" scope="col">No</th>
          <th scope="col">Cashier</th>
          <th scope="col">Product</th>
          <th scope="col">Category</th>
          <th scope="col">Price</th>
          <th width="12%;" colspan="2">Action</th>
        </tr>
      </thead>
      <tbody>

        <?php $no =1;
        foreach($tb_product as $prdk) : ?>
        <tr>
          <th style="padding-left: 30px;"><?= $no++ ?></th>
          <td><?= $prdk->cashier_name ?></td>
          <td><?= $prdk->product_name ?></td>
          <td><?= $prdk->category_name ?></td>
          <td><?= $prdk->product_price ?></td>

          <td><a href="<?=site_url('product/edit/'.$prdk->product_id)?>"><span style="font-size: 24px; color: green;"><i class="fa fa-edit"></i></span></a></td>
          <td onclick="javascript: return confirm('Anda yakin hapus?')"><a href="<?=site_url('product/delete/'.$prdk->product_id)?>"><span style="font-size: 24px; color: red;"><i class="fa fa-trash"></i></span></a></td>
        </tr>
        <?php endforeach; ?>
       
      </tbody>
    </table>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>