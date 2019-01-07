<?php 
get_header(); 
global $wpdb;
?>
<div class="cp-cgu row">
	<div class="col-md-12 col-lg-9 col-xl-5 cp-carre2 cp-inscription">
		<form method="POST" action="">
			<div class="row">
				<div class="col-6">
					E-mail<br>
					<input name="mail" type="text" required><br>
					Pseudo<br>
					<input name="pseudo" type="text" required><br>
				</div>
				<div class="col-6">
					Password<br>
					<input name="password" type="password" required><br>
					Code postal<br>
					<input name="cp" type="number" required><br>
				</div>
			</div>
			<input type="checkbox" required><span class="cgu"><a href="<?php bloginfo('url')?>/cgu" target=_blank>Accepter les CGU</a></span> 
			<button type="submit" name="inscription" value="inscrire" class="bouton-connexion float">S'inscrire</button>
		</form>
	</div>
</div>
<?php
$ins=$_POST;
$wpdb->insert('wp_users', array(
	'ID'=>'',
    'user_login' => $_POST['pseudo'],
    'user_pass' => $_POST['password'],
    'user_nicename' => $_POST['pseudo'],
    'user_email' => $_POST['mail'],
	'display_name' => $_POST['pseudo'],
	'user_cp'=>$_POST['cp'],
));
?>
<?php 
get_footer(); 
?>