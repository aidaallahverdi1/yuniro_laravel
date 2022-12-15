@extends('layouts.guest')
@section('content')
		<!-- 404 Not Found -->
		<div class="metaportal_fn_404">
			<div class="container small">
				<div class="message_holder">
					<span class="icon">
						<img src="svg/browser.svg" alt="" class="fn__svg">
					</span>
					<h4 class="fn__maintitle" data-text="Nothing Found" data-align="center">Nothing Found</h4>
					<p>Sorry, no content matched your criteria. Try searching something else.</p>
					<div class="container-custom">            
						<form>
							<input name="s" type="text" placeholder="Search here...">
							<a href="#" class="metaportal_fn_button">
								<img src="svg/loupe.svg" alt="" class="fn__svg">
							</a>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- !404 Not Found -->
@stop