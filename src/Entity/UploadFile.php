<?php

namespace App\Entity;

use App\Repository\UploadFileRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: UploadFileRepository::class)]
class UploadFile
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: 'string')]
    private string $ExcelFile;

    public function getId(): ?int
    {
        return $this->id;
    }
    
    public function getExcelFile(): string
    {
        return $this->ExcelFile;
    }

    public function setExcelFile(string $ExcelFile): self
    {
        $this->ExcelFile = $ExcelFile;

        return $this;
    }
}
