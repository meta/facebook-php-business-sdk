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

class LiveVideoAdCampaignConfigFields extends AbstractEnum {

  const DECLARED_LIVE_SECONDS = 'declared_live_seconds';
  const ID = 'id';
  const LIVE_CADENCE = 'live_cadence';
  const LIVE_VIDEO_AD_TYPE = 'live_video_ad_type';

  public function getFieldTypes() {
    return array(
      'declared_live_seconds' => 'unsigned int',
      'id' => 'string',
      'live_cadence' => 'string',
      'live_video_ad_type' => 'string',
    );
  }
}
