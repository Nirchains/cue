<?php 
/**
 * JEvents Component for Joomla 1.5.x
 *
 * @version     $Id: edit_icalevent.detail_body.php 3333 2012-03-12 09:36:35Z geraintedwards $
 * @package     JEvents
 * @copyright   Copyright (C)  2008-2009 GWE Systems Ltd
 * @license     GNU/GPLv2, see http://www.gnu.org/licenses/gpl-2.0.html
 * @link        http://www.jevents.net
 */

defined('_JEXEC') or die('Restricted access');
$lang = JFactory::getLanguage();
$lang->load("mod_jevents_detail", JPATH_SITE);
?>
<table cellpadding="0" cellspacing="0" border="0">
	<tr>
		<td><?php echo JText::_("JEV_PLUGIN_INSTRUCTIONS",true);?></td>
		<td><select id="jevdefaults" onchange="defaultsEditorPlugin.insert('value','jevdefaults' )" ></select></td>
	</tr>
</table>

<script type="text/javascript">
defaultsEditorPlugin.node($('jevdefaults'),"<?php echo JText::_("JEV_PLUGIN_SELECT",true);?>","");
// built in group
var optgroup = defaultsEditorPlugin.optgroup($('jevdefaults') , "<?php echo JText::_("JEV_CORE_DATA",true);?>");
defaultsEditorPlugin.node(optgroup , "<?php echo JText::_("JEV_FIELD_TITLE",true);?>", "TITLE");
defaultsEditorPlugin.node(optgroup , "<?php echo JText::_("JEV_FIELD_ICALBUTTON",true);?>", "ICALBUTTON");
defaultsEditorPlugin.node(optgroup , "<?php echo JText::_("JEV_FIELD_ICALDIALOG",true);?>", "ICALDIALOG");
defaultsEditorPlugin.node(optgroup , "<?php echo JText::_("JEV_FIELD_EDITBUTTON",true);?>", "EDITBUTTON");
defaultsEditorPlugin.node(optgroup , "<?php echo JText::_("JEV_FIELD_EDITDIALOG",true);?>", "EDITDIALOG");
defaultsEditorPlugin.node(optgroup , "<?php echo JText::_("JEV_FIELD_REPEATSUMMARY",true);?>", "REPEATSUMMARY");
defaultsEditorPlugin.node(optgroup , "<?php echo JText::_("JEV_FIELD_STARTDATE",true);?>", "STARTDATE");
defaultsEditorPlugin.node(optgroup , "<?php echo JText::_("JEV_FIELD_STARTTIME",true);?>", "STARTTIME");
defaultsEditorPlugin.node(optgroup , "<?php echo JText::_("JEV_FIELD_START_TZ",true);?>", "STARTTZ;%e %b %Y, %k:%M;Europe/London");
defaultsEditorPlugin.node(optgroup , "<?php echo JText::_("JEV_FIELD_ISOSTARTTIME",true);?>", "ISOSTART");
defaultsEditorPlugin.node(optgroup , "<?php echo JText::_("JEV_FIELD_ENDDATE",true);?>", "ENDDATE");
defaultsEditorPlugin.node(optgroup , "<?php echo JText::_("JEV_FIELD_ENDTIME",true);?>", "ENDTIME");
defaultsEditorPlugin.node(optgroup , "<?php echo JText::_("JEV_FIELD_END_TZ",true);?>", "ENDTZ;%e %b %Y, %k:%M;Europe/London");
defaultsEditorPlugin.node(optgroup , "<?php echo JText::_("JEV_FIELD_ISOENDTIME",true);?>", "ISOEND");
defaultsEditorPlugin.node(optgroup , "<?php echo JText::_("JEV_FIELD_MULTIENDDATE",true);?>", "MULTIENDDATE");
defaultsEditorPlugin.node(optgroup , "<?php echo JText::_("JEV_FIELD_DURATION",true);?>", "DURATION");
defaultsEditorPlugin.node(optgroup , "<?php echo JText::_("JEV_FIELD_PREVIOUSNEXT",true);?>", "PREVIOUSNEXT");
defaultsEditorPlugin.node(optgroup , "<?php echo JText::_("JEV_FIELD_FIRSTREPEAT",true);?>", "FIRSTREPEAT");
defaultsEditorPlugin.node(optgroup , "<?php echo JText::_("JEV_FIELD_LASTREPEAT",true);?>", "LASTREPEAT");
defaultsEditorPlugin.node(optgroup , "<?php echo JText::_("JEV_FIELD_FIRSTREPEATSTART",true);?>", "FIRSTREPEATSTART");
defaultsEditorPlugin.node(optgroup , "<?php echo JText::_("JEV_FIELD_LASTREPEATEND??",true);?>", "LASTREPEATEND");
defaultsEditorPlugin.node(optgroup , "<?php echo JText::_("JEV_FIELD_PREVIOUSNEXTEVENT",true);?>", "PREVIOUSNEXTEVENT");
defaultsEditorPlugin.node(optgroup , "<?php echo JText::_("JEV_FIELD_CREATOR_LABEL",true);?>", "CREATOR_LABEL");
defaultsEditorPlugin.node(optgroup , "<?php echo JText::_("JEV_FIELD_CREATOR",true);?>", "CREATOR");
defaultsEditorPlugin.node(optgroup , "<?php echo JText::_("JEV_FIELD_HITS",true);?>", "HITS");
defaultsEditorPlugin.node(optgroup , "<?php echo JText::_("JEV_FIELD_DESCRIPTION",true);?>", "DESCRIPTION");
defaultsEditorPlugin.node(optgroup , "<?php echo JText::_("JEV_FIELD_URL",true);?>", "URL");
defaultsEditorPlugin.node(optgroup , "<?php echo JText::_("JEV_FIELD_LOCATION_LABEL",true);?>", "LOCATION_LABEL");
defaultsEditorPlugin.node(optgroup , "<?php echo JText::_("JEV_FIELD_LOCATION",true);?>", "LOCATION");
defaultsEditorPlugin.node(optgroup , "<?php echo JText::_("JEV_FIELD_CONTACT_LABEL",true);?>", "CONTACT_LABEL");
defaultsEditorPlugin.node(optgroup , "<?php echo JText::_("JEV_FIELD_CONTACT",true);?>", "CONTACT");
defaultsEditorPlugin.node(optgroup , "<?php echo JText::_("JEV_FIELD_EXTRAINFO",true);?>", "EXTRAINFO");
defaultsEditorPlugin.node(optgroup , "<?php echo JText::_("JEV_FIELD_CATEGORY",true);?>", "CATEGORY");
defaultsEditorPlugin.node(optgroup , "<?php echo JText::_("JEV_FIELD_ALL_CATEGORIES",true);?>", "ALLCATEGORIES");
defaultsEditorPlugin.node(optgroup , "<?php echo JText::_("JEV_FIELD_CATEGORY_LINK",true);?>", "CATEGORYLNK");
defaultsEditorPlugin.node(optgroup , "<?php echo JText::_("JEV_FIELD_CATEGORY_IMAGE",true);?>", "CATEGORYIMG");
defaultsEditorPlugin.node(optgroup , "<?php echo JText::_("JEV_FIELD_CATEGORY_IMAGES",true);?>", "CATEGORYIMGS");
defaultsEditorPlugin.node(optgroup , "<?php echo JText::_("JEV_FIELD_CATEGORY_DESCRIPTION",true);?>", "CATDESC");
defaultsEditorPlugin.node(optgroup , "<?php echo JText::_("JEV_FIELD_CALENDAR",true);?>", "CALENDAR");
defaultsEditorPlugin.node(optgroup , "<?php echo JText::_("JEV_FIELD_CREATIONDATE",true);?>", "CREATED");
defaultsEditorPlugin.node(optgroup , "<?php echo JText::_("JEV_ADMIN_PANEL",true);?>", "MANAGEMENT");
defaultsEditorPlugin.node(optgroup , "<?php echo JText::_("JEV_ACCESS_LEVEL",true);?>", "ACCESS");
defaultsEditorPlugin.node(optgroup , "<?php echo JText::_("JEV_EVENT_PRIORITY",true);?>", "PRIORITY");
//defaultsEditorPlugin.node(optgroup , "<?php echo JText::_("JEV_MODULE_START",true);?>", "MODULESTART#modulename");
//defaultsEditorPlugin.node(optgroup , "<?php echo JText::_("JEV_MODULE_END",true);?>", "MODULEEND");

<?php
// get list of enabled plugins
$jevplugins = JPluginHelper::getPlugin("jevents");
foreach ($jevplugins as $jevplugin){
	if (JPluginHelper::importPlugin("jevents", $jevplugin->name)){
		$classname = "plgJevents".ucfirst($jevplugin->name);
		if (is_callable(array($classname,"fieldNameArray"))){
			$lang = JFactory::getLanguage();
			$lang->load("plg_jevents_".$jevplugin->name,JPATH_ADMINISTRATOR);
			$fieldNameArray = call_user_func(array($classname,"fieldNameArray"));
			if (!isset($fieldNameArray['labels'])) continue;
			?>
			optgroup = defaultsEditorPlugin.optgroup($('jevdefaults') , '<?php echo $fieldNameArray["group"];?>');
			<?php
			for ($i=0;$i<count($fieldNameArray['labels']);$i++) {
				if ($fieldNameArray['labels'][$i]=="" || $fieldNameArray['labels'][$i]==" Label")  continue;
				?>
				defaultsEditorPlugin.node(optgroup , "<?php echo str_replace(":"," ",$fieldNameArray['labels'][$i]);?>", "<?php echo $fieldNameArray['values'][$i];?>");
				<?php
			}
		}
	}
}
?>
</script>
