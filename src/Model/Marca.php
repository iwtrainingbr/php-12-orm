<?php

declare(strict_types=1);

namespace App\Model;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
class Marca
{
    #[ORM\Id] #[ORM\GeneratedValue] #[ORM\Column]
    public int $id;

    #[ORM\Column(length: 50)]
    public string $nome;
}