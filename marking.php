<?php
$arMarking = [
    "task" => [
        "start" => '<div class="task-info-panel-title"><input data-bx-id="task-edit-title" type="text" name="ACTION[0][ARGUMENTS][data][TITLE]" value="',
        "end" => '" placeholder="Введите название задачи" wfd-id="id65"></div>'
    ],
    "taskText" => [
        "start" => '<div class="" id="bx-html-editor-ta-cnt-livefeed_task_form" style="width: 914px; height: 157px; top: 0px; left: 0px; opacity: 1;"><textarea class="bxhtmled-textarea">',
        "end" => '</textarea></div>'
    ],
    "element" => [
        "start" => '
            <div data-bx-id="task-edit-se-relatedtask-block-place" data-block-name="SE_RELATEDTASK" data-group-id="0" class="task-edit-block-place ">										
                <div data-bx-id="task-edit-se-relatedtask-block" data-block-name="SE_RELATEDTASK" class="pinable-block task-options-item task-options-item-se-relatedtask">
                    <span class="task-options-item-param">',
        "afterTitle" => '
            </span>
            <div class="task-options-item-open-inner">
                <span id="bx-component-scope-dependson-livefeed_task_form" class="task-options-destination-wrap t-filled task-item-set-empty-false">
                    <span data-bx-id="task-item-set-items">',
        "itemStart" => '
            <span data-bx-id="task-item-set-item" data-item-value="2" class="task-inline-selector-item" style="">
                <span class="task-options-destination task-options-destination-all-users">
                    <input type="hidden" name="ACTION[0][ARGUMENTS][data][SE_RELATEDTASK][2][ID]" value="2">
                    <a href="/company/personal/user/1/tasks/task/view/2/" target="_blank" class="task-options-destination-text">',
        "itemEnd" => '
                    </a>
                    <span data-bx-id="task-item-set-item-delete" class="task-option-inp-del" title="Удалить"></span>
                </span>
            </span>',
        "afterItems" => '
                    </span>
                    <span class="task-inline-selector-item">
                        <a href="javascript:void(0)" data-bx-id="task-item-set-open-form" class="feed-add-destination-link">
                            <span class="task-item-set-empty-block-off">+ Добавить</span>
                            <span class="task-item-set-empty-block-on">',
        "afterButton" => '
                            </span>
                        </a>
                    </span>
                    <input type="hidden" name="ACTION[0][ARGUMENTS][data][SE_RELATEDTASK][]" value="" wfd-id="id172">
                </span>
            </div>',
        "extraButtonStart" => '
            <div class="" style="margin-left:24px; display:inline-block;">
                <a class="js-id-add-project" href="/company/personal/user/1/groups/create/?firstRow=project&amp;refresh=N">',
        "extraButtonEnd" => '
                </a>
            </div>
        ',
        "end" => '
                </div>
            </div>
        '
    ],
    "checkbox" => [
        "start" => '
            <div data-bx-id="task-edit-se-require-result-block-place" class="task-edit-block-place">
                <div data-bx-id="task-edit-se-require-result-block" data-block-name="SE_REQUIRE_RESULT" class="pinable-block task-options-item task-options-item-se-require-result">
                    <span class="task-options-item-param">',
        "afterTitle" =>
                    '</span>
                    <div class="task-options-item-open-inner">
                        <div class="tasks">
                            <label class="task-field-label task-field-label-tm">
                                <input class="task-options-checkbox" data-bx-id="task-edit-flag" data-target="task-param-3" data-flag-name="TASK_PARAM_3" type="checkbox" wfd-id="id109"',
        "isChecked" => '>',
        "end" => '									
                                <input data-bx-id="task-edit-task-param-3" type="hidden" name="ACTION[0][ARGUMENTS][data][SE_PARAMETER][3][VALUE]" value="N" wfd-id="id110">
                                <input type="hidden" name="ACTION[0][ARGUMENTS][data][SE_PARAMETER][3][ID]" value="0" wfd-id="id111">
                                <input type="hidden" name="ACTION[0][ARGUMENTS][data][SE_PARAMETER][3][CODE]" value="3" wfd-id="id112">
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        '
    ],
    "deadline" => [
        "start" => '
            <div>
                <div data-bx-id="task-edit-date-plan-manager" class="mode-unit-selected-days task-options-item task-options-item-open">
                    <span class="task-options-item-param">',
        "afterTitle" => '
            </span>
            <span class="task-options-destination-wrap date">
                <span data-bx-id="dateplanmanager-deadline" class="task-options-inp-container task-options-date">
                    <input data-bx-id="datepicker-display" type="text" class="task-options-inp" value="',
        "afterValue" => '
                    " readonly="readonly" wfd-id="id83">
                    <span data-bx-id="datepicker-clear" class="task-option-inp-del"></span>
                    <input data-bx-id="datepicker-value" type="hidden" name="ACTION[0][ARGUMENTS][data][DEADLINE]" value="" wfd-id="id84">
                </span>
            </span>	
            <span class="task-dashed-link task-dashed-link-terms task-dashed-link-add">',
        "buttonStart" => '
            <span class="task-dashed-link-inner" data-bx-id="task-edit-toggler" data-target="">',
        "buttonEnd" => '
            </span>',
        "end" => '
                    </span>		
                </div>
            </div>'
    ],
    "reminder" => [
        "start" => '
            <div data-bx-id="task-edit-se-reminder-block-place" data-block-name="SE_REMINDER" data-group-id="0" class="task-edit-block-place ">											
				<div data-bx-id="task-edit-se-reminder-block" data-block-name="SE_REMINDER" class="pinable-block task-options-item task-options-item-se-reminder">
                    <span data-bx-id="task-edit-chooser" data-target="se-reminder-block" class="task-option-fixedbtn" title="Включить/выключить постоянное отображение блока"></span>
					<span class="task-options-item-param">',
        "afterTitle" => '
            </span>
            <div class="task-options-item-open-inner">
                <div class="task-options-reminder">
                    <div id="bx-component-scope-reminder-livefeed_task_form" class="t-filled reminder-empty-false">
                    <div data-bx-id="reminder-items">',
        "itemStart" => '
            <span data-bx-id="reminder-item" data-item-value="1" class="task-reminder-container" style="">
                <span data-bx-id="item-info" class="task-reminder-info transport-j">
                    <span data-bx-id="item-edit" class="task-reminder-info-text">',
        "itemEnd" => '
                    </span>
                    <span data-bx-id="reminder-item-delete" class="task-reminder-inp-del" title="Удалить"></span>
                </span>
            </span>',
        "end" => '
                                </div>
                                <div class="task-dashed-link">
                                    + 
                                    <span data-bx-id="reminder-open-form" class="task-dashed-link-inner">Добавить напоминание</span>
                                    <span class="task-field-label">сообщением или по e-mail</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>'
    ]
];