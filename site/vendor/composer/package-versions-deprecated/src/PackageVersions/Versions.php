<?php

declare(strict_types=1);

namespace PackageVersions;

use OutOfBoundsException;

/**
 * This class is generated by composer/package-versions-deprecated, specifically by
 * @see \PackageVersions\Installer
 *
 * This file is overwritten at every run of `composer install` or `composer update`.
 */
final class Versions
{
    const ROOT_PACKAGE_NAME = 'getgrav/grav';
    /**
     * Array of all available composer packages.
     * Dont read this array from your calling code, but use the \PackageVersions\Versions::getVersion() method instead.
     *
     * @var array<string, string>
     * @internal
     */
    const VERSIONS          = array (
  'antoligy/dom-string-iterators' => 'v1.0.1@fae88f66e1970d68c5585fc42db44f1217bf74e6',
  'composer/ca-bundle' => '1.2.7@95c63ab2117a72f48f5a55da9740a3273d45b7fd',
  'doctrine/cache' => '1.10.0@382e7f4db9a12dc6c19431743a2b096041bcdd62',
  'doctrine/collections' => '1.6.4@6b1e4b2b66f6d6e49983cebfe23a21b7ccc5b0d7',
  'donatj/phpuseragentparser' => 'v0.16.0@b3551112ed84524aef6542a8778a3f812c8098ce',
  'dragonmantank/cron-expression' => 'v1.2.1@9504fa9ea681b586028adaaa0877db4aecf32bad',
  'filp/whoops' => '2.7.2@17d0d3f266c8f925ebd035cd36f83cf802b47d4a',
  'gregwar/cache' => 'v1.0.12@305d0f5a12c0beecbbd7e1de236f59f39e0c0ac3',
  'gregwar/image' => 'v2.0.28@68b4eddc45dacb3532e0fa16e5cb7d3937424a0c',
  'guzzlehttp/psr7' => '1.6.1@239400de7a173fe9901b9ac7c06497751f00727a',
  'kodus/psr7-server' => '1.0.1@dcfd0116451b0f0e7c6b23b831757ed288347278',
  'league/climate' => '3.5.2@6b53a28a58ad9f5f63042e291eb870cf0d02a9c9',
  'matthiasmullie/minify' => '1.3.63@9ba1b459828adc13430f4dd6c49dae4950dc4117',
  'matthiasmullie/path-converter' => '1.1.3@e7d13b2c7e2f2268e1424aaed02085518afa02d9',
  'maximebf/debugbar' => 'v1.16.3@1a1605b8e9bacb34cc0c6278206d699772e1d372',
  'miljar/php-exif' => 'v0.6.5@41f23db39d7b48e4af0e134c2e80e577c1782ac9',
  'monolog/monolog' => '1.25.3@fa82921994db851a8becaf3787a9e73c5976b6f1',
  'nyholm/psr7' => '1.2.1@55ff6b76573f5b242554c9775792bd59fb52e11c',
  'phive/twig-extensions-deferred' => 'v1.0.2@5a2426d622afa74034e754ca5ea1d1ff7887627f',
  'php-http/message-factory' => 'v1.0.2@a478cb11f66a6ac48d8954216cfed9aa06a501a1',
  'pimple/pimple' => 'v3.2.3@9e403941ef9d65d20cba7d54e29fe906db42cf32',
  'psr/cache' => '1.0.1@d11b50ad223250cf17b86e38383413f5a6764bf8',
  'psr/container' => '1.0.0@b7ce3b176482dbbc1245ebf52b181af44c2cf55f',
  'psr/http-factory' => '1.0.1@12ac7fcd07e5b077433f5f2bee95b3a771bf61be',
  'psr/http-message' => '1.0.1@f6561bf28d520154e4b0ec72be95418abe6d9363',
  'psr/http-server-handler' => '1.0.1@aff2f80e33b7f026ec96bb42f63242dc50ffcae7',
  'psr/http-server-middleware' => '1.0.1@2296f45510945530b9dceb8bcedb5cb84d40c5f5',
  'psr/log' => '1.1.3@0f73288fd15629204f9d42b7055f72dacbe811fc',
  'psr/simple-cache' => '1.0.1@408d5eafb83c57f6365a3ca330ff23aa4a5fa39b',
  'ralouphie/getallheaders' => '3.0.3@120b605dfeb996808c31b6477290a714d356e822',
  'rockettheme/toolbox' => '1.4.7@6a86bc0607884d2194260b6b72d67333e0141585',
  'seld/cli-prompt' => '1.0.3@a19a7376a4689d4d94cab66ab4f3c816019ba8dd',
  'symfony/console' => 'v4.2.12@fc2e274aade6567a750551942094b2145ade9b6c',
  'symfony/contracts' => 'v1.1.8@f51bca9de06b7a25b19a4155da7bebad099a5def',
  'symfony/event-dispatcher' => 'v4.2.12@852548c7c704f14d2f6700c8d872a05bd2028732',
  'symfony/polyfill-ctype' => 'v1.15.0@4719fa9c18b0464d399f1a63bf624b42b6fa8d14',
  'symfony/polyfill-iconv' => 'v1.15.0@ad6d62792bfbcfc385dd34b424d4fcf9712a32c8',
  'symfony/polyfill-mbstring' => 'v1.15.0@81ffd3a9c6d707be22e3012b827de1c9775fc5ac',
  'symfony/polyfill-php72' => 'v1.15.0@37b0976c78b94856543260ce09b460a7bc852747',
  'symfony/polyfill-php73' => 'v1.15.0@0f27e9f464ea3da33cbe7ca3bdf4eb66def9d0f7',
  'symfony/process' => 'v4.2.12@808a4be7e0dd7fcb6a2b1ed2ba22dd581402c5e2',
  'symfony/var-dumper' => 'v4.2.12@4e18e041a477edbb8c54e053f179672f9413816c',
  'symfony/yaml' => 'v4.2.12@9468fef6f1c740b96935e9578560a9e9189ca154',
  'twig/twig' => 'v1.42.5@87b2ea9d8f6fd014d0621ca089bb1b3769ea3f8e',
  'willdurand/negotiation' => '2.x-dev@cf78c9ac47e8e1e141bf609c71e9e2c3a7780dcf',
  'behat/gherkin' => 'v4.6.2@51ac4500c4dc30cbaaabcd2f25694299df666a31',
  'codeception/codeception' => '2.5.6@b83a9338296e706fab2ceb49de8a352fbca3dc98',
  'codeception/phpunit-wrapper' => '7.8.0@bc847bd4f8f6d09012543e2a856f19fe4ecdcf3a',
  'codeception/stub' => '2.1.0@853657f988942f7afb69becf3fd0059f192c705a',
  'composer/package-versions-deprecated' => '1.8.0@98df7f1b293c0550bd5b1ce6b60b59bdda23aa47',
  'composer/xdebug-handler' => '1.4.1@1ab9842d69e64fb3a01be6b656501032d1b78cb7',
  'doctrine/instantiator' => '1.3.0@ae466f726242e637cebdd526a7d991b9433bacf1',
  'facebook/webdriver' => '1.7.1@e43de70f3c7166169d0f14a374505392734160e5',
  'fzaninotto/faker' => 'v1.9.1@fc10d778e4b84d5bd315dad194661e091d307c6f',
  'guzzlehttp/guzzle' => '6.5.3@aab4ebd862aa7d04f01a4b51849d657db56d882e',
  'guzzlehttp/promises' => 'v1.3.1@a59da6cf61d80060647ff4d3eb2c03a2bc694646',
  'jean85/pretty-package-versions' => '1.3.0@e3517fb11b67e798239354fe8213927d012ad8f9',
  'myclabs/deep-copy' => '1.9.5@b2c28789e80a97badd14145fda39b545d83ca3ef',
  'nette/bootstrap' => 'v3.0.1@b45a1e33b6a44beb307756522396551e5a9ff249',
  'nette/di' => 'v3.0.3@77d69061cbf8f9cfb7363dd983136f51213d3e41',
  'nette/finder' => 'v2.5.2@4ad2c298eb8c687dd0e74ae84206a4186eeaed50',
  'nette/neon' => 'v3.1.2@3c3dcbc6bf6c80dc97b1fc4ba9a22ae67930fc0e',
  'nette/php-generator' => 'v3.3.4@8fe7e699dca7db186f56d75800cb1ec32e39c856',
  'nette/robot-loader' => 'v3.2.3@726c462e73e739e965ec654a667407074cfe83c0',
  'nette/schema' => 'v1.0.2@febf71fb4052c824046f5a33f4f769a6e7fa0cb4',
  'nette/utils' => 'v3.1.1@2c17d16d8887579ae1c0898ff94a3668997fd3eb',
  'nikic/php-parser' => 'v4.4.0@bd43ec7152eaaab3bd8c6d0aa95ceeb1df8ee120',
  'phar-io/manifest' => '1.0.3@7761fcacf03b4d4f16e7ccb606d4879ca431fcf4',
  'phar-io/version' => '2.0.1@45a2ec53a73c70ce41d55cedef9063630abaf1b6',
  'phpdocumentor/reflection-common' => '2.1.0@6568f4687e5b41b054365f9ae03fcb1ed5f2069b',
  'phpdocumentor/reflection-docblock' => '4.3.4@da3fd972d6bafd628114f7e7e036f45944b62e9c',
  'phpdocumentor/type-resolver' => '1.0.1@2e32a6d48972b2c1976ed5d8967145b6cec4a4a9',
  'phpspec/prophecy' => 'v1.10.3@451c3cd1418cf640de218914901e51b064abb093',
  'phpstan/phpdoc-parser' => '0.3.5@8c4ef2aefd9788238897b678a985e1d5c8df6db4',
  'phpstan/phpstan' => '0.11.19@63cc502f6957b7f74efbac444b4cf219dcadffd7',
  'phpstan/phpstan-deprecation-rules' => '0.11.2@5685fe48873efc5af1f2cc95d9c1b8ae82c728fe',
  'phpunit/php-code-coverage' => '6.1.4@807e6013b00af69b6c5d9ceb4282d0393dbb9d8d',
  'phpunit/php-file-iterator' => '2.0.2@050bedf145a257b1ff02746c31894800e5122946',
  'phpunit/php-text-template' => '1.2.1@31f8b717e51d9a2afca6c9f046f5d69fc27c8686',
  'phpunit/php-timer' => '2.1.2@1038454804406b0b5f5f520358e78c1c2f71501e',
  'phpunit/php-token-stream' => '3.1.1@995192df77f63a59e47f025390d2d1fdf8f425ff',
  'phpunit/phpunit' => '7.5.20@9467db479d1b0487c99733bb1e7944d32deded2c',
  'sebastian/code-unit-reverse-lookup' => '1.0.1@4419fcdb5eabb9caa61a27c7a1db532a6b55dd18',
  'sebastian/comparator' => '3.0.2@5de4fc177adf9bce8df98d8d141a7559d7ccf6da',
  'sebastian/diff' => '3.0.2@720fcc7e9b5cf384ea68d9d930d480907a0c1a29',
  'sebastian/environment' => '4.2.3@464c90d7bdf5ad4e8a6aea15c091fec0603d4368',
  'sebastian/exporter' => '3.1.2@68609e1261d215ea5b21b7987539cbfbe156ec3e',
  'sebastian/global-state' => '2.0.0@e8ba02eed7bbbb9e59e43dedd3dddeff4a56b0c4',
  'sebastian/object-enumerator' => '3.0.3@7cfd9e65d11ffb5af41198476395774d4c8a84c5',
  'sebastian/object-reflector' => '1.1.1@773f97c67f28de00d397be301821b06708fca0be',
  'sebastian/recursion-context' => '3.0.0@5b0cd723502bac3b006cbf3dbf7a1e3fcefe4fa8',
  'sebastian/resource-operations' => '2.0.1@4d7a795d35b889bf80a0cc04e08d77cedfa917a9',
  'sebastian/version' => '2.0.1@99732be0ddb3361e16ad77b68ba41efc8e979019',
  'symfony/browser-kit' => 'v4.4.8@e4b0dc1b100bf75b5717c5b451397f230a618a42',
  'symfony/css-selector' => 'v4.4.8@afc26133a6fbdd4f8842e38893e0ee4685c7c94b',
  'symfony/dom-crawler' => 'v4.4.8@4d0fb3374324071ecdd94898367a3fa4b5563162',
  'symfony/finder' => 'v4.4.8@5729f943f9854c5781984ed4907bbb817735776b',
  'symfony/polyfill-intl-idn' => 'v1.15.0@47bd6aa45beb1cd7c6a16b7d1810133b728bdfcf',
  'theseer/tokenizer' => '1.1.3@11336f6f84e16a720dae9d8e6ed5019efa85a0f9',
  'victorjonsson/markdowndocs' => 'dev-master@c9fa153b28a79f5da89ec32aa501be92db212aed',
  'webmozart/assert' => '1.8.0@ab2cb0b3b559010b75981b1bdce728da3ee90ad6',
  'getgrav/grav' => 'dev-master@740ec56049fc271fc2ed36af6b0cadf3b8909956',
);

    private function __construct()
    {
    }

    /**
     * @throws OutOfBoundsException If a version cannot be located.
     *
     * @psalm-param key-of<self::VERSIONS> $packageName
     * @psalm-pure
     */
    public static function getVersion(string $packageName) : string
    {
        if (isset(self::VERSIONS[$packageName])) {
            return self::VERSIONS[$packageName];
        }

        throw new OutOfBoundsException(
            'Required package "' . $packageName . '" is not installed: check your ./vendor/composer/installed.json and/or ./composer.lock files'
        );
    }
}
