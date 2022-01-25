<?php

namespace App\EventSubscriber;

use App\Entity\Links;
use App\Utils\StringUtils;
use Doctrine\Common\EventSubscriber;
use Doctrine\ORM\Event\LifecycleEventArgs;

class LinkSubscriber implements EventSubscriber
{
	public function getSubscribedEvents()
    {
        return ['prePersist'];
    }

    public function prePersist (LifecycleEventArgs $event)
    {
        $link = $event->getEntity();

        if ($link instanceof Links) {
            do {
                $link->setShortlink(StringUtils::random(5));
            } while (
                !empty(
                    $event->getEntityManager()
                        ->getRepository(Links::class)
                        ->findBy(['shortlink' => $link->getShortlink()])
                )
            );
        }
    }
}