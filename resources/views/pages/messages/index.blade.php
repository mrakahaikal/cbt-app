<?php

use function Livewire\Volt\{state};

state(["routeName" => "dashboard.index"])

?>

<div>

    <h1>This is a message page</h1>
    <p>{{Route::currentRouteName() === $routeName || request()->is($routeName) ? "Ya" : "Tidak"}}</p>
</div>