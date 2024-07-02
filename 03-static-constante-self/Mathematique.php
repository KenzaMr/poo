<?php
class Mathematique
{
    /**
     * @param float $ele1
     * @param float $ele2
     * 
     * @return float
     */
    public static function addition(float $ele1, float $ele2): float
    {
        return $ele1 + $ele2;
    }

    /**
     * @param float $ele1
     * @param float $ele2
     * 
     * @return float
     */
    public static function division(float $ele1, float $ele2): float | string 
    {
        if(self::isNotNull($ele1)){
        return $ele1 / $ele2;
        }
        return'Vous ne pouvez pas divisez par 0';
    }

    /**
     * @param float $ele1
     * @param float $ele2
     * 
     * @return float
     */
    public static function multiplication(float $ele1, float $ele2): float 
    {
        

            return $ele1 * $ele2;
        
    }
    
    /**
     * @param float $ele1
     * @param float $ele2
     * 
     * @return float
     */
    public static function soustration(float $ele1, float $ele2): float
    {
        return $ele1 - $ele2;
    }

    private static function isNotNull(float $para): bool
    {
        if ($para == 0) {
            return false;
        }
            return true;       
    }
}
