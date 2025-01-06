<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Chekout Makanan</title>
  <link rel="stylesheet" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body>
  <section class="min-vh-100 gradient-custom">
    <div class="container py-5 h-100">
      <div class="row justify-content-center align-items-center h-100">
        <div class="col-12 col-lg-9 col-xl-7">
          <div class="card shadow-2-strong card-registration">
            <div class="card-body p-4 p-md-5">
              <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 food">Food Order</h3>
              <form>

                <div class="row">


                  <div class="form-outline-mkn">
                    <input type="text" id="jenismakanan" class="form-control form-control-lg" />
                    <label class="form-label" for="Jenismakanan">Nama Makanan</label>
                  </div>



                </div>


                <div class="row">

                  <div class="col-md-6 mb-4 pb-2">

                    <div class="form-outline-mkn">
                      <input type="tel" id="jumlah" class="form-control form-control-lg" />
                      <label class="form-label" for="jumlah">Jumlah</label>
                    </div>


                  </div>
                </div>

                <div class="row">
                  <div class="form-outline-mkn">
                    <input type="tel" id="price" class="form-control form-control-lg" placeholder="35.000" />
                    <label class="form-label" for="price">Price</label>
                  </div>


                </div>

                <div class="mt-4 pt-2 btn-mkn">
                  <a href="../index.php" class="btn btn-primary btn-lg" type="button">Back</a>
                  <input class="btn btn-primary btn-lg" type="submit" value="Order" />
                </div>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>