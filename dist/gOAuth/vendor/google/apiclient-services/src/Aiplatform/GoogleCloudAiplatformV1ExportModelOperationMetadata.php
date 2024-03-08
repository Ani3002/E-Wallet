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

namespace Google\Service\Aiplatform;

class GoogleCloudAiplatformV1ExportModelOperationMetadata extends \Google\Model
{
  /**
   * @var GoogleCloudAiplatformV1GenericOperationMetadata
   */
  public $genericMetadata;
  protected $genericMetadataType = GoogleCloudAiplatformV1GenericOperationMetadata::class;
  protected $genericMetadataDataType = '';
  /**
   * @var GoogleCloudAiplatformV1ExportModelOperationMetadataOutputInfo
   */
  public $outputInfo;
  protected $outputInfoType = GoogleCloudAiplatformV1ExportModelOperationMetadataOutputInfo::class;
  protected $outputInfoDataType = '';

  /**
   * @param GoogleCloudAiplatformV1GenericOperationMetadata
   */
  public function setGenericMetadata(GoogleCloudAiplatformV1GenericOperationMetadata $genericMetadata)
  {
    $this->genericMetadata = $genericMetadata;
  }
  /**
   * @return GoogleCloudAiplatformV1GenericOperationMetadata
   */
  public function getGenericMetadata()
  {
    return $this->genericMetadata;
  }
  /**
   * @param GoogleCloudAiplatformV1ExportModelOperationMetadataOutputInfo
   */
  public function setOutputInfo(GoogleCloudAiplatformV1ExportModelOperationMetadataOutputInfo $outputInfo)
  {
    $this->outputInfo = $outputInfo;
  }
  /**
   * @return GoogleCloudAiplatformV1ExportModelOperationMetadataOutputInfo
   */
  public function getOutputInfo()
  {
    return $this->outputInfo;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudAiplatformV1ExportModelOperationMetadata::class, 'Google_Service_Aiplatform_GoogleCloudAiplatformV1ExportModelOperationMetadata');
