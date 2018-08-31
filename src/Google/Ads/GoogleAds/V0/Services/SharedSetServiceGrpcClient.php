<?php
// GENERATED CODE -- DO NOT EDIT!

// Original file comments:
// Copyright 2018 Google LLC
//
// Licensed under the Apache License, Version 2.0 (the "License");
// you may not use this file except in compliance with the License.
// You may obtain a copy of the License at
//
//     http://www.apache.org/licenses/LICENSE-2.0
//
// Unless required by applicable law or agreed to in writing, software
// distributed under the License is distributed on an "AS IS" BASIS,
// WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
// See the License for the specific language governing permissions and
// limitations under the License.
//
namespace Google\Ads\GoogleAds\V0\Services;

/**
 * Service to manage shared sets.
 */
class SharedSetServiceGrpcClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * Returns the requested shared set in full detail.
     * @param \Google\Ads\GoogleAds\V0\Services\GetSharedSetRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetSharedSet(\Google\Ads\GoogleAds\V0\Services\GetSharedSetRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.ads.googleads.v0.services.SharedSetService/GetSharedSet',
        $argument,
        ['\Google\Ads\GoogleAds\V0\Resources\SharedSet', 'decode'],
        $metadata, $options);
    }

    /**
     * Creates, updates, or removes shared sets. Operation statuses are returned.
     * @param \Google\Ads\GoogleAds\V0\Services\MutateSharedSetsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function MutateSharedSets(\Google\Ads\GoogleAds\V0\Services\MutateSharedSetsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.ads.googleads.v0.services.SharedSetService/MutateSharedSets',
        $argument,
        ['\Google\Ads\GoogleAds\V0\Services\MutateSharedSetsResponse', 'decode'],
        $metadata, $options);
    }

}