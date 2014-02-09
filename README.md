# PHP-Rdio
A PHP client for the [Rdio API](http://www.rdio.com/developers/docs/web-service/index/)

## Registration
Follow the instructions [here](http://www.rdio.com/developers/docs/web-service/oauth/ref-registration) to retrieve
your consumer key and secret. For authorized requests, the users will have to authorize your application.

## Usage
Simply create the client with your key and secret.

    $client = new \TM\Rdio\Client($key, $secret);

With the client, you can then request information using the methods listed in the Rdio API documentation.

## Authorized requests
