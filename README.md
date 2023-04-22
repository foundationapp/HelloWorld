# 👋 HelloWorld Power-Up

An example [Power-up](https://github.com/foundationapp/power-ups) to use as a starting point to create your own Power-Up.

## Installation

First, install the Power-Up package (https://github.com/foundationapp/power-ups). 

Then run the following command:

```
php artisan powerup:install https://github.com/foundationapp/HelloWorld
```

Then, enable the power-up:

```
php artisan powerup:enable hello-world
```

and use it with:

```
<livewire:powerup.hello-world />
```