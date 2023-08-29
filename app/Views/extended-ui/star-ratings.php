<?= $this->extend($view['layout']) ?>
<?= $this->section('main') ?>
<h4 class="fw-bold py-3 mb-4">
  <span class="text-muted fw-light">Extended UI /</span> Star Ratings
</h4>
<div class="row">
  <div class="col-md-4 col-sm-6 col-12 mb-4">
    <div class="card">
      <h5 class="card-header">Basic</h5>
      <div class="card-body">
        <div class="basic-ratings"></div>
      </div>
    </div>
  </div>
  <div class="col-md-4 col-sm-6 col-12 mb-4">
    <div class="card">
      <h5 class="card-header">Read Only</h5>
      <div class="card-body">
        <div class="read-only-ratings" data-rateyo-read-only="true"></div>
      </div>
    </div>
  </div>
  <div class="col-md-4 col-sm-6 col-12 mb-4">
    <div class="card">
      <h5 class="card-header">Custom SVG</h5>
      <div class="card-body">
        <div class="custom-svg-ratings"></div>
      </div>
    </div>
  </div>
  <div class="col-md-4 col-sm-6 col-12 mb-4">
    <div class="card">
      <h5 class="card-header">Half Star</h5>
      <div class="card-body">
        <div class="half-star-ratings" data-rateyo-half-star="true"></div>
      </div>
    </div>
  </div>
  <div class="col-md-4 col-sm-6 col-12 mb-4">
    <div class="card">
      <h5 class="card-header">Full Star</h5>
      <div class="card-body">
        <div class="full-star-ratings" data-rateyo-full-star="true"></div>
      </div>
    </div>
  </div>
  <div class="col-md-4 col-sm-6 col-12 mb-4">
    <div class="card">
      <h5 class="card-header">Multi Color</h5>
      <div class="card-body">
        <div class="multi-color-ratings"></div>
      </div>
    </div>
  </div>
  <div class="col-xl-6 col-12 mb-xl-0 mb-4">
    <div class="card">
      <h5 class="card-header">Events</h5>
      <div class="card-body">
        <div class="row gy-3">
          <div class="col-md d-flex flex-column align-items-start mb-sm-0 mb-3">
            <small class="text-light fw-semibold">onSet Event</small>
            <div class="onset-event-ratings"></div>
          </div>
          <div class="col-md d-flex flex-column align-items-start">
            <small class="text-light fw-semibold">onChange Event</small>
            <div class="onChange-event-ratings mb-3"></div>
            <div class="counter-wrapper">
              <strong>Ratings:</strong>
              <span class="counter"></span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-6 col-12">
    <div class="card">
      <h5 class="card-header">Methods</h5>
      <div class="card-body">
        <div class="methods-ratings"></div>
        <div class="demo-inline-spacing">
          <button class="btn btn-primary btn-initialize">Initialize</button>
          <button class="btn btn-danger btn-destroy">Destroy</button>
          <button class="btn btn-success btn-get-rating">Get Ratings</button>
          <button class="btn btn-info btn-set-rating">Set Ratings to 1</button>
        </div>
      </div>
    </div>
  </div>
</div>
<?= $this->endSection() ?>
<?= $this->section('vendorCss') ?>
  <link rel="stylesheet" href="<?= ADMIN_ASSETS ?>assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css">
  <link rel="stylesheet" href="<?= ADMIN_ASSETS ?>assets/vendor/libs/node-waves/node-waves.css">
  <link rel="stylesheet" href="<?= ADMIN_ASSETS ?>assets/vendor/libs/typeahead-js/typeahead.css">
  <link rel="stylesheet" href="<?= ADMIN_ASSETS ?>assets/vendor/libs/rateyo/rateyo.css">
<?= $this->endSection() ?>
<?= $this->section('vendorJs') ?>
  <script src="<?= ADMIN_ASSETS ?>assets/vendor/libs/rateyo/rateyo.js"></script>
<?= $this->endSection() ?>
<?= $this->section('pageJs') ?>
  <script src="<?= ADMIN_ASSETS ?>assets/js/extended-ui-star-ratings.js"></script>
<?= $this->endSection() ?>
