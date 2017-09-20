<script>
	$(function() {
	$('[data-fancybox]').fancybox({
		iframe : {
		preload : false,
		css : {
		width : '900px',
		height: '600px',
		}
		}

		tinymce.init({
	selector:'#content',
	theme:'modern',
	branding: false,
	menubar: false,
	language: "id",
	skin: "lightgray",
	plugins: [
	"advlist autolink link image lists charmap print preview hranchor pagebreak",
	"searchreplace wordcount visualblocks visualchars insertdatetime media nonbreaking",
	"table contextmenu directionality emoticons paste textcolor responsivefilemanager code"
	],
	toolbar1: "undo redo | bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | styleselect",
	toolbar2: "| responsivefilemanager | link unlink anchor | image media | forecolor backcolor | print preview code ",
	image_advtab: true,
	relative_urls:true,
	external_filemanager_path: "{!! str_finish(asset('js/tinymce/filemanager'),'/') !!}",
	external_filemanager_path: "/js/tinymce/filemanager/",
	filemanager_title:"Responsive Filemanager" ,
	external_plugins: { "filemanager" : "/js/tinymce/filemanager/plugin.min.js"}
	});
	});
</script>