<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\ClientRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ClientRepository::class)]
#[ApiResource]
class Client
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'integer', nullable: true)]
    private $regNumber;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $fullName;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $shortName;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $brandName;

    #[ORM\Column(type: 'integer', nullable: true)]
    private $region;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $busAddress;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $postAddress;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $site;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $inn;

    #[ORM\Column(type: 'integer', nullable: true)]
    private $ogrn;

    #[ORM\Column(type: 'integer', nullable: true)]
    private $kpp;

    #[ORM\Column(type: 'integer', nullable: true)]
    private $bic;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $bankName;

    #[ORM\Column(type: 'integer', nullable: true)]
    private $corrAcc;

    #[ORM\Column(type: 'integer', nullable: true)]
    private $acc;

    #[ORM\Column(type: 'integer')]
    private $status = 0;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getRegNumber(): ?int
    {
        return $this->regNumber;
    }

    public function setRegNumber(?int $regNumber): self
    {
        $this->regNumber = $regNumber;

        return $this;
    }

    public function getFullName(): ?string
    {
        return $this->fullName;
    }

    public function setFullName(string $fullName): self
    {
        $this->fullName = $fullName;

        return $this;
    }

    public function getShortName(): ?string
    {
        return $this->shortName;
    }

    public function setShortName(string $shortName): self
    {
        $this->shortName = $shortName;

        return $this;
    }

    public function getBrandName(): ?string
    {
        return $this->brandName;
    }

    public function setBrandName(string $brandName): self
    {
        $this->brandName = $brandName;

        return $this;
    }

    public function getRegion(): ?int
    {
        return $this->region;
    }

    public function setRegion(int $region): self
    {
        $this->region = $region;

        return $this;
    }

    public function getBusAddress(): ?string
    {
        return $this->busAddress;
    }

    public function setBusAddress(string $busAddress): self
    {
        $this->busAddress = $busAddress;

        return $this;
    }

    public function getPostAddress(): ?string
    {
        return $this->postAddress;
    }

    public function setPostAddress(string $postAddress): self
    {
        $this->postAddress = $postAddress;

        return $this;
    }

    public function getSite(): ?string
    {
        return $this->site;
    }

    public function setSite(?string $site): self
    {
        $this->site = $site;

        return $this;
    }

    public function getInn(): ?string
    {
        return $this->inn;
    }

    public function setInn(string $inn): self
    {
        $this->inn = $inn;

        return $this;
    }

    public function getOgrn(): ?int
    {
        return $this->ogrn;
    }

    public function setOgrn(int $ogrn): self
    {
        $this->ogrn = $ogrn;

        return $this;
    }

    public function getKpp(): ?int
    {
        return $this->kpp;
    }

    public function setKpp(int $kpp): self
    {
        $this->kpp = $kpp;

        return $this;
    }

    public function getBic(): ?int
    {
        return $this->bic;
    }

    public function setBic(int $bic): self
    {
        $this->bic = $bic;

        return $this;
    }

    public function getBankName(): ?string
    {
        return $this->bankName;
    }

    public function setBankName(?string $bankName): self
    {
        $this->bankName = $bankName;

        return $this;
    }

    public function getCorrAcc(): ?int
    {
        return $this->corrAcc;
    }

    public function setCorrAcc(?int $corrAcc): self
    {
        $this->corrAcc = $corrAcc;

        return $this;
    }

    public function getAcc(): ?int
    {
        return $this->acc;
    }

    public function setAcc(?int $acc): self
    {
        $this->acc = $acc;

        return $this;
    }

    public function getStatus(): ?int
    {
        return $this->status;
    }

    public function setStatus(int $status): self
    {
        $this->status = $status;

        return $this;
    }
}
