<script>
$(document).ready(function () {
	$("input[type=text],input[type=email], textarea").focus(function() {
		$(".grecaptcha-badge").addClass("showgr");
	});
});
</script>