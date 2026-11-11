<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<!-- Primary Meta Tags -->
	<title>Volt - Data Pelanggan</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="title" content="Volt - Free Bootstrap 5 Dashboard">
	<meta name="author" content="Themesberg">

	<!-- Favicon -->
	<link rel="apple-touch-icon" sizes="120x120" href="{{ asset('assets-admin/img/favicon/apple-touch-icon.png') }}">
	<link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets-admin/img/favicon/favicon-32x32.png') }}">
	<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets-admin/img/favicon/favicon-16x16.png') }}">
	<link rel="manifest" href="{{ asset('assets-admin/img/favicon/site.webmanifest') }}">
	<link rel="mask-icon" href="{{ asset('assets-admin/img/favicon/safari-pinned-tab.svg') }}" color="#ffffff">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="theme-color" content="#ffffff">

	<!-- Volt CSS -->
	<link type="text/css" href="{{ asset('assets-admin/css/volt.css') }}" rel="stylesheet">
</head>

<body>
	<nav class="navbar navbar-dark navbar-theme-primary px-4 col-12 d-lg-none">
		<a class="navbar-brand me-lg-5" href="#">
			<img class="navbar-brand-dark" src="{{ asset('assets-admin/img/brand/dark.svg') }}" alt="Volt logo" />
			<img class="navbar-brand-light" src="{{ asset('assets-admin/img/brand/light.svg') }}" alt="Volt logo" />
		</a>
		<div class="d-flex align-items-center">
			<button class="navbar-toggler d-lg-none collapsed" type="button" data-bs-toggle="collapse"
				data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false"
				aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
		</div>
	</nav>

	<nav id="sidebarMenu" class="sidebar d-lg-block bg-gray-800 text-white collapse" data-simplebar>
		<div class="sidebar-inner px-4 pt-3">
			<div class="user-card d-flex d-md-none align-items-center justify-content-between justify-content-md-center pb-4">
				<div class="d-flex align-items-center">
					<div class="avatar-lg me-4">
						<img src="{{ asset('assets-admin/img/team/profile-picture-3.jpg') }}"
							class="card-img-top rounded-circle border-white" alt="Bonnie Green">
					</div>
					<div class="d-block">
						<h2 class="h5 mb-3">Hi, Jane</h2>
						<a href="#" class="btn btn-secondary btn-sm d-inline-flex align-items-center">
							<svg class="icon icon-xxs me-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"
								xmlns="http://www.w3.org/2000/svg">
								<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
									d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1">
								</path>
							</svg>
							Sign Out
						</a>
					</div>
				</div>
				<div class="collapse-close d-md-none">
					<a href="#sidebarMenu" data-bs-toggle="collapse" data-bs-target="#sidebarMenu"
						aria-controls="sidebarMenu" aria-expanded="true" aria-label="Toggle navigation">
						<svg class="icon icon-xs" fill="currentColor" viewBox="0 0 20 20"
							xmlns="http://www.w3.org/2000/svg">
							<path fill-rule="evenodd"
								d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
								clip-rule="evenodd"></path>
						</svg>
					</a>
				</div>
			</div>
			<ul class="nav flex-column pt-3 pt-md-0">
				<li class="nav-item">
					<a href="#" class="nav-link d-flex align-items-center">
						<span class="sidebar-icon">
							<img src="{{ asset('assets-admin/img/brand/light.svg') }}" height="20" width="20" alt="Volt Logo">
						</span>
						<span class="mt-1 ms-1 sidebar-text">Volt Overview</span>
					</a>
				</li>
				<li class="nav-item">
					<a href="#" class="nav-link">
						<span class="sidebar-icon">
							<svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20"
								xmlns="http://www.w3.org/2000/svg">
								<path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path>
								<path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path>
							</svg>
						</span>
						<span class="sidebar-text">Dashboard</span>
					</a>
				</li>

				<!-- MENU PELANGGAN -->
				<li class="nav-item active">
					<a href="{{ route('pelanggan.index') }}" class="nav-link">
						<span class="sidebar-icon">
							<svg class="icon icon-xs me-2" data-slot="icon" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
								<path stroke-linecap="round" stroke-linejoin="round" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"></path>
							</svg>
						</span>
						<span class="sidebar-text">Pelanggan</span>
					</a>
				</li>

				<li class="nav-item">
					<a href="#" class="nav-link">
						<span class="sidebar-icon">
							<svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
								<path d="M4 4a2 2 0 00-2 2v1h16V6a2 2 0 00-2-2H4z"></path>
								<path fill-rule="evenodd" d="M18 9H2v5a2 2 0 002 2h12a2 2 0 002-2V9zM4 13a1 1 0 011-1h1a1 1 0 110 2H5a1 1 0 01-1-1zm5-1a1 1 0 100 2h1a1 1 0 100-2H9z" clip-rule="evenodd"></path>
							</svg>
						</span>
						<span class="sidebar-text">Transactions</span>
					</a>
				</li>
			</ul>
		</div>
	</nav>

	<main class="content">
		<!-- Topbar Navbar -->
		<nav class="navbar navbar-top navbar-expand navbar-dashboard navbar-dark ps-0 pe-2 pb-0">
			<div class="container-fluid px-0">
				<div class="d-flex justify-content-between w-100" id="navbarSupportedContent">
					<div class="d-flex align-items-center">
						<form class="navbar-search form-inline" id="navbar-search-main">
							<div class="input-group input-group-merge search-bar">
								<span class="input-group-text" id="topbar-addon">
									<svg class="icon icon-xs" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
										<path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
									</svg>
								</span>
								<input type="text" class="form-control" id="topbarInputIconLeft" placeholder="Search" aria-label="Search" aria-describedby="topbar-addon">
							</div>
						</form>
					</div>
					<ul class="navbar-nav align-items-center">
						<li class="nav-item dropdown ms-lg-3">
							<a class="nav-link dropdown-toggle pt-1 px-0" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
								<div class="media d-flex align-items-center">
									<img class="avatar rounded-circle" alt="Image placeholder" src="{{ asset('assets-admin/img/team/profile-picture-3.jpg') }}">
									<div class="media-body ms-2 text-dark align-items-center d-none d-lg-block">
										<span class="mb-0 font-small fw-bold text-gray-900">Bonnie Green</span>
									</div>
								</div>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>

		<!-- Header Halaman -->
		<div class="py-4">
			<nav aria-label="breadcrumb" class="d-none d-md-inline-block">
				<ol class="breadcrumb breadcrumb-dark breadcrumb-transparent mb-0">
					<li class="breadcrumb-item">
						<a href="#">
							<svg class="icon icon-xxs" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
								<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
							</svg>
						</a>
					</li>
					<li class="breadcrumb-item"><a href="#">Pelanggan</a></li>
				</ol>
			</nav>
			<div class="d-flex justify-content-between w-100 flex-wrap mt-2">
				<div class="mb-3 mb-lg-0">
					<h1 class="h4">Data Pelanggan</h1>
					<p class="mb-0">List data seluruh pelanggan</p>
				</div>
				<div>
					<a href="{{ route('pelanggan.create') }}" class="btn btn-success">Tambah Pelanggan</a>
				</div>
			</div>
		</div>

		<!-- Alert Flash Message Sukses (Kotak Hijau Persis Modul) -->
		@if (session('success'))
			<div class="alert alert-success border-0 shadow-sm mb-4" role="alert">
				{{ session('success') }}
			</div>
		@endif

		<!-- Tabel Data Pelanggan -->
		<div class="card border-0 shadow mb-4">
			<div class="card-body">
				<div class="table-responsive">
					<table class="table table-centered table-nowrap mb-0 rounded">
						<thead class="thead-light">
							<tr>
								<th class="border-0 rounded-start">FIRST NAME</th>
								<th class="border-0">LAST NAME</th>
								<th class="border-0">BIRTHDAY</th>
								<th class="border-0">GENDER</th>
								<th class="border-0">EMAIL</th>
								<th class="border-0">PHONE</th>
								<th class="border-0 rounded-end">ACTION</th>
							</tr>
						</thead>
						<tbody>
							@foreach ($dataPelanggan as $item)
							<tr>
								<td>{{ $item->first_name }}</td>
								<td>{{ $item->last_name }}</td>
								<td>{{ $item->birthday }}</td>
								<td>{{ $item->gender }}</td>
								<td>{{ $item->email }}</td>
								<td>{{ $item->phone }}</td>
								<td>
									<!-- Tombol Edit -->
									<a href="{{ route('pelanggan.edit', $item->pelanggan_id) }}" class="btn btn-info btn-sm me-1">
										<svg class="icon icon-xs me-2" data-slot="icon" fill="none" stroke-width="1.5" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
											<path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Z"></path>
										</svg>
										Edit
									</a>

									<!-- Tombol Hapus Persis Modul -->
									<form action="{{ route('pelanggan.destroy', $item->pelanggan_id) }}" method="POST" style="display:inline">
										@csrf
										@method('DELETE')
										<button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
											<svg class="icon icon-xs me-2" data-slot="icon" fill="none" stroke-width="1.5" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
												<path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0"></path>
											</svg>
											Hapus
										</button>
									</form>
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>

		<!-- Footer -->
		<footer class="bg-white rounded shadow p-5 mb-4 mt-4">
			<div class="row">
				<div class="col-12 col-md-4 col-xl-6 mb-4 mb-md-0">
					<p class="mb-0 text-center text-lg-start">© 2019-<span class="current-year"></span> <a class="text-primary fw-normal" href="https://themesberg.com" target="_blank">Themesberg</a></p>
				</div>
				<div class="col-12 col-md-8 col-xl-6 text-center text-lg-start">
					<ul class="list-inline list-group-flush list-group-borderless text-md-end mb-0">
						<li class="list-inline-item px-0 px-sm-2"><a href="https://themesberg.com/about">About</a></li>
						<li class="list-inline-item px-0 px-sm-2"><a href="https://themesberg.com/themes">Themes</a></li>
						<li class="list-inline-item px-0 px-sm-2"><a href="https://themesberg.com/blog">Blog</a></li>
						<li class="list-inline-item px-0 px-sm-2"><a href="https://themesberg.com/contact">Contact</a></li>
					</ul>
				</div>
			</div>
		</footer>
	</main>

	<!-- Scripts -->
	<script src="{{ asset('assets-admin/vendor/@popperjs/core/dist/umd/popper.min.js') }}"></script>
	<script src="{{ asset('assets-admin/vendor/bootstrap/dist/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('assets-admin/vendor/onscreen/dist/on-screen.umd.min.js') }}"></script>
</body>

</html>