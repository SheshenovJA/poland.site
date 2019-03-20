
CKEDITOR.editorConfig = function( config ) {
	// Define changes to default configuration here. For example:
    config.toolbarGroups = [
        { name: 'clipboard',   groups: [ 'clipboard', 'undo' ] },
        { name: 'links' },

        { name: 'insert' },
        { name: 'document',	   groups: [ 'mode', 'document' ] },

        '/',
        { name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ] },
        { name: 'paragraph',   groups: [ 'list', 'indent', 'blocks', 'align' ] },
        { name: 'styles' },
        { name: 'colors' }
    ];
    config.removeButtons = 'Underline,Subscript,Superscript,Iframe,Styles,Font,FontSize,CreateDiv,Blockquote,Smiley,SpecialChar,Newpage,Table';
  //  config.removePlugins = 'flash,iframe,tableselection,smiley,maximize,showblocks,newpage,pagebreak';
    // Set the most common block elemen
    config.format_tags = 'p;h1;h2;h3;pre';
  	config.removePlugins = 'contextmenu,liststyle,tabletools';
    // Simplify the dialog windows.
    config.removeDialogTabs = 'image:advanced;link:advanced';
    config.extraPlugins = 'dragresize,youtube,justify';

    config.height = 400;
	var xbasepath = '/admin/js/kcfinder/';

	config.filebrowserBrowseUrl 		= 	xbasepath + 'browse.php?type=files';
	config.filebrowserImageBrowseUrl 	= 	xbasepath + 'browse.php?type=images';
	config.filebrowserFlashBrowseUrl	= 	xbasepath + 'browse.php?type=flash';
	config.filebrowserUploadUrl 		= 	xbasepath + 'upload.php?type=files';
	config.filebrowserImageUploadUrl 	= 	xbasepath + 'upload.php?type=images';
	config.filebrowserFlashUploadUrl 	= 	xbasepath + 'upload.php?type=flash';
	config.allowedContent = true;
	config.ignoreEmptyParagraph = false;
	config.extraAllowedContent = 'ul ol li';
};
