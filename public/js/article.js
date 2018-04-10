
    tinymce.init({
        selector: "#articleContent",
        theme: "modern",
        plugins: [
            "advlist autolink link image lists charmap print preview hr anchor pagebreak",
            "searchreplace wordcount visualblocks visualchars insertdatetime media nonbreaking",
            "table contextmenu directionality emoticons paste textcolor code"
        ],
        toolbar1: "undo redo | bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent",
        toolbar2: "| link unlink anchor | image media | forecolor backcolor  | print preview code | fontsizeselect",
        image_advtab: true,
        fontsize_formats: '8pt 9pt 10pt 11pt 12pt 13pt 14pt 15pt 16pt 18pt',
        content_style: "div, p { font-size: 14px; }",
        height : "400",
        relative_urls : false,
        remove_script_host : false,
        document_base_url : "<?php echo base_url()?>"
    });

    //default image loader
    fillgrid();

    function fillgrid(){
        $.ajax({
            //url untuk grab gallery
            url:'<?php echo base_url() ?>admin/blog/article/article_gallery',
            type:'GET'
        }).done(function (data){
            //ambil id fillgrid dari blade
            $("#fillgrid").html(data);
            // Js for image click
            $(".add-image-to-text").click(function(){
                var dataLink = $(this).attr('data-value');
                //id button add-image
                tinymce.get('wysiwyg').execCommand('mceInsertContent', false, "<img class='img-responsive' style='max-width: 750px; margin-left: auto; margin-right: auto;' src='"+dataLink+"'/>");
                $('#add-image').modal('hide');
            });

            $(".delete-image-ajax").click(function(){

                var v = confirm("Delete Image ?");
                if(v==true){
                    var data_url = $(this).attr('data-url');
                    var del_url = '<?php echo base_url() ?>member/article/ajax_image_del/'+data_url;
                    // ajax delete
                    $.ajax({
                        url: del_url,
                        type:'GET',
                        beforeSend: function() {
                            $("#loading-icon").show();
                            $("#loading").html('Please wait....');
                        },
                    }).done(function (){

                        fillgrid();
                        $("#loading-icon").fadeOut(1000);
                        $("#loading").html('Done');

                    });
                }else{
                    return false;
                }

            });

        });
    }

    // Function JS for upload image
    function sendData(){

        var fileUpload = document.getElementById("file_upload");
        if (typeof (fileUpload.files) != "undefined") {
            var size = parseFloat(fileUpload.files[0].size / 1024).toFixed(2);
            if(size>4000){
                alert("max size is 4MB")
            }else{
                var data = new FormData($('#uploadimageajax')[0]);

                $.ajax({
                    type:"POST",
                    url:"<?php echo site_url('member/article/fileUpload');?>",
                    data:data,
                    mimeType: "multipart/form-data",
                    contentType: false,
                    cache: false,
                    processData: false,
                    beforeSend: function() {
                        $("#loading-icon").show();
                        $("#loading").html('Please wait....');
                    },
                    success:function(response)
                    {

                        var json = JSON.parse(response)
                        if(json.status==0){
                            // $('#uploadimageajax').trigger("reset");
                            $("#loading-icon").hide();
                            $("#loading").html(json.message);
                        }else{
                            fillgrid();
                            $('#uploadimageajax').trigger("reset");
                            $("#loading-icon").hide();
                            $("#loading").hide();
                        }


                    }
                });
            }

        } else {
            alert("This browser does not support HTML5.");
        }
    };


    function validateForm() {

        var post_title = document.forms["form-add-article"]["post_title"].value;
        if (post_title==null || post_title=="")
        {
            $('#title-alert').show();
            document.forms["form-add-article"]["post_title"].focus();
            return false;
        }else{
            $('#title-alert').hide();
        }

        var post_category = document.forms["form-add-article"]["post_category_id"].value;
        if (post_category==null || post_category=="0") {
            $('#category-alert').show();
            document.forms["form-add-article"]["post_category_id"].focus();
            return false;
        }else{
            $('#category-alert').hide();
        }

        if ( document.getElementById("featured-image").files.length == 0) {
            $('#image-alert').show();
            return false;
        }else{
            $('#image-alert').hide();
        }

        var post_tags = document.forms["form-add-article"]["post_tag_name[]"].value;
        if (post_tags==null || post_tags=="") {
            $('#tags-alert').show();
            return false;
        }else{
            $('#tags-alert').hide();
        }


        var imageData = $('.image-editor-3').cropit(
            'export',{
                type: 'image/jpeg',
                quality: 1,
                originalSize: true
            });
        $('.hidden-image-data-article').val(imageData);

    }