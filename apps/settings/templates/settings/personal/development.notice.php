<div class="section development-notice">
	<p>
		<a href="<?php p($_['reasons-use-nextcloud-pdf-link']); ?>" id="open-reasons-use-nextcloud-pdf" class="link-button icon-file" target="_blank"><?php p($l->t('Reasons to use Nextcloud in your organization'));?></a>
	</p>
	<p>
		<?php print_unescaped(str_replace(
			[
				'{communityopen}',
				'{githubopen}',
				'{licenseopen}',
				'{linkclose}',
			],
			[
				'<a href="https://nextcloud.com/contribute" target="_blank" rel="noreferrer noopener">',
				'<a href="https://github.com/nextcloud" target="_blank" rel="noreferrer noopener">',
				'<a href="https://www.gnu.org/licenses/agpl-3.0.html" target="_blank" rel="noreferrer noopener">',
				'</a>',
			],
			$l->t('Developed by the {communityopen}Nextcloud community{linkclose} & developed and modified by Agriculture and Agri-food Canada, the {githubopen}source code{linkclose} is licensed under the {licenseopen}AGPL{linkclose}.')
		)); ?>
	</p>

</div>
