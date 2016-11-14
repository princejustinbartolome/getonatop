@extends("layout")


@section("content")
@include('template.header')

<main>

	<section class="sectionArea01">	
		<div class="wrapInner">
			<div class="sectionBlock col-sm-12">
				<div class="row">
					<div class="sectionContent01 col-sm-6 slideInLeft animated">	
						<div class="row">
							<h2>Your Personal Document Manager</h2>	
							<p>Getonatop. Developed by people who are bored by personal and household paperwork. Who hate spending time filing bills, policies or any other documents. Who would rather be out in the sun (or rain...) having good times with friends and family...</p>
							<p>...People who want to know they have taken care of EVERYTHING!</p>
							<ul class="mobileLinkUl">
								<li><a href="#">{{{ Html::image('/images/ytbutton.png','Videos Button') }}}</a></li>
								<li><a href="#">{{{ Html::image('/images/appbutton.png','Apple Link Button') }}}</a></li>
								<li><a href="#">{{{ Html::image('/images/androidbutton.png','Android Link Button') }}}</a></li>
							</ul>
							<p>Putting your paperwork in it’s place!</p>
						</div>
					</div>
					<div class="sectionContent02 col-sm-6 slideInRight animated">
						<div class="row">
							{{{ Html::image('/images/mobileimg.png','Mobile Images') }}}
						</div>	
					</div>
				</div>
			</div>		
		</div>
	</section>


	<section class="sectionArea02">
		<div class="wrapInner02">
			<div class="sectionBlock02 col-sm-12">
				<div class="row">
					<div class="col-md-3 col-sm-6 slideInLeft animated">
						<div class="row">
							{{{ Html::image('/images/ideaicon.png','A New Idea') }}}
							<h3>A New Idea</h3>
							<p>Getonatop apps give you centralised, shareable mobile storage with no clutter and no adverts, just fresh and intuitive screens that are suitable for all age groups. So simple, so fast, so versatile, so you can access everything that matters anytime, anywhere.</p>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 slideInLeft animated">
						<div class="row">
							{{{ Html::image('/images/sortedicon.png','Sorted Icon') }}}
							<h3>Sorted</h3>
							<p>Organise your paperwork with minimal input thanks to comprehensive drop-down lists. (You don’t have to add much, but it will help you!) Upload photos or screenshots of documents in seconds. Find it all quickly and easily with little fuss.</p>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 slideInRight animated">
						<div class="row">
							{{{ Html::image('/images/nforgeticon.png','Never Forget Icon') }}}
							<h3>Never Forget</h3>
							<p>Getonatop will remind you when you can and should make a change.</p>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 slideInRight animated">
						<div class="row">
							{{{ Html::image('/images/securityicon.png','Bank-grade Security Icon') }}}
							<h3>Bank-grade Security</h3>
							<p>Choose your own Getonatop login details and passcode.  Your data is uploaded to your free storage facility (not on your mobile device) with 128-bit AES security, transferred with 2048 bit SSL and stored using AES encryption. And rest assured.., your data is never sold on to third parties.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


	<section class="sectionArea03">
		<div class="wrapInner">
			<div class="col-sm-12">	
				<iframe class="fadeIn animated" src="https://www.youtube.com/embed/HaMq2nn5ac0" frameborder="0" allowfullscreen></iframe>
			</div>
		</div>
	</section>

	<section class="sectionArea04">
		<div class="wrapInner">
			<div class="sectionBlock04 col-sm-12">
				<div class="row slideInUp animated">
					<p>{{{ Html::image('/images/staricon.png','Star Icon') }}}</p>
					<p>Features coming soon</p>
					<p>Getonatop apps are getting even more great features very soon.  We are going to tell you when they are ready.., but keeping checking anyway. We know you are going to love them too!
</p>
				</div>	
			</div>
		</div>	
	</section>

	<section class="sectionArea05">
		<div class="wrapInner">
			<div class="sectionBlock05 col-sm-12">
				<div class="row  slideInUp animated">
					<p>Ready to get started?</p>
					<p>Download the Get Onatop app today</p>
					<ul>
						<li><a href="#">{{{ Html::image('/images/appbutton02.png','Apple Link Button') }}}</a></li>
						<li><a href="#">{{{ Html::image('/images/androidbutton02.png','Android Link Button') }}}</a></li>
					</ul>
				</div>	
			</div>
		</div>	
	</section>

	<section class="sectionArea06">
		<div class="wrapInner">
			<div class="sectionBlock06 col-sm-12">
				<div class="row slideInUp animated">
					{{{ Html::image('/images/ideaicon02.png','chat icon') }}}
					<p>If you would like to know more about Getonatop and why we have put it together for you, if you are interested in helping us grow, or if you want to invest, then please get in touch: <a href="#">info@getonatop.com</a>.   We would love to hear from you!</p>
				</div>	
			</div>
		</div>	
	</section>



</main>

@include('template.footerone')
@stop
