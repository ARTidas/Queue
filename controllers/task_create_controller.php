<?php

    if (
        //!PermissionHelper::isUserAuthorized('Demonstrator') &&
        !PermissionHelper::isUserAuthorized('NewsWatch administrator')
    ) {
        LogHelper::addWarning('Not authorized...');
        header('Location: ' . RequestHelper::$common_url_root . '/user_permission/request');
        exit();
    }
    else {
        LogHelper::addMessage('User authorized...');
    }

    $do = new (RequestHelper::$actor_class_name . 'Do');

    if (isset($_POST['create']) && $_POST['create'] === 'Create') {
        //TODO: Abstract attribute assignments...
        $do->task_type_id   = $_POST['task_type_id'];
        $do->name           = $_POST['name'];
        $do->description    = $_POST['description'];
        $do->script         = $_POST['script'];

        LogHelper::addConfirmation('Created record with id: #' . $bo->create($do));
    }

    $view = new (RequestHelper::$actor_class_name . 'CreateView')(
        new ViewDo(
            RequestHelper::$project_name . ' > ' . RequestHelper::$actor_name . ' > ' . RequestHelper::$actor_action,
            'DESCRIPTION - ' . RequestHelper::$project_name . ' > ' . RequestHelper::$actor_name . ' > ' . RequestHelper::$actor_action,
            null,
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