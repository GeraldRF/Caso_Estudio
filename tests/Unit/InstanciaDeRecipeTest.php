<?php

namespace Tests\Unit;

//use PHPUnit\Framework\TestCase;
use Tests\TestCase;
use App\Models\Recipe;

class InstanciaDeRecipeTest extends TestCase
{

    protected $recipe;
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_instanciarRecipe()
    {

        $recipe = new Recipe(['id'=>1, 'title'=>'Sopa de carne', 'serving'=>20, 'instructions'=>'Comer a 30 grados']);
         
        echo $recipe->id;
        echo $recipe->title;
        echo $recipe->serving;
        echo $recipe->instructions;

        $this->assertTrue($recipe->title == 'Sopa de carne' && $recipe->serving == 20 && $recipe->instructions == 'Comer a 30 grados');
    }
}
