<?php

namespace Exia\Standards\PhpCsFixer;

use PhpCsFixer\Config as BaseConfig;

class Config extends BaseConfig
{
    /**
     * Config Constructor.
     */
    public function __construct()
    {
        parent::__construct();

        $this->setFinder(new Finder())->setRules([
            '@Symfony' => true,
            '@Symfony:risky' => true,
            'array_syntax' => ['syntax' => 'short'],
            'is_null' => ['use_yoda_style' => false],
            'no_empty_comment' => false,
            'ordered_imports' => [ 'sort_algorithm' => 'length' ],
            'phpdoc_trim_consecutive_blank_line_separation' => true,
            'phpdoc_var_annotation_correct_order' => true,
            'psr4' => false,
            'single_trait_insert_per_statement' => false,
            'yoda_style' => false,
        ]);
    }

    /**
     * Merge the given rules with the default rules.
     *
     * @param array $rules
     *
     * @return $this
     */
    public function setCustomRules(array $rules)
    {
        $rules = array_merge($this->getRules(), $rules);

        return $this->setRules($rules);
    }
}
