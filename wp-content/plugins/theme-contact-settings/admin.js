jQuery(document).ready(function($){

    function open_media_uploader(target) {

        var frame = wp.media({

            title: 'Select Image',

            button: { text: 'Use this image' },

            multiple: false

        });



        frame.on('select', function() {

            var attachment = frame.state().get('selection').first().toJSON();

            $('#' + target).val(attachment.id);



            $('#' + target).closest('td').find('.tcs-preview').remove();

            $('#' + target).closest('td')

                .append('<div class="tcs-preview" style="margin-top:10px;"><img src="'+attachment.url+'" width="120"></div>');

        });



        frame.open();

    }



    $('.tcs-upload').on('click', function(e){

        e.preventDefault();

        var target = $(this).data('target');

        open_media_uploader(target);

    });



    $('.tcs-remove').on('click', function(e){

        e.preventDefault();

        var target = $(this).data('target');

        $('#' + target).val('');

        $(this).closest('td').find('.tcs-preview').remove();

    });



});