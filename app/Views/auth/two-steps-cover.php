<!DOCTYPE html>
<html lang="en" class="dark-style  customizer-hide" dir="ltr" data-theme="theme-default" data-assets-path="<?= ADMIN_ASSETS ?>assets/" data-template="vertical-menu-template-dark">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
  <title>Two Steps Verifications Cover - Pages | Vuexy - Bootstrap Admin Template</title>
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 5">
  <meta name="keywords" content="dashboard, bootstrap 5 dashboard, bootstrap 5 design, bootstrap 5">
  <link rel="canonical" href="https://1.envato.market/vuexy_admin">
  <link rel="icon" type="image/x-icon" href="<?= ADMIN_ASSETS ?>assets/img/favicon/favicon.ico">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
  <link href="<?= ADMIN_ASSETS ?>assets/font/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?= ADMIN_ASSETS ?>assets/vendor/fonts/fontawesome.css">
  <link rel="stylesheet" href="<?= ADMIN_ASSETS ?>assets/vendor/fonts/tabler-icons.css">
  <link rel="stylesheet" href="<?= ADMIN_ASSETS ?>assets/vendor/fonts/flag-icons.css">
  <link rel="stylesheet" href="<?= ADMIN_ASSETS ?>assets/vendor/css/rtl/core-dark.css" class="template-customizer-core-css">
  <link rel="stylesheet" href="<?= ADMIN_ASSETS ?>assets/vendor/css/rtl/theme-default-dark.css" class="template-customizer-theme-css">
  <link rel="stylesheet" href="<?= ADMIN_ASSETS ?>assets/css/demo.css">
  <link rel="stylesheet" href="<?= ADMIN_ASSETS ?>assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css">
  <link rel="stylesheet" href="<?= ADMIN_ASSETS ?>assets/vendor/libs/node-waves/node-waves.css">
  <link rel="stylesheet" href="<?= ADMIN_ASSETS ?>assets/vendor/libs/typeahead-js/typeahead.css">
  <link rel="stylesheet" href="<?= ADMIN_ASSETS ?>assets/vendor/libs/formvalidation/dist/css/formValidation.min.css">
  <link rel="stylesheet" href="<?= ADMIN_ASSETS ?>assets/vendor/css/pages/page-auth.css">
  <script src="<?= ADMIN_ASSETS ?>assets/vendor/js/helpers.js"></script>
  <script src="<?= ADMIN_ASSETS ?>assets/vendor/js/template-customizer.js"></script>
  <script src="<?= ADMIN_ASSETS ?>assets/js/config.js"></script>
