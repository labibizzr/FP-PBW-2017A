<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
function initialize_tinymce() {
$tinymce = '<script type="text/javascript" src="' . base_url() . 'assets/tinymce/tinymce.js"></script>
<script type="text/javascript">
tinyMCE.init({
theme : "advanced",
mode : "textareas",
theme_advanced_toolbar_location : "top",
convert_urls : false,
height: 300,
width:700
});
</script>';
return $tinymce;

}
?>
