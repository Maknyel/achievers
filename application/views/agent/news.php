<link href="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/3.1.0/css/froala_style.min.css" rel="stylesheet" type="text/css" />
<link href="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/3.1.0/css/froala_editor.pkgd.min.css" rel="stylesheet" type="text/css" />

<!-- Include TUI CSS. -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tui-image-editor@3.2.2/dist/tui-image-editor.css">
<link rel="stylesheet" href="https://uicdn.toast.com/tui-color-picker/latest/tui-color-picker.css">

<!-- Include TUI Froala Editor CSS. -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/froala-editor@3.1.0/css/third_party/image_tui.min.css">

<!-- Include Froala Editor JS. -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/3.1.0/js/froala_editor.pkgd.min.js"></script>

<!-- Include TUI and Fabric JS. -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fabric.js/1.6.7/fabric.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/tui-code-snippet@1.4.0/dist/tui-code-snippet.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/tui-image-editor@3.2.2/dist/tui-image-editor.min.js"></script>

<!-- Include Froala TUI plugin JS -->
<script src="https://cdn.jsdelivr.net/npm/froala-editor@3.1.0/js/third_party/image_tui.min.js"></script>


<div class="container-fluid">

          <h1 class="h3 mb-2 text-gray-800">News</h1>
          <p class="mb-4">List of news</p>
          <div style="width: 100%;text-align: right;">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addnews">Add News</button>
          </div>
          <!-- Content Row -->
          <!-- <div class="row"> -->

          	<div class="card-body">
          		<div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Option</th>
                      <th>Image</th>
                      <th>Title</th>
                      <th>Sub Title</th>
                      <th>Author</th>
                      <th>Date</th>
                      <th>Category</th>
                      <th>Description</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Option</th>
                      <th>Image</th>
                      <th>Title</th>
                      <th>Sub Title</th>
                      <th>Author</th>
                      <th>Date</th>
                      <th>Category</th>
                      <th>Description</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <?php
                    foreach($subd as $key => $value){
                    ?>
                    <tr>
                      <td><button type="button" onclick="delete_image(`<?php echo $value['news_id'] ?>`,`<?=$value['news_image'] ?>`)" class="btn btn-danger btn-sm">Delete</button></td>
                      <td> 
                        <?php if($value != ''){ ?>
                          <img src="<?=base_url().'uploads_news/'.$value['news_image']?>" height="70px" width="auto">
                        <?php } ?>
                          
                      </td>
                      <td><?php echo $value['news_title'] ?></td>
                      <td><?php echo $value['news_subtitle'] ?></td>
                      <td><?php echo $value['news_author'] ?></td>
                      <td><?php echo $value['news_date'] ?></td>
                      <td><?php echo $value['news_category'] ?></td>
                      <td><?php echo $value['news_description'] ?></td>
                      <!-- <td><img src="<?php echo base_url().'uploads/'.$value['news_image'] ?>" width="100px"></td> -->
                      
                    </tr>
                    <?php

                	}
                    ?>
                </tbody>
            </table>
          </div>
    <!-- </div> -->
        </div>
</div>

<style type="text/css">
  .second-toolbar #logo{
    display: none;
  }
</style>
<script>
  var base_url = `<?php echo base_url(); ?>`;
	

  function delete_image(id,name){
      if(confirm("Do you want to delete?")){
        window.location = base_url+'Agent/delete_news?id='+id+'&name='+name;
      }else{
      }
  }
</script>


