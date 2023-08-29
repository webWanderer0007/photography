<?= $this->extend($view['layout']) ?>
<?= $this->section('main') ?>
<h4 class="fw-bold py-3 mb-4">
	<span class="text-muted fw-light">UI elements /</span> List groups
</h4>
<div class="card mb-4">
	<h5 class="card-header">List groups</h5>
	<div class="card-body">
		<div class="row">
			<div class="col-lg-6 mb-4 mb-xl-0">
				<small class="text-light fw-semibold">Basic</small>
				<div class="demo-inline-spacing mt-3">
					<div class="list-group">
						<a href="javascript:void(0);" class="list-group-item list-group-item-action active">Bear claw cake biscuit</a>
						<a href="javascript:void(0);" class="list-group-item list-group-item-action">Soufflé pastry pie ice</a>
						<a href="javascript:void(0);" class="list-group-item list-group-item-action disabled">Tart tiramisu cake</a>
						<a href="javascript:void(0);" class="list-group-item list-group-item-action">Bonbon toffee muffin</a>
						<a href="javascript:void(0);" class="list-group-item list-group-item-action">Dragée tootsie roll</a>
					</div>
				</div>
			</div>
			<div class="col-lg-6">
				<small class="text-light fw-semibold">With Bagdes & Pills</small>
				<div class="demo-inline-spacing mt-3">
					<ul class="list-group">
						<li class="list-group-item d-flex justify-content-between align-items-center">Soufflé
							pastry pie ice
							<span class="badge bg-primary">5</span>
						</li>
						<li class="list-group-item disabled">Bear claw cake biscuit</li>
						<li class="list-group-item d-flex justify-content-between align-items-center">Tart
							tiramisu cake
							<span class="badge bg-success">2</span>
						</li>
						<li class="list-group-item d-flex justify-content-between align-items-center">Bonbon
							toffee muffin
							<span class="badge bg-danger rounded-pill">3</span>
						</li>
						<li class="list-group-item">Dragée tootsie roll</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<hr class="m-0">
	<div class="card-body">
		<div class="row">
			<div class="col-lg-6 mb-4 mb-xl-0">
				<small class="text-light fw-semibold">Flush</small>
				<div class="demo-inline-spacing mt-3">
					<div class="list-group list-group-flush">
						<a href="javascript:void(0);" class="list-group-item list-group-item-action">Bear claw cake biscuit</a>
						<a href="javascript:void(0);" class="list-group-item list-group-item-action">Soufflé pastry pie ice</a>
						<a href="javascript:void(0);" class="list-group-item list-group-item-action">Tart tiramisu cake</a>
						<a href="javascript:void(0);" class="list-group-item list-group-item-action">Bonbon toffee muffin</a>
						<a href="javascript:void(0);" class="list-group-item list-group-item-action">Dragée tootsie roll</a>
					</div>
				</div>
			</div>
			<div class="col-lg-6">
				<small class="text-light fw-semibold">With Icons</small>
				<div class="demo-inline-spacing mt-3">
					<ul class="list-group">
						<li class="list-group-item d-flex align-items-center">
							<i class="ti ti-device-tv ti-sm me-2"></i>
							Soufflé pastry pie ice
						</li>
						<li class="list-group-item d-flex align-items-center">
							<i class="ti ti-bell ti-sm me-2"></i>
							Bear claw cake biscuit
						</li>
						<li class="list-group-item d-flex align-items-center">
							<i class="ti ti-headphones ti-sm me-2"></i>
							Tart tiramisu cake
						</li>
						<li class="list-group-item d-flex align-items-center">
							<i class="ti ti-bookmark ti-sm me-2"></i>
							Bonbon toffee muffin
						</li>
						<li class="list-group-item d-flex align-items-center">
							<i class="ti ti-paper-bag ti-sm me-2"></i>
							Dragée tootsie roll
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<hr class="m-0">
	<div class="card-body">
		<div class="row">
			<div class="col-lg-6 mb-4 mb-xl-0">
				<small class="text-light fw-semibold">Numbered</small>
				<div class="demo-inline-spacing mt-3">
					<ol class="list-group list-group-numbered">
						<li class="list-group-item">Bear claw cake biscuit</li>
						<li class="list-group-item">Soufflé pastry pie ice</li>
						<li class="list-group-item">Tart tiramisu cake</li>
						<li class="list-group-item">Bonbon toffee muffin</li>
						<li class="list-group-item">Dragée tootsie roll</li>
					</ol>
				</div>
			</div>
			<div class="col-lg-6">
				<small class="text-light fw-semibold">List Group With Checkbox</small>
				<div class="demo-inline-spacing mt-3">
					<div class="list-group">
						<label class="list-group-item">
							<input class="form-check-input me-1" type="checkbox" value="">
							Soufflé pastry pie ice
						</label>
						<label class="list-group-item">
							<input class="form-check-input me-1" type="checkbox" value="">
							Bear claw cake biscuit
						</label>
						<label class="list-group-item">
							<input class="form-check-input me-1" type="checkbox" value="">
							Tart tiramisu cake
						</label>
						<label class="list-group-item">
							<input class="form-check-input me-1" type="checkbox" value="">
							Bonbon toffee muffin
						</label>
						<label class="list-group-item">
							<input class="form-check-input me-1" type="checkbox" value="">
							Dragée tootsie roll
						</label>
					</div>
				</div>
			</div>
		</div>
	</div>
	<hr class="m-0">
	<div class="card-body">
		<div class="row">
			<div class="col-lg-6 mb-4 mb-xl-0">
				<small class="text-light fw-semibold">Contextual classes</small>
				<div class="demo-inline-spacing mt-3">
					<ul class="list-group">
						<li class="list-group-item list-group-item-primary">Primary list group item</li>
						<li class="list-group-item list-group-item-secondary">Secondary list group item</li>
						<li class="list-group-item list-group-item-success">Success list group item</li>
						<li class="list-group-item list-group-item-danger">Danger list group item</li>
						<li class="list-group-item list-group-item-warning">Warning list group item</li>
						<li class="list-group-item list-group-item-info">Info list group item</li>
						<li class="list-group-item list-group-item-dark">Dark list group item</li>
					</ul>
				</div>
			</div>
			<div class="col-lg-6">
				<small class="text-light fw-semibold">Custom content</small>
				<div class="demo-inline-spacing mt-3">
					<div class="list-group">
						<a href="javascript:void(0);" class="list-group-item list-group-item-action flex-column align-items-start active">
							<div class="d-flex justify-content-between w-100">
								<h5 class="mb-1">List group item heading</h5>
								<small>3 days ago</small>
							</div>
							<p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
							<small>Donec id elit non mi porta.</small>
						</a>
						<a href="javascript:void(0);" class="list-group-item list-group-item-action flex-column align-items-start">
							<div class="d-flex justify-content-between w-100">
								<h5 class="mb-1">List group item heading</h5>
								<small class="text-muted">3 days ago</small>
							</div>
							<p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
							<small class="text-muted">Donec id elit non mi porta.</small>
						</a>
						<a href="javascript:void(0);" class="list-group-item list-group-item-action flex-column align-items-start">
							<div class="d-flex justify-content-between w-100">
								<h5 class="mb-1">List group item heading</h5>
								<small class="text-muted">3 days ago</small>
							</div>
							<p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
							<small class="text-muted">Donec id elit non mi porta.</small>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="card mb-4">
	<h5 class="card-header">Javascript behavior</h5>
	<div class="card-body">
		<div class="row">
			<div class="col-lg-6 mb-4 mb-xl-0">
				<small class="text-light fw-semibold">Vertical</small>
				<div class="mt-3">
					<div class="row">
						<div class="col-md-4 col-12 mb-3 mb-md-0">
							<div class="list-group">
								<a class="list-group-item list-group-item-action active" id="list-home-list" data-bs-toggle="list" href="#list-home">Home</a>
								<a class="list-group-item list-group-item-action" id="list-profile-list" data-bs-toggle="list" href="#list-profile">Profile</a>
								<a class="list-group-item list-group-item-action" id="list-messages-list" data-bs-toggle="list" href="#list-messages">Messages</a>
								<a class="list-group-item list-group-item-action" id="list-settings-list" data-bs-toggle="list" href="#list-settings">Settings</a>
							</div>
						</div>
						<div class="col-md-8 col-12">
							<div class="tab-content p-0">
								<div class="tab-pane fade show active" id="list-home">
									Donut sugar plum sweet roll biscuit. Cake oat cake gummi bears. Tart wafer wafer halvah gummi bears
									cheesecake. Topping croissant cake sweet roll. Dessert fruitcake gingerbread halvah marshmallow pudding
									bear claw cheesecake. Bonbon dragée cookie gummies. Pudding marzipan liquorice. Sugar plum dragée
									cupcake cupcake cake dessert chocolate bar. Pastry lollipop lemon drops lollipop halvah croissant.
									Pastry sweet gingerbread lemon drops topping ice cream.
								</div>
								<div class="tab-pane fade" id="list-profile">
									Muffin lemon drops chocolate chupa chups jelly beans dessert jelly-o. Soufflé gummies gummies. Ice cream
									powder marshmallow cotton candy oat cake wafer. Marshmallow gingerbread tootsie roll. Chocolate cake
									bonbon jelly beans lollipop jelly beans halvah marzipan danish pie. Oat cake chocolate cake pudding bear
									claw liquorice gingerbread icing sugar plum brownie. Toffee cookie apple pie cheesecake bear claw sugar
									plum wafer gummi bears fruitcake.
								</div>
								<div class="tab-pane fade" id="list-messages">
									Ice cream dessert candy sugar plum croissant cupcake tart pie apple pie. Pastry chocolate chupa chups
									tiramisu. Tiramisu cookie oat cake. Pudding brownie bonbon. Pie carrot cake chocolate macaroon. Halvah
									jelly jelly beans cake macaroon jelly-o. Danish pastry dessert gingerbread powder halvah. Muffin bonbon
									fruitcake dragée sweet sesame snaps oat cake marshmallow cheesecake. Cupcake donut sweet bonbon
									cheesecake soufflé chocolate bar.
								</div>
								<div class="tab-pane fade" id="list-settings">
									Marzipan cake oat cake. Marshmallow pie chocolate. Liquorice oat cake donut halvah jelly-o. Jelly-o
									muffin macaroon cake gingerbread candy cupcake. Cake lollipop lollipop jelly brownie cake topping
									chocolate. Pie oat cake jelly. Lemon drops halvah jelly cookie bonbon cake cupcake ice cream. Donut tart
									bonbon sweet roll soufflé gummies biscuit. Wafer toffee topping jelly beans icing pie apple pie toffee
									pudding. Tiramisu powder macaroon tiramisu cake halvah.
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-6">
				<small class="text-light fw-semibold">Horizontal</small>
				<div class="demo-inline-spacing mt-3">
					<div class="list-group list-group-horizontal-md text-md-center">
						<a class="list-group-item list-group-item-action active" id="home-list-item" data-bs-toggle="list" href="#horizontal-home">Home</a>
						<a class="list-group-item list-group-item-action" id="profile-list-item" data-bs-toggle="list" href="#horizontal-profile">Profile</a>
						<a class="list-group-item list-group-item-action" id="messages-list-item" data-bs-toggle="list" href="#horizontal-messages">Messages</a>
						<a class="list-group-item list-group-item-action" id="settings-list-item" data-bs-toggle="list" href="#horizontal-settings">Settings</a>
					</div>
					<div class="tab-content px-0 mt-0">
						<div class="tab-pane fade show active" id="horizontal-home">
							Donut sugar plum sweet roll biscuit. Cake oat cake gummi bears. Tart wafer wafer halvah gummi bears
							cheesecake. Topping croissant cake sweet roll. Dessert fruitcake gingerbread halvah marshmallow pudding bear
							claw cheesecake. Bonbon dragée cookie gummies. Pudding marzipan liquorice. Sugar plum dragée cupcake cupcake
							cake dessert chocolate bar. Pastry lollipop lemon drops lollipop halvah croissant. Pastry sweet gingerbread
							lemon drops topping ice cream.
						</div>
						<div class="tab-pane fade" id="horizontal-profile">
							Muffin lemon drops chocolate chupa chups jelly beans dessert jelly-o. Soufflé gummies gummies. Ice cream
							powder marshmallow cotton candy oat cake wafer. Marshmallow gingerbread tootsie roll. Chocolate cake bonbon
							jelly beans lollipop jelly beans halvah marzipan danish pie. Oat cake chocolate cake pudding bear claw
							liquorice gingerbread icing sugar plum brownie. Toffee cookie apple pie cheesecake bear claw sugar plum
							wafer gummi bears fruitcake.
						</div>
						<div class="tab-pane fade" id="horizontal-messages">
							Ice cream dessert candy sugar plum croissant cupcake tart pie apple pie. Pastry chocolate chupa chups
							tiramisu. Tiramisu cookie oat cake. Pudding brownie bonbon. Pie carrot cake chocolate macaroon. Halvah jelly
							jelly beans cake macaroon jelly-o. Danish pastry dessert gingerbread powder halvah. Muffin bonbon fruitcake
							dragée sweet sesame snaps oat cake marshmallow cheesecake. Cupcake donut sweet bonbon cheesecake soufflé
							chocolate bar.
						</div>
						<div class="tab-pane fade" id="horizontal-settings">
							Marzipan cake oat cake. Marshmallow pie chocolate. Liquorice oat cake donut halvah jelly-o. Jelly-o muffin
							macaroon cake gingerbread candy cupcake. Cake lollipop lollipop jelly brownie cake topping chocolate. Pie
							oat cake jelly. Lemon drops halvah jelly cookie bonbon cake cupcake ice cream. Donut tart bonbon sweet roll
							soufflé gummies biscuit. Wafer toffee topping jelly beans icing pie apple pie toffee pudding. Tiramisu
							powder macaroon tiramisu cake halvah.
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="card">
	<h5 class="card-header">Timeline & Notification</h5>
	<div class="card-body">
		<div class="row">
			<div class="col-lg-6 p-4">
				<small class="text-light fw-semibold">Timeline</small>
				<div class="demo-inline-spacing mt-3">
					<ul class="list-group list-group-timeline">
						<li class="list-group-item list-group-timeline-primary">Bear claw cake biscuit</li>
						<li class="list-group-item list-group-timeline-success">Soufflé pastry pie ice</li>
						<li class="list-group-item list-group-timeline-warning">Tart tiramisu cake</li>
						<li class="list-group-item list-group-timeline-info">Dragée tootsie roll</li>
						<li class="list-group-item list-group-timeline-danger">Bonbon toffee muffin</li>
					</ul>
				</div>
			</div>
			<div class="col-lg-6 p-4">
				<small class="text-light fw-semibold">Notification</small>
				<div class="demo-inline-spacing mt-3">
					<div class="list-group">
						<a href="javascript:void(0);" class="list-group-item list-group-item-action d-flex justify-content-between">
							<div class="li-wrapper d-flex justify-content-start align-items-center">
								<div class="avatar avatar-sm me-3">
									<span class="avatar-initial rounded-circle bg-label-success">M</span>
								</div>
								<div class="list-content">
									<h6 class="mb-1">List group item heading</h6>
									<small class="text-muted">Donec id elit non mi porta.</small>
								</div>
							</div>
							<small>3 days ago</small>
						</a>
						<a href="javascript:void(0);" class="list-group-item list-group-item-action d-flex justify-content-between">
							<div class="li-wrapper d-flex justify-content-start align-items-center">
								<div class="avatar avatar-sm me-3">
									<span class="avatar-initial rounded-circle bg-label-danger">B</span>
								</div>
								<div class="list-content">
									<h6 class="mb-1">List group item heading</h6>
									<small class="text-muted">Donec id elit non mi porta.</small>
								</div>
							</div>
							<small>1 day ago</small>
						</a>
						<a href="javascript:void(0);" class="list-group-item list-group-item-action d-flex justify-content-between">
							<div class="li-wrapper d-flex justify-content-start align-items-center">
								<div class="avatar avatar-sm me-3">
									<span class="avatar-initial rounded-circle bg-label-primary">V</span>
								</div>
								<div class="list-content">
									<h6 class="mb-1">List group item heading</h6>
									<small class="text-muted">Donec id elit non mi porta.</small>
								</div>
							</div>
							<small>5 days ago</small>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<hr class="m-0">
	<div class="card-body">
		<div class="row">
			<div class="col-12 col-lg-6 mb-4 mb-xl-0">
				<small class="text-light fw-semibold">User List</small>
				<div class="demo-inline-spacing mt-3">
					<div class="list-group">
						<div class="list-group-item list-group-item-action d-flex align-items-center cursor-pointer">
							<img src="../../assets/img/avatars/2.png" alt="User Image" class="rounded-circle me-3 w-px-50">
							<div class="w-100">
								<div class="d-flex justify-content-between">
									<div class="user-info">
										<h6 class="mb-1">Danish sesame snaps halvah</h6>
										<small>13 minutes</small>
										<div class="user-status">
											<span class="badge badge-dot bg-success"></span>
											<small>Online</small>
										</div>
									</div>
									<div class="add-btn">
										<button class="btn btn-primary btn-sm">Add</button>
									</div>
								</div>
							</div>
						</div>
						<div class="list-group-item list-group-item-action d-flex align-items-center cursor-pointer">
							<img src="../../assets/img/avatars/8.png" alt="User Image" class="rounded-circle me-3 w-px-50">
							<div class="w-100">
								<div class="d-flex justify-content-between">
									<div class="user-info">
										<h6 class="mb-1">Cake halvah biscuit cheesecake</h6>
										<small class="text-muted">11 minutes</small>
										<div class="user-status">
											<span class="badge badge-dot bg-warning"></span>
											<small>Away</small>
										</div>
									</div>
									<div class="add-btn">
										<button class="btn btn-primary btn-sm">Add</button>
									</div>
								</div>
							</div>
						</div>
						<div class="list-group-item list-group-item-action d-flex align-items-center cursor-pointer">
							<img src="../../assets/img/avatars/4.png" alt="User Image" class="rounded-circle me-3 w-px-50">
							<div class="w-100">
								<div class="d-flex justify-content-between">
									<div class="user-info">
										<h6 class="mb-1">Tart cheesecake jujubes caramels</h6>
										<small class="text-muted">9 minutes</small>
										<div class="user-status">
											<span class="badge badge-dot bg-secondary"></span>
											<small>Offline</small>
										</div>
									</div>
									<div class="add-btn">
										<button class="btn btn-primary btn-sm">Add</button>
									</div>
								</div>
							</div>
						</div>
						<div class="list-group-item list-group-item-action d-flex align-items-center cursor-pointer">
							<img src="../../assets/img/avatars/11.png" alt="User Image" class="rounded-circle me-3 w-px-50">
							<div class="w-100">
								<div class="d-flex justify-content-between">
									<div class="user-info">
										<h6 class="mb-1">Icing sweet gummies</h6>
										<small class="text-muted">15 minutes</small>
										<div class="user-status">
											<span class="badge badge-dot bg-danger"></span>
											<small>In Meeting</small>
										</div>
									</div>
									<div class="add-btn">
										<button class="btn btn-primary btn-sm">Add</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-12 col-lg-6">
				<small class="text-light fw-semibold">Progress</small>
				<div class="demo-inline-spacing mt-3">
					<div class="list-group">
						<a href="javascript:void(0);" class="list-group-item list-group-item-action d-flex align-items-center p-3">
							<div class="badge bg-primary rounded p-1 me-3"><i class="ti ti-brand-bootstrap ti-xl"></i>
							</div>
							<div class="w-100">
								<h6 class="mb-2">Bootstrap is an open source toolkit</h6>
								<div class="progress" style="height: 5px;">
									<div class="progress-bar bg-primary" role="progressbar" style="width: 95%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
							</div>
						</a>
						<a href="javascript:void(0);" class="list-group-item list-group-item-action d-flex align-items-center p-3">
							<div class="badge bg-success rounded p-1 me-3"><i class="ti ti-brand-vue ti-xl"></i></div>
							<div class="w-100">
								<h6 class="mb-2">Vue.js is the Progressive JavaScript Framework</h6>
								<div class="progress" style="height: 5px;">
									<div class="progress-bar bg-success" role="progressbar" style="width: 85%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
							</div>
						</a>
						<a href="javascript:void(0);" class="list-group-item list-group-item-action d-flex align-items-center p-3">
							<div class="badge bg-danger rounded p-1 me-3"><i class="ti ti-brand-angular ti-xl"></i></div>
							<div class="w-100">
								<h6 class="mb-2">Angular implements Functional Programming concepts</h6>
								<div class="progress" style="height: 5px;">
									<div class="progress-bar bg-danger" role="progressbar" style="width: 55%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
							</div>
						</a>
						<a href="javascript:void(0);" class="list-group-item list-group-item-action d-flex align-items-center p-3">
							<div class="badge bg-info rounded p-1 me-3"><i class="ti ti-brand-react-native ti-xl"></i></div>
							<div class="w-100">
								<h6 class="mb-2">List group item heading</h6>
								<div class="progress" style="height: 5px;">
									<div class="progress-bar bg-info" role="progressbar" style="width: 75%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
							</div>
						</a>
						<a href="javascript:void(0);" class="list-group-item list-group-item-action d-flex align-items-center p-3">
							<div class="badge bg-warning rounded p-1 me-3"><i class="ti ti-brand-javascript ti-xl"></i></div>
							<div class="w-100">
								<h6 class="mb-2">JavaScript, the most popular framework</h6>
								<div class="progress" style="height: 5px;">
									<div class="progress-bar bg-warning" role="progressbar" style="width: 65%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
							</div>
						</a>
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