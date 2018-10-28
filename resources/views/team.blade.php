@extends('layouts.frontend')
@section('content')
<!--image start  -->
<div class="team-parallax" style="background-image: url('https://source.unsplash.com/1200x640/?mail');">
	<h2 class="left-align uk-margin-remove title">title</h2>
	<p class="left-align paragraph">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum, ipsa vero reprehenderit.</p>
  	<div class="col s12 right-align">
	    <a href="#!" class="breadcrumb">First</a>
	    <a href="#!" class="breadcrumb">Second</a>
	    <a href="#!" class="breadcrumb">Third</a>
  	</div>
 
</div>

<!-- image end -->
<!-- content start -->
<div class="container">
	<h2 class="content-title center">About Us</h2>
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis amet, voluptates architecto ea distinctio, alias eum quas reprehenderit veritatis, ipsum dolorum a eaque explicabo asperiores. Accusamus sit nobis, at temporibus fuga fugiat aliquid recusandae eaque, tempore dolore eligendi sequi tempora praesentium obcaecati iure, magnam soluta atque libero cum? Autem rem, incidunt natus pariatur mollitia dolorem deleniti sint, earum quam facilis sit quisquam at dolore, dolor nulla. Quasi praesentium officiis quae eveniet, distinctio aliquid. Vero reprehenderit libero delectus. Illum rem sequi suscipit, et iure repellat quo quisquam eum eligendi! Alias aspernatur, quisquam assumenda, itaque iste laborum facere delectus dolorum necessitatibus ab neque porro, odit perferendis. Id, rem temporibus nobis corrupti ad quam, officiis magni vitae alias consequuntur. Unde dolor enim quam eaque a optio at sint nesciunt nisi quaerat cum soluta, accusantium, impedit animi laborum saepe officiis voluptatem sit ea hic amet rem totam aliquid. Rerum qui nulla mollitia reiciendis sed cum quaerat odit magnam, quisquam est, sint totam explicabo temporibus, eaque. Ipsum doloremque nobis repudiandae veniam nesciunt aliquam illo eum maxime quibusdam, saepe laborum eaque itaque officia dignissimos quisquam molestias magnam dicta a voluptates minus laboriosam! Repellat ratione laboriosam, dolorum nesciunt, ea rerum eum, placeat debitis explicabo accusantium libero ipsum illo voluptate tempora ducimus aspernatur quis optio recusandae. Nostrum doloremque, sit expedita repellendus autem rerum vel enim. Reprehenderit voluptas praesentium tenetur quidem alias odit sapiente, esse culpa labore aspernatur beatae doloribus error ut impedit, fugiat eum vero in officiis consequuntur vitae non iste. Architecto veniam exercitationem omnis quasi numquam sapiente id temporibus qui vel reprehenderit obcaecati, sit earum magni, molestias, delectus excepturi corrupti sunt autem. Eaque recusandae, praesentium doloremque culpa! Itaque nobis nulla eligendi libero maxime rem ad. Doloribus impedit quis voluptates ad commodi iusto sit tempora modi nihil quaerat aut reiciendis, nemo itaque quia possimus obcaecati magni, vero odit dolorem ab accusantium consequatur, quidem totam numquam. Beatae ex similique totam quos, quibusdam aliquid. Cupiditate voluptatum vel expedita distinctio possimus sunt voluptas voluptatem, mollitia. Nobis voluptatum, dicta laborum! Dolores architecto aut magnam nam officiis in, exercitationem id, amet numquam voluptas rem tempore minus earum a, quasi nisi inventore accusantium. Id, quibusdam. Assumenda cumque a delectus, harum libero ab, illum aliquid laborum quidem asperiores quis tempora minima aut eum repellat enim error nisi eius corporis unde modi. Inventore autem consequuntur molestias, quas et provident id quidem dicta ipsa, vitae nesciunt iste distinctio possimus. Recusandae debitis corporis a suscipit reprehenderit minus vel ex voluptates placeat aspernatur facilis ut, saepe voluptas aliquam magnam, nisi quo laudantium ipsa quidem iste ducimus deleniti, expedita voluptatem! Facilis culpa, recusandae pariatur rerum optio cumque dolores tempore, quidem dolor, neque odit totam soluta repellendus laudantium qui. Deleniti suscipit iusto distinctio. Doloremque velit quidem voluptates ipsam libero! Maxime adipisci architecto, eum magnam accusamus ducimus dolore beatae ab numquam pariatur officia ipsam iusto, tenetur voluptatum voluptate possimus, dolores sapiente! Quam illo labore, quaerat iste facilis magnam doloribus vero consequatur laudantium iure, asperiores omnis minima cupiditate ipsa recusandae impedit qui laborum quis! Ab ipsam facilis, odit eveniet magnam expedita ipsum molestias tempora, consequatur? Architecto officia quia ullam accusamus beatae, autem ut iste commodi, nulla rem at et blanditiis tempora assumenda nemo obcaecati expedita nisi velit tenetur dignissimos nam. Commodi excepturi, at atque illum, minima dignissimos laboriosam fuga a soluta eius. Fugiat unde, rerum soluta, animi neque odit impedit blanditiis vitae rem possimus voluptatibus labore, placeat quibusdam dolores quae accusamus perspiciatis aperiam. Ducimus ratione minima molestias, neque itaque debitis magnam aspernatur, praesentium quidem accusamus labore dignissimos eos facilis illum dolore voluptatem facere, dicta alias voluptate at perspiciatis vero qui. Numquam, veritatis quasi esse. Maiores animi perferendis velit accusantium nostrum, dolorem non, totam.</p>
</div>
<!-- content end -->
<!-- tab start -->
<div class="container">
	<div class="row">
		<div class="col s12">
			<ul class="tabs tabs-fixed-width" id="team-tab">
				<li class="tab col s3"><a href="#team1" class="active">Our Team</a></li>
				<li class="tab col s3"><a href="#team2">Test 2</a></li>
				<li class="tab col s3 "><a href="#team3">Test 3</a></li>
			</ul>
		</div>
	</div>
</div>
<!-- tab end -->
<!-- Our Team START -->
<div id="team1" class="col s12">
	<div class="container uk-padding">
		<h5 class="center-align">Our Team</h5>
		@for ($i = 1; $i <= 5; $i++)
		<div class="row review-wrapper">
			<div class="col s3 m3 l3">
				<img src="https://via.placeholder.com/150x150" alt="" class="responsive-img">
			</div>
			<div class="col s9 m9 l9">
				<span class="review-title">Trip Name</span>
				<p class="review-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

			</div>
		</div>
		@endfor
	</div>
</div>
<div id="team2" class="col s12">
	<div class="container uk-padding">
		@for ($j = 1; $j <= 5; $j++)
		<div class="row review-wrapper">
			<div class="col s3 m3 l3">
				<img src="https://via.placeholder.com/150x150" alt="" class="responsive-img">
			</div>
			<div class="col s9 m9 l9">
				<span class="review-title">Trip Name</span>
				<p class="review-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

			</div>
		</div>
		@endfor
	</div>
</div>
<div id="team3" class="col s12">
	<div class="container uk-padding">
		@for ($k = 1; $k <= 5; $k++)
		<div class="row review-wrapper">
			<div class="col s3 m3 l3">
				<img src="https://via.placeholder.com/150x150" alt="" class="responsive-img">
			</div>
			<div class="col s9 m9 l9">
				<span class="review-title">Trip Name</span>
				<p class="review-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

			</div>
		</div>
		@endfor
	</div>
</div>
<!-- REVIEW END -->
@include('frontend.partials._media')
@stop