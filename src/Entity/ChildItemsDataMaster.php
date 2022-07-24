<?php

namespace App\Entity;

use App\Repository\ChildItemsDataMasterRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ChildItemsDataMasterRepository::class)
 */
class ChildItemsDataMaster
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $item_id;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $parentId;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $websiteId;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $thanksId;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $resultsPointCode;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $asp;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $longTitle;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $shortTitle;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $attention;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getItemId(): ?int
    {
        return $this->item_id;
    }

    public function setItemId(int $item_id): self
    {
        $this->item_id = $item_id;

        return $this;
    }

    public function getParentId(): ?int
    {
        return $this->parentId;
    }

    public function setParentId(?int $parentId): self
    {
        $this->parentId = $parentId;

        return $this;
    }

    public function getWebsiteId(): ?int
    {
        return $this->websiteId;
    }

    public function setWebsiteId(?int $websiteId): self
    {
        $this->websiteId = $websiteId;

        return $this;
    }

    public function getThanksId(): ?int
    {
        return $this->thanksId;
    }

    public function setThanksId(?int $thanksId): self
    {
        $this->thanksId = $thanksId;

        return $this;
    }

    public function getResultsPointCode(): ?int
    {
        return $this->resultsPointCode;
    }

    public function setResultsPointCode(?int $resultsPointCode): self
    {
        $this->resultsPointCode = $resultsPointCode;

        return $this;
    }

    public function getAsp(): ?string
    {
        return $this->asp;
    }

    public function setAsp(?string $asp): self
    {
        $this->asp = $asp;

        return $this;
    }

    public function getLongTitle(): ?string
    {
        return $this->longTitle;
    }

    public function setLongTitle(?string $longTitle): self
    {
        $this->longTitle = $longTitle;

        return $this;
    }

    public function getShortTitle(): ?string
    {
        return $this->shortTitle;
    }

    public function setShortTitle(?string $shortTitle): self
    {
        $this->shortTitle = $shortTitle;

        return $this;
    }

    public function getAttention(): ?string
    {
        return $this->attention;
    }

    public function setAttention(?string $attention): self
    {
        $this->attention = $attention;

        return $this;
    }
}
