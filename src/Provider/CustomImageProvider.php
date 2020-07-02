<?php

declare(strict_types=1);

namespace App\Provider;


use Sonata\MediaBundle\Model\MediaInterface;
use Sonata\MediaBundle\Provider\ImageProvider;
use Sonata\MediaBundle\Provider\Metadata;

class CustomImageProvider extends ImageProvider
{
    public function generatePublicUrl(MediaInterface $media, $format)
    {
        return 'some-generated-public-path';
    }

    public function generatePrivateUrl(MediaInterface $media, $format)
    {
        return 'some-generated-private-path';
    }

    public function getProviderMetadata()
    {
        return new Metadata(
            $this->getName(),
            $this->getName().'.description',
            null,
            'SonataMediaBundle',
            ['class' => 'fa fa-picture-o']
        );
    }
}
