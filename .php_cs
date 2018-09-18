<?php
$finder = PhpCsFixer\Finder::create()
    ->exclude('vendor')
    ->in(__DIR__)
;

return PhpCsFixer\Config::create()
    ->setRules([
        // '@Symfony' => true,
        'concat_space' => [
            'spacing' => 'none',
        ],
        'blank_line_after_namespace'                 => true,
        'method_argument_space'                      => true,
        'no_leading_namespace_whitespace'            => true,
        'no_singleline_whitespace_before_semicolons' => true,
        'no_spaces_after_function_name'              => true,
        'no_spaces_around_offset'                    => true,
        'no_spaces_inside_parenthesis'               => true,
        'not_operator_with_successor_space'          => true,
        'no_trailing_comma_in_singleline_array'      => true,
        'no_trailing_whitespace'                     => true,
        'no_trailing_whitespace_in_comment'          => true,
        'no_unused_imports'                          => true,
        'no_whitespace_before_comma_in_array'        => true,
        'method_chaining_indentation'                => true,
        'no_whitespace_in_blank_line'                => true,
        'object_operator_without_whitespace'         => true,
        'ordered_imports'                            => true,
        'single_blank_line_before_namespace'         => true,
        'single_line_after_imports'                  => true,
        'single_quote'                               => true,
        'switch_case_space'                          => true,
        'ternary_operator_spaces'                    => true,
        'ternary_to_null_coalescing'                 => true,
        'trailing_comma_in_multiline_array'          => true,
        'trim_array_spaces'                          => true,
        'unary_operator_spaces'                      => true,
        'whitespace_after_comma_in_array'            => true,
        'align_multiline_comment'                    => [
            'comment_type' => 'all_multiline',
        ],
        'binary_operator_spaces' => [
            'default'   => 'align_single_space_minimal',
            'operators' => [
            ],
        ],
    ])
;
