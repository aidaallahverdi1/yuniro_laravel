@extends('layouts.guest')
@section('content')
<div class="metaportal_fn_pagetitle">
            <div class="container small">
                <div class="pagetitle">
                    <h3 class="fn__maintitle big" data-text="news & articles" data-align="center">news & articles</h3>
                    <p class="text">
					truly creative things happen when one thinks differently, yet nobody wants to think differently                        <!-- <a href="index.html">Home</a>
                        <span class="divider">/</span>
                        <span class="text">Blog Articles</span> -->
                    </p>
                </div>
            </div>
        </div>
        @include('layouts.guest.partials.divider')
        <div class="metaportal_fn_bloglist">
			<div class="container small">
				<div class="bloglist">

					<ul class="fn-isotope">



                        @foreach($Posts as $Post)

                        <li class="isotope-item">
                            <div class="blog__item">
                                <div class="counter">

                                </div>
                                <div class="meta">

                                    <p>{{$Post->author}} /  {{$Post->tags}}  /{{ Carbon\Carbon::parse( $Post->published)->format('d-m-Y H:i:s') }}

                                </p>
                                </div>
                                <div class="title">
                                    <h3><a href="blog-single.html">{{$Post->title}}</a></h3>
                                </div>
                                <div class="image">


                                        <img src="{{ asset('storage/Admin/Admin/'.$Post->upload)}}" alt="">


                                </div>
                                <div class="read_more">
                                    <p>
                                        {{$Post->description}}
                                    </p>
                                </div>
                            </div>
                        </li>

                    @endforeach


