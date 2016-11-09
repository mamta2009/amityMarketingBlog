<?php
/**
 * The main template file
 */
get_header();
?>
<div class="container-fluid">
	<div class="row">
		<div class="col-sm-12 index-signup">
			<div class="col-sm-8">
				<div class="index-message">
					Communication <br />
					Made Easy Everywhere.
				</div>
				<div>
					<div class="col-sm-6 sign-in-form">
						<p>Start for Free</p>
						<input type="text" placeholder="example@email.com" /><br />
						<button class="btn btn-success col-xs-6">Get Started</button>
		                 <button class="btn btn-primary btn-cancel col-xs-6"> Sign In </button>
					</div>
				</div>
			</div>
		</div>
		<div class="col-sm-12 index-feature">
			<h2>All in one and easy to use</h2>
			<div class="col-sm-4">
				<img class="img-responsive" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/phone.png" />
			</div>
			<div class="col-sm-8 feature-list">				
				<div class="col-sm-6">
					<ul>
						<li>GPS and microlocation access with beacons</li>
						<li>Choose your security,HIPAA compliant or public</li>
						<li>Multimedia sharing with friends and family. Tag and track anything!</li>
						<li>Customized forms for health professionals to document</li>
						<li>Customized forms for health professionals to document.</li>
					</ul>
				</div>
				<div class="col-sm-6">
					<ul>					
						<li>Live dashboard log of your team channels that is easily searchable.</li>
						<li>Learn how to do tasks in real time using our adaptive learing engine.</li>
						<li>Create planned activities based on individual support plan or nurse assessment</li>				
						<li>Calendar and task management for others to easily assist or support</li>
						<li>Able to share information with specific people,groups or locations.</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="index-example">
			<img class="img-responsive" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/example.png" />
		</div>
		<div class="col-sm-12 index-beacon">
			<h2 class="center">How Does Beacons Work?</h2>
			<div class="col-sm-3">
				<div class="image-thumbnail">
					<img class="img-responsive" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/beacon.png">
				</div>
				<div class="img-desc">
					Each beacon has a Blutooth&reg; Low Enegery transmitter. It allows Bluetooth devices to broadcast or receive tiny and static pieces of data within short distances inches up to 100 feet.
				</div>
			</div>
			<div class="col-sm-3">
				<div class="image-thumbnail">
					<img class="img-responsive" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/beacon_mobile.png">
				</div>
				<div class="img-desc">
					When on Amity Cloud your smart device will interact with these beacons
				</div>
			</div>
			<div class="col-sm-3">
				<div class="image-thumbnail">
					<img class="img-responsive" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/love.png">
				</div>
				<div class="img-desc">
					For example, it can fetch content that is tied to a individual's care plan or microlocation schedule. It can also push to Amity Cloud user data or statistics.
				</div>
			</div>
			<div class="col-sm-3">
				<div class="image-thumbnail">
					<img class="img-responsive" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/chat.png">
				</div>
				<div class="img-desc">
					Care plan information can be displayed or prompted to the user through Amity Cloud as a notification, training, form or trained caregiver.
				</div>
			</div>	
			<div class="clearfix"></div>	
			<h2 class="center">Beacons in Your Home</h2>
			<img class="img-responsive" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/beacons_in_home.png"/>
		</div>
		<div class="col-sm-12 index-connected">
			<h2 class="center">Stay Connected</h2>
			<img class="img-responsive" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/connected.png"/>
			<p>Amity Cloud gives you the ability to stay connected to your home and community.</p>
			<button class="btn btn-success col-xs-12 center">Get Started</button>
		</div>
	</div>
</div>