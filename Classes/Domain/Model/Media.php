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
	 * @var integer
	 */
	protected $pid;

	/**
	 * @var DateTime
	 */
	protected $crdate;

	/**
	 * @var DateTime
	 */
	protected $tstamp;

	/**
	 * @var integer
	 */
	protected $sysLanguageUid;

	/**
	 * @var integer
	 */
	protected $l10nParent;

	/**
	 * @var boolean
	 */
	protected $hidden;

	/**
	 * @var boolean
	 */
	protected $deleted;

	/**
	 * @var integer
	 */
	protected $cruserId;

	/**
	 * @var string
	 */
	protected $title;

	/**
	 * @var string
	 */
	protected $caption;

	/**
	 * @var string
	 */
	protected $alt;

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
	 * @var Tx_ExtbaseDam_Domain_Model_Dam Location
	 */
	protected $dam;

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

	public function getCaption() {
		return $this->caption;
	}

	public function setCaption($caption) {
		$this->caption = $caption;
	}

	public function getAlt() {
		return $this->alt;
	}

	public function setAlt($alt) {
		$this->alt = $alt;
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

	public function getDam() {
		return Tx_ExtbaseDam_Utility_Dam::getOne('tx_news2_domain_model_media', $this->uid, 'tx_news2_media');
	}

	public function setDam($dam) {
		return $this->dam = $dam;
	}

	public function getShowinpreview() {
		return $this->showinpreview;
	}

	public function setShowinpreview($showinpreview) {
		$this->showinpreview = $showinpreview;
	}

	public function getPid() {
		return $this->pid;
	}

	public function setPid($pid) {
		$this->pid = $pid;
	}

	public function getCrdate() {
		return $this->crdate;
	}

	public function setCrdate($crdate) {
		$this->crdate = $crdate;
	}

	public function getTstamp() {
		return $this->tstamp;
	}

	public function setTstamp($tstamp) {
		$this->tstamp = $tstamp;
	}

	public function getHidden() {
		return $this->hidden;
	}

	public function setHidden($hidden) {
		$this->hidden = $hidden;
	}

	public function getDeleted() {
		return $this->deleted;
	}

	public function setDeleted($deleted) {
		$this->deleted = $deleted;
	}

	public function getCruserId() {
		return $this->cruserId;
	}

	public function setCruserId($cruserId) {
		$this->cruserId = $cruserId;
	}

	public function getSysLanguageUid() {
		return $this->sysLanguageUid;
	}

	public function setSysLanguageUid($sysLanguageUid) {
		$this->sysLanguageUid = $sysLanguageUid;
	}

	public function getL10nParent() {
		return $this->l10nParent;
	}

	public function setL10nParent($l10nParent) {
		$this->l10nParent = $l10nParent;
	}



}


?>