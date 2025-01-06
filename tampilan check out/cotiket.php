<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Checkout Tiket</title>
  <link rel="stylesheet" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body>
  <section class="min-vh-100 gradient-custom">
    <div class="container py-5 h-100">
      <div class="row justify-content-center align-items-center h-100">
        <div class="col-12 col-lg-9 col-xl-7">
          <div class="card card-registration">
            <div class="card-body p-4 p-md-5">
              <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Book Your Ticket</h3>
              <form>

                <div class="row">


                  <div class="form-outline">
                    <select name="cars" id="cars" class="form-control form-control-lg">
                      <option value="dr_strange">Dr Strange Multiverse of Madness</option>
                      <option value="star_war">Star Wars</option>
                      <option value="the_conjuring">The Conjuring</option>
                      <option value="dune">Dune</option>
                      <option value="love_deaths">Love Deaths robots</option>
                      <option value="kimi_no_nawa">Kimi No Nawa</option>
                      <option value="fantastic_beast">Fantastic Beast </option>
                      <option value="searching">Searching</option>
                      <option value="astar">A Star Is Born</option>
                      <option value="first">First Reformed</option>
                      <option value="spiderman">Spiderman Into Spider-verse</option>
                      <option value="venom">Venom</option>
                      <option value="predator">Predator</option>
                      <option value="black_panther">Black Panther</option>
                      <option value="blade_runner">Blade Runner</option>
                      <option value="1917">1917</option>
                      <option value="joker">Joker</option>
                      <option value="tekni_no_ko">Tenki No Ko</option>
                      <option value="glass">Glass</option>
                      <option value="birds_of_prey">Birds Of Prey</option>
                    </select>
                    <label class="form-label" for="MovieTitle">Movie Title</label>
                  </div>



                </div>

                <div class="row">
                  <div class="col-md-6 mb-4 d-flex align-items-center">



                    <div class="form-schedule col-md-6 mb-4">

                      <h6 class="mb-2 pb-1">Schedule: </h6>

                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="schedule" value="option1" checked />
                        <label class="form-check-label" for="schedule">09:00:00</label>
                      </div>

                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="schedule" value="option2" />
                        <label class="form-check-label" for="schedule">11:00:00</label>
                      </div>

                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="schedule" value="option3" />
                        <label class="form-check-label" for="schedule">13:00:00</label>
                      </div>

                    </div>
                  </div>

                  <div class="row">

                    <div class="col-md-6 mb-4 pb-2">

                      <div class="col-12 option-select">

                        <select class="select form-control-lg">
                          <option value="1" disabled>Choose Chair</option>
                          <option value="2">A1</option>
                          <option value="3">A2</option>
                          <option value="4">A3</option>
                          <option value="2">A4</option>
                          <option value="3">B1</option>
                          <option value="4">B2</option>
                          <option value="2">B3</option>
                          <option value="3">B4</option>
                          <option value="4">C1</option>
                          <option value="2">C2</option>
                          <option value="3">C3</option>
                          <option value="4">C4</option>
                        </select>
                       </div>
                       <label class="form-label select-label">Choose Chair</label>

                    </div>
                  </div>

                  <div class="row">
                    <div class="form-outline">
                      <input type="tel" id="price" class="form-control form-control-lg" readonly placeholder="35.000" value ="Rp. 35.000" />                      
                      <label class="form-label" for="price">Price</label>
                    </div>


                  </div>

                  <div class="mt-4 pt-2 btn-sbmt">
                    <a href="../index.php" class="btn btn-primary btn-lg" type="button">Back</a>
                    <input class="btn btn-primary btn-lg" type="submit" value="Book" />
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