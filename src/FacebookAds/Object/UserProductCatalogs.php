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
use FacebookAds\Object\Fields\UserProductCatalogsFields;

/**
 * This class is auto-generated.
 *
 * For any issues or feature requests related to this class, please let us know
 * on github and we'll fix in our codegen framework. We'll not be able to accept
 * pull request for this class.
 *
 */

class UserProductCatalogs extends AbstractCrudObject {

  /**
   * @return UserProductCatalogsFields
   */
  public static function getFieldsEnum() {
    return UserProductCatalogsFields::getInstance();
  }

  protected static function getReferencedEnums() {
    $ref_enums = array();
    return $ref_enums;
  }


  public function genget(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'after' => 'string',
      'before' => 'string',
      'business_catalogs_with_role_filter' => 'string',
      'date_format' => 'string',
      'exclude_user_owned_catalog_segments_filter' => 'string',
      'fields' => 'string',
      'limit' => 'int',
      'name_filter' => 'string',
      'owner_types' => 'string',
      'parent_catalogs_only' => 'string',
      'sort' => 'string',
      'summary' => 'string',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/product_catalogs',
      new UserProductCatalogsGet(),
      'EDGE',
      UserProductCatalogsGet::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

}
