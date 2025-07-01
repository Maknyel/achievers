<script src="//cdn.ckeditor.com/4.11.1/standard/ckeditor.js"></script>


<link href="<?=base_url()?>assets/tags/tagsinput.css" rel="stylesheet" type="text/css">
<div class="container-fluid">

          <h1 class="h3 mb-2 text-gray-800">Add House</h1>
          <!-- <p class="mb-4">List of images</p> -->

          <!-- Content Row -->
          <div class="card">
            <form class="nodisplay" id="uploadForm">
              <input type="file" name ="file" id="file" accept="image/*">
            </form>
          	<div class="card-body">
              <form action="<?=base_url()?>add_housing_submit" method="post">

              <center>
                <div class="cover_upload" id="upload_file"><i class="fa fa-upload upload_fa" aria-hidden="true"></i></div>

                <div class="cover_upload2 display-flex" id="" style="display: none;">
                  <img style="width:100%;height:auto;" src=""><div id="close_file"><i class="fa fa-close " ></i></div>
                </div>

                <div class="form-group">
                        <label for="video">Video (Please Copy and paste Youtube link to the textbox):</label>
                        <input type="text" class="form-control" id="video" name="video2" autocomplete="off">
                        <iframe style="width:calc(100% - 50px);height: auto;margin: 50px;display: none;" id="videoframe" src="" frameborder="0" allowfullscreen></iframe>
                        <input type="hidden" class="form-control" id="video2" name="video" autocomplete="off">
                      </div>
              </center>

                <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                      <div class="form-group">
                        <label for="text">House Name:</label>
                        <input type="text" class="form-control" id="house_name" name="house_name" autocomplete="off" required>
                      </div>
                      <div class="form-group">
                        <label for="house_decs">House Description:</label>
                        <textarea rows="6" class="form-control" id="house_decs" name="house_decs" autocomplete="off" required></textarea>
                        <script type="text/javascript">
                          // new FroalaEditor('textarea#house_decs', {
                          //   imageUploadURL: base_url+'User/upload_image',
                          // })
                          CKEDITOR.replace('house_decs');
                        </script>
                      </div>
                      <div class="form-group">
                        <label for="house_decs_id">Subdivision:</label>
                        <select class="form-control" id="house_decs_id" name="house_decs_id" autocomplete="off" required>
                          <?php foreach(get_subdivision() as $key => $value){ ?>
                            <option value="<?=$value['sub_id']?>"><?=$value['sub_name']?></option>
                          <?php  } ?>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="house_model">House Model:</label>
                        <input type="text" class="form-control" id="house_model" name="house_model" autocomplete="off" required>
                      </div>
                      <div class="form-group">
                        <label for="house_type">House Type:</label>
                        <input type="type" class="form-control" id="house_type" name="house_type" autocomplete="off" required>
                      </div>
                      <div class="form-group">
                        <label for="village">Village:</label>
                        <input type="text" class="form-control" id="village" name="village" autocomplete="off" required>
                      </div>
                      <div class="form-group">
                        <label for="lot_area">Lot Area: (Meter)</label>
                        <input type="text" oninput="this.value = this.value.replace(/[^0-9-]/g, '').replace(/(\..*)\./g, '$1');" class="form-control" id="lot_area" name="lot_area" autocomplete="off" required>
                      </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                      <div class="form-group">
                        <label for="address">Address:</label>
                        <textarea rows="6" class="form-control" id="address" name="address" autocomplete="off" required></textarea>
                      </div>
                      
                      <div class="form-group">
                        <label for="floor_area">Floor Area: (Meter)</label>
                        <input type="text" oninput="this.value = this.value.replace(/[^0-9-]/g, '').replace(/(\..*)\./g, '$1');" class="form-control" id="floor_area" name="floor_area" autocomplete="off" required>
                      </div>
                      <div class="form-group">
                        <label for="bed_rooms">Bed Rooms:</label>
                        <input type="text" oninput="this.value = this.value.replace(/[^0-9-]/g, '').replace(/(\..*)\./g, '$1');" class="form-control" id="bed_rooms" name="bed_rooms" autocomplete="off" required>
                      </div>
                      <div class="form-group">
                        <label for="bath_rooms">Bath Rooms:</label>
                        <input type="text" oninput="this.value = this.value.replace(/[^0-9-]/g, '').replace(/(\..*)\./g, '$1');" class="form-control" id="bath_rooms" name="bath_rooms" autocomplete="off" required>
                      </div>
                      <div class="form-group">
                        <label for="storeys">Storeys:</label>
                        <input type="text" oninput="this.value = this.value.replace(/[^0-9-]/g, '').replace(/(\..*)\./g, '$1');" class="form-control" id="storeys" name="storeys" autocomplete="off" required>
                      </div>
                      <div class="form-group">
                        <label for="car_garage">Car Garage:</label>
                        <input type="text" oninput="this.value = this.value.replace(/[^0-9-]/g, '').replace(/(\..*)\./g, '$1');" class="form-control" id="car_garage" name="car_garage" autocomplete="off" required>
                      </div>
                      <div class="form-group">
                        <label for="with_balcony">Amenities:</label><br>
                        <input type="text" data-role="tagsinput"  id="with_balcony" name="with_balcony" autocomplete="off" required>
                      </div>
                      <div class="form-group">
                        <label for="tota_contart_price">Total Price:</label>
                        <input type="text" class="form-control" oninput="this.value = this.value.replace(/[^0-9-]/g, '').replace(/(\..*)\./g, '$1');" id="tota_contart_price" name="tota_contart_price" autocomplete="off" required>
                      </div>
                      <div id="form_plans" style="margin-bottom: 20px;">
                        <div class="row">
                          <div class="col-12 col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                            Plans
                          </div>
                          <div class="col-12 col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6" style="text-align:right;">
                            <button class="btn btn-primary" onclick="add_plan();" type="button">Add</button>
                          </div>
                          <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" id="fetch_plans" style="margin-top:10px;">
                            
                          </div>
                        </div>
                      </div>
                      <div class="form-group nodisplay">
                        <label for="image">Image:</label>
                        <input type="text" class="form-control" id="image" name="image" autocomplete="off">
                      </div>
                      <div style="width: 100%;text-align: right;">
                        <button type="submit" class="btn btn-primary pull-right">Submit</button>
                      </div>
                </div>
              </div>  
                
              </form>
            </div>
          </div>
