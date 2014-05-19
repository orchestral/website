<div id="footer">
	<div class="container">
		<div class="row">
			<div class="col-md-3 copyright">
				&copy; {{ date('Y') }} Orchestra Platform
			</div>
			<div class="col-md-6 menu">
				<ul>
					<li><a href="{{ handles('orchestra/story::/') }}">Blog</a></li>
					<li><a href="{{ handles('app::docs/latest') }}">Documentation</a></li>
				</ul>
			</div>
			<div class="col-md-3 social">
				<a href="https://github.com/orchestral">
					<img src="{{ Theme::asset('assets/images/social/github.png') }}" alt="github" />
				</a>
				<a href="https://www.facebook.com/groups/orchestraplatform">
					<img src="{{ Theme::asset('assets/images/social/facebook.png') }}" alt="facebook" />
				</a>
				<a href="https://twitter.com/getorchestra">
					<img src="{{ Theme::asset('assets/images/social/twitter.png') }}" alt="twitter" />
				</a>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-39179956-1']);
_gaq.push(['_trackPageview']);

(function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
})();
</script>