</head>
<body>
  <div class="authentication-wrapper authentication-cover authentication-bg">
    <div class="authentication-inner row">
      <div class="d-none d-lg-flex col-lg-7 p-0">
        <div class="auth-cover-bg auth-cover-bg-color d-flex justify-content-center align-items-center">
          <img src="<?= ADMIN_ASSETS ?>assets/img/illustrations/auth-two-step-illustration-dark.png" alt="auth-two-steps-cover" class="img-fluid my-5 auth-illustration" data-app-light-img="illustrations/auth-two-step-illustration-light.png" data-app-dark-img="illustrations/auth-two-step-illustration-dark.png">
          <img src="<?= ADMIN_ASSETS ?>assets/img/illustrations/bg-shape-image-dark.png" alt="auth-two-steps-cover" class="platform-bg" data-app-light-img="illustrations/bg-shape-image-light.png" data-app-dark-img="illustrations/bg-shape-image-dark.png">
        </div>
      </div>
      <div class="d-flex col-12 col-lg-5 align-items-center p-4 p-sm-5">
        <div class="w-px-400 mx-auto">
          <div class="app-brand mb-4">
            <a href="index.html" class="app-brand-link gap-2">
              <span class="app-brand-logo demo">
                <svg width="32" height="22" viewbox="0 0 32 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M0.00172773 0V6.85398C0.00172773 6.85398 -0.133178 9.01207 1.98092 10.8388L13.6912 21.9964L19.7809 21.9181L18.8042 9.88248L16.4951 7.17289L9.23799 0H0.00172773Z" fill="#7367F0"></path>
                  <path opacity="0.06" fill-rule="evenodd" clip-rule="evenodd" d="M7.69824 16.4364L12.5199 3.23696L16.5541 7.25596L7.69824 16.4364Z" fill="#161616"></path>
                  <path opacity="0.06" fill-rule="evenodd" clip-rule="evenodd" d="M8.07751 15.9175L13.9419 4.63989L16.5849 7.28475L8.07751 15.9175Z" fill="#161616"></path>
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M7.77295 16.3566L23.6563 0H32V6.88383C32 6.88383 31.8262 9.17836 30.6591 10.4057L19.7824 22H13.6938L7.77295 16.3566Z" fill="#7367F0"></path>
                </svg>
              </span>
            </a>
          </div>
          <h3 class="mb-1 fw-bold">Two Step Verification 💬</h3>
          <p class="text-start mb-4">
            We sent a verification code to your mobile. Enter the code from the mobile in the field below.
            <span class="fw-bold d-block mt-2">******1234</span>
          </p>
          <p class="mb-0 fw-semibold">Type your 6 digit security code</p>
          <form id="twoStepsForm" action="index.html" method="POST">
            <div class="mb-3">
              <div class="auth-input-wrapper d-flex align-items-center justify-content-sm-between numeral-mask-wrapper">
                <input type="text" class="form-control auth-input h-px-50 text-center numeral-mask text-center h-px-50 mx-1 my-2" maxlength="1" autofocus="">
                <input type="text" class="form-control auth-input h-px-50 text-center numeral-mask text-center h-px-50 mx-1 my-2" maxlength="1">
                <input type="text" class="form-control auth-input h-px-50 text-center numeral-mask text-center h-px-50 mx-1 my-2" maxlength="1">
                <input type="text" class="form-control auth-input h-px-50 text-center numeral-mask text-center h-px-50 mx-1 my-2" maxlength="1">
                <input type="text" class="form-control auth-input h-px-50 text-center numeral-mask text-center h-px-50 mx-1 my-2" maxlength="1">
                <input type="text" class="form-control auth-input h-px-50 text-center numeral-mask text-center h-px-50 mx-1 my-2" maxlength="1">
              </div>
              <input type="hidden" name="otp">
            </div>
            <button class="btn btn-primary d-grid w-100 mb-3">
              Verify my account
            </button>
            <div class="text-center">Didn't get the code?
              <a href="javascript:void(0);">
                Resend
              </a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <script src="<?= ADMIN_ASSETS ?>assets/vendor/libs/jquery/jquery.js"></script>
  <script src="<?= ADMIN_ASSETS ?>assets/vendor/libs/popper/popper.js"></script>
  <script src="<?= ADMIN_ASSETS ?>assets/vendor/js/bootstrap.js"></script>
  <script src="<?= ADMIN_ASSETS ?>assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
  <script src="<?= ADMIN_ASSETS ?>assets/vendor/libs/node-waves/node-waves.js"></script>
  <script src="<?= ADMIN_ASSETS ?>assets/vendor/libs/hammer/hammer.js"></script>
  <script src="<?= ADMIN_ASSETS ?>assets/vendor/libs/i18n/i18n.js"></script>
  <script src="<?= ADMIN_ASSETS ?>assets/vendor/libs/typeahead-js/typeahead.js"></script>
  <script src="<?= ADMIN_ASSETS ?>assets/vendor/js/menu.js"></script>
  <script src="<?= ADMIN_ASSETS ?>assets/vendor/libs/cleavejs/cleave.js"></script>
  <script src="<?= ADMIN_ASSETS ?>assets/vendor/libs/formvalidation/dist/js/FormValidation.min.js"></script>
  <script src="<?= ADMIN_ASSETS ?>assets/vendor/libs/formvalidation/dist/js/plugins/Bootstrap5.min.js"></script>
  <script src="<?= ADMIN_ASSETS ?>assets/vendor/libs/formvalidation/dist/js/plugins/AutoFocus.min.js"></script>
  <script src="<?= ADMIN_ASSETS ?>assets/js/main.js"></script>
  <script src="<?= ADMIN_ASSETS ?>assets/js/pages-auth.js"></script>
  <script src="<?= ADMIN_ASSETS ?>assets/js/pages-auth-two-steps.js"></script>
</body>
</html>
