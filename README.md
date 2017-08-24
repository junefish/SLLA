# SLLA

A simple protest calendar for the Los Angeles area created in the LAMP stack. [Visit the site here.](http://stayloudla.com/)
Want to contribute? We have [Trello](https://trello.com/stayloudla)! Ask for an invitation in the Hack For LA Slack channel.

## Built With

* PHP
* jQuery
* [Facebook Open Graph](https://developers.facebook.com/docs/reference/opengraph/)

## Hosting locally
`php -S localhost:8000`

## Testing
Using https://phpunit.de
Run by `php "phpunit-6.3.0.phar" --bootstrap api/events/Repository.php tests