<?php
/***************************************************************
*  Copyright notice
*
*  (c) 2011 Georg Ringer <typo3@ringerge.org>
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
 * Domain model for extended news item
 *
 * @package TYPO3
 * @subpackage tx_news
 */
class Tx_Newsauthor_Domain_Model_News extends Tx_Extbase_DomainObject_AbstractEntity {

	/**
	 * @var Tx_Extbase_Persistence_ObjectStorage<Tx_Newsauthor_Domain_Model_BeUser>
	 * @lazy
	 */
	protected $txNewsauthorBeUsers;

	/**
	 * @var Tx_Extbase_Persistence_ObjectStorage<Tx_Newsauthor_Domain_Model_FeUser>
	 * @lazy
	 */
	protected $txNewsauthorFeUsers;


	public function getTxNewsauthorBeUsers() {
		return $this->txNewsauthorBeUsers;
	}

	public function setTxNewsauthorBeUsers($txNewsauthorBeUsers) {
		$this->txNewsauthorBeUsers = $txNewsauthorBeUsers;
	}

	public function getTxNewsauthorFeUsers() {
		return $this->txNewsauthorFeUsers;
	}

	public function setTxNewsauthorFeUsers($txNewsauthorFeUsers) {
		$this->txNewsauthorFeUsers = $txNewsauthorFeUsers;
	}


}
?>