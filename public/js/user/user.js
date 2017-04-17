$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
$(document).ready(function() {
	$("#fileUpload").on('change', function () {

	    //Get count of selected files
	    var countFiles = $(this)[0].files.length;

	    var imgPath = $(this)[0].value;
	    var extn = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();
	    var image_holder = $("#image-holder");
	    image_holder.empty();

	    if (extn == "gif" || extn == "png" || extn == "jpg" || extn == "jpeg") {
	        if (typeof (FileReader) != "undefined") {
	            //loop for each file selected for uploaded.
	            for (var i = 0; i < countFiles; i++) {

	                var reader = new FileReader();
	                reader.onload = function (e) {

	                    $('<div class="col-xs-4"><img src="'+e.target.result+'" class="img-thumbnail img-responsive" />').appendTo(image_holder);
	                }

	                image_holder.show();
	                reader.readAsDataURL($(this)[0].files[i]);
	            }

	        }else{
	            alert("This browser does not support FileReader.");
	        }
	    }else{
	        alert("Please select only images");
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
    $('input[name="post_price"]').priceFormat({
    	prefix: '',
	    centsSeparator: ',',
	    thousandsSeparator: '.'
    });
});