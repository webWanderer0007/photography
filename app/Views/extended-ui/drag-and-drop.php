<?= $this->extend($view['layout']) ?>
<?= $this->section('main') ?>
<h4 class="fw-bold py-3 mb-4">
  <span class="text-muted fw-light">Extended UI /</span> Drag &amp;
  Drop
</h4>
<div class="row mb-4" id="sortable-cards">
  <div class="col-lg-3 col-md-6 col-sm-12">
    <div class="card drag-item cursor-move mb-lg-0 mb-4">
      <div class="card-body text-center">
        <h2>
          <i class="ti ti-shopping-cart text-success display-6"></i>
        </h2>
        <h4>Monthly Sales</h4>
        <h5>2362</h5>
      </div>
    </div>
  </div>
  <div class="col-lg-3 col-md-6 col-sm-12">
    <div class="card drag-item cursor-move mb-lg-0 mb-4">
      <div class="card-body text-center">
        <h2>
          <i class="ti ti-world text-info display-6"></i>
        </h2>
        <h4>Monthly Visits</h4>
        <h5>687,123</h5>
      </div>
    </div>
  </div>
  <div class="col-lg-3 col-md-6 col-sm-12">
    <div class="card drag-item cursor-move mb-lg-0 mb-4">
      <div class="card-body text-center">
        <h2>
          <i class="ti ti-gift text-danger display-6"></i>
        </h2>
        <h4>Products</h4>
        <h5>985</h5>
      </div>
    </div>
  </div>
  <div class="col-lg-3 col-md-6 col-sm-12">
    <div class="card drag-item cursor-move mb-lg-0 mb-4">
      <div class="card-body text-center">
        <h2>
          <i class="ti ti-user text-primary display-6"></i>
        </h2>
        <h4>Users</h4>
        <h5>105,652</h5>
      </div>
    </div>
  </div>
</div>
<div class="row mb-4">
  <div class="col-12">
    <div class="card">
      <h5 class="card-header">Images</h5>
      <div class="card-body">
        <div class="d-flex flex-wrap mb-3 gap-2" id="image-list-1">
          <img class="rounded-circle drag-item cursor-move" src="<?= ADMIN_ASSETS ?>assets/img/avatars/1.png" alt="avatar" height="50" width="50">
          <img class="rounded-circle drag-item cursor-move" src="<?= ADMIN_ASSETS ?>assets/img/avatars/2.png" alt="avatar" height="50" width="50">
          <img class="rounded-circle drag-item cursor-move" src="<?= ADMIN_ASSETS ?>assets/img/avatars/3.png" alt="avatar" height="50" width="50">
          <img class="rounded-circle drag-item cursor-move" src="<?= ADMIN_ASSETS ?>assets/img/avatars/4.png" alt="avatar" height="50" width="50">
          <img class="rounded-circle drag-item cursor-move" src="<?= ADMIN_ASSETS ?>assets/img/avatars/5.png" alt="avatar" height="50" width="50">
          <img class="rounded-circle drag-item cursor-move" src="<?= ADMIN_ASSETS ?>assets/img/avatars/6.png" alt="avatar" height="50" width="50">
        </div>
        <div class="d-flex flex-wrap gap-2" id="image-list-2">
          <img class="rounded-circle drag-item cursor-move" src="<?= ADMIN_ASSETS ?>assets/img/avatars/7.png" alt="avatar" height="50" width="50">
          <img class="rounded-circle drag-item cursor-move" src="<?= ADMIN_ASSETS ?>assets/img/avatars/8.png" alt="avatar" height="50" width="50">
          <img class="rounded-circle drag-item cursor-move" src="<?= ADMIN_ASSETS ?>assets/img/avatars/9.png" alt="avatar" height="50" width="50">
          <img class="rounded-circle drag-item cursor-move" src="<?= ADMIN_ASSETS ?>assets/img/avatars/10.png" alt="avatar" height="50" width="50">
          <img class="rounded-circle drag-item cursor-move" src="<?= ADMIN_ASSETS ?>assets/img/avatars/11.png" alt="avatar" height="50" width="50">
          <img class="rounded-circle drag-item cursor-move" src="<?= ADMIN_ASSETS ?>assets/img/avatars/12.png" alt="avatar" height="50" width="50">
        </div>
      </div>
    </div>
  </div>
