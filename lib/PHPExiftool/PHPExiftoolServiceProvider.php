<?php

namespace PHPExiftool;

use Silex\Application;
use Silex\ServiceProviderInterface;

class PHPExiftoolServiceProvider implements ServiceProviderInterface
{

    public function register(Application $app)
    {
        $app['exiftool.processor'] = $app->share(function(Application $app) {
            return new Exiftool();
        });

        $app['exiftool.reader'] = $app->share(function(Application $app) {
            return new Reader($app['exiftool.processor'], new RDFParser());
        });

        $app['exiftool.writer'] = $app->share(function(Application $app) {
            return new Writer($app['exiftool.processor']);
        });

        $app['exiftool.preview-extractor'] = $app->share(function(Application $app) {
            return new PreviewExtractor($app['exiftool.processor']);
        });
    }

    public function boot(Application $app)
    {

    }
}
