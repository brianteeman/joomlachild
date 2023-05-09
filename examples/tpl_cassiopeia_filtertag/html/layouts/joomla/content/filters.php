<?php

defined('_JEXEC') or die;

?>
<?php if (!empty($displayData)) : ?>
    <?php foreach ($displayData as $i => $tag) : ?>
        <input type="checkbox" class="btn-check" name="CheckBox" id="<?php echo $tag->alias; ?>" value="<?php echo $tag->alias; ?>">
        <label class="btn btn-outline-primary btn-sm" for="<?php echo $tag->alias; ?>"><?php echo $tag->title; ?></label>
    <?php endforeach; ?>
<?php endif; ?>