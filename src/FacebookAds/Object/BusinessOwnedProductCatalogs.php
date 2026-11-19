<?php
 /*
 * Copyright (c) Meta Platforms, Inc. and affiliates.
 * All rights reserved.
 *
 * This source code is licensed under the license found in the
 * LICENSE file in the root directory of this source tree.
 */

namespace FacebookAds\Object;

use FacebookAds\ApiRequest;
use FacebookAds\Cursor;
use FacebookAds\Http\RequestInterface;
use FacebookAds\TypeChecker;
use FacebookAds\Object\Fields\BusinessOwnedProductCatalogsFields;

/**
 * This class is auto-generated.
 *
 * For any issues or feature requests related to this class, please let us know
 * on github and we'll fix in our codegen framework. We'll not be able to accept
 * pull request for this class.
 *
 */

class BusinessOwnedProductCatalogs extends AbstractCrudObject {

  /**
   * @return BusinessOwnedProductCatalogsFields
   */
  public static function getFieldsEnum() {
    return BusinessOwnedProductCatalogsFields::getInstance();
  }

  protected static function getReferencedEnums() {
    $ref_enums = array();
    return $ref_enums;
  }


  public function genpost(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'additional_vertical_option' => 'string',
      'business_metadata' => 'string',
      'capabilities' => 'string',
      'catalog_segment_filter' => 'string',
      'catalog_segment_product_set_id' => 'string',
      'da_display_settings' => 'string',
      'destination_catalog_settings' => 'string',
      'fields' => 'string',
      'flight_catalog_settings' => 'string',
      'hotel_catalog_settings' => 'string',
      'image_display_settings' => 'string',
      'localization_settings' => 'string',
      'name' => 'string',
      'parent_catalog_id' => 'string',
      'partner_integration' => 'string',
      'store_catalog_settings' => 'string',
      'vertical' => 'string',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/owned_product_catalogs',
      new BusinessOwnedProductCatalogsPost(),
      'EDGE',
      BusinessOwnedProductCatalogsPost::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

}
