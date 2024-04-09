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

namespace Google\Service\Contentwarehouse;

class AssistantApiDeviceCapabilities extends \Google\Collection
{
  protected $collection_key = 'supportedLocale';
  /**
   * @var AssistantApiAndroidIntentCapabilities
   */
  public $androidIntentCapabilities;
  protected $androidIntentCapabilitiesType = AssistantApiAndroidIntentCapabilities::class;
  protected $androidIntentCapabilitiesDataType = '';
  /**
   * @var string
   */
  public $assistantCapability;
  /**
   * @var AssistantApiAudioInput
   */
  public $audioInput;
  protected $audioInputType = AssistantApiAudioInput::class;
  protected $audioInputDataType = '';
  /**
   * @var AssistantApiAudioOutput
   */
  public $audioOutput;
  protected $audioOutputType = AssistantApiAudioOutput::class;
  protected $audioOutputDataType = '';
  /**
   * @var AssistantApiBluetoothCapabilities
   */
  public $bluetoothCapabilities;
  protected $bluetoothCapabilitiesType = AssistantApiBluetoothCapabilities::class;
  protected $bluetoothCapabilitiesDataType = '';
  /**
   * @var AssistantApiCallCapabilities
   */
  public $callCapabilities;
  protected $callCapabilitiesType = AssistantApiCallCapabilities::class;
  protected $callCapabilitiesDataType = '';
  /**
   * @var AssistantApiCameraCapabilities
   */
  public $camera;
  protected $cameraType = AssistantApiCameraCapabilities::class;
  protected $cameraDataType = '';
  /**
   * @var string[]
   */
  public $carUxRestrictions;
  /**
   * @var AssistantApiCastCapabilities
   */
  public $cast;
  protected $castType = AssistantApiCastCapabilities::class;
  protected $castDataType = '';
  /**
   * @var AssistantApiCommunicationUiCapabilities
   */
  public $communicationUiCapabilities;
  protected $communicationUiCapabilitiesType = AssistantApiCommunicationUiCapabilities::class;
  protected $communicationUiCapabilitiesDataType = '';
  /**
   * @var AssistantApiContactLookupCapabilities
   */
  public $contactLookupCapabilities;
  protected $contactLookupCapabilitiesType = AssistantApiContactLookupCapabilities::class;
  protected $contactLookupCapabilitiesDataType = '';
  /**
   * @var AssistantApiDataValidateCapabilities
   */
  public $dataValidateCapabilities;
  protected $dataValidateCapabilitiesType = AssistantApiDataValidateCapabilities::class;
  protected $dataValidateCapabilitiesDataType = '';
  /**
   * @var AssistantApiCoreTypesDeviceId
   */
  public $deviceId;
  protected $deviceIdType = AssistantApiCoreTypesDeviceId::class;
  protected $deviceIdDataType = '';
  /**
   * @var string
   */
  public $deviceUxMode;
  /**
   * @var bool
   */
  public $hasVoiceTelephony;
  /**
   * @var AssistantApiJwnCapabilities
   */
  public $jwnCapabilities;
  protected $jwnCapabilitiesType = AssistantApiJwnCapabilities::class;
  protected $jwnCapabilitiesDataType = '';
  /**
   * @var AssistantApiLensPerceptionCapabilities
   */
  public $lensPerceptionCapabilities;
  protected $lensPerceptionCapabilitiesType = AssistantApiLensPerceptionCapabilities::class;
  protected $lensPerceptionCapabilitiesDataType = '';
  /**
   * @var AssistantApiLocationCapabilities
   */
  public $location;
  protected $locationType = AssistantApiLocationCapabilities::class;
  protected $locationDataType = '';
  /**
   * @var AssistantApiLoggingOnlyData
   */
  public $loggingOnlyData;
  protected $loggingOnlyDataType = AssistantApiLoggingOnlyData::class;
  protected $loggingOnlyDataDataType = '';
  /**
   * @var AssistantApiMessageCapabilities
   */
  public $messageCapabilities;
  protected $messageCapabilitiesType = AssistantApiMessageCapabilities::class;
  protected $messageCapabilitiesDataType = '';
  /**
   * @var AssistantApiMovementCapabilities
   */
  public $movement;
  protected $movementType = AssistantApiMovementCapabilities::class;
  protected $movementDataType = '';
  /**
   * @var string
   */
  public $notificationCapabilities;
  /**
   * @var AssistantApiNotificationOutputRestrictions
   */
  public $notificationOutputRestrictions;
  protected $notificationOutputRestrictionsType = AssistantApiNotificationOutputRestrictions::class;
  protected $notificationOutputRestrictionsDataType = '';
  /**
   * @var AssistantApiOutputRestrictions
   */
  public $outputRestrictions;
  protected $outputRestrictionsType = AssistantApiOutputRestrictions::class;
  protected $outputRestrictionsDataType = '';
  /**
   * @var string
   */
  public $popOnLockscreenCapability;
  /**
   * @var string
   */
  public $safetyRestrictions;
  /**
   * @var AssistantApiScreenCapabilities
   */
  public $screen;
  protected $screenType = AssistantApiScreenCapabilities::class;
  protected $screenDataType = '';
  /**
   * @var AssistantApiSodaCapabilities
   */
  public $sodaCapabilities;
  protected $sodaCapabilitiesType = AssistantApiSodaCapabilities::class;
  protected $sodaCapabilitiesDataType = '';
  /**
   * @var AssistantApiSoftwareCapabilities
   */
  public $software;
  protected $softwareType = AssistantApiSoftwareCapabilities::class;
  protected $softwareDataType = '';
  /**
   * @var AssistantApiSpeechCapabilities
   */
  public $speechCapabilities;
  protected $speechCapabilitiesType = AssistantApiSpeechCapabilities::class;
  protected $speechCapabilitiesDataType = '';
  /**
   * @var string[]
   */
  public $supportedLocale;
  /**
   * @var AssistantApiCoreTypesSurfaceIdentity
   */
  public $surfaceIdentity;
  protected $surfaceIdentityType = AssistantApiCoreTypesSurfaceIdentity::class;
  protected $surfaceIdentityDataType = '';
  /**
   * @var string
   */
  public $surfaceTypeString;
  /**
   * @var AssistantApiSystemNotificationRestrictions
   */
  public $systemNotificationRestrictions;
  protected $systemNotificationRestrictionsType = AssistantApiSystemNotificationRestrictions::class;
  protected $systemNotificationRestrictionsDataType = '';
  /**
   * @var AssistantApiThirdPartyCapabilities
   */
  public $thirdPartyCapabilities;
  protected $thirdPartyCapabilitiesType = AssistantApiThirdPartyCapabilities::class;
  protected $thirdPartyCapabilitiesDataType = '';

