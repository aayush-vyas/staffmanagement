$(document).ready(function() {
	$("#profile-form").submit(function(e) {
		e.preventDefault();

		var formData = new FormData($(this)[0]);

		$.ajax({
			url: "submit.php",
			type: "POST",
			data: formData,
			contentType: false,
			processData: false,
			success: function(response) {
				alert(response);
			},
			error: function(xhr, status, error) {
				alert("Error: " + error);
			}
		});
	});
});
