# Ittybit PHP Library

[![fern shield](https://img.shields.io/badge/%F0%9F%8C%BF-SDK%20generated%20by%20Fern-brightgreen)](https://github.com/fern-api/fern)
[![php shield](https://img.shields.io/badge/php-packagist-pink)](https://packagist.org/packages/ittybit/ittybit)

The Ittybit PHP library provides convenient access to the Ittybit API from PHP.

## Requirements

Use of the Ittybit PHP SDK requires:

- PHP ^8.1

## Installation

Use Composer to configure and install the Ittybit PHP SDK:

```shell
composer require ittybit/ittybit
```

## Usage

```php
use Ittybit\IttybitClient;

$client = new IttybitClient(
    acceptVersion: "YOUR_ACCEPT_VERSION",
    token: "YOUR_TOKEN"
);

// Example usage with automations
$response = $client->automations->create();
```

## Instantiation

To get started with the Ittybit SDK, instantiate the `IttybitClient` class as follows:

```php
use Ittybit\IttybitClient;

$client = new IttybitClient(
    acceptVersion: "YOUR_ACCEPT_VERSION",
    token: "YOUR_TOKEN"
);
```

### Configuration Options

The SDK allows you to configure various options when creating the client:

```php
use Ittybit\IttybitClient;
use GuzzleHttp\Client;

$client = new IttybitClient(
    acceptVersion: "YOUR_ACCEPT_VERSION",
    token: "YOUR_TOKEN",
    options: [
        'baseUrl' => 'https://api.ittybit.com', // Custom base URL
        'client' => new Client(), // Custom HTTP client
        'maxRetries' => 3, // Maximum number of retries
        'timeout' => 30.0, // Request timeout in seconds
        'headers' => [ // Additional headers
            'X-Custom-Header' => 'value'
        ]
    ]
);
```

## Available Clients

The SDK provides several specialized clients for different API areas:

```php
$client->automations; // AutomationsClient
$client->files;      // FilesClient
$client->media;      // MediaClient
$client->tasks;      // TasksClient
$client->signatures; // SignaturesClient
```

## Exception Handling

When the API returns a non-success status code (4xx or 5xx response), an exception will be thrown:

```php
try {
    $client->automations->create([
        'name' => 'Test Automation',
        'description' => 'Test Description',
        'trigger' => [
            'event' => 'upload.completed',
            'conditions' => [
                'prop' => 'file.type',
                'value' => 'video/*'
            ]
        ],
        'workflow' => [
            [
                'kind' => 'video',
                'format' => 'mp4',
                'resize' => 'fit',
                'width' => 1920,
                'height' => 1080,
                'label' => 'web_1080p_mp4'
            ]
        ]
    ]);
} catch (\Exception $e) {
    echo 'Error: ' . $e->getMessage() . "\n";
    // Handle the error appropriately
}
```

## Advanced

### Custom HTTP Client

This SDK is built to work with any HTTP client that implements Guzzle's `ClientInterface`. By default, if no client
is provided, the SDK will use Guzzle's default HTTP client. However, you can pass your own client that adheres to
`ClientInterface`:

```php
use GuzzleHttp\Client;
use Ittybit\IttybitClient;

$customClient = new Client([
    'timeout' => 5.0,
]);

$client = new IttybitClient(
    acceptVersion: "YOUR_ACCEPT_VERSION",
    token: "YOUR_TOKEN",
    options: [
        'client' => $customClient
    ]
);
```

## Contributing

While we value open-source contributions to this SDK, this library
is generated programmatically. Additions made directly to this library
would have to be moved over to our generation code, otherwise they would
be overwritten upon the next generated release. Feel free to open a PR as a
proof of concept, but know that we will not be able to merge it as-is.
We suggest opening an issue first to discuss with us!

On the other hand, contributions to the README are always very welcome!
