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
// Copyright (C) 2006-2017  Kaltura Inc.
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
class UploadToken extends \Kaltura\Client\ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaUploadToken';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->id))
			$this->id = (string)$xml->id;
		if(count($xml->partnerId))
			$this->partnerId = (int)$xml->partnerId;
		if(count($xml->userId))
			$this->userId = (string)$xml->userId;
		if(count($xml->status))
			$this->status = (int)$xml->status;
		if(count($xml->fileName))
			$this->fileName = (string)$xml->fileName;
		if(count($xml->fileSize))
			$this->fileSize = (float)$xml->fileSize;
		if(count($xml->uploadedFileSize))
			$this->uploadedFileSize = (float)$xml->uploadedFileSize;
		if(count($xml->createdAt))
			$this->createdAt = (int)$xml->createdAt;
		if(count($xml->updatedAt))
			$this->updatedAt = (int)$xml->updatedAt;
		if(count($xml->uploadUrl))
			$this->uploadUrl = (string)$xml->uploadUrl;
	}
	/**
	 * Upload token unique ID
	 * @var string
	 * @readonly
	 */
	public $id = null;

	/**
	 * Partner ID of the upload token
	 * @var int
	 * @readonly
	 */
	public $partnerId = null;

	/**
	 * User id for the upload token
	 * @var string
	 * @readonly
	 */
	public $userId = null;

	/**
	 * Status of the upload token
	 * @var \Kaltura\Client\Enum\UploadTokenStatus
	 * @readonly
	 */
	public $status = null;

	/**
	 * Name of the file for the upload token, can be empty when the upload token is created and will be updated internally after the file is uploaded
	 * @var string
	 * @insertonly
	 */
	public $fileName = null;

	/**
	 * File size in bytes, can be empty when the upload token is created and will be updated internally after the file is uploaded
	 * @var float
	 * @insertonly
	 */
	public $fileSize = null;

	/**
	 * Uploaded file size in bytes, can be used to identify how many bytes were uploaded before resuming
	 * @var float
	 * @readonly
	 */
	public $uploadedFileSize = null;

	/**
	 * Creation date as Unix timestamp (In seconds)
	 * @var int
	 * @readonly
	 */
	public $createdAt = null;

	/**
	 * Last update date as Unix timestamp (In seconds)
	 * @var int
	 * @readonly
	 */
	public $updatedAt = null;

	/**
	 * Upload url - to explicitly determine to which domain to adress the uploadToken->upload call
	 * @var string
	 * @readonly
	 */
	public $uploadUrl = null;

}
