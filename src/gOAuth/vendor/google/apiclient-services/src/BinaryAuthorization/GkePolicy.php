<?php
/*
 * Copyright 2014 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */

namespace Google\Service\BinaryAuthorization;

class GkePolicy extends \Google\Collection
{
  protected $collection_key = 'checkSets';
  /**
   * @var CheckSet[]
   */
  public $checkSets;
  protected $checkSetsType = CheckSet::class;
  protected $checkSetsDataType = 'array';
  /**
   * @var ImageAllowlist
   */
  public $imageAllowlist;
  protected $imageAllowlistType = ImageAllowlist::class;
  protected $imageAllowlistDataType = '';

  /**
   * @param CheckSet[]
   */
  public function setCheckSets($checkSets)
  {
    $this->checkSets = $checkSets;
  }
  /**
   * @return CheckSet[]
   */
  public function getCheckSets()
  {
    return $this->checkSets;
  }
  /**
   * @param ImageAllowlist
   */
  public function setImageAllowlist(ImageAllowlist $imageAllowlist)
  {
    $this->imageAllowlist = $imageAllowlist;
  }
  /**
   * @return ImageAllowlist
   */
  public function getImageAllowlist()
  {
    return $this->imageAllowlist;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GkePolicy::class, 'Google_Service_BinaryAuthorization_GkePolicy');
