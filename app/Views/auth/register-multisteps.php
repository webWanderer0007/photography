<!DOCTYPE html>
<html lang="en" class="dark-style  customizer-hide" dir="ltr" data-theme="theme-default" data-assets-path="<?= ADMIN_ASSETS ?>assets/" data-template="vertical-menu-template-dark">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
  <title>Multi Steps Sign-up - Pages | Vuexy - Bootstrap Admin Template</title>
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
  <link rel="stylesheet" href="<?= ADMIN_ASSETS ?>assets/vendor/libs/bs-stepper/bs-stepper.css">
  <link rel="stylesheet" href="<?= ADMIN_ASSETS ?>assets/vendor/libs/bootstrap-select/bootstrap-select.css">
  <link rel="stylesheet" href="<?= ADMIN_ASSETS ?>assets/vendor/libs/select2/select2.css">
  <link rel="stylesheet" href="<?= ADMIN_ASSETS ?>assets/vendor/libs/formvalidation/dist/css/formValidation.min.css">
  <link rel="stylesheet" href="<?= ADMIN_ASSETS ?>assets/vendor/css/pages/page-auth.css">
  <script src="<?= ADMIN_ASSETS ?>assets/vendor/js/helpers.js"></script>
  <script src="<?= ADMIN_ASSETS ?>assets/vendor/js/template-customizer.js"></script>
  <script src="<?= ADMIN_ASSETS ?>assets/js/config.js"></script>