</div>


<script>
  var plan_count = 1;
  function add_plan(){
    var datatofetch = "";
        datatofetch += '<div id="plan_'+plan_count+'">';
          datatofetch += '<div class="form-group">';
          datatofetch += '<label>Type of Computation</label>';
            datatofetch += '<input type="text" class="form-control" name="type_of_entity[]" id="type_of_entity" placeholder="Type of Computation" value="">';
          datatofetch += '</div>';
          datatofetch += '<div class="form-group">';
          datatofetch += '<label>Downpayment Term</label>';
            datatofetch += '<input type="text" class="form-control" name="downpayment_term[]" id="downpayment_term" placeholder="Downpayment Term" value="">';
          datatofetch += '</div>';
          datatofetch += '<div class="form-group">';
          datatofetch += '<label>Loanable Amount</label>';
            datatofetch += '<input type="text" class="form-control" name="loanable_amount[]" id="loanable_amount" placeholder="Loanable Amount" value="">';
          datatofetch += '</div>';
          datatofetch += '<div class="form-group">';
          datatofetch += '<label>Reservation Fee</label>';
            datatofetch += '<input type="text" class="form-control" name="reservation_fee[]" id="reservation_fee" placeholder="Reservation Fee" value="">';
          datatofetch += '</div>';

          datatofetch += '<div class="form-group">';
          datatofetch += '<label>Total Downpayment(Net Equity)</label>';
            datatofetch += '<input type="number" class="form-control" name="downpayment[]" id="downpayment" placeholder="Downpayment" value="">';
          datatofetch += '</div>';
          datatofetch += '<div class="form-group">';
          datatofetch += '<label>MA Term</label>';
            datatofetch += '<input type="number" class="form-control" name="per_month[]" id="per_month" placeholder="Month Count" value="">';
          datatofetch += '</div>';
          datatofetch += '<div class="form-group">';
          datatofetch += '<label>MA Amortization</label>';
            datatofetch += '<input type="text" class="form-control" name="price[]" id="price" placeholder="Price per month" value="">';
          datatofetch += '</div>';
          datatofetch += '<div class="form-group">';
            datatofetch += '<div class="form-group-append">';
                datatofetch += '<button class="btn btn-danger btn-sm" type="button" onclick="delete_features(`'+plan_count+'`)">Delete</button>';
            datatofetch += '</div>';
          datatofetch += '</div>';
        datatofetch += '</div>';
        datatofetch += '<hr id="planv1_'+plan_count+'"/>';
        $('#fetch_plans').append(datatofetch);
        plan_count++;
    
  }

  function delete_features(id){
        $('#plan_'+id).remove();
        $('#planv1_'+id).remove();
    }
  var base_url = `<?php echo base_url(); ?>`;
	

  function delete_image(id,name){
      if(confirm("Do you want to delete?")){
        window.location = base_url+'Admin/delete_image?id='+id+'&name='+name;
      }else{
      }
  }


    $('#upload_file').click(function(){
      $('#file').click();
    });

    $(document).on('change','#file', function(){
      upload();
    });


    function upload(){
      var form = $('#uploadForm')[0];

        // Create an FormData object
        var dataString = new FormData(form);
            $.ajax({
                type:'POST',
                dataType: "json",
                data: dataString,
                enctype: 'multipart/form-data',
                processData: false,
                contentType: false,
                cache: false,
                url:base_url+"cms/upload_resume",
            beforeSubmit: function(data) {
              $('.loader_thumb').show();
                
            },
            uploadProgress: function (event, position, total, progress){
                
            },
            success:function (data){
              $('.loader_thumb').hide();
              if(data.status !== 'success'){

                    if (data.msg == "<p>The filetype you are attempting to upload is not allowed.</p>") {
                        var pop_msg = "<p>"+'Invalid file type upload files in PDF,png, jpeg or jpg format only'+"</p>";
                    }else{
                        var pop_msg = data.msg;
                    }

                    alert(pop_msg);


                } else {
                  $('.cover_upload').hide();
                  $('#image').val(data.file_data.file_name);
                  $('.cover_upload2').show();
                  $('.cover_upload2 img').attr('src', base_url+'uploads/'+data.file_data.file_name);
                 
                }
            },
            resetForm: true
        });
    }

    $('#close_file').click(function(){
      $.ajax(base_url+'cms/remove_cropped_thumbnail', {
            method: "GET",
            data: {'thumb_image':$('#image').val()},
            dataType: "json",
            success: function (result) {
                  $('.cover_upload2').hide();
                  $('.cover_upload2 img').attr('src', '');
              $('.cover_upload').show();
              $('#image').val('');

            }
        });

    });


    $(document).on('change keyup','#video', function(){

          
          var Youtube = (function () {
              'use strict';

              var video, results;

              var getThumb = function (url, size) {
                  if (url === null) {
                      return '';
                  }
                  size    = (size === null) ? 'big' : size;
                  results = url.match('[\\?&]v=([^&#]*)');
                  video   = (results === null) ? url : results[1];

                  if (size === 'small') {
                      return 'http://img.youtube.com/vi/' + video + '/2.jpg';
                  }
                  return 'http://img.youtube.com/vi/' + video + '/0.jpg';
              };

              return {
                  thumb: getThumb
              };
          }());
          if($(this).val().match(/youtube\.com/)) {
              var thumb = Youtube.thumb($(this).val(), 'small');
              $('#videoframe').show();
              $('#videoframe').attr("src",thumb);
              $('#video2').val(thumb);
          } else {
              $('#video2').val('');
              $('#videoframe').hide();
              $('#videoframe').attr("src",'');
          }
          
    });
</script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/typeahead.js/0.11.1/typeahead.bundle.min.js"></script>
<script src="<?=base_url()?>assets/tags/tagsinput.js"></script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();



$(document).on('keyup change','#video', function(event){
    var url = $('#video').val();
        if (url != undefined || url != '') {
            var regExp = /^.*(youtu.be\/|v\/|u\/\w\/|embed\/|watch\?v=|\&v=|\?v=)([^#\&\?]*).*/;
            var match = url.match(regExp);
            if (match && match[2].length == 11) {
                $('#videoframe').attr('src', 'https://www.youtube.com/embed/' + match[2] + '?autoplay=0');
                $('#video2').val(url);
            }
            else {
                alert('not valid link!');
                $('#videoframe').attr('src', '');
                $('#video').val('');
                $('#video2').val('');
            }
        }
});
</script>