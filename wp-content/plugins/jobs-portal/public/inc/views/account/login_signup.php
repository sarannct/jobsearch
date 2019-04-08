<?php
defined( 'ABSPATH' ) || die(); ?>

<div class="wljp-login-signup row justify-content-md-between">
	<div class="col-sm-12 col-md-6 card p-3 mt-3">
		<header>
			<div class="wljp-signup-heading">
				<span><?php _e( 'Register and find your dream job', WL_JP_DOMAIN ); ?></span>
			</div>
		</header>
		<form method="post" action="<?php echo esc_url( admin_url( 'admin-post.php' ) ); ?>" id="wljp-signup-form" class="wljp-signup-form">
			<?php $nonce = wp_create_nonce( 'signup' ); ?>
            <input type="hidden" name="signup" value="<?php echo $nonce; ?>">
            <input type="hidden" name="action" value="wljp-signup">

			<div class="form-group">
				<label for="wljp-signup-email"><?php _e( 'Email Address', WL_JP_DOMAIN ); ?></label><br>
				<input type="email" name="email" id="wljp-signup-email" class="w-100 d-block col">
			</div>

			<div class="form-group">
				<label for="wljp-signup-username"><?php _e( 'Username', WL_JP_DOMAIN ); ?></label>
				<input type="text" name="username" id="wljp-signup-username" class="w-100 d-block col">
			</div>

			<div class="form-group">
				<label for="wljp-signup-password"><?php _e( 'Password', WL_JP_DOMAIN ); ?></label>
				<input type="password" name="password" id="wljp-signup-password" class="w-100 d-block col">
			</div>

			<div class="form-group">
				<label for="wljp-signup-confirm-password"><?php _e( 'Confirm Password', WL_JP_DOMAIN ); ?></label>
				<input type="password" name="confirm_password" id="wljp-signup-confirm-password" class="w-100 d-block col">
			</div>

			<div class="float-right wljp-signup-submit-block">
				<button type="submit" class="wljp-signup-submit"><?php _e( 'Register', WL_JP_DOMAIN ); ?></button>
			</div>
		</form>
	</div>
	<div class="col-sm-12 col-md-5 card p-3 mt-3">
		<header>
			<div class="wljp-login-heading">
				<span><?php _e( 'Login if you already have an account', WL_JP_DOMAIN ); ?></span>
			</div>
		</header>
		<form method="post" action="<?php echo esc_url( admin_url( 'admin-post.php' ) ); ?>" id="wljp-login-form" class="wljp-login-form">
			<?php $nonce = wp_create_nonce( 'login' ); ?>
            <input type="hidden" name="login" value="<?php echo $nonce; ?>">
            <input type="hidden" name="action" value="wljp-login">

			<div class="form-group">
				<label for="wljp-login-username"><?php _e( 'Email Address or Username', WL_JP_DOMAIN ); ?></label>
				<input type="text" name="username" id="wljp-login-username" class="w-100 d-block col">
			</div>

			<div class="form-group">
				<label for="wljp-login-password"><?php _e( 'Password', WL_JP_DOMAIN ); ?></label>
				<input type="password" name="password" id="wljp-login-password" class="w-100 d-block col">
			</div>

			<div class="float-right wljp-login-submit-block">
				<button type="submit" class="wljp-login-submit"><?php _e( 'Login', WL_JP_DOMAIN ); ?></button>
			</div>
		</form>
	</div>
</div>