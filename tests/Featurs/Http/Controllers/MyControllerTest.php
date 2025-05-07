<?php

use Bappy3a\Example\Http\Controllers\MyController;

it('can view my controller', function () {
   $this
       ->get(action([MyController::class,'index']))
       ->assertOk()
       ->assertSee('Hi Form the view fil');
});
