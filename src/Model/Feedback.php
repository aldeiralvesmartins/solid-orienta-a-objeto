<?php
namespace Alura\Solid\Model;

class Feedback 
{
    private int $nota;
    private string $depoimento;

    public function __construct(int $nota, ?string $depoimento)
    {
        if ($nota < 9 && empty($depoimento)) {
            throw new \DomainException('Depoimento obrigatorio');
        }

        $this->nota = $nota;
        $this->depoimento = $depoimento;
    }

    public function recuperaNota():int
    {
        return $this->nota;
    }

    public function recuperaDepoimento():?string
    {
        return $this->depoimento;
    }
}