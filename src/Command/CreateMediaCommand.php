<?php

declare(strict_types=1);

namespace App\Command;

use App\Application\Sonata\MediaBundle\Entity\Media;
use Sonata\MediaBundle\Model\MediaManagerInterface;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class CreateMediaCommand extends Command
{
    protected static $defaultName = 'app:create-media';

    /**
     * @var MediaManagerInterface
     */
    private $mediaManager;

    public function __construct(MediaManagerInterface $mediaManager)
    {
        parent::__construct();

        $this->mediaManager = $mediaManager;
    }

    protected function configure()
    {
        $this
            ->setDescription('Workshop media create command')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $media = new Media();
        $media->setBinaryContent('fixtures/workshop_demo_2.jpg');
        $media->setContext('workshop');
        $media->setProviderName('sonata.media.provider.image');
        $media->setMetadataValue('title', 'Amazing picture');

        $this->mediaManager->save($media);
    }
}
