<?php

namespace Admingenerator\GeneratorBundle\Builder\Admin;

/**
 * This builder generate form for edit actions
 * @author cedric Lombardot
 */
class EditBuilderType extends EditBuilder
{
    public function getOutputName()
    {
        return 'Form/BaseType/EditType.php';
    }
}