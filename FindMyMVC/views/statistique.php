<div class="container">
  <section>
    <div class="row">
      <div class="col-12 mt-3 mb-1">
        <h5 class="text-uppercase">FindMy STATISTIQUE</h5>
        <p>statistique cards</p>
      </div>
    </div>
    <div class="row">
      <div class="col-xl-3 col-sm-6 col-8 mb-4 container">
        <div class="card">
          <div class="card-body">
            <div class="d-flex justify-content-between px-md-1">
              <div class="align-self-center">
                 <i class="fa-solid fa-person-circle-question text-danger fa-3x"></i>     
              </div>
              <div class="text-end">
                <h3><?= $count['countRow'] ?></h3>
                <p class="mb-0">Declarations Perdu</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-sm-6 col-8 mb-4 container">
        <div class="card">
          <div class="card-body">
            <div class="d-flex justify-content-between px-md-1">
              <div class="align-self-center">
              <i class="fa-solid fa-hands-holding-circle fa-3x text-success"></i>
              </div>
              <div class="text-end">
                <h3><?= $countT['countRow'] ?></h3>
                <p class="mb-0">Declarations Trouve</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-sm-6 col-8 mb-4 container">
        <div class="card">
          <div class="card-body">
            <div class="d-flex justify-content-between px-md-1">
              <div class="align-self-center">
              <i class="fa-solid fa-clone fa-3x text-info"></i>
                <!-- <i class="fas fa-chart-line text-success "></i> -->
              </div>
              <div class="text-end">
                <h3>64.89 %</h3>
                <p class="mb-0">Objets similaire</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-sm-6 col-8 mb-4 container">
        <div class="card">
          <div class="card-body">
            <div class="d-flex justify-content-between px-md-1">
              <div class="align-self-center">
              <i class="fa-solid fa-eye fa-3x"></i>
                <!-- <i class="fas fa-map-marker-alt text-danger "></i> -->
              </div>
              <div class="text-end">
                <h3>423</h3>
                <p class="mb-0">Total Visits</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