<!-- Modal -->
  <div class="modal fade" id="addnews" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <form  method="post" id="add_news">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Add News</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">

          <div style="text-align: center;" class="cover_upload" id="upload_file"><i class="fa fa-upload upload_fa" aria-hidden="true"></i></div>
          <div class="cover_upload2 display-flex" id="" style="display: none;">
            <div style="display: flex;align-items: center;">
              <img style="width:90%;height:auto;" src=""><div id="close_file"><i class="fa fa-close " ></i></div>
            </div>
          </div>
          <div class="form-group">
              <label for="news_title">Title:</label>
              <input type="text" class="form-control" id="news_title" name="news_title" autocomplete="off" required="">
          </div>
          <div class="form-group">
              <label for="news_subtitle">Sub Title:</label>
              <input type="text" class="form-control" id="news_subtitle" name="news_subtitle" autocomplete="off" required="">
          </div>
          <div class="form-group">
              <label for="news_author">Author:</label>
              <input type="text" class="form-control" id="news_author" name="news_author" autocomplete="off" required="">
          </div>
          <div class="form-group">
              <label for="news_date">Date:</label>
              <input type="date" class="form-control" id="news_date" name="news_date" autocomplete="off" required="">
          </div>

          <div class="form-group">
              <label for="news_category">Category:</label>
              <input type="text" class="form-control" id="news_category" name="news_category" autocomplete="off" required="">
              <input type="hidden" class="form-control" id="news_image" name="news_image" autocomplete="off">
          </div>

          <div class="form-group">
              <label for="news_description">Description:</label>
              <textarea class="form-control" id="news_description" name="news_description" autocomplete="off" required=""></textarea>
                <script type="text/javascript">
                   new FroalaEditor('textarea#news_description', {
                    imageUploadURL: base_url+'Agent/upload_image',
                  })
                </script>
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Save</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      </form>
      <form class="nodisplay" id="uploadForm" action="<?php echo base_url();?>Agent/upload_resume2" method="POST" enctype="multipart/form-data">
              <input type="file" name ="file" id="file" accept="image/*">
            </form>
    </div>
  </div>


  <script type="text/javascript">
    $(document).on('submit','#add_news',function(e){
      e.preventDefault();
      var news_title = $('#add_news #news_title').val();
      var news_subtitle = $('#add_news #news_subtitle').val();
      var news_author = $('#add_news #news_author').val();
      var news_date = $('#add_news #news_date').val();
      var news_category = $('#add_news #news_category').val();
      var news_description = $('#add_news #news_description').val();
      var news_image = $('#add_news #news_image').val();
     

      var data = {
        'news_title':news_title,
        'news_subtitle':news_subtitle,
        'news_author':news_author,
        'news_date':news_date,
        'news_category':news_category,
        'news_description':news_description,
        'news_image':news_image,
   

      };
      // alert(JSON.stringify(data));
      if(news_image == ''){
        alert('Please Upload Image');
      }else{
            $.ajax({
                type:'POST',
                dataType:'JSON',
                url:base_url+"Agent/addnews",
                data:data,
                success:function(data)
                {
                  if(data == 1){
                      window.location = base_url+'Agent/news';
                      alert('Successfully Added');
                  }else{
                    alert('There`s something wrong please reload the page');
                  }
                },
                error: function(XMLHttpRequest, textStatus, errorThrown) {

                    if (textStatus == 'timeout') {

                      alert('Timeout Error');

                    } else {

                      alert('Network problem. Please try again');

                    }
                  }
            });
          }
      });


    $('#upload_file').click(function(){
      $('#file').click();
    });

    $(document).on('change','#file', function(){
      upload();
    });


    function upload(){
      var uploadForm    = $('#uploadForm'),
          file          = $('input#file'),
          preview       = $('#preview');

        uploadForm.ajaxSubmit({
          dataType: "json",
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
                  $('#news_image').val(data.file_data.file_name);
                  $('.cover_upload2').show();
                  $('.cover_upload2 img').attr('src', base_url+'uploads_news/'+data.file_data.file_name);
                 
                }
            },
            resetForm: true
        });
    }

    $('#close_file').click(function(){
      $.ajax(base_url+'Agent/remove_cropped_thumbnail2', {
            method: "GET",
            data: {'thumb_image':$('#news_image').val()},
            dataType: "json",
            success: function (result) {
                  $('.cover_upload2').hide();
                  $('.cover_upload2 img').attr('src', '');
              $('.cover_upload').show();
              $('#news_image').val('');

            }
        });

    });
  </script>