<?php
require 'template/doc_header.php';
require 'template/header.php';
//require 'template/navigation.php';
?>


<!-- Main Content -->
<div class="container" style="height: 100%;text-align: center;padding-bottom: 45px">
    <h1 class="page-header">Upload File</h1>

    <p>Click on <b style="color: darkblue">Select File(s)</b> to select a Photo and then click on <b style="color: darkblue">Upload</b> Button to upload the selected file.</p>
    <?php echo form_open_multipart();
		  //echo '<label for="title">Title: &nbsp; </label>';
		  echo "<input type='text' id='title' name='title' class='form-control' style='width=50%' required>";
		  //echo form_input('id="title"','default');
		  //echo form_input();
		  echo "<br />";
		  echo form_upload('userfile','','id="userfile"');
		  echo (isset($error)) ? $error : '';
		  echo form_button(array('content'=> 'Upload', 'id'=>'upload-file', 'class'=>'btn btn-large btn-primary', 'formaction'=>'uploadify/do_upload'));
		  echo form_close(); ?>
</div>
<!-- End Of Main Content -->


<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="<?php echo base_url();?>assets/js/jquery/jquery-1.8.0.min.js"><\/script>')</script>
<script src="<?php echo base_url();?>assets/js/jquery/uploadify_31/jquery.uploadify-3.1.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script type="text/javascript">








    $(document).ready(function () {

        var base_url = '<?php echo base_url(); ?>';

        $('#upload-file').click(function (e) {
            e.preventDefault();
            $('#userfile').uploadify('upload', '*');
        });

        $('#userfile').uploadify({

            'debug':true,
            'auto':false,
            'queueSizeLimit' : 1,
            'formData'      : {'file_title' : $('#title').val()},
            'swf': base_url + 'assets/js/jquery/uploadify_31/uploadify.swf',
            'uploader': base_url + 'uploadify/do_upload',
            'cancelImg': base_url + 'assets/javascript/jquery/uploadify_31/uploadify-cancel.png',
            'fileTypeExts':'*.mp3;*.wav;*.aiff;*.zip;*.wma',
            'fileTypeDesc':'Audio Files (.mp3)',
            'fileSizeLimit':'20MB',
            'fileObjName':'userfile',
            'buttonText':'Select Audio File(s)',
            'multi':false,
            'removeCompleted':true,
            'onUploadStart' : function(file) {
            $("#userfile").uploadify("settings", "formData", {"file_title": $("#title").val()});
        	}
        });
    });
</script>

<?php
require 'template/footer.php';
require 'template/doc_footer.php';
?>