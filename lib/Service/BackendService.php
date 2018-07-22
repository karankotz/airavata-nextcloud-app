<?php

/*
 *
 * Licensed to the Apache Software Foundation (ASF) under one
 * or more contributor license agreements.  See the NOTICE file
 * distributed with this work for additional information
 * regarding copyright ownership.  The ASF licenses this file
 * to you under the Apache License, Version 2.0 (the
 * "License"); you may not use this file except in compliance
 * with the License.  You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing,
 * software distributed under the License is distributed on an
 * "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied.  See the License for the
 * specific language governing permissions and limitations
 * under the License.
 */

namespace OCA\Airavata\Service;

use OCA\Airavata\Backends\UserBackend;
use \OCP\IUserManager;
use \OCP\IGroupManager;

class BackendService
{

    private $userManager;

    private $groupManager;

    private $userBackend;

    private $loggingService;

    public function __construct(IUserManager $userManager,
                                IGroupManager $groupManager, UserBackend $userBackend, LoggingService $loggingService)
    {
        $this->userManager = $userManager;
        $this->groupManager = $groupManager;
        $this->userBackend = $userBackend;
        $this->loggingService = $loggingService;
    }

    public function registerUserBackend()
    {
        $this->userManager->registerBackend($this->userBackend);
    }
}