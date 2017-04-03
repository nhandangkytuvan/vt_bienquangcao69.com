$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
$(document).ready(function() {
	$("#fileUpload").on('change', function () {
	if (typeof (FileReader) != "undefined") {
		var image_holder = $("#image-holder");
		    image_holder.empty();
		    var reader = new FileReader();
		    reader.onload = function (e) {
		        $("<img />", {
		            "src": e.target.result,
		            "class": "img-responsive img-thumbnail center-block"
		        }).appendTo(image_holder);
		    }
		    image_holder.show();
		    reader.readAsDataURL($(this)[0].files[0]);
		} else {
	    	alert("This browser does not support FileReader.");
		}
	});

	$('.list-group-item a').each(function(index, el) {
        if($(el).attr('href')==location.href){
            $(el).parent('li.list-group-item').addClass('active');
        }
    });
    $('[data-toggle="tooltip"]').tooltip();
    autosize($("textarea.autosize"));
    jQuery('#datetimepicker').datetimepicker({
    	timepicker:false,
    	format:'d.m.Y',
    });
});