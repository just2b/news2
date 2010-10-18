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
 * Media model
 *
 * @package TYPO3
 * @subpackage tx_news2
 * @version $Id$
 */
class Tx_News2_Domain_Model_Media extends Tx_Extbase_DomainObject_AbstractEntity {

	/**
	 * @var string
	 */
	protected $title;

	/**
	 * @var string
	 */
	protected $media;

	/**
	 * @var integer
	 */
	protected $type;

	/**
	 * @var string
	 */
	protected $html;

	/**
	 * @var string
	 */
	protected $video;

	/**
	 * @var boolean;
	 */
	protected $showinpreview;

	public function getTitle() {
	 return $this->title;
	}

	public function setTitle($title) {
	 $this->title = $title;
	}

	public function getMedia() {
	 return $this->media;
	}

	public function setMedia($media) {
	 $this->media = $media;
	}

	public function getType() {
	 return $this->type;
	}

	public function setType($type) {
	 $this->type = $type;
	}

	public function getHtml() {
	 return $this->html;
	}

	public function setHtml($html) {
	 $this->html = $html;
	}

	public function getVideo() {
	 return $this->video;
	}

	public function setVideo($video) {
	 $this->video = $video;
	}

	public function getShowinpreview() {
		return $this->showinpreview;
	}

	public function setShowinpreview($showinpreview) {
		$this->showinpreview = $showinpreview;
	}



}


?>