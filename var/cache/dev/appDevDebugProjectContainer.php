<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerI8xwtz8\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerI8xwtz8/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerI8xwtz8.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerI8xwtz8\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerI8xwtz8\appDevDebugProjectContainer(array(
    'container.build_hash' => 'I8xwtz8',
    'container.build_id' => '252b96c0',
    'container.build_time' => 1519743810,
));
