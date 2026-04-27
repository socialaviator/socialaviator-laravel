<!DOCTYPE html>
<!-- 
Appster
Author: Hencework
Contact: contact@hencework.com
-->
<html lang="en">
<!-- Mirrored from hencework.com/theme/appster/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 15 Aug 2024 06:11:22 GMT -->
<?php include 'header.php'; ?>
<body>
   	<!-- Wrapper -->
	<div class="hk-wrapper" data-layout="vertical" data-layout-style="default" data-menu="dark" data-footer="simple">
		<!-- Top Navbar -->
		<?php include 'nav.php'; ?>
		<!-- /Top Navbar -->

        <!-- Vertical Nav -->
        <div class="hk-menu">
			<!-- Main Menu -->
			<?php include 'sidebar.php'; ?>
			<!-- /Main Menu -->
		</div>
        <div id="hk_menu_backdrop" class="hk-menu-backdrop"></div>
        <!-- /Vertical Nav -->

		<!-- Main Content -->
		<div class="hk-pg-wrapper">
			<div class="container-fluid p-5 pb-0">
				<!-- Page Header -->
				<div class="hk-pg-header">
					<div class="d-flex">
						<div class="d-flex flex-wrap justify-content-between flex-1">
							<div class="mb-lg-0 mb-2 me-8">
								<h1 class="pg-title">Welcome back</h1>
								<p>Create pages using a variety of features that leverage jampack components</p>
							</div>
							<div class="pg-header-action-wrap">
								<div class="input-group w-300p">
									<span class="input-affix-wrapper">
										<span class="input-prefix"><span class="feather-icon"><i data-feather="calendar"></i></span></span>
										<input class="form-control form-wth-icon" name="datetimes" value="Aug 18,2020 - Aug 19, 2020">
									</span>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /Page Header -->

				<!-- Page Body -->
				<div class="hk-pg-body">
					<div class="tab-content">
						<div class="tab-pane fade show active" id="tab_block_1">
							<div class="row">
								<div class="col-xxl-9 col-lg-8 col-md-7 mb-md-4 mb-3">
									<div class="card card-shadow mb-0 h-100">
										<div class="card-header card-header-action">
											<h6>Audience Overview</h6>
											<div class="card-action-wrap">
												<div class="btn-group d-lg-flex d-none" role="group" aria-label="Basic outlined example">
													<button type="button" class="btn btn-outline-light active">All</button>
													<button type="button" class="btn btn-outline-light">Sessions</button>
													<button type="button" class="btn btn-outline-light">Source</button>
													<button type="button" class="btn btn-outline-light">Referrals</button>
												</div>
												<select class="form-select d-lg-none d-flex">
													<option  selected="" value="1">All</option>
													<option value="2">Sessions</option>
													<option value="3">Source</option>
													<option value="4">Referrals</option>
												</select>
											</div>
										</div>
										<div class="card-body">
											<div class="text-center">
												<div class="d-inline-block">
													<span class="badge-status">
														<span class="badge bg-primary badge-indicator badge-indicator-nobdr"></span>
														<span class="badge-label">Direct</span>
													</span>
												</div>
												<div class="d-inline-block ms-3">
													<span class="badge-status">
														<span class="badge bg-primary-light-2 badge-indicator badge-indicator-nobdr"></span>
														<span class="badge-label">Organic search</span>
													</span>
												</div>
												<div class="d-inline-block ms-3">
													<span class="badge-status">
														<span class="badge bg-primary-light-4 badge-indicator badge-indicator-nobdr"></span>
														<span class="badge-label">Referral</span>
													</span>
												</div>
											</div>
											<div id="column_chart_2"></div>
											<div class="separator-full mt-5"></div>
											<div class="flex-grow-1 ms-lg-3">
												<div class="row">
													<div class="col-xxl-3 col-sm-6 mb-xxl-0 mb-3">
														<span class="d-block fw-medium fs-7">Users</span>
														<div class="d-flex align-items-center">
															<span class="d-block fs-4 fw-medium text-dark mb-0">8.8k</span>
															<span class="badge badge-sm badge-soft-success ms-1">
																<i class="bi bi-arrow-up"></i> 7.5%
															</span>
														</div>
													</div>
													<div class="col-xxl-3 col-sm-6 mb-xxl-0 mb-3">
														<span class="d-block fw-medium fs-7">Sessions</span>
														<div class="d-flex align-items-center">
															<span class="d-block fs-4 fw-medium text-dark mb-0">18.2k</span>
															<span class="badge badge-sm badge-soft-success ms-1">
																<i class="bi bi-arrow-up"></i> 7.2%
															</span>
														</div>
													</div>
													<div class="col-xxl-3 col-sm-6 mb-xxl-0 mb-3">
														<span class="d-block fw-medium fs-7">Bounce rate</span>
														<div class="d-flex align-items-center">
															<span class="d-block fs-4 fw-medium text-dark mb-0">46.2%</span>
															<span class="badge badge-sm badge-soft-danger ms-1">
																<i class="bi bi-arrow-down"></i> 0.2%
															</span>
														</div>
													</div>
													<div class="col-xxl-3 col-sm-6">
														<span class="d-block fw-medium fs-7">Session duration</span>
														<div class="d-flex align-items-center">
															<span class="d-block fs-4 fw-medium text-dark mb-0">4m 24s</span>
															<span class="badge badge-sm badge-soft-success ms-1">
																<i class="bi bi-arrow-up"></i> 10.8%
															</span>
														</div>
													</div>
												</div>	
											</div>
										</div>
									</div>
								</div>
								<div class="col-xxl-3 col-lg-4 col-md-5 mb-md-4 mb-3">
									<div class="card card-shadow mb-0  h-100">
										<div class="card-header card-header-action">
											<h6>Returning Customers</h6>
											<div class="card-action-wrap">
												<a class="btn btn-sm btn-icon btn-rounded btn-flush-dark flush-soft-hover dropdown-toggle no-caret" href="#" data-bs-toggle="dropdown"><span class="icon"><span class="feather-icon"><i data-feather="more-vertical"></i></span></span></a>
												<div class="dropdown-menu dropdown-menu-end">
													<a class="dropdown-item" href="#">Action</a>
													<a class="dropdown-item" href="#">Another action</a>
													<a class="dropdown-item" href="#">Something else here</a>
													<div class="dropdown-divider"></div>
													<a class="dropdown-item" href="#">Separated link</a>
												</div>
											</div>
										</div>
										<div class="card-body text-center">
											<div id="radial_chart_2"></div>
											<div class="d-inline-block mt-4">
												<div class="mb-4">
													<span class="d-block badge-status lh-1">
														<span class="badge bg-primary badge-indicator badge-indicator-nobdr d-inline-block"></span>
														<span class="badge-label d-inline-block">Organic</span>
													</span>
													<span class="d-block text-dark fs-5 fw-medium mb-0 mt-1">$243.50</span>
												</div>
												<div>
													<span class="badge-status lh-1">
														<span class="badge bg-primary-light-2 badge-indicator badge-indicator-nobdr"></span>
														<span class="badge-label">Marketing</span>
													</span>
													<span class="d-block text-dark fs-5 fw-medium mb-0 mt-1">$1469</span>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>	
							
						</div>
					</div>
				</div>
				<!-- /Page Body -->		
			</div>
			
			<!-- Page Footer -->
			<?php include 'footer.php'; ?>
            <!-- / Page Footer -->

		</div>
		<!-- /Main Content -->
	</div>
    <!-- /Wrapper -->

	<?php include 'foot.php'; ?>
</body>

<!-- Mirrored from hencework.com/theme/appster/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 15 Aug 2024 06:12:02 GMT -->
</html>