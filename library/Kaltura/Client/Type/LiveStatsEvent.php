<?php
// ===================================================================================================
//                           _  __     _ _
//                          | |/ /__ _| | |_ _  _ _ _ __ _
//                          | ' </ _` | |  _| || | '_/ _` |
//                          |_|\_\__,_|_|\__|\_,_|_| \__,_|
//
// This file is part of the Kaltura Collaborative Media Suite which allows users
// to do with audio, video, and animation what Wiki platfroms allow them to do with
// text.
//
// Copyright (C) 2006-2015  Kaltura Inc.
//
// This program is free software: you can redistribute it and/or modify
// it under the terms of the GNU Affero General Public License as
// published by the Free Software Foundation, either version 3 of the
// License, or (at your option) any later version.
//
// This program is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU Affero General Public License for more details.
//
// You should have received a copy of the GNU Affero General Public License
// along with this program.  If not, see <http://www.gnu.org/licenses/>.
//
// @ignore
// ===================================================================================================

/**
 * @namespace
 */
namespace Kaltura\Client\Type;

/**
 * Will hold data from the Kaltura Player components to be passed on to the live analytics system
 *  
 * @package Kaltura
 * @subpackage Client
 */
class LiveStatsEvent extends \Kaltura\Client\ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaLiveStatsEvent';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->partnerId))
			$this->partnerId = (int)$xml->partnerId;
		$this->entryId = (string)$xml->entryId;
		if(count($xml->eventType))
			$this->eventType = (int)$xml->eventType;
		$this->sessionId = (string)$xml->sessionId;
		if(count($xml->eventIndex))
			$this->eventIndex = (int)$xml->eventIndex;
		if(count($xml->bufferTime))
			$this->bufferTime = (int)$xml->bufferTime;
		if(count($xml->bitrate))
			$this->bitrate = (int)$xml->bitrate;
		$this->referrer = (string)$xml->referrer;
		if(!empty($xml->isLive))
			$this->isLive = true;
		$this->deliveryType = (string)$xml->deliveryType;
	}
	/**
	 * 
	 * @var int
	 */
	public $partnerId = null;

	/**
	 * 
	 * @var string
	 */
	public $entryId = null;

	/**
	 * 
	 * @var \Kaltura\Client\Enum\StatsEventType
	 */
	public $eventType = null;

	/**
	 * a unique string generated by the client that will represent the client-side session: the primary component will pass it on to other components that sprout from it
	 * 	 
	 * @var string
	 */
	public $sessionId = null;

	/**
	 * incremental sequence of the event
	 * 	 
	 * @var int
	 */
	public $eventIndex = null;

	/**
	 * buffer time in seconds from the last 10 seconds
	 * 	 
	 * @var int
	 */
	public $bufferTime = null;

	/**
	 * bitrate used in the last 10 seconds
	 * 	 
	 * @var int
	 */
	public $bitrate = null;

	/**
	 * the referrer of the client
	 * 	 
	 * @var string
	 */
	public $referrer = null;

	/**
	 * 
	 * @var bool
	 */
	public $isLive = null;

	/**
	 * delivery type used for this stream
	 * 	 
	 * @var \Kaltura\Client\Enum\PlaybackProtocol
	 */
	public $deliveryType = null;

}
