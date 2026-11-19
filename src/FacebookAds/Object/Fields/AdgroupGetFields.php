<?php
 /*
 * Copyright (c) Meta Platforms, Inc. and affiliates.
 * All rights reserved.
 *
 * This source code is licensed under the license found in the
 * LICENSE file in the root directory of this source tree.
 */

namespace FacebookAds\Object\Fields;

use FacebookAds\Enum\AbstractEnum;

/**
 * This class is auto-generated.
 *
 * For any issues or feature requests related to this class, please let us know
 * on github and we'll fix in our codegen framework. We'll not be able to accept
 * pull request for this class.
 *
 */

class AdgroupGetFields extends AbstractEnum {

  const ACCOUNT_ID = 'account_id';
  const AD_ACTIVE_TIME = 'ad_active_time';
  const AD_REVIEW_FEEDBACK = 'ad_review_feedback';
  const AD_SCHEDULE_END_TIME = 'ad_schedule_end_time';
  const AD_SCHEDULE_START_TIME = 'ad_schedule_start_time';
  const AD_STUDIES = 'ad_studies';
  const ADCREATIVES = 'adcreatives';
  const ADLABELS = 'adlabels';
  const ADRULES_GOVERNED = 'adrules_governed';
  const ADSET = 'adset';
  const ADSET_ID = 'adset_id';
  const BID_AMOUNT = 'bid_amount';
  const BID_INFO = 'bid_info';
  const BID_TYPE = 'bid_type';
  const CAMPAIGN = 'campaign';
  const CAMPAIGN_ID = 'campaign_id';
  const CAN_AGGREGATE_SOCIAL_FEEDBACK_ON_EDIT = 'can_aggregate_social_feedback_on_edit';
  const CLICKS = 'clicks';
  const CONFIGURED_STATUS = 'configured_status';
  const CONVERSION_DOMAIN = 'conversion_domain';
  const CONVERSION_SPECS = 'conversion_specs';
  const COPIES = 'copies';
  const CREATED_TIME = 'created_time';
  const CREATIVE = 'creative';
  const CREATIVE_ASSET_GROUPS_SPEC = 'creative_asset_groups_spec';
  const CREATIVE_AUDIENCE_PAIRING_PERSONA = 'creative_audience_pairing_persona';
  const CREATIVE_BODY = 'creative_body';
  const CREATIVE_HISTORY = 'creative_history';
  const CREATIVE_ID = 'creative_id';
  const CREATIVE_LINK_URL = 'creative_link_url';
  const CREATIVE_TITLE = 'creative_title';
  const DELIVERY_INFO = 'delivery_info';
  const DELIVERY_STATUS = 'delivery_status';
  const DEMOLINK_HASH = 'demolink_hash';
  const DISPLAY_SEQUENCE = 'display_sequence';
  const EFFECTIVE_STATUS = 'effective_status';
  const ENGAGEMENT_AUDIENCE = 'engagement_audience';
  const FAILED_DELIVERY_CHECKS = 'failed_delivery_checks';
  const FREQUENCY = 'frequency';
  const ID = 'id';
  const IMPRESSIONS = 'impressions';
  const INSIGHTS = 'insights';
  const IS_AUTOBID = 'is_autobid';
  const ISSUES_INFO = 'issues_info';
  const LAST_UPDATED_BY_APP_ID = 'last_updated_by_app_id';
  const LEADGENS = 'leadgens';
  const LEADS = 'leads';
  const META_REWARD_ADGROUP_STATUS = 'meta_reward_adgroup_status';
  const METADATA = 'metadata';
  const MRL_SETTINGS = 'mrl_settings';
  const NAME = 'name';
  const OBJECTIVE_FOR_COST = 'objective_for_cost';
  const OBJECTIVE_FOR_RESULTS = 'objective_for_results';
  const PREVIEW_LINK = 'preview_link';
  const PREVIEW_SHAREABLE_LINK = 'preview_shareable_link';
  const PREVIEWS = 'previews';
  const PRIORITY = 'priority';
  const RECOMMENDATIONS = 'recommendations';
  const RELATED_MEDIA_USER_OPTED_OUT = 'related_media_user_opted_out';
  const RELATED_PAGE_POST_ID = 'related_page_post_id';
  const RESULT = 'result';
  const RESULT_RATE = 'result_rate';
  const SOURCE_AD = 'source_ad';
  const SOURCE_AD_ID = 'source_ad_id';
  const SOURCE_APP_ID = 'source_app_id';
  const SPECIAL_AD_CATEGORIES = 'special_ad_categories';
  const SPENT = 'spent';
  const STATUS = 'status';
  const TARGETING = 'targeting';
  const TARGETINGSENTENCELINES = 'targetingsentencelines';
  const TRACKING_AND_CONVERSION_WITH_DEFAULTS = 'tracking_and_conversion_with_defaults';
  const TRACKING_SPECS = 'tracking_specs';
  const UPDATED_TIME = 'updated_time';
  const VIEW_TAGS = 'view_tags';
  const YESTERDAY_SPENT = 'yesterday_spent';

