# SLLA

A simple protest calendar for the Los Angeles area created in the LAMP stack. [Visit the site here.](http://stayloudla.com/)
Want to contribute? We have [Trello](https://trello.com/stayloudla)! Ask for an invitation in the Hack For LA Slack channel.

## Built With

* PHP
* jQuery
* [Facebook Open Graph](https://developers.facebook.com/docs/reference/opengraph/)

## Contributing
Check out our public [Trello Board](https://trello.com/b/jYpP8ZTg/stay-loud-la)
Pick up tasks in the `To Do` and let us know to update!

## Setting Up For Local Development

### Set Up The Database
1. Install mySql
1. Run the scripts in the [db folder](/db) against your database.
1. Update dbconfig.php with your credentials if you changed them

### Hosting locally
`php -S localhost:8000`