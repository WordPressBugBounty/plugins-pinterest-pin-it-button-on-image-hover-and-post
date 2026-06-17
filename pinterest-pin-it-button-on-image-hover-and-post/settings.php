<?php
if (! defined('ABSPATH')) {
	exit;
}
?>
<div class="panel panel-default ml-4">
	<div class="panel-heading">
		<h4 class="margin-none" style="font-size: 28px;">
			<?php esc_html_e('Pin It Button Settings', 'pinterest-pin-it-button-on-image-hover-and-post'); ?>
		</h4>
		<p class="margin-none text-s text-muted"><?php esc_html_e('Configure Plugin Settings Here', 'pinterest-pin-it-button-on-image-hover-and-post'); ?>
		</p>
	</div>
	<div class="panel-body">
		<!-- settings tab -->
		<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
			<li class="nav-item">
				<button class="nav-link active" id="#pinit-settings-tab" data-bs-toggle="pill" data-bs-target="#pinit-settings-tab" type="button" role="tab" aria-controls="pills-home" aria-selected="true"><?php esc_html_e('Settings', 'pinterest-pin-it-button-on-image-hover-and-post'); ?></button>
			</li>
			<li class="nav-item">
				<button class="nav-link" id="exclude-images-tab" data-bs-toggle="pill" data-bs-target="#exclude-images" type="button" role="tab" aria-controls="exclude-images" aria-selected="false"><?php esc_html_e('Exclude Images', 'pinterest-pin-it-button-on-image-hover-and-post'); ?></button>
			</li>
			<li class="nav-item">
				<button class="nav-link" id="exclude-pages-tab" data-bs-toggle="pill" data-bs-target="#exclude-pages" type="button" role="tab" aria-controls="exclude-pages" aria-selected="false"><?php esc_html_e('Exclude Pages', 'pinterest-pin-it-button-on-image-hover-and-post'); ?></button>
			</li>

			<li class="nav-item">
				<button class="nav-link" id="need-help-tab" data-bs-toggle="pill" data-bs-target="#need-help" type="button" role="tab" aria-controls="need-help-tab" aria-selected="false"><?php esc_html_e('Need Help', 'pinterest-pin-it-button-on-image-hover-and-post'); ?></button>
			</li>
			<li class="nav-item">
				<button class="nav-link" data-bs-toggle="pill" type="button" role="tab" aria-controls="need-help-tab" aria-selected="false">
					<a href="<?php echo esc_url('https://weblizar.com/plugins/pinterest-feed-pro/'); ?>" target="_blank"><?php esc_html_e('Go Pro $18', 'pinterest-pin-it-button-on-image-hover-and-post'); ?></a>
				</button>

			</li>
		</ul>
		<!-- settings tab -->

		<!-- Tab panes -->
		<div class="tab-content" id="pills-tabContent">
			<!-- Plugin Settings Tab -->
			<div class="tab-pane fade show active" id="pinit-settings-tab" role="tabpanel" aria-labelledby="pinit-settings-tab-tab">
				<hr>
				<div>
					<p><?php esc_html_e('Show Pin It Button', 'pinterest-pin-it-button-on-image-hover-and-post'); ?>
						<strong><?php esc_html_e('In Post', 'pinterest-pin-it-button-on-image-hover-and-post'); ?></strong>
					</p>
					<?php
					$PinItPost = get_option('WL_Enable_Pinit_Post');
					if (! isset($PinItPost)) {
						$PinItPost = 1;
					}
					?>
					<input id="pinitpost" name="pinitpost" type="radio" value="<?php echo esc_attr('1'); ?>"
						<?php
						if ($PinItPost == 1) {
							echo esc_attr('checked=checked');
						}
						?>> <?php esc_html_e('Yes', 'pinterest-pin-it-button-on-image-hover-and-post'); ?>
					<input id="pinitpost" name="pinitpost" type="radio" value="<?php echo esc_attr('0'); ?>"
						<?php
						if ($PinItPost == 0) {
							echo esc_attr('checked=checked');
						}
						?>> <?php esc_html_e('No', 'pinterest-pin-it-button-on-image-hover-and-post'); ?>
				</div>
				<hr>

				<div>
					<p><?php esc_html_e('Show Pin It Button', 'pinterest-pin-it-button-on-image-hover-and-post'); ?>
						<strong><?php esc_html_e('In Page', 'pinterest-pin-it-button-on-image-hover-and-post'); ?></strong>
					</p>
					<?php
					$PinItPage = get_option('WL_Enable_Pinit_Page');
					if (! isset($PinItPage)) {
						$PinItPage = 1;
					}
					?>
					<input id="pinitpage" name="pinitpage" type="radio" value="<?php echo esc_attr('1'); ?>"
						<?php
						if ($PinItPage == 1) {
							echo esc_attr('checked=checked');
						}
						?>> <?php esc_html_e('Yes', 'pinterest-pin-it-button-on-image-hover-and-post'); ?>
					<input id="pinitpage" name="pinitpage" type="radio" value="<?php echo esc_attr('0'); ?>"
						<?php
						if ($PinItPage == 0) {
							echo esc_attr('checked=checked');
						}
						?>> <?php esc_html_e('No', 'pinterest-pin-it-button-on-image-hover-and-post'); ?>
				</div>
				<hr>

				<div>
					<p><?php esc_html_e('Show Pin It Button', 'pinterest-pin-it-button-on-image-hover-and-post'); ?>
						<strong><?php esc_html_e('On Image Hover', 'pinterest-pin-it-button-on-image-hover-and-post'); ?></strong>
					</p>
					<?php
					$PinItOnHover = get_option('WL_Pinit_Btn_On_Hover');
					if (! isset($PinItOnHover)) {
						$PinItOnHover = 'true';
					}
					?>
					<input id="pinitonhover" name="pinitonhover" type="radio" value="<?php echo esc_attr('true'); ?>"
						<?php
						if ($PinItOnHover == 'true') {
							echo esc_attr('checked=checked');
						}
						?>> <?php esc_html_e('Yes', 'pinterest-pin-it-button-on-image-hover-and-post'); ?>
					<input id="pinitonhover" name="pinitonhover" type="radio" value="<?php echo esc_attr('false'); ?>"
						<?php
						if ($PinItOnHover == 'false') {
							echo esc_attr('checked=checked');
						}
						?>> <?php esc_html_e('No', 'pinterest-pin-it-button-on-image-hover-and-post'); ?>
				</div>
				<hr>

				<div>
					<p><?php esc_html_e('Show Pin It Button', 'pinterest-pin-it-button-on-image-hover-and-post'); ?>
						<strong><?php esc_html_e('On Mobile / Portable Devices', 'pinterest-pin-it-button-on-image-hover-and-post'); ?></strong>
					</p>
					<?php
					$PinItStatus = get_option('WL_Mobile_Status');
					if (! isset($PinItStatus)) {
						$PinItStatus = 1;
					}
					?>
					<input id="pinitstatus" name="pinitstatus" type="radio" value="<?php echo esc_attr('1'); ?>"
						<?php
						if ($PinItStatus == 1) {
							echo esc_attr('checked=checked');
						}
						?>> <?php esc_html_e('Yes', 'pinterest-pin-it-button-on-image-hover-and-post'); ?>
					<input id="pinitstatus" name="pinitstatus" type="radio" value="<?php echo esc_attr('0'); ?>"
						<?php
						if ($PinItStatus == 0) {
							echo esc_attr('checked=checked');
						}
						?>> <?php esc_html_e('No', 'pinterest-pin-it-button-on-image-hover-and-post'); ?>
				</div>
				<hr>

				<div>
					<p><?php esc_html_e('Pin It Button Size (On Image Hover)', 'pinterest-pin-it-button-on-image-hover-and-post'); ?>
					</p>
					<?php
					$PinItSize = get_option('WL_Pinit_Btn_Size');
					if (! isset($PinItSize)) {
						$PinItSize = 'small';
					}
					?>
					<select id="pinitsize" name="pinitsize" class="form-control">
						<option value="<?php echo esc_attr('small'); ?>"
							<?php
							if ($PinItSize == 'small') {
								echo esc_attr('selected=selected');
							}
							?>><?php esc_html_e('Small', 'pinterest-pin-it-button-on-image-hover-and-post'); ?> ( For small Pinit button )
						</option>
						<option value="<?php echo esc_attr('large'); ?>"
							<?php
							if ($PinItSize == 'large') {
								echo esc_attr('selected=selected');
							}
							?>><?php esc_html_e('Large', 'pinterest-pin-it-button-on-image-hover-and-post'); ?> ( For large Pinit button )
						</option>
					</select>
				</div>
				<hr>
				<?php wp_nonce_field('pinitsetting_nonce_action', 'pinitsetting_nonce_field'); ?>
				<button id="pinitsave" name="pinitsave" class="btn btn-danger" type="button" onclick="return SaveSettings();"><strong><?php esc_html_e('Save', 'pinterest-pin-it-button-on-image-hover-and-post'); ?></strong></button>
				<p id="loading" name="loading" style="display: none;"> <?php esc_html_e('Saving', 'pinterest-pin-it-button-on-image-hover-and-post'); ?></p>
			</div>

			<!-- Exclude Images Tab -->
			<div class="tab-pane fade" id="exclude-images" role="tabpanel" aria-labelledby="exclude-images-tab">
				<?php require_once 'exclude-images.php'; ?>
			</div>

			<!-- Exclude Pages Tab -->
			<div class="tab-pane fade" id="exclude-pages" role="tabpanel" aria-labelledby="exclude-pages-tab">
				<?php require_once 'exclude-pages.php'; ?>
			</div>

			<!-- Need Help Tab -->
			<div class="tab-pane fade" id="need-help" role="tabpanel" aria-labelledby="need-help-tab">
				<h2><?php esc_html_e('Need Help Tab', 'pinterest-pin-it-button-on-image-hover-and-post'); ?>
				</h2>
				<hr>
				<p><?php esc_html_e('Simply after install and activate plugin go on plugins Pinterest PinIt Button" admin menu page.', 'pinterest-pin-it-button-on-image-hover-and-post'); ?>
				</p>
				<p><?php esc_html_e('Select the Settings tab and configure Pin It Button settings according to you.', 'pinterest-pin-it-button-on-image-hover-and-post'); ?>
				</p>
				<p>&nbsp;</p>
				<h4><?php esc_html_e('Plugin allows to configure following settings', 'pinterest-pin-it-button-on-image-hover-and-post'); ?>
				</h4>
				<p>&nbsp;</p>
				<p><strong><?php esc_html_e('1. Enable Pin It Button In Post -', 'pinterest-pin-it-button-on-image-hover-and-post'); ?></strong><?php esc_html_e(' This settings show Pinterest Pin It button after the post content. So, you can easily pined all your post content to your Pinterest Bord.', 'pinterest-pin-it-button-on-image-hover-and-post'); ?>
				</p>
				<p><strong><?php esc_html_e('2. Enable Pin It Button in Page -', 'pinterest-pin-it-button-on-image-hover-and-post'); ?></strong><?php esc_html_e(' This settings show Pinterest Pin It button after the Page content. So, you can easily pined all your Page content to your Pinterest Bord.', 'pinterest-pin-it-button-on-image-hover-and-post'); ?>
				</p>
				<p><strong><?php esc_html_e('3. Show Pin It Button On Image Hover -', 'pinterest-pin-it-button-on-image-hover-and-post'); ?></strong><?php esc_html_e(' Setting shows Pin It Button on each your blog Post/Page image when your hover mouse on any image.', 'pinterest-pin-it-button-on-image-hover-and-post'); ?>
				</p>
				<p><strong><?php esc_html_e('4. Show Pin It Button On Mobile -', 'pinterest-pin-it-button-on-image-hover-and-post'); ?></strong>
					<?php esc_html_e('Settings allows to enable/disable pin button appearing on site if uer visit site using mobile devices.', 'pinterest-pin-it-button-on-image-hover-and-post'); ?>
				</p>
				<p><strong><?php esc_html_e('5. Pin It Button Size (On Image Hover) -', 'pinterest-pin-it-button-on-image-hover-and-post'); ?></strong>
					<?php esc_html_e('This settings work if Image hover setting is enable. Through that setting you can show small or large pin it button on image.', 'pinterest-pin-it-button-on-image-hover-and-post'); ?>
				</p>
				<hr>
			</div>
			<div id="weblizar-tab" class="tab-pane fade">
				<h4> <?php echo esc_html('Weblizar'); ?> </h4>
				<p></p>
			</div>
		</div>
	</div>
