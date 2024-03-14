<!-- BEGIN: Login Form -->
<div class="h-screen xl:h-auto flex py-5 xl:py-0 my-10 xl:my-0">
	<div
		class="my-auto mx-auto xl:ml-20 bg-white dark:bg-darkmode-600 xl:bg-transparent px-5 sm:px-8 py-8 xl:p-0 rounded-md shadow-md xl:shadow-none w-full sm:w-3/4 lg:w-2/4 xl:w-auto">
		<form class="user" role="form" method="post" action="<?php echo site_url('auth/login') ?>">
			<h2 class="intro-x font-bold text-2xl xl:text-3xl text-center xl:text-left">
				Sign In
			</h2>

			<div class="intro-x mt-8">

				<input type="text" class="intro-x login__input form-control py-3 px-4 block" name="username"
					placeholder="Username" autocomplete="off" autofocus>
				<input type="password" class="intro-x login__input form-control py-3 px-4 block mt-4" name="password"
					placeholder="Password" autocomplete="off">
				<?php if ($this->session->flashdata('login_error')): ?>
					<div class="text-danger mt-2">
						<?php echo $this->session->flashdata('login_error'); ?>
					</div>
				<?php endif; ?>
			</div>

			<div class="intro-x mt-5 xl:mt-6 text-center xl:text-left">
				<button type="submit" class="btn btn-primary py-3 px-4 w-full align-top">Login</button>
			</div>
			<div class="intro-x mt-5 text-slate-600 dark:text-slate-500 text-center xl:text-left">
				<p>
					Don't have an Account?
					<a href="<?php echo site_url('auth/register') ?>"
						class="text-primary px-2 w-full xl:w-32 mt-3 xl:mt-0 align-top">Register</a>
				</p>
			</div>
		</form>
	</div>
</div>
<!-- END: Login Form -->