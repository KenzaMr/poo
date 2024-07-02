<?php
class SimulateurCredit
{
    const TAUX = 20.5;

    public static float $quotient =0.1;

    public static function calculInteret(int $pret)
    {
        return $pret*self::$quotient;
    }
}
