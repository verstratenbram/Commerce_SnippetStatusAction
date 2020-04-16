<?php

use modmore\Commerce\Admin\Widgets\Form\DescriptionField;
use modmore\Commerce\Admin\Widgets\Form\TextField;
use modmore\Commerce\Admin\Widgets\Form\Validation\Required;
use modmore\Commerce_SnippetStatusAction\Validation\SnippetWithNameExists;

/**
 * SnippetStatusAction for Commerce.
 *
 * Copyright 2020 by Mark Hamstra <mark@modmore.com>
 *
 * This file is meant to be used with Commerce by modmore. A valid Commerce license is required.
 *
 * @package commerce_snippetstatusaction
 * @license See core/components/commerce_snippetstatusaction/docs/license.txt
 */
class SnippetStatusChangeAction extends comStatusChangeAction
{
    public function getModelFields()
    {
        $fields = parent::getModelFields();
        
        $fields[] = new TextField($this->commerce, [
            'label' => $this->adapter->lexicon('commerce_snippetstatusaction.snippet'),
            'name' => 'properties[snippet]',
            'value' => $this->getProperty('snippet'),
            'validation' => [
                new Required(),
                new SnippetWithNameExists($this->adapter)
            ]
        ]);

        $fields[] = new DescriptionField($this->commerce, [
            'description' => $this->adapter->lexicon('commerce_snippetstatusaction.snippet.desc'),
            'raw' => true,
        ]);

        return $fields;
    }

    public function process(comOrder $order, comStatus $oldStatus, comStatus $newStatus, comStatusChange $statusChange)
    {
        $snippet = (string)$this->getProperty('snippet');

        /**
         * This is BAD, BAD, BAD! Whenever the Commerce class no longer exposes this property, or something changes,
         * this is definitely going to break.
         *
         * Unfortunately I have no interest in exposing runSnippet in the adapter, so... deal with it when it breaks.
         */
        $this->commerce->modx->runSnippet($snippet, [
            'order' => $order,
            'oldStatus' => $oldStatus,
            'newStatus' => $newStatus,
            'statusChange' => $statusChange,
            'commerce' => $this->commerce,
            'adapter' => $this->adapter,
        ]);
        return true;
    }
}
