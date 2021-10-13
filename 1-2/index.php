<?php 

class A 
{
    public function getRestriction($restriction)
    {
        if ($restriction) {
            if ($this->isValidRestriction($restriction)) {
                if ($this->hasRestrictionHeritage($restriction)) {
                    return $restriction;
                } else {
                    Log::write("{$restriction} não aplica heranca.");
                }
            } else {
                throw new Exception("Restrição invalida", 400);
            }
        } else {
            throw new Exception("Não tem restrição", 400);
        }
    }
}