<?php
/**
 * Part of the Fuel framework.
 *
 * @package    Fuel
 * @version    1.0
 * @author     Fuel Development Team
 * @license    MIT License
 * @copyright  2010 - 2011 Fuel Development Team
 * @link       http://fuelphp.com
 */

/**
 * NOTICE:
 *
 * If you need to make modifications to the default configuration, copy
 * this file to your app/config folder, and make them in there.
 *
 * This will allow you to upgrade fuel without losing your custom config.
 */


return array(
	'prep_value'            => true,
	'auto_id'               => true,
	'auto_id_prefix'        => 'form_',
	'form_method'           => 'post',
	'form_template'         => "\n\t\t{open}\n\t\t<table>\n{fields}\n\t\t</table>\n\t\t{close}\n",
	'fieldset_template'     => "\n\t\t<tr><td colspan=\"2\">{open}<table>\n{fields}</table></td></tr>\n\t\t{close}\n",
	'field_template'        => "\t\t<tr>\n\t\t\t<td class=\"{error_class}\">{label}{required}</td>\n\t\t\t<td class=\"{error_class}\">{field} {help_text} {error_msg}</td>\n\t\t</tr>\n",
	'multi_field_template'  => "\t\t<tr>\n\t\t\t<td class=\"{error_class}\">{group_label}{required}</td>\n\t\t\t<td class=\"{error_class}\">{fields}\n\t\t\t\t{field} {label}<br />\n{fields}{help_text}\t\t\t{error_msg}\n\t\t\t</td>\n\t\t</tr>\n",
	'error_template'        => '<span>{error_msg}</span>',
	'required_mark'         => '*',
	'inline_errors'         => false,
	'error_class'           => 'validation_error',
	'help_text'             => '<span>{help_text}</span>',
);
