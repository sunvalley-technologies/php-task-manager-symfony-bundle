<?php


namespace SunValley\TaskManager\Symfony\Task;


interface DependencyInjectorInterface
{
    public function injectDependencies(AbstractSymfonyDITask $task);
}