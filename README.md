<h1 align="center"> pexels-sdk </h1>

<p align="center"> API encapsulation of pexels  --- Pexels 的 api 封装.</p>


## Installing

```shell
$ composer require wangqs/pexels-sdk -vvv
```


## Usage

Create an instance of the Pexels API Client by passing in your API token as parameter.

```php
$pexels = new \Wangqs\PexelsSdk\Client("your token");
```

Perform a search, the response gets returned as an array

```php
$normalImg = json_decode($pexels->search('keyword')->getBody())->photos;

$featuredImg = json_decode($pexels->curated('keyword')->getBody())->photos;

$normalVideo = json_decode($pexels->videoSearch('keyword')->getBody())->videos;

$featuredVideo = json_decode($pexels->videoCurated('keyword')->getBody())->videos;
```

## Contributing

You can contribute in one of three ways:

1. File bug reports using the [issue tracker](https://github.com/wangqs/pexels-sdk/issues).
2. Answer questions or fix bugs on the [issue tracker](https://github.com/wangqs/pexels-sdk/issues).
3. Contribute new features or update the wiki.

_The code contribution process is not very formal. You just need to make sure that you follow the PSR-0, PSR-1, and PSR-2 coding guidelines. Any new code contributions must be accompanied by unit tests where applicable._

## License

MIT