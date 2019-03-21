<?php

declare(strict_types=1);

/*
 * This file is part of the Sonata Project package.
 *
 * (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sonata\MediaBundle\Generator;

use Sonata\MediaBundle\Model\MediaInterface;

class DefaultGenerator implements GeneratorInterface
{
    /**
     * {@inheritdoc}
     */
    public function generatePath(MediaInterface $media):string
    {
        $rep_first_level = 0;
        $rep_second_level = 0;

        return sprintf('%s/%04s/%02s', $media->getContext(), $rep_first_level + 1, $rep_second_level + 1);
    }
}
