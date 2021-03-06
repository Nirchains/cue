<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_articles_latest
 *
 * @copyright   Copyright (C) 2005 - 2014 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
?>
<ul class="latestnews<?php echo $moduleclass_sfx; ?>">
<?php foreach ($list as $item) :  ?>
	<li itemscope itemtype="http://schema.org/Article">
		<span class="newspublished"><?php echo JHtml::_('date', $item->publish_up, JText::_('d/m/Y')); ?>
        - </span><a href="<?php echo $item->link; ?>" itemprop="url">
			<span itemprop="name">
				<?php echo $item->title; ?>
			</span>
		</a>
	</li>
<?php endforeach; ?>
<?php if (strpos($moduleclass_sfx, "ult-noticias")!=0) : ?>
	<li><a class="mas mas-noticias" href="/noticias">+ noticias</a></li>
<?php endif; ?>
</ul>