  /**
   * @param AssistantApiAndroidIntentCapabilities
   */
  public function setAndroidIntentCapabilities(AssistantApiAndroidIntentCapabilities $androidIntentCapabilities)
  {
    $this->androidIntentCapabilities = $androidIntentCapabilities;
  }
  /**
   * @return AssistantApiAndroidIntentCapabilities
   */
  public function getAndroidIntentCapabilities()
  {
    return $this->androidIntentCapabilities;
  }
  /**
   * @param string
   */
  public function setAssistantCapability($assistantCapability)
  {
    $this->assistantCapability = $assistantCapability;
  }
  /**
   * @return string
   */
  public function getAssistantCapability()
  {
    return $this->assistantCapability;
  }
  /**
   * @param AssistantApiAudioInput
   */
  public function setAudioInput(AssistantApiAudioInput $audioInput)
  {
    $this->audioInput = $audioInput;
  }
  /**
   * @return AssistantApiAudioInput
   */
  public function getAudioInput()
  {
    return $this->audioInput;
  }
  /**
   * @param AssistantApiAudioOutput
   */
  public function setAudioOutput(AssistantApiAudioOutput $audioOutput)
  {
    $this->audioOutput = $audioOutput;
  }
  /**
   * @return AssistantApiAudioOutput
   */
  public function getAudioOutput()
  {
    return $this->audioOutput;
  }
  /**
   * @param AssistantApiBluetoothCapabilities
   */
  public function setBluetoothCapabilities(AssistantApiBluetoothCapabilities $bluetoothCapabilities)
  {
    $this->bluetoothCapabilities = $bluetoothCapabilities;
  }
  /**
   * @return AssistantApiBluetoothCapabilities
   */
  public function getBluetoothCapabilities()
  {
    return $this->bluetoothCapabilities;
  }
  /**
   * @param AssistantApiCallCapabilities
   */
  public function setCallCapabilities(AssistantApiCallCapabilities $callCapabilities)
  {
    $this->callCapabilities = $callCapabilities;
  }
  /**
   * @return AssistantApiCallCapabilities
   */
  public function getCallCapabilities()
  {
    return $this->callCapabilities;
  }
  /**
   * @param AssistantApiCameraCapabilities
   */
  public function setCamera(AssistantApiCameraCapabilities $camera)
  {
    $this->camera = $camera;
  }
  /**
   * @return AssistantApiCameraCapabilities
   */
  public function getCamera()
  {
    return $this->camera;
  }
  /**
   * @param string[]
   */
  public function setCarUxRestrictions($carUxRestrictions)
  {
    $this->carUxRestrictions = $carUxRestrictions;
  }
  /**
   * @return string[]
   */
  public function getCarUxRestrictions()
  {
    return $this->carUxRestrictions;
  }
  /**
   * @param AssistantApiCastCapabilities
   */
  public function setCast(AssistantApiCastCapabilities $cast)
  {
    $this->cast = $cast;
  }
  /**
   * @return AssistantApiCastCapabilities
   */
  public function getCast()
  {
    return $this->cast;
  }
  /**
   * @param AssistantApiCommunicationUiCapabilities
   */
  public function setCommunicationUiCapabilities(AssistantApiCommunicationUiCapabilities $communicationUiCapabilities)
  {
    $this->communicationUiCapabilities = $communicationUiCapabilities;
  }
  /**
   * @return AssistantApiCommunicationUiCapabilities
   */
  public function getCommunicationUiCapabilities()
  {
    return $this->communicationUiCapabilities;
  }
  /**
   * @param AssistantApiContactLookupCapabilities
   */
  public function setContactLookupCapabilities(AssistantApiContactLookupCapabilities $contactLookupCapabilities)
  {
    $this->contactLookupCapabilities = $contactLookupCapabilities;
  }
  /**
   * @return AssistantApiContactLookupCapabilities
   */
  public function getContactLookupCapabilities()
  {
    return $this->contactLookupCapabilities;
  }
  /**
   * @param AssistantApiDataValidateCapabilities
   */
  public function setDataValidateCapabilities(AssistantApiDataValidateCapabilities $dataValidateCapabilities)
  {
    $this->dataValidateCapabilities = $dataValidateCapabilities;
  }
  /**
   * @return AssistantApiDataValidateCapabilities
   */
  public function getDataValidateCapabilities()
  {
    return $this->dataValidateCapabilities;
  }
  /**
   * @param AssistantApiCoreTypesDeviceId
   */
  public function setDeviceId(AssistantApiCoreTypesDeviceId $deviceId)
  {
    $this->deviceId = $deviceId;
  }
  /**
   * @return AssistantApiCoreTypesDeviceId
   */
  public function getDeviceId()
  {
    return $this->deviceId;
  }
  /**
   * @param string
   */
  public function setDeviceUxMode($deviceUxMode)
  {
    $this->deviceUxMode = $deviceUxMode;
  }
  /**
   * @return string
   */
  public function getDeviceUxMode()
  {
    return $this->deviceUxMode;
  }
  /**
   * @param bool
   */
  public function setHasVoiceTelephony($hasVoiceTelephony)
  {
    $this->hasVoiceTelephony = $hasVoiceTelephony;
  }
  /**
   * @return bool
   */
  public function getHasVoiceTelephony()
  {
    return $this->hasVoiceTelephony;
  }
  /**
   * @param AssistantApiJwnCapabilities
   */
  public function setJwnCapabilities(AssistantApiJwnCapabilities $jwnCapabilities)
  {
    $this->jwnCapabilities = $jwnCapabilities;
  }
  /**
   * @return AssistantApiJwnCapabilities
   */
  public function getJwnCapabilities()
  {
    return $this->jwnCapabilities;
  }
  /**
   * @param AssistantApiLensPerceptionCapabilities
   */
  public function setLensPerceptionCapabilities(AssistantApiLensPerceptionCapabilities $lensPerceptionCapabilities)
  {
    $this->lensPerceptionCapabilities = $lensPerceptionCapabilities;
  }
  /**
   * @return AssistantApiLensPerceptionCapabilities
   */
  public function getLensPerceptionCapabilities()
  {
    return $this->lensPerceptionCapabilities;
  }
  /**
   * @param AssistantApiLocationCapabilities
   */
  public function setLocation(AssistantApiLocationCapabilities $location)
  {
    $this->location = $location;
  }
  /**
   * @return AssistantApiLocationCapabilities
   */
  public function getLocation()
  {
    return $this->location;
  }
  /**
   * @param AssistantApiLoggingOnlyData
   */
  public function setLoggingOnlyData(AssistantApiLoggingOnlyData $loggingOnlyData)
  {
    $this->loggingOnlyData = $loggingOnlyData;
  }
  /**
   * @return AssistantApiLoggingOnlyData
   */
  public function getLoggingOnlyData()
  {
    return $this->loggingOnlyData;
  }
  /**
   * @param AssistantApiMessageCapabilities
   */
  public function setMessageCapabilities(AssistantApiMessageCapabilities $messageCapabilities)
  {
    $this->messageCapabilities = $messageCapabilities;
  }
  /**
   * @return AssistantApiMessageCapabilities
   */
  public function getMessageCapabilities()
  {
    return $this->messageCapabilities;
  }
  /**
   * @param AssistantApiMovementCapabilities
   */
  public function setMovement(AssistantApiMovementCapabilities $movement)
  {
    $this->movement = $movement;
  }
  /**
   * @return AssistantApiMovementCapabilities
   */
  public function getMovement()
  {
    return $this->movement;
  }
  /**
   * @param string
   */
  public function setNotificationCapabilities($notificationCapabilities)
  {
    $this->notificationCapabilities = $notificationCapabilities;
  }
  /**
   * @return string
   */
  public function getNotificationCapabilities()
  {
    return $this->notificationCapabilities;
  }
  /**
   * @param AssistantApiNotificationOutputRestrictions
   */
  public function setNotificationOutputRestrictions(AssistantApiNotificationOutputRestrictions $notificationOutputRestrictions)
  {
    $this->notificationOutputRestrictions = $notificationOutputRestrictions;
  }
  /**
   * @return AssistantApiNotificationOutputRestrictions
   */
  public function getNotificationOutputRestrictions()
  {
    return $this->notificationOutputRestrictions;
  }
  /**
   * @param AssistantApiOutputRestrictions
   */
  public function setOutputRestrictions(AssistantApiOutputRestrictions $outputRestrictions)
  {
    $this->outputRestrictions = $outputRestrictions;
  }
  /**
   * @return AssistantApiOutputRestrictions
   */
  public function getOutputRestrictions()
  {
    return $this->outputRestrictions;
  }
  /**
   * @param string
   */
  public function setPopOnLockscreenCapability($popOnLockscreenCapability)
  {
    $this->popOnLockscreenCapability = $popOnLockscreenCapability;
  }
  /**
   * @return string
   */
  public function getPopOnLockscreenCapability()
  {
    return $this->popOnLockscreenCapability;
  }
  /**
   * @param string
   */
  public function setSafetyRestrictions($safetyRestrictions)
  {
    $this->safetyRestrictions = $safetyRestrictions;
  }
  /**
   * @return string
   */
  public function getSafetyRestrictions()
  {
    return $this->safetyRestrictions;
  }
  /**
   * @param AssistantApiScreenCapabilities
   */
  public function setScreen(AssistantApiScreenCapabilities $screen)
  {
    $this->screen = $screen;
  }
  /**
   * @return AssistantApiScreenCapabilities
   */
  public function getScreen()
  {
    return $this->screen;
  }
  /**
   * @param AssistantApiSodaCapabilities
   */
  public function setSodaCapabilities(AssistantApiSodaCapabilities $sodaCapabilities)
  {
    $this->sodaCapabilities = $sodaCapabilities;
  }
  /**
   * @return AssistantApiSodaCapabilities
   */
  public function getSodaCapabilities()
  {
    return $this->sodaCapabilities;
  }
  /**
   * @param AssistantApiSoftwareCapabilities
   */
  public function setSoftware(AssistantApiSoftwareCapabilities $software)
  {
    $this->software = $software;
  }
  /**
   * @return AssistantApiSoftwareCapabilities
   */
  public function getSoftware()
  {
    return $this->software;
  }
  /**
   * @param AssistantApiSpeechCapabilities
   */
  public function setSpeechCapabilities(AssistantApiSpeechCapabilities $speechCapabilities)
  {
    $this->speechCapabilities = $speechCapabilities;
  }
  /**
   * @return AssistantApiSpeechCapabilities
   */
  public function getSpeechCapabilities()
  {
    return $this->speechCapabilities;
  }
  /**
   * @param string[]
   */
  public function setSupportedLocale($supportedLocale)
  {
    $this->supportedLocale = $supportedLocale;
  }
  /**
   * @return string[]
   */
  public function getSupportedLocale()
  {
    return $this->supportedLocale;
  }
  /**
   * @param AssistantApiCoreTypesSurfaceIdentity
   */
  public function setSurfaceIdentity(AssistantApiCoreTypesSurfaceIdentity $surfaceIdentity)
  {
    $this->surfaceIdentity = $surfaceIdentity;
  }
  /**
   * @return AssistantApiCoreTypesSurfaceIdentity
   */
  public function getSurfaceIdentity()
  {
    return $this->surfaceIdentity;
  }
  /**
   * @param string
   */
  public function setSurfaceTypeString($surfaceTypeString)
  {
    $this->surfaceTypeString = $surfaceTypeString;
  }
  /**
   * @return string
   */
  public function getSurfaceTypeString()
  {
    return $this->surfaceTypeString;
  }
  /**
   * @param AssistantApiSystemNotificationRestrictions
   */
  public function setSystemNotificationRestrictions(AssistantApiSystemNotificationRestrictions $systemNotificationRestrictions)
  {
    $this->systemNotificationRestrictions = $systemNotificationRestrictions;
  }
  /**
   * @return AssistantApiSystemNotificationRestrictions
   */
  public function getSystemNotificationRestrictions()
  {
    return $this->systemNotificationRestrictions;
  }
  /**
   * @param AssistantApiThirdPartyCapabilities
   */
  public function setThirdPartyCapabilities(AssistantApiThirdPartyCapabilities $thirdPartyCapabilities)
  {
    $this->thirdPartyCapabilities = $thirdPartyCapabilities;
  }
  /**
   * @return AssistantApiThirdPartyCapabilities
   */
  public function getThirdPartyCapabilities()
  {
    return $this->thirdPartyCapabilities;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AssistantApiDeviceCapabilities::class, 'Google_Service_Contentwarehouse_AssistantApiDeviceCapabilities');
