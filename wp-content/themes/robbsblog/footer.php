		<?php $current_user = wp_get_current_user(); 
			$get_date = current_time('mysql');
			$date = explode("-", $get_date);
		?>
			</div>
			<div class="footer">
				<p>&#169 <?php  echo $date[0]."&nbsp".$current_user->display_name; ?>, All Rights Reserved</p>
				<div>
					<a href="https://facebook.com"><i class="fa fa-facebook"></i></a>
					<a href="https://twitter.com"><i class="fa fa-twitter"></i></a>
					<a href="https://dribbble.com"><i class="fa fa-dribbble"></i></a>
					<a href="https://www.pinterest.com"><i class="fa fa-pinterest"></i></a>
				</div>
			</div> <!-- end footer -->
		</div>  <!-- end right-sidebar -->
	</div>  <!-- end wrapper -->
	<?php wp_footer(); ?>
</body>
</html>