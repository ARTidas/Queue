<?php

    $do = new TaskTypeDo();
    $do_list = $bo->getList();

    /*if (isset($_POST['create']) && $_POST['create'] === 'Create') {
        $do->name = $_POST['name'];

        LogHelper::addConfirmation('Created record with id: #' . $bo->create($do));
    }*/

    $view = new TaskTypeModifyView(
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