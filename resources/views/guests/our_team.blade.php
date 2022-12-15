@extends('layouts.guest')
@section('content')
<div class="metaportal_fn_pagetitle">

			<div class="container small">
				<div class="pagetitle">
					<h3 class="fn__maintitle big" data-text="Our Team" data-align="center">Our Team</h3>
					<p class="fn__maintitle">
					our company has a great and professional team to manage our project

					</p>
				</div>
			</div>
		</div>
        @include('layouts.guest.partials.divider')
		<!-- Collection Page -->
		<div class="metaportal_fn_collectionpage">
			<div class="container">

				<div class="metaportal_fn_collection">



					<div class="metaportal_fn_clist">



						<!-- Result List -->
						<div class="metaportal_fn_result_list">
							<div class="metaportal_fn_drops">
								<ul class="grid">

                                    {{-- @foreach($Members as $Member)
									<li class="id1 id5">
										<div class="nft__item">
											<div class="img_holder">
												<img src="img/team/Rectangle 66.png" alt="">
												<a href="nft-single.html" class="full_link"></a>
											</div>
											<div class="title_holder">
												<h3 class="fn_title-name"><a href="nft-single.html">{{$Member->name}}  {{$Member->lastname}}</a></h3>
												<h3 class="fn_title"><a href="nft-single.html">{{$Member->job}}</a></h3>
											</div>
										</div>
									</li>
                                    @endforeach --}}


									{{-- <li class="id1 id2 id3 id5 id6">
										<div class="nft__item">
											<div class="img_holder">
												<img src="img/team/Rectangle 75.png" alt="">
												<a href="nft-single.html" class="full_link"></a>
											</div>
											<div class="title_holder">
												<h3 class="fn_title-name"><a href="nft-single.html">Samantha William</a></h3>
												<h3 class="fn_title"><a href="nft-single.html">Director</a></h3>
											</div>
										</div>
									</li>
									<li class="id7 id8 id3">
										<div class="nft__item">
											<div class="img_holder">
												<img src="img/team/Rectangle 68.png" alt="">
												<a href="nft-single.html" class="full_link"></a>
											</div>
											<div class="title_holder">
												<h3 class="fn_title-name"><a href="nft-single.html">Jacob Allen</a></h3>
												<h3 class="fn_title"><a href="nft-single.html">Co. Director</a></h3>
											</div>
										</div>
									</li>
									<li class="id4 id7 id9">
										<div class="nft__item">
											<div class="img_holder">
												<img src="img/team/Rectangle 69.png " alt="">
												<a href="nft-single.html" class="full_link"></a>
											</div>
											<div class="title_holder">
												<h3 class="fn_title-name"><a href="nft-single.html">Jerome Bell</a></h3>
												<h3 class="fn_title"><a href="nft-single.html">Art Director</a></h3>
											</div>
										</div>
									</li>
									<li class="id2 id10">
										<div class="nft__item">
											<div class="img_holder">
												<img src="img/team/Rectangle 70.png" alt="">
												<a href="nft-single.html" class="full_link"></a>
											</div>
											<div class="title_holder">
												<h3 class="fn_title-name"><a href="nft-single.html">Leslie Alexander</a></h3>
												<h3 class="fn_title"><a href="nft-single.html">Art Director</a></h3>
											</div>
										</div>
									</li>
									<li class="id11 id12">
										<div class="nft__item">
											<div class="img_holder">
												<img src="img/team/Rectangle 71.png" alt="">
												<a href="nft-single.html" class="full_link"></a>
											</div>
											<div class="title_holder">
												<h3 class="fn_title-name"><a href="nft-single.html">Eleanor Pena</a></h3>
												<h3 class="fn_title"><a href="nft-single.html">Camera Operator</a></h3>
											</div>
										</div>
									</li>
									<li class="id1 id13 id20">
										<div class="nft__item">
											<div class="img_holder">
												<img src="img/team/Rectangle 72.png" alt="">
												<a href="nft-single.html" class="full_link"></a>
											</div>
											<div class="title_holder">
											<h3 class="fn_title-name"><a href="nft-single.html">Courtney Henry</a></h3>
												<h3 class="fn_title"><a href="nft-single.html">Camera Operator</a></h3>
											</div>
										</div>
									</li>
									<li class="id1 id14">
										<div class="nft__item">
											<div class="img_holder">
												<img src="img/team/Rectangle 73.png" alt="">
												<a href="nft-single.html" class="full_link"></a>
											</div>
											<div class="title_holder">
											<h3 class="fn_title-name"><a href="nft-single.html">Dianne Russell</a></h3>
												<h3 class="fn_title"><a href="nft-single.html">Video Editor</a></h3>
											</div>
										</div>
									</li>
									<li class="id2 id13">
										<div class="nft__item">
											<div class="img_holder">
												<img src="img/team/Rectangle 74.png" alt="">
												<a href="nft-single.html" class="full_link"></a>
											</div>
											<div class="title_holder">
												<h3 class="fn_title-name"><a href="nft-single.html">Albert Flores</a></h3>
												<h3 class="fn_title"><a href="nft-single.html">Video Editor</a></h3>
											</div>
										</div>
									</li> --}}

								</ul>
							</div>

						</div>
						<!-- !Result List -->

					</div>

				</div>

			</div>
		</div>
		<!-- !Collection Page -->
@stop
