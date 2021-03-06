<?php
/***************************************************************
*  Copyright notice
*
*  (c) 2010 Georg Ringer <typo3@ringerge.org>
*  All rights reserved
*
*  This script is part of the TYPO3 project. The TYPO3 project is
*  free software; you can redistribute it and/or modify
*  it under the terms of the GNU General Public License as published by
*  the Free Software Foundation; either version 2 of the License, or
*  (at your option) any later version.
*
*  The GNU General Public License can be found at
*  http://www.gnu.org/copyleft/gpl.html.
*
*  This script is distributed in the hope that it will be useful,
*  but WITHOUT ANY WARRANTY; without even the implied warranty of
*  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
*  GNU General Public License for more details.
*
*  This copyright notice MUST APPEAR in all copies of the script!
***************************************************************/

/**
 * ViewHelper to show videos
 *
 * @package TYPO3
 * @subpackage tx_news2
 * @version $Id: VideoViewHelper.php 40832 2010-12-05 16:12:36Z just2b $
 */
class Tx_News2_ViewHelpers_ActiveCategoryViewHelper extends Tx_Fluid_Core_ViewHelper_AbstractViewHelper {


	/**
	 * Render special class if category is selected
	 *
	 * @param Tx_News2_Domain_Model_Category $category
	 * @param string $class
	 */
	public function render(Tx_News2_Domain_Model_Category $category, $class = '') {
		$vars =	t3lib_div::_GET('tx_news2_pi1');
		if (is_array($vars) && isset($vars['category']) && $vars['category'] == $category->getUid()) {
				// override default class name
			if (empty($class)) {
				$class = 'active-category';
			}

			return $class;
		}

		return '';
	}



}