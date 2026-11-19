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

class BusinessOwnedProductCatalogsPostFields extends AbstractEnum {

  const AD_ACCOUNT_TO_COLLABORATIVE_ADS_SHARE_SETTINGS = 'ad_account_to_collaborative_ads_share_settings';
  const AGENCIES = 'agencies';
  const AGENCY_COLLABORATIVE_ADS_SHARE_SETTINGS = 'agency_collaborative_ads_share_settings';
  const ASSIGNED_USERS = 'assigned_users';
  const BUSINESS = 'business';
  const CAN_ADVERTISE = 'can_advertise';
  const CAN_CATALOG_SEGMENT_CREATE_CAMPAIGN = 'can_catalog_segment_create_campaign';
  const CAN_CREATE_CATALOG_SEGMENTS = 'can_create_catalog_segments';
  const CAN_MANAGE = 'can_manage';
  const CAPABILITIES = 'capabilities';
  const CAPABILITY_FEATURES = 'capability_features';
  const CATALOG_DUPLICATE_DATA = 'catalog_duplicate_data';
  const CATALOG_ITEM_TYPE = 'catalog_item_type';
  const CATALOG_SEGMENT_FILTER = 'catalog_segment_filter';
  const CATALOG_SEGMENT_TYPE = 'catalog_segment_type';
  const CATALOG_SEGMENTS = 'catalog_segments';
  const CATALOG_STORE = 'catalog_store';
  const CHECK_EXTERNAL_EVENT_SOURCE_ASSOCIATION = 'check_external_event_source_association';
  const CHECKOUT_URLS = 'checkout_urls';
  const COLLABORATIVE_ADS_SHARE_SETTINGS = 'collaborative_ads_share_settings';
  const COMMERCE_MERCHANT_SETTINGS = 'commerce_merchant_settings';
  const CPAS_CATALOG_COMPLIANCE_STATUS = 'cpas_catalog_compliance_status';
  const CPAS_CUSTOMIZATION_ENABLED_FIELDS = 'cpas_customization_enabled_fields';
  const CPAS_IS_MPA_LITE_OMNI_ENABLED_CATALOG_SEGMENT = 'cpas_is_mpa_lite_omni_enabled_catalog_segment';
  const CPAS_PARENT_CATALOG_SETTINGS = 'cpas_parent_catalog_settings';
  const CREATION_SOURCE = 'creation_source';
  const CREATOR_USER = 'creator_user';
  const DA_DISPLAY_SETTINGS = 'da_display_settings';
  const DA_PE_SPEND_28D = 'da_pe_spend_28d';
  const DA_SPEND_28D = 'da_spend_28d';
  const DATA_SOURCES = 'data_sources';
  const DEFAULT_IMAGE_URL = 'default_image_url';
  const DESTINATIONS = 'destinations';
  const DIAGNOSTICS = 'diagnostics';
  const DOMINANT_PIXEL = 'dominant_pixel';
  const DPA_ELIGIBLE_AD_ACCOUNTS = 'dpa_eligible_ad_accounts';
  const EVENT_STATS = 'event_stats';
  const EXTERNAL_EVENT_SOURCES = 'external_event_sources';
  const FALLBACK_IMAGE_URL = 'fallback_image_url';
  const FEED_COUNT = 'feed_count';
  const HAS_EXTERNAL_EVENT_SOURCE_ASSOCIATED_SKIP_PRIVACY = 'has_external_event_source_associated_skip_privacy';
  const HAS_ISSUES = 'has_issues';
  const HAS_LOCALIZED_OVERRIDES = 'has_localized_overrides';
  const HAS_MULTIPLE_PARTNER_INTEGRATIONS_FOR_PLATFORM = 'has_multiple_partner_integrations_for_platform';
  const HOME_LISTINGS = 'home_listings';
  const HOTELS = 'hotels';
  const HPI_COUNT = 'hpi_count';
  const ID = 'id';
  const IS_CATALOG_SEGMENT = 'is_catalog_segment';
  const IS_ELIGIBLE_FOR_CATEGORY_TARGETING = 'is_eligible_for_category_targeting';
  const IS_ELIGIBLE_FOR_CHECKOUT = 'is_eligible_for_checkout';
  const IS_ELIGIBLE_FOR_VALUE_OPTIMIZATION = 'is_eligible_for_value_optimization';
  const IS_LOCAL_CATALOG = 'is_local_catalog';
  const LOCALIZATION_SETTINGS = 'localization_settings';
  const NAME = 'name';
  const OWNER_BUSINESS = 'owner_business';
  const PAGE = 'page';
  const PARENT_CATALOG_ID = 'parent_catalog_id';
  const PRODUCT_COUNT = 'product_count';
  const PRODUCT_FEEDS = 'product_feeds';
  const PRODUCT_GROUPS = 'product_groups';
  const PRODUCT_SETS = 'product_sets';
  const PRODUCTS = 'products';
  const SMART_PIXEL_SETTINGS = 'smart_pixel_settings';
  const SOURCE_APP = 'source_app';
  const STORE_CATALOG_SETTINGS = 'store_catalog_settings';
  const SUB_VERTICAL = 'sub_vertical';
  const SUGGESTED_CONVERSION_EVENT = 'suggested_conversion_event';
  const USER_TASKS = 'user_tasks';
  const VEHICLES = 'vehicles';
  const VERTICAL = 'vertical';
  const WEBSITE_ONBOARDING_SETTINGS = 'website_onboarding_settings';

