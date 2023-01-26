


<?php
if ( s9_textfield('activate_popup', $postid = 'options', $tag = '', $className = '',$emptyText = '') === 'Yes') { 
	$popuptime =  s9_textfield('pop_up_wait_time', $postid = 'options', $tag = '', $className = '',$emptyText = '10000');
?>

<div id="myModal" class="modal-wrapper-newsletter">
	  <div class="modal">
			<div class="head">
			  <a class="btn-close trigger_newsletter" href="javascript:;"></a>
			</div>
			<div class="content">
			<?php echo do_shortcode( '[wpforms id="988"]' );?>
			</div>
	  </div>
	  
</div>

<script>
	
	var is_modal_show = sessionStorage.getItem('alreadyShow');
	if(is_modal_show != 'alredy shown'){
	  setTimeout(showModal, <?php echo $popuptime;?> );
	  sessionStorage.setItem('alreadyShow','alredy shown');
	}
	function showModal(){
	  jQuery(".modal-wrapper-newsletter").toggleClass("open");
	}
	jQuery(".trigger_newsletter").click(function() {
			showModal();
			return false;
	  });
</script>

<?php } ?>