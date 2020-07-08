<!DOCTYPE html>
<html>
<head><meta charset="euc-kr">
    <title>Ideal Tool</title>
    
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('/css/all.css')}}">
    <link rel="stylesheet" href="{{asset('/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('/css/font-awesome.min.css')}}">
</head>

<body>
    <!---header- -->
 <div class="wrapper">
		<div class="col-sm-4"></div>
		<div class="col-sm-4">	
			<form class="form-group" method="post" action="https://django.eks.picmonkey.com/service/" 
			enctype='multipart/form-data' style="display:inline-block">
				<input type="hidden" name="_import" value="image_file"/>
				<div class="card form-group" style="padding: 10px">
					<label for="exampleFormControlFile1">Please select image file to edit</label>
					<input type="file" class='form-control-file' id='exampleFormControlFile1' name="image_file" size="30">
				</div>
				<div class="card">
					<button type="submit" class="btn btn-primary">Start editing</button>
				</div>
				<input type="hidden" name="_apikey" value="a51b089cb223a969751cf4d9628e2d21"/>
			</form>
		</div>
		<div class="col-sm-4"></div>
	</div>
				
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js"></script>
  <script src="{{asset('/js/bootstrap.min.js')}}"></script>
  <script src="https://cdn.jsdelivr.net/gh/BossBele/cropzee@latest/dist/cropzee.js" defer></script>
	  
<script>
$(document).ready(function () {
    $('#sidebarCollapse').on('click', function () {
        $('#sidebar').toggleClass('active');
    });
});

$('#computerUpload').click(function(){ 
    $('#imgupload').trigger('click'); 
});

$('#replace-img').click(function(){ 
    $('#imgupload').trigger('click'); 
});

var loadFile = function(event) {
	var reader = new FileReader();
	reader.onload = function(){
		var output = document.getElementById('img-preview');
		output.src = reader.result;
	};
	reader.readAsDataURL(event.target.files[0]);
};
  
  $(document).on('click', '#img-preview', function(){
     $('#background-box').show();
  });
  
  
$(document).ready(function(){
	$("#rotate-left").click(function(){
	rotate("#img-preview",-90)
	});
	
	$("#rotate-right").click(function(){
	rotate("#img-preview",90);
	});
});

$("#filp-horizontal").on("click", function () {
		$('#img-preview').toggleClass('flipped');
});

$("#flip-vertical").on("click", function () {
		$('#img-preview').toggleClass('flipped');
});

function rotate(whom,angle)
{
    var rv=$(whom).prop("data-rot")?$(whom).prop("data-rot"):0;
    rv=rv+1;
    n=rv*angle;
    if(Math.abs(n)>=360){n=0;rv=0;}
  
    $(whom).css({
        "-webkit-transform": "rotate(" + n + "deg)",
        "-moz-transform": "rotate(" + n + "deg)",
        "transform": "rotate(" + n + "deg)"  
     });
     
     $(whom).prop("data-rot",rv);
}

$(document).on('click','#resize-img',function(){
    $("#img-preview").cropzee();
});
</script>	

</body>

</html>