  public function getFieldTypes() {
    return array(
      'ad_account_to_collaborative_ads_share_settings' => 'object',
      'agencies' => 'object',
      'agency_collaborative_ads_share_settings' => 'object',
      'assigned_users' => 'object',
      'business' => 'object',
      'can_advertise' => 'bool',
      'can_catalog_segment_create_campaign' => 'bool',
      'can_create_catalog_segments' => 'bool',
      'can_manage' => 'bool',
      'capabilities' => 'list<object>',
      'capability_features' => 'list<string>',
      'catalog_duplicate_data' => 'object',
      'catalog_item_type' => 'CatalogItemType',
      'catalog_segment_filter' => 'string',
      'catalog_segment_type' => 'string',
      'catalog_segments' => 'object',
      'catalog_store' => 'object',
      'check_external_event_source_association' => 'string',
      'checkout_urls' => 'list<object>',
      'collaborative_ads_share_settings' => 'object',
      'commerce_merchant_settings' => 'object',
      'cpas_catalog_compliance_status' => 'string',
      'cpas_customization_enabled_fields' => 'list<string>',
      'cpas_is_mpa_lite_omni_enabled_catalog_segment' => 'bool',
      'cpas_parent_catalog_settings' => 'object',
      'creation_source' => 'string',
      'creator_user' => 'object',
      'da_display_settings' => 'object',
      'da_pe_spend_28d' => 'float',
      'da_spend_28d' => 'float',
      'data_sources' => 'object',
      'default_image_url' => 'string',
      'destinations' => 'object',
      'diagnostics' => 'object',
      'dominant_pixel' => 'string',
      'dpa_eligible_ad_accounts' => 'object',
      'event_stats' => 'object',
      'external_event_sources' => 'object',
      'fallback_image_url' => 'list<string>',
      'feed_count' => 'int',
      'has_external_event_source_associated_skip_privacy' => 'bool',
      'has_issues' => 'bool',
      'has_localized_overrides' => 'bool',
      'has_multiple_partner_integrations_for_platform' => 'bool',
      'home_listings' => 'object',
      'hotels' => 'object',
      'hpi_count' => 'int',
      'id' => 'int',
      'is_catalog_segment' => 'bool',
      'is_eligible_for_category_targeting' => 'bool',
      'is_eligible_for_checkout' => 'bool',
      'is_eligible_for_value_optimization' => 'bool',
      'is_local_catalog' => 'bool',
      'localization_settings' => 'object',
      'name' => 'string',
      'owner_business' => 'object',
      'page' => 'object',
      'parent_catalog_id' => 'int',
      'product_count' => 'int',
      'product_feeds' => 'object',
      'product_groups' => 'object',
      'product_sets' => 'object',
      'products' => 'object',
      'smart_pixel_settings' => 'object',
      'source_app' => 'object',
      'store_catalog_settings' => 'object',
      'sub_vertical' => 'string',
      'suggested_conversion_event' => 'SuggestedConversionEvent',
      'user_tasks' => 'object',
      'vehicles' => 'object',
      'vertical' => 'string',
      'website_onboarding_settings' => 'object',
    );
  }
}
