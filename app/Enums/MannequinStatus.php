<?php

namespace App\Enums;

class MannequinStatus
{
    const PENDING = 1;
    const APPROVED = 2;
    const DENIED = 3;
    const POSSIBLE = 4;

    public static $statuses = [
        self::PENDING => 'pending',
        self::APPROVED => 'approved',
        self::DENIED => 'denied',
        self::POSSIBLE => 'possible',
    ];

    /**
     * @param int $statusId
     * @return string
     */
    public static function getStatusName(int $statusId): string
    {
        return self::$statuses[$statusId];
    }

    /**
     * @param int $statusId
     * @return string
     */
    public static function renderStatus(int $statusId): string
    {
        $html = '';
        switch ($statusId) {
            case self::PENDING:
                $html = "<span class='text-primary'>" . ucfirst(self::getStatusName($statusId)) . "</span>";
                break;
            case self::APPROVED:
                $html = "<span class='text-success'>" . ucfirst(self::getStatusName($statusId)) . "</span>";
                break;
            case self::DENIED:
                $html = "<span class='text-danger'>" . ucfirst(self::getStatusName($statusId)) . "</span>";
                break;
            case self::POSSIBLE:
                $html = "<span class='text-warning'>" . ucfirst(self::getStatusName($statusId)) . "</span>";
                break;
        }
        return $html;
    }
}
