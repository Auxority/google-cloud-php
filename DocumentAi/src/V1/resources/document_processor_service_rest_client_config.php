<?php

return [
    'interfaces' => [
        'google.cloud.documentai.v1.DocumentProcessorService' => [
            'BatchProcessDocuments' => [
                'method' => 'post',
                'uriTemplate' => '/v1/{name=projects/*/locations/*/processors/*}:batchProcess',
                'body' => '*',
                'placeholders' => [
                    'name' => [
                        'getters' => [
                            'getName',
                        ],
                    ],
                ],
            ],
            'ProcessDocument' => [
                'method' => 'post',
                'uriTemplate' => '/v1/{name=projects/*/locations/*/processors/*}:process',
                'body' => '*',
                'placeholders' => [
                    'name' => [
                        'getters' => [
                            'getName',
                        ],
                    ],
                ],
            ],
            'ReviewDocument' => [
                'method' => 'post',
                'uriTemplate' => '/v1/{human_review_config=projects/*/locations/*/processors/*/humanReviewConfig}:reviewDocument',
                'body' => '*',
                'placeholders' => [
                    'human_review_config' => [
                        'getters' => [
                            'getHumanReviewConfig',
                        ],
                    ],
                ],
            ],
        ],
        'google.longrunning.Operations' => [
            'ListOperations' => [
                'method' => 'get',
                'uriTemplate' => '/v1/{name=projects/*/locations/*}/operations',
                'placeholders' => [
                    'name' => [
                        'getters' => [
                            'getName',
                        ],
                    ],
                ],
            ],
            'GetOperation' => [
                'method' => 'get',
                'uriTemplate' => '/v1/{name=projects/*/locations/*/operations/*}',
                'placeholders' => [
                    'name' => [
                        'getters' => [
                            'getName',
                        ],
                    ],
                ],
            ],
            'DeleteOperation' => [
                'method' => 'delete',
                'uriTemplate' => '/v1/{name=projects/*/locations/*/operations/*}',
                'placeholders' => [
                    'name' => [
                        'getters' => [
                            'getName',
                        ],
                    ],
                ],
            ],
            'CancelOperation' => [
                'method' => 'post',
                'uriTemplate' => '/v1/{name=projects/*/locations/*/operations/*}:cancel',
                'placeholders' => [
                    'name' => [
                        'getters' => [
                            'getName',
                        ],
                    ],
                ],
            ],
        ],
    ],
];
