<?php

use Bappy3a\Example\Models\MyModels;

it('can create a model', function () {
   $myModel = MyModels::factory()->create();
   $this->assertModelExists($myModel);
});

it('can return the uppercased value of name', function () {
    /* @var MyModels $myModel */
    $myModel = MyModels::factory()->create(['name'=> 'John Doe']);
    expect($myModel->getUppercasedName())->toEqual('JOHN DOE');
});
