@extends('layouts.guest')
@section('content')
<!-- 404 Not Found -->
<div class="metaportal_fn_404">
			<div class="container small">
				<div class="message_holder">
					<h3 class="fn__gradient_title">404</h3>
					<h4 class="fn__maintitle" data-text="Page Not Found" data-align="center">Page Not Found</h4>
					<p>the page you are looking for might have been removed had its name changed or is temporarily unavailable</p>
					<a href="{{route('home')}}" class="metaportal_fn_button"><span>Back to Home</span></a>
					<div class="container-custom">   
					         
						<!-- <form>
							<input name="s" type="text">
							<a href="#" class="metaportal_fn_button">
								<img src="svg/loupe.svg" alt="" class="fn__svg">
							</a>
						</form> -->
					</div>
				</div>
			</div>
		</div>
		<!-- !404 Not Found -->
@stop
