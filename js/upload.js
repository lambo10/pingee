$(document).ready(function(){
$("#upload").change(function(){
		
		var file=this.files[0];
var imageFile=file.type;
var match=["image/jpeg","image/png","image/jpg"];	

if(!((imageFile==match[0]) || (imageFile==match[1]) || (imageFile==match[2]))){
	alert("Only Jpeg/ Jpg /Png /Gif are allowed");
	return false;
}else{
	var reader=new FileReader();
	reader.onload=imageIsLoaded;
	reader.readAsDataURL(this.files[0]);
}

});

$("#upload2").change(function(){
		var file=this.files[0];
var imageFile=file.type;
var match=["image/jpeg","image/png","image/jpg"];	

if(!((imageFile==match[0]) || (imageFile==match[1]) || (imageFile==match[2]))){
	alert("Only Jpeg/ Jpg /Png /Gif are allowed");
	return false;
}else{
	var reader=new FileReader();
	reader.onload=imageIsLoaded2;
	reader.readAsDataURL(this.files[0]);
}

});


$("#upload3").change(function(){
		
		var file=this.files[0];
var imageFile=file.type;
var match=["image/jpeg","image/png","image/jpg"];	

if(!((imageFile==match[0]) || (imageFile==match[1]) || (imageFile==match[2]))){
	alert("Only Jpeg/ Jpg /Png /Gif are allowed");
	return false;
}else{
	var reader=new FileReader();
	reader.onload=imageIsLoaded3;
	reader.readAsDataURL(this.files[0]);
}

});


$("#upload4").change(function(){
		
		var file=this.files[0];
var imageFile=file.type;
var match=["image/jpeg","image/png","image/jpg"];	

if(!((imageFile==match[0]) || (imageFile==match[1]) || (imageFile==match[2]))){
	alert("Only Jpeg/ Jpg /Png /Gif are allowed");
	return false;
}else{
	var reader=new FileReader();
	reader.onload=imageIsLoaded4;
	reader.readAsDataURL(this.files[0]);
}

});
             function imageIsLoaded(e){
			$("#imageReader").attr('src', e.target.result);
		     $(".camera").hide();
		}

		function imageIsLoaded2(e){
			$("#imageReader2").attr('src', e.target.result);
		     $(".camera2").hide();
		}

		function imageIsLoaded3(e){
			$("#imageReader3").attr('src', e.target.result);
		     $(".camera3").hide();
		}

		function imageIsLoaded4(e){
			$("#imageReader4").attr('src', e.target.result);
		     $(".camera4").hide();
		}
       
		$("#formContent").submit(function(e){
			e.preventDefault();
	     
		var formdata = new FormData(this);
			//formdata.append('file',$('#upload')[0].files[0]);
			$("#uploadIm").show();
			$.ajax({
				url: "ajax_upload_image.php",
				type: "POST",
				data: formdata,
				mimeTypes:"multipart/form-data",
				contentType: false,
				cache: false,
				processData: false,
				success: function(data){
					$("#uploadIm").hide();
					deletBtn_A_dipMsg('Pic 1','pic1SUCESSFULLfgh');
				},error: function(){
					deletBtn_A_dipMsg('Pic 1','pic1FAILDfgh');
				}
		});
		});


		$("#formContent2").submit(function(e){
			e.preventDefault();
	     
		var formdata = new FormData(this);
			//formdata.append('file',$('#upload')[0].files[0]);
			$("#uploadIm2").show();
			$.ajax({
				url: "ajax_upload_image2.php",
				type: "POST",
				data: formdata,
				mimeTypes:"multipart/form-data",
				contentType: false,
				cache: false,
				processData: false,
				success: function(data){
					$("#uploadIm2").hide();
						deletBtn_A_dipMsg('Pic 2','pic1SUCESSFULLfgh2');
				},error: function(){
					deletBtn_A_dipMsg('Pic 2','pic1FAILDfgh2');
				}
		});
		});



		$("#formContent3").submit(function(e){
			e.preventDefault();
	     
		var formdata = new FormData(this);
			//formdata.append('file',$('#upload')[0].files[0]);
			$("#uploadIm3").show();
			$.ajax({
				url: "ajax_upload_image3.php",
				type: "POST",
				data: formdata,
				mimeTypes:"multipart/form-data",
				contentType: false,
				cache: false,
				processData: false,
				success: function(data){
					$("#uploadIm3").hide();
						deletBtn_A_dipMsg('Pic 3','pic1SUCESSFULLfgh3');
				},error: function(){
					deletBtn_A_dipMsg('Pic 3','pic1FAILDfgh3');
				}
		});
		});


		$("#formContent4").submit(function(e){
			e.preventDefault();
	     
		var formdata = new FormData(this);
			//formdata.append('file',$('#upload')[0].files[0]);
			$("#uploadIm4").show();
			$.ajax({
				url: "ajax_upload_image4.php",
				type: "POST",
				data: formdata,
				mimeTypes:"multipart/form-data",
				contentType: false,
				cache: false,
				processData: false,
				success: function(data){
					$("#uploadIm4").hide();
						deletBtn_A_dipMsg('Pic 4','pic1SUCESSFULLfgh4');
				},error: function(){
					deletBtn_A_dipMsg('Pic 4','pic1FAILDfgh4');
				}
		});
		});
		});	
		