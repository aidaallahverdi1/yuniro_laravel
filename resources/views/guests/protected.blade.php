@extends('layouts.guest')
@section('content')
<!-- Protected Page -->
<div class="metaportal_fn_protected">
			<div class="container">
				<div class="message_holder">
					<span class="icon"><img src="svg/lock.svg" alt="" class="fn__svg"></span>
					<h3 class="fn__maintitle" data-text="Protected Page" data-align="center">Protected Page</h3>
					<p>Please, enter the password to have access to this page.</p>
					<div class="container-custom">            
						<form>
							<input name="post_password" type="password">
							<span class="submit">
								<input type="submit" name="Submit" class="button" value="Authenticate">
							</span>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- !Protected Page -->

@stop
