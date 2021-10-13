<?php 

class A 
{
    public function getRestriction($restriction)
    {
        if (!$restriction) {
            throw new Exception("Não tem restrição", 400);
        }

        if (!$this->isValidRestriction($restriction)) {
            throw new Exception("Restrição invalida", 400);
        }

        if (!$this->hasRestrictionHeritage($restriction)) {
            Log::write("{$restriction} não aplica heranca.");
        }

        return $restriction;
    }   
}