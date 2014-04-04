$(document).ready(function() {
    var modPath = $('body').data('modpath');
    
    // adjust parent height from outside the object tag
    setTimeout(function(){
        parent.set_size($('body').outerHeight());
        $('#loading').hide(0, function(){
            $('#bskGear').css('visibility','visible');
        });
    },1000);
    
    // action buttons
    var btnSave = $('#btnSave');
    var btnReset = $('#btnReset');
    btnSave.tooltip({placement: 'right'});
    btnReset.tooltip({placement: 'left'});
    
    // init color picker
    $('.color_picker').spectrum({
        showInput:              true,
        showAlpha:              true,
        showInitial:            true,
        showPalette:            true,
        showSelectionPalette:   true,
        clickoutFiresChange:    true,
        maxPaletteSize:         10,
        chooseText:             "Ok",
        preferredFormat:        "rgb",
        localStorageKey:        "bsktgear.default"
    });
    $('.color_picker_wrap').tooltip();
    
    // select bkg pattern
    if( $('#bkgImage').val() === 'no_img.png' ){
        var bkgPatternVal = $('#bkgPattern').val();
        if( bkgPatternVal != 0 ){
            $('#bkgPattern').siblings('.pattern').each(function(){
                if( $(this).data('pattern') == bkgPatternVal ) $(this).addClass('selected');
            });
        }
    } else $('#bkgPattern').val(0);
    $('#bkgPattern').siblings('.pattern').click(function(){
        if( $('#bkgImage').val() === 'no_img.png' ){ // works only if there is no bkg image set
            $('#bkgPattern').siblings('.pattern').removeClass('selected');
            $(this).addClass('selected');
            $('#bkgPattern').val( $(this).data('pattern') );
        } else alert('Delete the current image in order to use patterns.');
        
    });
    
    bkgUploadImage(); // init plupload for bkg image
    
    if( $('#bkgImage').val() === 'no_img.png' ){
        $('#bkgImage_wrap > .no_img_set').show();  // show no image is set message
        $('#deleteImage').hide();
    }
    // delete bkg image button action
    $('#deleteImage').click(function(event){
        event.preventDefault();
        
        $('#bkgImage_wrap > .loading').show();
        $.ajax({
            url: modPath + 'bkg_delete.php',
        }).done(function() {
            $('#bkgImage').val('no_img.png');
            $('#bkgImage_wrap > .no_img_set').show();
            $('#bkgImage_wrap > img').attr('src',modPath+'img/no_img.png');
            $('#deleteImage').hide();
            $('#bkgImage_wrap > .loading').hide();
        });
    });
    
    // when tab is changed
    $('#settingsTabs a').on('shown', function (e) {
        parent.set_size($('body').outerHeight()); // resize presta for tab height
        var tabId = $(e.target).attr('href');
        
        if( tabId == '#css' ){ // show custom css tab
            /* EditArea plugin */
            editAreaLoader.init({
                id : "customcss",		// textarea id
                syntax: "css",			// syntax to be uses for highgliting
                start_highlight: true		// to display with highlight mode on start-up
            });
            /* END EditArea plugin */
        }
    })
});

// init background upload image
function bkgUploadImage(){
    var modPath = $('body').data('modpath');
    var bkgPattern = $('#bkgPattern');
    var imgName = $('#imageName');
    var uploadBtn = $('#uploadImage');
    var loading = $('#bkgLoading');
    var checkmark = $('#bkgCheckmark');
    var bkgImageInput = $('#bkgImage');
    var bkgImage = $('#curBkgImg');
    var noImgSet = $('#bkgImage_wrap > .no_img_set');
    var delBtn = $('#deleteImage');
    
    var uploader = new plupload.Uploader({
            runtimes : 'html5',
            browse_button : 'selectImage',
            container: 'bkgImageUpload',
            multi_selection: false,
            max_file_size : '10mb',
            url : modPath + 'bkg_upload.php',
            filters : [
                    {title : "Image files", extensions : "jpg,gif,png"},
            ]
    });

    uploader.bind('Init', function(up, params) {
        
    });

    uploader.init();

    uploader.bind('FilesAdded', function(up, files) {
        imgName.text(files[0].name);
        uploadBtn.prop('disabled', false);
    });

    uploader.bind("UploadFile", function(up, file) {
        loading.show();
    });
    
    uploader.bind('UploadComplete', function(up, file) {
        loading.fadeOut('slow',function(){
            uploadBtn.prop('disabled', true);
            imgName.text('');
            checkmark.fadeIn('slow',function(){
                var me = $(this);
                setTimeout(function(){me.fadeOut('slow');}, 2000);
            });
            bkgImage.attr('src',modPath+'img/theme/bkg/'+file[0].name); // show uploaded image
            if( noImgSet.is(':visible') ) {
                noImgSet.hide(); // hide no image set message
                delBtn.show();
            } 
            bkgImageInput.val(file[0].name);
            //deselect pattern
            bkgPattern.val(0);
            bkgPattern.siblings('.pattern').removeClass('selected');
            
            // ensure corect height of presta admin after the uploaded image is displayed
            setTimeout(function(){parent.set_size($('body').outerHeight());}, 10); 
        });
    });

    $('#uploadImage').click(function(event) {
            uploader.start();
            event.preventDefault();
    });
}