## URL Param Binding

This repo provides a minimal example of an issue we are having url parameter binding in Livewire v3.

Component: https://github.com/jszobody/url-param-binding-v3/blob/main/app/Livewire/Binding.php

View: https://github.com/jszobody/url-param-binding-v3/blob/main/resources/views/livewire/binding.blade.php

## Issue

We have a basic route parameter injected in the `mount()` method, stored as a Livewire public property, and changed with a method. 

In Livewire v2, changing the parameter would automatically update the URL. See the v2 repo to see this in action:

https://github.com/jszobody/url-param-binding-v2/blob/main/README.md

In v3, the exact same code no longer updates the URL:

![CleanShot 2023-11-08 at 09 51 30](https://github.com/jszobody/url-param-binding-v3/assets/203749/22cd749c-f121-4e82-91a4-5b25bc946475)

## Workaround

The best workaround I've found is to:

1. Generate a new URL server-side, store in a public parameter
2. Entangle this client-side in alpine
3. `$watch` for changes and use `history.pushState` to update the URL

Component: https://github.com/jszobody/url-param-binding-v3/blob/main/app/Livewire/Workaround.php

View: https://github.com/jszobody/url-param-binding-v3/blob/main/resources/views/livewire/workaround.blade.php

![CleanShot 2023-11-08 at 10 22 25](https://github.com/jszobody/url-param-binding-v3/assets/203749/a8ddbbce-b60a-485a-8908-5f6474bf9651)
