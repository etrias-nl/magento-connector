<?php

declare(strict_types = 1);

/*
 * This file is part of PHP CS Fixer.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *     Dariusz Rumiński <dariusz.ruminski@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Etrias\MagentoConnector\SoapTypes;

class Attribute
{
    const FRONTEND_TYPE_SELECT = 'select';
    const FRONTEND_TYPE_TEXT = 'text';
    const FRONTEND_TYPE_DATE = 'date';
    const FRONTEND_TYPE_HIDDEN = 'hidden';
    const FRONTEND_TYPE_MILTILINE = 'multiline';
    const FRONTEND_TYPE_BOOLEAN = 'boolean';
    const FRONTEND_TYPE_TEXTAREA = 'textarea';
    const FRONTEND_TYPE_IMAGE = 'image';
    const FRONTEND_TYPE_MULTISELECT = 'multiselect';
    const FRONTEND_TYPE_PRICE = 'price';
    const FRONTEND_TYPE_WEIGHT = 'weight';
    const FRONTEND_TYPE_MEDIA_IMAGE = 'media_image';
    const FRONTEND_TYPE_GALLERY = 'gallery';
}