{{--						<li class="isotope-item">--}}
{{--							<div class="blog__item">--}}
{{--								<div class="counter">--}}
{{--									<span class="cc"><span>02</span></span>--}}
{{--								</div>--}}
{{--								<!-- <div class="meta">--}}
{{--									<p>August 09, 2022  /  MetaVerse  /  4 Comments</p>--}}
{{--								</div> -->--}}
{{--								<div class="title">--}}
{{--									<h3><a href="blog-single.html">Sarajevo’s CineLink reveals line-up, introduces Female ...</a></h3>--}}
{{--								</div>--}}
{{--								<div class="image">--}}
{{--									<a href="blog-single.html">--}}
{{--										<img src="img/blog/Rectangle 20.png"" alt="">--}}
{{--									</a>--}}
{{--								</div>--}}
{{--								<div class="read_more">--}}
{{--									<a href="blog-single.html"><span>Read More</span></a>--}}
{{--								</div>--}}
{{--							</div>--}}
{{--						</li>--}}
{{--						<li class="isotope-item">--}}
{{--							<div class="blog__item">--}}
{{--								<div class="counter">--}}
{{--									<span class="cc"><span>03</span></span>--}}
{{--								</div>--}}
{{--								<!-- <div class="meta">--}}
{{--									<p>August 09, 2022  /  MetaVerse  /  4 Comments</p>--}}
{{--								</div> -->--}}
{{--								<div class="title">--}}
{{--									<h3><a href="blog-single.html">Retaining crew aged over 50 could help UK industry meet ...</a></h3>--}}
{{--								</div>--}}
{{--								<div class="image">--}}
{{--									<a href="blog-single.html">--}}
{{--										<img src="img/blog/Rectangle 21.png"" alt="">--}}
{{--									</a>--}}
{{--								</div>--}}
{{--								<div class="read_more">--}}
{{--									<a href="blog-single.html"><span>Read More</span></a>--}}
{{--								</div>--}}
{{--							</div>--}}
{{--						</li>--}}
{{--						<li class="isotope-item">--}}
{{--							<div class="blog__item">--}}
{{--								<div class="counter">--}}
{{--									<span class="cc"><span>04</span></span>--}}
{{--								</div>--}}
{{--								<!-- <div class="meta">--}}
{{--									<p>August 09, 2022  /  MetaVerse  /  4 Comments</p>--}}
{{--								</div> -->--}}
{{--								<div class="title">--}}
{{--									<h3><a href="blog-single.html">Production wraps on Paramount's ‘Apartment 7A’ ...</a></h3>--}}
{{--								</div>--}}
{{--								<div class="image">--}}
{{--									<a href="blog-single.html">--}}
{{--										<img src="img/blog/Rectangle 67.png"" alt="">--}}
{{--									</a>--}}
{{--								</div>--}}
{{--								<div class="read_more">--}}
{{--									<a href="blog-single.html"><span>Read More</span></a>--}}
{{--								</div>--}}
{{--							</div>--}}
{{--						</li>--}}
{{--						<li class="isotope-item">--}}
{{--							<div class="blog__item">--}}
{{--								<div class="counter">--}}
{{--									<span class="cc"><span>05</span></span>--}}
{{--								</div>--}}
{{--								<!-- <div class="meta">--}}
{{--									<p>August 09, 2022  /  MetaVerse  /  4 Comments</p>--}}
{{--								</div> -->--}}
{{--								<div class="title">--}}
{{--									<h3><a href="blog-single.html">Rodger Griffiths’ Scotland-based dark family thriller ‘Ki ...</a></h3>--}}
{{--								</div>--}}
{{--								<div class="image">--}}
{{--									<a href="blog-single.html">--}}
{{--										<img src="img/blog/Rectangle 70.png"" alt="">--}}
{{--									</a>--}}
{{--								</div>--}}
{{--								<div class="read_more">--}}
{{--									<a href="blog-single.html"><span>Read More</span></a>--}}
{{--								</div>--}}
{{--							</div>--}}
{{--						</li>--}}
{{--						<li class="isotope-item">--}}
{{--							<div class="blog__item">--}}
{{--								<div class="counter">--}}
{{--									<span class="cc"><span>06</span></span>--}}
{{--								</div>--}}
{{--								<!-- <div class="meta">--}}
{{--									<p>August 09, 2022  /  MetaVerse  /  4 Comments</p>--}}
{{--								</div> -->--}}
{{--								<div class="title">--}}
{{--									<h3><a href="blog-single.html">US streaming platforms hitting 30% local content mark in ...</a></h3>--}}
{{--								</div>--}}
{{--								<div class="image">--}}
{{--									<a href="blog-single.html">--}}
{{--										<img src="img/blog/Rectangle 71.png"" alt="">--}}
{{--									</a>--}}
{{--								</div>--}}
{{--								<div class="read_more">--}}
{{--									<a href="blog-single.html"><span>Read More</span></a>--}}
{{--								</div>--}}
{{--							</div>--}}
{{--						</li>--}}
{{--						<li class="isotope-item">--}}
{{--							<div class="blog__item">--}}
{{--								<div class="counter">--}}
{{--									<span class="cc"><span>07</span></span>--}}
{{--								</div>--}}
{{--								<!-- <div class="meta">--}}
{{--									<p>August 09, 2022  /  MetaVerse  /  4 Comments</p>--}}
{{--								</div> -->--}}
{{--								<div class="title">--}}
{{--									<h3><a href="blog-single.html">Saudi Arabia’s Telfaz11 pacts with France’s Easy Riders on ...</a></h3>--}}
{{--								</div>--}}
{{--								<div class="image">--}}
{{--									<a href="blog-single.html">--}}
{{--										<img src="img/blog/Rectangle 73.png" alt="">--}}
{{--									</a>--}}
{{--								</div>--}}
{{--								<div class="read_more">--}}
{{--									<a href="blog-single.html"><span>Read More</span></a>--}}
{{--								</div>--}}
{{--							</div>--}}
{{--						</li>--}}
{{--						<li class="isotope-item">--}}
{{--							<div class="blog__item">--}}
{{--								<div class="counter">--}}
{{--									<span class="cc"><span>08</span></span>--}}
{{--								</div>--}}
{{--								<!-- <div class="meta">--}}
{{--									<p>August 09, 2022  /  MetaVerse  /  4 Comments</p>--}}
{{--								</div> -->--}}
{{--								<div class="title">--}}
{{--									<h3><a href="blog-single.html">Sarah Doole departs Red Production Company</a></h3>--}}
{{--								</div>--}}
{{--								<div class="image">--}}
{{--									<a href="blog-single.html">--}}
{{--										<img src="img/blog/Rectangle 74.png"" alt="">--}}
{{--									</a>--}}
{{--								</div>--}}
{{--								<div class="read_more">--}}
{{--									<a href="blog-single.html"><span>Read More</span></a>--}}
{{--								</div>--}}
{{--							</div>--}}
{{--						</li>--}}

					</ul>
				</div>

				<!-- <div class="metaportal_fn_pagination">
					<ul>
						<li>
							<span >1</span>
						</li>
						<li>
							<a href="#">2</a>
						</li>
						<li>
							<a href="#">3</a>
						</li>
						<li>
							<span>...</span>
						</li>
						<li>
							<a href="#">77</a>
						</li>
					</ul>
				</div> -->

			</div>
		</div>
@stop
