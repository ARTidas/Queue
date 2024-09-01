<?php

	/* ********************************************************
	 * ********************************************************
	 * ********************************************************/
	class TaskTypeListView extends AbstractView {

        /* ********************************************************
         * ********************************************************
         * ********************************************************/
        public function displayContent() {
			?>
				<table>
                    <thead>
                        <tr>
                            <?php
                                foreach ((new TaskTypeDo)->getAttributes() as $key => $value) {
                                    if (ActorHelper::isAttributeRequiredForList($key)) {
                                        print('<th>' . $key . '</th>');
                                    }
                                }
                            ?>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            foreach ($this->do->do_list as $do) {
                                print('<tr>');
                                    foreach ($do->getAttributes() as $key => $value) {
                                        if (ActorHelper::isAttributeRequiredForList($key)) {
                                            print('<td>' . $value . '</td>');
                                        }
                                    }
                                print('</tr>');
                            }
                        ?>
                    </tbody>
                </table>
			<?php
		}

    }

?>