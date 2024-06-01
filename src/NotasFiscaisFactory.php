<?php

namespace Monique\SimpleFactory;

use Monique\SimpleFactory\Nfe;
use Monique\SimpleFactory\Nfse;

class NotasFiscaisFactory
{
    const NFSE = 'nfse';
    const NFE = 'nfe';

    public function create(string $type, string $numero)
    {
        switch ($type) {
            case self::NFSE:
                var_dump(new Nfse($numero));
                return;
            case self::NFE:
                var_dump(new Nfe($numero));
                return;
            default:
                echo 'Não existe Nota Fiscal com tipo ' . $type;
        }
    }
}