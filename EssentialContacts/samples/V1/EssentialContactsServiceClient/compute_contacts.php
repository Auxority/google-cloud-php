<?php
/*
 * Copyright 2022 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     https://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/*
 * GENERATED CODE WARNING
 * This file was automatically generated - do not edit!
 */

require_once __DIR__ . '/../../../vendor/autoload.php';

// [START essentialcontacts_v1_generated_EssentialContactsService_ComputeContacts_sync]
use Google\ApiCore\ApiException;
use Google\ApiCore\PagedListResponse;
use Google\Cloud\EssentialContacts\V1\Contact;
use Google\Cloud\EssentialContacts\V1\EssentialContactsServiceClient;

/**
 * Lists all contacts for the resource that are subscribed to the
 * specified notification categories, including contacts inherited from
 * any parent resources.
 *
 * @param string $formattedParent The name of the resource to compute contacts for.
 *                                Format: organizations/{organization_id},
 *                                folders/{folder_id} or projects/{project_id}
 *                                Please see {@see EssentialContactsServiceClient::projectName()} for help formatting this field.
 */
function compute_contacts_sample(string $formattedParent): void
{
    // Create a client.
    $essentialContactsServiceClient = new EssentialContactsServiceClient();

    // Call the API and handle any network failures.
    try {
        /** @var PagedListResponse $response */
        $response = $essentialContactsServiceClient->computeContacts($formattedParent);

        /** @var Contact $element */
        foreach ($response as $element) {
            printf('Element data: %s' . PHP_EOL, $element->serializeToJsonString());
        }
    } catch (ApiException $ex) {
        printf('Call failed with message: %s' . PHP_EOL, $ex->getMessage());
    }
}

/**
 * Helper to execute the sample.
 *
 * This sample has been automatically generated and should be regarded as a code
 * template only. It will require modifications to work:
 *  - It may require correct/in-range values for request initialization.
 *  - It may require specifying regional endpoints when creating the service client,
 *    please see the apiEndpoint client configuration option for more details.
 */
function callSample(): void
{
    $formattedParent = EssentialContactsServiceClient::projectName('[PROJECT]');

    compute_contacts_sample($formattedParent);
}
// [END essentialcontacts_v1_generated_EssentialContactsService_ComputeContacts_sync]
