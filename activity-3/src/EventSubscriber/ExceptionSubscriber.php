<?php

namespace App\EventSubscriber;

use Psr\Log\LoggerInterface;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpKernel\Event\ExceptionEvent;
use Symfony\Component\HttpKernel\KernelEvents;
use Symfony\Component\HttpKernel\KernelInterface;

class ExceptionSubscriber implements EventSubscriberInterface
{           

    /** LoggerInterface $logger */
    private $logger;
    private $enviroment;

    public function __construct(KernelInterface $kernel, LoggerInterface $logger)
    {
        $this->logger = $logger;
        $this->enviroment = $kernel->getEnvironment();
    }

    public static function getSubscribedEvents()
    {   
        return [KernelEvents::EXCEPTION => 'onKernelException' ];
    }

    public function onKernelException(ExceptionEvent $event)
    {
        $exception = $event->getThrowable();    
        $this->logger->critical('INTERNAL 500: '. $exception->getCode() .' - '. $exception->getMessage());
        
        $event->setResponse(new JsonResponse(['Internal Server Error.']));
        
        if (!preg_match('/prod/i', $this->enviroment)) {
            $event->setResponse(new JsonResponse($exception->getMessage()));
        }
    }
}
