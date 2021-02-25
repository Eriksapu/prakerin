@extends('layouts.front')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <div class="card-body">
            <<div class="jumbotron">
	<div class="container">
		<br><h1 class="display-3 text-center">KAWAL CORONA</h1>
		<p class="lead m-0 text-center">Coronavirus Global &amp; Indonesia Live Data</p>
	</div>
</div>
                <div class="row">
							<div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
								<div class="card bg-danger img-card box-primary-shadow">
									<div class="card-body">
										<div class="d-flex">
											<div class="text-white">
												<p class="text-white mb-0">TOTAL POSITIF</p>
												<h2 class="mb-0 number-font"></h2>
												<p class="text-white mb-0">ORANG</p>
											</div>
											<div class="ml-auto"> <img src="../uploads/sad-u6e.png" width="50" height="50" alt="Positif"> </div>
										</div>
									</div>
								</div>
							</div><!-- COL END -->
							<div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
								<div class="card bg-success img-card box-secondary-shadow">
									<div class="card-body">
										<div class="d-flex">
											<div class="text-white">
												<p class="text-white mb-0">TOTAL SEMBUH</p>
												<h2 class="mb-0 number-font">58,577,260</h2>
												<p class="text-white mb-0">ORANG</p>
											</div>
											<div class="ml-auto"> <img src="../uploads/happy-ipM.png" width="50" height="50" alt="Positif"> </div>
										</div>
									</div>
								</div>
							</div><!-- COL END -->
							<div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
								<div class="card  bg-secondary img-card box-success-shadow">
									<div class="card-body">
										<div class="d-flex">
											<div class="text-white">
												<p class="text-white mb-0">TOTAL MENINGGAL</p>
												<h2 class="mb-0 number-font">2,299,090</h2>
												<p class="text-white mb-0">ORANG</p>
											</div>
											<div class="ml-auto"> <img src="../uploads/emoji-LWx.png" width="50" height="50" alt="Positif"> </div>
										</div>
									</div>
								</div>
							</div><!-- COL END -->
							<div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
								<div class="card  bg-orange img-card box-success-shadow">
									<div class="card-body">
										<div class="d-flex">
											<div class="text-white">
												<h2 class="mb-0 number-font">INDONESIA</h2>
												   
												<p class="text-white mb-0"><b>1,134,854</b> POSITIF, <b>926,980</b> SEMBUH, <b>31,202</b> MENINGGAL</p>
											</div>
											
											<div class="ml-auto"> <img src="../uploads/indonesia-PZq.png" width="50" height="50" alt="Positif"> </div>
										</div>
									</div>
								</div>
							</div><!-- COL END -->
							<div class="col text-center"><p>Update terakhir : 06  Februari 2021 14:27:31 WIB</p></div>
						</div>  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
