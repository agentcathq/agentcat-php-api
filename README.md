# agentcat/api

Typed request models for the [AgentCat](https://agentcat.com) public API.

## You probably want `agentcat/sdk` instead

This package holds the event publishing request and response models,
generated from the AgentCat OpenAPI specification. It is consumed by
[`agentcat/sdk`](https://packagist.org/packages/agentcat/sdk), the supported
integration surface for MCP server authors, which sends the events.

Do not edit this repository by hand. Every release is regenerated from the
specification, which replaces all files except `LICENSE`.

## Installation

```bash
composer require agentcat/api
```

Requires PHP 8.3 or later with the `json` extension. The package has no other
dependencies.

## Usage

The models are immutable value objects. `json_encode()` produces the body that
`POST https://api.agentcat.com/v1/public/events/` accepts:

```php
<?php
require_once __DIR__ . '/vendor/autoload.php';

use AgentCat\Api\Model\PublishEventRequest;

$event = new PublishEventRequest(
    projectId: 'proj_...',
    id: 'evt_...',
    eventType: 'mcp:tools/call',
    timestamp: new DateTimeImmutable(),
    resourceName: 'get_weather',
);

$body = json_encode($event, JSON_THROW_ON_ERROR);
```

Call the constructors with named arguments: parameter order is not part of
the API and can change between releases. The server drops events without
`id`, `event_type` or `timestamp`, although the specification marks them
optional.

The encoding follows the API contract:

- Empty free-form objects (`parameters`, `response`, `error`, `identify_data`,
  `properties`) and `tags` encode as `{}`, never `[]`. This applies to the
  top-level value only: pass `stdClass` for empty objects nested inside it.
- `timestamp` encodes in UTC with milliseconds, for example
  `2026-10-16T12:00:00.123Z`.
- `session_id` is always sent; `null` asks the server to assign a session.
- Other optional fields are omitted when unset.
- `event_type` is an open string. `PublishEventRequest::EVENT_TYPE_KNOWN_VALUES`
  lists the values in the specification.

The publish endpoint takes no API key: `project_id` identifies the project.

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
