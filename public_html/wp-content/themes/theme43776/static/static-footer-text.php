<?php /* Static Name: Footer text */ ?>

<div id="footer-text" class="footer-text">

	<?php $myfooter_text = of_get_option('footer_text'); ?>

	

	<?php if($myfooter_text){?>

		<?php echo of_get_option('footer_text'); ?>

	<?php } else { ?>


		<p>Athena Law is the trading name of Athena Solicitors LLP, a limited liability partnership registered in England and Wales with number OC 386748.
The members of Athena Solicitors LLP are Paul Willan, Stephen Boyd and Richard Almond, all practising solicitors of England and Wales.
Athena Law is authorised and regulated by the Solicitors Regulation Authority and our professional rules may be accessed at http://www.sra.org.uk/rules/</p>
<p>© 2014 Athena Solicitors LLP. All Rights Reserved</p>



	<?php } ?>

	

</div>