</div>
<div class="row mb-4">
  <div class="col-12">
    <div class="card">
      <h5 class="card-header">Multiple List</h5>
      <div class="card-body">
        <div class="row">
          <div class="col-md-6 col-12 mb-md-0 mb-4">
            <p>Pending Tasks</p>
            <ul class="list-group list-group-flush" id="pending-tasks">
              <li class="list-group-item drag-item cursor-move d-flex justify-content-between align-items-center">
                <span>Buy products.</span>
                <img class="rounded-circle" src="<?= ADMIN_ASSETS ?>assets/img/avatars/1.png" alt="avatar" height="32" width="32">
              </li>
              <li class="list-group-item drag-item cursor-move d-flex justify-content-between align-items-center">
                <span>Reply to emails.</span>
                <img class="rounded-circle" src="<?= ADMIN_ASSETS ?>assets/img/avatars/2.png" alt="avatar" height="32" width="32">
              </li>
              <li class="list-group-item drag-item cursor-move d-flex justify-content-between align-items-center">
                <span>Write blog post.</span>
                <img class="rounded-circle" src="<?= ADMIN_ASSETS ?>assets/img/avatars/3.png" alt="avatar" height="32" width="32">
              </li>
              <li class="list-group-item drag-item cursor-move d-flex justify-content-between align-items-center">
                <span>Update packages.</span>
                <img class="rounded-circle" src="<?= ADMIN_ASSETS ?>assets/img/avatars/4.png" alt="avatar" height="32" width="32">
              </li>
              <li class="list-group-item drag-item cursor-move d-flex justify-content-between align-items-center">
                <span>New blog layout.</span>
                <img class="rounded-circle" src="<?= ADMIN_ASSETS ?>assets/img/avatars/5.png" alt="avatar" height="32" width="32">
              </li>
            </ul>
          </div>
          <div class="col-md-6 col-12 mb-md-0 mb-4">
            <p>Completed Tasks</p>
            <ul class="list-group list-group-flush" id="completed-tasks">
              <li class="list-group-item drag-item cursor-move d-flex justify-content-between align-items-center">
                <span>New icons set for an iOS app.</span>
                <img class="rounded-circle" src="<?= ADMIN_ASSETS ?>assets/img/avatars/1.png" alt="avatar" height="32" width="32">
              </li>
              <li class="list-group-item drag-item cursor-move d-flex justify-content-between align-items-center">
                <span> Fix validation bugs and commit.</span>
                <img class="rounded-circle" src="<?= ADMIN_ASSETS ?>assets/img/avatars/2.png" alt="avatar" height="32" width="32">
              </li>
              <li class="list-group-item drag-item cursor-move d-flex justify-content-between align-items-center">
                <span> Help Web developers with HTML integration.</span>
                <img class="rounded-circle" src="<?= ADMIN_ASSETS ?>assets/img/avatars/3.png" alt="avatar" height="32" width="32">
              </li>
              <li class="list-group-item drag-item cursor-move d-flex justify-content-between align-items-center">
                <span>Buy antivirus.</span>
                <img class="rounded-circle" src="<?= ADMIN_ASSETS ?>assets/img/avatars/4.png" alt="avatar" height="32" width="32">
              </li>
              <li class="list-group-item drag-item cursor-move d-flex justify-content-between align-items-center">
                <span>Answer support tickets.</span>
                <img class="rounded-circle" src="<?= ADMIN_ASSETS ?>assets/img/avatars/5.png" alt="avatar" height="32" width="32">
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="row mb-4">
  <div class="col-sm-12">
    <div class="card">
      <h5 class="card-header">Cloning</h5>
      <div class="card-body">
        <div class="row">
          <div class="col-md-6 col-12 mb-md-0 mb-4">
            <p>Pending Tasks</p>
            <ul class="list-group list-group-flush" id="clone-source-1">
              <li class="list-group-item drag-item cursor-move d-flex justify-content-between align-items-center">
                <span>Buy products.</span>
                <img class="rounded-circle" src="<?= ADMIN_ASSETS ?>assets/img/avatars/1.png" alt="avatar" height="32" width="32">
              </li>
              <li class="list-group-item drag-item cursor-move d-flex justify-content-between align-items-center">
                <span>Reply to emails.</span>
                <img class="rounded-circle" src="<?= ADMIN_ASSETS ?>assets/img/avatars/2.png" alt="avatar" height="32" width="32">
              </li>
              <li class="list-group-item drag-item cursor-move d-flex justify-content-between align-items-center">
                <span>Write blog post.</span>
                <img class="rounded-circle" src="<?= ADMIN_ASSETS ?>assets/img/avatars/3.png" alt="avatar" height="32" width="32">
              </li>
              <li class="list-group-item drag-item cursor-move d-flex justify-content-between align-items-center">
                <span>Update packages.</span>
                <img class="rounded-circle" src="<?= ADMIN_ASSETS ?>assets/img/avatars/4.png" alt="avatar" height="32" width="32">
              </li>
              <li class="list-group-item drag-item cursor-move d-flex justify-content-between align-items-center">
                <span>New blog layout.</span>
                <img class="rounded-circle" src="<?= ADMIN_ASSETS ?>assets/img/avatars/5.png" alt="avatar" height="32" width="32">
              </li>
            </ul>
          </div>
          <div class="col-md-6 col-12 mb-md-0 mb-4">
            <p>Completed Tasks</p>
            <ul class="list-group list-group-flush" id="clone-source-2">
              <li class="list-group-item drag-item cursor-move d-flex justify-content-between align-items-center">
                <span>New icons set for an iOS app.</span>
                <img class="rounded-circle" src="<?= ADMIN_ASSETS ?>assets/img/avatars/1.png" alt="avatar" height="32" width="32">
              </li>
              <li class="list-group-item drag-item cursor-move d-flex justify-content-between align-items-center">
                <span> Fix validation bugs and commit.</span>
                <img class="rounded-circle" src="<?= ADMIN_ASSETS ?>assets/img/avatars/2.png" alt="avatar" height="32" width="32">
              </li>
              <li class="list-group-item drag-item cursor-move d-flex justify-content-between align-items-center">
                <span> Help Web developers with HTML integration.</span>
                <img class="rounded-circle" src="<?= ADMIN_ASSETS ?>assets/img/avatars/3.png" alt="avatar" height="32" width="32">
              </li>
              <li class="list-group-item drag-item cursor-move d-flex justify-content-between align-items-center">
                <span>Buy antivirus.</span>
                <img class="rounded-circle" src="<?= ADMIN_ASSETS ?>assets/img/avatars/4.png" alt="avatar" height="32" width="32">
              </li>
              <li class="list-group-item drag-item cursor-move d-flex justify-content-between align-items-center">
                <span>Answer support tickets.</span>
                <img class="rounded-circle" src="<?= ADMIN_ASSETS ?>assets/img/avatars/5.png" alt="avatar" height="32" width="32">
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-sm-12">
    <div class="card">
      <h5 class="card-header">Handle</h5>
      <div class="card-body">
        <div class="row">
          <div class="col-md-6 col-12 mb-md-0 mb-4">
            <p>Pending Tasks</p>
            <ul class="list-group list-group-flush" id="handle-list-1">
              <li class="list-group-item lh-1 d-flex justify-content-between align-items-center">
                <span class="d-flex justify-content-between align-items-center">
                  <i class="drag-handle cursor-move ti ti-menu-2 align-text-bottom me-2"></i>
                  <span>Buy products</span>
                </span>
                <img class="rounded-circle" src="<?= ADMIN_ASSETS ?>assets/img/avatars/1.png" alt="avatar" height="32" width="32">
              </li>
              <li class="list-group-item lh-1 d-flex justify-content-between align-items-center">
                <span class="d-flex justify-content-between align-items-center">
                  <i class="drag-handle cursor-move ti ti-menu-2 align-text-bottom me-2"></i>
                  <span>Reply to emails</span>
                </span>
                <img class="rounded-circle" src="<?= ADMIN_ASSETS ?>assets/img/avatars/2.png" alt="avatar" height="32" width="32">
              </li>
              <li class="list-group-item lh-1 d-flex justify-content-between align-items-center">
                <span class="d-flex justify-content-between align-items-center">
                  <i class="drag-handle cursor-move ti ti-menu-2 align-text-bottom me-2"></i>
                  <span>Write blog post</span>
                </span>
                <img class="rounded-circle" src="<?= ADMIN_ASSETS ?>assets/img/avatars/3.png" alt="avatar" height="32" width="32">
              </li>
              <li class="list-group-item lh-1 d-flex justify-content-between align-items-center">
                <span class="d-flex justify-content-between align-items-center">
                  <i class="drag-handle cursor-move ti ti-menu-2 align-text-bottom me-2"></i>
                  <span>Update packages</span>
                </span>
                <img class="rounded-circle" src="<?= ADMIN_ASSETS ?>assets/img/avatars/4.png" alt="avatar" height="32" width="32">
              </li>
              <li class="list-group-item lh-1 d-flex justify-content-between align-items-center">
                <span class="d-flex justify-content-between align-items-center">
                  <i class="drag-handle cursor-move ti ti-menu-2 align-text-bottom me-2"></i>
                  <span>New blog layout</span>
                </span>
                <img class="rounded-circle" src="<?= ADMIN_ASSETS ?>assets/img/avatars/5.png" alt="avatar" height="32" width="32">
              </li>
            </ul>
          </div>
          <div class="col-md-6 col-12 mb-md-0 mb-4">
            <p>Completed Tasks</p>
            <ul class="list-group list-group-flush" id="handle-list-2">
              <li class="list-group-item lh-1 d-flex justify-content-between align-items-center">
                <span class="d-flex justify-content-between align-items-center">
                  <i class="drag-handle cursor-move ti ti-menu-2 align-text-bottom me-2"></i>
                  <span>New icons set for an iOS app</span>
                </span>
                <img class="rounded-circle" src="<?= ADMIN_ASSETS ?>assets/img/avatars/1.png" alt="avatar" height="32" width="32">
              </li>
              <li class="list-group-item lh-1 d-flex justify-content-between align-items-center">
                <span class="d-flex justify-content-between align-items-center">
                  <i class="drag-handle cursor-move ti ti-menu-2 align-text-bottom me-2"></i>
                  <span>Fix validation bugs and commit</span>
                </span>
                <img class="rounded-circle" src="<?= ADMIN_ASSETS ?>assets/img/avatars/2.png" alt="avatar" height="32" width="32">
              </li>
              <li class="list-group-item lh-1 d-flex justify-content-between align-items-center">
                <span class="d-flex justify-content-between align-items-center">
                  <i class="drag-handle cursor-move ti ti-menu-2 align-text-bottom me-2"></i>
                  <span>Help Web developers with HTML integration</span>
                </span>
                <img class="rounded-circle" src="<?= ADMIN_ASSETS ?>assets/img/avatars/3.png" alt="avatar" height="32" width="32">
              </li>
              <li class="list-group-item lh-1 d-flex justify-content-between align-items-center">
                <span class="d-flex justify-content-between align-items-center">
                  <i class="drag-handle cursor-move ti ti-menu-2 align-text-bottom me-2"></i>
                  <span>Buy antivirus</span>
                </span>
                <img class="rounded-circle" src="<?= ADMIN_ASSETS ?>assets/img/avatars/4.png" alt="avatar" height="32" width="32">
              </li>
              <li class="list-group-item lh-1 d-flex justify-content-between align-items-center">
                <span class="d-flex justify-content-between align-items-center">
                  <i class="drag-handle cursor-move ti ti-menu-2 align-text-bottom me-2"></i>
                  <span>Answer support tickets</span>
                </span>
                <img class="rounded-circle" src="<?= ADMIN_ASSETS ?>assets/img/avatars/5.png" alt="avatar" height="32" width="32">
              </li>
            </ul>
          </div>
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
<?= $this->endSection() ?>
<?= $this->section('vendorJs') ?>
  <script src="<?= ADMIN_ASSETS ?>assets/vendor/libs/sortablejs/sortable.js"></script>
<?= $this->endSection() ?>
<?= $this->section('pageJs') ?>
  <script src="<?= ADMIN_ASSETS ?>assets/js/extended-ui-drag-and-drop.js"></script>
<?= $this->endSection() ?>
