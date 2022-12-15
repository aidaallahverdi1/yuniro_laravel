@extends('layouts.guest')
@section('content')
<div class="metaportal_fn_mintpage">
			
			<div class="container small">
				
				<!-- Mint Top -->
				<div class="metaportal_fn_mint_top">
					<div class="mint_left">
						<div class="img">
							<div class="img_in" data-bg-img="img/blog/55.png">
								<img src="img/blog/55.png" alt="">
							</div>
						</div>
					</div>
					<div class="mint_right">
						<!-- <div class="metaportal_fn_share">
							<h5 class="label">Share:</h5>
							<ul>
								<li><a href="#"><img src="svg/social/twitter-1.svg" alt="" class="fn__svg"></a></li>
								<li><a href="#"><img src="svg/social/facebook-1.svg" alt="" class="fn__svg"></a></li>
								<li><a href="#"><img src="svg/social/instagram-1.svg" alt="" class="fn__svg"></a></li>
								<li><a href="#"><img src="svg/social/pinterest-1.svg" alt="" class="fn__svg"></a></li>
								<li><a href="#"><img src="svg/social/behance-1.svg" alt="" class="fn__svg"></a></li>
							</ul>
						</div> -->
						<div class="metaportal_fn_breadcrumbs">
							<p>
								<a href="index.html">Home</a>
								<span class="separator">/</span>
								<a href="collection.html">Portfolio</a>
								<span class="separator">/</span>
								<span class="current">portfolio #123</span>
							</p>
						</div>
						<h3 class="fn__maintitle" data-text="Meta Legends #5675" data-align="left">Meta Legends #5675</h3>
						<div class="desc">
							<p>Suspendisse eu velit est. Cras nec vestibulum quam. Donec tincidunt purus nec enim tincidunt, sit amet facilisis massa laoreet. Integer mollis nec sapien eu lacinia. Nunc eu massa dictum, vulputate neque ac, porta mauris. Sed sollicitudin nisi augue, a gravida turpis elementum vel. Curabitur sagittis quis diam et rhoncus. Nam pellentesque imperdiet aliquet. Sed non ante malesuada, ultrices sem at, tempus libero.</p>
							<p>Duis eu lorem ut mauris pulvinar auctor. Maecenas et dapibus orci, eleifend euismod justo. Quisque luctus turpis eu tristique feugiat. Praesent ac magna feugiat, interdum lacus ac, interdum dui. Pellentesque id quam quis enim malesuada rutrum. Orci varius natoque penatibus et magnis dis parturient.</p>
						</div>
						<!-- <div class="view_on">
							<ul>
								<li>
									<span>View On:</span>
								</li>
								<li>
									<a href="#"><img src="svg/opensea.svg" alt="" class="fn__svg"></a>
								</li>
								<li>
									<a href="#"><img src="svg/portal.svg" alt="" class="fn__svg"></a>
								</li>
							</ul>
						</div> -->
					</div>
				</div>
				<!-- !Mint Top -->
				
				
				<!-- Mint Box -->
				<!-- <div class="metaportal_fn_mintbox">
					<div class="mint_left">
						<div class="mint_title"><span>Public Mint is Live</span></div>
						<div class="mint_list">
							<ul>
								<li>
									<div class="item">
										<h4>Price</h4>
										<h3>2.25 ETH</h3>
									</div>
								</li>
								<li>
									<div class="item">
										<h4>Remaining</h4>
										<h3>344/999</h3>
									</div>
								</li>
								<li>
									<div class="item">
										<h4>Quantity</h4>
										<div class="qnt">
											<span class="decrease">-</span>
											<span class="summ" data-price="2.25">2</span>
											<span class="increase">+</span>
										</div>
									</div>
								</li>
								<li>
									<div class="item">
										<h4>Total Price</h4>
										<h3><span class="total_price">4.5</span> ETH + GAS</h3>
									</div>
								</li>
							</ul>
						</div>
						<div class="mint_desc">
							<a href="#" target="_blank" class="metaportal_fn_button">
								<span>Mint Now</span>
							</a>
							<p>By clicking “MINT NOW” button, you agree to our <a href="#">Terms of Service</a> and our <a href="#">Privacy Policy</a>.</p>
						</div>
					</div>
					<div class="mint_right">
						<div class="mright">
							<div class="mint_time">
								<h4>Public Mint Ends In</h4> -->
								<!-- 
									There is two types of countdown: due_date (Due Date), ever (Evergreen timer)
										1. 	data-type="due_date"
											In this case you have to change value of data-date. For example:
											data-date="October 13, 2022 12:30:00"
											It will mean that mint will finished at this time

										2. 	data-type="ever"
											In this case you have to change values of data-days, data-hours, data-minutes and data-seconds. For example:
											data-days="34"
											data-hours="10"
											data-minutes="20"
											data-seconds="0"
											It will mean that the time expires after this time, but when the page is refreshed, the value will return again. It means, it won't end.
								-->
								<!-- <h3 class="metaportal_fn_countdown" data-type="ever" data-date="October 13, 2022 12:30:00" data-days="34" data-hours="10" data-minutes="20" data-seconds="0">0d: 0h: 0m: 0s</h3>
							</div>
							<div class="mint_checked">
								<p>
									<span class="text">Whitelist:</span>
									<span class="status">Soldout <span class="icon"><img src="svg/checked.svg" alt="" class="fn__svg"></span></span>
								</p>
								<p>
									<span class="text">Presale:</span>
									<span class="status">Soldout <span class="icon"><img src="svg/checked.svg" alt="" class="fn__svg"></span></span>
								</p>
							</div>
							<div class="mint_info">
								<p>You need to pay a GAS fee during minting. We allow max 5 mints per wallet.</p>
							</div>
						</div>
					</div>
				</div> -->
				<!-- !Mint Box -->

				<!-- NFT Categories -->
				<h3 class="fn__maintitle1" data-text="Information">Information</h3>
					<div class="fn_cs_divider">
						<div class="divider">
							<span></span>
							<span></span>
						</div>
					</div>
				<div class="metaportal_fn_nft_cats">
				
					<ul>
						<li>
							<div class="item">
								<h4 class="parent_category">release date:</h4>
								<h3 class="child_category" title="Black Yukata">June 20, 2022</h3>
							</div>
						</li>
						<li>
							<div class="item">
								<h4 class="parent_category">directors:</h4>
								<h3 class="child_category" title="Daydreaming">Joe Mila & Manuel Craig</h3>
							</div>
						</li>
						<li>
							<div class="item">
								<h4 class="parent_category">starring:</h4>
								<h3 class="child_category" title="Fireflies, Smoke">Bromson James, Danila Fernandez, Jacob Olson, Jane Kilo, Dale Allen, Joshua Maguire, etc.</h3>
							</div>
						</li>
						<li>
							<div class="item">
								<h4 class="parent_category">genre:</h4>
								<h3 class="child_category" title="Human, Sand">Action / Drama</h3>
							</div>
						</li>
						<li>
							<div class="item">
								<h4 class="parent_category">writer:</h4>
								<h3 class="child_category" title="Not Bad">Samantha Greg</h3>
							</div>
						</li>
						<li>
							<div class="item">
								<h4 class="parent_category">producer:</h4>
								<h3 class="child_category" title="Zen Headphones">Black Screen Studioss</h3>
							</div>
						</li>
						
					</ul>
				</div>
				<!-- !NFT Categories -->
				
				

				<!-- Similar Items -->
				<div class="metaportal_fn_similar">
					<h3 class="fn__maintitle" data-text="Similar Items">Similar Items</h3>
					<div class="fn_cs_divider">
						<div class="divider">
							<span></span>
							<span></span>
						</div>
					</div>
					<div class="metaportal_fn_drops">
						<ul class="grid">
							<li>
								<div class="nft__item">
									<div class="img_holder">
										<img src="img/drops/1.jpg" alt="">
										<a href="nft-single.html" class="full_link"></a>
									</div>
									<div class="title_holder">
										<h3 class="fn_title"><a href="#">Meta Legends #4588</a></h3>
									</div>
								</div>
							</li>
							<li>
								<div class="nft__item">
									<div class="img_holder">
										<img src="img/drops/2.jpg" alt="">
										<a href="nft-single.html" class="full_link"></a>
									</div>
									<div class="title_holder">
										<h3 class="fn_title"><a href="#">Meta Legends #4587</a></h3>
									</div>
								</div>
							</li>
							<li>
								<div class="nft__item">
									<div class="img_holder">
										<img src="img/drops/3.jpg" alt="">
										<a href="nft-single.html" class="full_link"></a>
									</div>
									<div class="title_holder">
										<h3 class="fn_title"><a href="#">Meta Legends #4586</a></h3>
									</div>
								</div>
							</li>
							<li>
								<div class="nft__item">
									<div class="img_holder">
										<img src="img/drops/4.jpg" alt="">
										<a href="nft-single.html" class="full_link"></a>
									</div>
									<div class="title_holder">
										<h3 class="fn_title"><a href="#">Meta Legends #4585</a></h3>
									</div>
								</div>
							</li>
							<li>
								<div class="nft__item">
									<div class="img_holder">
										<img src="img/drops/5.jpg" alt="">
										<a href="nft-single.html" class="full_link"></a>
									</div>
									<div class="title_holder">
										<h3 class="fn_title"><a href="#">Meta Legends #4584</a></h3>
									</div>
								</div>
							</li>
							<li>
								<div class="nft__item">
									<div class="img_holder">
										<img src="img/drops/6.jpg" alt="">
										<a href="nft-single.html" class="full_link"></a>
									</div>
									<div class="title_holder">
										<h3 class="fn_title"><a href="#">Meta Legends #4583</a></h3>
									</div>
								</div>
							</li>
						</ul>
					</div>
				</div>
				<!-- !Similar Items -->
				
				
			</div>
				
			
		</div>
@stop