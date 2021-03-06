<?php defined('_JEXEC') or die(file_get_contents('index.html'));
/**
 * @package   Fox Contact for Joomla
 * @copyright Copyright (c) 2010 - 2015 Demis Palma. All rights reserved.
 * @license   Distributed under the terms of the GNU General Public License GNU/GPL v3 http://www.gnu.org/licenses/gpl-3.0.html
 * @see       Documentation: http://www.fox.ra.it/forum/2-documentation.html
 */
jimport('foxcontact.html.elem');
jimport('foxcontact.html.template');
jimport('foxcontact.html.resource');
jimport('foxcontact.joomla.editor');

class JFormFieldFHtmlEditor extends JFormField
{
	protected $type = 'FHtmlEditor';
	
	public function renderField($options = array())
	{
		$options['class'] = 'fox-field-full-row';
		$options['hiddenLabel'] = true;
		return parent::renderField($options);
	}
	
	
	protected function getInput()
	{
		if (empty($this->value))
		{
			$this->value = FoxHtmlTemplateHelper::renderTemplate(JPATH_ADMINISTRATOR, 'fox/' . (string) $this->element['template']);
		}
		
		FoxHtmlResource::NewInstance()->Add('/administrator/components/com_foxcontact/js/fhtmleditor', 'js')->Add('/administrator/components/com_foxcontact/css/fhtmleditor', 'css')->ToDocument(JFactory::getDocument());
		FoxJoomlaEditor::init();
		$label_text = $this->element['label'] ? (string) $this->element['label'] : (string) $this->element['name'];
		$label_text = $this->translateLabel ? JText::_($label_text) : $label_text;
		return FoxHtmlElem::create('div')->classes('fox-html-editor')->append(FoxHtmlElem::create('input')->attr('id', $this->id)->attr('name', $this->name)->attr('type', 'hidden')->attr('value', $this->value)->classes('fox-html-editor-input'))->append(FoxHtmlElem::create('iframe')->attr('id', "{$this->id}_preview")->attr('data-style-url', FoxHtmlResource::NewInstance()->Add('/administrator/components/com_foxcontact/layouts/fox/user_email_tmpl', 'css')->ToJSON())->classes('fox-html-editor-iframe'))->append(FoxHtmlElem::create('div')->classes('fox-html-editor-toolbar')->append(FoxHtmlElem::create('button')->classes('tool-button edit-button')->attr('data-ref-id', $this->id)->append(FoxHtmlElem::create('i')->classes('icon-edit'))))->append(FoxHtmlElem::create('div')->classes('fox-html-editor-iframe-shadow'))->append(FoxHtmlElem::create('div')->attr('id', "{$this->id}_popup")->classes('fox-html-editor-popup')->append(FoxHtmlElem::create('div')->attr('id', "{$this->id}_popup_container")->classes('fox-html-editor-popup-container')->append(FoxHtmlElem::create('div')->classes('fox-html-editor-popup-header')->append(FoxHtmlElem::create('span')->classes('fox-html-editor-popup-title fvd-win-tlb-ttl')->text($label_text))->append(FoxHtmlElem::create('button')->classes('fox-html-editor-popup-close fvd-win-tlb-cls-btn tool-button')->append(FoxHtmlElem::create('i')->classes('icon-cancel-2')))->append(FoxHtmlElem::create('div')->classes('fvd-win-tlb-ico')->append(FoxHtmlElem::create('i')->classes('icon-edit'))))->append(FoxHtmlElem::create('div')->attr('id', "{$this->id}_popup_container_main")->classes('fox-html-editor-popup-main'))->append(FoxHtmlElem::create('div')->classes('fox-html-editor-popup-footer btn-toolbar')->append(FoxHtmlElem::create('a')->classes('btn btn-primary fox-html-editor-popup-save')->append(FoxHtmlElem::create('i')->classes('icon-save'))->append(JText::_('COM_FOXCONTACT_OK'))->attr('data-ref-id', $this->id))->append(FoxHtmlElem::create('a')->classes('btn fox-html-editor-popup-close')->append(FoxHtmlElem::create('i')->classes('icon-cancel '))->append(JText::_('COM_FOXCONTACT_CANCEL'))))));
	}

}