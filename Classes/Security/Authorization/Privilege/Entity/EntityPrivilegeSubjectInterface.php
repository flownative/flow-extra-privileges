<?php
namespace Flownative\Flow\ExtraPrivileges\Security\Authorization\Privilege\Entity;

/*
 * This file is part of the Flownative.Flow.ExtraPrivileges package.
 *
 * (c) Flownative GmbH - www.flownative.com
 *
 * This package is Open Source Software. For the full copyright and license
 * information, please view the LICENSE file which was distributed with this
 * source code.
 */

use Neos\Flow\Security\Authorization\Privilege\PrivilegeSubjectInterface;

/**
 * An entity privilege subject interface
 */
interface EntityPrivilegeSubjectInterface extends PrivilegeSubjectInterface
{
    /**
     * @return object
     */
    public function getEntity();

    /**
     * @return array
     */
    public function getOriginalEntityData();
}
