<?php
declare(strict_types = 1);

namespace TYPO3\CMS\Core\Resource\Event;

/*
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */

use TYPO3\CMS\Core\Resource\FileInterface;

/**
 * This event is fired before a file is about to be replaced.
 * Custom listeners can check for file integrity or analyze the content of the file before it gets added.
 */
final class BeforeFileReplacedEvent
{
    /**
     * @var FileInterface
     */
    private $file;

    /**
     * @var string
     */
    private $localFilePath;

    public function __construct(FileInterface $file, string $localFilePath)
    {
        $this->file = $file;
        $this->localFilePath = $localFilePath;
    }

    public function getFile(): FileInterface
    {
        return $this->file;
    }

    public function getLocalFilePath(): string
    {
        return $this->localFilePath;
    }
}
