@extends("layout")

@include('template.header')
@section("content")

<main>

	<section class="sectionArea001">
		<div class="wrapInner">
			<div class="sectionBlock001 col-sm-12">
				<div class="row  slideInUp animated">
					<p>Privacy Policy</p>
					<ul>
						<li><a href="#">{{{ Html::image('/images/appbutton.png','Apple Link Button') }}}</a></li>
						<li><a href="#">{{{ Html::image('/images/androidbutton.png','Android Link Button') }}}</a></li>
					</ul>
				</div>
			</div>
		</div>
	</section>

	<section class="sectionArea002">
		<div class="wrapInner">
			<div class="sectionBlock002 col-sm-12">
				<div class="row">
					<div class="slideInUp animated">
						<p>1.0 Heading Here</p>
						<p>Vestibulum id ligula porta felis euismod semper. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Nullam id dolor id nibh ultricies vehicula ut id elit. Nullam quis risus eget urna mollis ornare vel eu leo. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Aenean lacinia bibendum nulla sed consectetur. Cras justo odio, dapibus ac facilisis in, egestas eget quam.</p>
						<p>Nullam id dolor id nibh ultricies vehicula ut id elit. Nullam quis risus eget urna mollis ornare vel eu leo. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Aenean lacinia bibendum nulla sed consectetur. Cras justo odio, dapibus ac facilisis in, egestas eget quam.</p>
					</div>
					<div class="slideInUp animated">
						<p>1.1 Heading Here</p>
						<p>Vestibulum id ligula porta felis euismod semper. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Nullam id dolor id nibh ultricies vehicula ut id elit. Nullam quis risus eget urna mollis ornare vel eu leo. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Aenean lacinia bibendum nulla sed consectetur. Cras justo odio, dapibus ac facilisis in, egestas eget quam.</p>
						<p>Nullam id dolor id nibh ultricies vehicula ut id elit. Nullam quis risus eget urna mollis ornare vel eu leo. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Aenean lacinia bibendum nulla sed consectetur. Cras justo odio, dapibus ac facilisis in, egestas eget quam.</p>
					</div>
					<div class="slideInUp animated">
						<p>1.1 Heading Here</p>
						<p>Vestibulum id ligula porta felis euismod semper. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Nullam id dolor id nibh ultricies vehicula ut id elit. Nullam quis risus eget urna mollis ornare vel eu leo. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Aenean lacinia bibendum nulla sed consectetur. Cras justo odio, dapibus ac facilisis in, egestas eget quam.</p>
						<p>Nullam id dolor id nibh ultricies vehicula ut id elit. Nullam quis risus eget urna mollis ornare vel eu leo. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Aenean lacinia bibendum nulla sed consectetur. Cras justo odio, dapibus ac facilisis in, egestas eget quam.</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	
</main>

@include('template.footertwo')
@stop