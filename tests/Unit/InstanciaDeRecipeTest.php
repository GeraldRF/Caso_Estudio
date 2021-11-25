<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Models\Recipe;

class InstanciaDeRecipeTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_instanciarRecipe()
    {

        $recipe = new Recipe('Sopa de carne', 20, 'Comer a 30 grados');
        
        $this->assertTrue($recipe->title == 'Sopa de carne' && $recipe->serving == 20 && $recipe->instructions == 'Comer a 30 grados');
    }
}