</head>
<body>
  <div class="authentication-wrapper authentication-cover authentication-bg">
    <div class="authentication-inner row">
      <div class="d-none d-lg-flex col-lg-4 align-items-center justify-content-center p-5 auth-cover-bg-color position-relative auth-multisteps-bg-height">
        <img src="<?= ADMIN_ASSETS ?>assets/img/illustrations/auth-register-multisteps-illustration.png" alt="auth-register-multisteps" class="img-fluid" width="280px">
        <img src="<?= ADMIN_ASSETS ?>assets/img/illustrations/bg-shape-image-dark.png" alt="auth-register-multisteps" class="platform-bg" data-app-light-img="illustrations/bg-shape-image-light.png" data-app-dark-img="illustrations/bg-shape-image-dark.png">
      </div>
      <div class="d-flex col-lg-8 align-items-center justify-content-center p-sm-5 p-3">
        <div class="w-px-700">
          <div id="multiStepsValidation" class="bs-stepper shadow-none">
            <div class="bs-stepper-header border-bottom-0">
              <div class="step" data-target="#accountDetailsValidation">
                <button type="button" class="step-trigger">
                  <span class="bs-stepper-circle"><i class="ti ti-smart-home ti-sm"></i></span>
                  <span class="bs-stepper-label">
                    <span class="bs-stepper-title">Account</span>
                    <span class="bs-stepper-subtitle">Account Details</span>
                  </span>
                </button>
              </div>
              <div class="line">
                <i class="ti ti-chevron-right"></i>
              </div>
              <div class="step" data-target="#personalInfoValidation">
                <button type="button" class="step-trigger">
                  <span class="bs-stepper-circle"><i class="ti ti-users ti-sm"></i></span>
                  <span class="bs-stepper-label">
                    <span class="bs-stepper-title">Personal</span>
                    <span class="bs-stepper-subtitle">Enter Information</span>
                  </span>
                </button>
              </div>
              <div class="line">
                <i class="ti ti-chevron-right"></i>
              </div>
              <div class="step" data-target="#billingLinksValidation">
                <button type="button" class="step-trigger">
                  <span class="bs-stepper-circle"><i class="ti ti-file-text ti-sm"></i></span>
                  <span class="bs-stepper-label">
                    <span class="bs-stepper-title">Billing</span>
                    <span class="bs-stepper-subtitle">Payment Details</span>
                  </span>
                </button>
              </div>
            </div>
            <div class="bs-stepper-content">
              <form id="multiStepsForm" onsubmit="return false">
                <div id="accountDetailsValidation" class="content">
                  <div class="content-header mb-4">
                    <h3 class="mb-1">Account Information</h3>
                    <p>Enter Your Account Details</p>
                  </div>
                  <div class="row g-3">
                    <div class="col-sm-6">
                      <label class="form-label" for="multiStepsUsername">Username</label>
                      <input type="text" name="multiStepsUsername" id="multiStepsUsername" class="form-control" placeholder="johndoe">
                    </div>
                    <div class="col-sm-6">
                      <label class="form-label" for="multiStepsEmail">Email</label>
                      <input type="email" name="multiStepsEmail" id="multiStepsEmail" class="form-control" placeholder="john.doe@email.com" aria-label="john.doe">
                    </div>
                    <div class="col-sm-6 form-password-toggle">
                      <label class="form-label" for="multiStepsPass">Password</label>
                      <div class="input-group input-group-merge">
                        <input type="password" id="multiStepsPass" name="multiStepsPass" class="form-control" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="multiStepsPass2">
                        <span class="input-group-text cursor-pointer" id="multiStepsPass2"><i class="ti ti-eye-off"></i></span>
                      </div>
                    </div>
                    <div class="col-sm-6 form-password-toggle">
                      <label class="form-label" for="multiStepsConfirmPass">Confirm Password</label>
                      <div class="input-group input-group-merge">
                        <input type="password" id="multiStepsConfirmPass" name="multiStepsConfirmPass" class="form-control" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="multiStepsConfirmPass2">
                        <span class="input-group-text cursor-pointer" id="multiStepsConfirmPass2"><i class="ti ti-eye-off"></i></span>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <label class="form-label" for="multiStepsURL">Profile Link</label>
                      <input type="text" name="multiStepsURL" id="multiStepsURL" class="form-control" placeholder="johndoe/profile" aria-label="johndoe">
                    </div>
                    <div class="col-12 d-flex justify-content-between mt-4">
                      <button class="btn btn-label-secondary btn-prev" disabled=""> <i class="ti ti-arrow-left ti-xs me-sm-1 me-0"></i>
                        <span class="align-middle d-sm-inline-block d-none">Previous</span>
                      </button>
                      <button class="btn btn-primary btn-next"> <span class="align-middle d-sm-inline-block d-none me-sm-1 me-0">Next</span> <i class="ti ti-arrow-right ti-xs"></i></button>
                    </div>
                  </div>
                </div>
                <div id="personalInfoValidation" class="content">
                  <div class="content-header mb-4">
                    <h3 class="mb-1">Personal Information</h3>
                    <p>Enter Your Personal Information</p>
                  </div>
                  <div class="row g-3">
                    <div class="col-sm-6">
                      <label class="form-label" for="multiStepsFirstName">First Name</label>
                      <input type="text" id="multiStepsFirstName" name="multiStepsFirstName" class="form-control" placeholder="John">
                    </div>
                    <div class="col-sm-6">
                      <label class="form-label" for="multiStepsLastName">Last Name</label>
                      <input type="text" id="multiStepsLastName" name="multiStepsLastName" class="form-control" placeholder="Doe">
                    </div>
                    <div class="col-sm-6">
                      <label class="form-label" for="multiStepsMobile">Mobile</label>
                      <div class="input-group">
                        <span class="input-group-text">US (+1)</span>
                        <input type="text" id="multiStepsMobile" name="multiStepsMobile" class="form-control multi-steps-mobile" placeholder="202 555 0111">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <label class="form-label" for="multiStepsPincode">Pincode</label>
                      <input type="text" id="multiStepsPincode" name="multiStepsPincode" class="form-control multi-steps-pincode" placeholder="Postal Code" maxlength="6">
                    </div>
                    <div class="col-md-12">
                      <label class="form-label" for="multiStepsAddress">Address</label>
                      <input type="text" id="multiStepsAddress" name="multiStepsAddress" class="form-control" placeholder="Address">
                    </div>
                    <div class="col-md-12">
                      <label class="form-label" for="multiStepsArea">Landmark</label>
                      <input type="text" id="multiStepsArea" name="multiStepsArea" class="form-control" placeholder="Area/Landmark">
                    </div>
                    <div class="col-sm-6">
                      <label class="form-label" for="multiStepsCity">City</label>
                      <input type="text" id="multiStepsCity" class="form-control" placeholder="Jackson">
                    </div>
                    <div class="col-sm-6">
                      <label class="form-label" for="multiStepsState">State</label>
                      <select id="multiStepsState" class="select2 form-select" data-allow-clear="true">
                        <option value="">Select</option>
                        <option value="AL">Alabama</option>
                        <option value="AK">Alaska</option>
                        <option value="AZ">Arizona</option>
                        <option value="AR">Arkansas</option>
                        <option value="CA">California</option>
                        <option value="CO">Colorado</option>
                        <option value="CT">Connecticut</option>
                        <option value="DE">Delaware</option>
                        <option value="DC">District Of Columbia</option>
                        <option value="FL">Florida</option>
                        <option value="GA">Georgia</option>
                        <option value="HI">Hawaii</option>
                        <option value="ID">Idaho</option>
                        <option value="IL">Illinois</option>
                        <option value="IN">Indiana</option>
                        <option value="IA">Iowa</option>
                        <option value="KS">Kansas</option>
                        <option value="KY">Kentucky</option>
                        <option value="LA">Louisiana</option>
                        <option value="ME">Maine</option>
                        <option value="MD">Maryland</option>
                        <option value="MA">Massachusetts</option>
                        <option value="MI">Michigan</option>
                        <option value="MN">Minnesota</option>
                        <option value="MS">Mississippi</option>
                        <option value="MO">Missouri</option>
                        <option value="MT">Montana</option>
                        <option value="NE">Nebraska</option>
                        <option value="NV">Nevada</option>
                        <option value="NH">New Hampshire</option>
                        <option value="NJ">New Jersey</option>
                        <option value="NM">New Mexico</option>
                        <option value="NY">New York</option>
                        <option value="NC">North Carolina</option>
                        <option value="ND">North Dakota</option>
                        <option value="OH">Ohio</option>
                        <option value="OK">Oklahoma</option>
                        <option value="OR">Oregon</option>
                        <option value="PA">Pennsylvania</option>
                        <option value="RI">Rhode Island</option>
                        <option value="SC">South Carolina</option>
                        <option value="SD">South Dakota</option>
                        <option value="TN">Tennessee</option>
                        <option value="TX">Texas</option>
                        <option value="UT">Utah</option>
                        <option value="VT">Vermont</option>
                        <option value="VA">Virginia</option>
                        <option value="WA">Washington</option>
                        <option value="WV">West Virginia</option>
                        <option value="WI">Wisconsin</option>
                        <option value="WY">Wyoming</option>
                      </select>
                    </div>
                    <div class="col-12 d-flex justify-content-between mt-4">
                      <button class="btn btn-label-secondary btn-prev"> <i class="ti ti-arrow-left ti-xs me-sm-1 me-0"></i>
                        <span class="align-middle d-sm-inline-block d-none">Previous</span>
                      </button>
                      <button class="btn btn-primary btn-next"> <span class="align-middle d-sm-inline-block d-none me-sm-1 me-0">Next</span> <i class="ti ti-arrow-right ti-xs"></i></button>
                    </div>
                  </div>
                </div>
                <div id="billingLinksValidation" class="content">
                  <div class="content-header">
                    <h3 class="mb-1">Select Plan</h3>
                    <p>Select plan as per your requirement</p>
                  </div>
                  <div class="row gap-md-0 gap-3 my-4">
                    <div class="col-md">
                      <div class="form-check custom-option custom-option-icon">
                        <label class="form-check-label custom-option-content" for="basicOption">
                          <span class="custom-option-body">
                            <span class="custom-option-title fs-4 mb-1">Basic</span>
                            <small class="fs-6">A simple start for start ups & Students</small>
                            <span class="d-flex justify-content-center">
                              <sup class="text-primary fs-6 lh-1 mt-3">$</sup>
                              <span class="fw-semibold fs-2 text-primary">0</span>
                              <sub class="lh-1 fs-6 mt-auto mb-2 text-muted">/month</sub>
                            </span>
                          </span>
                          <input name="customRadioIcon" class="form-check-input" type="radio" value="" id="basicOption">
                        </label>
                      </div>
                    </div>
                    <div class="col-md">
                      <div class="form-check custom-option custom-option-icon">
                        <label class="form-check-label custom-option-content" for="standardOption">
                          <span class="custom-option-body">
                            <span class="custom-option-title fs-4 mb-1">Standard</span>
                            <small class="fs-6">For small to medium businesses</small>
                            <span class="d-flex justify-content-center">
                              <sup class="text-primary fs-6 lh-1 mt-3">$</sup>
                              <span class="fw-semibold fs-2 text-primary">99</span>
                              <sub class="lh-1 fs-6 mt-auto mb-2 text-muted">/month</sub>
                            </span>
                          </span>
                          <input name="customRadioIcon" class="form-check-input" type="radio" value="" id="standardOption" checked="">
                        </label>
                      </div>
                    </div>
                    <div class="col-md">
                      <div class="form-check custom-option custom-option-icon">
                        <label class="form-check-label custom-option-content" for="enterpriseOption">
                          <span class="custom-option-body">
                            <span class="custom-option-title fs-4 mb-1">Enterprise</span>
                            <small class="fs-6">Solution for enterprise & organizations</small>
                            <span class="d-flex justify-content-center">
                              <sup class="text-primary fs-6 lh-1 mt-3">$</sup>
                              <span class="fw-semibold fs-2 text-primary">499</span>
                              <sub class="lh-1 fs-6 mt-auto mb-2 text-muted">/year</sub>
                            </span>
                          </span>
                          <input name="customRadioIcon" class="form-check-input" type="radio" value="" id="enterpriseOption">
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="content-header mb-4">
                    <h3 class="mb-1">Payment Information</h3>
                    <p>Enter your card information</p>
                  </div>
                  <div class="row g-3">
                    <div class="col-md-12">
                      <label class="form-label w-100" for="multiStepsCard">Card Number</label>
                      <div class="input-group input-group-merge">
                        <input id="multiStepsCard" class="form-control multi-steps-card" name="multiStepsCard" type="text" placeholder="1356 3215 6548 7898" aria-describedby="multiStepsCardImg">
                        <span class="input-group-text cursor-pointer" id="multiStepsCardImg"><span class="card-type"></span></span>
                      </div>
                    </div>
                    <div class="col-md-5">
                      <label class="form-label" for="multiStepsName">Name On Card</label>
                      <input type="text" id="multiStepsName" class="form-control" name="multiStepsName" placeholder="John Doe">
                    </div>
                    <div class="col-6 col-md-4">
                      <label class="form-label" for="multiStepsExDate">Expiry Date</label>
                      <input type="text" id="multiStepsExDate" class="form-control multi-steps-exp-date" name="multiStepsExDate" placeholder="MM/YY">
                    </div>
                    <div class="col-6 col-md-3">
                      <label class="form-label" for="multiStepsCvv">CVV Code</label>
                      <div class="input-group input-group-merge">
                        <input type="text" id="multiStepsCvv" class="form-control multi-steps-cvv" name="multiStepsCvv" maxlength="3" placeholder="654">
                        <span class="input-group-text cursor-pointer" id="multiStepsCvvHelp"><i class="ti ti-help text-muted" data-bs-toggle="tooltip" data-bs-placement="top" title="Card Verification Value"></i></span>
                      </div>
                    </div>
                    <div class="col-12 d-flex justify-content-between mt-4">
                      <button class="btn btn-label-secondary btn-prev"> <i class="ti ti-arrow-left ti-xs me-sm-1 me-0"></i>
                        <span class="align-middle d-sm-inline-block d-none">Previous</span>
                      </button>
                      <button type="submit" class="btn btn-success btn-next btn-submit">Submit</button>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script>
    // Check selected custom option
    window.Helpers.initCustomOptionCheck();
  </script>
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
  <script src="<?= ADMIN_ASSETS ?>assets/vendor/libs/cleavejs/cleave-phone.js"></script>
  <script src="<?= ADMIN_ASSETS ?>assets/vendor/libs/bs-stepper/bs-stepper.js"></script>
  <script src="<?= ADMIN_ASSETS ?>assets/vendor/libs/select2/select2.js"></script>
  <script src="<?= ADMIN_ASSETS ?>assets/vendor/libs/formvalidation/dist/js/FormValidation.min.js"></script>
  <script src="<?= ADMIN_ASSETS ?>assets/vendor/libs/formvalidation/dist/js/plugins/Bootstrap5.min.js"></script>
  <script src="<?= ADMIN_ASSETS ?>assets/vendor/libs/formvalidation/dist/js/plugins/AutoFocus.min.js"></script>
  <script src="<?= ADMIN_ASSETS ?>assets/js/main.js"></script>
  <script src="<?= ADMIN_ASSETS ?>assets/js/pages-auth-multisteps.js"></script>
</body>
</html>