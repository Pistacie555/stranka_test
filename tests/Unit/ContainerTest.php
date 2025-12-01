<?php

test('it can resolve something out of the container,', function () {
    $container = new \Core\Container();

    $container->bind('foo', function () {
        return 'bar';
    });

    $result = $container->resolve('foo');

    expect($result)->toBe('bar');
});
