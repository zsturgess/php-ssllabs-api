# Refactoring branch
Do not use this branch in production.

# PHP-SSLLabs-API
This PHP library provides basic access to the SSL Labs API.

It's built upon the official API documentation at https://github.com/ssllabs/ssllabs-scan/blob/stable/ssllabs-api-docs.md

## Installation

@todo

## Getting Started

```PHP
<?php

use BjoernrDe\SSLLabsApi\ApiClient;

$sslLabs = new ApiClient();

$google = $sslLabs->getHostInformation('www.google.com');

echo $google->getEndpoints()[0]->getGrade();

?>
```

See the full documentation (@todo)

## License

This project is licensed under the GNU GPLv3. See the [complete license](LICENSE):

    LICENSE
    
Usage of the SSL Labs API is also subject to [Qualys' own terms and conditions](https://www.ssllabs.com/about/terms.html)

## Reporting an issue or a feature request

Issues and feature requests are tracked in the Github issue tracker.
