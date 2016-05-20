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
// Copyright (C) 2006-2016  Kaltura Inc.
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
 * @package Kaltura
 * @subpackage Client
 */
class CopyJobData extends \Kaltura\Client\Type\JobData
{
	public function getKalturaObjectType()
	{
		return 'KalturaCopyJobData';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->filter) && !empty($xml->filter))
			$this->filter = \Kaltura\Client\ParseUtils::unmarshalObject($xml->filter, "KalturaFilter");
		if(count($xml->lastCopyId))
			$this->lastCopyId = (int)$xml->lastCopyId;
		if(count($xml->templateObject) && !empty($xml->templateObject))
			$this->templateObject = \Kaltura\Client\ParseUtils::unmarshalObject($xml->templateObject, "KalturaObjectBase");
	}
	/**
	 * The filter should return the list of objects that need to be copied.
	 * @var \Kaltura\Client\Type\Filter
	 */
	public $filter;

	/**
	 * Indicates the last id that copied, used when the batch crached, to re-run from the last crash point.
	 * @var int
	 */
	public $lastCopyId = null;

	/**
	 * Template object to overwrite attributes on the copied object
	 * @var \Kaltura\Client\Type\KalturaObjectBase
	 */
	public $templateObject;

}
