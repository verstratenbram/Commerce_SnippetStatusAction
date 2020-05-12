<?php

$_lang['commerce_snippetstatusaction'] = 'Snippet Status Change Action';
$_lang['commerce_snippetstatusaction.description'] = 'Allows you to run a simple MODX snippet whenever a status change is executed. Saves you from having to write a custom extension, though you\'ll still need that snippet.';
$_lang['commerce_snippetstatusaction.instructions'] = 'After enabling the module, navigate to Configuration > Statuses and click on the name of the status change you want to add the action to. Choose to add a <code>Run a Snippet</code> Status Change Action, and enter the name of the snippet in the configuration.';
$_lang['commerce.add_SnippetStatusChangeAction'] = 'Run a Snippet';
$_lang['commerce.SnippetStatusChangeAction'] = 'Run a Snippet';
$_lang['commerce_snippetstatusaction.snippet'] = 'Snippet name';
$_lang['commerce_snippetstatusaction.snippet.desc'] = 'The name of the snippet to run. The snippet will get access to variables: <code>[<a href="https://docs.modmore.com/en/Commerce/v1/Class_Reference/Model/comOrder.html" target="_blank" rel="noopener">comOrder</a>] $order</code>, <code>[<a href="https://docs.modmore.com/en/Commerce/v1/Class_Reference/Model/comStatus.html" target="_blank" rel="noopener">comStatus</a>] $oldStatus</code>, <code>[<a href="https://docs.modmore.com/en/Commerce/v1/Class_Reference/Model/comStatus.html" target="_blank" rel="noopener">comStatus</a>] $newStatus</code>, <code>[<a href="https://docs.modmore.com/en/Commerce/v1/Class_Reference/Model/comStatusChange.html" target="_blank" rel="noopener">comStatusChange</a>] $statusChange</code>, <code>[Commerce] $commerce</code>, and <code>[<a href="https://docs.modmore.com/en/Commerce/v1/Developer/MODX_Adapter.html" target="_blank" rel="noopener">AdapterInterface</a>] $adapter</code>';
$_lang['commerce_snippetstatusaction.snippet_nf'] = 'Cannot find a snippet with that name.';
