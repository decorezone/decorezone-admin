@extends('user.master')
@section('seo')
@if($linkseo)
<title>{{$linkseo->link_title}}</title>
<meta name="description" content="{{$linkseo->link_description}}">
<meta name="keywords" content="{{$linkseo->link_keyword}}">
@endif
@endsection
@section('userdash')
<div class="container"  id="main_container">
	<div class="row" style="margin-top: 5px;">
		<div class="col-lg-3" id="a" style="margin-top:5px;">
			<img src="{{ URL::asset('user/150x600.jpg') }}" style="float:right;" alt="" class="hide_me_on_mobile">

		</div>
		<div class="col-lg-6" s id="b" style="margin-top:5px;width: 100%;">
			<div id="about" class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<h1>Welcome to our Privacy Policy</h1>
						<h3>Your privacy is critically important to us.</h3>


							<p>It is MobileinPakistan's policy to respect your privacy regarding any information we may collect while operating our website. This Privacy Policy applies to <a href="https://mobileinpakistan.com/">https://mobileinpakistan.com/</a> "https://mobileinpakistan.com/"). We respect your privacy and are committed to protecting personally identifiable information you may provide us through the Website. We have adopted this privacy policy ("Privacy Policy") to explain what information may be collected on our Website, how we use this information, and under what circumstances we may disclose the information to third parties. This Privacy Policy applies only to information we collect through the Website and does not apply to our collection of information from other sources.</p>
							<p>This Privacy Policy, together with the Terms and conditions posted on our Website, set forth the general rules and policies governing your use of our Website. Depending on your activities when visiting our Website, you may be required to agree to additional terms and conditions.</p>

							<h2>Website Visitors</h2>
							<p>Like most website operators, MobileinPakistan collects non-personally-identifying information of the sort that web browsers and servers typically make available, such as the browser type, language preference, referring site, and the date and time of each visitor request. MobileinPakistan's purpose in collecting non-personally identifying information is to better understand how MobileinPakistan's visitors use its website. From time to time, MobileinPakistan may release non-personally-identifying information in the aggregate, e.g., by publishing a report on trends in the usage of its website.</p>
							<p>MobileinPakistan also collects potentially personally-identifying information like Internet Protocol (IP) addresses for logged in users and for users leaving comments on <a href="https://mobileinpakistan.com/">https://mobileinpakistan.com/</a> blog posts. MobileinPakistan only discloses logged in user and commenter IP addresses under the same circumstances that it uses and discloses personally-identifying information as described below.</p>

							<h2>Gathering of Personally-Identifying Information</h2>
							<p>Certain visitors to MobileinPakistan's websites choose to interact with MobileinPakistan in ways that require MobileinPakistan to gather personally-identifying information. The amount and type of information that MobileinPakistan gathers depends on the nature of the interaction. For example, we ask visitors who sign up for a blog at <a href="https://mobileinpakistan.com/blog">https://mobileinpakistan.com/blog</a> to provide a username and email address.</p>


							<h2>Advertisements</h2>
							<p>Ads appearing on our website may be delivered to users by advertising partners, who may set cookies. These cookies allow the ad server to recognize your computer each time they send you an online advertisement to compile information about you or others who use your computer. This information allows ad networks to, among other things, deliver targeted advertisements that they believe will be of most interest to you. This Privacy Policy covers the use of cookies by MobileinPakistan and does not cover the use of cookies by any advertisers.</p>


							<h2>Links To External Sites</h2>
							<p>Our Service may contain links to external sites that are not operated by us. If you click on a third party link, you will be directed to that third party's site. We strongly advise you to review the Privacy Policy and terms and conditions of every site you visit.</p>
							<p>We have no control over, and assume no responsibility for the content, privacy policies or practices of any third party sites, products or services.</p>



							<h2>Aggregated Statistics</h2>
							<p>MobileinPakistan may collect statistics about the behavior of visitors to its website. MobileinPakistan may display this information publicly or provide it to others. However, MobileinPakistan does not disclose your personally-identifying information.</p>


							<h2>Cookies</h2>
							<p>To enrich and perfect your online experience, MobileinPakistan uses "Cookies", similar technologies and services provided by others to display personalized content, appropriate advertising and store your preferences on your computer.</p>
							<p>A cookie is a string of information that a website stores on a visitor's computer, and that the visitor's browser provides to the website each time the visitor returns. MobileinPakistan uses cookies to help MobileinPakistan identify and track visitors, their usage of <a href="https://mobileinpakistan.com/">https://mobileinpakistan.com/</a>, and their website access preferences. MobileinPakistan visitors who do not wish to have cookies placed on their computers should set their browsers to refuse cookies before using MobileinPakistan's websites, with the drawback that certain features of MobileinPakistan's websites may not function properly without the aid of cookies.</p>
							<p>By continuing to navigate our website without changing your cookie settings, you hereby acknowledge and agree to MobileinPakistan's use of cookies.</p>

						


							<h2>Privacy Policy Changes</h2>
							<p>Although most changes are likely to be minor, MobileinPakistan may change its Privacy Policy from time to time, and in MobileinPakistan's sole discretion. MobileinPakistan encourages visitors to frequently check this page for any changes to its Privacy Policy. Your continued use of this site after any change in this Privacy Policy will constitute your acceptance of such change.</p>	

							



						</div>

					</div>
				</div>
			</div>
			<div class="col-lg-3"  id="c">
				@include('user.chunks.side_bar_search')
			</div>
		</div>
	</div>
	@endsection
