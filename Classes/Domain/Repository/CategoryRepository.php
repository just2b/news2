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
 * Category repository with all callable functionality
 *
 * @package TYPO3
 * @subpackage tx_news2
 * @version $Id$
 */
class Tx_News2_Domain_Repository_CategoryRepository extends Tx_News2_Domain_Repository_AbstractCategoryRepository {


	public function findCategoryMenu($parentId = 0) {
		$parentId = (int)$parentId;

		$out = $this->getRecursiveCategories($parentId);

		return $out;
	}

	public function findByIdList() {
		$query = $this->createQuery();

		$constraints = array();
		$constraints[] = $this->setStoragePageRestriction($query);
		$constraints[] = $this->setUidListConstraint($query);

		return $this->executeQuery($query, $constraints);
	}
	
	public function findByParent() {
		$query = $this->createQuery();

		$constraints = array();
		$constraints[] = $this->setStoragePageRestriction($query);
		$constraints[] = $this->setParentUidListConstraint($query);

		return $this->executeQuery($query, $constraints);
	}
	

}

?>