  public function getFieldTypes() {
    return array(
      'account_id' => 'string',
      'ad_active_time' => 'string',
      'ad_review_feedback' => 'object',
      'ad_schedule_end_time' => 'mixed',
      'ad_schedule_start_time' => 'mixed',
      'ad_studies' => 'object',
      'adcreatives' => 'object',
      'adlabels' => 'list<object>',
      'adrules_governed' => 'object',
      'adset' => 'object',
      'adset_id' => 'int',
      'bid_amount' => 'int',
      'bid_info' => 'map<int, int>',
      'bid_type' => 'string',
      'campaign' => 'object',
      'campaign_id' => 'int',
      'can_aggregate_social_feedback_on_edit' => 'bool',
      'clicks' => 'int',
      'configured_status' => 'string',
      'conversion_domain' => 'string',
      'conversion_specs' => 'list<object>',
      'copies' => 'object',
      'created_time' => 'mixed',
      'creative' => 'object',
      'creative_asset_groups_spec' => 'object',
      'creative_audience_pairing_persona' => 'object',
      'creative_body' => 'string',
      'creative_history' => 'list<object>',
      'creative_id' => 'int',
      'creative_link_url' => 'string',
      'creative_title' => 'string',
      'delivery_info' => 'object',
      'delivery_status' => 'object',
      'demolink_hash' => 'string',
      'display_sequence' => 'int',
      'effective_status' => 'string',
      'engagement_audience' => 'bool',
      'failed_delivery_checks' => 'list<object>',
      'frequency' => 'float',
      'id' => 'int',
      'impressions' => 'int',
      'insights' => 'object',
      'is_autobid' => 'bool',
      'issues_info' => 'list<object>',
      'last_updated_by_app_id' => 'string',
      'leadgens' => 'string',
      'leads' => 'object',
      'meta_reward_adgroup_status' => 'string',
      'metadata' => 'object',
      'mrl_settings' => 'object',
      'name' => 'string',
      'objective_for_cost' => 'string',
      'objective_for_results' => 'string',
      'preview_link' => 'string',
      'preview_shareable_link' => 'string',
      'previews' => 'object',
      'priority' => 'int',
      'recommendations' => 'list<object>',
      'related_media_user_opted_out' => 'bool',
      'related_page_post_id' => 'string',
      'result' => 'string',
      'result_rate' => 'string',
      'source_ad' => 'object',
      'source_ad_id' => 'string',
      'source_app_id' => 'string',
      'special_ad_categories' => 'list<string>',
      'spent' => 'string',
      'status' => 'string',
      'targeting' => 'object',
      'targetingsentencelines' => 'object',
      'tracking_and_conversion_with_defaults' => 'object',
      'tracking_specs' => 'list<object>',
      'updated_time' => 'mixed',
      'view_tags' => 'list<string>',
      'yesterday_spent' => 'string',
    );
  }
}
