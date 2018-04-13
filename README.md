#Date Factory

A simple, re-usable DateTime factory that can be injected into services and easily mocked.

Usage:

```
$dateTimeFactory = new DateTimeFactory();
$now = $dateTimeFactory->now();
$then = $dateTimeFactory->now("yesterday");	// accepts any input to \DateTime::__construct()

var_dump([$now,$then]);
```
