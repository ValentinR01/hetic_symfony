<?php

namespace ContainerYKhIMAX;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Console_Command_EventDispatcherDebug_LazyService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.console.command.event_dispatcher_debug.lazy' shared service.
     *
     * @return \Symfony\Component\Console\Command\LazyCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/LazyCommand.php';

        return $container->privates['.console.command.event_dispatcher_debug.lazy'] = new \Symfony\Component\Console\Command\LazyCommand('debug:event-dispatcher', [], 'Display configured listeners for an application', false, #[\Closure(name: 'console.command.event_dispatcher_debug', class: 'Symfony\\Bundle\\FrameworkBundle\\Command\\EventDispatcherDebugCommand')] function () use ($container): \Symfony\Bundle\FrameworkBundle\Command\EventDispatcherDebugCommand {
            return ($container->privates['console.command.event_dispatcher_debug'] ?? $container->load('getConsole_Command_EventDispatcherDebugService'));
        });
    }
}
