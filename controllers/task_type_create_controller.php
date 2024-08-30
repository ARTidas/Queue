<?php

    $do = new TaskTypeDo();

    if (isset($_POST['create']) && $_POST['create'] === 'Create') {
        $do->name = $_POST['name'];

        LogHelper::addConfirmation('Created record with id: #' . $bo->create($do));
    }

    $view = new TaskTypeCreateView(
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