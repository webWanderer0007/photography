<?= $this->extend($view['layout']) ?>
<?= $this->section('main') ?>
<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">UI elements /</span> Accordion</h4>
<h5 class="mt-4">Accordion</h5>
<div class="row">
	<div class="col-md mb-4 mb-md-2">
		<small class="text-light fw-semibold">Basic Accordion</small>
		<div class="accordion mt-3" id="accordionExample">
			<div class="card accordion-item active">
				<h2 class="accordion-header" id="headingOne">
					<button type="button" class="accordion-button" data-bs-toggle="collapse" data-bs-target="#accordionOne" aria-expanded="true" aria-controls="accordionOne">
						Accordion Item 1
					</button>
				</h2>
				<div id="accordionOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
					<div class="accordion-body">
						Lemon drops chocolate cake gummies carrot cake chupa chups muffin topping. Sesame snaps icing marzipan gummi
						bears macaroon dragée danish caramels powder. Bear claw dragée pastry topping soufflé. Wafer gummi bears
						marshmallow pastry pie.
					</div>
				</div>
			</div>
			<div class="card accordion-item">
				<h2 class="accordion-header" id="headingTwo">
					<button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#accordionTwo" aria-expanded="false" aria-controls="accordionTwo">
						Accordion Item 2
					</button>
				</h2>
				<div id="accordionTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
					<div class="accordion-body">
						Dessert ice cream donut oat cake jelly-o pie sugar plum cheesecake. Bear claw dragée oat cake dragée ice
						cream halvah tootsie roll. Danish cake oat cake pie macaroon tart donut gummies. Jelly beans candy canes
						carrot cake. Fruitcake chocolate chupa chups.
					</div>
				</div>
			</div>
			<div class="card accordion-item">
				<h2 class="accordion-header" id="headingThree">
					<button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#accordionThree" aria-expanded="false" aria-controls="accordionThree">
						Accordion Item 3
					</button>
				</h2>
				<div id="accordionThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
					<div class="accordion-body">
						Oat cake toffee chocolate bar jujubes. Marshmallow brownie lemon drops cheesecake. Bonbon gingerbread
						marshmallow sweet jelly beans muffin. Sweet roll bear claw candy canes oat cake dragée caramels. Ice cream
						wafer danish cookie caramels muffin.
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md">
		<small class="text-light fw-semibold">Accordion Without Arrow</small>
		<div id="accordionIcon" class="accordion mt-3 accordion-without-arrow">
			<div class="accordion-item card">
				<h2 class="accordion-header text-body d-flex justify-content-between" id="accordionIconOne">
					<button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#accordionIcon-1" aria-controls="accordionIcon-1">
						Accordion Item 1
					</button>
				</h2>
				<div id="accordionIcon-1" class="accordion-collapse collapse" data-bs-parent="#accordionIcon">
					<div class="accordion-body">
						Lemon drops chocolate cake gummies carrot cake chupa chups muffin topping. Sesame snaps icing marzipan gummi
						bears macaroon dragée danish caramels powder. Bear claw dragée pastry topping soufflé. Wafer gummi bears
						marshmallow pastry pie.
					</div>
				</div>
			</div>
			<div class="accordion-item card">
				<h2 class="accordion-header text-body d-flex justify-content-between" id="accordionIconTwo">
					<button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#accordionIcon-2" aria-controls="accordionIcon-2">
						Accordion Item 2
					</button>
				</h2>
				<div id="accordionIcon-2" class="accordion-collapse collapse" data-bs-parent="#accordionIcon">
					<div class="accordion-body">
						Dessert ice cream donut oat cake jelly-o pie sugar plum cheesecake. Bear claw dragée oat cake dragée ice
						cream
						halvah tootsie roll. Danish cake oat cake pie macaroon tart donut gummies. Jelly beans candy canes carrot
						cake.
						Fruitcake chocolate chupa chups.
					</div>
				</div>
			</div>
			<div class="accordion-item card active">
				<h2 class="accordion-header text-body d-flex justify-content-between" id="accordionIconThree">
					<button type="button" class="accordion-button" data-bs-toggle="collapse" data-bs-target="#accordionIcon-3" aria-expanded="true" aria-controls="accordionIcon-3">
						Accordion Item 3
					</button>
				</h2>
				<div id="accordionIcon-3" class="accordion-collapse collapse show" data-bs-parent="#accordionIcon">
					<div class="accordion-body">
						Oat cake toffee chocolate bar jujubes. Marshmallow brownie lemon drops cheesecake. Bonbon gingerbread
						marshmallow
						sweet jelly beans muffin. Sweet roll bear claw candy canes oat cake dragée caramels. Ice cream wafer danish
						cookie caramels muffin.
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<hr class="container-m-nx my-5">
<h5>Advance Styling</h5>
<div class="row mb-3">
	<div class="col-md mb-4 mb-md-2">
		<small class="text-light fw-semibold">Accordion With Icon (Always Open)</small>
		<div class="accordion mt-3" id="accordionWithIcon">
			<div class="card accordion-item active">
				<h2 class="accordion-header d-flex align-items-center">
					<button type="button" class="accordion-button" data-bs-toggle="collapse" data-bs-target="#accordionWithIcon-1" aria-expanded="true">
						<i class="ti ti-star ti-xs me-2"></i>
						Header Option 1
					</button>
				</h2>
				<div id="accordionWithIcon-1" class="accordion-collapse collapse show">
					<div class="accordion-body">
						Lemon drops chocolate cake gummies carrot cake chupa chups muffin topping. Sesame snaps icing marzipan gummi
						bears macaroon dragée danish caramels powder. Bear claw dragée pastry topping soufflé. Wafer gummi bears
						marshmallow pastry pie.
					</div>
				</div>
			</div>
			<div class="accordion-item card">
				<h2 class="accordion-header d-flex align-items-center">
					<button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#accordionWithIcon-2" aria-expanded="false">
						<i class="me-2 ti ti-sun ti-xs"></i>
						Header Option 2
					</button>
				</h2>
				<div id="accordionWithIcon-2" class="accordion-collapse collapse">
					<div class="accordion-body">
						Dessert ice cream donut oat cake jelly-o pie sugar plum cheesecake. Bear claw dragée oat cake dragée ice
						cream
						halvah tootsie roll. Danish cake oat cake pie macaroon tart donut gummies. Jelly beans candy canes carrot
						cake.
						Fruitcake chocolate chupa chups.
					</div>
				</div>
			</div>
			<div class="accordion-item card">
				<h2 class="accordion-header d-flex align-items-center">
					<button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#accordionWithIcon-3" aria-expanded="false">
						<i class="me-2 ti ti-moon ti-xs"></i>
						Header Option 3
					</button>
				</h2>
				<div id="accordionWithIcon-3" class="accordion-collapse collapse">
					<div class="accordion-body">
						Oat cake toffee chocolate bar jujubes. Marshmallow brownie lemon drops cheesecake. Bonbon gingerbread
						marshmallow
						sweet jelly beans muffin. Sweet roll bear claw candy canes oat cake dragée caramels. Ice cream wafer danish
						cookie caramels muffin.
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md">
		<small class="text-light fw-semibold">Accordion With Border</small>
		<div class="accordion mt-3 accordion-bordered" id="accordionStyle1">
			<div class="accordion-item card">
				<h2 class="accordion-header">
					<button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#accordionStyle1-1" aria-expanded="false">
						Header Option 1
					</button>
				</h2>
				<div id="accordionStyle1-1" class="accordion-collapse collapse" data-bs-parent="#accordionStyle1">
					<div class="accordion-body">
						Lemon drops chocolate cake gummies carrot cake chupa chups muffin topping. Sesame snaps icing marzipan gummi
						bears macaroon dragée danish caramels powder. Bear claw dragée pastry topping soufflé. Wafer gummi bears
						marshmallow pastry pie.
					</div>
				</div>
			</div>
			<div class="accordion-item card">
				<h2 class="accordion-header">
					<button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#accordionStyle1-2" aria-expanded="false">
						Header Option 2
					</button>
				</h2>
				<div id="accordionStyle1-2" class="accordion-collapse collapse" data-bs-parent="#accordionStyle1">
					<div class="accordion-body">
						Dessert ice cream donut oat cake jelly-o pie sugar plum cheesecake. Bear claw dragée oat cake dragée ice
						cream
						halvah tootsie roll. Danish cake oat cake pie macaroon tart donut gummies. Jelly beans candy canes carrot
						cake.
						Fruitcake chocolate chupa chups.
					</div>
				</div>
			</div>
			<div class="card accordion-item active">
				<h2 class="accordion-header">
					<button type="button" class="accordion-button" data-bs-toggle="collapse" data-bs-target="#accordionStyle1-3" aria-expanded="true">
						Header Option 3
					</button>
				</h2>
				<div id="accordionStyle1-3" class="accordion-collapse collapse show" data-bs-parent="#accordionStyle1">
					<div class="accordion-body">
						Oat cake toffee chocolate bar jujubes. Marshmallow brownie lemon drops cheesecake. Bonbon gingerbread
						marshmallow
						sweet jelly beans muffin. Sweet roll bear claw candy canes oat cake dragée caramels. Ice cream wafer danish
						cookie caramels muffin.
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