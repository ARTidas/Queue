<?php

	/* ********************************************************
	 * ********************************************************
	 * ********************************************************/
	abstract class ProjectAbstractView extends AbstractView {

        /* ********************************************************
         * ********************************************************
         * ********************************************************/
        public function displayMenu() {
			?>
                <div class="box">
                    <?php
                        print(RequestHelper::$project_name . ' > ' . RequestHelper::$actor_name . ' > ' . RequestHelper::$actor_action);
                    ?>
                </div>

				<section id="menu">
                    <nav>
                        <a href="<?php print(RequestHelper::$url_root); ?>">Main</a>
                        <a href="<?php print(RequestHelper::$url_domain); ?>">PTI Main</a>

                        <div>
                            <button>Task types</button>
                            <div>
                                <a href="<?php print(RequestHelper::$url_root); ?>/task_type/list">List</a>
                                <a href="<?php print(RequestHelper::$url_root); ?>/task_type/create">Create</a>
                                <a href="<?php print(RequestHelper::$url_root); ?>/task_type/modify">Modify</a>
                            </div>
                        </div>

                        <div>
                            <button>Tasks</button>
                            <div>
                                <a href="<?php print(RequestHelper::$url_root); ?>/task/list">List</a>
                                <a href="<?php print(RequestHelper::$url_root); ?>/task/create">Create</a>
                                <a href="<?php print(RequestHelper::$url_root); ?>/task/modify">Modify</a>
                            </div>
                        </div>

                        <div>
                            <button>Task executions</button>
                            <div>
                                <a href="<?php print(RequestHelper::$url_root); ?>/task_execution/list">List</a>
                            </div>
                        </div>

                    </nav>
                </section>

                
			<?php
		}

    }

?>