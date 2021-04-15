<?php

// No direct access.
defined('_JEXEC') or die;
$logo_image = $this->API->get('logo_image', '');
$logo_image_back = $this->API->get('logo_image_back', '');

if(($logo_image == '') || ($this->API->get('logo_type', '') == 'css')) {
     $logo_image = $this->API->URLtemplate() . '/images/logo.png';
} else {
     $logo_image = $this->API->URLbase() . $logo_image;
}

$logo_text = $this->API->get('logo_text', '') != '' ? $this->API->get('logo_text', '') : $this->API->getPageName();
$logo_slogan = $this->API->get('logo_slogan', '');

?>

<?php if ($this->API->get('logo_type', 'image')!=='none'): ?>
     <?php if($this->API->get('logo_type', 'image') == 'css') : ?>
     <a href="./" id="gk-logo" class="pull-left css-logo">
     	<?php echo $logo_text . ' - ' . $logo_slogan; ?>
     </a>
     <?php elseif($this->API->get('logo_type', 'image')=='text') : ?>
     <a href="./" id="gk-logo" class="text-logo pull-left">
		<span><?php echo $logo_text; ?></span>
        <small class="gk-logo-slogan"><?php echo $logo_slogan; ?></small>
     </a>
     <?php elseif($this->API->get('logo_type', 'image')=='image') : ?>
     <a href="./" id="gk-logo" class="pull-left">
        <img src="<?php echo $logo_image; ?>" alt="<?php echo $logo_text . ' - ' . $logo_slogan; ?>" />
     </a>
     <?php elseif($this->API->get('logo_type', 'image')=='imagetext') : ?>
     
     	<a href="./" id="gk-logo" class="pull-left css-text">
     	<span class="logo-sjd"><img src="<?php echo $logo_image; ?>" alt="<?php echo $logo_text . ' - ' . $logo_slogan; ?>" /></span>
        <h1 class="logo-text">
	        <span class="text-1">Centro Universitario de Enfermer&iacute;a</span><br>
	        <span class="text-2">San Juan de Dios</span><br>
            <span class="text-3">Hermanos San Juan de Dios</span>
        </h1>
        <span class="logo-us"><img src="<?php echo $this->API->URLbase() . $logo_image_back; ?>" alt="<?php echo $logo_text . ' - ' . $logo_slogan; ?>" /></span>
     	</a>
     
     <?php endif; ?>
<?php endif; ?>