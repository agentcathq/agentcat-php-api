# agentcat/api

Generated HTTP client for the [AgentCat](https://agentcat.com) API.

## You probably want `agentcat/sdk` instead

This is the low-level generated transport, produced from the AgentCat OpenAPI
specification and consumed by
[`agentcat/sdk`](https://packagist.org/packages/agentcat/sdk), which is the
supported integration surface for MCP server authors.

Do not edit this repository by hand. Every release is regenerated from the
specification, which replaces all files except `LICENSE`.

## Installation

```bash
composer require agentcat/api
```

Requires PHP 8.1 or later with the `curl`, `json`, and `mbstring` extensions.

## Usage

```php
<?php
require_once __DIR__ . '/vendor/autoload.php';

use AgentCat\Api\Api\EventsApi;
use AgentCat\Api\Configuration;
use AgentCat\Api\Model\PublishEventRequest;

$config = Configuration::getDefaultConfiguration()
    ->setApiKey('Authorization', 'YOUR_API_KEY')
    ->setApiKeyPrefix('Authorization', 'Token');

$eventsApi = new EventsApi(null, $config);
$eventsApi->publishEvent(new PublishEventRequest([
    'project_id' => 'proj_...',
    'event_type' => 'mcp:tools/call',
]));
```

Every endpoint and model is documented in [`docs/Api`](docs/Api) and
[`docs/Model`](docs/Model).

## Other languages

| Language   | Generated client                                                    |
| ---------- | ------------------------------------------------------------------- |
| TypeScript | [`agentcat-api`](https://www.npmjs.com/package/agentcat-api)          |
| Python     | [`agentcat-api`](https://pypi.org/project/agentcat-api/)              |
| Go         | [`agentcat-go-api`](https://github.com/agentcathq/agentcat-go-api)    |
| Ruby       | [`agentcat-api`](https://rubygems.org/gems/agentcat-api)              |
| Java       | [`com.agentcat:api`](https://central.sonatype.com/artifact/com.agentcat/api) |
| .NET       | [`AgentCat.Api`](https://www.nuget.org/packages/AgentCat.Api)         |
| Rust       | [`agentcat-api`](https://crates.io/crates/agentcat-api)               |

## License

MIT © AgentCat, Inc.
