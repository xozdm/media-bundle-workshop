<?php

declare(strict_types=1);

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Application\Sonata\MediaBundle\Entity\Media;

/**
 * @ORM\Table(name="blog_posts")
 * @ORM\Entity()
 */
class BlogPost
{
    /**
     * @var int $id
     * @ORM\Id
     * @ORM\Column(name="id", type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string")
     */
    private $title;

    /**
     * @var Media
     *
     * @ORM\ManyToOne(targetEntity="App\Application\Sonata\MediaBundle\Entity\Media", cascade={"persist"})
     * @ORM\JoinColumn(name="file", referencedColumnName="id")
     */
    private $file;

    /**
     * @return int
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return BlogPost
     */
    public function setId(int $id): BlogPost
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * @param string $title
     * @return BlogPost
     */
    public function setTitle(string $title): BlogPost
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return Media
     */
    public function getFile(): ?Media
    {
        return $this->file;
    }

    /**
     * @param Media $file
     * @return BlogPost
     */
    public function setFile(Media $file): BlogPost
    {
        $this->file = $file;
        return $this;
    }
}
