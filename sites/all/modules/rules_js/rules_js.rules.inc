<?php

/**
 * @file
 * Provides a rules action to execute JavaScript code.
 */

/**
 * Implement hook_rules_action_info().
 */
function rules_js_rules_action_info() {
  $actions = array(
    'rules_js_action_execute_js' => array(
      'label' => t('Execute custom JavaScript code'),
      'group' => t('Rules JS'),
      'parameter' => array(
        'code' => array(
          'restriction' => 'input',
          'type' => 'text',
          'label' => t('JavaScript code'),
          'description' => t("Enter JavaScript code. Don't include <strong>&lt;script&gt;</strong> tag."),
        ),
       'group' => array(
          'type' => 'text',
          'label' => t('JavaScript group'),
          'description' => t('Enter the position you put this code in.'),
           'restriction' => 'input',
          'options list' => 'rules_js_get_all_js_group',
          'default value' => JS_DEFAULT,
          'restriction' => 'input',
        ),
      ),
    ),
  );

  return $actions;
}

/**
 * Action: Executes a JavaScript code.
 */
function rules_js_action_execute_js($code, $group) {
  $_SESSION['rules_js_code'][] = array($code, array(
    'type' => 'inline',
    'group' => $group,
  ));
}

/**
 * Option list: Provides a list of JavaScript groups.
*/
function rules_js_get_all_js_group() {
  return array(
    JS_LIBRARY => "JS_LIBRARY: Any libraries, settings, or jQuery plugins.",
    JS_DEFAULT => "JS_DEFAULT: Any module-layer JavaScript.",
    JS_THEME => "JS_THEME: Any theme-layer JavaScript.",
  );
}