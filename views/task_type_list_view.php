<?php

	/* ********************************************************
	 * ********************************************************
	 * ********************************************************/
	class TaskTypeListView extends ProjectAbstractView {

        /* ********************************************************
         * ********************************************************
         * ********************************************************/
        public function displayContent() {
			?>
				<table>
                    <thead>
                        <tr>
                            <?php
                                foreach ($this->do->do_list[0]->getAttributes() as $key => $value) {
                                    if ($key !== 'class_actor') {
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
                                        if ($key !== 'class_actor') {
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