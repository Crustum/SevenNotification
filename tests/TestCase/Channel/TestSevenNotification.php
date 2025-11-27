<?php
declare(strict_types=1);

namespace Crustum\SevenNotification\Test\TestCase\Channel;

use Cake\Datasource\EntityInterface;
use Crustum\Notification\AnonymousNotifiable;
use Crustum\Notification\Notification;

/**
 * Test Seven Notification
 *
 * Helper notification for testing
 */
class TestSevenNotification extends Notification
{
    /**
     * @inheritDoc
     */
    public function via(EntityInterface|AnonymousNotifiable $notifiable): array
    {
        return ['seven'];
    }

    /**
     * Get Seven message
     *
     * @param \Cake\Datasource\EntityInterface|\Crustum\Notification\AnonymousNotifiable $notifiable Notifiable entity
     * @return mixed
     */
    public function toSeven(EntityInterface|AnonymousNotifiable $notifiable): mixed
    {
        return null;
    }
}
