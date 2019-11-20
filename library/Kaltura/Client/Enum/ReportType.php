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
// Copyright (C) 2006-2019  Kaltura Inc.
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
namespace Kaltura\Client\Enum;

/**
 * @package Kaltura
 * @subpackage Client
 */
class ReportType extends \Kaltura\Client\EnumBase
{
	const QUIZ = "quiz.QUIZ";
	const QUIZ_AGGREGATE_BY_QUESTION = "quiz.QUIZ_AGGREGATE_BY_QUESTION";
	const QUIZ_USER_AGGREGATE_BY_QUESTION = "quiz.QUIZ_USER_AGGREGATE_BY_QUESTION";
	const QUIZ_USER_PERCENTAGE = "quiz.QUIZ_USER_PERCENTAGE";
	const TOP_CONTENT = "1";
	const CONTENT_DROPOFF = "2";
	const CONTENT_INTERACTIONS = "3";
	const MAP_OVERLAY = "4";
	const TOP_CONTRIBUTORS = "5";
	const TOP_SYNDICATION = "6";
	const CONTENT_CONTRIBUTIONS = "7";
	const USER_ENGAGEMENT = "11";
	const SPECIFIC_USER_ENGAGEMENT = "12";
	const USER_TOP_CONTENT = "13";
	const USER_CONTENT_DROPOFF = "14";
	const USER_CONTENT_INTERACTIONS = "15";
	const APPLICATIONS = "16";
	const USER_USAGE = "17";
	const SPECIFIC_USER_USAGE = "18";
	const VAR_USAGE = "19";
	const TOP_CREATORS = "20";
	const PLATFORMS = "21";
	const OPERATING_SYSTEM = "22";
	const BROWSERS = "23";
	const LIVE = "24";
	const TOP_PLAYBACK_CONTEXT = "25";
	const VPAAS_USAGE = "26";
	const ENTRY_USAGE = "27";
	const REACH_USAGE = "28";
	const TOP_CUSTOM_VAR1 = "29";
	const MAP_OVERLAY_CITY = "30";
	const OPERATING_SYSTEM_FAMILIES = "32";
	const BROWSERS_FAMILIES = "33";
	const USER_ENGAGEMENT_TIMELINE = "34";
	const UNIQUE_USERS_PLAY = "35";
	const MAP_OVERLAY_COUNTRY = "36";
	const MAP_OVERLAY_REGION = "37";
	const TOP_CONTENT_CREATOR = "38";
	const TOP_CONTENT_CONTRIBUTORS = "39";
	const APP_DOMAIN_UNIQUE_ACTIVE_USERS = "40";
	const TOP_SOURCES = "41";
	const VPAAS_USAGE_MULTI = "42";
	const PERCENTILES = "43";
	const CONTENT_REPORT_REASONS = "44";
	const PLAYER_RELATED_INTERACTIONS = "45";
	const PLAYBACK_RATE = "46";
	const TOP_USER_CONTENT = "47";
	const USER_HIGHLIGHTS = "48";
	const PARTNER_USAGE = "201";
	const MAP_OVERLAY_COUNTRY_REALTIME = "10001";
	const MAP_OVERLAY_REGION_REALTIME = "10002";
	const MAP_OVERLAY_CITY_REALTIME = "10003";
	const PLATFORMS_REALTIME = "10004";
	const USERS_OVERVIEW_REALTIME = "10005";
	const QOS_OVERVIEW_REALTIME = "10006";
	const DISCOVERY_REALTIME = "10007";
	const ENTRY_LEVEL_USERS_DISCOVERY_REALTIME = "10008";
	const ENTRY_LEVEL_USERS_STATUS_REALTIME = "10009";
	const PLATFORMS_DISCOVERY_REALTIME = "10010";
	const PLAYBACK_TYPE_REALTIME = "10011";
	const CONTENT_REALTIME = "10012";
	const DISCOVERY_VIEW_REALTIME = "10013";
	const CONTENT_DROPOFF_VPAAS = "20001";
	const TOP_SYNDICATION_VPAAS = "20002";
	const USER_TOP_CONTENT_VPAAS = "20003";
	const USER_USAGE_VPAAS = "20004";
	const PLATFORMS_VPAAS = "20005";
	const OPERATING_SYSTEM_VPAAS = "20006";
	const BROWSERS_VPAAS = "20007";
	const OPERATING_SYSTEM_FAMILIES_VPAAS = "20008";
	const BROWSERS_FAMILIES_VPAAS = "20009";
	const USER_ENGAGEMENT_TIMELINE_VPAAS = "20010";
	const UNIQUE_USERS_PLAY_VPAAS = "20011";
	const MAP_OVERLAY_COUNTRY_VPAAS = "20012";
	const MAP_OVERLAY_REGION_VPAAS = "20013";
	const MAP_OVERLAY_CITY_VPAAS = "20014";
	const TOP_CONTENT_CREATOR_VPAAS = "20015";
	const TOP_CONTENT_CONTRIBUTORS_VPAAS = "20016";
	const TOP_SOURCES_VPAAS = "20017";
	const CONTENT_REPORT_REASONS_VPAAS = "20018";
	const PLAYER_RELATED_INTERACTIONS_VPAAS = "20019";
	const PLAYBACK_RATE_VPAAS = "20020";
	const PARTNER_USAGE_VPAAS = "20021";
	const TOP_PLAYBACK_CONTEXT_VPAAS = "20022";
	const QOE_OVERVIEW = "30001";
	const QOE_EXPERIENCE = "30002";
	const QOE_EXPERIENCE_PLATFORMS = "30003";
	const QOE_EXPERIENCE_COUNTRY = "30004";
	const QOE_EXPERIENCE_REGION = "30005";
	const QOE_EXPERIENCE_CITY = "30006";
	const QOE_EXPERIENCE_BROWSERS_FAMILIES = "30007";
	const QOE_EXPERIENCE_BROWSERS = "30008";
	const QOE_EXPERIENCE_OPERATING_SYSTEM_FAMILIES = "30009";
	const QOE_EXPERIENCE_OPERATING_SYSTEM = "30010";
	const QOE_EXPERIENCE_PLAYER_VERSION = "30011";
	const QOE_EXPERIENCE_ENTRY = "30012";
	const QOE_EXPERIENCE_ISP = "30013";
	const QOE_ENGAGEMENT = "30014";
	const QOE_ENGAGEMENT_PLATFORMS = "30015";
	const QOE_ENGAGEMENT_COUNTRY = "30016";
	const QOE_ENGAGEMENT_REGION = "30017";
	const QOE_ENGAGEMENT_CITY = "30018";
	const QOE_ENGAGEMENT_BROWSERS_FAMILIES = "30019";
	const QOE_ENGAGEMENT_BROWSERS = "30020";
	const QOE_ENGAGEMENT_OPERATING_SYSTEM_FAMILIES = "30021";
	const QOE_ENGAGEMENT_OPERATING_SYSTEM = "30022";
	const QOE_ENGAGEMENT_PLAYER_VERSION = "30023";
	const QOE_ENGAGEMENT_ENTRY = "30024";
	const QOE_ENGAGEMENT_ISP = "30025";
	const QOE_STREAM_QUALITY = "30026";
	const QOE_STREAM_QUALITY_PLATFORMS = "30027";
	const QOE_STREAM_QUALITY_COUNTRY = "30028";
	const QOE_STREAM_QUALITY_REGION = "30029";
	const QOE_STREAM_QUALITY_CITY = "30030";
	const QOE_STREAM_QUALITY_BROWSERS_FAMILIES = "30031";
	const QOE_STREAM_QUALITY_BROWSERS = "30032";
	const QOE_STREAM_QUALITY_OPERATING_SYSTEM_FAMILIES = "30033";
	const QOE_STREAM_QUALITY_OPERATING_SYSTEM = "30034";
	const QOE_STREAM_QUALITY_PLAYER_VERSION = "30035";
	const QOE_STREAM_QUALITY_ENTRY = "30036";
	const QOE_STREAM_QUALITY_ISP = "30037";
	const QOE_ERROR_TRACKING = "30038";
	const QOE_ERROR_TRACKING_CODES = "30039";
	const QOE_ERROR_TRACKING_PLATFORMS = "30040";
	const QOE_ERROR_TRACKING_BROWSERS_FAMILIES = "30041";
	const QOE_ERROR_TRACKING_BROWSERS = "30042";
	const QOE_ERROR_TRACKING_OPERATING_SYSTEM_FAMILIES = "30043";
	const QOE_ERROR_TRACKING_OPERATING_SYSTEM = "30044";
	const QOE_ERROR_TRACKING_PLAYER_VERSION = "30045";
	const QOE_ERROR_TRACKING_ENTRY = "30046";
}

