<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBios\Content\Article\Doctrine;

use Doctrine\ORM\Mapping as ORM;
use MSBios\Doctrine\DBAL\Types\PublishingStateType;
use MSBios\Doctrine\Entity as DefaultEntity;
use MSBios\Doctrine\IdentifierAwareTrait;

/**
 * Class Entity
 * @package MSBios\Content\Article\Doctrine
 * @ORM\Entity
 * @ORM\Table(name="cnt_t_articles")
 */
class Entity extends DefaultEntity implements ArticleInterface
{
    use IdentifierAwareTrait;

    /**
     * @var string
     *
     * @ORM\Column(name="slug", type="string", length=500)
     */
    private $slug;

    /**
     * @var string
     *
     * @ORM\Column(name="content", type="text")
     */
    private $content;

    /**
     * @var string
     *
     * @ORM\Column(name="state", type="publishing_state")
     */
    private $state = PublishingStateType::PUBLISHING_STATE_DRAFT;

}
