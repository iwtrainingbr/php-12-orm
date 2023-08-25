<?php

declare(strict_types=1);

namespace App\Model;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
class Veiculo
{
    #[ORM\Id] #[ORM\GeneratedValue] #[ORM\Column]
    public int $id;

    #[ORM\ManyToOne(targetEntity: 'Marca')]
    #[ORM\JoinColumn(referencedColumnName: 'id')]
    public Marca $marca;
    
    #[ORM\Column(length: 30)]
    public string $modelo;

    #[ORM\Column(type: 'integer', length: 4)]
    public int $ano;

    #[ORM\Column(length: 30)]
    public string $cor;

    #[ORM\Column(length: 8, unique: true)]
    public string $placa;
}