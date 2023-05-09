<?php

/**
 * @package     Joomla.Site
 * @subpackage  Layout
 *
 * @copyright   (C) 2014 Open Source Matters, Inc. <https://www.joomla.org>
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

use Joomla\CMS\Factory;

extract($displayData);

/**
 * Layout variables
 * -----------------
 * @var   array   $options      Optional parameters
 * @var   string  $id           The id of the input this label is for
 * @var   string  $name         The name of the input this label is for
 * @var   string  $label        The html code for the label
 * @var   string  $input        The input field html code
 * @var   string  $description  An optional description to use as in–line help text
 * @var   string  $descClass    The class name to use for the description
 */

if (!empty($options['showonEnabled'])) {
    /** @var Joomla\CMS\WebAsset\WebAssetManager $wa */
    $wa = Factory::getApplication()->getDocument()->getWebAssetManager();
    $wa->useScript('showon');
}

$class           = empty($options['class']) ? '' : ' ' . $options['class'];
$rel             = empty($options['rel']) ? '' : ' ' . $options['rel'];
$id              = ($id ?? $name) . '-desc';
$hideLabel       = !empty($options['hiddenLabel']);
$hideDescription = empty($options['hiddenDescription']) ? false : $options['hiddenDescription'];
$descClass       = ($options['descClass'] ?? '') ?: (!empty($options['inlineHelp']) ? 'hide-aware-inline-help d-none' : '');

if (!empty($parentclass)) {
    $class .= ' ' . $parentclass;
}

?>

<div class="form-floating mb-3">
    <?php echo $input; ?>
    <?php echo $label; ?>
</div>