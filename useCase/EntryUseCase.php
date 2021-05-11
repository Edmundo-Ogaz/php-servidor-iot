<?php

namespace useCase;

use repository\EntryRepository;

class EntryUseCase {

    public static function getByDeviceName($deviceName, $limit = 100) {

        return EntryRepository::findByDeviceName($deviceName, $limit);

    }

}

?>