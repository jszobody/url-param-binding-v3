<div
    x-data="{ url: @entangle('url') }"
    x-init="$watch('url', value => history.pushState(value, '', value))"
>
    <div>Foo is: {{ $foo }}</div>
    <br><br>
    <div><a href="javascript:;" wire:click="setFoo(1)">Set to 1</a></div>
    <div><a href="javascript:;" wire:click="setFoo(2)">Set to 2</a></div>
    <div><a href="javascript:;" wire:click="setFoo(3)">Set to 3</a></div>
    <div><a href="javascript:;" wire:click="setFoo(4)">Set to 4</a></div>
    <div><a href="javascript:;" wire:click="setFoo(5)">Set to 5</a></div>
</div>
