<?php

    /* ********************************************************
	 * *** Models *********************************************
	 * ********************************************************/

        /* ********************************************************
         * *** Business Objects ***********************************
         * ********************************************************/
        require(RequestHelper::$common_file_root . '/models/bos/mariadb_database_connection_bo.php');
        require(RequestHelper::$common_file_root . '/models/bos/abstract_bo.php');
        require(RequestHelper::$common_file_root . '/models/bos/security_bo.php');
        require(RequestHelper::$common_file_root . '/models/bos/user_bo.php');
        require(RequestHelper::$common_file_root . '/models/bos/permission_bo.php');
        require(RequestHelper::$file_root . '/models/bos/task_type_bo.php');
        require(RequestHelper::$file_root . '/models/bos/task_bo.php');
        require(RequestHelper::$file_root . '/models/bos/task_execution_bo.php');

        /* ********************************************************
         * *** Data Access Objects ********************************
         * ********************************************************/
        require(RequestHelper::$common_file_root . '/models/daos/abstract_dao.php');
        require(RequestHelper::$common_file_root . '/models/daos/user_dao.php');
        require(RequestHelper::$common_file_root . '/models/daos/permission_dao.php');
        require(RequestHelper::$file_root . '/models/daos/task_type_dao.php');
        require(RequestHelper::$file_root . '/models/daos/task_dao.php');
        require(RequestHelper::$file_root . '/models/daos/task_execution_dao.php');

        /* ********************************************************
         * *** Data Objects ***************************************
         * ********************************************************/
        require(RequestHelper::$common_file_root . '/models/dos/view_do.php');
        require(RequestHelper::$common_file_root . '/models/dos/abstract_do.php');
        require(RequestHelper::$common_file_root . '/models/dos/user_do.php');
        require(RequestHelper::$common_file_root . '/models/dos/permission_do.php');
        require(RequestHelper::$file_root . '/models/dos/task_type_do.php');
        require(RequestHelper::$file_root . '/models/dos/task_do.php');
        require(RequestHelper::$file_root . '/models/dos/task_execution_do.php');

        /* ********************************************************
         * *** Helpers ********************************************
         * ********************************************************/
        require(RequestHelper::$common_file_root . '/models/helpers/log_helper.php');
        require(RequestHelper::$common_file_root . '/models/helpers/actor_helper.php'); //TODO: Do we need this?
        require(RequestHelper::$common_file_root . '/models/helpers/string_helper.php');
        require(RequestHelper::$common_file_root . '/models/helpers/permission_helper.php');

        /* ********************************************************
         * *** Factories ******************************************
         * ********************************************************/
        require(RequestHelper::$common_file_root . '/models/factories/bo_factory.php');
        require(RequestHelper::$common_file_root . '/models/factories/dao_factory.php');
        require(RequestHelper::$common_file_root . '/models/factories/do_factory.php');


    /* ********************************************************
	 * *** Views **********************************************
	 * ********************************************************/
    require(RequestHelper::$common_file_root . '/views/abstract_view.php');
    require(RequestHelper::$file_root . '/views/project_abstract_view.php');
    require(RequestHelper::$file_root . '/views/index_view.php');
    require(RequestHelper::$file_root . '/views/task_type_list_view.php');
    require(RequestHelper::$file_root . '/views/task_type_create_view.php');
    require(RequestHelper::$file_root . '/views/task_type_modify_view.php');
    require(RequestHelper::$file_root . '/views/task_list_view.php');
    require(RequestHelper::$file_root . '/views/task_create_view.php');
    require(RequestHelper::$file_root . '/views/task_modify_view.php');
    require(RequestHelper::$file_root . '/views/task_execution_list_view.php');

?>