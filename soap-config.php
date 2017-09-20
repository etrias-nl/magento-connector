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

use Phpro\SoapClient\CodeGenerator\Assembler;
use Phpro\SoapClient\CodeGenerator\Config\Config;
use Phpro\SoapClient\CodeGenerator\Rules;
use Phpro\SoapClient\Wsdl\Provider\GuzzleWsdlProvider;
use Zend\Code\Generator\PropertyGenerator;

$guzzleClient = new \GuzzleHttp\Client([
    'verify' => false,
]);

return Config::create()
    ->setSoapOptions([
        'stream_context' => stream_context_create([
            'ssl' => [
                'verify_peer' => false,
            ],
        ]),
    ])
    ->setWsdl('https://www.etrias.nl.dev/index.php/api/v2_soap/?wsdl')
    ->setWsdlProvider(GuzzleWsdlProvider::createForClient($guzzleClient))
    ->setDestination('src/SoapTypes')
    ->setNamespace('\\Etrias\\MagentoConnector\\SoapTypes')
    ->setRuleSet(
        new Rules\RuleSet(
            [
                new Rules\AssembleRule(new Assembler\PropertyAssembler(PropertyGenerator::VISIBILITY_PROTECTED)),
                new Rules\AssembleRule(new Assembler\ClassMapAssembler()),
                new Rules\TypenameMatchesRule(new Rules\AssembleRule(new Assembler\RequestAssembler()), '/Request$/'),
                new Rules\TypenameMatchesRule(new Rules\AssembleRule(new Assembler\ResultAssembler()), '/Response$/'),
                new Rules\MultiRule([
                    new Rules\AssembleRule(new Assembler\GetterAssembler()),
                    new Rules\AssembleRule(new Assembler\SetterAssembler()),
                    new Rules\AssembleRule(new Assembler\FluentSetterAssembler()),
                    new Rules\AssembleRule(new Assembler\ConstructorAssembler()),
                ]),
            ]
        )
    )

;
