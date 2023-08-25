<?php

declare(strict_types=1);

namespace App\Model;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
class Venda 
{
    #[ORM\Id] #[ORM\GeneratedValue] #[ORM\Column]
    public int $id;

    #[ORM\Column(type: 'float')]
    public float $valor;

    #[ORM\Column(type: 'datetime')]
    public \DateTime $date;

    #[ORM\ManyToOne(targetEntity: 'Cliente')]
    #[ORM\JoinColumn(referencedColumnName: 'id')]
    public Cliente $cliente;

    #[ORM\ManyToOne(targetEntity: 'Veiculo')]
    #[ORM\JoinColumn(referencedColumnName: 'id')]
    public Veiculo $veiculo;
}






