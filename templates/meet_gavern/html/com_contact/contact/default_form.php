<?php
/**
 * @package     Joomla.Site
 * @subpackage  com_contact
 *
 * @copyright   Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

JHtml::_('behavior.keepalive');
JHtml::_('behavior.formvalidator');

if (isset($this->error)) : ?>
	<div class="contact-error">
		<?php echo $this->error; ?>
	</div>
<?php endif; ?>

<div class="contact-form">
	<form id="contact-form" action="<?php echo JRoute::_('index.php'); ?>" method="post" class="form-validate form-horizontal">
		<fieldset>
			<legend><?php echo JText::_('COM_CONTACT_FORM_LABEL'); ?></legend>
			<div class="control-group">
				<div class="control-label"><?php echo $this->form->getLabel('contact_name'); ?></div>
				<div class="controls"><?php echo $this->form->getInput('contact_name'); ?></div>
			</div>
			<div class="control-group">
				<div class="control-label"><?php echo $this->form->getLabel('contact_email'); ?></div>
				<div class="controls"><?php echo $this->form->getInput('contact_email'); ?></div>
			</div>
			<div class="control-group">
				<div class="control-label"><?php echo $this->form->getLabel('contact_subject'); ?></div>
				<div class="controls"><?php echo $this->form->getInput('contact_subject'); ?></div>
			</div>
			<div class="control-group">
				<div class="control-label"><?php echo $this->form->getLabel('contact_message'); ?></div>
				<div class="controls"><?php echo $this->form->getInput('contact_message'); ?></div>
			</div>
			<?php if ($this->params->get('show_email_copy')) : ?>
				<div class="control-group">
					<div class="control-label"><?php echo $this->form->getLabel('contact_email_copy'); ?></div>
					<div class="controls"><?php echo $this->form->getInput('contact_email_copy'); ?></div>
				</div>
			<?php endif; ?>
			<?php // Dynamically load any additional fields from plugins. ?>
			<?php foreach ($this->form->getFieldsets() as $fieldset) : ?>
				<?php if ($fieldset->name != 'contact') : ?>
					<?php $fields = $this->form->getFieldset($fieldset->name); ?>
					<?php foreach ($fields as $field) : ?>
						<div class="control-group">
							<?php if ($field->hidden) : ?>
								<div class="controls">
									<?php echo $field->input; ?>
								</div>
							<?php else: ?>
								<div class="control-label">
									<?php echo $field->label; ?>
									<?php if (!$field->required && $field->type != "Spacer") : ?>
										<span class="optional"><?php echo JText::_('COM_CONTACT_OPTIONAL'); ?></span>
									<?php endif; ?>
								</div>
								<div class="controls"><?php echo $field->input; ?></div>
							<?php endif; ?>
						</div>
					<?php endforeach; ?>
				<?php endif; ?>
			<?php endforeach; ?>
          
			<div class="form-actions">
				<button class="btn btn-primary validate" type="submit"><?php echo JText::_('COM_CONTACT_CONTACT_SEND'); ?></button>
				<input type="hidden" name="option" value="com_contact" />
				<input type="hidden" name="task" value="contact.submit" />
				<input type="hidden" name="return" value="<?php echo $this->return_page; ?>" />
				<input type="hidden" name="id" value="<?php echo $this->contact->slug; ?>" />
				<?php echo JHtml::_('form.token'); ?>
			</div>
          <div class="lopd">
            <p>
              En cumplimiento de la Ley Orgánica 15/1999 de Protección de Datos, le informamos de que los datos personales que nos facilite se incorporarán a un fichero titularidad de la Orden Hospitalaria Hermanos de San Juan de Dios, Curia Provincial Bética, con la finalidad de gestionar los procesos de selección de personal llevados a cabo en el Centro Universitario de San Juan de Dios. Podrá ejercer sus derechos de acceso, rectificación, cancelación y oposición en los términos legalmente permitidos en la siguiente dirección: Eduardo Dato 42, 41005 Sevilla.
            </p>
          </div>
		</fieldset>
	</form>
</div>
