<?php
declare(strict_types=1);
/**
 * @copyright Copyright (c) 2019, Roeland Jago Douma <roeland@famdouma.nl>
 *
 * @author Roeland Jago Douma <roeland@famdouma.nl>
 *
 * @license GNU AGPL version 3 or any later version
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 */
session_start();
style('core', 'login/authpicker');

/** @var array $_ */
if (!empty($_GET['language'])) {
    switch($_GET['language']) {
        case 'en':
            $l = \OC::$server->getL10N("core", "en");
			$_SESSION['language'] = 'en';
            break;
        case 'fr':
            $l = \OC::$server->getL10N("core", "fr");
			$_SESSION['language'] = 'fr';
            break;
    }
} else {
	if (!empty($_SESSION['language'])) {
	    switch($_SESSION['language']) {
	        case 'en':
	            $l = \OC::$server->getL10N("core", "en");
	            break;
	        case 'fr':
	            $l = \OC::$server->getL10N("core", "fr");
	            break;
	    }
	}
}
?>

<div class="picker-window">
	<h2><?php p($l->t('Account connected')) ?></h2>
	<p class="info">
		<?php p($l->t('Your client should now be connected!')) ?><br/>
		<?php p($l->t('You can close this window.')) ?>
	</p>

	<br/>
</div>
