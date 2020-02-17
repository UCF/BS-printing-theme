<div class="span-24 footerer">
	<div class="section logo">
		<img src="../images/pegasus.png" alt="pegasus" width="40" height="40" />
	</div>
	<div class="section location">
		<p><a href="https://printing.ucf.edu">The UCF Print Shop</a><!--  is a part of <a href="https://businessservices.ucf.edu/">UCF Business Services</a> --></p>
		<p>3987 Libra Dr. Orlando, FL 32816</p>
	</div>
	<div class="section phones">
		<p>Phone: (407) 823-2277</p>
		<p>Fax: (407) 823-5523</p>
	</div>
	<div class="section copyright">
		<p>We're part of <a href="https://businessservices.ucf.edu">UCF Business Services.</a></p>
		<p>&copy; <% Response.Write Year(now) %> <a href="http://www.ucf.edu">University of Central Florida</a>.</p> 
	</div>
</div><!-- /.footerer -->


<!-- The Scripts -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script type="text/javascript" src="https://universityheader.ucf.edu/bar/js/university-header.js"></script><!-- ADD UCF HEADER -->
<script type="text/javascript" src="/js/global.js"></script>		
<script type="text/javascript" src="js/easySlider1.7/js/easySlider1.7.js"></script>

<!-- Slider -->
<script>
$(document).ready(function(){	
	$("#slider").easySlider({
		auto: true,
		continuous: true,
		controlsShow: false,
		pause: 5000
	});
});
</script>

<% ' Google Analytics %>
<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("UA-7724959-1");
pageTracker._trackPageview();
} catch(err) {}
</script>

<%
' Change log
' 2013-09-24 - Created file. Replaced JavaScript date with Classic ASP. (bwc)
%>