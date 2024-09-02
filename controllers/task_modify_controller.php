<?php

    $do = new (RequestHelper::$actor_class_name . 'Do');

    if (isset($_POST['modify']) && $_POST['modify'] === 'Modify') {
        //TODO: Make this abstract!!!
        $do->id                 = $_POST['id'];
        $do->task_type_id       = $_POST['task_type_id'];
        $do->name               = $_POST['name'];
        $do->description        = $_POST['description'];
        $do->last_executed_at   = $_POST['last_executed_at'];
        $do->script             = $_POST['script'];
        $do->is_active          = $_POST['is_active'];
        
        LogHelper::addMessage('Modifying record with id: #' . $do->id);

        if ($bo->update($do)) {
            LogHelper::addConfirmation('Record updated successfully...');
        }
        else {
            LogHelper::addWarning('Modification failed!');
        }
    }

    $do_list = $bo->getList();

    if (isset($_POST['select']) && $_POST['select'] === 'Select') {
        $do->id = $_POST['id'];
        LogHelper::addMessage('Retrieving record with id: #' . $do->id);

        $do = $bo->get($do);
    }

    $view = new (RequestHelper::$actor_class_name . 'ModifyView')(
        new ViewDo(
            RequestHelper::$project_name . ' > ' . RequestHelper::$actor_name . ' > ' . RequestHelper::$actor_action,
            'DESCRIPTION - ' . RequestHelper::$project_name . ' > ' . RequestHelper::$actor_name . ' > ' . RequestHelper::$actor_action,
            $do_list,
            $do
        ),
    );

    $view->displayHTMLOpen();
    $view->displayHeader();
    $view->displayMenu();
    $view->displayContent();
    $view->displayFooter();
    $view->displayLogs();
    $view->displayHTMLClose();

?>