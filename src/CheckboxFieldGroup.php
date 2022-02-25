<?php

namespace Fromholdio\CheckboxFieldGroup;

use SilverStripe\Forms\CheckboxField;
use SilverStripe\Forms\FieldGroup;

class CheckboxFieldGroup extends FieldGroup
{
    public function __construct(
        string $name,
        ?string $title = null,
        ?string $groupTitle = null,
        ?bool $value = false
    ) {
        $checkboxField = CheckboxField::create($name, $title, $value);
        parent::__construct($checkboxField);
        $this->setName($name . 'Group');
        if (!empty($groupTitle)) {
            $this->setTitle($groupTitle);
        }
    }
}
