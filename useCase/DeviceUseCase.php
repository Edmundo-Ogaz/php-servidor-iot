<?php

namespace useCase;

use repository\DeviceHistoryRepository;

class DeviceUseCase {

    public static function getHistory($deviceId) {

        return DeviceHistoryRepository::findBy($deviceId);

    }

    public static function test() {

        return [
            "foo" => "bar3",
            "bar" => "foo2",
        ];

    }

}

?>