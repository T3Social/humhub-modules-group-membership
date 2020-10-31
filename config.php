<?php
/**
 * Group membership
 * @link https://github.com/cuzy-app/humhub-modules-group-membership
 * @license https://github.com/cuzy-app/humhub-modules-group-membership/tree/master/docs/LICENCE.md
 * @author [Marc Farre](https://marc.fun) for [CUZY.APP](https://www.cuzy.app)
 */

use humhub\modules\groupMembership\Events;
use humhub\modules\ui\menu\widgets\Menu;

return [
	'id' => 'group-membership',
	'class' => 'humhub\modules\groupMembership\Module',
	'namespace' => 'humhub\modules\groupMembership',
	'events' => [
        [
        	'humhub\modules\directory\widgets\Menu',
        	Menu::EVENT_INIT,
        	[Events::class, 'onDirectoryMenuInit']],
	],
];