</div>

<?php
wp_register_script('weblizar-for-save-settings', '', array(), '4.9', true);
wp_enqueue_script('weblizar-for-save-settings');
$js = '';

$js .= 'function SaveSettings() {';
$js .= '	jQuery("#pinitsave").hide();';
$js .= '	jQuery("#loading").show();';
$js .= '	jQuery.ajax({';
$js .= '		type: "POST",';
$js .= '		url: ajaxurl,';
$js .= '		data: {';
$js .= '			action: "save_pinit",';
$js .= '			PinItPost: jQuery("input[name=pinitpost]:radio:checked").val(),';
$js .= '			PinItPage: jQuery("input[name=pinitpage]:radio:checked").val(),';
$js .= '			PinItOnHover: jQuery("input[name=pinitonhover]:radio:checked").val(),';
$js .= '			PinItStatus: jQuery("input[name=pinitstatus]:radio:checked").val(),';
$js .= '			PinItSize: jQuery("select#pinitsize").val(),';
$js .= '			PinItSettingNonce: jQuery("input#pinitsetting_nonce_field").val(),';
$js .= '		},';
$js .= '		dataType: "html",';
$js .= '		complete: function() {},';
$js .= '		success: function(data) {';
$js .= '			jQuery("#loading").hide();';
$js .= '			jQuery("#pinitsave").show();';
$js .= '		}';
$js .= '	});';
$js .= '}';

wp_add_inline_script('weblizar-for-save-settings', $js);
